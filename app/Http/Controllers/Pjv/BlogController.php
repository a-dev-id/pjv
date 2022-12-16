<?php

namespace App\Http\Controllers\Pjv;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogSetting;
use App\Models\ContactUsSetting;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = ContactUsSetting::where('id', '1')->first();
        $setting = BlogSetting::where('id', '1')->first();
        $blogs = Blog::paginate(5);
        return view('pjv.blog')->with(compact('contact', 'blogs', 'setting'));
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
    public function show($slug)
    {
        $contact = ContactUsSetting::where('id', '1')->first();
        $setting = BlogSetting::where('id', '1')->first();
        // $blog = Blog::find($slug);
        $blog = Blog::where('slug', '=', $slug)->first();
        $blogs = Blog::limit(5)->get();
        
        return view('pjv.blog-detail')->with(compact('blog', 'blogs', 'contact', 'setting'));
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
