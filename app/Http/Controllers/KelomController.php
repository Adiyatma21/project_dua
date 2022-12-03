<?php

namespace App\Http\Controllers;

use App\Models\MasterKelompok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KelomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(), [

            'kode_kelompok'=> 'required',

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $kelom = MasterKelompok::create([
            'kode_kelompok' => $request->kode_kelompok,

        ]);

        return response()->json([
            'status' => true,
            'message' => 'Kelompok Berhasil ditambah',
            'data' => $kelom,
            'code' => 200
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Masterkelompok $kelom)
    {
        $validator = Validator::make(request()->all(), [
            'kode_kelompok' => 'required',
            
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $kelom->update([
            'kode_kelompok' => $request->kode_kelompok,
            
        ]);

        return response()->json([
            'status' => true,
            'message' => 'kelompok Berhasil Diupdate',
            'data' => $kelom,
            'code' => 200
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterKelompok $kelom)
    {
        MasterKelompok::destroy($kelom->id);

        return response()->json([
            'status' => true,
            'message' => 'Matkul Berhasil Dihapus',
            'code' => 200
        ]);
    }
}
