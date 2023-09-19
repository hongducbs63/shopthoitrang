<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request){
        // dd($request->input());
        return view('admin.home',[
            'title'=>'Trang chu Admin',
        ]);
    }
}
