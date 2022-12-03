<?php

namespace App\Http\Controllers;

use App\Models\MasterMatkul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MatkulController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'nama_matkul' => 'required',
            'sks' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $matkul = MasterMatkul::create([
            'nama_matkul' => $request->nama_matkul,
            'sks' => $request->sks,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Matkul Berhasil Ditambakan',
            'data' => $matkul,
            'code' => 200
        ]);
    }

    public function destroy(MasterMatkul $matkul)
    {
        MasterMatkul::destroy($matkul->id);

        return response()->json([
            'status' => true,
            'message' => 'Matkul Berhasil Dihapus',
            'code' => 200
        ]);
    }

    public function update(Request $request, MasterMatkul $matkul)
    {
        $validator = Validator::make(request()->all(), [
            'nama_matkul' => 'required',
            'sks' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $matkul->update([
            'nama_matkul' => $request->nama_matkul,
            'sks' => $request->sks,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Matkul Berhasil Diupdate',
            'data' => $matkul,
            'code' => 200
        ]);
    }
}
