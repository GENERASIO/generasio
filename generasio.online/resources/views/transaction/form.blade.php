        
        <div class="form-floating">
            {{ Form::text('invoice_id', $transaction->invoice_id, ['class' => 'form-control mb-3' . ($errors->has('invoice_id') ? ' is-invalid' : ''), 'placeholder' => 'Invoice Id', 'required']) }}
            {{ Form::label('invoice_id') }}
            {!! $errors->first('invoice_id', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('snap_token', $transaction->snap_token, ['class' => 'form-control mb-3' . ($errors->has('snap_token') ? ' is-invalid' : ''), 'placeholder' => 'Snap Token', 'required']) }}
            {{ Form::label('snap_token') }}
            {!! $errors->first('snap_token', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('vip_invoice', $transaction->vip_invoice, ['class' => 'form-control mb-3' . ($errors->has('vip_invoice') ? ' is-invalid' : ''), 'placeholder' => 'Vip Invoice', 'required']) }}
            {{ Form::label('vip_invoice') }}
            {!! $errors->first('vip_invoice', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('status', $transaction->status, ['class' => 'form-control mb-3' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status', 'required']) }}
            {{ Form::label('status') }}
            {!! $errors->first('status', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('description', $transaction->description, ['class' => 'form-control mb-3' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description', 'required']) }}
            {{ Form::label('description') }}
            {!! $errors->first('description', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('invoice_url', $transaction->invoice_url, ['class' => 'form-control mb-3' . ($errors->has('invoice_url') ? ' is-invalid' : ''), 'placeholder' => 'Invoice Url', 'required']) }}
            {{ Form::label('invoice_url') }}
            {!! $errors->first('invoice_url', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('expire_date', $transaction->expire_date, ['class' => 'form-control mb-3' . ($errors->has('expire_date') ? ' is-invalid' : ''), 'placeholder' => 'Expire Date', 'required']) }}
            {{ Form::label('expire_date') }}
            {!! $errors->first('expire_date', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('service_catalog_slug', $transaction->service_catalog_slug, ['class' => 'form-control mb-3' . ($errors->has('service_catalog_slug') ? ' is-invalid' : ''), 'placeholder' => 'Service Catalog Slug', 'required']) }}
            {{ Form::label('service_catalog_slug') }}
            {!! $errors->first('service_catalog_slug', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('service_product_code', $transaction->service_product_code, ['class' => 'form-control mb-3' . ($errors->has('service_product_code') ? ' is-invalid' : ''), 'placeholder' => 'Service Product Code', 'required']) }}
            {{ Form::label('service_product_code') }}
            {!! $errors->first('service_product_code', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('price', $transaction->price, ['class' => 'form-control mb-3' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price', 'required']) }}
            {{ Form::label('price') }}
            {!! $errors->first('price', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('gamer_tag', $transaction->gamer_tag, ['class' => 'form-control mb-3' . ($errors->has('gamer_tag') ? ' is-invalid' : ''), 'placeholder' => 'Gamer Tag', 'required']) }}
            {{ Form::label('gamer_tag') }}
            {!! $errors->first('gamer_tag', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('player_id', $transaction->player_id, ['class' => 'form-control mb-3' . ($errors->has('player_id') ? ' is-invalid' : ''), 'placeholder' => 'Player Id', 'required']) }}
            {{ Form::label('player_id') }}
            {!! $errors->first('player_id', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('server_id', $transaction->server_id, ['class' => 'form-control mb-3' . ($errors->has('server_id') ? ' is-invalid' : ''), 'placeholder' => 'Server Id', 'required']) }}
            {{ Form::label('server_id') }}
            {!! $errors->first('server_id', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('whatsapp', $transaction->whatsapp, ['class' => 'form-control mb-3' . ($errors->has('whatsapp') ? ' is-invalid' : ''), 'placeholder' => 'Whatsapp', 'required']) }}
            {{ Form::label('whatsapp') }}
            {!! $errors->first('whatsapp', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('email', $transaction->email, ['class' => 'form-control mb-3' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email', 'required']) }}
            {{ Form::label('email') }}
            {!! $errors->first('email', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('merchant_name', $transaction->merchant_name, ['class' => 'form-control mb-3' . ($errors->has('merchant_name') ? ' is-invalid' : ''), 'placeholder' => 'Merchant Name', 'required']) }}
            {{ Form::label('merchant_name') }}
            {!! $errors->first('merchant_name', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('payment_method', $transaction->payment_method, ['class' => 'form-control mb-3' . ($errors->has('payment_method') ? ' is-invalid' : ''), 'placeholder' => 'Payment Method', 'required']) }}
            {{ Form::label('payment_method') }}
            {!! $errors->first('payment_method', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('payment_channel', $transaction->payment_channel, ['class' => 'form-control mb-3' . ($errors->has('payment_channel') ? ' is-invalid' : ''), 'placeholder' => 'Payment Channel', 'required']) }}
            {{ Form::label('payment_channel') }}
            {!! $errors->first('payment_channel', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('payment_destination', $transaction->payment_destination, ['class' => 'form-control mb-3' . ($errors->has('payment_destination') ? ' is-invalid' : ''), 'placeholder' => 'Payment Destination', 'required']) }}
            {{ Form::label('payment_destination') }}
            {!! $errors->first('payment_destination', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('paid_at', $transaction->paid_at, ['class' => 'form-control mb-3' . ($errors->has('paid_at') ? ' is-invalid' : ''), 'placeholder' => 'Paid At', 'required']) }}
            {{ Form::label('paid_at') }}
            {!! $errors->first('paid_at', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('created_by', $transaction->created_by, ['class' => 'form-control mb-3' . ($errors->has('created_by') ? ' is-invalid' : ''), 'placeholder' => 'Created By', 'required']) }}
            {{ Form::label('created_by') }}
            {!! $errors->first('created_by', '<p class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-floating">
            {{ Form::text('updated_by', $transaction->updated_by, ['class' => 'form-control mb-3' . ($errors->has('updated_by') ? ' is-invalid' : ''), 'placeholder' => 'Updated By', 'required']) }}
            {{ Form::label('updated_by') }}
            {!! $errors->first('updated_by', '<p class="invalid-feedback">:message</p>') !!}
        </div>

        <button type="submit" class="btn btn-primary mt-5">Submit</button>