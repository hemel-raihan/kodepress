<?php

namespace App\Http\Controllers;

use App\Models\Admin\Video;
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

        $banner_img  = \App\Models\Admin\Slide\Slide::where('type','home-banner')->orderBy('id','desc')->first();
        $randomvideos = Video::where('type','=','Random Video')->get();
        $othersvideos = Video::where('type','=','Others Video')->get();

        return view('frontend_theme.default.homepage',compact('categories','randomvideos','othersvideos','banner_img'));
    }

    public function single()
    {
        return view('frontend_theme.default.front_layout.test');
    }
}
