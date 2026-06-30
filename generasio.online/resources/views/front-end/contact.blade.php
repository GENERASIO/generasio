@extends('front-end.layouts.default')

@section('contents')
    <!-- Main -->
    <section class="elementor-section elementor-top-section elementor-element elementor-element-b840f49 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="b840f49" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c19c339" data-id="c19c339" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-452b8b7 elementor-widget elementor-widget-gonet_slider" data-id="452b8b7" data-element_type="widget" data-widget_type="gonet_slider.default">
                        <div class="elementor-widget-container">

                            <section class="page-title"
                                style="background-image:url({{ asset('defast') }}/images/contact-min.jpg)">
                                <div class="page-title_icon"
                                    style="background-image:url({{ asset('defast') }}/images/icon-9.png)">
                                </div>
                                <div class="page-title_icon-two"
                                    style="background-image:url({{ asset('defast') }}/images/icon-10.png)">
                                </div>
                                <div class="auto-container">
                                    <h2> Hubungi Kami</h2>
                                    <ul class="bread-crumb clearfix">
                                        <li><a href="{{ url('') }}">Beranda</a></li>
                                        <li> Hubungi Kami</li>
                                    </ul>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-e7035cc elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="e7035cc" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default mt-5">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9740d3c"
                data-id="9740d3c" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-0c6d514 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0c6d514" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default mt-5">
                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-b921ea0" data-id="b921ea0" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-25856a5 elementor-widget elementor-widget-gonet_hero_title" data-id="25856a5" data-element_type="widget" data-widget_type="gonet_hero_title.default">
                                        <div class="elementor-widget-container">

                                            <div class="gonet-sec-title te-align">
                                                <h2 class="shows-one_title gonet-size-default">
                                                    {{ $contactTitle->title }}
                                                </h2>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-7776c2c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="7776c2c" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1d91b53"
                                data-id="1d91b53" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-fbdc2f2 elementor-widget elementor-widget-gonet_contact_info"
                                        data-id="fbdc2f2" data-element_type="widget"
                                        data-settings="{&quot;btn_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;btn_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;btn_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true}}"
                                        data-widget_type="gonet_contact_info.default">
                                        <div class="elementor-widget-container">

                                            <!-- Info One Block -->
                                            <div class="info-one_block-inner gonet-contact-info wow fadeInLeft"
                                                data-wow-delay="0ms" data-wow-duration="1500ms">
                                                <div class="info-one_block-icon">
                                                    <i class="fas fa-phone-volume"></i>
                                                </div>

                                                <div class="info-one_block-title go-sub-title">LANGGANAN PRODUK</div>

                                                <h4 class="info-one_block-heading go-title">Pembelian </h4> <a
                                                    href="tel:{{ $companyProfile->telp }}"
                                                    class="info-one_block-link gonet-read-more">TELP KAMI</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a680a08"
                                data-id="a680a08" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-54a6181 elementor-widget elementor-widget-gonet_contact_info"
                                        data-id="54a6181" data-element_type="widget"
                                        data-settings="{&quot;btn_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;btn_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;btn_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true}}"
                                        data-widget_type="gonet_contact_info.default">
                                        <div class="elementor-widget-container">

                                            <!-- Info One Block -->
                                            <div class="info-one_block-inner gonet-contact-info wow fadeInLeft"
                                                data-wow-delay="0ms" data-wow-duration="1500ms">
                                                <div class="info-one_block-icon">
                                                    <i class="fas fa-paper-plane"></i>
                                                </div>

                                                <div class="info-one_block-title go-sub-title">CUSTOMER SUPPORT
                                                </div>

                                                <h4 class="info-one_block-heading go-title">Customer Service
                                                </h4> <a href="mailto:{{ $companyProfile->email }}"
                                                    class="info-one_block-link gonet-read-more">KIRIM EMAIL</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-626b572"
                                data-id="626b572" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-0814027 elementor-widget elementor-widget-gonet_contact_info"
                                        data-id="0814027" data-element_type="widget"
                                        data-widget_type="gonet_contact_info.default">
                                        <div class="elementor-widget-container">

                                            <!-- Info One Block -->
                                            <div class="info-one_block-inner gonet-contact-info wow fadeInRight"
                                                data-wow-delay="0ms" data-wow-duration="1500ms">
                                                <div class="info-one_block-icon ">
                                                    <i class="fas fa-grip-vertical"></i>
                                                </div>

                                                <div class="info-one_block-title go-sub-title">BANTUAN LAINNYA
                                                </div>

                                                <h4 class="info-one_block-heading go-title">Whatsapp</h4>
                                                <a href="wa.me/{{ $companyProfile->telp }}" class="info-one_block-phone"><span
                                                        class="fas fa-phone-volume fa-fw"></span>
                                                    0878 8302 9915</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    @if ($pageSetting->where('type', 'map')->first()->status == 'active')
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-f5d1734 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
            data-id="f5d1734" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no mt-5">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d24945d"
                    data-id="d24945d" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-fc05b0d elementor-widget elementor-widget-gonet_google_map"
                            data-id="fc05b0d" data-element_type="widget"
                            data-widget_type="gonet_google_map.default">
                            <div class="elementor-widget-container">

                                <!-- Map Two -->
                                <section class="map-one">
                                    <div class="outer-container">
                                        <iframe
                                            src="{{ $companyProfile->maps }}"
                                            width="600" height="450" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </section>
                                <!-- End Map Two -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection