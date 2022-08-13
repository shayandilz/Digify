@extends('layout.main')

@section('content')

    <div class="bg-navblack pt-nav">
        <div class="container">
            <ul class="nav text-white px-0 py-3 align-items-center gap-4">
                <li class="nav-item">
                    <a class="nav-link active text-white fs-5 p-0" aria-current="page" href="#">همه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-normal fs-5 p-0" href="#">راه‌اندازی و مدیریت کسب‌وکار</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-normal fs-5 p-0" href="#">مدیریت ارتباط با مشتریان</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-normal fs-5 p-0" href="#">بازاریابی شبکه‌های اجتماعی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-normal fs-5 p-0" href="#">دیحیتال مارکتینگ</a>
                </li>
            </ul>
        </div>
    </div>
    <section class="py-5 container text-center">
        <h1 class="pb-2">
            بلاگ دیجی‌فای
        </h1>
        <p class="pb-5">
            جدیدترین و بهترین مقالات دیجیتال مارکتینگ و دنیای کسب‌وکارها را اینجا بخوانید
        </p>
        <div class="row align-items-center justify-content-center">
            <div class="col-10">
                <div class="swiper swiper3 swiper-custom px-3 overflow-visible">
                    <ul class="swiper-wrapper m-0 p-0 list-unstyled">
                        @for($i=1;$i<4;$i++)
                            <li class="swiper-slide position-relative">
                                <div class="bg-white card-shadow rounded-2 text-center row align-items-center">
                                    <div class="col-8 pe-0">
                                        <img src="{{asset('images/blog-banner.jpg')}}"
                                             class="img-fluid"
                                             alt="...">
                                    </div>
                                    <div class="col-4 text-start">
                                        <span class="fs-5 text-semi-light text-decoration-underline">بازاریابی شبکه‌های اجتماعی</span>
                                        <h5 class="card-title pt-5">چگونه یک کپشن خوب در
                                            اینستاگرام بنویسیم؟</h5>
                                        <p class="fs-5 pt-4">آنچه در این مقاله می‌خوانید:
                                            اینگیجمنت بالا، کلید کپشن خوب در اینستاگرام
                                            تعیین هدف پست اینستاگرام
                                            چگونه یک کپشن خوب در اینستاگرام بنویسیم؟
                                            چک‌لیست نهایی کپشن خوب در اینستاگرام
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @endfor

                    </ul>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 container">
        <h5 class="text-end">
            جدیدترین پست‌های بلاگ دیجی‌فای
        </h5>
        <div class="row">
            @for($i=1;$i<6;$i++)
                <div class="col-6 p-4">
                    @include('partials.blog-post')
                </div>
            @endfor
        </div>
    </section>
    @include('partials.action-banner')
@endsection
