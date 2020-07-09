<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use Auth;
use Illuminate\Support\Str;

class PertanyaanController extends Controller
{
   
    public function index()
    {
        $data = PertanyaanModel::get_all();
        return view('pertanyaan.pertanyaan',['data' => $data]);
    }

    
    public function create()
    {
        //
        return view('pertanyaan.tanya_create');
    }

    
    public function insert(Request $request)
    {
        $request->validate([
            'judul' => 'required'
        ]);   
        $userId = Auth::user()->id;
        $data = array(
            'userid' => $userId,
            'judul' => $request["judul"],
            'isi' => $request["isi"],
            'tag' => $request["tag"],
            );
        PertanyaanModel::insert($data);
        return redirect('/pertanyaan');

    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
