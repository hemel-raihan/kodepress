<?php

namespace App\Http\Controllers\Corporate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pagebuilder\Custompage;
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
        Artisan::call('cache:clear');

        return view('frontend_theme.corporate.homepage',compact('page'));
    }
}
