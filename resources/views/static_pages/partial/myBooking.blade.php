<section class="container" id="dashboard_selection">
    <div class="grid-danshboard">
        <div class="dash-item-1">
            <div class="sticy-items-dashboard">
              <ul>
                <li>
                  <a href="javascript:;">
                    <img src="{{asset('assets/images/staticPagesAssets/icon/user-6-fill.webp')}}" alt="profile" class="img-fluid" loading="lazy" width="22" height="22">
                    Profile</a>
                </li>
                <li>
                  <a href="javascript:;">
                    <img src="{{asset('assets/images/staticPagesAssets/icon/account-box-line.webp')}}" alt="profile" class="img-fluid" loading="lazy" width="22" height="22">
                    Saved Searches</a>
                </li>
                <li>
                  <a href="javascript:;">
                    <img src="{{asset('assets/images/staticPagesAssets/icon/star-smile-line.webp')}}" alt="profile" class="img-fluid" loading="lazy" width="22" height="22">
                    Review</a>
                </li>
                <li>
                  <a href="javascript:;">
                    <img src="{{asset('assets/images/staticPagesAssets/icon/star-smile-line.webp')}}" alt="profile" class="img-fluid" loading="lazy" width="22" height="22">
                    Loyalty Points</a>
                </li>
                <li class="selected-option">
                  <a href="javascript:;">
                    <img src="{{asset('assets/images/staticPagesAssets/icon/calendar-event-line.webp')}}" alt="profile" class="img-fluid active" loading="lazy" width="22" height="22">
                    My Bookings</a>
                </li>
                <li>
                  <a href="javascript:;">
                    <img src="{{asset('assets/images/staticPagesAssets/icon/heart-line.webp')}}" alt="profile" class="img-fluid" loading="lazy" width="22" height="22">
                    Favorites</a>
                </li>
                <li>
                  <a href="javascript:;">
                    <img src="{{asset('assets/images/staticPagesAssets/icon/money-dollar-circle-line.webp')}}" alt="profile" class="img-fluid" loading="lazy" width="22" height="22">
                    My Transaction</a>
                </li>
                <li>
                  <a href="javascript:;">
                    <img src="{{asset('assets/images/staticPagesAssets/icon/map-pin-2-line.webp')}}" alt="profile" class="img-fluid" loading="lazy" width="22" height="22">
                    Track Shipment</a>
                </li>
                <li>
                  <a href="javascript:;">
                    <img src="{{asset('assets/images/staticPagesAssets/icon/information-line.webp')}}" alt="profile" class="img-fluid" loading="lazy" width="22" height="22">
                    Consignee</a>
                </li>
                 <li>
                  <a href="javascript:;">
                    <img src="{{asset('assets/images/staticPagesAssets/icon/hammer-line.webp')}}" alt="profile" class="img-fluid" loading="lazy" width="22" height="22">
                    Auction List</a>
                </li>
               
              </ul>
              <div class="card-sidebar">
                <p>A new way to buy modern and used cars</p>
                <button class="logout-sidebar"><img src="assets/images/common/icons/logout-icon.svg" alt=""> Logout</button>
              </div>
            </div>
          </div>
      <div class="dash-item-3 h-100 overflow-auto">
        <!-- desktop -->
        <div class="my-booking-inner justify-content-center align-content-center  table-scroll-dahboard overflow-auto">
            <div class="track-table-responsive d-none d-md-block" style="min-width: 992px;">
                        <div class="valid-item loyb-12 heading ">
                            <div class="heading-item max-20">Image</div>
                            <div class="heading-item max-20">Car Detail</div>
                            <div class="heading-item max-20">Total Price</div>
                            <div class="heading-item max-20">Booking Date</div>
                            <div class="heading-item max-20 text-center">Complete Payment</div>
                        </div>
                        <div class="valid-item loyb-12 item mb-3">
                            <div class="item-value max-20 d-flex align-items-center">
                                <img src="{{asset('assets/images/staticPagesAssets/images/car-detail-img1.webp')}}" alt="car-image" class="td-img-booking-compt img-fluid">
                            </div>
                            <div class="item-value max-20 d-flex align-items-center">
                                <div class="row">
                                    <div class="col-12 align-content-center">
                                        <p class="car-bking-detail-hdr">2019 Toyota Land Cruiser Wagon
                                        </p>
                                        <p class="car-detail-sub-hdr mb-0">CVT | Hybrid | 2,500 cc | 833527
                                            Km
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item-value max-20 d-flex align-items-center">
                                <p class="car-detail-colmn-hdr mb-0">$3,823</p>
                            </div>
                            <div class="item-value max-20 d-flex align-items-center">
                                <p class="car-detail-colmn-hdr mb-0">04-01-2024</p>
                            </div>
                            <div class="item-value max-20 d-grid justify-content-center gap-3 align-content-center">
                                <div class="track-order-my-bking-mobile d-flex align-items-baseline flex-wrap justify-content-between">
                                    <a href="javascript:;" class="status-btn">Checkout</a>
                                </div>
                                <div class="track-order-my-bking-mobile d-flex align-items-baseline flex-wrap justify-content-between">
                                    <button class="screenshot-btn" data-bs-toggle="modal" data-bs-target="#upload_proofimage">
                                        <span class="clr-blue-60">Add Payment Proof</span>
                                        <span class="d-none"><img src="assets/images/common/icons/file-04.webp" height="14" width="14" alt="sat icon"> Screenshort</span>
                                    </button>
                                    <div class="d-flex flex-column align-items-center flex-grow-1">
                                        <div class="mt-2">
                                            <span class="specs-ms-car fw-bold">Time Left</span>
                                            <span class="specs-carprice-title ms-1" id="timerDisplay">23h:55m:57s</span>
                                        </div>
                                        <span class="time-overdue">Time Overdue</span>
                                        <span class="request-moretime" data-bs-toggle="modal" data-bs-target="#request_timemore">Request More Time</span>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>

        <!-- mobile -->
        <div class="mobile-booking-page d-md-none">
            <!-- specs -->
            <div class="row">
                <div class="col-5">
                  <img src="{{asset('assets/images/staticPagesAssets/images/rimage.webp')}}" class="img-fluid sp-car-ui mb-1" idth="137" height="81" alt="sat car">
                  <div class="d-flex pt-2 flex-wrap gap-1">
                    <span class="specs-md-car2">Stock ID:</span>
                    <span class="specs-md-car2 ms-1">SAT546246</span>
                  </div>
                </div>
                <div class="col-7 ps-0">
                    <p class="specs-maintitle">2018 TOYOTA LITEACE VAN DX</p>
                    <div>
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="specs-md-car">
                                <img src="{{asset('assets/images/staticPagesAssets/icon/calendar-re.webp')}}" height="10" width="10" alt="sat icon">
                                 2010/06
                            </span>
                            <span class="specs-md-car">
                                <img src="{{asset('assets/images/staticPagesAssets/icon/meter-re.webp')}}" height="10" width="10" alt="sat icon">
                                 126380 km
                            </span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="specs-md-car">
                                <img src="{{asset('assets/images/staticPagesAssets/icon/lever-re.webp')}}" height="10" width="10" alt="sat icon">
                                2000 cc
                            </span>
                            <span class="specs-md-car">
                                <img src="{{asset('assets/images/staticPagesAssets/icon/trans-re.webp')}}" height="10" width="10" alt="sat icon">
                                CVT
                            </span>
                        </div>
                        <div class="d-flex mt-2">
                            <span class="specs-ms-car fw-semibold">04-01-2024</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <span class="specs-carprice-title">Price</span>
                        <span class="specs-mcarprice">$20,2154</span>
                    </div>
                </div>
                <div class="col-12 pb-1 mt-2 d-flex justify-content-center">
                    <div class="d-flex justify-content-between align-items-center max-360 flex-grow-1">
                        <a href="javascript:;" class="goto-check-m">Go To Checkout</a>
                        <span class="specs-carprice-title fw-semibold">or</span>
                        <button class="upload-prof-m" data-bs-toggle="modal" data-bs-target="#upload_proofimage">Upload Proof</button>
                    </div>
                </div>
                <div class="col-12 mt-2">
                    <span class="specs-ms-car fw-bold">Time Left</span>
                    <span class="specs-carprice-title ms-1">23h:50m:24s</span>
                </div>
                <div class="col-12 mt-2 d-flex justify-content-between">
                    <span class="time-overdue">Time Overdue</span>
                    <span class="request-moretime" data-bs-toggle="modal" data-bs-target="#request_timemore">Request More Time</span>
                </div>
            </div>
        </div>
        <section class="pagination container d-flex justify-content-center px-0">
            <ul class="pagination-new">
                <li class="li-pagination-new"><a href="javascript:;" class="disabled"><i class="fas fa-chevron-left pe-2"></i>
                        Previous</a></li>
                <li class="li-pagination-new"><a href="javascript:;" class="active">1</a></li>
                <li class="li-pagination-new"><a href="javascript:;">2</a></li>
                <li class="li-pagination-new"><a href="javascript:;">3</a></li>
                <li class="li-pagination-new"><a href="javascript:;">4</a></li>
                <li class="li-pagination-new"><a href="javascript:;">5</a></li>
                <li class="page-next-texture"><label href="javascript:;">Next Page<i class="fas fa-chevron-right ps-2"></i></label></li>
            </ul>
        </section>
        <!-- ---------error-img-------- -->
        <div class="error-img d-flex justify-content-center align-items-center">
            <div class="mt-5 error-img-inner">
                <img src="{{asset('assets/images/staticPagesAssets/images/error-booking.webp')}}" class="dashboard-error-img" alt="">
                <h2 class="error-img-label">You currently do not have any <br> bookings.</h2>
            </div>
        </div>
    </div>

    <div class="modal fade" id="request_timemore" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body p-0">
                <div class="heading-request-timemore">
                   <h2>Deadline Extension Request</h2>
                   <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="requesttime-body">
                   <div class="row g-4">
                       <div class="col-12">
                           <label>Extension Time</label>
                           <select class="form-select">
                               <option value="">one</option>
                               <option value="">two</option>
                               <option value="">three</option>
                           </select>
                       </div>
                       <div class="col-12">
                           <label>Give Reasons <span>(Optional)</span></label>
                           <textarea class="form-control" placeholder="Explain Reason"></textarea>
                       </div>
                       <div class="col-12 d-flex justify-content-center">
                           <button class="sub-requestbtn">Submit</button>
                       </div>
                   </div>
                </div>
               </div>
          </div>
        </div>
      </div>
  </div></section>