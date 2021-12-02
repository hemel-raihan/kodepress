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

        $banner_img  = \App\Models\Admin\Slide\Slide::where([['type','home-banner'],['status',true]])->orderBy('id','desc')->first();
        $youtubecategories = category::where('slug','=','youtube-video')->get();

        return view('frontend_theme.default.homepage',compact('categories','youtubecategories','banner_img'));
    }

    public function single()
    {
        return view('frontend_theme.default.front_layout.test');
    }

    public function singlepage()
    {
        return view('single');
    }
}
