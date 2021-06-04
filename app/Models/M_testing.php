<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Facades\DB;

class M_testing extends Model
{
    use HasFactory;
    
    protected $table = 'magang';
    protected $primarykey = 'id_magang';
    
}
