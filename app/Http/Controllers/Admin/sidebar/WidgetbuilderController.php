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
        $categories = category::where('parent_id', '=', 0)->get();
        $subcat = category::all();
        return view('backend.admin.sidebar.widget.form',compact('sidebar','categories','subcat'));
    }

    public function store(Request $request,$id)
    {
        $sidebar = Sidebar::findOrFail($id);

        $sidebar->widgets()->create([
            'title' => $request->title,

        ]);
        return back();
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
}
