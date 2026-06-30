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
                                style="background-image:url({{ asset('defast') }}/images/article-min.jpg)">
                                <div class="page-title_icon"
                                    style="background-image:url({{ asset('defast') }}/images/icon-9.png)">
                                </div>
                                <div class="page-title_icon-two"
                                    style="background-image:url({{ asset('defast') }}/images/icon-10.png)">
                                </div>
                                <div class="auto-container">
                                    <h2> Artikel</h2>
                                    <ul class="bread-crumb clearfix">
                                        <li><a href="{{ url('') }}">Beranda</a></li>
                                        <li> Artikel</li>
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
        class="elementor-section elementor-top-section elementor-element elementor-element-7288481 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="7288481" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-11f6fed"
                data-id="11f6fed" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-54f8964 elementor-widget elementor-widget-gonet_blog_list"
                        data-id="54f8964" data-element_type="widget"
                        data-settings="{&quot;loop_shape_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;loop_shape_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;loop_shape_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;btn_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;btn_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;btn_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true}}"
                        data-widget_type="gonet_blog_list.default">
                        <div class="elementor-widget-container">

                            <!-- Sidebar Page Container -->
                            <div class="sidebar-page-container alternate gonet-blog-section">
                                <div class="auto-container">
                                    <div class="row clearfix">

                                        <!-- Content Side -->
                                        <div class="content-side col-lg-8 col-md-12 col-sm-12">

                                            @foreach ($blogs as $blogKey => $blog)
                                                <!-- News Block Four -->
                                                <div class="news-block_four">
                                                    <div class="news-block_four-inner">
                                                        <div class="news-block_four-content">
                                                            <div class="news-block_four-image">
                                                                <a
                                                                    href="{{ url('article') . '/' . $blog->slug }}">
                                                                        <img
                                                                        loading="lazy" width="315" height="367"
                                                                        src="{{ asset($blog->file_dir) . '/' . $blog->file }}"
                                                                        class="attachment-gonet_315x367 size-gonet_315x367 wp-post-image"
                                                                        alt="{{ $blog->title }} Article Defast" decoding="async" 
                                                                        style="width: 315px;height: 367px;object-fit: cover;"
                                                                        />
                                                                </a>
                                                            </div>
                                                            <ul class="news-block_four-meta">
                                                                <li>
                                                                    <span class="icon far fa-clock fa-fw"></span>
                                                                    {{ date('d F Y', strtotime($blog->date_published)) }}
                                                                </li>
                                                            </ul>
                                                            <h4 class="news-block_four-title"><a
                                                                    href="{{ url('article') . '/' . $blog->slug }}"><span>{{ $blog->title }}</span></a></h4>
                                                            <div class="news-block_four-text">

                                                                @php
                                                                    $raw = $blog->content;
                                                                    $raw = str_replace('<p>', '', $raw);
                                                                    $raw = str_replace('</p>', '', $raw);
                                                                    $raw = str_replace('<br>', '', $raw);
                                                                    $raw = str_replace('<br/>', '', $raw);
                                                                    $raw = str_replace('<br />', '', $raw);
                                                                    $raw = str_replace('<b>', '', $raw);
                                                                    $raw = str_replace('</b>', '', $raw);

                                                                    $raw = str_replace('<h1>', '', $raw);
                                                                    $raw = str_replace('</h1>', '', $raw);
                                                                    $raw = str_replace('<h2>', '', $raw);
                                                                    $raw = str_replace('<h3>', '', $raw);
                                                                    $raw = str_replace('</h3>', '', $raw);
                                                                    $raw = str_replace('</h3>', '', $raw);
                                                                    $raw = str_replace('</h4>', '', $raw);
                                                                    $raw = str_replace('</h4>', '', $raw);
                                                                    $raw = str_replace('</h5>', '', $raw);
                                                                    $raw = str_replace('</h5>', '', $raw);
                                                                    $raw = str_replace('</h6>', '', $raw);
                                                                    $raw = str_replace('</h6>', '', $raw);

                                                                    $content = $raw;
                                                                @endphp

                                                                {{ Illuminate\Support\Str::limit($content, 100) }}
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center justify-content-between flex-wrap">

                                                                <div class="news-block_four-author">
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

                                                                <a class="btn-style-one theme-btn gonet-btn-v1"
                                                                    href="{{ url('article') . '/' . $blog->slug }}">
                                                                    <div class="btn-wrap">
                                                                        <span class="text-one">Selengkapnya <i
                                                                                class="fas fa-arrow-right fa-fw"></i></span>
                                                                        <span class="text-two">Selengkapnya <i
                                                                                class="fas fa-arrow-right fa-fw"></i></span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            

                                            <!-- Styled Pagination -->
                                            <div class="styled-pagination text-center">
                                                <ul class="pagination">
                                                    @if ($blogs->onFirstPage())
                                                        <li><span aria-current="page" class="page-numbers current">{{ $blogs->currentPage() }}</span></li>
                                                    @else
                                                        <li><a class="page-numbers" href="{{ $blogs->previousPageUrl() }}">{{ $blogs->currentPage() - 1 }}</a></li>
                                                        <li><span aria-current="page" class="page-numbers current">{{ $blogs->currentPage() }}</span></li>
                                                    @endif
                                            
                                                    @if ($blogs->hasMorePages())
                                                        <li><a class="page-numbers" href="{{ $blogs->nextPageUrl() }}">{{ $blogs->currentPage() + 1 }}</a></li>
                                                        <li><a class="next page-numbers" href="{{ $blogs->url($blogs->lastPage()) }}"><i class="fa fa-angle-double-right"></i></a></li>
                                                    @else
                                                        {{-- <li><span aria-current="page" class="page-numbers current">{{ $blogs->currentPage() }}</span></li> --}}
                                                    @endif
                                                </ul>
                                            </div>
                                            
                                            <!-- End Styled Pagination -->
                                        </div>

                                        <!-- Sidebar Side -->
                                        <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                                            <aside class="sidebar sticky-top">
                                                @if ($pageSetting->where('type', 'new-post')->first()->status == 'active')
                                                    <div id="yt_recent_post-2"
                                                        class="widget sidebar-widget style-two yt-recent-posts">
                                                        <div class="widget-content">
                                                            <!-- Post Widget -->
                                                            <div class="post-widget">

                                                                <div class="sidebar-title">
                                                                    <h6>Artikel Terbaru</h6>
                                                                </div>
                                                                
                                                                @foreach ($recentBlogs as $blog)
                                                                    <div class="post-two">
                                                                        <div class="thumb">
                                                                            <a
                                                                                href="{{ url('article') . '/' . $blog->slug }}">
                                                                                    <img
                                                                                    width="80" height="80"
                                                                                    src="{{ asset($blog->file_dir) . '/' . $blog->file }}"
                                                                                    class="attachment-gonet_80x80 size-gonet_80x80 wp-post-image"
                                                                                    alt="" decoding="async" loading="lazy"
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
                                                    <div id="yt_follow_us-2"
                                                        class="widget sidebar-widget style-two yt-follow-us">
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
                            <!-- End Sidebar Page Container -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection