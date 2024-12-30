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
            <li class="selected-option">
              <a href="javascript:;">
                <img src="{{asset('assets/images/staticPagesAssets/icon/star-smile-line.webp')}}" alt="profile" class="img-fluid active" loading="lazy" width="22" height="22">
                Review</a>
            </li>
            <li>
              <a href="javascript:;">
                <img src="{{asset('assets/images/staticPagesAssets/icon/star-smile-line.webp')}}" alt="profile" class="img-fluid" loading="lazy" width="22" height="22">
                Loyalty Points</a>
            </li>
            <li>
              <a href="javascript:;">
                <img src="{{asset('assets/images/staticPagesAssets/icon/calendar-event-line.webp')}}" alt="profile" class="img-fluid" loading="lazy" width="22" height="22">
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
     
      <div class="dash-itemd-3">
        <ul class="nav nav-tabs tab-nav-link-ul border-0 mt-3" role="tablist">
          <li class="nav-item tab-nav-link-items" role="presentation">
            <a class="nav-link tab-nav-link active" id="my-reviews-tab" data-bs-toggle="tab" href="#my-reviews" role="tab" aria-controls="my-reviews" aria-selected="true">Add a New Review</a>
          </li>
          <li class="nav-item tab-nav-link-items" role="presentation">
            <a class="nav-link tab-nav-link" id="add-review-tab" data-bs-toggle="tab" href="#add-review" role="tab" aria-controls="add-review" aria-selected="false" tabindex="-1">My Reviews</a>
          </li>
        </ul>
        <div class="tab-content d-flex justify-content-center align-items-center">
          <div class="tab-pane fade w-100 active show" id="my-reviews" role="tabpanel" aria-labelledby="my-reviews-tab">
            <!-- Content for Add a New Review -->
            <div class="row">
              <div class="col-12 mt-4">
                <h2 class="title-review">Add Review Image <span> (optional)</span></h2>
              </div>
              <div class="col-12">
                <div class="card-upload">
                  <div class="img-text">
                    <div class="uploaded-img">
                    </div>
                    <div class="d-flex justify-content-center">
                      <img src="{{asset('assets/images/staticPagesAssets/icon/upload-btn.webp')}}" class="upload-imgs" alt="" onclick="UploadImg()">
                    </div>
                    <h3 class="fs-14 fw-700" onclick="UploadImg()">Upload Image (<span class="fs-12 fw-400">You can drag
                        your images as well</span>)</h3>
                  </div>
                  <input type="file" id="files" hidden="" name="files[]">
                </div>
              </div>
            </div>
            <div class="row | input-field-set">
              <div class="mt-24m col-lg-6 my-3">
                <label class="form-label">Select Car Make
                </label>
                <select class="form-select">
                  <option value="1">Select</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                  <option value="3">other</option>
                </select>
                <div class="form-error d-none">We'll never share your email with anyone else.</div>
              </div>
              <div class="mt-24m col-lg-6 my-3">
                <label class="form-label">Select Car Model
                </label>
                <select class="form-select">
                  <option value="1">Select</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                  <option value="3">other</option>
                </select>
                <div class="form-error d-none">We'll never share your email with anyone else.</div>
              </div>
              <div class="col-lg-12 my-3">
                <h2 class="title-review d-flex align-items-center gap-3">Give Your Rating
                  <span class="stars-review">
                    <i class="star far fa-star"></i>
                    <i class="star far fa-star"></i>
                    <i class="star far fa-star"></i>
                    <i class="star far fa-star"></i>
                    <i class="star far fa-star"></i>
                  </span>
                </h2>
              </div>
              <div class="col-12 mb-3 mt-1">
                <label class="form-label">Add Review Details</label>
                <textarea class="form-control" placeholder="Details" rows="4"></textarea>
                <div class="form-error d-none">We'll never share your email with anyone else.</div>
              </div>
              <div class="col-12 d-flex align-items-center justify-content-start gap-2 review-guest-check-min">
                <input class="form-check-input m-0 review-guest-check" type="checkbox" value="" id="guest_post">
                <label class="form-check-label mb-0" for="guest_post">
                  Review as a Guest
                </label>
              </div>
              <div class="col-12 d-flex justify-content-center my-3">
                <button class="update-btn" onclick="event.preventDefault()">Submit</button>
              </div>
            </div>
          </div>
          <!-- Content for My Reviews -->
          <div class="tab-pane fade" id="add-review" role="tabpanel" aria-labelledby="add-review-tab">
            <div class="my-review-content">
              <div class="my-review-desktop">
                <div class="dashobard-review-card d-none d-md-block">
                  <div class="row">
                    <div class="align-content-center col-md-4 col-sm-12 d-flex col-cus-12">
                      <img src="{{asset('assets/images/staticPagesAssets/images/testimonial-img-detl.webp')}}" class="reviw-img" alt="">
                    </div>
                    <div class="col-md-8 col-sm-12 start-main-section col-cus-12">
                      <div class="d-flex justify-content-between align-items-baseline">
                        <div class="gap-2 d-flex d-sm-block align-items-center start-main-section">
                          <div class="d-flex gap-1 align-items-center">
                            <img src="{{asset('assets/images/staticPagesAssets/icon/star-yellow.webp')}}" class="yellow-star align-self-center" alt="">
                            <img src="{{asset('assets/images/staticPagesAssets/icon/star-yellow.webp')}}" class="yellow-star align-self-center" alt="">
                            <img src="{{asset('assets/images/staticPagesAssets/icon/star-yellow.webp')}}" class="yellow-star align-self-center" alt="">
                            <img src="{{asset('assets/images/staticPagesAssets/icon/star-yellow.webp')}}" class="yellow-star align-self-center" alt="">
                            <img src="{{asset('assets/images/staticPagesAssets/icon/star-yellow.webp')}}" class="yellow-star align-self-center" alt="">
                          </div>
                          <h2 class="review-top-hdr pe-2 mb-0">
                            The car was performing very
                          </h2>
                        </div>
                        <img src="https://flagcdn.com/pk.svg" class="review-testi-detl-flg" alt="" width="22" height="14">
                      </div>
                      <h4 class="review-test-para">
                        Reviewed in
                        <span class="review-test-para-spn">Tanzania</span> on
                        February 03, 2024
                      </h4>
                      <h4 class="review-testi-car-name">Toyota Passo</h4>
                      <p class="review-testi-car-detail">
                        I have received my Nissan note in good condition and l would
                        like to thank team Beforward for maintaining our relationship
                        in business thank you. I have received my Nissan note in good
                        condition and l would like to thank team Beforward for
                        maintaining our relationship in business thank you. I have
                        received my Nissan note in good condition and l would like to
                        thank team Beforward for maintaining our relationship in
                        business thank you.
                      </p>
                      <div class="d-flex gap-1 align-items-center">
                        <img src="{{asset('assets/images/staticPagesAssets/icon/testimonial-user.webp')}}" class="detail-testi-user-img" alt="">
                        <p class="detail-testi-user-label mb-0">by Nish Joshi</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="dashobard-review-card d-none d-md-block">
                  <div class="row">
                    <div class="align-content-center col-md-4 col-sm-12 d-flex col-cus-12">
                        <img src="{{asset('assets/images/staticPagesAssets/images/testimonial-img-detl.webp')}}" class="reviw-img" alt="">
                    </div>
                    <div class="col-md-8 col-sm-12 start-main-section col-cus-12">
                      <div class="d-flex justify-content-between align-items-baseline">
                        <div class="gap-2 d-flex d-sm-block align-items-center start-main-section">
                            <div class="d-flex gap-1 align-items-center">
                                <img src="{{asset('assets/images/staticPagesAssets/icon/star-yellow.webp')}}" class="yellow-star align-self-center" alt="">
                                <img src="{{asset('assets/images/staticPagesAssets/icon/star-yellow.webp')}}" class="yellow-star align-self-center" alt="">
                                <img src="{{asset('assets/images/staticPagesAssets/icon/star-yellow.webp')}}" class="yellow-star align-self-center" alt="">
                                <img src="{{asset('assets/images/staticPagesAssets/icon/star-yellow.webp')}}" class="yellow-star align-self-center" alt="">
                                <img src="{{asset('assets/images/staticPagesAssets/icon/star-yellow.webp')}}" class="yellow-star align-self-center" alt="">
                              </div>
                          <h2 class="review-top-hdr pe-2 mb-0">
                            The car was performing very
                          </h2>
                        </div>
                        <img src="https://flagcdn.com/pk.svg" class="review-testi-detl-flg" alt="" width="22" height="14">
                      </div>
                      <h4 class="review-test-para">
                        Reviewed in
                        <span class="review-test-para-spn">Tanzania</span> on
                        February 03, 2024
                      </h4>
                      <h4 class="review-testi-car-name">Toyota Passo</h4>
                      <p class="review-testi-car-detail">
                        I have received my Nissan note in good condition and l would
                        like to thank team Beforward for maintaining our relationship
                        in business thank you. I have received my Nissan note in good
                        condition and l would like to thank team Beforward for
                        maintaining our relationship in business thank you. I have
                        received my Nissan note in good condition and l would like to
                        thank team Beforward for maintaining our relationship in
                        business thank you.
                      </p>
                      <div class="d-flex gap-1 align-items-center">
                        <img src="{{asset('assets/images/staticPagesAssets/icon/testimonial-user.webp')}}" class="detail-testi-user-img" alt="">
                        <p class="detail-testi-user-label mb-0">by Nish Joshi</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="dashobard-review-card d-none d-md-block">
                    <div class="row">
                      <div class="align-content-center col-md-4 col-sm-12 d-flex col-cus-12">
                          <img src="{{asset('assets/images/staticPagesAssets/images/testimonial-img-detl.webp')}}" class="reviw-img" alt="">
                      </div>
                      <div class="col-md-8 col-sm-12 start-main-section col-cus-12">
                        <div class="d-flex justify-content-between align-items-baseline">
                          <div class="gap-2 d-flex d-sm-block align-items-center start-main-section">
                              <div class="d-flex gap-1 align-items-center">
                                  <img src="{{asset('assets/images/staticPagesAssets/icon/star-yellow.webp')}}" class="yellow-star align-self-center" alt="">
                                  <img src="{{asset('assets/images/staticPagesAssets/icon/star-yellow.webp')}}" class="yellow-star align-self-center" alt="">
                                  <img src="{{asset('assets/images/staticPagesAssets/icon/star-yellow.webp')}}" class="yellow-star align-self-center" alt="">
                                  <img src="{{asset('assets/images/staticPagesAssets/icon/star-yellow.webp')}}" class="yellow-star align-self-center" alt="">
                                  <img src="{{asset('assets/images/staticPagesAssets/icon/star-yellow.webp')}}" class="yellow-star align-self-center" alt="">
                                </div>
                            <h2 class="review-top-hdr pe-2 mb-0">
                              The car was performing very
                            </h2>
                          </div>
                          <img src="https://flagcdn.com/pk.svg" class="review-testi-detl-flg" alt="" width="22" height="14">
                        </div>
                        <h4 class="review-test-para">
                          Reviewed in
                          <span class="review-test-para-spn">Tanzania</span> on
                          February 03, 2024
                        </h4>
                        <h4 class="review-testi-car-name">Toyota Passo</h4>
                        <p class="review-testi-car-detail">
                          I have received my Nissan note in good condition and l would
                          like to thank team Beforward for maintaining our relationship
                          in business thank you. I have received my Nissan note in good
                          condition and l would like to thank team Beforward for
                          maintaining our relationship in business thank you. I have
                          received my Nissan note in good condition and l would like to
                          thank team Beforward for maintaining our relationship in
                          business thank you.
                        </p>
                        <div class="d-flex gap-1 align-items-center">
                          <img src="{{asset('assets/images/staticPagesAssets/icon/testimonial-user.webp')}}" class="detail-testi-user-img" alt="">
                          <p class="detail-testi-user-label mb-0">by Nish Joshi</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="dashobard-review-card d-none d-md-block">
                    <div class="row">
                      <div class="align-content-center col-md-4 col-sm-12 d-flex col-cus-12">
                          <img src="{{asset('assets/images/staticPagesAssets/images/testimonial-img-detl.webp')}}" class="reviw-img" alt="">
                      </div>
                      <div class="col-md-8 col-sm-12 start-main-section col-cus-12">
                        <div class="d-flex justify-content-between align-items-baseline">
                          <div class="gap-2 d-flex d-sm-block align-items-center start-main-section">
                              <div class="d-flex gap-1 align-items-center">
                                  <img src="{{asset('assets/images/staticPagesAssets/icon/star-yellow.webp')}}" class="yellow-star align-self-center" alt="">
                                  <img src="{{asset('assets/images/staticPagesAssets/icon/star-yellow.webp')}}" class="yellow-star align-self-center" alt="">
                                  <img src="{{asset('assets/images/staticPagesAssets/icon/star-yellow.webp')}}" class="yellow-star align-self-center" alt="">
                                  <img src="{{asset('assets/images/staticPagesAssets/icon/star-yellow.webp')}}" class="yellow-star align-self-center" alt="">
                                  <img src="{{asset('assets/images/staticPagesAssets/icon/star-yellow.webp')}}" class="yellow-star align-self-center" alt="">
                                </div>
                            <h2 class="review-top-hdr pe-2 mb-0">
                              The car was performing very
                            </h2>
                          </div>
                          <img src="https://flagcdn.com/pk.svg" class="review-testi-detl-flg" alt="" width="22" height="14">
                        </div>
                        <h4 class="review-test-para">
                          Reviewed in
                          <span class="review-test-para-spn">Tanzania</span> on
                          February 03, 2024
                        </h4>
                        <h4 class="review-testi-car-name">Toyota Passo</h4>
                        <p class="review-testi-car-detail">
                          I have received my Nissan note in good condition and l would
                          like to thank team Beforward for maintaining our relationship
                          in business thank you. I have received my Nissan note in good
                          condition and l would like to thank team Beforward for
                          maintaining our relationship in business thank you. I have
                          received my Nissan note in good condition and l would like to
                          thank team Beforward for maintaining our relationship in
                          business thank you.
                        </p>
                        <div class="d-flex gap-1 align-items-center">
                          <img src="{{asset('assets/images/staticPagesAssets/icon/testimonial-user.webp')}}" class="detail-testi-user-img" alt="">
                          <p class="detail-testi-user-label mb-0">by Nish Joshi</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>

              <!-----------car-review-mobile-dashboard---------->

              <section class="mt-4 d-md-none mobieReview">
                <div class="card card-review-page mb-3">
                  <div class="card-body">
                    <div class="card-header px-0 review-card-header">
                      <div class="row">
                        <div class="col-4">
                          <img src="{{asset('assets/images/staticPagesAssets/images/car-review.webp')}}" class="dashboard-review-img img-fluid" alt="Car Image">
                        </div>
                        <div class="col-8">
                          <div class="row">
                            <div class="col-12 d-flex justify-content-between mb-2">
                              <h4 class="dash-review-prilfe-label gap-2">
                                <img src="{{asset('assets/images/staticPagesAssets/images/prof-rev.webp')}}" class="dashbaord-rev-mble-prf me-2 " height="24" width="24" alt="">
                                David Jamar
                              </h4>
                              <img src="https://flagcdn.com/pk.svg" class="review-testi-detl-flg" alt="" width="22" height="14">
                            </div>
                            <div class="col-12 d-flex align-items-baseline gap-4 staric-section justify-content-between">
                              <div class="stars-rev d-flex gap-3">
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                              </div>
                              <h2 class="dash-car-name mt-2">Toyota Passo</h2>
                            </div>
                          
                          </div>
                        </div>
                        <div class="col-12 country-review-name">
                          <h4 class="review-country">Reviewed in <span class="review-country-spn">Tanzania</span> on
                            February 03, 2024</h4>
                        </div>
                      </div>
                    </div>
                    <h2 class="dash-review-hdr">The car was performing very</h2>
                    <p class="dash-review-para mb-0">I have received my Nissan note in good condition and l would like
                      to
                      thank
                      team Beforward for maintaining our relationship in business thank you. I have received my
                      Nissan...
                    </p>
                  </div>
                </div>
               
                <div class="card card-review-page mb-3">
                  <div class="card-body">
                    <div class="card-header px-0 review-card-header">
                      <div class="row">
                        <div class="col-4">
                          <img src="{{asset('assets/images/staticPagesAssets/images/car-review.webp')}}" class="dashboard-review-img img-fluid" alt="Car Image">
                        </div>
                        <div class="col-8">
                          <div class="row">
                            <div class="col-12 d-flex justify-content-between mb-2">
                              <h4 class="dash-review-prilfe-label gap-2">
                                <img src="{{asset('assets/images/staticPagesAssets/images/prof-rev.webp')}}" class="dashbaord-rev-mble-prf me-2 " height="24" width="24" alt="">
                                David Jamar
                              </h4>
                              <img src="https://flagcdn.com/pk.svg" class="review-testi-detl-flg" alt="" width="22" height="14">
                            </div>
                            <div class="col-12 d-flex align-items-baseline gap-4 staric-section justify-content-between">
                              <div class="stars-rev d-flex gap-3">
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                              </div>
                              <h2 class="dash-car-name mt-2">Toyota Passo</h2>
                            </div>
                            
                          </div>
                        </div>
                        <div class="col-12 country-review-name">
                          <h4 class="review-country">Reviewed in <span class="review-country-spn">Tanzania</span> on
                            February 03, 2024</h4>
                        </div>
                      </div>
                    </div>
                    <h2 class="dash-review-hdr">The car was performing very</h2>
                    <p class="dash-review-para mb-0">I have received my Nissan note in good condition and l would like
                      to
                      thank
                      team Beforward for maintaining our relationship in business thank you. I have received my
                      Nissan...
                    </p>
                  </div>
                </div>

                <div class="card card-review-page mb-3">
                  <div class="card-body">
                    <div class="card-header px-0 review-card-header">
                      <div class="row">
                        <div class="col-4">
                          <img src="{{asset('assets/images/staticPagesAssets/images/car-review.webp')}}" class="dashboard-review-img img-fluid" alt="Car Image">
                        </div>
                        <div class="col-8">
                          <div class="row">
                            <div class="col-12 d-flex justify-content-between mb-2">
                              <h4 class="dash-review-prilfe-label gap-2">
                                <img src="{{asset('assets/images/staticPagesAssets/images/prof-rev.webp')}}" class="dashbaord-rev-mble-prf me-2 " height="24" width="24" alt="">
                                David Jamar
                              </h4>
                              <img src="https://flagcdn.com/pk.svg" class="review-testi-detl-flg" alt="" width="22" height="14">
                            </div>
                            <div class="col-12 d-flex align-items-baseline gap-4 staric-section justify-content-between">
                              <div class="stars-rev d-flex gap-3">
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                              </div>
                              <h2 class="dash-car-name mt-2">Toyota Passo</h2>
                            </div>
                           
                          </div>
                        </div>
                        <div class="col-12 country-review-name">
                          <h4 class="review-country">Reviewed in <span class="review-country-spn">Tanzania</span> on
                            February 03, 2024</h4>
                        </div>
                      </div>
                    </div>
                    <h2 class="dash-review-hdr">The car was performing very</h2>
                    <p class="dash-review-para mb-0">I have received my Nissan note in good condition and l would like
                      to
                      thank
                      team Beforward for maintaining our relationship in business thank you. I have received my
                      Nissan...
                    </p>
                  </div>
                </div>

                <div class="card card-review-page mb-3">
                  <div class="card-body">
                    <div class="card-header px-0 review-card-header">
                      <div class="row">
                        <div class="col-4">
                          <img src="{{asset('assets/images/staticPagesAssets/images/car-review.webp')}}" class="dashboard-review-img img-fluid" alt="Car Image">
                        </div>
                        <div class="col-8">
                          <div class="row">
                            <div class="col-12 d-flex justify-content-between mb-2">
                              <h4 class="dash-review-prilfe-label gap-2">
                                <img src="{{asset('assets/images/staticPagesAssets/images/prof-rev.webp')}}" class="dashbaord-rev-mble-prf me-2 " height="24" width="24" alt="">
                                David Jamar
                              </h4>
                              <img src="https://flagcdn.com/pk.svg" class="review-testi-detl-flg" alt="" width="22" height="14">
                            </div>
                            <div class="col-12 d-flex align-items-baseline gap-4 staric-section justify-content-between">
                              <div class="stars-rev d-flex gap-3">
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                              </div>
                              <h2 class="dash-car-name mt-2">Toyota Passo</h2>
                            </div>
                           
                          </div>
                        </div>
                        <div class="col-12 country-review-name">
                          <h4 class="review-country">Reviewed in <span class="review-country-spn">Tanzania</span> on
                            February 03, 2024</h4>
                        </div>
                      </div>
                    </div>
                    <h2 class="dash-review-hdr">The car was performing very</h2>
                    <p class="dash-review-para mb-0">I have received my Nissan note in good condition and l would like
                      to
                      thank
                      team Beforward for maintaining our relationship in business thank you. I have received my
                      Nissan...
                    </p>
                  </div>
                </div>

                <div class="card card-review-page mb-3">
                  <div class="card-body">
                    <div class="card-header px-0 review-card-header">
                      <div class="row">
                        <div class="col-4">
                          <img src="{{asset('assets/images/staticPagesAssets/images/car-review.webp')}}" class="dashboard-review-img img-fluid" alt="Car Image">
                        </div>
                        <div class="col-8">
                          <div class="row">
                            <div class="col-12 d-flex justify-content-between mb-2">
                              <h4 class="dash-review-prilfe-label gap-2">
                                <img src="{{asset('assets/images/staticPagesAssets/images/prof-rev.webp')}}" class="dashbaord-rev-mble-prf me-2 " height="24" width="24" alt="">
                                David Jamar
                              </h4>
                              <img src="https://flagcdn.com/pk.svg" class="review-testi-detl-flg" alt="" width="22" height="14">
                            </div>
                            <div class="col-12 d-flex align-items-baseline gap-4 staric-section justify-content-between">
                              <div class="stars-rev d-flex gap-3">
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                              </div>
                              <h2 class="dash-car-name mt-2">Toyota Passo</h2>
                            </div>
                        
                          </div>
                        </div>
                        <div class="col-12 country-review-name">
                          <h4 class="review-country">Reviewed in <span class="review-country-spn">Tanzania</span> on
                            February 03, 2024</h4>
                        </div>
                      </div>
                    </div>
                    <h2 class="dash-review-hdr">The car was performing very</h2>
                    <p class="dash-review-para mb-0">I have received my Nissan note in good condition and l would like
                      to
                      thank
                      team Beforward for maintaining our relationship in business thank you. I have received my
                      Nissan...
                    </p>
                  </div>
                </div>

                <div class="card card-review-page mb-3">
                  <div class="card-body">
                    <div class="card-header px-0 review-card-header">
                      <div class="row">
                        <div class="col-4">
                          <img src="{{asset('assets/images/staticPagesAssets/images/car-review.webp')}}" class="dashboard-review-img img-fluid" alt="Car Image">
                        </div>
                        <div class="col-8">
                          <div class="row">
                            <div class="col-12 d-flex justify-content-between mb-2">
                              <h4 class="dash-review-prilfe-label gap-2">
                                <img src="{{asset('assets/images/staticPagesAssets/images/prof-rev.webp')}}" class="dashbaord-rev-mble-prf me-2 " height="24" width="24" alt="">
                                David Jamar
                              </h4>
                              <img src="https://flagcdn.com/pk.svg" class="review-testi-detl-flg" alt="" width="22" height="14">
                            </div>
                            <div class="col-12 d-flex align-items-baseline gap-4 staric-section justify-content-between">
                              <div class="stars-rev d-flex gap-3">
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                                <i class="fa fa-star stars-rev-icon"></i>
                              </div>
                              <h2 class="dash-car-name mt-2">Toyota Passo</h2>
                            </div>
                            
                          </div>
                        </div>
                        <div class="col-12 country-review-name">
                          <h4 class="review-country">Reviewed in <span class="review-country-spn">Tanzania</span> on
                            February 03, 2024</h4>
                        </div>
                      </div>
                    </div>
                    <h2 class="dash-review-hdr">The car was performing very</h2>
                    <p class="dash-review-para mb-0">I have received my Nissan note in good condition and l would like
                      to
                      thank
                      team Beforward for maintaining our relationship in business thank you. I have received my
                      Nissan...
                    </p>
                  </div>
                </div>
               
              </section>
              <ul class="pagination-new mobieReview">
                <li class="li-pagination-new"><a href="#" class="disabled"><i class="fas fa-chevron-left pe-2"></i>
                    Previous</a></li>
                <li class="li-pagination-new"><a href="#" class="active">1</a></li>
                <li class="li-pagination-new"><a href="#">2</a></li>
                <li class="li-pagination-new"><a href="#">3</a></li>
                <li class="li-pagination-new"><a href="#">4</a></li>
                <li class="li-pagination-new"><a href="#">5</a></li>
                <li class="page-next-texture"><label href="#">Next Page<i class="fas fa-chevron-right ps-2"></i></label>
                </li>
              </ul>
            </div>
            <!-- ---------error-img-------- -->
            <div class="error-img d-flex justify-content-center align-items-center erro-imh-main">
              <div class="d-">
                <img src="{{asset('assets/images/staticPagesAssets/images/error-review-page.webp')}}" class="dashboard-error-img" alt="">
                <h2 class="error-img-label">You haven't posted any <br> reviews yet.</h2>
              </div>
            </div>
          </div>
        </div>
      </div>



  

  
  </div></section>


  