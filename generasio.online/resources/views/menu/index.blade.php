@extends('layouts.default')

@section('links')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{ $pageTitle }}</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route($routePath.'.index') }}" class="text-muted text-hover-primary">{{ $pageTitle }} Menu</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">{{ $pageTitle }}</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                @can($permissionName.'-create')
                    <a href="{{ route($routePath.'.create') }}" class="btn btn-primary btn-sm float-right font-weight-bolder">
                        <i class="fa fa-plus-circle"></i>Tambah {{ $pageTitle }}
                    </a>
                @endcan
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->

     <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Content container-->
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p class="m-0">{{ $message }}</p>
                    </div>
                @endif
                @if ($message = Session::get('failed'))
                    <div class="alert alert-danger">
                        <p class="m-0">{{ $message }}</p>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header py-5">
                        <div class="d-flex justify-content-between align-items-center">
                            <span id="card_title">
                                <h4 class="m-0">{{ __('List '.$pageTitle) }}</h4>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="DataTable" class="table table-striped table-bordered table-hover w-100">
                            </table>
                        </div>
                    </div>
                </div>
            <!--end::Content container-->
        </div>
    </div>
@endsection
@section('scripts')
    {{-- load this page only --}}
        <script src="{{ asset('demo34/dist') }}/assets/plugins/custom/datatables/datatables.bundle.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    {{-- end load --}}
    <script>
        $(document).ready(function(){
            var table = $('#DataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route($routePath.'.index') }}",
                columns: [
                    {
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
                        title: 'Action',
                        class: 'text-center',
                        width: '3%',
                        data: 'id',
                        render: function(id) {
                            return `
                                <form action="{{ route($routePath.'.index') }}/${id}" method="POST">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-light btn-active-light-primary btn-sm">Actions</button>
                                        <div class="dropdown-content">
                                            @can($permissionName.'-print')
                                                <a href="{{ route($routePath.'.index') }}/${id}/print" target="_blank">Print</a>
                                            @endcan
                                            @can($permissionName.'-show')
                                                <a href="{{ route($routePath.'.index') }}/${id}">Show</a>
                                            @endcan
                                            @can($permissionName.'-edit')
                                                <a href="{{ route($routePath.'.index') }}/${id}/edit">Edit</a>
                                            @endcan
                                            @can($permissionName.'-delete')
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn-delete">Delete</button>
                                            @endcan
                                        </div>
                                    </div>                                    
                                </form>
                            `;
                        }
                    },
                    {
                        title: 'Judul',
                        data: 'title'
                    },
                    {
                        title: 'Status',
                        data: 'status',
                        render: function(status){
                            if(status == 'active'){
                                return `<span class="badge badge-primary">Active</span>`;
                            }else{
                                return `<span class="badge badge-danger">Non Active</span>`;
                            }
                        }
                    },
                ],
                order: [[ 0, "DESC" ]]
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
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: form.attr('method'),
                            url: form.attr('action'),
                            data: form.serialize(),
                            success: function (r) {
                                Swal.fire({
                                    icon: 'success',
                                    title: r.message
                                });
                                
                                table.ajax.reload();
                            },
                            error: function (e) {
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
