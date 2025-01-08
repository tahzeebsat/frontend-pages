<section class="sat-pro-member-reson-desktop">
    <div class="satProMemberReason">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center">
                    <img src="{{asset('assets/images/staticPagesAssets/icon/satpro-arrow-left-b.webp')}}" class="me-2" height="24" width="24" alt="sat icon">
                    <span class="ms-1 title-cancel-member">Manage Membership</span>
                  </div>

                  <div class="col-12">
                    <h2 class="cancel-rtitle">Why do you want to end your membership?</h2>
                    <p class="cancel-rpara">We'll use this to improve SAT Pro.</p>
                  </div>

                  <div class="col-12">
                    <div class="p-0 border-0 mb-5" id="collapseSatmemberEnd">
                      <div class="end-memebership-card">
                        <div class="end-member-list-select">
                          <ul class="p-0">
                            <li class="d-flex align-items-center justify-content-between mb-2">
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
                            <li class="d-flex align-items-center justify-content-between mb-2">
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
                            <li class="d-flex align-items-center justify-content-between mb-2">
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
                            <li class="d-flex align-items-center justify-content-between mb-2">
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
                            <li class="d-flex align-items-center justify-content-between mb-2">
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
            </div>
        </div>
    </div>
</section>