<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\HomeSetting;
use App\Models\OfferSetting;
use App\Models\RestaurantSetting;
use App\Models\VillaSetting;
use App\Models\WeddingSetting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = HomeSetting::where('id', '1')->first();
        $accommodation_setting = VillaSetting::where('id', '1')->first();
        $offer_setting = OfferSetting::where('id', '1')->first();
        $dining_setting = RestaurantSetting::where('id', '1')->first();
        $wedding_setting = WeddingSetting::where('id', '1')->first();
        $blog_setting = BlogSetting::where('id', '1')->first();
        return view('mobile.index')->with(compact('setting', 'accommodation_setting', 'offer_setting', 'dining_setting', 'wedding_setting', 'blog_setting'));
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
