<?php

namespace App\Http\Controllers\Corporate;

use App\Models\blog\Post;
use Illuminate\Http\Request;
use App\Models\blog\category;
use App\Models\Service\Service;
use App\Models\Portfolio\Portfolio;
use App\Models\Pricing_Table\Price;
use App\Http\Controllers\Controller;
use App\Models\Pagebuilder\Custompage;
use App\Models\Service\Servicecategory;
use Illuminate\Support\Facades\Artisan;
use App\Models\general_content\Contentpost;
use App\Models\Portfolio\Portfoliocategory;
use App\Models\Pricing_Table\Pricecategory;
use App\Models\general_content\Contentcategory;

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
                else
                {
                    $blogcategories = category::all();
                }

                if($tes->module_type == 'Service Category')
                {
                    $servicecategories = Servicecategory::all();
                }
                else
                {
                    $servicecategories = Servicecategory::all();
                }

                if($tes->module_type == 'General Category')
                {
                    $generalcategories = Contentcategory::all();
                }
                else
                {
                    $generalcategories = Contentcategory::all();
                }

                if($tes->module_type == 'Portfolio Category')
                {
                    $portfoliocategories = Portfoliocategory::all();
                }
                else
                {
                    $portfoliocategories = Portfoliocategory::all();
                }
                if($tes->module_type == 'Price-Table Category')
                {
                    $pricecategories = Pricecategory::all();
                }
                else
                {
                    $pricecategories = Pricecategory::all();
                }
                if($tes->module_type == 'Blog Post')
                {
                    $blogposts = Post::where('status',1)->orderBy('id','desc')->limit($tes->post_qty)->get();
                }
                else
                {
                    $blogposts = Post::all();
                }
                if($tes->module_type == 'General Post')
                {
                    $generalposts = Contentpost::where('status',1)->orderBy('id','desc')->limit($tes->post_qty)->get();
                }
                else
                {
                    $generalposts = Contentpost::all();
                }
                if($tes->module_type == 'Service Post')
                {
                    $serviceposts = Service::all();
                }
                else
                {
                    $serviceposts = Service::all();
                }
                if($tes->module_type == 'Portfolio Post')
                {
                    $portfolioposts = Portfolio::all();
                }
                else
                {
                    $portfolioposts = Portfolio::all();
                }
                if($tes->module_type == 'Price-Table Post')
                {
                    $priceposts = Price::all();
                }
                else
                {
                    $priceposts = Price::all();
                }
            }

        }

        Artisan::call('cache:clear');
        
        if ($page->pagebuilders()->exists())
        {
            return view('frontend_theme.corporate.homepage',compact('page','blogcategories','servicecategories','generalcategories','portfoliocategories','pricecategories','blogposts'
            ,'generalposts','serviceposts','portfolioposts','priceposts'));
        }
        else
        {
            return view('frontend_theme.corporate.homepage',compact('page'));
        }

    }
}
