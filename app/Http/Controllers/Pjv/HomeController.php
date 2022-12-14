<?php

namespace App\Http\Controllers\Pjv;

use App\Http\Controllers\Controller;
use App\Models\ContactUsSetting;
use App\Models\HomeSetting;
use App\Models\HomeSlider;
use App\Models\HomeSlider2;
use App\Models\RestaurantSetting;
use App\Models\VillaSetting;
use App\Models\WeddingSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = ContactUsSetting::where('id', '1')->first();
        $setting = HomeSetting::where('id', '1')->first();
        $sliders = HomeSlider::all();
        $sliders2 = HomeSlider2::all();
        $dining = RestaurantSetting::where('id', '1')->first();
        $accommodation = VillaSetting::where('id', '1')->first();
        $wedding = WeddingSetting::where('id', '1')->first();
        return view('pjv.index')->with(compact('sliders', 'setting', 'sliders2', 'contact', 'dining', 'accommodation', 'wedding'));
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
        //
    }
}
