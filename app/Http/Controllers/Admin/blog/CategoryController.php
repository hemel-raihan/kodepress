<?php

namespace App\Http\Controllers\Admin\blog;

use App\Http\Controllers\Controller;
use App\Models\blog\category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\storage;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.blog.categories.self');
        $categories = Category::all();
        $auth = Auth::guard('admin')->user();
        return view('backend.admin.blog.category.index',compact('categories','auth'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.blog.categories.create');
        $categories = Category::where('parent_id', '=', 0)->get();
        $subcat = Category::all();
        return view('backend.admin.blog.category.form',compact('categories','subcat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.blog.categories.create');
        $this->validate($request,[
            'name' => 'required|unique:categories',
            'desc' => 'required',
            'image' => 'required',
            'sidebar_id' => 'required',

        ]);

        //get form image
        $image = $request->file('image');
        $slug = Str::slug($request->name);

        if(isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            //check image folder existance
            if(!Storage::disk('public')->exists('categoryphoto'))
            {
                Storage::disk('public')->makeDirectory('categoryphoto');
            }

            //resize image
            $category = Image::make($image)->resize(500,333)->save($imagename,90);
            Storage::disk('public')->put('categoryphoto/'.$imagename,$category);

        }

        if(!$request->parent_id)
        {
            $parent_id = 0;
        }
        else
        {
            $parent_id = $request->parent_id;
        }

        if(!$request->status)
        {
            $status = 0;
        }
        else
        {
            $status = 1;
        }

        $category = Category::create([
            'name' => $request->name,
            'slug' => $slug,
            'parent_id' => $parent_id,
            'image' => $imagename,
            'desc' => $request->desc,
            'sidebar_id' => $request->sidebar_id,
            'status' => $status,

        ]);

        notify()->success("Category Successfully created","Added");
        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    public function approval($id)
    {
        Gate::authorize('app.blog.categories.approve');
        $category = Category::find($id);
        if($category->status == true)
        {
            $category->status = false;
            $category->save();

            notify()->success('Successfully approved category');
        }
        elseif($category->status == false)
        {
            $category->status = true;
            $category->save();

            notify()->success('Removed the Category Approval');
        }

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        Gate::authorize('app.blog.categories.edit');
        $categories = Category::where('parent_id', '=', 0)->get();
        $subcat = Category::all();
        return view('backend.admin.blog.category.form',compact('categories','subcat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
    }
}
