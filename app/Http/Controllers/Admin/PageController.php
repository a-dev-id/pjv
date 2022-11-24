<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages =  Page::all();
        return view('admin.page.index')->with(compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
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
            $banner_image = $request->file('banner_image')->store('images/page/list', 'public');
        }

        Page::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'slug' => Str::slug($request->title),
            'excerpt' => $request->excerpt,
            'description' => $request->description,
            'banner_image' => $banner_image,
            'meta_description' => $request->meta_description,
            'meta_title' => $request->meta_title,
            'status' => $request->status,
        ]);
        return redirect()->route('page-list.index')->with('message', $request->title . ' created Successfully');
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
        $edit_data = page::find($id);
        return view('admin.page.edit')->with(compact('edit_data'));
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
            $banner_image = $request->file('banner_image')->store('images/page/list', 'public');
        }

        $data = page::find($id);

        $data->title = $request->title;
        $data->subtitle = $request->subtitle;
        $data->slug = Str::slug($request->title);
        $data->excerpt = $request->excerpt;
        $data->description = $request->description;
        $data->banner_image = $banner_image;
        $data->meta_description = $request->meta_description;
        $data->meta_title = $request->meta_title;
        $data->status = $request->status;

        $data->save();

        return redirect()->route('page-list.index')->with('message', $request->title . ' edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = page::find($id);
        $data->delete();
        return redirect()->route('page-list.index')->with('message', $data->title . ' deleted Successfully');
    }
}
