<section class="find-my-car-desktop desktop-view my-5 py-4">
    <div class="container">
        <div class="wrapper">
            <div class="row align-items-center">

                <div class="col-md-6">
                    <div class="find-car-left">
                        <div class="heading">
                            <p class="title m-0">Confused About Which Car to Buy?</p>
                        </div>
                        <div class="desc">
                            <p class="para">Use our car recommender to help you find your dream ride</p>
                        </div>
                        <div class="find-car-action py-2">
                            <a href="javacript:;" type="button" class="btn btn-find-car" data-bs-toggle="modal"
                                data-bs-target="#findMyCarModal">Find My Car
                                <i class="fa fa-arrow-right px-2"></i>
                            </a>
                        </div>

                        {{-- Find My Car Model --}}
                        <div class="modal fade" id="findMyCarModal" tabindex="-1" aria-labelledby="findMyCarModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header border-0 pt-4 px-5">
                                        <h1 class="modal-title" id="findMyCarModalLabel">Car Recommender</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="container" class="container-fluid">
                                            <div class="progress px-1" style="height: 2px;">
                                                <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="step-container d-flex justify-content-between">
                                                <div class="step-circle" onclick="displayStep(1)">1</div>
                                                <div class="step-circle" onclick="displayStep(2)">2</div>
                                                <div class="step-circle" onclick="displayStep(3)">3</div>
                                            </div>


                                            <form id="multi-step-form">
                                                <div class="step step-1" style="">
                                                    <!-- Step 1 form fields here -->
                                                    <div class="model-image text-center my-3">
                                                        <img src="/assets/images/car-find-model.webp" alt="Find Car"
                                                            class="img-fluid" loading="lazy" width="100"
                                                            height="46">
                                                    </div>
                                                    <h3 class="title text-center py-3">Select Your Budget</h3>
                                                    <div class="budget-buttons">

                                                        <div class="radio-buttons">
                                                            <!-- Radio Button 1 -->
                                                            <label class="radio-btn mx-2">
                                                                <input type="radio" name="price"
                                                                    value="less-than-1000" id="less-than-1000">
                                                                <span class="btn-text">Less than $1000</span>
                                                            </label>

                                                            <!-- Radio Button 2 -->
                                                            <label class="radio-btn mx-2">
                                                                <input type="radio" name="price"
                                                                    value="between-1000-5000" id="between-1000-5000">
                                                                <span class="btn-text">Between $1000 - $2000</span>
                                                            </label>

                                                            <!-- Radio Button 3 -->
                                                            <label class="radio-btn mx-2">
                                                                <input type="radio" name="price"
                                                                    value="more-than-5000" id="more-than-5000">
                                                                <span class="btn-text">Between $2000 - $3000</span>
                                                            </label>
                                                        </div>



                                                    </div>
                                                    <div class="budget-buttons mb-3">



                                                        <div class="radio-buttons">
                                                            <!-- Radio Button 1 -->
                                                            <label class="radio-btn mx-2">
                                                                <input type="radio" name="price"
                                                                    value="less-than-1000" id="less-than-1000">
                                                                <span class="btn-text">Between $3000 - $4000</span>
                                                            </label>

                                                            <!-- Radio Button 2 -->
                                                            <label class="radio-btn mx-2">
                                                                <input type="radio" name="price"
                                                                    value="between-1000-5000" id="between-1000-5000">
                                                                <span class="btn-text">Between $4000 - $5000</span>
                                                            </label>

                                                            <!-- Radio Button 3 -->
                                                            <label class="radio-btn mx-2">
                                                                <input type="radio" name="price"
                                                                    value="more-than-5000" id="more-than-5000">
                                                                <span class="btn-text">Above $5000</span>
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="next-step-form1">
                                                        <div class="catch-value">
                                                            <p class="m-0">0 Cars found</p>
                                                            <p class="m-0">Matching above criteria</p>
                                                        </div>
                                                        <button type="button"
                                                            class="btn btn-next-step next-step">Next</button>
                                                    </div>
                                                </div>

                                                <div class="step step-2" style="display: none;">
                                                    <!-- Step 2 form fields here -->
                                                    <h3 class="title text-center pb-3">Select Your Budget</h3>



                                                    <div
                                                        class="select-car-find-wrapper d-flex justify-content-between text-center mb-3">
                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="suv" name="car"
                                                                value="suv" class="car-checkbox">
                                                            <label for="suv">
                                                                <img src="{{asset('assets/images/find_car/suv.webp')}}"
                                                                    alt="SUV" class="img-fluid" loading="lazy">
                                                                <p>SUV</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="sedan" name="car"
                                                                value="sedan" class="car-checkbox">
                                                            <label for="sedan">
                                                                <img src="{{asset('assets/images/find_car/sedan.webp')}}"
                                                                    alt="Sedan" class="img-fluid" loading="lazy">
                                                                <p>Sedan</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="hatchback" name="car"
                                                                value="hatchback" class="car-checkbox">
                                                            <label for="hatchback">
                                                                <img src="{{asset('assets/images/find_car/hatchback.webp')}}"
                                                                    alt="Hatchback" class="img-fluid" loading="lazy">
                                                                <p>Hatchback</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="pickup" name="car"
                                                                value="pickup" class="car-checkbox">
                                                            <label for="pickup">
                                                                <img src="{{asset('assets/images/find_car/truck.webp')}}"
                                                                    alt="Pickup" class="img-fluid" loading="lazy">
                                                                <p>Pickup</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="convertable" name="car"
                                                                value="convertable" class="car-checkbox">
                                                            <label for="convertable">
                                                                <img src="{{asset('assets/images/find_car/convertable.webp')}}"
                                                                    alt="Convertable" class="img-fluid"
                                                                    loading="lazy">
                                                                <p>Convertable</p>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="select-car-find-wrapper d-flex justify-content-between text-center mb-3">
                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="suv1" name="car"
                                                                value="suv" class="car-checkbox">
                                                            <label for="suv1">
                                                                <img src="{{asset('assets/images/find_car/suv.webp')}}"
                                                                    alt="SUV" class="img-fluid" loading="lazy">
                                                                <p>SUV</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="sedan2" name="car"
                                                                value="sedan" class="car-checkbox">
                                                            <label for="sedan2">
                                                                <img src="{{asset('assets/images/find_car/sedan.webp')}}"
                                                                    alt="Sedan" class="img-fluid" loading="lazy">
                                                                <p>Sedan</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="hatchback2" name="car"
                                                                value="hatchback" class="car-checkbox">
                                                            <label for="hatchback2">
                                                                <img src="{{asset('assets/images/find_car/hatchback.webp')}}"
                                                                    alt="Hatchback" class="img-fluid" loading="lazy">
                                                                <p>Hatchback</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="pickup2" name="car"
                                                                value="pickup" class="car-checkbox">
                                                            <label for="pickup2">
                                                                <img src="{{asset('assets/images/find_car/truck.webp')}}"
                                                                    alt="Pickup" class="img-fluid" loading="lazy">
                                                                <p>Pickup</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="convertable2" name="car"
                                                                value="convertable" class="car-checkbox">
                                                            <label for="convertable2">
                                                                <img src="{{asset('assets/images/find_car/convertable.webp')}}"
                                                                    alt="Convertable" class="img-fluid"
                                                                    loading="lazy">
                                                                <p>Convertable</p>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="select-car-find-wrapper d-flex justify-content-between text-center mb-3">
                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="suv3" name="car"
                                                                value="suv" class="car-checkbox">
                                                            <label for="suv3">
                                                                <img src="{{asset('assets/images/find_car/suv.webp')}}"
                                                                    alt="SUV" class="img-fluid" loading="lazy">
                                                                <p>SUV</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="sedan3" name="car"
                                                                value="sedan" class="car-checkbox">
                                                            <label for="sedan3">
                                                                <img src="{{asset('assets/images/find_car/sedan.webp')}}"
                                                                    alt="Sedan" class="img-fluid" loading="lazy">
                                                                <p>Sedan</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="hatchback3" name="car"
                                                                value="hatchback" class="car-checkbox">
                                                            <label for="hatchback3">
                                                                <img src="{{asset('assets/images/find_car/hatchback.webp')}}"
                                                                    alt="Hatchback" class="img-fluid" loading="lazy">
                                                                <p>Hatchback</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="pickup3" name="car"
                                                                value="pickup" class="car-checkbox">
                                                            <label for="pickup3">
                                                                <img src="{{asset('assets/images/find_car/truck.webp')}}"
                                                                    alt="Pickup" class="img-fluid" loading="lazy">
                                                                <p>Pickup</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="convertable3" name="car"
                                                                value="convertable" class="car-checkbox">
                                                            <label for="convertable3">
                                                                <img src="{{asset('assets/images/find_car/convertable.webp')}}"
                                                                    alt="Convertable" class="img-fluid"
                                                                    loading="lazy">
                                                                <p>Convertable</p>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="select-car-find-wrapper d-flex justify-content-between text-center mb-3">
                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="suv4" name="car"
                                                                value="suv" class="car-checkbox">
                                                            <label for="suv4">
                                                                <img src="{{asset('assets/images/find_car/suv.webp')}}"
                                                                    alt="SUV" class="img-fluid" loading="lazy">
                                                                <p>SUV</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="sedan4" name="car"
                                                                value="sedan" class="car-checkbox">
                                                            <label for="sedan4">
                                                                <img src="{{asset('assets/images/find_car/sedan.webp')}}"
                                                                    alt="Sedan" class="img-fluid" loading="lazy">
                                                                <p>Sedan</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="hatchback4" name="car"
                                                                value="hatchback" class="car-checkbox">
                                                            <label for="hatchback4">
                                                                <img src="{{asset('assets/images/find_car/hatchback.webp')}}"
                                                                    alt="Hatchback" class="img-fluid" loading="lazy">
                                                                <p>Hatchback</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="pickup4" name="car"
                                                                value="pickup" class="car-checkbox">
                                                            <label for="pickup4">
                                                                <img src="{{asset('assets/images/find_car/truck.webp')}}"
                                                                    alt="Pickup" class="img-fluid" loading="lazy">
                                                                <p>Pickup</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="convertable4" name="car"
                                                                value="convertable" class="car-checkbox">
                                                            <label for="convertable4">
                                                                <img src="{{asset('assets/images/find_car/convertable.webp')}}"
                                                                    alt="Convertable" class="img-fluid"
                                                                    loading="lazy">
                                                                <p>Convertable</p>
                                                            </label>
                                                        </div>
                                                    </div>





                                                    <div class="next-step-form2">
                                                        <div class="catch-value">
                                                            <p class="m-0">0 Cars found</p>
                                                            <p class="m-0">Matching above criteria</p>
                                                        </div>
                                                        <div class="next-step-3-move">
                                                            <button type="button"
                                                                class="btn btn-prev-step prev-step mx-3">Back</button>
                                                            <button type="button"
                                                                class="btn btn-next-step next-step">Next</button>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="step step-3" style="display: none;">
                                                    <!-- Step 3 form fields here -->
                                                    <h3 class="title text-center pb-3">Select Your Location</h3>
                                                    <div class="find-car-search-country mb-3">

                                                        {{-- Start free --}}
                                                        <div class="country-list d-flex justify-content-between align-items-center">
                                                          <div class="country p-0">
                                                              <input type="radio" id="chile" name="country" value="Chile" class="flag-radio">
                                                              <label for="chile">
                                                                  <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                                  <p class="m-0">Chile</p>
                                                              </label>
                                                          </div>
                                                      
                                                          <div class="country p-0">
                                                              <input type="radio" id="chile1" name="country" value="Chile" class="flag-radio">
                                                              <label for="chile1">
                                                                  <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                                  <p class="m-0">Chile</p>
                                                              </label>
                                                          </div>
                                                      
                                                          <div class="country p-0">
                                                              <input type="radio" id="chile2" name="country" value="Chile" class="flag-radio">
                                                              <label for="chile2">
                                                                  <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                                  <p class="m-0">Chile</p>
                                                              </label>
                                                          </div>
                                                      
                                                          <div class="country p-0">
                                                              <input type="radio" id="chile3" name="country" value="Chile" class="flag-radio">
                                                              <label for="chile3">
                                                                  <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                                  <p class="m-0">Chile</p>
                                                              </label>
                                                          </div>
                                                      </div>


                                                      <div class="country-list d-flex justify-content-between align-items-center py-3">
                                                        <div class="country p-0">
                                                            <input type="radio" id="chile4" name="country" value="Chile" class="flag-radio">
                                                            <label for="chile4">
                                                                <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                                <p class="m-0">Chile</p>
                                                            </label>
                                                        </div>
                                                    
                                                        <div class="country p-0">
                                                            <input type="radio" id="chile5" name="country" value="Chile" class="flag-radio">
                                                            <label for="chile5">
                                                                <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                                <p class="m-0">Chile</p>
                                                            </label>
                                                        </div>
                                                    
                                                        <div class="country p-0">
                                                            <input type="radio" id="chile6" name="country" value="Chile" class="flag-radio">
                                                            <label for="chile6">
                                                                <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                                <p class="m-0">Chile</p>
                                                            </label>
                                                        </div>
                                                    
                                                        <div class="country p-0">
                                                            <input type="radio" id="chile7" name="country" value="Chile" class="flag-radio">
                                                            <label for="chile7">
                                                                <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                                <p class="m-0">Chile</p>
                                                            </label>
                                                        </div>
                                                    </div>


                                                    <div class="country-list d-flex justify-content-between align-items-center">
                                                      <div class="country p-0">
                                                          <input type="radio" id="chile8" name="country" value="Chile" class="flag-radio">
                                                          <label for="chile8">
                                                              <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                              <p class="m-0">Chile</p>
                                                          </label>
                                                      </div>
                                                  
                                                      <div class="country p-0">
                                                          <input type="radio" id="chile9" name="country" value="Chile" class="flag-radio">
                                                          <label for="chile9">
                                                              <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                              <p class="m-0">Chile</p>
                                                          </label>
                                                      </div>
                                                  
                                                      <div class="country p-0">
                                                          <input type="radio" id="chile10" name="country" value="Chile" class="flag-radio">
                                                          <label for="chile10">
                                                              <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                              <p class="m-0">Chile</p>
                                                          </label>
                                                      </div>
                                                  
                                                      <div class="country p-0">
                                                          <input type="radio" id="chile11" name="country" value="Chile" class="flag-radio">
                                                          <label for="chile11">
                                                              <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                              <p class="m-0">Chile</p>
                                                          </label>
                                                      </div>
                                                  </div>


                                                  <div class="country-list d-flex justify-content-between align-items-center py-3">
                                                    <div class="country p-0">
                                                        <input type="radio" id="chile8" name="country" value="Chile" class="flag-radio">
                                                        <label for="chile8">
                                                            <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                            <p class="m-0">Chile</p>
                                                        </label>
                                                    </div>
                                                
                                                    <div class="country p-0">
                                                        <input type="radio" id="chile9" name="country" value="Chile" class="flag-radio">
                                                        <label for="chile9">
                                                            <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                            <p class="m-0">Chile</p>
                                                        </label>
                                                    </div>
                                                
                                                    <div class="country p-0">
                                                        <input type="radio" id="chile10" name="country" value="Chile" class="flag-radio">
                                                        <label for="chile10">
                                                            <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                            <p class="m-0">Chile</p>
                                                        </label>
                                                    </div>
                                                
                                                    <div class="country p-0">
                                                        <input type="radio" id="chile11" name="country" value="Chile" class="flag-radio">
                                                        <label for="chile11">
                                                            <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                            <p class="m-0">Chile</p>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="country-list d-flex justify-content-between align-items-center">
                                                  <div class="country p-0">
                                                      <input type="radio" id="chile12" name="country" value="Chile" class="flag-radio">
                                                      <label for="chile12">
                                                          <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                          <p class="m-0">Chile</p>
                                                      </label>
                                                  </div>
                                              
                                                  <div class="country p-0">
                                                      <input type="radio" id="chile13" name="country" value="Chile" class="flag-radio">
                                                      <label for="chile13">
                                                          <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                          <p class="m-0">Chile</p>
                                                      </label>
                                                  </div>
                                              
                                                  <div class="country p-0">
                                                      <input type="radio" id="chile14" name="country" value="Chile" class="flag-radio">
                                                      <label for="chile14">
                                                          <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                          <p class="m-0">Chile</p>
                                                      </label>
                                                  </div>
                                              
                                                  <div class="country p-0">
                                                      <input type="radio" id="chile15" name="country" value="Chile" class="flag-radio">
                                                      <label for="chile15">
                                                          <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                          <p class="m-0">Chile</p>
                                                      </label>
                                                  </div>
                                              </div>

                                              <div class="country-list d-flex justify-content-between align-items-center py-3">
                                                <div class="country p-0">
                                                    <input type="radio" id="chile16" name="country" value="Chile" class="flag-radio">
                                                    <label for="chile16">
                                                        <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                        <p class="m-0">Chile</p>
                                                    </label>
                                                </div>
                                            
                                                <div class="country p-0">
                                                    <input type="radio" id="chile17" name="country" value="Chile" class="flag-radio">
                                                    <label for="chile17">
                                                        <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                        <p class="m-0">Chile</p>
                                                    </label>
                                                </div>
                                            
                                                <div class="country p-0">
                                                    <input type="radio" id="chile18" name="country" value="Chile" class="flag-radio">
                                                    <label for="chile18">
                                                        <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                        <p class="m-0">Chile</p>
                                                    </label>
                                                </div>
                                            
                                                <div class="country p-0">
                                                    <input type="radio" id="chile19" name="country" value="Chile" class="flag-radio">
                                                    <label for="chile19">
                                                        <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                        <p class="m-0">Chile</p>
                                                    </label>
                                                </div>
                                            </div>
                                                        {{-- End free --}}
                                                       

                                                    </div>

                                                    <div class="next-step-form3">
                                                        <div class="catch-value">
                                                            <p class="m-0">0 Cars found</p>
                                                            <p class="m-0">Matching above criteria</p>
                                                        </div>
                                                        <div class="next-step-3-move">
                                                            <button type="button"
                                                                class="btn btn-prev-step prev-step mx-3">Back</button>
                                                            <button type="submit"
                                                                class="btn btn-success">Submit</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>


                </div>
                <div class="col-md-6">
                    <div class="find-car-right px-2 pt-5 mt-4">
                        <div class="detail-buttons">
                            <div class="budget-action pb-3">
                                <button class="btn btn-budget">Budget?</button>
                            </div>
                            <div class="brand-action pb-3">
                                <button class="btn btn-brand">Brand?</button>
                            </div>
                            <div class="feature-action pb-3">
                                <button class="btn btn-feature">Features?</button>
                            </div>
                            <div class="mileage-action pb-3">
                                <button class="btn btn-mileage">Mileage?</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




{{-- ================ Tablet View ==================--}}
<section class="find-my-car-desktop tablet-view my-5 py-4">
    <div class="container">
        <div class="wrapper">
            <div class="row align-items-center">

                <div class="col-md-6">
                    <div class="find-car-left">
                        <div class="heading">
                            <p class="title m-0">Confused About Which Car to Buy?</p>
                        </div>
                        <div class="desc">
                            <p class="para">Use our car recommender to help you find your dream ride</p>
                        </div>
                        <div class="find-car-action py-2">
                            <a href="javacript:;" type="button" class="btn btn-find-car" data-bs-toggle="modal"
                                data-bs-target="#findMyCarModalTablet">Find My Car
                                <i class="fa fa-arrow-right px-2"></i>
                            </a>
                        </div>

                        {{-- Find My Car Model --}}
                        <div class="modal fade" id="findMyCarModalTablet" tabindex="-1" aria-labelledby="findMyCarModalTabletLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header border-0 pt-4 px-5">
                                        <h1 class="modal-title" id="findMyCarModalTabletLabel">Car Recommender</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="container" class="container-fluid">
                                            <div class="progress px-1" style="height: 2px;">
                                                <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="step-container d-flex justify-content-between">
                                                <div class="step-circle" onclick="displayStep(1)">1</div>
                                                <div class="step-circle" onclick="displayStep(2)">2</div>
                                                <div class="step-circle" onclick="displayStep(3)">3</div>
                                            </div>


                                            <form id="multi-step-form">
                                                <div class="step step-1" style="">
                                                    <!-- Step 1 form fields here -->
                                                    <div class="model-image text-center my-3">
                                                        <img src="/assets/images/car-find-model.webp" alt="Find Car"
                                                            class="img-fluid" loading="lazy" width="100"
                                                            height="46">
                                                    </div>
                                                    <h3 class="title text-center py-3">Select Your Budget</h3>
                                                    <div class="budget-buttons">

                                                        <div class="radio-buttons">
                                                            <!-- Radio Button 1 -->
                                                            <label class="radio-btn mx-2">
                                                                <input type="radio" name="price"
                                                                    value="less-than-1000" id="less-than-1000">
                                                                <span class="btn-text">Less than $1000</span>
                                                            </label>

                                                            <!-- Radio Button 2 -->
                                                            <label class="radio-btn mx-2">
                                                                <input type="radio" name="price"
                                                                    value="between-1000-5000" id="between-1000-5000">
                                                                <span class="btn-text">Between $1000 - $2000</span>
                                                            </label>

                                                            <!-- Radio Button 3 -->
                                                            <label class="radio-btn mx-2">
                                                                <input type="radio" name="price"
                                                                    value="more-than-5000" id="more-than-5000">
                                                                <span class="btn-text">Between $2000 - $3000</span>
                                                            </label>
                                                        </div>



                                                    </div>
                                                    <div class="budget-buttons mb-3">



                                                        <div class="radio-buttons">
                                                            <!-- Radio Button 1 -->
                                                            <label class="radio-btn mx-2">
                                                                <input type="radio" name="price"
                                                                    value="less-than-1000" id="less-than-1000">
                                                                <span class="btn-text">Between $3000 - $4000</span>
                                                            </label>

                                                            <!-- Radio Button 2 -->
                                                            <label class="radio-btn mx-2">
                                                                <input type="radio" name="price"
                                                                    value="between-1000-5000" id="between-1000-5000">
                                                                <span class="btn-text">Between $4000 - $5000</span>
                                                            </label>

                                                            <!-- Radio Button 3 -->
                                                            <label class="radio-btn mx-2">
                                                                <input type="radio" name="price"
                                                                    value="more-than-5000" id="more-than-5000">
                                                                <span class="btn-text">Above $5000</span>
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="next-step-form1">
                                                        <div class="catch-value">
                                                            <p class="m-0">0 Cars found</p>
                                                            <p class="m-0">Matching above criteria</p>
                                                        </div>
                                                        <button type="button"
                                                            class="btn btn-next-step next-step">Next</button>
                                                    </div>
                                                </div>

                                                <div class="step step-2" style="display: none;">
                                                    <!-- Step 2 form fields here -->
                                                    <h3 class="title text-center pb-3">Select Your Budget</h3>



                                                    <div
                                                        class="select-car-find-wrapper d-flex justify-content-between text-center mb-3">
                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="suv" name="car"
                                                                value="suv" class="car-checkbox">
                                                            <label for="suv">
                                                                <img src="{{asset('assets/images/find_car/suv.webp')}}"
                                                                    alt="SUV" class="img-fluid" loading="lazy">
                                                                <p>SUV</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="sedan" name="car"
                                                                value="sedan" class="car-checkbox">
                                                            <label for="sedan">
                                                                <img src="{{asset('assets/images/find_car/sedan.webp')}}"
                                                                    alt="Sedan" class="img-fluid" loading="lazy">
                                                                <p>Sedan</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="hatchback" name="car"
                                                                value="hatchback" class="car-checkbox">
                                                            <label for="hatchback">
                                                                <img src="{{asset('assets/images/find_car/hatchback.webp')}}"
                                                                    alt="Hatchback" class="img-fluid" loading="lazy">
                                                                <p>Hatchback</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="pickup" name="car"
                                                                value="pickup" class="car-checkbox">
                                                            <label for="pickup">
                                                                <img src="{{asset('assets/images/find_car/truck.webp')}}"
                                                                    alt="Pickup" class="img-fluid" loading="lazy">
                                                                <p>Pickup</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="convertable" name="car"
                                                                value="convertable" class="car-checkbox">
                                                            <label for="convertable">
                                                                <img src="{{asset('assets/images/find_car/convertable.webp')}}"
                                                                    alt="Convertable" class="img-fluid"
                                                                    loading="lazy">
                                                                <p>Convertable</p>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="select-car-find-wrapper d-flex justify-content-between text-center mb-3">
                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="suv1" name="car"
                                                                value="suv" class="car-checkbox">
                                                            <label for="suv1">
                                                                <img src="{{asset('assets/images/find_car/suv.webp')}}"
                                                                    alt="SUV" class="img-fluid" loading="lazy">
                                                                <p>SUV</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="sedan2" name="car"
                                                                value="sedan" class="car-checkbox">
                                                            <label for="sedan2">
                                                                <img src="{{asset('assets/images/find_car/sedan.webp')}}"
                                                                    alt="Sedan" class="img-fluid" loading="lazy">
                                                                <p>Sedan</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="hatchback2" name="car"
                                                                value="hatchback" class="car-checkbox">
                                                            <label for="hatchback2">
                                                                <img src="{{asset('assets/images/find_car/hatchback.webp')}}"
                                                                    alt="Hatchback" class="img-fluid" loading="lazy">
                                                                <p>Hatchback</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="pickup2" name="car"
                                                                value="pickup" class="car-checkbox">
                                                            <label for="pickup2">
                                                                <img src="{{asset('assets/images/find_car/truck.webp')}}"
                                                                    alt="Pickup" class="img-fluid" loading="lazy">
                                                                <p>Pickup</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="convertable2" name="car"
                                                                value="convertable" class="car-checkbox">
                                                            <label for="convertable2">
                                                                <img src="{{asset('assets/images/find_car/convertable.webp')}}"
                                                                    alt="Convertable" class="img-fluid"
                                                                    loading="lazy">
                                                                <p>Convertable</p>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="select-car-find-wrapper d-flex justify-content-between text-center mb-3">
                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="suv3" name="car"
                                                                value="suv" class="car-checkbox">
                                                            <label for="suv3">
                                                                <img src="{{asset('assets/images/find_car/suv.webp')}}"
                                                                    alt="SUV" class="img-fluid" loading="lazy">
                                                                <p>SUV</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="sedan3" name="car"
                                                                value="sedan" class="car-checkbox">
                                                            <label for="sedan3">
                                                                <img src="{{asset('assets/images/find_car/sedan.webp')}}"
                                                                    alt="Sedan" class="img-fluid" loading="lazy">
                                                                <p>Sedan</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="hatchback3" name="car"
                                                                value="hatchback" class="car-checkbox">
                                                            <label for="hatchback3">
                                                                <img src="{{asset('assets/images/find_car/hatchback.webp')}}"
                                                                    alt="Hatchback" class="img-fluid" loading="lazy">
                                                                <p>Hatchback</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="pickup3" name="car"
                                                                value="pickup" class="car-checkbox">
                                                            <label for="pickup3">
                                                                <img src="{{asset('assets/images/find_car/truck.webp')}}"
                                                                    alt="Pickup" class="img-fluid" loading="lazy">
                                                                <p>Pickup</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="convertable3" name="car"
                                                                value="convertable" class="car-checkbox">
                                                            <label for="convertable3">
                                                                <img src="{{asset('assets/images/find_car/convertable.webp')}}"
                                                                    alt="Convertable" class="img-fluid"
                                                                    loading="lazy">
                                                                <p>Convertable</p>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="select-car-find-wrapper d-flex justify-content-between text-center mb-3">
                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="suv4" name="car"
                                                                value="suv" class="car-checkbox">
                                                            <label for="suv4">
                                                                <img src="{{asset('assets/images/find_car/suv.webp')}}"
                                                                    alt="SUV" class="img-fluid" loading="lazy">
                                                                <p>SUV</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="sedan4" name="car"
                                                                value="sedan" class="car-checkbox">
                                                            <label for="sedan4">
                                                                <img src="{{asset('assets/images/find_car/sedan.webp')}}"
                                                                    alt="Sedan" class="img-fluid" loading="lazy">
                                                                <p>Sedan</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="hatchback4" name="car"
                                                                value="hatchback" class="car-checkbox">
                                                            <label for="hatchback4">
                                                                <img src="{{asset('assets/images/find_car/hatchback.webp')}}"
                                                                    alt="Hatchback" class="img-fluid" loading="lazy">
                                                                <p>Hatchback</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="pickup4" name="car"
                                                                value="pickup" class="car-checkbox">
                                                            <label for="pickup4">
                                                                <img src="{{asset('assets/images/find_car/truck.webp')}}"
                                                                    alt="Pickup" class="img-fluid" loading="lazy">
                                                                <p>Pickup</p>
                                                            </label>
                                                        </div>

                                                        <div class="select-car-find">
                                                            <input type="checkbox" id="convertable4" name="car"
                                                                value="convertable" class="car-checkbox">
                                                            <label for="convertable4">
                                                                <img src="{{asset('assets/images/find_car/convertable.webp')}}"
                                                                    alt="Convertable" class="img-fluid"
                                                                    loading="lazy">
                                                                <p>Convertable</p>
                                                            </label>
                                                        </div>
                                                    </div>





                                                    <div class="next-step-form2">
                                                        <div class="catch-value">
                                                            <p class="m-0">0 Cars found</p>
                                                            <p class="m-0">Matching above criteria</p>
                                                        </div>
                                                        <div class="next-step-3-move">
                                                            <button type="button"
                                                                class="btn btn-prev-step prev-step mx-3">Back</button>
                                                            <button type="button"
                                                                class="btn btn-next-step next-step">Next</button>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="step step-3" style="display: none;">
                                                    <!-- Step 3 form fields here -->
                                                    <h3 class="title text-center pb-3">Select Your Location</h3>
                                                    <div class="find-car-search-country mb-3">

                                                        {{-- Start free --}}
                                                        <div class="country-list d-flex justify-content-between align-items-center">
                                                          <div class="country p-0">
                                                              <input type="radio" id="chile" name="country" value="Chile" class="flag-radio">
                                                              <label for="chile">
                                                                  <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                                  <p class="m-0">Chile</p>
                                                              </label>
                                                          </div>
                                                      
                                                          <div class="country p-0">
                                                              <input type="radio" id="chile1" name="country" value="Chile" class="flag-radio">
                                                              <label for="chile1">
                                                                  <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                                  <p class="m-0">Chile</p>
                                                              </label>
                                                          </div>
                                                      
                                                          <div class="country p-0">
                                                              <input type="radio" id="chile2" name="country" value="Chile" class="flag-radio">
                                                              <label for="chile2">
                                                                  <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                                  <p class="m-0">Chile</p>
                                                              </label>
                                                          </div>
                                                      
                                                          <div class="country p-0">
                                                              <input type="radio" id="chile3" name="country" value="Chile" class="flag-radio">
                                                              <label for="chile3">
                                                                  <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                                  <p class="m-0">Chile</p>
                                                              </label>
                                                          </div>
                                                      </div>


                                                      <div class="country-list d-flex justify-content-between align-items-center py-3">
                                                        <div class="country p-0">
                                                            <input type="radio" id="chile4" name="country" value="Chile" class="flag-radio">
                                                            <label for="chile4">
                                                                <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                                <p class="m-0">Chile</p>
                                                            </label>
                                                        </div>
                                                    
                                                        <div class="country p-0">
                                                            <input type="radio" id="chile5" name="country" value="Chile" class="flag-radio">
                                                            <label for="chile5">
                                                                <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                                <p class="m-0">Chile</p>
                                                            </label>
                                                        </div>
                                                    
                                                        <div class="country p-0">
                                                            <input type="radio" id="chile6" name="country" value="Chile" class="flag-radio">
                                                            <label for="chile6">
                                                                <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                                <p class="m-0">Chile</p>
                                                            </label>
                                                        </div>
                                                    
                                                        <div class="country p-0">
                                                            <input type="radio" id="chile7" name="country" value="Chile" class="flag-radio">
                                                            <label for="chile7">
                                                                <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                                <p class="m-0">Chile</p>
                                                            </label>
                                                        </div>
                                                    </div>


                                                    <div class="country-list d-flex justify-content-between align-items-center">
                                                      <div class="country p-0">
                                                          <input type="radio" id="chile8" name="country" value="Chile" class="flag-radio">
                                                          <label for="chile8">
                                                              <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                              <p class="m-0">Chile</p>
                                                          </label>
                                                      </div>
                                                  
                                                      <div class="country p-0">
                                                          <input type="radio" id="chile9" name="country" value="Chile" class="flag-radio">
                                                          <label for="chile9">
                                                              <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                              <p class="m-0">Chile</p>
                                                          </label>
                                                      </div>
                                                  
                                                      <div class="country p-0">
                                                          <input type="radio" id="chile10" name="country" value="Chile" class="flag-radio">
                                                          <label for="chile10">
                                                              <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                              <p class="m-0">Chile</p>
                                                          </label>
                                                      </div>
                                                  
                                                      <div class="country p-0">
                                                          <input type="radio" id="chile11" name="country" value="Chile" class="flag-radio">
                                                          <label for="chile11">
                                                              <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                              <p class="m-0">Chile</p>
                                                          </label>
                                                      </div>
                                                  </div>


                                                  <div class="country-list d-flex justify-content-between align-items-center py-3">
                                                    <div class="country p-0">
                                                        <input type="radio" id="chile8" name="country" value="Chile" class="flag-radio">
                                                        <label for="chile8">
                                                            <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                            <p class="m-0">Chile</p>
                                                        </label>
                                                    </div>
                                                
                                                    <div class="country p-0">
                                                        <input type="radio" id="chile9" name="country" value="Chile" class="flag-radio">
                                                        <label for="chile9">
                                                            <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                            <p class="m-0">Chile</p>
                                                        </label>
                                                    </div>
                                                
                                                    <div class="country p-0">
                                                        <input type="radio" id="chile10" name="country" value="Chile" class="flag-radio">
                                                        <label for="chile10">
                                                            <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                            <p class="m-0">Chile</p>
                                                        </label>
                                                    </div>
                                                
                                                    <div class="country p-0">
                                                        <input type="radio" id="chile11" name="country" value="Chile" class="flag-radio">
                                                        <label for="chile11">
                                                            <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                            <p class="m-0">Chile</p>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="country-list d-flex justify-content-between align-items-center">
                                                  <div class="country p-0">
                                                      <input type="radio" id="chile12" name="country" value="Chile" class="flag-radio">
                                                      <label for="chile12">
                                                          <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                          <p class="m-0">Chile</p>
                                                      </label>
                                                  </div>
                                              
                                                  <div class="country p-0">
                                                      <input type="radio" id="chile13" name="country" value="Chile" class="flag-radio">
                                                      <label for="chile13">
                                                          <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                          <p class="m-0">Chile</p>
                                                      </label>
                                                  </div>
                                              
                                                  <div class="country p-0">
                                                      <input type="radio" id="chile14" name="country" value="Chile" class="flag-radio">
                                                      <label for="chile14">
                                                          <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                          <p class="m-0">Chile</p>
                                                      </label>
                                                  </div>
                                              
                                                  <div class="country p-0">
                                                      <input type="radio" id="chile15" name="country" value="Chile" class="flag-radio">
                                                      <label for="chile15">
                                                          <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                          <p class="m-0">Chile</p>
                                                      </label>
                                                  </div>
                                              </div>

                                              <div class="country-list d-flex justify-content-between align-items-center py-3">
                                                <div class="country p-0">
                                                    <input type="radio" id="chile16" name="country" value="Chile" class="flag-radio">
                                                    <label for="chile16">
                                                        <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                        <p class="m-0">Chile</p>
                                                    </label>
                                                </div>
                                            
                                                <div class="country p-0">
                                                    <input type="radio" id="chile17" name="country" value="Chile" class="flag-radio">
                                                    <label for="chile17">
                                                        <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                        <p class="m-0">Chile</p>
                                                    </label>
                                                </div>
                                            
                                                <div class="country p-0">
                                                    <input type="radio" id="chile18" name="country" value="Chile" class="flag-radio">
                                                    <label for="chile18">
                                                        <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                        <p class="m-0">Chile</p>
                                                    </label>
                                                </div>
                                            
                                                <div class="country p-0">
                                                    <input type="radio" id="chile19" name="country" value="Chile" class="flag-radio">
                                                    <label for="chile19">
                                                        <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                        <p class="m-0">Chile</p>
                                                    </label>
                                                </div>
                                            </div>
                                                        {{-- End free --}}
                                                       

                                                    </div>

                                                    <div class="next-step-form3">
                                                        <div class="catch-value">
                                                            <p class="m-0">0 Cars found</p>
                                                            <p class="m-0">Matching above criteria</p>
                                                        </div>
                                                        <div class="next-step-3-move">
                                                            <button type="button"
                                                                class="btn btn-prev-step prev-step mx-3">Back</button>
                                                            <button type="submit"
                                                                class="btn btn-success">Submit</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>


                </div>
                <div class="col-md-6">
                    <div class="find-car-right px-2 pt-5 mt-4">
                        <div class="detail-buttons">
                            <div class="budget-action pb-3">
                                <button class="btn btn-budget">Budget?</button>
                            </div>
                            <div class="brand-action pb-3">
                                <button class="btn btn-brand">Brand?</button>
                            </div>
                            <div class="feature-action pb-3">
                                <button class="btn btn-feature">Features?</button>
                            </div>
                            <div class="mileage-action pb-3">
                                <button class="btn btn-mileage">Mileage?</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ================ Mobile View ==================--}}

<section class="find-my-car-mobile mobile-view my-5 py-4">
  <div class="container">
      <div class="wrapper">
          <div class="row align-items-center">

              <div class="col-md-12 find-car-area d-flex align-items-center">
                 <div class="left-side col-12">
                  <div class="find-car-left p-3">
                    <div class="heading">
                        <p class="title m-0">Confused,  Which Car to Buy?</p>
                    </div>
                    <div class="desc">
                        <p class="para">Use our car recommender to <br/> help you find your dream ride</p>
                    </div>
                    <div class="find-car-action">
                        <a href="javacript:;" type="button" class="btn btn-find-car" data-bs-toggle="modal"
                            data-bs-target="#">Find My Car
                            <i class="fa fa-chevron-right px-2"></i>
                        </a>
                    </div>

                    {{-- Find My Car Model --}}
                    <div class="modal fade" id="findMyCarModal2" tabindex="-1" aria-labelledby="findMyCarModal2Label"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header border-0 pt-4">
                                    <h1 class="modal-title px-2" id="findMyCarModal2Label">
                                      <i class="fa fa-arrow-left px-2"></i> Car Recommender</h1>
                                    <button type="button" class="btn-close d-none" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="container" class="container-fluid">
                                        <div class="progress px-1" style="height: 2px;">
                                            <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="step-container d-flex justify-content-between">
                                            <div class="step-circle" onclick="displayStep(1)">1</div>
                                            <div class="step-circle" onclick="displayStep(2)">2</div>
                                            <div class="step-circle" onclick="displayStep(3)">3</div>
                                        </div>


                                        <form id="multi-step-form">
                                            <div class="step step-1" style="">
                                                <!-- Step 1 form fields here -->
                                                <div class="model-image text-center my-3">
                                                    <img src="/assets/images/car-find-model.webp" alt="Find Car"
                                                        class="img-fluid" loading="lazy" width="100"
                                                        height="46">
                                                </div>
                                                <h3 class="title py-3">Select Your Budget</h3>
                                                <div class="budget-buttons">

                                                    <div class="radio-buttons">
                                                        <!-- Radio Button 1 -->
                                                        <label class="radio-btn mx-1">
                                                            <input type="radio" name="price"
                                                                value="less-than-1000" id="less-than-1000">
                                                            <span class="btn-text">Less than $1000</span>
                                                        </label>

                                                        <!-- Radio Button 2 -->
                                                        <label class="radio-btn mx-1">
                                                            <input type="radio" name="price"
                                                                value="between-1000-5000" id="BTW $1000 - $2000">
                                                            <span class="btn-text">BTW $1000 - $2000</span>
                                                        </label>
                                                    </div>

                                                </div>

                                                <div class="budget-buttons">
                                                    <div class="radio-buttons">
                                                        <!-- Radio Button 1 -->
                                                        <label class="radio-btn mx-1">
                                                            <input type="radio" name="price"
                                                                value="less-than-1000" id="BTW $2000 - $3000">
                                                            <span class="btn-text">BTW $2000 - $3000</span>
                                                        </label>

                                                        <!-- Radio Button 2 -->
                                                        <label class="radio-btn mx-1">
                                                            <input type="radio" name="price"
                                                                value="between-1000-5000" id="BTW $3000 - $4000">
                                                            <span class="btn-text">BTW $3000 - $4000</span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="budget-buttons">
                                                  <div class="radio-buttons">
                                                      <!-- Radio Button 1 -->
                                                      <label class="radio-btn mx-1">
                                                          <input type="radio" name="price"
                                                              value="less-than-1000" id="BTW $4000 - $5000">
                                                          <span class="btn-text">BTW $4000 - $5000</span>
                                                      </label>

                                                      <!-- Radio Button 2 -->
                                                      <label class="radio-btn mx-1">
                                                          <input type="radio" name="price"
                                                              value="between-1000-5000" id="Above $5000">
                                                          <span class="btn-text">Above $5000</span>
                                                      </label>
                                                  </div>
                                              </div>
                                                <div class="next-step-form1">
                                                    <div class="catch-value">
                                                        <p class="m-0">0 Cars found</p>
                                                        <p class="m-0">Matching above criteria</p>
                                                    </div>
                                                    <button type="button"
                                                        class="btn btn-next-step next-step">Next</button>
                                                </div>
                                            </div>

                                            <div class="step step-2" style="display: none;">
                                                <!-- Step 2 form fields here -->
                                                <h3 class="title pb-3">Select Your Car Type</h3>

                                                <div
                                                    class="select-car-find-wrapper d-flex justify-content-between text-center mb-3 gap-3">
                                                    <div class="select-car-find">
                                                        <input type="checkbox" id="suv" name="car"
                                                            value="suv" class="car-checkbox">
                                                        <label for="suv">
                                                            <img src="{{asset('assets/images/find_car/suv.webp')}}"
                                                                alt="SUV" class="img-fluid" loading="lazy">
                                                            <p>SUV</p>
                                                        </label>
                                                    </div>

                                                    <div class="select-car-find">
                                                        <input type="checkbox" id="sedan" name="car"
                                                            value="sedan" class="car-checkbox">
                                                        <label for="sedan">
                                                            <img src="{{asset('assets/images/find_car/sedan.webp')}}"
                                                                alt="Sedan" class="img-fluid" loading="lazy">
                                                            <p>Sedan</p>
                                                        </label>
                                                    </div>

                                                    <div class="select-car-find">
                                                        <input type="checkbox" id="hatchback" name="car"
                                                            value="hatchback" class="car-checkbox">
                                                        <label for="hatchback">
                                                            <img src="{{asset('assets/images/find_car/hatchback.webp')}}"
                                                                alt="Hatchback" class="img-fluid" loading="lazy">
                                                            <p>Hatchback</p>
                                                        </label>
                                                    </div>

                                                  
                                                </div>

                                                <div
                                                    class="select-car-find-wrapper d-flex justify-content-between text-center mb-3 gap-3">
                                                    <div class="select-car-find">
                                                        <input type="checkbox" id="suv1" name="car"
                                                            value="suv" class="car-checkbox">
                                                        <label for="suv1">
                                                            <img src="{{asset('assets/images/find_car/suv.webp')}}"
                                                                alt="SUV" class="img-fluid" loading="lazy">
                                                            <p>SUV</p>
                                                        </label>
                                                    </div>

                                                    <div class="select-car-find">
                                                        <input type="checkbox" id="sedan2" name="car"
                                                            value="sedan" class="car-checkbox">
                                                        <label for="sedan2">
                                                            <img src="{{asset('assets/images/find_car/sedan.webp')}}"
                                                                alt="Sedan" class="img-fluid" loading="lazy">
                                                            <p>Sedan</p>
                                                        </label>
                                                    </div>

                                                    <div class="select-car-find">
                                                        <input type="checkbox" id="hatchback2" name="car"
                                                            value="hatchback" class="car-checkbox">
                                                        <label for="hatchback2">
                                                            <img src="{{asset('assets/images/find_car/hatchback.webp')}}"
                                                                alt="Hatchback" class="img-fluid" loading="lazy">
                                                            <p>Hatchback</p>
                                                        </label>
                                                    </div>

                                                    

                                                </div>

                                                <div
                                                    class="select-car-find-wrapper d-flex justify-content-between text-center mb-3 gap-3">
                                                    <div class="select-car-find">
                                                        <input type="checkbox" id="suv3" name="car"
                                                            value="suv" class="car-checkbox">
                                                        <label for="suv3">
                                                            <img src="{{asset('assets/images/find_car/suv.webp')}}"
                                                                alt="SUV" class="img-fluid" loading="lazy">
                                                            <p>SUV</p>
                                                        </label>
                                                    </div>

                                                    <div class="select-car-find">
                                                        <input type="checkbox" id="sedan3" name="car"
                                                            value="sedan" class="car-checkbox">
                                                        <label for="sedan3">
                                                            <img src="{{asset('assets/images/find_car/sedan.webp')}}"
                                                                alt="Sedan" class="img-fluid" loading="lazy">
                                                            <p>Sedan</p>
                                                        </label>
                                                    </div>

                                                    <div class="select-car-find">
                                                        <input type="checkbox" id="hatchback3" name="car"
                                                            value="hatchback" class="car-checkbox">
                                                        <label for="hatchback3">
                                                            <img src="{{asset('assets/images/find_car/hatchback.webp')}}"
                                                                alt="Hatchback" class="img-fluid" loading="lazy">
                                                            <p>Hatchback</p>
                                                        </label>
                                                    </div>

                                                </div>

                                                <div
                                                    class="select-car-find-wrapper d-flex justify-content-between text-center mb-3 gap-3">
                                                    <div class="select-car-find">
                                                        <input type="checkbox" id="suv4" name="car"
                                                            value="suv" class="car-checkbox">
                                                        <label for="suv4">
                                                            <img src="{{asset('assets/images/find_car/suv.webp')}}"
                                                                alt="SUV" class="img-fluid" loading="lazy">
                                                            <p>SUV</p>
                                                        </label>
                                                    </div>

                                                    <div class="select-car-find">
                                                        <input type="checkbox" id="sedan4" name="car"
                                                            value="sedan" class="car-checkbox">
                                                        <label for="sedan4">
                                                            <img src="{{asset('assets/images/find_car/sedan.webp')}}"
                                                                alt="Sedan" class="img-fluid" loading="lazy">
                                                            <p>Sedan</p>
                                                        </label>
                                                    </div>

                                                    <div class="select-car-find">
                                                        <input type="checkbox" id="hatchback4" name="car"
                                                            value="hatchback" class="car-checkbox">
                                                        <label for="hatchback4">
                                                            <img src="{{asset('assets/images/find_car/hatchback.webp')}}"
                                                                alt="Hatchback" class="img-fluid" loading="lazy">
                                                            <p>Hatchback</p>
                                                        </label>
                                                    </div>


                                                </div>





                                                <div class="next-step-form2">
                                                    <div class="catch-value">
                                                        <p class="m-0">0 Cars found</p>
                                                        <p class="m-0">Matching above criteria</p>
                                                    </div>
                                                    <div class="next-step-3-move">
                                                        <button type="button"
                                                            class="btn btn-prev-step prev-step">Back</button>
                                                        <button type="button"
                                                            class="btn btn-next-step next-step">Next</button>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="step step-3" style="display: none;">
                                                <!-- Step 3 form fields here -->
                                                <h3 class="title pb-3">Select Your Location</h3>
                                                <div class="find-car-search-country mb-3">

                                                    {{-- Start free --}}
                                                    <div class="country-list">
                                                      <div class="country p-0">
                                                          <input type="radio" id="chile" name="country" value="Chile" class="flag-radio">
                                                          <label for="chile">
                                                              <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                              <p class="m-0">Chile</p>
                                                          </label>
                                                      </div>
                                                  
                                                      <div class="country p-0">
                                                          <input type="radio" id="chile1" name="country" value="Chile" class="flag-radio">
                                                          <label for="chile1">
                                                              <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                              <p class="m-0">Chile</p>
                                                          </label>
                                                      </div>
                                                  
                                                      <div class="country p-0">
                                                          <input type="radio" id="chile2" name="country" value="Chile" class="flag-radio">
                                                          <label for="chile2">
                                                              <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                              <p class="m-0">Chile</p>
                                                          </label>
                                                      </div>
                                                  
                                                      <div class="country p-0">
                                                          <input type="radio" id="chile3" name="country" value="Chile" class="flag-radio">
                                                          <label for="chile3">
                                                              <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                              <p class="m-0">Chile</p>
                                                          </label>
                                                      </div>
                                                  </div>


                                                  <div class="country-list">
                                                    <div class="country p-0">
                                                        <input type="radio" id="chile4" name="country" value="Chile" class="flag-radio">
                                                        <label for="chile4">
                                                            <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                            <p class="m-0">Chile</p>
                                                        </label>
                                                    </div>
                                                
                                                    <div class="country p-0">
                                                        <input type="radio" id="chile5" name="country" value="Chile" class="flag-radio">
                                                        <label for="chile5">
                                                            <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                            <p class="m-0">Chile</p>
                                                        </label>
                                                    </div>
                                                
                                                    <div class="country p-0">
                                                        <input type="radio" id="chile6" name="country" value="Chile" class="flag-radio">
                                                        <label for="chile6">
                                                            <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                            <p class="m-0">Chile</p>
                                                        </label>
                                                    </div>
                                                
                                                    <div class="country p-0">
                                                        <input type="radio" id="chile7" name="country" value="Chile" class="flag-radio">
                                                        <label for="chile7">
                                                            <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                            <p class="m-0">Chile</p>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="country-list">
                                                  <div class="country p-0">
                                                      <input type="radio" id="chile8" name="country" value="Chile" class="flag-radio">
                                                      <label for="chile8">
                                                          <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                          <p class="m-0">Chile</p>
                                                      </label>
                                                  </div>
                                              
                                                  <div class="country p-0">
                                                      <input type="radio" id="chile9" name="country" value="Chile" class="flag-radio">
                                                      <label for="chile9">
                                                          <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                          <p class="m-0">Chile</p>
                                                      </label>
                                                  </div>
                                              
                                                  <div class="country p-0">
                                                      <input type="radio" id="chile10" name="country" value="Chile" class="flag-radio">
                                                      <label for="chile10">
                                                          <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                          <p class="m-0">Chile</p>
                                                      </label>
                                                  </div>
                                              
                                                  <div class="country p-0">
                                                      <input type="radio" id="chile7" name="country" value="Chile" class="flag-radio">
                                                      <label for="chile7">
                                                          <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                          <p class="m-0">Chile</p>
                                                      </label>
                                                  </div>
                                              </div>

                                                    {{-- End free --}}
                                                   

                                                </div>

                                                <div class="next-step-form3">
                                                    <div class="catch-value">
                                                        <p class="m-0">0 Cars found</p>
                                                        <p class="m-0">Matching above criteria</p>
                                                    </div>
                                                    <div class="next-step-3-move">
                                                        <button type="button"
                                                            class="btn btn-prev-step prev-step">Back</button>
                                                        <button type="submit"
                                                            class="btn btn-success">Submit</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>


                </div>
                 </div>
                

                  

              </div>
             
          </div>
      </div>
  </div>
</section>