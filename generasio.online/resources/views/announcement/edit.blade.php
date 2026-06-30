@extends('layouts.default')
@section('content')
    <div id="kt_app_content_container" class="app-container container-xxl">
    <!--begin::Content container-->
        <div class="card card-default">
            <div class="card-header py-5">
                <div class="d-flex justify-content-between align-items-center">
                    <span id="card_title">
                        <h4 class="m-0">{{ __('Edit '.$pageTitle) }}</h4>
                    </span>
                </div>
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <a href="{{ route($routePath.'.index') }}" class="btn btn-primary btn-sm float-right font-weight-bolder">
                        <i class="fa fa-arrow-left"></i>Back
                    </a>
                </div>
                <!--end::Actions-->
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route($routePath.'.update', $announcement->id) }}"  role="form" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @csrf

                    @include('announcement.form')

                </form>
            </div>
        </div>
    <!--end::Content container-->
    </div>
@endsection
