<section class="find-my-car-desktop my-5 py-4">
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
                           <a href="javacript:;" type="button" class="btn btn-find-car" data-bs-toggle="modal" data-bs-target="#findMyCarModal">Find My Car
                            <i class="fa fa-arrow-right px-2"></i>
                           </a>
                        </div>

                        {{-- Find My Car Model --}}
                        <div class="modal fade" id="findMyCarModal" tabindex="-1" aria-labelledby="findMyCarModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header border-0 pt-4 px-5">
                                  <h1 class="modal-title" id="findMyCarModalLabel">Car Recommender</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="container" class="container">
                                        <div class="progress px-1" style="height: 2px;">
                                          <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="step-container d-flex justify-content-between">
                                          <div class="step-circle" onclick="displayStep(1)">1</div>
                                          <div class="step-circle" onclick="displayStep(2)">2</div>
                                          <div class="step-circle" onclick="displayStep(3)">3</div>
                                        </div>
                                      
                                        
                                        <form id="multi-step-form">
                                          <div class="step step-1">
                                            <!-- Step 1 form fields here -->
                                            <div class="model-image text-center my-3">
                                                <img src="{{asset('assets/images/car-find-model.webp')}}" alt="Find Car" class="img-fluid" loading="lazy" width="100" height="46">
                                            </div>
                                            <h3 class="title text-center py-3">Select Your Budget</h3>
                                            <div class="budget-buttons mb-3">
                                              <div class="button-1">
                                                <button data-bs-toggle="button" aria-pressed="false" autocomplete="off">Less than $1000</button>
                                              </div>
                                              <div class="button-2">
                                                <button data-bs-toggle="button" aria-pressed="false" autocomplete="off">Between $1000 - $2000</button>
                                              </div>
                                              <div class="button-3">
                                                <button data-bs-toggle="button" aria-pressed="false" autocomplete="off">Between $2000 - $3000</button>
                                              </div>
                                      
                                            </div>
                                            <div class="budget-buttons mb-3">
                                             
                                              <div class="button-4">
                                                <button data-bs-toggle="button" aria-pressed="false" autocomplete="off">Between $3000 - $4000</button>
                                              </div>
                                              <div class="button-5">
                                                <button data-bs-toggle="button" aria-pressed="false" autocomplete="off">Between $4000 - $5000</button>
                                              </div>
                                              <div class="button-6">
                                                <button data-bs-toggle="button" aria-pressed="false" autocomplete="off">Above $5000</button>
                                              </div>
                                              
                                            </div>
                                            <div class="next-step-form1">
                                                <div class="catch-value">
                                                    <p class="m-0">0 Cars found</p>
                                                    <p class="m-0">Matching above criteria</p>
                                                </div>
                                            <button type="button" class="btn btn-next-step next-step">Next</button>
                                        </div>
                                          </div>
                                      
                                          <div class="step step-2">
                                            <!-- Step 2 form fields here -->
                                            <h3 class="title text-center pb-3">Select Your Budget</h3>
                                            <div class="select-car-find-wrapper d-flex justify-content-between text-center mb-3">
                                               <div class="select-car-find">
                                                <img src="{{asset('assets/images/find_car/suv.webp')}}" alt="SUV" class="img-fluid" loading="lazy">
                                                <p>SUV</p>   
                                                </div>

                                                <div class="select-car-find">
                                                <img src="{{asset('assets/images/find_car/sedan.webp')}}" alt="Sedan" class="img-fluid" loading="lazy">
                                                <p>Sedan</p>   
                                                </div>

                                                <div class="select-car-find">
                                                <img src="{{asset('assets/images/find_car/hatchback.webp')}}" alt="Hatchback" class="img-fluid" loading="lazy">
                                                <p>Hatchback</p>   
                                                </div>

                                                <div class="select-car-find">
                                                <img src="{{asset('assets/images/find_car/truck.webp')}}" alt="Pickup" class="img-fluid" loading="lazy">
                                                <p>Pickup</p>   
                                                </div>

                                                <div class="select-car-find">
                                                <img src="{{asset('assets/images/find_car/convertable.webp')}}" alt="Convertable" class="img-fluid" loading="lazy">
                                                <p>Convertable</p>   
                                                </div>
                                            
                                            </div>

                                        <div class="select-car-find-wrapper d-flex justify-content-between text-center mb-3">
                                                <div class="select-car-find">
                                                 <img src="{{asset('assets/images/find_car/suv.webp')}}" alt="SUV" class="img-fluid" loading="lazy">
                                                 <p>SUV</p>   
                                                 </div>
 
                                                 <div class="select-car-find">
                                                 <img src="{{asset('assets/images/find_car/sedan.webp')}}" alt="Sedan" class="img-fluid" loading="lazy">
                                                 <p>Sedan</p>   
                                                 </div>
 
                                                 <div class="select-car-find">
                                                 <img src="{{asset('assets/images/find_car/hatchback.webp')}}" alt="Hatchback" class="img-fluid" loading="lazy">
                                                 <p>Hatchback</p>   
                                                 </div>
 
                                                 <div class="select-car-find">
                                                 <img src="{{asset('assets/images/find_car/truck.webp')}}" alt="Pickup" class="img-fluid" loading="lazy">
                                                 <p>Pickup</p>   
                                                 </div>
 
                                                 <div class="select-car-find">
                                                 <img src="{{asset('assets/images/find_car/convertable.webp')}}" alt="Convertable" class="img-fluid" loading="lazy">
                                                 <p>Convertable</p>   
                                                 </div>
                                             
                                         </div>
                                             <div class="select-car-find-wrapper d-flex justify-content-between text-center mb-3">
                                                <div class="select-car-find">
                                                 <img src="{{asset('assets/images/find_car/suv.webp')}}" alt="SUV" class="img-fluid" loading="lazy">
                                                 <p>SUV</p>   
                                                 </div>
 
                                                 <div class="select-car-find">
                                                 <img src="{{asset('assets/images/find_car/sedan.webp')}}" alt="Sedan" class="img-fluid" loading="lazy">
                                                 <p>Sedan</p>   
                                                 </div>
 
                                                 <div class="select-car-find">
                                                 <img src="{{asset('assets/images/find_car/hatchback.webp')}}" alt="Hatchback" class="img-fluid" loading="lazy">
                                                 <p>Hatchback</p>   
                                                 </div>
 
                                                 <div class="select-car-find">
                                                 <img src="{{asset('assets/images/find_car/truck.webp')}}" alt="Pickup" class="img-fluid" loading="lazy">
                                                 <p>Pickup</p>   
                                                 </div>
 
                                                 <div class="select-car-find">
                                                 <img src="{{asset('assets/images/find_car/convertable.webp')}}" alt="Convertable" class="img-fluid" loading="lazy">
                                                 <p>Convertable</p>   
                                                 </div>
                                             
                                             </div>
                                             <div class="select-car-find-wrapper d-flex justify-content-between text-center mb-3">
                                                <div class="select-car-find">
                                                 <img src="{{asset('assets/images/find_car/suv.webp')}}" alt="SUV" class="img-fluid" loading="lazy">
                                                 <p>SUV</p>   
                                                 </div>
 
                                                 <div class="select-car-find">
                                                 <img src="{{asset('assets/images/find_car/sedan.webp')}}" alt="Sedan" class="img-fluid" loading="lazy">
                                                 <p>Sedan</p>   
                                                 </div>
 
                                                 <div class="select-car-find">
                                                 <img src="{{asset('assets/images/find_car/hatchback.webp')}}" alt="Hatchback" class="img-fluid" loading="lazy">
                                                 <p>Hatchback</p>   
                                                 </div>
 
                                                 <div class="select-car-find">
                                                 <img src="{{asset('assets/images/find_car/truck.webp')}}" alt="Pickup" class="img-fluid" loading="lazy">
                                                 <p>Pickup</p>   
                                                 </div>
 
                                                 <div class="select-car-find">
                                                 <img src="{{asset('assets/images/find_car/convertable.webp')}}" alt="Convertable" class="img-fluid" loading="lazy">
                                                 <p>Convertable</p>   
                                                 </div>
                                             
                                             </div>
                                             <div class="select-car-find-wrapper d-flex justify-content-between text-center mb-3">
                                                <div class="select-car-find">
                                                 <img src="{{asset('assets/images/find_car/suv.webp')}}" alt="SUV" class="img-fluid" loading="lazy">
                                                 <p>SUV</p>   
                                                 </div>
 
                                                 <div class="select-car-find">
                                                 <img src="{{asset('assets/images/find_car/sedan.webp')}}" alt="Sedan" class="img-fluid" loading="lazy">
                                                 <p>Sedan</p>   
                                                 </div>
 
                                                 <div class="select-car-find">
                                                 <img src="{{asset('assets/images/find_car/hatchback.webp')}}" alt="Hatchback" class="img-fluid" loading="lazy">
                                                 <p>Hatchback</p>   
                                                 </div>
 
                                                 <div class="select-car-find">
                                                 <img src="{{asset('assets/images/find_car/truck.webp')}}" alt="Pickup" class="img-fluid" loading="lazy">
                                                 <p>Pickup</p>   
                                                 </div>
 
                                                 <div class="select-car-find">
                                                 <img src="{{asset('assets/images/find_car/convertable.webp')}}" alt="Convertable" class="img-fluid" loading="lazy">
                                                 <p>Convertable</p>   
                                                 </div>
                                             
                                             </div>

                                            <div class="next-step-form2">
                                                <div class="catch-value">
                                                    <p class="m-0">0 Cars found</p>
                                                    <p class="m-0">Matching above criteria</p>
                                                </div>
                                                <div class="next-step-3-move">
                                                    <button type="button" class="btn btn-prev-step prev-step mx-3">Back</button>
                                                    <button type="button" class="btn btn-next-step next-step">Next</button>
                                                </div>
                                        </div>
                                           
                                          </div>
                                      
                                          <div class="step step-3">
                                            <!-- Step 3 form fields here -->
                                            <h3 class="title text-center pb-3">Select Your Location</h3>
                                            <div class="find-car-search-country mb-3">
                                              <div class="searchbar-find-car border-1 border d-flex align-items-center p-2 rounded-2 mb-2">
                                                <input type="text" class="form-control shadow-none border-0 p-0" id="field3" name="field3" placeholder="Search Country">
                                              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.25 1.5C11.976 1.5 15 4.524 15 8.25C15 11.976 11.976 15 8.25 15C4.524 15 1.5 11.976 1.5 8.25C1.5 4.524 4.524 1.5 8.25 1.5ZM8.25 13.5C11.1503 13.5 13.5 11.1503 13.5 8.25C13.5 5.349 11.1503 3 8.25 3C5.349 3 3 5.349 3 8.25C3 11.1503 5.349 13.5 8.25 13.5ZM14.6138 13.5533L16.7355 15.6743L15.6743 16.7355L13.5533 14.6138L14.6138 13.5533Z" fill="#2F2B43" fill-opacity="0.7"></path>
                                                </svg>
                                              </div>

                                              <div class="country-list d-flex justify-content-between align-items-center">
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                              </div>

                                              <div class="country-list d-flex justify-content-between align-items-center">
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                              </div>

                                              <div class="country-list d-flex justify-content-between align-items-center">
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                              </div>

                                              <div class="country-list d-flex justify-content-between align-items-center">
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                              </div>

                                              <div class="country-list d-flex justify-content-between align-items-center">
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                              </div>

                                              <div class="country-list d-flex justify-content-between align-items-center">
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                              </div>

                                              <div class="country-list d-flex justify-content-between align-items-center">
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                              </div>

                                              <div class="country-list d-flex justify-content-between align-items-center">
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                                <div class="country">
                                                    <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Country" class="img-fluid" loading="lazy">
                                                    <p class="m-0">Chile</p>
                                                </div>
                                              </div>
                                              

                                              
                                            
                                            </div>

                                            <div class="next-step-form3">
                                                <div class="catch-value">
                                                    <p class="m-0">0 Cars found</p>
                                                    <p class="m-0">Matching above criteria</p>
                                                </div>
                                                <div class="next-step-3-move">
                                                    <button type="button" class="btn btn-prev-step prev-step mx-3">Back</button>
                                                    <button type="submit" class="btn btn-success">Submit</button>
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