<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPengumuman extends Model
{
	protected $table="kategori_pengumuman";

	protected $fillable=[
	'nama', 'users_id', 'updated_at', 'created_at',
	];

	protected $casts=[

	];
}