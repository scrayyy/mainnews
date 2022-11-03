@extends('layout.app')
@section('content')
<section class="more-news-area pt-40">
    <div class="container">
        <div class="more-news-inner">
            <div class="section-title">
                <h2>კვირის პოპულარული სიახლეები</h2>
            </div>
            <div class="row">
                <div class="more-news-slides owl-carousel owl-theme">
                    @foreach ($rand_news as $rand)
                    <div class="col-lg-12 col-md-12">
                        <div class="single-more-news"> <img src="{{ asset('newsweb/storage/app/public/' . $rand->image ) }}" style="width: 350px;" height="220px;" alt="image">
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-calendar"></i> {{ $rand->upload_date }}</li>
                                    <li><i class="icofont-eye"></i> {{ $rand->visitors }}</li>
                                </ul>
                                <h3 style="color:white;"><a href="{{ route('post' , $rand->id ) }}">{{ $rand->title }}...</a> </h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main-content-area ptb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @foreach ($all_news as $all_new)
                <div class="blog-box">
                    <div class="d-flex flex-wrap">
                        <div class="posts-thumb align-self-stretch"> <a href="{{ route('post', $all_new->id) }}"> <span
                                    class="fullimage thumb-bg1"></span> </a>
                        <br>
                        <img src="{{ asset('newsweb/storage/app/public/' . $all_new->image ) }}" class="blog-box" alt="Photo" height="200px" width="2500px">

                        </div>
                        <div class="posts-content">
                            <div class="cat"> <a href="{{ route('post' , $all_new->id ) }}"><i class="icofont-calendar"> {{ $all_new->upload_date }} <i class="icofont-eye"> {{ $all_new->visitors }} </i> </i> </a> </div>
                            <h3 class="title"><a href="{{ route('post' , $all_new->id ) }}">{{ $all_new->title }}</a></h3>
                            <br>
                            <a href="{{ route('post' , $all_new->id ) }}" class="read-more-btn">
                            <span>სრულად ნახვა</span>
                            <i class="icofont-arrow-right"></i></a>
                         </div>
                    </div>
                </div>
                @endforeach
                <div class="d-felx justify-content-center">
                    {{ $all_news->links() }}
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="widget-area" id="secondary">
                    <section class="widget wiget_posts_thumbs">
                        <h3 class="widget-title">სხვადასხვა</h3>
                        @foreach ($second_rand_news as $rand)
                        <article> <a href="{{ route('post' , $rand->id ) }}" class="thumb"><img src="{{ asset('newsweb/storage/app/public/' . $rand->image ) }}" class="blog-box" alt="Photo" height="80px" width="80px"></a>
                            <div class="info"> <time datetime="2019-05-11">{{ $rand->upload_date }}</time>
                                <h4 class="title"> <a href="{{ route('post' , $rand->id ) }}">{{ substr($rand->title, 0, 350) }}...</a> </h4>
                            </div>
                        </article>
                        @endforeach
                    </section>
                    <section class="widget widget_recent_entries">
                        <h3 class="widget-title">უახლესი სიახლეები</h3>
                        <ul>
                            @foreach ($last_news as $last_new)
                            <li><a href="{{ route('post' , $last_new->id ) }}">{{ substr($last_new->title, 0, 300)}}</a></li>
                            @endforeach
                        </ul>
                    </section>
                    <section class="widget widget_categories">
                        <h3 class="widget-title">კატეგორიები</h3>
                        <ul>
                            @foreach ($catnames as $catname)
                                <li><a href="{{ route('category' , $catname->id ) }}">{{ $catname->name }}</a></li>
                            @endforeach
                        </ul>
                    </section>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection
