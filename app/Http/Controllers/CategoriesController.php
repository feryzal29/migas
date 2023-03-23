<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Categories::all();
        return view('admin.categories',compact('data'));
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
            'name'=>'required',
            'slug'=>'required'
        ]);  
        
        $categories = Categories::create([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return redirect()->back()->with(['success'=>'Data Berhasil ditambah']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Categories::findOrFail($id);
        return view('admin.categoriesEdit',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categories $categories)
    {
        $request->validate([
            'name'=>'required',
            'slug'=>'required',
        ]);

        $categories->updateOrFail([
            'name'=>$request->name,
            'slug'=>$request->slug,
        ]);
       
        return redirect('admin/categories')->with(['success'=>'Data Berhasil diganti']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Categories::findOrfail($id);
        $data->delete();
        return redirect('/admin/categories');
    }
}
