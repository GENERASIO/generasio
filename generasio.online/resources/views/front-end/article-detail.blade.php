@extends('front-end.layouts.default')

@section('contents')
<section class="elementor-section elementor-top-section elementor-element elementor-element-b840f49 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="b840f49" data-element_type="section">
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c19c339" data-id="c19c339" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-452b8b7 elementor-widget elementor-widget-gonet_slider" data-id="452b8b7" data-element_type="widget" data-widget_type="gonet_slider.default">
                    <div class="elementor-widget-container">

                        <section class="page-title"
                            style="background-image:url({{ asset('defast') }}/images/article-min.jpg)">
                            <div class="page-title_icon"
                                style="background-image:url({{ asset('defast') }}/images/icon-9.png)">
                            </div>
                            <div class="page-title_icon-two"
                                style="background-image:url({{ asset('defast') }}/images/icon-10.png)">
                            </div>
                            <div class="auto-container">
                                <h2>{{ $blog->title }}</h2>
                                <ul class="bread-crumb clearfix">
                                    <li><a href="{{ url('') }}">Beranda</a></li>
                                    <li><a href="{{ url('article') }}">Artikel</a></li>
                                    <li> Detail</li>
                                </ul>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="news-detail">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="content-side col-lg-8 col-md-12 col-sm-12 ">

                <div class="news-detail-inner">
                    <div class="thm-unit-test">
                        <div class="news-detail-image">
                            <img width="810" height="367"
                                src="{{ asset($blog->file_dir) . '/' . $blog->file }}"
                                class="attachment-full size-full wp-post-image" alt="{{ $blog->title }}" decoding="async"/>
                        </div>
                        <div class="news-detail_content p-30">

                            <div class="d-flex mb-40 align-items-center justify-content-between flex-wrap">
                                <div class="news-detail-author" style="color: white;">
                                    <span class="author-image">
                                        @if(empty($blog->user->profile_image))
                                            <img alt='Author Defast Blog'
                                                src='{{ asset('demo34/dist') }}/assets/media/svg/avatars/blank.svg'
                                                class='avatar avatar-67 photo' height='67'
                                                width='67' loading='lazy'
                                                decoding='async' />
                                        @else
                                            <img 
                                                src='{{ asset($blog->user->profile_dir. '/'. $blog->user->profile_image) }}'
                                                class='avatar avatar-67 photo' height='67'
                                                width='67' loading='lazy'
                                                alt="{{ $blog->user->name }} Image Author"
                                                decoding='async' />

                                        @endif
                                    </span>
                                    {{ $blog->user->name }}
                                </div>

                                <ul class="news-detail-meta">
                                    <li><span class="icon far fa-clock fa-fw"></span>{{ date('d F Y', strtotime($blog->date_published)) }}</li>
                                </ul>
                            </div>

                            <div class="text">
                                <p>{!! $blog->content !!}</p>
                            </div>
                            <div class="clearfix"></div>


                            <!-- Post Share Options -->
                            <div class="post-share-options">
                                <div
                                    class="post-share-inner d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="tags-box">
                                        <a  rel="tag" style="color: white;">{{ $blog->category->name }}</a>
                                    </div>


                                    <div class="social-box">

                                        <a href="http://www.facebook.com/sharer.php?u={{ url()->current() }}/"
                                            target="_blank"><span class="fa-brands fa-facebook-f"></span></a>
                                        <a href="https://twitter.com/share?url={{ url()->current() }}/&text={{ $blog->slug }}"
                                            target="_blank"><span class="fa-brands fa-twitter"></span></a>
                                        <a
                                            href="http://www.linkedin.com/shareArticle?url={{ url()->current() }}/&title={{ $blog->slug }}"><span
                                                class="fa-brands fa-linkedin"></span></a>
                                        <a
                                            href="https://pinterest.com/pin/create/bookmarklet/?url={{ url()->current() }}/&description={{ $blog->slug }}"><span
                                                class="fa-brands fa-pinterest"></span></a>

                                    </div>


                                </div>
                            </div>
                            <!-- More Posts -->
                            <div class="more-posts">
                                <div
                                    class="more-posts-inner d-flex justify-content-between align-items-center flex-wrap">
                                    
                                    @if (!empty($prevBlog))
                                        <a href="{{ url('article') . '/' . $prevBlog->slug }}"
                                            class="prev-post mt-2">
                                            <div class="prev-arrow fas fa-arrow-left fa-fw"></div>
                                            {{ $prevBlog->title }}
                                            <span class="more-post_date">{{ date('d F Y', strtotime($prevBlog->created_at)) }}</span>
                                        </a>
                                    @endif
                                    
                                    @if (!empty($nextBlog))
                                        <a href="{{ url('article') . '/' . $nextBlog->slug }}"
                                            class="next-post mt-2">
                                            <div class="next-arrow fas fa-arrow-right fa-fw"></div>
                                            {{ $nextBlog->title }}
                                            <span class="more-post_date">{{ date('d F Y', strtotime($nextBlog->created_at)) }}</span>
                                        </a>
                                    @endif

                                </div>
                            </div>
                            <!-- End More Posts -->

                        </div>
                    </div>
                </div>


            </div>

            <!-- Sidebar Side -->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar sticky-top">
                    @if ($pageSetting->where('type', 'new-post')->first()->status == 'active')
                        <div id="yt_recent_post-2" class="widget sidebar-widget style-two yt-recent-posts">
                            <div class="widget-content">
                                <!-- Post Widget -->
                                <div class="post-widget">

                                    <div class="sidebar-title">
                                        <h6>Artikel Terbaru</h6>
                                    </div>

                                    @foreach ($blogs as $blog)
                                        <div class="post-two">
                                            <div class="thumb">
                                                <a
                                                    href="{{ url('article') . '/' . $blog->slug }}">
                                                    <img
                                                        width="80" height="80"
                                                        src="{{ asset($blog->file_dir) . '/' . $blog->file }}"
                                                        class="attachment-gonet_80x80 size-gonet_80x80 wp-post-image"
                                                        alt="{{ $blog->title }}" decoding="async" loading="lazy"
                                                        style="width: 80px;height: 60px;object-fit: cover;"
                                                        />
                                                </a>
                                            </div>
                                            <div class="post-date_two">{{ date('d F Y', strtotime($blog->date_published)) }}</div>
                                            <h6><a
                                                    href="{{ url('article') . '/' . $blog->slug }}">{{ $blog->title }}</a></h6>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    @endif

                    @if ($pageSetting->where('type', 'get-in-touch')->first()->status == 'active')
                        <div id="yt_follow_us-2" class="widget sidebar-widget style-two yt-follow-us">
                            <div class="widget-content">
                                <!-- Social Widget -->
                                <div class="social-widget">

                                    <div class="sidebar-title">
                                        <h6>Follow Kami</h6>
                                    </div>
                                    <div class="social-widget_button">
                                        <a href="https://www.instagram.com/generasio.store/" class="theme-btn contact-btn">get in touch</a>
                                    </div>

                                </div>

                            </div>
                        </div>
                    @endif
                </aside>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer-scripts')

<script>
        
    var latitude = '';
    var longitude = '';
    var pageTitle = `{{ $pageTitle ?? 'Beranda' }}`;
    var blogId = `{{ $blog->id ?? NULL }}`;

    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(function(position) {
            latitude = position.coords.latitude;
            longitude = position.coords.longitude;

        }, function(error) {
            switch(error.code) {
                case error.PERMISSION_DENIED:
                    console.log("Pengguna tidak memberikan izin untuk mengambil lokasi.");
                    break;
                case error.POSITION_UNAVAILABLE:
                    console.log("Lokasi pengguna tidak tersedia.");
                    break;
                case error.TIMEOUT:
                    console.log("Waktu permintaan lokasi habis.");
                    break;
                case error.UNKNOWN_ERROR:
                    console.log("Terjadi kesalahan yang tidak diketahui.");
                    break;
            }
        });
    } else {
        console.log("Geolocation tidak didukung oleh browser Anda.");
    }

    jQuery.ajax({
        url: `{{ route('api.get-blog-visitor') }}`,
        data: {latitude:latitude, longitude:longitude, pageTitle: pageTitle, blogId:blogId},
        dataType: 'json',
        success: function(result) {

        }
    });

</script>

@endsection