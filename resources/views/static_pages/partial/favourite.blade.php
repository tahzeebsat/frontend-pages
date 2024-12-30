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
                <li>
                  <a href="javascript:;">
                    <img src="{{asset('assets/images/staticPagesAssets/icon/calendar-event-line.webp')}}" alt="profile" class="img-fluid" loading="lazy" width="22" height="22">
                    My Bookings</a>
                </li>
                <li class="selected-option">
                  <a href="javascript:;">
                    <img src="{{asset('assets/images/staticPagesAssets/icon/heart-line.webp')}}" alt="profile" class="img-fluid active" loading="lazy" width="22" height="22">
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
     
      <div class="fav-item-3 d-grid align-items-center">
        <div class="favorite-destop  d-none d-md-block overflow-auto">
            <h2 class="user-dash-board-top-sub-hdr mb-3">This section shows the cars you added to your favorites
                list. We will notify you of the change in the availability status of these cars and the
                discounts offered on them.</h2>
                    <div class="fav-card">
                        <img src="https://images.unsplash.com/photo-1494697536454-6f39e2cc972d?q=80&amp;w=1471&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" height="113" width="160" loading="lazy" alt="sat cars">
                        <div class="specs-fav-car ms-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h2 class="mb-0">Audi A3 2016</h2>
                                <img src="{{asset('assets/images/staticPagesAssets/icon/delete-bin-fav.webp')}}" class="cursor-pointer" loading="lazy" alt="delete icon" height="20" width="20" data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="top" data-bs-title="Remove from Favorites.">
                            </div>
                            <div class="new-cars-specs py-1">
                                <div class="specs-item-new">
                                    <h2 class="title cmn-stl mb-0">Year</h2>
                                    <p class="spec cmn-stl mb-0">2010/6</p>
                                </div>
                                <div class="specs-item-new">
                                    <h2 class="title cmn-stl mb-0">Engine</h2>
                                    <p class="spec cmn-stl mb-0">660 cc</p>
                                </div>
                                <div class="specs-item-new">
                                    <h2 class="title cmn-stl mb-0">Mileage</h2>
                                    <p class="spec cmn-stl mb-0">73666 km</p>
                                </div>
                                <div class="specs-item-new">
                                    <h2 class="title cmn-stl mb-0">Transmission</h2>
                                    <p class="spec cmn-stl mb-0">MT</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="fav-bok-refer-car">Ref No: CFJ9317969</span>
                                <button class="fav-view-detal-btn-bkng">View Details</button>
                            </div>
                        </div>
                    </div>
        </div>
        <!-- --------favorite-mobile-------->
        <div class="favorite-mobile d-md-none">
            <h4 class="favorite-header">This section shows the cars you added to your favorites list. We will
                notify you of the change in the availability status of these cars and the discounts offered on
                them.</h4>
            <div class="favorite-item mb-3">
                <div class="favorite-grid">
                    <div class="image-container">
                        <img src="{{asset('assets/images/staticPagesAssets/images/favorite-body-img.webp')}}" class="favorite-mobile-img" alt="Favorite Car Image">
                    </div>
                    <div class="details-container-fav">
                        <div class="action-icons d-flex gap-3 justify-content-between">
                            <h2 class="favorite-mobile-hdr">Audi A3 2016</h2>
                            <div class="d-flex gap-3 pe-3">
                                <i class="fa fa-share-alt fav-top-icons" aria-hidden="true"></i>
                                <img src="{{asset('assets/images/staticPagesAssets/icon/delete-bin-fav.webp')}}" class="fav-top-icons" alt="" width="16" height="16">
                            </div>
                        </div>
                        <h2 class="favorite-mobile-sub-hdr">2010/6 | 660 cc | 12,380 km | MT</h2>
                        <h2 class="favorite-mobile-port">Ref No: CFJ9317969</h2>
                        <div class="track-order-section d-flex align-items-center justify-content-between">
                            <button type="button" class="track-order-button">View Details</button>

                        </div>
                    </div>
                </div>
            </div>
           
            <div class="favorite-item mb-3">
                <div class="favorite-grid">
                    <div class="image-container">
                        <img src="{{asset('assets/images/staticPagesAssets/images/favorite-body-img.webp')}}" class="favorite-mobile-img" alt="Favorite Car Image">
                    </div>
                    <div class="details-container-fav">
                        <div class="action-icons d-flex gap-3 justify-content-between">
                            <h2 class="favorite-mobile-hdr">Audi A3 2016</h2>
                            <div class="d-flex gap-3 pe-3">
                                <i class="fa fa-share-alt fav-top-icons" aria-hidden="true"></i>
                                <img src="{{asset('assets/images/staticPagesAssets/icon/delete-bin-fav.webp')}}" class="fav-top-icons" alt="" width="16" height="16">
                            </div>
                        </div>
                        <h2 class="favorite-mobile-sub-hdr">2010/6 | 660 cc | 12,380 km | MT</h2>
                        <h2 class="favorite-mobile-port">Ref No: CFJ9317969</h2>
                        <div class="track-order-section d-flex align-items-center justify-content-between">
                            <button type="button" class="track-order-button">View Details</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="favorite-item mb-3">
                <div class="favorite-grid">
                    <div class="image-container">
                        <img src="{{asset('assets/images/staticPagesAssets/images/favorite-body-img.webp')}}" class="favorite-mobile-img" alt="Favorite Car Image">
                    </div>
                    <div class="details-container-fav">
                        <div class="action-icons d-flex gap-3 justify-content-between">
                            <h2 class="favorite-mobile-hdr">Audi A3 2016</h2>
                            <div class="d-flex gap-3 pe-3">
                                <i class="fa fa-share-alt fav-top-icons" aria-hidden="true"></i>
                                <img src="{{asset('assets/images/staticPagesAssets/icon/delete-bin-fav.webp')}}" class="fav-top-icons" alt="" width="16" height="16">
                            </div>
                        </div>
                        <h2 class="favorite-mobile-sub-hdr">2010/6 | 660 cc | 12,380 km | MT</h2>
                        <h2 class="favorite-mobile-port">Ref No: CFJ9317969</h2>
                        <div class="track-order-section d-flex align-items-center justify-content-between">
                            <button type="button" class="track-order-button">View Details</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="favorite-item mb-3">
                <div class="favorite-grid">
                    <div class="image-container">
                        <img src="{{asset('assets/images/staticPagesAssets/images/favorite-body-img.webp')}}" class="favorite-mobile-img" alt="Favorite Car Image">
                    </div>
                    <div class="details-container-fav">
                        <div class="action-icons d-flex gap-3 justify-content-between">
                            <h2 class="favorite-mobile-hdr">Audi A3 2016</h2>
                            <div class="d-flex gap-3 pe-3">
                                <i class="fa fa-share-alt fav-top-icons" aria-hidden="true"></i>
                                <img src="{{asset('assets/images/staticPagesAssets/icon/delete-bin-fav.webp')}}" class="fav-top-icons" alt="" width="16" height="16">
                            </div>
                        </div>
                        <h2 class="favorite-mobile-sub-hdr">2010/6 | 660 cc | 12,380 km | MT</h2>
                        <h2 class="favorite-mobile-port">Ref No: CFJ9317969</h2>
                        <div class="track-order-section d-flex align-items-center justify-content-between">
                            <button type="button" class="track-order-button">View Details</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- pagination -->
        <ul class="pagination-new">
            <li class="li-pagination-new"><a href="javascript:;" class="disabled"><i class="fas fa-chevron-left pe-2"></i>
                Previous</a></li>
            <li class="li-pagination-new"><a href="javascript:;" class="active">1</a></li>
            <li class="li-pagination-new"><a href="javascript:;">2</a></li>
            <li class="li-pagination-new"><a href="javascript:;">3</a></li>
            <li class="li-pagination-new"><a href="javascript:;">4</a></li>
            <li class="li-pagination-new"><a href="javascript:;">5</a></li>
            <li class="page-next-texture"><label href="javascript:;">Next Page<i class="fas fa-chevron-right ps-2"></i></label>
            </li>
          </ul>
        <!-- ---------error-img-------- -->
        <div class="error-img d-flex justify-content-center align-items-center">
            <div class="mt-5 error-img-inner">
                <img src="{{asset('assets/images/staticPagesAssets/images/error-favourite.webp')}}" class="dashboard-error-img" alt="">
                <h2 class="error-img-label">You currently have no cars added <br> to your favorites.</h2>
            </div>
        </div>
    </div>

  
  </div></section>