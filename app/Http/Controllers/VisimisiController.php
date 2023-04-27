<?php

namespace App\Http\Controllers;

use App\Models\visimisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
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
        $data = visimisi::find(1);
        return view('admin.visiMisiMoto',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
            'moto' => 'required'
        ]);
        $id = 1;
        // $fileName = time().$request->file('path_image')->getClientOriginalName();
        // $path = $request->file('path_image')->storeAs($fileName);
        // $gambar = '/public/Images/'.$path;

        // $image_path = $request->file('path_image')->store('Images', 'public');

        $imageName = time().'.'.$request->path_image->extension();
        $uploadedImage = $request->path_image->move(public_path('Images'), $imageName);
        $imagePath = 'images/' . $imageName;

        visimisi::updateOrCreate(
            ['id' => $id],
            [
            'id'=>$id,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'moto' => $request->moto,
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
        $data = visimisi::find($id);
        return view('admin.visiMisiUpdate',compact(['data']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(visimisi $visimisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, visimisi $visimisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(visimisi $visimisi)
    {
        //
    }
}
