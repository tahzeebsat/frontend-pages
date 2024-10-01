<section class="desktop-view" aria-labelledby="desktop-header">
    <header>
        <div class="headerSearch pb-3">
            <div class="container">
                <div class="row align-items-center my-3 pt-2">
                    <div class="col-auto brand-logo-area">
                        <a class="brand-logo" href="#" aria-label="Homepage">
                            <img src="{{asset('assets/images/header-images/header-logo.webp')}}" alt="Company Logo" class="img-fluid" loading="lazy" width="140" height="46">
                        </a>
                    </div>

                    <div class="col search-form">
                        <form class="d-flex position-relative" role="search" aria-label="Search form">
                            <div class="input-group">
                                <input type="text" id="searchInput" class="searchBar form-control shadow-none px-4" placeholder="Search Your Dream Car" aria-label="Search Your Dream Car" autocomplete="off">
                                <button class="input-group-text" type="submit" aria-label="Submit search">
                                    <img src="{{asset('assets/images/header-images/search-icon.webp')}}" alt="Search icon" class="img-fluid" loading="lazy" width="20" height="20">
                                </button>
                            </div>
                            <div id="suggestions" class="dropdown-menu mt-5 border-0 rounded-0 bg-white"></div>
                        </form>
                    </div>
                    <div class="col-auto right-list">
                        <ul class="list-unstyled d-flex mb-0">
                            <li class="dropdown mx-3">
                                <a class="dropdown-toggle text-decoration-none" href="#" role="button" id="shipToDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    Ship to
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="shipToDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                           
                            <li class="dropdown mx-3">
                                
                        <select id="single" class="js-states form-control border-0" aria-label="USA" role="combobox">
                            <option value="" disabled selected>USD</option>
                            <option value="GBP">GBP</option>
                            <option value="AUD">AUD</option>
                            <option value="CAD">CAD</option>
                            <option value="EUR">EUR</option>
                            <option value="JPY">JPY</option>
                            <option value="NZD">NZD</option>
                            <option value="ZAR">ZAR</option>
                            <option value="USD">USD</option>
                        </select>
                    
                            </li>
                            <li class="dropdown mx-3">
                                <a class="dropdown-toggle text-decoration-none" href="#" role="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    English
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                                    <li><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">Arabic</a></li>
                                    <li><a class="dropdown-item" href="#">Spanish</a></li>
                                    <li><a class="dropdown-item" href="#">French</a></li>
                                    <li><a class="dropdown-item" href="#">Geiorgian</a></li>
                                    <li><a class="dropdown-item" href="#">Mongolion</a></li>
                                    <li><a class="dropdown-item" href="#">Portugese</a></li>
                                    <li><a class="dropdown-item" href="#">Russian</a></li>
                                    <li><a class="dropdown-item" href="#">Swahili</a></li>
                                </ul>
                            </li>
                            <li class="signin mx-3">
                                <a href="#" class="text-decoration-none" aria-label="Sign in">Sign In</a>
                                <img src="{{asset('assets/images/header-images/signin-icon.webp')}}" alt="sigin-icon" class="img-fluid" width="20" height="20" loading="lazy">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        
       
        {{--============================= mega menu navigation =============================--}}

        <div class="mega-menu-section m-0 border-top">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                           
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Used Cars
                                        </a>
                                        <div class="dropdown-menu mega-menu p-2 py-3 my-3 border-0" aria-labelledby="navbarDropdown">
                                            <div class="row">
                                                <div class="col-md-2 mx-2">
                                                    <h6>Explore Stock</h6>
                                                    <a class="dropdown-item" href="#">Find Used Cars for Sale</a>
                                                    <a class="dropdown-item" href="#">Luxury Vehicles</a>
                                                    <a class="dropdown-item" href="#">Low Mileage Cars</a>
                                                    <a class="dropdown-item" href="#">Fresh Stock</a>
                                                    <h6 class="mt-3">Explore By Price</h6>
                                                    <a class="dropdown-item" href="#">Less than $1000</a>
                                                    <a class="dropdown-item" href="#">Between $1000 - $2000</a>
                                                    <a class="dropdown-item" href="#">Between $2000 - $3000</a>
                                                    <a class="dropdown-item" href="#">Between $3000 - $4000</a>
                                                    <a class="dropdown-item" href="#">Between $4000 - $5000</a>
                                                    <a class="dropdown-item" href="#">Above $5000</a>
                                                </div>
                                                <div class="col-md-2 mx-4 used-cars-dp">
                                                    <h6>Explore By Make</h6>
                                                    <a class="dropdown-item" href="#">Toyota</a>
                                                    <a class="dropdown-item" href="#">Nissan</a>
                                                    <a class="dropdown-item" href="#">VolksWagen</a>
                                                    <a class="dropdown-item" href="#">Mitsubishi</a>
                                                    <a class="dropdown-item" href="#">Honda</a>
                                                    <a class="dropdown-item" href="#">Subaru</a>
                                                    <a class="dropdown-item" href="#">Mazda</a>
                                                    <a class="dropdown-item" href="#">Suzuki</a>
                                                    <a class="dropdown-item" href="#">Isuzu</a>
                                                    <a class="dropdown-item" href="#">Daihatsu</a>
                                                    <a class="dropdown-item" href="#">Lexus</a>
                                                </div>
                                                <div class="col-md-2 mx-3 used-cars-dp">
                                                    <h6>Explore By Type</h6>
                                                    <a class="dropdown-item" href="#">SUV</a>
                                                    <a class="dropdown-item" href="#">Sedan</a>
                                                    <a class="dropdown-item" href="#">Hatchback</a>
                                                    <a class="dropdown-item" href="#">Wagon</a>
                                                    <a class="dropdown-item" href="#">Coupe</a>
                                                    <a class="dropdown-item" href="#">Pickup</a>
                                                    <a class="dropdown-item" href="#">Convirtable</a>
                                                    <a class="dropdown-item" href="#">Bus</a>
                                                    <a class="dropdown-item" href="#">Van</a>
                                                    <a class="dropdown-item" href="#">Mini Van</a>
                                                    <a class="dropdown-item" href="#">Tractor</a>
                                                </div>
                                                <div class="col-md-2 mx-3">
                                                    <h6>Explor By Year</h6>
                                                    <a class="dropdown-item" href="#">2004 and 2005</a>
                                                    <a class="dropdown-item" href="#">2005 and 2010</a>
                                                    <a class="dropdown-item" href="#">2010 and 2015</a>
                                                    <a class="dropdown-item" href="#">2015 and 2020</a>
                                                    <a class="dropdown-item" href="#">2020 and 2024</a>
                                                    <h6 class="mt-3">Explore By Discount</h6>
                                                    <a class="dropdown-item" href="#">60% Off or More</a>
                                                    <a class="dropdown-item" href="#">50% Off or More</a>
                                                    <a class="dropdown-item" href="#">40% Off or More</a>
                                                    <a class="dropdown-item" href="#">30% Off or More</a>
                                                    <a class="dropdown-item" href="#">1% - 30% Off</a>
                                                </div>
                                                <div class="col-md-2 mx-3">
                                                    <h6>Inventory Location</h6>
                                                    <a class="dropdown-item" href="#">Japan</a>
                                                    <a class="dropdown-item" href="#">Tanzania</a>
                                                    <a class="dropdown-item" href="#">Dominican Republic</a>
                                                    <a class="dropdown-item" href="#">Kenya</a>
                                                    <a class="dropdown-item" href="#">Chile</a>
                                                    <h6 class="mt-3">Other Categories</h6>
                                                    <a class="dropdown-item" href="#">Right Hand Drive</a>
                                                    <a class="dropdown-item" href="#">Diesel</a>
                                                    <a class="dropdown-item" href="#">Gasoline/Petrol</a>
                                                    <a class="dropdown-item" href="#">Electric</a>
                                                    <a class="dropdown-item" href="#">Hybrid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    {{-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            New Cars
                                        </a>
                                        <div class="dropdown-menu mega-menu p-2 py-3 my-3 border-0" aria-labelledby="navbarDropdown">
                                            <div class="row">
                                                <div class="col-md-2 mx-2">
                                                    <h6>Explore Stock</h6>
                                                    <a class="dropdown-item" href="#">Find Used Cars for Sale</a>
                                                    <a class="dropdown-item" href="#">Top Selling Cars</a>
                                                    <a class="dropdown-item" href="#">Recommended For You</a>
                                                    <a class="dropdown-item" href="#">Price Generator</a>
                                                    <h6 class="mt-3">Explore By Price</h6>
                                                    <a class="dropdown-item" href="#">Less than $1000</a>
                                                    <a class="dropdown-item" href="#">Between $1000 - $2000</a>
                                                    <a class="dropdown-item" href="#">Between $2000 - $3000</a>
                                                    <a class="dropdown-item" href="#">Between $3000 - $4000</a>
                                                    <a class="dropdown-item" href="#">Between $4000 - $5000</a>
                                                    <a class="dropdown-item" href="#">Above $5000</a>
                                                </div>
                                                <div class="col-md-2 mx-4 used-cars-dp">
                                                    <h6>Explore By Make</h6>
                                                    <a class="dropdown-item" href="#">Toyota</a>
                                                    <a class="dropdown-item" href="#">Honda</a>
                                                    <a class="dropdown-item" href="#">Nissan</a>
                                                    <a class="dropdown-item" href="#">Daihatsu</a>
                                                    <a class="dropdown-item" href="#">Madza</a>
                                                    <a class="dropdown-item" href="#">Mitsubishi</a>
                                                    <a class="dropdown-item" href="#">Suzuki</a>
                                                    <a class="dropdown-item" href="#">Subaru</a>
                                                    <a class="dropdown-item" href="#">Luxus</a>
                                                    <a class="dropdown-item" href="#">BMW</a>
                                                    <a class="dropdown-item" href="#">Mercedes</a>
                                                </div>
                                                <div class="col-md-2 mx-3 used-cars-dp">
                                                    <h6>Explore By Type</h6>
                                                    <a class="dropdown-item" href="#">SUV</a>
                                                    <a class="dropdown-item" href="#">Sedan</a>
                                                    <a class="dropdown-item" href="#">Hatchback</a>
                                                    <a class="dropdown-item" href="#">Wagon</a>
                                                    <a class="dropdown-item" href="#">Coupe</a>
                                                    <a class="dropdown-item" href="#">Pickup</a>
                                                    <a class="dropdown-item" href="#">Convirtable</a>
                                                    <a class="dropdown-item" href="#">Bus</a>
                                                    <a class="dropdown-item" href="#">Van</a>
                                                    <a class="dropdown-item" href="#">Mini Van</a>
                                                    <a class="dropdown-item" href="#">Tractor</a>
                                                </div>
                                                <div class="col-md-2 mx-3">
                                                    <h6>Explor By Year</h6>
                                                    <a class="dropdown-item" href="#">2004 and older</a>
                                                    <a class="dropdown-item" href="#">2005 and newer</a>
                                                    <a class="dropdown-item" href="#">2010 and newer</a>
                                                    <a class="dropdown-item" href="#">2015 and newer</a>
                                                    <a class="dropdown-item" href="#">2020 and newer</a>
                                                    <h6 class="mt-3">Explore By Discount</h6>
                                                    <a class="dropdown-item" href="#">60% Off or More</a>
                                                    <a class="dropdown-item" href="#">50% Off or More</a>
                                                    <a class="dropdown-item" href="#">40% Off or More</a>
                                                    <a class="dropdown-item" href="#">30% Off or More</a>
                                                    <a class="dropdown-item" href="#">1% - 30% Off</a>
                                                </div>
                                                <div class="col-md-2 mx-3">
                                                    <h6>Explor By Year</h6>
                                                    <a class="dropdown-item" href="#">2004 and older</a>
                                                    <a class="dropdown-item" href="#">2005 and newer</a>
                                                    <a class="dropdown-item" href="#">2010 and newer</a>
                                                    <a class="dropdown-item" href="#">2015 and newer</a>
                                                    <a class="dropdown-item" href="#">2020 and newer</a>
                                                    <h6 class="mt-3">Explore By Discount</h6>
                                                    <a class="dropdown-item" href="#">60% Off or More</a>
                                                    <a class="dropdown-item" href="#">50% Off or More</a>
                                                    <a class="dropdown-item" href="#">40% Off or More</a>
                                                    <a class="dropdown-item" href="#">30% Off or More</a>
                                                    <a class="dropdown-item" href="#">1% - 30% Off</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li> --}}
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Auto Parts
                                        </a>
                                        <div class="dropdown-menu mega-menu p-2 py-3 my-3 border-0" aria-labelledby="navbarDropdown">
                                            <div class="row">
                                                <div class="col-md-2 mx-2">
                                                    
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/PK.webp')}}" alt="Pakistan Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Pakistan</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/AZ.webp')}}" alt="Azerbaijan Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Azerbaijan</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/CA.webp')}}" alt="Canada Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Canada</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/FJ.webp')}}" alt="Fiji Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Fiji</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/IE.webp')}}" alt="Ireland Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Ireland</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Malawi</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/NZ.webp')}}" alt="New Zealand Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">New Zealand</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/RU.webp')}}" alt="Russia Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Russia</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/ZA.webp')}}" alt="South Africa Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">South Africa</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/UG.webp')}}" alt="Uganda Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Uganda</span>
                                                    </a>
                                                </div>
                                                <div class="col-md-2 mx-3">
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/AG.webp')}}" alt="Antigua Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Antigua</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/BS.webp')}}" alt="Bahamas Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Bahamas</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Chile Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Chile</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/GE.webp')}}" alt="Georgia Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Georgia</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/JM.webp')}}" alt="Jamaica Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Jamaica</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/FM.webp')}}" alt="Micronesia Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Micronesia</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/NG.webp')}}" alt="Nigeria Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Nigeria</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/RW.webp')}}" alt="Rwanda Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Rwanda</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/SD.webp')}}" alt="South Sudan Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">South Sudan</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/UA.webp')}}" alt="Ukraine" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Ukraine</span>
                                                    </a>
                                                </div>
                                                <div class="col-md-2 mx-3">
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/AI.webp')}}" alt="Anguilla Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Anguilla</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/BD.webp')}}" alt="Bangladesh Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Bangladesh</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/CR.webp')}}" alt="Costa Rica Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Costa Rica</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/GH.webp')}}" alt="Ghana Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Ghana</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/KE.webp')}}" alt="Kenya Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Kenya</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/MN.webp')}}" alt="Mongolia Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Mongolia</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/PD.webp')}}" alt="Papua New Guinea Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Papua New Guinea</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/WS.webp')}}" alt="Samoa Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Samoa</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/LK.webp')}}" alt="Sri Lanka Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Sri Lanka</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/US.webp')}}" alt="USA Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">USA</span>
                                                    </a>
                                                </div>
                                                <div class="col-md-2 mx-3">
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/Am.webp')}}" alt="Armenia Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Armenia</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/BW.webp')}}" alt="Botswana Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Botswana</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/CY.webp')}}" alt="Cyprus Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Cyprus</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/GT.webp')}}" alt="Guatemala Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Guatemala</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/KG.webp')}}" alt="Kyrgyzstan Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Kyrgyzstan</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/MZ.webp')}}" alt="Mozambique Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Mozambique</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/PY.webp')}}" alt="Paraguay Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Paraguay</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/SB.webp')}}" alt="Solomon Islands Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Solomon Islands</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/TZ.webp')}}" alt="Tanzania Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Tanzania</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/ZM.webp')}}" alt="Zambia Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Zambia</span>
                                                    </a>
                                                </div>
                                                <div class="col-md-2 mx-3">
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/AU.webp')}}" alt="Australia Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Australia</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/BI.webp')}}" alt="Burundi Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Burundi</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/DO.webp')}}" alt="Dominican Republic Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Dominican Republic</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/GY.webp')}}" alt="Guyana Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Guyana</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/LS.webp')}}" alt="Lesotho Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Lesotho</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/NA.webp')}}" alt="Namibia Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Namibia</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/CD.webp')}}" alt="DR Congo Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">DR Congo</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/SO.webp')}}" alt="Somalia Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Somalia</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/TO.webp')}}" alt="Tonga Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Tonga</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{asset('assets/images/country-flags/ZW.webp')}}" alt="Zimbabwe Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                                        <span class="mx-2">Zimbabwe</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Local Pages
                                        </a>
                                        <div class="dropdown-menu mega-menu p-2 py-3 my-3 border-0" aria-labelledby="navbarDropdown">
                                            <div class="row">
                                                <div class="col-md-2 mx-2">
                                                    <h6>Explore Stock</h6>
                                                    <a class="dropdown-item" href="#">Find Used Cars for Sale</a>
                                                    <a class="dropdown-item" href="#">Luxury Vehicles</a>
                                                    <a class="dropdown-item" href="#">Low Mileage Cars</a>
                                                    <a class="dropdown-item" href="#">Fresh Stock</a>
                                                    <h6 class="mt-3">Explore By Price</h6>
                                                    <a class="dropdown-item" href="#">Less than $1000</a>
                                                    <a class="dropdown-item" href="#">Between $1000 - $2000</a>
                                                    <a class="dropdown-item" href="#">Between $2000 - $3000</a>
                                                    <a class="dropdown-item" href="#">Between $3000 - $4000</a>
                                                    <a class="dropdown-item" href="#">Between $4000 - $5000</a>
                                                    <a class="dropdown-item" href="#">Above $5000</a>
                                                </div>
                                                <div class="col-md-2 mx-4 used-cars-dp">
                                                    <h6>Explore By Make</h6>
                                                    <a class="dropdown-item" href="#">Toyota</a>
                                                    <a class="dropdown-item" href="#">Nissan</a>
                                                    <a class="dropdown-item" href="#">VolksWagen</a>
                                                    <a class="dropdown-item" href="#">Mitsubishi</a>
                                                    <a class="dropdown-item" href="#">Honda</a>
                                                    <a class="dropdown-item" href="#">Subaru</a>
                                                    <a class="dropdown-item" href="#">Mazda</a>
                                                    <a class="dropdown-item" href="#">Suzuki</a>
                                                    <a class="dropdown-item" href="#">Isuzu</a>
                                                    <a class="dropdown-item" href="#">Daihatsu</a>
                                                    <a class="dropdown-item" href="#">Lexus</a>
                                                </div>
                                                <div class="col-md-2 mx-3 used-cars-dp">
                                                    <h6>Explore By Type</h6>
                                                    <a class="dropdown-item" href="#">SUV</a>
                                                    <a class="dropdown-item" href="#">Sedan</a>
                                                    <a class="dropdown-item" href="#">Hatchback</a>
                                                    <a class="dropdown-item" href="#">Wagon</a>
                                                    <a class="dropdown-item" href="#">Coupe</a>
                                                    <a class="dropdown-item" href="#">Pickup</a>
                                                    <a class="dropdown-item" href="#">Convirtable</a>
                                                    <a class="dropdown-item" href="#">Bus</a>
                                                    <a class="dropdown-item" href="#">Van</a>
                                                    <a class="dropdown-item" href="#">Mini Van</a>
                                                    <a class="dropdown-item" href="#">Tractor</a>
                                                </div>
                                                <div class="col-md-2 mx-3">
                                                    <h6>Explor By Year</h6>
                                                    <a class="dropdown-item" href="#">2004 and older</a>
                                                    <a class="dropdown-item" href="#">2005 and newer</a>
                                                    <a class="dropdown-item" href="#">2010 and newer</a>
                                                    <a class="dropdown-item" href="#">2015 and newer</a>
                                                    <a class="dropdown-item" href="#">2020 and newer</a>
                                                    <h6 class="mt-3">Explore By Discount</h6>
                                                    <a class="dropdown-item" href="#">60% Off or More</a>
                                                    <a class="dropdown-item" href="#">50% Off or More</a>
                                                    <a class="dropdown-item" href="#">40% Off or More</a>
                                                    <a class="dropdown-item" href="#">30% Off or More</a>
                                                    <a class="dropdown-item" href="#">1% - 30% Off</a>
                                                </div>
                                                <div class="col-md-2 mx-3">
                                                    <h6>Explor By Year</h6>
                                                    <a class="dropdown-item" href="#">2004 and older</a>
                                                    <a class="dropdown-item" href="#">2005 and newer</a>
                                                    <a class="dropdown-item" href="#">2010 and newer</a>
                                                    <a class="dropdown-item" href="#">2015 and newer</a>
                                                    <a class="dropdown-item" href="#">2020 and newer</a>
                                                    <h6 class="mt-3">Explore By Discount</h6>
                                                    <a class="dropdown-item" href="#">60% Off or More</a>
                                                    <a class="dropdown-item" href="#">50% Off or More</a>
                                                    <a class="dropdown-item" href="#">40% Off or More</a>
                                                    <a class="dropdown-item" href="#">30% Off or More</a>
                                                    <a class="dropdown-item" href="#">1% - 30% Off</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Car Services
                                        </a>
                                        <div class="dropdown-menu mega-menu p-2 py-3 my-3 border-0" aria-labelledby="navbarDropdown">
                                            <div class="row">
                                                <div class="col-md-2 mx-2">
                                                    <h6>Explore Stock</h6>
                                                    <a class="dropdown-item" href="#">Find Used Cars for Sale</a>
                                                    <a class="dropdown-item" href="#">Top Selling Cars</a>
                                                    <a class="dropdown-item" href="#">Recommended For You</a>
                                                    <a class="dropdown-item" href="#">Price Generator</a>
                                                    <h6 class="mt-3">Explore By Price</h6>
                                                    <a class="dropdown-item" href="#">Less than $1000</a>
                                                    <a class="dropdown-item" href="#">Between $1000 - $2000</a>
                                                    <a class="dropdown-item" href="#">Between $2000 - $3000</a>
                                                    <a class="dropdown-item" href="#">Between $3000 - $4000</a>
                                                    <a class="dropdown-item" href="#">Between $4000 - $5000</a>
                                                    <a class="dropdown-item" href="#">Above $5000</a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Reviews
                                        </a>
                                        <div class="dropdown-menu mega-menu p-2 py-3 my-3 border-0" aria-labelledby="navbarDropdown">
                                            <div class="row">
                                                <div class="col-md-2 mx-2">
                                                    <h6>Explore Stock</h6>
                                                    <a class="dropdown-item" href="#">Find Used Cars for Sale</a>
                                                    <a class="dropdown-item" href="#">Top Selling Cars</a>
                                                    <a class="dropdown-item" href="#">Recommended For You</a>
                                                    <a class="dropdown-item" href="#">Price Generator</a>
                                                    <h6 class="mt-3">Explore By Price</h6>
                                                    <a class="dropdown-item" href="#">Less than $1000</a>
                                                    <a class="dropdown-item" href="#">Between $1000 - $2000</a>
                                                    <a class="dropdown-item" href="#">Between $2000 - $3000</a>
                                                    <a class="dropdown-item" href="#">Between $3000 - $4000</a>
                                                    <a class="dropdown-item" href="#">Between $4000 - $5000</a>
                                                    <a class="dropdown-item" href="#">Above $5000</a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Company Overview
                                        </a>
                                        <div class="dropdown-menu mega-menu p-2 py-3 my-3 border-0" aria-labelledby="navbarDropdown">
                                            <div class="row">
                                                <div class="col-md-2 mx-2">
                                                    <h6>Explore Stock</h6>
                                                    <a class="dropdown-item" href="#">Find Used Cars for Sale</a>
                                                    <a class="dropdown-item" href="#">Top Selling Cars</a>
                                                    <a class="dropdown-item" href="#">Recommended For You</a>
                                                    <a class="dropdown-item" href="#">Price Generator</a>
                                                    <h6 class="mt-3">Explore By Price</h6>
                                                    <a class="dropdown-item" href="#">Less than $1000</a>
                                                    <a class="dropdown-item" href="#">Between $1000 - $2000</a>
                                                    <a class="dropdown-item" href="#">Between $2000 - $3000</a>
                                                    <a class="dropdown-item" href="#">Between $3000 - $4000</a>
                                                    <a class="dropdown-item" href="#">Between $4000 - $5000</a>
                                                    <a class="dropdown-item" href="#">Above $5000</a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Help
                                        </a>
                                        <div class="dropdown-menu mega-menu p-2 py-3 my-3 border-0" aria-labelledby="navbarDropdown">
                                            <div class="row">
                                                <div class="col-md-2 mx-2">
                                                    <h6>Explore Stock</h6>
                                                    <a class="dropdown-item" href="#">Find Used Cars for Sale</a>
                                                    <a class="dropdown-item" href="#">Top Selling Cars</a>
                                                    <a class="dropdown-item" href="#">Recommended For You</a>
                                                    <a class="dropdown-item" href="#">Price Generator</a>
                                                    <h6 class="mt-3">Explore By Price</h6>
                                                    <a class="dropdown-item" href="#">Less than $1000</a>
                                                    <a class="dropdown-item" href="#">Between $1000 - $2000</a>
                                                    <a class="dropdown-item" href="#">Between $2000 - $3000</a>
                                                    <a class="dropdown-item" href="#">Between $3000 - $4000</a>
                                                    <a class="dropdown-item" href="#">Between $4000 - $5000</a>
                                                    <a class="dropdown-item" href="#">Above $5000</a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

</section>



{{-- ====================== Table view ==================--}}
<section class="tablet-view" aria-labelledby="tablet-header">
	<header>
		<div class="headerSearch pb-3">
			<div class="container">
				<div class="row align-items-center my-3 pt-2">
					<button class="btn btn-offcanvas" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"> 
                        <img src="{{asset('assets/images/header-images/menu-bars.webp')}}" class="img-fluid" loading="lazy" width="30" height="30">
                     </button>
					<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
						<div class="offcanvas-header">
							{{-- <h5 class="offcanvas-title" id="offcanvasExampleLabel">Close</h5> --}}
							<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>
						<div class="offcanvas-body">
							<div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Item 1
                                            
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            Subitem 1 content goes here.
                                        </div>
                                    </div>
                                </div>
                                
                               
                            </div>
						</div>
					</div>
					<div class="col-auto brand-logo-area p-0">
						<a class="brand-logo" href="#" aria-label="Homepage"> 
                            <img src="{{asset('assets/images/header-images/header-logo.webp')}}" alt="Company Logo" class="img-fluid" loading="lazy" width="80" height="30"> </a>
					</div>
					<div class="col search-form">
						<form class="d-flex position-relative" role="search" aria-label="Search form">
							<div class="input-group">
								<input type="text" id="searchInput" class="searchBar form-control shadow-none px-4" placeholder="Search Your Dream Car" aria-label="Search Your Dream Car" autocomplete="off">
								<button class="input-group-text" type="submit" aria-label="Submit search"> <img src="/assets/images/header-images/search-icon.webp" alt="Search icon" class="img-fluid" loading="lazy" width="20" height="20"> </button>
							</div>
							<div id="suggestions" class="dropdown-menu mt-5 border-0 rounded-0 bg-white"></div>
						</form>
					</div>
					<div class="col-auto right-list">
						<ul class="list-unstyled d-flex mb-0">
							<li class="signin mx-3"> <a href="#" class="text-decoration-none" aria-label="Sign in">Sign In</a> <img src="/assets/images/header-images/signin-icon.webp" alt="sigin-icon" class="img-fluid" width="30" height="30" loading="lazy"> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
</section>


{{-- Mobiel View --}}

<section class="mobile-view" aria-labelledby="mobile-header">
    <header>
        <div class="headerSearch pb-3">
            <div class="container">
                <div class="row align-items-center mb-3 mt-2">
                    <div class="col-auto d-flex align-items-center p-0">
                        <button class="btn btn-offcanvas" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavigation" aria-controls="offcanvasNavigation">
                            <img src="{{asset('assets/images/header-images/menu-bars.webp')}}" class="img-fluid" loading="lazy" width="24" height="24" alt="Menu">
                        </button>
            
                        <!-- Offcanvas Component -->
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavigation" aria-labelledby="offcanvasNavigationLabel">
                            <div class="offcanvas-header">
                                <h5 id="offcanvasNavigationLabel">Menu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Item 1
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Subitem 1 content goes here.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add more accordion items here if needed -->
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-auto brand-logo-area p-0 d-flex align-items-center justify-content-between flex-grow-1">
                        <a class="brand-logo" href="#" aria-label="Homepage">
                            <img src="{{asset('assets/images/header-images/header-logo.webp')}}" alt="Company Logo" class="img-fluid" loading="lazy" width="70" height="23.3">
                        </a>
                        <ul class="list-unstyled d-flex mb-0">
                            <li class="signin mx-2">
                                <a href="#" class="text-decoration-none" aria-label="Sign in">
                                    <img src="{{asset('assets/images/header-images/mobile-heart.webp')}}" alt="Sign In Icon" class="img-fluid" width="24" height="24" loading="lazy">
                                </a>
                            </li>
                            <li class="signin mx-2">
                                <a href="#" class="text-decoration-none" aria-label="Sign in">
                                    <img src="{{asset('assets/images/header-images/mobile-bell-icon.webp')}}" alt="Sign In Icon" class="img-fluid" width="24" height="24" loading="lazy">
                                </a>
                            </li>
                            <li class="signin mx-2">
                                <a href="#" class="text-decoration-none" aria-label="Sign in">
                                    <img src="{{asset('assets/images/header-images/mobile-profile.webp')}}" alt="Sign In Icon" class="img-fluid" width="24" height="24" loading="lazy">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col search-form">
                        <form class="d-flex position-relative" role="search" aria-label="Search form">
                            <div class="input-group">
                                <input type="text" id="searchInput" class="searchBar form-control shadow-none px-4 border-0" placeholder="Search Your Dream Car" aria-label="Search Your Dream Car" autocomplete="off">
                                <button class="input-group-text border-0" type="submit" aria-label="Submit search">
                                    <img src="{{asset('assets/images/header-images/mobile-search-icon.webp')}}" alt="Search icon" class="img-fluid" loading="lazy" width="20" height="20">
                                </button>
                            </div>
                            <div id="suggestions" class="dropdown-menu mt-5 border-0 rounded-0 bg-white"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
</section>