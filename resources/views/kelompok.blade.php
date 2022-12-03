@extends('template')
@section('konten')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Tabel Kelompok</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <div class="mx-3">
              <a type="btn" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#input-kelom">
                Input Kelompok
              </a>
            </div>
            <table class="table align-items-center mb-0" id="example">
              <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">Kelompok</th>
                </tr>
              </thead>
              <tbody id="tabel-matkul">
              @foreach ($kelom as $a)

                <tr id="kelom-{{$a->id}}">
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <h6 class="mb-0 text-sm">{{ $a->kode_kelompok }}</h6>
                            </div>
                        </div>
                    </td>
                  <td class="align-middle text-center">
                    <a type="button" class="btn bg-gradient-primary" href="#editkelom" data-bs-toggle="modal" data-bs-id="{{$a->id}}" data-bs-kelom="{{$a->kode_kelompok}}" >
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
          <div class="modal fade" id="input-kelom" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel">Input Kelompok</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <section>
                    <select class="select-dosen" name="dosen" id="id_label_multiple_satu" style="width: 100%">
                        <option value="AL">Alabama</option>

                        <option value="WY">Wyoming</option>
                      </select>

                    <div class="input-group input-group-outline mb-4 mt-3">
                      <label class="form-label">Kelompok</label>
                      <input type="text" class="form-control" id="kode-kelompok">
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
          <div class="modal fade" id="editkelom" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
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
                      <label class="form-label">Kelompok</label>
                      <input type="text" class="form-control" id="kode-kelompok-edit">
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
        $(document).ready(function() {
            $('.select-dosen').select2({
                placeholder: "Pilih Dosen",
                dropdownParent: $('#input-kelom'),

            });
        });
    </script>
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
        var editkelom = document.getElementById('editkelom')
        editkelom.addEventListener('show.bs.modal', function (event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var id = button.getAttribute('data-bs-id');
            var matkul = button.getAttribute('data-bs-kelom');
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            var inputid = editkelom.querySelector('.modal-body #idedit');
            var inputkelom = editkelom.querySelector('.modal-body #kode-kelompok-edit');
            
            inputid.value = id;
            inputkelom.value = kelom;
            
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
            let kelom = document.getElementById('kode-kelompok').value;
            let token = document.querySelector("meta[name='csrf-token']").content;

            $.ajax({
                url: `/kelom-store`,
                type: 'POST',
                cache: false,
                data: {
                    'kode_kelompok': kelom,
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
                    <tr id="kelom-${response.data.id}">
                        <td>
                            <div class="d-flex px-2 py-1">
                                <div>
                                    <h6 class="mb-0 text-sm">${response.data.kode_kelompok}</h6>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle text-center">
                            <a type="button" class="btn bg-gradient-primary" href="#editkelom" data-bs-toggle="modal" data-bs-id="${response.data.id}" data-bs-kelom="${response.data.kode_kelompok}" >
                                Edit
                            </a>
                            <button type="button" class="btn bg-gradient-primary">
                                Delete
                            </button>
                        </td>
                    </tr>
                    `;
                    refresh();
                    $('#tabel-kelom').append(isi);
                    document.getElementById('kode-kelom').value = '';
                    $('#input-kelom').modal('hide');
                }
            });
        }

        function destroy(id){
            refresh();
            let token = document.querySelector("meta[name='csrf-token']").content;
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "ingin menghapus Kelompok ini!",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'TIDAK',
                confirmButtonText: 'YA, SAYA YAKIN!'
            }).then((result) => {
                if(result.isConfirmed){
                    $.ajax({
                        url: `/kelom-destroy/${id}`,
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
                            $(`#kelom-${id}`).remove();
                        }
                    });
                }
            });
        }

        function update(){
            let id = document.getElementById('idedit').value;
            let kelom = document.getElementById('kode-kelompok-edit').value;
            let token = document.querySelector("meta[name='csrf-token']").content;

            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "ingin mengubah Kelompok ini!",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'TIDAK',
                confirmButtonText: 'YA, SAYA YAKIN!'
            }).then((result) => {
                $.ajax({
                    url: `/kelom-update/${id}`,
                    type: 'PUT',
                    cache: false,
                    data: {
                        'kode_kelompok': kelom,
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
                        <tr id="kelom-${response.data.id}">
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <h6 class="mb-0 text-sm">${response.data.kelom_matkul}</h6>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <a type="button" class="btn bg-gradient-primary" href="#editmatkul" data-bs-toggle="modal" data-bs-id="${response.data.id}" data-bs-kelom="${response.data.kode_kelompok}" >
                                    Edit
                                </a>
                                <button type="button" class="btn bg-gradient-primary">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        `;
                        $('#kelom-'+response.data.id).replaceWith(isi);
                        $('#editkelom').modal('hide');
                    }
                });
            });

        }
    </script>
@endsection
