<?php

namespace App\Http\Controllers;

use App\Models\Admin\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($slug)
    {
        $page = Page::findBySlug($slug);
        return $page;
    }
}
