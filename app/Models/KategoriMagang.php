<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriMagang extends Model
{
    use HasFactory;

    protected $table = 'kat_magang';
    protected $guarded = ['id'];
}
