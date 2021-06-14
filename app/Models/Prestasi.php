<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;
    protected $table = 'prestasi';
    protected $guarded = ['id'];

    public function katprestasi(){
    	return $this->hasMany('App\Models\KategoriPrestasi', 'id');
    }
    public function adminprestasi(){
    	return $this->hasMany('App\Models\Admin', 'id');
    }
}
