        
        <div class="form-floating">
            {{ Form::text('name', $contact->name, ['class' => 'form-control mb-3' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name', 'required']) }}
            {{ Form::label('name') }}
            {!! $errors->first('name', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('url', $contact->url, ['class' => 'form-control mb-3' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Url', 'required']) }}
            {{ Form::label('url') }}
            {!! $errors->first('url', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('status', $contact->status, ['class' => 'form-control mb-3' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status', 'required']) }}
            {{ Form::label('status') }}
            {!! $errors->first('status', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('created_by', $contact->created_by, ['class' => 'form-control mb-3' . ($errors->has('created_by') ? ' is-invalid' : ''), 'placeholder' => 'Created By', 'required']) }}
            {{ Form::label('created_by') }}
            {!! $errors->first('created_by', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('updated_by', $contact->updated_by, ['class' => 'form-control mb-3' . ($errors->has('updated_by') ? ' is-invalid' : ''), 'placeholder' => 'Updated By', 'required']) }}
            {{ Form::label('updated_by') }}
            {!! $errors->first('updated_by', '<p class="invalid-feedback">:message</p>') !!}
        </div>

        <button type="submit" class="btn btn-primary mt-5">Submit</button>