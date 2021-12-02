<?php

namespace App\Http\Controllers;

use App\Models\Admin\Notice\Notice;
use App\Models\Admin\Video;
use Illuminate\Http\Request;
use App\Models\blog\category;
use App\Models\Admin\Slide\Slide;
use App\Models\Frontmenu\Frontmenu;
use App\Models\Frontmenu\Frontmenuitem;
use App\Models\general_content\Contentcategory;

class HomepageController extends Controller
{
    public function index()
    {
        $categories = category::all();

        $randomvideos = Video::where('type','=','Random Video')->get();
        $othersvideos = Video::where('type','=','Others Video')->get();
        $banner_img  = Slide::where([['type','home-banner'],['status',true]])->orderBy('id','desc')->first();
        $notices = Notice::all();

        // $proggaponcategories = Contentcategory::where('name','=','proggapon')->first();
        $proggaponcategories = Contentcategory::whereIn('name', ['proggapon', 'Niti-Mala'])->get();

        return view('frontend_theme.default.homepage',compact('categories','randomvideos','othersvideos','banner_img','proggaponcategories','notices'));
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
