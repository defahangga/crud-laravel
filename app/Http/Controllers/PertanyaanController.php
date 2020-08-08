<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function create(Request $request){
        
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            'judul'=>'required|unique:pertanyaan',
            'isi'=>'required'
            ]);

        $query = DB::table('pertanyaan')->insert([
            "judul"=>$request["judul"],
            "isi"=>$request["isi"]
        ]);
        return redirect('/pertanyaan')->with('success', 'Post Berhasil Disimpan!');
    }

    public function index(){
        $question = DB::table('pertanyaan')->get();
        return view('index', compact('question'));
    }

    public function show($id){
        $post = DB::table('pertanyaan')->where('id', $id)->first();
        return view('show', compact('post'));
    }

    public function edit($id){
        $post = DB::table('pertanyaan')->where('id', $id)->first();
        return view('edit', compact('post'));
    }

    public function update($pertanyaan_id, Request $request){
        $query = DB::table('pertanyaan')
                ->where('id', $pertanyaan_id)
                ->update([
                    'judul'=>$request['judul'],
                    'isi'=>$request['isi']
                ]);
        return redirect('/pertanyaan')->with('success', 'Post Berhasil Diupdate!');
    }

    public function destroy($pertanyaan_id){
        $query = DB::table('pertanyaan')
                ->where('id', $pertanyaan_id)
                ->delete();
        return redirect('/pertanyaan')->with('success', 'Post Berhasil Dihapus!');
    }
}
