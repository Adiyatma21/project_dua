<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterKelima extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'nilai_kelima_tabel';
}
