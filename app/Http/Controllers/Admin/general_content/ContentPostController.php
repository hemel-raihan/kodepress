<?php

namespace App\Http\Controllers\Admin\general_content;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Models\general_content\Contentpost;
use App\Models\general_content\Contentcategory;

class ContentPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.content.posts.self');
        //$posts = Auth::guard('admin')->user()->posts()->latest()->get();
        $auth = Auth::guard('admin')->user();
        $posts = Contentpost::latest()->get();
        return view('backend.admin.general_content.post.index',compact('posts','auth'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.content.posts.create');
        $categories = Contentcategory::where('parent_id', '=', 0)->get();
        $subcat = Contentcategory::all();
        return view('backend.admin.general_content.post.form',compact('categories','subcat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.content.posts.create');
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
            if(!Storage::disk('public')->exists('contentpostphoto/'))
            {
                Storage::disk('public')->makeDirectory('contentpostphoto/');
            }

            //resize image
            $postimg = Image::make($image)->resize(900,600)->save($imagename,90);
            Storage::disk('public')->put('contentpostphoto/'.$imagename,$postimg);

        }


         //get form Gallary image
         $gallaryimage = $request->file('gallaryimage');
         $images=array();
         $destination = public_path('/Contentgallary_image');

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
            $destinationPath = public_path('/contentfiles');

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


    //    $content = $request->body;
    //    $dom = new \DomDocument();
    //    $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    //    $bodyimg = $dom->getElementsByTagName('img');


    //    foreach($bodyimg as $item => $bimage){
    //     $data = $bimage->getAttribute('src');
    //     list($type, $data) = explode(';', $data);
    //     list(, $data)      = explode(',', $data);
    //     $imgeData = base64_decode($data);
    //     //$image_name= "/bodyimgupload/". time().$item.'.png';
    //     $image_name= $slug.'-'.$currentDate.'-'.uniqid().'.'.$item.'png';
    //     $path = public_path() . $image_name;
    //     file_put_contents($path, $imgeData);

    //     // $image->removeAttribute('src');
    //     // $image->setAttribute('src', $image_name);
    //  }

    // $content = $dom->saveHTML();

        $post = Contentpost::create([
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
        $post->contentcategories()->attach($request->categories);


        notify()->success("Post Successfully created","Added");
        return redirect()->route('admin.contentposts.index');
    }

    public function status_approval($id)
    {
        Gate::authorize('app.content.posts.status');
        $post = Contentpost::find($id);
        if($post->status == true)
        {
            $post->status = false;
            $post->save();

            notify()->success('Successfully Deactivated Post');
        }
        elseif($post->status == false)
        {
            $post->status = true;
            $post->save();

            notify()->success('Removed the Activated Approval');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\general_content\Contentpost  $contentpost
     * @return \Illuminate\Http\Response
     */
    public function show(Contentpost $contentpost)
    {
        Gate::authorize('app.blog.posts.details');
        return view('backend.admin.general_content.post.show',compact('contentpost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\general_content\Contentpost  $contentpost
     * @return \Illuminate\Http\Response
     */
    public function edit(Contentpost $contentpost)
    {
        Gate::authorize('app.content.posts.edit');
        $categories = Contentcategory::where('parent_id', '=', 0)->get();
        $subcat = Contentcategory::all();
        return view('backend.admin.general_content.post.form',compact('contentpost','categories','subcat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\general_content\Contentpost  $contentpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contentpost $contentpost)
    {
        Gate::authorize('app.content.posts.edit');
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
            if(!Storage::disk('public')->exists('contentpostphoto'))
            {
                Storage::disk('public')->makeDirectory('contentpostphoto');
            }

             //delete old image
             if(Storage::disk('public')->exists('contentpostphoto/'.$contentpost->image))
             {
                 Storage::disk('public')->delete('contentpostphoto/'.$contentpost->image);
             }

            //resize image
            $postimg = Image::make($image)->resize(900,600)->save($imagename,90);
            Storage::disk('public')->put('contentpostphoto/'.$imagename,$postimg);

        }
        else
        {
            $imagename = $contentpost->image;
        }

        //get form Gallary image
        $gallaryimage = $request->file('gallaryimage');
        $images=array();
        $destination = public_path('/contentgallary_image');
        $updateimages = explode(",", $contentpost->gallaryimage);

        if(isset($gallaryimage))
        {

            foreach($updateimages as $updateimage){

                $gallary_path = public_path().'contentgallary_image/'.$updateimage;

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
            $images[]=$contentpost->gallaryimage;
        }

        //get form file
        $file = $request->file('files');

        if(isset($file))
        {
            $currentDate = Carbon::now()->toDateString();
            $filename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('/contentfiles');


            $file_path = public_path('files/'.$contentpost->files);  // Value is not URL but directory file path
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
            $filename = $contentpost->files;
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

        $contentpost->update([
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
        $contentpost->contentcategories()->sync($request->categories);


        notify()->success("Post Successfully Updated","Update");
        return redirect()->route('admin.contentposts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\general_content\Contentpost  $contentpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contentpost $contentpost)
    {
        Gate::authorize('app.content.posts.destroy');
        //delete old image
        if(Storage::disk('public')->exists('contentpostphoto/'.$contentpost->image))
        {
            Storage::disk('public')->delete('contentpostphoto/'.$contentpost->image);
        }

        $contentpost->contentcategories()->detach();

        $contentpost->delete();
        notify()->success('Post Deleted Successfully','Delete');
        return back();
    }
}
