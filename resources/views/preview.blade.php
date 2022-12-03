@extends('template')
@section('konten')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Tabel Edit Nilai Dosen</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="container">
                        <form method="post" action="/preview-store">
                            @csrf
                        <div class="row">
                            <h6 class="text-Black text-capitalize">Profil Dosen</h6>
                            <div class="input-group input-group-outline mx-auto mb-4">
                                <label class="form-label">Nama Dosen</label>
                                <input type="text" class="form-control mx-auto" value="{{$dosen->name}}">
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label">NIP</label>
                                <input type="text" class="form-control" value="{{$dosen->nip}}">
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label">Mata Kuliah</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Nilai K-1 -->
            <div class="card">
                <div class="card-body px-0 pb-2">
                    <div class="container">
                        <div class="row">

                            <div class="col">
                                <h6 class="text-Black text-capitalize">Nilai K-1</h6>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label">Jumlah Pertemuan 1</label>
                                    <input type="text"  id="jumlah1" name="total_satu" class="form-control">
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label">Jumlah Pertemuan 2</label>
                                    <input type="text" id="jumlah2" name="total_dua" class="form-control">
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label">Total Kehadiran</label>
                                    <input type="text" id="total" name="total_hadir" class="form-control">
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label">Nilai K-1</label>
                                    <input type="text" name="nilai_pertama" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <h6 class="text-Black text-capitalize">Nilai K-2</h6>
                                <div class="input-group input-group-outline mb-4">
                                <select class="select-matkul-dua" name="states[nama_matkul_id]"  id="" multiple="multiple" style="width: 100%">
                                    <option value="AL">Alabama</option>

                                    <option value="WY">Wyoming</option>
                                  </select>
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                <select class="select-kel-dua" name="states[nama_kelompok_id]"  id="" multiple="multiple" style="width: 100%">
                                    <option value="AL">Alabama</option>

                                    <option value="WY">Wyoming</option>
                                  </select>
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Penyerahan</label>
                                    <input type="text" class="form-control" name="penyerahan">
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Terlambat</label>
                                    <input type="text" class="form-control" name="terlambat">
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Ketepatan</label>
                                    <input type="text" class="form-control" name="total_serah">
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Nilai K-2</label>
                                    <input type="text" class="form-control" name="nilai_kedua">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-body px-0 pb-2">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h6 class="text-Black text-capitalize">Nilai K-3</h6>
                                <div class="input-group input-group-outline mb-4">
                                <select class="select-matkul-tiga" name="states[nama_matkul_id]"  id="" multiple="multiple" style="width: 100%">
                                    <option value="AL">Alabama</option>

                                    <option value="WY">Wyoming</option>
                                  </select>
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                <select class="select-kel-tiga" name="states[nama_kelompok_id]"  id="" multiple="multiple" style="width: 100%">
                                    <option value="AL">Alabama</option>

                                    <option value="WY">Wyoming</option>
                                  </select>
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Tanggal Penyerahan</label>
                                    <input type="date" class="form-control" name="tanggal_pertama">
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Tanggal Upload</label>
                                    <input type="date" class="form-control" name="tanggal_kedua">
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Waktu Upload</label>
                                    <input type="text" class="form-control" name="waktu_upload">
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Ketepatan</label>
                                    <input type="text" class="form-control" name="total_ketepatan">
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Nilai K-3</label>
                                    <input type="text" class="form-control" name="nilai_ketiga">
                                </div>
                            </div>
                            <div class="col">
                                <h6 class="text-Black text-capitalize">Nilai K-4</h6>
                                <div class="input-group input-group-outline mb-4">
                                <select class="select-matkul-empat" name="states[nama_matkul_id]"  id="" multiple="multiple" style="width: 100%">
                                    <option value="AL">Alabama</option>

                                    <option value="WY">Wyoming</option>
                                  </select>
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                <select class="select-kel-empat" name="states[nama_kelompok_id]"  id="" multiple="multiple" style="width: 100%">
                                    <option value="AL">Alabama</option>

                                    <option value="WY">Wyoming</option>
                                  </select>
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Bahan Ajar</label>
                                    <input type="text" class="form-control" name="total_ajar">
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Nilai K-4</label>
                                    <input type="text" class="form-control" name="nilai_keempat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body px-0 pb-2">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-Black text-capitalize">Nilai K-5</h6>
                            <div class="input-group input-group-outline mb-4">
                                {{-- <label class="form-label" id="" readonly>Nama Matkul</label> --}}
                                <select class="select-matkul-lima" name="nama_matkul_id"  id="" multiple="multiple" style="width: 100%">
                                    <option value="AL">Alabama</option>

                                    <option value="WY">Wyoming</option>
                                  </select>

                            </div>
                            <div class="input-group input-group-outline mb-4">

                                <select class="select-kel-lima" name="nama_kelompok_id" id="" multiple="multiple"  style="width: 100%">
                                    <option value="AL">Alabama</option>

                                    <option value="WY">Wyoming</option>
                                  </select>
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Total Quisioner</label>
                                <input type="text" class="form-control" name="total_kuis">
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Total Rata-Rata</label>
                                <input type="text" class="form-control" name="total_rata">
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Nilai K-5</label>
                                <input type="text" class="form-control" name="nilai_kelima">
                            </div>
                        </div>
                        <div class="col">
                            <h6 class="text-Black text-capitalize">Nilai K-6</h6>
                            <div class="input-group input-group-outline mb-4">
                                <select class="select-matkul-enam" name="nama_matkul_id" multiple="multiple" style="width: 100%">
                                    <option value="AL">Alabama</option>

                                    <option value="WY">Wyoming</option>
                                  </select>
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Nama Kelompok</label>
                                <select class="select-kel-enam" name="nama_kelompok_id" multiple="multiple" style="width: 100%">
                                    <option value="AL">Alabama</option>

                                    <option value="WY">Wyoming</option>
                                  </select>
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Bahan Ajar </label>
                                <input type="text" class="form-control" name="total_rencana">
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Nilai K-6</label>
                                <input type="text" class="form-control" name="nilai_keenam">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-body px-0 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h6 class="text-Black text-capitalize">Nilai K-7</h6>
                        <div class="input-group input-group-outline mb-4">
                                <select class="select-matkul-tuju" name="nama_matkul_id" multiple="multiple" style="width: 100%">
                                    <option value="AL">Alabama</option>

                                    <option value="WY">Wyoming</option>
                                </select>
                        </div>
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Jumlah Mahasiswa Bimbingan</label>
                            <input type="text" class="form-control" name="jumlah_mhs">
                        </div>
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Jumlah Meluluskan</label>
                            <input type="text" class="form-control" name="jumlah_mhs_lulus">
                        </div>
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Presentase</label>
                            <input type="text" class="form-control" name="total_presentase">
                        </div>
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Nilai K-7</label>
                            <input type="text" class="form-control" name="nilai_ketuju">
                        </div>
                    </div>
                    <div class="col">
                        <h6 class="text-Black text-capitalize">Nilai K-8</h6>
                        <div class="col">
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Jumlah Tugas Dilaksanakan</label>
                                <input type="text" class="form-control" name="jumlah_dilaksanakan">
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Jumlah Tidak melaksanakan</label>
                                <input type="text" class="form-control" name="jumlah_tdk">
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Total Jaga</label>
                                <input type="text" class="form-control" name="jumlah_jaga">
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Jumlah_kedelapan</label>
                                <input type="text" class="form-control" name="jumlah_kedelapan">
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Nilai K-8</label>
                                <input type="text" class="form-control" name="nilai_kedelapan">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-body px-0 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h6 class="text-Black text-capitalize">Nilai K-9</h6>
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Jumlah Penugasan</label>
                            <input type="text" class="form-control" name="jumlah_penugasan">
                        </div>
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Jumlah Realisasi</label>
                            <input type="text" class="form-control" name="jumlah_realisasi">
                        </div>
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Presentase</label>
                            <input type="text" class="form-control" name="total_presen">
                        </div>
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Nilai K-9</label>
                            <input type="text" class="form-control" name="nilai_kesembilan">
                        </div>
                    </div>
                    <div class="col">
                        <h6 class="text-Black text-capitalize">Nilai K-10</h6>
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Jumlah Penelitian</label>
                            <input type="text" class="form-control" name="jumlah_penelitian">
                        </div>
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Nilai K-10</label>
                            <input type="text" class="form-control" name="nilai_kesepuluh">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mt-4">
    <div class="card-body px-0 pb-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h6 class="text-Black text-capitalize">Nilai K-11</h6>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Jumlah Karya Ilmiah</label>
                        <input type="text" class="form-control" name="jumlah_karya">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Nilai K-11</label>
                        <input type="text" class="form-control" name="nilai_kesebelas">
                    </div>
                </div>
                <div class="col">
                    <h6 class="text-Black text-capitalize">Nilai K-12</h6>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Tanggal Masuk</label>
                        <input type="text" class="form-control" name="tgl_masuk">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Waktu Masuk</label>
                        <input type="text" class="form-control" name="waktu_masuk">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Waktu Keluar</label>
                        <input type="text" class="form-control" name="waktu_keluar">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Waktu Masuk Pembulatan</label>
                        <input type="text" class="form-control" name="waktu_masuk_bulat">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Waktu Keluar Pembulatan</label>
                        <input type="text" class="form-control" name="waktu_keluar_bulat">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Waktu Total Pembulatan</label>
                        <input type="text" class="form-control" name="wakti_total">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Jenis</label>
                        <input type="text" class="form-control" name="jenis">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Total TM</label>
                        <input type="text" class="form-control" name="total_tm">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Nilai K-12</label>
                        <input type="text" class="form-control" name="nilai_keduabelas">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="card mt-4">
    <div class="card-body px-0 pb-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h6 class="text-Black text-capitalize">Nilai K-13</h6>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Tanggal Masuk</label>
                        <input type="text" class="form-control" name="tgl_masuk">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Waktu Masuk</label>
                        <input type="text" class="form-control" name="waktu_masuk">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Waktu Keluar</label>
                        <input type="text" class="form-control" name="waktu_keluar">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Waktu Masuk Pembulatan</label>
                        <input type="text" class="form-control" name="waktu_masuk_bulat">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Waktu Keluar Pembulatan</label>
                        <input type="text" class="form-control" name="waktu_keluar_bulat">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Waktu Total Pembulatan</label>
                        <input type="text" class="form-control" name="waktu_total">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Jenis</label>
                        <input type="text" class="form-control" name="jenis">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Total TM</label>
                        <input type="text" class="form-control" name="total_tm">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Nilai K-13</label>
                        <input type="text" class="form-control" name="nilai_ketigabelas">
                    </div>
                </div>
                <div class="col">
                    <h6 class="text-Black text-capitalize">Nilai K-14</h6>
                    <div class="modal-body">
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Total Pengurangan</label>
                            <input type="text" class="form-control" name="total_pengurangan">
                        </div>
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Nila K-14</label>
                            <input type="text" class="form-control" name="nilai_keempatbelas">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="tombol">
    <button class="btn btn-primary" type="submit">Simpan</button>
    <a class="btn btn-primary mx-2" id="" tabindex="-1" href="#" role="button">Hapus</a>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<!--  -->
<!-- end K-1 -->
<!-- K-2 -->

<!-- end K-2 -->
</div>
</div>
</div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.select-matkul-lima').select2({
                placeholder: "Pilih Matakuliah",
            });
            $('.select-matkul-dua').select2({
                placeholder: "Pilih Matakuliah",
            });
            $('.select-matkul-tiga').select2({
                placeholder: "Pilih Matakuliah",


            });
            $('.select-matkul-enam').select2({
                placeholder: "Pilih Matakuliah",


            });
            $('.select-matkul-empat').select2({
                placeholder: "Pilih Matakuliah",


            });
            $('.select-matkul-tuju').select2({
                placeholder: "Pilih Matakuliah",


            });

            $('.select-kel-lima').select2({
                placeholder: "Pilih Kelompok",

            });

            $('.select-kel-dua').select2({
                placeholder: "Pilih Kelompok",
            });
            $('.select-kel-tiga').select2({
                placeholder: "Pilih Kelompok",
            });
            $('.select-kel-empat').select2({
                placeholder: "Pilih Kelompok",
            });
            $('.select-kel-enam').select2({
                placeholder: "Pilih Kelompok",
            });
            $('.select-kel-tuju').select2({
                placeholder: "Pilih Kelompok",
            });
        });
        
    </script>
    <script>
        function refresh(){
            $.ajax({
                        url: '/refresh-csrf',
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    }).then(function (d) {
                        $('meta[name="csrf-token"]').attr('content', d);
                    });
        }
    </script>
    <script>
           $(document).ready(function(){
            $('#jumlah1').keyup(function(){
                $('#total').val($('#jumlah1').val() + val('#jumlah2'));
            });
        });
    </script>
@endsection
    
