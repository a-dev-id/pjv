<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\ExperienceImage;
use Illuminate\Http\Request;

class ExperienceImageController extends Controller
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
            $image = $request->file('image')->store('images/experience/image', 'public');
        }

        ExperienceImage::create([
            'experience_id' => $request->experience_id,
            'title' => $request->title,
            'image' => $image,
            'status' => $request->status,
        ]);
        return redirect()->route('experience-image.show', [$request->experience_id])->with('message', 'Item added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $experience =  Experience::find($id);
        $experience_image = experienceImage::where('experience_id', $experience->id)->get();
        
        return view('admin.experience.image.index')->with(compact('experience', 'experience_image'));
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
        $data = experienceImage::find($id);
        $data->delete();
        return redirect()->route('experience-image.show', [$data->experience_id])->with('message', 'Item Deleted Successfully');
    }
}
