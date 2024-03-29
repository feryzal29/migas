<?php

namespace App\Http\Controllers;

use App\Models\photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = photo::all();
        return view('admin.galleryPhotos',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galleryPhotosPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'status' => 'required',
            'path_image' => 'required',
            'path_image.*' => 'jpg,jpeg,png|max:2000'
        ]);


        $imageName = time().'.'.$request->path_image->extension();
        $uploadedImage = $request->path_image->move(public_path('Images'), $imageName);
        $imagePath = 'images/' . $imageName;

        photo::create([
            'judul' => $request->judul,
            'status' => $request->status,
            'path_image' => $imagePath
        ]);
        
        return redirect()->back()->with(['success'=>'Data Berhasil ditambah']);
    }

    /**
     * Display the specified resource.
     */
    public function show(photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(photo $photo)
    {
        //
    }
}
