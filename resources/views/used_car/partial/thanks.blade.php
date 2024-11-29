<section class="thankyou_desktop desktop2-view">
    <div class="thankyouDesktop">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="inner">
                        <p class="m-0 heading pt-4">Thank you for placing an order with SAT, <span>Mr Jeckson</span></p>
                        <p class="m-0 tag py-2">Please click on the 'Track Your Order' button to see the status of your order.</p>
                    
                        <div class="thanksImage text-center py-4">
                            <img src="{{asset('assets/images/thanks-page.webp')}}" alt="Thanks" class="img-fluid" loading="lazy">
                        </div>

                        <div class="orderPrice d-flex justify-content-between align-items-center">
                            <div class="order">
                               <div class="order1 d-flex align-items-center">
                                <p class="m-0 top">Order ID:</p>	
                                <p class="m-0 bottom">215464</p>	
                               </div>
                               <div class="order1 d-flex align-items-center py-2">
                                <p class="m-0 top">Status:</p>	
                                <p class="m-0 paid">Paid</p>	
                               </div>
                            </div>

                            <button class="btn btn-track-order">Track Your Order</button>
                        </div>

                        <div class="shippingAddress border-top border-bottom my-2 py-3">
                            <p class="m-0 title">Shipping Address</p>
                            <p class="m-0 para">House: 12/B Street 4, Gullbahar Colony, Near China Scheme Lahore</p>
                        </div>
                    
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="orderSummary mt-4">
                        <p class="m-0 title">Order Summary</p>

                        <div class="orderDetails p-3">
                            <div class="top d-flex gap-3">
                                <p class="m-0 nys">New Year Sale</p>
                                <p class="m-0 pc">Premium Cars</p>
                            </div>

                            <p class="m-0 heading">2017 Toyota C-HR</p>

                            <div class="details d-flex">
                                <div class="detail d-flex align-items-center">
                                    <div class="inner">
                                        <p class="m-0 top">Year</p>
                                        <p class="m-0 bottom">2010/6</p>
                                    </div>
                                    <span>&dot;</span>
                                </div>
                                <div class="detail d-flex align-items-center ms-4">
                                    <div class="inner">
                                        <p class="m-0 top">Engine</p>
                                        <p class="m-0 bottom">660 cc</p>
                                    </div>
                                    <span>&dot;</span>
                                </div>
                                <div class="detail d-flex align-items-center ms-4">
                                    <div class="inner">
                                        <p class="m-0 top">Mileage</p>
                                        <p class="m-0 bottom">12,380 km</p>
                                    </div>
                                    <span>&dot;</span>
                                </div>
                                <div class="detail d-flex align-items-center ms-4">
                                    <div class="inner">
                                        <p class="m-0 top">Transmission</p>
                                        <p class="m-0 bottom">MT</p>
                                    </div>
                                </div>

                            </div>

                            <div class="thankyouPrice">
                                <div class="inner d-flex justify-content-between pt-4">
                                    <p class="m-0 top">Total Price (CIF to Mombasa):</p>
                                    <p class="m-0 bottom">$1234567891</p>
                                </div>
                                <div class="inner d-flex gap-5 py-2">
                                    <p class="m-0 top">Delivery to :</p>
                                    <p class="m-0 km">Kenya /Mombasa</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                @component('used_car.partial.similar-car')
                @endcomponent
            </div>
        </div>
    </div>
</section>

{{-- ================ Mobile-View ================ --}}

<section class="thankyou_mobile mobile2-view">
    <div class="thankYouMobile">
        <div class="container">
            <div class="row">
                <div class="inner">
                    <p class="m-0 heading">Thank you for placing an order with SAT, <span>Mr Jeckson</span></p>
                    <p class="m-0 tag">Please click on the 'Track Your Order' button to see the status of your order.</p>
                
                    <div class="thanksImage text-center py-4">
                        <img src="{{asset('assets/images/thanks-page.webp')}}" alt="Thanks" class="img-fluid" loading="lazy">
                    </div>

                    <div class="orderPrice d-flex justify-content-between align-items-center">
                        <div class="order">
                           <div class="order1 d-flex align-items-center">
                            <p class="m-0 top">Order ID:</p>	
                            <p class="m-0 bottom">215464</p>	
                           </div>
                           <div class="order1 d-flex align-items-center">
                            <p class="m-0 top">Status:</p>	
                            <p class="m-0 paid">Paid</p>	
                           </div>
                        </div>

                        <button class="btn btn-track-order">Track Your Order</button>
                    </div>

                    <div class="shippingAddress border-top border-bottom my-2 py-3">
                        <p class="m-0 title">Shipping Address</p>
                        <p class="m-0 para">House: 12/B Street 4, Gullbahar Colony, Near China Scheme Lahore</p>
                    </div>
                
                    <div class="orderSummary">
                        <p class="m-0 title">Order Summary</p>

                        <div class="orderDetails my-2">
                            <div class="top d-flex gap-3">
                                <p class="m-0 nys">New Year Sale</p>
                                <p class="m-0 pc">Premium Cars</p>
                            </div>

                            <p class="m-0 heading pt-3">2017 Toyota C-HR</p>

                            <div class="details d-flex">
                                <div class="detail d-flex align-items-center">
                                    <div class="inner">
                                        <p class="m-0 top">Year</p>
                                        <p class="m-0 bottom">2010/6</p>
                                    </div>
                                    <span>&dot;</span>
                                </div>
                                <div class="detail d-flex align-items-center ms-4">
                                    <div class="inner">
                                        <p class="m-0 top">Engine</p>
                                        <p class="m-0 bottom">660 cc</p>
                                    </div>
                                    <span>&dot;</span>
                                </div>
                                <div class="detail d-flex align-items-center ms-4">
                                    <div class="inner">
                                        <p class="m-0 top">Mileage</p>
                                        <p class="m-0 bottom">12,380 km</p>
                                    </div>
                                    <span>&dot;</span>
                                </div>
                                <div class="detail d-flex align-items-center ms-4">
                                    <div class="inner">
                                        <p class="m-0 top">Transmission</p>
                                        <p class="m-0 bottom">MT</p>
                                    </div>
                                </div>

                            </div>

                            <div class="thankyouPrice">
                                <div class="inner d-flex justify-content-between pt-3">
                                    <p class="m-0 top">Total Price (CIF to Mombasa):</p>
                                    <p class="m-0 bottom">$1234567891</p>
                                </div>
                                <div class="inner d-flex gap-5 py-2">
                                    <p class="m-0 top">Delivery to :</p>
                                    <p class="m-0 km">Kenya /Mombasa</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

