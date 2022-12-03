<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterKeduabelas extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'nilai_keduabelas_tabel';
}
