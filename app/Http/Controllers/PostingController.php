<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Posting;
use Illuminate\Http\Request;

class PostingController extends Controller
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
        $categories = Categories::all();
        return view('admin.postingan',compact(['categories']));
    }

    public function postingList(){
        $data = Posting::with([
            'categories',
        ])->get();
        return view('admin.postingList',compact(['data']));
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
            'judul' => 'required',
            'categories' => 'required',
            'isi' => 'required',
            'slug' => 'required',
            'path_image' => 'required',
            'path_image.*' => 'jpg,jpeg,png|max:2000'
        ]);
        $status_aktif = 1;
        // $fileName = time().$request->file('path_image')->getClientOriginalName();
        // $path = $request->file('path_image')->storeAs($fileName);
        // $gambar = '/public/Images/'.$path;

        // $image_path = $request->file('path_image')->store('Images', 'public');

        $imageName = time().'.'.$request->path_image->extension();
        $uploadedImage = $request->path_image->move(public_path('Images'), $imageName);
        $imagePath = 'images/' . $imageName;

        Posting::create([
            'judul' => $request->judul,
            'categories_id' => $request->categories,
            'slug' => $request->slug,
            'isi' => $request->isi,
            'path_image' => $imagePath,
            'status_active' => $status_aktif
        ]);
        
        return redirect()->back()->with(['success'=>'Data Berhasil ditambah']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Posting::find($id);
        $categories = Categories::all();
        return view('admin.postinganShow',compact(['categories','data']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posting $posting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Posting $posting)
    {

        $request->validate([
            'judul' => 'required',
            'categories' => 'required',
            'isi' => 'required',
            'slug' => 'required',
            'path_image' => 'required',
            'path_image.*' => 'jpg,jpeg,png|max:2000'
        ]);

        $status_aktif = 1;
        $imageName = time().'.'.$request->path_image->extension();
        $uploadedImage = $request->path_image->move(public_path('Images'), $imageName);
        $imagePath = 'images/' . $imageName;

        $posting->updateOrFail([
            'judul' => $request->judul,
            'categories_id' => $request->categories,
            'slug' => $request->slug,
            'isi' => $request->isi,
            'path_image' => $imagePath,
            'status_active' => $status_aktif
        ]);
       
        return redirect('/admin/postingList')->with(['success'=>'Data Berhasil diganti']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Posting::findOrfail($id);
        $data->delete();
        return redirect('/admin/postingList');
    }
}
