<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magang extends Model
{
    use HasFactory;
    protected $table = 'magang';
    protected $guarded = ['id'];

    public function kategoriMagang(){
    	return $this->hasMany('App\Models\KategoriMagang', 'id');
    }
    public function admin(){
    	return $this->hasMany('App\Models\Admin', 'id');
    }
}
