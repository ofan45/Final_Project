<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {
    public static function get_all(){
        $tanya = DB::table('pertanyaan')->get();
        return $tanya;
    }

    public static function insert($data){
        $new_data = DB::table('pertanyaan')->insert($data);
        return $new_data;
    }
}
