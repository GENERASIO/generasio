@extends('layouts.default')
@section('content')
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Content container-->
            <div class="card card-default">
                <div class="card-header py-5">
                    <div class="d-flex justify-content-between align-items-center">
                        <span id="card_title">
                            <h4 class="m-0">{{ __('Tambah '.$pageTitle) }}</h4>
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route($routePath.'.store') }}"  role="form" enctype="multipart/form-data">
                        @csrf

                        @include('service-catalog.form')

                    </form>
                </div>
            </div>
        <!--end::Content container-->
    </div>
@endsection
