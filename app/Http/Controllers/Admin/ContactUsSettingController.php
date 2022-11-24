<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUsSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContactUsSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = ContactUsSetting::find(1);
        return view('admin.contactus.index')->with(compact('setting'));
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
        if (empty($request->file('banner_image'))) {
            $banner_image = $request->old_banner_image;
        } else {
            $banner_image = $request->file('banner_image')->store('images/contactus/setting', 'public');
        }

        if (empty($request->file('phone_icon'))) {
            $phone_icon = $request->old_phone_icon;
        } else {
            $phone_icon = $request->file('phone_icon')->store('images/contactus/setting', 'public');
        }

        if (empty($request->file('address_icon'))) {
            $address_icon = $request->old_address_icon;
        } else {
            $address_icon = $request->file('address_icon')->store('images/contactus/setting', 'public');
        }

        if (empty($request->file('email_icon'))) {
            $email_icon = $request->old_email_icon;
        } else {
            $email_icon = $request->file('email_icon')->store('images/contactus/setting', 'public');
        }

        if (empty($request->file('whatsapp_icon'))) {
            $whatsapp_icon = $request->old_whatsapp_icon;
        } else {
            $whatsapp_icon = $request->file('whatsapp_icon')->store('images/contactus/setting', 'public');
        }

        $data = ContactUsSetting::find($id);
        $data->title = $request->title;
        $data->subtitle = $request->subtitle;
        $data->slug = Str::slug($request->title);
        $data->excerpt = $request->excerpt;
        $data->description = $request->description;
        $data->banner_image = $banner_image;
        $data->meta_title = $request->meta_title;
        $data->meta_description = $request->meta_description;
        $data->phone_no = $request->phone_no;
        $data->phone_icon = $phone_icon;
        $data->address_text = $request->address_text;
        $data->address_icon = $address_icon;
        $data->email_text = $request->email_text;
        $data->email_icon = $email_icon;
        $data->whatsapp_no = $request->whatsapp_no;
        $data->whatsapp_text = $request->whatsapp_text;
        $data->whatsapp_icon = $whatsapp_icon;
        $data->general_text = $request->general_text;
        $data->general_email = $request->general_email;
        $data->media_text = $request->media_text;
        $data->media_email = $request->media_email;
        $data->google_map = $request->google_map;
        $data->status = $request->status;

        $data->save();

        return redirect()->route('contact-us-setting.index')->with('message', $request->title . ' updated Successfully');
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
