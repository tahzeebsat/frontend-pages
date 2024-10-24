<section>
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
                            <div class="shipping-calculate d-flex flex-column gap-4 px-4">
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
                            <button class="login">
                              <img src="{{asset('assets/images/icons/mail-add-line.png')}}" alt="search" class="img-fluid px-1" loading="lazy">Set Search Alert</button>
                            <p class="account-status">Dont have an account?<span class="login-redirect">Login</span></p>
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
                        <option selected>Min load capacity</option>
                        <option value="1">1999</option>
                      </select>
                      <select class="form-select selection-search" aria-label="Default select example">
                        <option selected>Max load capacity</option>
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



