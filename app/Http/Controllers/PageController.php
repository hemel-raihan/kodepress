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

        // if(Page::findBySlug($slug))

        // {
        //     $page = Page::findBySlug($slug);
        //     return $page;
        // }
        // elseif(Category::findBySlug($slug))
        // {
        //     $category = Category::findBySlug($slug);
        //     $categoryposts = $category->posts()->get();
        //     return $categoryposts;
        // }

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

    // public function category($categoryslug)
    // {
    //     $category = Category::findBySlug($categoryslug);
    //     $categoryposts = $category->posts()->get();
    //     return $categoryposts;
    // }

    // public function contentcategory($contentcategoryslug)
    // {
    //     $contentcategory = Contentcategory::findBySlug($contentcategoryslug);
    //     $contentcategoryposts = $contentcategory->contentposts()->get();
    //     return $contentcategoryposts;



