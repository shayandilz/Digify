@extends('layout.main')

@section('content')

    <div class="pt-nav container">
        <section class="row py-5 text-center justify-content-center gap-4">
            <div class="col-10">
                <h1 class="text-dark">
                    تعرفه‌های دیجی‌فای
                </h1>
                <p class="text-dark fs-4">
                    با دیجی‌فای، به دنیایی از خدمات متنوع و کاربردی وصل می‌شوید که همیشه به‌روز می‌شود و نیازهای
                    کسب‌وکار شما را در طی زمان برطرف می‌کند. پکیج‌های ما به گونه‌ای طراحی شده‌اند که شما دقیقا متناسب با
                    نیاز خود هزینه می‌کنید تا با کمترین قیمت به بیشترین امکانات دسترسی داشته باشید.
                </p>
                <div class="pt-5 swiper swiper4 swiper-custom overflow-visible">
                    <div class="swiper-pagination w-auto gap-2 p-2 d-inline-flex position-relative float-end"></div>
                    <ul class="swiper-wrapper m-0 p-0 list-unstyled">
                        @for($i=1;$i<4;$i++)
                            <li class="swiper-slide position-relative bg-white rounded-1" data-name="سه ماهه">
                                <div
                                    class="w-auto bg-white rounded-1 border position-absolute top-0 ms-5 translate-middle-y">
                                    <div class="d-flex p-2 align-items-center">
                                        @include('partials.SVG.glass')
                                        <div class="d-flex flex-column">
                                            <span class="fw-bold pb-2">دیجی‌فای لایت سه ماهه</span>
                                            <span class="fs-6 fw-normal text-semi-light text-start">
                                                مناسب تمام کسب‌وکارها
                                            </span>
                                        </div>

                                    </div>
                                </div>
                                <div class="overflow-hidden">
                                    <div class="pt-5 px-4 text-center row align-items-center position-relative">

                                        <div class="col-8 pt-2 pb-4">
                                            <ul class="text-start">
                                                <li>فروشگاه اینترنتی</li>
                                                <li>فروشگاه اینترنتی</li>
                                                <li>فروشگاه اینترنتی</li>
                                                <li>فروشگاه اینترنتی</li>
                                                <li>فروشگاه اینترنتی</li>
                                                <li>فروشگاه اینترنتی</li>
                                                <li>فروشگاه اینترنتی</li>
                                                <li>فروشگاه اینترنتی</li>
                                                <li>فروشگاه اینترنتی</li>
                                            </ul>
                                        </div>
                                        <div class="col-4 pt-2 px-5 pb-4 d-flex flex-column">
                                            <h4 class="fs-3 text-end">
                                                ۶۹۵،۰۰۰
                                            </h4>
                                            <span class="text-semi-light text-end pb-4">
                                            تومان
                                        </span>
                                            <a class="btn link-dark d-flex align-items-center justify-content-center">
                                                شروع یک ماه استفاده رایگان!
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endfor
                    </ul>

                </div>
                <div class="d-inline-flex justify-content-start w-100 gap-4 pt-4">
                        <span class="fs-6 text-semi-light">
                            در انتخاب پکیج مشکلی دارید؟
                        </span>
                    <span class="fs-6 text-semi-light">
                            در انتخاب پکیج مشکلی دارید؟
                        </span>
                </div>
            </div>
        </section>
        <section class="row py-5">
            <h3 class="text-start fw-bold pb-4">
                چرا دیجی‌فای را انتخاب کنیم؟
            </h3>
            @for($i=1;$i<5;$i++)
                <div class="col-3">
                    <div class="menu-svg flex-column gap-3 d-flex justify-content-start">
                        <div class="position-relative">
                            @include('partials.SVG.icon-menu')
                        </div>
                        <h6 class="text-decoration-underline py-2 fw-bold">
                            سی روز استفاده رایگان
                        </h6>
                        <p class="fw-normal fs-6">
                            با ثبت‌نام در دیجی‌فای می‌توانید ۳۰ روز رایگان از تمام خدمات استفاده کنید و فروشگاه خود را
                            بسازید.
                        </p>
                    </div>
                </div>
            @endfor
        </section>

    </div>
    @include('partials.action-banner')

@endsection
