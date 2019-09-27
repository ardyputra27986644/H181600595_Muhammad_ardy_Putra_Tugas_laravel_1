<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\pengumuman;

class pengumuman extends Model
{

    protected $table="pengumuman";

    protected $fillable=['judul','isi','usser_id'];
}