<?php

namespace App\Http\Controllers;

use App\Models\faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = faq::all();
        return view('admin.faqList',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faqCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'isi'=>'required'
        ]);  
        
        $categories = faq::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->back()->with(['success'=>'Data Berhasil ditambah']);
    }

    /**
     * Display the specified resource.
     */
    public function show(faq $faq)
    {
        return view('admin.faqView',compact(['faq']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(faq $faq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, faq $faq)
    {
        $request->validate([
            'judul'=>'required',
            'isi'=>'required'
        ]);

        $faq->updateOrFail([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return back()->with(['success'=>'Data Berhasil diganti']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(faq $faq)
    {
        $faq->delete();
        return redirect('/admin/faq')->with(['danger'=>'Data Berhasil dighapus']);
    }
}
