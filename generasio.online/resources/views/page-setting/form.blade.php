        
        <div class="form-floating">
            {{ Form::text('page', $pageSetting->page, ['class' => 'form-control mb-3' . ($errors->has('page') ? ' is-invalid' : ''), 'placeholder' => 'Page', 'required']) }}
            {{ Form::label('page') }}
            {!! $errors->first('page', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('type', $pageSetting->type, ['class' => 'form-control mb-3' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Type', 'required']) }}
            {{ Form::label('type') }}
            {!! $errors->first('type', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('name', $pageSetting->name, ['class' => 'form-control mb-3' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name', 'required']) }}
            {{ Form::label('name') }}
            {!! $errors->first('name', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::select('status', ['active' => 'Active', 'non-active' => 'Non Active'], $pageSetting->status, ['class' => 'form-control mb-3' . ($errors->has('status') ? ' is-invalid' : ''), 'required']) }}
            {{ Form::label('status') }}
            {!! $errors->first('status', '<p class="invalid-feedback">:message</p>') !!}
        </div>

        <button type="submit" class="btn btn-primary mt-5">Submit</button>