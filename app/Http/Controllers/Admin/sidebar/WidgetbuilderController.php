<?php

namespace App\Http\Controllers\Admin\sidebar;

use App\Models\Admin\Widget;
use Illuminate\Http\Request;
use App\Models\Admin\Sidebar;
use App\Models\blog\category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class WidgetbuilderController extends Controller
{
    public function index($id)
    {
        Gate::authorize('app.sidebars.widgetbuilder');
        $sidebar = Sidebar::findOrFail($id);
        $auth = Auth::guard('admin')->user();
        return view('backend.admin.sidebar.builder',compact('sidebar','auth'));
    }

    public function create($id)
    {
        $sidebar = Sidebar::findOrFail($id);
        //$categories = category::where('parent_id', '=', 0)->get();
        $categories = category::all();
        return view('backend.admin.sidebar.widget.form',compact('sidebar','categories'));
    }

    public function store(Request $request,$id)
    {
        $sidebar = Sidebar::findOrFail($id);

        $sidebar->widgets()->create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'no_of_post' => $request->no_of_post,
            'type' => $request->type,
            'body' => $request->body,

        ]);
        notify()->success("Widget Successfully created","Added");
        return redirect()->route('admin.widget.builder',$id);
    }

    public function order(Request $request, $id)
    {
        $sidebar = Sidebar::findOrFail($id);
        $widgetItemOrder = json_decode($request->get('order'));
        $this->orderWidget($widgetItemOrder,null);
    }

    private function orderWidget(array $widgetItems, $parentId)
    {
        foreach($widgetItems as $index => $item)
        {
            $widgetItem = Widget::findOrFail($item->id);
            $widgetItem->update([
                'order' => $index + 1,
            ]);

        }
    }

    public function edit($id,$widgetId)
    {
        $auth = Auth::user();
        $sidebar = Sidebar::findOrFail($id);
        $widget = $sidebar->widgets()->findOrFail($widgetId);
        $editcategories = category::all();
        return view('backend.admin.sidebar.widget.form',compact('sidebar','auth','widget','editcategories'));
    }

    public function update(Request $request,$id,$widgetId)
    {
        //Gate::authorize('app.menus.edit');
        $sidebar = Sidebar::findOrFail($id);

        $sidebar->widgets()->findOrFail($widgetId)->update([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'no_of_post' => $request->no_of_post,
            'type' => $request->type,
            'body' => $request->body,
        ]);

        notify()->success('Widget Item Updated','Update');
        return redirect()->route('admin.widget.builder',$id);
    }

    public function destroy($id,$widgetId)
    {
        Sidebar::findOrFail($id)
                 ->widgets()
                 ->findOrFail($widgetId)
                 ->delete();

        notify()->success('Widget Delete Successfully');
        return back();
    }
}
