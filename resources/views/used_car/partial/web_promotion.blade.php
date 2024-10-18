{{-- <section class="promotion-web-1 my-0 my-md-5">
    <div class="container">
        <div class="row">
        <img src="{{asset('assets/images/promotion-banner.webp')}}" 
            alt="Promotion Banner" 
            class="img-fluid" 
            loading="lazy" >
        </div>
    </div>
</section> --}}

<section class="promotion-web-1 my-0 my-md-5">
    <div class="container">
        <div class="row">
            <!-- Add width and height attributes to avoid layout shifts -->
            <img src="{{ asset('assets/images/promotion-banner.webp') }}" 
                alt="Promotion Banner displaying special offers and discounts" 
                class="img-fluid" 
                loading="lazy" 
                width="1200" 
                height="400"
                srcset="{{ asset('assets/images/promotion-banner.webp') }} 1200w, {{ asset('assets/images/promotion-banner-small.webp') }} 600w" 
                sizes="(max-width: 768px) 600px, 1200px"
                >
        </div>
    </div>
</section>
