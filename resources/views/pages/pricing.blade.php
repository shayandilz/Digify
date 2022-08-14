@extends('layout.main')

@section('content')

    <section class="pt-nav container">
        <div class="row py-5 text-center justify-content-center gap-4">
            <div class="col-10">
                <h1 class="text-dark">
                    تعرفه‌های دیجی‌فای
                </h1>
                <p class="text-dark fs-4">
                    با دیجی‌فای، به دنیایی از خدمات متنوع و کاربردی وصل می‌شوید که همیشه به‌روز می‌شود و نیازهای کسب‌وکار شما را در طی زمان برطرف می‌کند. پکیج‌های ما به گونه‌ای طراحی شده‌اند که شما دقیقا متناسب با نیاز خود هزینه می‌کنید تا با کمترین قیمت به بیشترین امکانات دسترسی داشته باشید.
                </p>
                <div class="pt-5 swiper swiper4 swiper-custom overflow-visible">
                    <div class="swiper-pagination w-auto gap-2 p-2 d-inline-flex position-relative float-end"></div>
                    <div class="link-background"></div>
                    <ul class="swiper-wrapper m-0 p-0 list-unstyled">
                        @for($i=1;$i<4;$i++)
                            <li class="swiper-slide position-relative" data-name="سه ماهه">
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

                </div>

            </div>
        </div>
    </section>

@endsection
