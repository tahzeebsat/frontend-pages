<section class="container desktop2-view" id="dashboard_selection">
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
             <li class="selected-option">
              <a href="javascript:;">
                <img src="{{asset('assets/images/staticPagesAssets/icon/hammer-line.webp')}}" alt="profile" class="img-fluid active" loading="lazy" width="22" height="22">
                Auction List</a>
            </li>
           
          </ul>
          <div class="card-sidebar">
            <p>A new way to buy modern and used cars</p>
            <button class="logout-sidebar"><img src="assets/images/common/icons/logout-icon.svg" alt=""> Logout</button>
          </div>
        </div>
      </div>

      <div class="dash-itemd-5 pe-0 overflow-auto" id="aucion_listing_user">
        <!-- Tabs -->
        <div class="tabs-auction-list">
          <a href="javascript:;" class="active">
            Pending 
          </a>
          <a href="javascript:;">
            Won 
          </a>
          <a href="javascript:;">
            Lost 
          </a>
        </div>
        <div class="overflow-auto">
        <!-- Heading -->
        <div class="table-auction-headings">
          <div class="auction-item-tab">Image</div>
          <div class="auction-item-tab align-items-start">Car Detail</div>
          <div class="auction-item-tab">Total Price</div>
          <div class="auction-item-tab">My Bid</div>
          <div class="auction-item-tab">Bidding Status</div>
        </div>
        <!-- Dynamic Listing -->
        <div class="auction-listing-pending">
          <div class="pending-item">
            <div class="value-item">
              <img src="https://front-pages.satjapan.info/assets/images/selling/car-1.webp" loading="lazy" height="102" width="177" class="img-fluid car-img-auct" alt="sat icon">
            </div>
            <div class="value-item align-items-start">
              <span class="title">2019 Toyota Land Cruiser Wagon</span>
            </div>
            <div class="value-item align-items-start">
              <span class="price">$9,845</span>
            </div>
            <div class="value-item align-items-start">
              <span class="price">$9,845</span>
            </div>
            <div class="value-item">
                <span class="status-lost">Lost</span>
            </div>
          </div>
        </div>

      

        </div>



      </div>



   

  
  </div>
</section>

<section class="myBidMobile mobile2-view">
    <div class="container">
        <!-- tabs -->
        <div class="row">
          <div class="col-12">
            <div class="auctlist-tabs-m">
              <a href="javascript:;" class="active">Pending</a>
              <a href="javascript:;" class="">Won</a>
              <a href="javascript:;" class="">Lost</a>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card-listing mt-2 pt-1">
            <div class="mob-auct-list">
              <img src="https://front-pages.satjapan.info/assets/images/selling/car-1.webp" loading="lazy" height="96" width="137" class="img-fluid car-img-auctm" alt="sat icon">
              <div class="mo-card">
                <h2 class="title">2017 Toyota C-HR</h2>
                <p class="d-flex justify-content-between align-items-center mb-0">
                  <span class="price">Total Price:</span>
                  <span class="amount">$9,826</span>
                </p>
                <p class="d-flex justify-content-between align-items-center mb-0">
                  <span class="price">My Bid:</span>
                  <span class="amount">$9,826</span>
                </p>
                <p class="d-flex justify-content-between align-items-center mb-0">
                  <span class="price">Deposit Status:</span>
                  <span class="status-paid-m">Paid</span>
                  <span class="request-time-iu d-none">Under Review</span>
                </p>
                <p class="d-flex justify-content-between align-items-center mb-0">
                  <span class="price">Time Left:</span>
                  <span class="timer-m">23h:02m:24s</span>
                </p>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between gap-2">
              <button class="upload-m w-100" data-bs-toggle="modal" data-bs-target="#upload_proofimage">Upload Proof</button>
            </div>
          </div>
          <div class="card-listing mt-2 pt-1">
            <div class="mob-auct-list">
              <img src="https://front-pages.satjapan.info/assets/images/selling/car-1.webp" loading="lazy" height="96" width="137" class="img-fluid car-img-auctm" alt="sat icon">
              <div class="mo-card">
                <h2 class="title">2017 Toyota C-HR</h2>
                <p class="d-flex justify-content-between align-items-center mb-0">
                  <span class="price">Total Price:</span>
                  <span class="amount">$9,826</span>
                </p>
                <p class="d-flex justify-content-between align-items-center mb-0">
                  <span class="price">My Bid:</span>
                  <span class="amount">$9,826</span>
                </p>
                <p class="d-flex justify-content-between align-items-center mb-0">
                  <span class="price">Deposit Status:</span>
                  <span class="amount  d-none">Pending</span>
                  <span class="request-time-iu">Under Review</span>
                  <span class="d-none status-paid-m">Paid</span>
                </p>
                <p class="d-flex justify-content-between align-items-center mb-0">
                  <span class="price">Time Left:</span>
                  <span class="timer-m">23h:02m:24s</span>
                </p>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between gap-2">
              <button class="upload-m w-100" data-bs-toggle="modal" data-bs-target="#upload_proofimage">Upload Proof</button>
            </div>
          </div>
          <div class="card-listing mt-2 pt-1">
            <div class="mob-auct-list">
              <img src="https://front-pages.satjapan.info/assets/images/selling/car-1.webp" loading="lazy" height="96" width="137" class="img-fluid car-img-auctm" alt="sat icon">
              <div class="mo-card">
                <h2 class="title">2017 Toyota C-HR</h2>
                <p class="d-flex justify-content-between align-items-center mb-0">
                  <span class="price">Total Price:</span>
                  <span class="amount">$9,826</span>
                </p>
                <p class="d-flex justify-content-between align-items-center mb-0">
                  <span class="price">My Bid:</span>
                  <span class="amount">$9,826</span>
                </p>
                <p class="d-flex justify-content-between align-items-center mb-0">
                  <span class="price">Deposit Status:</span>
                  <span class="amount  d-none">Pending</span>
                  <span class="request-time-iu">Under Review</span>
                  <span class="d-none status-paid-m">Paid</span>
                </p>
                <p class="d-flex justify-content-between align-items-center mb-0">
                  <span class="timer-m">Time Overdue:</span>
                  <span class="request-time-iu" data-bs-toggle="modal" data-bs-target="#request_timemore">Request for Time</span>
                </p>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between gap-2">
              <button class="upload-m w-100" data-bs-toggle="modal" data-bs-target="#upload_proofimage">Upload Proof</button>
            </div>
          </div>
        </div>
      </div>
      </div>
</section>

  