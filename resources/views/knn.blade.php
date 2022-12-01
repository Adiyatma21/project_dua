@extends('template')
@section('konten')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Tabel Dosen Perhitungan K-NN</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <div class="mx-3">
              <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#inputdata">
                Input Data Test
              </button>
              <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#inputnilai">
                Input Nilai
              </button>
              <a class="btn btn-primary" id="" tabindex="-1" href="#" role="button">Hitung</a>
              <a class="btn btn-primary" id="" tabindex="-1" href="#" role="button">Hapus</a>
              
            </div>
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Dosen</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mata Kuliah</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelompok</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-1</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-2</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-3</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-4</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-5</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-6</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-7</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-8</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-9</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-10</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-11</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-12</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-13</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai K-14</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">RATA-RATA NILAI</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Details</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <!-- <div>
                            <img src="{{asset('template/assets/img/pc.jpg')}}" class="avatar avatar-lg me-3 border-radius-lg" alt="user1">
                          </div> -->
                      <div class="d-flex flex-column justify-content-center" id="">
                        <h6 class="mb-0 text-sm">John Michael</h6>
                        <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
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
                  <td class="align-middle text-center">
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
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">5</span>
                  </td>
                  <td class="align-middle text-center">
                  <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#editmodal">
                        Edit
                      </button>
                      <button type="button" class="btn bg-gradient-primary">
                        Delete
                      </button>
                  </td>
                </tr>
                </tr>
              </tbody>
            </table>
            <!-- Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="inputdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Masukan Nilai</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                    <div class="p-4 bg-light">
                      <form>
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
                        <div class="row">
                          <div class="col-md-6">
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">Nilai K-1</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">Nilai K-2</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">Nilai K-3</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">Nilai K-4</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">Nilai K-5</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">Nilai K-6</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">Nilai K-7</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">K-8</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">K-9</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">K-10</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">K-11</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">K-12</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">K-13</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">K-14</label>
                              <input type="text" class="form-control">
                            </div>

                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn bg-gradient-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- modal input nilai -->
            <div class="modal fade" id="inputnilai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Masukan Nilai</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                    <div class="p-4 bg-light">
                      <form>
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
                        <div class="row">
                          <div class="col-md-6">
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">Nilai K-1</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">Nilai K-2</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">Nilai K-3</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">Nilai K-4</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">Nilai K-5</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">Nilai K-6</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">Nilai K-7</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">K-8</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">K-9</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">K-10</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">K-11</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">K-12</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">K-13</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">K-14</label>
                              <input type="text" class="form-control">
                            </div>

                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn bg-gradient-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- end modal -->
          </div>
          <!-- editmodal -->
          <!-- modal edit -->
          <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Masukan Nilai</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="p-4">
                      <form>
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
                        <div class="row">
                          <div class="col-md-6">
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">Nilai K-1</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">Nilai K-2</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">Nilai K-3</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">Nilai K-4</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">Nilai K-5</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">Nilai K-6</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">Nilai K-7</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">K-8</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">K-9</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">K-10</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">K-11</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">K-12</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">K-13</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                              <label class="form-label">K-14</label>
                              <input type="text" class="form-control">
                            </div>

                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-primary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn bg-gradient-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
              <!-- end modal edit -->
          <!-- edit modal -->
        </div>
      </div>
    </div>
  </div>
  <!-- modal -->
  <!-- Button trigger modal -->
</div>
</div>
</div>
</div>
</div>
@endsection