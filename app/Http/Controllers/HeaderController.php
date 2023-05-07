<?php

namespace App\Http\Controllers;

use App\Models\header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = header::find(1);
        return view('admin.header',compact(['data']));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(header $header)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, header $header)
    {
        $request->validate([
            'site_name'=>'required',
            'tag_line'=>'required',
            'description'=>'required'
        ]);
            $imageName = time().'.'.$request->path_logo->extension();
            $uploadedImage = $request->path_logo->move(public_path('Images'), $imageName);
            $imagePath = 'images/' . $imageName;

        if($request->path_logo == null){
            $header->updateOrFail([
                'site_name' => $request->site_name,
                'tag_line' => $request->tag_line,
                'description' => $request->description
            ]);
        } else {
            $header->updateOrFail([
                'site_name' => $request->site_name,
                'tag_line' => $request->tag_line,
                'description' => $request->description,
                'path_logo' => $imagePath,
            ]);
        }

        return back()->with(['success'=>'Data Berhasil diganti']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(header $header)
    {
        //
    }
}
