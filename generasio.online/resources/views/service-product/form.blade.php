        
        <div class="form-floating">
            {{ Form::text('slug', $serviceProduct->slug, ['class' => 'form-control mb-3' . ($errors->has('slug') ? ' is-invalid' : ''), 'placeholder' => 'Slug', 'required']) }}
            {{ Form::label('slug') }}
            {!! $errors->first('slug', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('code', $serviceProduct->code, ['class' => 'form-control mb-3' . ($errors->has('code') ? ' is-invalid' : ''), 'placeholder' => 'Code', 'required']) }}
            {{ Form::label('code') }}
            {!! $errors->first('code', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('game', $serviceProduct->game, ['class' => 'form-control mb-3' . ($errors->has('game') ? ' is-invalid' : ''), 'placeholder' => 'Game', 'required']) }}
            {{ Form::label('game') }}
            {!! $errors->first('game', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('name', $serviceProduct->name, ['class' => 'form-control mb-3' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name', 'required']) }}
            {{ Form::label('name') }}
            {!! $errors->first('name', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('buy_price', $serviceProduct->buy_price, ['class' => 'form-control mb-3' . ($errors->has('buy_price') ? ' is-invalid' : ''), 'placeholder' => 'Buy Price', 'required']) }}
            {{ Form::label('buy_price') }}
            {!! $errors->first('buy_price', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('profit_price', $serviceProduct->profit_price, ['class' => 'form-control mb-3' . ($errors->has('profit_price') ? ' is-invalid' : ''), 'placeholder' => 'Profit Price', 'required']) }}
            {{ Form::label('profit_price') }}
            {!! $errors->first('profit_price', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('profit', $serviceProduct->profit, ['class' => 'form-control mb-3' . ($errors->has('profit') ? ' is-invalid' : ''), 'placeholder' => 'Profit', 'required']) }}
            {{ Form::label('profit') }}
            {!! $errors->first('profit', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('price', $serviceProduct->price, ['class' => 'form-control mb-3' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price', 'required']) }}
            {{ Form::label('price') }}
            {!! $errors->first('price', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('status', $serviceProduct->status, ['class' => 'form-control mb-3' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status', 'required']) }}
            {{ Form::label('status') }}
            {!! $errors->first('status', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        {{-- <div class="form-floating">
            {{ Form::text('file_dir', $serviceProduct->file_dir, ['class' => 'form-control mb-3' . ($errors->has('file_dir') ? ' is-invalid' : ''), 'placeholder' => 'File Dir', 'required']) }}
            {{ Form::label('file_dir') }}
            {!! $errors->first('file_dir', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('file', $serviceProduct->file, ['class' => 'form-control mb-3' . ($errors->has('file') ? ' is-invalid' : ''), 'placeholder' => 'File', 'required']) }}
            {{ Form::label('file') }}
            {!! $errors->first('file', '<p class="invalid-feedback">:message</p>') !!}
        </div> --}}
        {{-- <div class="form-floating">
            {{ Form::text('created_by', $serviceProduct->created_by, ['class' => 'form-control mb-3' . ($errors->has('created_by') ? ' is-invalid' : ''), 'placeholder' => 'Created By', 'required']) }}
            {{ Form::label('created_by') }}
            {!! $errors->first('created_by', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('updated_by', $serviceProduct->updated_by, ['class' => 'form-control mb-3' . ($errors->has('updated_by') ? ' is-invalid' : ''), 'placeholder' => 'Updated By', 'required']) }}
            {{ Form::label('updated_by') }}
            {!! $errors->first('updated_by', '<p class="invalid-feedback">:message</p>') !!}
        </div> --}}

        <button type="submit" class="btn btn-primary mt-5">Submit</button>