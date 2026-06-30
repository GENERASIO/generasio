@extends('layouts.default')
@section('content')
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Content container-->
            <div class="card">
                <div class="card-header py-5">
                    <div class="d-flex justify-content-between align-items-center">
                        <span id="card_title">
                            <h4 class="m-0">{{ __('Show '.$pageTitle) }}</h4>
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
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-hover w-100">
                        
                            <tr>
                                <td width="20%">Invoice Id</td>
                                <td>{{ $transaction->invoice_id }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Snap Token</td>
                                <td>
                                    <img src="{{ $transaction->snap_token }}" alt="{{ $transaction->invoice_id }}" width="300px">
                                    <br />
                                        <a href="{{ $transaction->snap_token }}" class="btn btn-primary" target="_blank">
                                            {{ $transaction->snap_token }}
                                        </a>
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            <tr>
                                <td width="20%">Vip Invoice</td>
                                <td>{{ $transaction->vip_invoice }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Status</td>
                                <td>{{ $transaction->status }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Description</td>
                                <td>{{ $transaction->description }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Expire Date</td>
                                <td>{{ $transaction->expire_date }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Service Catalog Slug</td>
                                <td>{{ $transaction->service_catalog_slug }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Service Product Code</td>
                                <td>{{ $transaction->service_product_code }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Buy Price</td>
                                <td>Rp. {{ number_format($transaction->product->buy_price) }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Price</td>
                                <td><b>Rp. {{ number_format($transaction->price) }}</b></td>
                            </tr>
                            <tr>
                                <td width="20%">Profit Price</td>
                                <td>Rp. {{ number_format($transaction->product->profit) }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Gamer Tag</td>
                                <td>{{ $transaction->gamer_tag }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Player Id</td>
                                <td>{{ $transaction->player_id }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Server Id</td>
                                <td>{{ $transaction->server_id }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Whatsapp</td>
                                <td>
                                    <a href="https://wa.me/+{{ $transaction->whatsapp ?? 0 }}">
                                        {{ $transaction->whatsapp ?? 0 }} 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%">Email</td>
                                <td>
                                    <a href="mailto:{{ $transaction->email ?? '-' }} ">
                                        {{ $transaction->email ?? '-' }} 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%">Merchant Name</td>
                                <td>{{ $transaction->merchant_name }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Payment Method</td>
                                <td>{{ $transaction->payment_method }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Payment Channel</td>
                                <td>{{ $transaction->payment_channel }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Payment Destination</td>
                                <td>{{ $transaction->payment_destination }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Paid At</td>
                                <td>{{ $transaction->paid_at }}</td>
                            </tr>

                            @if (!empty($transaction->created_by) && !empty($transaction->updated_by))
                                <tr>
                                    <td>Created By</td>
                                    <td><a href="{{ url('application/users') . '/' .  $transaction->user->id}}" target="_blank">{{ $transaction->user->name }}</a> at {{ $transaction->created_at }}</td>
                                </tr>
                                <tr>
                                    <td>Updated By</td>
                                    <td><a href="{{ url('application/users') . '/' .  $transaction->userUpdate->id}}" target="_blank">{{ $transaction->userUpdate->name }}</a> at {{ $transaction->updated_at }}</td>
                                </tr>
                            @endif
                    </table>
                </div>
            </div>
        <!--end::Content container-->
    </div>
@endsection
