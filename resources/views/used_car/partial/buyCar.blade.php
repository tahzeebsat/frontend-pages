<section class="buy_car_method_desktop desktop2-view">
<div class="buyCarmethod">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="left">
                    <p class="m-0 heading">Personal Information</p>

                    <div class="buyModalButton my-3">
                        <a href="javascript:;" type="button" data-bs-toggle="modal" data-bs-target="#addNewAddress">
                            <i class="fa fa-plus"></i>
                            Add a new address
                        </a>
                    </div>

                    <hr>

                  
                    <div class="activeInformation d-flex justify-content-between">
                      <div class="col-md-3">
                        <p class="m-0 heading">Personal Information</p>
                      </div>
                      <div class="col-md-3">
                        <div class="persInfoActiveDetails">
                          <p class="m-0">demo</p>
                          <p class="m-0">demo@demo.com</p>
                          <p class="m-0">+923001234567</p>
                          <p class="m-0">test</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <p class="m-0 activeInfoEdit text-end">Edit</p>
                      </div>
                    </div>

                    <hr>


                    <div class="contents">

                      <!-- acc single -->
                      <div class="accordion-single js-acc-single py-1">
                        <div class="accordion-single-item js-acc-item">
                          <h2 class="accordion-single-title js-acc-single-trigger">Add coupon code</h2>
                          <div class="accordion-single-content">
                            <div class="accordDetail d-flex">
                              <input type="text" class="form-control" placeholder="Enter Code" id="codeInput">
                              <button class="btn btn-secondary mx-3" id="applyBtn" disabled>Apply</button>
                            </div>
                          </div>
                        </div>
                      </div><!-- accordion-single -->
                        
                      </div>


                    <div class="paymentBuy">
                        <p class="m-0 heading py-4">Payment Method</p>
                    </div>
                    <div class="reservePaymentChecked border pb-4">
                      <div class="my-2">
                          <input id="radio-1" class="radio-custom" name="radio-group" type="radio" checked="">
                          <label for="radio-1" class="radio-custom-label">
                              <img src="{{asset('assets/images/icons/paypal-booking.webp')}}" alt="Paypal" class="img-fluid paypalReserveImg" loading="lazy">
                              Pay with credit or debit card.</label>
                      </div>

                      <div class="paymentWithCard d-flex border m-2 px-2">
                        <img src="{{asset('assets/images/icons/paypal-booking.webp')}}" alt="Paypal" class="img-fluid paypalReserveImg" loading="lazy">
                        <input type="text" class="form-control border-0 cardNo" placeholder="Card Number">
                        <input type="text" class="form-control border-0 mmyy" placeholder="MM/YY">
                        <input type="text" class="form-control border-0 cvv" placeholder="CVC">
                      </div>
                    </div>

                  <div class="orderPlaceBuy text-end pt-5 mt-5 pb-3 me-5">
                    <button class="btn btn-buy">Place Your Order</button>
                  </div>
                  
                  <div class="buyTerms text-end">
                    <p>By placing an order with SAT, you agree to our 
                      <a href="javascript:;" class="hyperlink">
                        terms and conditions</a> and 
                        <a href="javascript:;" class="hyperlink">
                          cookie policy</a>.
                        </p>
                  </div>

                    {{-- ============= Model For Add New Address ============= --}}

                    <div class="modal fade" id="addNewAddress" tabindex="-1" aria-labelledby="addNewAddressLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <p class="modal-title" id="addNewAddressLabel">Enter Your Details</p>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-0">
                                <form>
                                    <div class="mb-3">
                                      <label>Full Name <span>*</span></label>
                                      <input type="text" class="form-control" placeholder="Full Name">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email<span>*</span></label>
                                        <input type="text" class="form-control" placeholder="Email">
                                      </div>
                                      <div class="mb-3">
                                        <label>Phone<span>*</span></label>
                                        <input type="text" class="form-control">
                                      </div>
                                      <div class="mb-3">
                                        <label>Address<span>*</span></label>
                                        <input type="text" class="form-control" placeholder="Address">
                                      </div>

                                      <div class="mb-3 d-flex gap-2 align-items-center">
                                        <div class="left w-100">
                                            <label>Country<span>*</span></label>
                                        <select class="form-select mb-3" aria-label="Large select example">
                                            <option selected>Pakistan</option>
                                            <option value="1">UAE</option>
                                            <option value="2">UK</option>
                                            <option value="3">USA</option>
                                        </select>
                                        </div>

                                        <div class="right w-100">
                                            <label>City<span>*</span></label>
                                        <select class="form-select mb-3" aria-label="Large select example">
                                            <option selected>Karachi</option>
                                            <option value="1">Lahore</option>
                                            <option value="2">Peshawar</option>
                                            <option value="3">Quetta</option>
                                        </select>
                                        </div>
                                      </div>
                                   
                                  </form>
                            </div>
                            <div class="modal-footer border-0 d-flex justify-content-center">
                              <button type="button" class="btn btn-save">Submit</button>
                            </div>
                          </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="right">
                    <div class="buyOrderSummary my-3">
                      <p class="m-0 heading">Order Summary</p>
                      <div class="nextOrderLabel d-flex align-items-center">
                        <img src="{{asset('assets/images/icons/earn-points.webp')}}" alt="Points" class="img-fluid" loading="lazy">
                        <p class="m-0">Get 100$ off from your next order after buying this car</p>
                      </div>

                      <div class="earnPoints">
                        <p class="m-0">Earn 100 points</p>
                      </div>

                      <div class="productDetailBuy pt-2">
                        <p class="m-0 title">2019 Toyota Raize X S</p>
                        <div class="details d-flex">
                          <div class="detail d-flex align-items-center">
                            <div class="inner">
                              <p class="m-0 top">Year</p>
                              <p class="m-0 bottom">2019/11</p>
                            </div>
                            <span>&dot;</span>
                          </div>

                          <div class="detail d-flex align-items-center ms-4">
                            <div class="inner">
                              <p class="m-0 top">Engine</p>
                              <p class="m-0 bottom">1000 cc</p>
                            </div>
                            <span>&dot;</span>
                          </div>

                          <div class="detail d-flex align-items-center ms-4">
                            <div class="inner">
                              <p class="m-0 top">Mileage</p>
                              <p class="m-0 bottom">23272 km</p>
                            </div>
                            <span>&dot;</span>
                          </div>

                          <div class="detail d-flex align-items-center ms-4">
                            <div class="inner">
                              <p class="m-0 top">Transmission</p>
                              <p class="m-0 bottom">AT</p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="destinationBuy d-flex gap-2 my-2">
                        <div class="country w-100">
                          <p class="m-0 title py-2">Destination Country <span>*</span></p>
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Select</option>
                            <option value="1">Pakistan</option>
                            <option value="2">UAE</option>
                            <option value="3">UK</option>
                          </select>
                        </div>
                        <div class="port w-100">
                          <p class="m-0 title py-2">Destination Port <span>*</span></p>
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Select</option>
                            <option value="1">Pakistan</option>
                            <option value="2">UAE</option>
                            <option value="3">UK</option>
                          </select>
                        </div>
                      </div>

                      <div class="furtherDetailBuy">
                        <div class="marine-insuranceBuy d-flex justify-content-between py-2">
                         <div class="left d-flex">
                          <img src="{{asset('assets/images/icons/information-fi.webp')}}" alt="Info" class="img-fluid" loading="lazy" />
                          <p class="m-0">Marine Insurance Fee</p>
                         </div>

                         <div class="right d-flex gap-3">
                          <div class="form-check">
                            <input class="form-check-input shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Yes
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                              No
                            </label>
                          </div>
                        </div>

                        </div>

                        <div class="marine-insuranceBuy d-flex justify-content-between">
                          <div class="left d-flex">
                           <img src="{{asset('assets/images/icons/information-fi.webp')}}" alt="Info" class="img-fluid" loading="lazy" />
                           <p class="m-0">Pre Export Inspection</p>
                          </div>
 
                          <div class="right d-flex gap-3">
                           <div class="form-check">
                             <input class="form-check-input shadow-none" type="radio" name="flexRadioDefault1" id="flexRadioDefault11" checked>
                             <label class="form-check-label" for="flexRadioDefault11">
                               Yes
                             </label>
                           </div>
                           <div class="form-check">
                             <input class="form-check-input shadow-none" type="radio" name="flexRadioDefault1" id="flexRadioDefault12">
                             <label class="form-check-label" for="flexRadioDefault12">
                               No
                             </label>
                           </div>
                         </div>
 
                         </div>

                         <div class="marine-insuranceBuy d-flex justify-content-between py-2">
                          <div class="left d-flex">
                           <img src="{{asset('assets/images/icons/information-fi.webp')}}" alt="Info" class="img-fluid" loading="lazy" />
                           <p class="m-0">SAT Warranty</p>
                          </div>
 
                          <div class="right d-flex gap-3">
                           <div class="form-check">
                             <input class="form-check-input shadow-none" type="radio" name="flexRadioDefault11" id="flexRadioDefault111" checked>
                             <label class="form-check-label" for="flexRadioDefault111">
                               Yes
                             </label>
                           </div>
                           <div class="form-check">
                             <input class="form-check-input shadow-none" type="radio" name="flexRadioDefault11" id="flexRadioDefault112">
                             <label class="form-check-label" for="flexRadioDefault112">
                               No
                             </label>
                           </div>
                         </div>
 
                         </div>

                      </div>

                      <div class="acceptedCurrency d-flex justify-content-between align-items-center">
                        <div class="left">
                          <p class="m-0">Accepted Currencies</p>
                        </div>
                        <div class="right">
                          <select class="form-select" aria-label="Default select example">
                            <option selected>USD</option>
                            <option value="1">EUR</option>
                            <option value="2">GBP</option>
                            <option value="3">JPY</option>
                          </select>
                        </div>
                      </div>

                      <div class="buyPrice">
                        <div class="carPrice d-flex justify-content-between align-items-center my-3 border-bottom py-2">
                          <div class="left">
                            <p class="m-0">Car Price:	</p>
                          </div>
                          <div class="right">
                            <p class="m-0">$12547</p>
                          </div>
                        </div>
                        <div class="carPrice d-flex justify-content-between align-items-center border-bottom pb-2">
                          <div class="left">
                            <p class="m-0">Handling Fee(5%):</p>
                          </div>
                          <div class="right">
                            <p class="m-0">$627</p>
                          </div>
                        </div>
                        <div class="carPrice d-flex justify-content-between align-items-center my-3 border-bottom pb-2">
                          <div class="left">
                            <p class="m-0">Total Price (Inquire to get total price):	</p>
                          </div>
                          <div class="right">
                            <p class="m-0">$13174</p>
                          </div>
                        </div>
                      </div>

                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
</section>


{{-- ========================= Mobile View ========================= --}}
<section class="buy_car_method_mobile mobile2-view">
<div class="buyCarmethodMobile">
  <div class="container">
    <div class="row">
     <div class="inner px-2">
      <div class="orderSummaryBuyMobile border">
        <p class="m-0 heading">Order Summary</p>
        <div class="nextOrderLabel d-flex align-items-center my-3">
          <img src="{{asset('assets/images/icons/earn-points.webp')}}" alt="Points" class="img-fluid" loading="lazy">
          <p class="m-0">Get 100$ off from your next order after buying this car</p>
        </div>
        <div class="earn">
          <p class="m-0">Earn 100 points</p>
        </div>
        <div class="title">
          <p class="m-0">2015 Audi  A1 1.0tfsi</p>
        </div>

        <div class="detailsMobile d-flex">
          <div class="detail d-flex align-items-center">
            <div class="inner">
              <p class="m-0 top">Year</p>
              <p class="m-0 bottom">2015/11</p>
            </div>
            <span>&dot;</span>
          </div>

          <div class="detail d-flex align-items-center ms-3">
            <div class="inner">
              <p class="m-0 top">Year</p>
              <p class="m-0 bottom">2015/11</p>
            </div>
            <span>&dot;</span>
          </div>

          <div class="detail d-flex align-items-center ms-3">
            <div class="inner">
              <p class="m-0 top">Year</p>
              <p class="m-0 bottom">2015/11</p>
            </div>
            <span>&dot;</span>
          </div>

          <div class="detail d-flex align-items-center ms-3">
            <div class="inner">
              <p class="m-0 top">Year</p>
              <p class="m-0 bottom">2015/11</p>
            </div>
          </div>

        </div>


        <div class="destinationBuyMobile d-flex gap-2 mt-3">
          <div class="left w-100">
            <p class="m-0">Destination Country <span>*</span></p>
            <select class="form-select form-select-lg mb-3" aria-label="Large select example">
              <option selected>Pakistan</option>
              <option value="1">UAE</option>
              <option value="2">UK</option>
            </select>
          </div>
          <div class="right w-100">
            <p class="m-0">Destination Port <span>*</span></p>
            <select class="form-select form-select-lg mb-3" aria-label="Large select example">
              <option selected>Pakistan</option>
              <option value="1">UAE</option>
              <option value="2">UK</option>
            </select>
          </div>
        </div>


        <div class="furtherDetailBuy">
          <div class="marine-insuranceBuy d-flex justify-content-between py-2">
           <div class="left d-flex">
            <img src="{{asset('assets/images/icons/information-fi.webp')}}" alt="Info" class="img-fluid" loading="lazy">
            <p class="m-0">Marine Insurance Fee</p>
           </div>

           <div class="right d-flex gap-3">
            <div class="form-check">
              <input class="form-check-input shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Yes
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked="">
              <label class="form-check-label" for="flexRadioDefault2">
                No
              </label>
            </div>
          </div>

          </div>

          <div class="marine-insuranceBuy d-flex justify-content-between">
            <div class="left d-flex">
             <img src="{{asset('assets/images/icons/information-fi.webp')}}" alt="Info" class="img-fluid" loading="lazy">
             <p class="m-0">Pre Export Inspection</p>
            </div>

            <div class="right d-flex gap-3">
             <div class="form-check">
               <input class="form-check-input shadow-none" type="radio" name="flexRadioDefault1" id="flexRadioDefault11" checked="">
               <label class="form-check-label" for="flexRadioDefault11">
                 Yes
               </label>
             </div>
             <div class="form-check">
               <input class="form-check-input shadow-none" type="radio" name="flexRadioDefault1" id="flexRadioDefault12">
               <label class="form-check-label" for="flexRadioDefault12">
                 No
               </label>
             </div>
           </div>

           </div>

           <div class="marine-insuranceBuy d-flex justify-content-between py-2">
            <div class="left d-flex">
             <img src="{{asset('assets/images/icons/information-fi.webp')}}" alt="Info" class="img-fluid" loading="lazy">
             <p class="m-0">SAT Warranty</p>
            </div>

            <div class="right d-flex gap-3">
             <div class="form-check">
               <input class="form-check-input shadow-none" type="radio" name="flexRadioDefault11" id="flexRadioDefault111" checked="">
               <label class="form-check-label" for="flexRadioDefault111">
                 Yes
               </label>
             </div>
             <div class="form-check">
               <input class="form-check-input shadow-none" type="radio" name="flexRadioDefault11" id="flexRadioDefault112">
               <label class="form-check-label" for="flexRadioDefault112">
                 No
               </label>
             </div>
           </div>

           </div>


           <div class="currencyBuyMobile d-flex justify-content-between align-items-center">
            <p class="m-0 title">Accepted Currencies</p>
            <select class="form-select" aria-label="Default select example">
              <option selected>USD</option>
              <option value="1">PKR</option>
              <option value="2">EURO</option>
              <option value="3">GBP</option>
            </select>
           </div>



        </div>


        <div class="carBuyPrice">
          <div class="inner">
            <div class="pricing d-flex justify-content-between align-items-center border-bottom mt-4 pb-2">
              <p class="m-0 top">Car Price</p>
              <p class="m-0 bottom">$2414</p>
            </div>

            <div class="pricing d-flex justify-content-between align-items-center border-bottom mt-2 pb-2">
              <p class="m-0 top">Handling Fee(5%):</p>
              <p class="m-0 bottom">$121</p>
            </div>

            <div class="pricing d-flex justify-content-between align-items-center border-bottom mt-2 pb-2">
              <p class="m-0 top">Total Price (Inquire to get total price):</p>
              <p class="m-0 bottom">$2535</p>
            </div>
          </div>
        </div>



      </div>

      <div class="personalInfoMobile">
        <div class="inner">
          <p class="m-0 title pt-3">Personal Information</p>

          <div class="addNewMobile d-flex gap-2 align-items-center">
            <i class="fa fa-plus"></i>
            <a href="javascript:;" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Add a new address
            </a>
          </div>
        </div>
      </div>

      <hr>

      <div class="activeInformationMobile d-flex justify-content-between">
        <div class="col-md-3">
          <p class="m-0 heading">Personal <br/>Information</p>
        </div>
        <div class="col-md-3">
          <div class="persInfoActiveDetails">
            <p class="m-0">demo</p>
            <p class="m-0">demo@demo.com</p>
            <p class="m-0">+923001234567</p>
            <p class="m-0">test</p>
          </div>
        </div>
        <div class="col-md-6">
          <p class="m-0 activeInfoEdit text-end">Edit</p>
        </div>
      </div>

      <hr>

      <div class="contents">

        <!-- acc single -->
        <div class="accordion-single js-acc-single py-1">
          <div class="accordion-single-item js-acc-item">
            <h2 class="accordion-single-title js-acc-single-trigger">Add coupon code</h2>
            <div class="accordion-single-content">
              <div class="accordDetail d-flex">
                <input type="text" class="form-control" placeholder="Enter Code" id="codeInput2">
                <button class="btn btn-secondary mx-3" id="applyBtn2" disabled="">Apply</button>
              </div>
            </div>
          </div>
        </div><!-- accordion-single -->
          
        </div>

        <div class="paymentBuy">
          <p class="m-0 heading py-4">Payment Method</p>
      </div>

      <div class="reservePaymentChecked border pb-4">
        <div class="my-2">
            <input id="radio-1" class="radio-custom" name="radio-group" type="radio" checked="">
            <label for="radio-1" class="radio-custom-label">
                <img src="{{asset('assets/images/icons/paypal-booking.webp')}}" alt="Paypal" class="img-fluid paypalReserveImg" loading="lazy">
                Pay with credit or debit card.</label>
        </div>

        <div class="paymentWithCard d-flex border m-2">
          <input type="text" class="form-control border-0 cardNo" placeholder="Card Number">
          <input type="text" class="form-control border-0 mmyy text-end" placeholder="MM/YY">
        </div>
      </div>

      <div class="orderPlaceBuy text-center mt-3">
        <button class="btn btn-buy">Place Your Order</button>
      </div>

      <div class="buyTerms text-center">
        <p>By placing an order with SAT, you agree to our 
          <a href="javascript:;" class="hyperlink">
            terms and conditions</a> and 
            <a href="javascript:;" class="hyperlink">
              cookie policy</a>.
            </p>
      </div>

     </div>

     <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel">Enter your details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-0">
        <form>
          <div class="mb-3">
            <label>Full Name <span>*</span></label>
            <input type="text" class="form-control" placeholder="Full Name">
          </div>
          <div class="mb-3">
              <label>Email<span>*</span></label>
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="mb-3">
              <label>Phone<span>*</span></label>
              <input type="text" class="form-control">
            </div>
            <div class="mb-3">
              <label>Address<span>*</span></label>
              <input type="text" class="form-control" placeholder="Address">
            </div>

            <div class="mb-3 d-flex gap-2 align-items-center">
              <div class="left w-100">
                  <label>Country<span>*</span></label>
              <select class="form-select mb-3" aria-label="Large select example">
                  <option selected="">Pakistan</option>
                  <option value="1">UAE</option>
                  <option value="2">UK</option>
                  <option value="3">USA</option>
              </select>
              </div>

              <div class="right w-100">
                  <label>City<span>*</span></label>
              <select class="form-select mb-3" aria-label="Large select example">
                  <option selected="">Karachi</option>
                  <option value="1">Lahore</option>
                  <option value="2">Peshawar</option>
                  <option value="3">Quetta</option>
              </select>
              </div>
            </div>
         
        </form>
      </div>
      <div class="saveActionMobile text-center">
        <button type="button" class="btn btn-save">Submit</button>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
</section>