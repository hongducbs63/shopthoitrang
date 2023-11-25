<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CartService;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $cartService;
    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index(Request $request){
        $result = $this->cartService->create($request);
        // dd(Session::get('carts'));
        if($result == false){
            return redirect()->back();
        }
        return redirect(('/carts'));
    }

    public function show()
    {
        $products = $this->cartService->getProduct();
        // dd(Session::get('size'));
        return view('carts.list', [
            'title' => 'Giỏ Hàng',
            'products' => $products,
            'carts' => Session::get('carts'),
            'size' =>Session::get('size'),
        ]);
    }
    
    public function update(Request $request){
       $this->cartService->update($request);
       return redirect(('/carts'));
    }
    public function delete($id){
        $this->cartService->delete($id);
        return redirect(('/carts'));
     }
    public function addCart(Request $request){
        $this->cartService->addCart($request);
        return redirect(('/carts'));
     }
}
