<?php

namespace App\Http\Controllers\Admin\frontmenu;

use Illuminate\Http\Request;
use App\Models\Frontmenu\Frontmenu;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\Frontmenu\Frontmenuitem;

class MenuitemController extends Controller
{
        public function index($id)
        {
            Gate::authorize('app.front.menuitems.widgetbuilder');
            $menu = Frontmenu::findOrFail($id);
            $auth = Auth::guard('admin')->user();
            return view('backend.admin.frontmenu.builder',compact('menu','auth'));
        }

        public function create($id)
    {
        $menu = Frontmenu::findOrFail($id);
        return view('backend.admin.frontmenu.menuitem.form',compact('menu'));
    }

    public function store(Request $request,$id)
    {

        $this->validate($request,[
            'type' => 'required|string',
            'divider_title' => 'nullable|string',
            'title' => 'nullable|string',
            'url' => 'nullable|string',
            'target' => 'nullable|string',
        ]);
        $menu = Frontmenu::findOrFail($id);

        $menu->menuItems()->create([
            'title' => $request->title,
            'type' => $request->type,
            'divider_title' => $request->divider_title,
            'url' => $request->url,
            'target' => $request->target,
        ]);

        notify()->success('Menu Item Added','Added');
        return redirect()->route('admin.menuitem.builder',$menu->id);
    }

    public function order(Request $request, $id)
    {
        $menu = Frontmenu::findOrFail($id);
        $menuItemOrder = json_decode($request->get('order'));
        $this->orderMenu($menuItemOrder,null);
    }

    private function orderMenu(array $menuItems, $parentId)
    {
        foreach($menuItems as $index => $item)
        {
            $menutItem = Frontmenuitem::findOrFail($item->id);
            $menutItem->update([
                'order' => $index + 1,
                'parent_id' => $parentId
            ]);

            if(isset($item->children))
            {
                $this->orderMenu($item->children,$menutItem->id);
            }

        }
    }

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

    //     $sidebar->widgets()->findOrFail($widgetId)->update([
    //         'title' => $request->title,
    //         'category_id' => $request->category_id,
    //         'no_of_post' => $request->no_of_post,
    //         'type' => $request->type,
    //         'body' => $request->body,
    //     ]);

    //     notify()->success('Widget Item Updated','Update');
    //     return redirect()->route('admin.widget.builder',$id);
    // }

    // public function destroy($id,$widgetId)
    // {
    //     Sidebar::findOrFail($id)
    //              ->widgets()
    //              ->findOrFail($widgetId)
    //              ->delete();

    //     notify()->success('Widget Delete Successfully');
    //     return back();
    // }
}
