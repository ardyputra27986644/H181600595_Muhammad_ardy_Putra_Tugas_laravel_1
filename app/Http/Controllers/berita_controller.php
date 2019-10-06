<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\berita;
use App\Kategori_berita;


class berita_controller extends Controller
{
    //
    public function index (){
        $berita=berita::all();

        return view('berita.index', compact ('berita'));
    }
    public function show($id){
        $berita=berita::find($id);

        return view('berita.show', compact('berita'));
    }


    public function create(){
        $kategori_berita=kategori_berita::pluck('nama','id');

        return view('berita.create')->with('kategori_berita',$kategori_berita);
    }

    public function store(Request $request){
        $input=$request->all();
        berita::create($input);
        return redirect(route ('kategori_berita.index'));
    }
}