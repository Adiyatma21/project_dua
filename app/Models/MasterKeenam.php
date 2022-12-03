<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterKeenam extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'nilai_keenam_tabel';
}
