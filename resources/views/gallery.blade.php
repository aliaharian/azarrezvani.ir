@extends('layouts.master', ['page' => 'portfolio'])
@section('title', 'تدریس خصوصی دوم و سوم دوره ابتدایی | آذر رضوانی')
@section('description', 'وب سایت معلم دوم و سوم ابتدایی | آذر رضوانی')
@section('pagename', 'portfolio')
@section('headSection')
<link rel="alternate" href="https://azarrezvani.ir/gallery" hreflang="x-default">
<link rel="canonical" href="https://azarrezvani.ir/gallery">

@stop
@section('bodySection')


<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
  <h1> <span> گالری تصاویر</span> </h1>
  <span class="title-bg">گالری </span>
</section>

<section class="main-content text-center revealator-slideup revealator-once revealator-delay1">
  <div id="grid-gallery" class="container grid-gallery">
    <section class="grid-wrap">
      <ul class="row grid">
        @foreach($photos as $photo)
        <li>
          <figure>
            <img src="{{$photo->image}}" alt="{{$photo->title}}" />
            <div><span>{{$photo->title}}</span></div>
          </figure>
        </li>
        @endforeach

      </ul>
    </section>

    <section class="slideshow">
      <ul>


        <!-- <li>
          <figure>
            <figcaption>
              <h3>فیلم پروژه</h3>
              <div class="row open-sans-font">
                <div class="col-12 col-sm-6 mb-2">
                  <i class="fa fa-file-text-o pr-2"></i><span class="project-label">پروژه </span>:
                  <span class="ft-wt-600 uppercase">وبسایت</span>
                </div>
                <div class="col-12 col-sm-6 mb-2">
                  <i class="fa fa-user-o pr-2"></i><span class="project-label">مشتری</span>:
                  <span class="ft-wt-600 uppercase">راستچین </span>
                </div>
                <div class="col-12 col-sm-6 mb-2">
                  <i class="fa fa-code pr-2"></i><span class="project-label">زبان </span>:
                  <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                </div>
                <div class="col-12 col-sm-6 mb-2">
                  <i class="fa fa-external-link pr-2"></i><span class="project-label">بازنگری </span>:
                  <span class="ft-wt-600 uppercase"><a href="#" target="_blank">www.rtltheme.com</a></span>
                </div>
              </div>
            </figcaption>

            <div class="videocontainer">
              <style>
                .h_iframe-aparat_embed_frame {
                  position: relative;
                }

                .h_iframe-aparat_embed_frame .ratio {
                  display: block;
                  width: 100%;
                  height: auto;
                }

                .h_iframe-aparat_embed_frame iframe {
                  position: absolute;
                  top: 0;
                  left: 0;
                  width: 100%;
                  height: 100%;
                }
              </style>
              <div class="h_iframe-aparat_embed_frame">
                <span style="display: block; padding-top: 57%"></span><iframe class="youtube-video" src="https://www.aparat.com/video/video/embed/videohash/2Gnzw/vt/frame" title="ستین شاپ | روش های ارسال" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
              </div>
            </div>
          </figure>
        </li> -->

        <!-- <li>
          <figure>
            <figcaption>
              <h3>اسلایدر پروژه</h3>
              <div class="row open-sans-font">
                <div class="col-12 col-sm-6 mb-2">
                  <i class="fa fa-file-text-o pr-2"></i><span class="project-label">پروژه </span>:
                  <span class="ft-wt-600 uppercase">وبسایت</span>
                </div>
                <div class="col-12 col-sm-6 mb-2">
                  <i class="fa fa-user-o pr-2"></i><span class="project-label">مشتری</span>:
                  <span class="ft-wt-600 uppercase">راستچین </span>
                </div>
                <div class="col-12 col-sm-6 mb-2">
                  <i class="fa fa-code pr-2"></i><span class="project-label">زبان </span>:
                  <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                </div>
                <div class="col-12 col-sm-6 mb-2">
                  <i class="fa fa-external-link pr-2"></i><span class="project-label">بازنگری </span>:
                  <span class="ft-wt-600 uppercase"><a href="#" target="_blank">www.rtltheme.com</a></span>
                </div>
              </div>
            </figcaption>

            <div id="slider" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
              <ol class="carousel-indicators">
                <li data-target="#slider" data-slide-to="0" class="active"></li>
                <li data-target="#slider" data-slide-to="1"></li>
                <li data-target="#slider" data-slide-to="2"></li>
              </ol>

              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/projects/project-3.jpg" alt="slide 1" />
                </div>
                <div class="carousel-item">
                  <img src="img/projects/project-2.jpg" alt="slide 2" />
                </div>
                <div class="carousel-item">
                  <img src="img/projects/project-1.jpg" alt="slide 3" />
                </div>
              </div>
            </div>
          </figure>
        </li> -->

        @foreach($photos as $photo)

        <li>
          <figure>
            <figcaption>
              <h3>{{$photo->title}}</h3>
              <!-- <div class="row open-sans-font">
                <div class="col-12 col-sm-6 mb-2">
                  <i class="fa fa-file-text-o pr-2"></i><span class="project-label">پروژه </span>:
                  <span class="ft-wt-600 uppercase">وبسایت</span>
                </div>
                <div class="col-12 col-sm-6 mb-2">
                  <i class="fa fa-user-o pr-2"></i><span class="project-label">مشتری</span>:
                  <span class="ft-wt-600 uppercase">راستچین </span>
                </div>
                <div class="col-12 col-sm-6 mb-2">
                  <i class="fa fa-code pr-2"></i><span class="project-label">زبان </span>:
                  <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                </div>
                <div class="col-12 col-sm-6 mb-2">
                  <i class="fa fa-external-link pr-2"></i><span class="project-label">بازنگری </span>:
                  <span class="ft-wt-600 uppercase"><a href="#" target="_blank">www.rtltheme.com</a></span>
                </div>
              </div> -->
            </figcaption>

            @if($photo->video)
            {!! $photo->video !!}
            @else
            <img src="{{$photo->image}}" alt="{{$photo->title}}" />

            @endif
          </figure>
        </li>
        @endforeach


      </ul>

      <nav>
        <span class="icon nav-prev"><img src="img/projects/navigation/right-arrow.png" alt="previous" /></span>
        <span class="icon nav-next"><img src="img/projects/navigation/left-arrow.png" alt="next" /></span>
        <span class="nav-close"><img src="img/projects/navigation/close-button.png" alt="close" />
        </span>
      </nav>
    </section>
  </div>
</section>

@stop
@section('scriptsSection')
<script src="/js/custom.js"></script>

<script type="application/ld+json">
  {
    "@context": "https://schema.org/",
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "name": "تدریس خصوصی دوم و سوم دوره ابتدایی | آذر رضوانی",
      "item": "https://azarrezvani.ir"
    }, {
      "@type": "ListItem",
      "position": 2,
      "name": "گالری",
      "item": "https://azarrezvani.ir/gallery"
    }]
  }
</script>

<script>
  // $(document).ready(function() {
  $('.nav-close').click(function() {
    $('iframe').attr('src', $('iframe').attr('src'));
    $('.romeo-player-custom-control').each(function() {
      $(this).get(0).pause();
      
    });
  });

  // });
</script>
@stop