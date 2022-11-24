<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Villa;
use App\Models\VillaImage;
use Illuminate\Http\Request;

class VillaImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if (empty($request->file('image'))) {
            $image = null;
        } else {
            $image = $request->file('image')->store('images/villa/image', 'public');
        }

        VillaImage::create([
            'villa_id' => $request->villa_id,
            'title' => $request->title,
            'image' => $image,
            'status' => $request->status,
        ]);
        return redirect()->route('villa-image.show', [$request->villa_id])->with('message', 'Item added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $villa = Villa::find($id);
        $villa_image = VillaImage::where('villa_id', $villa->id)->get();
        
        return view('admin.villa.image.index')->with(compact('villa', 'villa_image'));
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
        $data = VillaImage::find($id);
        $data->delete();
        return redirect()->route('villa-image.show', [$data->villa_id])->with('message', 'Item Deleted Successfully');
    }
}
