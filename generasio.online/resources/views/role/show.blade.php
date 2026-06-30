@extends('layouts.default')

@section('content')
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--end::Toolbar-->
        <div class="card">
            <div class="card-header py-5">
                <div class="d-flex justify-content-between align-items-center">
                    <span id="card_title">
                        <h4 class="m-0">{{ __('Show '.$pageTitle) }}</h4>
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
                <table class="table table-bordered table-hover w-100">

                    <tr>
                        <td width="20%">Name</td>
                        <td>{{ $role->name }}</td>
                    </tr>
                    <tr>
                        <td>Role</td>
                        <td>
                            @if (!empty($rolePermissions))
                                <ol>
                                    @foreach ($rolePermissions as $v)
                                        <li>{{ $v->name }}</li>
                                    @endforeach
                                </ol>
                            @endif
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
@endsection
