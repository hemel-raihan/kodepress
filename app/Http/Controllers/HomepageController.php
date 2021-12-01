<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Slide\Slide;
use App\Models\Frontmenu\Frontmenu;
use App\Models\Frontmenu\Frontmenuitem;

class HomepageController extends Controller
{
    public function index()
    {
        $slides = Slide::get();
        $menus = Frontmenu::where([['type','=','main-menu'],['status','=',true]])->get();
        foreach($menus as $menu)
        {
            $menuitems = $menu->menuItems()->get();
        }
        //$menuitems = Frontmenuitem::where('parent_id', '=', 0)->get();
        return view('frontend_theme.default.homepage',compact('slides','menuitems'));
    }
}
