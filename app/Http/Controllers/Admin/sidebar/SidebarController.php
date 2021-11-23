<?php

namespace App\Http\Controllers\Admin\sidebar;

use Illuminate\Http\Request;
use App\Models\Admin\Sidebar;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class SidebarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.sidebars.self');
        $sidebars = Sidebar::all();
        $auth = Auth::guard('admin')->user();
        return view('backend.admin.sidebar.index',compact('sidebars','auth'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.sidebars.create');
        return view('backend.admin.sidebar.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.sidebars.create');
        $this->validate($request,[
            'title' => 'required',
            'type' => 'required',
        ]);


        $sidebar = Sidebar::create([
            'title' => $request->title,
            'type' => $request->type,
        ]);


        notify()->success("Sidebar Successfully created","Added");
        return redirect()->route('admin.sidebars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Sidebar  $sidebar
     * @return \Illuminate\Http\Response
     */
    public function show(Sidebar $sidebar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Sidebar  $sidebar
     * @return \Illuminate\Http\Response
     */
    public function edit(Sidebar $sidebar)
    {
        Gate::authorize('app.sidebars.edit');
        return view('backend.admin.sidebar.form',compact('sidebar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Sidebar  $sidebar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sidebar $sidebar)
    {
        Gate::authorize('app.sidebars.edit');
        $this->validate($request,[
            'title' => 'required',
            'type' => 'required',
        ]);


        $sidebar->update([
            'title' => $request->title,
            'type' => $request->type,

        ]);


        notify()->success("Sidebar Successfully Updated","Update");
        return redirect()->route('admin.sidebars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Sidebar  $sidebar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sidebar $sidebar)
    {
        Gate::authorize('app.sidebars.destroy');
        $sidebar->delete();
        notify()->success("Sidebar Delete Succefully");
        return back();
    }
}
