@extends('layout.app')
@section('content')
<meta property="og:url" content="{{ route('post' , $one_news->id)}}" />
  <meta property="og:type" content="website" />
  <meta property="fb:app_id" content="" />
  <meta property="og:title" content="{{ $one_news->title }}" />
  <meta property="og:description" content="{!! $one_news->desc_ka !!}" />
  <meta property="og:image" content="{{ asset('storage/app/public/' . $one_news->image) }}" />
<section class="news-details-area pb-40">
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-12 offset-lg-2 offset-md-0">
            <div class="news-details">
                <div class="article-content">
                    <ul class="entry-meta">
                        <li><i class="icofont-calendar"></i>{{ $one_news->upload_date }}</li>
                        <li><i class="icofont-eye"></i>{{ $one_news->visitors }}</li>
                    </ul>
                    <h3 class="mb-0">{{ $one_news->title }}</h3>
                </div>
                <div class="article-img">
                    <img src="{{ asset('newsweb/storage/app/public/' . $one_news->image ) }}" width="800px" height="500px" alt="image">
                </div>
                <div class="article-content">
                    <p>{!! $one_news->desc_ka !!}</p>
                    <div class="fb-share-button"
                      data-href="{{ route('post' , $one_news->id) }}"
                      data-layout="button_count" data-size="small"><a target="_blank"
                        href="https://www.facebook.com/sharer/sharer.php?u={{ route('post' , $one_news->id) }}&src=sdkpreparse"
                        class="fb-xfbml-parse-ignore">გაზიარება</a></div>
                </div>
            </div>

            <div class="comments-area">
                <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0" nonce="t2mYdRRX"> </script>
                    <div class="fb-comments" data-colorscheme="dark" data-href="{{ route('post', $one_news->id) }}" data-numposts=" 5"
                        data-height="400px">
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection

