@extends('layouts.default')

@section('links')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<div id="kt_app_content_container" class="app-container container-xxl">
    <!--begin::Layout-->
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Sidebar-->
        <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
            <!--begin::Card-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Summary-->
                    <!--begin::User Info-->
                    <div class="d-flex flex-center flex-column py-5">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-100px symbol-circle mb-7">
                            @if (!empty($user->profile_image))
                                <img src="{{ asset($user->profile_dir . '/' . $user->profile_image) }}"
                                    alt="{{ $user->name }} image" style="object-fit: cover" />
                            @else
                                <img src="{{ asset('demo34/dist') }}/assets/media/svg/avatars/blank.svg"
                                    alt="{{ $user->name }} Profil Image" />
                            @endif

                            @if ($user->is_logged_in == '2')
                                <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"
                                    style="left: 82px !important;bottom: 0px !important;top: 90px !important;
                            ">
                                </div>
                            @else
                                <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-secondary rounded-circle border border-4 border-body h-20px w-20px"
                                    style="left: 82px !important;bottom: 0px !important;top: 90px !important;
                            ">
                                </div>
                            @endif
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Name-->
                        <a class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3">{{ $user->name }}
                            <!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
                            @if ($completion > 90)
                                <span class="svg-icon svg-icon-1 svg-icon-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z"
                                            fill="currentColor" />
                                        <path
                                            d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z"
                                            fill="white" />
                                    </svg>
                                </span>
                            @endif
                        </a>
                        <!--end::Name-->
                        <!--begin::Position-->
                        <div class="mb-9">
                            <!--begin::Badge-->
                            <div class="badge badge-lg badge-light-primary d-inline">{{ $role }}</div>
                            <!--begin::Badge-->
                        </div>
                        <!--end::Position-->
                        <!--begin::Info-->
                        <!--begin::Info heading-->
                        <div class="fw-bold mb-3">Kontribusi & Progress
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
                                data-bs-trigger="hover" data-bs-html="true"
                                data-bs-content="Menunjukan partisipasi dalam melakukan tugas aplikasi"></i>
                        </div>
                        <!--end::Info heading-->
                        <div class="d-flex flex-wrap flex-center">
                            <!--begin::Stats-->
                            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                                <div class="fs-4 fw-bold text-gray-700 d-flex justify-content-center">
                                    <span class="w-50px">{{ count($activityLog) }}</span>
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                    <span class="svg-icon svg-icon-3 svg-icon-success">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="13" y="6" width="13"
                                                height="2" rx="1" transform="rotate(90 13 6)"
                                                fill="currentColor" />
                                            <path
                                                d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <div class="fw-semibold text-muted">Aksi Dibuat</div>
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::User Info-->
                    <!--end::Summary-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Sidebar-->
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-15">
            <!--begin:::Tabs-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                        href="#kt_user_view_overview_tab">Profile</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab"
                        href="#kt_user_view_overview_security">Keamanan</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                        href="#kt_user_view_overview_events_and_logs_tab">Aktivitas</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item ms-auto">
                    <!--begin::Action menu-->
                    <a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click"
                        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Aksi
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                        <span class="svg-icon svg-icon-2 me-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold py-4 w-250px fs-6"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Kelola Akun</div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="{{ route($routePath . '.index') . '/' . $user->id . '/' . 'edit' }}"
                                class="menu-link px-5">Edit Profile</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="{{ route($routePath . '.index') . '/' . $user->id . '/' . 'edit' }}"
                                class="menu-link px-5">Ganti Password</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <form action="{{ route($routePath . '.index') }}/deactivated/{{ $user->id }}"
                                method="POST" class="d-flex">
                                @csrf
                                <button type="submit" class="menu-link text-danger px-5 btn-delete"
                                    style="background-color: transparent;border: none;">Non Aktifkan Akun</button>
                            </form>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                    <!--end::Menu-->
                </li>
                <!--end:::Tab item-->
            </ul>
            <!--end:::Tabs-->
            <!--begin:::Tab content-->
            <div class="tab-content" id="myTabContent">
                <!--begin:::Tab pane-->
                <div class="tab-pane fade show active" id="kt_user_view_overview_tab" role="tabpanel">
                    <!--begin::Card-->
                    <br />
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
                    <div class="card card-flush mb-6 mb-xl-9">
                        <!--begin::Card header-->
                        <div class="card-header mt-6">
                            <!--begin::Card title-->
                            <div class="card-title flex-column">
                                <!--begin::Details item-->
                                <div id="kt_user_view_details" class="collapse show">
                                    <div class="pb-5 fs-6">
                                        <div class="fw-bold mt-5">Nama</div>
                                        <div class="text-gray-600">{{ $user->name ?? '-' }}</div>

                                        <div class="fw-bold mt-5">Username</div>
                                        <div class="text-gray-600">{{ $user->name ?? '-' }}</div>

                                        <div class="fw-bold mt-5">Rank Loyalty</div>
                                        <div class="text-gray-600"><span class="badge badge-warning">Warrior</span></div>

                                        <div class="fw-bold mt-5">Total Transaksi</div>
                                        <div class="text-gray-600">{{ count($transactions) }} Transaksi</div>

                                        <div class="fw-bold mt-5">Email</div>
                                        <div class="text-gray-600">
                                            <a href="mailto:{{ $user->email ?? '-' }}"
                                                class="text-gray-600 text-hover-primary">{{ $user->email }}</a>
                                        </div>

                                        <div class="fw-bold mt-5">Jabatan</div>
                                        <div class="text-gray-600">{{ $user->position ?? '-' }}</div>

                                        <div class="fw-bold mt-5">Jenis Kelamin</div>
                                        <div class="text-gray-600">{{ $user->gender ?? '-' }}</div>

                                        <div class="fw-bold mt-5">Alamat</div>
                                        <div class="text-gray-600">{{ $user->address ?? '-' }}</div>

                                        <div class="fw-bold mt-5">Telp</div>
                                        <div class="text-gray-600">{{ $user->phone ?? '-' }}</div>

                                        <div class="fw-bold mt-5">Agama</div>
                                        <div class="text-gray-600">{{ $user->religion ?? '-' }}</div>

                                        <div class="fw-bold mt-5">Pendidikan</div>
                                        <div class="text-gray-600">{{ $user->education ?? '-' }}</div>

                                        <div class="fw-bold mt-5">Status Perkawinan</div>
                                        <div class="text-gray-600">{{ $user->marital_status ?? '-' }}</div>

                                        <div class="fw-bold mt-5">Tanggal Lahir</div>
                                        <div class="text-gray-600">
                                            {{ date('d F Y', strtotime($user->birth_date)) ?? '-' }}</div>


                                    </div>
                                </div>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->

                    </div>
                    <!--end::Card-->
                </div>
                <!--end:::Tab pane-->
                <!--begin:::Tab pane-->
                <div class="tab-pane fade" id="kt_user_view_overview_security" role="tabpanel">
                    <br />
                    <!--begin::Card-->
                    <div class="card pt-4 mb-6 mb-xl-9">
                        <div class="card-header border-0">
                            <!--begin::Card title-->
                            <div class="card-title flex-column">
                                <h2 class="mb-1">Kelengkapan Profile</h2>
                                <div class="fs-6 fw-semibold text-muted">Progress kelengkapan profile anda</div>
                            </div>
                        </div>
                        <!--begin::Card body-->
                        <div class="card-body pb-5">
                            <!--begin::Progress-->
                            <div class="d-flex align-items-center w-100 flex-column mt-3">
                                <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                    <span class="fw-bold fs-6">{{ $completion }}%</span>
                                </div>
                                <div class="h-5px mx-3 w-100 bg-light mb-3">
                                    <div class="bg-success rounded h-5px" role="progressbar"
                                        style="width: {{ $completion }}%;" aria-valuenow="{{ $completion }}"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <div class="card pt-4 mb-6 mb-xl-9">
                        <div class="card-header border-0">
                            <!--begin::Card title-->
                            <div class="card-title flex-column">
                                <h2 class="mb-1">Bergabung Sejak</h2>
                                <div class="fs-6 fw-semibold text-muted">Tanggal akun ini dibuat dan beroperasi
                                </div>
                            </div>
                        </div>
                        <!--begin::Card body-->
                        <div class="card-body pb-5">
                            <p>{{ $user->created_at ?? '-' }}</p>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <div class="card pt-4 mb-6 mb-xl-9">
                        <div class="card-header border-0">
                            <!--begin::Card title-->
                            <div class="card-title flex-column">
                                <h2 class="mb-1">Terakhir Login</h2>
                                <div class="fs-6 fw-semibold text-muted">Terakhir login ke aplikasi Triadhipa
                                    Logistics</div>
                            </div>
                        </div>
                        <!--begin::Card body-->
                        <div class="card-body pb-5">
                            <p>{{ $user->last_logged_in ?? '-' }}</p>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end:::Tab pane-->
                <!--begin:::Tab pane-->
                <div class="tab-pane fade" id="kt_user_view_overview_events_and_logs_tab" role="tabpanel">
                    <br />
                    <!--begin::Card-->
                    <div class="card pt-4 mb-6 mb-xl-9">
                        <!--begin::Card header-->
                        <div class="card-header border-0">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Aktivitas Terbaru</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0 pb-5">
                            <div id="wait">
                                Pastikan jaringan internet anda stabil, mohon ditunggu...
                            </div>
                            <!--begin::Table wrapper-->
                            <div class="table-responsive">
                                <table id="DataTable"
                                    class="table table-striped table-bordered table-hover w-100"></table>
                            </div>
                            <!--end::Table wrapper-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end:::Tab pane-->
            </div>
            <!--end:::Tab content-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Layout-->
</div>
@endsection

@section('scripts')
    {{-- load this page only --}}
        <script src="{{ asset('demo34/dist') }}/assets/plugins/custom/datatables/datatables.bundle.js"></script>
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
                        data: 'name'
                    }
                ],
                order: [
                    [0, "DESC"]
                ]
            });

            $('body').on('click', '.btn-delete', function(event) {
                event.preventDefault();

                var form = $(this).closest('form');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
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

                            document.location.href = `{{ route('logout') }}`

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
    </script>
@endsection
