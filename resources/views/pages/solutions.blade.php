@extends('layout.main')

@section('content')

    <section class="py-5 d-flex align-items-center bg-white vh-65">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <h1 class="text-dark fw-bold lh-base pb-3">
                        هر کسب‌وکاری که دارید، دیجی‌فای در خدمت شماست
                    </h1>
                    <p class="fs-5 mb-4">
                        فرقی ندارد کسب‌وکار اینستاگرامی دارید یا حضوری، خودتان همه کارها را می‌کنید یا تیم بزرگی دارید، با دیجی‌فای کسب‌وکار شما بزرگ‌تر می‌شود.
                    </p>
                    <div class="d-flex">
                        <a href="#" class="w-auto link-dark ms-3 border rounded-1 btn fs-5 d-flex gap-2 align-items-center">
                            ثبت‌نام در دیجی‌فای
                        </a>
                        <a href="#" class="w-auto link-white border rounded-1 btn fs-5 d-flex gap-2 align-items-center">
                            ثبت‌نام در دیجی‌فای
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card-shadow w-100 h-100 rounded-2 d-flex">
                        <img width="450px" height="350px" src="#" class="card-img-top border border-semi-light rounded-2"
                             alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.box-purple')
@endsection
