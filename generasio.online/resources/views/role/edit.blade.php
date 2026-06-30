@extends('layouts.default')

@section('content')
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--end::Toolbar-->
            <div class="card card-default">
                <div class="card-header py-5">
                    <div class="d-flex justify-content-between align-items-center">
                        <span id="card_title">
                            <h4 class="m-0">{{ __('Update '.$pageTitle) }}</h4>
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
                    <form method="POST" action="{{ route($routePath.'.update', $role->id) }}"  role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf

                        <div class="form-group">
                            {{ Form::label('name') }}
                            {{ Form::text('name', $role->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name', 'required' => 'required']) }}
                            {!! $errors->first('name', '<p class="invalid-feedback">:message</p>') !!}
                        </div>

                        <div class="form-group">
                            <label>Permission</label>
                            <table class="table table-bordered">
                                <tr class="bg-success">
                                    <td width="1%">
                                        <label class="checkbox" style="margin-left: 10px" >
                                            <input id="head" type="checkbox" >
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label for="head" class="m-0 text-white" style="margin-left: 10px" >Check All</label>
                                    </td>
                                </tr>
                                @php
                                $lastp = "";
                                @endphp
                                @foreach($permissions as $value)
                                    @php
                                        $v = "";
                                        $title = explode('-', $value->name);
                                        foreach ($title as $key => $ve) {
                                            if ($key != (count($title) - 1)) {
                                                $v .= ucfirst($ve.' ');
                                            }
                                        }
                                        $v = str_replace(' ', '-', $v);
                                    @endphp

                                    @if($lastp != $v)
                                        <tr class="bg-primary">
                                            <td>
                                                <label style="margin-left: 10px" style="margin-left: 10px" class="checkbox checkbox-success">
                                                    <input class="head-2" data-child=".{{ $v }}" type="checkbox" id="{{ $v }}-head">
                                                    <span></span>
                                                <label class="checkbox" style="margin-left: 10px" >
                                            </td>
                                            <td>
                                                <label for="{{ $v }}-head" class="m-0 text-white">{{ str_replace('-', ' ', $v) }}</label>
                                            </td>
                                        </tr>
                                    @endif
                                    
                                    <tr>
                                        <td width="1%">
                                            <label class="checkbox" style="margin-left: 10px" >
                                                {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, ['class' => 'name all '.$v, 'id' => $value->name]) }}
                                                <span></span>
                                            </label>
                                        </td>
                                        <td>
                                            <label for="{{ $value->name }}" class="m-0">{{ $value->name }}</label>
                                        </td>
                                    </tr>

                                    @php
                                        $lastp = $v;
                                    @endphp
                                @endforeach
                            </table>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('#head').click(function() {
            $(".all").prop('checked', this.checked);
            $(".head-2").prop('checked', this.checked);
        });
        
        $('.head-2').click(function() {
            var v = $(this).data('child');
            $(v).prop('checked', this.checked);
        });

        $('.head-2').each(function (index, element) {
            var child = $(this).data('child');
            var length = $(child).length;
            var checked = 0;
            $(child).each(function (ii, ee) {
                if($(this).is(':checked')) {
                    checked++;
                }
            });
            if (length == checked) {
                $(this).prop('checked', true);
            }
            
        });
    </script>
@endsection