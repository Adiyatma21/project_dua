<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\MasterKelompok;
use App\Models\MasterMatkul;
use App\Models\MasterPertama;
use App\Models\MasterKedua;
use App\Models\MasterKetiga;
use App\Models\MasterKeempat;
use App\Models\MasterKetuju;
use App\Models\MasterKedelapan;
use App\Models\MasterKesembilan;
use App\Models\MasterKesepuluh;
use App\Models\MasterKesebelas;
use App\Models\MasterKeduabelas;
use App\Models\MasterKetigabelas;
use App\Models\MasterKeempatbelas;
use App\Models\MasterKeenam;
use App\Models\MasterKelima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tabel');

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
     * 
     */
    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            
            'total_satu'=> 'required',
            'total_dua'=> 'required',
            'total_hadir'=> 'required',
            'nilai_pertama'=> 'required',

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $pertama = MasterPertama::create([
            'user_id' => $request->user_id,
            'total_satu' => $request->total_satu,
            'total_dua' => $request->total_dua,
            'total_hadir' => $request->total_hadir,
            'nilai_pertama' => $request->nilai_pertama,

        ]);
        return response()->json([
            'status' => true,
            'message' => 'kelompok Berhasil Diupdate',
            'data' => $pertama,
            'code' => 200
        ]);


        // end of K1(pertama)
        // K-2 Mulai
        $validator = Validator::make(request()->all(), [

            'nama_matkul_id'=> 'required',
            'nama_kelompok_id'=> 'required',
            'penyerahan'=> 'required',
            'terlambat'=> 'required',
            'total_serah'=> 'required',
            'nilai_kedua'=> 'required',

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $kedua = MasterKedua::create([
            'nama_matkul_id' => $request->nama_matkul_id,
            'nama_kelompok_id' => $request->nama_kelompok_id,
            'penyerahan' => $request->penyerahan,
            'terlambat' => $request->terlambat,
            'total_serah' => $request->total_serah,
            'nilai_kedua' => $request->nilai_kedua,

        ]);
        return response()->json([
            'status' => true,
            'message' => 'kelompok Berhasil Diupdate',
            'data' => $kedua,
            'code' => 200
        ]);
        
        // end of K2(kedua)
        // K-3 Mulai
        $validator = Validator::make(request()->all(), [

            'nama_matkul_id'=> 'required',
            'nama_kelompok_id'=> 'required',
            'tanggal_pertama'=> 'required',
            'tanggal_kedua'=> 'required',
            'waktu_upload'=> 'required',
            'total_ketepatan'=> 'required',
            'nilai_ketiga'=> 'required',

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $ketiga = MasterKetiga::create([
            'nama_matkul_id' => $request->nama_matkul_id,
            'nama_kelompok_id' => $request->nama_kelompok_id,
            'tanggal_pertama' => $request->tanggal_pertama,
            'tanggal_kedua' => $request->tanggal_kedua,
            'waktu_upload' => $request->waktu_upload,
            'total_ketepatan' => $request->total_ketepatan,
            'nilai_ketiga' => $request->nilai_ketiga,

        ]);
        return response()->json([
            'status' => true,
            'message' => 'kelompok Berhasil Diupdate',
            'data' => $ketiga,
            'code' => 200
        ]);
        // end of K3(tiga)
        // K-4 Mulai
        $validator = Validator::make(request()->all(), [

            'nama_matkul_id'=> 'required',
            'nama_kelompok_id'=> 'required',
            'total_ajar'=> 'required',
            'nilai_keempat'=> 'required',
            

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $keempat = MasterKeempat::create([
            'nama_matkul_id' => $request->nama_matkul_id,
            'nama_kelompok_id' => $request->nama_kelompok_id,
            'total_ajar' => $request->total_ajar,
            'nilai_keempat' => $request->nilai_keempat,
            
        ]);
        // end of K4(empat)
        // K-5 Mulai
        $validator = Validator::make(request()->all(), [

            'nama_matkul_id'=> 'required',
            'nama_kelompok_id'=> 'required',
            'total_kuis'=> 'required',
            'total_rata'=> 'required',
            'nilai_kelima'=> 'required',
            

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $kelima = MasterKelima::create([

            'nama_matkul_id' => $request->nama_matkul_id,
            'nama_kelompok_id' => $request->nama_kelompok_id,
            'total_kuis' => $request->total_kuis,
            'nilai_kelima' => $request->nilai_kelima,
            
        ]);
        // end of K5(lima)
        // K-6 Mulai
        $validator = Validator::make(request()->all(), [

            'nama_matkul_id'=> 'required',
            'nama_kelompok_id'=> 'required',
            'total_rencana'=> 'required',
            'nilai_keenam'=> 'required',
            

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $keenam = MasterKeenam::create([
            'nama_matkul_id' => $request->nama_matkul_id,
            'nama_kelompok_id' => $request->nama_kelompok_id,
            'total_rencana' => $request->total_rencana,
            'nilai_keenam' => $request->nilai_keenam,
            
        ]);
        // end of K6(enam)
        // K-7 Mulai
        $validator = Validator::make(request()->all(), [

            'nama_matkul_id'=> 'required',
            'jumlah_mhs'=> 'required',
            'jumlah_mhs_lulus'=> 'required',
            'total_presentase'=> 'required',
            'nilai_ketuju'=> 'required',
            
            

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $ketuju = MasterKetuju::create([
            'nama_matkul_id' => $request->nama_matkul_id,
            'jumlah_mhs' => $request->jumlah_mhs,
            'jumlah_mhs_lulus' => $request->jumlah_mhs_lulus,
            'total_presentase' => $request->total_presentase,
            'nilai_ketujuu' => $request->nilai_ketuju,
            
        ]);
        // end of K7(tuju)
        // K-8 Mulai
        $validator = Validator::make(request()->all(), [

            'jumlah_dilaksanakan'=> 'required',
            'jumlah_tdk'=> 'required',
            'jumlah_jaga'=> 'required',
            'jumlah_kedelapan'=> 'required',
            'nilai_kedelapan'=> 'required',
            

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $kedelapan = MasterKedelapan::create([
            'jumlah_dilaksanakan' => $request->jumlah_dilaksanakan,
            'jumlah_tdk' => $request->jumlah_tdk,
            'jumlah_jaga' => $request->jumlah_jaga,
            'jumlah_kedelapan' => $request->nilai_kedelapan,
            
        ]);
        // end of K8(delapan)
        // K-9 Mulai

        $validator = Validator::make(request()->all(), [

            'jumlah_penugasan'=> 'required',
            'jumlah_realisasi'=> 'required',
            'total_presen'=> 'required',
            'nilai_kesembilan'=> 'required',
            

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $kesembilan = MasterKesembilan::create([
            'jumlah_penugasan' => $request->jumlah_penugasan,
            'jumlah_realisasi' => $request->jumlah_realisasi,
            'total_presen' => $request->total_presen,
            'nilai_kesembilan' => $request->nilai_kesembilan,
            
        ]);
        // end of K9(sembilan)
        // K-10 Mulai
        
        $validator = Validator::make(request()->all(), [

            'jumlahh_penelitian'=> 'required',
            'nilai_kesepuluh'=> 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $kesepuluh = MasterKesepuluh::create([
            'jumlah_penelitian' => $request->jumlah_penelitian,
            'nilai_kesepuluh' => $request->nilai_kesepuluh, 
        ]);
        // end of K10(sepuluh)
        // K-11 Mulai
        $validator = Validator::make(request()->all(), [

            'jumlah_karya'=> 'required',
            'nilai_kesebelas'=> 'required',
            

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $kesebelas = MasterKesebelas::create([
            'jumlah_karya' => $request->jumlah_karya,
            'nilai_kesebelas' => $request->nilai_kesebelas,
        ]);
        // end of K11(sebelas)
        // K-12 Mulai
        $validator = Validator::make(request()->all(), [

            'nama_dosen_id'=> 'required',
            'staff_id'=> 'required',
            'kode_id'=> 'required',
            'tgl_masuk'=> 'required',
            'waktu_masuk'=> 'required',
            'waktu_keluar'=> 'required',
            'waktu_masuk_bulat'=> 'required',
            'waktu_keluar_bulat'=> 'required',
            'waktu_total'=> 'required',
            'jenis'=> 'required',
            'total_tm'=> 'required',
            'nilai_keduabelas'=> 'required',
            

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $keduabelas = MasterKeduabelas::create([

            'nama_dosen_id' => $request->nama_dosen_id,
            'staff_id' => $request->staff_id,
            'kode_id' => $request->kode_id,
            'tgl_masuk' => $request->tgl_masuk,
            'waktu_masuk' => $request->waktu_masuk,
            'waktu_keluar' => $request->waktu_keluar,
            'waktu_masuk_bulat' => $request->waktu_masuk_bulat,
            'waktu_keluar_bulat' => $request->waktu_keluar_bulat,
            'waktu_total' => $request->waktu_total,
            'jenis' => $request->jenis,
            'total_tm' => $request->total_tm,
            'nilai_keduabelas' => $request->nilai_keduabelas,
         
        ]);
        // end of K12(duabelas)
        // K-13 Mulai
        $validator = Validator::make(request()->all(), [

            'nama_dosen_id'=> 'required',
            'staff_id'=> 'required',
            'kode_id'=> 'required',
            'tgl_masuk'=> 'required',
            'waktu_masuk'=> 'required',
            'waktu_keluar'=> 'required',
            'waktu_masuk_bulat'=> 'required',
            'waktu_keluar_bulat'=> 'required',
            'waktu_total'=> 'required',
            'jenis'=> 'required',
            'total_tm'=> 'required',
            'nilai_ketigabelas'=> 'required',
            

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $ketigabelas = MasterKetigabelas::create([

            'nama_dosen_id' => $request->nama_dosen_id,
            'staff_id' => $request->staff_id,
            'kode_id' => $request->kode_id,
            'tgl_masuk' => $request->tgl_masuk,
            'waktu_masuk' => $request->waktu_masuk,
            'waktu_keluar' => $request->waktu_keluar,
            'waktu_masuk_bulat' => $request->waktu_masuk_bulat,
            'waktu_keluar_bulat' => $request->waktu_keluar_bulat,
            'waktu_total' => $request->waktu_total,
            'jenis' => $request->jenis,
            'total_tm' => $request->total_tm,
            'nilai_ketigabelas' => $request->nilai_ketigabelas,
        ]);
        // end of K13(tigabelas)
        // K-14 Mulai
        $validator = Validator::make(request()->all(), [

            'nama_dosen_id'=> 'required',
            'total_pengurangan'=> 'required',
            'nilai_keempatbelas'=> 'required',
            

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $keempatbelas = MasterKeempatbelas::create([
            'nama_dosen_id' => $request->nama_dosen_id,
            'total_pengurangan' => $request->total_pengurangan,
            'nilai_keempatbelas' => $request->nilai_keempatbelas,
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
    public function update(Request $request, MasterPertama $pertama, MasterKedua $kedua,MasterKetiga $ketiga,MasterKeempat $keempat,
    MasterKelima $kelima,MasterKeenam $keenam,MasterKetuju $ketuju,Masterkedelapan $kedelapan,MasterKesembilan $kesembilan,MasterKesepuluh $kesepuluh,
    MasterKesebelas $kesebelas, MasterKeduabelas $keduabelas, MasterKetigabelas $ketigabelas, MasterKeempatbelas $keempatbelas)
    {
        $validator = Validator::make(request()->all(), [

            'total_satu'=> 'required',
            'total_dua'=> 'required',
            'total_hadir'=> 'required',
            'nilai_pertama'=> 'required',

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $pertama ->create([
            'total_satu' => $request->total_satu,
            'total_dua' => $request->total_dua,
            'total_hadir' => $request->total_hadir,
            'total_pertama' => $request->total_pertama,

        ]);

        return response()->json([
            'status' => true,
            'message' => 'Nilai Berhasil diupdate',
            'data' => $pertama,
            'code' => 200
        ]);
        // K-2 Mulai 
        $validator = Validator::make(request()->all(), [

            'nama_matkul_id'=> 'required',
            'nama_kelompok_id'=> 'required',
            'penyerahan'=> 'required',
            'terlambat'=> 'required',
            'total_serah'=> 'required',
            'nilai_kedua'=> 'required',

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        $kedua-> create([
            'nama_matkul_id' => $request->nama_matkul_id,
            'nama_kelompok_id' => $request->nama_kelompok_id,
            'penyerahan' => $request->penyerahan,
            'terlambat' => $request->terlambat,
            'total_serah' => $request->total_serah,
            'nilai_kedua' => $request->nilai_kedua,

        ]);

        // end of K2(kedua)
        // K-3 Mulai
        $validator = Validator::make(request()->all(), [

            'nama_matkul_id'=> 'required',
            'nama_kelompok_id'=> 'required',
            'tanggal_pertama'=> 'required',
            'tanggal_kedua'=> 'required',
            'waktu_upload'=> 'required',
            'total_ketepatan'=> 'required',
            'nilai_ketiga'=> 'required',

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $ketiga-> create([
            'nama_matkul_id' => $request->nama_matkul_id,
            'nama_kelompok_id' => $request->nama_kelompok_id,
            'tanggal_pertama' => $request->tanggal_pertama,
            'tanggal_kedua' => $request->tanggal_kedua,
            'waktu_upload' => $request->waktu_upload,
            'total_ketepatan' => $request->total_ketepatan,
            'nilai_ketiga' => $request->nilai_ketiga,

        ]);
        // end of K3(tiga)
        // K-4 Mulai
        $validator = Validator::make(request()->all(), [

            'nama_matkul_id'=> 'required',
            'nama_kelompok_id'=> 'required',
            'total_ajar'=> 'required',
            'nilai_keempat'=> 'required',
            

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $keempat-> create([
            'nama_matkul_id' => $request->nama_matkul_id,
            'nama_kelompok_id' => $request->nama_kelompok_id,
            'total_ajar' => $request->total_ajar,
            'nilai_keempat' => $request->nilai_keempat,
            
        ]);
        // end of K4(empat)
        // K-5 Mulai
        $validator = Validator::make(request()->all(), [

            'nama_matkul_id'=> 'required',
            'nama_kelompok_id'=> 'required',
            'total_kuis'=> 'required',
            'total_rata'=> 'required',
            'nilai_kelima'=> 'required',
            

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $kelima-> create([

            'nama_matkul_id' => $request->nama_matkul_id,
            'nama_kelompok_id' => $request->nama_kelompok_id,
            'total_kuis' => $request->total_kuis,
            'nilai_kelima' => $request->nilai_kelima,
            
        ]);
        // end of K5(lima)
        // K-6 Mulai
        $validator = Validator::make(request()->all(), [

            'nama_matkul_id'=> 'required',
            'nama_kelompok_id'=> 'required',
            'total_rencana'=> 'required',
            'nilai_keenam'=> 'required',
            

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $keenam-> create([
            'nama_matkul_id' => $request->nama_matkul_id,
            'nama_kelompok_id' => $request->nama_kelompok_id,
            'total_rencana' => $request->total_rencana,
            'nilai_keenam' => $request->nilai_keenam,
            
        ]);
        // end of K6(enam)
        // K-7 Mulai
        $validator = Validator::make(request()->all(), [

            'nama_matkul_id'=> 'required',
            'jumlah_mhs'=> 'required',
            'jumlah_mhs_lulus'=> 'required',
            'total_presentase'=> 'required',
            'nilai_ketuju'=> 'required',
            
            

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $ketuju-> create([
            'nama_matkul_id' => $request->nama_matkul_id,
            'jumlah_mhs' => $request->jumlah_mhs,
            'jumlah_mhs_lulus' => $request->jumlah_mhs_lulus,
            'total_presentase' => $request->total_presentase,
            'nilai_ketujuu' => $request->nilai_ketuju,
            
        ]);
        // end of K7(tuju)
        // K-8 Mulai
        $validator = Validator::make(request()->all(), [

            'jumlah_dilaksanakan'=> 'required',
            'jumlah_tdk'=> 'required',
            'jumlah_jaga'=> 'required',
            'jumlah_kedelapan'=> 'required',
            'nilai_kedelapan'=> 'required',
            

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $kedelapan-> create([
            'jumlah_dilaksanakan' => $request->jumlah_dilaksanakan,
            'jumlah_tdk' => $request->jumlah_tdk,
            'jumlah_jaga' => $request->jumlah_jaga,
            'jumlah_kedelapan' => $request->nilai_kedelapan,
            
        ]);
        // end of K8(delapan)
        // K-9 Mulai

        $validator = Validator::make(request()->all(), [

            'jumlah_penugasan'=> 'required',
            'jumlah_realisasi'=> 'required',
            'total_presen'=> 'required',
            'nilai_kesembilan'=> 'required',
            

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $kesembilan-> create([
            'jumlah_penugasan' => $request->jumlah_penugasan,
            'jumlah_realisasi' => $request->jumlah_realisasi,
            'total_presen' => $request->total_presen,
            'nilai_kesembilan' => $request->nilai_kesembilan,
            
        ]);
        // end of K9(sembilan)
        // K-10 Mulai
        
        $validator = Validator::make(request()->all(), [

            'jumlahh_penelitian'=> 'required',
            'nilai_kesepuluh'=> 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $kesepuluh-> create([
            'jumlah_penelitian' => $request->jumlah_penelitian,
            'nilai_kesepuluh' => $request->nilai_kesepuluh, 
        ]);
        // end of K10(sepuluh)
        // K-11 Mulai
        $validator = Validator::make(request()->all(), [

            'jumlah_karya'=> 'required',
            'nilai_kesebelas'=> 'required',
            

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $kesebelas-> create([
            'jumlah_karya' => $request->jumlah_karya,
            'nilai_kesebelas' => $request->nilai_kesebelas,
        ]);
        // end of K11(sebelas)
        // K-12 Mulai
        $validator = Validator::make(request()->all(), [

            'nama_dosen_id'=> 'required',
            'staff_id'=> 'required',
            'kode_id'=> 'required',
            'tgl_masuk'=> 'required',
            'waktu_masuk'=> 'required',
            'waktu_keluar'=> 'required',
            'waktu_masuk_bulat'=> 'required',
            'waktu_keluar_bulat'=> 'required',
            'waktu_total'=> 'required',
            'jenis'=> 'required',
            'total_tm'=> 'required',
            'nilai_keduabelas'=> 'required',
            

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $keduabelas-> create([

            'nama_dosen_id' => $request->nama_dosen_id,
            'staff_id' => $request->staff_id,
            'kode_id' => $request->kode_id,
            'tgl_masuk' => $request->tgl_masuk,
            'waktu_masuk' => $request->waktu_masuk,
            'waktu_keluar' => $request->waktu_keluar,
            'waktu_masuk_bulat' => $request->waktu_masuk_bulat,
            'waktu_keluar_bulat' => $request->waktu_keluar_bulat,
            'waktu_total' => $request->waktu_total,
            'jenis' => $request->jenis,
            'total_tm' => $request->total_tm,
            'nilai_keduabelas' => $request->nilai_keduabelas,
         
        ]);
        // end of K12(duabelas)
        // K-13 Mulai
        $validator = Validator::make(request()->all(), [

            'nama_dosen_id'=> 'required',
            'staff_id'=> 'required',
            'kode_id'=> 'required',
            'tgl_masuk'=> 'required',
            'waktu_masuk'=> 'required',
            'waktu_keluar'=> 'required',
            'waktu_masuk_bulat'=> 'required',
            'waktu_keluar_bulat'=> 'required',
            'waktu_total'=> 'required',
            'jenis'=> 'required',
            'total_tm'=> 'required',
            'nilai_ketigabelas'=> 'required',
            

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $ketigabelas-> create([

            'nama_dosen_id' => $request->nama_dosen_id,
            'staff_id' => $request->staff_id,
            'kode_id' => $request->kode_id,
            'tgl_masuk' => $request->tgl_masuk,
            'waktu_masuk' => $request->waktu_masuk,
            'waktu_keluar' => $request->waktu_keluar,
            'waktu_masuk_bulat' => $request->waktu_masuk_bulat,
            'waktu_keluar_bulat' => $request->waktu_keluar_bulat,
            'waktu_total' => $request->waktu_total,
            'jenis' => $request->jenis,
            'total_tm' => $request->total_tm,
            'nilai_ketigabelas' => $request->nilai_ketigabelas,
        ]);
        // end of K13(tigabelas)
        // K-14 Mulai
        $validator = Validator::make(request()->all(), [

            'nama_dosen_id'=> 'required',
            'total_pengurangan'=> 'required',
            

        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $keempatbelas -> create([
            'nama_dosen_id' => $request->nama_dosen_id,
            'total_pengurangan' => $request->total_pengurangan,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterPertama $pertama,MasterKedua $kedua,MasterKetiga $ketiga,MasterKeempat $keempat,
    MasterKelima $kelima,MasterKeenam $keenam,MasterKetuju $ketuju,Masterkedelapan $kedelapan,MasterKesembilan $kesembilan,MasterKesepuluh $kesepuluh,
    MasterKesebelas $kesebelas, MasterKeduabelas $keduabelas, MasterKetigabelas $ketigabelas, MasterKeempatbelas $keempatbelas)
    {
       MasterPertama::destroy($pertama->id);

        return response()->json([

            'status' => true,
            'message' => 'Nilai Berhasil dihapus',
            'code' => 200
        ]);
    }
}
