<section class="desktop2-view">
    <div class="advance-search-calculator pt-2" role="region" aria-labelledby="search-calculator-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 mb-4 px-2">
                  <div class="border p-3 rounded-2 py-4">
                    <p class="heading">Total Price Calculator</p>
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="mb-3">
                                <label for="country" class="form-label destination">Destination Country</label>
                                <select class="form-select selection-search" aria-label="Default select example">
                                  <option selected>One</option>
                                  <option value="1">Two</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="port" class="form-label destination">Destination Port</label>
                                <select class="form-select selection-search" aria-label="Default select example">
                                  <option selected>One</option>
                                  <option value="1">Two</option>
                                </select>
                            </div>
                            <div class="shipping-method d-flex">
                              <i class="fa fa-info-circle pt-1"></i>
                                <label class="form-check-label px-2">Shipping Method</label>
                                <div class="form-check">
                                    <input class="form-check-input radio-custom" type="radio" name="shippingMethod" id="methodRORO" value="RORO">
                                    <label class="form-check-label radio-custom-label" for="methodRORO">RORO</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input radio-custom" type="radio" name="shippingMethod" id="methodContainer" value="Container">
                                    <label class="form-check-label radio-custom-label" for="methodContainer">Container</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="shipping-details d-flex justify-content-around">
                             <div class="info d-flex align-items-center">
                              <i class="fa fa-info-circle pt-1"></i>
                              <label class="form-check-label px-1">Insurance</label>
                             </div>
                                <div class="form-check">
                                    <input class="form-check-input radio-custom" type="radio" name="insurance" id="insuranceYes" value="yes">
                                    <label class="form-check-label radio-custom-label" for="insuranceYes">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input radio-custom" type="radio" name="insurance" id="insuranceNo" value="no">
                                    <label class="form-check-label radio-custom-label" for="insuranceNo">No</label>
                                </div>
                            </div>
                            <div class="shipping-details d-flex justify-content-around">
                             <div class="info d-flex align-items-center">
                              <i class="fa fa-info-circle pt-1"></i>
                              <label class="form-check-label px-1">Certificate</label>
                             </div>
                                <div class="form-check">
                                    <input class="form-check-input radio-custom" type="radio" name="certificate" id="certificateYes" value="yes">
                                    <label class="form-check-label radio-custom-label" for="certificateYes">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input radio-custom" type="radio" name="certificate" id="certificateNo" value="no">
                                    <label class="form-check-label radio-custom-label" for="certificateNo">No</label>
                                </div>
                            </div>
                            <div class="shipping-details d-flex justify-content-around">
                             <div class="info d-flex align-items-center">
                              <i class="fa fa-info-circle pt-1"></i>
                              <label class="form-check-label px-1">Inspection</label>
                             </div>
                                <div class="form-check">
                                    <input class="form-check-input radio-custom" type="radio" name="inspection" id="inspectionYes" value="yes">
                                    <label class="form-check-label radio-custom-label" for="inspectionYes">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input radio-custom" type="radio" name="inspection" id="inspectionNo" value="no">
                                    <label class="form-check-label radio-custom-label" for="inspectionNo">No</label>
                                </div>
                            </div>
                            <div class="shipping-details d-flex justify-content-around">
                             <div class="info d-flex align-items-center">
                              <i class="fa fa-info-circle pt-1"></i>
                              <label class="form-check-label px-1">Warranty</label>
                             </div>
                                <div class="form-check">
                                    <input class="form-check-input radio-custom" type="radio" name="warranty" id="warrantyYes" value="yes">
                                    <label class="form-check-label radio-custom-label" for="warrantyYes">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input radio-custom" type="radio" name="warranty" id="warrantyNo" value="no">
                                    <label class="form-check-label radio-custom-label" for="warrantyNo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="shipping-calculate d-flex flex-column gap-4 px-md-4">
                                <button class="btn btn-calculator">
                                  <img src="{{asset('assets/images/icons/calculator-line.webp')}}" alt="Reset" class="img-fluid mx-2" loading="lazy" width="25" height="25">
                                  Calculate</button>
                                <button class="btn btn-reset px-4">
                                  <img src="{{asset('assets/images/icons/repeat.webp')}}" alt="Reset" class="img-fluid mx-2" loading="lazy" width="25" height="25">
                                  Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-4 col-12 mb-4">
                    <div class="border p-3 rounded-2">

                        <p class="current-search">Current Search</p>
                        <div class="tag-button-list">
                          <ul class="list-unstyled">
                            <li>Honda</li>
                            <li>Civic</li>
                            <li>514264</li>
                            <li>Automatic</li>
                            <li>Sedan</li>
                            <li>Honda</li>
                            <li>Civic</li>
                            <li>514264</li>
                            <li>Automatic</li>
                            <li>Hybrid</li>
                            <li>Hybrid</li>
                          </ul>
                        </div>
                        <div class="login-buttons text-center">
                            <button type="button" class="login" data-bs-toggle="modal" data-bs-target="#search-alert">
                              <img src="{{asset('assets/images/icons/mail-add-line.png')}}" alt="search" class="img-fluid px-1" loading="lazy">Set Search Alert</button>
                            <p class="account-status">Dont have an account?<span class="login-redirect">Login</span></p>
                        </div>
                        {{-- Search-Alert Model --}}
                        <div class="modal fade" id="search-alert" tabindex="-1" aria-labelledby="search-alertLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content px-5 py-4 rounded-0">
                              <div class="modal-header border-0">
                                <div class="modal-top d-flex justify-content-between w-100 align-items-center">
                                  <div class="left d-flex align-items-center">
                                    <div class="icon">
                                      <img src="{{asset('assets/images/icons/sav-sarch-icon.webp')}}" alt="save search" class="img-fluid" loading="lazy" width="69" height="62">
                                    </div>
                                  <div class="details px-2">
                                    <h3 class="heading m-0">Save Search</h3>
                                    <p class="para m-0">Get notified about the latest updates regarding this vehicle.</p>
                                  </div>
                                
                                  </div>
                                  <div class="right">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                </div>
                                
                              </div>
                              <div class="modal-body">
                                <div class="model-filter">
                                  <p class="m-0 mb-3 title">Filter</p>
                                  <div class="tag-button-list">
                                    <ul class="list-unstyled">
                                      <li>Honda</li>
                                      <li>Civic</li>
                                      <li>514264</li>
                                      <li>Automatic</li>
                                      <li>Sedan</li>
                                      <li>Honda</li>
                                      <li>Civic</li>
                                      <li>514264</li>
                                      <li>Automatic</li>
                                      <li>Hybrid</li>
                                      <li>Hybrid</li>
                                      <li>Hybrid</li>
                                      <li>Hybrid</li>
                                    </ul>
                                  </div>
                                </div>

                                <div class="col-12">
                                  <label class="mb-1">Email <span class="text-danger fs-12">*</span></label>
                                  <input type="email" class="form-control" placeholder="example@gmail.com">
                                </div>
                                <div class="col-12">
                                  <label class="mt-4 mb-1">Phone <span class="text-danger fs-12">*</span></label>
                                  <input type="number" placeholder="Phone#" class="phone-car-detail form-control  bg-white w-100" id="phone" />
                                </div>

                                
                              </div>
                              <div class="modal-footer border-0">
                                <div class="col-12">
                                  <button class="alert-btn">Save Search</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="searchItemsCar">
              <div class="wrapper py-4">
                <div class="row mb-2">
                  <div class="col-md-3 position-relative">
                    {{-- <select id="mySelect" class="form-select custom-select" aria-label="Default select example">
                      <option selected>Honda</option>
                      <option value="1">Mazda</option>
                    </select>
                    <i class="fas fa-times close-icon" id="closeIcon"></i> --}}
                    <select id="mySelect" class="form-select custom-select" aria-label="Default select example">
                      <option value="">Select a car</option>
                      <option value="honda">Honda</option>
                      <option value="mazda">Mazda</option>
                  </select>
                  <i class="fas fa-times close-icon" id="closeIcon" style="display: none;"></i>
                  </div>
                  <div class="col-md-3">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>Toyota</option>
                      <option value="1">Mazda</option>
                    </select>
                    
                  </div>
                  <div class="col-md-3">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>222</option>
                      <option value="1">2223</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>12</option>
                      <option value="1">13</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-2">
                  <div class="col-md-3 d-flex gap-2">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>2024</option>
                      <option value="1">2023</option>
                    </select>
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>2024</option>
                      <option value="1">2023</option>
                    </select>
                  </div>
                  
                  <div class="col-md-3 d-flex gap-2">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>2024</option>
                      <option value="1">2023</option>
                    </select>
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>2024</option>
                      <option value="1">2023</option>
                    </select>
                  </div>

                  <div class="col-md-3 d-flex">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>Fuel</option>
                      <option value="1">Oil</option>
                    </select>
                    
                  </div>

                  <div class="col-md-3 d-flex gap-2">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>Steering</option>
                      <option value="1">Handle</option>
                    </select>
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>Body Type</option>
                      <option value="1">Clear</option>
                    </select>
                  </div>
                 
                </div>

                <div class="row mb-2">
                  <div class="col-md-3 d-flex gap-2">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>1000</option>
                      <option value="1">2000</option>
                    </select>
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>1000</option>
                      <option value="1">2000</option>
                    </select>
                  </div>
                  
                  <div class="col-md-3 d-flex gap-2">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>500</option>
                      <option value="1">700</option>
                    </select>
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>500</option>
                      <option value="1">700</option>
                    </select>
                  </div>

                  <div class="col-md-3 d-flex">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>Small</option>
                      <option value="1">Large</option>
                    </select>
                    
                  </div>

                  <div class="col-md-3">
                    <button class="btn btn-expand-search" id="toggleButton">View Additional Filters <i class="fas fa-chevron-down"></i></button>
                  </div>
                 
                </div>

                <div class="expand" id="myForm">
                  <div class="row mb-2" >
                    <div class="col-md-3 d-flex gap-2">
                      <select class="form-select selection-search" aria-label="Default select example">
                        <option selected>Min load</option>
                        <option value="1">1999</option>
                      </select>
                      <select class="form-select selection-search" aria-label="Default select example">
                        <option selected>Max load</option>
                        <option value="1">2000</option>
                      </select>
                    </div>
                    
                    <div class="col-md-3 d-flex gap-2">
                      <select class="form-select selection-search" aria-label="Default select example">
                        <option selected>Toyota</option>
                        <option value="1">Honda</option>
                      </select>
                      <select class="form-select selection-search" aria-label="Default select example">
                        <option selected>Toyota</option>
                        <option value="1">Honda</option>
                      </select>
                    </div>
  
                    <div class="col-md-3 d-flex">
                      <select class="form-select selection-search" aria-label="Default select example">
                        <option selected>Toyota</option>
                        <option value="1">Honda</option>
                      </select>
                      
                    </div>
  
                    <div class="col-md-3">
                      <select class="form-select selection-search" aria-label="Default select example">
                        <option selected>Toyota</option>
                        <option value="1">Honda</option>
                      </select>
                    </div>
                   
                  </div>

                  <div class="container px-3">
                    <div class="row my-3 d-flex justify-content-between flex-wrap">
                        <div class="col-6 col-md-2 form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="abs" value="abs">
                            <label class="form-check-label" for="abs">ABS</label>
                        </div>
                        <div class="col-6 col-md-2 form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="a/c" value="a/c">
                            <label class="form-check-label" for="a/c">A/C</label>
                        </div>
                        <div class="col-6 col-md-2 form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="airbags" value="airbags">
                            <label class="form-check-label" for="airbags">Airbags</label>
                        </div>
                        <div class="col-6 col-md-2 form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="backcamera" value="backcamera">
                            <label class="form-check-label" for="backcamera">Back Camera</label>
                        </div>
                        <div class="col-6 col-md-2 form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="dualairbags" value="dualairbags">
                            <label class="form-check-label" for="dualairbags">Dual Airbags</label>
                        </div>
                    </div>
            
                    <div class="row mb-3 d-flex justify-content-between flex-wrap">
                        <div class="col-6 col-md-2 form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="foglights" value="foglights">
                            <label class="form-check-label" for="foglights">Fog Lights</label>
                        </div>
                        <div class="col-6 col-md-2 form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="keylessentry" value="keylessentry">
                            <label class="form-check-label" for="keylessentry">Keyless Entry</label>
                        </div>
                        <div class="col-6 col-md-2 form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="powersteering" value="powersteering">
                            <label class="form-check-label" for="powersteering">Power Steering</label>
                        </div>
                        <div class="col-6 col-md-2 form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="powerwindow" value="powerwindow">
                            <label class="form-check-label" for="powerwindow">Power Window</label>
                        </div>
                        <div class="col-6 col-md-2 form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="pushstart" value="pushstart">
                            <label class="form-check-label" for="pushstart">Push Start</label>
                        </div>
                    </div>
            
                    <div class="row mb-3 d-flex justify-content-between flex-wrap">
                        <div class="col-6 col-md-2 form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="rearspoiler" value="rearspoiler">
                            <label class="form-check-label" for="rearspoiler">Rear Spoiler</label>
                        </div>
                        <div class="col-6 col-md-2 form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="roofrails" value="roofrails">
                            <label class="form-check-label" for="roofrails">Roof Rails</label>
                        </div>
                        <div class="col-6 col-md-2 form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="sunroof" value="sunroof">
                            <label class="form-check-label" for="sunroof">Sun Roof</label>
                        </div>
                        <div class="col-6 col-md-2 form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="TV" value="TV">
                            <label class="form-check-label" for="TV">TV</label>
                        </div>
                        <div class="col-6 col-md-2 form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="360camera" value="360camera">
                            <label class="form-check-label" for="360camera">360 Degree Camera</label>
                        </div>
                    </div>
                </div>
                </div>


                <div class="d-flex flex-row px-1 my-4">
                  <div class="form-check me-5">
                      <input class="form-check-input" type="checkbox" id="sp" value="satpoints">
                      <label class="form-check-label sp" for="satpoints">SAT Points</label>
                  </div>
                  <div class="form-check me-5">
                      <input class="form-check-input" type="checkbox" id="lv" value="lv">
                      <label class="form-check-label lv" for="lv">Luxury Vehicles</label>
                  </div>
                  <div class="form-check me-5">
                      <input class="form-check-input" type="checkbox" id="lm" value="lm">
                      <label class="form-check-label lm" for="lm">Low Milage</label>
                  </div>
                  <div class="form-check me-5">
                      <input class="form-check-input" type="checkbox" id="fs" value="fs">
                      <label class="form-check-label fs" for="fs">Fresh Stock</label>
                  </div>
                  <div class="form-check me-5">
                      <input class="form-check-input" type="checkbox" id="dv" value="dv">
                      <label class="form-check-label dv" for="dv">Discounted Vehicles</label>
                  </div>
              </div>
              
              <div class="advanceSearchBtn text-center d-flex justify-content-center">
                <button class="btn btn-searchAdvance">
                  <img src="{{asset('assets/images/header-images/search-icon.webp')}}" alt="Search icon" class="img-fluid mx-2" loading="lazy" width="20" height="20">Search</button> 
                  <div class="borderSearch"></div>
                <button class="btn btn-resetAdvance">
                  <img src="{{asset('assets/images/icons/repeat.webp')}}" alt="Reset" class="img-fluid mx-2" loading="lazy" width="25" height="25">
                  Reset</button> 
              </div>
              
              
                

              </div>
            </div>


          
            @component('used_car.partial.could-not-find-car')
            @endcomponent

            <div class="container p-0 mt-5">
              <div class="mb-3 d-flex align-items-center justify-content-between">
                <div class="heading">
                  <p class="m-0">Used Toyota Cars for Sale</p>
                </div>
                <div class="action-search d-flex align-items-start">
                  <div class="save-search d-flex align-items-center">
                   <img src="{{asset('assets/images/save.gif')}}" alt="Save Gif" class="img-fluid mx-2" loading="lazy">
                   <p class="pt-3 px-2">Save Search</p>
                  </div>
                   <button id="listView" class="btn btn-list-view active pt-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M11 4H21V6H11V4ZM11 8H17V10H11V8ZM11 14H21V16H11V14ZM11 18H17V20H11V18ZM3 4H9V10H3V4ZM5 6V8H7V6H5ZM3 14H9V20H3V14ZM5 16V18H7V16H5Z">
                      </path>
                  </svg>
                    List View</button>
                   <button id="gridView" class="btn btn-grid-view pt-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M21 3C21.2652 3 21.5196 3.10536 21.7071 3.29289C21.8946 3.48043 22 3.73478 22 4V20C22 20.2652 21.8946 20.5196 21.7071 20.7071C21.5196 20.8946 21.2652 21 21 21H3C2.73478 21 2.48043 20.8946 2.29289 20.7071C2.10536 20.5196 2 20.2652 2 20V4C2 3.73478 2.10536 3.48043 2.29289 3.29289C2.48043 3.10536 2.73478 3 3 3H21ZM11 13H4V19H11V13ZM20 13H13V19H20V13ZM11 5H4V11H11V5ZM20 5H13V11H20V5Z"/>
                      </svg>
                    Grid View</button>
                   <div class="sorted d-flex align-items-start">
                     <select class="form-select mt-2" aria-label="Select Items">
                       <option selected="">Sort by</option>
                       <option value="1">Price Low to High</option>
                       <option value="2">Price High to Low</option>
                       <option value="3">Price Old to New</option>
                     </select>
                   </div>
                  </div>
              </div>
              <div id="itemsContainer" class="row list-view px-2">
                  <div class="col item">
                      <div class="card">
                          <div class="card-body">
                            <div class="wrappers">
                              <div class="col-md-4 top-card-image">
                                <img src="{{asset('assets/images/searchCar.webp')}}" alt="Search Car" class="img-fluid" loading="lazy">
                              </div>

                              <div class="col-md-5 center">
                                <div class="top-points">

                                  <div class="earn">
                                    <img src="{{asset('assets/images/icons/earn-points.webp')}}" alt="Earn Points" class="img-fluid" loading="lazy">
                                    <p class="m-0">Earn 200 points</p>
                                  </div>
                                  <div class="sale">
                                    <p class="m-0">New Year Sales</p>
                                  </div>
                                  <div class="premium">
                                    <p class="m-0">Premium Cars</p>
                                  </div>
                                  <div class="discounted">
                                    <p class="m-0">Discounted Vehicles</p>
                                  </div>

                                  <div class="percent-off">
                                    <span>
                                      <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.18734 0.696289L7.99047 1.23992L8.53372 5.04343L5.00221 8.57493C4.93017 8.64696 4.83246 8.68742 4.73059 8.68742C4.62872 8.68742 4.53101 8.64696 4.45897 8.57493L0.655455 4.77142C0.58343 4.69938 0.542969 4.60167 0.542969 4.4998C0.542969 4.39793 0.58343 4.30022 0.655455 4.22818L4.18734 0.696289ZM5.27384 3.95655C5.3452 4.02789 5.42992 4.08448 5.52316 4.12308C5.61639 4.16168 5.71632 4.18153 5.81722 4.18152C5.91813 4.1815 6.01805 4.1616 6.11127 4.12297C6.20449 4.08434 6.28919 4.02772 6.36053 3.95636C6.43187 3.88499 6.48846 3.80027 6.52705 3.70704C6.56565 3.61381 6.58551 3.51388 6.58549 3.41297C6.58548 3.31207 6.56558 3.21215 6.52695 3.11893C6.48832 3.02571 6.4317 2.94101 6.36034 2.86967C6.28897 2.79833 6.20425 2.74174 6.11102 2.70314C6.01778 2.66454 5.91786 2.64469 5.81695 2.6447C5.61316 2.64474 5.41773 2.72573 5.27365 2.86986C5.12957 3.01399 5.04865 3.20945 5.04868 3.41325C5.04872 3.61704 5.12971 3.81247 5.27384 3.95655Z" fill="white"/>
                                        </svg>
                                        30% off</span>
                                  </div>
                                </div>

                                <div class="car-title">
                                  <p class="m-0">2018 TOYOTA LITEACE VAN DX</p>
                                </div>

                                <div class="car-details">
                                  <div class="col-md-3 detail1">
                                    <div class="inner mb-3">
                                     <div class="top">
                                      <p class="year m-0">Year</p>
                                      <p class="model m-0">2010/6</p>
                                     </div>
                                     <div class="bottom">
                                      <span class="dot"></span>
                                     </div>
                                    </div>
                                    <div class="more-detail">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/model-code.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Model Code</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">SAT-886753</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="more-detail mt-1">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/drive-type.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Drive Type</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">2WD</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 detail1">
                                    <div class="inner mb-3">
                                     <div class="top">
                                      <p class="year m-0">Engine</p>
                                      <p class="model m-0">1800 cc</p>
                                     </div>
                                     <div class="bottom">
                                      <span class="dot"></span>
                                     </div>
                                    </div>
                                    <div class="more-detail">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/fuel-type.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Fuel</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">Hybrid</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="more-detail mt-1">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/seat.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Seats</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">5</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 detail1">
                                    <div class="inner mb-3">
                                     <div class="top">
                                      <p class="year m-0">Mileage</p>
                                      <p class="model m-0">65000 km</p>
                                     </div>
                                     <div class="bottom">
                                      <span class="dot"></span>
                                     </div>
                                    </div>
                                    <div class="more-detail">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/color.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Color</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">Pearl</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="more-detail mt-1">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/doors.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Doors</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">5</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 detail1">
                                    <div class="inner mb-3">
                                     <div class="top">
                                      <p class="year m-0">Transmission</p>
                                      <p class="model m-0">MT</p>
                                     </div>
                                     
                                    </div>
                                    <div class="more-detail">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/steer.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Steering</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">Right</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="more-detail mt-1">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/stock-id.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Stock ID</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">SAT-886753</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                 
                                </div>

                                <div class="grid-details">
                                  <div class="top">
                                    <div class="mark">
                                      <p class="sale m-0">New Year Sale</p>
                                      <p class="sale2 m-0">New Year Sale</p>
                                      <p class="loc m-0">Location:</p>
                                      <img src="{{asset('assets/images/country-flags/PK.webp')}}" alt="Flag" class="img-fluid" loading="lazy">
                                      <p class="count m-0">Japan</p>
                                    </div>

                                    <div class="heading">
                                      <p class="title py-2 px-2">2017 Toyota C-HR</p>
                                    </div>

                                    <div class="details">
                                      <div class="inner">
                                        <div class="year">
                                          <p class="m-0 title">Year</p>
                                          <p class="m-0 date">2017/2</p>
                                        </div>
                                        <div class="dot"></div>
                                      </div>

                                      <div class="inner">
                                        <div class="year">
                                          <p class="m-0 title">Engine</p>
                                          <p class="m-0 date">1800 cc</p>
                                        </div>
                                        <div class="dot"></div>
                                      </div>

                                      <div class="inner">
                                        <div class="year">
                                          <p class="m-0 title">Mileage</p>
                                          <p class="m-0 date">65000 km</p>
                                        </div>
                                        <div class="dot"></div>
                                      </div>

                                      <div class="inner">
                                        <div class="year">
                                          <p class="m-0 title">Transmission</p>
                                          <p class="m-0 date">AT</p>
                                        </div>
                                        
                                      </div>
                                     
                                    </div>

                                    <div class="pricing mt-3">
                                     <p class="price m-0">Car Price:</p>
                                     <p class="total m-0">$9,826</p>
                                    </div>

                                    <div class="pricing">
                                     <p class="price m-0">Total Price:</p>
                                     <p class="total m-0">$9,826</p>
                                    </div>

                                    <div class="action-buying mt-3 mb-2">
                                      <button class="btn btn-buy">Buy Now</button>
                                      <button class="btn btn-quote">Get a Price Quote</button>
                                     </div>

                                  </div>
                                </div>
                              </div>

                              <div class="col-md-3 right">
                                <div class="countryLoc">
                                  <div class="top">
                                    <p class="m-0 title">Location:</p>
                                    <img src="{{asset('assets/images/country-flags/PK.webp')}}" alt="Flag" class="img-fluid" loading="lazy">
                                    <p class="m-0 name">Japan</p>
                                  </div>
                                </div>
                                <div class="price-off">
                                  <p class="price m-0">10% Off <sapn class="off">$ 786786</sapn></p>
                                </div>
                                
                                <div class="car-price">
                                  <p class="m-0 title">Car Price:</p>
                                  <p class="m-0 price">JPY 12,345,678</p>
                                </div>

                                <div class="car-price">
                                  <p class="m-0 title">Total Price:</p>
                                  <p class="m-0 price">JPY 12,345,678</p>
                                </div>
                                <div class="car-price-tag">
                                  <p class="m-0 tag">(CIF to Karachi): (RORO)</p>
                                </div>
                               
                                <div class="action-buy">
                                  <button class="btn btn-buy">Buy Now</button>
                                  <button class="btn btn-quote">Get a Price Quote</button>
                                  <button class="btn btn-notify">Notify If Available</button>
                                </div>
                              </div>


                            </div>
                          </div>
                      </div>
                      <hr class="my-5">
                  </div>
                  <div class="col item">
                      <div class="card">
                          <div class="card-body">
                            <div class="wrappers">
                              <div class="col-md-4 top-card-image">
                                <img src="{{asset('assets/images/searchCar.webp')}}" alt="Search Car" class="img-fluid" loading="lazy">
                              </div>

                              <div class="col-md-5 center">
                                <div class="top-points">

                                  <div class="earn">
                                    <img src="{{asset('assets/images/icons/earn-points.webp')}}" alt="Earn Points" class="img-fluid" loading="lazy">
                                    <p class="m-0">Earn 200 points</p>
                                  </div>
                                  <div class="sale">
                                    <p class="m-0">New Year Sales</p>
                                  </div>
                                  <div class="premium">
                                    <p class="m-0">Premium Cars</p>
                                  </div>
                                  <div class="discounted">
                                    <p class="m-0">Discounted Vehicles</p>
                                  </div>

                                  <div class="percent-off">
                                    <span>
                                      <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.18734 0.696289L7.99047 1.23992L8.53372 5.04343L5.00221 8.57493C4.93017 8.64696 4.83246 8.68742 4.73059 8.68742C4.62872 8.68742 4.53101 8.64696 4.45897 8.57493L0.655455 4.77142C0.58343 4.69938 0.542969 4.60167 0.542969 4.4998C0.542969 4.39793 0.58343 4.30022 0.655455 4.22818L4.18734 0.696289ZM5.27384 3.95655C5.3452 4.02789 5.42992 4.08448 5.52316 4.12308C5.61639 4.16168 5.71632 4.18153 5.81722 4.18152C5.91813 4.1815 6.01805 4.1616 6.11127 4.12297C6.20449 4.08434 6.28919 4.02772 6.36053 3.95636C6.43187 3.88499 6.48846 3.80027 6.52705 3.70704C6.56565 3.61381 6.58551 3.51388 6.58549 3.41297C6.58548 3.31207 6.56558 3.21215 6.52695 3.11893C6.48832 3.02571 6.4317 2.94101 6.36034 2.86967C6.28897 2.79833 6.20425 2.74174 6.11102 2.70314C6.01778 2.66454 5.91786 2.64469 5.81695 2.6447C5.61316 2.64474 5.41773 2.72573 5.27365 2.86986C5.12957 3.01399 5.04865 3.20945 5.04868 3.41325C5.04872 3.61704 5.12971 3.81247 5.27384 3.95655Z" fill="white"/>
                                        </svg>
                                        30% off</span>
                                  </div>
                                </div>

                                <div class="car-title">
                                  <p class="m-0">2018 TOYOTA LITEACE VAN DX</p>
                                </div>

                                <div class="car-details">
                                  <div class="col-md-3 detail1">
                                    <div class="inner mb-3">
                                     <div class="top">
                                      <p class="year m-0">Year</p>
                                      <p class="model m-0">2010/6</p>
                                     </div>
                                     <div class="bottom">
                                      <span class="dot"></span>
                                     </div>
                                    </div>
                                    <div class="more-detail">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/model-code.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Model Code</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">SAT-886753</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="more-detail mt-1">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/drive-type.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Drive Type</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">2WD</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 detail1">
                                    <div class="inner mb-3">
                                     <div class="top">
                                      <p class="year m-0">Engine</p>
                                      <p class="model m-0">1800 cc</p>
                                     </div>
                                     <div class="bottom">
                                      <span class="dot"></span>
                                     </div>
                                    </div>
                                    <div class="more-detail">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/fuel-type.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Fuel</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">Hybrid</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="more-detail mt-1">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/seat.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Seats</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">5</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 detail1">
                                    <div class="inner mb-3">
                                     <div class="top">
                                      <p class="year m-0">Mileage</p>
                                      <p class="model m-0">65000 km</p>
                                     </div>
                                     <div class="bottom">
                                      <span class="dot"></span>
                                     </div>
                                    </div>
                                    <div class="more-detail">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/color.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Color</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">Pearl</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="more-detail mt-1">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/doors.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Doors</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">5</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 detail1">
                                    <div class="inner mb-3">
                                     <div class="top">
                                      <p class="year m-0">Transmission</p>
                                      <p class="model m-0">MT</p>
                                     </div>
                                     
                                    </div>
                                    <div class="more-detail">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/steer.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Steering</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">Right</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="more-detail mt-1">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/stock-id.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Stock ID</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">SAT-886753</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                 
                                </div>

                                <div class="grid-details">
                                  <div class="top">
                                    <div class="mark">
                                      <p class="sale m-0">New Year Sale</p>
                                      <p class="sale2 m-0">New Year Sale</p>
                                      <p class="loc m-0">Location:</p>
                                      <img src="{{asset('assets/images/country-flags/PK.webp')}}" alt="Flag" class="img-fluid" loading="lazy">
                                      <p class="count m-0">Japan</p>
                                    </div>

                                    <div class="heading">
                                      <p class="title py-2 px-2">2017 Toyota C-HR</p>
                                    </div>

                                    <div class="details">
                                      <div class="inner">
                                        <div class="year">
                                          <p class="m-0 title">Year</p>
                                          <p class="m-0 date">2017/2</p>
                                        </div>
                                        <div class="dot"></div>
                                      </div>

                                      <div class="inner">
                                        <div class="year">
                                          <p class="m-0 title">Engine</p>
                                          <p class="m-0 date">1800 cc</p>
                                        </div>
                                        <div class="dot"></div>
                                      </div>

                                      <div class="inner">
                                        <div class="year">
                                          <p class="m-0 title">Mileage</p>
                                          <p class="m-0 date">65000 km</p>
                                        </div>
                                        <div class="dot"></div>
                                      </div>

                                      <div class="inner">
                                        <div class="year">
                                          <p class="m-0 title">Transmission</p>
                                          <p class="m-0 date">AT</p>
                                        </div>
                                        
                                      </div>
                                     
                                    </div>

                                    <div class="pricing mt-3">
                                     <p class="price m-0">Car Price:</p>
                                     <p class="total m-0">$9,826</p>
                                    </div>

                                    <div class="pricing">
                                     <p class="price m-0">Total Price:</p>
                                     <p class="total m-0">$9,826</p>
                                    </div>

                                    <div class="action-buying mt-3 mb-2">
                                      <button class="btn btn-buy">Buy Now</button>
                                      <button class="btn btn-quote">Get a Price Quote</button>
                                     </div>

                                  </div>
                                </div>
                              </div>

                              <div class="col-md-3 right">
                                <div class="countryLoc">
                                  <div class="top">
                                    <p class="m-0 title">Location:</p>
                                    <img src="{{asset('assets/images/country-flags/PK.webp')}}" alt="Flag" class="img-fluid" loading="lazy">
                                    <p class="m-0 name">Japan</p>
                                  </div>
                                </div>
                                <div class="price-off">
                                  <p class="price m-0">10% Off <sapn class="off">$ 786786</sapn></p>
                                </div>
                                
                                <div class="car-price">
                                  <p class="m-0 title">Car Price:</p>
                                  <p class="m-0 price">JPY 12,345,678</p>
                                </div>

                                <div class="car-price">
                                  <p class="m-0 title">Total Price:</p>
                                  <p class="m-0 price">JPY 12,345,678</p>
                                </div>
                                <div class="car-price-tag">
                                  <p class="m-0 tag">(CIF to Karachi): (RORO)</p>
                                </div>
                               
                                <div class="action-buy">
                                  <button class="btn btn-buy">Buy Now</button>
                                  <button class="btn btn-quote">Get a Price Quote</button>
                                  <button class="btn btn-notify">Notify If Available</button>
                                </div>
                              </div>


                            </div>
                          </div>
                      </div>
                      <hr class="my-5">
                  </div>
                  <div class="col item">
                      <div class="card">
                          <div class="card-body">
                            <div class="wrappers">
                              <div class="col-md-4 top-card-image">
                                <img src="{{asset('assets/images/searchCar.webp')}}" alt="Search Car" class="img-fluid" loading="lazy">
                              </div>

                              <div class="col-md-5 center">
                                <div class="top-points">

                                  <div class="earn">
                                    <img src="{{asset('assets/images/icons/earn-points.webp')}}" alt="Earn Points" class="img-fluid" loading="lazy">
                                    <p class="m-0">Earn 200 points</p>
                                  </div>
                                  <div class="sale">
                                    <p class="m-0">New Year Sales</p>
                                  </div>
                                  <div class="premium">
                                    <p class="m-0">Premium Cars</p>
                                  </div>
                                  <div class="discounted">
                                    <p class="m-0">Discounted Vehicles</p>
                                  </div>

                                  <div class="percent-off">
                                    <span>
                                      <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.18734 0.696289L7.99047 1.23992L8.53372 5.04343L5.00221 8.57493C4.93017 8.64696 4.83246 8.68742 4.73059 8.68742C4.62872 8.68742 4.53101 8.64696 4.45897 8.57493L0.655455 4.77142C0.58343 4.69938 0.542969 4.60167 0.542969 4.4998C0.542969 4.39793 0.58343 4.30022 0.655455 4.22818L4.18734 0.696289ZM5.27384 3.95655C5.3452 4.02789 5.42992 4.08448 5.52316 4.12308C5.61639 4.16168 5.71632 4.18153 5.81722 4.18152C5.91813 4.1815 6.01805 4.1616 6.11127 4.12297C6.20449 4.08434 6.28919 4.02772 6.36053 3.95636C6.43187 3.88499 6.48846 3.80027 6.52705 3.70704C6.56565 3.61381 6.58551 3.51388 6.58549 3.41297C6.58548 3.31207 6.56558 3.21215 6.52695 3.11893C6.48832 3.02571 6.4317 2.94101 6.36034 2.86967C6.28897 2.79833 6.20425 2.74174 6.11102 2.70314C6.01778 2.66454 5.91786 2.64469 5.81695 2.6447C5.61316 2.64474 5.41773 2.72573 5.27365 2.86986C5.12957 3.01399 5.04865 3.20945 5.04868 3.41325C5.04872 3.61704 5.12971 3.81247 5.27384 3.95655Z" fill="white"/>
                                        </svg>
                                        30% off</span>
                                  </div>
                                </div>

                                <div class="car-title">
                                  <p class="m-0">2018 TOYOTA LITEACE VAN DX</p>
                                </div>

                                <div class="car-details">
                                  <div class="col-md-3 detail1">
                                    <div class="inner mb-3">
                                     <div class="top">
                                      <p class="year m-0">Year</p>
                                      <p class="model m-0">2010/6</p>
                                     </div>
                                     <div class="bottom">
                                      <span class="dot"></span>
                                     </div>
                                    </div>
                                    <div class="more-detail">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/model-code.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Model Code</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">SAT-886753</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="more-detail mt-1">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/drive-type.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Drive Type</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">2WD</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 detail1">
                                    <div class="inner mb-3">
                                     <div class="top">
                                      <p class="year m-0">Engine</p>
                                      <p class="model m-0">1800 cc</p>
                                     </div>
                                     <div class="bottom">
                                      <span class="dot"></span>
                                     </div>
                                    </div>
                                    <div class="more-detail">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/fuel-type.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Fuel</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">Hybrid</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="more-detail mt-1">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/seat.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Seats</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">5</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 detail1">
                                    <div class="inner mb-3">
                                     <div class="top">
                                      <p class="year m-0">Mileage</p>
                                      <p class="model m-0">65000 km</p>
                                     </div>
                                     <div class="bottom">
                                      <span class="dot"></span>
                                     </div>
                                    </div>
                                    <div class="more-detail">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/color.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Color</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">Pearl</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="more-detail mt-1">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/doors.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Doors</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">5</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 detail1">
                                    <div class="inner mb-3">
                                     <div class="top">
                                      <p class="year m-0">Transmission</p>
                                      <p class="model m-0">MT</p>
                                     </div>
                                     
                                    </div>
                                    <div class="more-detail">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/steer.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Steering</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">Right</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="more-detail mt-1">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/stock-id.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Stock ID</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">SAT-886753</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                 
                                </div>

                                <div class="grid-details">
                                  <div class="top">
                                    <div class="mark">
                                      <p class="sale m-0">New Year Sale</p>
                                      <p class="sale2 m-0">New Year Sale</p>
                                      <p class="loc m-0">Location:</p>
                                      <img src="{{asset('assets/images/country-flags/PK.webp')}}" alt="Flag" class="img-fluid" loading="lazy">
                                      <p class="count m-0">Japan</p>
                                    </div>

                                    <div class="heading">
                                      <p class="title py-2 px-2">2017 Toyota C-HR</p>
                                    </div>

                                    <div class="details">
                                      <div class="inner">
                                        <div class="year">
                                          <p class="m-0 title">Year</p>
                                          <p class="m-0 date">2017/2</p>
                                        </div>
                                        <div class="dot"></div>
                                      </div>

                                      <div class="inner">
                                        <div class="year">
                                          <p class="m-0 title">Engine</p>
                                          <p class="m-0 date">1800 cc</p>
                                        </div>
                                        <div class="dot"></div>
                                      </div>

                                      <div class="inner">
                                        <div class="year">
                                          <p class="m-0 title">Mileage</p>
                                          <p class="m-0 date">65000 km</p>
                                        </div>
                                        <div class="dot"></div>
                                      </div>

                                      <div class="inner">
                                        <div class="year">
                                          <p class="m-0 title">Transmission</p>
                                          <p class="m-0 date">AT</p>
                                        </div>
                                        
                                      </div>
                                     
                                    </div>

                                    <div class="pricing mt-3">
                                     <p class="price m-0">Car Price:</p>
                                     <p class="total m-0">$9,826</p>
                                    </div>

                                    <div class="pricing">
                                     <p class="price m-0">Total Price:</p>
                                     <p class="total m-0">$9,826</p>
                                    </div>

                                    <div class="action-buying mt-3 mb-2">
                                      <button class="btn btn-buy">Buy Now</button>
                                      <button class="btn btn-quote">Get a Price Quote</button>
                                     </div>

                                  </div>
                                </div>
                              </div>

                              <div class="col-md-3 right">
                                <div class="countryLoc">
                                  <div class="top">
                                    <p class="m-0 title">Location:</p>
                                    <img src="{{asset('assets/images/country-flags/PK.webp')}}" alt="Flag" class="img-fluid" loading="lazy">
                                    <p class="m-0 name">Japan</p>
                                  </div>
                                </div>
                                <div class="price-off">
                                  <p class="price m-0">10% Off <sapn class="off">$ 786786</sapn></p>
                                </div>
                                
                                <div class="car-price">
                                  <p class="m-0 title">Car Price:</p>
                                  <p class="m-0 price">JPY 12,345,678</p>
                                </div>

                                <div class="car-price">
                                  <p class="m-0 title">Total Price:</p>
                                  <p class="m-0 price">JPY 12,345,678</p>
                                </div>
                                <div class="car-price-tag">
                                  <p class="m-0 tag">(CIF to Karachi): (RORO)</p>
                                </div>
                               
                                <div class="action-buy">
                                  <button class="btn btn-buy">Buy Now</button>
                                  <button class="btn btn-quote">Get a Price Quote</button>
                                  <button class="btn btn-notify">Notify If Available</button>
                                </div>
                              </div>


                            </div>
                          </div>
                      </div>
                      <hr class="my-5">
                  </div>
                  <div class="col item">
                      <div class="card">
                          <div class="card-body">
                            <div class="wrappers">
                              <div class="col-md-4 top-card-image">
                                <img src="{{asset('assets/images/searchCar.webp')}}" alt="Search Car" class="img-fluid" loading="lazy">
                              </div>

                              <div class="col-md-5 center">
                                <div class="top-points">

                                  <div class="earn">
                                    <img src="{{asset('assets/images/icons/earn-points.webp')}}" alt="Earn Points" class="img-fluid" loading="lazy">
                                    <p class="m-0">Earn 200 points</p>
                                  </div>
                                  <div class="sale">
                                    <p class="m-0">New Year Sales</p>
                                  </div>
                                  <div class="premium">
                                    <p class="m-0">Premium Cars</p>
                                  </div>
                                  <div class="discounted">
                                    <p class="m-0">Discounted Vehicles</p>
                                  </div>

                                  <div class="percent-off">
                                    <span>
                                      <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.18734 0.696289L7.99047 1.23992L8.53372 5.04343L5.00221 8.57493C4.93017 8.64696 4.83246 8.68742 4.73059 8.68742C4.62872 8.68742 4.53101 8.64696 4.45897 8.57493L0.655455 4.77142C0.58343 4.69938 0.542969 4.60167 0.542969 4.4998C0.542969 4.39793 0.58343 4.30022 0.655455 4.22818L4.18734 0.696289ZM5.27384 3.95655C5.3452 4.02789 5.42992 4.08448 5.52316 4.12308C5.61639 4.16168 5.71632 4.18153 5.81722 4.18152C5.91813 4.1815 6.01805 4.1616 6.11127 4.12297C6.20449 4.08434 6.28919 4.02772 6.36053 3.95636C6.43187 3.88499 6.48846 3.80027 6.52705 3.70704C6.56565 3.61381 6.58551 3.51388 6.58549 3.41297C6.58548 3.31207 6.56558 3.21215 6.52695 3.11893C6.48832 3.02571 6.4317 2.94101 6.36034 2.86967C6.28897 2.79833 6.20425 2.74174 6.11102 2.70314C6.01778 2.66454 5.91786 2.64469 5.81695 2.6447C5.61316 2.64474 5.41773 2.72573 5.27365 2.86986C5.12957 3.01399 5.04865 3.20945 5.04868 3.41325C5.04872 3.61704 5.12971 3.81247 5.27384 3.95655Z" fill="white"/>
                                        </svg>
                                        30% off</span>
                                  </div>
                                </div>

                                <div class="car-title">
                                  <p class="m-0">2018 TOYOTA LITEACE VAN DX</p>
                                </div>

                                <div class="car-details">
                                  <div class="col-md-3 detail1">
                                    <div class="inner mb-3">
                                     <div class="top">
                                      <p class="year m-0">Year</p>
                                      <p class="model m-0">2010/6</p>
                                     </div>
                                     <div class="bottom">
                                      <span class="dot"></span>
                                     </div>
                                    </div>
                                    <div class="more-detail">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/model-code.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Model Code</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">SAT-886753</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="more-detail mt-1">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/drive-type.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Drive Type</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">2WD</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 detail1">
                                    <div class="inner mb-3">
                                     <div class="top">
                                      <p class="year m-0">Engine</p>
                                      <p class="model m-0">1800 cc</p>
                                     </div>
                                     <div class="bottom">
                                      <span class="dot"></span>
                                     </div>
                                    </div>
                                    <div class="more-detail">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/fuel-type.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Fuel</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">Hybrid</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="more-detail mt-1">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/seat.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Seats</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">5</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 detail1">
                                    <div class="inner mb-3">
                                     <div class="top">
                                      <p class="year m-0">Mileage</p>
                                      <p class="model m-0">65000 km</p>
                                     </div>
                                     <div class="bottom">
                                      <span class="dot"></span>
                                     </div>
                                    </div>
                                    <div class="more-detail">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/color.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Color</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">Pearl</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="more-detail mt-1">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/doors.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Doors</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">5</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 detail1">
                                    <div class="inner mb-3">
                                     <div class="top">
                                      <p class="year m-0">Transmission</p>
                                      <p class="model m-0">MT</p>
                                     </div>
                                     
                                    </div>
                                    <div class="more-detail">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/steer.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Steering</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">Right</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="more-detail mt-1">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/stock-id.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Stock ID</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">SAT-886753</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                 
                                </div>

                                <div class="grid-details">
                                  <div class="top">
                                    <div class="mark">
                                      <p class="sale m-0">New Year Sale</p>
                                      <p class="sale2 m-0">New Year Sale</p>
                                      <p class="loc m-0">Location:</p>
                                      <img src="{{asset('assets/images/country-flags/PK.webp')}}" alt="Flag" class="img-fluid" loading="lazy">
                                      <p class="count m-0">Japan</p>
                                    </div>

                                    <div class="heading">
                                      <p class="title py-2 px-2">2017 Toyota C-HR</p>
                                    </div>

                                    <div class="details">
                                      <div class="inner">
                                        <div class="year">
                                          <p class="m-0 title">Year</p>
                                          <p class="m-0 date">2017/2</p>
                                        </div>
                                        <div class="dot"></div>
                                      </div>

                                      <div class="inner">
                                        <div class="year">
                                          <p class="m-0 title">Engine</p>
                                          <p class="m-0 date">1800 cc</p>
                                        </div>
                                        <div class="dot"></div>
                                      </div>

                                      <div class="inner">
                                        <div class="year">
                                          <p class="m-0 title">Mileage</p>
                                          <p class="m-0 date">65000 km</p>
                                        </div>
                                        <div class="dot"></div>
                                      </div>

                                      <div class="inner">
                                        <div class="year">
                                          <p class="m-0 title">Transmission</p>
                                          <p class="m-0 date">AT</p>
                                        </div>
                                        
                                      </div>
                                     
                                    </div>

                                    <div class="pricing mt-3">
                                     <p class="price m-0">Car Price:</p>
                                     <p class="total m-0">$9,826</p>
                                    </div>

                                    <div class="pricing">
                                     <p class="price m-0">Total Price:</p>
                                     <p class="total m-0">$9,826</p>
                                    </div>

                                    <div class="action-buying mt-3 mb-2">
                                      <button class="btn btn-buy">Buy Now</button>
                                      <button class="btn btn-quote">Get a Price Quote</button>
                                     </div>

                                  </div>
                                </div>
                              </div>

                              <div class="col-md-3 right">
                                <div class="countryLoc">
                                  <div class="top">
                                    <p class="m-0 title">Location:</p>
                                    <img src="{{asset('assets/images/country-flags/PK.webp')}}" alt="Flag" class="img-fluid" loading="lazy">
                                    <p class="m-0 name">Japan</p>
                                  </div>
                                </div>
                                <div class="price-off">
                                  <p class="price m-0">10% Off <sapn class="off">$ 786786</sapn></p>
                                </div>
                                
                                <div class="car-price">
                                  <p class="m-0 title">Car Price:</p>
                                  <p class="m-0 price">JPY 12,345,678</p>
                                </div>

                                <div class="car-price">
                                  <p class="m-0 title">Total Price:</p>
                                  <p class="m-0 price">JPY 12,345,678</p>
                                </div>
                                <div class="car-price-tag">
                                  <p class="m-0 tag">(CIF to Karachi): (RORO)</p>
                                </div>
                               
                                <div class="action-buy">
                                  <button class="btn btn-buy">Buy Now</button>
                                  <button class="btn btn-quote">Get a Price Quote</button>
                                  <button class="btn btn-notify">Notify If Available</button>
                                </div>
                              </div>


                            </div>
                          </div>
                      </div>
                      <hr class="my-5">
                  </div>
                 
                
             
              </div>

              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <div class="pagination">
                    <div class="pages d-flex justify-content-between w-100">
                      <div class="prev-dir"><i class="fa fa-chevron-left px-2"></i>Previous</div>
                      <div class="page-no active">1</div>
                      <div class="page-no">2</div>
                      <div class="page-no">3</div>
                      <div class="page-no">4</div>
                      <div class="page-no">5</div>
                      <div class="next-dir">Next Page <i class="fa fa-chevron-right px-2"></i></div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="page-count">
                    <div class="counts">
                      <p class="items-page">Items per page: </p>
                      <select class="form-select" aria-label="select">
                        <option selected>25</option>
                        <option value="1">50</option>
                        <option value="2">75</option>
                        <option value="3">100</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              @component('used_car.partial.used-car-with-sat')
              @endcomponent
              @component('used_car.partial.similar-car')
              @endcomponent
              @component('used_car.partial.feature-car-resources')
              @endcomponent
              @component('used_car.partial.customer_review')
              @endcomponent
          </div>
          
        </div>
    </div>
</section>


{{-- Mobile View --}}

<section class="mobile2-view">
  <div class="advance-search-calculator-mobile">
    <div class="container">
      <div class="row">
        <p class="m-0 total pb-3">5412 Results</p>
        <div class="accordion accordion-flush px-2" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Total Price Calculator
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body px-0 py-3">
                <p class="price-text m-0">
                  This calculator estimates the cost of getting your
                  desired vehicle delivered to you based on your shipping
                  destination.
              </p>

              <div class="areaSelection d-flex justify-content-between gap-3 mt-2">
                <div class="dest-country w-100">
                  <label>Destination Country</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Select</option>
                    <option value="1">Australia</option>
                    <option value="2">Bahamas</option>
                    <option value="3">Botswana</option>
                  </select>
                </div>
                <div class="dest-port w-100">
                  <label>Destination port</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Select</option>
                    <option value="1">Australia</option>
                    <option value="2">Bahamas</option>
                    <option value="3">Botswana</option>
                  </select>
                </div>
              </div>

              <div class="shipping-method">
                <div class="inner">
                  <div class="wrap">
                    <div class="top">
                      <p class="m-0"><i class="fa fa-info-circle me-2 py-3"></i>Shipping Method</p>

                      <div class="selectionButton d-flex gap-2">
                        <div class="button">
                          <input type="radio" id="ror" name="check-substitution-2" checked/>
                          <label class="btn btn-default p-0" for="ror">ROR</label>
                        </div>
                        <div class="button">
                          <input type="radio" id="contain" name="check-substitution-2" />
                          <label class="btn btn-default p-0" for="contain">Container</label>
                        </div>
                      </div>

                      <div class="shipping-bottom">
                        <div class="indicators">
                            <p class="m-0"><i class="fa fa-info-circle me-2 py-3"></i>Insurance</p>
                        </div>
                        <div class="selectionCheck">
                            <div>
                                <input id="radio-insurance-yes" class="radio-custom" name="insurance" type="radio">
                                <label for="radio-insurance-yes" class="radio-custom-label">Yes</label>
                            </div>
                            <div>
                                <input id="radio-insurance-no" class="radio-custom" name="insurance" type="radio">
                                <label for="radio-insurance-no" class="radio-custom-label">No</label>
                            </div>
                        </div>
                    </div>
                
                    <div class="shipping-bottom">
                        <div class="indicators">
                            <p class="m-0"><i class="fa fa-info-circle me-2 py-3"></i>Inspection</p>
                        </div>
                        <div class="selectionCheck">
                            <div>
                                <input id="radio-inspection-yes" class="radio-custom" name="inspection" type="radio">
                                <label for="radio-inspection-yes" class="radio-custom-label">Yes</label>
                            </div>
                            <div>
                                <input id="radio-inspection-no" class="radio-custom" name="inspection" type="radio">
                                <label for="radio-inspection-no" class="radio-custom-label">No</label>
                            </div>
                        </div>
                    </div>
                
                    <div class="shipping-bottom">
                        <div class="indicators">
                            <p class="m-0"><i class="fa fa-info-circle me-2 py-3"></i>Warranty</p>
                        </div>
                        <div class="selectionCheck">
                            <div>
                                <input id="radio-warranty-yes" class="radio-custom" name="warranty" type="radio">
                                <label for="radio-warranty-yes" class="radio-custom-label">Yes</label>
                            </div>
                            <div>
                                <input id="radio-warranty-no" class="radio-custom" name="warranty" type="radio">
                                <label for="radio-warranty-no" class="radio-custom-label">No</label>
                            </div>
                        </div>
                    </div>
                
                    <div class="shipping-bottom">
                        <div class="indicators">
                            <p class="m-0"><i class="fa fa-info-circle me-2 py-3"></i>Certification</p>
                        </div>
                        <div class="selectionCheck">
                            <div>
                                <input id="radio-certification-yes" class="radio-custom" name="certification" type="radio">
                                <label for="radio-certification-yes" class="radio-custom-label">Yes</label>
                            </div>
                            <div>
                                <input id="radio-certification-no" class="radio-custom" name="certification" type="radio">
                                <label for="radio-certification-no" class="radio-custom-label">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="shipping-calculate d-flex justify-content-between gap-3">
                                <button class="btn btn-calculator">
                                  <img src="{{asset('assets/images/icons/calculator-line.webp')}}" alt="Reset" class="img-fluid mx-2" loading="lazy" width="18" height="18">
                                  Calculate</button>
                                <button class="btn btn-reset">
                                  <img src="{{asset('assets/images/icons/repeat.webp')}}" alt="Reset" class="img-fluid mx-2" loading="lazy" width="18" height="18">
                                  Reset</button>
                            </div>

                    </div>
                  </div>
                </div>
              </div>

              </div>
            </div>
          </div>


        </div>


        <div class="mobile-filters-search">
          <ul class="list-unstyled filter-list my-3">
            <li class="icon-sliders">
              <p class="m-0" onclick="showsidebar()">
                <img src="/assets/images/icons/filters-stick.webp" alt="Filter" loading="lazy" width="14" height="14"> Filters
                          <span class="filters-count">2</span>
            </p>
              <div class="sidebarcanvasfilters" id="all_fiters_siderbar">
                <div class="sticky-canvas">
                  <div class="top-head d-flex align-items-center justify-content-between">
                    <p class="m-0 title">Filter</p>
                    <p class="fs-1" onclick="hidesidebar()">&times;</p>
                  </div>
                  <hr>
                </div>
                <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                  <div class="left w-50">
                    <p class="m-0">Make</p>
                  </div>
                  <div class="right w-50">
                    <button class="btn btn-make-filter w-100 d-flex align-items-center justify-content-between"
                    type="button" data-bs-toggle="offcanvas" data-bs-target="#makeFilterOffCanvas" aria-controls="makeFilterOffCanvas">Search <i class="fa fa-chevron-down"></i></button>
                  </div>
                </div>

                <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                  <div class="left w-50">
                    <p class="m-0">Model</p>
                  </div>
                  <div class="right w-50">
                    <button class="btn btn-make-filter w-100 d-flex align-items-center justify-content-between"
                    type="button" data-bs-toggle="offcanvas" data-bs-target="#modelFilterOffCanvas" aria-controls="modelFilterOffCanvas">Search <i class="fa fa-chevron-down"></i></button>
                  </div>
                </div>

                <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                  <div class="left w-50">
                    <p class="m-0">Year</p>
                  </div>
                  <div class="right d-flex gap-2 w-50">
                    <button class="btn btn-make-filter d-flex align-items-center justify-content-between w-50">Min<i class="fa fa-chevron-down"></i></button>
                    <button class="btn btn-make-filter d-flex align-items-center justify-content-between w-50">Max <i class="fa fa-chevron-down"></i></button>
                  </div>
                </div>

                <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                  <div class="left">
                    <p class="m-0">Price (USD)</p>
                  </div>
                  <div class="right d-flex gap-2 w-50">
                    <button class="btn btn-make-filter d-flex align-items-center justify-content-between w-50">Min <i class="fa fa-chevron-down"></i></button>
                    <button class="btn btn-make-filter d-flex align-items-center justify-content-between w-50">Max <i class="fa fa-chevron-down"></i></button>
                  </div>
                </div>

                <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                  <div class="left">
                    <p class="m-0">Mileage</p>
                  </div>
                  <div class="right d-flex gap-2 w-50">
                    <button class="btn btn-make-filter d-flex align-items-center justify-content-between w-50">Min <i class="fa fa-chevron-down"></i></button>
                    <button class="btn btn-make-filter d-flex align-items-center justify-content-between w-50">Max <i class="fa fa-chevron-down"></i></button>
                  </div>
                </div>

                <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                  <div class="left w-50">
                    <p class="m-0">Steering</p>
                  </div>
                  <div class="right w-50">
                    <button class="btn btn-make-filter w-100 d-flex align-items-center justify-content-between"
                    type="button" data-bs-toggle="offcanvas" data-bs-target="#steeringFilterOffCanvas" aria-controls="steeringFilterOffCanvas">Search <i class="fa fa-chevron-down"></i></button>
                  </div>
                </div>

                <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                  <div class="left w-50">
                    <p class="m-0">Transmission</p>
                  </div>
                  <div class="right w-50">
                    <button class="btn btn-make-filter w-100 d-flex align-items-center justify-content-between"
                    type="button" data-bs-toggle="offcanvas" data-bs-target="#transmissionFilterOffCanvas" aria-controls="transmissionFilterOffCanvas">Search <i class="fa fa-chevron-down"></i></button>
                  </div>
                </div>

                <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                  <div class="left w-50">
                    <p class="m-0">Engine Size</p>
                  </div>
                  <div class="right w-50">
                    <button class="btn btn-make-filter w-100 d-flex align-items-center justify-content-between"
                    type="button" data-bs-toggle="offcanvas" data-bs-target="#engineeFilterOffCanvas" aria-controls="engineeFilterOffCanvas">Search <i class="fa fa-chevron-down"></i></button>
                  </div>
                </div>

                <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                  <div class="left w-50">
                    <p class="m-0">Fuel</p>
                  </div>
                  <div class="right w-50">
                    <button class="btn btn-make-filter w-100 d-flex align-items-center justify-content-between"
                    type="button" data-bs-toggle="offcanvas" data-bs-target="#fuelFilterOffCanvas" aria-controls="fuelFilterOffCanvas">Search <i class="fa fa-chevron-down"></i></button>
                  </div>
                </div>

                <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                  <div class="left w-50">
                    <p class="m-0">Body Type</p>
                  </div>
                  <div class="right w-50">
                    <button class="btn btn-make-filter w-100 d-flex align-items-center justify-content-between"
                    type="button" data-bs-toggle="offcanvas" data-bs-target="#bodytypeFilterOffCanvas" aria-controls="bodytypeFilterOffCanvas">Search <i class="fa fa-chevron-down"></i></button>
                  </div>
                </div>


                <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                  <div class="left w-50">
                    <p class="m-0">Model Code</p>
                  </div>
                  <div class="right w-50">
                    <button class="btn btn-make-filter w-100 d-flex align-items-center justify-content-between"
                    type="button" data-bs-toggle="offcanvas" data-bs-target="#modelcodeFilterOffCanvas" aria-controls="modelcodeFilterOffCanvas">Search <i class="fa fa-chevron-down"></i></button>
                  </div>
                </div>


                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Additional Filters
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body px-1 p-0">
                        <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                          <div class="left">
                            <p class="m-0">Min load capacity</p>
                          </div>
                          <div class="right d-flex gap-2 w-50">
                            <button class="btn btn-make-filter d-flex align-items-center justify-content-between w-50">Min <i class="fa fa-chevron-down"></i></button>
                            <button class="btn btn-make-filter d-flex align-items-center justify-content-between w-50">Max <i class="fa fa-chevron-down"></i></button>
                          </div>
                        </div>

                        <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                          <div class="left w-50">
                            <p class="m-0">Location</p>
                          </div>
                          <div class="right w-50">
                            <button class="btn btn-make-filter w-100 d-flex align-items-center justify-content-between">Search <i class="fa fa-chevron-down"></i></button>
                          </div>
                        </div>

                        <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                          <div class="left w-50">
                            <p class="m-0">Colour</p>
                          </div>
                          <div class="right w-50">
                            <button class="btn btn-make-filter w-100 d-flex align-items-center justify-content-between">Search <i class="fa fa-chevron-down"></i></button>
                          </div>
                        </div>

                        <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                          <div class="left w-50">
                            <p class="m-0">Drivetrain</p>
                          </div>
                          <div class="right w-50">
                            <button class="btn btn-make-filter w-100 d-flex align-items-center justify-content-between">Search <i class="fa fa-chevron-down"></i></button>
                          </div>
                        </div>


                      </div>
                    </div>
                  </div>
                  <div class="accordion-item my-2">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Additional Features
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body px-2 py-3">
                      <div class="additional-feature-checks d-flex justify-content-between">
                        <div class="form-check form-check-inline w-50">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                          <label class="form-check-label" for="inlineCheckbox1">ABS</label>
                        </div>
                        <div class="form-check form-check-inline w-50">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                          <label class="form-check-label" for="inlineCheckbox2"> A/C </label>
                        </div>
                      </div>

                      <div class="additional-feature-checks d-flex justify-content-between pt-3">
                        <div class="form-check form-check-inline w-50">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                          <label class="form-check-label" for="inlineCheckbox1">Air Bags</label>
                        </div>
                        <div class="form-check form-check-inline w-50">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                          <label class="form-check-label" for="inlineCheckbox2">Back Camera </label>
                        </div>
                      </div>

                      <div class="additional-feature-checks d-flex justify-content-between pt-3">
                        <div class="form-check form-check-inline w-50">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                          <label class="form-check-label" for="inlineCheckbox1">Dual Airbags</label>
                        </div>
                        <div class="form-check form-check-inline w-50">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                          <label class="form-check-label" for="inlineCheckbox2">Fog Lights</label>
                        </div>
                      </div>

                      <div class="additional-feature-checks d-flex justify-content-between pt-3">
                        <div class="form-check form-check-inline w-50">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                          <label class="form-check-label" for="inlineCheckbox1">Keyless Entry</label>
                        </div>
                        <div class="form-check form-check-inline w-50">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                          <label class="form-check-label" for="inlineCheckbox2">Power Steering</label>
                        </div>
                      </div>

                      <div class="additional-feature-checks d-flex justify-content-between pt-3">
                        <div class="form-check form-check-inline w-50">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                          <label class="form-check-label" for="inlineCheckbox1">Power Windows</label>
                        </div>
                        <div class="form-check form-check-inline w-50">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                          <label class="form-check-label" for="inlineCheckbox2">Push Start</label>
                        </div>
                      </div>

                      <div class="additional-feature-checks d-flex justify-content-between pt-3">
                        <div class="form-check form-check-inline w-50">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                          <label class="form-check-label" for="inlineCheckbox1">Power Windows</label>
                        </div>
                        <div class="form-check form-check-inline w-50">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                          <label class="form-check-label" for="inlineCheckbox2">Push Start</label>
                        </div>
                      </div>

                      <div class="additional-feature-checks d-flex justify-content-between pt-3">
                        <div class="form-check form-check-inline w-50">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                          <label class="form-check-label" for="inlineCheckbox1">Rear Spoiler </label>
                        </div>
                        <div class="form-check form-check-inline w-50">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                          <label class="form-check-label" for="inlineCheckbox2">Roof Rails</label>
                        </div>
                      </div>

                      <div class="additional-feature-checks d-flex justify-content-between pt-3">
                        <div class="form-check form-check-inline w-50">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                          <label class="form-check-label" for="inlineCheckbox1">Sun Roof</label>
                        </div>
                        <div class="form-check form-check-inline w-50">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                          <label class="form-check-label" for="inlineCheckbox2"> TV </label>
                        </div>
                      </div>

                      <div class="additional-feature-checks d-flex justify-content-between pt-3">
                        <div class="form-check form-check-inline w-50">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                          <label class="form-check-label" for="inlineCheckbox1">360 Degree Camera </label>
                        </div>
                       
                      </div>

                      </div>
                    </div>
                  </div>
                 
                  <div class="deal">
                    <p class="m-0 py-3 title">Deals</p>
                  </div>
                  <div class="additional-feature-checks d-flex justify-content-between">
                    <div class="form-check form-check-inline w-50">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                      <label class="form-check-label earn-points" for="inlineCheckbox1">Earn Points</label>
                    </div>
                    <div class="form-check form-check-inline w-50">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                      <label class="form-check-label nys" for="inlineCheckbox2"> New Year Sales </label>
                    </div>
                  </div>

                  <div class="additional-feature-checks d-flex justify-content-between py-3">
                    <div class="form-check form-check-inline w-50">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                      <label class="form-check-label prem-car" for="inlineCheckbox1">Premium Cars</label>
                    </div>
                    <div class="form-check form-check-inline w-50">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                      <label class="form-check-label clear-dis" for="inlineCheckbox2"> Clearance Discount</label>
                    </div>
                  </div>



                  <div class="action-filter-buttons d-flex gap-3 my-5">
                    <button class="btn btn-reset w-50">Reset</button>
                    <button class="btn btn-submit w-50">
                      <img src="{{asset('assets/images/icons/searchIcon.svg')}}" alt="Search Icon" loading="lazy">
                      Search</button>
                  </div>
                </div>
            
        </div>
            </li>
            
            <li class="icon-sliders-cross">
               Toyota <span><i class="fa fa-close"></i></span>
          </li>
            <li class="icon-sliders" type="button" data-bs-toggle="offcanvas" data-bs-target="#makeFilterOffCanvas" aria-controls="makeFilterOffCanvas">
               Make <span><i class="fa fa-chevron-down"></i></span>
          </li>
            <li class="icon-sliders" type="button" data-bs-toggle="offcanvas" data-bs-target="#modelFilterOffCanvas" aria-controls="modelFilterOffCanvas">
               Model <span><i class="fa fa-chevron-down"></i></span>
               
          </li>
            <li class="icon-sliders" type="button" data-bs-toggle="offcanvas" data-bs-target="#yearFilterOffCanvas" aria-controls="yearFilterOffCanvas">
               Year <span><i class="fa fa-chevron-down"></i></span>
             
          </li>
            <li class="icon-sliders" type="button" data-bs-toggle="offcanvas" data-bs-target="#priceFilterOffCanvas" aria-controls="priceFilterOffCanvas">
               Price (USD) <span><i class="fa fa-chevron-down"></i></span>
               
          </li>
            <li class="icon-sliders" type="button" data-bs-toggle="offcanvas" data-bs-target="#milageFilterOffCanvas" aria-controls="milageFilterOffCanvas">
               Milage <span><i class="fa fa-chevron-down"></i></span>
               
          </li>
            <li class="icon-sliders" type="button" data-bs-toggle="offcanvas" data-bs-target="#steeringFilterOffCanvas" aria-controls="steeringFilterOffCanvas">
               Steering <span><i class="fa fa-chevron-down"></i></span>
              
          </li>
            <li class="icon-sliders" type="button" data-bs-toggle="offcanvas" data-bs-target="#transmissionFilterOffCanvas" aria-controls="transmissionFilterOffCanvas">
               Transmission <span><i class="fa fa-chevron-down"></i></span>
              
          </li>
            <li class="icon-sliders" type="button" data-bs-toggle="offcanvas" data-bs-target="#engineeFilterOffCanvas" aria-controls="engineeFilterOffCanvas">
               Engine Size <span><i class="fa fa-chevron-down"></i></span>
              
          </li>
            <li class="icon-sliders" type="button" data-bs-toggle="offcanvas" data-bs-target="#fuelFilterOffCanvas" aria-controls="fuelFilterOffCanvas">
               Fuel <span><i class="fa fa-chevron-down"></i></span>
               
          </li>
            <li class="icon-sliders border-0" style="font-size:14px; color:#5d6370;"
            type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
               Show All Filters</span>
          </li>
            
          </ul>

          {{-- Start Make Filter Search --}}
          <div class="offcanvas offcanvas-bottom" tabindex="-1" id="makeFilterOffCanvas" aria-labelledby="makeFilterOffCanvasLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0 px-3">
                <div class="search">
                    <input type="text" placeholder="Search Make" id="makeFilterSearch">
                    <img src="{{asset('assets/images/header-images/mobile-search-icon.webp')}}" alt="" loading="lazy">
                </div>
                <div class="list py-3">
                    <ul class="list-unstyled" id="makeFilterList">
                        <li data-make="Honda">Honda (1254)</li>
                        <li data-make="Yaris">Yaris (1254)</li>
                        <li data-make="Toyota">Toyota (1254)</li>
                        <li data-make="Toyota">Toyota (1254)</li>
                        <li data-make="Toyota">Toyota (1254)</li>
                        <li data-make="Toyota">Toyota (1254)</li>
                    </ul>
                </div>
            </div>
        </div>
          {{-- End Make Filter Search --}}

          {{-- Start Modal Filter Search --}}
          <div class="offcanvas offcanvas-bottom" tabindex="-1" id="modelFilterOffCanvas" aria-labelledby="modelFilterOffCanvasLabel">
            <div class="offcanvas-header">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0 px-3">
              <div class="search">
                <input type="text" placeholder="Search Model" id="modalFilterSearch">
                <img src="{{asset('assets/images/header-images/mobile-search-icon.webp')}}" alt="" loading="lazy">
              </div>
              <div class="list py-3">
                <ul class="list-unstyled" id="modalFilterList">
                  <li>Honda (1254)</li>
                  <li>Yaris (1254)</li>
                  <li>Toyota (1254)</li>
                  <li>Toyota (1254)</li>
                  <li>Toyota (1254)</li>
                  <li>Toyota (1254)</li>
                </ul>
              </div>
            </div>
          </div>
          {{-- End Modal Filter Search --}}

          {{-- Start Year Filter Search --}}
                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="yearFilterOffCanvas" aria-labelledby="yearFilterOffCanvasLabel">
                <div class="offcanvas-header">
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body p-0 px-3">
                  <div class="head">
                    <p class="m-0 title text-center">Select Model Year </p>
                  </div>

                  <div class="model-years d-flex gap-3 py-4">
                    <div class="left w-50">
                      <p class="m-0 min-year">Min Year</p>
                      <select class="form-select" aria-label="Default select example">
                        <option selected>1999</option>
                        <option value="1">2000</option>
                        <option value="2">2001</option>
                        <option value="3">2002</option>
                      </select>
                    </div>
                    <div class="right w-50">
                      <p class="m-0 max-year">Max Year</p>
                      <select class="form-select" aria-label="Default select example">
                        <option selected>1999</option>
                        <option value="1">2000</option>
                        <option value="2">2001</option>
                        <option value="3">2002</option>
                      </select>
                    </div>
                  </div>

                  <div class="action-filter-buttons d-flex gap-3 mt-5">
                    <button class="btn btn-reset w-50">Clear</button>
                    <button class="btn btn-submit w-50">Apply</button>
                  </div>

                </div>
              </div>
          {{-- End Year Filter Search --}}


          {{-- Start Price Filter Search --}}
          <div class="offcanvas offcanvas-bottom" tabindex="-1" id="priceFilterOffCanvas" aria-labelledby="priceFilterOffCanvasLabel">
            <div class="offcanvas-header">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0 px-3">
              <div class="head">
                <p class="m-0 title text-center">Select Price</p>
              </div>

              <div class="model-years d-flex gap-3 py-4">
                <div class="left w-50">
                  <p class="m-0 min-year">Min Price</p>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>1999</option>
                    <option value="1">2000</option>
                    <option value="2">2001</option>
                    <option value="3">2002</option>
                  </select>
                </div>
                <div class="right w-50">
                  <p class="m-0 max-year">Max Price</p>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>1999</option>
                    <option value="1">2000</option>
                    <option value="2">2001</option>
                    <option value="3">2002</option>
                  </select>
                </div>
              </div>

              <div class="action-filter-buttons d-flex gap-3 mt-5">
                <button class="btn btn-reset w-50">Clear</button>
                <button class="btn btn-submit w-50">Apply</button>
              </div>

            </div>
          </div>
          {{-- End Price Filter Search --}}

          {{-- Start Milage Filter Search --}}
          <div class="offcanvas offcanvas-bottom" tabindex="-1" id="milageFilterOffCanvas" aria-labelledby="milageFilterOffCanvasLabel">
            <div class="offcanvas-header">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0 px-3">
              <div class="head">
                <p class="m-0 title text-center">Select Milage</p>
              </div>

              <div class="model-years d-flex gap-3 py-4">
                <div class="left w-50">
                  <p class="m-0 min-year">Min Milage</p>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>1999</option>
                    <option value="1">2000</option>
                    <option value="2">2001</option>
                    <option value="3">2002</option>
                  </select>
                </div>
                <div class="right w-50">
                  <p class="m-0 max-year">Max Milage</p>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>1999</option>
                    <option value="1">2000</option>
                    <option value="2">2001</option>
                    <option value="3">2002</option>
                  </select>
                </div>
              </div>

              <div class="action-filter-buttons d-flex gap-3 mt-5">
                <button class="btn btn-reset w-50">Clear</button>
                <button class="btn btn-submit w-50">Apply</button>
              </div>

            </div>
          </div>
          {{-- End Milage Filter Search --}}

          {{-- Start Steering Filter Search --}}
          <div class="offcanvas offcanvas-bottom" tabindex="-1" id="steeringFilterOffCanvas" aria-labelledby="steeringFilterOffCanvasLabel">
            <div class="offcanvas-header">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0 px-3">
              <div class="search">
                <input type="text" placeholder="Search Steering" id="steeringFilterSearch">
                <img src="{{asset('assets/images/header-images/mobile-search-icon.webp')}}" alt="" loading="lazy">
              </div>
              <div class="list py-3">
                <ul class="list-unstyled" id="steeringFilterList">
                  <li>Honda (1254)</li>
                  <li>Yaris (1254)</li>
                  <li>Toyota (1254)</li>
                  <li>Toyota (1254)</li>
                  <li>Toyota (1254)</li>
                  <li>Toyota (1254)</li>
                </ul>
              </div>
            </div>
          </div>
          {{-- End Steering Filter Search --}}

          {{-- Start Transmission Filter Search --}}
          <div class="offcanvas offcanvas-bottom" tabindex="-1" id="transmissionFilterOffCanvas" aria-labelledby="transmissionFilterOffCanvasLabel">
            <div class="offcanvas-header">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0 px-3">
              <div class="search">
                <input type="text" placeholder="Search Transmission" id="transmissionFilterSearch">
                <img src="{{asset('assets/images/header-images/mobile-search-icon.webp')}}" alt="" loading="lazy">
              </div>
              <div class="list py-3">
                <ul class="list-unstyled" id="transmissionFilterList">
                  <li>Honda (1254)</li>
                  <li>Yaris (1254)</li>
                  <li>Toyota (1254)</li>
                  <li>Toyota (1254)</li>
                  <li>Toyota (1254)</li>
                  <li>Toyota (1254)</li>
                </ul>
              </div>
            </div>
          </div>
          {{-- End Transmission Filter Search --}}

          {{-- Start Engine Size Filter Search --}}
          <div class="offcanvas offcanvas-bottom" tabindex="-1" id="engineeFilterOffCanvas" aria-labelledby="engineeFilterOffCanvasLabel">
            <div class="offcanvas-header">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0 px-3">
              <div class="search">
                <input type="text" placeholder="Search Engine Size" id="enginesizeFilterSearch">
                <img src="{{asset('assets/images/header-images/mobile-search-icon.webp')}}" alt="" loading="lazy">
              </div>
              <div class="list py-3">
                <ul class="list-unstyled" id="enginesizeFilterList">
                  <li>Honda (1254)</li>
                  <li>Yaris (1254)</li>
                  <li>Toyota (1254)</li>
                  <li>Toyota (1254)</li>
                  <li>Toyota (1254)</li>
                  <li>Toyota (1254)</li>
                </ul>
              </div>
            </div>
          </div>
          {{-- End Engine Size Filter Search --}}

          {{-- Start Fuel Filter Search --}}
          <div class="offcanvas offcanvas-bottom" tabindex="-1" id="fuelFilterOffCanvas" aria-labelledby="fuelFilterOffCanvasLabel">
            <div class="offcanvas-header">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0 px-3">
              <div class="search">
                <input type="text" placeholder="Search Fuel" id="fuelFilterSearch">
                <img src="{{asset('assets/images/header-images/mobile-search-icon.webp')}}" alt="" loading="lazy">
              </div>
              <div class="list py-3">
                <ul class="list-unstyled" id="fuelFilterList">
                  <li>Honda (1254)</li>
                  <li>Yaris (1254)</li>
                  <li>Toyota (1254)</li>
                  <li>Toyota (1254)</li>
                  <li>Toyota (1254)</li>
                  <li>Toyota (1254)</li>
                </ul>
              </div>
            </div>
          </div>
          {{-- End Fuel Filter Search --}}

          {{-- Start Body Type Filter Search --}}
          <div class="offcanvas offcanvas-bottom" tabindex="-1" id="bodytypeFilterOffCanvas" aria-labelledby="bodytypeFilterOffCanvasLabel">
            <div class="offcanvas-header">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0 px-3">
              <div class="search">
                <input type="text" placeholder="Search Body Type" id="bodytypeFilterSearch">
                <img src="{{asset('assets/images/header-images/mobile-search-icon.webp')}}" alt="" loading="lazy">
              </div>
              <div class="list py-3">
                <ul class="list-unstyled" id="bodytypeFilterList">
                  <li>Honda (1254)</li>
                  <li>Yaris (1254)</li>
                  <li>Toyota (1254)</li>
                  <li>Toyota (1254)</li>
                  <li>Toyota (1254)</li>
                  <li>Toyota (1254)</li>
                </ul>
              </div>
            </div>
          </div>
          {{-- End Body Type Filter Search --}}

          {{-- Start Model Code Filter Search --}}
          <div class="offcanvas offcanvas-bottom" tabindex="-1" id="modelcodeFilterOffCanvas" aria-labelledby="modelcodeFilterOffCanvasLabel">
            <div class="offcanvas-header">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0 px-3">
              <div class="search">
                <input type="text" placeholder="Search Model Code" id="modelcodeFilterSearch">
                <img src="{{asset('assets/images/header-images/mobile-search-icon.webp')}}" alt="" loading="lazy">
              </div>
              <div class="list py-3">
                <ul class="list-unstyled" id="modelcodeFilterList">
                  <li>Honda (1254)</li>
                  <li>Yaris (1254)</li>
                  <li>Toyota (1254)</li>
                  <li>Toyota (1254)</li>
                  <li>Toyota (1254)</li>
                  <li>Toyota (1254)</li>
                </ul>
              </div>
            </div>
          </div>
          {{-- End Model Code Filter Search --}}

        </div>

        

        <div class="loti-anim text-center">
          <img src="{{asset('assets/images/lottie.webp')}}" alt="Lottie" class="img-fluid" width="300" loading="lazy">
      </div>

      <div class="mobile-anim-details">
        <div class="heading">
            <p class="m-0 pb-2">Sorry, We Could Not Find Your Car</p>
        </div>
        <div class="details">
            <p class="m-0 mb-3 para">
                It seems that we could not find any results that match your search criteria. Try out the following recommendations to help you find what you are looking for
            </p>
            <ol class="px-2">
                <li>Try reducing the number of filters you're using to broaden your search and reveal more options.</li>
                <li>Try searching with different keywords like make, model, year, color, or body type in your search</li>
                <li>Double-check your spelling to make sure there is no typing error in your search.</li>
            </ol>
        </div>
    </div>

    <div class="mobile-used-cars-search my-4">
      <div class="top">
        <div class="row">
          <div class="col-12 d-flex justify-content-between align-items-center">
              <p class="heading">Used Toyota Cars for Sale</p>
              <div class="d-flex align-items-center">
                <p class="m-0 sav-sear">Save Search <img src="{{asset('assets/images/save.gif')}}" height="16" width="16" alt=""></p>
                <div class="sort">
                  <button class="btn btn-sort-search-mobile px-1">
                  <img src="{{asset('assets/images/icons/sort-up.webp')}}" class="img-fluid mx-1" alt="sort up" loading="lazy" width="14" height="14">Sort
                </button>
              </div>
            </div>
          </div>

          <div class="mobile-car-details-search">
            <div class="inner d-flex pt-2">
              <div class="left">
                <img src="{{asset('assets/images/searchCar.webp')}}" alt="Car" class="img-fluid" loading="lazy">
                <div class="mobile-stock-search">
                  <span class="stock-text">Stock ID:</span>
                  <span class="stock-text-id">SAT-88675153</span>
                </div>
              </div>
              <div class="right px-2">
                <div class="top d-flex align-items-center gap-2 mx-2">
                  <p class="mobile-nys m-0">New Year Sales</p>
                  <p class="mobile-nys2 m-0">New Year Sales</p>
                </div>
                <div class="country d-flex align-items-center mt-2 mx-2">
                  <img src="{{asset('assets/images/country-flags/TZ.webp')}}" alt="Flag" class="img-fluid"  width="18" height="13">
                  <p class="mobile-nys2 m-0 px-2">Tanzania</p>
                </div>
                <div class="heading">
                  <p class="m-0">2018 TOYOTA LITEACE VAN DX</p>
                </div>

                <div class="mobile-spec-info d-flex px-1 gap-1">
                  <div class="inner d-flex align-items-center">
                    <p class="m-0 year">2010/6</p>
                    <span class="dot"></span>
                  </div>

                  <div class="inner d-flex align-items-center">
                    <p class="m-0 year">660cc</p>
                    <span class="dot"></span>
                  </div>

                  <div class="inner d-flex align-items-center">
                    <p class="m-0 year">12,380 km</p>
                    <span class="dot"></span>
                  </div>

                  <div class="inner d-flex align-items-center">
                    <p class="m-0 year">MT</p>
                  </div>

                </div>

                <div class="mobile-car-search-prices">
                  <div class="inner">
                    <div class="prices">
                      <p class="m-0 title">Car Price:</p>
                      <p class="m-0 amount">$20,2154 </p>
                      <p class="m-0 amount-drop">22,154870</p>
                      <p class="m-0 discount">30% off</p>
                    </div>
                  </div>
                </div>

                <div class="mobile-total-price-car">
                  <div class="inner d-flex justify-content-between pt-2 px-1">
                    <p class="m-0 title">Total Price (CIF to Mombasa):</p>
                    <p class="m-0 amount">$28,2154</p>
                  </div>
                </div>

                <div class="mobile-car-buttons-buy">
                  <div class="inner d-flex align-items-center gap-2 mt-2">
                    <button class="btn btn-inquire w-50">
                      <img src="{{asset('assets/images/icons/mail-send.webp')}}" alt="Mail" class="img-fluid" loading="lazy" width="12" height="12">
                      Inquire
                    </button>

                    <button class="btn btn-buyNow w-50">
                      <img src="{{asset('assets/images/icons/shopping-cart.webp')}}" alt="Mail" class="img-fluid" loading="lazy" width="12" height="12">
                      Buy Now
                    </button>
                  </div>
                </div>


              </div>
            </div>
            <hr>
          </div>

          <div class="mobile-car-details-search">
            <div class="inner d-flex pt-2">
              <div class="left">
                <img src="{{asset('assets/images/searchCar.webp')}}" alt="Car" class="img-fluid" loading="lazy">
                <p class="overlay m-0"><span class="dot">&dot;</span>Sold<span class="dot">&dot;</span></p>
                <div class="mobile-stock-search">
                  <span class="stock-text">Stock ID:</span>
                  <span class="stock-text-id">SAT-88675153</span>
                </div>
              </div>
              <div class="right px-2">
                <div class="top d-flex align-items-center gap-2 mx-2">
                  <p class="mobile-nys m-0">New Year Sales</p>
                  <p class="mobile-nys2 m-0">New Year Sales</p>
                </div>
                <div class="country d-flex align-items-center mt-2 mx-2">
                  <img src="{{asset('assets/images/country-flags/TZ.webp')}}" alt="Flag" class="img-fluid"  width="18" height="13">
                  <p class="mobile-nys2 m-0 px-2">Tanzania</p>
                </div>
                <div class="heading">
                  <p class="m-0">2018 TOYOTA LITEACE VAN DX</p>
                </div>

                <div class="mobile-spec-info d-flex px-1 gap-1">
                  <div class="inner d-flex align-items-center">
                    <p class="m-0 year">2010/6</p>
                    <span class="dot"></span>
                  </div>

                  <div class="inner d-flex align-items-center">
                    <p class="m-0 year">660cc</p>
                    <span class="dot"></span>
                  </div>

                  <div class="inner d-flex align-items-center">
                    <p class="m-0 year">12,380 km</p>
                    <span class="dot"></span>
                  </div>

                  <div class="inner d-flex align-items-center">
                    <p class="m-0 year">MT</p>
                  </div>

                </div>

                <div class="mobile-car-search-prices">
                  <div class="inner">
                    <div class="prices">
                      <p class="m-0 title">Car Price:</p>
                      <p class="m-0 amount">$20,2154 </p>
                      <p class="m-0 amount-drop">22,154870</p>
                      <p class="m-0 discount">30% off</p>
                    </div>
                  </div>
                </div>

                <div class="mobile-total-price-car">
                  <div class="inner d-flex justify-content-between pt-2 px-1">
                    <p class="m-0 title">Total Price (CIF to Mombasa):</p>
                    <p class="m-0 amount">$28,2154</p>
                  </div>
                </div>

                <div class="mobile-car-buttons-buy">
                  <div class="inner d-flex align-items-center gap-2 mt-2">
                    <button class="btn btn-inquire w-50">
                      <img src="{{asset('assets/images/icons/mail-send.webp')}}" alt="Mail" class="img-fluid" loading="lazy" width="12" height="12">
                      Inquire
                    </button>

                    <button class="btn btn-buyNow w-50">
                      <img src="{{asset('assets/images/icons/shopping-cart.webp')}}" alt="Mail" class="img-fluid" loading="lazy" width="12" height="12">
                      Buy Now
                    </button>
                  </div>
                </div>


              </div>
            </div>
            <hr>
          </div>

          <div class="mobile-searh-pagination">
            <div class="inner d-flex align-items-center gap-3 pb-3">
              <div class="prev d-flex align-items-center">
                <i class="fa fa-chevron-left px-2"></i>
                <p class="m-0">Prev</p>
              </div>
              <div class="page-list">
               <ul class="list-unstyled d-flex m-0 gap-4">
                <li class="list-page active">1</li>
                <li class="list-page hover">2</li>
                <li class="list-page">3</li>
                <li class="list-page">4</li>
                <li class="list-page">5</li>
                <li class="list-page">6</li>
                <li class="list-page">7</li>
               </ul>
              </div>
              <div class="next">
                <p class="m-0">Next</p> 
              </div>
            </div>
          </div>
      </div>

      </div>
    </div>

   
    @component('used_car.partial.similar-car')
    @endcomponent

    <div class="mobile-used-car-sale pb-4">
      <div class="inner">
        <div class="heading py-3">
          <p class="m-0"> Toyota Used Cars for Sale</p>
        </div>
        <div class="details">
          <p class="m-0 para">Are you looking for a reliable used Toyota   cars from Japan? Explore our selection of premium used vehicles imported directly from Japan. Each car is meticulously inspected and certified to ensure optimal performance and reliability on the road.</p>
        </div>

        <div class="mobile-search-view-text text-center py-3">
          <p class="m-0 view-all" id="toggleView" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">View All</p>
          
          <div class="collapse" id="collapseExample">
            <div class="heading pb-3">
              <p class="m-0 text-start"> Performance and Safety:</p>
            </div>
            <div class="details">
              <p class="m-0 para">Toyota   is equipped with advanced safety features and cutting-edge technology to ensure a smooth and secure driving experience. From robust engines to fuel-efficient systems, these   deliver exceptional performance on every journey. With   efficiency and a powerful   engine, you can trust the Toyota   for any driving conditions. The   steering and   transmission further enhance your driving comfort and control. Available in   color with a   drive train, these cars offer a versatile and stylish option for any driver.</p>
            </div>

            <div class="heading py-3">
              <p class="m-0 text-start">Interior and Comfort:</p>
            </div>
            <div class="details">
              <p class="m-0 para">
                Our inventory includes numerous models, ranging from luxurious sports cars to classic favorites. Step into the world of 
                <a href="https://satjapan.com/" class="text-decoration-none" style="color:#2384c1;"><b>Used Cars for Sale</b></a>
                and experience comfort like never before. With spacious seating, premium upholstery options, and infotainment systems, Toyota   combines luxury with practicality.

              </p>
            </div>

            <div class="heading py-3">
              <p class="m-0 text-start">Why Choose SAT Japan?</p>
            </div>
            <div class="details">
              <p class="m-0 para">
                At SAT Japan, we prioritize quality and customer satisfaction above all else. Our team of experts meticulously selects each Toyota   to meet our high standards of excellence. Whether you're purchasing your first car or upgrading to a newer model, we're committed to helping you find the perfect car to suit your lifestyle and budget.
                <br/><br/>
                Browse our inventory of <a href="https://satjapan.com/used-cars" class="text-decoration-none" style="color:#2384c1;"><b>Best Japanese Cars</b></a>
                and discover why discerning drivers choose <b>SAT Japan</b>
                for their used car needs. Contact us today to reserve a car for just $99 or learn more about our flexible financing options.
              </p>
            </div>
            <p class="m-0 view-all pt-3" id="toggleViewLess" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">View Less</p>
          </div>
        </div>

      </div>
    </div>


    <div class="mobile-frc-section">
      <div class="inner">
        <div class="heading">
          <p class="m-0">Further Car Resources</p>
        </div>
        <div class="accordion accordion-flush" id="accordionFurtherCarResources">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#FRC1" aria-expanded="false" aria-controls="FRC1">
                Most Popular Toyota 4Runner By Year
              </button>
            </h2>
            <div id="FRC1" class="accordion-collapse collapse" data-bs-parent="#accordionFurtherCarResources">
             
                <div class="accordion-body py-3 px-2">
                  <ul class="list-unstyled">
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2021 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2020 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2019 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2018 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2017 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2016 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2015 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2014 TOYOTA 4Runner
                      </a>
                  </ul>
                  <ul class="list-unstyled">
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2021 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2020 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2019 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2018 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2017 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2016 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2015 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2014 TOYOTA 4Runner
                      </a>
                  </ul>
              
              </div>
            </div>
          </div>

          <div class="accordion-item mt-2">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#FRC2" aria-expanded="false" aria-controls="FRC2">
                Most Popular Toyota Models
              </button>
            </h2>
            <div id="FRC2" class="accordion-collapse collapse" data-bs-parent="#accordionFurtherCarResources">
             
                <div class="accordion-body py-3 px-2">
                  <ul class="list-unstyled">
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2021 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2020 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2019 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2018 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2017 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2016 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2015 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2014 TOYOTA 4Runner
                      </a>
                  </ul>
                  <ul class="list-unstyled">
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2021 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2020 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2019 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2018 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2017 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2016 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2015 TOYOTA 4Runner
                      </a>
                      <a href="javascript:;" class="list-group-item border-0 p-0">
                          2014 TOYOTA 4Runner
                      </a>
                  </ul>
              
              </div>
            </div>
          </div>

          <div class="accordion-item mt-2">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#FRC3" aria-expanded="false" aria-controls="FRC3">
                Most Popular Toyota Types
              </button>
            </h2>
            <div id="FRC3" class="accordion-collapse collapse" data-bs-parent="#accordionFurtherCarResources">
             
                <div class="accordion-body py-3 px-2">
                  <ul class="list-unstyled">
                    <a href="javascript:;" class="list-group-item border-0 p-0">
                        2021 TOYOTA SUV
                    </a>
                    <a href="javascript:;" class="list-group-item border-0 p-0">
                        2020 TOYOTA Hatchback
                    </a>
                    <a href="javascript:;" class="list-group-item border-0 p-0">
                        2021 TOYOTA Crossover
                    </a>
                    <a href="javascript:;" class="list-group-item border-0 p-0">
                        2020 TOYOTA Convertible
                    </a>
                    <a href="javascript:;" class="list-group-item border-0 p-0">
                        2021 TOYOTA Wagon
                    </a>
                </ul>

                <ul class="list-unstyled">
                  <a href="javascript:;" class="list-group-item border-0 p-0">
                      2021 TOYOTA Mini Van
                  </a>
                  <a href="javascript:;" class="list-group-item border-0 p-0">
                      2020 TOYOTA Sedan
                  </a>
                  <a href="javascript:;" class="list-group-item border-0 p-0">
                      2021 TOYOTA Coupe
                  </a>
                  <a href="javascript:;" class="list-group-item border-0 p-0">
                      2020 TOYOTA Bus
                  </a>
                  <a href="javascript:;" class="list-group-item border-0 p-0">
                      2020 TOYOTA Bus
                  </a>
              </ul>
              </div>
            </div>
          </div>

          <div class="accordion-item mt-2">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#FRC4" aria-expanded="false" aria-controls="FRC4">
                Most Popular Toyota 4Runner Model Codes
              </button>
            </h2>
            <div id="FRC4" class="accordion-collapse collapse" data-bs-parent="#accordionFurtherCarResources">
             
                <div class="accordion-body py-3 px-2">
                  <ul class="list-unstyled">
                    <a href="javascript:;" class="list-group-item border-0 p-0">
                        2021 TOYOTA SUV
                    </a>
                    <a href="javascript:;" class="list-group-item border-0 p-0">
                        2020 TOYOTA Hatchback
                    </a>
                    <a href="javascript:;" class="list-group-item border-0 p-0">
                        2021 TOYOTA Crossover
                    </a>
                    <a href="javascript:;" class="list-group-item border-0 p-0">
                        2020 TOYOTA Convertible
                    </a>
                    <a href="javascript:;" class="list-group-item border-0 p-0">
                        2021 TOYOTA Wagon
                    </a>
                </ul>

                <ul class="list-unstyled">
                  <a href="javascript:;" class="list-group-item border-0 p-0">
                      2021 TOYOTA Mini Van
                  </a>
                  <a href="javascript:;" class="list-group-item border-0 p-0">
                      2020 TOYOTA Sedan
                  </a>
                  <a href="javascript:;" class="list-group-item border-0 p-0">
                      2021 TOYOTA Coupe
                  </a>
                  <a href="javascript:;" class="list-group-item border-0 p-0">
                      2020 TOYOTA Bus
                  </a>
                  <a href="javascript:;" class="list-group-item border-0 p-0">
                      2020 TOYOTA Bus
                  </a>
              </ul>
              </div>
            </div>
          </div>


          <div class="accordion-item mt-2">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#FRC5" aria-expanded="false" aria-controls="FRC5">
                Most Popular by Inventory Location
              </button>
            </h2>
            <div id="FRC5" class="accordion-collapse collapse" data-bs-parent="#accordionFurtherCarResources">
             
                <div class="accordion-body py-3 px-2">
                  <ul class="list-unstyled">
                    <a href="javascript:;" class="list-group-item border-0 p-0">
                        Japan
                    </a>
                    <a href="javascript:;" class="list-group-item border-0 p-0">
                        Tanzania
                    </a>
                    <a href="javascript:;" class="list-group-item border-0 p-0">
                        Dominican Republic
                    </a>
                    <a href="javascript:;" class="list-group-item border-0 p-0">
                        Chile
                    </a>
                    <a href="javascript:;" class="list-group-item border-0 p-0">
                        Kenya
                    </a>
                </ul>

              </div>
            </div>
          </div>

        </div>

        
      </div>
    </div>
   
  
    @component('used_car.partial.customer_review')
    @endcomponent


  

      </div>
    </div>
  </div>
</section>



