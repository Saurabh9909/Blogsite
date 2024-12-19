@extends("layouts.main")
@section("content")
<main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Blog</h2>

                <ol>
                    <li><a href="{{ route("home") }}">Home</a></li>
                    <li>Blog</li>
                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <!-- Start blog entry -->
                    @foreach ($blogs as $key => $data)
                        <article class="entry">
                            <div class="entry-img">
                                <img src="{{$data->blog_poster}}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="{{ route("blog.single", $data->id) }}">{{ $data->blog_title ?? "" }}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="{{ route("blog.single", $data->id) }}">{{ $data->user_id }}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="{{ route("blog.single", $data->id) }}"><time
                                                datetime="2020-01-01">{{ date_format($data->created_at, 'd F Y')}}</time></a>
                                    </li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="{{ route("blog.single", $data->id) }}">12 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    {{$data->blog_details}}
                                </p>
                                <div class="read-more">
                                    <a href="{{ route("blog.single", $data->id) }}">Read More</a>
                                </div>
                            </div>

                        </article>
                    @endforeach
                    <!-- End blog entry -->


                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">
                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">
                            @foreach ($recentBlogs as $key => $data)
                                <div class="post-item clearfix">
                                    <img src="{{ $data->blog_poster }}" alt="">
                                    <h4><a
                                            href="{{ route("blog.single", $data->id) }}">{{ substr($data->blog_title, 0, 30) }}</a>
                                    </h4>
                                    <time datetime="2020-01-01">{{ date_format($data->created_at, 'd F Y') }}</time>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- End sidebar -->
                </div>
                <!-- End blog sidebar -->
            </div>
        </div>
    </section>
    <!-- End Blog Section -->
</main>
<!-- End #main -->
@endsection