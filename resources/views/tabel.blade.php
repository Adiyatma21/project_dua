@extends('template')
@section('konten')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Tabel Dosen</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
             <div class="mx-3">
              <!-- <a type="btn" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#input_nilai">
                Input Nilai
              </a> -->
            </div> 
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Dosen</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mata Kuliah</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelompok</th>
                  <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-1</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-2</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-3</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-4</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-5</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-6</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-7</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-></th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-9</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-10</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-11</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-12</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-13</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-14</th> -->
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">RATA-RATA NILAI</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Details</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($dosen as $a)

                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <a href="/preview/{{$a->id}}">
                        <div>
                          <img src="{{asset('template/assets/img/pc.jpg')}}" class="avatar avatar-lg me-3 border-radius-lg" alt="user1">
                        </div>
                      </a>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{$a->name}}</h6>
                        <p class="text-xs text-secondary mb-0">{{$a->email}}</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">METOPEL</p>
                    <p class="text-xs font-weight-bold mb-0">FISIKA</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">A11.4112</p>
                    <p class="text-xs font-weight-bold mb-0">A14.4456</p>
                  </td>
                  <!-- <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">4</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">5</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">5</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">5</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">5</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">5</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">5</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">5</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">5</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">5</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">5</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">5</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">5</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">5</span>
                  </td> -->
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">5</span>
                  </td>
                  <td class="align-middle text-center">
                    <a type="button" class="btn bg-gradient-primary" href="/preview/{{$a->id}}">
                      Edit
                    </a>
                    <button type="button" class="btn bg-gradient-primary">
                      Delete
                    </button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- Modal Input 1-->
          <div class="modal fade" id="input_nilai" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel">Dosen</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <section>
                    <div class="input-group input-group-outline mb-4">
                      <label class="form-label">Nama Dosen</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                      <label class="form-label">NIP</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                      <label class="form-label">Mata Kuliah</label>
                      <input type="text" class="form-control">
                    </div>
                  </section>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-2</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 1 -->
          <!-- model 2 -- K-1 -->
          <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-1</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-2</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 2 -->
          <!-- model 3--K-2 -->
          <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-2</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-3</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 3 -->
          <!-- modal 4 --K-3 -->
          <div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-3</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle5" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-4</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 4 -->
          <!-- modal 5 --K--4 -->
          <div class="modal fade" id="exampleModalToggle5" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-4</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle6" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-5</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 5 -->
          <!-- modal 6 K--5-->
          <div class="modal fade" id="exampleModalToggle6" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-5</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="input-group input-group-outline mb-4">
                    <label class="form-label" readonly>Nama Matkul</label>
                    <input type="text" class="form-control" readonly>
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
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle7" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-6</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 6 -->
          <!-- modal 7- K-6-->
          <div class="modal fade" id="exampleModalToggle7" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-6</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle8" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-7</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 7 -->
          <!-- modal 8 K--7 -->
          <div class="modal fade" id="exampleModalToggle8" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-7</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle9" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-8</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 8 -->
          <!-- modal 9 K--8 -->
          <div class="modal fade" id="exampleModalToggle9" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-8</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle10" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-9</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 9 -->
          <!-- modal 10 -->
          <div class="modal fade" id="exampleModalToggle10" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-9</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle11" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-10</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 10 -->
          <!-- modal 11 -->
          <div class="modal fade" id="exampleModalToggle11" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-10</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="input-group input-group-outline mb-4">
                    <label class="form-label" readonly>Jumlah Penelitian</label>
                    <input type="text" class="form-control" readonly>
                  </div>
                  <div class="input-group input-group-outline mb-4">
                    <label class="form-label" readonly>Nilai K-10</label>
                    <input type="text" class="form-control" readonly>
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle12" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-11</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 11 -->
          <!-- modal 12 -->
          <div class="modal fade" id="exampleModalToggle12" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-11</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="input-group input-group-outline mb-4">
                    <label class="form-label" readonly>Jumlah Karya Ilmiah</label>
                    <input type="text" class="form-control" readonly>
                  </div>
                  <div class="input-group input-group-outline mb-4">
                    <label class="form-label" readonly>Nilai K-11</label>
                    <input type="text" class="form-control" readonly>
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle13" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-12</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 12 -->
          <!-- modal 13 -->
          <div class="modal fade" id="exampleModalToggle13" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-12</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle14" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle14" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-13</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 13 -->
          <!-- modal 14 -->
          <div class="modal fade" id="exampleModalToggle14" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-13</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle15" data-bs-toggle="modal" data-bs-dismiss="modal">simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle15" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-14</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 14 -->
          <!-- modal 15 -->
          <div class="modal fade" id="exampleModalToggle15" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-14</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="input-group input-group-outline mb-4">
                    <label class="form-label" readonly>Total Pengurangan</label>
                    <input type="text" class="form-control" readonly>
                  </div>
                  <div class="input-group input-group-outline mb-4">
                    <label class="form-label" readonly>Nilai K-14</label>
                    <input type="text" class="form-control" readonly>
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle16" data-bs-toggle="modal" data-bs-dismiss="modal">Kembali</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle16" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 15 -->
          <!-- end modal -->
          <!-- modal_edit -->
          <div class="modal fade" id="edit_nilai" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel">Dosen</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <section>
                    <div class="input-group input-group-outline mb-4">
                      <label class="form-label">Nama Dosen</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                      <label class="form-label">NIP</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                      <label class="form-label">Mata Kuliah</label>
                      <input type="text" class="form-control">
                    </div>
                  </section>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-1</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 1 -->
          <!-- model 2 -- K-1 -->
          <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-1</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-2</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 2 -->
          <!-- model 3--K-2 -->
          <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-2</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                    <label class="form-label" readonly>Nilai K-3</label>
                    <input type="text" class="form-control" readonly>
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-3</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 3 -->
          <!-- modal 4 --K-3 -->
          <div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-3</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle5" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-4</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 4 -->
          <!-- modal 5 --K--4 -->
          <div class="modal fade" id="exampleModalToggle5" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-4</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle6" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-5</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 5 -->
          <!-- modal 6 K--5-->
          <div class="modal fade" id="exampleModalToggle6" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-5</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="input-group input-group-outline mb-4">
                    <label class="form-label" readonly>Nama Matkul</label>
                    <input type="text" class="form-control" readonly>
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
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle7" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-6</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 6 -->
          <!-- modal 7- K-6-->
          <div class="modal fade" id="exampleModalToggle7" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-6</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle8" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-7</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 7 -->
          <!-- modal 8 K--7 -->
          <div class="modal fade" id="exampleModalToggle8" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-7</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle9" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-8</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 8 -->
          <!-- modal 9 K--8 -->
          <div class="modal fade" id="exampleModalToggle9" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-8</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle10" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-9</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 9 -->
          <!-- modal 10 -->
          <div class="modal fade" id="exampleModalToggle10" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-9</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle11" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-10</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 10 -->
          <!-- modal 11 -->
          <div class="modal fade" id="exampleModalToggle11" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-10</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="input-group input-group-outline mb-4">
                    <label class="form-label" readonly>Jumlah Penelitian</label>
                    <input type="text" class="form-control" readonly>
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle12" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-11</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 11 -->
          <!-- modal 12 -->
          <div class="modal fade" id="exampleModalToggle12" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-11</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="input-group input-group-outline mb-4">
                    <label class="form-label" readonly>Jumlah Karya Ilmiah</label>
                    <input type="text" class="form-control" readonly>
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle13" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-12</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 12 -->
          <!-- modal 13 -->
          <div class="modal fade" id="exampleModalToggle13" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-12</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle14" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle14" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-13</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 13 -->
          <!-- modal 14 -->
          <div class="modal fade" id="exampleModalToggle14" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-13</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle15" data-bs-toggle="modal" data-bs-dismiss="modal">simpan</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle15" data-bs-toggle="modal" data-bs-dismiss="modal">Nilai K-14</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 14 -->
          <!-- modal 15 -->
          <div class="modal fade" id="exampleModalToggle15" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Nilai K-14</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="input-group input-group-outline mb-4">
                    <label class="form-label" readonly>Total Pengurangan</label>
                    <input type="text" class="form-control" readonly>
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle16" data-bs-toggle="modal" data-bs-dismiss="modal">Kembali</button>
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle16" data-bs-toggle="modal" data-bs-dismiss="modal">Simpan</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal edit -->
        </div>
      </div>
    </div>
  </div>
  @endsection
