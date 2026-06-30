        
        <div class="form-floating">
            {{ Form::text('game_code', $serviceCatalog->game_code, ['class' => 'form-control mb-3' . ($errors->has('game_code') ? ' is-invalid' : ''), 'placeholder' => 'Game Code', 'required']) }}
            {{ Form::label('game_code') }}
            {!! $errors->first('game_code', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('slug', $serviceCatalog->slug, ['class' => 'form-control mb-3' . ($errors->has('slug') ? ' is-invalid' : ''), 'placeholder' => 'Slug', 'required']) }}
            {{ Form::label('slug') }}
            {!! $errors->first('slug', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('category', $serviceCatalog->category, ['class' => 'form-control mb-3' . ($errors->has('category') ? ' is-invalid' : ''), 'placeholder' => 'Category', 'required']) }}
            {{ Form::label('category') }}
            {!! $errors->first('category', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('main_category', $serviceCatalog->main_category, ['class' => 'form-control mb-3' . ($errors->has('main_category') ? ' is-invalid' : ''), 'placeholder' => 'Main Category', 'required']) }}
            {{ Form::label('main_category') }}
            {!! $errors->first('main_category', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('sub_category', $serviceCatalog->sub_category, ['class' => 'form-control mb-3' . ($errors->has('sub_category') ? ' is-invalid' : ''), 'placeholder' => 'Sub Category']) }}
            {{ Form::label('sub_category') }}
            {!! $errors->first('sub_category', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('mini_category', $serviceCatalog->mini_category, ['class' => 'form-control mb-3' . ($errors->has('mini_category') ? ' is-invalid' : ''), 'placeholder' => 'Mini Category']) }}
            {{ Form::label('mini_category') }}
            {!! $errors->first('mini_category', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('name', $serviceCatalog->name, ['class' => 'form-control mb-3' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name', 'required']) }}
            {{ Form::label('name') }}
            {!! $errors->first('name', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('description', $serviceCatalog->description, ['class' => 'form-control mb-3' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description', 'required']) }}
            {{ Form::label('description') }}
            {!! $errors->first('description', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group mb-5">
            {{ Form::label('File') }}
            {{ Form::file('file', ['class' => 'form-control' . ($errors->has('file') ? ' is-invalid' : '')]) }}
        
            @if (!empty($serviceCatalog->file))
                <a href="{{ '/' . $serviceCatalog->file_dir . '/' . $serviceCatalog->file }}" class="btn btn-primary mt-5"
                    target="_blank">{{ $serviceCatalog->file }}</a>
            @endif
            {!! $errors->first('file', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group mb-5">
            {{ Form::label('Guide') }}
            {{ Form::file('guide', ['class' => 'form-control' . ($errors->has('guide') ? ' is-invalid' : '')]) }}
        
            @if (!empty($serviceCatalog->guide))
                <a href="{{ '/' . $serviceCatalog->guide_dir . '/' . $serviceCatalog->guide }}" class="btn btn-primary mt-5"
                    target="_blank">{{ $serviceCatalog->guide }}</a>
            @endif
            {!! $errors->first('guide', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::select('status', ['available' => 'Tersedia', 'empty' => 'Tidak Tersedia'], $serviceCatalog->status, ['class' => 'form-select mb-5' . ($errors->has('status') ? ' is-invalid' : ''), 'required']) }}
            {{ Form::label('status') }}
            {!! $errors->first('status', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::select('require_server_id', ['yes' => 'Ya', 'no' => 'Tidak'], $serviceCatalog->require_server_id, ['class' => 'form-select mb-5' . ($errors->has('require_server_id') ? ' is-invalid' : ''), 'required']) }}
            {{ Form::label('require_server_id') }}
            {!! $errors->first('require_server_id', '<p class="invalid-feedback">:message</p>') !!}
        </div>

        <button type="submit" class="btn btn-primary mt-5">Submit</button>