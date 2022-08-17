<section class="py-5 container">
    <div class="row">
        <h3 class="text-dark pb-4">
            خدمات یکپارچه دیجی‌فای؛پاسخگوی تمام نیازهای شما
        </h3>
        @for($i=1;$i<5;$i++)
            <div class="col-lg col-6 d-flex justify-content-start flex-column">
                <a href="#"
                   class="pb-4 d-flex flex-column align-items-start gap-3 col text-start menu-svg ">
                    <div class="position-relative max-width-28">
                        @include('partials.SVG.icon-menu')
                    </div>
                    <span class="text-dark pb-2">پرداخت امن و اختصاصی</span>
                </a>
                <p class="fs-5 ">
                    با ثبت‌نام در دیجی‌فای می‌توانید ۳۰ روز رایگان از تمام خدمات استفاده کنید و فروشگاه خود را بسازید.
                </p>
            </div>
        @endfor
    </div>
</section>
