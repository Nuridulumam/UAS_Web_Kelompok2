<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;
    protected $table = 'pengumuman';
    protected $guarded = ['id'];
    public function admin(){
    	return $this->hasMany('App\Models\Admin', 'id');
    }
}
