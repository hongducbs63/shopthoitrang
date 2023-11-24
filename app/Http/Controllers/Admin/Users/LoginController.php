<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        $title = 'admin';
        return view('admin.users.login',compact('title'));
    }

    public function store(Request $request){
        $request->validate([
            'email' =>'required|email',
            'password' => 'required|min:6',
        ],[
            'password.required' => 'Password bắt buộc phải nhập ',
            'password.min' =>'Password phải có từ :min ký tự trở lên',
            'email.required' => 'Email bắt buộc phải nhập',
            'email.email' => 'Email không đúng định dạng',
            // 'email.unique' => 'Email đã tồn tại trên hệ thống',
        ]);
        // echo $request->input('email');
        // dd($request->input());
        if(Auth::attempt([
            'email' =>$request->input('email'),
            'password' =>$request->input('password'),
        ], $request->input('remember'))){

            return redirect()->route('admin');
        }
        // Session::flash('errors','Email hoặc Password không đúng');
        return redirect()->back()->with('msg','Email hoặc Password chưa đúng');
        // dd($request->input());
        // return redirect()->route('admin');
        
    }
    public function add(){
        return view('admin.home');
    }

    
}
