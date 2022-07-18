@extends('layouts.master', ['page' => 'contact'])
@section('title', 'تدریس خصوصی دوم و سوم دوره ابتدایی | آذر رضوانی')
@section('description', 'وب سایت معلم دوم و سوم ابتدایی | آذر رضوانی')
@section('pagename', 'contact')
@section('headSection')

<link rel="alternate" href="https://azarrezvani.ir/contact" hreflang="x-default">
    <link rel="canonical" href="https://azarrezvani.ir/contact">
@stop
@section('bodySection')



<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>در ارتباط <span>با من </span></h1>
    <span class="title-bg">تماس با من </span>
</section>

<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <!-- <h3 class="text-uppercase custom-title mb-0 ft-wt-600 pb-3">خجالت نکشید!</h3> -->
                <p class="open-sans-font mb-3">
                    پاسخگوی تماس های شما هستیم و با اشتیاق، ازنظرات و دیدگاه های شما
                    استقبال می کنیم.
                </p>
                <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fa fa-envelope-open position-absolute"></i>
                    <!-- <span class="d-block">ایمیل من</span><a href="https://tunis.setinco.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="394a4d5c4f5c7954585055175a5654">[email&#160;protected]</a> -->
                    <span class="d-block">ایمیل من</span><a href="#" class="about-link">azar.rezvani50@gmail.com</a>
                </p>
                <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fa fa-phone-square position-absolute"></i>
                    <span class="d-block">تلفن من</span>۰۹۱۲-۳۸۸۸۲۴۱
                </p>
                <ul class="social list-unstyled pt-1 mb-5">
                    <li class="facebook">
                        <a title="Facebook" href="#" target="_blank"><i class="fa fa-telegram"></i></a>
                    </li>
                    <li class="twitter">
                        <a title="Twitter" href="https://api.whatsapp.com/send?phone=989123888241&text=" target="_blank"><i class="fa fa-whatsapp"></i></a>
                    </li>
                    <li class="youtube">
                        <a title="Youtube" href="https://www.google.com/maps/place/%D8%AD%D9%88%D9%84%D9%87+%D8%AA%D8%A8%D9%84%DB%8C%D8%BA%D8%A7%D8%AA%DB%8C+%D8%A7%D8%B1%D8%B3%E2%80%AD/@35.7029501,51.414833,21z/data=!4m5!3m4!1s0x0:0x47c052c46203cb7f!8m2!3d35.7028957!4d51.4149546" target="_blank"><i class="fa fa-map-marker"></i></a>
                    </li>
                    <li class="dribbble">
                        <a title="Dribbble" href="https://instagram.com/azarrezvani.ir" target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-12 col-lg-8">
                <!-- <form class="contactform" method="get" action="https://api.whatsapp.com/send?phone=989123888241&text="> -->
                <div class="contactform">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <input type="text" name="name" placeholder="نام شما " />
                        </div>
                        <div class="col-12 col-md-4">
                            <input type="email" name="email" placeholder="ایمیل شما " />
                        </div>
                        <div class="col-12 col-md-4">
                            <input type="text" name="subject" placeholder="موضوع شما " />
                        </div>
                        <div class="col-12">
                            <textarea name="message" placeholder="پیغام شما"></textarea>
                            <button onclick="handleSend()" type="submit" class="button">
                                <span class="button-text">ارسال پیام</span>
                                <span class="button-icon fa fa-whatsapp"></span>
                            </button>
                        </div>
                        <div class="col-12 form-message">
                            <span class="output_message text-center font-weight-600 text-uppercase"></span>
                        </div>
                    </div>
                </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
</section>

@stop
@section('scriptsSection')
<script>
    function handleSend() {
        var name = $('input[name="name"]').val();
        var email = $('input[name="email"]').val();
        var subject = $('input[name="subject"]').val();
        var message = $('textarea[name="message"]').val();
        var text = `
        سلام. من از سایت آذر رضوانی پیام ارسال میکنم  %0a نام: ${name}  %0a ایمیل: ${email}  %0a موضوع: ${subject}  %0a پیام: ${message}`;

        window.open(`https://api.whatsapp.com/send?phone=989123888241&text=${text}`, '_blank').focus();

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
      "name": "تماس با ما",
      "item": "https://azarrezvani.ir/contact"
    }]
  }
</script>

@stop