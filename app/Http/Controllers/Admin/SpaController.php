<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Spa;
use App\Models\SpaImage;
use App\Models\SpaSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SpaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spas = Spa::all();
        $setting = SpaSetting::find(1);
        $spa_image = SpaImage::where('spa_id', $setting->id)->get();
        return view('admin.spa.index')->with(compact('spas', 'setting', 'spa_image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.spa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (empty($request->file('image'))) {
            $image = null;
        } else {
            $image = $request->file('image')->store('images/spa/list', 'public');
        }

        Spa::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'slug' => Str::slug($request->title),
            'excerpt' => $request->excerpt,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $image,
            'status' => $request->status,
        ]);
        return redirect()->route('spa-list.index')->with('message', $request->title . ' created Successfully');
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
        $edit_data = Spa::find($id);
        return view('admin.spa.edit')->with(compact('edit_data'));
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
        if (empty($request->file('image'))) {
            $image = $request->old_image;
        } else {
            $image = $request->file('image')->store('images/spa/list', 'public');
        }

        $data = Spa::find($id);

        $data->title = $request->title;
        $data->subtitle = $request->subtitle;
        $data->slug = Str::slug($request->title);
        $data->excerpt = $request->excerpt;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->image = $image;
        $data->status = $request->status;

        $data->save();

        return redirect()->route('spa-list.index')->with('message', $request->title . ' edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Spa::find($id);
        $data->delete();
        return redirect()->route('spa-list.index')->with('message', $data->title . ' deleted Successfully');
    }
}
