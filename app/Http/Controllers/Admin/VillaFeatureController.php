<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Villa;
use App\Models\VillaFeature;
use Illuminate\Http\Request;

class VillaFeatureController extends Controller
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
        VillaFeature::create([
            'villa_id' => $request->villa_id,
            'feature_id' => $request->feature_id,
            'status' => $request->status,
        ]);
        return redirect()->route('villa-feature.show', [$request->villa_id])->with('message', 'Item added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $features = Feature::all();
        $villa = Villa::find($id);
        $villa_feature = VillaFeature::where('villa_id', $villa->id)->get();
        
        return view('admin.villa.feature.index')->with(compact('features', 'villa', 'villa_feature'));
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
        $data = VillaFeature::find($id);
        $data->delete();
        return redirect()->route('villa-feature.show', [$data->villa_id])->with('message', 'Item Deleted Successfully');
    }
}
