@extends('layout.app')
@section('content')
<section class="main-content-area ptb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @foreach ($searchh as $search)
                <div class="blog-box">
                    <div class="d-flex flex-wrap">
                        <div class="posts-thumb align-self-stretch"> <a href="{{ route('post', $search->id) }}"> <span
                                    class="fullimage thumb-bg1"></span> </a>
                        <br>
                        <br>
                        <img src="{{ asset('newsweb/storage/app/public/' . $search->image ) }}" class="blog-box" alt="Photo" height="200px" width="2500px">

                        </div>
                        <div class="posts-content">
                            <div class="cat"> <a href="{{ route('post' , $search->id ) }}"><i class="icofont-calendar"> {{ $search->upload_date }} <i class="icofont-eye"> {{ $search->visitors }} </i> </i> </a> </div>
                            <h3 class="title"><a href="{{ route('post' , $search->id ) }}">{{ $search->title }}</a></h3>
                            <br>
                            <a href="{{ route('post' , $search->id ) }}" class="read-more-btn">
                            <span>სრულად ნახვა</span>
                            <i class="icofont-arrow-right"></i></a>                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-lg-4">
                <aside class="widget-area" id="secondary">
                    <section class="widget wiget_posts_thumbs">
                        <h3 class="widget-title">სხვადასხვა</h3>
                        @foreach ($second_rand_news as $rand)
                        <article> <a href="{{ route('post' , $rand->id ) }}" class="thumb"><img src="{{ asset('newsweb/storage/app/public/' . $rand->image ) }}" class="blog-box" alt="Photo" height="80px" width="80px"></a>
                            <div class="info"> <time datetime="2019-05-11">{{ $rand->upload_date }}</time>
                                <h4 class="title"> <a href="{{ route('post' , $rand->id ) }}">{{ substr($rand->title, 0, 150) }}...</a> </h4>
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
    <br>
</section>
@endsection
