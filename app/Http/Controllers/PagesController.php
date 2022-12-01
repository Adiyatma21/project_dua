<?php

namespace App\Http\Controllers;

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
}
