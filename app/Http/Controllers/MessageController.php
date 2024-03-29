<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = Message::query()
        ->when($request->status,function($query,$status){
            $query->when($status == 'sudah-dibaca', function($query){
                $query->whereNotNull('read_at');

            }, function($query){
                $query->whereNull('read_at');
            });
        })
        ->get();
        return view('admin.message',compact(['data']));
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
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        
        return response('OK');
        // return redirect()->back()->with(['success'=>'Data Berhasil ditambah']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        $message->update(['read_at' =>now()]);
        return view('admin.messageShow',compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
