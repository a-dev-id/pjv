<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Villa;
use App\Models\VillaSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VillaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villas = Villa::all();
        $setting = VillaSetting::find(1);
        $feature = Feature::all();
        return view('admin.villa.index')->with(compact('villas', 'setting', 'feature'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.villa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (empty($request->file('banner_image'))) {
            $banner_image = null;
        } else {
            $banner_image = $request->file('banner_image')->store('images/villa/list', 'public');
        }

        if (empty($request->file('image'))) {
            $image = null;
        } else {
            $image = $request->file('image')->store('images/villa/list', 'public');
        }

        Villa::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'slug' => Str::slug($request->title),
            'excerpt' => $request->excerpt,
            'description' => $request->description,
            'banner_image' => $banner_image,
            'image' => $image,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'status' => $request->status,
        ]);
        return redirect()->route('villa-list.index')->with('message', $request->title . ' created Successfully');
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
        $edit_data = Villa::find($id);
        return view('admin.villa.edit')->with(compact('edit_data'));
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
        if (empty($request->file('banner_image'))) {
            $banner_image = $request->old_banner_image;
        } else {
            $banner_image = $request->file('banner_image')->store('images/villa/list', 'public');
        }

        if (empty($request->file('image'))) {
            $image = $request->old_image;
        } else {
            $image = $request->file('image')->store('images/villa/list', 'public');
        }

        $data = Villa::find($id);

        $data->title = $request->title;
        $data->subtitle = $request->subtitle;
        $data->slug = Str::slug($request->title);
        $data->excerpt = $request->excerpt;
        $data->description = $request->description;
        $data->banner_image = $banner_image;
        $data->image = $image;
        $data->meta_title = $request->meta_title;
        $data->meta_description = $request->meta_description;
        $data->status = $request->status;

        $data->save();

        return redirect()->route('villa-list.index')->with('message', $request->title . ' edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Villa::find($id);
        $data->delete();
        return redirect()->route('villa-list.index')->with('message', $data->title . ' deleted Successfully');
    }
}
