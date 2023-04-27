<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = video::orderBy('id','DESC')->get();
        return view('admin.galleryVideo',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galleryVideoPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'link_video' => 'required',
            'status' => 'required',
            'path_image' => 'required',
            'path_image.*' => 'jpg,jpeg,png|max:2000'
        ]);


        $imageName = time().'.'.$request->path_image->extension();
        $uploadedImage = $request->path_image->move(public_path('Images'), $imageName);
        $imagePath = 'images/' . $imageName;

        video::create([
            'judul' => $request->judul,
            'link_video' => $request->link_video,
            'status' => $request->status,
            'path_image' => $imagePath
        ]);
        
        return redirect()->back()->with(['success'=>'Data Berhasil ditambah']);
    }

    /**
     * Display the specified resource.
     */
    public function show(video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(video $video)
    {
        //
    }
}
