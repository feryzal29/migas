<?php

namespace App\Helpers;
use Illuminate\Support\Str;
class Utility
{

    
    public static function cuplikan_isi($isi, $limit = 100)
    {
        $isi = strip_tags($isi);
        $isi = str_replace("&rsquo;", "'", $isi);
        $isi = preg_replace("/&#?[a-z0-9]{2,8};/i", "", $isi);
        return Str::limit($isi, $limit, '...');
    }
}
