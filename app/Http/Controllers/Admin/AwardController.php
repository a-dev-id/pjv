<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\AwardSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $awards = Award::all();
        $setting = AwardSetting::find(1);
        return view('admin.award.index')->with(compact('awards', 'setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.award.create');
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
            $image = $request->file('image')->store('images/award/list', 'public');
        }

        Award::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'slug' => Str::slug($request->title),
            'excerpt' => $request->excerpt,
            'description' => $request->description,
            'image' => $image,
            'status' => $request->status,
        ]);
        return redirect()->route('award-list.index')->with('message', $request->title . ' created Successfully');
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
        $edit_data = Award::find($id);
        return view('admin.award.edit')->with(compact('edit_data'));
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
            $image = $request->file('image')->store('images/award/list', 'public');
        }

        $data =  Award::find($id);

        $data->title = $request->title;
        $data->subtitle = $request->subtitle;
        $data->slug = Str::slug($request->title);
        $data->excerpt = $request->excerpt;
        $data->description = $request->description;
        $data->image = $image;
        $data->status = $request->status;

        $data->save();

        return redirect()->route('award-list.index')->with('message', $request->title . ' edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Award::find($id);
        $data->delete();
        return redirect()->route('award-list.index')->with('message', $data->title . ' deleted Successfully');
    }
}
