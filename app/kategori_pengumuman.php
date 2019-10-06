<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\kategori_pengumuman;

class Kategori_pengumuman extends Model
{

    protected $table="kategori_pengumuman";

    protected $fillable=['users_id','nama'];
}