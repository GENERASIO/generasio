@extends('layouts.default')

@section('links')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <div id="kt_app_content_container" class="app-container container-xxl">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p class="m-0">{{ $message }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header py-5">
                <div class="d-flex justify-content-between align-items-center">
                    <span id="card_title">
                        <h4 class="m-0">{{ __('List ' . $pageTitle) }}</h4>
                    </span>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    @can($permissionName . '-create')
                        <a href="{{ route($routePath . '.create') }}" class="btn btn-primary btn-sm float-right font-weight-bolder">
                            <i class="fa fa-plus-circle"></i>Tambah {{ $pageTitle }}
                        </a>
                    @endcan
                </div>
            </div>
            <div class="card-body">
                <div id="wait">
                    Pastikan jaringan internet anda stabil, mohon ditunggu...
                </div>

                <div class="table-responsive">
                    <table id="DataTable" class="table table-striped table-bordered table-hover w-100">
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')

    {{-- load this page only --}}
        <script src="{{ asset('demo1/dist') }}/assets/plugins/custom/datatables/datatables.bundle.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    {{-- end load --}}

    <script>
        $(document).ready(function() {
            var table = $('#DataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route($routePath . '.index') }}",
                columns: [{
                        title: 'No',
                        class: 'text-center',
                        width: '1%',
                        data: 'id', // Gunakan null sebagai placeholder
                        orderable: true,
                        render: function(data, type, row, meta) {
                            return meta.row + 1; // Menggunakan index baris + 1 sebagai penomoran
                        }
                    },
                    {
                        title: 'name',
                        data: 'name',
                        render: function(id, x, t) {
                            var html = '';

                            if (t.is_logged_in == '2') {
                                html +=
                                    `<span class="bg-success rounded-circle border border-4 border-body h-10px w-10px">&nbsp;&nbsp;&nbsp;&nbsp;</span>`;
                            } else {
                                html +=
                                    `<span class="bg-secondary rounded-circle border border-4 border-body h-10px w-10px">&nbsp;&nbsp;&nbsp;&nbsp;</span>`;
                            }

                            html += `
                                ${t.name}
                            `;

                            return html;
                        }
                    },
                    {
                        title: 'Username',
                        data: 'username'
                    },
                    {
                        title: 'Email',
                        data: 'email'
                    },
                    {
                        title: 'Role',
                        searchable: false,
                        data: 'roles[0].name',
                        orderable: false
                    },
                    {
                        title: 'Status',
                        data: 'email',
                        render: function(id, x, t) {
                            var html = '';

                            if (t.is_active == '1') {
                                html += `<span class="badge badge-primary">Aktif`;
                            } else {
                                html += `<span class="badge badge-danger">Non Aktif`;
                            }

                            html += `
                                </span>
                            `;

                            return html;
                        }
                    },
                    {
                        title: 'Action',
                        class: 'text-center',
                        width: '1%',
                        data: 'id',
                        orderable: false,
                        render: function(id, x, t) {
                            return `
                                <form action="{{ route($routePath . '.index') }}/${id}" method="POST" class="d-flex">
                                    @can($permissionName . '-show')
                                        <a class="btn btn-primary btn-xs d-flex justify-content-center align-items-center" href="{{ route($routePath . '.index') }}/${t.username}" style="margin-right:5px;"><i class="fa fa-fw fa-eye p-0"></i></a>
                                    @endcan
                                    @can($permissionName . '-edit')
                                        <a class="btn btn-success btn-xs d-flex justify-content-center align-items-center" href="{{ route($routePath . '.index') }}/${id}/edit" style="margin-right:5px;"><i class="fa fa-pencil-alt p-0"></i></a>
                                    @endcan
                                    @can($permissionName . '-delete')
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-xs d-flex justify-content-center align-items-center btn-delete" style="margin-right:5px;"><i class="fa fa-trash-alt p-0"></i></button>
                                    @endcan
                                </form>
                            `;
                        }
                    },
                ],
                order: [
                    [1, "ASC"]
                ]
            });

            // table.on( 'draw.dt', function () {
            //     var info = table.page.info();
            //     var i = 0;
            //     for (let x = (info.start + 1); x <= info.end; x++) {
            //         table.column(0).nodes()[i].innerHTML = x;
            //         i++;
            //     }
            // } ).draw();

            $('body').on('click', '.btn-delete', function(event) {
                event.preventDefault();

                var form = $(this).closest('form');

                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Tindakan ini tidak bisa diurungkan.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Lanjutkan!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: form.attr('method'),
                            url: form.attr('action'),
                            data: form.serialize(),
                            success: function(r) {
                                Swal.fire({
                                    icon: 'success',
                                    title: r.message
                                });

                                table.ajax.reload();
                            },
                            error: function(e) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Terjadi kesalahan'
                                });
                            },
                        });
                    }
                })
            });
        });
    </script>
@endsection
