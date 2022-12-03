<?php

namespace App\Http\Controllers;

use App\Models\MasterKelompok;
use App\Models\MasterMatkul;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function tabel()
    {
        return view('tabel' , ['dosen' => User::where('role', 'dosen')->get()]);
    }

    public function preview(User $dosen)
    {
        return view('preview', ['dosen' => $dosen]);
    }

    public function matkul()
    {
        return view('matkul', ['matkul' => MasterMatkul::all()]);
    }

    public function kelom()
    {
        return view('kelompok', [
            'dosen' => User::where('role', 'dosen')->get(),
            'matkul' => MasterMatkul::all(),
            'kelom' => MasterKelompok::all()
        ]);
    }
}
