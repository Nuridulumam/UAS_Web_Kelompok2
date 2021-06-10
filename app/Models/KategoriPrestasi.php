<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPrestasi extends Model
{
    use HasFactory;

    protected $table = 'kat_prestasi';
    protected $guard = 'id';
    protected $fillable = ['kat_prestasi'];
}
