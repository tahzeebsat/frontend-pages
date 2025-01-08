<section class="sat-membership-desktop">
    <div class="satMembership">
        <div class="container my-5">
            <div class="row">
                <div class="col-md-7 col-sm-12 col-12 order-md-1 order-sm-2 order-2">
                  <h2 class="member-title">Your Membership</h2>
                  <p class="memb-para-title">
                    The following are the details of your SAT Pro membership
                  </p>
        
                  <div class="sat-pro-member-sec">
                    <ul class="ps-0 mb-0">
                      <li class="d-flex align-items-center gap-2 p-2 mb-2">
                        <img src="{{asset('assets/images/staticPagesAssets/icon/b-logo.webp')}}" alt="icon" height="24" width="24">
                        <div class="d-flex flex-column">
                          <span class="hed"> SAT Pro </span>
                          <span class="para"> Renews on Dec, 15 2024 </span>
                        </div>
                      </li>
                      <li class="d-flex align-items-center gap-2 p-2 mb-2">
                        <img src="{{asset('assets/images/staticPagesAssets/icon/b-calendar.webp')}}" alt="icon" height="24" width="24">
                        <div class="d-flex flex-column">
                          <span class="hed"> Current plan </span>
                          <span class="para">
                            $9.99/month. Save up to 600$ per order with SAT Pro.
                          </span>
                        </div>
                      </li>
                    </ul>
                  </div>
        
                  <h3 class="head-memeber">Payment details</h3>
                  <a href="/" class="d-flex justify-content-between align-items-center gap-2 sec-sub sat-pro-member-sec">
                    <div class="d-flex align-items-center gap-2">
                      <img src="{{asset('assets/images/staticPagesAssets/icon/b-bank.webp')}}" height="24" width="24" alt="icon">
                      <div class="ms-1">
                        <h3 class="hed">Payment Methord</h3>
                        <p class="para mb-0">Hafiz Muhammad Gull Khan **** **** 5124</p>
                      </div>
                    </div>
                    <img src="{{asset('assets/images/staticPagesAssets/icon/satpro-arrow-right.webp')}}" height="24" width="24" alt="sat icon">
                  </a>
                  <!-- dropdown -->
                  <h3 class="head-memeber mt-2 pt-1">Manage Subscription</h3>
                  <div class="drp-sat-memeber-end user-select-none sat-pro-member-sec" data-bs-toggle="collapse" href="#collapseSatmemberEnd" role="button" aria-expanded="false" aria-controls="collapseSatmemberEnd">
                    <div class="d-flex gap-2 align-items-center">
                      <img src="{{asset('assets/images/staticPagesAssets/icon/b-close.webp')}}" height="24" width="24" loading="lazy" alt="sat icon">
                      <div>
                          <span class="hed d-block mb-0"> End membership </span>
                          <span class="d-block para">Tell us why you want to end your membership?</span>
                    </div>
                    </div>
                    <img src="{{asset('assets/images/staticPagesAssets/icon/satpro-arrow-right.webp')}}" height="24" width="24" class="rotate-360" loading="lazy" alt="sat icon">
                  </div>
                  <div class="collapse" id="collapseSatmemberEnd">
                    <div class="end-memebership-card">
                      <div class="end-member-list-select">
                        <ul>
                          <li class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                              <img src="{{asset('assets/images/staticPagesAssets/icon/money-b-satpro.webp')}}" loading="lazy" height="18" width="18" alt="sat icon">
                              <span>Not saving enough</span>
                            </div>
                            <input class="form-check-input shadow-none" type="radio" name="reason" onclick="toggleVisibility(this, 'not_saving_enough')">
                          </li>
                          <div class="exp-div" id="not_saving_enough" style="display: none">
                            <h3 class="exp">Explain Reason</h3>
                            <textarea class="form-control" placeholder="Type your reason"></textarea>
                          </div>
                          <li class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                              <img src="{{asset('assets/images/staticPagesAssets/icon/car-line.webp')}}" loading="lazy" height="18" width="18" alt="sat icon">
                              <span>Issues with my Orders</span>
                            </div>
                            <input class="form-check-input shadow-none" type="radio" name="reason" onclick="toggleVisibility(this, 'issue_with_my_orders')">
                          </li>
                          <div class="exp-div" id="issue_with_my_orders" style="display: none">
                            <h3 class="exp">Explain Reason</h3>
                            <textarea class="form-control" placeholder="Type your reason"></textarea>
                          </div>
                          <li class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                              <img src="{{asset('assets/images/staticPagesAssets/icon/gift-b-satpr.webp')}}" loading="lazy" height="18" width="18" alt="sat icon">
                              <span>Not Satisfied with SAT benefits</span>
                            </div>
                            <input class="form-check-input shadow-none" type="radio" name="reason" onclick="toggleVisibility(this, 'not_satisfied_benefits')">
                          </li>
                          <div class="exp-div" id="not_satisfied_benefits" style="display: none">
                            <h3 class="exp">Explain Reason</h3>
                            <textarea class="form-control" placeholder="Type your reason"></textarea>
                          </div>
                          <li class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                              <img src="{{asset('assets/images/staticPagesAssets/icon/time-b-satpro.webp')}}" loading="lazy" height="18" width="18" alt="sat icon">
                              <span>Want to take break</span>
                            </div>
                            <input class="form-check-input shadow-none" type="radio" name="reason" onclick="toggleVisibility(this, 'want_to_take_break')">
                          </li>
                          <div class="exp-div" id="want_to_take_break" style="display: none">
                            <h3 class="exp">Explain Reason</h3>
                            <textarea class="form-control" placeholder="Type your reason"></textarea>
                          </div>
                          <li class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                              <img src="{{asset('assets/images/staticPagesAssets/icon/question-b-prosat.webp')}}" loading="lazy" height="18" width="18" alt="sat icon">
                              <span>Something else</span>
                            </div>
                            <input class="form-check-input shadow-none" type="radio" name="reason" onclick="toggleVisibility(this, 'somthing_else')">
                          </li>
                          <div class="exp-div" id="somthing_else" style="display: none">
                            <h3 class="exp">Explain Reason</h3>
                            <textarea class="form-control" placeholder="Type your reason"></textarea>
                          </div>
                        </ul>
                      </div>
                      <div class="row mt-4">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <button class="exp-end">Submit</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 col-sm-12 col-12 order-md-2 order-sm-1 order-1 d-flex flex-column align-items-md-end align-items-center mt-md-0 mt-sm-4 mt-4">
                  <!-- 1st -->
                  <div class="car-total-saving">
                    <div class="sec-1 position-relative">
                      <h2 class="pro-sat-t">You're a SAT Pro!</h2>
                      <p class="pro-sat-p">
                        Get more for less with PRO! Earn more SAT points and enjoy
                        exclusive discounts on all car services with every order.
                      </p>
                      <div class="total-charges-text">
                        <img src="{{asset('assets/images/staticPagesAssets/images/badge-logo.webp')}}" height="52" width="56" class="object-fit-contain" loading="lazy" alt="sat logo pro">
                        <div class="member-points">
                          <span>Total Savings from SAT PRO </span>
                          <span>$750</span>
                        </div>
                      </div>
                    </div>
                    <div class="sec-2"></div>
                  </div>
                  <!-- 2nd -->
                  <div class="car-total-saving">
                    <div class="sec-1 position-relative">
                      <h2 class="pro-sat-t">You're a SAT Pro!</h2>
                      <p class="pro-sat-p">
                        Get more for less with PRO! Earn more SAT points and enjoy
                        exclusive discounts on all car services with every order.
                      </p>
                      <div class="total-charges-text">
                        <img src="{{asset('assets/images/staticPagesAssets/images/badge-logo.webp')}}" height="52" width="56" class="object-fit-contain" loading="lazy" alt="sat logo pro">
                        <div class="member-points">
                          <span>Place an order to start saving </span>
                          <span class="visually-hidden"></span>
                        </div>
                      </div>
                    </div>
                    <div class="sec-2">
                      <div class="d-flex justify-content-center align-items-center mt-4">
                        <button class="plc-order">Place an Order</button>
                      </div>
                    </div>
                  </div>
                
                </div>
              </div>
        </div>
    </div>
</section>