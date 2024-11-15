<section class="desktop2-view">
    <div class="advance-search-calculator pt-2" role="region" aria-labelledby="search-calculator-heading">
        <div class="container">
            <div class="searchItemsCar">
              <div class="wrapper py-4">
                <div class="row mb-2">
                  <div class="col-md-3 position-relative">
                   
                    <select id="mySelect" class="form-select custom-select" aria-label="Default select example">
                      <option value="">Select Make</option>
                      <option value="honda">Honda</option>
                      <option value="mazda">Mazda</option>
                  </select>
                  <i class="fas fa-times close-icon" id="closeIcon" style="display: none;"></i>
                  </div>
                  <div class="col-md-3">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>Select Model</option>
                      <option value="1">Mazda</option>
                    </select>
                    
                  </div>
                  <div class="col-md-3">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>Select Engine</option>
                      <option value="1">2223</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>Select Fuel</option>
                      <option value="1">13</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-2">
                  <div class="col-md-3 d-flex">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>Min Year</option>
                      <option value="2024">2024</option>
                      <option value="2023">2023</option>
                      <option value="2022">2022</option>
                      <option value="2021">2021</option>
                    </select>
                  </div>
                  <div class="col-md-3 d-flex">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>Max Year</option>
                      <option value="2024">2024</option>
                      <option value="2023">2023</option>
                      <option value="2022">2022</option>
                      <option value="2021">2021</option>
                    </select>
                  </div>
                  <div class="col-md-3 d-flex">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>Min Price</option>
                      <option value="$ 500">$ 500</option>
                      <option value="$ 1000">$ 1000</option>
                      <option value="$ 1500">$ 1500</option>
                      <option value="$ 2000">$ 2000</option>
                    </select>
                  </div>
                  <div class="col-md-3 d-flex">
                    <select class="form-select selection-search" aria-label="Default select example">
                      <option selected>Max Price</option>
                      <option value="$ 500">$ 500</option>
                      <option value="$ 1000">$ 1000</option>
                      <option value="$ 1500">$ 1500</option>
                      <option value="$ 2000">$ 2000</option>
                    </select>
                  </div>
                </div>

               


                <div class="d-flex flex-row px-1 my-4">
                  <div class="form-check me-5">
                      <input class="form-check-input" type="checkbox" id="sp" value="satpoints">
                      <label class="form-check-label sp" for="satpoints">SAT Points</label>
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



            <div class="container p-0 mt-5">
              <div class="mb-3 d-flex align-items-center justify-content-between">
                <div class="heading">
                  <p class="m-0">New Cars for Sale</p>
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
                              <div class="col-md-2 top-card-image">
                                <img src="{{asset('assets/images/new-car-assets/NewCarBlack.webp')}}" alt="Search Car" class="img-fluid h-100" loading="lazy">
                              </div>

                              <div class="col-md-7 center">
                                <div class="top-points">

                                  <div class="earn">
                                    <p class="m-0">Earn 100 points</p>
                                  </div>
                                 
                                </div>

                                <div class="car-title">
                                  <p class="m-0">2024 Mazda Roadster</p>
                                </div>

                                <div class="car-details">
                                  <div class="detail1">
                                   
                                    <div class="more-detail newCarDetails mt-1">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/trans-type.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Transmission</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">MT</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="detail1">
                                    
                                    <div class="more-detail newCarDetails mt-1 ms-1">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/fuel-spec.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Fuel Type</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">Petrol</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="detail1">
                                    <div class="more-detail newCarDetails mt-1 ms-1">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/engin-size.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Engine Size</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">1500</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="detail1">
                                    <div class="more-detail newCarDetails mt-1 ms-1">
                                      <div class="model-code">
                                        <div class="top">
                                          <img src="{{asset('assets/images/icons/seat.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                          <p class="code m-0">Seats</p>
                                        </div>
                                        <div class="bottom">
                                          <p class="m-0">2</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="detail1">
                                    <div class="more-detail newCarDetails mt-1 ms-1">
                                     <p class="m-0 from">New from</p>
                                     <p class="m-0 priceList">$2,168</p>
                                    </div>
                                  </div>
                                 
                                </div>

                                <div class="grid-details">
                                  <div class="top">
                                    <div class="mark newCarSearch">
                                      <p class="sale m-0">Earn 100 points</p>
                                    </div>

                                    <div class="heading">
                                      <p class="title py-2 px-2">2024 Mazda Roadster</p>
                                    </div>

                                    <div class="details">
                                      <div class="inner d-flex justify-content-between w-100 gap-2">
                                        <div class="col-md-6">
                                            <div class="model-code newCarSearchMC">
                                                <div class="top d-flex">
                                                  <img src="{{asset('assets/images/icons/trans-type.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                                  <p class="code m-0 ps-1">Transmission</p>
                                                </div>
                                                <div class="bottom">
                                                  <p class="m-0 ps-3">MT</p>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="model-code newCarSearchMC">
                                                <div class="top d-flex">
                                                  <img src="{{asset('assets/images/icons/fuel-spec.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                                  <p class="code m-0 ps-1">Fuel Type</p>
                                                </div>
                                                <div class="bottom">
                                                  <p class="m-0 ps-3">Petrol</p>
                                                </div>
                                              </div>
                                        </div>
                                      </div>

                                    </div>

                                    <div class="details my-2">
                                        <div class="inner d-flex justify-content-between w-100 gap-2">
                                          <div class="col-md-6">
                                              <div class="model-code newCarSearchMC">
                                                  <div class="top d-flex">
                                                    <img src="{{asset('assets/images/icons/engin-size.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                                    <p class="code m-0 ps-1">Engine Size</p>
                                                  </div>
                                                  <div class="bottom">
                                                    <p class="m-0 ps-3">1500</p>
                                                  </div>
                                                </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="model-code newCarSearchMC">
                                                  <div class="top d-flex">
                                                    <img src="{{asset('assets/images/icons/seat.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                                    <p class="code m-0 ps-1">Seats</p>
                                                  </div>
                                                  <div class="bottom">
                                                    <p class="m-0 ps-3">2</p>
                                                  </div>
                                                </div>
                                          </div>
                                        </div>
  
                                      </div>

                                    <div class="pricing newCarSearchPC">
                                     <p class="price m-0">Price:</p>
                                     <p class="total m-0"><span class="tag mx-2">New from:</span>$2,168</p>
                                    </div>

                                    <div class="action-buying newCarSearchBTN mt-3 mb-2">
                                      <button class="btn btn-buy">View Detail</button>
                                      <button class="btn btn-quote">Inquire</button>
                                     </div>

                                  </div>
                                </div>
                              </div>

                              <div class="col-md-3 right">
                               
                                <div class="action-buy newSearchCarAction">
                                  <button class="btn btn-buy">View Detail</button>
                                  <button class="btn btn-quote">Inquire</button>
                                  <button class="btn btn-notify">Notify If Available</button>
                                </div>
                              </div>


                            </div>
                          </div>
                      </div>
                      <hr class="my-2">
                  </div>   
                  
                  <div class="col item">
                    <div class="card">
                        <div class="card-body">
                          <div class="wrappers">
                            <div class="col-md-2 top-card-image">
                              <img src="{{asset('assets/images/new-car-assets/NewCarBlack.webp')}}" alt="Search Car" class="img-fluid h-100" loading="lazy">
                            </div>

                            <div class="col-md-7 center">
                              <div class="top-points">

                                <div class="earn">
                                  <p class="m-0">Earn 100 points</p>
                                </div>
                               
                              </div>

                              <div class="car-title">
                                <p class="m-0">2024 Mazda Roadster</p>
                              </div>

                              <div class="car-details">
                                <div class="detail1">
                                 
                                  <div class="more-detail newCarDetails mt-1">
                                    <div class="model-code">
                                      <div class="top">
                                        <img src="{{asset('assets/images/icons/trans-type.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                        <p class="code m-0">Transmission</p>
                                      </div>
                                      <div class="bottom">
                                        <p class="m-0">MT</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="detail1">
                                  
                                  <div class="more-detail newCarDetails mt-1 ms-1">
                                    <div class="model-code">
                                      <div class="top">
                                        <img src="{{asset('assets/images/icons/fuel-spec.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                        <p class="code m-0">Fuel Type</p>
                                      </div>
                                      <div class="bottom">
                                        <p class="m-0">Petrol</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="detail1">
                                  <div class="more-detail newCarDetails mt-1 ms-1">
                                    <div class="model-code">
                                      <div class="top">
                                        <img src="{{asset('assets/images/icons/engin-size.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                        <p class="code m-0">Engine Size</p>
                                      </div>
                                      <div class="bottom">
                                        <p class="m-0">1500</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="detail1">
                                  <div class="more-detail newCarDetails mt-1 ms-1">
                                    <div class="model-code">
                                      <div class="top">
                                        <img src="{{asset('assets/images/icons/seat.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                        <p class="code m-0">Seats</p>
                                      </div>
                                      <div class="bottom">
                                        <p class="m-0">2</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="detail1">
                                  <div class="more-detail newCarDetails mt-1 ms-1">
                                   <p class="m-0 from">New from</p>
                                   <p class="m-0 priceList">$2,168</p>
                                  </div>
                                </div>
                               
                              </div>

                              <div class="grid-details">
                                <div class="top">
                                  <div class="mark newCarSearch">
                                    <p class="sale m-0">Earn 100 points</p>
                                  </div>

                                  <div class="heading">
                                    <p class="title py-2 px-2">2024 Mazda Roadster</p>
                                  </div>

                                  <div class="details">
                                    <div class="inner d-flex justify-content-between w-100 gap-2">
                                      <div class="col-md-6">
                                          <div class="model-code newCarSearchMC">
                                              <div class="top d-flex">
                                                <img src="{{asset('assets/images/icons/trans-type.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                                <p class="code m-0 ps-1">Transmission</p>
                                              </div>
                                              <div class="bottom">
                                                <p class="m-0 ps-3">MT</p>
                                              </div>
                                            </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="model-code newCarSearchMC">
                                              <div class="top d-flex">
                                                <img src="{{asset('assets/images/icons/fuel-spec.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                                <p class="code m-0 ps-1">Fuel Type</p>
                                              </div>
                                              <div class="bottom">
                                                <p class="m-0 ps-3">Petrol</p>
                                              </div>
                                            </div>
                                      </div>
                                    </div>

                                  </div>

                                  <div class="details my-2">
                                      <div class="inner d-flex justify-content-between w-100 gap-2">
                                        <div class="col-md-6">
                                            <div class="model-code newCarSearchMC">
                                                <div class="top d-flex">
                                                  <img src="{{asset('assets/images/icons/engin-size.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                                  <p class="code m-0 ps-1">Engine Size</p>
                                                </div>
                                                <div class="bottom">
                                                  <p class="m-0 ps-3">1500</p>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="model-code newCarSearchMC">
                                                <div class="top d-flex">
                                                  <img src="{{asset('assets/images/icons/seat.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                                  <p class="code m-0 ps-1">Seats</p>
                                                </div>
                                                <div class="bottom">
                                                  <p class="m-0 ps-3">2</p>
                                                </div>
                                              </div>
                                        </div>
                                      </div>

                                    </div>

                                  <div class="pricing newCarSearchPC">
                                   <p class="price m-0">Price:</p>
                                   <p class="total m-0"><span class="tag mx-2">New from:</span>$2,168</p>
                                  </div>

                                  <div class="action-buying newCarSearchBTN mt-3 mb-2">
                                    <button class="btn btn-buy">View Detail</button>
                                    <button class="btn btn-quote">Inquire</button>
                                   </div>

                                </div>
                              </div>
                            </div>

                            <div class="col-md-3 right">
                             
                              <div class="action-buy newSearchCarAction">
                                <button class="btn btn-buy">View Detail</button>
                                <button class="btn btn-quote">Inquire</button>
                                <button class="btn btn-notify">Notify If Available</button>
                              </div>
                            </div>


                          </div>
                        </div>
                    </div>
                    <hr class="my-2">
                </div>  

                <div class="col item">
                    <div class="card">
                        <div class="card-body">
                          <div class="wrappers">
                            <div class="col-md-2 top-card-image">
                              <img src="{{asset('assets/images/new-car-assets/NewCarBlack.webp')}}" alt="Search Car" class="img-fluid h-100" loading="lazy">
                            </div>

                            <div class="col-md-7 center">
                              <div class="top-points">

                                <div class="earn">
                                  <p class="m-0">Earn 100 points</p>
                                </div>
                               
                              </div>

                              <div class="car-title">
                                <p class="m-0">2024 Mazda Roadster</p>
                              </div>

                              <div class="car-details">
                                <div class="detail1">
                                 
                                  <div class="more-detail newCarDetails mt-1">
                                    <div class="model-code">
                                      <div class="top">
                                        <img src="{{asset('assets/images/icons/trans-type.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                        <p class="code m-0">Transmission</p>
                                      </div>
                                      <div class="bottom">
                                        <p class="m-0">MT</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="detail1">
                                  
                                  <div class="more-detail newCarDetails mt-1 ms-1">
                                    <div class="model-code">
                                      <div class="top">
                                        <img src="{{asset('assets/images/icons/fuel-spec.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                        <p class="code m-0">Fuel Type</p>
                                      </div>
                                      <div class="bottom">
                                        <p class="m-0">Petrol</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="detail1">
                                  <div class="more-detail newCarDetails mt-1 ms-1">
                                    <div class="model-code">
                                      <div class="top">
                                        <img src="{{asset('assets/images/icons/engin-size.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                        <p class="code m-0">Engine Size</p>
                                      </div>
                                      <div class="bottom">
                                        <p class="m-0">1500</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="detail1">
                                  <div class="more-detail newCarDetails mt-1 ms-1">
                                    <div class="model-code">
                                      <div class="top">
                                        <img src="{{asset('assets/images/icons/seat.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                        <p class="code m-0">Seats</p>
                                      </div>
                                      <div class="bottom">
                                        <p class="m-0">2</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="detail1">
                                  <div class="more-detail newCarDetails mt-1 ms-1">
                                   <p class="m-0 from">New from</p>
                                   <p class="m-0 priceList">$2,168</p>
                                  </div>
                                </div>
                               
                              </div>

                              <div class="grid-details">
                                <div class="top">
                                  <div class="mark newCarSearch">
                                    <p class="sale m-0">Earn 100 points</p>
                                  </div>

                                  <div class="heading">
                                    <p class="title py-2 px-2">2024 Mazda Roadster</p>
                                  </div>

                                  <div class="details">
                                    <div class="inner d-flex justify-content-between w-100 gap-2">
                                      <div class="col-md-6">
                                          <div class="model-code newCarSearchMC">
                                              <div class="top d-flex">
                                                <img src="{{asset('assets/images/icons/trans-type.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                                <p class="code m-0 ps-1">Transmission</p>
                                              </div>
                                              <div class="bottom">
                                                <p class="m-0 ps-3">MT</p>
                                              </div>
                                            </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="model-code newCarSearchMC">
                                              <div class="top d-flex">
                                                <img src="{{asset('assets/images/icons/fuel-spec.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                                <p class="code m-0 ps-1">Fuel Type</p>
                                              </div>
                                              <div class="bottom">
                                                <p class="m-0 ps-3">Petrol</p>
                                              </div>
                                            </div>
                                      </div>
                                    </div>

                                  </div>

                                  <div class="details my-2">
                                      <div class="inner d-flex justify-content-between w-100 gap-2">
                                        <div class="col-md-6">
                                            <div class="model-code newCarSearchMC">
                                                <div class="top d-flex">
                                                  <img src="{{asset('assets/images/icons/engin-size.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                                  <p class="code m-0 ps-1">Engine Size</p>
                                                </div>
                                                <div class="bottom">
                                                  <p class="m-0 ps-3">1500</p>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="model-code newCarSearchMC">
                                                <div class="top d-flex">
                                                  <img src="{{asset('assets/images/icons/seat.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                                  <p class="code m-0 ps-1">Seats</p>
                                                </div>
                                                <div class="bottom">
                                                  <p class="m-0 ps-3">2</p>
                                                </div>
                                              </div>
                                        </div>
                                      </div>

                                    </div>

                                  <div class="pricing newCarSearchPC">
                                   <p class="price m-0">Price:</p>
                                   <p class="total m-0"><span class="tag mx-2">New from:</span>$2,168</p>
                                  </div>

                                  <div class="action-buying newCarSearchBTN mt-3 mb-2">
                                    <button class="btn btn-buy">View Detail</button>
                                    <button class="btn btn-quote">Inquire</button>
                                   </div>

                                </div>
                              </div>
                            </div>

                            <div class="col-md-3 right">
                             
                              <div class="action-buy newSearchCarAction">
                                <button class="btn btn-buy">View Detail</button>
                                <button class="btn btn-quote">Inquire</button>
                                <button class="btn btn-notify">Notify If Available</button>
                              </div>
                            </div>


                          </div>
                        </div>
                    </div>
                    <hr class="my-2">
                </div>  

                <div class="col item">
                    <div class="card">
                        <div class="card-body">
                          <div class="wrappers">
                            <div class="col-md-2 top-card-image">
                              <img src="{{asset('assets/images/new-car-assets/NewCarBlack.webp')}}" alt="Search Car" class="img-fluid h-100" loading="lazy">
                            </div>

                            <div class="col-md-7 center">
                              <div class="top-points">

                                <div class="earn">
                                  <p class="m-0">Earn 100 points</p>
                                </div>
                               
                              </div>

                              <div class="car-title">
                                <p class="m-0">2024 Mazda Roadster</p>
                              </div>

                              <div class="car-details">
                                <div class="detail1">
                                 
                                  <div class="more-detail newCarDetails mt-1">
                                    <div class="model-code">
                                      <div class="top">
                                        <img src="{{asset('assets/images/icons/trans-type.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                        <p class="code m-0">Transmission</p>
                                      </div>
                                      <div class="bottom">
                                        <p class="m-0">MT</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="detail1">
                                  
                                  <div class="more-detail newCarDetails mt-1 ms-1">
                                    <div class="model-code">
                                      <div class="top">
                                        <img src="{{asset('assets/images/icons/fuel-spec.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                        <p class="code m-0">Fuel Type</p>
                                      </div>
                                      <div class="bottom">
                                        <p class="m-0">Petrol</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="detail1">
                                  <div class="more-detail newCarDetails mt-1 ms-1">
                                    <div class="model-code">
                                      <div class="top">
                                        <img src="{{asset('assets/images/icons/engin-size.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                        <p class="code m-0">Engine Size</p>
                                      </div>
                                      <div class="bottom">
                                        <p class="m-0">1500</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="detail1">
                                  <div class="more-detail newCarDetails mt-1 ms-1">
                                    <div class="model-code">
                                      <div class="top">
                                        <img src="{{asset('assets/images/icons/seat.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                        <p class="code m-0">Seats</p>
                                      </div>
                                      <div class="bottom">
                                        <p class="m-0">2</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="detail1">
                                  <div class="more-detail newCarDetails mt-1 ms-1">
                                   <p class="m-0 from">New from</p>
                                   <p class="m-0 priceList">$2,168</p>
                                  </div>
                                </div>
                               
                              </div>

                              <div class="grid-details">
                                <div class="top">
                                  <div class="mark newCarSearch">
                                    <p class="sale m-0">Earn 100 points</p>
                                  </div>

                                  <div class="heading">
                                    <p class="title py-2 px-2">2024 Mazda Roadster</p>
                                  </div>

                                  <div class="details">
                                    <div class="inner d-flex justify-content-between w-100 gap-2">
                                      <div class="col-md-6">
                                          <div class="model-code newCarSearchMC">
                                              <div class="top d-flex">
                                                <img src="{{asset('assets/images/icons/trans-type.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                                <p class="code m-0 ps-1">Transmission</p>
                                              </div>
                                              <div class="bottom">
                                                <p class="m-0 ps-3">MT</p>
                                              </div>
                                            </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="model-code newCarSearchMC">
                                              <div class="top d-flex">
                                                <img src="{{asset('assets/images/icons/fuel-spec.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                                <p class="code m-0 ps-1">Fuel Type</p>
                                              </div>
                                              <div class="bottom">
                                                <p class="m-0 ps-3">Petrol</p>
                                              </div>
                                            </div>
                                      </div>
                                    </div>

                                  </div>

                                  <div class="details my-2">
                                      <div class="inner d-flex justify-content-between w-100 gap-2">
                                        <div class="col-md-6">
                                            <div class="model-code newCarSearchMC">
                                                <div class="top d-flex">
                                                  <img src="{{asset('assets/images/icons/engin-size.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                                  <p class="code m-0 ps-1">Engine Size</p>
                                                </div>
                                                <div class="bottom">
                                                  <p class="m-0 ps-3">1500</p>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="model-code newCarSearchMC">
                                                <div class="top d-flex">
                                                  <img src="{{asset('assets/images/icons/seat.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                                  <p class="code m-0 ps-1">Seats</p>
                                                </div>
                                                <div class="bottom">
                                                  <p class="m-0 ps-3">2</p>
                                                </div>
                                              </div>
                                        </div>
                                      </div>

                                    </div>

                                  <div class="pricing newCarSearchPC">
                                   <p class="price m-0">Price:</p>
                                   <p class="total m-0"><span class="tag mx-2">New from:</span>$2,168</p>
                                  </div>

                                  <div class="action-buying newCarSearchBTN mt-3 mb-2">
                                    <button class="btn btn-buy">View Detail</button>
                                    <button class="btn btn-quote">Inquire</button>
                                   </div>

                                </div>
                              </div>
                            </div>

                            <div class="col-md-3 right">
                             
                              <div class="action-buy newSearchCarAction">
                                <button class="btn btn-buy">View Detail</button>
                                <button class="btn btn-quote">Inquire</button>
                                <button class="btn btn-notify">Notify If Available</button>
                              </div>
                            </div>


                          </div>
                        </div>
                    </div>
                    <hr class="my-2">
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

              <div class="newCarSatarea">
                <div class="top my-5">
                    <p class="m-0 title pb-3">Buy New Cars With SAT</p>
                    <p class="m-0 para">
                        Our vast inventory holds some of the most advanced new cars in the global market, ranging from sleek sedans, and practical SUVs to the latest muscle cars and luxury automobiles. We supply the latest quality automobiles from top car manufacturers such as Honda, Toyota, Suzuki, Mitsubishi, Nissan, etc. With a wide range of new vehicles of different trims, powertrains, interiors, choose the one according to your preferences.
                    </p>
                </div>
              </div>
              @component('used_car.partial.customer_review')
              @endcomponent
          </div>
          
        </div>
    </div>
</section>



{{-- ================================ Mobile View =========================--}}

<section class="mobile2-view">
    <div class="advance-search-calculator-mobile">
      <div class="container">
        <div class="row">
        
          <div class="mobile-filters-search">
            <ul class="list-unstyled filter-list d-flex align-items-center gap-1">
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
  
                  <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                    <div class="left">
                      <p class="m-0">Mileage</p>
                    </div>
                    <div class="right d-flex gap-2 w-50">
                      <select class="form-select minYear selectMinMileage" aria-label="Default select example">
                      <option selected>Min</option>
                      <option value="2000">2000</option>
                      <option value="2001">2001</option>
                      <option value="2002">2002</option>
                    </select>
                      <select class="form-select maxYear selectMaxMileage" aria-label="Default select example">
                      <option selected>Max</option>
                      <option value="2000">2000</option>
                      <option value="2001">2001</option>
                      <option value="2002">2002</option>
                    </select>
                    </div>
                  </div>
  
                  <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                    <div class="left w-50">
                      <p class="m-0">Steering</p>
                    </div>
                    <div class="right w-50">
                      <button class="btn btn-make-filter steering-filter-selected w-100 d-flex align-items-center justify-content-between"
                      type="button" data-bs-toggle="offcanvas" data-bs-target="#steeringFilterOffCanvas" aria-controls="steeringFilterOffCanvas">Select <i class="fa fa-chevron-down"></i></button>
                    </div>
                  </div>
  
                  <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                    <div class="left w-50">
                      <p class="m-0">Transmission</p>
                    </div>
                    <div class="right w-50">
                      <button class="btn btn-make-filter transmission-filter-selected w-100 d-flex align-items-center justify-content-between"
                      type="button" data-bs-toggle="offcanvas" data-bs-target="#transmissionFilterOffCanvas" aria-controls="transmissionFilterOffCanvas">Select <i class="fa fa-chevron-down"></i></button>
                    </div>
                  </div>
  
                  <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                    <div class="left w-50">
                      <p class="m-0">Engine Size</p>
                    </div>
                    <div class="right w-50">
                      <button class="btn btn-make-filter engsize-filter-selected w-100 d-flex align-items-center justify-content-between"
                      type="button" data-bs-toggle="offcanvas" data-bs-target="#engineeFilterOffCanvas" aria-controls="engineeFilterOffCanvas">Select <i class="fa fa-chevron-down"></i></button>
                    </div>
                  </div>
  
                  <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                    <div class="left w-50">
                      <p class="m-0">Fuel</p>
                    </div>
                    <div class="right w-50">
                      <button class="btn btn-make-filter fuel-filter-selected w-100 d-flex align-items-center justify-content-between"
                      type="button" data-bs-toggle="offcanvas" data-bs-target="#fuelFilterOffCanvas" aria-controls="fuelFilterOffCanvas">Select <i class="fa fa-chevron-down"></i></button>
                    </div>
                  </div>
  
                  <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                    <div class="left w-50">
                      <p class="m-0">Body Type</p>
                    </div>
                    <div class="right w-50">
                      <button class="btn btn-make-filter bodytype-filter-selected w-100 d-flex align-items-center justify-content-between"
                      type="button" data-bs-toggle="offcanvas" data-bs-target="#bodytypeFilterOffCanvas" aria-controls="bodytypeFilterOffCanvas">Select <i class="fa fa-chevron-down"></i></button>
                    </div>
                  </div>
  
  
                  <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                    <div class="left w-50">
                      <p class="m-0">Seats</p>
                    </div>
                    <div class="right w-50">
                      <button class="btn btn-make-filter seats-filter-selected w-100 d-flex align-items-center justify-content-between"
                      type="button" data-bs-toggle="offcanvas" data-bs-target="#seatsFilterOffCanvas" aria-controls="seatsFilterOffCanvas">Select <i class="fa fa-chevron-down"></i></button>
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
                              <select class="form-select minYear selectMinCapacity" aria-label="Default select example">
                                <option selected>Min</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                              </select>
                                <select class="form-select maxYear selectMaxCapacity" aria-label="Default select example">
                                <option selected>Max</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                              </select>
                            </div>
                          </div>
  
                          <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                            <div class="left w-50">
                              <p class="m-0">Location</p>
                            </div>
                            <div class="right w-50">
                              <button class="btn btn-make-filter location-filter-selected w-100 d-flex align-items-center justify-content-between"
                              type="button" data-bs-toggle="offcanvas" data-bs-target="#locationFilterOffCanvas" aria-controls="locationFilterOffCanvas">Search <i class="fa fa-chevron-down"></i></button>
                            </div>
                          </div>
  
                          <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                            <div class="left w-50">
                              <p class="m-0">Colour</p>
                            </div>
                            <div class="right w-50">
                              <button class="btn btn-make-filter colour-filter-selected w-100 d-flex align-items-center justify-content-between"
                              type="button" data-bs-toggle="offcanvas" data-bs-target="#colourFilterOffCanvas" aria-controls="colourFilterOffCanvas">Search <i class="fa fa-chevron-down"></i></button>
                            </div>
                          </div>
  
                          <div class="dropdown-selection-filter d-flex justify-content-between align-items-center my-3">
                            <div class="left w-50">
                              <p class="m-0">Drivetrain</p>
                            </div>
                            <div class="right w-50">
                              <button class="btn btn-make-filter drivetrain-filter-selected w-100 d-flex align-items-center justify-content-between"
                              type="button" data-bs-toggle="offcanvas" data-bs-target="#drivetrainFilterOffCanvas" aria-controls="drivetrainFilterOffCanvas">Search <i class="fa fa-chevron-down"></i></button>
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
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="ABS">
                            <label class="form-check-label" for="inlineCheckbox1">ABS</label>
                          </div>
                          <div class="form-check form-check-inline w-50">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="A/C">
                            <label class="form-check-label" for="inlineCheckbox2"> A/C </label>
                          </div>
                        </div>
  
                        <div class="additional-feature-checks d-flex justify-content-between pt-3">
                          <div class="form-check form-check-inline w-50">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Air Bags">
                            <label class="form-check-label" for="inlineCheckbox1">Air Bags</label>
                          </div>
                          <div class="form-check form-check-inline w-50">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Back Camera">
                            <label class="form-check-label" for="inlineCheckbox2">Back Camera </label>
                          </div>
                        </div>
  
                        <div class="additional-feature-checks d-flex justify-content-between pt-3">
                          <div class="form-check form-check-inline w-50">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Dual Airbags">
                            <label class="form-check-label" for="inlineCheckbox1">Dual Airbags</label>
                          </div>
                          <div class="form-check form-check-inline w-50">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Fog Lights">
                            <label class="form-check-label" for="inlineCheckbox2">Fog Lights</label>
                          </div>
                        </div>
  
                        <div class="additional-feature-checks d-flex justify-content-between pt-3">
                          <div class="form-check form-check-inline w-50">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Keyless Entry">
                            <label class="form-check-label" for="inlineCheckbox1">Keyless Entry</label>
                          </div>
                          <div class="form-check form-check-inline w-50">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Power Steering">
                            <label class="form-check-label" for="inlineCheckbox2">Power Steering</label>
                          </div>
                        </div>
  
                        <div class="additional-feature-checks d-flex justify-content-between pt-3">
                          <div class="form-check form-check-inline w-50">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Power Windows">
                            <label class="form-check-label" for="inlineCheckbox1">Power Windows</label>
                          </div>
                          <div class="form-check form-check-inline w-50">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Push Start">
                            <label class="form-check-label" for="inlineCheckbox2">Push Start</label>
                          </div>
                        </div>
  
                        <div class="additional-feature-checks d-flex justify-content-between pt-3">
                          <div class="form-check form-check-inline w-50">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Power Windows1">
                            <label class="form-check-label" for="inlineCheckbox1">Power Windows1</label>
                          </div>
                          <div class="form-check form-check-inline w-50">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Push Start1">
                            <label class="form-check-label" for="inlineCheckbox2">Push Start1</label>
                          </div>
                        </div>
  
                        <div class="additional-feature-checks d-flex justify-content-between pt-3">
                          <div class="form-check form-check-inline w-50">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Rear Spoiler">
                            <label class="form-check-label" for="inlineCheckbox1">Rear Spoiler </label>
                          </div>
                          <div class="form-check form-check-inline w-50">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Roof Rails">
                            <label class="form-check-label" for="inlineCheckbox2">Roof Rails</label>
                          </div>
                        </div>
  
                        <div class="additional-feature-checks d-flex justify-content-between pt-3">
                          <div class="form-check form-check-inline w-50">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Sun Roof">
                            <label class="form-check-label" for="inlineCheckbox1">Sun Roof</label>
                          </div>
                          <div class="form-check form-check-inline w-50">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="TV">
                            <label class="form-check-label" for="inlineCheckbox2"> TV </label>
                          </div>
                        </div>
  
                        <div class="additional-feature-checks d-flex justify-content-between pt-3">
                          <div class="form-check form-check-inline w-50">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="360 Degree Camera">
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
                        <select class="form-select selectMinYear" aria-label="Default select example">
                          <option selected>1999</option>
                          <option value="1">2000</option>
                          <option value="2">2001</option>
                          <option value="3">2002</option>
                        </select>
                      </div>
                      <div class="right w-50">
                        <p class="m-0 max-year">Max Year</p>
                        <select class="form-select selectMaxYear" aria-label="Default select example">
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
                    <p class="m-0 min-year selectMinPrice">Min Price</p>
                    <select class="form-select" aria-label="Default select example">
                      <option selected>1999</option>
                      <option value="1">2000</option>
                      <option value="2">2001</option>
                      <option value="3">2002</option>
                    </select>
                  </div>
                  <div class="right w-50">
                    <p class="m-0 max-year selectMaxPrice">Max Price</p>
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
                    <p class="m-0 min-year selectMinMilage">Min Milage</p>
                    <select class="form-select" aria-label="Default select example">
                      <option selected>1999</option>
                      <option value="1">2000</option>
                      <option value="2">2001</option>
                      <option value="3">2002</option>
                    </select>
                  </div>
                  <div class="right w-50">
                    <p class="m-0 max-year selectMaxMilage">Max Milage</p>
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
                  <ul class="list-unstyled steeringFilterList" id="steeringFilterList">
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
                  <ul class="list-unstyled transmissionFilterList" id="transmissionFilterList">
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
                  <ul class="list-unstyled enginesizeFilterList" id="enginesizeFilterList">
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
                  <ul class="list-unstyled fuelFilterList" id="fuelFilterList">
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
  
            {{-- Start Location Filter Search --}}
            <div class="offcanvas offcanvas-bottom" tabindex="-1" id="locationFilterOffCanvas" aria-labelledby="locationFilterOffCanvasLabel">
              <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body p-0 px-3">
                <div class="search">
                  <input type="text" placeholder="Search Location" id="locationFilterSearch">
                  <img src="{{asset('assets/images/header-images/mobile-search-icon.webp')}}" alt="" loading="lazy">
                </div>
                <div class="list py-3">
                  <ul class="list-unstyled locationFilterList" id="locationFilterList">
                     <li data-make="Lahore" data-value="Lahore">Lahore</li>
                    <li data-make="Karachi" data-value="Karachi">Karachi</li>
                    <li data-make="Islamabad" data-value="Islamabad">Islamabad</li>
                  </ul>
                </div>
              </div>
            </div>
            {{-- End Location Filter Search --}}
  
            {{-- Start Colour Filter Search --}}
            <div class="offcanvas offcanvas-bottom" tabindex="-1" id="colourFilterOffCanvas" aria-labelledby="colourFilterOffCanvasLabel">
              <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body p-0 px-3">
                <div class="search">
                  <input type="text" placeholder="Search Colour" id="colourFilterSearch">
                  <img src="{{asset('assets/images/header-images/mobile-search-icon.webp')}}" alt="" loading="lazy">
                </div>
                <div class="list py-3">
                  <ul class="list-unstyled colourFilterList" id="colourFilterList">
                     <li data-make="Blue" data-value="Blue">Blue</li>
                    <li data-make="Pink" data-value="Pink">Pink</li>
                    <li data-make="Red" data-value="Red">Red</li>
                  </ul>
                </div>
              </div>
            </div>
            {{-- End Colour Filter Search --}}
  
            {{-- Start Drivetrain Filter Search --}}
            <div class="offcanvas offcanvas-bottom" tabindex="-1" id="drivetrainFilterOffCanvas" aria-labelledby="drivetrainFilterOffCanvasLabel">
              <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body p-0 px-3">
                <div class="search">
                  <input type="text" placeholder="Search Drivetrain" id="drivetrainFilterSearch">
                  <img src="{{asset('assets/images/header-images/mobile-search-icon.webp')}}" alt="" loading="lazy">
                </div>
                <div class="list py-3">
                  <ul class="list-unstyled drivetrainFilterList" id="drivetrainFilterList">
                     <li data-make="2W" data-value="2W">2W</li>
                    <li data-make="4w" data-value="4w">4w</li>
                    <li data-make="6w" data-value="6w">6w</li>
                  </ul>
                </div>
              </div>
            </div>
            {{-- End Drivetrain Filter Search --}}
  
            {{-- Start Seats Filter Search --}}
            <div class="offcanvas offcanvas-bottom" tabindex="-1" id="seatsFilterOffCanvas" aria-labelledby="seatsFilterOffCanvasLabel">
              <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body p-0 px-3">
                <div class="search">
                  <input type="text" placeholder="Search Seats" id="seatsFilterSearch">
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
            {{-- End Seats Filter Search --}}
  
          </div>
  
          

  
      <div class="mobile-used-cars-search my-4">
        <div class="top">
          <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <p class="heading">New Cars for Sale</p>
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
                  <img src="{{asset('assets/images/new-car-assets/NewCarBlack.webp')}}" alt="Car" class="img-fluid" loading="lazy">
                </div>
                <div class="right px-2">
                  <div class="top d-flex align-items-center gap-2 ms-1">
                    <p class="mobile-nys-NewCarSearchMobile m-0">Earn 100 points</p>
                  </div>
                 
                  <div class="heading-NewCarSearchMobile">
                    <p class="m-0">2024 Mazda ROADSTER</p>
                  </div>

                  <div class="mobile-spec-infor-NewCarSearch">
                    <div class="inner d-flex align-items-center gap-2 my-2">
                        <div class="col-md-6 w-50">
                            <div class="model-code newCarSearchMC">
                                <div class="top d-flex">
                                  <img src="{{asset('assets/images/icons/trans-type.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                  <p class="code m-0 ps-1">Transmission</p>
                                </div>
                                <div class="bottom">
                                  <p class="m-0 ps-3">MT</p>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-6 w-50">
                            <div class="model-code newCarSearchMC">
                                <div class="top d-flex">
                                  <img src="{{asset('assets/images/icons/fuel-spec.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                  <p class="code m-0 ps-1">Fuel Type</p>
                                </div>
                                <div class="bottom">
                                  <p class="m-0 ps-3">Petrol</p>
                                </div>
                              </div>
                        </div>
                    </div>

                    <div class="inner d-flex align-items-center gap-2 my-2">
                        <div class="col-md-6 w-50">
                            <div class="model-code newCarSearchMC">
                                <div class="top d-flex">
                                  <img src="{{asset('assets/images/icons/engin-size.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                  <p class="code m-0 ps-1">Engine Size</p>
                                </div>
                                <div class="bottom">
                                  <p class="m-0 ps-3">1500</p>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-6 w-50">
                            <div class="model-code newCarSearchMC">
                                <div class="top d-flex">
                                  <img src="{{asset('assets/images/icons/seat.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                  <p class="code m-0 ps-1">Seats</p>
                                </div>
                                <div class="bottom">
                                  <p class="m-0 ps-3">2</p>
                                </div>
                              </div>
                        </div>
                    </div>
                  </div>
  
                  <div class="mobile-total-price-car newCarSearchMobileTP">
                    <div class="inner d-flex pt-1 px-1">
                      <p class="m-0 title">New from</p>
                      <p class="m-0 amount ps-1">$2,168</p>
                    </div>
                  </div>
  
                  <div class="mobile-car-buttons-buy newCarSearchButtonsMobile">
                    <div class="inner d-flex align-items-center gap-2 mt-2">
                      <button class="btn btn-inquire w-50">
                        View Detail
                      </button>
  
                      <button class="btn btn-buyNow w-50">
                        Inquire
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
                    <img src="{{asset('assets/images/new-car-assets/NewCarBlack.webp')}}" alt="Car" class="img-fluid" loading="lazy">
                  </div>
                  <div class="right px-2">
                    <div class="top d-flex align-items-center gap-2 ms-1">
                      <p class="mobile-nys-NewCarSearchMobile m-0">Earn 100 points</p>
                    </div>
                   
                    <div class="heading-NewCarSearchMobile">
                      <p class="m-0">2024 Mazda ROADSTER</p>
                    </div>
  
                    <div class="mobile-spec-infor-NewCarSearch">
                      <div class="inner d-flex align-items-center gap-2 my-2">
                          <div class="col-md-6 w-50">
                              <div class="model-code newCarSearchMC">
                                  <div class="top d-flex">
                                    <img src="{{asset('assets/images/icons/trans-type.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                    <p class="code m-0 ps-1">Transmission</p>
                                  </div>
                                  <div class="bottom">
                                    <p class="m-0 ps-3">MT</p>
                                  </div>
                                </div>
                          </div>
                          <div class="col-md-6 w-50">
                              <div class="model-code newCarSearchMC">
                                  <div class="top d-flex">
                                    <img src="{{asset('assets/images/icons/fuel-spec.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                    <p class="code m-0 ps-1">Fuel Type</p>
                                  </div>
                                  <div class="bottom">
                                    <p class="m-0 ps-3">Petrol</p>
                                  </div>
                                </div>
                          </div>
                      </div>
  
                      <div class="inner d-flex align-items-center gap-2 my-2">
                          <div class="col-md-6 w-50">
                              <div class="model-code newCarSearchMC">
                                  <div class="top d-flex">
                                    <img src="{{asset('assets/images/icons/engin-size.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                    <p class="code m-0 ps-1">Engine Size</p>
                                  </div>
                                  <div class="bottom">
                                    <p class="m-0 ps-3">1500</p>
                                  </div>
                                </div>
                          </div>
                          <div class="col-md-6 w-50">
                              <div class="model-code newCarSearchMC">
                                  <div class="top d-flex">
                                    <img src="{{asset('assets/images/icons/seat.webp')}}" alt="Car Code" class="img-fluid" loading="lazy">
                                    <p class="code m-0 ps-1">Seats</p>
                                  </div>
                                  <div class="bottom">
                                    <p class="m-0 ps-3">2</p>
                                  </div>
                                </div>
                          </div>
                      </div>
                    </div>
    
                    <div class="mobile-total-price-car newCarSearchMobileTP">
                      <div class="inner d-flex pt-1 px-1">
                        <p class="m-0 title">New from</p>
                        <p class="m-0 amount ps-1">$2,168</p>
                      </div>
                    </div>
    
                    <div class="mobile-car-buttons-buy newCarSearchButtonsMobile">
                      <div class="inner d-flex align-items-center gap-2 mt-2">
                        <button class="btn btn-inquire w-50">
                          View Detail
                        </button>
    
                        <button class="btn btn-buyNow w-50">
                          Inquire
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

      <div class="mobile-new-car-search">
        <div class="container p-0">
            <div class="row">
                <div class="inner">
                    <p class="m-0 title pb-2">Buy New Cars With SAT</p>
                    <p class="m-0 para">Our vast inventory holds some of the most advanced new cars in the global market, ranging from sleek sedans, and practical SUVs to the latest muscle cars and luxury automobiles. We supply the latest quality automobiles from top car manufacturers such as Honda, Toyota, Suzuki, Mitsubishi, Nissan, etc. With a wide range of new vehicles of different trims, powertrains, interiors, choose the one according to your preferences.</p>
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