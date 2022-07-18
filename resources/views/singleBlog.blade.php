@extends('layouts.master', ['page' => 'blog-post'])
@php
    $title = $post->title.' | آذر رضوانی  ';
    $desc = 'مطالعه مقاله ی '.$post->title.' در وب سایت آذر رضوانی معلم خصوصی پایه دوم و سوم ابتدایی'
@endphp
@section('title', $title)
@section('description', $desc)
@section('pagename', 'blog-post')
@section('headSection')
<link rel="alternate" href="https://azarrezvani.ir/blog/{{ $post->id }}/{{ str_replace(' ','-',$post->title) }}" hreflang="x-default">
    <link rel="canonical" href="https://azarrezvani.ir/blog/{{ $post->id }}/{{ str_replace(' ','-',$post->title) }}">

@stop
@section('bodySection')


<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
  <h1> <span>مقاله ها </span> </h1>
  <span class="title-bg">نوشته ها </span>
</section>

<section class="main-content revealator-slideup revealator-once revealator-delay1">
  <div class="container">
    <div class="row">
      <article class="col-12">
        <div class="meta open-sans-font">
          <!-- <span><i class="fa fa-user"></i>{{ $post->author }}</span> -->
          <span class="date"><i class="fa fa-calendar"></i> {{jDate($post->created_at)->format('%d %B %Y')}}</span>
          <span><i class="fa fa-tags"></i> {{ $post->tags }}
          </span>
        </div>

        <h1 class="text-uppercase text-capitalize">
          {{$post->title}}
        </h1>
        <img src="{{$post->image}}" class="img-fluid" alt="{{$post->title}}" />
        <div class="blog-excerpt open-sans-font pb-5 blog-content">
          {!! $post->content !!}
        </div>
      </article>
    </div>
  </div>
</section>

@stop
@section('scriptsSection')
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "mainEntityOfPage": {
      "@type": "WebPage",
      "@id": "https://azarrezvani.ir/blog/{{$post->id}}/{{ str_replace(' ','-',$post->title) }}"
    },
    "headline": "{{$post->title}}",
    "description": "{{$post->brief}}",
    "image": "{{$post->image}}",
    "author": {
      "@type": "Person",
      "name": "{{$post->author}}"
    },
    "publisher": {
      "@type": "Organization",
      "name": "تدریس خصوصی دوم و سوم دوره ابتدایی | آذر رضوانی'",
      "logo": {
        "@type": "ImageObject",
        "url": ""
      }
    },
    "datePublished": "{{$post->created_at}}",
    "dateModified": "{{$post->updated_at}}"
  }
</script>
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
    }, {
      "@type": "ListItem",
      "position": 3,
      "name": "{{$post->title}}",
      "item": "https://azarrezvani.ir/blog/{{$post->id}}/{{ str_replace(' ','-',$post->title) }}"
    }]
  }
</script>

@stop