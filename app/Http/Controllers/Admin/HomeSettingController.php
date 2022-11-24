<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSetting;
use App\Models\HomeSlider;
use App\Models\HomeSlider2;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = HomeSlider::all();
        $sliders2 = HomeSlider2::all();
        $setting = HomeSetting::find(1);
        return view('admin.home.index')->with(compact('setting', 'sliders', 'sliders2'));
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
        //
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
        if (empty($request->file('image'))) {
            $image = $request->old_image;
        } else {
            $image = $request->file('image')->store('images/home/setting', 'public');
        }

        if (empty($request->file('image1'))) {
            $image1 = $request->old_image1;
        } else {
            $image1 = $request->file('image1')->store('images/home/setting', 'public');
        }

        if (empty($request->file('image2'))) {
            $image2 = $request->old_image2;
        } else {
            $image2 = $request->file('image2')->store('images/home/setting', 'public');
        }

        if (empty($request->file('image3'))) {
            $image3 = $request->old_image3;
        } else {
            $image3 = $request->file('image3')->store('images/home/setting', 'public');
        }

        $data = HomeSetting::find($id);
        $data->title = $request->title;
        $data->subtitle = $request->subtitle;
        $data->slug = Str::slug($request->title);
        $data->excerpt = $request->excerpt;
        $data->description = $request->description;
        $data->image = $image;
        $data->image1 = $image1;
        $data->image2 = $image2;
        $data->image3 = $image3;
        $data->title1 = $request->title1;
        $data->excerpt1 = $request->excerpt1;
        $data->title2 = $request->title2;
        $data->excerpt2 = $request->excerpt2;
        $data->title3 = $request->title3;
        $data->excerpt3 = $request->excerpt3;
        $data->status = $request->status;

        $data->save();

        return redirect()->route('home-setting.index')->with('message', $request->title . ' updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
