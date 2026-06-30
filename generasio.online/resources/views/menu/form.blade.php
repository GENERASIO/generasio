        
        <div class="form-floating">
            {{ Form::text('title', $menu->title, ['class' => 'form-control mb-3' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title', 'required']) }}
            {{ Form::label('title') }}
            {!! $errors->first('title', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('url', $menu->url, ['class' => 'form-control mb-3' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Url', 'required']) }}
            {{ Form::label('url') }}
            {!! $errors->first('url', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::select('status', ['active' => 'Active', 'non-active' => 'Non Active'], $menu->status, ['class' => 'form-control mb-3' . ($errors->has('status') ? ' is-invalid' : ''), 'required']) }}
            {{ Form::label('status') }}
            {!! $errors->first('status', '<p class="invalid-feedback">:message</p>') !!}
        </div>

        <button type="submit" class="btn btn-primary mt-5">Submit</button>