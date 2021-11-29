<?php

namespace App\Http\Controllers;

use App\Models\Admin\Page;
use App\Models\blog\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($slug)
    {
        $page = Page::findBySlug($slug);
        return $page;
    }

    public function category($slug)
    {
        $page = Category::findBySlug($slug);
        return $page;
    }

}
