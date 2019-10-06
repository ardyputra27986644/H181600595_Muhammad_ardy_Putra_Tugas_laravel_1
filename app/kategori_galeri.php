<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Kategori_galeri extends Model
{

    protected $table="kategori_galeri";

    protected $fillable=['users_id','nama'];
}
