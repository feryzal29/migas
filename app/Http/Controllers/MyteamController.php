<?php

namespace App\Http\Controllers;

use App\Models\myteam;
use Illuminate\Http\Request;

class MyteamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = myteam::all();
        return view('admin.myTeams',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.myTeamsPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'jabatan' => 'required',
            'path_image' => 'required',
            'path_image.*' => 'jpg,jpeg,png|max:2000'
        ]);


        $imageName = time().'.'.$request->path_image->extension();
        $uploadedImage = $request->path_image->move(public_path('Images'), $imageName);
        $imagePath = 'images/' . $imageName;

        myteam::create([
            'name' => $request->name,
            'jabatan' => $request->jabatan,
            'moto' => $request->moto,
            'path_image' => $imagePath
        ]);
        
        return redirect()->back()->with(['success'=>'Data Berhasil ditambah']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = myteam::find($id);
        return view('admin.myTeamsShow',compact(['data']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(myteam $myteam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, myteam $myteam)
    {
        $request->validate([
            'name' => 'required',
            'jabatan' => 'required',
        ]);

        $imageName = time().'.'.$request->path_image->extension();
        $uploadedImage = $request->path_image->move(public_path('Images'), $imageName);
        $imagePath = 'images/' . $imageName;

        $myteam->updateOrFail([
            'name' => $request->name,
            'jabatan' => $request->jabatan,
            'moto' => $request->moto,
            'path_image' => $imagePath
        ]);
       
        return redirect('/admin/myteams')->with(['success'=>'Data Berhasil diganti']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = myteam::findOrfail($id);
        $data->delete();
        return redirect('/admin/myteams')->with(['danger'=>'Data Berhasil diganti']);
    }
}
