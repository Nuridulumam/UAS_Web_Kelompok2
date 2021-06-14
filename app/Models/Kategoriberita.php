<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    use HasFactory;

    protected $table = 'kat_berita';
    protected $guarded = ['id'];

    public function berita(){
    	return $this->belongsTo('App\Models\Berita', 'id_kategori_berita');
    }
}
