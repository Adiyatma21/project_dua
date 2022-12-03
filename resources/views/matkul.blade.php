@extends('template')
@section('konten')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Tabel Matkul</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <div class="mx-3">
              <a type="btn" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#input-matkul">
                Input Matkul
              </a>
            </div>
            <table class="table align-items-center mb-0" id="example">
              <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mata Kuliah</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">SKS</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"></th>
                </tr>
              </thead>
              <tbody id="tabel-matkul">
                @foreach ($matkul as $a)

                <tr id="matkul-{{$a->id}}">
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <h6 class="mb-0 text-sm">{{ $a->nama_matkul }}</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <h6 class="mb-0 text-sm">{{ $a->sks }}</h6>
                            </div>
                        </div>
                    </td>
                  <td class="align-middle text-center">
                    <a type="button" class="btn bg-gradient-primary" href="#editmatkul" data-bs-toggle="modal" data-bs-id="{{$a->id}}" data-bs-matkul="{{$a->nama_matkul}}" data-bs-sks="{{$a->sks}}">
                      Edit
                    </a>
                    <button type="button" class="btn bg-gradient-primary" onclick="destroy({{$a->id}})">
                      Delete
                    </button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- Modal Input 1-->
          <div class="modal fade" id="input-matkul" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel">Input Matkul</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <section>
                    <div class="input-group input-group-outline mb-4">
                      <label class="form-label">Mata Kuliah</label>
                      <input type="text" class="form-control" id="mata-kuliah">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                      <label class="form-label">SKS</label>
                      <input type="text" class="form-control" id="sks">
                    </div>
                  </section>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" onclick="store()">Simpan</button>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 1 -->
          <!-- Modal edit-->
          <div class="modal fade" id="editmatkulz" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel">Edit Matkul</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <section>
                    <input type="hidden" id="idedit">
                    <div class="input-group input-group-outline mb-4">
                      <label class="form-label">Mata Kuliah</label>
                      <input type="text" class="form-control" id="mata-kuliah-edit">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                      <label class="form-label">SKS</label>
                      <input type="text" class="form-control" id="sks-edit">
                    </div>
                  </section>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" onclick="update()">Simpan</button>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal 1 -->

        </div>
      </div>
    </div>
  </div>
  @endsection
  @section('script')
    <script>
        $(document).ready(function(){

            $.ajax({
                    url: '/refresh-csrf',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                }).then(function (d) {
                    $('meta[name="csrf-token"]').attr('content', d);
                });
        })
    </script>
    <script>
        var editmatkul = document.getElementById('editmatkul')
        editmatkul.addEventListener('show.bs.modal', function (event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var id = button.getAttribute('data-bs-id');
            var matkul = button.getAttribute('data-bs-matkul');
            var sks = button.getAttribute('data-bs-sks');
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            var inputid = editmatkul.querySelector('.modal-body #idedit');
            var inputmatkul = editmatkul.querySelector('.modal-body #mata-kuliah-edit');
            var inputsks = editmatkul.querySelector('.modal-body #sks-edit');

            inputid.value = id;
            inputmatkul.value = matkul;
            inputsks.value = sks;
        })
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

        function store(){
            let matkul = document.getElementById('mata-kuliah').value;
            let sks = document.getElementById('sks').value;
            let token = document.querySelector("meta[name='csrf-token']").content;

            $.ajax({
                url: `/matkul-store`,
                type: 'POST',
                cache: false,
                data: {
                    'nama_matkul': matkul,
                    'sks': sks,
                    '_token': token
                },
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: `${response.message}`,
                        showConfirmButton: false,
                        timer: 3000
                    });

                    let isi = `
                    <tr id="matkul-${response.data.id}">
                        <td>
                            <div class="d-flex px-2 py-1">
                                <div>
                                    <h6 class="mb-0 text-sm">${response.data.nama_matkul}</h6>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <div>
                                    <h6 class="mb-0 text-sm">${response.data.sks}</h6>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle text-center">
                            <a type="button" class="btn bg-gradient-primary" href="#editmatkul" data-bs-toggle="modal" data-bs-id="${response.data.id}" data-bs-matkul="${response.data.nama_matkul}" data-bs-sks="${response.data.sks}">
                                Edit
                            </a>
                            <button type="button" class="btn bg-gradient-primary">
                                Delete
                            </button>
                        </td>
                    </tr>
                    `;
                    refresh();
                    $('#tabel-matkul').append(isi);
                    document.getElementById('mata-kuliah').value = '';
                    document.getElementById('sks').value = '';
                    $('#input-matkul').modal('hide');
                }
            });
        }

        function destroy(id){
            refresh();
            let token = document.querySelector("meta[name='csrf-token']").content;
            Swal.fire({
                title: 'Apakah Kamu Yakin?',
                text: "ingin menghapus matkul ini!",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'TIDAK',
                confirmButtonText: 'YA, SAYA YAKIN!'
            }).then((result) => {
                if(result.isConfirmed){
                    $.ajax({
                        url: `/matkul-destroy/${id}`,
                        type: 'DELETE',
                        cache: false,
                        data: {
                            '_token': token
                        },
                        success: function (response) {
                            Swal.fire({
                                icon: 'success',
                                title: `${response.message}`,
                                showConfirmButton: false,
                                timer: 3000
                            });
                            refresh();
                            $(`#matkul-${id}`).remove();
                        }
                    });
                }
            });
        }

        function update(){
            let id = document.getElementById('idedit').value;
            let matkul = document.getElementById('mata-kuliah-edit').value;
            let sks = document.getElementById('sks-edit').value;
            let token = document.querySelector("meta[name='csrf-token']").content;

            Swal.fire({
                title: 'Apakah Kamu Yakin?',
                text: "ingin mengubah matkul ini!",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'TIDAK',
                confirmButtonText: 'YA, SAYA YAKIN!'
            }).then((result) => {
                $.ajax({
                    url: `/matkul-update/${id}`,
                    type: 'PUT',
                    cache: false,
                    data: {
                        'nama_matkul': matkul,
                        'sks': sks,
                        '_token': token
                    },
                    success: function(response){
                        Swal.fire({
                            icon: 'success',
                            title: `${response.message}`,
                            showConfirmButton: false,
                            timer: 3000
                        });
                        refresh();
                        let isi = `
                        <tr id="matkul-${response.data.id}">
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <h6 class="mb-0 text-sm">${response.data.nama_matkul}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <h6 class="mb-0 text-sm">${response.data.sks}</h6>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <a type="button" class="btn bg-gradient-primary" href="#editmatkul" data-bs-toggle="modal" data-bs-id="${response.data.id}" data-bs-matkul="${response.data.nama_matkul}" data-bs-sks="${response.data.sks}">
                                    Edit
                                </a>
                                <button type="button" class="btn bg-gradient-primary">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        `;
                        $('#matkul-'+response.data.id).replaceWith(isi);
                        $('#editmatkul').modal('hide');
                    }
                });
            });

        }
    </script>
  @endsection
