<section class="container" id="dashboard_selection">
    <div class="grid-danshboard">
      <div class="dash-item-1">
        <div class="sticy-items-dashboard">
          <ul>
            <li class="selected-option">
              <a href="javascript:;">
                <img src="{{asset('assets/images/staticPagesAssets/icon/user-6-fill.webp')}}" alt="profile" class="img-fluid active" loading="lazy" width="22" height="22">
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
      
      <div class="main-content">
        <!-- tabs -->
        <div class="tabs-users-selection">
            <span class="active">
                Active (0)
            </span>
            <span>
                Pending (1)
            </span>
            <span>
                Removed (1)
            </span>
        </div>
        <!-- cars detail -->
         <div class="dynamic_listing">
            <div class="item-car">
                <div class="d-flex">
                    <div class="img-container">
                        <img src="{{asset('assets/images/staticPagesAssets/images/testimonial-img-detl.webp')}}" class="img-fluid" loading="lazy" width="275" height="175" alt="">
                    </div>
                    <div class="flex-grow-1 set-specs">
                        <div class="d-flex align-items-center">
                            <div class="tags-sell flex-grow-1">
                                <span class="ad-views"><img src="{{asset('assets/images/staticPagesAssets/icon/eye.webp')}}" loading="lazy" height="18" width="18" alt="sat icon"> 145 Ad Views</span>
                            </div>
                            <div class="location-sell">
                                <span>Location:</span>
                                <span class="d-flex align-items-center gap-2"><img src="{{asset('assets/images/country-flags/PK.webp')}}" class="img-flag-sell" width="27" loading="lazy" height="20" alt="sat icon"> Pakistan / Lahore</span>
                            </div>
                        </div>
                        <div class="title-user-car">
                            <h2 class="name-car">2017 Toyota C-HR</h2>
                        </div>
                        <div class="new-cars-specs">
                            <div class="specs-item-new me-0">
                                <h2 class="title cmn-stl mb-0">Year</h2>
                                <p class="spec cmn-stl mb-0">2010/6</p>
                            </div>
                            <span class="fs-16 fw-bold clr-black-20s mx-3">•</span>
                            <div class="specs-item-new me-0">
                                <h2 class="title cmn-stl mb-0">Engine</h2>
                                <p class="spec cmn-stl mb-0">660 cc</p>
                            </div>
                            <span class="fs-16 fw-bold clr-black-20s mx-3">•</span>
                            <div class="specs-item-new me-0">
                                <h2 class="title cmn-stl mb-0">Mileage</h2>
                                <p class="spec cmn-stl mb-0">12,380 km</p>
                            </div>
                            <span class="fs-16 fw-bold clr-black-20s mx-3">•</span>
                            <div class="specs-item-new">
                                <h2 class="title cmn-stl mb-0">Transmission</h2>
                                <p class="spec cmn-stl mb-0">MT</p>
                            </div>
                        </div>
                        <div class="car-item-price">
                        <span>Car Price:</span><span>$9,826</span>
                        </div>
                        <div class="update-edit">
                            <span>Last Updated: 2 months ago</span>
                            <div class="dropdown edit-remove-card">
                                <img src="{{asset('assets/images/staticPagesAssets/icon/pencil-sellwithsat.webp')}}" class="cursor-pointer dropdown-toggle" loading="lazy" height="26" width="36" alt="sat icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <ul class="dropdown-menu" style="">
                                  <li class="dropdown-item"><a href="/sellwithsat/car-detail-form.html">Edit Ad</a></li>
                                  <li class="dropdown-item">Remove Ad</li>
                                </ul>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-car">
                <div class="d-flex">
                    <div class="img-container">
                        <img src="{{asset('assets/images/staticPagesAssets/images/testimonial-img-detl.webp')}}" class="img-fluid" loading="lazy" width="275" height="175" alt="">
                    </div>
                    <div class="flex-grow-1 set-specs">
                        <div class="d-flex align-items-center">
                            <div class="tags-sell flex-grow-1">
                                <span class="active-ad"><img src="{{asset('assets/images/staticPagesAssets/icon/eye.webp')}}" loading="lazy" height="18" width="18" alt="sat icon">Active Ad</span>
                            </div>
                            <div class="location-sell">
                                <span>Location:</span>
                                <span class="d-flex align-items-center gap-2"><img src="{{asset('assets/images/country-flags/PK.webp')}}" class="img-flag-sell" width="27" loading="lazy" height="20" alt="sat icon"> Pakistan / Lahore</span>
                            </div>
                        </div>
                        <div class="title-user-car">
                            <h2 class="name-car">2017 Toyota C-HR</h2>
                        </div>
                        <div class="new-cars-specs">
                            <div class="specs-item-new me-0">
                                <h2 class="title cmn-stl mb-0">Year</h2>
                                <p class="spec cmn-stl mb-0">2010/6</p>
                            </div>
                            <span class="fs-16 fw-bold clr-black-20s mx-3">•</span>
                            <div class="specs-item-new me-0">
                                <h2 class="title cmn-stl mb-0">Engine</h2>
                                <p class="spec cmn-stl mb-0">660 cc</p>
                            </div>
                            <span class="fs-16 fw-bold clr-black-20s mx-3">•</span>
                            <div class="specs-item-new me-0">
                                <h2 class="title cmn-stl mb-0">Mileage</h2>
                                <p class="spec cmn-stl mb-0">12,380 km</p>
                            </div>
                            <span class="fs-16 fw-bold clr-black-20s mx-3">•</span>
                            <div class="specs-item-new">
                                <h2 class="title cmn-stl mb-0">Transmission</h2>
                                <p class="spec cmn-stl mb-0">MT</p>
                            </div>
                        </div>
                        <div class="car-item-price">
                        <span>Car Price:</span><span>$9,826</span>
                        </div>
                        <div class="update-edit">
                            <span>Last Updated: 2 months ago</span>
                            <img src="{{asset('assets/images/staticPagesAssets/icon/pencil-sellwithsat.webp')}}" class="cursor-pointer dropdown-toggle" loading="lazy" height="26" width="36" alt="sat icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-car">
                <div class="d-flex">
                    <div class="img-container">
                        <img src="{{asset('assets/images/staticPagesAssets/images/testimonial-img-detl.webp')}}" class="img-fluid" loading="lazy" width="275" height="175" alt="">
                    </div>
                    <div class="flex-grow-1 set-specs">
                        <div class="d-flex align-items-center">
                            <div class="tags-sell flex-grow-1">
                                <span class="in-verification"><img src="{{asset('assets/images/staticPagesAssets/icon/eye.webp')}}" loading="lazy" height="18" width="18" alt="sat icon"> In Verification</span>
                            </div>
                            <div class="location-sell">
                                <span>Location:</span>
                                <span class="d-flex align-items-center gap-2"><img src="{{asset('assets/images/country-flags/PK.webp')}}" class="img-flag-sell" width="27" loading="lazy" height="20" alt="sat icon"> Pakistan / Lahore</span>
                            </div>
                        </div>
                        <div class="title-user-car">
                            <h2 class="name-car">2017 Toyota C-HR</h2>
                        </div>
                        <div class="new-cars-specs">
                            <div class="specs-item-new me-0">
                                <h2 class="title cmn-stl mb-0">Year</h2>
                                <p class="spec cmn-stl mb-0">2010/6</p>
                            </div>
                            <span class="fs-16 fw-bold clr-black-20s mx-3">•</span>
                            <div class="specs-item-new me-0">
                                <h2 class="title cmn-stl mb-0">Engine</h2>
                                <p class="spec cmn-stl mb-0">660 cc</p>
                            </div>
                            <span class="fs-16 fw-bold clr-black-20s mx-3">•</span>
                            <div class="specs-item-new me-0">
                                <h2 class="title cmn-stl mb-0">Mileage</h2>
                                <p class="spec cmn-stl mb-0">12,380 km</p>
                            </div>
                            <span class="fs-16 fw-bold clr-black-20s mx-3">•</span>
                            <div class="specs-item-new">
                                <h2 class="title cmn-stl mb-0">Transmission</h2>
                                <p class="spec cmn-stl mb-0">MT</p>
                            </div>
                        </div>
                        <div class="car-item-price">
                        <span>Car Price:</span><span>$9,826</span>
                        </div>
                        <div class="update-edit">
                            <span>Last Updated: 2 months ago</span>
                            <img src="{{asset('assets/images/staticPagesAssets/icon/pencil-sellwithsat.webp')}}" class="cursor-pointer" loading="lazy" height="26" width="36" alt="sat icon">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-car">
                <div class="d-flex">
                    <div class="img-container">
                        <img src="{{asset('assets/images/staticPagesAssets/images/testimonial-img-detl.webp')}}" class="img-fluid" loading="lazy" width="275" height="175" alt="">
                    </div>
                    <div class="flex-grow-1 set-specs">
                        <div class="d-flex align-items-center">
                            <div class="tags-sell flex-grow-1">
                                <span class="in-draft"><img src="{{asset('assets/images/staticPagesAssets/icon/eye.webp')}}" loading="lazy" height="18" width="18" alt="sat icon"> In Draft</span>
                            </div>
                            <div class="location-sell">
                                <span>Location:</span>
                                <span class="d-flex align-items-center gap-2"><img src="{{asset('assets/images/country-flags/PK.webp')}}" class="img-flag-sell" width="27" loading="lazy" height="20" alt="sat icon"> Pakistan / Lahore</span>
                            </div>
                        </div>
                        <div class="title-user-car">
                            <h2 class="name-car">2017 Toyota C-HR</h2>
                        </div>
                        <div class="new-cars-specs">
                            <div class="specs-item-new me-0">
                                <h2 class="title cmn-stl mb-0">Year</h2>
                                <p class="spec cmn-stl mb-0">2010/6</p>
                            </div>
                            <span class="fs-16 fw-bold clr-black-20s mx-3">•</span>
                            <div class="specs-item-new me-0">
                                <h2 class="title cmn-stl mb-0">Engine</h2>
                                <p class="spec cmn-stl mb-0">660 cc</p>
                            </div>
                            <span class="fs-16 fw-bold clr-black-20s mx-3">•</span>
                            <div class="specs-item-new me-0">
                                <h2 class="title cmn-stl mb-0">Mileage</h2>
                                <p class="spec cmn-stl mb-0">12,380 km</p>
                            </div>
                            <span class="fs-16 fw-bold clr-black-20s mx-3">•</span>
                            <div class="specs-item-new">
                                <h2 class="title cmn-stl mb-0">Transmission</h2>
                                <p class="spec cmn-stl mb-0">MT</p>
                            </div>
                        </div>
                        <div class="car-item-price">
                        <span>Car Price:</span><span>$9,826</span>
                        </div>
                        <div class="update-edit">
                            <span>Last Updated: 2 months ago</span>
                            <img src="{{asset('assets/images/staticPagesAssets/icon/pencil-sellwithsat.webp')}}" class="cursor-pointer" loading="lazy" height="26" width="36" alt="sat icon">
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
  </div></section>