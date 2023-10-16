<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\RequestFormMenu;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;
use App\Models\Menu;

class MenuController extends Controller
{
    //
    protected $menuService;
    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;

    }
    public function create(){
        return view('admin.menu.add',[
            'title'=>'Thêm danh mục',
            'menus' => $this->menuService->getParent(),
        ]);
    }
    public function store(RequestFormMenu $request){
    //    dd($request->input());
        $result = $this->menuService->create($request);
        return redirect()->back();
    }
    public function index(){
        // dd($this->menuService->getAll());

        return view('admin.menu.list',[
            'title' => 'Danh sách Danh mục mới nhất',
            'menus' => $this->menuService->getAll(),
        ]);
    }

    public function destroy(Request $request){
        // dd($request->input('id'));
        $result = $this->menuService->destroy($request);    
        if($result){
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công danh mục',
            ]
                
            );
        }
        return response()->json([
            'error'=> true,
        ]);
    }

    public function show(Menu $menu){
        dd($menu);
        return view('admin.menu.edit',[
            'title' => 'Chỉnh sửa danh mục'.$menu->name,
            'menus' => $menu,
            'menus' => $this->menuService->getAll(),

        ]);
    }
}
