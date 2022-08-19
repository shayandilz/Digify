<section class="py-5 container">
    <div class="row g-3">
        <h3 class="text-dark pb-4 fs-2 fw-bolder lh-base">
            خدمات یکپارچه دیجی‌فای؛پاسخگوی تمام نیازهای شما
        </h3>
        @for($i=1;$i<5;$i++)
            <div class="col-lg col-6 d-flex justify-content-start flex-column">
                <a href="#"
                   class="pb-4 d-flex flex-column align-items-start gap-3 col text-start menu-svg ">
                    <div class="position-relative max-width-28">
                        @include('partials.SVG.icon-menu')
                    </div>
                    <span class="text-dark fw-bolder fs-5 pb-2">پرداخت امن و اختصاصی</span>
                </a>
                <p>
                    با ثبت‌نام در دیجی‌فای می‌توانید ۳۰ روز رایگان از تمام خدمات استفاده کنید و فروشگاه خود را بسازید.
                </p>
            </div>
        @endfor
    </div>
</section>
