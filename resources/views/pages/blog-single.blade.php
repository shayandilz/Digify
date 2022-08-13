@extends('layout.main')

@section('content')

    <div class="pt-nav container">
        <div class="row align-items-center">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb my-0 py-4 ">
                        <li class="breadcrumb-item">
                            <a class="text-decoration-none text-semi-light" href="http://balochy.lavan.co">دیجی‌فای</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="text-decoration-none text-semi-light"
                               href="http://balochy.lavan.co/product-category/necklace/">بلاگ</a>
                        </li>
                        <li class="breadcrumb-item active text-semi-light">بازاریابی شبکه‌های اجتماعی</li>
                    </ul>
                </nav>
            </div>
        </div>
        <section class="row py-5">
            <div class="col-6">
                <h1 class="fs-3 fw-bold text-dark">
                    چگونه یک کپشن خوب در اینستاگرام بنویسیم؟
                </h1>
                <div class="d-inline-flex">
                    <span class="text-semi-light">
                        زمان خواندن: پنج دقیقه
                    </span>
                    <span class="text-semi-light ms-5">
                        تاریخ انتشار: ۱۴۰۱/۰۳/۰۲
                    </span>
                </div>
                <ul class="list-unstyled my-5">
                    <li class="text-semi-light text-decoration-none">
                        آنچه در این مقاله می‌خوانید:
                    </li>
                    <li>
                        <a class="active-list-blog text-decoration-none" href="#">
                            اینگیجمنت بالا، کلید کپشن خوب در اینستاگرام
                        </a>
                    </li>
                    <li>
                        <a class="text-semi-light text-decoration-none" href="#">
                            تعیین هدف پست اینستاگرام
                        </a>
                    </li>
                    <li>
                        <a class="text-semi-light text-decoration-none" href="#">
                            اینستاگرام چگونه یک کپشن خوب در اینستاگرام بنویسیم؟
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <img src="{{asset('images/blog-banner.jpg')}}"
                     class="img-fluid"
                     alt="...">
            </div>
        </section>
        <section class="row py-5">
            <article class="col-10 text-dark d-flex gap-3 flex-column">
                <p>
                    کپشن خوب در اینستاگرام چیست؟ هر کس ممکن است جواب خاصی به این سؤال بدهد. یکی ممکن است بگوید کپشنی خوب
                    است که واضح و شفاف منظور را برساند و دیگری ممکن است بگوید کپشنی که احساسات مخاطب را برانگیزد. واقعیت
                    این است که هدف شما از پیجتان معیارهای خوب یا بد بودن کپشن اینستاگرامتان را تعیین می‌کند. بسته به
                    اینکه شما بلاگر باشید یا یک پیج فروشگاهی کوچک و یا یک بیزینس بزرگ،‌ باید معیارهای خاصی را در نوشتن
                    کپشن رعایت کنید.

                    ما سعی می‌کنیم اینجا معیارها و ویژگی‌های یک کپشن خوب برای کسب و کارهای خرد و مستقل که کالا یا خدمات
                    خاصی به مشتری ارائه می‌دهند را بگوییم.
                </p>
                <img src="{{asset('images/blog-banner.jpg')}}"
                     class="img-fluid"
                     alt="...">
                <h2>
                    اینگیجمنت بالا، کلید کپشن خوب در اینستاگرام
                </h2>

                <p>
                    کپشن خوب در اینستاگرام چیست؟ هر کس ممکن است جواب خاصی به این سؤال بدهد. یکی ممکن است بگوید کپشنی خوب
                    است که واضح و شفاف منظور را برساند و دیگری ممکن است بگوید کپشنی که احساسات مخاطب را برانگیزد. واقعیت
                    این است که هدف شما از پیجتان معیارهای خوب یا بد بودن کپشن اینستاگرامتان را تعیین می‌کند. بسته به
                    اینکه شما بلاگر باشید یا یک پیج فروشگاهی کوچک و یا یک بیزینس بزرگ،‌ باید معیارهای خاصی را در نوشتن
                    کپشن رعایت کنید.

                    ما سعی می‌کنیم اینجا معیارها و ویژگی‌های یک کپشن خوب برای کسب و کارهای خرد و مستقل که کالا یا خدمات
                    خاصی به مشتری ارائه می‌دهند را بگوییم.
                </p>
            </article>
            <aside class="col-2">
                <div class="bg-purple d-flex flex-column gap-4 px-3 py-5 text-center">
                    <span class="text-white">
                        یک ماه
استفاده رایگان!
                    </span>
                    <p class="text-white">
                        با ثبت‌نام در دیجی‌فای یک ماه رایگان از تمام ابزارها استفاده کنید.
                    </p>
                    <a class="btn link-dark d-flex align-items-center justify-content-center">
                        ثبت‌نام در دیجی‌فای
                    </a>
                </div>
            </aside>
            <section class="col-10 py-5">
                <h6 class="pb-3 text-center fs-3 fw-bold">جدیدترین پست‌های بلاگ دیجی‌فای</h6>
                <div class="row">
                    <div class="col-6">
                        @include('partials.blog-post')
                    </div>
                    <div class="col-6">
                        @include('partials.blog-post')
                    </div>
                </div>
            </section>
        </section>

    </div>

@endsection
