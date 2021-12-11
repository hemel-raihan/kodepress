<?php

namespace App\Http\Controllers;

use App\Models\Admin\Page;
use Illuminate\Http\Request;
use App\Models\blog\Category;
use App\Models\general_content\Contentcategory;

class PageController extends Controller
{
    public function index($slug)
    {
        $category = Contentcategory::all();
        $pages = Page::all();

        foreach($pages  as $page)
        {
            if($page->slug == $slug)
            {
                $page = Page::findBySlug($slug);
                return view('frontend_theme.default.default_pages',compact('page','slug'));
            }

        }

        foreach($category  as $cat)
        {
            if($cat->slug == $slug)
            {
                $title = Contentcategory::findBySlug($slug);
                $contentcategory = Contentcategory::findBySlug($slug);
                $contentcategoryposts = $contentcategory->contentposts()->get();
                return view('frontend_theme.default.all_contentpost',compact('contentcategoryposts','title'));
            }

        }
    }



    }



