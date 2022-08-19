@extends('layout.main')

@section('content')

    @include('partials.banner-top')

    @include('partials.service-icon')

    <section class="py-5 container px-4 px-lg-0">
        <div class="row">
            <h3 class="text-center pb-5 text-dark fs-2 fw-bolder lh-base">
                فروشگاه‌ساز دیجی‌فای چگونه کار می‌کند؟
            </h3>
            <div class="col-lg-6 col-12 d-flex flex-column justify-content-evenly">
                @for($i=1;$i<4;$i++)
                    <div class="pb-3">
                        <h5 class="text-dark fw-bolder fs-4 lh-base">
                            قدم اول: فروشگاه اینترنتی خودتان را می‌سازید
                        </h5>
                        <p class="fs-5">
                            به سادگی و بدون نیاز به دانش فنی، فروشگاه خود را ساخته و محصولاتتان را به نمایش میگذارید.
                        </p>
                    </div>
                @endfor
            </div>
            <div class="col-lg-6 col-12">
                <div class="card-shadow w-100 h-100 rounded-2 d-flex">
                    <img width="250px" height="550px" src="#" class="card-img-top border border-semi-light rounded-2"
                         alt="...">
                </div>
            </div>
        </div>
    </section>
    @include('partials.box-purple')
    @include('partials.latest-post')
    @include('partials.action-banner')

@endsection
