<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPrestasi extends Model
{
    use HasFactory;

    protected $table = 'kat_prestasi';
    protected $guarded = ['id'];

    public function prestasi(){
    	return $this->belongsTo('App\Models\Prestasi', 'id_kategori_prestasi');
    }
}
