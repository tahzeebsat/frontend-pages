<section class="bidding_form_desktop">
<div class="biddingForm">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="left">
                    <p class="m-0 heading pt-4">Thank you for submitting the bidding form, <span>Mr Jeckson</span></p>
                   <div class="auctionImage text-center pt-5 pb-4">
                    <img src="{{asset('assets/images/staticPagesAssets/images/auction-bid-thanks.webp')}}" alt="Auction" class="img-fluid" loading="lazy" width="182" height="55">
                   </div>

                   <div class="status d-flex align-items-center gap-2">
                    <p class="m-0 title">Status:</p>
                    <p class="m-0 paid">Paid</p>
                   </div>

                   <hr class="p-0 my-2">
                </div>
            </div>
            <div class="col-md-4">
                <div class="rights mt-4 mb-3">
                    <p class="m-0 heading">Order Summary</p>
                    <p class="m-0 title">2017 Toyota C-HR</p>

                    <div class="details d-flex gap-4 py-2">
                        <div class="detail">
                                <p class="m-0 top">Color</p>
                                <p class="m-0 bottom">Super White</p>
                        </div>
                        <div class="detail">
                                <p class="m-0 top">Drivetrain</p>
                                <p class="m-0 bottom">2WD</p>
                        </div>
                        <div class="detail">
                                <p class="m-0 top">Transmission</p>
                                <p class="m-0 bottom">CVT</p>
                        </div>
                        <div class="detail">
                                <p class="m-0 top">Fuel</p>
                                <p class="m-0 bottom">Hybrid</p>
                        </div>
                    </div>
                    <div class="details d-flex gap-4 py-1">
                        <div class="detail">
                                <p class="m-0 top">Seats</p>
                                <p class="m-0 bottom">5</p>
                        </div>
                        <div class="detail">
                                <p class="m-0 top">Interior Color</p>
                                <p class="m-0 bottom">Premium Fabric/Black</p>
                        </div>
                       
                    </div>

                    <div class="pricing">
                        <div class="meeting d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                            <p class="m-0 meetingTime">Meeting Time</p>
                            <p class="m-0 meetingdate">15-October-2024</p>
                        </div>
                        <div class="time d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                            <p class="m-0 timeTitle">Time</p>
                            <p class="m-0 timeClock">2:30 PM</p>
                        </div>
                        <div class="amount d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                            <p class="m-0 amountTitle">Paid Amount</p>
                            <p class="m-0 amountPaid">50,000 YEN</p>
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