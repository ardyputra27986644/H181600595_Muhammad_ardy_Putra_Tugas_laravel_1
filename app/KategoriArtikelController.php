<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\kategori_artikel;

class KategoriArtikelController extends Model
{

    protected $table="KategoriArtikel";

    protected $fillable=['user_id','nama'];
}


