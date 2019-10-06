<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\galeri;
use App\kategori_galeri;


class galeri_controller extends Controller
{
    //
    public function index (){
        $galeri=galeri::all();

        return view('galeri.index', compact ('galeri'));
    }
    public function show($id){
        $galeri=kategori_galeri::find($id);

        return view('galeri.show', compact('galeri'));
    }


    public function create(){
        $kategori_galeri=kategori_galeri::pluck('nama','id');

        return view('kategori_galeri.create')->with('kategori_galeri',$kategori_galeri);
    }

    public function store(Request $request){
        $input=$request->all();
        galeri::create($input);
        return redirect(route ('kategori_galeri.index'));
    }
}