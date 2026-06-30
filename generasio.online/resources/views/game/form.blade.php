        
        <div class="form-floating">
            {{ Form::text('name', $game->name, ['class' => 'form-control mb-3' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name', 'required']) }}
            {{ Form::label('name') }}
            {!! $errors->first('name', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('code', $game->code, ['class' => 'form-control mb-3' . ($errors->has('code') ? ' is-invalid' : ''), 'placeholder' => 'Code', 'required']) }}
            {{ Form::label('code') }}
            {!! $errors->first('code', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('created_by', $game->created_by, ['class' => 'form-control mb-3' . ($errors->has('created_by') ? ' is-invalid' : ''), 'placeholder' => 'Created By', 'required']) }}
            {{ Form::label('created_by') }}
            {!! $errors->first('created_by', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('updated_by', $game->updated_by, ['class' => 'form-control mb-3' . ($errors->has('updated_by') ? ' is-invalid' : ''), 'placeholder' => 'Updated By', 'required']) }}
            {{ Form::label('updated_by') }}
            {!! $errors->first('updated_by', '<p class="invalid-feedback">:message</p>') !!}
        </div>

        <button type="submit" class="btn btn-primary mt-5">Submit</button>