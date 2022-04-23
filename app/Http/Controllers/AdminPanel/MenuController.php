<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data= Menu::all();
        return view('admin.menu.index',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data= Menu::all();
        return view('admin.menu.create',[
            'data'=>$data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data= new Menu();
        $data->parent_id = 0;
        $data->Title = $request->Title;
        $data->Keywords = $request->Keywords;
        $data->Description = $request->Description;
        $data->Image = $request->Image;
        $data->Status = $request->Status;
        $data->save();
        return redirect('admin/menu');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu,$id)
    {
        //
        $data= Menu::find($id);
        return view('admin.menu.show',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu, $id)
    {
        //
        $data= Menu::find($id);
        return view('admin.menu.edit',[
            'data' => $data

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu,$id)
    {
        //
        $data= Menu::find($id);
        $data->parent_id = 0;
        $data->Title = $request->Title;
        $data->Keywords = $request->Keywords;
        $data->Description = $request->Description;
        $data->Image = $request->Image;
        $data->Status = $request->Status;
        $data->save();
        return redirect('admin/menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
        $data = Menu::find($id);
        $data->delete();
        return redirect('admin/menu');
    }
}
