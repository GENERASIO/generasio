@extends('layouts.default')
@section('content')
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Content container-->
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
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-hover w-100">
                        
                            <tr>
                                <td width="20%">Slug</td>
                                <td>{{ $serviceProduct->slug }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Code</td>
                                <td>{{ $serviceProduct->code }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Game</td>
                                <td>{{ $serviceProduct->game }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Name</td>
                                <td>{{ $serviceProduct->name }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Buy Price</td>
                                <td>{{ $serviceProduct->buy_price }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Profit Price</td>
                                <td>{{ $serviceProduct->profit_price }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Profit</td>
                                <td>{{ $serviceProduct->profit }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Price</td>
                                <td>{{ $serviceProduct->price }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Status</td>
                                <td>{{ $serviceProduct->status }}</td>
                            </tr>
                            {{-- <tr>
                                <td width="20%">File Dir</td>
                                <td>{{ $serviceProduct->file_dir }}</td>
                            </tr>
                            <tr>
                                <td width="20%">File</td>
                                <td>{{ $serviceProduct->file }}</td>
                            </tr> --}}


                        @if (!empty($serviceProduct->created_by) && !empty($serviceProduct->updated_by))
                            <tr>
                                <td>Created By</td>
                                <td><a href="{{ url('application/users') . '/' .  $serviceProduct->user->id}}" target="_blank">{{ $serviceProduct->user->name }}</a> at {{ $serviceProduct->created_at }}</td>
                            </tr>
                            <tr>
                                <td>Updated By</td>
                                <td><a href="{{ url('application/users') . '/' .  $serviceProduct->userUpdate->id}}" target="_blank">{{ $serviceProduct->userUpdate->name }}</a> at {{ $serviceProduct->updated_at }}</td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        <!--end::Content container-->
    </div>
@endsection
