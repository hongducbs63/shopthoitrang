<?php

namespace App\Http\Services;

use App\Jobs\SendMail;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartService
{
    public function create($request){
        $sl = (int)$request->input('num_product');
        // dd($sl);
        $product_id = (int)$request->input('product_id');
        // dd($product_id);
        $size = $request->input('size');
        
        Session::put('size',[
            $product_id=>$size
        ]);
        if($sl<=0){
            Session::flash('error', 'Số lượng sản phẩm không chính xác');
            return false;
        }
        // Session::forget('carts');
        $carts = Session::get('carts');
        if (is_null($carts)) {
            Session::put('carts', [
                $product_id => $sl
            ]);
            return true;
        }

        $exists = Arr::exists($carts, $product_id);
        if ($exists) {
            $carts[$product_id] = $carts[$product_id] + $sl;
            Session::put('carts', $carts);
            return true;
        }

        $carts[$product_id] = $sl;
        Session::put('carts', $carts);

        return true;
    }

    public function getProduct()
    {
        $carts = Session::get('carts');
        if (is_null($carts)) return [];

        $productId = array_keys($carts);
        return Product::select('id', 'name', 'price', 'price_sale', 'thumb')
            ->where('active', 1)
            ->whereIn('id', $productId)
            ->get();
    }

    public function update($request){
        Session::put('carts', $request->input('num_product'));
        return true;
    }

    public function delete($id){
       $cart = Session::get('carts');
       unset($cart[$id]);
       Session::put('carts',$cart);
        return true;
    }

    public function addCart($request){
        try {
            DB::beginTransaction();
            $carts = Session::get('carts');
            if(is_null($carts)){
                return false;
            }
            $customer = Customer::create([
                'name'=>$request->input('name'),
                'phone'=>$request->input('phone'),
                'address'=>$request->input('address'),
                'email'=>$request->input('email'),
                'content'=>$request->input('content')
            ]);

            $this->infoProductCart($carts, $customer->id);

            DB::commit();
            Session::flash('success', 'Đặt Hàng Thành Công');
            SendMail::dispatch($request->input('email'))->delay(now()->addSeconds(2));
            Session::forget('carts');
        } catch (\Exception $err) {
            DB::rollBack();
            Session::flash('error', 'Đặt Hàng Lỗi, Vui lòng thử lại sau');
            return false;
        }
    }
    protected function infoProductCart($carts, $customer_id)
    {
        $productId = array_keys($carts);
        $products = Product::select('id', 'name', 'price', 'price_sale', 'thumb')
            ->where('active', 1)
            ->whereIn('id', $productId)
            ->get();

        $data = [];
        foreach ($products as $product) {
            $data[] = [
                'customer_id' => $customer_id,
                'product_id' => $product->id,
                'pty'   => $carts[$product->id],
                'price' => $product->price_sale != 0 ? $product->price_sale : $product->price
            ];
        }

        return Cart::insert($data);
    }
    public function getCustomer()
    {
        return Customer::orderBy('id')->get();
    }

    public function getProductForCart($customer)
    {
        return $customer->carts()->with(['product' => function ($query) {
            $query->select('id', 'name', 'thumb');
        }])->get();
    }

 
}