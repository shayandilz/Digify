<section class="container py-5">
    <div class="row">
        <h3 class="text-center pb-5 text-dark fs-2 fw-bolder">
            جدیدترین پست‌های بلاگ دیجی‌فای
        </h3>
        @for($i=1;$i<3;$i++)
            <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                @include('partials.blog-post')
            </div>
        @endfor
    </div>
</section>
