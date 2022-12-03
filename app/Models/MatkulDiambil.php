<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatkulDiambil extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function dosen()
    {
        return $this->belongsTo(User::class, 'users');
    }

    public function kelompok()
    {
        return $this->belongsTo(MasterKelompok::class, 'master_kelompok_tabel');
    }

    public function matkul()
    {
        return $this->belongsTo(MasterMatkul::class, 'master_matkul_tabel');
    }
}
