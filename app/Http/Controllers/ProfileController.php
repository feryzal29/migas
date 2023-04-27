<?php

namespace App\Http\Controllers;

use App\Models\myteam;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        $profile = Profile::find(1);
        return view('admin.profileView',compact(['profile']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.profile');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'slug' => 'required',
            'path_image' => 'required',
            'path_image.*' => 'jpg,jpeg,png|max:2000'
        ]);
        $id = 1;
        // $fileName = time().$request->file('path_image')->getClientOriginalName();
        // $path = $request->file('path_image')->storeAs($fileName);
        // $gambar = '/public/Images/'.$path;

        // $image_path = $request->file('path_image')->store('Images', 'public');

        $imageName = time().'.'.$request->path_image->extension();
        $uploadedImage = $request->path_image->move(public_path('Images'), $imageName);
        $imagePath = 'images/' . $imageName;

        Profile::updateOrCreate(
            ['id' => $id],
            [
            'id'=>$id,
            'judul' => $request->judul,
            'categories_id' => $request->categories,
            'slug' => $request->slug,
            'isi' => $request->isi,
            'path_image' => $imagePath,
            ]
        );
        
        return redirect()->back()->with(['success'=>'Data Berhasil ditambah']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Profile::find($id);
        return view('admin.profileShow',compact(['data']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'slug' => 'required',
            'path_image' => 'required',
            'path_image.*' => 'jpg,jpeg,png|max:2000'
        ]);

        $imageName = time().'.'.$request->path_image->extension();
        $uploadedImage = $request->path_image->move(public_path('Images'), $imageName);
        $imagePath = 'images/' . $imageName;

        $profile->updateOrFail([
            'judul' => $request->judul,
            'slug' => $request->slug,
            'isi' => $request->isi,
            'path_image' => $imagePath
        ]);
       
        return redirect('/admin/postingList')->with(['success'=>'Data Berhasil diganti']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
