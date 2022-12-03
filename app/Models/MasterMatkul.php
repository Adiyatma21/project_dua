<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterMatkul extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'master_matkul_tabel';
}
