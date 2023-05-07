<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Document::all();
        return view('admin.document',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.documentPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'jenis' => 'required',
            'path_file' => 'required',
            'path_file.*' => 'doc,docx,pdf|max:20000',
            'path_foto' => 'required',
            'path_foto.*' => 'jpg,jpeg,png|max:2000'
        ]);


        $imageName = time().'.'.$request->path_foto->extension();
        $uploadedImage = $request->path_foto->move(public_path('Images'), $imageName);
        $imagePath = 'images/' . $imageName;

        $fileName = time().'.'.$request->path_file->extension();
        $uploadedfile = $request->path_file->move(public_path('files'), $fileName);
        $filePath = 'files/' . $fileName;

        Document::create([
            'judul' => $request->judul,
            'jenis' => $request->jenis,
            'path_file'=>$filePath,
            'path_foto' => $imagePath
        ]);
        
        return redirect()->back()->with(['success'=>'Data Berhasil ditambah']);
    }

    public function downloadFile($id)
    {
        
        $data = DB::table('documents')->where('id',$id)->first();
    	$myFile = public_path("$data->path_file");

    	//return response::download($myFile,$name);
        //return download($myFile);
        return response()->download($myFile);
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        $document->delete();
        return redirect()->back()->with(['success'=>'Data Berhasil dihapus']);
    }
}
