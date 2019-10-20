<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    public function index()
    {
        $KategoriArtikel = \App\KategoriArtikel::all();
        
    	return view('kategori_artikel.index',compact('KategoriArtikel'));    
    }
    
    public function show($id)
    {
        $KategoriArtikel = \App\KategoriArtikel::find($id);

        if (empty($KategoriArtikel)){
            return  redirect(route('kategori_artikel.index'));
        }

    	return view('kategori_artikel.show',compact('KategoriArtikel'));    
    }

    public function create(){
    	return view('kategori_artikel.create');
    }
    public function store(Request $request){
    	$input=$request->all();
    	KategoriArtikel::create($input);
        return redirect(route('kategori_artikel.index'));
    }

    public function edit($id){
        $KategoriArtikel = \App\KategoriArtikel::find($id);

        if (empty($KategoriArtikel)){
           return redirect(route('kategori_artikel.index'));
        }

        return view('kategori_artikel.edit',compact('KategoriArtikel'));
    }

    public function update(Request $request,$id){
    	$input=$request->all();
    	KategoriArtikel::find($id)->update($input);
        return redirect(route('kategori_artikel.index'));
    }
}
