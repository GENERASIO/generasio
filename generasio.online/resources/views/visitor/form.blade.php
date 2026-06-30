        
        <div class="form-floating">
            {{ Form::text('page', $visitor->page, ['class' => 'form-control mb-3' . ($errors->has('page') ? ' is-invalid' : ''), 'placeholder' => 'Page', 'required']) }}
            {{ Form::label('page') }}
            {!! $errors->first('page', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('device', $visitor->device, ['class' => 'form-control mb-3' . ($errors->has('device') ? ' is-invalid' : ''), 'placeholder' => 'Device', 'required']) }}
            {{ Form::label('device') }}
            {!! $errors->first('device', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('os', $visitor->os, ['class' => 'form-control mb-3' . ($errors->has('os') ? ' is-invalid' : ''), 'placeholder' => 'Os', 'required']) }}
            {{ Form::label('os') }}
            {!! $errors->first('os', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('browser', $visitor->browser, ['class' => 'form-control mb-3' . ($errors->has('browser') ? ' is-invalid' : ''), 'placeholder' => 'Browser', 'required']) }}
            {{ Form::label('browser') }}
            {!! $errors->first('browser', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('ip', $visitor->ip, ['class' => 'form-control mb-3' . ($errors->has('ip') ? ' is-invalid' : ''), 'placeholder' => 'Ip', 'required']) }}
            {{ Form::label('ip') }}
            {!! $errors->first('ip', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('city', $visitor->city, ['class' => 'form-control mb-3' . ($errors->has('city') ? ' is-invalid' : ''), 'placeholder' => 'City', 'required']) }}
            {{ Form::label('city') }}
            {!! $errors->first('city', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('region', $visitor->region, ['class' => 'form-control mb-3' . ($errors->has('region') ? ' is-invalid' : ''), 'placeholder' => 'Region', 'required']) }}
            {{ Form::label('region') }}
            {!! $errors->first('region', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('country', $visitor->country, ['class' => 'form-control mb-3' . ($errors->has('country') ? ' is-invalid' : ''), 'placeholder' => 'Country', 'required']) }}
            {{ Form::label('country') }}
            {!! $errors->first('country', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('latitude', $visitor->latitude, ['class' => 'form-control mb-3' . ($errors->has('latitude') ? ' is-invalid' : ''), 'placeholder' => 'Latitude', 'required']) }}
            {{ Form::label('latitude') }}
            {!! $errors->first('latitude', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('longitude', $visitor->longitude, ['class' => 'form-control mb-3' . ($errors->has('longitude') ? ' is-invalid' : ''), 'placeholder' => 'Longitude', 'required']) }}
            {{ Form::label('longitude') }}
            {!! $errors->first('longitude', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('org', $visitor->org, ['class' => 'form-control mb-3' . ($errors->has('org') ? ' is-invalid' : ''), 'placeholder' => 'Org', 'required']) }}
            {{ Form::label('org') }}
            {!! $errors->first('org', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('timezone', $visitor->timezone, ['class' => 'form-control mb-3' . ($errors->has('timezone') ? ' is-invalid' : ''), 'placeholder' => 'Timezone', 'required']) }}
            {{ Form::label('timezone') }}
            {!! $errors->first('timezone', '<p class="invalid-feedback">:message</p>') !!}
        </div>

        <button type="submit" class="btn btn-primary mt-5">Submit</button>