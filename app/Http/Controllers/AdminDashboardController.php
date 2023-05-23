<?php

namespace App\Http\Controllers;

use App\Models\adminDashboard;
use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\photo;
use App\Models\Posting;
use App\Models\video;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
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
        $posting = Posting::all();
        $gambar = photo::all();
        $video = video::all();
        $message = Message::all();
        $postingCount = $posting->count();
        $gamparCount = $gambar->count();
        $videoCount = $video->count();
        $messageCount = $message->count();
        return view('admin.index',compact(['postingCount','gamparCount','videoCount','messageCount']));
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
    public function show(adminDashboard $adminDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(adminDashboard $adminDashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, adminDashboard $adminDashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(adminDashboard $adminDashboard)
    {
        //
    }
}
