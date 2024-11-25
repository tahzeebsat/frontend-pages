<section class="desktop2-view">
    <div class="advance-search-calculator pt-2" role="region" aria-labelledby="search-calculator-heading">
        <div class="container">
            <div class="searchItemsCar">
              <div class="wrapper">
                <h3 class="pb-3 mainHeading">Auto Parts Search</h3>
                <div class="row mb-2">
                  <div class="col-md-3 position-relative">
                    
                    <select id="mySelect" class="form-select custom-select" aria-label="Default select example">
                      <option value="">Select a car</option>
                      <option value="honda">Honda</option>
                      <option value="mazda">Mazda</option>
                  </select>
                  <i class="fas fa-times close-icon" id="closeIcon" style="display: none;"></i>
                  </div>
                  <div class="col-md-3">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>Modal</option>
                      <option value="1">Toyota</option>
                      <option value="2">Mazda</option>
                    </select>
                    
                  </div>
                  <div class="col-md-3">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>Model Code</option>
                      <option value="1">2223</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>Category</option>
                      <option value="1">12</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-2">

                  <div class="col-md-3 d-flex">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>Condition</option>
                      <option value="1">New</option>
                    </select>
                    
                  </div>
                  <div class="col-md-3 d-flex">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>Year (Min)</option>
                      <option value="1">2018</option>
                    </select>
                    
                  </div>
                  <div class="col-md-3 d-flex">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>Year (Max)</option>
                      <option value="1">2024</option>
                    </select>
                    
                  </div>

                  <div class="col-md-3 d-flex gap-2">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>Min Price</option>
                      <option value="1">500</option>
                    </select>
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>Max Price</option>
                      <option value="1">1000</option>
                    </select>
                  </div>
                 
                </div>


                <div class="d-flex flex-row px-1 my-4">
                  <div class="form-check me-5">
                      <input class="form-check-input" type="checkbox" id="lv" value="lv">
                      <label class="form-check-label lv" for="lv">New Year Sale</label>
                  </div>
                  <div class="form-check me-5">
                      <input class="form-check-input" type="checkbox" id="lm" value="lm">
                      <label class="form-check-label lm" for="lm">Premium Cars</label>
                  </div>
                  <div class="form-check me-5">
                      <input class="form-check-input" type="checkbox" id="fs" value="fs">
                      <label class="form-check-label fs" for="fs">Clearance Discount</label>
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
                  <p class="m-0">Recommended for You</p>
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
                  <div class="col item autopartSearch">
                      <div class="card">
                          <div class="card-body">
                            <div class="wrappers">
                              <div class="col-md-2 top-card-image">
                                <img src="{{asset('assets/images/Img.webp')}}" alt="Search Car" class="img-fluid" loading="lazy">
                                <div class="percent-off">
                                    <span>
                                      <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.18734 0.696289L7.99047 1.23992L8.53372 5.04343L5.00221 8.57493C4.93017 8.64696 4.83246 8.68742 4.73059 8.68742C4.62872 8.68742 4.53101 8.64696 4.45897 8.57493L0.655455 4.77142C0.58343 4.69938 0.542969 4.60167 0.542969 4.4998C0.542969 4.39793 0.58343 4.30022 0.655455 4.22818L4.18734 0.696289ZM5.27384 3.95655C5.3452 4.02789 5.42992 4.08448 5.52316 4.12308C5.61639 4.16168 5.71632 4.18153 5.81722 4.18152C5.91813 4.1815 6.01805 4.1616 6.11127 4.12297C6.20449 4.08434 6.28919 4.02772 6.36053 3.95636C6.43187 3.88499 6.48846 3.80027 6.52705 3.70704C6.56565 3.61381 6.58551 3.51388 6.58549 3.41297C6.58548 3.31207 6.56558 3.21215 6.52695 3.11893C6.48832 3.02571 6.4317 2.94101 6.36034 2.86967C6.28897 2.79833 6.20425 2.74174 6.11102 2.70314C6.01778 2.66454 5.91786 2.64469 5.81695 2.6447C5.61316 2.64474 5.41773 2.72573 5.27365 2.86986C5.12957 3.01399 5.04865 3.20945 5.04868 3.41325C5.04872 3.61704 5.12971 3.81247 5.27384 3.95655Z" fill="white"/>
                                        </svg>
                                        30% off</span>
                                  </div>
                                <p class="stocks"><span>Stock ID: </span>SAT-88675153</p>
                              </div>

                              <div class="col-md-7 center">
                                <div class="top-points">

                                  <div class="sale">
                                    <p class="m-0">New Year Sales</p>
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
                                  <p class="m-0">A/C Compressor HONDA N BOX 2015</p>
                                </div>

                                <div class="car-details">
                                  <div class="col-md-2 detail1">

                                    <div class="more-detail mt-1">
                                      <div class="model-code">
                                        <div class="top">
                                            <p class="m-0 head">Make</p>
                                        </div>
                                        <div class="bottom d-flex">
                                          <p class="m-0">Suzukidesa</p>
                                          <span class="dot ms-3"></span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-2 detail1">
                                    <div class="more-detail mt-1">
                                        <div class="model-code">
                                            <div class="top">
                                                <p class="m-0 head">Model</p>
                                            </div>
                                            <div class="bottom d-flex">
                                              <p class="m-0">Fit1234567</p>
                                              <span class="dot ms-3"></span>
                                            </div>
                                          </div>
                                    </div>
                                  </div>
                                  <div class="col-md-2 detail1">
                                    <div class="more-detail mt-1">
                                        <div class="model-code">
                                            <div class="top">
                                                <p class="m-0 head">Model Code</p>
                                            </div>
                                            <div class="bottom d-flex">
                                              <p class="m-0">fdf58564666</p>
                                              <span class="dot ms-3"></span>
                                            </div>
                                          </div>
                                    </div>
                                  </div>
                                  <div class="col-md-2 detail1">
                                    <div class="more-detail mt-1">
                                        <div class="model-code">
                                            <div class="top">
                                                <p class="m-0 head">Condition</p>
                                            </div>
                                            <div class="bottom d-flex">
                                              <p class="m-0">Used</p>
                                            </div>
                                          </div>
                                    </div>
                                  </div>

                                  <div class="col-md-4 detail1">
                                    <div class="more-detail mt-1">
                                        <div class="model-code text-end">
                                            <div class="priceList d-flex flex-column">
                                                <p class="m-0 w-100 offRateate">3% off</p>
                                                <p class="m-0 w-100 disRate text-decoration-line-through">$22,317</p>
                                                <p class="m-0 w-100 totalRate"><span class="mx-2">Price:</span>$20,000,00</p>
                                            </div>
                                           
                                          </div>
                                    </div>
                                  </div>
                                 
                                </div>

                                <div class="grid-details">
                                  <div class="top">
                                    <div class="mark">
                                      <p class="sale m-0">New Year Sale</p>
                                      <p class="loc m-0 ms-5 ps-4">Location:</p>
                                      <img src="{{asset('assets/images/country-flags/PK.webp')}}" alt="Flag" class="img-fluid gridImg" loading="lazy">
                                      <p class="count m-0">Japan</p>
                                    </div>

                                    <div class="heading">
                                      <p class="title py-2 px-2">A/C Compressor HONDA N BOX 2015</p>
                                    </div>

                                    <div class="details">
                                      <div class="inner">
                                        <div class="year">
                                          <p class="m-0 title">Make</p>
                                          <p class="m-0 date">Suzukidesa</p>
                                        </div>
                                        <div class="dot"></div>
                                      </div>

                                      <div class="inner">
                                        <div class="year">
                                          <p class="m-0 title">Model</p>
                                          <p class="m-0 date">Fit1234567</p>
                                        </div>
                                        <div class="dot"></div>
                                      </div>

                                      <div class="inner">
                                        <div class="year">
                                          <p class="m-0 title">Model Code</p>
                                          <p class="m-0 date">fdf58564666</p>
                                        </div>
                                        <div class="dot"></div>
                                      </div>

                                      <div class="inner">
                                        <div class="year">
                                          <p class="m-0 title">Condition</p>
                                          <p class="m-0 date">Used</p>
                                        </div>
                                        
                                      </div>
                                     
                                    </div>

                                    <div class="pricing mt-3">
                                     <p class="price m-0 fs-6">Stock ID:</p>
                                     <p class="total m-0">SAT-88675153</p>
                                    </div>

                                    <div class="pricing mt-2">
                                     <p class="price m-0 fs-6 position-relative pt-4 mt-3">Price:</p>
                                    <div class="priceListGrid d-flex flex-column text-end">
                                        <p class="perOffGrid m-0">3% off</p>
                                        <p class="priceGrid m-0">$22,317</p>
                                        <p class="totalGrid m-0">$20,000,00</p>
                                    </div>
                                    </div>

                                    <div class="action-buying mt-3 mb-2">
                                        <button class="btn btn-quote">Add to Cart</button>
                                      <button class="btn btn-buy">Buy Now</button>
                                     </div>

                                  </div>
                                </div>
                              </div>

                              <div class="col-md-3 right">
                                <div class="countryLoc ms-4">
                                  <div class="top ms-4">
                                    <p class="m-0 title ms-2">Location:</p>
                                    <img src="{{asset('assets/images/country-flags/PK.webp')}}" alt="Flag" class="img-fluid" loading="lazy">
                                    <p class="m-0 name">Japan</p>
                                  </div>
                                </div>
                               
                                <div class="action-buy ms-4">
                                    <button class="btn btn-quote mt-4 mb-2">Add to Cart</button>
                                  <button class="btn btn-buy my-0">Buy Now</button>
                                  <button class="btn btn-notify">Notify If Available</button>
                                </div>
                              </div>


                            </div>
                          </div>
                      </div>
                      <hr>
                  </div>

                  <div class="col item autopartSearch">
                    <div class="card">
                        <div class="card-body">
                          <div class="wrappers">
                            <div class="col-md-2 top-card-image">
                              <img src="{{asset('assets/images/Img.webp')}}" alt="Search Car" class="img-fluid" loading="lazy">
                              <div class="percent-off">
                                <span>
                                  <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.18734 0.696289L7.99047 1.23992L8.53372 5.04343L5.00221 8.57493C4.93017 8.64696 4.83246 8.68742 4.73059 8.68742C4.62872 8.68742 4.53101 8.64696 4.45897 8.57493L0.655455 4.77142C0.58343 4.69938 0.542969 4.60167 0.542969 4.4998C0.542969 4.39793 0.58343 4.30022 0.655455 4.22818L4.18734 0.696289ZM5.27384 3.95655C5.3452 4.02789 5.42992 4.08448 5.52316 4.12308C5.61639 4.16168 5.71632 4.18153 5.81722 4.18152C5.91813 4.1815 6.01805 4.1616 6.11127 4.12297C6.20449 4.08434 6.28919 4.02772 6.36053 3.95636C6.43187 3.88499 6.48846 3.80027 6.52705 3.70704C6.56565 3.61381 6.58551 3.51388 6.58549 3.41297C6.58548 3.31207 6.56558 3.21215 6.52695 3.11893C6.48832 3.02571 6.4317 2.94101 6.36034 2.86967C6.28897 2.79833 6.20425 2.74174 6.11102 2.70314C6.01778 2.66454 5.91786 2.64469 5.81695 2.6447C5.61316 2.64474 5.41773 2.72573 5.27365 2.86986C5.12957 3.01399 5.04865 3.20945 5.04868 3.41325C5.04872 3.61704 5.12971 3.81247 5.27384 3.95655Z" fill="white"/>
                                    </svg>
                                    30% off</span>
                              </div>
                              <p class="stocks"><span>Stock ID: </span>SAT-88675153</p>
                            </div>

                            <div class="col-md-7 center">
                              <div class="top-points">

                                <div class="sale">
                                  <p class="m-0">New Year Sales</p>
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
                                <p class="m-0">A/C Compressor HONDA N BOX 2015</p>
                              </div>

                              <div class="car-details">
                                <div class="col-md-2 detail1">

                                  <div class="more-detail mt-1">
                                    <div class="model-code">
                                      <div class="top">
                                          <p class="m-0 head">Make</p>
                                      </div>
                                      <div class="bottom d-flex">
                                        <p class="m-0">Suzukidesa</p>
                                        <span class="dot ms-3"></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-2 detail1">
                                  <div class="more-detail mt-1">
                                      <div class="model-code">
                                          <div class="top">
                                              <p class="m-0 head">Model</p>
                                          </div>
                                          <div class="bottom d-flex">
                                            <p class="m-0">Fit1234567</p>
                                            <span class="dot ms-3"></span>
                                          </div>
                                        </div>
                                  </div>
                                </div>
                                <div class="col-md-2 detail1">
                                  <div class="more-detail mt-1">
                                      <div class="model-code">
                                          <div class="top">
                                              <p class="m-0 head">Model Code</p>
                                          </div>
                                          <div class="bottom d-flex">
                                            <p class="m-0">fdf58564666</p>
                                            <span class="dot ms-3"></span>
                                          </div>
                                        </div>
                                  </div>
                                </div>
                                <div class="col-md-2 detail1">
                                  <div class="more-detail mt-1">
                                      <div class="model-code">
                                          <div class="top">
                                              <p class="m-0 head">Condition</p>
                                          </div>
                                          <div class="bottom d-flex">
                                            <p class="m-0">Used</p>
                                          </div>
                                        </div>
                                  </div>
                                </div>

                                <div class="col-md-4 detail1">
                                  <div class="more-detail mt-1">
                                      <div class="model-code text-end">
                                          <div class="priceList d-flex flex-column">
                                              <p class="m-0 w-100 offRateate">3% off</p>
                                              <p class="m-0 w-100 disRate text-decoration-line-through">$22,317</p>
                                              <p class="m-0 w-100 totalRate"><span class="mx-2">Price:</span>$20,000,00</p>
                                          </div>
                                         
                                        </div>
                                  </div>
                                </div>
                               
                              </div>

                              <div class="grid-details">
                                <div class="top">
                                  <div class="mark">
                                    <p class="sale m-0">New Year Sale</p>
                                    <p class="loc m-0 ms-5 ps-4">Location:</p>
                                    <img src="{{asset('assets/images/country-flags/PK.webp')}}" alt="Flag" class="img-fluid gridImg" loading="lazy">
                                    <p class="count m-0">Japan</p>
                                  </div>

                                  <div class="heading">
                                    <p class="title py-2 px-2">A/C Compressor HONDA N BOX 2015</p>
                                  </div>

                                  <div class="details">
                                    <div class="inner">
                                      <div class="year">
                                        <p class="m-0 title">Make</p>
                                        <p class="m-0 date">Suzukidesa</p>
                                      </div>
                                      <div class="dot"></div>
                                    </div>

                                    <div class="inner">
                                      <div class="year">
                                        <p class="m-0 title">Model</p>
                                        <p class="m-0 date">Fit1234567</p>
                                      </div>
                                      <div class="dot"></div>
                                    </div>

                                    <div class="inner">
                                      <div class="year">
                                        <p class="m-0 title">Model Code</p>
                                        <p class="m-0 date">fdf58564666</p>
                                      </div>
                                      <div class="dot"></div>
                                    </div>

                                    <div class="inner">
                                      <div class="year">
                                        <p class="m-0 title">Condition</p>
                                        <p class="m-0 date">Used</p>
                                      </div>
                                      
                                    </div>
                                   
                                  </div>

                                  <div class="pricing mt-3">
                                   <p class="price m-0 fs-6">Stock ID:</p>
                                   <p class="total m-0">SAT-88675153</p>
                                  </div>

                                  <div class="pricing mt-2">
                                   <p class="price m-0 fs-6 position-relative pt-4 mt-3">Price:</p>
                                  <div class="priceListGrid d-flex flex-column text-end">
                                      <p class="perOffGrid m-0">3% off</p>
                                      <p class="priceGrid m-0">$22,317</p>
                                      <p class="totalGrid m-0">$20,000,00</p>
                                  </div>
                                  </div>

                                  <div class="action-buying mt-3 mb-2">
                                      <button class="btn btn-quote">Add to Cart</button>
                                    <button class="btn btn-buy">Buy Now</button>
                                   </div>

                                </div>
                              </div>
                            </div>

                            <div class="col-md-3 right">
                              <div class="countryLoc ms-5">
                                <div class="top ms-4">
                                  <p class="m-0 title ms-2">Location:</p>
                                  <img src="{{asset('assets/images/country-flags/PK.webp')}}" alt="Flag" class="img-fluid" loading="lazy">
                                  <p class="m-0 name">Japan</p>
                                </div>
                              </div>
                             
                              <div class="action-buy ms-5">
                                  <button class="btn btn-quote mt-4 mb-2">Add to Cart</button>
                                <button class="btn btn-buy my-0">Buy Now</button>
                                <button class="btn btn-notify">Notify If Available</button>
                              </div>
                            </div>


                          </div>
                        </div>
                    </div>
                    <hr>
                </div>


                <div class="col item autopartSearch">
                    <div class="card">
                        <div class="card-body">
                          <div class="wrappers">
                            <div class="col-md-2 top-card-image">
                              <img src="{{asset('assets/images/Img.webp')}}" alt="Search Car" class="img-fluid" loading="lazy">
                              <div class="percent-off">
                                <span>
                                  <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.18734 0.696289L7.99047 1.23992L8.53372 5.04343L5.00221 8.57493C4.93017 8.64696 4.83246 8.68742 4.73059 8.68742C4.62872 8.68742 4.53101 8.64696 4.45897 8.57493L0.655455 4.77142C0.58343 4.69938 0.542969 4.60167 0.542969 4.4998C0.542969 4.39793 0.58343 4.30022 0.655455 4.22818L4.18734 0.696289ZM5.27384 3.95655C5.3452 4.02789 5.42992 4.08448 5.52316 4.12308C5.61639 4.16168 5.71632 4.18153 5.81722 4.18152C5.91813 4.1815 6.01805 4.1616 6.11127 4.12297C6.20449 4.08434 6.28919 4.02772 6.36053 3.95636C6.43187 3.88499 6.48846 3.80027 6.52705 3.70704C6.56565 3.61381 6.58551 3.51388 6.58549 3.41297C6.58548 3.31207 6.56558 3.21215 6.52695 3.11893C6.48832 3.02571 6.4317 2.94101 6.36034 2.86967C6.28897 2.79833 6.20425 2.74174 6.11102 2.70314C6.01778 2.66454 5.91786 2.64469 5.81695 2.6447C5.61316 2.64474 5.41773 2.72573 5.27365 2.86986C5.12957 3.01399 5.04865 3.20945 5.04868 3.41325C5.04872 3.61704 5.12971 3.81247 5.27384 3.95655Z" fill="white"/>
                                    </svg>
                                    30% off</span>
                              </div>
                              <p class="stocks"><span>Stock ID: </span>SAT-88675153</p>
                            </div>

                            <div class="col-md-7 center">
                              <div class="top-points">

                                <div class="sale">
                                  <p class="m-0">New Year Sales</p>
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
                                <p class="m-0">A/C Compressor HONDA N BOX 2015</p>
                              </div>

                              <div class="car-details">
                                <div class="col-md-2 detail1">

                                  <div class="more-detail mt-1">
                                    <div class="model-code">
                                      <div class="top">
                                          <p class="m-0 head">Make</p>
                                      </div>
                                      <div class="bottom d-flex">
                                        <p class="m-0">Suzukidesa</p>
                                        <span class="dot ms-3"></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-2 detail1">
                                  <div class="more-detail mt-1">
                                      <div class="model-code">
                                          <div class="top">
                                              <p class="m-0 head">Model</p>
                                          </div>
                                          <div class="bottom d-flex">
                                            <p class="m-0">Fit1234567</p>
                                            <span class="dot ms-3"></span>
                                          </div>
                                        </div>
                                  </div>
                                </div>
                                <div class="col-md-2 detail1">
                                  <div class="more-detail mt-1">
                                      <div class="model-code">
                                          <div class="top">
                                              <p class="m-0 head">Model Code</p>
                                          </div>
                                          <div class="bottom d-flex">
                                            <p class="m-0">fdf58564666</p>
                                            <span class="dot ms-3"></span>
                                          </div>
                                        </div>
                                  </div>
                                </div>
                                <div class="col-md-2 detail1">
                                  <div class="more-detail mt-1">
                                      <div class="model-code">
                                          <div class="top">
                                              <p class="m-0 head">Condition</p>
                                          </div>
                                          <div class="bottom d-flex">
                                            <p class="m-0">Used</p>
                                          </div>
                                        </div>
                                  </div>
                                </div>

                                <div class="col-md-4 detail1">
                                  <div class="more-detail mt-1">
                                      <div class="model-code text-end">
                                          <div class="priceList d-flex flex-column">
                                              <p class="m-0 w-100 offRateate">3% off</p>
                                              <p class="m-0 w-100 disRate text-decoration-line-through">$22,317</p>
                                              <p class="m-0 w-100 totalRate"><span class="mx-2">Price:</span>$20,000,00</p>
                                          </div>
                                         
                                        </div>
                                  </div>
                                </div>
                               
                              </div>

                              <div class="grid-details">
                                <div class="top">
                                  <div class="mark">
                                    <p class="sale m-0">New Year Sale</p>
                                    <p class="loc m-0 ms-5 ps-4">Location:</p>
                                    <img src="{{asset('assets/images/country-flags/PK.webp')}}" alt="Flag" class="img-fluid gridImg" loading="lazy">
                                    <p class="count m-0">Japan</p>
                                  </div>

                                  <div class="heading">
                                    <p class="title py-2 px-2">A/C Compressor HONDA N BOX 2015</p>
                                  </div>

                                  <div class="details">
                                    <div class="inner">
                                      <div class="year">
                                        <p class="m-0 title">Make</p>
                                        <p class="m-0 date">Suzukidesa</p>
                                      </div>
                                      <div class="dot"></div>
                                    </div>

                                    <div class="inner">
                                      <div class="year">
                                        <p class="m-0 title">Model</p>
                                        <p class="m-0 date">Fit1234567</p>
                                      </div>
                                      <div class="dot"></div>
                                    </div>

                                    <div class="inner">
                                      <div class="year">
                                        <p class="m-0 title">Model Code</p>
                                        <p class="m-0 date">fdf58564666</p>
                                      </div>
                                      <div class="dot"></div>
                                    </div>

                                    <div class="inner">
                                      <div class="year">
                                        <p class="m-0 title">Condition</p>
                                        <p class="m-0 date">Used</p>
                                      </div>
                                      
                                    </div>
                                   
                                  </div>

                                  <div class="pricing mt-3">
                                   <p class="price m-0 fs-6">Stock ID:</p>
                                   <p class="total m-0">SAT-88675153</p>
                                  </div>

                                  <div class="pricing mt-2">
                                   <p class="price m-0 fs-6 position-relative pt-4 mt-3">Price:</p>
                                  <div class="priceListGrid d-flex flex-column text-end">
                                      <p class="perOffGrid m-0">3% off</p>
                                      <p class="priceGrid m-0">$22,317</p>
                                      <p class="totalGrid m-0">$20,000,00</p>
                                  </div>
                                  </div>

                                  <div class="action-buying mt-3 mb-2">
                                      <button class="btn btn-quote">Add to Cart</button>
                                    <button class="btn btn-buy">Buy Now</button>
                                   </div>

                                </div>
                              </div>
                            </div>

                            <div class="col-md-3 right">
                              <div class="countryLoc ms-5">
                                <div class="top ms-4">
                                  <p class="m-0 title ms-2">Location:</p>
                                  <img src="{{asset('assets/images/country-flags/PK.webp')}}" alt="Flag" class="img-fluid" loading="lazy">
                                  <p class="m-0 name">Japan</p>
                                </div>
                              </div>
                             
                              <div class="action-buy ms-5">
                                  <button class="btn btn-quote mt-4 mb-2">Add to Cart</button>
                                <button class="btn btn-buy my-0">Buy Now</button>
                                <button class="btn btn-notify">Notify If Available</button>
                              </div>
                            </div>


                          </div>
                        </div>
                    </div>
                    <hr>
                </div>


                <div class="col item autopartSearch">
                    <div class="card">
                        <div class="card-body">
                          <div class="wrappers">
                            <div class="col-md-2 top-card-image">
                              <img src="{{asset('assets/images/Img.webp')}}" alt="Search Car" class="img-fluid" loading="lazy">
                              
                              <div class="percent-off">
                                <span>
                                  <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.18734 0.696289L7.99047 1.23992L8.53372 5.04343L5.00221 8.57493C4.93017 8.64696 4.83246 8.68742 4.73059 8.68742C4.62872 8.68742 4.53101 8.64696 4.45897 8.57493L0.655455 4.77142C0.58343 4.69938 0.542969 4.60167 0.542969 4.4998C0.542969 4.39793 0.58343 4.30022 0.655455 4.22818L4.18734 0.696289ZM5.27384 3.95655C5.3452 4.02789 5.42992 4.08448 5.52316 4.12308C5.61639 4.16168 5.71632 4.18153 5.81722 4.18152C5.91813 4.1815 6.01805 4.1616 6.11127 4.12297C6.20449 4.08434 6.28919 4.02772 6.36053 3.95636C6.43187 3.88499 6.48846 3.80027 6.52705 3.70704C6.56565 3.61381 6.58551 3.51388 6.58549 3.41297C6.58548 3.31207 6.56558 3.21215 6.52695 3.11893C6.48832 3.02571 6.4317 2.94101 6.36034 2.86967C6.28897 2.79833 6.20425 2.74174 6.11102 2.70314C6.01778 2.66454 5.91786 2.64469 5.81695 2.6447C5.61316 2.64474 5.41773 2.72573 5.27365 2.86986C5.12957 3.01399 5.04865 3.20945 5.04868 3.41325C5.04872 3.61704 5.12971 3.81247 5.27384 3.95655Z" fill="white"/>
                                    </svg>
                                    30% off</span>
                              </div>
                              <p class="stocks"><span>Stock ID: </span>SAT-88675153</p>
                            </div>

                            <div class="col-md-7 center">
                              <div class="top-points">

                                <div class="sale">
                                  <p class="m-0">New Year Sales</p>
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
                                <p class="m-0">A/C Compressor HONDA N BOX 2015</p>
                              </div>

                              <div class="car-details">
                                <div class="col-md-2 detail1">

                                  <div class="more-detail mt-1">
                                    <div class="model-code">
                                      <div class="top">
                                          <p class="m-0 head">Make</p>
                                      </div>
                                      <div class="bottom d-flex">
                                        <p class="m-0">Suzukidesa</p>
                                        <span class="dot ms-3"></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-2 detail1">
                                  <div class="more-detail mt-1">
                                      <div class="model-code">
                                          <div class="top">
                                              <p class="m-0 head">Model</p>
                                          </div>
                                          <div class="bottom d-flex">
                                            <p class="m-0">Fit1234567</p>
                                            <span class="dot ms-3"></span>
                                          </div>
                                        </div>
                                  </div>
                                </div>
                                <div class="col-md-2 detail1">
                                  <div class="more-detail mt-1">
                                      <div class="model-code">
                                          <div class="top">
                                              <p class="m-0 head">Model Code</p>
                                          </div>
                                          <div class="bottom d-flex">
                                            <p class="m-0">fdf58564666</p>
                                            <span class="dot ms-3"></span>
                                          </div>
                                        </div>
                                  </div>
                                </div>
                                <div class="col-md-2 detail1">
                                  <div class="more-detail mt-1">
                                      <div class="model-code">
                                          <div class="top">
                                              <p class="m-0 head">Condition</p>
                                          </div>
                                          <div class="bottom d-flex">
                                            <p class="m-0">Used</p>
                                          </div>
                                        </div>
                                  </div>
                                </div>

                                <div class="col-md-4 detail1">
                                  <div class="more-detail mt-1">
                                      <div class="model-code text-end">
                                          <div class="priceList d-flex flex-column">
                                              <p class="m-0 w-100 offRateate">3% off</p>
                                              <p class="m-0 w-100 disRate text-decoration-line-through">$22,317</p>
                                              <p class="m-0 w-100 totalRate"><span class="mx-2">Price:</span>$20,000,00</p>
                                          </div>
                                         
                                        </div>
                                  </div>
                                </div>
                               
                              </div>

                              <div class="grid-details">
                                <div class="top">
                                  <div class="mark">
                                    <p class="sale m-0">New Year Sale</p>
                                    <p class="loc m-0 ms-5 ps-4">Location:</p>
                                    <img src="{{asset('assets/images/country-flags/PK.webp')}}" alt="Flag" class="img-fluid gridImg" loading="lazy">
                                    <p class="count m-0">Japan</p>
                                  </div>

                                  <div class="heading">
                                    <p class="title py-2 px-2">A/C Compressor HONDA N BOX 2015</p>
                                  </div>

                                  <div class="details">
                                    <div class="inner">
                                      <div class="year">
                                        <p class="m-0 title">Make</p>
                                        <p class="m-0 date">Suzukidesa</p>
                                      </div>
                                      <div class="dot"></div>
                                    </div>

                                    <div class="inner">
                                      <div class="year">
                                        <p class="m-0 title">Model</p>
                                        <p class="m-0 date">Fit1234567</p>
                                      </div>
                                      <div class="dot"></div>
                                    </div>

                                    <div class="inner">
                                      <div class="year">
                                        <p class="m-0 title">Model Code</p>
                                        <p class="m-0 date">fdf58564666</p>
                                      </div>
                                      <div class="dot"></div>
                                    </div>

                                    <div class="inner">
                                      <div class="year">
                                        <p class="m-0 title">Condition</p>
                                        <p class="m-0 date">Used</p>
                                      </div>
                                      
                                    </div>
                                   
                                  </div>

                                  <div class="pricing mt-3">
                                   <p class="price m-0 fs-6">Stock ID:</p>
                                   <p class="total m-0">SAT-88675153</p>
                                  </div>

                                  <div class="pricing mt-2">
                                   <p class="price m-0 fs-6 position-relative pt-4 mt-3">Price:</p>
                                  <div class="priceListGrid d-flex flex-column text-end">
                                      <p class="perOffGrid m-0">3% off</p>
                                      <p class="priceGrid m-0">$22,317</p>
                                      <p class="totalGrid m-0">$20,000,00</p>
                                  </div>
                                  </div>

                                  <div class="action-buying mt-3 mb-2">
                                      <button class="btn btn-quote">Add to Cart</button>
                                    <button class="btn btn-buy">Buy Now</button>
                                   </div>

                                </div>
                              </div>
                            </div>

                            <div class="col-md-3 right">
                              <div class="countryLoc ms-5">
                                <div class="top ms-4">
                                  <p class="m-0 title ms-2">Location:</p>
                                  <img src="{{asset('assets/images/country-flags/PK.webp')}}" alt="Flag" class="img-fluid" loading="lazy">
                                  <p class="m-0 name">Japan</p>
                                </div>
                              </div>
                             
                              <div class="action-buy ms-5">
                                  <button class="btn btn-quote mt-4 mb-2">Add to Cart</button>
                                <button class="btn btn-buy my-0">Buy Now</button>
                                <button class="btn btn-notify">Notify If Available</button>
                              </div>
                            </div>


                          </div>
                        </div>
                    </div>
                    <hr>
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

          </div>

         <div class="autoPartCarDesc my-5">
            <p class="m-0 title pb-2">Japanese Used Car Parts Exporter SAT</p>
            <p class="m-0 desc">
              If you want to buy Toyota used cars for sale, SAT is the right place for you. At SAT, you get the chance to explore high-quality Japanese used cars, including Toyota, Honda, Nissan, Mitsubishi, and many more, and buy them at affordable prices. With thousands of high-end vehicles available in various engine types, transmissions, interiors, and other features, you can choose the one according to your preferences and needs.</p>
            
         </div>
        </div>
    </div>
</section>


{{-- ================================ Mobile View =========================--}}

<section class="mobile2-view">
    <section class="mobile2-view">
        <div class="advance-search-calculator-mobile">
          <div class="container">
            <div class="row">
              
              <div class="mobile-filters-search">
                <ul class="list-unstyled filter-list my-3 d-flex align-items-center gap-1">
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
      
                        <div class="selected-filter-show">
                          <ul class="list-unstyled selectedItemsList" id="selectedItemsList">
                            {{-- <li>0k</li> --}}
                          </ul>
                        </div>
                        <hr>
                      </div>
                      <div class="dropdown-selection-filter d-flex justify-content-between align-items-center">
                        <div class="left w-50">
                          <p class="m-0">Make</p>
                        </div>
                        <div class="right w-50">
                          <button class="btn btn-make-filter make-filter-selected w-100 d-flex align-items-center justify-content-between"
                          type="button" data-bs-toggle="offcanvas" data-bs-target="#makeFilterOffCanvas" aria-controls="makeFilterOffCanvas">Select <i class="fa fa-chevron-down"></i></button>
                        </div>
                      </div>
      
                      <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                        <div class="left w-50">
                          <p class="m-0">Model</p>
                        </div>
                        <div class="right w-50">
                          <button class="btn btn-make-filter model-filter-selected w-100 d-flex align-items-center justify-content-between"
                          type="button" data-bs-toggle="offcanvas" data-bs-target="#modelFilterOffCanvas" aria-controls="modelFilterOffCanvas">Select <i class="fa fa-chevron-down"></i></button>
                        </div>
                      </div>
      
                      <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                        <div class="left w-50">
                          <p class="m-0">Model Code</p>
                        </div>
                        <div class="right w-50">
                          <button class="btn btn-make-filter mc-filter-selected w-100 d-flex align-items-center justify-content-between"
                          type="button" data-bs-toggle="offcanvas" data-bs-target="#modelcodeFilterOffCanvas" aria-controls="modelcodeFilterOffCanvas">Select <i class="fa fa-chevron-down"></i></button>
                        </div>
                      </div>
      
                      <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                        <div class="left w-50">
                          <p class="m-0">Category</p>
                        </div>
                        <div class="right w-50">
                          <button class="btn btn-make-filter bodytype-filter-selected w-100 d-flex align-items-center justify-content-between"
                          type="button" data-bs-toggle="offcanvas" data-bs-target="#bodytypeFilterOffCanvas" aria-controls="bodytypeFilterOffCanvas">Select <i class="fa fa-chevron-down"></i></button>
                        </div>
                      </div>
      
      
                      <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                        <div class="left w-50">
                          <p class="m-0">Condition</p>
                        </div>
                        <div class="right w-50">
                          <button class="btn btn-make-filter seats-filter-selected w-100 d-flex align-items-center justify-content-between"
                          type="button" data-bs-toggle="offcanvas" data-bs-target="#seatsFilterOffCanvas" aria-controls="seatsFilterOffCanvas">Select <i class="fa fa-chevron-down"></i></button>
                        </div>
                      </div>
                      <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                        <div class="left w-50">
                          <p class="m-0">Year</p>
                        </div>
                        <div class="right d-flex gap-2 w-50">
                          <select class="form-select minYear selectMinYear" aria-label="Default select example">
                          <option selected>Min</option>
                          <option value="2000">2000</option>
                          <option value="2001">2001</option>
                          <option value="300">2002</option>
                        </select>
                          <select class="form-select maxYear selectMaxYear" aria-label="Default select example">
                          <option selected>Max</option>
                          <option value="2000">2000</option>
                          <option value="2001">2001</option>
                          <option value="2002">2002</option>
                        </select>
                        </div>
                      </div>
      
                      <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                        <div class="left">
                          <p class="m-0">Price (USD)</p>
                        </div>
                        <div class="right d-flex gap-2 w-50">
                         <select class="form-select minYear selectMinPrice" aria-label="Default select example">
                          <option selected>Min</option>
                          <option value="2000">2000</option>
                          <option value="2001">2001</option>
                          <option value="2002">2002</option>
                        </select>
                          <select class="form-select maxYear selectMaxPrice" aria-label="Default select example">
                          <option selected>Max</option>
                          <option value="2000">2000</option>
                          <option value="2001">2001</option>
                          <option value="2002">2002</option>
                        </select>
                        </div>
                      </div>

      
                      <div class="accordion" id="accordionExample">
                       
                        <div class="deal">
                          <p class="m-0 py-3 title">Deals</p>
                        </div>
                        <div class="additional-feature-checks d-flex justify-content-between">
                          <div class="form-check form-check-inline w-50">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Earn Points">
                            <label class="form-check-label earn-points" for="inlineCheckbox1">Earn Points</label>
                          </div>
                          <div class="form-check form-check-inline w-50">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="New Year Sales">
                            <label class="form-check-label nys" for="inlineCheckbox2"> New Year Sales </label>
                          </div>
                        </div>
      
                        <div class="additional-feature-checks d-flex justify-content-between py-3">
                          <div class="form-check form-check-inline w-50">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Premium Cars">
                            <label class="form-check-label prem-car" for="inlineCheckbox1">Premium Cars</label>
                          </div>
                          <div class="form-check form-check-inline w-50">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Clearance Discount">
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
                  
                  <li>
                     {{-- Toyota <span><i class="fa fa-close"></i></span> --}}
                     <div class="selected-filter-show">
                      <ul class="list-unstyled selectedItemsList" id="selectedItemsList">
                        {{-- <li>0k</li> --}}
                      </ul>
                    </div>
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
                  
                 
                  <li class="icon-sliders" type="button" data-bs-toggle="offcanvas" data-bs-target="#bodytypeFilterOffCanvas" aria-controls="bodytypeFilterOffCanvas">
                     Category <span><i class="fa fa-chevron-down"></i></span>
                    
                </li>
                  <li class="icon-sliders" type="button" data-bs-toggle="offcanvas" data-bs-target="#seatsFilterOffCanvas" aria-controls="seatsFilterOffCanvas">
                     Condition <span><i class="fa fa-chevron-down"></i></span>
                     
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
                          <ul class="list-unstyled makeFilterList" id="makeFilterList">
                              <li data-make="Honda" data-value="Honda">Honda (1254)</li>
                              <li data-make="Yaris" data-value="Yaris">Yaris (1254)</li>
                              <li data-make="Toyota" data-value="Toyota">Toyota (1254)</li>
                              <li data-make="Toyota" data-value="Toyota">Toyota (1254)</li>
                              <li data-make="Toyota" data-value="Toyota">Toyota (1254)</li>
                              <li data-make="Toyota" data-value="Toyota">Toyota (1254)</li>
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
                      <ul class="list-unstyled modalFilterList" id="modalFilterList">
                         <li data-make="Honda" data-value="Honda">Honda (1254)</li>
                        <li data-make="Yaris" data-value="Yaris">Yaris (1254)</li>
                        <li data-make="Toyota" data-value="Toyota">Toyota (1254)</li>
                        <li data-make="Toyota" data-value="Toyota">Toyota (1254)</li>
                        <li data-make="Toyota" data-value="Toyota">Toyota (1254)</li>
                        <li data-make="Toyota" data-value="Toyota">Toyota (1254)</li>
                      </ul>
                    </div>
                  </div>
                </div>
                {{-- End Modal Filter Search --}}
      
               
                {{-- Start Category Filter Search --}}
                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="bodytypeFilterOffCanvas" aria-labelledby="bodytypeFilterOffCanvasLabel">
                  <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body p-0 px-3">
                    <div class="search">
                      <input type="text" placeholder="Search Category" id="bodytypeFilterSearch">
                      <img src="{{asset('assets/images/header-images/mobile-search-icon.webp')}}" alt="" loading="lazy">
                    </div>
                    <div class="list py-3">
                      <ul class="list-unstyled bodytypeFilterList" id="bodytypeFilterList">
                         <li data-make="Honda" data-value="Honda">Honda (1254)</li>
                          <li data-make="Yaris" data-value="Yaris">Yaris (1254)</li>
                          <li data-make="Toyota" data-value="Toyota">Toyota (1254)</li>
                          <li data-make="Toyota" data-value="Toyota">Toyota (1254)</li>
                          <li data-make="Toyota" data-value="Toyota">Toyota (1254)</li>
                          <li data-make="Toyota" data-value="Toyota">Toyota (1254)</li>
                      </ul>
                    </div>
                  </div>
                </div>
                {{-- End Category Filter Search --}}
      
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
                      <ul class="list-unstyled modelcodeFilterList" id="modelcodeFilterList">
                         <li data-make="Honda" data-value="Honda">Honda (1254)</li>
                        <li data-make="Yaris" data-value="Yaris">Yaris (1254)</li>
                        <li data-make="Toyota" data-value="Toyota">Toyota (1254)</li>
                        <li data-make="Toyota" data-value="Toyota">Toyota (1254)</li>
                        <li data-make="Toyota" data-value="Toyota">Toyota (1254)</li>
                        <li data-make="Toyota" data-value="Toyota">Toyota (1254)</li>
                      </ul>
                    </div>
                  </div>
                </div>
                {{-- End Model Code Filter Search --}}
      
               
      
               
      
                {{-- Start Condition Filter Search --}}
                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="seatsFilterOffCanvas" aria-labelledby="seatsFilterOffCanvasLabel">
                  <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body p-0 px-3">
                    <div class="search">
                      <input type="text" placeholder="Search Condition" id="seatsFilterSearch">
                      <img src="{{asset('assets/images/header-images/mobile-search-icon.webp')}}" alt="" loading="lazy">
                    </div>
                    <div class="list py-3">
                      <ul class="list-unstyled seatsFilterList" id="seatsFilterList">
                         <li data-make="Front" data-value="Front">Front</li>
                        <li data-make="Back" data-value="Back">Back</li>
                        <li data-make="Center" data-value="Center">Center</li>
                      </ul>
                    </div>
                  </div>
                </div>
                {{-- End Condition Filter Search --}}


                {{-- Start Year Filter Search --}}
                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="yearFilterOffCanvas" aria-labelledby="yearFilterOffCanvasLabel" aria-modal="true" role="dialog">
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
                          <select class="form-select selectMinYear" aria-label="Default select example">
                            <option selected="">1999</option>
                            <option value="1">2000</option>
                            <option value="2">2001</option>
                            <option value="3">2002</option>
                          </select>
                        </div>
                        <div class="right w-50">
                          <p class="m-0 max-year">Max Year</p>
                          <select class="form-select selectMaxYear" aria-label="Default select example">
                            <option selected="">1999</option>
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
            <div class="offcanvas offcanvas-bottom" tabindex="-1" id="priceFilterOffCanvas" aria-labelledby="priceFilterOffCanvasLabel" aria-modal="true" role="dialog">
            <div class="offcanvas-header">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0 px-3">
              <div class="head">
                <p class="m-0 title text-center">Select Price</p>
              </div>

              <div class="model-years d-flex gap-3 py-4">
                <div class="left w-50">
                  <p class="m-0 min-year selectMinPrice">Min Price</p>
                  <select class="form-select" aria-label="Default select example">
                    <option selected="">1999</option>
                    <option value="1">2000</option>
                    <option value="2">2001</option>
                    <option value="3">2002</option>
                  </select>
                </div>
                <div class="right w-50">
                  <p class="m-0 max-year selectMaxPrice">Max Price</p>
                  <select class="form-select" aria-label="Default select example">
                    <option selected="">1999</option>
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
                      <img src="{{asset('assets/images/Img.webp')}}" alt="Car" class="img-fluid" loading="lazy">
                      <div class="mobile-stock-search">
                        <span class="stock-text">Stock ID:</span>
                        <span class="stock-text-id">SAT-88675153</span>
                      </div>
                    </div>
                    <div class="right px-2">
                      <div class="top d-flex justify-content-between align-items-center gap-2 ms-2">
                        <p class="mobile-nys m-0">New Year Sales</p>
                        <div class="country d-flex align-items-center ms-2">
                            <img src="{{asset('assets/images/country-flags/TZ.webp')}}" alt="Flag" class="img-fluid"  width="18" height="13">
                            <p class="mobile-nys2 bg-transparent m-0 px-2">Tanzania</p>
                          </div>
                      </div>
                     
                      <div class="heading">
                        <p class="m-0">2018 TOYOTA LITEACE VAN DX</p>
                      </div>
      
                      <div class="mobile-spec-info d-flex px-1 gap-1">
                        <div class="inner d-flex align-items-center">
                          <p class="m-0 year">Suzuki</p>
                          <span class="dot"></span>
                        </div>
      
                        <div class="inner d-flex align-items-center">
                          <p class="m-0 year">Fit</p>
                          <span class="dot"></span>
                        </div>
      
                        <div class="inner d-flex align-items-center">
                          <p class="m-0 year">0012</p>
                          <span class="dot"></span>
                        </div>
      
                        <div class="inner d-flex align-items-center">
                          <p class="m-0 year">Used</p>
                        </div>
      
                      </div>
      
      
                      <div class="mobile-total-price-car mobile-auto-parts-search-price">
                        <div class="inner d-flex justify-content-between pt-2 px-1">
                          <p class="m-0 title">Car Price:</p>
                          <p class="m-0 amount">$28,2154</p>
                        </div>
                      </div>
      
                      <div class="mobile-car-buttons-buy mobile-auto-parts-search-action">
                        <div class="inner d-flex align-items-center gap-2 mt-2">
                          <button class="btn btn-cart w-50">Add to Cart</button>
      
                          <button class="btn btn-buyNow w-50">Buy Now</button>
                        </div>
                      </div>
      
      
                    </div>
                  </div>
                  <hr>
                </div>

                <div class="mobile-car-details-search">
                    <div class="inner d-flex pt-2">
                      <div class="left">
                        <img src="{{asset('assets/images/Img.webp')}}" alt="Car" class="img-fluid" loading="lazy">
                        <div class="mobile-stock-search">
                          <span class="stock-text">Stock ID:</span>
                          <span class="stock-text-id">SAT-88675153</span>
                        </div>
                      </div>
                      <div class="right px-2">
                        <div class="top d-flex justify-content-between align-items-center gap-2 ms-2">
                          <p class="mobile-nys m-0">New Year Sales</p>
                          <div class="country d-flex align-items-center ms-2">
                              <img src="{{asset('assets/images/country-flags/TZ.webp')}}" alt="Flag" class="img-fluid"  width="18" height="13">
                              <p class="mobile-nys2 bg-transparent m-0 px-2">Tanzania</p>
                            </div>
                        </div>
                       
                        <div class="heading">
                          <p class="m-0">2018 TOYOTA LITEACE VAN DX</p>
                        </div>
        
                        <div class="mobile-spec-info d-flex px-1 gap-1">
                          <div class="inner d-flex align-items-center">
                            <p class="m-0 year">Suzuki</p>
                            <span class="dot"></span>
                          </div>
        
                          <div class="inner d-flex align-items-center">
                            <p class="m-0 year">Fit</p>
                            <span class="dot"></span>
                          </div>
        
                          <div class="inner d-flex align-items-center">
                            <p class="m-0 year">0012</p>
                            <span class="dot"></span>
                          </div>
        
                          <div class="inner d-flex align-items-center">
                            <p class="m-0 year">Used</p>
                          </div>
        
                        </div>
        
        
                        <div class="mobile-total-price-car mobile-auto-parts-search-price">
                          <div class="inner d-flex justify-content-between pt-2 px-1">
                            <p class="m-0 title">Car Price:</p>
                            <p class="m-0 amount">$28,2154</p>
                          </div>
                        </div>
        
                        <div class="mobile-car-buttons-buy mobile-auto-parts-search-action">
                          <div class="inner d-flex align-items-center gap-2 mt-2">
                            <button class="btn btn-cart w-50">Add to Cart</button>
        
                            <button class="btn btn-buyNow w-50">Buy Now</button>
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
      
         

      
          <div class="mobile-used-car-sale mobile-auto-parts-search-show pb-4">
            <div class="inner">
              <div class="heading py-3">
                <p class="m-0">Buy Used Cars With SAT</p>
              </div>
              <div class="details">
                <p class="m-0 para">If you want to buy Toyota used cars for sale, SAT is the right place
                    for you. At SAT, you get the chance to explore high-quality Japanese
                    used cars, including Toyota, Honda, Nissan, Mitsubishi, and many
                    more, and buy them at affordable prices. With thousands of high-end
                    vehicles available in various engine types, transmissions,
                    interiors, and other features, you can choose the one according to
                    your preferences and needs.</p>
              </div>
      
              <div class="mobile-search-view-text text-center py-3">
                <p class="m-0 view-all" id="toggleView" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Show All</p>
                
                <div class="collapse" id="collapseExample">
                 
                  <div class="details py-3">
                    <p class="m-0 para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur cum ipsum rem.</p>
                  </div>
      
                  <div class="details">
                    <p class="m-0 para">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur cum ipsum rem.
                    </p>
                  </div>
      
                
                 
                  <p class="m-0 view-all pt-3" id="toggleViewLess2" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">Show Less</p>
                </div>
              </div>
      
            </div>
          </div>
      
      
      
      
        
      
            </div>
          </div>
        </div>
      </section>
  </section>