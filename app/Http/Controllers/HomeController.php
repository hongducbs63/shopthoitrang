<?php

namespace App\Http\Controllers;

use App\Http\Services\Product\ProductService;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $product;
    public function __construct(ProductService $product)
    {
        $this->product = $product;
    }
    public function index(){

        return view('home',[
            'products' => $this->product->get(),
        ]);
    }

    public function show(Product $product){
        
    }
}
