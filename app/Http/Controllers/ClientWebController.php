<?php

namespace App\Http\Controllers;

use App\Helpers\Utility;
use App\Models\contact;
use App\Models\Document;
use App\Models\faq;
use App\Models\header;
use App\Models\myteam;
use App\Models\photo;
use App\Models\Posting;
use App\Models\Profile;
use App\Models\video;
use App\Models\visimisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientWebController extends Controller
{
    public function index(){
        $header = header::find(1);
        $profil = Profile::find(1);
        $visi = visimisi::find(1);
        $myteams = myteam::all();
        $videos = video::find(1);
        $posting = Posting::orderBy('id','DESC')->get()
                    ->each(function($item){
                        $item->isi = Utility::cuplikan_isi($item->isi,200);
                    });
        $faq = faq::all();
        $contact = contact::find(1);
        return view('index',compact(['header','profil','visi','myteams','videos','posting','faq','contact']));
    }

    public function about(){
        $profil = Profile::find(1);
        $visi = visimisi::find(1);
        $myteams = myteam::all();
        // $video = DB::table('videos')
        //             ->where('status','=','2')
        //             ->orderByDesc('id')
        //             ->limit(1)
        //             ->get();
        $videos = video::find(1);
        $header = header::find(1);
        $contact = contact::find(1);
        return view('profile',compact(['profil','visi','myteams','videos','header','contact']));
    }

    public function posting(){
        $header = header::find(1);
        $posting = Posting::orderBy('id','DESC')->get()
                    ->each(function($item){
                        $item->isi = Utility::cuplikan_isi($item->isi,200);
                    });
        $contact = contact::find(1);
        return view('posting',compact(['posting','header','contact']));
    }

    public function detail_posting($id){
        $header = header::find(1);
        $post_all = Posting::orderBy('id','DESC')->limit(6)->get();
        $posting = Posting::find($id);
        $contact = contact::find(1);
        return view('postingDetails',compact('posting','post_all','header','contact'));
    }

    public function gallery_photos(){
        $photo = photo::all();
        $header = header::find(1);
        $contact = contact::find(1);
        return view('galleryPhotos',compact(['photo','header','contact']));
    }

    public function gallery_video(){
        $video = video::all();
        $header = header::find(1);
        $contact = contact::find(1);
        return view('galleryVideo',compact(['video','header','contact']));
    }

    public function contact(){
        $header = header::find(1);
        $contact = contact::find(1);
        return view('contact',compact(['header','contact']));
    }

    public function download(){
        $data = Document::all();
        $header = header::find(1);
        $contact = contact::find(1);
        return view('download',compact(['data','header','contact']));
    }

    public function downloadFile($id)
    {
        
        $data = DB::table('documents')->where('id',$id)->first();
    	$myFile = public_path("$data->path_file");

    	//return response::download($myFile,$name);
        //return download($myFile);
        return response()->download($myFile);
    }
}
