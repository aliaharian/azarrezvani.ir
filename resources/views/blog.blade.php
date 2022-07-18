@extends('layouts.master', ['page' => 'blog'])
@section('title', 'تدریس خصوصی دوم و سوم دوره ابتدایی | آذر رضوانی')
@section('description', 'وب سایت معلم دوم و سوم ابتدایی | آذر رضوانی')
@section('pagename', 'blog')
@section('headSection')
<link rel="alternate" href="https://azarrezvani.ir/blog" hreflang="x-default">
    <link rel="canonical" href="https://azarrezvani.ir/blog">

@stop
@section('bodySection')


<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
  <h1> <span>مقاله ها </span> </h1>
  <span class="title-bg">نوشته ها </span>
</section>

<section class="main-content revealator-slideup revealator-once revealator-delay1">
  <div class="container">
    <div class="row">
      @foreach($posts as $post)
      <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
        <article class="post-container">
          <div class="post-thumb">
            <a href="/blog/{{ $post->id }}/{{ str_replace(' ','-',$post->title) }}" class="d-block position-relative overflow-hidden">
              <img src="{{ $post->image }}" class="img-fluid" alt="Blog Post" />
            </a>
          </div>
          <div class="post-content">
            <div class="entry-header">
              <h3>
                <a href="/blog/{{ $post->id }}/{{ str_replace(' ','-',$post->title) }}">{{ $post->title }}</a>
              </h3>
            </div>
            <div class="entry-content open-sans-font">
              <p>
                {{ $post->brief}}
              </p>
            </div>
          </div>
        </article>
      </div>
      @endforeach


      @if($posts->lastPage()>1)
      <div class="col-12 mt-4">
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center mb-0">
            <li class="page-item @if($posts->currentPage()==1) active @endif"><a class="page-link" href="
            @if($posts->currentPage()>1) {{ $posts->url($posts->currentPage() - 1) }} @else {{ $posts->url($posts->currentPage()) }} @endif
            ">@if($posts->currentPage()>1) {{ $posts->currentPage() - 1 }} @else {{ $posts->currentPage() }} @endif</a></li>
            <li class="page-item @if($posts->currentPage()>1) active @endif">
              <a class="page-link" href="
              @if($posts->currentPage()>1) {{ $posts->url($posts->currentPage()) }} @else {{ $posts->url($posts->currentPage() + 1) }} @endif
              ">@if($posts->currentPage()>1) {{ $posts->currentPage() }} @else {{ $posts->currentPage() + 1 }} @endif</a>
            </li>

            @if(($posts->currentPage() == 1 && $posts->lastPage() >= $posts->currentPage() + 2) || ($posts->currentPage() > 1 && $posts->lastPage() >= $posts->currentPage() + 1))
            <li class="page-item"><a class="page-link" href="
            @if($posts->currentPage()>1) {{ $posts->url($posts->currentPage() + 1) }} @else {{ $posts->url($posts->currentPage() + 2) }} @endif

            "> @if($posts->currentPage() > 1) {{ $posts->currentPage() + 1 }} @else {{ $posts->currentPage() + 2 }} @endif </a></li>
            @endif

            @if(($posts->currentPage() ==1 && $posts->lastPage() >= $posts->currentPage() + 3) || ($posts->currentPage() > 1 && $posts->lastPage() >= $posts->currentPage() + 2))
            <li class="page-item"><a class="page-link" href="
            @if($posts->currentPage()>1) {{ $posts->url($posts->currentPage() + 2) }} @else {{ $posts->url($posts->currentPage() + 3) }} @endif
            ">@if($posts->currentPage() > 1) {{ $posts->currentPage() + 2 }} @else {{ $posts->currentPage() + 3 }} @endif</a></li>
            @endif
          </ul>
        </nav>
      </div>
    </div>
    @endif

  </div>
</section>

@stop
@section('scriptsSection')
<script type="application/ld+json">
  {
    "@context": "https://schema.org/",
    "@type": "BreadcrumbList",
    "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "تدریس خصوصی دوم و سوم دوره ابتدایی | آذر رضوانی",
    "item":  "https://azarrezvani.ir"
  }, {
      "@type": "ListItem",
      "position": 2,
      "name": "وبلاگ",
      "item": "https://azarrezvani.ir/blog"
    }]
  }
</script>

@stop