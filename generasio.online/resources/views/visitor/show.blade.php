@extends('layouts.default')
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
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route($routePath.'.index') }}" class="text-muted text-hover-primary">{{ $pageTitle }}</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">View {{ $pageTitle }}</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <a href="{{ route($routePath.'.index') }}" class="btn btn-primary btn-sm float-right font-weight-bolder">
                    <i class="fa fa-arrow-left"></i>Back
                </a>
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Content container-->
                <div class="card">
                    <div class="card-header py-5">
                        <div class="d-flex justify-content-between align-items-center">
                            <span id="card_title">
                                <h4 class="m-0">{{ __('Show '.$pageTitle) }}</h4>
                            </span>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-hover w-100">
                            
                            <tr>
                                <td width="20%">Page</td>
                                <td>{{ $visitor->page }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Device</td>
                                <td>{{ $visitor->device }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Os</td>
                                <td>{{ $visitor->os }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Browser</td>
                                <td>{{ $visitor->browser }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Ip</td>
                                <td>{{ $visitor->ip }}</td>
                            </tr>
                            <tr>
                                <td width="20%">City</td>
                                <td>{{ $visitor->city }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Region</td>
                                <td>{{ $visitor->region }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Country</td>
                                <td>{{ $visitor->country }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Latitude</td>
                                <td>{{ $visitor->latitude }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Longitude</td>
                                <td>{{ $visitor->longitude }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Org</td>
                                <td>{{ $visitor->org }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Timezone</td>
                                <td>{{ $visitor->timezone }}</td>
                            </tr>

                            <tr>
                                <td>Created By</td>
                                <td><a href="{{ url('application/users') . '/' .  $visitor->user->username}}" target="_blank">{{ $visitor->user->name }}</a> at {{ $visitor->created_at }}</td>
                            </tr>
                            <tr>
                                <td>Updated By</td>
                                <td><a href="{{ url('application/users') . '/' .  $visitor->userUpdate->username}}" target="_blank">{{ $visitor->userUpdate->name }}</a> at {{ $visitor->updated_at }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            <!--end::Content container-->
        </div>
    </div>
@endsection
