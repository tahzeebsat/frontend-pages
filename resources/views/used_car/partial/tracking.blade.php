<section class="track_order-desktop">
    <div class="trackOrder">
        <div class="container">
            <div class="row">
                <div class="helpCard">
                    <div class="helpUsGrow">
                        <p class="m-0 heading mb-3">Help Us Grow</p>
                        <p class="m-0 para mb-4">Happy with your purchase? Help us grow more by clicking the following button to make a small tip for our platform.</p>
                        <button class="btn btn-giveUp" data-bs-toggle="modal" data-bs-target="#exampleModal">Give Tip</button>
                    </div>
                </div>

                <div class="trackOrderDetails d-flex justify-content-between">
                    <div class="col-md-8">
                        <div class="left pt-4">
                            <p class="m-0 heading">Track Your Order</p>

                            <div class="timeline">
                                <!-- completed & inprocess  -->
                                <div class="timeline-items completed">
                                    <img src="{{asset('assets/images/icons/tick-track.webp')}}" class="marker-tick" alt="sat-japan">
                                    <img src="{{asset('assets/images/icons/dots-track.webp')}}" class="marker-dots" alt="sat-japan">
                                    <h2>Payment Completed</h2>
                                    <p>Your payment has been successfully received and your is confirmed.</p>
                                    <h4>10 May 2024, 11:00 am</h4>
                                </div>
                                <div class="timeline-items completed">
                                    <img src="{{asset('assets/images/icons/tick-track.webp')}}" class="marker-tick" alt="sat-japan">
                                    <img src="{{asset('assets/images/icons/dots-track.webp')}}" class="marker-dots" alt="sat-japan">
                                    <h2>Preparing</h2>
                                    <p>Your order is being prepared and will be ready for shipment once it is complete.</p>
                                    <h4>13 May 2024, 01:00 am</h4>
                                </div>
                                <div class="timeline-items completed">
                                    <img src="assets/images/icons/tick-track.webp" class="marker-tick" alt="sat-japan">
                                    <img src="{{asset('assets/images/icons/dots-track.webp')}}" class="marker-dots" alt="sat-japan">
                                    <h2>Ready for Shipment</h2>
                                    <p>Your order has been successfully prepared and is now ready to be shipped.</p>
                                    <h4>14 May 2024, 05:00 pm</h4>
                                </div>
                                <div class="timeline-items completed">
                                    <img src="{{asset('assets/images/icons/tick-track.webp')}}" class="marker-tick" alt="sat-japan">
                                    <img src="{{asset('assets/images/icons/dots-track.webp')}}" class="marker-dots" alt="sat-japan">
                                    <h2>Shipped</h2>
                                    <p>Your order has been shipped and will reach the destination port soon.</p>
                                    <h4>16  May 2024, 06:00 am</h4>
                                </div>
                                <div class="timeline-items inprocess">
                                    <img src="{{asset('assets/images/icons/tick-track.webp')}}" class="marker-tick" alt="sat-japan">
                                    <img src="{{asset('assets/images/icons/dots-track.webp')}}" class="marker-dots" alt="sat-japan">
                                    <h2>Ready for Pick Up</h2>
                                    <p>Your order has reached the destination port and is now ready to be picked up.</p>
                                    <h4 class="d-none">10 May 2024, 11:00 am</h4>
                                </div>
                                <div class="timeline-items inprocess">
                                    <img src="{{asset('assets/images/icons/tick-track.webp')}}" class="marker-tick" alt="sat-japan">
                                    <img src="{{asset('assets/images/icons/dots-track.webp')}}" class="marker-dots" alt="sat-japan">
                                    <h2>Delivered</h2>
                                    <p>Your order has been received. Enjoy your purchase!</p>
                                    <h4 class="d-none">10 May 2024, 11:00 am</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="right pt-5">
                            <p class="m-0 heading">Order Summary</p>
                            <div class="orderSummaryDetail">
                                <div class="top d-flex gap-3">
                                    <p class="m-0 nys">New Year Sale</p>
                                    <p class="m-0 pc">Premium Cars</p>
                                </div>
                                <p class="m-0 heading pt-2 pb-0">2017 Toyota C-HR</p>

                                <div class="details d-flex align-items-center">
                                    <div class="detail d-flex align-items-center">
                                        <div class="inner">
                                            <p class="m-0 top">Year</p>
                                            <p class="m-0 bottom">2010/6</p>
                                        </div>
                                        <span>&dot;</span>
                                    </div>

                                    <div class="detail d-flex align-items-center">
                                        <div class="inner ms-4">
                                            <p class="m-0 top">Engine</p>
                                            <p class="m-0 bottom">660 cc</p>
                                        </div>
                                        <span>&dot;</span>
                                    </div>

                                    <div class="detail d-flex align-items-center">
                                        <div class="inner ms-4">
                                            <p class="m-0 top">Mileage</p>
                                            <p class="m-0 bottom">12,380 km</p>
                                        </div>
                                        <span>&dot;</span>
                                    </div>

                                    <div class="detail d-flex align-items-center">
                                        <div class="inner ms-4">
                                            <p class="m-0 top">Transmission</p>
                                            <p class="m-0 bottom">MT</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="totalPrice">
                                    <div class="price d-flex justify-content-between align-items-center py-3">
                                        <p class="m-0 text">Total Price (CIF to Mombasa):</p>
                                        <p class="m-0 amount">$1234567891</p>
                                    </div>

                                    <div class="deliveryItem d-flex gap-5 pb-2">
                                        <p class="m-0 top">Delivery to :</p>
                                        <p class="m-0 bottom">Kenya /Mombasa</p>
                                    </div>
                                    <div class="deliveryItem d-flex gap-5 pb-2">
                                        <p class="m-0 top">Order ID :</p>
                                        <p class="m-0 bottom ms-3">654215</p>
                                    </div>
                                    <div class="deliveryItem d-flex gap-5">
                                        <p class="m-0 top">Status :</p>
                                        <p class="m-0 paid ms-4 ps-2">Paid</p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                

            </div>
        </div>

        <div class="haveAQuestion mt-5">
           <div class="container">
            <div class="row">
                <p class="m-0 heading">Have a question about your order?</p>
                <p class="m-0 para py-2">Please feel free to reach out to us at <a href="javascript:;">sales@satjapan.com</a> or <a href="javascript:;">support@satjapan.com</a> to get your questions answered.</p>
            </div>
           </div>
        </div>


        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content p-2">
        <div class="modal-header border-0">
          <h1 class="modal-title" id="exampleModalLabel">Help Us Grow</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body m-0 py-0">
          <div class="amount-card">
            <p class="m-0 title pb-2">Enter the amount you want to tip</p>

            <div class="amountSelect">
                <div class="inner">
                    <label class="pb-2">Amount</label>
                    <div class="amount d-flex justify-content-between align-items-center">
                        <input type="text" class="form-control border-0 rounded-0" placeholder="Amount">
                        <select class="form-select form-select border-0 rounded-0" aria-label="Large select example">
                            <option selected>USD</option>
                            <option value="1">AED</option>
                            <option value="2">PKR</option>
                            <option value="3">GBP</option>
                          </select>
                    </div>
                </div>

            </div>
          </div>

          <div class="selectFromHere">
            <p class="m-0 title">Or just select from here</p>

            <div class="selectedAmount d-flex gap-3 flex-wrap">
                <div class="inner selectAmountPaid">
                    <p class="m-0">5%</p>
                    <p class="m-0">$500</p>
                </div>
                <div class="inner selectAmountPaid">
                    <p class="m-0">10%</p>
                    <p class="m-0">$600</p>
                </div>
                <div class="inner selectAmountPaid">
                    <p class="m-0">15%</p>
                    <p class="m-0">$700</p>
                </div>
                <div class="inner selectAmountPaid">
                    <p class="m-0">20%</p>
                    <p class="m-0">$800</p>
                </div>
                <div class="inner selectAmountPaid">
                    <p class="m-0">25%</p>
                    <p class="m-0">$900</p>
                </div>
            </div>


        </div>

        <div class="paymentMethod my-3">
            <div class="inner">
                <p class="m-0 title">Payment Method</p>
                <div class="cardAccept">
                    <p class="m-0 pt-2 head pb-1">
                        <img src="{{asset('assets/images/icons/strpe-logo.webp')}}" alt="Card" class="img-fluid" loading="lazy" width="24" height="16">
                        Pay with credit or debit card.</p>
                    <input type="text" class="form-control" placeholder="Stripe Payment">
                </div>
            </div>
        </div>



        </div>
        <div class="sumbit_form text-center">
          <button type="button" class="btn btn-submit">Submit</button>
        </div>
      </div>
    </div>
  </div>
    </div>
</section>