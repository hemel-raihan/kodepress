<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Slide\Slide;

class HomepageController extends Controller
{
    public function index()
    {
        $slides = Slide::where('title','=','asd')->get();
        return view('frontend_theme.default.homepage',compact('slides'));
    }
}
