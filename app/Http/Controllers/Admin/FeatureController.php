<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
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
        if (empty($request->file('icon'))) {
            $icon = null;
        } else {
            $icon = $request->file('icon')->store('images/villa/feature', 'public');
        }

        Feature::create([
            'title' => $request->title,
            'icon' => $icon,
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
        if (empty($request->file('icon'))) {
            $icon = $request->old_icon;
        } else {
            $icon = $request->file('icon')->store('images/villa/feature', 'public');
        }

        $data = Feature::find($id);

        $data->title = $request->title;
        $data->icon = $icon;
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
        $data = Feature::find($id);
        $data->delete();
        return redirect()->route('villa-list.index')->with('message', $data->title . ' deleted Successfully');
    }
}
