<?php

namespace App\Http\Controllers\Admin\page;

use Carbon\Carbon;
use App\Models\Admin\Page;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Intervention\Image\Facades\Image;
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
        return view('backend.admin.page.form');
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
            //'image' => 'required',
            //'gallaryimage' => 'required',
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
            if(!Storage::disk('public')->exists('pagephoto/'))
            {
                Storage::disk('public')->makeDirectory('pagephoto/');
            }

            //resize image
            $postimg = Image::make($image)->resize(900,600)->save($imagename,90);
            Storage::disk('public')->put('pagephoto/'.$imagename,$postimg);

        }


         //get form Gallary image
         $gallaryimage = $request->file('gallaryimage');
         $images=array();
         $destination = public_path('/pagegallary_image');

         if(isset($gallaryimage))
         {
             foreach($gallaryimage as $gimage)
             {
                $gallaryimagename = $slug.'-'.'-'.uniqid().'.'.$gimage->getClientOriginalExtension();
                $gimage->move($destination,$gallaryimagename);
                $images[]=$gallaryimagename;
             }

         }

        //get form file
        // $file = $request->file('files');

        // if(isset($file))
        // {
        //     $currentDate = Carbon::now()->toDateString();
        //     $filename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$file->getClientOriginalExtension();
        //     $destinationPath = public_path('/files');

        //     // //check image folder existance
        //     // if(!Storage::disk('public')->exists('postfile'))
        //     // {
        //     //     Storage::disk('public')->makeDirectory('postfile');
        //     // }
        //     $file->move($destinationPath,$filename);

        //     // //resize image
        //     // $postfile = Image::make($file)->save($filename);
        //     // Storage::disk('public')->put('categoryphoto/'.$filename,$postfile);

        // }

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

        // if(!$request->youtube_link)
        // {
        //     $youtube = null;
        // }
        // else
        // {
        //     $youtube = $request->youtube_link;
        // }

        // if(!$request->image)
        // {
        //     $featureimg = null;
        // }
        // else
        // {
        //     $featureimg = $imagename;
        // }

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
        return view('backend.admin.page.form',compact('page'));
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
            if(!Storage::disk('public')->exists('pagephoto'))
            {
                Storage::disk('public')->makeDirectory('pagephoto');
            }

             //delete old image
             if(Storage::disk('public')->exists('pagephoto/'.$page->image))
             {
                 Storage::disk('public')->delete('pagephoto/'.$page->image);
             }

            //resize image
            $postimg = Image::make($image)->resize(900,600)->save($imagename,90);
            Storage::disk('public')->put('pagephoto/'.$imagename,$postimg);

        }
        else
        {
            $imagename = $page->image;
        }

        //get form Gallary image
        $gallaryimage = $request->file('gallaryimage');
        $images=array();
        $destination = public_path('/pagegallary_image');
        $updateimages = explode(",", $page->gallaryimage);

        if(isset($gallaryimage))
        {

            foreach($updateimages as $updateimage){

                $gallary_path = public_path().'pagegallary_image/'.$updateimage;

                if (file_exists($gallary_path)) {

                    @unlink($gallary_path);

                }
            }

            foreach($gallaryimage as $gimage)
            {

               $gallaryimagename = $slug.'-'.'-'.uniqid().'.'.$gimage->getClientOriginalExtension();
               $gimage->move($destination,$gallaryimagename);
               $images[]=$gallaryimagename;
            }

        }
        else
        {
            $images[]=$page->gallaryimage;
        }

        //get form file
        // $file = $request->file('files');

        // if(isset($file))
        // {
        //     $currentDate = Carbon::now()->toDateString();
        //     $filename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$file->getClientOriginalExtension();
        //     $destinationPath = public_path('/files');


        //     $file_path = public_path('files/'.$post->files);  // Value is not URL but directory file path
        //     if (file_exists($file_path)) {

        //         @unlink($file_path);

        //     }
        //     $file->move($destinationPath,$filename);

        //     // //resize image
        //     // $postfile = Image::make($file)->save($filename);
        //     // Storage::disk('public')->put('categoryphoto/'.$filename,$postfile);

        // }
        // else
        // {
        //     $filename = $page->files;
        // }

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

        // if(!$request->youtube_link)
        // {
        //     $youtube = null;
        // }
        // else
        // {
        //     $youtube = $request->youtube_link;
        // }

        // if(!$request->image)
        // {
        //     $featureimg = null;
        // }
        // else
        // {
        //     $featureimg = $imagename;
        // }

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
        //delete old image
        if(Storage::disk('public')->exists('pagephoto/'.$page->image))
        {
            Storage::disk('public')->delete('pagephoto/'.$page->image);
        }

        $page->delete();
        notify()->success('Page Deleted Successfully','Delete');
        return back();
    }
}
