<?php

namespace App\Http\Controllers\Admin\blog;

use Carbon\Carbon;
use App\Models\blog\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\blog\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.blog.posts.self');
        //$posts = Auth::guard('admin')->user()->posts()->latest()->get();
        $auth = Auth::guard('admin')->user();
        $posts = Post::latest()->get();
        return view('backend.admin.blog.post.index',compact('posts','auth'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.blog.posts.create');
        $categories = Category::where('parent_id', '=', 0)->get();
        $subcat = Category::all();
        return view('backend.admin.blog.post.form',compact('categories','subcat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.blog.posts.create');
        $this->validate($request,[
            'title' => 'required',
            //'image' => 'required',
            //'gallaryimage' => 'required',
            'categories' => 'required',
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
            if(!Storage::disk('public')->exists('postphoto/'))
            {
                Storage::disk('public')->makeDirectory('postphoto/');
            }

            //resize image
            $postimg = Image::make($image)->resize(900,600)->save($imagename,90);
            Storage::disk('public')->put('postphoto/'.$imagename,$postimg);

        }


         //get form Gallary image
         $gallaryimage = $request->file('gallaryimage');
         $images=array();
         $destination = public_path('/gallary_image');

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
        $file = $request->file('files');

        if(isset($file))
        {
            $currentDate = Carbon::now()->toDateString();
            $filename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('/files');

            // //check image folder existance
            // if(!Storage::disk('public')->exists('postfile'))
            // {
            //     Storage::disk('public')->makeDirectory('postfile');
            // }
            $file->move($destinationPath,$filename);

            // //resize image
            // $postfile = Image::make($file)->save($filename);
            // Storage::disk('public')->put('categoryphoto/'.$filename,$postfile);

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

        if(!$request->youtube_link)
        {
            $youtube = null;
        }
        else
        {
            $youtube = $request->youtube_link;
        }

        if(!$request->image)
        {
            $featureimg = null;
        }
        else
        {
            $featureimg = $imagename;
        }

        $post = Post::create([
            'title' => $request->title,
            'slug' => $slug,
            'admin_id' => Auth::id(),
            'image' => $featureimg,
            'youtube_link' => $youtube,
            'gallaryimage'=>  implode("|",$images),
            'files' => $filename,
            'body' => $request->body,
            'leftsidebar_id' => $request->leftsidebar_id,
            'rightsidebar_id' => $request->rightsidebar_id,
            'status' => $status,
            'is_approved' => $is_approved,

        ]);

        //for many to many
        $post->categories()->attach($request->categories);


        notify()->success("Post Successfully created","Added");
        return redirect()->route('admin.posts.index');
    }

    public function status_approval($id)
    {
        Gate::authorize('app.blog.posts.status');
        $post = Post::find($id);
        if($post->status == true)
        {
            $post->status = false;
            $post->save();

            notify()->success('Successfully Activeated Post');
        }
        elseif($post->status == false)
        {
            $post->status = true;
            $post->save();

            notify()->success('Removed the Deactivated Approval');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        Gate::authorize('app.blog.posts.details');
        return view('backend.admin.blog.post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        Gate::authorize('app.blog.posts.edit');
        $categories = Category::where('parent_id', '=', 0)->get();
        $subcat = Category::all();
        return view('backend.admin.blog.post.form',compact('post','categories','subcat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        Gate::authorize('app.blog.posts.edit');
        $this->validate($request,[
            'title' => 'required',
            'categories' => 'required',
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
            if(!Storage::disk('public')->exists('postphoto'))
            {
                Storage::disk('public')->makeDirectory('postphoto');
            }

             //delete old image
             if(Storage::disk('public')->exists('postphoto/'.$post->image))
             {
                 Storage::disk('public')->delete('postphoto/'.$post->image);
             }

            //resize image
            $postimg = Image::make($image)->resize(900,600)->save($imagename,90);
            Storage::disk('public')->put('postphoto/'.$imagename,$postimg);

        }
        else
        {
            $imagename = $post->image;
        }

        //get form Gallary image
        $gallaryimage = $request->file('gallaryimage');
        $images=array();
        $destination = public_path('/gallary_image');
        $updateimages = explode(",", $post->gallaryimage);

        if(isset($gallaryimage))
        {

            foreach($updateimages as $updateimage){

                $gallary_path = public_path().'gallary_image/'.$updateimage;

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
            $images[]=$post->gallaryimage;
        }

        //get form file
        $file = $request->file('files');

        if(isset($file))
        {
            $currentDate = Carbon::now()->toDateString();
            $filename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('/files');


            $file_path = public_path('files/'.$post->files);  // Value is not URL but directory file path
            if (file_exists($file_path)) {

                @unlink($file_path);

            }
            $file->move($destinationPath,$filename);

            // //resize image
            // $postfile = Image::make($file)->save($filename);
            // Storage::disk('public')->put('categoryphoto/'.$filename,$postfile);

        }
        else
        {
            $filename = $post->files;
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

        if(!$request->youtube_link)
        {
            $youtube = null;
        }
        else
        {
            $youtube = $request->youtube_link;
        }

        if(!$request->image)
        {
            $featureimg = null;
        }
        else
        {
            $featureimg = $imagename;
        }

        $post->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'admin_id' => Auth::id(),
            'image' => $featureimg,
            'youtube_link' => $youtube,
            'gallaryimage'=>  implode("|",$images),
            'files' => $filename,
            'body' => $request->body,
            'leftsidebar_id' => $request->leftsidebar_id,
            'rightsidebar_id' => $request->rightsidebar_id,
            'status' => $status,
            'is_approved' => $is_approved,

        ]);

        //for many to many
        $post->categories()->sync($request->categories);


        notify()->success("Post Successfully Updated","Update");
        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Gate::authorize('app.blog.posts.destroy');
        //delete old image
        if(Storage::disk('public')->exists('postphoto/'.$post->image))
        {
            Storage::disk('public')->delete('postphoto/'.$post->image);
        }

        $post->categories()->detach();

        $post->delete();
        notify()->success('Post Deleted Successfully','Delete');
        return back();

    }
}
