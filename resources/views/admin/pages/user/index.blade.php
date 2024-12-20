@extends('index')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/sweetalert2.css') }}">
@endpush

@section('content')
    <x-page-title title="User" home-url="{{ url('/admin/dashboard') }}" :breadcrumbs="[['label' => 'User', 'url' => url('admin/user')]]" />
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h5>User Table</h5>
                        <div>
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" onclick="addModal()"
                                data-bs-target="#exampleModalCenter"><i class="fa fa-plus me-2"></i>Add New</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="example2">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">User Create</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-content">
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script>
        $(function() {
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": true,
                "responsive": true,
                'serverSide': true,
                'processing': true,
                "ajax": {
                    'url': '/admin/user',
                    'type': 'GET',
                },
                "columns": [{
                        "data": "DT_RowIndex",
                        searchable: false
                    },
                    {
                        "data": "name"
                    },
                    {
                        "data": "username"
                    },
                    {
                        "data": "status",
                        'render': function(data, type, row, meta) {
                            if (data == 1) {
                                return '<span class="badge bg-success">Active</span>';
                            } else {
                                return '<span class="badge bg-danger">Non Active</span>';
                            }
                        }
                    },
                    {
                        "data": "id",
                        "render": function(data, type, row, meta) {
                            return `
                        <div class="d-flex gap-1">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" onclick="viewModal('${row.id}')" data-bs-target="#exampleModalCenter">
                        <i class="icon-eye"></i>
                        </button>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" onclick="editModal(${row.id})" data-bs-target="#exampleModalCenter">
                            <i class="icon-pencil-alt"></i>
                        </button>
                        ${row.id != 1 ? `
                                    <button class="btn btn-danger" onclick="deleteData('${row.id}')"><i class="icon-trash"></i></button>
                                    `: ""}
                        </div>

                        `;
                        }
                    }
                ]
            });
        })
    </script>
    <script>
        function addModal() {
            $.ajax({
                url: `/admin/user/create`,
                type: 'GET',
                success: function(response) {
                    $("#modal-content").html(response);
                },
                error: function(error) {
                    console.log("Error:", error);
                    alert('Gagal memuat data modal.');
                }
            });
        }

        function viewModal(id) {
            $.ajax({
                url: `/admin/user/` + id + '/view',
                type: 'GET',
                success: function(response) {
                    $("#modal-content").html(response);
                },
                error: function(error) {
                    console.log("Error:", error);
                    alert('Gagal memuat data modal.');
                }
            });
        }

        function editModal(id) {
            $.ajax({
                url: `/admin/user/` + id + '/edit',
                type: 'GET',
                success: function(response) {
                    console.log(id);

                    $("#modal-content").html(response);
                },
                error: function(error) {
                    console.log("Error:", error);
                    alert('Gagal memuat data modal.');
                }
            });
        }

        function deleteData(id) {
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: `/admin/user/` + id,
                        type: 'POST',
                        data: {
                            _method: 'DELETE',
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.code == "000") {
                                swal("Your data has been deleted!", {
                                    icon: "success",
                                });
                                $('#example2').DataTable().ajax.reload();
                            } else {
                                alert(response.messages)
                            }
                        },
                        error: function(error) {}
                    })
                } else {
                    swal("Your data is safe!");
                }
            });
        }
    </script>
@endsection
