<?php

namespace App\Http\Controllers\Corporate;

use Illuminate\Http\Request;
use App\Models\blog\category;
use App\Http\Controllers\Controller;
use App\Models\Pagebuilder\Custompage;
use App\Models\Service\Servicecategory;
use Illuminate\Support\Facades\Artisan;

class HomepageController extends Controller
{
    public function index()
    {
        // $categories = category::all();

        // $randomvideos = Video::where('type','=','Random Video')->get();
        // $othersvideos = Video::where('type','=','Others Video')->get();
        // $banner_img  = Slide::where([['type','home-banner'],['status',true]])->orderBy('id','desc')->first();
        // $notices = Notice::all();
        // $links = Link::where('status',1)->orderBy('id','desc')->limit(5)->get();
        // $posts = Post::where('scrollable',1)->orderBy('id','desc')->limit(5)->get();

        $page = Custompage::where([['type','=','main-page'],['status','=',true]])->orderBy('id','desc')->first();
        foreach($page->pagebuilders as $test)
        {
            foreach($test->elements as $tes)
            {
                if($tes->module_type == 'Blog Category')
                {
                    $blogcategories = category::all();
                }
                elseif($tes->module_type == 'Service Category')
                {
                    $blogcategorie = Servicecategory::all();
                }
            }

        }
        //$page->pagebuilders->elements
        Artisan::call('cache:clear');

        return view('frontend_theme.corporate.homepage',compact('page','blogcategories','blogcategorie'));
    }
}
