 {{-- Desktop, mobile and tablet Hero Slider area --}}
 <div class="container p-0">
   
    <div class="row mb-5 pb-3 position-relative carousel-start">
        <div id="carouselExampleIndicators" class="carousel slide p-0" data-bs-ride="carousel" data-bs-interval="2000" data-bs-wrap="true" aria-labelledby="carouselTitle" aria-live="polite">
            <!-- Carousel Indicators with ARIA labels for accessibility -->
            
          
            <!-- Carousel Inner (Slides) -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <!-- Use WebP images for improved performance and lazy load -->
                <img src="{{ asset('assets/images/country.webp') }}" class="d-block w-100 img-fluid" alt="A beautiful scenic view - slider 1" loading="eager" width="1920" height="424" />
              </div>

            </div>
           
           
          </div>

       <div class="hero-slider-form-area">
        <form action="javascript:;" class="form-slider">
            <div class="from-wrapper">
                <div class="container">
                    <div class="row p-2 pt-3">
                        <p class="heading">Find Your Dream Car with SAT.</p>
                        <div class="hero-form-section d-flex gap-1">
                            <div class="col-md-6 form-left-side">
                         
                                <div class="mb-3">
                                      <div class="dropdown">
                                        <button class="btn btn-select-make dropdown-toggle" type="button" id="dropdownMenuButtonMake" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{-- <button class="btn btn-select-make dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"> --}}
                                            <span id="selectedMake">Make</span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonMake" id="makeDropdown">
                                            <div class="make-search-field mx-2 px-0 py-0 pe-2 d-flex justify-content-between align-items-center rounded-1">
                                                <input type="text" class="form-control border-0 shadow-none bg-transparent" id="makeForm" placeholder="Search Make">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.25 1.5C11.976 1.5 15 4.524 15 8.25C15 11.976 11.976 15 8.25 15C4.524 15 1.5 11.976 1.5 8.25C1.5 4.524 4.524 1.5 8.25 1.5ZM8.25 13.5C11.1503 13.5 13.5 11.1503 13.5 8.25C13.5 5.349 11.1503 3 8.25 3C5.349 3 3 5.349 3 8.25C3 11.1503 5.349 13.5 8.25 13.5ZM14.6138 13.5533L16.7355 15.6743L15.6743 16.7355L13.5533 14.6138L14.6138 13.5533Z" fill="#2F2B43" fill-opacity="0.7"></path>
                                                    </svg>
                                            </div>
                                            <li><a class="dropdown-item dropdown-make" href="#" data-value="Toyota (24366)">Toyota (24366)</a></li>
                                            <li><a class="dropdown-item dropdown-make" href="#" data-value="Nissan (11505)">Nissan (11505)</a></li>
                                            <li><a class="dropdown-item dropdown-make" href="#" data-value="Honda (9956)">Honda (9956)</a></li>
                                            <li><a class="dropdown-item dropdown-make" href="#" data-value="Mitsubishi (4149)">Mitsubishi (4149)</a></li>
                                            <li><a class="dropdown-item dropdown-make" href="#" data-value="Subaru (3112)">Subaru (3112)</a></li>
                                            <li><a class="dropdown-item dropdown-make" href="#" data-value="Mazda (4373)">Mazda (4373)</a></li>
                                            <li><a class="dropdown-item dropdown-make" href="#" data-value="Suzuki (9104)">Suzuki (9104)</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="dropdown">
                                        <button class="btn btn-select-type dropdown-toggle" type="button" id="dropdownMenuButtonType" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{-- <button class="btn btn-select-type dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"> --}}
                                            <span id="selectedType">Type</span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonType" id="typeDropdown">
                                            <div class="type-search-field mx-2 px-0 py-0 pe-2 d-flex justify-content-between align-items-center rounded-1">
                                                <input type="text" class="form-control border-0 shadow-none bg-transparent" id="typeForm" placeholder="Search Type">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.25 1.5C11.976 1.5 15 4.524 15 8.25C15 11.976 11.976 15 8.25 15C4.524 15 1.5 11.976 1.5 8.25C1.5 4.524 4.524 1.5 8.25 1.5ZM8.25 13.5C11.1503 13.5 13.5 11.1503 13.5 8.25C13.5 5.349 11.1503 3 8.25 3C5.349 3 3 5.349 3 8.25C3 11.1503 5.349 13.5 8.25 13.5ZM14.6138 13.5533L16.7355 15.6743L15.6743 16.7355L13.5533 14.6138L14.6138 13.5533Z" fill="#2F2B43" fill-opacity="0.7"></path>
                                                    </svg>
                                            </div>
                                            <li><a class="dropdown-item dropdown-type" href="#" data-value="SUV">SUV</a></li>
                                            <li><a class="dropdown-item dropdown-type" href="#" data-value="Sedan">Sedan</a></li>
                                            <li><a class="dropdown-item dropdown-type" href="#" data-value="Tractor">Tractor</a></li>
                                            <li><a class="dropdown-item dropdown-type" href="#" data-value="Mitsubishi">Mitsubishi</a></li>
                                            <li><a class="dropdown-item dropdown-type" href="#" data-value="Wegan">Wegan</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="dropdown">
                                        <button class="btn btn-select-min-year dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span id="selectedMinYear">Min Year</span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="minyearDropdown">
                                            <div class="min-year-search-field mx-2 px-0 py-0 pe-2 d-flex justify-content-between align-items-center rounded-1">
                                                <input type="text" class="form-control border-0 shadow-none bg-transparent" id="minyearForm" placeholder="Search Min Year">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.25 1.5C11.976 1.5 15 4.524 15 8.25C15 11.976 11.976 15 8.25 15C4.524 15 1.5 11.976 1.5 8.25C1.5 4.524 4.524 1.5 8.25 1.5ZM8.25 13.5C11.1503 13.5 13.5 11.1503 13.5 8.25C13.5 5.349 11.1503 3 8.25 3C5.349 3 3 5.349 3 8.25C3 11.1503 5.349 13.5 8.25 13.5ZM14.6138 13.5533L16.7355 15.6743L15.6743 16.7355L13.5533 14.6138L14.6138 13.5533Z" fill="#2F2B43" fill-opacity="0.7"></path>
                                                    </svg>
                                            </div>
                                            <li><a class="dropdown-item dropdown-minyear" href="#" data-value="2024">2024</a></li>
                                            <li><a class="dropdown-item dropdown-minyear" href="#" data-value="2023">2023</a></li>
                                            <li><a class="dropdown-item dropdown-minyear" href="#" data-value="2022">2022</a></li>
                                            <li><a class="dropdown-item dropdown-minyear" href="#" data-value="2021">2021</a></li>
                                            <li><a class="dropdown-item dropdown-minyear" href="#" data-value="2020">2020</a></li>
                                            <li><a class="dropdown-item dropdown-minyear" href="#" data-value="2019">2019</a></li>
                                            <li><a class="dropdown-item dropdown-minyear" href="#" data-value="2018">2018</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6 form-right-side">
                            <div class="mb-3">
                                <div class="dropdown">
                                    <button class="btn btn-select-model dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span id="selectedModel">Model</span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="modelDropdown">
                                        <div class="model-search-field mx-2 px-0 py-0 pe-2 d-flex justify-content-between align-items-center rounded-1">
                                            <input type="text" class="form-control border-0 shadow-none bg-transparent" id="modelForm" placeholder="Search Model">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.25 1.5C11.976 1.5 15 4.524 15 8.25C15 11.976 11.976 15 8.25 15C4.524 15 1.5 11.976 1.5 8.25C1.5 4.524 4.524 1.5 8.25 1.5ZM8.25 13.5C11.1503 13.5 13.5 11.1503 13.5 8.25C13.5 5.349 11.1503 3 8.25 3C5.349 3 3 5.349 3 8.25C3 11.1503 5.349 13.5 8.25 13.5ZM14.6138 13.5533L16.7355 15.6743L15.6743 16.7355L13.5533 14.6138L14.6138 13.5533Z" fill="#2F2B43" fill-opacity="0.7"></path>
                                                </svg>
                                        </div>
                                        <li><a class="dropdown-item dropdown-model" href="#" data-value="2020">2020</a></li>
                                        <li><a class="dropdown-item dropdown-model" href="#" data-value="2019">2019</a></li>
                                        <li><a class="dropdown-item dropdown-model" href="#" data-value="2018">2018</a></li>
                                        <li><a class="dropdown-item dropdown-model" href="#" data-value="2017">2017</a></li>
                                        <li><a class="dropdown-item dropdown-model" href="#" data-value="2016">2016</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="dropdown">
                                    <button class="btn btn-select-steering dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span id="selectedSteering">Steering</span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="steeringDropdown">
                                        <div class="steering-search-field mx-2 px-0 py-0 pe-2 d-flex justify-content-between align-items-center rounded-1">
                                            <input type="text" class="form-control border-0 shadow-none bg-transparent" id="steeringForm" placeholder="Search steering">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.25 1.5C11.976 1.5 15 4.524 15 8.25C15 11.976 11.976 15 8.25 15C4.524 15 1.5 11.976 1.5 8.25C1.5 4.524 4.524 1.5 8.25 1.5ZM8.25 13.5C11.1503 13.5 13.5 11.1503 13.5 8.25C13.5 5.349 11.1503 3 8.25 3C5.349 3 3 5.349 3 8.25C3 11.1503 5.349 13.5 8.25 13.5ZM14.6138 13.5533L16.7355 15.6743L15.6743 16.7355L13.5533 14.6138L14.6138 13.5533Z" fill="#2F2B43" fill-opacity="0.7"></path>
                                                </svg>
                                        </div>
                                        <li><a class="dropdown-item dropdown-steering" href="#" data-value="RHD">RHD</a></li>
                                        <li><a class="dropdown-item dropdown-steering" href="#" data-value="LHD">LHD</a></li>
                                        <li><a class="dropdown-item dropdown-steering" href="#" data-value="Not Set">Not Set</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="dropdown">
                                    <button class="btn btn-select-max-year dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span id="selectedMaxYear">Max Year</span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="maxyearDropdown">
                                        <div class="max-year-search-field mx-2 px-0 py-0 pe-2 d-flex justify-content-between align-items-center rounded-1">
                                            <input type="text" class="form-control border-0 shadow-none bg-transparent" id="maxyearForm" placeholder="Search Max Year">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.25 1.5C11.976 1.5 15 4.524 15 8.25C15 11.976 11.976 15 8.25 15C4.524 15 1.5 11.976 1.5 8.25C1.5 4.524 4.524 1.5 8.25 1.5ZM8.25 13.5C11.1503 13.5 13.5 11.1503 13.5 8.25C13.5 5.349 11.1503 3 8.25 3C5.349 3 3 5.349 3 8.25C3 11.1503 5.349 13.5 8.25 13.5ZM14.6138 13.5533L16.7355 15.6743L15.6743 16.7355L13.5533 14.6138L14.6138 13.5533Z" fill="#2F2B43" fill-opacity="0.7"></path>
                                                </svg>
                                        </div>
                                        <li><a class="dropdown-item dropdown-maxyear" href="#" data-value="2024">2024</a></li>
                                        <li><a class="dropdown-item dropdown-maxyear" href="#" data-value="2023">2023</a></li>
                                        <li><a class="dropdown-item dropdown-maxyear" href="#" data-value="2022">2022</a></li>
                                        <li><a class="dropdown-item dropdown-maxyear" href="#" data-value="2021">2021</a></li>
                                        <li><a class="dropdown-item dropdown-maxyear" href="#" data-value="2020">2020</a></li>
                                        <li><a class="dropdown-item dropdown-maxyear" href="#" data-value="2019">2019</a></li>
                                        <li><a class="dropdown-item dropdown-maxyear" href="#" data-value="2018">2018</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                             
                        </div>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control stock-inhand" placeholder="Stock ID">
                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-slider-form-search">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.3983 11.4628L15.6105 14.6742L14.5492 15.7355L11.3378 12.5233C10.1428 13.4812 8.6565 14.0022 7.125 14C3.399 14 0.375 10.976 0.375 7.25C0.375 3.524 3.399 0.5 7.125 0.5C10.851 0.5 13.875 3.524 13.875 7.25C13.8772 8.7815 13.3562 10.2678 12.3983 11.4628ZM10.8937 10.9062C11.8456 9.92741 12.3772 8.61532 12.375 7.25C12.375 4.349 10.0253 2 7.125 2C4.224 2 1.875 4.349 1.875 7.25C1.875 10.1503 4.224 12.5 7.125 12.5C8.49032 12.5022 9.80241 11.9706 10.7812 11.0187L10.8937 10.9062Z" fill="white"/>
                                    </svg>
                                     Search</button>
                        </div>
                        <div class="advance-search mb-0">
                           <p class="mb-2">Advanced Search <i class="fas fa-arrow-right ms-2"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
       </div>
    </div>
</div>