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
                                <td width="20%">Game Code</td>
                                <td>{{ $serviceCatalog->game_code }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Slug</td>
                                <td>{{ $serviceCatalog->slug }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Category</td>
                                <td>{{ $serviceCatalog->category }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Main Category</td>
                                <td>{{ $serviceCatalog->main_category }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Sub Category</td>
                                <td>{{ $serviceCatalog->sub_category }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Mini Category</td>
                                <td>{{ $serviceCatalog->mini_category }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Name</td>
                                <td>{{ $serviceCatalog->name }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Description</td>
                                <td>{{ $serviceCatalog->description }}</td>
                            </tr>
                            <tr>
                                <td width="20%">File</td>
                                @if(!empty($serviceCatalog->file_dir))
                                    <td>
                                        <img src="{{ '/'.$serviceCatalog->file_dir.'/'.$serviceCatalog->file }}" alt="{{ $serviceCatalog->name }}" width="300px">
                                        <br />
                                        <br />
                                        <a href="{{ '/'.$serviceCatalog->file_dir.'/'.$serviceCatalog->file }}" class="btn btn-primary" target="_blank">{{ $serviceCatalog->file }}</a>
                                    </td>
                                @else
                                    <td>-</td>
                                @endif
                            </tr>
                            <tr>
                                <td width="20%">File Dir</td>
                                <td>{{ $serviceCatalog->file_dir }}</td>
                            </tr>
                            <tr>
                                <td width="20%">File</td>
                                <td>{{ $serviceCatalog->file }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Guide Dir</td>
                                <td>{{ $serviceCatalog->guide_dir }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Guide</td>
                                <td>{{ $serviceCatalog->guide }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Status</td>
                                <td>
                                    @if($serviceCatalog->status == 'available')
                                        <span class="badge badge-success">Tersedia</span>
                                    @else
                                        span class="badge badge-warning">Tidak Tersedia</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td width="20%">Require Server Id</td>
                                <td>{{ $serviceCatalog->require_server_id }}</td>
                            </tr>


                        @if (!empty($serviceCatalog->created_by) && !empty($serviceCatalog->updated_by))
                            <tr>
                                <td>Created By</td>
                                <td><a href="{{ url('application/users') . '/' .  $serviceCatalog->user->id}}" target="_blank">{{ $serviceCatalog->user->name }}</a> at {{ $serviceCatalog->created_at }}</td>
                            </tr>
                            <tr>
                                <td>Updated By</td>
                                <td><a href="{{ url('application/users') . '/' .  $serviceCatalog->userUpdate->id}}" target="_blank">{{ $serviceCatalog->userUpdate->name }}</a> at {{ $serviceCatalog->updated_at }}</td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        <!--end::Content container-->
    </div>
@endsection
