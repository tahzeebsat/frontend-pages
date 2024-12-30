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
            <li class="selected-option">
              <a href="javascript:;">
                <img src="{{asset('assets/images/staticPagesAssets/icon/star-smile-line.webp')}}" alt="profile" class="img-fluid active" loading="lazy" width="22" height="22">
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

      <div class="dash-itemd-4 overflow-auto-cust">
        <div class="col-12">
          <h1 class="title--page">Loyalty Points</h1>
        </div>
        <ul class="nav nav-tabs tab-nav-link-ul border-0" role="tablist">
          <li class="nav-item tab-nav-link-itemd" role="presentation">
            <a class="nav-link tab-nav-link active" id="loyalty-points-valid-tab" data-bs-toggle="tab" href="#loyalty-points-valid" role="tab" aria-controls="loyalty-points-valid" aria-selected="true">Valid</a>
          </li>
          <li class="nav-item tab-nav-link-itemd" role="presentation">
            <a class="nav-link tab-nav-link" id="loyalty-points-used-tab" data-bs-toggle="tab" href="#loyalty-points-used" role="tab" aria-controls="loyalty-points-used" aria-selected="false" tabindex="-1">Used</a>
          </li>
        </ul>
        <div class="tab-content overflow-auto-cust">
          <div class="tab-pane fade active show" id="loyalty-points-valid" role="tabpanel" aria-labelledby="loyalty-points-valid-tab">
            <div>
              <div class="valid-item loyb-12 heading">
                <div class="heading-item max-30">Loyalty Code</div>
                <div class="heading-item max-30">Loyalty Points</div>
                <div class="heading-item max-30">Amount</div>
                <div class="heading-item max-30">Expiry Date</div>
              </div>

              <div class="valid-item loyb-12 item">
                <div class="item-value max-30">Sat-13242</div>
                <div class="item-value max-30">200 Points</div>
                <div class="item-value max-30">$200</div>
                <div class="item-value max-30">31st Jan</div>
              </div>

              <div class="valid-item loyb-12 item">
                <div class="item-value max-30">Sat-13242</div>
                <div class="item-value max-30">200 Points</div>
                <div class="item-value max-30">$200</div>
                <div class="item-value max-30">31st Jan</div>
              </div>
            </div>
            <!-- ---------error-img-------- -->
            <div class="error-img d-flex justify-content-center align-items-center erro-imh-main">
              <div class="mt-5 error-img-inner">
                  <img src="{{asset('assets/images/staticPagesAssets/images/error-loyalty.webp')}}" class="dashboard-error-img" alt="">
                  <h2 class="error-img-label">You have not used an loyalty <br> points yet</h2>
              </div>
          </div>
          </div>
          <div class="tab-pane fade" id="loyalty-points-used" role="tabpanel" aria-labelledby="loyalty-points-used-tab">
            <div>
              <div class="valid-item loyb-12 heading">
                <div class="heading-item max-20">Loyalty Code</div>
                <div class="heading-item max-20">Loyalty Points</div>
                <div class="heading-item max-20">Amount</div>
                <div class="heading-item max-20">Order ID</div>
                <div class="heading-item max-20">Used on</div>
              </div>

              <div class="valid-item loyb-12 item">
                <div class="item-value max-20">Sat-13242</div>
                <div class="item-value max-20">200 Points</div>
                <div class="item-value max-20">$200</div>
                <div class="item-value max-20">46465654</div>
                <div class="item-value max-20">31st Jan</div>
              </div>

              <div class="valid-item loyb-12 item">
                <div class="item-value max-20">Sat-13242</div>
                <div class="item-value max-20">200 Points</div>
                <div class="item-value max-20">$200</div>
                <div class="item-value max-20">46465654</div>
                <div class="item-value max-20">31st Jan</div>
              </div>
            </div>
            <!-- ---------error-img-------- -->
                <div class="error-img d-flex justify-content-center align-items-center erro-imh-main">
                    <div class="mt-5 error-img-inner">
                        <img src="{{asset('assets/images/staticPagesAssets/images/error-loyalty.webp')}}" class="dashboard-error-img" alt="">
                        <h2 class="error-img-label">You haven't used any loyalty<br> points yet </h2>
                    </div>
                </div>
          </div>
        </div>
      </div>



   

  
  </div></section>


  