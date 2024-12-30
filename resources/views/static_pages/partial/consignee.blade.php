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
                <li class="selected-option">
                  <a href="javascript:;">
                    <img src="{{asset('assets/images/staticPagesAssets/icon/information-line.webp')}}" alt="profile" class="img-fluid active" loading="lazy" width="22" height="22">
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
      <div class="dash-item-3 d-none d-md-block">
        <form>
            <div class="row mt-4">
               
                <h2 class="user-dash-board-top-hdr mb-24">Consignee Information <span class="inquiry-hdr-spn">(Required)</span></h2>
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="mb-24">
                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6">
                            Name </label>
                        <input type="text" class="form-control comman-input-field rounded-0" id="ConsigneeFormControlInput" placeholder="Name">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="mb-24">
                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6">
                            Country</label>
                        <select class="form-select comman-consigne-input-slect form-sect-inq" aria-label="Default select example">
                            <option selected="">Select</option>
                            <option value="1" class="form-sect-inq-open">Select</option>
                            <option value="2" class="form-sect-inq-open">Select</option>
                            <option value="3" class="form-sect-inq-open">Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="mb-24">
                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6">
                            State</label>
                        <select class="form-select comman-consigne-input-slect form-sect-inq" aria-label="Default select example">
                            <option selected="">Select</option>
                            <option value="1" class="form-sect-inq-open">Select</option>
                            <option value="2" class="form-sect-inq-open">Select</option>
                            <option value="3" class="form-sect-inq-open">Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="mb-24">
                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6">
                            City </label>
                        <select class="form-select comman-consigne-input-slect form-sect-inq" aria-label="Default select example">
                            <option selected="">Select</option>
                            <option value="1" class="form-sect-inq-open">Select</option>
                            <option value="2" class="form-sect-inq-open">Select</option>
                            <option value="3" class="form-sect-inq-open">Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="mb-24">
                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6 mb-3">
                            Email </label>
                        <input type="email" class="form-control comman-input-field rounded-0" id="ConsigneeFormControlInput" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="mb-24">
                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6 mb-3">
                            Phone </label>
                        <input type="text" class="form-control comman-input-field rounded-0" id="ConsigneeFormControlInput" placeholder="Phone">
                    </div>
                </div>
               
                <div class="col-md-12">
                    <div class="mb-24">
                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6 mb-3">
                            Address </label>
                        <textarea class="form-control comman-input-field-textarea rounded-0" type="text" id="ConsigneeFormControlInput" placeholder="Address" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <h2 class="user-dash-board-top-hdr">Notify Information<span class="inquiry-hdr-spn">
                        (Optional)</span></h2>
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="mb-24">
                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6 mb-3">
                            Name</label>
                        <input type="text" class="form-control comman-input-field rounded-0" id="ConsigneeFormControlInput" placeholder="Name">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="mb-24">
                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6 mb-3">
                            Country</label>
                        <select class="form-select comman-consigne-input-slect form-sect-inq" aria-label="Default select example">
                            <option selected="">Select</option>
                            <option value="1" class="form-sect-inq-open">Select</option>
                            <option value="2" class="form-sect-inq-open">Select</option>
                            <option value="3" class="form-sect-inq-open">Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="mb-24">
                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6 mb-3">
                            State</label>
                        <select class="form-select comman-consigne-input-slect form-sect-inq" aria-label="Default select example">
                            <option selected="">Select</option>
                            <option value="1" class="form-sect-inq-open">Select</option>
                            <option value="2" class="form-sect-inq-open">Select</option>
                            <option value="3" class="form-sect-inq-open">Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="mb-24">
                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6">
                            City</label>
                        <select class="form-select comman-consigne-input-slect form-sect-inq" aria-label="Default select example">
                            <option selected="">Select</option>
                            <option value="1" class="form-sect-inq-open">Select</option>
                            <option value="2" class="form-sect-inq-open">Select</option>
                            <option value="3" class="form-sect-inq-open">Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="mb-24">
                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6">
                            Email</label>
                        <input type="email" class="form-control comman-input-field rounded-0" id="ConsigneeFormControlInput" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="mb-24">
                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6">
                            Phone</label>
                        <input type="phone" class="form-control comman-input-field rounded-0" id="ConsigneeFormControlInput" placeholder="Phone">
                    </div>
                </div>
                
                <div class="col-md-12 mb-3">
                    <div class="mb-24">
                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6">
                            Address</label>
                        <textarea class="form-control comman-input-field-textarea rounded-0" type="text" id="ConsigneeFormControlInput" placeholder="Address" rows="3"></textarea>
                    </div>
                </div>
                <div class="col d-flex justify-content-center align-content-center">
                    <button type="submit" class="consignee-submit-btn">Update Information</button>
                </div>
            </div>
        </form>
    </div>



    {{-- ================= Mobile View =====================--}}
    <div class="auction-dash-itemd-3 d-md-none">
        <div class="">
            <div class="container">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs auction-mob-nav-tab" id="myTab" role="tablist">
                    <li class="nav-item auction-mob-nav-items" role="presentation">
                        <a class="nav-link auction-mob-nav-link active" id="consignee-tab" data-bs-toggle="tab" href="#consignee" role="tab" aria-controls="consignee" aria-selected="true">Consignee</a>
                    </li>
                    <li class="nav-item auction-mob-nav-items" role="presentation">
                        <a class="nav-link auction-mob-nav-link" id="notify-tab" data-bs-toggle="tab" href="#notify" role="tab" aria-controls="notify" aria-selected="false" tabindex="-1">Notify</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content mt-3">
                    <div class="tab-pane fade active show" id="consignee" role="tabpanel" aria-labelledby="consignee-tab">
                        <form>
                            <div class="row ">
                              
                                <h2 class="user-dash-board-top-hdr mb-24">Consignee Information <span class="inquiry-hdr-spn">(Required)</span></h2>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="mb-24">
                                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6">
                                            Name </label>
                                        <input type="text" class="form-control comman-input-field rounded-0" id="ConsigneeFormControlInput" placeholder=" Name">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="mb-24">
                                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6">
                                            Country</label>
                                        <select class="form-select comman-consigne-input-slect form-sect-inq" aria-label="Default select example">
                                            <option selected="">Select</option>
                                            <option value="1" class="form-sect-inq-open">Select</option>
                                            <option value="2" class="form-sect-inq-open">Select</option>
                                            <option value="3" class="form-sect-inq-open">Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="mb-24">
                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6">
                            State</label>
                        <select class="form-select comman-consigne-input-slect form-sect-inq" aria-label="Default select example">
                            <option selected="">Select</option>
                            <option value="1" class="form-sect-inq-open">Select</option>
                            <option value="2" class="form-sect-inq-open">Select</option>
                            <option value="3" class="form-sect-inq-open">Select</option>
                        </select>
                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="mb-24">
                                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6">
                                            City </label>
                                        <select class="form-select comman-consigne-input-slect form-sect-inq" aria-label="Default select example">
                                            <option selected="">Select</option>
                                            <option value="1" class="form-sect-inq-open">Select</option>
                                            <option value="2" class="form-sect-inq-open">Select</option>
                                            <option value="3" class="form-sect-inq-open">Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="mb-24">
                                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6">
                                            Email </label>
                                        <input type="email" class="form-control comman-input-field rounded-0" id="ConsigneeFormControlInput" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="mb-24">
                                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6">
                                            Phone </label>
                                        <input type="email" class="form-control comman-input-field rounded-0" id="ConsigneeFormControlInput" placeholder="Phone">
                                    </div>
                                </div>
                               
                                <div class="col-md-12 mb-3">
                                    <div class="mb-24">
                                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6">
                                         Your Address </label>
                                        <textarea class="form-control comman-input-field-textarea rounded-0" type="text" id="ConsigneeFormControlInput" placeholder="Your Address" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="notify" role="tabpanel" aria-labelledby="notify-tab">
                        <form>
                            <div class="row ">
                               
                                <h2 class="user-dash-board-top-hdr">Notify Information<span class="inquiry-hdr-spn">
                                        (Optional)</span></h2>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="mb-24">
                                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6">
                                            Name</label>
                                        <input type="text" class="form-control comman-input-field rounded-0" id="ConsigneeFormControlInput" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="mb-24">
                                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6">
                                            Country</label>
                                        <select class="form-select comman-consigne-input-slect form-sect-inq" aria-label="Default select example">
                                            <option selected="">Select</option>
                                            <option value="1" class="form-sect-inq-open">Select</option>
                                            <option value="2" class="form-sect-inq-open">Select</option>
                                            <option value="3" class="form-sect-inq-open">Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="mb-24">
                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6">
                            State</label>
                        <select class="form-select comman-consigne-input-slect form-sect-inq" aria-label="Default select example">
                            <option selected="">Select</option>
                            <option value="1" class="form-sect-inq-open">Select</option>
                            <option value="2" class="form-sect-inq-open">Select</option>
                            <option value="3" class="form-sect-inq-open">Select</option>
                        </select>
                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="mb-24">
                                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6">
                                            City</label>
                                        <select class="form-select comman-consigne-input-slect form-sect-inq" aria-label="Default select example">
                                            <option selected="">Select</option>
                                            <option value="1" class="form-sect-inq-open">Select</option>
                                            <option value="2" class="form-sect-inq-open">Select</option>
                                            <option value="3" class="form-sect-inq-open">Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="mb-24">
                                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6">
                                            Email</label>
                                        <input type="email" class="form-control comman-input-field rounded-0" id="ConsigneeFormControlInput" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="mb-24">
                                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6">
                                            Phone</label>
                                        <input type="email" class="form-control comman-input-field rounded-0" id="ConsigneeFormControlInput" placeholder="Phone">
                                    </div>
                                </div>
                                
                                <div class="col-md-12 mb-3">
                                    <div class="mb-24">
                                        <label for="ConsigneeFormControlInput" class="form-label form-label-consignee mb-6">
                                            Your Address </label>
                                        <textarea class="form-control comman-input-field-textarea rounded-0" type="text" id="ConsigneeFormControlInput" placeholder="Your Address" rows="3"></textarea>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="col d-flex justify-content-center align-content-center">
                        <button type="submit" class="consignee-submit-btn">Update Information</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
  </div></section>


  