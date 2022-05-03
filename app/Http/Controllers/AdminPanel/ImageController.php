<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Image;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($cid)
    {
        $content = Content::find($cid);
        $images = DB::table('images')->where('content_id', $cid)->get();
        return view('admin.image.index',[
            'content' => $content,
            'images' => $images
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$cid)
    {
        //
        $data= new Image();
        $data->content_id = $cid;
        $data->Title = $request->Title;
        if ($request->file('Image')){
            $data->Image= $request->file('Image')->store('image');
        }
        $data->save();
        return redirect()->route('admin.image.index',['cid'=>$cid]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$cid,$id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cid,$id)
    {
        $data = Image::find($id);
        Storage::delete($data->Image);
        $data->delete();
        return redirect()->route('admin.image.index',['cid'=>$cid]);
    }
}
