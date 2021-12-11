<?php

namespace App\Http\Controllers\Admin\page;

use Carbon\Carbon;
use App\Models\Admin\Page;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Sidebar;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
//use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.pages.self');
        //$posts = Auth::guard('admin')->user()->posts()->latest()->get();
        $auth = Auth::guard('admin')->user();
        $pages = Page::latest()->get();
        return view('backend.admin.page.index',compact('pages','auth'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.pages.create');
        $sidebars = Sidebar::all();
        return view('backend.admin.page.form',compact('sidebars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.pages.create');
        $this->validate($request,[
            'title' => 'required',
            'image' => 'image|max:4000',
            'gallaryimage' => 'image|max:4000',
            'leftsidebar_id' => 'required',
            'rightsidebar_id' => 'required',
        ]);

        //get form image
        $image = $request->file('image');
        $slug = Str::slug($request->title);



        if(isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            // //check image folder existance
            // if(!Storage::disk('public')->exists('pagephoto/'))
            // {
            //     Storage::disk('public')->makeDirectory('pagephoto/');
            // }

            // //resize image
            // $postimg = Image::make($image)->resize(900,600)->save($imagename,90);
            // Storage::disk('public')->put('pagephoto/'.$imagename,$postimg);

            // $pagePath = public_path('uploads/pagephoto/'.$imagename);
            // $image->move($pagePath,$imagename);
            //Storage::disk('public')->put('pagephoto/'.$imagename,$postimg);
            //Storage::put("public/pagephoto/{$imagename}",$postimg);

            $pagePath = public_path('uploads/pagephoto');
            $img                     =       Image::make($image->path());

            // $img->resize(900, 600, function ($constraint) {
            //     $constraint->aspectRatio();
            // })->save($pagePath.'/'.$imagename);
            $img->resize(900, 600)->save($pagePath.'/'.$imagename);

        }
        else{
            $imagename = null;
        }


         //get form Gallary image
         $gallaryimage = $request->file('gallaryimage');
         $images=array();
         $destination = public_path('uploads/pagegallary_image');

         if(isset($gallaryimage))
         {
             foreach($gallaryimage as $gimage)
             {
                $gallaryimagename = $slug.'-'.'-'.uniqid().'.'.$gimage->getClientOriginalExtension();
                //$gimg = Image::make($gimage)->resize(900,600)->save($gallaryimagename,90);
                $gimg                     =       Image::make($gimage->path());
                $gimg->resize(900, 600, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destination.'/'.$gallaryimagename);
                //$gimage->move($destination,$gallaryimagename);
                //Storage::disk('public')->put('pagegallary_image/'.$gallaryimagename,$gimg);
                $images[]=$gallaryimagename;
             }

         }

        if(!$request->status)
        {
            $status = 0;
        }
        else
        {
            $status = 1;
        }

        if(!Auth::guard('admin')->user()->role_id == 1)
        {
            $is_approved = false;
        }
        else
        {
            $is_approved = true;
        }

        $page = Page::create([
            'title' => $request->title,
            'slug' => $slug,
            'admin_id' => Auth::id(),
            'image' => $imagename,
            'gallaryimage'=>  implode("|",$images),
            //'files' => $filename,
            'body' => $request->body,
            'leftsidebar_id' => $request->leftsidebar_id,
            'rightsidebar_id' => $request->rightsidebar_id,
            'status' => $status,
            'is_approved' => $is_approved,

        ]);



        notify()->success("Page Successfully created","Added");
        return redirect()->route('admin.pages.index');
    }


    public function status_approval($id)
    {
        Gate::authorize('app.pages.status');
        $page = Page::find($id);
        if($page->status == true)
        {
            $page->status = false;
            $page->save();

            notify()->success('Successfully Deactiveated Post');
        }
        elseif($page->status == false)
        {
            $page->status = true;
            $page->save();

            notify()->success('Removed the Activeated Approval');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        Gate::authorize('app.pages.edit');
        $editsidebars = Sidebar::all();
        return view('backend.admin.page.form',compact('page','editsidebars'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        Gate::authorize('app.pages.edit');
        $this->validate($request,[
            'title' => 'required',
            'leftsidebar_id' => 'required',
            'rightsidebar_id' => 'required',
        ]);

        //get form image
        $image = $request->file('image');
        $slug = Str::slug($request->title);

        if(isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            //check image folder existance
            // if(!Storage::disk('public')->exists('categoryphoto'))
            // {
            //     Storage::disk('public')->makeDirectory('categoryphoto');
            // }

            // //delete old image
            // if(Storage::disk('public')->exists('categoryphoto/'.$category->image))
            // {
            //     Storage::disk('public')->delete('categoryphoto/'.$category->image);
            // }

            //resize image
            // $categoryimg = Image::make($image)->resize(500,333)->save($imagename,90);
            // Storage::disk('public')->put('categoryphoto/'.$imagename,$categoryimg);

            $pagePath = public_path('uploads/pagephoto');

            $pagephoto_path = public_path('uploads/pagephoto/'.$page->image);  // Value is not URL but directory file path
            if (file_exists($pagephoto_path)) {

                @unlink($pagephoto_path);

            }

            $img                     =       Image::make($image->path());

            $img->resize(900, 600, function ($constraint) {
                $constraint->aspectRatio();
            })->save($pagePath.'/'.$imagename);

            // $image->move($pagePath,$imagename);

        }
        else
        {
            $imagename = $page->image;
        }

        //get form Gallary image
        $gallaryimage = $request->file('gallaryimage');
        $images=array();
        $destination = public_path('uploads/pagegallary_image');
        $updateimages = explode("|", $page->gallaryimage);

        if(isset($gallaryimage))
        {

            foreach($updateimages as $updateimage){

                $gallary_path = public_path('uploads/pagegallary_image/'.$updateimage);

                if (file_exists($gallary_path)) {

                    @unlink($gallary_path);

                }
            }

            foreach($gallaryimage as $gimage)
            {

               $gallaryimagename = $slug.'-'.'-'.uniqid().'.'.$gimage->getClientOriginalExtension();
               //$gimage->move($destination,$gallaryimagename);
               $gimg                     =       Image::make($gimage->path());
                $gimg->resize(900, 600, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destination.'/'.$gallaryimagename);
               $images[]=$gallaryimagename;
            }

        }
        else
        {
            $images[]=$page->gallaryimage;
        }

        if(!$request->status)
        {
            $status = 0;
        }
        else
        {
            $status = 1;
        }

        if(!Auth::guard('admin')->user()->role_id == 1)
        {
            $is_approved = false;
        }
        else
        {
            $is_approved = true;
        }

        $page->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'admin_id' => Auth::id(),
            'image' => $imagename,
            'gallaryimage'=>  implode("|",$images),
            'body' => $request->body,
            'leftsidebar_id' => $request->leftsidebar_id,
            'rightsidebar_id' => $request->rightsidebar_id,
            'status' => $status,
            'is_approved' => $is_approved,

        ]);



        notify()->success("Page Successfully Updated","Update");
        return redirect()->route('admin.pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        Gate::authorize('app.pages.destroy');

        $pagephoto_path = public_path('uploads/pagephoto/'.$page->image);
        if (file_exists($pagephoto_path)) {

            @unlink($pagephoto_path);

        }

    $gallaryimages = explode("|", $page->gallaryimage);

    foreach($gallaryimages as $gimage){

        $gallaryimage_path = public_path('uploads/pagegallary_image/'.$gimage);

        if (file_exists($gallaryimage_path)) {

            @unlink($gallaryimage_path);

        }

    }

        $page->delete();
        notify()->success('Page Deleted Successfully','Delete');
        return back();
    }
}
