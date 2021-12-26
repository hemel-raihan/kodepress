<?php

namespace App\Http\Controllers\Admin\Pagebuilder;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Pagebuilder\Pagebuilder;

class ElementController extends Controller
{
    public function index($id)
    {
        //Gate::authorize('app.build.pages.pagebuilder');
        $page = Pagebuilder::findOrFail($id);
        $auth = Auth::guard('admin')->user();
        return view('backend.admin.pagebuilder.element.index',compact('page','auth'));
    }

    public function create($id)
    {
        $page = Pagebuilder::findOrFail($id);
        return view('backend.admin.pagebuilder.element.form',compact('page'));
    }

    public function store(Request $request,$id)
    {
        $page = Pagebuilder::findOrFail($id);

        //get form image
        $image = $request->file('image');
        $slug = Str::slug($request->title);

        if(isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            $sidebarphotoPath = public_path('uploads/elementphoto');
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

        $page->elements()->create([
            'title' => $request->title,
            'module_type' => $request->module_type,
            'post_qty' => $request->post_qty,
            'image' => $imagename,
            'img_width' => $request->img_width.'px',
            'img_height' => $request->img_height.'px',
            'img_margin' => $request->img_margin,
            'margin_amt' => $request->margin_amt.'px',
            'img_topmargin' => $request->img_topmargin,
            'topmargin_amt' => $request->topmargin_amt.'px',
            'body' => $request->body,
            'status' => $status,


        ]);
        notify()->success("Element Successfully created","Added");
        return redirect()->route('admin.element.index',$id);
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
