<section class="how-to-buy-desktop desktop2-view">
    <div class="howToBuy">
        <div class="container">
            <div class="row">
                {{-- <div class="bannerImage">
                    <img src="{{asset('assets/images/staticPagesAssets/images/how-to-buy-bannernd.webp')}}" alt="Banner" class="img-fluid" loading="lazy">
                </div> --}}
                <div class="col-12">
                    <div class="certified-owner-card">
                      <div class="text-certified">
                        <h2 class="text">Become A Certified Car Owner Now!</h2>
                        <p class="para d-lg-block d-md-block d-sm-none d-none">Simplify your car-buying journey by following our step-by-step guide to own your dream ride. Explore the steps below and start your journey today.</p>
                      </div>
                      <img src="https://satjapan.com/assets/images/new-bannars/certified-car-owner.webp" width="414" height="235" loading="lazy" class="img-fluid certified-img object-fit-contain" alt="sat bannar">
                    </div>
                  </div>

                <div class="grd-ts my-5">
                    <div class="centeralized">
                        <div class="htb-heading">
                            <h1 class="title">How to Buy a Car with SAT</h1>
                            <h2 class="para">Go through this step-by-step guide to purchase your dream car</h2>
                        </div>
                    </div>
                    <div class="sat-video-frame">
                        {{-- <iframe class="brd-8x" width="502" height="272" src="https://www.youtube.com/embed/38vGOQlTIE8?si=CftmKfprm9qc7oRp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe> --}}
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/T_RWR68iLDg?si=8Wmf8rHc0rmWdmJO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                


                <div class="grd-4-eqs">
                    <div class="eqs-items">
                        <div class="text-center">
                            <img src="{{asset('assets/images/staticPagesAssets/icon/search-buy.webp')}}" alt="Search" class="img-fluid" loading="lazy" height="50" width="50">
                        </div>
                        <h3>Search Vehicle</h3>
                        <p>Find your dream car by browsing our comprehensive</p>
                        <a href="javascript:;" class="sm-none">Search Engine.</a>
                    </div>
                    <div class="eqs-items">
                        <div class="text-center">
                            <img src="{{asset('assets/images/staticPagesAssets/icon/reserve-buy.webp')}}" alt="Reserve" class="img-fluid" loading="lazy" height="50" width="50">
                        </div>
                        <h3>Buy Now or Reserve</h3>
                        <p>After finalizing, buy now or reserve your desired car to secure your ride.</p>
                    </div>
                    <div class="eqs-items">
                        <div class="text-center">
                            <img src="{{asset('assets/images/staticPagesAssets/icon/track-buy.webp')}}" alt="Buy" class="img-fluid" loading="lazy" height="50" width="50">
                        </div>
                        <h3>Track Your Order</h3>
                        <p>Track your order to get real-time updates by visiting our</p>
                        <a href="javascript:;" class="sm-none">Tracking Page.</a>
                    </div>
                    <div class="eqs-items">
                        <div class="text-center">
                            <img src="{{asset('assets/images/staticPagesAssets/icon/delivery-track.webp')}}" alt="Truck" class="img-fluid" loading="lazy" height="50" width="50">
                        </div>
                        <h3>Receive Delivery</h3>
                        <p>Receive your car at the decided destination port and enjoy your ride.</p>
                    </div>
                </div>


                @component('used_car.partial.faqs')
                @endcomponent

            </div>
        </div>
    </div>

</section>


{{-- =================== Mobile view =================--}}
<section class="how-to-buy-mobile mobile2-view">
<div class="howToBuyMobile">
    <div class="container">
        <div class="row">
            {{-- <div class="bannerImage">
                <img src="{{asset('assets/images/staticPagesAssets/images/how-to-buy-bannernd.webp')}}" alt="Banner" class="img-fluid" loading="lazy">
            </div> --}}

            <div class="col-12">
                <div class="certified-owner-card mb-3">
                  <div class="text-certified">
                    <h2 class="text">Become A Certified Car Owner Now!</h2>
                    <p class="para d-lg-block d-md-block d-sm-none d-none">Simplify your car-buying journey by following our step-by-step guide to own your dream ride. Explore the steps below and start your journey today.</p>
                  </div>
                  <img src="https://satjapan.com/assets/images/new-bannars/certified-car-owner.webp" width="414" height="235" loading="lazy" class="img-fluid certified-img object-fit-contain" alt="sat bannar">
                </div>
              </div>

            <div class="howToBuyCarInner py-3">
                <p class="m-0 title">How to Buy a Car with SAT</p>
                <p class="m-0 para pb-3">Go through this step-by-step guide to purchase your dream car</p>
                {{-- <iframe class="brd-8x" width="100%" height="200" src="https://www.youtube.com/embed/38vGOQlTIE8?si=CftmKfprm9qc7oRp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe> --}}
                <iframe width="560" height="315" src="https://www.youtube.com/embed/T_RWR68iLDg?si=8Wmf8rHc0rmWdmJO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <div class="container py-5">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    <div class="col d-flex">
                        <div class="card text-center p-4 flex-fill d-flex flex-column justify-content-center">
                            <div class="text-center">
                                <img src="{{asset('assets/images/staticPagesAssets/icon/search-buy.webp')}}" alt="Search" class="img-fluid" loading="lazy" height="50" width="50">
                            </div>
                            <h3 class="mt-3">Search Vehicle</h3>
                            <p>Find your dream car by browsing our comprehensive</p>
                            <a href="javascript:;" class="sm-none">Search Engine.</a>
                        </div>
                    </div>
            
                    <div class="col d-flex">
                        <div class="card text-center p-4 flex-fill d-flex flex-column justify-content-center">
                           <div class="text-center">
                            <img src="{{asset('assets/images/staticPagesAssets/icon/reserve-buy.webp')}}" alt="Reserve" class="img-fluid" loading="lazy" height="50" width="50">
                           </div>
                            <h3 class="mt-3">Buy Now or Reserve</h3>
                            <p>After finalizing, buy now or reserve your desired car to secure your ride.</p>
                        </div>
                    </div>
            
                    <div class="col d-flex">
                        <div class="card text-center p-4 flex-fill d-flex flex-column justify-content-center">
                            <div class="text-center">
                                <img src="{{asset('assets/images/staticPagesAssets/icon/track-buy.webp')}}" alt="Track" class="img-fluid" loading="lazy" height="50" width="50">
                            </div>
                            <h3 class="mt-3">Track Your Order</h3>
                            <p>Track your order to get real-time updates by visiting our</p>
                            <a href="javascript:;" class="sm-none">Tracking Page.</a>
                        </div>
                    </div>
            
                    <div class="col d-flex">
                        <div class="card text-center p-4 flex-fill d-flex flex-column justify-content-center">
                            <div class="text-center">
                                <img src="{{asset('assets/images/staticPagesAssets/icon/delivery-track.webp')}}" alt="Truck" class="img-fluid" loading="lazy" height="50" width="50">
                            </div>
                            <h3 class="mt-3">Receive Delivery</h3>
                            <p>Receive your car at the decided destination port and enjoy your ride.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            @component('used_car.partial.new_car_faqs')
            @endcomponent
                 
            </div>

        </div>
    </div>
</div>
</section>