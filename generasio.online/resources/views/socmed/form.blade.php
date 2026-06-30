        
        <div class="form-floating">
            {{ Form::text('name', $socmed->name, ['class' => 'form-control mb-3' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name', 'required']) }}
            {{ Form::label('name') }}
            {!! $errors->first('name', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('url', $socmed->url, ['class' => 'form-control mb-3' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Url', 'required']) }}
            {{ Form::label('url') }}
            {!! $errors->first('url', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('status', $socmed->status, ['class' => 'form-control mb-3' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status', 'required']) }}
            {{ Form::label('status') }}
            {!! $errors->first('status', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('file_dir', $socmed->file_dir, ['class' => 'form-control mb-3' . ($errors->has('file_dir') ? ' is-invalid' : ''), 'placeholder' => 'File Dir', 'required']) }}
            {{ Form::label('file_dir') }}
            {!! $errors->first('file_dir', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('file', $socmed->file, ['class' => 'form-control mb-3' . ($errors->has('file') ? ' is-invalid' : ''), 'placeholder' => 'File', 'required']) }}
            {{ Form::label('file') }}
            {!! $errors->first('file', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('icon', $socmed->icon, ['class' => 'form-control mb-3' . ($errors->has('icon') ? ' is-invalid' : ''), 'placeholder' => 'Icon', 'required']) }}
            {{ Form::label('icon') }}
            {!! $errors->first('icon', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('created_by', $socmed->created_by, ['class' => 'form-control mb-3' . ($errors->has('created_by') ? ' is-invalid' : ''), 'placeholder' => 'Created By', 'required']) }}
            {{ Form::label('created_by') }}
            {!! $errors->first('created_by', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('updated_by', $socmed->updated_by, ['class' => 'form-control mb-3' . ($errors->has('updated_by') ? ' is-invalid' : ''), 'placeholder' => 'Updated By', 'required']) }}
            {{ Form::label('updated_by') }}
            {!! $errors->first('updated_by', '<p class="invalid-feedback">:message</p>') !!}
        </div>

        <button type="submit" class="btn btn-primary mt-5">Submit</button>