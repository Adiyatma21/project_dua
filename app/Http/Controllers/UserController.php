<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function goHome()
    {
        # code...
        return view('dashboard');
    }
    public function goKnn()
    {
        # code...
        return view('knn');
    }
    public function goTabel()
    {
        # code...
        return view('tabel');
    }
}
