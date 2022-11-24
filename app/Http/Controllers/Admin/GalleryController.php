<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\GallerySetting;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = gallery::all();
        $setting =  GallerySetting::find(1);
        $categories = Category::all();
        return view('admin.gallery.index')->with(compact('galleries', 'setting', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (empty($request->file('thumbnail_image'))) {
            $thumbnail_image = null;
        } else {
            $thumbnail_image = $request->file('thumbnail_image')->store('thumbnail_images/gallery/thumbnail_image', 'public');
        }

        if (empty($request->file('original_image'))) {
            $original_image = null;
        } else {
            $original_image = $request->file('original_image')->store('images/gallery/original_image', 'public');
        }

        Gallery::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'thumbnail_image' => $thumbnail_image,
            'original_image' => $original_image,
            'status' => $request->status,
        ]);
        return redirect()->route('gallery-list.index')->with('message', $request->title . ' created Successfully');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Gallery::find($id);
        $data->delete();
        return redirect()->route('gallery-list.index')->with('message', $data->title . ' deleted Successfully');
    }
}
