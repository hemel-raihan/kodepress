<?php

namespace App\Http\Controllers\Admin\sidebar;

use Illuminate\Http\Request;
use App\Models\Admin\Sidebar;
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
        return view('backend.admin.sidebar.widget.form',compact('sidebar'));
    }
}
