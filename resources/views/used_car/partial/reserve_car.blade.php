<section class="reserve_car_desktop desktop2-view">
<div class="reserveCar">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="left py-4">
                    <div class="top">
                        <p class="m-0 heading">User Information</p>
                    </div>
                    <div class="reserveForm">
                        <form action="javascript:;">
                            <div class="my-3">
                                <label for="name" class="form-label">Full Name <span class="reuqired">*</span></label>
                                <input type="text" class="form-control" id="name" placeholder="Full Name" >
                              </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email<span class="reuqired">*</span></label>
                                <input type="email" class="form-control" id="email" placeholder="Email" >
                              </div>
                              
                              <div class="mb-3">
                                <label class="form-label">Phone<span class="reuqired">*</span></label>
                                <input type="phone" class="form-control">
                              </div>

                              <div class="mb-3">
                                <p class="paymentMethodHeading">Payment method</p>
                              </div>

                              <div class="reservePaymentChecked">
                                <div>
                                    <input id="radio-1" class="radio-custom" name="radio-group" type="radio" checked>
                                    <label for="radio-1" class="radio-custom-label">
                                        <img src="{{asset('assets/images/icons/paypal-booking.webp')}}" alt="Paypal" class="img-fluid paypalReserveImg" loading="lazy">
                                        Pay with PayPal</label>
                                </div>
                              </div>
                            
                             <div class="reserveBtn text-end">
                                <button type="submit" class="btn btn-reserve">Reserve for $99</button>
                             </div>

                             <p class="reserveOrderText">By placing an order with SAT, you agree to our terms and conditions and cookie policy.</p>
                        </form>
                    </div>
                </div>
               </div>
               <div class="col-md-4">
                <div class="right pt-4">
                    <div class="top mb-3">
                        <p class="m-0 heading">Order Summary</p>
                    </div>
                    <div class="reserveSummary border rounded-3 px-2 py-2">
                        <div class="earn my-1">
                            <p class="m-0">Earn 100 points</p>
                        </div>
                        <div class="title">
                            <p class="m-0">2009 Honda Zest Spark W</p>
                        </div>
                        <div class="reserveDetails d-flex align-content-center">
                            <div class="detail d-flex align-items-center">
                               <div class="inner">
                                <p class="m-0 top">Year</p>
                                <p class="m-0 bottom">2009/03</p>
                               </div>
                               <span>&dot;</span>
                            </div>

                            <div class="detail d-flex align-items-center ms-3">
                                <div class="inner">
                                    <p class="m-0 top">Engine</p>
                                    <p class="m-0 bottom">660 cc</p>
                                </div>
                                <span>&dot;</span>
                             </div>

                             <div class="detail d-flex align-items-center ms-3">
                                <div class="inner">
                                    <p class="m-0 top">Mileage</p>
                                    <p class="m-0 bottom">157761 km</p>
                                </div>
                                <span>&dot;</span>
                             </div>

                             <div class="detail d-flex align-items-center ms-3">
                                <div class="inner">
                                    <p class="m-0 top">Transmission</p>
                                    <p class="m-0 bottom">AT</p>
                                </div>
                             </div>

                        </div>

                        <div class="reservePrice d-flex justify-content-between align-items-center border-bottom py-2 my-3">
                            <p class="m-0 priceTitle">Car Price (USD):	</p>
                            <p class="m-0 priceAmount">$875</p>
                        </div>
                    </div>

                </div>
               </div>
        </div>
    </div>
</div>
</section>


{{-- ======================== Mobile View ========================--}}
<section class="reserve_car_mobile mobile2-view">
<div class="reserveCarMobile">
    <div class="container">
        <div class="row">
            <div class="infoReserveMobile">
                <p class="m-0 heading">User Information</p>
                <form action="javascript:;">
                    <div class="my-3">
                        <label for="name" class="form-label">Full Name <span class="reuqired">*</span></label>
                        <input type="text" class="form-control" id="name" placeholder="Full Name" >
                      </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email<span class="reuqired">*</span></label>
                        <input type="email" class="form-control" id="email" placeholder="Email" >
                      </div>
                      
                      <div class="mb-3">
                        <label class="form-label">Phone<span class="reuqired">*</span></label>
                        <input type="phone" class="form-control">
                      </div>

                      <div class="mb-3">
                        <p class="paymentMethodHeading">Payment method</p>
                      </div>

                      <div class="reservePaymentMobile">
                        <input id="radio-1" class="radio-custom" name="radio-group" type="radio" checked>
                        <label for="radio-1" class="radio-custom-label">
                            <img src="{{asset('assets/images/icons/paypal-booking.webp')}}" alt="Paypal" class="img-fluid paypalReserveImg" loading="lazy">
                            Pay with PayPal</label>
                    </div>
                </form>

                <p class="m-0 heading py-3">Order Summary</p>

                <div class="reserveSummary border rounded-3 px-2 py-2">
                    <div class="earn my-1">
                        <p class="m-0">Earn 100 points</p>
                    </div>
                    <div class="title">
                        <p class="m-0 py-2">2009 Honda Zest Spark W</p>
                    </div>
                    <div class="reserveDetails d-flex align-content-center">
                        <div class="detail d-flex align-items-center">
                           <div class="inner">
                            <p class="m-0 top">Year</p>
                            <p class="m-0 bottom">2009/03</p>
                           </div>
                           <span>&dot;</span>
                        </div>

                        <div class="detail d-flex align-items-center ms-3">
                            <div class="inner">
                                <p class="m-0 top">Engine</p>
                                <p class="m-0 bottom">660 cc</p>
                            </div>
                            <span>&dot;</span>
                         </div>

                         <div class="detail d-flex align-items-center ms-3">
                            <div class="inner">
                                <p class="m-0 top">Mileage</p>
                                <p class="m-0 bottom">157761 km</p>
                            </div>
                            <span>&dot;</span>
                         </div>

                         <div class="detail d-flex align-items-center ms-3">
                            <div class="inner">
                                <p class="m-0 top">Transmission</p>
                                <p class="m-0 bottom">AT</p>
                            </div>
                         </div>

                    </div>

                    <div class="reservePrice d-flex justify-content-between align-items-center border-bottom py-2 my-3">
                        <p class="m-0 priceTitle">Car Price (USD):	</p>
                        <p class="m-0 priceAmount">$875</p>
                    </div>
                </div>

                <div class="reserveBtn text-center">
                    <button type="submit" class="btn btn-reserve">Reserve for $99</button>
                 </div>

                 <p class="reserveOrderText text-center">By placing an order with SAT, you agree to our terms and conditions and cookie policy.</p>

            </div>
        </div>
    </div>
</div>
</section>