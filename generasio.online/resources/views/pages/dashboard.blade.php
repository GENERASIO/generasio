@extends('layouts.default')
@section('content')
    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Misc Widget 1-->
            <div class="row mb-5 mb-xl-8 g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-6">
                    <!--begin::Card-->
                    <div class="card card-stretch">
                        <!--begin::Link-->
                        <a href="{{ url('application/profiles') }}"
                            class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                            <i class="ki-outline ki-gift fs-2tx mb-5 ms-n1"></i>
                            <span class="fs-4 fw-bold">Profile Saya</span>
                        </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-6">
                    <!--begin::Card-->
                    <div class="card card-stretch">
                        <!--begin::Link-->
                        <a href="{{ url('') }}"
                            class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                            <i class="ki-outline ki-technology-2 fs-2tx mb-5 ms-n1"></i>
                            <span class="fs-4 fw-bold">Transaksi</span>
                        </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-6">
                    <!--begin::Card-->
                    <div class="card card-stretch">
                        <!--begin::Link-->
                        <a href="{{ url('') }}"
                            class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                            <i class="ki-outline ki-fingerprint-scanning fs-2tx mb-5 ms-n1"></i>
                            <span class="fs-4 fw-bold">Log History</span>
                        </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-6">
                    <!--begin::Card-->
                    <div class="card card-stretch">
                        <!--begin::Link-->
                        <a href="{{ url('') }}"
                            class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                            <i class="ki-outline ki-abstract-26 fs-2tx mb-5 ms-n1"></i>
                            <span class="fs-4 fw-bold">Daftar Harga</span>
                        </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Misc Widget 1-->
            <!--begin::List Widget 5-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header align-items-center border-0 mt-4">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="fw-bold mb-2 text-dark">Log History</span>
                        <span class="text-muted fw-semibold fs-7">Aksi Terbaru Saya</span>
                    </h3>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-5">
                    <!--begin::Timeline-->
                    <div class="timeline-label">
                        @foreach ($activityLog as $key => $log)
                            @php
                                $value = ($key % 4) + 1;
                            @endphp

                            @if ($value === 1)
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bold text-gray-800 fs-6">
                                        {{ date('H:i', strtotime($log->created_at)) }}
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-warning fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="fw-mormal timeline-content text-muted ps-3">
                                        {{ $log->name }}
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                            @elseif ($value === 2)
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bold text-gray-800 fs-6">
                                        {{ date('H:i', strtotime($log->created_at)) }}
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-success fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="fw-mormal timeline-content text-muted ps-3">
                                        {{ $log->name }}
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                            @elseif ($value === 3)
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bold text-gray-800 fs-6">
                                        {{ date('H:i', strtotime($log->created_at)) }}
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-danger fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="fw-mormal timeline-content text-muted ps-3">
                                        {{ $log->name }}
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                            @else
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bold text-gray-800 fs-6">
                                        {{ date('H:i', strtotime($log->created_at)) }}
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-primary fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="fw-mormal timeline-content text-muted ps-3">
                                        {{ $log->name }}
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                            @endif
                        @endforeach
                    </div>
                    <!--end::Timeline-->
                </div>
                <!--end: Card Body-->
            </div>
            <!--end: List Widget 5-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-8 ps-xl-12">
            <!--begin::Engage widget 1-->
            <div
                class="card bgi-position-y-bottom bgi-position-x-end bgi-no-repeat bgi-size-cover min-h-250px bg-body mb-5 mb-xl-8">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column justify-content-center ps-lg-12">
                    <!--begin::Title-->
                    <h3 class="text-dark fs-2qx fw-bold mb-7">Sudahkah anda TopUp <br />hari ini?
                    </h3>
                    <!--end::Title-->
                    <!--begin::Action-->
                    <div class="m-0">
                        <a href='{{ url('service/game-streaming/') }}' class="btn btn-dark fw-semibold px-6 py-3"
                            target="_blank">Top Up Sekarang</a>
                    </div>
                    <!--begin::Action-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Engage widget 1-->
            <!--begin::Tables Widget 5-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Transaksi Terbaru</span>
                        <span class="text-muted mt-1 fw-semibold fs-7">Gabungan dari semua layanan yang ada</span>
                    </h3>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-3">
                    <div class="tab-content">
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="border-0">
                                            <th class="p-0 w-50px"></th>
                                            <th class="p-0 min-w-150px"></th>
                                            <th class="p-0 min-w-140px"></th>
                                            <th class="p-0 min-w-110px"></th>
                                            <th class="p-0 min-w-50px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        @foreach ($transactions as $key => $transaction)
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                        <span class="symbol-label">
                                                            <img src="{{ asset($transaction->catalog->file_dir) . '/' . $transaction->catalog->file }}"
                                                                class="h-50 align-self-center"
                                                                alt="{{ $transaction->catalog->name }} Transaction" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{ url('service') . '/' . $transaction->catalog->category . '/' . $transaction->catalog->slug }}"
                                                        class="text-dark fw-bold text-hover-primary mb-1 fs-6"
                                                        target="_blank">
                                                        {{ $transaction->catalog->name }}
                                                    </a>
                                                    <span
                                                        class="text-muted fw-semibold d-block">{{ $transaction->product->name }}</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">{{ $transaction->created_at }}</td>
                                                <td class="text-end">
                                                    @if ($transaction->status == 'PAID')
                                                        <span
                                                            class="badge badge-light-success">{{ $transaction->status }}</span>
                                                    @else
                                                        <span
                                                            class="badge badge-light-warning">{{ $transaction->status }}</span>
                                                    @endif
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{ url('transaction/list') . '/' . $transaction->invoice_id }}"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
                                                        target="_blank">
                                                        <i class="ki-outline ki-arrow-right fs-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Tap pane-->
                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Tables Widget 5-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
@endsection

@section('scripts')
    <script>
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
