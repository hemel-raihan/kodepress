<?php

namespace App\Http\Controllers\Admin\Pagebuilder;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\Pagebuilder\Custompage;

class PagebuilderController extends Controller
{
    public function index($id)
    {
        Gate::authorize('app.build.pages.pagebuilder');
        $page = Custompage::findOrFail($id);
        $auth = Auth::guard('admin')->user();
        return view('backend.admin.pagebuilder.builder',compact('page','auth'));
    }

    public function create($id)
    {
        $page = Custompage::findOrFail($id);
        return view('backend.admin.pagebuilder.section.form',compact('page'));
    }

    public function store(Request $request,$id)
    {
        $page = Custompage::findOrFail($id);

        //get form image
        $image = $request->file('background_img');
        $slug = Str::slug($request->title);

        if(isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            $sidebarphotoPath = public_path('uploads/sectionpagephoto');
            $image->move($sidebarphotoPath,$imagename);

        }
        else
        {
            $imagename = null;
        }

        if(!$request->status)
        {
            $status = 0;
        }
        else
        {
            $status = 1;
        }

        if(!$request->background_img)
        {
            $background_img = null;
        }
        else
        {
            $background_img = $imagename;
        }

        if(!$request->background_color)
        {
            $background_color = null;
        }
        else
        {
            $background_color = $request->background_color;
        }

        $page->pagebuilders()->create([
            'title' => $request->title,
            'layout' => $request->layout,
            'padding' => $request->padding.'px',
            'margin' => $request->margin.'px',
            'border' => $request->border,
            'bordercolor' => $request->bordercolor,
            'status' => $status,
            'background_color' => $background_color,
            'background_img' => $background_img,

        ]);
        notify()->success("Section Successfully created","Added");
        return redirect()->route('admin.custompage.builder',$id);
    }

    // public function order(Request $request, $id)
    // {
    //     $sidebar = Sidebar::findOrFail($id);
    //     $widgetItemOrder = json_decode($request->get('order'));
    //     $this->orderWidget($widgetItemOrder,null);
    // }

    // private function orderWidget(array $widgetItems, $parentId)
    // {
    //     foreach($widgetItems as $index => $item)
    //     {
    //         $widgetItem = Widget::findOrFail($item->id);
    //         $widgetItem->update([
    //             'order' => $index + 1,
    //         ]);

    //     }
    // }

    // public function edit($id,$widgetId)
    // {
    //     $auth = Auth::user();
    //     $sidebar = Sidebar::findOrFail($id);
    //     $widget = $sidebar->widgets()->findOrFail($widgetId);
    //     $editcategories = category::all();
    //     return view('backend.admin.sidebar.widget.form',compact('sidebar','auth','widget','editcategories'));
    // }

    // public function update(Request $request,$id,$widgetId)
    // {
    //     //Gate::authorize('app.menus.edit');
    //     $sidebar = Sidebar::findOrFail($id);

    //     //get form image
    //     $image = $request->file('image');
    //     $slug = Str::slug($request->name);

    //     if(isset($image))
    //     {
    //         $currentDate = Carbon::now()->toDateString();
    //         $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

    //         $sidebarphotoPath = public_path('uploads/sidebarphoto');

    //         $sidebarphoto_path = public_path('uploads/sidebarphoto/'.$sidebar->widgets()->findOrFail($widgetId)->image);  // Value is not URL but directory file path
    //         if (file_exists($sidebarphoto_path)) {

    //             @unlink($sidebarphoto_path);

    //         }

    //         $image->move($sidebarphotoPath,$imagename);

    //     }
    //     else
    //     {
    //         $imagename = $sidebar->widgets()->findOrFail($widgetId)->image;
    //     }

    //     $sidebar->widgets()->findOrFail($widgetId)->update([
    //         'title' => $request->title,
    //         'category_id' => $request->category_id,
    //         'no_of_post' => $request->no_of_post,
    //         'type' => $request->type,
    //         'image' => $imagename,
    //         'body' => $request->body,
    //     ]);

    //     notify()->success('Widget Item Updated','Update');
    //     return redirect()->route('admin.widget.builder',$id);
    // }

    // public function widgetdetails($id)
    // {
    //     $widget = Widget::find($id);
    //     return view('frontend_theme.default.widget_detailspage',compact('widget'));
    // }

    // public function destroy($id,$widgetId)
    // {
    //     $sidebar = Sidebar::findOrFail($id);

    //     $sidebarphoto_path = public_path('uploads/sidebarphoto/'.$sidebar->widgets()->findOrFail($widgetId)->image);  // Value is not URL but directory file path
    //     if (file_exists($sidebarphoto_path)) {

    //         @unlink($sidebarphoto_path);

    //     }

    //     Sidebar::findOrFail($id)
    //              ->widgets()
    //              ->findOrFail($widgetId)
    //              ->delete();

    //     notify()->success('Widget Delete Successfully');
    //     return back();
    // }
}
