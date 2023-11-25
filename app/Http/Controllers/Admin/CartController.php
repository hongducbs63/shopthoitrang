<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\CartService;
use App\Models\Customer;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $cart;
    public function __construct(CartService $cartService){
        $this->cart = $cartService;
    }
    public function index(){
        return view('admin.carts.customer',[
            'title'=>'Danh sách đơn đặt hàng',
            'customers' =>$this->cart->getCustomer()
        ]);
    }
    public function show(Customer $customer){
        return view('admin.carts.detail',[
            'title'=>'Chi tiết đơn hàng',
            'customers' => $customer,
            'carts' =>$customer->cartr()->get()
        ]);
    }
}
