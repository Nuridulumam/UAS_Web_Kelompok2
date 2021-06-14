<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriMagang extends Model
{
    use HasFactory;

    protected $table = 'kat_magang';
    protected $guarded = ['id'];

    public function magang(){
    	return $this->belongsTo('App\Models\Magang', 'id_kategori_magang');
    }
}
