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
                                    <input type="text" class="form-control">
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label">Jumlah Pertemuan 2</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label">Total Kehadiran</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label">Nilai K-1</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <h6 class="text-Black text-capitalize">Nilai K-2</h6>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Nama Matkul</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Nama Kelompok</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Penyerahan</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Terlambat</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Ketepatan</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Nilai K-2</label>
                                    <input type="text" class="form-control" readonly>
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
                                    <label class="form-label" readonly>Nama Matkul</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Nama Kelompok</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Tanggal Penyerahan</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Tanggal Upload</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Waktu Upload</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Nilai K-3</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col">
                                <h6 class="text-Black text-capitalize">Nilai K-4</h6>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Nama Matkul</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Nama Kelompok</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Bahan Ajar</label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="input-group input-group-outline mb-4">
                                    <label class="form-label" readonly>Nilai K-4</label>
                                    <input type="text" class="form-control" readonly>
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
                                <label class="form-label" readonly>Nama Matkul</label>
                                <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                                    <option value="AL">Alabama</option>

                                    <option value="WY">Wyoming</option>
                                  </select>

                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Nama Kelompok</label>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Total Quisioner</label>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Total Rata-Rata</label>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Nilai K-5</label>
                                <input type="text" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <h6 class="text-Black text-capitalize">Nilai K-6</h6>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Nama Matkul</label>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Nama Kelompok</label>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Bahan Ajar </label>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Nilai K-6</label>
                                <input type="text" class="form-control" readonly>
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
                            <label class="form-label" readonly>Nama Matkul</label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Jumlah Mahasiswa Bimbingan</label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Jumlah Meluluskan</label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Presentase</label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Nilai K-7</label>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col">
                        <h6 class="text-Black text-capitalize">Nilai K-8</h6>
                        <div class="col">
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Jumlah Tugas Dilaksanakan</label>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Jumlah Tidak melaksanakan</label>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Total Jaga</label>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label" readonly>Nilai K-8</label>
                                <input type="text" class="form-control" readonly>
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
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Jumlah Realisasi</label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Presentase</label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Nilai K-9</label>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col">
                        <h6 class="text-Black text-capitalize">Nilai K-10</h6>
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Jumlah Penelitian</label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Nilai K-10</label>
                            <input type="text" class="form-control" readonly>
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
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Nilai K-11</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                </div>
                <div class="col">
                    <h6 class="text-Black text-capitalize">Nilai K-12</h6>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Tanggal Masuk</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Waktu Masuk</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Waktu Keluar</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Waktu Masuk Pembulatan</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Waktu Keluar Pembulatan</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Waktu Total Pembulatan</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Jenis</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Total TM</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Nilai K-12</label>
                        <input type="text" class="form-control" readonly>
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
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Waktu Masuk</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Waktu Keluar</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Waktu Masuk Pembulatan</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Waktu Keluar Pembulatan</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Waktu Total Pembulatan</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Jenis</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Total TM</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="input-group input-group-outline mb-4">
                        <label class="form-label" readonly>Nilai K-13</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                </div>
                <div class="col">
                    <h6 class="text-Black text-capitalize">Nilai K-14</h6>
                    <div class="modal-body">
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Total Pengurangan</label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="input-group input-group-outline mb-4">
                            <label class="form-label" readonly>Nila K-14</label>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="tombol">
    <a class="btn btn-primary" id="" tabindex="-1" href="#" role="button">Simpan</a>
    <a class="btn btn-primary mx-2" id="" tabindex="-1" href="#" role="button">Hapus</a>
</div>

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
