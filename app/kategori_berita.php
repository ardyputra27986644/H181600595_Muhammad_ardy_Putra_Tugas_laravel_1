<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Kategori_berita extends Model
{

    protected $table="kategori_berita";

    protected $fillable=['user_id','nama'];

}
