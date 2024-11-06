@extends('layoutsSuperAdmin.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
            <button onclick="modalAction('{{ url('/pengguna/create_ajax') }}')" class="btn btn-sm btn-success mt-1">Tambah</button>

            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            
            <table class="table table-bordered table-striped table-hover table-sm" id="table_pengguna">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>email</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" databackdrop="static" data-keyboard="false" data-width="75%" aria-hidden="true"></div>
@endsection

@push('css')
@endpush

@push('js')
    <script>
        function modalAction(url = '') {
            $('#myModal').load(url, function() {
                $('#myModal').modal('show');
            });
        }
        var dataPengguna;
        $(document).ready(function() {
            dataJenis = $('#table_pengguna').DataTable({
                serverSide: true,
                ajax: {
                    "url": "{{ url('pengguna/list') }}",
                    "dataType": "json",
                    "type": "POST" , 
                    "data": function(d) {

                    }
                },
                columns: [{
                        data: "DT_RowIndex",
                        className: "text-center",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: "nama_pengguna",
                        className: "",
                        orderable: false,
                        searchable: true
                    },
                    {
                        data: "email",
                        className: "",
                        orderable: false,
                        searchable: true
                    },
                    {
                        data: "jenis_pengguna.nama_jenis_pengguna",
                        className: "",
                        orderable: false,
                        searchable: true
                    },
                    {
                        data: "aksi",
                        className: "",
                        orderable: false,
                        searchable: false
                    }
                ]
            });
        });
    </script>
@endpush