<?php

namespace App\Helpers;
use Illuminate\Support\Str;
class Helper{
    public static function menu($menus,$parent_id = 0,$char = ''){
        $html = '';
        foreach($menus as $key => $menu){
            if($menu->parent_id == $parent_id){
                $html .= 
                '<tr>
                    <td>'.$menu->id.'</td>
                    <td>'.$char.$menu->name.'</td>
                    <td>'.self::active($menu->active).'</td>
                    <td>'.$menu->updated_at.'</td>
                    <td> 
                        <a href = "/admin/menus/edit/'.$menu->id.'" class = "btn btn-primary btn-sm">
                            <i class="fas fa-edit"></i>

                        </a>
                        <a href = "#" class = "btn btn-danger btn-sm" onclick = "removeRow('.$menu->id.',\'/admin/menus/destroy\')" >
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>';
                unset($menus[$key]); 
                $html .= self::menu($menus,$menu->id,$char .'--');
            }
        }
        return $html;
    }

    public static function active($active = 0): string{
        return $active == 0 ? '<span class = "btn btn-danger btn-xs">NO</span>':
        '<span class="btn btn-success btn-xs">YES</span>';
    }

    public static function menus($menus, $parent_id = 0){
        $html = '';
        foreach ($menus as $key => $menu) {
            if ($menu->parent_id == $parent_id) {
                $html .= '
                    <li class="menu__item mega tp_menu_item">
                        <a href="/danh-muc/' . $menu->id . '-' .Str::slug($menu->name, '-') . '.html">
                            ' . $menu->name . '
                        </a>
                        <div class="menu__content">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="menu-flex">';
                                                   
                                                     

                unset($menus[$key]);

                if (self::isChild($menus, $menu->id)) {
                    $html .= '<ul class="menu__item third ">
                    <li class="menu__item third ">
                    <a href="/nike-jordan-pc569807.html"
                                                                    class="menu__link">
                  ';
                    $html .= self::menus($menus, $menu->id);
                    $html .= '</ul>';
                }

                $html .= '</li>';
            }
        }

        return $html;
    }

    public static function isChild($menus, $id) : bool
    {
        foreach ($menus as $menu) {
            if ($menu->parent_id == $id) {
                return true;
            }
        }

        return false;
    }
    public static function price($price = 0, $priceSale = 0)
    {
        if ($priceSale != 0) return number_format($priceSale);
        if ($price != 0)  return number_format($price);
        return '<a href="/lien-he.html">Liên Hệ</a>';
    }
}