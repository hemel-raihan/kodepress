<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog\category;
use App\Models\Admin\Slide\Slide;
use App\Models\Frontmenu\Frontmenu;
use App\Models\Frontmenu\Frontmenuitem;

class HomepageController extends Controller
{
    public function index()
    {
        $categories = category::all();
        return view('frontend_theme.default.homepage',compact('categories'));
    }

    public function single()
    {
        return view('frontend_theme.default.front_layout.test');
    }
}
