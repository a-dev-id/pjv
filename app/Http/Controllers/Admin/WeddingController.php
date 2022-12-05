<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wedding;
use App\Models\WeddingImage;
use App\Models\WeddingSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WeddingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $weddings = Wedding::all();
        $setting = WeddingSetting::find(1);
        $wedding_images = WeddingImage::where('wedding_id', $setting->id)->get();
        return view('admin.wedding.index')->with(compact('weddings', 'setting', 'wedding_images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.wedding.create');
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
            $image = $request->file('image')->store('images/wedding/list', 'public');
        }

        Wedding::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'slug' => Str::slug($request->title),
            'excerpt' => $request->excerpt,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $image,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'status' => $request->status,
        ]);
        return redirect()->route('wedding-list.index')->with('message', $request->title . ' created Successfully');
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
        $edit_data = Wedding::find($id);
        return view('admin.wedding.edit')->with(compact('edit_data'));
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
            $image = $request->file('image')->store('images/wedding/list', 'public');
        }

        $data = Wedding::find($id);

        $data->title = $request->title;
        $data->subtitle = $request->subtitle;
        $data->slug = Str::slug($request->title);
        $data->excerpt = $request->excerpt;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->image = $image;
        $data->button_text = $request->button_text;
        $data->button_link = $request->button_link;
        $data->status = $request->status;

        $data->save();

        return redirect()->route('wedding-list.index')->with('message', $request->title . ' edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Wedding::find($id);
        $data->delete();
        return redirect()->route('wedding-list.index')->with('message', $data->title . ' deleted Successfully');
    }
}
