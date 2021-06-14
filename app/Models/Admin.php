<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admins';
    protected $guarded = ['id'];
    
    public function berita(){
    	return $this->belongsTo('App\Models\Berita', 'id_admin');
    }
    public function magang(){
    	return $this->belongsTo('App\Models\Magang', 'id_admin');
    }
    public function prestasi(){
    	return $this->belongsTo('App\Models\Prestasi', 'id_admin');
    }
    public function pengumuman(){
    	return $this->belongsTo('App\Models\Pengumuman', 'id_admin');
    }
}