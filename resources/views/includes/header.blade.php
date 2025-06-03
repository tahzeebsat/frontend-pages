<section class="desktop-view" aria-labelledby="desktop-header">
    <header>
        <div class="headerSearch pb-1">
            <div class="container">
                <div class="row align-items-center my-3 pt-1">
                    <div class="col-auto brand-logo-area">
                        <a class="brand-logo" href="#" aria-label="Homepage">
                            <img src="{{asset('assets/images/header-images/header-logo.webp')}}" alt="Company Logo" class="img-fluid" loading="lazy" width="140" height="46">
                        </a>
                    </div>

                    <div class="col search-form mx-5">
                        {{-- <form class="d-flex position-relative" role="search" aria-label="Search form">
                            <div class="input-group">
                                <input type="text" id="searchInput" class="searchBar form-control shadow-none px-4" placeholder="Search Your Dream Car" aria-label="Search Your Dream Car" autocomplete="off">
                                <button class="input-group-text" type="submit" aria-label="Submit search">
                                    <img src="{{asset('assets/images/header-images/search-icon.webp')}}" alt="Search icon" class="img-fluid" loading="lazy" width="20" height="20">
                                </button>
                            </div>
                            <div id="suggestions" class="dropdown-menu mt-5 border-0 rounded-0 bg-white"></div>
                        </form> --}}
                        <div class="form-search-main">
                                <div class="select-search">
                                    <div class="dropdown satSelectBlock" id="selection_type">
                                        <button class="btn btn-secondary dropdown-toggle satSelectBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="button-text">   Used Cars</span>
                                        </button>
                                        <ul class="dropdown-menu satSelectList" style="">
                                            <li class="dropdown-item" data-text="Used Cars" data-value="Used Cars">Used Cars</li>
                                            <li class="dropdown-item" data-text="New Cars" data-value="New Cars">New Cars</li>
                                        </ul>
                                    </div>
                                </div>
                                    <input type="text" id="new-search-input" autocomplete="off" class="car_search_input" placeholder="Search Your Dream Car">
                                    <button type="submit" class="btn_search_car search_car_button" id="btn_search_car">
                                    <img src="https://development.satjapan.info/assets/images/index/icon/searchicon-svg.svg" height="20" width="20" loading="eager">
                                    </button>
                                <div class="ajax-search-suggestions" style="display: block;">
                            </div>
                        </div>
                    </div>
                    <div class="col-auto right-list">
                        <ul class="list-unstyled d-flex mb-0 align-items-center">
                            <li class="ship-to-dropdown dropdown mx-3 d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#ship_to_country_selection">
                                <a class="text-decoration-none pt-1" href="#">Ship to</a>
                                <div class="dropdown">
                                    <button class="btn btn-outline-none dropdown-toggle selected-flag" type="button" id="dropdownMenuButtonFlag" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{-- <button class="btn btn-outline-none dropdown-toggle selected-flag" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"> --}}
                                        <!-- Placeholder for flag -->
                                        <span id="selectedFlag">
                                            <img src="https://flagcdn.com/pk.svg" alt="🇵🇰" style="width:24px; height:16px;" width="24" height="16" loading="lazy">
                                        </span>
                                    </button>
                                    <ul class="ship-to dropdown-menu d-none" aria-labelledby="dropdownMenuButtonFlag">
                                        <li class="dropdown-search mx-2 d-flex align-items-center">
                                            <!-- Search input field with icon -->
                                            <input type="text" class="search-country-ship form-control px-1 rounded-1 shadow-none" id="dropdownSearch" placeholder="Search Country" aria-label="Search...">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.25 1.5C11.976 1.5 15 4.524 15 8.25C15 11.976 11.976 15 8.25 15C4.524 15 1.5 11.976 1.5 8.25C1.5 4.524 4.524 1.5 8.25 1.5ZM8.25 13.5C11.1503 13.5 13.5 11.1503 13.5 8.25C13.5 5.349 11.1503 3 8.25 3C5.349 3 3 5.349 3 8.25C3 11.1503 5.349 13.5 8.25 13.5ZM14.6138 13.5533L16.7355 15.6743L15.6743 16.7355L13.5533 14.6138L14.6138 13.5533Z" fill="#2F2B43" fill-opacity="0.7"/>
                                            </svg>
                                        </li>
                        
                                        <!-- Dropdown items with flag images and text -->
                                        <li><a class="dropdown-item flag-select" href="#" data-flag="🇺🇸" data-img="https://flagcdn.com/us.svg"><img src="https://flagcdn.com/us.svg" alt="🇺🇸" width="24" height="16" loading="lazy"> United States</a></li>
                                        <li><a class="dropdown-item flag-select" href="#" data-flag="🇨🇦" data-img="https://flagcdn.com/ca.svg"><img src="https://flagcdn.com/ca.svg" alt="🇨🇦" width="24" height="16" loading="lazy"> Canada</a></li>
                                        <li><a class="dropdown-item flag-select" href="#" data-flag="🇬🇧" data-img="https://flagcdn.com/gb.svg"><img src="https://flagcdn.com/gb.svg" alt="🇬🇧" width="24" height="16" loading="lazy"> United Kingdom</a></li>
                                        <li><a class="dropdown-item flag-select" href="#" data-flag="🇩🇪" data-img="https://flagcdn.com/de.svg"><img src="https://flagcdn.com/de.svg" alt="🇩🇪" width="24" height="16" loading="lazy"> Germany</a></li>
                                        <li><a class="dropdown-item flag-select" href="#" data-flag="🇫🇷" data-img="https://flagcdn.com/fr.svg"><img src="https://flagcdn.com/fr.svg" alt="🇫🇷" width="24" height="16" loading="lazy"> France</a></li>
                                        <li><a class="dropdown-item flag-select" href="#" data-flag="🇯🇵" data-img="https://flagcdn.com/jp.svg"><img src="https://flagcdn.com/jp.svg" alt="🇯🇵" width="24" height="16" loading="lazy"> Japan</a></li>
                                        <li><a class="dropdown-item flag-select" href="#" data-flag="🇮🇳" data-img="https://flagcdn.com/in.svg"><img src="https://flagcdn.com/in.svg" alt="🇮🇳" width="24" height="16" loading="lazy"> India</a></li>
                                        <li><a class="dropdown-item flag-select" href="#" data-flag="🇦🇺" data-img="https://flagcdn.com/au.svg"><img src="https://flagcdn.com/au.svg" alt="🇦🇺" width="24" height="16" loading="lazy"> Australia</a></li>
                                        <li><a class="dropdown-item flag-select" href="#" data-flag="🇧🇷" data-img="https://flagcdn.com/br.svg"><img src="https://flagcdn.com/br.svg" alt="🇧🇷" width="24" height="16" loading="lazy"> Brazil</a></li>
                                        <li><a class="dropdown-item flag-select" href="#" data-flag="🇮🇹" data-img="https://flagcdn.com/it.svg"><img src="https://flagcdn.com/it.svg" alt="🇮🇹" width="24" height="16" loading="lazy"> Italy</a></li>
                                    </ul>
                                </div>
                            </li>
                        
                            <!-- Currency Dropdown -->
                            <li class="currency-dropdown dropdown mx-3">
                                <div class="dropdown">
                                    <button class="btn btn-select-currency dropdown-toggle" type="button" id="dropdownMenuButtonCurrency" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{-- <button class="btn btn-select-currency dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"> --}}
                                        <span id="selectedCurrency">USD</span>
                                    </button>
                                    <ul class="dropdown-menu border-0" aria-labelledby="dropdownMenuButtonCurrency" id="currencyDropdown">
                                        <div class="currency-search-field m-2 px-0 py-0 pe-2 d-flex justify-content-between align-items-center rounded-1">
                                            <input type="text" class="form-control border-0 shadow-none bg-transparent" id="currencySearch" placeholder="Search currency" aria-label="Search currency">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.25 1.5C11.976 1.5 15 4.524 15 8.25C15 11.976 11.976 15 8.25 15C4.524 15 1.5 11.976 1.5 8.25C1.5 4.524 4.524 1.5 8.25 1.5ZM8.25 13.5C11.1503 13.5 13.5 11.1503 13.5 8.25C13.5 5.349 11.1503 3 8.25 3C5.349 3 3 5.349 3 8.25C3 11.1503 5.349 13.5 8.25 13.5ZM14.6138 13.5533L16.7355 15.6743L15.6743 16.7355L13.5533 14.6138L14.6138 13.5533Z" fill="#2F2B43" fill-opacity="0.7"/>
                                            </svg>
                                        </div>
                                        <li><a class="dropdown-item dropdown-currency" href="#" data-value="GBP">GBP</a></li>
                                        <li><a class="dropdown-item dropdown-currency" href="#" data-value="AUD">AUD</a></li>
                                        <li><a class="dropdown-item dropdown-currency" href="#" data-value="CAD">CAD</a></li>
                                        <li><a class="dropdown-item dropdown-currency" href="#" data-value="EUR">EUR</a></li>
                                        <li><a class="dropdown-item dropdown-currency" href="#" data-value="NZD">NZD</a></li>
                                        <li><a class="dropdown-item dropdown-currency" href="#" data-value="ZAR">ZAR</a></li>
                                        <li><a class="dropdown-item dropdown-currency" href="#" data-value="USD">USD</a></li>
                                    </ul>
                                </div>
                            </li>
                        
                            <!-- Language Dropdown -->
                            <li class="language dropdown d-flex align-items-center mx-3">
                                <button class="btn btn-outline-none border-0 shadow-none d-flex align-items-center dropdown-toggle p-0" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span id="selectedLanguage">English</span>
                                </button>
                                <ul class="dropdown-menu border-0" aria-labelledby="languageDropdown">
                                    <li><a class="dropdown-item lang" href="#" data-lang="English">English</a></li>
                                    <li><a class="dropdown-item lang" href="#" data-lang="Arabic">Arabic</a></li>
                                    <li><a class="dropdown-item lang" href="#" data-lang="Spanish">Spanish</a></li>
                                    <li><a class="dropdown-item lang" href="#" data-lang="French">French</a></li>
                                    <li><a class="dropdown-item lang" href="#" data-lang="Georgian">Georgian</a></li>
                                    <li><a class="dropdown-item lang" href="#" data-lang="Mongolian">Mongolian</a></li>
                                    <li><a class="dropdown-item lang" href="#" data-lang="Portuguese">Portuguese</a></li>
                                    <li><a class="dropdown-item lang" href="#" data-lang="Russian">Russian</a></li>
                                    <li><a class="dropdown-item lang" href="#" data-lang="Swahili">Swahili</a></li>
                                </ul>
                            </li>
                        
                            <!-- Sign In Icon -->
                            <li class="signin mx-3">
                                <a href="#" class="text-decoration-none" aria-label="Sign in">Sign In</a>
                                <img src="{{asset('assets/images/header-images/signin-icon.webp')}}" alt="Sign-in icon" class="img-fluid" width="20" height="20" loading="lazy">
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
                        <div class="container-fluid p-0">
                           
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Used Cars
                                        </a>
                                        <div class="dropdown-menu mega-menu p-2 py-3 border-0" aria-labelledby="navbarDropdown">
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
                                    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            New Cars
                                        </a>
                                        </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Local Pages
                                        </a>
                                        <div class="dropdown-menu mega-menu p-2 py-3 border-0" aria-labelledby="navbarDropdown">
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
                                            Car Services
                                        </a>
                                        <div class="dropdown-menu mega-menu p-2 py-3 border-0" aria-labelledby="navbarDropdown">
                                            <div class="row">
                                                <div class="col-md-2 mx-2">
                                                    <a class="dropdown-item" href="#" aria-label="Shipping Schedule">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.99935 2.66663H9.63002C9.74309 2.66663 9.8543 2.69538 9.95319 2.7502C10.0521 2.80501 10.1354 2.88408 10.1953 2.97996L12.4993 6.66663H15.438C15.4959 6.66658 15.5528 6.68162 15.6031 6.71024C15.6534 6.73887 15.6954 6.7801 15.7249 6.82989C15.7545 6.87967 15.7705 6.93629 15.7715 6.99416C15.7725 7.05204 15.7585 7.10918 15.7307 7.15996L13.0907 12H12.666C12.3206 12.0002 11.9767 11.9559 11.6427 11.868L13.7527 7.99996H2.26602L2.96468 11.8826C2.64886 11.9608 2.3247 12.0002 1.99935 12H1.63602L0.809349 7.45263C0.791887 7.35665 0.795701 7.25801 0.820521 7.16367C0.845341 7.06933 0.890562 6.98159 0.952994 6.90663C1.01543 6.83167 1.09355 6.77133 1.18184 6.72986C1.27014 6.68839 1.36646 6.66681 1.46402 6.66663H1.99935V3.33329C1.99935 3.15648 2.06959 2.98691 2.19461 2.86189C2.31964 2.73686 2.4892 2.66663 2.66602 2.66663H3.33268V0.666626H5.99935V2.66663ZM3.33268 6.66663H10.9273L9.26068 3.99996H3.33268V6.66663ZM1.99935 13.3333C2.98353 13.3347 3.9334 12.9718 4.66602 12.3146C5.39863 12.9718 6.34851 13.3347 7.33268 13.3333C8.31686 13.3347 9.26673 12.9718 9.99935 12.3146C10.732 12.9718 11.6818 13.3347 12.666 13.3333H13.9993V14.6666H12.666C11.7298 14.6682 10.8098 14.4221 9.99935 13.9533C9.18891 14.4221 8.26892 14.6682 7.33268 14.6666C6.39644 14.6682 5.47645 14.4221 4.66602 13.9533C3.85558 14.4221 2.93559 14.6682 1.99935 14.6666H0.666016V13.3333H1.99935Z" fill="#353C4D"/>
                                                            </svg>
                                                        <span class="mx-2">Shipping Schedule</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="Insurance Service">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8 0.666687L13.478 1.88402C13.7827 1.95202 14 2.22202 14 2.53469V9.19269C14 10.53 13.3313 11.7794 12.2187 12.5207L8 15.3334L3.78133 12.5207C2.668 11.7787 2 10.53 2 9.19335V2.53469C2 2.22202 2.21733 1.95202 2.522 1.88402L8 0.666687ZM8 2.03269L3.33333 3.06935V9.19269C3.33333 10.084 3.77867 10.9167 4.52067 11.4114L8 13.7314L11.4793 11.4114C12.2213 10.9167 12.6667 10.0847 12.6667 9.19335V3.06935L8 2.03335V2.03269ZM10.968 5.48135L11.9113 6.42402L7.66867 10.6667L4.84 7.83802L5.78267 6.89535L7.668 8.78069L10.968 5.48069V5.48135Z" fill="#353C4D"/>
                                                            </svg>
                                                        <span class="mx-2">Insurance Service</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="Storage Service">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13.9993 13.3333H15.3327V14.6666H0.666016V13.3333H1.99935V1.99998C1.99935 1.82317 2.06959 1.6536 2.19461 1.52858C2.31964 1.40355 2.4892 1.33331 2.66602 1.33331H13.3327C13.5095 1.33331 13.6791 1.40355 13.8041 1.52858C13.9291 1.6536 13.9993 1.82317 13.9993 1.99998V13.3333ZM12.666 13.3333V2.66665H3.33268V13.3333H12.666ZM5.33268 7.33331H7.33268V8.66665H5.33268V7.33331ZM5.33268 4.66665H7.33268V5.99998H5.33268V4.66665ZM5.33268 9.99998H7.33268V11.3333H5.33268V9.99998ZM8.66602 9.99998H10.666V11.3333H8.66602V9.99998ZM8.66602 7.33331H10.666V8.66665H8.66602V7.33331ZM8.66602 4.66665H10.666V5.99998H8.66602V4.66665Z" fill="#353C4D"/>
                                                            </svg>                                                            
                                                        <span class="mx-2">Storage Service</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="Finance Service">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.00065 14.6666C4.31865 14.6666 1.33398 11.682 1.33398 7.99998C1.33398 4.31798 4.31865 1.33331 8.00065 1.33331C11.6827 1.33331 14.6673 4.31798 14.6673 7.99998C14.6673 11.682 11.6827 14.6666 8.00065 14.6666ZM8.00065 13.3333C9.41514 13.3333 10.7717 12.7714 11.7719 11.7712C12.7721 10.771 13.334 9.41447 13.334 7.99998C13.334 6.58549 12.7721 5.22894 11.7719 4.22874C10.7717 3.22855 9.41514 2.66665 8.00065 2.66665C6.58616 2.66665 5.22961 3.22855 4.22941 4.22874C3.22922 5.22894 2.66732 6.58549 2.66732 7.99998C2.66732 9.41447 3.22922 10.771 4.22941 11.7712C5.22961 12.7714 6.58616 13.3333 8.00065 13.3333ZM5.66732 9.33331H9.33398C9.42239 9.33331 9.50718 9.29819 9.56969 9.23568C9.6322 9.17317 9.66732 9.08839 9.66732 8.99998C9.66732 8.91157 9.6322 8.82679 9.56969 8.76428C9.50718 8.70177 9.42239 8.66665 9.33398 8.66665H6.66732C6.22529 8.66665 5.80137 8.49105 5.48881 8.17849C5.17625 7.86593 5.00065 7.44201 5.00065 6.99998C5.00065 6.55795 5.17625 6.13403 5.48881 5.82147C5.80137 5.50891 6.22529 5.33331 6.66732 5.33331H7.33398V3.99998H8.66732V5.33331H10.334V6.66665H6.66732C6.57891 6.66665 6.49413 6.70177 6.43162 6.76428C6.3691 6.82679 6.33398 6.91157 6.33398 6.99998C6.33398 7.08839 6.3691 7.17317 6.43162 7.23568C6.49413 7.29819 6.57891 7.33331 6.66732 7.33331H9.33398C9.77601 7.33331 10.1999 7.50891 10.5125 7.82147C10.8251 8.13403 11.0007 8.55795 11.0007 8.99998C11.0007 9.44201 10.8251 9.86593 10.5125 10.1785C10.1999 10.4911 9.77601 10.6666 9.33398 10.6666H8.66732V12H7.33398V10.6666H5.66732V9.33331Z" fill="#353C4D"/>
                                                            </svg>                                                            
                                                        <span class="mx-2">Finance Service</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="Car Carrier Service">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6.44281 5.48637C6.36079 5.42231 6.25968 5.38753 6.15562 5.38753H1.77201V4.00697C1.77201 3.4985 2.18576 3.08475 2.69423 3.08475H7.00862L14.2276 8.59886V11.5644L6.44281 5.48637ZM6.44281 5.48637L6.41203 5.52578M6.44281 5.48637L6.4428 5.48637L6.41203 5.52578M6.41203 5.52578C6.33881 5.46858 6.24853 5.43753 6.15562 5.43753H1.77201L6.41203 5.52578ZM14.6948 12.9875H14.6948C14.9516 12.9872 15.1609 12.7782 15.1609 12.5209V8.36808C15.1609 8.22264 15.0931 8.0855 14.9775 7.99723L7.44972 2.24724C7.44972 2.24724 7.44972 2.24724 7.44972 2.24724C7.36836 2.18508 7.26883 2.15142 7.16645 2.15142H2.69423C1.67103 2.15142 0.838672 2.98377 0.838672 4.00697V5.85419C0.838672 6.11192 1.04761 6.32086 1.30534 6.32086H5.99502L11.2036 10.3875H6.82756V7.52086C6.82756 7.26313 6.61862 7.05419 6.36089 7.05419H3.80534C2.16947 7.05419 0.838672 8.385 0.838672 10.0209V12.5209C0.838672 12.7786 1.04761 12.9875 1.30534 12.9875H2.61393C2.79877 13.4894 3.28144 13.8486 3.84701 13.8486C4.41257 13.8486 4.89524 13.4894 5.08008 12.9875H9.2806C9.46544 13.4894 9.94811 13.8486 10.5137 13.8486C11.0792 13.8486 11.5619 13.4894 11.7467 12.9875L14.6948 12.9875ZM11.7365 12.0542C11.6059 11.7231 11.3446 11.4573 11.0165 11.3209H12.399L13.3382 12.0542H11.7365ZM9.29087 12.0542H6.82756V11.3209H10.0109C9.6827 11.4573 9.42141 11.7231 9.29087 12.0542ZM3.80534 7.98753H4.22756V9.55419H1.8261C2.03757 8.65717 2.84482 7.98753 3.80534 7.98753ZM1.77201 10.4875H4.69423C4.95195 10.4875 5.16089 10.2786 5.16089 10.0209V7.98753H5.89423V12.0542H5.06981C4.87763 11.5668 4.40211 11.2209 3.84701 11.2209C3.2919 11.2209 2.81638 11.5668 2.62421 12.0542H1.77201V10.4875ZM3.84701 12.9153C3.6372 12.9153 3.46645 12.7446 3.46645 12.5347C3.46645 12.3249 3.6372 12.1542 3.84701 12.1542C4.05681 12.1542 4.22756 12.3249 4.22756 12.5347C4.22756 12.7446 4.05681 12.9153 3.84701 12.9153ZM10.5137 12.9153C10.3039 12.9153 10.1331 12.7446 10.1331 12.5347C10.1331 12.3249 10.3039 12.1542 10.5137 12.1542C10.7235 12.1542 10.8942 12.3249 10.8942 12.5347C10.8942 12.7446 10.7235 12.9153 10.5137 12.9153Z" fill="#353C4D" stroke="#4F4770" stroke-width="0.1"/>
                                                            </svg>                                                            
                                                        <span class="mx-2">Car Carrier Service</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="Custom Clearance">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3.33333 5.33331V13.3333H12.6667V5.33331H3.33333ZM3.33333 3.99998H12.6667V2.66665H3.33333V3.99998ZM13.3333 14.6666H2.66667C2.48986 14.6666 2.32029 14.5964 2.19526 14.4714C2.07024 14.3464 2 14.1768 2 14V1.99998C2 1.82317 2.07024 1.6536 2.19526 1.52858C2.32029 1.40355 2.48986 1.33331 2.66667 1.33331H13.3333C13.5101 1.33331 13.6797 1.40355 13.8047 1.52858C13.9298 1.6536 14 1.82317 14 1.99998V14C14 14.1768 13.9298 14.3464 13.8047 14.4714C13.6797 14.5964 13.5101 14.6666 13.3333 14.6666ZM4.66667 6.66665H7.33333V9.33331H4.66667V6.66665ZM4.66667 10.6666H11.3333V12H4.66667V10.6666ZM8.66667 7.33331H11.3333V8.66665H8.66667V7.33331Z" fill="#353C4D"/>
                                                            </svg>                                                            
                                                        <span class="mx-2">Custom Clearance</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="Auction Service">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9.33398 13.333V14.6664H1.33398V13.333H9.33398ZM9.72465 0.457031L14.91 5.64236L13.9673 6.58636L13.2607 6.35036L11.6093 7.9997L15.3807 11.771L14.438 12.7137L10.6673 8.94236L9.06465 10.545L9.25332 11.2997L8.30998 12.2424L3.12465 7.05703L4.06798 6.11436L4.82132 6.30236L9.01732 2.10703L8.78198 1.40036L9.72465 0.457031ZM10.196 2.81436L5.48198 7.5277L7.83865 9.88503L12.5527 5.1717L10.196 2.81436Z" fill="#353C4D"/>
                                                            </svg>                                                            
                                                        <span class="mx-2">Auction Service</span>
                                                    </a>
                                                   
                                                    <a class="dropdown-item" href="#" aria-label="Security Export"> 
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3.33333 3.06935V9.19269C3.33334 9.63166 3.44172 10.0638 3.64884 10.4509C3.85597 10.8379 4.15543 11.1678 4.52067 11.4114L8 13.7314L11.4793 11.4114C11.8445 11.1679 12.1439 10.8381 12.351 10.4512C12.5581 10.0643 12.6665 9.63221 12.6667 9.19335V3.06935L8 2.03335L3.33333 3.06935ZM2.522 1.88402L8 0.666687L13.478 1.88402C13.626 1.91693 13.7584 1.99933 13.8533 2.11762C13.9482 2.23592 14 2.38303 14 2.53469V9.19269C14 9.85118 13.8373 10.4995 13.5266 11.08C13.2158 11.6606 12.7666 12.1554 12.2187 12.5207L8 15.3334L3.78133 12.5207C3.23352 12.1555 2.78431 11.6608 2.47357 11.0803C2.16282 10.4999 2.00016 9.85173 2 9.19335V2.53469C2.00003 2.38303 2.05176 2.23592 2.14666 2.11762C2.24156 1.99933 2.37396 1.91693 2.522 1.88402ZM8 9.00002L6.04067 10.03L6.41467 7.84869L4.83 6.30335L7.02067 5.98469L8 4.00002L8.98 5.98469L11.17 6.30335L9.58533 7.84869L9.95867 10.03L8 9.00002Z" fill="#353C4D"/>
                                                            </svg>
                                                                                                                     
                                                        <span class="mx-2">Security Export</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="Pre Export Inspection"> 
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12.6673 13.3334H3.33398V14C3.33398 14.1768 3.26375 14.3464 3.13872 14.4714C3.0137 14.5964 2.84413 14.6667 2.66732 14.6667H2.00065C1.82384 14.6667 1.65427 14.5964 1.52925 14.4714C1.40422 14.3464 1.33398 14.1768 1.33398 14V7.33335L2.98732 3.47469C3.0902 3.23469 3.26129 3.03018 3.47935 2.88654C3.69742 2.7429 3.95286 2.66646 4.21398 2.66669H11.7873C12.0482 2.66672 12.3034 2.74329 12.5212 2.88691C12.739 3.03053 12.9099 3.2349 13.0127 3.47469L14.6673 7.33335V14C14.6673 14.1768 14.5971 14.3464 14.4721 14.4714C14.347 14.5964 14.1775 14.6667 14.0007 14.6667H13.334C13.1572 14.6667 12.9876 14.5964 12.8626 14.4714C12.7376 14.3464 12.6673 14.1768 12.6673 14V13.3334ZM13.334 8.66669H2.66732V12H13.334V8.66669ZM2.78465 7.33335H13.2167L11.788 4.00002H4.21398L2.78532 7.33335H2.78465ZM4.33398 11.3334C4.06877 11.3334 3.81441 11.228 3.62688 11.0405C3.43934 10.8529 3.33398 10.5986 3.33398 10.3334C3.33398 10.0681 3.43934 9.81378 3.62688 9.62625C3.81441 9.43871 4.06877 9.33335 4.33398 9.33335C4.5992 9.33335 4.85355 9.43871 5.04109 9.62625C5.22863 9.81378 5.33398 10.0681 5.33398 10.3334C5.33398 10.5986 5.22863 10.8529 5.04109 11.0405C4.85355 11.228 4.5992 11.3334 4.33398 11.3334ZM11.6673 11.3334C11.4021 11.3334 11.1477 11.228 10.9602 11.0405C10.7727 10.8529 10.6673 10.5986 10.6673 10.3334C10.6673 10.0681 10.7727 9.81378 10.9602 9.62625C11.1477 9.43871 11.4021 9.33335 11.6673 9.33335C11.9325 9.33335 12.1869 9.43871 12.3744 9.62625C12.562 9.81378 12.6673 10.0681 12.6673 10.3334C12.6673 10.5986 12.562 10.8529 12.3744 11.0405C12.1869 11.228 11.9325 11.3334 11.6673 11.3334Z" fill="#353C4D"/>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.34635 4.95695L5.3127 4.66669L5.18589 4.68139L5.22719 5.03767L5.48813 5.17866L5.63192 5.47008C5.6061 5.47624 5.58217 5.48777 5.56136 5.50626C5.52862 5.53537 5.51125 5.57507 5.50109 5.61571C5.48869 5.66532 5.48435 5.72886 5.48283 5.80272L5.34045 5.79527L5.09678 6.22491L4.24414 6.59688L4.29519 6.71389L5.18683 6.3249L5.41257 5.92688L5.48202 5.93051C5.48202 5.93049 5.48202 5.93053 5.48202 5.93051C5.48202 5.93367 5.48202 5.9369 5.48202 5.94008C5.48202 5.98882 5.49783 6.03206 5.53113 6.06441C5.56285 6.09524 5.60431 6.1102 5.64509 6.11678C5.70793 6.12692 5.78339 6.11939 5.85965 6.10298L5.87983 6.27709L6.14077 6.41809L6.43758 7.01962L6.55206 6.96313L6.23725 6.32511L5.99899 6.19637L5.98426 6.06926C6.0632 6.04394 6.14197 6.01173 6.21088 5.97816C6.29573 5.93682 6.37247 5.89014 6.41468 5.84793C6.46175 5.80086 6.46833 5.74185 6.45391 5.68837C6.44987 5.67335 6.44415 5.6585 6.43719 5.64394L6.87002 5.42753L7.07466 5.01825H7.46074V4.89059H6.99576L6.77487 5.33237L6.36418 5.53772C6.29449 5.45805 6.1993 5.38387 6.13128 5.33844C6.08563 5.3061 6.03269 5.3152 5.99638 5.32679C5.95787 5.33909 5.91654 5.36119 5.87941 5.38163C5.87324 5.38502 5.86714 5.3884 5.8611 5.39175C5.82862 5.40973 5.79792 5.42674 5.76778 5.44033C5.76551 5.44135 5.76327 5.44234 5.76106 5.4433L5.58461 5.08569L5.34635 4.95695ZM5.69201 5.59187L5.78494 5.7802L5.89942 5.72371L5.8176 5.55789C5.81849 5.5575 5.81938 5.5571 5.82026 5.5567C5.85564 5.54075 5.89171 5.52075 5.92402 5.50284C5.9298 5.49963 5.93546 5.4965 5.94098 5.49346C5.97953 5.47223 6.01036 5.45633 6.03521 5.4484C6.05009 5.44365 6.05699 5.44362 6.05925 5.44384C6.11477 5.48086 6.18805 5.53763 6.2454 5.59711L5.94284 5.74839L5.99993 5.86257L6.32298 5.70105C6.3264 5.70841 6.32895 5.71528 6.33065 5.72159C6.33597 5.74133 6.33226 5.74982 6.32441 5.75766C6.29798 5.78409 6.23743 5.82322 6.15497 5.86339C6.098 5.89115 6.03381 5.91784 5.96925 5.93978L5.96534 5.90611L5.83853 5.92081L5.84487 5.97549C5.77194 5.99214 5.70941 5.99785 5.66541 5.99075C5.63969 5.9866 5.62645 5.97904 5.6201 5.97287C5.61532 5.96822 5.60968 5.95998 5.60968 5.94008C5.60968 5.93911 5.60968 5.93815 5.60968 5.93719L5.79813 5.94705L5.8048 5.81957L5.61044 5.8094C5.61175 5.7381 5.61531 5.68517 5.62494 5.64667C5.63194 5.61867 5.64031 5.60689 5.64617 5.60168C5.65075 5.59761 5.65983 5.59206 5.68313 5.59206C5.6861 5.59206 5.68906 5.592 5.69201 5.59187Z" fill="#2F2B43"/>
                                                                </svg>  
                                                        <span class="mx-2">Pre Export Inspection</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="Marine Insurance Service">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2.66732 6.93335V2.66669C2.66732 2.48988 2.73756 2.32031 2.86258 2.19528C2.9876 2.07026 3.15717 2.00002 3.33398 2.00002H6.66732V0.666687H9.33398V2.00002H12.6673C12.8441 2.00002 13.0137 2.07026 13.1387 2.19528C13.2637 2.32031 13.334 2.48988 13.334 2.66669V6.93335L14.058 7.15069C14.2221 7.20006 14.3608 7.31071 14.4455 7.45967C14.5301 7.60863 14.5542 7.78446 14.5127 7.95069L13.502 11.996C13.0716 12.0183 12.6409 11.9567 12.234 11.8147L13.0673 8.24669L8.00065 6.66669L2.93398 8.24669L3.76732 11.814C3.36043 11.9562 2.92978 12.018 2.49932 11.996L1.48865 7.95069C1.44712 7.78446 1.47117 7.60863 1.55583 7.45967C1.64049 7.31071 1.77925 7.20006 1.94332 7.15069L2.66732 6.93335ZM4.00065 6.53335L8.00065 5.33335L12.0007 6.53335V3.33335H4.00065V6.53335ZM2.66732 13.3334C3.65149 13.3347 4.60137 12.9719 5.33398 12.3147C6.0666 12.9719 7.01647 13.3347 8.00065 13.3334C8.98483 13.3347 9.9347 12.9719 10.6673 12.3147C11.3999 12.9719 12.3498 13.3347 13.334 13.3334H14.6673V14.6667H13.334C12.3977 14.6682 11.4778 14.4221 10.6673 13.9534C9.85688 14.4221 8.93689 14.6682 8.00065 14.6667C7.06441 14.6682 6.14442 14.4221 5.33398 13.9534C4.52355 14.4221 3.60356 14.6682 2.66732 14.6667H1.33398V13.3334H2.66732Z" fill="#353C4D"/>
                                                            </svg> 
                                                            <span class="mx-2">Marine Insurance Service</span>
                                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Car Reviews
                                        </a>
                                        <div class="dropdown-menu mega-menu car-reviews p-2 py-3 border-0" aria-labelledby="navbarDropdown">
                                            <div class="row">
                                                <div class="col-md-2 mx-2">
                                                    <a class="dropdown-item" href="#" aria-label="Car Reviews">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.6673 13.3334H3.33398V14C3.33398 14.1768 3.26375 14.3464 3.13872 14.4714C3.0137 14.5964 2.84413 14.6667 2.66732 14.6667H2.00065C1.82384 14.6667 1.65427 14.5964 1.52925 14.4714C1.40422 14.3464 1.33398 14.1768 1.33398 14V7.33335L2.98732 3.47469C3.0902 3.23469 3.26129 3.03018 3.47935 2.88654C3.69742 2.7429 3.95286 2.66646 4.21398 2.66669H11.7873C12.0482 2.66672 12.3034 2.74329 12.5212 2.88691C12.739 3.03053 12.9099 3.2349 13.0127 3.47469L14.6673 7.33335V14C14.6673 14.1768 14.5971 14.3464 14.4721 14.4714C14.347 14.5964 14.1775 14.6667 14.0007 14.6667H13.334C13.1572 14.6667 12.9876 14.5964 12.8626 14.4714C12.7376 14.3464 12.6673 14.1768 12.6673 14V13.3334ZM13.334 8.66669H2.66732V12H13.334V8.66669ZM2.78465 7.33335H13.2167L11.788 4.00002H4.21398L2.78532 7.33335H2.78465ZM4.33398 11.3334C4.06877 11.3334 3.81441 11.228 3.62688 11.0405C3.43934 10.8529 3.33398 10.5986 3.33398 10.3334C3.33398 10.0681 3.43934 9.81378 3.62688 9.62625C3.81441 9.43871 4.06877 9.33335 4.33398 9.33335C4.5992 9.33335 4.85355 9.43871 5.04109 9.62625C5.22863 9.81378 5.33398 10.0681 5.33398 10.3334C5.33398 10.5986 5.22863 10.8529 5.04109 11.0405C4.85355 11.228 4.5992 11.3334 4.33398 11.3334ZM11.6673 11.3334C11.4021 11.3334 11.1477 11.228 10.9602 11.0405C10.7727 10.8529 10.6673 10.5986 10.6673 10.3334C10.6673 10.0681 10.7727 9.81378 10.9602 9.62625C11.1477 9.43871 11.4021 9.33335 11.6673 9.33335C11.9325 9.33335 12.1869 9.43871 12.3744 9.62625C12.562 9.81378 12.6673 10.0681 12.6673 10.3334C12.6673 10.5986 12.562 10.8529 12.3744 11.0405C12.1869 11.228 11.9325 11.3334 11.6673 11.3334Z" fill="#353C4D"/>
                                                            </svg>                                                            
                                                        <span class="mx-2">Car Reviews</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="Car Comparisons">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_16782_8863)">
                                                            <g clip-path="url(#clip1_16782_8863)">
                                                            <path d="M2.69766 4C2.99882 4 3.28805 4.11933 3.50113 4.33298L6.24451 7.07636C6.45759 7.28944 6.57749 7.57867 6.57749 7.87983V11.9551H7.71394V13.0916H3.09655C2.84369 14.0723 1.95443 14.7962 0.895258 14.7962C-0.16391 14.7962 -1.05375 14.0723 -1.30604 13.0916H-3.65053C-3.96419 13.0916 -4.21875 12.837 -4.21875 12.5233V5.13645C-4.21875 4.50856 -3.71019 4 -3.0823 4H2.69766ZM0.895258 11.3869C0.267372 11.3869 -0.241188 11.8955 -0.241188 12.5233C-0.241188 13.1512 0.267372 13.6598 0.895258 13.6598C1.52314 13.6598 2.0317 13.1512 2.0317 12.5233C2.0317 11.8955 1.52314 11.3869 0.895258 11.3869ZM2.69766 5.13645H-3.0823V11.9551H-1.30604C-1.05375 10.9749 -0.16391 10.2505 0.895258 10.2505C1.95443 10.2505 2.84426 10.9749 3.09655 11.9551H5.44104V7.87983L2.69766 5.13645ZM2.59993 6.27289V9.68223H-1.94586V6.27289H2.59993ZM1.46348 7.40934H-0.809411V8.54578H1.46348V7.40934Z" fill="#2F2B43"/>
                                                            <path d="M13.2984 4C12.9973 4 12.708 4.11933 12.495 4.33298L9.75158 7.07636C9.5385 7.28944 9.4186 7.57867 9.4186 7.87983V11.9551H8.28216V13.0916H12.8995C13.1524 14.0723 14.0417 14.7962 15.1008 14.7962C16.16 14.7962 17.0498 14.0723 17.3021 13.0916H19.6466C19.9603 13.0916 20.2148 12.837 20.2148 12.5233V5.13645C20.2148 4.50856 19.7063 4 19.0784 4H13.2984ZM15.1008 11.3869C15.7287 11.3869 16.2373 11.8955 16.2373 12.5233C16.2373 13.1512 15.7287 13.6598 15.1008 13.6598C14.4729 13.6598 13.9644 13.1512 13.9644 12.5233C13.9644 11.8955 14.4729 11.3869 15.1008 11.3869ZM13.2984 5.13645H19.0784V11.9551H17.3021C17.0498 10.9749 16.16 10.2505 15.1008 10.2505C14.0417 10.2505 13.1518 10.9749 12.8995 11.9551H10.5551V7.87983L13.2984 5.13645ZM13.3962 6.27289V9.68223H17.942V6.27289H13.3962ZM14.5326 7.40934H16.8055V8.54578H14.5326V7.40934Z" fill="#2F2B43"/>
                                                            </g>
                                                            </g>
                                                            <defs>
                                                            <clipPath id="clip0_16782_8863">
                                                            <rect width="14.6667" height="10.6667" fill="white" transform="translate(0.666016 4)"/>
                                                            </clipPath>
                                                            <clipPath id="clip1_16782_8863">
                                                            <rect width="19.3333" height="10.6047" fill="white" transform="translate(-1.66797 4)"/>
                                                            </clipPath>
                                                            </defs>
                                                            </svg>                                                            
                                                        <span class="mx-2">Car Comparisons</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="Car Blogs">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.6673 13.3333V2.66665H2.66732V12.6666C2.66732 12.8435 2.73756 13.013 2.86258 13.1381C2.9876 13.2631 3.15717 13.3333 3.33398 13.3333H10.6673ZM12.6673 14.6666H3.33398C2.80355 14.6666 2.29484 14.4559 1.91977 14.0809C1.5447 13.7058 1.33398 13.1971 1.33398 12.6666V1.99998C1.33398 1.82317 1.40422 1.6536 1.52925 1.52858C1.65427 1.40355 1.82384 1.33331 2.00065 1.33331H11.334C11.5108 1.33331 11.6804 1.40355 11.8054 1.52858C11.9304 1.6536 12.0007 1.82317 12.0007 1.99998V6.66665H14.6673V12.6666C14.6673 13.1971 14.4566 13.7058 14.0815 14.0809C13.7065 14.4559 13.1978 14.6666 12.6673 14.6666ZM12.0007 7.99998V12.6666C12.0007 12.8435 12.0709 13.013 12.1959 13.1381C12.3209 13.2631 12.4905 13.3333 12.6673 13.3333C12.8441 13.3333 13.0137 13.2631 13.1387 13.1381C13.2637 13.013 13.334 12.8435 13.334 12.6666V7.99998H12.0007ZM4.00065 3.99998H8.00065V7.99998H4.00065V3.99998ZM5.33398 5.33331V6.66665H6.66732V5.33331H5.33398ZM4.00065 8.66665H9.33398V9.99998H4.00065V8.66665ZM4.00065 10.6666H9.33398V12H4.00065V10.6666Z" fill="#353C4D"/>
                                                            </svg>                                                            
                                                        <span class="mx-2">Car Blogs</span>
                                                    </a>
                                                   
                                                  
                                                </div>
                                                

                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Company Overview
                                        </a>
                                        <div class="dropdown-menu mega-menu car-reviews p-2 py-3 border-0" aria-labelledby="navbarDropdown">
                                            <div class="row">
                                                <div class="col-md-2 mx-2">
                                                    <a class="dropdown-item" href="#" aria-label="About SAT">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.00065 14.6667C4.31865 14.6667 1.33398 11.682 1.33398 8.00004C1.33398 4.31804 4.31865 1.33337 8.00065 1.33337C11.6827 1.33337 14.6673 4.31804 14.6673 8.00004C14.6673 11.682 11.6827 14.6667 8.00065 14.6667ZM8.00065 13.3334C9.41514 13.3334 10.7717 12.7715 11.7719 11.7713C12.7721 10.7711 13.334 9.41453 13.334 8.00004C13.334 6.58555 12.7721 5.229 11.7719 4.2288C10.7717 3.22861 9.41514 2.66671 8.00065 2.66671C6.58616 2.66671 5.22961 3.22861 4.22941 4.2288C3.22922 5.229 2.66732 6.58555 2.66732 8.00004C2.66732 9.41453 3.22922 10.7711 4.22941 11.7713C5.22961 12.7715 6.58616 13.3334 8.00065 13.3334ZM7.33398 4.66671H8.66732V6.00004H7.33398V4.66671ZM7.33398 7.33337H8.66732V11.3334H7.33398V7.33337Z" fill="#353C4D"/>
                                                            </svg>                                                            
                                                        <span class="mx-2">About SAT</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="Company Profile">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.6673 14H3.33398V14.6667C3.33398 14.8435 3.26375 15.013 3.13872 15.1381C3.0137 15.2631 2.84413 15.3333 2.66732 15.3333H2.00065C1.82384 15.3333 1.65427 15.2631 1.52925 15.1381C1.40422 15.013 1.33398 14.8435 1.33398 14.6667V7.99999L2.94532 5.31399C3.06378 5.11656 3.23135 4.95316 3.43172 4.83972C3.63208 4.72628 3.8584 4.66666 4.08865 4.66666H11.9127C12.1429 4.66666 12.3692 4.72628 12.5696 4.83972C12.77 4.95316 12.9375 5.11656 13.056 5.31399L14.6673 7.99999V14.6667C14.6673 14.8435 14.5971 15.013 14.4721 15.1381C14.347 15.2631 14.1775 15.3333 14.0007 15.3333H13.334C13.1572 15.3333 12.9876 15.2631 12.8626 15.1381C12.7376 15.013 12.6673 14.8435 12.6673 14.6667V14ZM13.334 9.33333H2.66732V12.6667H13.334V9.33333ZM2.88865 7.99999H13.1127L11.9127 5.99999H4.08865L2.88865 7.99999ZM3.62732 2.29333L4.33398 1.58533L5.04065 2.29199C5.18053 2.43183 5.2758 2.61002 5.31441 2.80401C5.35302 2.998 5.33324 3.19908 5.25756 3.38182C5.18188 3.56456 5.05371 3.72076 4.88925 3.83066C4.7248 3.94055 4.53145 3.99921 4.33365 3.99921C4.13586 3.99921 3.94251 3.94055 3.77805 3.83066C3.61359 3.72076 3.48542 3.56456 3.40974 3.38182C3.33406 3.19908 3.31428 2.998 3.35289 2.80401C3.3915 2.61002 3.48677 2.43183 3.62665 2.29199L3.62732 2.29333ZM7.29398 2.29333L8.00065 1.58533L8.70732 2.29199C8.8472 2.43183 8.94247 2.61002 8.98108 2.80401C9.01969 2.998 8.99991 3.19908 8.92423 3.38182C8.84855 3.56456 8.72038 3.72076 8.55592 3.83066C8.39146 3.94055 8.19811 3.99921 8.00032 3.99921C7.80252 3.99921 7.60917 3.94055 7.44472 3.83066C7.28026 3.72076 7.15209 3.56456 7.07641 3.38182C7.00073 3.19908 6.98095 2.998 7.01956 2.80401C7.05816 2.61002 7.15344 2.43183 7.29332 2.29199L7.29398 2.29333ZM10.9607 2.29333L11.6673 1.58533L12.374 2.29199C12.5139 2.43183 12.6091 2.61002 12.6477 2.80401C12.6864 2.998 12.6666 3.19908 12.5909 3.38182C12.5152 3.56456 12.387 3.72076 12.2226 3.83066C12.0581 3.94055 11.8648 3.99921 11.667 3.99921C11.4692 3.99921 11.2758 3.94055 11.1114 3.83066C10.9469 3.72076 10.8188 3.56456 10.7431 3.38182C10.6674 3.19908 10.6476 2.998 10.6862 2.80401C10.7248 2.61002 10.8201 2.43183 10.96 2.29199L10.9607 2.29333ZM4.33398 12C4.06877 12 3.81441 11.8946 3.62688 11.7071C3.43934 11.5196 3.33398 11.2652 3.33398 11C3.33398 10.7348 3.43934 10.4804 3.62688 10.2929C3.81441 10.1053 4.06877 9.99999 4.33398 9.99999C4.5992 9.99999 4.85355 10.1053 5.04109 10.2929C5.22863 10.4804 5.33398 10.7348 5.33398 11C5.33398 11.2652 5.22863 11.5196 5.04109 11.7071C4.85355 11.8946 4.5992 12 4.33398 12ZM11.6673 12C11.4021 12 11.1477 11.8946 10.9602 11.7071C10.7727 11.5196 10.6673 11.2652 10.6673 11C10.6673 10.7348 10.7727 10.4804 10.9602 10.2929C11.1477 10.1053 11.4021 9.99999 11.6673 9.99999C11.9325 9.99999 12.1869 10.1053 12.3744 10.2929C12.562 10.4804 12.6673 10.7348 12.6673 11C12.6673 11.2652 12.562 11.5196 12.3744 11.7071C12.1869 11.8946 11.9325 12 11.6673 12Z" fill="#353C4D"/>
                                                            </svg>
                                                        <span class="mx-2">Company Profile</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="Why Choose SAT">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.9087 14.8166C10.6141 14.8183 10.3221 14.7626 10.0492 14.6529C9.7763 14.5431 9.52787 14.3812 9.31831 14.1765L9.31275 14.1711L9.3129 14.1709C8.77157 13.5844 8.43622 12.8428 8.35451 12.056H8.25244C7.42848 12.0625 6.62606 11.7951 5.97507 11.2966C5.32388 10.7979 4.86219 10.097 4.66518 9.30714C4.46815 8.51722 4.54759 7.68495 4.89036 6.94514C5.22002 6.23364 5.77452 5.64797 6.46928 5.27466C6.45374 4.78561 6.27731 4.31365 5.96488 3.9306C5.90322 3.86868 5.8278 3.82118 5.74434 3.79192C5.65895 3.76198 5.56753 3.75202 5.47745 3.76288L5.47222 3.76351L5.47222 3.76342C5.09748 3.79532 4.69914 4.0293 4.32557 4.37214C3.95606 4.71125 3.62819 5.14097 3.39366 5.53212C2.72256 6.77073 2.50337 8.19845 2.7725 9.5769C3.04184 10.9564 3.78412 12.2034 4.87561 13.1091L4.88537 13.1172L4.88499 13.1176C4.96234 13.1936 5.0237 13.2841 5.06565 13.3837C5.10763 13.4834 5.12923 13.5903 5.12923 13.6984C5.12923 13.8064 5.10763 13.9133 5.06565 14.0131C5.0237 14.1127 4.96234 14.2031 4.88499 14.2792L4.88244 14.2817L4.88241 14.2816C4.72605 14.4282 4.51883 14.5096 4.3039 14.5096C4.09035 14.5096 3.88458 14.4293 3.72861 14.2845C2.35394 13.127 1.42361 11.5396 1.09376 9.78711C0.763677 8.03337 1.055 6.22128 1.9188 4.65404L1.92154 4.64906L1.92163 4.64911C2.09216 4.36568 2.4817 3.76617 3.0493 3.21768C3.61518 2.67086 4.37239 2.16097 5.2782 2.08432C5.60846 2.05012 5.94232 2.08868 6.25569 2.19728C6.56953 2.30604 6.85504 2.48237 7.09136 2.7136L7.09632 2.71845L7.0962 2.71856C7.61517 3.27558 7.94752 3.97545 8.0498 4.72305C8.10597 4.72253 8.16216 4.72517 8.21812 4.73098C9.04106 4.73405 9.83949 5.00932 10.4851 5.51316C11.1329 6.01863 11.5891 6.72476 11.7797 7.51775C11.9702 8.31076 11.8839 9.14386 11.5345 9.88237C11.1987 10.5924 10.6389 11.1748 9.94048 11.5438C9.95753 12.0424 10.1339 12.5241 10.446 12.9196C10.5079 12.9828 10.5842 13.0311 10.6688 13.0603C10.7556 13.0902 10.8484 13.0991 10.9395 13.0863L10.9477 13.0852L10.9477 13.0854C11.3222 13.0535 11.7179 12.8197 12.0888 12.477C12.4557 12.138 12.7811 11.7083 13.0159 11.3168C13.6843 10.0783 13.903 8.65223 13.6359 7.27472C13.3686 5.89613 12.6307 4.64856 11.544 3.73931L11.5426 3.73818L11.5426 3.73817C11.3738 3.5935 11.2696 3.38819 11.254 3.16713C11.2384 2.94602 11.3128 2.72832 11.4599 2.56185C11.6069 2.39542 11.8145 2.29378 12.0368 2.27855C12.2587 2.26336 12.478 2.33536 12.6466 2.47936C14.0572 3.64256 15.0133 5.25352 15.3499 7.03596C15.6866 8.8189 15.3825 10.6616 14.49 12.2474L14.4883 12.2505L14.4883 12.2505C14.3224 12.5298 13.9328 13.1267 13.364 13.675C12.7967 14.222 12.0367 14.7344 11.1308 14.816L11.1173 14.8172V14.8166H10.9087ZM10.9087 14.8166H10.9082V14.6666L10.9091 14.8166C10.909 14.8166 10.9088 14.8166 10.9087 14.8166ZM10.2248 8.33096V8.33169C10.2248 8.72566 10.106 9.11097 9.88336 9.43881C9.66065 9.76666 9.34395 10.0224 8.97305 10.1732C8.60213 10.324 8.19399 10.363 7.80042 10.2851C7.40686 10.2073 7.04595 10.0162 6.76324 9.73641C6.48055 9.45663 6.28872 9.10077 6.21186 8.71409C6.135 8.32742 6.17647 7.92693 6.33097 7.56327C6.48547 7.1996 6.74627 6.88892 7.08065 6.67085C7.41505 6.45277 7.80779 6.33724 8.20925 6.33914H8.20996C8.47569 6.33914 8.73883 6.39086 8.98408 6.49125C9.22932 6.59165 9.45181 6.73872 9.63894 6.92392C9.82607 7.10912 9.97413 7.32878 10.0746 7.5702C10.1751 7.81162 10.2261 8.07015 10.2248 8.33096Z" fill="#353C4D" stroke="#4F4770" stroke-width="0.3"/>
                                                                </svg>
                                                        <span class="mx-2">Why Choose SAT</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="Privacy Policy">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2.522 1.88402L8 0.666687L13.478 1.88402C13.626 1.91693 13.7584 1.99933 13.8533 2.11762C13.9482 2.23592 14 2.38303 14 2.53469V9.19269C14 9.85118 13.8373 10.4995 13.5266 11.08C13.2158 11.6606 12.7666 12.1554 12.2187 12.5207L8 15.3334L3.78133 12.5207C3.23352 12.1555 2.78431 11.6608 2.47357 11.0803C2.16282 10.4999 2.00016 9.85173 2 9.19335V2.53469C2.00003 2.38303 2.05176 2.23592 2.14666 2.11762C2.24156 1.99933 2.37396 1.91693 2.522 1.88402ZM3.33333 3.06935V9.19269C3.33334 9.63166 3.44172 10.0638 3.64884 10.4509C3.85597 10.8379 4.15543 11.1678 4.52067 11.4114L8 13.7314L11.4793 11.4114C11.8445 11.1679 12.1439 10.8381 12.351 10.4512C12.5581 10.0643 12.6665 9.63221 12.6667 9.19335V3.06935L8 2.03335L3.33333 3.06935ZM8 7.33335C7.55797 7.33335 7.13405 7.15776 6.82149 6.8452C6.50893 6.53264 6.33333 6.10871 6.33333 5.66669C6.33333 5.22466 6.50893 4.80074 6.82149 4.48818C7.13405 4.17561 7.55797 4.00002 8 4.00002C8.44203 4.00002 8.86595 4.17561 9.17851 4.48818C9.49107 4.80074 9.66667 5.22466 9.66667 5.66669C9.66667 6.10871 9.49107 6.53264 9.17851 6.8452C8.86595 7.15776 8.44203 7.33335 8 7.33335ZM5.018 10.6667C5.09881 9.93229 5.44779 9.25354 5.99805 8.7605C6.54832 8.26747 7.26117 7.99483 8 7.99483C8.73883 7.99483 9.45168 8.26747 10.0019 8.7605C10.5522 9.25354 10.9012 9.93229 10.982 10.6667H5.018Z" fill="#353C4D"/>
                                                            </svg>      
                                                        <span class="mx-2">Privacy Policy</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="Terms and Conditions">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3.33333 5.33331V13.3333H12.6667V5.33331H3.33333ZM3.33333 3.99998H12.6667V2.66665H3.33333V3.99998ZM13.3333 14.6666H2.66667C2.48986 14.6666 2.32029 14.5964 2.19526 14.4714C2.07024 14.3464 2 14.1768 2 14V1.99998C2 1.82317 2.07024 1.6536 2.19526 1.52858C2.32029 1.40355 2.48986 1.33331 2.66667 1.33331H13.3333C13.5101 1.33331 13.6797 1.40355 13.8047 1.52858C13.9298 1.6536 14 1.82317 14 1.99998V14C14 14.1768 13.9298 14.3464 13.8047 14.4714C13.6797 14.5964 13.5101 14.6666 13.3333 14.6666ZM4.66667 6.66665H7.33333V9.33331H4.66667V6.66665ZM4.66667 10.6666H11.3333V12H4.66667V10.6666ZM8.66667 7.33331H11.3333V8.66665H8.66667V7.33331Z" fill="#353C4D"/>
                                                            </svg>
                                                        <span class="mx-2">Terms and Conditions</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="Careers">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.66732 3.83335H5.16732V3.33335V1.33335C5.16732 1.28915 5.18488 1.24676 5.21613 1.2155C5.24739 1.18425 5.28978 1.16669 5.33398 1.16669H10.6673C10.7115 1.16669 10.7539 1.18425 10.7852 1.2155C10.8164 1.24676 10.834 1.28915 10.834 1.33335V3.33335V3.83335H11.334H14.0007C14.0449 3.83335 14.0872 3.85091 14.1185 3.88217C14.1498 3.91342 14.1673 3.95582 14.1673 4.00002V13.3334C14.1673 13.3776 14.1498 13.4199 14.1185 13.4512C14.0872 13.4825 14.0449 13.5 14.0007 13.5H2.00065C1.95645 13.5 1.91405 13.4825 1.8828 13.4512C1.85154 13.4199 1.83398 13.3776 1.83398 13.3334V4.00002C1.83398 3.95582 1.85154 3.91343 1.8828 3.88217C1.91406 3.85091 1.95645 3.83335 2.00065 3.83335H4.66732ZM13.834 8.66669V8.16669H13.334H2.66732H2.16732V8.66669V12.6667V13.1667H2.66732H13.334H13.834V12.6667V8.66669ZM13.834 4.66669V4.16669H13.334H2.66732H2.16732V4.66669V7.33335V7.83335H2.66732H4.66732H5.16732V7.33335V6.50002H5.50065V7.33335V7.83335H6.00065H10.0007H10.5007V7.33335V6.50002H10.834V7.33335V7.83335H11.334H13.334H13.834V7.33335V4.66669ZM6.00065 1.50002H5.50065V2.00002V3.33335V3.83335H6.00065H10.0007H10.5007V3.33335V2.00002V1.50002H10.0007H6.00065Z" fill="#353C4D" stroke="#353C4D"/>
                                                            </svg>
                                                            
                                                        <span class="mx-2">Careers</span>
                                                    </a>
                                                </div>  
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Loyalty Program
                                        </a>
                                        <div class="dropdown-menu mega-menu p-2 py-3 border-0" aria-labelledby="navbarDropdown">
                                            <div class="row">
                                                <div class="col-md-2 mx-2">
                                                    <a class="dropdown-item" href="#" aria-label="How to Buy">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" xml:space="preserve" version="1.1" viewBox="0 0 32 32">
                                                            <image width="32" height="32" xlink:href="data:image/webp;base64,UklGRpIBAABXRUJQVlA4WAoAAAAQAAAAHwAAHwAAQUxQSPgAAAABkFZrb95IgiAIhiAIgjAMNhDCoGHQMsgymGEgCIEgCIbw/LBiZz8ARMQEyP9Vzd30MX0F5bW3J/TVgYy4AM62ZAnhKqP/hrSFr06YTLak/5qyzkcWD7pNtOSQ5Q+pd29SHgyOmwat8NFujK7Vziljo8ytkOCoLnwOvHCiUJC77v4NP4WCDsY1kSIOUUhigxMz7t/wUwW+Vm8LRi70XeoLGxR0YttM7kEHCXxCZp1LyoN45mSvtOODuvtMg1bJQQyrySm3mrzXXmS7E+u8Vt50k9mvTrYZC/om85ZweqEekCar7QNwRSTQD5UH235RxqHytJq7qfxfAVZQOCB0AAAA8AMAnQEqIAAgAD5RJI9Fo6IhFAQAOAUEs4BWGUGMGuA2zN2qgO9IAAD++oj/P2SwEIEGTIKtdEsTOybHB/AXbSg2za0G4CcUq3BqsjLKQ1zNMDbmMmfoz3+8xMglSzNnJEb+V4KobMbBJKE+QbWasE7wAAA="/>
                                                          </svg>                                                            
                                                        <span class="mx-2">Explore Loyalty Program</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="Inquiry Form">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" xml:space="preserve" version="1.1" viewBox="0 0 32 32">
                                                            <image width="32" height="32" xlink:href="data:image/webp;base64,UklGRhADAABXRUJQVlA4WAoAAAAQAAAAHwAAHwAAQUxQSFoBAAABkFVb2544R0Ic8DkoDiYScEAcFAeJA3DAKCjj4HPQOJjPAXHwnAs+6H+vI2IC+F8c5uZW356UmvkHSovRzL0lSSuvDE07HjpHEz93L9yM23WNWTssUT+HJ7PqHmp01+HL3XjrFY0nYNJ8mw8P7Dd17FyNF4BqVNtXgJNaH4pJK8CsGjVXgBodgUldgMnEaKJnYIxegJu6A5qxjmV8N6YAm2nAqg04Rm88XtQLcDUOsGkFzpp9Z9h0BWbjDoxXoBrpr9qARTOCdt41w5O4PkT30MwKLIlzp6gfwFkzQI33AUZ1OwL7ZnIEqm7AohmBm2q9VtUGFM0HMBorMDSNUXMvwDV6BKjqCJTviWo8ACV6Lw9TtBWAqW6qN4A1utCtxrXQj3k4q23XK1tiK71qPO3OGg88fTPGQ+ekMVFnXpzuxluHGo3xwsul6dQbLqr3hR89jDwvh2Ua+FsCVlA4IJABAACQCgCdASogACAAPk0ejUQioaGYDAYAKATEtgBOmUI6g8Y/E3kDN1zALqY/VbRt0gPMB+xW+AfzP+59YB6AH7R+lH7BH7Xftr7NAYj/ZluSkZ6GM/0EcU87IilJyBAA/voVr796i8a9vI9GxxLxpb+ijrPgyhphBoxFP/cN/wS5tw5bi0hf/KwdfNl4uXE76Ruu33PrvzuXW8O0tqPmbSAyf5JOn63q8wD9RZnBvkQzoNj9DC3CqEfDmCL1XlQunxO1NYLWBTd9lMZCKb2YES2GGeL78roXutD/ZzCYQoMTxFk42vjQAx70yeX4XzzZgEvKzynfgvURdSLR+Eg36XpVwVJxblqw9OqHAK0fqRrZvbEbw/1kv/v4/bsvQpqU/muY0HBVu12LOBSKf0yM3vUW/xmm/SA4qSCKGtD+/gvr2JEm2awgr3gVd5fRO5KJLC/XEO36xfDbRVpzFyCaMKxjSN2Bsr6MI85GVCJ/Vziw9NpAcaeCuY2jIZhdR1+1A6m1EqVZ9zd/xeqj+YhOgAAA"/>
                                                          </svg>                                                            
                                                        <span class="mx-2">Join SAT Pro</span>
                                                    </a>
                                                 
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Help
                                        </a>
                                        <div class="dropdown-menu mega-menu p-2 py-3 border-0" aria-labelledby="navbarDropdown">
                                            <div class="row">
                                                <div class="col-md-2 mx-2">
                                                    <a class="dropdown-item" href="#" aria-label="How to Buy">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2.66732 10.6666V2.66665H1.33398V1.33331H3.33398C3.5108 1.33331 3.68036 1.40355 3.80539 1.52858C3.93041 1.6536 4.00065 1.82317 4.00065 1.99998V9.99998H12.2927L13.626 4.66665H5.33398V3.33331H14.4807C14.582 3.33332 14.682 3.35642 14.7731 3.40087C14.8641 3.44532 14.9439 3.50995 15.0062 3.58984C15.0686 3.66973 15.1119 3.76278 15.1328 3.86192C15.1538 3.96106 15.1519 4.06368 15.1273 4.16198L13.4607 10.8286C13.4245 10.9728 13.3413 11.1008 13.2241 11.1922C13.107 11.2836 12.9626 11.3333 12.814 11.3333H3.33398C3.15717 11.3333 2.9876 11.2631 2.86258 11.1381C2.73756 11.013 2.66732 10.8435 2.66732 10.6666ZM4.00065 15.3333C3.64703 15.3333 3.30789 15.1928 3.05784 14.9428C2.80779 14.6927 2.66732 14.3536 2.66732 14C2.66732 13.6464 2.80779 13.3072 3.05784 13.0572C3.30789 12.8071 3.64703 12.6666 4.00065 12.6666C4.35427 12.6666 4.69341 12.8071 4.94346 13.0572C5.19351 13.3072 5.33398 13.6464 5.33398 14C5.33398 14.3536 5.19351 14.6927 4.94346 14.9428C4.69341 15.1928 4.35427 15.3333 4.00065 15.3333ZM12.0007 15.3333C11.647 15.3333 11.3079 15.1928 11.0578 14.9428C10.8078 14.6927 10.6673 14.3536 10.6673 14C10.6673 13.6464 10.8078 13.3072 11.0578 13.0572C11.3079 12.8071 11.647 12.6666 12.0007 12.6666C12.3543 12.6666 12.6934 12.8071 12.9435 13.0572C13.1935 13.3072 13.334 13.6464 13.334 14C13.334 14.3536 13.1935 14.6927 12.9435 14.9428C12.6934 15.1928 12.3543 15.3333 12.0007 15.3333Z" fill="#353C4D"/>
                                                            </svg>                                                            
                                                        <span class="mx-2">How to Buy</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="Inquiry Form">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13.3333 14.6666H2.66667C2.48986 14.6666 2.32029 14.5964 2.19526 14.4714C2.07024 14.3464 2 14.1768 2 14V1.99998C2 1.82317 2.07024 1.6536 2.19526 1.52858C2.32029 1.40355 2.48986 1.33331 2.66667 1.33331H13.3333C13.5101 1.33331 13.6797 1.40355 13.8047 1.52858C13.9298 1.6536 14 1.82317 14 1.99998V14C14 14.1768 13.9298 14.3464 13.8047 14.4714C13.6797 14.5964 13.5101 14.6666 13.3333 14.6666ZM12.6667 13.3333V2.66665H3.33333V13.3333H12.6667ZM5.33333 4.66665H10.6667V5.99998H5.33333V4.66665ZM5.33333 7.33331H10.6667V8.66665H5.33333V7.33331ZM5.33333 9.99998H8.66667V11.3333H5.33333V9.99998Z" fill="#353C4D"/>
                                                            </svg>                                                            
                                                        <span class="mx-2">Inquiry Form</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="Vehicle Information Request">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.00065 14.6667C4.31865 14.6667 1.33398 11.682 1.33398 8.00004C1.33398 4.31804 4.31865 1.33337 8.00065 1.33337C11.6827 1.33337 14.6673 4.31804 14.6673 8.00004C14.6673 11.682 11.6827 14.6667 8.00065 14.6667ZM8.00065 13.3334C9.41514 13.3334 10.7717 12.7715 11.7719 11.7713C12.7721 10.7711 13.334 9.41453 13.334 8.00004C13.334 6.58555 12.7721 5.229 11.7719 4.2288C10.7717 3.22861 9.41514 2.66671 8.00065 2.66671C6.58616 2.66671 5.22961 3.22861 4.22941 4.2288C3.22922 5.229 2.66732 6.58555 2.66732 8.00004C2.66732 9.41453 3.22922 10.7711 4.22941 11.7713C5.22961 12.7715 6.58616 13.3334 8.00065 13.3334ZM7.33398 4.66671H8.66732V6.00004H7.33398V4.66671ZM7.33398 7.33337H8.66732V11.3334H7.33398V7.33337Z" fill="#353C4D"/>
                                                            </svg>                                                            
                                                        <span class="mx-2">Vehicle Information Request</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="How to Pay">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.33333 1.33331L12.1987 2.85331C12.3344 2.89567 12.453 2.9803 12.5372 3.09484C12.6214 3.20938 12.6667 3.34783 12.6667 3.48998V4.66665H14C14.1768 4.66665 14.3464 4.73688 14.4714 4.86191C14.5964 4.98693 14.6667 5.1565 14.6667 5.33331V10.6666C14.6667 10.8435 14.5964 11.013 14.4714 11.1381C14.3464 11.2631 14.1768 11.3333 14 11.3333L11.8533 11.334C11.5953 11.674 11.282 11.974 10.92 12.2206L7.33333 14.6666L3.74667 12.2213C3.20835 11.8543 2.76783 11.3613 2.46343 10.7853C2.15902 10.2092 1.99993 9.56752 2 8.91598V3.48998C2.00008 3.34794 2.04552 3.20964 2.12971 3.09524C2.21389 2.98083 2.33241 2.89631 2.468 2.85398L7.33333 1.33331ZM7.33333 2.72931L3.33333 3.97998V8.91598C3.33324 9.32413 3.42683 9.72686 3.60691 10.0931C3.78699 10.4594 4.04874 10.7795 4.372 11.0286L4.498 11.1193L7.33333 13.0533L9.85467 11.3333H6.66667C6.48986 11.3333 6.32029 11.2631 6.19526 11.1381C6.07024 11.013 6 10.8435 6 10.6666V5.33331C6 5.1565 6.07024 4.98693 6.19526 4.86191C6.32029 4.73688 6.48986 4.66665 6.66667 4.66665H11.3333V3.97998L7.33333 2.72931ZM7.33333 7.99998V9.99998H13.3333V7.99998H7.33333ZM7.33333 6.66665H13.3333V5.99998H7.33333V6.66665Z" fill="#353C4D"/>
                                                            </svg>                                                            
                                                        <span class="mx-2">How to Pay</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="Bank Information">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1.33398 13.3333H14.6673V14.6666H1.33398V13.3333ZM2.66732 7.99998H4.00065V12.6666H2.66732V7.99998ZM6.00065 7.99998H7.33398V12.6666H6.00065V7.99998ZM8.66732 7.99998H10.0007V12.6666H8.66732V7.99998ZM12.0007 7.99998H13.334V12.6666H12.0007V7.99998ZM1.33398 4.66665L8.00065 1.33331L14.6673 4.66665V7.33331H1.33398V4.66665ZM2.66732 5.49065V5.99998H13.334V5.49065L8.00065 2.82398L2.66732 5.49065ZM8.00065 5.33331C7.82384 5.33331 7.65427 5.26308 7.52925 5.13805C7.40422 5.01303 7.33398 4.84346 7.33398 4.66665C7.33398 4.48984 7.40422 4.32027 7.52925 4.19524C7.65427 4.07022 7.82384 3.99998 8.00065 3.99998C8.17746 3.99998 8.34703 4.07022 8.47206 4.19524C8.59708 4.32027 8.66732 4.48984 8.66732 4.66665C8.66732 4.84346 8.59708 5.01303 8.47206 5.13805C8.34703 5.26308 8.17746 5.33331 8.00065 5.33331Z" fill="#353C4D"/>
                                                            </svg>
                                                            
                                                        <span class="mx-2">Bank Information</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="Track Your Order">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2.66602 10.0003V5.66699C2.66602 4.87134 2.98209 4.10828 3.5447 3.54567C4.1073 2.98306 4.87037 2.66699 5.66602 2.66699C6.46167 2.66699 7.22473 2.98306 7.78734 3.54567C8.34995 4.10828 8.66602 4.87134 8.66602 5.66699V10.3337C8.66602 10.7757 8.84161 11.1996 9.15417 11.5122C9.46673 11.8247 9.89066 12.0003 10.3327 12.0003C10.7747 12.0003 11.1986 11.8247 11.5112 11.5122C11.8238 11.1996 11.9993 10.7757 11.9993 10.3337V5.88699C11.5544 5.72972 11.1793 5.42019 10.9404 5.01312C10.7016 4.60605 10.6144 4.12764 10.6941 3.66247C10.7739 3.19729 11.0156 2.7753 11.3764 2.47108C11.7373 2.16686 12.194 2 12.666 2C13.138 2 13.5948 2.16686 13.9556 2.47108C14.3164 2.7753 14.5581 3.19729 14.6379 3.66247C14.7177 4.12764 14.6304 4.60605 14.3916 5.01312C14.1527 5.42019 13.7777 5.72972 13.3327 5.88699V10.3337C13.3327 11.1293 13.0166 11.8924 12.454 12.455C11.8914 13.0176 11.1283 13.3337 10.3327 13.3337C9.53703 13.3337 8.77397 13.0176 8.21136 12.455C7.64875 11.8924 7.33268 11.1293 7.33268 10.3337V5.66699C7.33268 5.22496 7.15709 4.80104 6.84453 4.48848C6.53197 4.17592 6.10804 4.00033 5.66602 4.00033C5.22399 4.00033 4.80007 4.17592 4.4875 4.48848C4.17494 4.80104 3.99935 5.22496 3.99935 5.66699V10.0003H5.99935L3.33268 13.3337L0.666016 10.0003H2.66602ZM12.666 4.66699C12.8428 4.66699 13.0124 4.59675 13.1374 4.47173C13.2624 4.34671 13.3327 4.17714 13.3327 4.00033C13.3327 3.82351 13.2624 3.65395 13.1374 3.52892C13.0124 3.4039 12.8428 3.33366 12.666 3.33366C12.4892 3.33366 12.3196 3.4039 12.1946 3.52892C12.0696 3.65395 11.9993 3.82351 11.9993 4.00033C11.9993 4.17714 12.0696 4.34671 12.1946 4.47173C12.3196 4.59675 12.4892 4.66699 12.666 4.66699Z" fill="#353C4D"/>
                                                            </svg>                                                            
                                                        <span class="mx-2">Track Your Order</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label=" FAQ’s ">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3.84265 11.3333H13.334V3.33333H2.66732V12.2567L3.84265 11.3333ZM4.30398 12.6667L1.33398 15V2.66667C1.33398 2.48986 1.40422 2.32029 1.52925 2.19526C1.65427 2.07024 1.82384 2 2.00065 2H14.0007C14.1775 2 14.347 2.07024 14.4721 2.19526C14.5971 2.32029 14.6673 2.48986 14.6673 2.66667V12C14.6673 12.1768 14.5971 12.3464 14.4721 12.4714C14.347 12.5964 14.1775 12.6667 14.0007 12.6667H4.30398ZM7.33398 9.33333H8.66732V10.6667H7.33398V9.33333ZM5.71198 5.87533C5.7986 5.44186 6.00653 5.0419 6.31158 4.72198C6.61663 4.40207 7.00626 4.17536 7.43512 4.06824C7.86399 3.96112 8.31446 3.97798 8.73411 4.11688C9.15376 4.25577 9.52535 4.51098 9.80562 4.85281C10.0859 5.19464 10.2633 5.60904 10.3173 6.04777C10.3712 6.48651 10.2995 6.93155 10.1104 7.3311C9.92131 7.73065 9.62264 8.0683 9.24914 8.30473C8.87565 8.54117 8.44269 8.66668 8.00065 8.66667H7.33398V7.33333H8.00065C8.19004 7.33332 8.37553 7.27953 8.53553 7.17822C8.69554 7.07691 8.82349 6.93224 8.9045 6.76106C8.9855 6.58987 9.01623 6.3992 8.99311 6.21123C8.96998 6.02326 8.89395 5.84572 8.77387 5.69927C8.65379 5.55283 8.49459 5.44349 8.3148 5.38398C8.135 5.32447 7.94201 5.31725 7.75827 5.36314C7.57453 5.40903 7.40759 5.50615 7.2769 5.64321C7.1462 5.78027 7.0571 5.95162 7.01998 6.13733L5.71198 5.87533Z" fill="#353C4D"/>
                                                            </svg>                                                            
                                                        <span class="mx-2"> FAQ’s </span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="How to Pick the Right Used Car">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.6673 13.3334H3.33398V14C3.33398 14.1768 3.26375 14.3464 3.13872 14.4714C3.0137 14.5964 2.84413 14.6667 2.66732 14.6667H2.00065C1.82384 14.6667 1.65427 14.5964 1.52925 14.4714C1.40422 14.3464 1.33398 14.1768 1.33398 14V7.33335L2.98732 3.47469C3.0902 3.23469 3.26129 3.03018 3.47935 2.88654C3.69742 2.7429 3.95286 2.66646 4.21398 2.66669H11.7873C12.0482 2.66672 12.3034 2.74329 12.5212 2.88691C12.739 3.03053 12.9099 3.2349 13.0127 3.47469L14.6673 7.33335V14C14.6673 14.1768 14.5971 14.3464 14.4721 14.4714C14.347 14.5964 14.1775 14.6667 14.0007 14.6667H13.334C13.1572 14.6667 12.9876 14.5964 12.8626 14.4714C12.7376 14.3464 12.6673 14.1768 12.6673 14V13.3334ZM13.334 8.66669H2.66732V12H13.334V8.66669ZM2.78465 7.33335H13.2167L11.788 4.00002H4.21398L2.78532 7.33335H2.78465ZM4.33398 11.3334C4.06877 11.3334 3.81441 11.228 3.62688 11.0405C3.43934 10.8529 3.33398 10.5986 3.33398 10.3334C3.33398 10.0681 3.43934 9.81378 3.62688 9.62625C3.81441 9.43871 4.06877 9.33335 4.33398 9.33335C4.5992 9.33335 4.85355 9.43871 5.04109 9.62625C5.22863 9.81378 5.33398 10.0681 5.33398 10.3334C5.33398 10.5986 5.22863 10.8529 5.04109 11.0405C4.85355 11.228 4.5992 11.3334 4.33398 11.3334ZM11.6673 11.3334C11.4021 11.3334 11.1477 11.228 10.9602 11.0405C10.7727 10.8529 10.6673 10.5986 10.6673 10.3334C10.6673 10.0681 10.7727 9.81378 10.9602 9.62625C11.1477 9.43871 11.4021 9.33335 11.6673 9.33335C11.9325 9.33335 12.1869 9.43871 12.3744 9.62625C12.562 9.81378 12.6673 10.0681 12.6673 10.3334C12.6673 10.5986 12.562 10.8529 12.3744 11.0405C12.1869 11.228 11.9325 11.3334 11.6673 11.3334Z" fill="#353C4D"/>
                                                            </svg>                                                            
                                                        <span class="mx-2">How to Pick the Right Used Car</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#" aria-label="Buying Vehicles Safely Guide">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8 0.666687L13.478 1.88402C13.626 1.91693 13.7584 1.99933 13.8533 2.11762C13.9482 2.23592 14 2.38303 14 2.53469V9.19269C14 9.85118 13.8373 10.4995 13.5266 11.08C13.2158 11.6606 12.7666 12.1554 12.2187 12.5207L8 15.3334L3.78133 12.5207C3.23352 12.1555 2.78431 11.6608 2.47357 11.0803C2.16282 10.4999 2.00016 9.85173 2 9.19335V2.53469C2.00003 2.38303 2.05176 2.23592 2.14666 2.11762C2.24156 1.99933 2.37396 1.91693 2.522 1.88402L8 0.666687ZM8 2.03269L3.33333 3.06935V9.19269C3.33334 9.63166 3.44172 10.0638 3.64884 10.4509C3.85597 10.8379 4.15543 11.1678 4.52067 11.4114L8 13.7314L11.4793 11.4114C11.8445 11.1679 12.1439 10.8381 12.351 10.4512C12.5581 10.0643 12.6665 9.63221 12.6667 9.19335V3.06935L8 2.03335V2.03269ZM8 4.66669C8.29356 4.66655 8.57896 4.7633 8.81192 4.94193C9.04487 5.12055 9.21237 5.37107 9.28842 5.6546C9.36447 5.93814 9.34482 6.23885 9.23252 6.51008C9.12023 6.78131 8.92156 7.00789 8.66733 7.15469L8.66667 10H7.33333V7.15469C7.07916 7.00792 6.88052 6.78139 6.76821 6.51023C6.65589 6.23907 6.63619 5.93842 6.71216 5.65492C6.78812 5.37142 6.95551 5.12091 7.18836 4.94223C7.4212 4.76356 7.7065 4.6667 8 4.66669Z" fill="#353C4D"/>
                                                            </svg>                                                            
                                                        <span class="mx-2">Buying Vehicles Safely Guide</span>
                                                    </a>
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

<div class="modal fade" id="ship_to_country_selection" tabindex="-1" aria-labelledby="ship_to_country_selectionLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-body position-relative">
          <div class="title-ship-to title-ship-to d-flex align-items-center justify-content-between">
            <span></span>
            <h2 class="title text-center py-3">Select Your Country</h2>
            <span class="btn-close cursor-pointer" data-bs-dismiss="modal"></span>
          </div>
          <!-- search -->
          <div class="search_items_input">
            <input placeholder="Search Country" id="countrySearch">
            <img src="/assets/images/header-images/search-icon.webp" loading="lazy" height="20" width="20" style="filter: invert(1) brightness(0.5);"/>
          </div>
          <!-- country listing -->
          <div class="country-listings">
            <label for="pak" class="country-item">
              <div class="flag-item">
                <img src="/assets/images/country-flags/PK.webp" loading="lazy" width="26" height="26" alt="sat flag">
                <span>Pakistan</span>
              </div>
              <input type="radio" name="countries" id="pak" hidden>
            </label>
            <label for="America" class="country-item">
              <div class="flag-item">
                <img src="/assets/images/country-flags/US.webp" loading="lazy" width="26" height="26" alt="sat flag">
                <span>America</span>
              </div>
              <input type="radio" name="countries" id="America" hidden>
            </label>
            <label for="Australia" class="country-item">
              <div class="flag-item">
                <img src="/assets/images/country-flags/AU.webp" loading="lazy" width="26" height="26" alt="sat flag">
                <span>Australia</span>
              </div>
              <input type="radio" name="countries" id="Australia" hidden>
            </label>
          </div>
           {{-- <div class="save-btn-div">
            <button class="save-country-btn">Save</button>
           </div> --}}
        </div>
      </div>
    </div>
  </div>

{{-- ====================== Table view ==================--}}
<section class="tablet-view" aria-labelledby="tablet-header">
	<header>
		<div class="headerSearch pb-3">
			<div class="container">
				<div class="row align-items-center my-3 pt-2">
					<div class="col-auto d-flex align-items-center p-0">
						<!-- Main Offcanvas -->
						<button class="btn btn-offcanvas" type="button" data-bs-toggle="offcanvas" data-bs-target="#mainOffcanvasTablet" aria-controls="mainOffcanvasTablet"> <img src="{{asset('assets/images/header-images/menu-bars.webp')}}" class="img-fluid" loading="lazy" width="24" height="24" alt="Menu"> </button>
						<div class="offcanvas offcanvas-start" tabindex="-1" id="mainOffcanvasTablet" aria-labelledby="mainOffcanvasLabelTablet">
							<div class="offcanvas-header position-relative">
								<h5 id="mainOffcanvasLabelTablet" class="tablet-offcanvas-heading position-absolute">Menu</h5>
								<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
							</div>
							<div class="offcanvas-body">
								<div class="tablet-main-offcanvas">
									<div class="d-flex align-items-center justify-content-between mb-3 position-relative">
										<a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasTablet" aria-controls="nestedOffcanvasTablet">
											<div class="d-flex align-items-center"> <img src="{{asset('assets/images/icons/mobile-find-your-car.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
												<p class="mb-0 ms-2 pt-1">Find Your Car</p>
											</div>
											<div class="ms-2 position-absolute end-0"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </div>
										</a>
									</div>
									<div class="d-flex align-items-center justify-content-between mb-3 position-relative">
										<a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasLocalPagesTablet" aria-controls="nestedOffcanvasLocalPagesTablet">
											<div class="d-flex align-items-center"> <img src="{{asset('assets/images/icons/mobile-local-pages-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
												<p class="mb-0 ms-2 pt-1">Local Pages</p>
											</div>
											<div class="ms-2 position-absolute end-0"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </div>
										</a>
									</div>
									<div class="d-flex align-items-center justify-content-between mb-3 position-relative">
										<a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasCarServicesTablet" aria-controls="nestedOffcanvasCarServicesTablet">
											<div class="d-flex align-items-center"> <img src="{{asset('assets/images/icons/mobile-car-service-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
												<p class="mb-0 ms-2 pt-1">Car Services</p>
											</div>
											<div class="ms-2 position-absolute end-0"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </div>
										</a>
									</div>
									<div class="d-flex align-items-center justify-content-between mb-3 position-relative">
										<a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasCompanyOverviewTablet" aria-controls="nestedOffcanvasCompanyOverviewTablet">
											<div class="d-flex align-items-center"> <img src="{{asset('assets/images/icons/mobile-company-over-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
												<p class="mb-0 ms-2 pt-1">Company Overview</p>
											</div>
											<div class="ms-2 position-absolute end-0"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </div>
										</a>
									</div>
									<div class="d-flex align-items-center justify-content-between mb-3 position-relative">
										<a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasReviewsTablet" aria-controls="nestedOffcanvasReviewsTablet">
											<div class="d-flex align-items-center"> <img src="{{asset('assets/images/icons/mobile-review-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
												<p class="mb-0 ms-2 pt-1">Reviews</p>
											</div>
											<div class="ms-2 position-absolute end-0"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </div>
										</a>
									</div>
									<div class="d-flex align-items-center justify-content-between mb-3 position-relative">
										<a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasHelpTablet" aria-controls="nestedOffcanvasHelpTablet">
											<div class="d-flex align-items-center"> <img src="{{asset('assets/images/icons/mobile-help-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
												<p class="mb-0 ms-2 pt-1">Help</p>
											</div>
											<div class="ms-2 position-absolute end-0"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </div>
										</a>
									</div>
									<div class="d-flex align-items-center justify-content-between mb-3 position-relative">
										<a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasSettingsTablet" aria-controls="nestedOffcanvasSettingsTablet">
											<div class="d-flex align-items-center"> <img src="{{asset('assets/images/icons/mobile-setting-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
												<p class="mb-0 ms-2 pt-1">Settings</p>
											</div>
											<div class="ms-2 position-absolute end-0"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Nested Offcanvas: Find Your Car Offcanvas Tablet -->
						<div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasTablet" aria-labelledby="nestedOffcanvasLabelTablet">
							<div class="offcanvas-header">
								<div class="position-relative" id="nestedOffcanvasLabelTablet" data-bs-toggle="offcanvas" data-bs-target="#mainOffcanvasTablet" aria-controls="mainOffcanvasTablet"> <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy"> <span class="tablet-find-car-nested position-absolute text-nowrap">Find Your Car</span> </div>
								<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
							</div>
							<div class="offcanvas-body">
								<div class="tablet-main-offcanvas"> {{-- Explore By Stock Tablet --}}
									<div class="d-flex align-items-center justify-content-between mb-3 position-relative">
										<a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvas1Tablet" aria-controls="nestedOffcanvas1Tablet">
											<div class="d-flex align-items-center"> <img src="{{asset('assets/images/icons/mobile-explore-stock-icon.webp')}}" alt="Explore Stock" class="img-fluid" loading="lazy" width="20" height="20">
												<p class="mb-0 ms-2 pt-1">Explore Stock</p>
											</div>
											<div class="ms-2 position-absolute end-0"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </div>
										</a>
									</div> {{-- Explore By Price Tablet --}}
									<div class="d-flex align-items-center justify-content-between mb-3 position-relative">
										<a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasExploreByPriceTablet" aria-controls="nestedOffcanvasExploreByPriceTablet">
											<div class="d-flex align-items-center"> <img src="{{asset('assets/images/icons/mobile-explore-price-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
												<p class="mb-0 ms-2 pt-1">Explore By Price</p>
											</div>
											<div class="ms-2 position-absolute end-0"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </div>
										</a>
									</div> {{-- Explore By Make Tablet --}}
									<div class="d-flex align-items-center justify-content-between mb-3 position-relative">
										<a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasExploreByMakeTablet" aria-controls="nestedOffcanvasExploreByMakeTablet">
											<div class="d-flex align-items-center"> <img src="{{asset('assets/images/icons/mobile-explore-make-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
												<p class="mb-0 ms-2 pt-1">Explore By Make</p>
											</div>
											<div class="ms-2 position-absolute end-0"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </div>
										</a>
									</div> {{-- Explore By Type Tablet --}}
									<div class="d-flex align-items-center justify-content-between mb-3 position-relative">
										<a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasExploreByTypeTablet" aria-controls="nestedOffcanvasExploreByTypeTablet">
											<div class="d-flex align-items-center"> <img src="{{asset('assets/images/icons/mobile-explore-type-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
												<p class="mb-0 ms-2 pt-1">Explore By Type</p>
											</div>
											<div class="ms-2 position-absolute end-0"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </div>
										</a>
									</div> {{-- Explore By Year Tablet --}}
									<div class="d-flex align-items-center justify-content-between mb-3 position-relative">
										<a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasExploreByYearTablet" aria-controls="nestedOffcanvasExploreByYearTablet">
											<div class="d-flex align-items-center"> <img src="{{asset('assets/images/icons/mobile-explore-year-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
												<p class="mb-0 ms-2 pt-1">Explore By Year</p>
											</div>
											<div class="ms-2 position-absolute end-0"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </div>
										</a>
									</div> {{-- Explore By Discount Tablet --}}
									<div class="d-flex align-items-center justify-content-between mb-3 position-relative">
										<a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasExploreByDiscountTablet" aria-controls="nestedOffcanvasExploreByDiscountTablet">
											<div class="d-flex align-items-center"> <img src="{{asset('assets/images/icons/mobile-explore-discount-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
												<p class="mb-0 ms-2 pt-1">Explore By Discount</p>
											</div>
											<div class="ms-2 position-absolute end-0"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </div>
										</a>
									</div> {{-- Explore By Inventory Location Tablet --}}
									<div class="d-flex align-items-center justify-content-between mb-3 position-relative">
										<a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasExploreByInventoryLocationTablet" aria-controls="nestedOffcanvasExploreByInventoryLocationTablet">
											<div class="d-flex align-items-center"> <img src="{{asset('assets/images/icons/mobile-inventory-location-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
												<p class="mb-0 ms-2 pt-1">Inventory Location</p>
											</div>
											<div class="ms-2 position-absolute end-0"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </div>
										</a>
									</div> {{-- Explore By Other Categories Tablet --}}
									<div class="d-flex align-items-center justify-content-between mb-3 position-relative">
										<a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasExploreByOtherCategoriesTablet" aria-controls="nestedOffcanvasExploreByOtherCategoriesTablet">
											<div class="d-flex align-items-center"> <img src="{{asset('assets/images/icons/other-catego.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
												<p class="mb-0 ms-2 pt-1">Other Categories</p>
											</div>
											<div class="ms-2 position-absolute end-0"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </div>
										</a>
									</div>
								</div>
							</div>
						</div> 
                        {{-- Local Pages Tablet --}}
						<div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasLocalPagesTablet" aria-labelledby="nestedOffcanvasLabelLocalPagesTablet">
							<div class="offcanvas-header">
								<div class="position-relative" id="nestedOffcanvasLabelLocalPagesTablet" data-bs-toggle="offcanvas" data-bs-target="#mainOffcanvasTablet" aria-controls="mainOffcanvasTablet"> <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy"> <span class="tablet-find-car-nested position-absolute text-nowrap">Local Pages</span> </div>
								<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
							</div>
							<div class="offcanvas-body">
								<div class="tablet-main-offcanvas">
									<div class="tablet-countries-area d-grid">
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/PK.webp')}}" alt="Pakistan" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Pakistan</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/AG.webp')}}" alt="Antigua" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Antigua</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/AI.webp')}}" alt="Anguilla" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Anguilla</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/Am.webp')}}" alt="Armenia" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Armenia</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/AU.webp')}}" alt="Australia" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Australia</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/AZ.webp')}}" alt="Azerbaijan" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Azerbaijan</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/BS.webp')}}" alt="Bahamas" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Bahamas</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/BD.webp')}}" alt="Bangladesh" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Bangladesh</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/BW.webp')}}" alt="Botswana" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Botswana</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/CY.webp')}}" alt="Cyprus" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Cyprus</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/GT.webp')}}" alt="Guatemala" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Guatemala</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/KG.webp')}}" alt="Kyrgyzstan" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Kyrgyzstan</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/MZ.webp')}}" alt="Mozambique" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Mozambique</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/PY.webp')}}" alt="Paraguay" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Paraguay</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/SB.webp')}}" alt="Solomon Islands" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Solomon Islands</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/TZ.webp')}}" alt="Tanzania" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Tanzania</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/ZM.webp')}}" alt="Zambia" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Zambia</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/AU.webp')}}" alt="Australia" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Australia</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/BI.webp')}}" alt="Burundi" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Burundi</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/DO.webp')}}" alt="Dominican Republic" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Dominican Republic</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/GY.webp')}}" alt="Guyana" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Guyana</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/LS.webp')}}" alt="Lesotho" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Lesotho</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/NA.webp')}}" alt="Namibia" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Namibia</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/CD.webp')}}" alt="DR Congo" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">DR Congo</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/SO.webp')}}" alt="Somalia" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Somalia</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/TO.webp')}}" alt="Tonga" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Tonga</span> </a>
										<a href="javascript:;" class="pb-3"> <img src="{{asset('assets/images/country-flags/ZW.webp')}}" alt="Zimbabwe" class="img-fluid" loading="lazy" width="32" height="21.3"> <span class="mx-2">Zimbabwe</span> </a>
									</div>
								</div>
							</div>
						</div> {{-- Car Services Pages Tablet --}}
						<div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasCarServicesTablet" aria-labelledby="nestedOffcanvasLabelCarServicesTablet">
							<div class="offcanvas-header">
								<div class="position-relative" id="nestedOffcanvasLabelCarServicesTablet" data-bs-toggle="offcanvas" data-bs-target="#mainOffcanvasTablet" aria-controls="mainOffcanvasTablet"> <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy"> <span class="tablet-find-car-nested position-absolute text-nowrap">Car Services</span> </div>
								<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
							</div>
							<div class="offcanvas-body">
								<div class="tablet-main-offcanvas d-grid">
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.00033 2.66669H9.63099C9.74406 2.66669 9.85527 2.69545 9.95417 2.75026C10.0531 2.80507 10.1364 2.88414 10.1963 2.98002L12.5003 6.66669H15.439C15.4969 6.66665 15.5538 6.68168 15.6041 6.7103C15.6544 6.73893 15.6964 6.78016 15.7259 6.82995C15.7555 6.87973 15.7715 6.93635 15.7725 6.99422C15.7735 7.0521 15.7594 7.10924 15.7317 7.16002L13.0917 12H12.667C12.3216 12.0003 11.9777 11.9559 11.6437 11.868L13.7537 8.00002H2.26699L2.96566 11.8827C2.64983 11.9608 2.32567 12.0002 2.00033 12H1.63699L0.810326 7.45269C0.792864 7.35671 0.796677 7.25807 0.821497 7.16373C0.846317 7.06939 0.891538 6.98165 0.95397 6.90669C1.0164 6.83174 1.09452 6.77139 1.18282 6.72992C1.27112 6.68845 1.36744 6.66687 1.46499 6.66669H2.00033V3.33335C2.00033 3.15654 2.07056 2.98697 2.19559 2.86195C2.32061 2.73693 2.49018 2.66669 2.66699 2.66669H3.33366V0.666687H6.00033V2.66669ZM3.33366 6.66669H10.9283L9.26166 4.00002H3.33366V6.66669ZM2.00033 13.3334C2.9845 13.3347 3.93438 12.9719 4.66699 12.3147C5.39961 12.9719 6.34948 13.3347 7.33366 13.3334C8.31783 13.3347 9.26771 12.9719 10.0003 12.3147C10.7329 12.9719 11.6828 13.3347 12.667 13.3334H14.0003V14.6667H12.667C11.7308 14.6682 10.8108 14.4221 10.0003 13.9534C9.18989 14.4221 8.2699 14.6682 7.33366 14.6667C6.39742 14.6682 5.47743 14.4221 4.66699 13.9534C3.85656 14.4221 2.93656 14.6682 2.00033 14.6667H0.666992V13.3334H2.00033Z" fill="#2384C1"></path>
                                            </svg> 
                                        <span class="mx-2">Shipping Schedule</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0.666687L13.478 1.88402C13.7827 1.95202 14 2.22202 14 2.53469V9.19269C14 10.53 13.3313 11.7794 12.2187 12.5207L8 15.3334L3.78133 12.5207C2.668 11.7787 2 10.53 2 9.19335V2.53469C2 2.22202 2.21733 1.95202 2.522 1.88402L8 0.666687ZM8 2.03269L3.33333 3.06935V9.19269C3.33333 10.084 3.77867 10.9167 4.52067 11.4114L8 13.7314L11.4793 11.4114C12.2213 10.9167 12.6667 10.0847 12.6667 9.19335V3.06935L8 2.03335V2.03269ZM10.968 5.48135L11.9113 6.42402L7.66867 10.6667L4.84 7.83802L5.78267 6.89535L7.668 8.78069L10.968 5.48069V5.48135Z" fill="#2384C1"></path>
                                            </svg>
                                        <span class="mx-2">Insurance Service</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.0003 12.3333H15.3337V13.6666H0.666992V12.3333H2.00033V0.99998C2.00033 0.823169 2.07056 0.653599 2.19559 0.528575C2.32061 0.403551 2.49018 0.333313 2.66699 0.333313H13.3337C13.5105 0.333313 13.68 0.403551 13.8051 0.528575C13.9301 0.653599 14.0003 0.823169 14.0003 0.99998V12.3333ZM12.667 12.3333V1.66665H3.33366V12.3333H12.667ZM5.33366 6.33331H7.33366V7.66665H5.33366V6.33331ZM5.33366 3.66665H7.33366V4.99998H5.33366V3.66665ZM5.33366 8.99998H7.33366V10.3333H5.33366V8.99998ZM8.66699 8.99998H10.667V10.3333H8.66699V8.99998ZM8.66699 6.33331H10.667V7.66665H8.66699V6.33331ZM8.66699 3.66665H10.667V4.99998H8.66699V3.66665Z" fill="#2384C1"></path>
                                            </svg>
                                        <span class="mx-2">Storage Service</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.99967 14.6666C4.31767 14.6666 1.33301 11.682 1.33301 7.99998C1.33301 4.31798 4.31767 1.33331 7.99967 1.33331C11.6817 1.33331 14.6663 4.31798 14.6663 7.99998C14.6663 11.682 11.6817 14.6666 7.99967 14.6666ZM7.99967 13.3333C9.41416 13.3333 10.7707 12.7714 11.7709 11.7712C12.7711 10.771 13.333 9.41447 13.333 7.99998C13.333 6.58549 12.7711 5.22894 11.7709 4.22874C10.7707 3.22855 9.41416 2.66665 7.99967 2.66665C6.58519 2.66665 5.22863 3.22855 4.22844 4.22874C3.22824 5.22894 2.66634 6.58549 2.66634 7.99998C2.66634 9.41447 3.22824 10.771 4.22844 11.7712C5.22863 12.7714 6.58519 13.3333 7.99967 13.3333ZM5.66634 9.33331H9.33301C9.42141 9.33331 9.5062 9.29819 9.56871 9.23568C9.63122 9.17317 9.66634 9.08839 9.66634 8.99998C9.66634 8.91157 9.63122 8.82679 9.56871 8.76428C9.5062 8.70177 9.42141 8.66665 9.33301 8.66665H6.66634C6.22431 8.66665 5.80039 8.49105 5.48783 8.17849C5.17527 7.86593 4.99967 7.44201 4.99967 6.99998C4.99967 6.55795 5.17527 6.13403 5.48783 5.82147C5.80039 5.50891 6.22431 5.33331 6.66634 5.33331H7.33301V3.99998H8.66634V5.33331H10.333V6.66665H6.66634C6.57794 6.66665 6.49315 6.70177 6.43064 6.76428C6.36813 6.82679 6.33301 6.91157 6.33301 6.99998C6.33301 7.08839 6.36813 7.17317 6.43064 7.23568C6.49315 7.29819 6.57794 7.33331 6.66634 7.33331H9.33301C9.77504 7.33331 10.199 7.50891 10.5115 7.82147C10.8241 8.13403 10.9997 8.55795 10.9997 8.99998C10.9997 9.44201 10.8241 9.86593 10.5115 10.1785C10.199 10.4911 9.77504 10.6666 9.33301 10.6666H8.66634V12H7.33301V10.6666H5.66634V9.33331Z" fill="#2384C1"></path>
                                            </svg>
                                        <span class="mx-2">Finance Service</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.44281 5.48637C6.36079 5.42231 6.25968 5.38753 6.15562 5.38753H1.77201V4.00697C1.77201 3.4985 2.18576 3.08475 2.69423 3.08475H7.00862L14.2276 8.59886V11.5644L6.44281 5.48637ZM6.44281 5.48637L6.41203 5.52578M6.44281 5.48637L6.4428 5.48637L6.41203 5.52578M6.41203 5.52578C6.33881 5.46858 6.24853 5.43753 6.15562 5.43753H1.77201L6.41203 5.52578ZM14.6948 12.9875H14.6948C14.9516 12.9872 15.1609 12.7782 15.1609 12.5209V8.36808C15.1609 8.22264 15.0931 8.0855 14.9775 7.99723L7.44972 2.24724C7.44972 2.24724 7.44972 2.24724 7.44972 2.24724C7.36836 2.18508 7.26883 2.15142 7.16645 2.15142H2.69423C1.67103 2.15142 0.838672 2.98377 0.838672 4.00697V5.85419C0.838672 6.11192 1.04761 6.32086 1.30534 6.32086H5.99502L11.2036 10.3875H6.82756V7.52086C6.82756 7.26313 6.61862 7.05419 6.36089 7.05419H3.80534C2.16947 7.05419 0.838672 8.385 0.838672 10.0209V12.5209C0.838672 12.7786 1.04761 12.9875 1.30534 12.9875H2.61393C2.79877 13.4894 3.28144 13.8486 3.84701 13.8486C4.41257 13.8486 4.89524 13.4894 5.08008 12.9875H9.2806C9.46544 13.4894 9.94811 13.8486 10.5137 13.8486C11.0792 13.8486 11.5619 13.4894 11.7467 12.9875L14.6948 12.9875ZM11.7365 12.0542C11.6059 11.7231 11.3446 11.4573 11.0165 11.3209H12.399L13.3382 12.0542H11.7365ZM9.29087 12.0542H6.82756V11.3209H10.0109C9.6827 11.4573 9.42141 11.7231 9.29087 12.0542ZM3.80534 7.98753H4.22756V9.55419H1.8261C2.03757 8.65717 2.84482 7.98753 3.80534 7.98753ZM1.77201 10.4875H4.69423C4.95195 10.4875 5.16089 10.2786 5.16089 10.0209V7.98753H5.89423V12.0542H5.06981C4.87763 11.5668 4.40211 11.2209 3.84701 11.2209C3.2919 11.2209 2.81638 11.5668 2.62421 12.0542H1.77201V10.4875ZM3.84701 12.9153C3.6372 12.9153 3.46645 12.7446 3.46645 12.5347C3.46645 12.3249 3.6372 12.1542 3.84701 12.1542C4.05681 12.1542 4.22756 12.3249 4.22756 12.5347C4.22756 12.7446 4.05681 12.9153 3.84701 12.9153ZM10.5137 12.9153C10.3039 12.9153 10.1331 12.7446 10.1331 12.5347C10.1331 12.3249 10.3039 12.1542 10.5137 12.1542C10.7235 12.1542 10.8942 12.3249 10.8942 12.5347C10.8942 12.7446 10.7235 12.9153 10.5137 12.9153Z" fill="#2384C1" stroke="#2384C1" stroke-width="0.1"></path>
                                            </svg>
                                        <span class="mx-2"> Car Carrier Service </span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.33333 5.33331V13.3333H12.6667V5.33331H3.33333ZM3.33333 3.99998H12.6667V2.66665H3.33333V3.99998ZM13.3333 14.6666H2.66667C2.48986 14.6666 2.32029 14.5964 2.19526 14.4714C2.07024 14.3464 2 14.1768 2 14V1.99998C2 1.82317 2.07024 1.6536 2.19526 1.52858C2.32029 1.40355 2.48986 1.33331 2.66667 1.33331H13.3333C13.5101 1.33331 13.6797 1.40355 13.8047 1.52858C13.9298 1.6536 14 1.82317 14 1.99998V14C14 14.1768 13.9298 14.3464 13.8047 14.4714C13.6797 14.5964 13.5101 14.6666 13.3333 14.6666ZM4.66667 6.66665H7.33333V9.33331H4.66667V6.66665ZM4.66667 10.6666H11.3333V12H4.66667V10.6666ZM8.66667 7.33331H11.3333V8.66665H8.66667V7.33331Z" fill="#2384C1"></path>
                                            </svg>
                                        <span class="mx-2">Custom Clearance</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.33301 13.333V14.6664H1.33301V13.333H9.33301ZM9.72367 0.457031L14.909 5.64236L13.9663 6.58636L13.2597 6.35036L11.6083 7.9997L15.3797 11.771L14.437 12.7137L10.6663 8.94236L9.06367 10.545L9.25234 11.2997L8.30901 12.2424L3.12367 7.05703L4.06701 6.11436L4.82034 6.30236L9.01634 2.10703L8.78101 1.40036L9.72367 0.457031ZM10.195 2.81436L5.48101 7.5277L7.83767 9.88503L12.5517 5.1717L10.195 2.81436Z" fill="#2384C1"></path>
                                            </svg>
                                        <span class="mx-2">Auction Service</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.33333 3.06935V9.19269C3.33334 9.63166 3.44172 10.0638 3.64884 10.4509C3.85597 10.8379 4.15543 11.1678 4.52067 11.4114L8 13.7314L11.4793 11.4114C11.8445 11.1679 12.1439 10.8381 12.351 10.4512C12.5581 10.0643 12.6665 9.63221 12.6667 9.19335V3.06935L8 2.03335L3.33333 3.06935ZM2.522 1.88402L8 0.666687L13.478 1.88402C13.626 1.91693 13.7584 1.99933 13.8533 2.11762C13.9482 2.23592 14 2.38303 14 2.53469V9.19269C14 9.85118 13.8373 10.4995 13.5266 11.08C13.2158 11.6606 12.7666 12.1554 12.2187 12.5207L8 15.3334L3.78133 12.5207C3.23352 12.1555 2.78431 11.6608 2.47357 11.0803C2.16282 10.4999 2.00016 9.85173 2 9.19335V2.53469C2.00003 2.38303 2.05176 2.23592 2.14666 2.11762C2.24156 1.99933 2.37396 1.91693 2.522 1.88402ZM8 9.00002L6.04067 10.03L6.41467 7.84869L4.83 6.30335L7.02067 5.98469L8 4.00002L8.98 5.98469L11.17 6.30335L9.58533 7.84869L9.95867 10.03L8 9.00002Z" fill="#2384C1"></path>
                                                </svg>
                                        <span class="mx-2">Security Export</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.6663 13.3333H3.33301V14C3.33301 14.1768 3.26277 14.3463 3.13775 14.4714C3.01272 14.5964 2.84315 14.6666 2.66634 14.6666H1.99967C1.82286 14.6666 1.65329 14.5964 1.52827 14.4714C1.40325 14.3463 1.33301 14.1768 1.33301 14V7.33329L2.98634 3.47463C3.08922 3.23463 3.26031 3.03012 3.47838 2.88648C3.69644 2.74284 3.95189 2.66639 4.21301 2.66663H11.7863C12.0472 2.66666 12.3024 2.74322 12.5202 2.88685C12.738 3.03047 12.9089 3.23484 13.0117 3.47463L14.6663 7.33329V14C14.6663 14.1768 14.5961 14.3463 14.4711 14.4714C14.3461 14.5964 14.1765 14.6666 13.9997 14.6666H13.333C13.1562 14.6666 12.9866 14.5964 12.8616 14.4714C12.7366 14.3463 12.6663 14.1768 12.6663 14V13.3333ZM13.333 8.66663H2.66634V12H13.333V8.66663ZM2.78367 7.33329H13.2157L11.787 3.99996H4.21301L2.78434 7.33329H2.78367ZM4.33301 11.3333C4.06779 11.3333 3.81344 11.2279 3.6259 11.0404C3.43836 10.8529 3.33301 10.5985 3.33301 10.3333C3.33301 10.0681 3.43836 9.81372 3.6259 9.62619C3.81344 9.43865 4.06779 9.33329 4.33301 9.33329C4.59822 9.33329 4.85258 9.43865 5.04011 9.62619C5.22765 9.81372 5.33301 10.0681 5.33301 10.3333C5.33301 10.5985 5.22765 10.8529 5.04011 11.0404C4.85258 11.2279 4.59822 11.3333 4.33301 11.3333ZM11.6663 11.3333C11.4011 11.3333 11.1468 11.2279 10.9592 11.0404C10.7717 10.8529 10.6663 10.5985 10.6663 10.3333C10.6663 10.0681 10.7717 9.81372 10.9592 9.62619C11.1468 9.43865 11.4011 9.33329 11.6663 9.33329C11.9316 9.33329 12.1859 9.43865 12.3734 9.62619C12.561 9.81372 12.6663 10.0681 12.6663 10.3333C12.6663 10.5985 12.561 10.8529 12.3734 11.0404C12.1859 11.2279 11.9316 11.3333 11.6663 11.3333Z" fill="#2384C1"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.34733 4.95689L5.31368 4.66663L5.18687 4.68133L5.22817 5.0376L5.4891 5.1786L5.63289 5.47002C5.60707 5.47618 5.58314 5.48771 5.56234 5.5062C5.5296 5.53531 5.51223 5.57501 5.50206 5.61565C5.48966 5.66526 5.48532 5.7288 5.48381 5.80266L5.34143 5.79521L5.09775 6.22485L4.24512 6.59682L4.29616 6.71383L5.1878 6.32484L5.41355 5.92682L5.483 5.93045C5.483 5.93043 5.483 5.93047 5.483 5.93045C5.483 5.93361 5.483 5.93684 5.483 5.94002C5.483 5.98876 5.49881 6.032 5.53211 6.06435C5.56383 6.09518 5.60528 6.11014 5.64606 6.11672C5.70891 6.12686 5.78437 6.11933 5.86063 6.10292L5.88081 6.27703L6.14175 6.41802L6.43856 7.01956L6.55304 6.96307L6.23823 6.32505L5.99997 6.19631L5.98523 6.0692C6.06417 6.04388 6.14295 6.01167 6.21186 5.97809C6.29671 5.93676 6.37344 5.89008 6.41566 5.84787C6.46273 5.8008 6.46931 5.74179 6.45489 5.68831C6.45084 5.67329 6.44513 5.65844 6.43816 5.64388L6.871 5.42747L7.07564 5.01819H7.46172V4.89053H6.99674L6.77585 5.33231L6.36516 5.53766C6.29547 5.45799 6.20028 5.38381 6.13226 5.33837C6.0866 5.30604 6.03367 5.31514 5.99736 5.32673C5.95885 5.33902 5.91751 5.36112 5.88038 5.38157C5.87421 5.38496 5.86811 5.38834 5.86207 5.39169C5.8296 5.40967 5.79889 5.42667 5.76876 5.44027C5.76648 5.44129 5.76424 5.44228 5.76204 5.44324L5.58558 5.08563L5.34733 4.95689ZM5.69299 5.59181L5.78591 5.78014L5.9004 5.72365L5.81858 5.55783C5.81947 5.55744 5.82035 5.55704 5.82124 5.55664C5.85661 5.54069 5.89268 5.52069 5.92499 5.50278C5.93078 5.49957 5.93644 5.49643 5.94195 5.4934C5.98051 5.47217 6.01134 5.45627 6.03619 5.44834C6.05107 5.44359 6.05797 5.44356 6.06022 5.44378C6.11575 5.4808 6.18902 5.53756 6.24638 5.59705L5.94381 5.74833L6.00091 5.86251L6.32396 5.70098C6.32738 5.70835 6.32993 5.71522 6.33163 5.72153C6.33695 5.74127 6.33323 5.74976 6.32539 5.7576C6.29896 5.78403 6.23841 5.82316 6.15595 5.86333C6.09897 5.89109 6.03479 5.91778 5.97022 5.93972L5.96632 5.90605L5.83951 5.92075L5.84585 5.97543C5.77291 5.99208 5.71038 5.99778 5.66639 5.99069C5.64067 5.98654 5.62743 5.97898 5.62108 5.9728C5.6163 5.96816 5.61066 5.95992 5.61066 5.94002C5.61066 5.93905 5.61066 5.93809 5.61066 5.93713L5.7991 5.94699L5.80578 5.81951L5.61142 5.80934C5.61273 5.73804 5.61629 5.6851 5.62591 5.64661C5.63291 5.61861 5.64128 5.60683 5.64715 5.60162C5.65173 5.59755 5.66081 5.592 5.68411 5.592C5.68707 5.592 5.69003 5.59194 5.69299 5.59181Z" fill="#2F2B43"></path>
                                            </svg>
                                        <span class="mx-2">Pre Export Inspection</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.66634 6.93329V2.66663C2.66634 2.48981 2.73658 2.32025 2.8616 2.19522C2.98663 2.0702 3.1562 1.99996 3.33301 1.99996H6.66634V0.666626H9.33301V1.99996H12.6663C12.8432 1.99996 13.0127 2.0702 13.1377 2.19522C13.2628 2.32025 13.333 2.48981 13.333 2.66663V6.93329L14.057 7.15063C14.2211 7.2 14.3598 7.31065 14.4445 7.45961C14.5292 7.60857 14.5532 7.7844 14.5117 7.95063L13.501 11.996C13.0706 12.0182 12.6399 11.9566 12.233 11.8146L13.0663 8.24663L7.99967 6.66663L2.93301 8.24663L3.76634 11.814C3.35945 11.9562 2.92881 12.018 2.49834 11.996L1.48767 7.95063C1.44614 7.7844 1.4702 7.60857 1.55486 7.45961C1.63951 7.31065 1.77827 7.2 1.94234 7.15063L2.66634 6.93329ZM3.99967 6.53329L7.99967 5.33329L11.9997 6.53329V3.33329H3.99967V6.53329ZM2.66634 13.3333C3.65052 13.3347 4.60039 12.9718 5.33301 12.3146C6.06562 12.9718 7.0155 13.3347 7.99967 13.3333C8.98385 13.3347 9.93372 12.9718 10.6663 12.3146C11.399 12.9718 12.3488 13.3347 13.333 13.3333H14.6663V14.6666H13.333C12.3968 14.6682 11.4768 14.4221 10.6663 13.9533C9.85591 14.4221 8.93591 14.6682 7.99967 14.6666C7.06344 14.6682 6.14344 14.4221 5.33301 13.9533C4.52257 14.4221 3.60258 14.6682 2.66634 14.6666H1.33301V13.3333H2.66634Z" fill="#2384C1"></path>
                                            </svg>                                            
                                        <span class="mx-2">Marine Insurance Service</span>
                                    </a>
                                </div>
							</div>
						</div> {{-- Company Overview Pages Tablet --}}
						<div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasCompanyOverviewTablet" aria-labelledby="nestedOffcanvasLabelCompanyOverviewTablet">
							<div class="offcanvas-header">
								<div class="position-relative" id="nestedOffcanvasLabelCompanyOverviewTablet" data-bs-toggle="offcanvas" data-bs-target="#mainOffcanvasTablet" aria-controls="mainOffcanvasTablet"> <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy"> <span class="tablet-find-car-nested position-absolute text-nowrap">Company Overview</span> </div>
								<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
							</div>
							<div class="offcanvas-body">
								<div class="tablet-main-offcanvas d-grid">
                                   
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.99967 14.6666C4.31767 14.6666 1.33301 11.682 1.33301 7.99998C1.33301 4.31798 4.31767 1.33331 7.99967 1.33331C11.6817 1.33331 14.6663 4.31798 14.6663 7.99998C14.6663 11.682 11.6817 14.6666 7.99967 14.6666ZM7.99967 13.3333C9.41416 13.3333 10.7707 12.7714 11.7709 11.7712C12.7711 10.771 13.333 9.41447 13.333 7.99998C13.333 6.58549 12.7711 5.22894 11.7709 4.22874C10.7707 3.22855 9.41416 2.66665 7.99967 2.66665C6.58519 2.66665 5.22863 3.22855 4.22844 4.22874C3.22824 5.22894 2.66634 6.58549 2.66634 7.99998C2.66634 9.41447 3.22824 10.771 4.22844 11.7712C5.22863 12.7714 6.58519 13.3333 7.99967 13.3333ZM7.33301 4.66665H8.66634V5.99998H7.33301V4.66665ZM7.33301 7.33331H8.66634V11.3333H7.33301V7.33331Z" fill="#2384C1"></path>
                                            </svg>                                            
                                        <span class="mx-2">About SAT</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">     
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.6663 14H3.33301V14.6667C3.33301 14.8435 3.26277 15.013 3.13775 15.1381C3.01272 15.2631 2.84315 15.3333 2.66634 15.3333H1.99967C1.82286 15.3333 1.65329 15.2631 1.52827 15.1381C1.40325 15.013 1.33301 14.8435 1.33301 14.6667V7.99999L2.94434 5.31399C3.0628 5.11656 3.23038 4.95316 3.43074 4.83972C3.6311 4.72628 3.85743 4.66666 4.08767 4.66666H11.9117C12.1419 4.66666 12.3682 4.72628 12.5686 4.83972C12.769 4.95316 12.9365 5.11656 13.055 5.31399L14.6663 7.99999V14.6667C14.6663 14.8435 14.5961 15.013 14.4711 15.1381C14.3461 15.2631 14.1765 15.3333 13.9997 15.3333H13.333C13.1562 15.3333 12.9866 15.2631 12.8616 15.1381C12.7366 15.013 12.6663 14.8435 12.6663 14.6667V14ZM13.333 9.33333H2.66634V12.6667H13.333V9.33333ZM2.88767 7.99999H13.1117L11.9117 5.99999H4.08767L2.88767 7.99999ZM3.62634 2.29333L4.33301 1.58533L5.03967 2.29199C5.17956 2.43183 5.27483 2.61002 5.31344 2.80401C5.35205 2.998 5.33226 3.19908 5.25658 3.38182C5.1809 3.56456 5.05273 3.72076 4.88828 3.83066C4.72382 3.94055 4.53047 3.99921 4.33267 3.99921C4.13488 3.99921 3.94153 3.94055 3.77707 3.83066C3.61262 3.72076 3.48444 3.56456 3.40877 3.38182C3.33309 3.19908 3.3133 2.998 3.35191 2.80401C3.39052 2.61002 3.48579 2.43183 3.62567 2.29199L3.62634 2.29333ZM7.29301 2.29333L7.99967 1.58533L8.70634 2.29199C8.84622 2.43183 8.94149 2.61002 8.9801 2.80401C9.01871 2.998 8.99893 3.19908 8.92325 3.38182C8.84757 3.56456 8.7194 3.72076 8.55494 3.83066C8.39049 3.94055 8.19714 3.99921 7.99934 3.99921C7.80155 3.99921 7.6082 3.94055 7.44374 3.83066C7.27928 3.72076 7.15111 3.56456 7.07543 3.38182C6.99975 3.19908 6.97997 2.998 7.01858 2.80401C7.05719 2.61002 7.15246 2.43183 7.29234 2.29199L7.29301 2.29333ZM10.9597 2.29333L11.6663 1.58533L12.373 2.29199C12.5129 2.43183 12.6082 2.61002 12.6468 2.80401C12.6854 2.998 12.6656 3.19908 12.5899 3.38182C12.5142 3.56456 12.3861 3.72076 12.2216 3.83066C12.0572 3.94055 11.8638 3.99921 11.666 3.99921C11.4682 3.99921 11.2749 3.94055 11.1104 3.83066C10.946 3.72076 10.8178 3.56456 10.7421 3.38182C10.6664 3.19908 10.6466 2.998 10.6852 2.80401C10.7239 2.61002 10.8191 2.43183 10.959 2.29199L10.9597 2.29333ZM4.33301 12C4.06779 12 3.81344 11.8946 3.6259 11.7071C3.43836 11.5196 3.33301 11.2652 3.33301 11C3.33301 10.7348 3.43836 10.4804 3.6259 10.2929C3.81344 10.1053 4.06779 9.99999 4.33301 9.99999C4.59822 9.99999 4.85258 10.1053 5.04011 10.2929C5.22765 10.4804 5.33301 10.7348 5.33301 11C5.33301 11.2652 5.22765 11.5196 5.04011 11.7071C4.85258 11.8946 4.59822 12 4.33301 12ZM11.6663 12C11.4011 12 11.1468 11.8946 10.9592 11.7071C10.7717 11.5196 10.6663 11.2652 10.6663 11C10.6663 10.7348 10.7717 10.4804 10.9592 10.2929C11.1468 10.1053 11.4011 9.99999 11.6663 9.99999C11.9316 9.99999 12.1859 10.1053 12.3734 10.2929C12.561 10.4804 12.6663 10.7348 12.6663 11C12.6663 11.2652 12.561 11.5196 12.3734 11.7071C12.1859 11.8946 11.9316 12 11.6663 12Z" fill="#2384C1"></path>
                                                </svg>  
                                        <span class="mx-2">Company Profile</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.9087 14.8166C10.6141 14.8183 10.3221 14.7626 10.0492 14.6529C9.7763 14.5431 9.52787 14.3812 9.31831 14.1765L9.31275 14.1711L9.3129 14.1709C8.77157 13.5844 8.43622 12.8428 8.35451 12.056H8.25244C7.42848 12.0625 6.62606 11.7951 5.97507 11.2966C5.32388 10.7979 4.86219 10.097 4.66518 9.30714C4.46815 8.51722 4.54759 7.68495 4.89036 6.94514C5.22002 6.23364 5.77452 5.64797 6.46928 5.27466C6.45374 4.78561 6.27731 4.31365 5.96488 3.9306C5.90322 3.86868 5.8278 3.82118 5.74434 3.79192C5.65895 3.76198 5.56753 3.75202 5.47745 3.76288L5.47222 3.76351L5.47222 3.76342C5.09748 3.79532 4.69914 4.0293 4.32557 4.37214C3.95606 4.71125 3.62819 5.14097 3.39366 5.53212C2.72256 6.77073 2.50337 8.19845 2.7725 9.5769C3.04184 10.9564 3.78412 12.2034 4.87561 13.1091L4.88537 13.1172L4.88499 13.1176C4.96234 13.1936 5.0237 13.2841 5.06565 13.3837C5.10763 13.4834 5.12923 13.5903 5.12923 13.6984C5.12923 13.8064 5.10763 13.9133 5.06565 14.0131C5.0237 14.1127 4.96234 14.2031 4.88499 14.2792L4.88244 14.2817L4.88241 14.2816C4.72605 14.4282 4.51883 14.5096 4.3039 14.5096C4.09035 14.5096 3.88458 14.4293 3.72861 14.2845C2.35394 13.127 1.42361 11.5396 1.09376 9.78711C0.763677 8.03337 1.055 6.22128 1.9188 4.65404L1.92154 4.64906L1.92163 4.64911C2.09216 4.36568 2.4817 3.76617 3.0493 3.21768C3.61518 2.67086 4.37239 2.16097 5.2782 2.08432C5.60846 2.05012 5.94232 2.08868 6.25569 2.19728C6.56953 2.30604 6.85504 2.48237 7.09136 2.7136L7.09632 2.71845L7.0962 2.71856C7.61517 3.27558 7.94752 3.97545 8.0498 4.72305C8.10597 4.72253 8.16216 4.72517 8.21812 4.73098C9.04106 4.73405 9.83949 5.00932 10.4851 5.51316C11.1329 6.01863 11.5891 6.72476 11.7797 7.51775C11.9702 8.31076 11.8839 9.14386 11.5345 9.88237C11.1987 10.5924 10.6389 11.1748 9.94048 11.5438C9.95753 12.0424 10.1339 12.5241 10.446 12.9196C10.5079 12.9828 10.5842 13.0311 10.6688 13.0603C10.7556 13.0902 10.8484 13.0991 10.9395 13.0863L10.9477 13.0852L10.9477 13.0854C11.3222 13.0535 11.7179 12.8197 12.0888 12.477C12.4557 12.138 12.7811 11.7083 13.0159 11.3168C13.6843 10.0783 13.903 8.65223 13.6359 7.27472C13.3686 5.89613 12.6307 4.64856 11.544 3.73931L11.5426 3.73818L11.5426 3.73817C11.3738 3.5935 11.2696 3.38819 11.254 3.16713C11.2384 2.94602 11.3128 2.72832 11.4599 2.56185C11.6069 2.39542 11.8145 2.29378 12.0368 2.27855C12.2587 2.26336 12.478 2.33536 12.6466 2.47936C14.0572 3.64256 15.0133 5.25352 15.3499 7.03596C15.6866 8.8189 15.3825 10.6616 14.49 12.2474L14.4883 12.2505L14.4883 12.2505C14.3224 12.5298 13.9328 13.1267 13.364 13.675C12.7967 14.222 12.0367 14.7344 11.1308 14.816L11.1173 14.8172V14.8166H10.9087ZM10.9087 14.8166H10.9082V14.6666L10.9091 14.8166C10.909 14.8166 10.9088 14.8166 10.9087 14.8166ZM10.2248 8.33096V8.33169C10.2248 8.72566 10.106 9.11097 9.88336 9.43881C9.66065 9.76666 9.34395 10.0224 8.97305 10.1732C8.60213 10.324 8.19399 10.363 7.80042 10.2851C7.40686 10.2073 7.04595 10.0162 6.76324 9.73641C6.48055 9.45663 6.28872 9.10077 6.21186 8.71409C6.135 8.32742 6.17647 7.92693 6.33097 7.56327C6.48547 7.1996 6.74627 6.88892 7.08065 6.67085C7.41505 6.45277 7.80779 6.33724 8.20925 6.33914H8.20996C8.47569 6.33914 8.73883 6.39086 8.98408 6.49125C9.22932 6.59165 9.45181 6.73872 9.63894 6.92392C9.82607 7.10912 9.97413 7.32878 10.0746 7.5702C10.1751 7.81162 10.2261 8.07015 10.2248 8.33096Z" fill="#2384C1" stroke="#4F4770" stroke-width="0.3"></path>
                                            </svg>                                            
                                        <span class="mx-2">Why Choose SAT</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.33333 5.33331V13.3333H12.6667V5.33331H3.33333ZM3.33333 3.99998H12.6667V2.66665H3.33333V3.99998ZM13.3333 14.6666H2.66667C2.48986 14.6666 2.32029 14.5964 2.19526 14.4714C2.07024 14.3464 2 14.1768 2 14V1.99998C2 1.82317 2.07024 1.6536 2.19526 1.52858C2.32029 1.40355 2.48986 1.33331 2.66667 1.33331H13.3333C13.5101 1.33331 13.6797 1.40355 13.8047 1.52858C13.9298 1.6536 14 1.82317 14 1.99998V14C14 14.1768 13.9298 14.3464 13.8047 14.4714C13.6797 14.5964 13.5101 14.6666 13.3333 14.6666ZM4.66667 6.66665H7.33333V9.33331H4.66667V6.66665ZM4.66667 10.6666H11.3333V12H4.66667V10.6666ZM8.66667 7.33331H11.3333V8.66665H8.66667V7.33331Z" fill="#2384C1"></path>
                                            </svg>                                            
                                        <span class="mx-2">Privacy Policy</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.66634 3.83335H5.16634V3.33335V1.33335C5.16634 1.28915 5.1839 1.24676 5.21516 1.2155C5.24641 1.18425 5.28881 1.16669 5.33301 1.16669H10.6663C10.7105 1.16669 10.7529 1.18425 10.7842 1.2155C10.8154 1.24676 10.833 1.28915 10.833 1.33335V3.33335V3.83335H11.333H13.9997C14.0439 3.83335 14.0863 3.85091 14.1175 3.88217C14.1488 3.91342 14.1663 3.95582 14.1663 4.00002V13.3334C14.1663 13.3776 14.1488 13.4199 14.1175 13.4512C14.0863 13.4825 14.0439 13.5 13.9997 13.5H1.99967C1.95547 13.5 1.91308 13.4825 1.88182 13.4512C1.85057 13.4199 1.83301 13.3776 1.83301 13.3334V4.00002C1.83301 3.95582 1.85057 3.91343 1.88182 3.88217C1.91308 3.85091 1.95547 3.83335 1.99967 3.83335H4.66634ZM13.833 8.66669V8.16669H13.333H2.66634H2.16634V8.66669V12.6667V13.1667H2.66634H13.333H13.833V12.6667V8.66669ZM13.833 4.66669V4.16669H13.333H2.66634H2.16634V4.66669V7.33335V7.83335H2.66634H4.66634H5.16634V7.33335V6.50002H5.49967V7.33335V7.83335H5.99967H9.99967H10.4997V7.33335V6.50002H10.833V7.33335V7.83335H11.333H13.333H13.833V7.33335V4.66669ZM5.99967 1.50002H5.49967V2.00002V3.33335V3.83335H5.99967H9.99967H10.4997V3.33335V2.00002V1.50002H9.99967H5.99967Z" fill="#2384C1" stroke="#2384C1"></path>
                                            </svg>                                            
                                        <span class="mx-2">Terms and Conditions</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.522 1.88402L8 0.666687L13.478 1.88402C13.626 1.91693 13.7584 1.99933 13.8533 2.11762C13.9482 2.23592 14 2.38303 14 2.53469V9.19269C14 9.85118 13.8373 10.4995 13.5266 11.08C13.2158 11.6606 12.7666 12.1554 12.2187 12.5207L8 15.3334L3.78133 12.5207C3.23352 12.1555 2.78431 11.6608 2.47357 11.0803C2.16282 10.4999 2.00016 9.85173 2 9.19335V2.53469C2.00003 2.38303 2.05176 2.23592 2.14666 2.11762C2.24156 1.99933 2.37396 1.91693 2.522 1.88402ZM3.33333 3.06935V9.19269C3.33334 9.63166 3.44172 10.0638 3.64884 10.4509C3.85597 10.8379 4.15543 11.1678 4.52067 11.4114L8 13.7314L11.4793 11.4114C11.8445 11.1679 12.1439 10.8381 12.351 10.4512C12.5581 10.0643 12.6665 9.63221 12.6667 9.19335V3.06935L8 2.03335L3.33333 3.06935ZM8 7.33335C7.55797 7.33335 7.13405 7.15776 6.82149 6.8452C6.50893 6.53264 6.33333 6.10871 6.33333 5.66669C6.33333 5.22466 6.50893 4.80074 6.82149 4.48818C7.13405 4.17561 7.55797 4.00002 8 4.00002C8.44203 4.00002 8.86595 4.17561 9.17851 4.48818C9.49107 4.80074 9.66667 5.22466 9.66667 5.66669C9.66667 6.10871 9.49107 6.53264 9.17851 6.8452C8.86595 7.15776 8.44203 7.33335 8 7.33335ZM5.018 10.6667C5.09881 9.93229 5.44779 9.25354 5.99805 8.7605C6.54832 8.26747 7.26117 7.99483 8 7.99483C8.73883 7.99483 9.45168 8.26747 10.0019 8.7605C10.5522 9.25354 10.9012 9.93229 10.982 10.6667H5.018Z" fill="#2384C1"></path>
                                            </svg>                                            
                                        <span class="mx-2">Careers</span>
                                    </a>
                                </div>
							</div>
						</div> {{-- Reviews Pages Tablet --}}
						<div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasReviewsTablet" aria-labelledby="nestedOffcanvasLabelReviewsTablet">
							<div class="offcanvas-header">
								<div class="position-relative" id="nestedOffcanvasLabelReviewsTablet" data-bs-toggle="offcanvas" data-bs-target="#mainOffcanvasTablet" aria-controls="mainOffcanvasTablet"> <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy"> <span class="tablet-find-car-nested position-absolute text-nowrap">Reviews</span> </div>
								<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
							</div>
							<div class="offcanvas-body">
								<div class="tablet-main-offcanvas d-grid">
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.6663 13.3333H3.33301V14C3.33301 14.1768 3.26277 14.3463 3.13775 14.4714C3.01272 14.5964 2.84315 14.6666 2.66634 14.6666H1.99967C1.82286 14.6666 1.65329 14.5964 1.52827 14.4714C1.40325 14.3463 1.33301 14.1768 1.33301 14V7.33329L2.98634 3.47463C3.08922 3.23463 3.26031 3.03012 3.47838 2.88648C3.69644 2.74284 3.95189 2.66639 4.21301 2.66663H11.7863C12.0472 2.66666 12.3024 2.74322 12.5202 2.88685C12.738 3.03047 12.9089 3.23484 13.0117 3.47463L14.6663 7.33329V14C14.6663 14.1768 14.5961 14.3463 14.4711 14.4714C14.3461 14.5964 14.1765 14.6666 13.9997 14.6666H13.333C13.1562 14.6666 12.9866 14.5964 12.8616 14.4714C12.7366 14.3463 12.6663 14.1768 12.6663 14V13.3333ZM13.333 8.66663H2.66634V12H13.333V8.66663ZM2.78367 7.33329H13.2157L11.787 3.99996H4.21301L2.78434 7.33329H2.78367ZM4.33301 11.3333C4.06779 11.3333 3.81344 11.2279 3.6259 11.0404C3.43836 10.8529 3.33301 10.5985 3.33301 10.3333C3.33301 10.0681 3.43836 9.81372 3.6259 9.62619C3.81344 9.43865 4.06779 9.33329 4.33301 9.33329C4.59822 9.33329 4.85258 9.43865 5.04011 9.62619C5.22765 9.81372 5.33301 10.0681 5.33301 10.3333C5.33301 10.5985 5.22765 10.8529 5.04011 11.0404C4.85258 11.2279 4.59822 11.3333 4.33301 11.3333ZM11.6663 11.3333C11.4011 11.3333 11.1468 11.2279 10.9592 11.0404C10.7717 10.8529 10.6663 10.5985 10.6663 10.3333C10.6663 10.0681 10.7717 9.81372 10.9592 9.62619C11.1468 9.43865 11.4011 9.33329 11.6663 9.33329C11.9316 9.33329 12.1859 9.43865 12.3734 9.62619C12.561 9.81372 12.6663 10.0681 12.6663 10.3333C12.6663 10.5985 12.561 10.8529 12.3734 11.0404C12.1859 11.2279 11.9316 11.3333 11.6663 11.3333Z" fill="#2384C1"></path>
                                            </svg>                                            
                                        <span class="mx-2">Car Reviews</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_17076_21950)">
                                            <g clip-path="url(#clip1_17076_21950)">
                                            <path d="M2.70059 4C3.00175 4 3.29098 4.11933 3.50406 4.33298L6.24744 7.07636C6.46052 7.28944 6.58042 7.57867 6.58042 7.87983V11.9551H7.71687V13.0916H3.09948C2.84662 14.0723 1.95736 14.7962 0.898188 14.7962C-0.16098 14.7962 -1.05082 14.0723 -1.30311 13.0916H-3.6476C-3.96126 13.0916 -4.21582 12.837 -4.21582 12.5233V5.13645C-4.21582 4.50856 -3.70726 4 -3.07937 4H2.70059ZM0.898188 11.3869C0.270301 11.3869 -0.238258 11.8955 -0.238258 12.5233C-0.238258 13.1512 0.270301 13.6598 0.898188 13.6598C1.52607 13.6598 2.03463 13.1512 2.03463 12.5233C2.03463 11.8955 1.52607 11.3869 0.898188 11.3869ZM2.70059 5.13645H-3.07937V11.9551H-1.30311C-1.05082 10.9749 -0.16098 10.2505 0.898188 10.2505C1.95736 10.2505 2.84719 10.9749 3.09948 11.9551H5.44397V7.87983L2.70059 5.13645ZM2.60286 6.27289V9.68223H-1.94293V6.27289H2.60286ZM1.46641 7.40934H-0.806482V8.54578H1.46641V7.40934Z" fill="#2384C1"></path>
                                            <path d="M13.3014 4C13.0002 4 12.711 4.11933 12.4979 4.33298L9.75451 7.07636C9.54143 7.28944 9.42153 7.57867 9.42153 7.87983V11.9551H8.28509V13.0916H12.9025C13.1553 14.0723 14.0446 14.7962 15.1038 14.7962C16.1629 14.7962 17.0528 14.0723 17.3051 13.0916H19.6496C19.9632 13.0916 20.2178 12.837 20.2178 12.5233V5.13645C20.2178 4.50856 19.7092 4 19.0813 4H13.3014ZM15.1038 11.3869C15.7317 11.3869 16.2402 11.8955 16.2402 12.5233C16.2402 13.1512 15.7317 13.6598 15.1038 13.6598C14.4759 13.6598 13.9673 13.1512 13.9673 12.5233C13.9673 11.8955 14.4759 11.3869 15.1038 11.3869ZM13.3014 5.13645H19.0813V11.9551H17.3051C17.0528 10.9749 16.1629 10.2505 15.1038 10.2505C14.0446 10.2505 13.1548 10.9749 12.9025 11.9551H10.558V7.87983L13.3014 5.13645ZM13.3991 6.27289V9.68223H17.9449V6.27289H13.3991ZM14.5355 7.40934H16.8084V8.54578H14.5355V7.40934Z" fill="#2384C1"></path>
                                            </g>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_17076_21950">
                                            <rect width="14.6667" height="10.6667" fill="white" transform="translate(0.666992 4)"></rect>
                                            </clipPath>
                                            <clipPath id="clip1_17076_21950">
                                            <rect width="19.3333" height="10.6047" fill="white" transform="translate(-1.66602 4)"></rect>
                                            </clipPath>
                                            </defs>
                                            </svg>                                            
                                        <span class="mx-2">Car Comparisons</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.6663 13.3334V2.66671H2.66634V12.6667C2.66634 12.8435 2.73658 13.0131 2.8616 13.1381C2.98663 13.2631 3.1562 13.3334 3.33301 13.3334H10.6663ZM12.6663 14.6667H3.33301C2.80257 14.6667 2.29387 14.456 1.91879 14.0809C1.54372 13.7058 1.33301 13.1971 1.33301 12.6667V2.00004C1.33301 1.82323 1.40325 1.65366 1.52827 1.52864C1.65329 1.40361 1.82286 1.33337 1.99967 1.33337H11.333C11.5098 1.33337 11.6794 1.40361 11.8044 1.52864C11.9294 1.65366 11.9997 1.82323 11.9997 2.00004V6.66671H14.6663V12.6667C14.6663 13.1971 14.4556 13.7058 14.0806 14.0809C13.7055 14.456 13.1968 14.6667 12.6663 14.6667ZM11.9997 8.00004V12.6667C11.9997 12.8435 12.0699 13.0131 12.1949 13.1381C12.32 13.2631 12.4895 13.3334 12.6663 13.3334C12.8432 13.3334 13.0127 13.2631 13.1377 13.1381C13.2628 13.0131 13.333 12.8435 13.333 12.6667V8.00004H11.9997ZM3.99967 4.00004H7.99967V8.00004H3.99967V4.00004ZM5.33301 5.33337V6.66671H6.66634V5.33337H5.33301ZM3.99967 8.66671H9.33301V10H3.99967V8.66671ZM3.99967 10.6667H9.33301V12H3.99967V10.6667Z" fill="#2384C1"></path>
                                            </svg>                                            
                                        <span class="mx-2">Car Blogs</span>
                                    </a>
                                  
                                </div>
							</div>
						</div> {{-- Help Pages Tablet --}}
						<div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasHelpTablet" aria-labelledby="nestedOffcanvasLabelHelpTablet">
							<div class="offcanvas-header">
								<div class="position-relative" id="nestedOffcanvasLabelHelpTablet" data-bs-toggle="offcanvas" data-bs-target="#mainOffcanvasTablet" aria-controls="mainOffcanvasTablet"> <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy"> <span class="tablet-find-car-nested position-absolute text-nowrap">Help</span> </div>
								<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
							</div>
							<div class="offcanvas-body">
								<div class="tablet-main-offcanvas d-grid">
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.66699 10.0003V5.66699C2.66699 4.87134 2.98306 4.10828 3.54567 3.54567C4.10828 2.98306 4.87134 2.66699 5.66699 2.66699C6.46264 2.66699 7.2257 2.98306 7.78831 3.54567C8.35092 4.10828 8.66699 4.87134 8.66699 5.66699V10.3337C8.66699 10.7757 8.84259 11.1996 9.15515 11.5122C9.46771 11.8247 9.89163 12.0003 10.3337 12.0003C10.7757 12.0003 11.1996 11.8247 11.5122 11.5122C11.8247 11.1996 12.0003 10.7757 12.0003 10.3337V5.88699C11.5553 5.72972 11.1803 5.42019 10.9414 5.01312C10.7026 4.60605 10.6153 4.12764 10.6951 3.66247C10.7749 3.19729 11.0166 2.7753 11.3774 2.47108C11.7383 2.16686 12.195 2 12.667 2C13.139 2 13.5957 2.16686 13.9566 2.47108C14.3174 2.7753 14.5591 3.19729 14.6389 3.66247C14.7186 4.12764 14.6314 4.60605 14.3926 5.01312C14.1537 5.42019 13.7787 5.72972 13.3337 5.88699V10.3337C13.3337 11.1293 13.0176 11.8924 12.455 12.455C11.8924 13.0176 11.1293 13.3337 10.3337 13.3337C9.53801 13.3337 8.77495 13.0176 8.21234 12.455C7.64973 11.8924 7.33366 11.1293 7.33366 10.3337V5.66699C7.33366 5.22496 7.15806 4.80104 6.8455 4.48848C6.53294 4.17592 6.10902 4.00033 5.66699 4.00033C5.22496 4.00033 4.80104 4.17592 4.48848 4.48848C4.17592 4.80104 4.00033 5.22496 4.00033 5.66699V10.0003H6.00033L3.33366 13.3337L0.666992 10.0003H2.66699ZM12.667 4.66699C12.8438 4.66699 13.0134 4.59675 13.1384 4.47173C13.2634 4.34671 13.3337 4.17714 13.3337 4.00033C13.3337 3.82351 13.2634 3.65395 13.1384 3.52892C13.0134 3.4039 12.8438 3.33366 12.667 3.33366C12.4902 3.33366 12.3206 3.4039 12.1956 3.52892C12.0706 3.65395 12.0003 3.82351 12.0003 4.00033C12.0003 4.17714 12.0706 4.34671 12.1956 4.47173C12.3206 4.59675 12.4902 4.66699 12.667 4.66699Z" fill="#2384C1"></path>
                                            </svg>
                                        <span class="mx-2">How to Buy</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3333 14.6666H2.66667C2.48986 14.6666 2.32029 14.5964 2.19526 14.4714C2.07024 14.3464 2 14.1768 2 14V1.99998C2 1.82317 2.07024 1.6536 2.19526 1.52858C2.32029 1.40355 2.48986 1.33331 2.66667 1.33331H13.3333C13.5101 1.33331 13.6797 1.40355 13.8047 1.52858C13.9298 1.6536 14 1.82317 14 1.99998V14C14 14.1768 13.9298 14.3464 13.8047 14.4714C13.6797 14.5964 13.5101 14.6666 13.3333 14.6666ZM12.6667 13.3333V2.66665H3.33333V13.3333H12.6667ZM5.33333 4.66665H10.6667V5.99998H5.33333V4.66665ZM5.33333 7.33331H10.6667V8.66665H5.33333V7.33331ZM5.33333 9.99998H8.66667V11.3333H5.33333V9.99998Z" fill="#2384C1"></path>
                                            </svg>                                            
                                        <span class="mx-2">Inquiry Form</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.99967 14.6666C4.31767 14.6666 1.33301 11.682 1.33301 7.99998C1.33301 4.31798 4.31767 1.33331 7.99967 1.33331C11.6817 1.33331 14.6663 4.31798 14.6663 7.99998C14.6663 11.682 11.6817 14.6666 7.99967 14.6666ZM7.99967 13.3333C9.41416 13.3333 10.7707 12.7714 11.7709 11.7712C12.7711 10.771 13.333 9.41447 13.333 7.99998C13.333 6.58549 12.7711 5.22894 11.7709 4.22874C10.7707 3.22855 9.41416 2.66665 7.99967 2.66665C6.58519 2.66665 5.22863 3.22855 4.22844 4.22874C3.22824 5.22894 2.66634 6.58549 2.66634 7.99998C2.66634 9.41447 3.22824 10.771 4.22844 11.7712C5.22863 12.7714 6.58519 13.3333 7.99967 13.3333ZM7.33301 9.99998H8.66634V11.3333H7.33301V9.99998ZM8.66634 8.90331V9.33331H7.33301V8.33331C7.33301 8.1565 7.40325 7.98693 7.52827 7.86191C7.65329 7.73688 7.82286 7.66665 7.99967 7.66665C8.18906 7.66663 8.37455 7.61284 8.53456 7.51153C8.69457 7.41022 8.82252 7.26556 8.90352 7.09437C8.98453 6.92318 9.01525 6.73251 8.99213 6.54454C8.969 6.35657 8.89298 6.17904 8.7729 6.03259C8.65282 5.88614 8.49362 5.7768 8.31382 5.71729C8.13403 5.65779 7.94103 5.65056 7.75729 5.69645C7.57355 5.74234 7.40662 5.83947 7.27592 5.97652C7.14522 6.11358 7.05613 6.28493 7.01901 6.47065L5.71101 6.20865C5.7921 5.80337 5.97935 5.42689 6.25362 5.1177C6.5279 4.80851 6.87935 4.5777 7.27207 4.44886C7.66478 4.32002 8.08467 4.29777 8.4888 4.38439C8.89293 4.47101 9.26681 4.66339 9.57222 4.94186C9.87763 5.22034 10.1036 5.57492 10.2271 5.96936C10.3505 6.36379 10.3671 6.78394 10.2749 7.18685C10.1828 7.58976 9.98531 7.96098 9.70269 8.26256C9.42007 8.56413 9.06243 8.78525 8.66634 8.90331Z" fill="#2384C1"></path>
                                            </svg>                                            
                                        <span class="mx-2">Vehicle Information Request</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.66634 10.6666V2.66665H1.33301V1.33331H3.33301C3.50982 1.33331 3.67939 1.40355 3.80441 1.52858C3.92944 1.6536 3.99967 1.82317 3.99967 1.99998V9.99998H12.2917L13.625 4.66665H5.33301V3.33331H14.4797C14.581 3.33332 14.681 3.35642 14.7721 3.40087C14.8632 3.44532 14.9429 3.50995 15.0052 3.58984C15.0676 3.66973 15.1109 3.76278 15.1319 3.86192C15.1529 3.96106 15.151 4.06368 15.1263 4.16198L13.4597 10.8286C13.4236 10.9728 13.3403 11.1008 13.2231 11.1922C13.106 11.2836 12.9616 11.3333 12.813 11.3333H3.33301C3.1562 11.3333 2.98663 11.2631 2.8616 11.1381C2.73658 11.013 2.66634 10.8435 2.66634 10.6666ZM3.99967 15.3333C3.64605 15.3333 3.30691 15.1928 3.05687 14.9428C2.80682 14.6927 2.66634 14.3536 2.66634 14C2.66634 13.6464 2.80682 13.3072 3.05687 13.0572C3.30691 12.8071 3.64605 12.6666 3.99967 12.6666C4.3533 12.6666 4.69244 12.8071 4.94248 13.0572C5.19253 13.3072 5.33301 13.6464 5.33301 14C5.33301 14.3536 5.19253 14.6927 4.94248 14.9428C4.69244 15.1928 4.3533 15.3333 3.99967 15.3333ZM11.9997 15.3333C11.6461 15.3333 11.3069 15.1928 11.0569 14.9428C10.8068 14.6927 10.6663 14.3536 10.6663 14C10.6663 13.6464 10.8068 13.3072 11.0569 13.0572C11.3069 12.8071 11.6461 12.6666 11.9997 12.6666C12.3533 12.6666 12.6924 12.8071 12.9425 13.0572C13.1925 13.3072 13.333 13.6464 13.333 14C13.333 14.3536 13.1925 14.6927 12.9425 14.9428C12.6924 15.1928 12.3533 15.3333 11.9997 15.3333Z" fill="#2384C1"></path>
                                            </svg>                                            
                                        <span class="mx-2">How to Pay</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.33333 1.33331L12.1987 2.85331C12.3344 2.89567 12.453 2.9803 12.5372 3.09484C12.6214 3.20938 12.6667 3.34783 12.6667 3.48998V4.66665H14C14.1768 4.66665 14.3464 4.73688 14.4714 4.86191C14.5964 4.98693 14.6667 5.1565 14.6667 5.33331V10.6666C14.6667 10.8435 14.5964 11.013 14.4714 11.1381C14.3464 11.2631 14.1768 11.3333 14 11.3333L11.8533 11.334C11.5953 11.674 11.282 11.974 10.92 12.2206L7.33333 14.6666L3.74667 12.2213C3.20835 11.8543 2.76783 11.3613 2.46343 10.7853C2.15902 10.2092 1.99993 9.56752 2 8.91598V3.48998C2.00008 3.34794 2.04552 3.20964 2.12971 3.09524C2.21389 2.98083 2.33241 2.89631 2.468 2.85398L7.33333 1.33331ZM7.33333 2.72931L3.33333 3.97998V8.91598C3.33324 9.32413 3.42683 9.72686 3.60691 10.0931C3.78699 10.4594 4.04874 10.7795 4.372 11.0286L4.498 11.1193L7.33333 13.0533L9.85467 11.3333H6.66667C6.48986 11.3333 6.32029 11.2631 6.19526 11.1381C6.07024 11.013 6 10.8435 6 10.6666V5.33331C6 5.1565 6.07024 4.98693 6.19526 4.86191C6.32029 4.73688 6.48986 4.66665 6.66667 4.66665H11.3333V3.97998L7.33333 2.72931ZM7.33333 7.99998V9.99998H13.3333V7.99998H7.33333ZM7.33333 6.66665H13.3333V5.99998H7.33333V6.66665Z" fill="#2384C1"></path>
                                            </svg>                                            
                                        <span class="mx-2">Bank Information</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.6663 13.3334H3.33301V14C3.33301 14.1768 3.26277 14.3464 3.13775 14.4714C3.01272 14.5964 2.84315 14.6667 2.66634 14.6667H1.99967C1.82286 14.6667 1.65329 14.5964 1.52827 14.4714C1.40325 14.3464 1.33301 14.1768 1.33301 14V7.33335L2.98634 3.47469C3.08922 3.23469 3.26031 3.03018 3.47838 2.88654C3.69644 2.7429 3.95189 2.66646 4.21301 2.66669H11.7863C12.0472 2.66672 12.3024 2.74329 12.5202 2.88691C12.738 3.03053 12.9089 3.2349 13.0117 3.47469L14.6663 7.33335V14C14.6663 14.1768 14.5961 14.3464 14.4711 14.4714C14.3461 14.5964 14.1765 14.6667 13.9997 14.6667H13.333C13.1562 14.6667 12.9866 14.5964 12.8616 14.4714C12.7366 14.3464 12.6663 14.1768 12.6663 14V13.3334ZM13.333 8.66669H2.66634V12H13.333V8.66669ZM2.78367 7.33335H13.2157L11.787 4.00002H4.21301L2.78434 7.33335H2.78367ZM4.33301 11.3334C4.06779 11.3334 3.81344 11.228 3.6259 11.0405C3.43836 10.8529 3.33301 10.5986 3.33301 10.3334C3.33301 10.0681 3.43836 9.81378 3.6259 9.62625C3.81344 9.43871 4.06779 9.33335 4.33301 9.33335C4.59822 9.33335 4.85258 9.43871 5.04011 9.62625C5.22765 9.81378 5.33301 10.0681 5.33301 10.3334C5.33301 10.5986 5.22765 10.8529 5.04011 11.0405C4.85258 11.228 4.59822 11.3334 4.33301 11.3334ZM11.6663 11.3334C11.4011 11.3334 11.1468 11.228 10.9592 11.0405C10.7717 10.8529 10.6663 10.5986 10.6663 10.3334C10.6663 10.0681 10.7717 9.81378 10.9592 9.62625C11.1468 9.43871 11.4011 9.33335 11.6663 9.33335C11.9316 9.33335 12.1859 9.43871 12.3734 9.62625C12.561 9.81378 12.6663 10.0681 12.6663 10.3334C12.6663 10.5986 12.561 10.8529 12.3734 11.0405C12.1859 11.228 11.9316 11.3334 11.6663 11.3334Z" fill="#2384C1"></path>
                                            </svg>                                            
                                        <span class="mx-2">Track Your Order</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.84167 11.3333H13.333V3.33333H2.66634V12.2567L3.84167 11.3333ZM4.30301 12.6667L1.33301 15V2.66667C1.33301 2.48986 1.40325 2.32029 1.52827 2.19526C1.65329 2.07024 1.82286 2 1.99967 2H13.9997C14.1765 2 14.3461 2.07024 14.4711 2.19526C14.5961 2.32029 14.6663 2.48986 14.6663 2.66667V12C14.6663 12.1768 14.5961 12.3464 14.4711 12.4714C14.3461 12.5964 14.1765 12.6667 13.9997 12.6667H4.30301ZM7.33301 9.33333H8.66634V10.6667H7.33301V9.33333ZM5.71101 5.87533C5.79762 5.44186 6.00555 5.0419 6.31061 4.72198C6.61566 4.40207 7.00528 4.17536 7.43415 4.06824C7.86301 3.96112 8.31348 3.97798 8.73313 4.11688C9.15279 4.25577 9.52437 4.51098 9.80464 4.85281C10.0849 5.19464 10.2624 5.60904 10.3163 6.04777C10.3703 6.48651 10.2985 6.93155 10.1094 7.3311C9.92033 7.73065 9.62166 8.0683 9.24817 8.30473C8.87467 8.54117 8.44172 8.66668 7.99967 8.66667H7.33301V7.33333H7.99967C8.18906 7.33332 8.37455 7.27953 8.53456 7.17822C8.69457 7.07691 8.82252 6.93224 8.90352 6.76106C8.98453 6.58987 9.01525 6.3992 8.99213 6.21123C8.969 6.02326 8.89298 5.84572 8.7729 5.69927C8.65282 5.55283 8.49362 5.44349 8.31382 5.38398C8.13403 5.32447 7.94103 5.31725 7.75729 5.36314C7.57355 5.40903 7.40662 5.50615 7.27592 5.64321C7.14522 5.78027 7.05613 5.95162 7.01901 6.13733L5.71101 5.87533Z" fill="#2384C1"></path>
                                            </svg>                                            
                                        <span class="mx-2">FAQ’s</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.33301 13.3333H14.6663V14.6666H1.33301V13.3333ZM2.66634 7.99998H3.99967V12.6666H2.66634V7.99998ZM5.99967 7.99998H7.33301V12.6666H5.99967V7.99998ZM8.66634 7.99998H9.99967V12.6666H8.66634V7.99998ZM11.9997 7.99998H13.333V12.6666H11.9997V7.99998ZM1.33301 4.66665L7.99967 1.33331L14.6663 4.66665V7.33331H1.33301V4.66665ZM2.66634 5.49065V5.99998H13.333V5.49065L7.99967 2.82398L2.66634 5.49065ZM7.99967 5.33331C7.82286 5.33331 7.65329 5.26308 7.52827 5.13805C7.40325 5.01303 7.33301 4.84346 7.33301 4.66665C7.33301 4.48984 7.40325 4.32027 7.52827 4.19524C7.65329 4.07022 7.82286 3.99998 7.99967 3.99998C8.17649 3.99998 8.34606 4.07022 8.47108 4.19524C8.5961 4.32027 8.66634 4.48984 8.66634 4.66665C8.66634 4.84346 8.5961 5.01303 8.47108 5.13805C8.34606 5.26308 8.17649 5.33331 7.99967 5.33331Z" fill="#2384C1"></path>
                                            </svg>
                                        <span class="mx-2">How to Pick the Right Used Car</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0.666626L13.478 1.88396C13.626 1.91687 13.7584 1.99927 13.8533 2.11756C13.9482 2.23586 14 2.38297 14 2.53463V9.19263C14 9.85112 13.8373 10.4994 13.5266 11.08C13.2158 11.6605 12.7666 12.1554 12.2187 12.5206L8 15.3333L3.78133 12.5206C3.23352 12.1554 2.78431 11.6607 2.47357 11.0803C2.16282 10.4998 2.00016 9.85167 2 9.19329V2.53463C2.00003 2.38297 2.05176 2.23586 2.14666 2.11756C2.24156 1.99927 2.37396 1.91687 2.522 1.88396L8 0.666626ZM8 2.03263L3.33333 3.06929V9.19263C3.33334 9.6316 3.44172 10.0638 3.64884 10.4508C3.85597 10.8379 4.15543 11.1678 4.52067 11.4113L8 13.7313L11.4793 11.4113C11.8445 11.1678 12.1439 10.838 12.351 10.4511C12.5581 10.0642 12.6665 9.63215 12.6667 9.19329V3.06929L8 2.03329V2.03263ZM8 4.66663C8.29356 4.66649 8.57896 4.76324 8.81192 4.94187C9.04487 5.12049 9.21237 5.371 9.28842 5.65454C9.36447 5.93808 9.34482 6.23879 9.23252 6.51002C9.12023 6.78125 8.92156 7.00783 8.66733 7.15463L8.66667 9.99996H7.33333V7.15463C7.07916 7.00786 6.88052 6.78133 6.76821 6.51017C6.65589 6.23901 6.63619 5.93836 6.71216 5.65486C6.78812 5.37136 6.95551 5.12085 7.18836 4.94217C7.4212 4.76349 7.7065 4.66664 8 4.66663Z" fill="#2384C1"></path>
                                            </svg>                                            
                                        <span class="mx-2">Buying Vehicles Safely Guide</span>
                                    </a>
                                </div>
							</div>
						</div> {{-- Settings Pages Tablet --}}
						<div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasSettingsTablet" aria-labelledby="nestedOffcanvasLabelSettingsTablet">
							<div class="offcanvas-header">
								<div class="position-relative" id="nestedOffcanvasLabelSettingsTablet" data-bs-toggle="offcanvas" data-bs-target="#mainOffcanvasTablet" aria-controls="mainOffcanvasTablet"> <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy"> <span class="tablet-find-car-nested position-absolute text-nowrap">Settings</span> </div>
								<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
							</div>
							<div class="offcanvas-body">
								<div class="tablet-main-offcanvas">
									<div class="tablet-offcanvas-settings d-flex justify-content-between align-items-center">
										<p class="setting-currency m-0">Currency</p>
										<select class="setting-currency-select form-select px-1" aria-label="Default select example">
											<option selected="">USD</option>
											<option value="1">AUD</option>
											<option value="2">GBP</option>
											<option value="3">CAD</option>
											<option value="4">CNY</option>
											<option value="5">EUR</option>
											<option value="6">JPY</option>
											<option value="7">NZD</option>
											<option value="8">ZAR</option>
											<option value="9">USD</option>
											<option value="10">AFN</option>
											<option value="11">ALL</option>
											<option value="12">DZD</option>
											<option value="13">AOA</option>
											<option value="14">ARS</option>
											<option value="15">AMD</option>
											<option value="16">AWG</option>
											<option value="17">AZN</option>
											<option value="18">BSD</option>
											<option value="19">BHD</option>
											<option value="20">BDT</option>
										</select>
									</div>
									<div class="tablet-offcanvas-settings d-flex justify-content-between align-items-center my-4">
										<p class="setting-currency m-0">Language</p>
										<select class="setting-currency-select form-select px-1" aria-label="Default select example">
											<option selected="">English</option>
											<option value="1">Arabic</option>
											<option value="2">Spanish</option>
											<option value="3">French</option>
											<option value="4">Geiorgian</option>
											<option value="5">Mongoalian</option>
											<option value="6">Purtuguese</option>
											<option value="7">Russian</option>
											<option value="8">Swahili</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<!-- Nested Explore Stock Tablet -->
						<div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvas1Tablet" aria-labelledby="nestedOffcanvas1LabelTablet">
							<div class="offcanvas-header">
								<div class="position-relative" id="nestedOffcanvasLabelTablet" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasTablet" aria-controls="nestedOffcanvasTablet"> <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy"> <span class="tablet-find-car-nested position-absolute text-nowrap">Explore Stock</span> </div>
								<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
							</div>
							<div class="offcanvas-body">
								<div class="tablet-main-offcanvas">
									<div class="mb-3 position-relative">
										<a href="javascript:;">
											<p>Find Used Car for Sale</p>
										</a>
										<a href="javascript:;">
											<p>Luxury Vehicles</p>
										</a>
										<a href="javascript:;">
											<p>Low Mileage Cars</p>
										</a>
										<a href="javascript:;">
											<p>Fresh Stock</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Nested Explore By Price Tablet -->
						<div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasExploreByPriceTablet" aria-labelledby="nestedOffcanvasExploreByPriceTablet">
							<div class="offcanvas-header">
								<div class="position-relative" id="nestedOffcanvasExploreByPriceTablet" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasTablet" aria-controls="nestedOffcanvasTablet"> <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy"> <span class="tablet-find-car-nested position-absolute text-nowrap">Explore By Price</span> </div>
								<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
							</div>
							<div class="offcanvas-body">
								<div class="tablet-main-offcanvas">
									<div class="mb-3 position-relative">
										<a href="javascript:;">
											<p>Less than $1000</p>
										</a>
										<a href="javascript:;">
											<p>Between $1000 - $2000</p>
										</a>
										<a href="javascript:;">
											<p>Between $2000 - $3000</p>
										</a>
										<a href="javascript:;">
											<p>Between $3000 - $4000</p>
										</a>
										<a href="javascript:;">
											<p>Between $4000 - $5000</p>
										</a>
										<a href="javascript:;">
											<p>Above $5000</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Nested Explore By Make Tablet -->
						<div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasExploreByMakeTablet" aria-labelledby="nestedOffcanvasExploreByMakeTablet">
							<div class="offcanvas-header">
								<div class="position-relative" id="nestedOffcanvasExploreByMakeTablet" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasTablet" aria-controls="nestedOffcanvasTablet"> <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy"> <span class="tablet-find-car-nested position-absolute text-nowrap">Explore By Make</span> </div>
								<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
							</div>
							<div class="offcanvas-body">
								<div class="tablet-main-offcanvas">
									<div class="mb-3 position-relative">
										<a href="javascript:;">
											<p>Less than $1000</p>
										</a>
										<a href="javascript:;">
											<p>Between $1000 - $2000</p>
										</a>
										<a href="javascript:;">
											<p>Between $2000 - $3000</p>
										</a>
										<a href="javascript:;">
											<p>Between $3000 - $4000</p>
										</a>
										<a href="javascript:;">
											<p>Between $4000 - $5000</p>
										</a>
										<a href="javascript:;">
											<p>Above $5000</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Nested Explore By Type Tablet -->
						<div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasExploreByTypeTablet" aria-labelledby="nestedOffcanvasExploreByTypeTablet">
							<div class="offcanvas-header">
								<div class="position-relative" id="nestedOffcanvasExploreByTypeTablet" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasTablet" aria-controls="nestedOffcanvasTablet"> <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy"> <span class="tablet-find-car-nested position-absolute text-nowrap">Explore by Discount</span> </div>
								<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
							</div>
							<div class="offcanvas-body">
								<div class="tablet-main-offcanvas">
									<div class="mb-3 position-relative">
										<a href="javascript:;">
											<p>60% Off or More </p>
										</a>
										<a href="javascript:;">
											<p>50% Off or More </p>
										</a>
										<a href="javascript:;">
											<p>40% Off or More</p>
										</a>
										<a href="javascript:;">
											<p>30% Off or More</p>
										</a>
										<a href="javascript:;">
											<p>1% -30%</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Nested Explore By Year Tablet -->
						<div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasExploreByYearTablet" aria-labelledby="nestedOffcanvasExploreByYearTablet">
							<div class="offcanvas-header">
								<div class="position-relative" id="nestedOffcanvasExploreByYearTablet" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasTablet" aria-controls="nestedOffcanvasTablet"> <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy"> <span class="tablet-find-car-nested position-absolute text-nowrap">Explore by Year</span> </div>
								<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
							</div>
							<div class="offcanvas-body">
								<div class="tablet-main-offcanvas">
									<div class="mb-3 position-relative">
										<a href="javascript:;">
											<p>2000 - 2005 </p>
										</a>
										<a href="javascript:;">
											<p>2005 - 2010 </p>
										</a>
										<a href="javascript:;">
											<p>2010 - 2015</p>
										</a>
										<a href="javascript:;">
											<p>2015 - 2020</p>
										</a>
										<a href="javascript:;">
											<p>2020 - 2024</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Nested Explore By Discount Tablet -->
						<div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasExploreByDiscountTablet" aria-labelledby="nestedOffcanvasExploreByDiscountTablet">
							<div class="offcanvas-header">
								<div class="position-relative" id="nestedOffcanvasExploreByYearTablet" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasTablet" aria-controls="nestedOffcanvasTablet"> <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy"> <span class="tablet-find-car-nested position-absolute text-nowrap">Explore by Discount</span> </div>
								<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
							</div>
							<div class="offcanvas-body">
								<div class="tablet-main-offcanvas">
									<div class="mb-3 position-relative">
										<a href="javascript:;">
											<p>60% Off or More </p>
										</a>
										<a href="javascript:;">
											<p>50% Off or More </p>
										</a>
										<a href="javascript:;">
											<p>40% Off or More</p>
										</a>
										<a href="javascript:;">
											<p>30% Off or More</p>
										</a>
										<a href="javascript:;">
											<p>1% -30%</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Nested Explore By Inventory Location Tablet -->
						<div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasExploreByInventoryLocationTablet" aria-labelledby="nestedOffcanvasExploreByInventoryLocationTablet">
							<div class="offcanvas-header">
								<div class="position-relative" id="nestedOffcanvasExploreByInventoryLocationTablet" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasTablet" aria-controls="nestedOffcanvasTablet"> <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy"> <span class="tablet-find-car-nested position-absolute text-nowrap">Inventory Location</span> </div>
								<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
							</div>
							<div class="offcanvas-body">
								<div class="tablet-main-offcanvas">
									<div class="mb-3 position-relative">
										<a href="javascript:;">
											<p>Japan </p>
										</a>
										<a href="javascript:;">
											<p>Tanzania </p>
										</a>
										<a href="javascript:;">
											<p>Dominican Republic</p>
										</a>
										<a href="javascript:;">
											<p>Kenya</p>
										</a>
										<a href="javascript:;">
											<p>Chile</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Nested Explore By Other Categories Tablet -->
						<div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasExploreByOtherCategoriesTablet" aria-labelledby="nestedOffcanvasExploreByOtherCategoriesTablet">
							<div class="offcanvas-header">
								<div class="position-relative" id="nestedOffcanvasExploreByOtherCategoriesTablet" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasTablet" aria-controls="nestedOffcanvasTablet"> <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy"> <span class="tablet-find-car-nested position-absolute text-nowrap">Other Categories</span> </div>
								<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
							</div>
							<div class="offcanvas-body">
								<div class="tablet-main-offcanvas">
									<div class="mb-3 position-relative">
										<a href="javascript:;">
											<p>Right Hand Drive </p>
										</a>
										<a href="javascript:;">
											<p>Diesel </p>
										</a>
										<a href="javascript:;">
											<p>Gasoline/Petrol</p>
										</a>
										<a href="javascript:;">
											<p>Electric</p>
										</a>
										<a href="javascript:;">
											<p>Hybrid</p>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-auto brand-logo-area p-0">
						<a class="brand-logo" href="#" aria-label="Homepage"> 
                            <img src="{{asset('assets/images/header-images/header-logo.webp')}}" alt="Company Logo" class="img-fluid" loading="lazy" width="140" height="46"> </a>
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


{{-- ===================== Mobiel View =================--}}

<section class="mobile-view" aria-labelledby="mobile-header">
    <header>
        <div class="headerSearch pb-3">
            <div class="container px-2">
                <div class="row align-items-center mb-3 mt-2">
                    <div class="col-auto d-flex align-items-center p-0">
                          <!-- Main Offcanvas -->
                        <button class="btn btn-offcanvas" type="button" data-bs-toggle="offcanvas" data-bs-target="#mainOffcanvas" aria-controls="mainOffcanvas">
                            <img src="{{asset('assets/images/header-images/menu-bars.webp')}}" class="img-fluid" loading="lazy" width="24" height="24" alt="Menu">
                        </button>
            
                        <!-- Find Your CarOffcanvas Component -->
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="mainOffcanvas" aria-labelledby="mainOffcanvasLabel">
                            <div class="offcanvas-header position-relative">
                                <div id="mainOffcanvasLabel" class="mobile-offcanvas-heading position-absolute">Menu</div>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="mobile-main-offcanvas">
                                    <div class="d-flex align-items-center justify-content-between mb-3 position-relative">
                                        <a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvas1" aria-controls="nestedOffcanvas1">
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('assets/images/icons/mobile-find-your-car.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
                                                <p class="mb-0 ms-2 pt-1">Find Your Car</p>
                                            </div>
                                            <div class="ms-2 position-absolute end-0">
                                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-3 position-relative">
                                        <a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasLocalPages" aria-controls="nestedOffcanvasLocalPages">
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('assets/images/icons/mobile-local-pages-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
                                                <p class="mb-0 ms-2 pt-1">Local Pages</p>
                                            </div>
                                            <div class="ms-2 position-absolute end-0">
                                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-3 position-relative">
                                        <a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasCarServices" aria-controls="nestedOffcanvasCarServices">
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('assets/images/icons/mobile-car-service-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
                                                <p class="mb-0 ms-2 pt-1">Car Services</p>
                                            </div>
                                            <div class="ms-2 position-absolute end-0">
                                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-3 position-relative">
                                        <a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasCompanyOverview" aria-controls="nestedOffcanvasCompanyOverview">
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('assets/images/icons/mobile-company-over-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
                                                <p class="mb-0 ms-2 pt-1">Company Overview</p>
                                            </div>
                                            <div class="ms-2 position-absolute end-0">
                                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-3 position-relative">
                                        <a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasReviews" aria-controls="nestedOffcanvasReviews">
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('assets/images/icons/mobile-review-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
                                                <p class="mb-0 ms-2 pt-1">Reviews</p>
                                            </div>
                                            <div class="ms-2 position-absolute end-0">
                                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-3 position-relative">
                                        <a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasHelp" aria-controls="nestedOffcanvasHelp">
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('assets/images/icons/mobile-help-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
                                                <p class="mb-0 ms-2 pt-1">Help</p>
                                            </div>
                                            <div class="ms-2 position-absolute end-0">
                                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-3 position-relative">
                                        <a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasSettings" aria-controls="nestedOffcanvasSettings">
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('assets/images/icons/mobile-setting-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
                                                <p class="mb-0 ms-2 pt-1">Settings</p>
                                            </div>
                                            <div class="ms-2 position-absolute end-0">
                                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        
                        
                        <!-- Find Your Car Offcanvas -->
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvas1" aria-labelledby="nestedOffcanvas1Label">
                            <div class="offcanvas-header">
                                <div class="position-relative" id="nestedOffcanvas1Label" data-bs-toggle="offcanvas" data-bs-target="#mainOffcanvas" aria-controls="mainOffcanvas">
                                    <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy">
                                    <span class="mobile-find-car-nested position-absolute text-nowrap">Find Your Car</span>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="mobile-main-offcanvas">
                                    <div class="d-flex align-items-center justify-content-between mb-3 position-relative">
                                        <a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvas2" aria-controls="nestedOffcanvas2">
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('assets/images/icons/mobile-explore-stock-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
                                                <p class="mb-0 ms-2 pt-1">Explore Stock</p>
                                            </div>
                                            <div class="ms-2 position-absolute end-0">
                                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-3 position-relative">
                                        <a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasExplorePrice" aria-controls="nestedOffcanvasLabelExplorePrice">
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('assets/images/icons/mobile-explore-price-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
                                                <p class="mb-0 ms-2 pt-1">Explore By Price</p>
                                            </div>
                                            <div class="ms-2 position-absolute end-0">
                                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-3 position-relative">
                                        <a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasExploreMake" aria-controls="nestedOffcanvasLabelExploreMake">
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('assets/images/icons/mobile-explore-make-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
                                                <p class="mb-0 ms-2 pt-1">Explore By Make</p>
                                            </div>
                                            <div class="ms-2 position-absolute end-0">
                                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-3 position-relative">
                                        <a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasExploreType" aria-controls="nestedOffcanvasLabelExploreType">
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('assets/images/icons/mobile-explore-type-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
                                                <p class="mb-0 ms-2 pt-1">Explore By Type</p>
                                            </div>
                                            <div class="ms-2 position-absolute end-0">
                                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-3 position-relative">
                                        <a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasExploreYear" aria-controls="nestedOffcanvasLabelExploreYear">
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('assets/images/icons/mobile-explore-year-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
                                                <p class="mb-0 ms-2 pt-1">Explore By Year</p>
                                            </div>
                                            <div class="ms-2 position-absolute end-0">
                                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>


                                    <div class="d-flex align-items-center justify-content-between mb-3 position-relative">
                                        <a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasExploreDiscount" aria-controls="nestedOffcanvasLabelExploreDiscount">
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('assets/images/icons/mobile-explore-discount-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
                                                <p class="mb-0 ms-2 pt-1">Explore By Discount</p>
                                            </div>
                                            <div class="ms-2 position-absolute end-0">
                                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>


                                    <div class="d-flex align-items-center justify-content-between mb-3 position-relative">
                                        <a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasExploreLocation" aria-controls="nestedOffcanvasLabelExploreLocation">
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('assets/images/icons/mobile-inventory-location-icon.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
                                                <p class="mb-0 ms-2 pt-1"> Inventory Location </p>
                                            </div>
                                            <div class="ms-2 position-absolute end-0">
                                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-3 position-relative">
                                        <a href="javascript:;" class="d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvasExploreCategories" aria-controls="nestedOffcanvasLabelExploreCategories">
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('assets/images/icons/other-catego.webp')}}" alt="Find Cars" class="img-fluid" loading="lazy" width="20" height="20">
                                                <p class="mb-0 ms-2 pt-1"> Other Categories </p>
                                            </div>
                                            <div class="ms-2 position-absolute end-0">
                                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                    
                                </div>
                              
                                
                            </div>
                        </div>

                         <!-- Local Page Offcanvas -->
                         <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasLocalPages" aria-labelledby="nestedOffcanvasLocalPages">
                            <div class="offcanvas-header">
                                <div class="position-relative" id="nestedOffcanvasLocalPages" data-bs-toggle="offcanvas" data-bs-target="#mainOffcanvas" aria-controls="mainOffcanvas">
                                    <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy">
                                    <span class="mobile-find-car-nested position-absolute text-nowrap">Local Pages</span>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="mobile-main-offcanvas">
                                   <div class="mobile-countries-area d-grid">
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/PK.webp')}}" alt="Pakistan" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Pakistan</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/AG.webp')}}" alt="Antigua" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Antigua</span>
                                    </a>

                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/AI.webp')}}" alt="Anguilla" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Anguilla</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/Am.webp')}}" alt="Armenia" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Armenia</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/AU.webp')}}" alt="Australia" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Australia</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/AZ.webp')}}" alt="Azerbaijan" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Azerbaijan</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/BS.webp')}}" alt="Bahamas" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Bahamas</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/BD.webp')}}" alt="Bangladesh" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Bangladesh</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/BW.webp')}}" alt="Botswana" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Botswana</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/CY.webp')}}" alt="Cyprus" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Cyprus</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/GT.webp')}}" alt="Guatemala" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Guatemala</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/KG.webp')}}" alt="Kyrgyzstan" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Kyrgyzstan</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/MZ.webp')}}" alt="Mozambique" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Mozambique</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/PY.webp')}}" alt="Paraguay" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Paraguay</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/SB.webp')}}" alt="Solomon Islands" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Solomon Islands</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/TZ.webp')}}" alt="Tanzania" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Tanzania</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/ZM.webp')}}" alt="Zambia" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Zambia</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/AU.webp')}}" alt="Australia" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Australia</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/BI.webp')}}" alt="Burundi" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Burundi</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/DO.webp')}}" alt="Dominican Republic" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Dominican Republic</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/GY.webp')}}" alt="Guyana" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Guyana</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/LS.webp')}}" alt="Lesotho" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Lesotho</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/NA.webp')}}" alt="Namibia" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Namibia</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/CD.webp')}}" alt="DR Congo" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">DR Congo</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/SO.webp')}}" alt="Somalia" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Somalia</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/TO.webp')}}" alt="Tonga" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Tonga</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <img src="{{asset('assets/images/country-flags/ZW.webp')}}" alt="Zimbabwe" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Zimbabwe</span>
                                    </a>
                                    
                                   </div>
                                </div>
                              
                                
                            </div>
                        </div>

                         <!-- Car Services Offcanvas -->
                         <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasCarServices" aria-labelledby="nestedOffcanvasCarServices">
                            <div class="offcanvas-header">
                                <div class="position-relative" id="nestedOffcanvasCarServices" data-bs-toggle="offcanvas" data-bs-target="#mainOffcanvas" aria-controls="mainOffcanvas">
                                    <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy">
                                    <span class="mobile-find-car-nested position-absolute text-nowrap">Car Services</span>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="mobile-main-offcanvas d-grid">
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.00033 2.66669H9.63099C9.74406 2.66669 9.85527 2.69545 9.95417 2.75026C10.0531 2.80507 10.1364 2.88414 10.1963 2.98002L12.5003 6.66669H15.439C15.4969 6.66665 15.5538 6.68168 15.6041 6.7103C15.6544 6.73893 15.6964 6.78016 15.7259 6.82995C15.7555 6.87973 15.7715 6.93635 15.7725 6.99422C15.7735 7.0521 15.7594 7.10924 15.7317 7.16002L13.0917 12H12.667C12.3216 12.0003 11.9777 11.9559 11.6437 11.868L13.7537 8.00002H2.26699L2.96566 11.8827C2.64983 11.9608 2.32567 12.0002 2.00033 12H1.63699L0.810326 7.45269C0.792864 7.35671 0.796677 7.25807 0.821497 7.16373C0.846317 7.06939 0.891538 6.98165 0.95397 6.90669C1.0164 6.83174 1.09452 6.77139 1.18282 6.72992C1.27112 6.68845 1.36744 6.66687 1.46499 6.66669H2.00033V3.33335C2.00033 3.15654 2.07056 2.98697 2.19559 2.86195C2.32061 2.73693 2.49018 2.66669 2.66699 2.66669H3.33366V0.666687H6.00033V2.66669ZM3.33366 6.66669H10.9283L9.26166 4.00002H3.33366V6.66669ZM2.00033 13.3334C2.9845 13.3347 3.93438 12.9719 4.66699 12.3147C5.39961 12.9719 6.34948 13.3347 7.33366 13.3334C8.31783 13.3347 9.26771 12.9719 10.0003 12.3147C10.7329 12.9719 11.6828 13.3347 12.667 13.3334H14.0003V14.6667H12.667C11.7308 14.6682 10.8108 14.4221 10.0003 13.9534C9.18989 14.4221 8.2699 14.6682 7.33366 14.6667C6.39742 14.6682 5.47743 14.4221 4.66699 13.9534C3.85656 14.4221 2.93656 14.6682 2.00033 14.6667H0.666992V13.3334H2.00033Z" fill="#2384C1"/>
                                            </svg> 
                                        <span class="mx-2">Shipping Schedule</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0.666687L13.478 1.88402C13.7827 1.95202 14 2.22202 14 2.53469V9.19269C14 10.53 13.3313 11.7794 12.2187 12.5207L8 15.3334L3.78133 12.5207C2.668 11.7787 2 10.53 2 9.19335V2.53469C2 2.22202 2.21733 1.95202 2.522 1.88402L8 0.666687ZM8 2.03269L3.33333 3.06935V9.19269C3.33333 10.084 3.77867 10.9167 4.52067 11.4114L8 13.7314L11.4793 11.4114C12.2213 10.9167 12.6667 10.0847 12.6667 9.19335V3.06935L8 2.03335V2.03269ZM10.968 5.48135L11.9113 6.42402L7.66867 10.6667L4.84 7.83802L5.78267 6.89535L7.668 8.78069L10.968 5.48069V5.48135Z" fill="#2384C1"/>
                                            </svg>
                                        <span class="mx-2">Insurance Service</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.0003 12.3333H15.3337V13.6666H0.666992V12.3333H2.00033V0.99998C2.00033 0.823169 2.07056 0.653599 2.19559 0.528575C2.32061 0.403551 2.49018 0.333313 2.66699 0.333313H13.3337C13.5105 0.333313 13.68 0.403551 13.8051 0.528575C13.9301 0.653599 14.0003 0.823169 14.0003 0.99998V12.3333ZM12.667 12.3333V1.66665H3.33366V12.3333H12.667ZM5.33366 6.33331H7.33366V7.66665H5.33366V6.33331ZM5.33366 3.66665H7.33366V4.99998H5.33366V3.66665ZM5.33366 8.99998H7.33366V10.3333H5.33366V8.99998ZM8.66699 8.99998H10.667V10.3333H8.66699V8.99998ZM8.66699 6.33331H10.667V7.66665H8.66699V6.33331ZM8.66699 3.66665H10.667V4.99998H8.66699V3.66665Z" fill="#2384C1"/>
                                            </svg>
                                        <span class="mx-2">Storage Service</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.99967 14.6666C4.31767 14.6666 1.33301 11.682 1.33301 7.99998C1.33301 4.31798 4.31767 1.33331 7.99967 1.33331C11.6817 1.33331 14.6663 4.31798 14.6663 7.99998C14.6663 11.682 11.6817 14.6666 7.99967 14.6666ZM7.99967 13.3333C9.41416 13.3333 10.7707 12.7714 11.7709 11.7712C12.7711 10.771 13.333 9.41447 13.333 7.99998C13.333 6.58549 12.7711 5.22894 11.7709 4.22874C10.7707 3.22855 9.41416 2.66665 7.99967 2.66665C6.58519 2.66665 5.22863 3.22855 4.22844 4.22874C3.22824 5.22894 2.66634 6.58549 2.66634 7.99998C2.66634 9.41447 3.22824 10.771 4.22844 11.7712C5.22863 12.7714 6.58519 13.3333 7.99967 13.3333ZM5.66634 9.33331H9.33301C9.42141 9.33331 9.5062 9.29819 9.56871 9.23568C9.63122 9.17317 9.66634 9.08839 9.66634 8.99998C9.66634 8.91157 9.63122 8.82679 9.56871 8.76428C9.5062 8.70177 9.42141 8.66665 9.33301 8.66665H6.66634C6.22431 8.66665 5.80039 8.49105 5.48783 8.17849C5.17527 7.86593 4.99967 7.44201 4.99967 6.99998C4.99967 6.55795 5.17527 6.13403 5.48783 5.82147C5.80039 5.50891 6.22431 5.33331 6.66634 5.33331H7.33301V3.99998H8.66634V5.33331H10.333V6.66665H6.66634C6.57794 6.66665 6.49315 6.70177 6.43064 6.76428C6.36813 6.82679 6.33301 6.91157 6.33301 6.99998C6.33301 7.08839 6.36813 7.17317 6.43064 7.23568C6.49315 7.29819 6.57794 7.33331 6.66634 7.33331H9.33301C9.77504 7.33331 10.199 7.50891 10.5115 7.82147C10.8241 8.13403 10.9997 8.55795 10.9997 8.99998C10.9997 9.44201 10.8241 9.86593 10.5115 10.1785C10.199 10.4911 9.77504 10.6666 9.33301 10.6666H8.66634V12H7.33301V10.6666H5.66634V9.33331Z" fill="#2384C1"/>
                                            </svg>
                                        <span class="mx-2">Finance Service</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.44281 5.48637C6.36079 5.42231 6.25968 5.38753 6.15562 5.38753H1.77201V4.00697C1.77201 3.4985 2.18576 3.08475 2.69423 3.08475H7.00862L14.2276 8.59886V11.5644L6.44281 5.48637ZM6.44281 5.48637L6.41203 5.52578M6.44281 5.48637L6.4428 5.48637L6.41203 5.52578M6.41203 5.52578C6.33881 5.46858 6.24853 5.43753 6.15562 5.43753H1.77201L6.41203 5.52578ZM14.6948 12.9875H14.6948C14.9516 12.9872 15.1609 12.7782 15.1609 12.5209V8.36808C15.1609 8.22264 15.0931 8.0855 14.9775 7.99723L7.44972 2.24724C7.44972 2.24724 7.44972 2.24724 7.44972 2.24724C7.36836 2.18508 7.26883 2.15142 7.16645 2.15142H2.69423C1.67103 2.15142 0.838672 2.98377 0.838672 4.00697V5.85419C0.838672 6.11192 1.04761 6.32086 1.30534 6.32086H5.99502L11.2036 10.3875H6.82756V7.52086C6.82756 7.26313 6.61862 7.05419 6.36089 7.05419H3.80534C2.16947 7.05419 0.838672 8.385 0.838672 10.0209V12.5209C0.838672 12.7786 1.04761 12.9875 1.30534 12.9875H2.61393C2.79877 13.4894 3.28144 13.8486 3.84701 13.8486C4.41257 13.8486 4.89524 13.4894 5.08008 12.9875H9.2806C9.46544 13.4894 9.94811 13.8486 10.5137 13.8486C11.0792 13.8486 11.5619 13.4894 11.7467 12.9875L14.6948 12.9875ZM11.7365 12.0542C11.6059 11.7231 11.3446 11.4573 11.0165 11.3209H12.399L13.3382 12.0542H11.7365ZM9.29087 12.0542H6.82756V11.3209H10.0109C9.6827 11.4573 9.42141 11.7231 9.29087 12.0542ZM3.80534 7.98753H4.22756V9.55419H1.8261C2.03757 8.65717 2.84482 7.98753 3.80534 7.98753ZM1.77201 10.4875H4.69423C4.95195 10.4875 5.16089 10.2786 5.16089 10.0209V7.98753H5.89423V12.0542H5.06981C4.87763 11.5668 4.40211 11.2209 3.84701 11.2209C3.2919 11.2209 2.81638 11.5668 2.62421 12.0542H1.77201V10.4875ZM3.84701 12.9153C3.6372 12.9153 3.46645 12.7446 3.46645 12.5347C3.46645 12.3249 3.6372 12.1542 3.84701 12.1542C4.05681 12.1542 4.22756 12.3249 4.22756 12.5347C4.22756 12.7446 4.05681 12.9153 3.84701 12.9153ZM10.5137 12.9153C10.3039 12.9153 10.1331 12.7446 10.1331 12.5347C10.1331 12.3249 10.3039 12.1542 10.5137 12.1542C10.7235 12.1542 10.8942 12.3249 10.8942 12.5347C10.8942 12.7446 10.7235 12.9153 10.5137 12.9153Z" fill="#2384C1" stroke="#2384C1" stroke-width="0.1"/>
                                            </svg>
                                        <span class="mx-2"> Car Carrier Service </span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.33333 5.33331V13.3333H12.6667V5.33331H3.33333ZM3.33333 3.99998H12.6667V2.66665H3.33333V3.99998ZM13.3333 14.6666H2.66667C2.48986 14.6666 2.32029 14.5964 2.19526 14.4714C2.07024 14.3464 2 14.1768 2 14V1.99998C2 1.82317 2.07024 1.6536 2.19526 1.52858C2.32029 1.40355 2.48986 1.33331 2.66667 1.33331H13.3333C13.5101 1.33331 13.6797 1.40355 13.8047 1.52858C13.9298 1.6536 14 1.82317 14 1.99998V14C14 14.1768 13.9298 14.3464 13.8047 14.4714C13.6797 14.5964 13.5101 14.6666 13.3333 14.6666ZM4.66667 6.66665H7.33333V9.33331H4.66667V6.66665ZM4.66667 10.6666H11.3333V12H4.66667V10.6666ZM8.66667 7.33331H11.3333V8.66665H8.66667V7.33331Z" fill="#2384C1"/>
                                            </svg>
                                        <span class="mx-2">Custom Clearance</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.33301 13.333V14.6664H1.33301V13.333H9.33301ZM9.72367 0.457031L14.909 5.64236L13.9663 6.58636L13.2597 6.35036L11.6083 7.9997L15.3797 11.771L14.437 12.7137L10.6663 8.94236L9.06367 10.545L9.25234 11.2997L8.30901 12.2424L3.12367 7.05703L4.06701 6.11436L4.82034 6.30236L9.01634 2.10703L8.78101 1.40036L9.72367 0.457031ZM10.195 2.81436L5.48101 7.5277L7.83767 9.88503L12.5517 5.1717L10.195 2.81436Z" fill="#2384C1"/>
                                            </svg>
                                        <span class="mx-2">Auction Service</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.33333 3.06935V9.19269C3.33334 9.63166 3.44172 10.0638 3.64884 10.4509C3.85597 10.8379 4.15543 11.1678 4.52067 11.4114L8 13.7314L11.4793 11.4114C11.8445 11.1679 12.1439 10.8381 12.351 10.4512C12.5581 10.0643 12.6665 9.63221 12.6667 9.19335V3.06935L8 2.03335L3.33333 3.06935ZM2.522 1.88402L8 0.666687L13.478 1.88402C13.626 1.91693 13.7584 1.99933 13.8533 2.11762C13.9482 2.23592 14 2.38303 14 2.53469V9.19269C14 9.85118 13.8373 10.4995 13.5266 11.08C13.2158 11.6606 12.7666 12.1554 12.2187 12.5207L8 15.3334L3.78133 12.5207C3.23352 12.1555 2.78431 11.6608 2.47357 11.0803C2.16282 10.4999 2.00016 9.85173 2 9.19335V2.53469C2.00003 2.38303 2.05176 2.23592 2.14666 2.11762C2.24156 1.99933 2.37396 1.91693 2.522 1.88402ZM8 9.00002L6.04067 10.03L6.41467 7.84869L4.83 6.30335L7.02067 5.98469L8 4.00002L8.98 5.98469L11.17 6.30335L9.58533 7.84869L9.95867 10.03L8 9.00002Z" fill="#2384C1"/>
                                                </svg>
                                        <span class="mx-2">Security Export</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.6663 13.3333H3.33301V14C3.33301 14.1768 3.26277 14.3463 3.13775 14.4714C3.01272 14.5964 2.84315 14.6666 2.66634 14.6666H1.99967C1.82286 14.6666 1.65329 14.5964 1.52827 14.4714C1.40325 14.3463 1.33301 14.1768 1.33301 14V7.33329L2.98634 3.47463C3.08922 3.23463 3.26031 3.03012 3.47838 2.88648C3.69644 2.74284 3.95189 2.66639 4.21301 2.66663H11.7863C12.0472 2.66666 12.3024 2.74322 12.5202 2.88685C12.738 3.03047 12.9089 3.23484 13.0117 3.47463L14.6663 7.33329V14C14.6663 14.1768 14.5961 14.3463 14.4711 14.4714C14.3461 14.5964 14.1765 14.6666 13.9997 14.6666H13.333C13.1562 14.6666 12.9866 14.5964 12.8616 14.4714C12.7366 14.3463 12.6663 14.1768 12.6663 14V13.3333ZM13.333 8.66663H2.66634V12H13.333V8.66663ZM2.78367 7.33329H13.2157L11.787 3.99996H4.21301L2.78434 7.33329H2.78367ZM4.33301 11.3333C4.06779 11.3333 3.81344 11.2279 3.6259 11.0404C3.43836 10.8529 3.33301 10.5985 3.33301 10.3333C3.33301 10.0681 3.43836 9.81372 3.6259 9.62619C3.81344 9.43865 4.06779 9.33329 4.33301 9.33329C4.59822 9.33329 4.85258 9.43865 5.04011 9.62619C5.22765 9.81372 5.33301 10.0681 5.33301 10.3333C5.33301 10.5985 5.22765 10.8529 5.04011 11.0404C4.85258 11.2279 4.59822 11.3333 4.33301 11.3333ZM11.6663 11.3333C11.4011 11.3333 11.1468 11.2279 10.9592 11.0404C10.7717 10.8529 10.6663 10.5985 10.6663 10.3333C10.6663 10.0681 10.7717 9.81372 10.9592 9.62619C11.1468 9.43865 11.4011 9.33329 11.6663 9.33329C11.9316 9.33329 12.1859 9.43865 12.3734 9.62619C12.561 9.81372 12.6663 10.0681 12.6663 10.3333C12.6663 10.5985 12.561 10.8529 12.3734 11.0404C12.1859 11.2279 11.9316 11.3333 11.6663 11.3333Z" fill="#2384C1"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.34733 4.95689L5.31368 4.66663L5.18687 4.68133L5.22817 5.0376L5.4891 5.1786L5.63289 5.47002C5.60707 5.47618 5.58314 5.48771 5.56234 5.5062C5.5296 5.53531 5.51223 5.57501 5.50206 5.61565C5.48966 5.66526 5.48532 5.7288 5.48381 5.80266L5.34143 5.79521L5.09775 6.22485L4.24512 6.59682L4.29616 6.71383L5.1878 6.32484L5.41355 5.92682L5.483 5.93045C5.483 5.93043 5.483 5.93047 5.483 5.93045C5.483 5.93361 5.483 5.93684 5.483 5.94002C5.483 5.98876 5.49881 6.032 5.53211 6.06435C5.56383 6.09518 5.60528 6.11014 5.64606 6.11672C5.70891 6.12686 5.78437 6.11933 5.86063 6.10292L5.88081 6.27703L6.14175 6.41802L6.43856 7.01956L6.55304 6.96307L6.23823 6.32505L5.99997 6.19631L5.98523 6.0692C6.06417 6.04388 6.14295 6.01167 6.21186 5.97809C6.29671 5.93676 6.37344 5.89008 6.41566 5.84787C6.46273 5.8008 6.46931 5.74179 6.45489 5.68831C6.45084 5.67329 6.44513 5.65844 6.43816 5.64388L6.871 5.42747L7.07564 5.01819H7.46172V4.89053H6.99674L6.77585 5.33231L6.36516 5.53766C6.29547 5.45799 6.20028 5.38381 6.13226 5.33837C6.0866 5.30604 6.03367 5.31514 5.99736 5.32673C5.95885 5.33902 5.91751 5.36112 5.88038 5.38157C5.87421 5.38496 5.86811 5.38834 5.86207 5.39169C5.8296 5.40967 5.79889 5.42667 5.76876 5.44027C5.76648 5.44129 5.76424 5.44228 5.76204 5.44324L5.58558 5.08563L5.34733 4.95689ZM5.69299 5.59181L5.78591 5.78014L5.9004 5.72365L5.81858 5.55783C5.81947 5.55744 5.82035 5.55704 5.82124 5.55664C5.85661 5.54069 5.89268 5.52069 5.92499 5.50278C5.93078 5.49957 5.93644 5.49643 5.94195 5.4934C5.98051 5.47217 6.01134 5.45627 6.03619 5.44834C6.05107 5.44359 6.05797 5.44356 6.06022 5.44378C6.11575 5.4808 6.18902 5.53756 6.24638 5.59705L5.94381 5.74833L6.00091 5.86251L6.32396 5.70098C6.32738 5.70835 6.32993 5.71522 6.33163 5.72153C6.33695 5.74127 6.33323 5.74976 6.32539 5.7576C6.29896 5.78403 6.23841 5.82316 6.15595 5.86333C6.09897 5.89109 6.03479 5.91778 5.97022 5.93972L5.96632 5.90605L5.83951 5.92075L5.84585 5.97543C5.77291 5.99208 5.71038 5.99778 5.66639 5.99069C5.64067 5.98654 5.62743 5.97898 5.62108 5.9728C5.6163 5.96816 5.61066 5.95992 5.61066 5.94002C5.61066 5.93905 5.61066 5.93809 5.61066 5.93713L5.7991 5.94699L5.80578 5.81951L5.61142 5.80934C5.61273 5.73804 5.61629 5.6851 5.62591 5.64661C5.63291 5.61861 5.64128 5.60683 5.64715 5.60162C5.65173 5.59755 5.66081 5.592 5.68411 5.592C5.68707 5.592 5.69003 5.59194 5.69299 5.59181Z" fill="#2F2B43"/>
                                            </svg>
                                        <span class="mx-2">Pre Export Inspection</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.66634 6.93329V2.66663C2.66634 2.48981 2.73658 2.32025 2.8616 2.19522C2.98663 2.0702 3.1562 1.99996 3.33301 1.99996H6.66634V0.666626H9.33301V1.99996H12.6663C12.8432 1.99996 13.0127 2.0702 13.1377 2.19522C13.2628 2.32025 13.333 2.48981 13.333 2.66663V6.93329L14.057 7.15063C14.2211 7.2 14.3598 7.31065 14.4445 7.45961C14.5292 7.60857 14.5532 7.7844 14.5117 7.95063L13.501 11.996C13.0706 12.0182 12.6399 11.9566 12.233 11.8146L13.0663 8.24663L7.99967 6.66663L2.93301 8.24663L3.76634 11.814C3.35945 11.9562 2.92881 12.018 2.49834 11.996L1.48767 7.95063C1.44614 7.7844 1.4702 7.60857 1.55486 7.45961C1.63951 7.31065 1.77827 7.2 1.94234 7.15063L2.66634 6.93329ZM3.99967 6.53329L7.99967 5.33329L11.9997 6.53329V3.33329H3.99967V6.53329ZM2.66634 13.3333C3.65052 13.3347 4.60039 12.9718 5.33301 12.3146C6.06562 12.9718 7.0155 13.3347 7.99967 13.3333C8.98385 13.3347 9.93372 12.9718 10.6663 12.3146C11.399 12.9718 12.3488 13.3347 13.333 13.3333H14.6663V14.6666H13.333C12.3968 14.6682 11.4768 14.4221 10.6663 13.9533C9.85591 14.4221 8.93591 14.6682 7.99967 14.6666C7.06344 14.6682 6.14344 14.4221 5.33301 13.9533C4.52257 14.4221 3.60258 14.6682 2.66634 14.6666H1.33301V13.3333H2.66634Z" fill="#2384C1"/>
                                            </svg>                                            
                                        <span class="mx-2">Marine Insurance Service</span>
                                    </a>
                                </div>
                              
                                
                            </div>
                        </div>

                         <!-- Company Overview Offcanvas -->
                         <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasCompanyOverview" aria-labelledby="nestedOffcanvasCompanyOverview">
                            <div class="offcanvas-header">
                                <div class="position-relative" id="nestedOffcanvasCompanyOverview" data-bs-toggle="offcanvas" data-bs-target="#mainOffcanvas" aria-controls="mainOffcanvas">
                                    <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy">
                                    <span class="mobile-find-car-nested position-absolute text-nowrap">Company Overview</span>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="mobile-main-offcanvas d-grid">
                                   
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.99967 14.6666C4.31767 14.6666 1.33301 11.682 1.33301 7.99998C1.33301 4.31798 4.31767 1.33331 7.99967 1.33331C11.6817 1.33331 14.6663 4.31798 14.6663 7.99998C14.6663 11.682 11.6817 14.6666 7.99967 14.6666ZM7.99967 13.3333C9.41416 13.3333 10.7707 12.7714 11.7709 11.7712C12.7711 10.771 13.333 9.41447 13.333 7.99998C13.333 6.58549 12.7711 5.22894 11.7709 4.22874C10.7707 3.22855 9.41416 2.66665 7.99967 2.66665C6.58519 2.66665 5.22863 3.22855 4.22844 4.22874C3.22824 5.22894 2.66634 6.58549 2.66634 7.99998C2.66634 9.41447 3.22824 10.771 4.22844 11.7712C5.22863 12.7714 6.58519 13.3333 7.99967 13.3333ZM7.33301 4.66665H8.66634V5.99998H7.33301V4.66665ZM7.33301 7.33331H8.66634V11.3333H7.33301V7.33331Z" fill="#2384C1"/>
                                            </svg>                                            
                                        <span class="mx-2">About SAT</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">     
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.6663 14H3.33301V14.6667C3.33301 14.8435 3.26277 15.013 3.13775 15.1381C3.01272 15.2631 2.84315 15.3333 2.66634 15.3333H1.99967C1.82286 15.3333 1.65329 15.2631 1.52827 15.1381C1.40325 15.013 1.33301 14.8435 1.33301 14.6667V7.99999L2.94434 5.31399C3.0628 5.11656 3.23038 4.95316 3.43074 4.83972C3.6311 4.72628 3.85743 4.66666 4.08767 4.66666H11.9117C12.1419 4.66666 12.3682 4.72628 12.5686 4.83972C12.769 4.95316 12.9365 5.11656 13.055 5.31399L14.6663 7.99999V14.6667C14.6663 14.8435 14.5961 15.013 14.4711 15.1381C14.3461 15.2631 14.1765 15.3333 13.9997 15.3333H13.333C13.1562 15.3333 12.9866 15.2631 12.8616 15.1381C12.7366 15.013 12.6663 14.8435 12.6663 14.6667V14ZM13.333 9.33333H2.66634V12.6667H13.333V9.33333ZM2.88767 7.99999H13.1117L11.9117 5.99999H4.08767L2.88767 7.99999ZM3.62634 2.29333L4.33301 1.58533L5.03967 2.29199C5.17956 2.43183 5.27483 2.61002 5.31344 2.80401C5.35205 2.998 5.33226 3.19908 5.25658 3.38182C5.1809 3.56456 5.05273 3.72076 4.88828 3.83066C4.72382 3.94055 4.53047 3.99921 4.33267 3.99921C4.13488 3.99921 3.94153 3.94055 3.77707 3.83066C3.61262 3.72076 3.48444 3.56456 3.40877 3.38182C3.33309 3.19908 3.3133 2.998 3.35191 2.80401C3.39052 2.61002 3.48579 2.43183 3.62567 2.29199L3.62634 2.29333ZM7.29301 2.29333L7.99967 1.58533L8.70634 2.29199C8.84622 2.43183 8.94149 2.61002 8.9801 2.80401C9.01871 2.998 8.99893 3.19908 8.92325 3.38182C8.84757 3.56456 8.7194 3.72076 8.55494 3.83066C8.39049 3.94055 8.19714 3.99921 7.99934 3.99921C7.80155 3.99921 7.6082 3.94055 7.44374 3.83066C7.27928 3.72076 7.15111 3.56456 7.07543 3.38182C6.99975 3.19908 6.97997 2.998 7.01858 2.80401C7.05719 2.61002 7.15246 2.43183 7.29234 2.29199L7.29301 2.29333ZM10.9597 2.29333L11.6663 1.58533L12.373 2.29199C12.5129 2.43183 12.6082 2.61002 12.6468 2.80401C12.6854 2.998 12.6656 3.19908 12.5899 3.38182C12.5142 3.56456 12.3861 3.72076 12.2216 3.83066C12.0572 3.94055 11.8638 3.99921 11.666 3.99921C11.4682 3.99921 11.2749 3.94055 11.1104 3.83066C10.946 3.72076 10.8178 3.56456 10.7421 3.38182C10.6664 3.19908 10.6466 2.998 10.6852 2.80401C10.7239 2.61002 10.8191 2.43183 10.959 2.29199L10.9597 2.29333ZM4.33301 12C4.06779 12 3.81344 11.8946 3.6259 11.7071C3.43836 11.5196 3.33301 11.2652 3.33301 11C3.33301 10.7348 3.43836 10.4804 3.6259 10.2929C3.81344 10.1053 4.06779 9.99999 4.33301 9.99999C4.59822 9.99999 4.85258 10.1053 5.04011 10.2929C5.22765 10.4804 5.33301 10.7348 5.33301 11C5.33301 11.2652 5.22765 11.5196 5.04011 11.7071C4.85258 11.8946 4.59822 12 4.33301 12ZM11.6663 12C11.4011 12 11.1468 11.8946 10.9592 11.7071C10.7717 11.5196 10.6663 11.2652 10.6663 11C10.6663 10.7348 10.7717 10.4804 10.9592 10.2929C11.1468 10.1053 11.4011 9.99999 11.6663 9.99999C11.9316 9.99999 12.1859 10.1053 12.3734 10.2929C12.561 10.4804 12.6663 10.7348 12.6663 11C12.6663 11.2652 12.561 11.5196 12.3734 11.7071C12.1859 11.8946 11.9316 12 11.6663 12Z" fill="#2384C1"/>
                                                </svg>  
                                        <span class="mx-2">Company Profile</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.9087 14.8166C10.6141 14.8183 10.3221 14.7626 10.0492 14.6529C9.7763 14.5431 9.52787 14.3812 9.31831 14.1765L9.31275 14.1711L9.3129 14.1709C8.77157 13.5844 8.43622 12.8428 8.35451 12.056H8.25244C7.42848 12.0625 6.62606 11.7951 5.97507 11.2966C5.32388 10.7979 4.86219 10.097 4.66518 9.30714C4.46815 8.51722 4.54759 7.68495 4.89036 6.94514C5.22002 6.23364 5.77452 5.64797 6.46928 5.27466C6.45374 4.78561 6.27731 4.31365 5.96488 3.9306C5.90322 3.86868 5.8278 3.82118 5.74434 3.79192C5.65895 3.76198 5.56753 3.75202 5.47745 3.76288L5.47222 3.76351L5.47222 3.76342C5.09748 3.79532 4.69914 4.0293 4.32557 4.37214C3.95606 4.71125 3.62819 5.14097 3.39366 5.53212C2.72256 6.77073 2.50337 8.19845 2.7725 9.5769C3.04184 10.9564 3.78412 12.2034 4.87561 13.1091L4.88537 13.1172L4.88499 13.1176C4.96234 13.1936 5.0237 13.2841 5.06565 13.3837C5.10763 13.4834 5.12923 13.5903 5.12923 13.6984C5.12923 13.8064 5.10763 13.9133 5.06565 14.0131C5.0237 14.1127 4.96234 14.2031 4.88499 14.2792L4.88244 14.2817L4.88241 14.2816C4.72605 14.4282 4.51883 14.5096 4.3039 14.5096C4.09035 14.5096 3.88458 14.4293 3.72861 14.2845C2.35394 13.127 1.42361 11.5396 1.09376 9.78711C0.763677 8.03337 1.055 6.22128 1.9188 4.65404L1.92154 4.64906L1.92163 4.64911C2.09216 4.36568 2.4817 3.76617 3.0493 3.21768C3.61518 2.67086 4.37239 2.16097 5.2782 2.08432C5.60846 2.05012 5.94232 2.08868 6.25569 2.19728C6.56953 2.30604 6.85504 2.48237 7.09136 2.7136L7.09632 2.71845L7.0962 2.71856C7.61517 3.27558 7.94752 3.97545 8.0498 4.72305C8.10597 4.72253 8.16216 4.72517 8.21812 4.73098C9.04106 4.73405 9.83949 5.00932 10.4851 5.51316C11.1329 6.01863 11.5891 6.72476 11.7797 7.51775C11.9702 8.31076 11.8839 9.14386 11.5345 9.88237C11.1987 10.5924 10.6389 11.1748 9.94048 11.5438C9.95753 12.0424 10.1339 12.5241 10.446 12.9196C10.5079 12.9828 10.5842 13.0311 10.6688 13.0603C10.7556 13.0902 10.8484 13.0991 10.9395 13.0863L10.9477 13.0852L10.9477 13.0854C11.3222 13.0535 11.7179 12.8197 12.0888 12.477C12.4557 12.138 12.7811 11.7083 13.0159 11.3168C13.6843 10.0783 13.903 8.65223 13.6359 7.27472C13.3686 5.89613 12.6307 4.64856 11.544 3.73931L11.5426 3.73818L11.5426 3.73817C11.3738 3.5935 11.2696 3.38819 11.254 3.16713C11.2384 2.94602 11.3128 2.72832 11.4599 2.56185C11.6069 2.39542 11.8145 2.29378 12.0368 2.27855C12.2587 2.26336 12.478 2.33536 12.6466 2.47936C14.0572 3.64256 15.0133 5.25352 15.3499 7.03596C15.6866 8.8189 15.3825 10.6616 14.49 12.2474L14.4883 12.2505L14.4883 12.2505C14.3224 12.5298 13.9328 13.1267 13.364 13.675C12.7967 14.222 12.0367 14.7344 11.1308 14.816L11.1173 14.8172V14.8166H10.9087ZM10.9087 14.8166H10.9082V14.6666L10.9091 14.8166C10.909 14.8166 10.9088 14.8166 10.9087 14.8166ZM10.2248 8.33096V8.33169C10.2248 8.72566 10.106 9.11097 9.88336 9.43881C9.66065 9.76666 9.34395 10.0224 8.97305 10.1732C8.60213 10.324 8.19399 10.363 7.80042 10.2851C7.40686 10.2073 7.04595 10.0162 6.76324 9.73641C6.48055 9.45663 6.28872 9.10077 6.21186 8.71409C6.135 8.32742 6.17647 7.92693 6.33097 7.56327C6.48547 7.1996 6.74627 6.88892 7.08065 6.67085C7.41505 6.45277 7.80779 6.33724 8.20925 6.33914H8.20996C8.47569 6.33914 8.73883 6.39086 8.98408 6.49125C9.22932 6.59165 9.45181 6.73872 9.63894 6.92392C9.82607 7.10912 9.97413 7.32878 10.0746 7.5702C10.1751 7.81162 10.2261 8.07015 10.2248 8.33096Z" fill="#2384C1" stroke="#4F4770" stroke-width="0.3"/>
                                            </svg>                                            
                                        <span class="mx-2">Why Choose SAT</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.33333 5.33331V13.3333H12.6667V5.33331H3.33333ZM3.33333 3.99998H12.6667V2.66665H3.33333V3.99998ZM13.3333 14.6666H2.66667C2.48986 14.6666 2.32029 14.5964 2.19526 14.4714C2.07024 14.3464 2 14.1768 2 14V1.99998C2 1.82317 2.07024 1.6536 2.19526 1.52858C2.32029 1.40355 2.48986 1.33331 2.66667 1.33331H13.3333C13.5101 1.33331 13.6797 1.40355 13.8047 1.52858C13.9298 1.6536 14 1.82317 14 1.99998V14C14 14.1768 13.9298 14.3464 13.8047 14.4714C13.6797 14.5964 13.5101 14.6666 13.3333 14.6666ZM4.66667 6.66665H7.33333V9.33331H4.66667V6.66665ZM4.66667 10.6666H11.3333V12H4.66667V10.6666ZM8.66667 7.33331H11.3333V8.66665H8.66667V7.33331Z" fill="#2384C1"/>
                                            </svg>                                            
                                        <span class="mx-2">Privacy Policy</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.66634 3.83335H5.16634V3.33335V1.33335C5.16634 1.28915 5.1839 1.24676 5.21516 1.2155C5.24641 1.18425 5.28881 1.16669 5.33301 1.16669H10.6663C10.7105 1.16669 10.7529 1.18425 10.7842 1.2155C10.8154 1.24676 10.833 1.28915 10.833 1.33335V3.33335V3.83335H11.333H13.9997C14.0439 3.83335 14.0863 3.85091 14.1175 3.88217C14.1488 3.91342 14.1663 3.95582 14.1663 4.00002V13.3334C14.1663 13.3776 14.1488 13.4199 14.1175 13.4512C14.0863 13.4825 14.0439 13.5 13.9997 13.5H1.99967C1.95547 13.5 1.91308 13.4825 1.88182 13.4512C1.85057 13.4199 1.83301 13.3776 1.83301 13.3334V4.00002C1.83301 3.95582 1.85057 3.91343 1.88182 3.88217C1.91308 3.85091 1.95547 3.83335 1.99967 3.83335H4.66634ZM13.833 8.66669V8.16669H13.333H2.66634H2.16634V8.66669V12.6667V13.1667H2.66634H13.333H13.833V12.6667V8.66669ZM13.833 4.66669V4.16669H13.333H2.66634H2.16634V4.66669V7.33335V7.83335H2.66634H4.66634H5.16634V7.33335V6.50002H5.49967V7.33335V7.83335H5.99967H9.99967H10.4997V7.33335V6.50002H10.833V7.33335V7.83335H11.333H13.333H13.833V7.33335V4.66669ZM5.99967 1.50002H5.49967V2.00002V3.33335V3.83335H5.99967H9.99967H10.4997V3.33335V2.00002V1.50002H9.99967H5.99967Z" fill="#2384C1" stroke="#2384C1"/>
                                            </svg>                                            
                                        <span class="mx-2">Terms and Conditions</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.522 1.88402L8 0.666687L13.478 1.88402C13.626 1.91693 13.7584 1.99933 13.8533 2.11762C13.9482 2.23592 14 2.38303 14 2.53469V9.19269C14 9.85118 13.8373 10.4995 13.5266 11.08C13.2158 11.6606 12.7666 12.1554 12.2187 12.5207L8 15.3334L3.78133 12.5207C3.23352 12.1555 2.78431 11.6608 2.47357 11.0803C2.16282 10.4999 2.00016 9.85173 2 9.19335V2.53469C2.00003 2.38303 2.05176 2.23592 2.14666 2.11762C2.24156 1.99933 2.37396 1.91693 2.522 1.88402ZM3.33333 3.06935V9.19269C3.33334 9.63166 3.44172 10.0638 3.64884 10.4509C3.85597 10.8379 4.15543 11.1678 4.52067 11.4114L8 13.7314L11.4793 11.4114C11.8445 11.1679 12.1439 10.8381 12.351 10.4512C12.5581 10.0643 12.6665 9.63221 12.6667 9.19335V3.06935L8 2.03335L3.33333 3.06935ZM8 7.33335C7.55797 7.33335 7.13405 7.15776 6.82149 6.8452C6.50893 6.53264 6.33333 6.10871 6.33333 5.66669C6.33333 5.22466 6.50893 4.80074 6.82149 4.48818C7.13405 4.17561 7.55797 4.00002 8 4.00002C8.44203 4.00002 8.86595 4.17561 9.17851 4.48818C9.49107 4.80074 9.66667 5.22466 9.66667 5.66669C9.66667 6.10871 9.49107 6.53264 9.17851 6.8452C8.86595 7.15776 8.44203 7.33335 8 7.33335ZM5.018 10.6667C5.09881 9.93229 5.44779 9.25354 5.99805 8.7605C6.54832 8.26747 7.26117 7.99483 8 7.99483C8.73883 7.99483 9.45168 8.26747 10.0019 8.7605C10.5522 9.25354 10.9012 9.93229 10.982 10.6667H5.018Z" fill="#2384C1"/>
                                            </svg>                                            
                                        <span class="mx-2">Careers</span>
                                    </a>
                                </div>
                              
                                
                            </div>
                        </div>

                         <!-- Reviews Offcanvas -->
                         <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasReviews" aria-labelledby="nestedOffcanvasReviews">
                            <div class="offcanvas-header">
                                <div class="position-relative" id="nestedOffcanvasReviews" data-bs-toggle="offcanvas" data-bs-target="#mainOffcanvas" aria-controls="mainOffcanvas">
                                    <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy">
                                    <span class="mobile-find-car-nested position-absolute text-nowrap">Reviews</span>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="mobile-main-offcanvas d-grid">
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.6663 13.3333H3.33301V14C3.33301 14.1768 3.26277 14.3463 3.13775 14.4714C3.01272 14.5964 2.84315 14.6666 2.66634 14.6666H1.99967C1.82286 14.6666 1.65329 14.5964 1.52827 14.4714C1.40325 14.3463 1.33301 14.1768 1.33301 14V7.33329L2.98634 3.47463C3.08922 3.23463 3.26031 3.03012 3.47838 2.88648C3.69644 2.74284 3.95189 2.66639 4.21301 2.66663H11.7863C12.0472 2.66666 12.3024 2.74322 12.5202 2.88685C12.738 3.03047 12.9089 3.23484 13.0117 3.47463L14.6663 7.33329V14C14.6663 14.1768 14.5961 14.3463 14.4711 14.4714C14.3461 14.5964 14.1765 14.6666 13.9997 14.6666H13.333C13.1562 14.6666 12.9866 14.5964 12.8616 14.4714C12.7366 14.3463 12.6663 14.1768 12.6663 14V13.3333ZM13.333 8.66663H2.66634V12H13.333V8.66663ZM2.78367 7.33329H13.2157L11.787 3.99996H4.21301L2.78434 7.33329H2.78367ZM4.33301 11.3333C4.06779 11.3333 3.81344 11.2279 3.6259 11.0404C3.43836 10.8529 3.33301 10.5985 3.33301 10.3333C3.33301 10.0681 3.43836 9.81372 3.6259 9.62619C3.81344 9.43865 4.06779 9.33329 4.33301 9.33329C4.59822 9.33329 4.85258 9.43865 5.04011 9.62619C5.22765 9.81372 5.33301 10.0681 5.33301 10.3333C5.33301 10.5985 5.22765 10.8529 5.04011 11.0404C4.85258 11.2279 4.59822 11.3333 4.33301 11.3333ZM11.6663 11.3333C11.4011 11.3333 11.1468 11.2279 10.9592 11.0404C10.7717 10.8529 10.6663 10.5985 10.6663 10.3333C10.6663 10.0681 10.7717 9.81372 10.9592 9.62619C11.1468 9.43865 11.4011 9.33329 11.6663 9.33329C11.9316 9.33329 12.1859 9.43865 12.3734 9.62619C12.561 9.81372 12.6663 10.0681 12.6663 10.3333C12.6663 10.5985 12.561 10.8529 12.3734 11.0404C12.1859 11.2279 11.9316 11.3333 11.6663 11.3333Z" fill="#2384C1"/>
                                            </svg>                                            
                                        <span class="mx-2">Car Reviews</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_17076_21950)">
                                            <g clip-path="url(#clip1_17076_21950)">
                                            <path d="M2.70059 4C3.00175 4 3.29098 4.11933 3.50406 4.33298L6.24744 7.07636C6.46052 7.28944 6.58042 7.57867 6.58042 7.87983V11.9551H7.71687V13.0916H3.09948C2.84662 14.0723 1.95736 14.7962 0.898188 14.7962C-0.16098 14.7962 -1.05082 14.0723 -1.30311 13.0916H-3.6476C-3.96126 13.0916 -4.21582 12.837 -4.21582 12.5233V5.13645C-4.21582 4.50856 -3.70726 4 -3.07937 4H2.70059ZM0.898188 11.3869C0.270301 11.3869 -0.238258 11.8955 -0.238258 12.5233C-0.238258 13.1512 0.270301 13.6598 0.898188 13.6598C1.52607 13.6598 2.03463 13.1512 2.03463 12.5233C2.03463 11.8955 1.52607 11.3869 0.898188 11.3869ZM2.70059 5.13645H-3.07937V11.9551H-1.30311C-1.05082 10.9749 -0.16098 10.2505 0.898188 10.2505C1.95736 10.2505 2.84719 10.9749 3.09948 11.9551H5.44397V7.87983L2.70059 5.13645ZM2.60286 6.27289V9.68223H-1.94293V6.27289H2.60286ZM1.46641 7.40934H-0.806482V8.54578H1.46641V7.40934Z" fill="#2384C1"/>
                                            <path d="M13.3014 4C13.0002 4 12.711 4.11933 12.4979 4.33298L9.75451 7.07636C9.54143 7.28944 9.42153 7.57867 9.42153 7.87983V11.9551H8.28509V13.0916H12.9025C13.1553 14.0723 14.0446 14.7962 15.1038 14.7962C16.1629 14.7962 17.0528 14.0723 17.3051 13.0916H19.6496C19.9632 13.0916 20.2178 12.837 20.2178 12.5233V5.13645C20.2178 4.50856 19.7092 4 19.0813 4H13.3014ZM15.1038 11.3869C15.7317 11.3869 16.2402 11.8955 16.2402 12.5233C16.2402 13.1512 15.7317 13.6598 15.1038 13.6598C14.4759 13.6598 13.9673 13.1512 13.9673 12.5233C13.9673 11.8955 14.4759 11.3869 15.1038 11.3869ZM13.3014 5.13645H19.0813V11.9551H17.3051C17.0528 10.9749 16.1629 10.2505 15.1038 10.2505C14.0446 10.2505 13.1548 10.9749 12.9025 11.9551H10.558V7.87983L13.3014 5.13645ZM13.3991 6.27289V9.68223H17.9449V6.27289H13.3991ZM14.5355 7.40934H16.8084V8.54578H14.5355V7.40934Z" fill="#2384C1"/>
                                            </g>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_17076_21950">
                                            <rect width="14.6667" height="10.6667" fill="white" transform="translate(0.666992 4)"/>
                                            </clipPath>
                                            <clipPath id="clip1_17076_21950">
                                            <rect width="19.3333" height="10.6047" fill="white" transform="translate(-1.66602 4)"/>
                                            </clipPath>
                                            </defs>
                                            </svg>                                            
                                        <span class="mx-2">Car Comparisons</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.6663 13.3334V2.66671H2.66634V12.6667C2.66634 12.8435 2.73658 13.0131 2.8616 13.1381C2.98663 13.2631 3.1562 13.3334 3.33301 13.3334H10.6663ZM12.6663 14.6667H3.33301C2.80257 14.6667 2.29387 14.456 1.91879 14.0809C1.54372 13.7058 1.33301 13.1971 1.33301 12.6667V2.00004C1.33301 1.82323 1.40325 1.65366 1.52827 1.52864C1.65329 1.40361 1.82286 1.33337 1.99967 1.33337H11.333C11.5098 1.33337 11.6794 1.40361 11.8044 1.52864C11.9294 1.65366 11.9997 1.82323 11.9997 2.00004V6.66671H14.6663V12.6667C14.6663 13.1971 14.4556 13.7058 14.0806 14.0809C13.7055 14.456 13.1968 14.6667 12.6663 14.6667ZM11.9997 8.00004V12.6667C11.9997 12.8435 12.0699 13.0131 12.1949 13.1381C12.32 13.2631 12.4895 13.3334 12.6663 13.3334C12.8432 13.3334 13.0127 13.2631 13.1377 13.1381C13.2628 13.0131 13.333 12.8435 13.333 12.6667V8.00004H11.9997ZM3.99967 4.00004H7.99967V8.00004H3.99967V4.00004ZM5.33301 5.33337V6.66671H6.66634V5.33337H5.33301ZM3.99967 8.66671H9.33301V10H3.99967V8.66671ZM3.99967 10.6667H9.33301V12H3.99967V10.6667Z" fill="#2384C1"/>
                                            </svg>                                            
                                        <span class="mx-2">Car Blogs</span>
                                    </a>
                                  
                                </div>
                              
                                
                            </div>
                        </div>

                         <!-- Help Offcanvas -->
                         <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasHelp" aria-labelledby="nestedOffcanvasHelp">
                            <div class="offcanvas-header">
                                <div class="position-relative" id="nestedOffcanvasHelp" data-bs-toggle="offcanvas" data-bs-target="#mainOffcanvas" aria-controls="mainOffcanvas">
                                    <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy">
                                    <span class="mobile-find-car-nested position-absolute text-nowrap">Help</span>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="mobile-main-offcanvas d-grid">
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.66699 10.0003V5.66699C2.66699 4.87134 2.98306 4.10828 3.54567 3.54567C4.10828 2.98306 4.87134 2.66699 5.66699 2.66699C6.46264 2.66699 7.2257 2.98306 7.78831 3.54567C8.35092 4.10828 8.66699 4.87134 8.66699 5.66699V10.3337C8.66699 10.7757 8.84259 11.1996 9.15515 11.5122C9.46771 11.8247 9.89163 12.0003 10.3337 12.0003C10.7757 12.0003 11.1996 11.8247 11.5122 11.5122C11.8247 11.1996 12.0003 10.7757 12.0003 10.3337V5.88699C11.5553 5.72972 11.1803 5.42019 10.9414 5.01312C10.7026 4.60605 10.6153 4.12764 10.6951 3.66247C10.7749 3.19729 11.0166 2.7753 11.3774 2.47108C11.7383 2.16686 12.195 2 12.667 2C13.139 2 13.5957 2.16686 13.9566 2.47108C14.3174 2.7753 14.5591 3.19729 14.6389 3.66247C14.7186 4.12764 14.6314 4.60605 14.3926 5.01312C14.1537 5.42019 13.7787 5.72972 13.3337 5.88699V10.3337C13.3337 11.1293 13.0176 11.8924 12.455 12.455C11.8924 13.0176 11.1293 13.3337 10.3337 13.3337C9.53801 13.3337 8.77495 13.0176 8.21234 12.455C7.64973 11.8924 7.33366 11.1293 7.33366 10.3337V5.66699C7.33366 5.22496 7.15806 4.80104 6.8455 4.48848C6.53294 4.17592 6.10902 4.00033 5.66699 4.00033C5.22496 4.00033 4.80104 4.17592 4.48848 4.48848C4.17592 4.80104 4.00033 5.22496 4.00033 5.66699V10.0003H6.00033L3.33366 13.3337L0.666992 10.0003H2.66699ZM12.667 4.66699C12.8438 4.66699 13.0134 4.59675 13.1384 4.47173C13.2634 4.34671 13.3337 4.17714 13.3337 4.00033C13.3337 3.82351 13.2634 3.65395 13.1384 3.52892C13.0134 3.4039 12.8438 3.33366 12.667 3.33366C12.4902 3.33366 12.3206 3.4039 12.1956 3.52892C12.0706 3.65395 12.0003 3.82351 12.0003 4.00033C12.0003 4.17714 12.0706 4.34671 12.1956 4.47173C12.3206 4.59675 12.4902 4.66699 12.667 4.66699Z" fill="#2384C1"/>
                                            </svg>
                                        <span class="mx-2">How to Buy</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3333 14.6666H2.66667C2.48986 14.6666 2.32029 14.5964 2.19526 14.4714C2.07024 14.3464 2 14.1768 2 14V1.99998C2 1.82317 2.07024 1.6536 2.19526 1.52858C2.32029 1.40355 2.48986 1.33331 2.66667 1.33331H13.3333C13.5101 1.33331 13.6797 1.40355 13.8047 1.52858C13.9298 1.6536 14 1.82317 14 1.99998V14C14 14.1768 13.9298 14.3464 13.8047 14.4714C13.6797 14.5964 13.5101 14.6666 13.3333 14.6666ZM12.6667 13.3333V2.66665H3.33333V13.3333H12.6667ZM5.33333 4.66665H10.6667V5.99998H5.33333V4.66665ZM5.33333 7.33331H10.6667V8.66665H5.33333V7.33331ZM5.33333 9.99998H8.66667V11.3333H5.33333V9.99998Z" fill="#2384C1"/>
                                            </svg>                                            
                                        <span class="mx-2">Inquiry Form</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.99967 14.6666C4.31767 14.6666 1.33301 11.682 1.33301 7.99998C1.33301 4.31798 4.31767 1.33331 7.99967 1.33331C11.6817 1.33331 14.6663 4.31798 14.6663 7.99998C14.6663 11.682 11.6817 14.6666 7.99967 14.6666ZM7.99967 13.3333C9.41416 13.3333 10.7707 12.7714 11.7709 11.7712C12.7711 10.771 13.333 9.41447 13.333 7.99998C13.333 6.58549 12.7711 5.22894 11.7709 4.22874C10.7707 3.22855 9.41416 2.66665 7.99967 2.66665C6.58519 2.66665 5.22863 3.22855 4.22844 4.22874C3.22824 5.22894 2.66634 6.58549 2.66634 7.99998C2.66634 9.41447 3.22824 10.771 4.22844 11.7712C5.22863 12.7714 6.58519 13.3333 7.99967 13.3333ZM7.33301 9.99998H8.66634V11.3333H7.33301V9.99998ZM8.66634 8.90331V9.33331H7.33301V8.33331C7.33301 8.1565 7.40325 7.98693 7.52827 7.86191C7.65329 7.73688 7.82286 7.66665 7.99967 7.66665C8.18906 7.66663 8.37455 7.61284 8.53456 7.51153C8.69457 7.41022 8.82252 7.26556 8.90352 7.09437C8.98453 6.92318 9.01525 6.73251 8.99213 6.54454C8.969 6.35657 8.89298 6.17904 8.7729 6.03259C8.65282 5.88614 8.49362 5.7768 8.31382 5.71729C8.13403 5.65779 7.94103 5.65056 7.75729 5.69645C7.57355 5.74234 7.40662 5.83947 7.27592 5.97652C7.14522 6.11358 7.05613 6.28493 7.01901 6.47065L5.71101 6.20865C5.7921 5.80337 5.97935 5.42689 6.25362 5.1177C6.5279 4.80851 6.87935 4.5777 7.27207 4.44886C7.66478 4.32002 8.08467 4.29777 8.4888 4.38439C8.89293 4.47101 9.26681 4.66339 9.57222 4.94186C9.87763 5.22034 10.1036 5.57492 10.2271 5.96936C10.3505 6.36379 10.3671 6.78394 10.2749 7.18685C10.1828 7.58976 9.98531 7.96098 9.70269 8.26256C9.42007 8.56413 9.06243 8.78525 8.66634 8.90331Z" fill="#2384C1"/>
                                            </svg>                                            
                                        <span class="mx-2">Vehicle Information Request</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.66634 10.6666V2.66665H1.33301V1.33331H3.33301C3.50982 1.33331 3.67939 1.40355 3.80441 1.52858C3.92944 1.6536 3.99967 1.82317 3.99967 1.99998V9.99998H12.2917L13.625 4.66665H5.33301V3.33331H14.4797C14.581 3.33332 14.681 3.35642 14.7721 3.40087C14.8632 3.44532 14.9429 3.50995 15.0052 3.58984C15.0676 3.66973 15.1109 3.76278 15.1319 3.86192C15.1529 3.96106 15.151 4.06368 15.1263 4.16198L13.4597 10.8286C13.4236 10.9728 13.3403 11.1008 13.2231 11.1922C13.106 11.2836 12.9616 11.3333 12.813 11.3333H3.33301C3.1562 11.3333 2.98663 11.2631 2.8616 11.1381C2.73658 11.013 2.66634 10.8435 2.66634 10.6666ZM3.99967 15.3333C3.64605 15.3333 3.30691 15.1928 3.05687 14.9428C2.80682 14.6927 2.66634 14.3536 2.66634 14C2.66634 13.6464 2.80682 13.3072 3.05687 13.0572C3.30691 12.8071 3.64605 12.6666 3.99967 12.6666C4.3533 12.6666 4.69244 12.8071 4.94248 13.0572C5.19253 13.3072 5.33301 13.6464 5.33301 14C5.33301 14.3536 5.19253 14.6927 4.94248 14.9428C4.69244 15.1928 4.3533 15.3333 3.99967 15.3333ZM11.9997 15.3333C11.6461 15.3333 11.3069 15.1928 11.0569 14.9428C10.8068 14.6927 10.6663 14.3536 10.6663 14C10.6663 13.6464 10.8068 13.3072 11.0569 13.0572C11.3069 12.8071 11.6461 12.6666 11.9997 12.6666C12.3533 12.6666 12.6924 12.8071 12.9425 13.0572C13.1925 13.3072 13.333 13.6464 13.333 14C13.333 14.3536 13.1925 14.6927 12.9425 14.9428C12.6924 15.1928 12.3533 15.3333 11.9997 15.3333Z" fill="#2384C1"/>
                                            </svg>                                            
                                        <span class="mx-2">How to Pay</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.33333 1.33331L12.1987 2.85331C12.3344 2.89567 12.453 2.9803 12.5372 3.09484C12.6214 3.20938 12.6667 3.34783 12.6667 3.48998V4.66665H14C14.1768 4.66665 14.3464 4.73688 14.4714 4.86191C14.5964 4.98693 14.6667 5.1565 14.6667 5.33331V10.6666C14.6667 10.8435 14.5964 11.013 14.4714 11.1381C14.3464 11.2631 14.1768 11.3333 14 11.3333L11.8533 11.334C11.5953 11.674 11.282 11.974 10.92 12.2206L7.33333 14.6666L3.74667 12.2213C3.20835 11.8543 2.76783 11.3613 2.46343 10.7853C2.15902 10.2092 1.99993 9.56752 2 8.91598V3.48998C2.00008 3.34794 2.04552 3.20964 2.12971 3.09524C2.21389 2.98083 2.33241 2.89631 2.468 2.85398L7.33333 1.33331ZM7.33333 2.72931L3.33333 3.97998V8.91598C3.33324 9.32413 3.42683 9.72686 3.60691 10.0931C3.78699 10.4594 4.04874 10.7795 4.372 11.0286L4.498 11.1193L7.33333 13.0533L9.85467 11.3333H6.66667C6.48986 11.3333 6.32029 11.2631 6.19526 11.1381C6.07024 11.013 6 10.8435 6 10.6666V5.33331C6 5.1565 6.07024 4.98693 6.19526 4.86191C6.32029 4.73688 6.48986 4.66665 6.66667 4.66665H11.3333V3.97998L7.33333 2.72931ZM7.33333 7.99998V9.99998H13.3333V7.99998H7.33333ZM7.33333 6.66665H13.3333V5.99998H7.33333V6.66665Z" fill="#2384C1"/>
                                            </svg>                                            
                                        <span class="mx-2">Bank Information</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.6663 13.3334H3.33301V14C3.33301 14.1768 3.26277 14.3464 3.13775 14.4714C3.01272 14.5964 2.84315 14.6667 2.66634 14.6667H1.99967C1.82286 14.6667 1.65329 14.5964 1.52827 14.4714C1.40325 14.3464 1.33301 14.1768 1.33301 14V7.33335L2.98634 3.47469C3.08922 3.23469 3.26031 3.03018 3.47838 2.88654C3.69644 2.7429 3.95189 2.66646 4.21301 2.66669H11.7863C12.0472 2.66672 12.3024 2.74329 12.5202 2.88691C12.738 3.03053 12.9089 3.2349 13.0117 3.47469L14.6663 7.33335V14C14.6663 14.1768 14.5961 14.3464 14.4711 14.4714C14.3461 14.5964 14.1765 14.6667 13.9997 14.6667H13.333C13.1562 14.6667 12.9866 14.5964 12.8616 14.4714C12.7366 14.3464 12.6663 14.1768 12.6663 14V13.3334ZM13.333 8.66669H2.66634V12H13.333V8.66669ZM2.78367 7.33335H13.2157L11.787 4.00002H4.21301L2.78434 7.33335H2.78367ZM4.33301 11.3334C4.06779 11.3334 3.81344 11.228 3.6259 11.0405C3.43836 10.8529 3.33301 10.5986 3.33301 10.3334C3.33301 10.0681 3.43836 9.81378 3.6259 9.62625C3.81344 9.43871 4.06779 9.33335 4.33301 9.33335C4.59822 9.33335 4.85258 9.43871 5.04011 9.62625C5.22765 9.81378 5.33301 10.0681 5.33301 10.3334C5.33301 10.5986 5.22765 10.8529 5.04011 11.0405C4.85258 11.228 4.59822 11.3334 4.33301 11.3334ZM11.6663 11.3334C11.4011 11.3334 11.1468 11.228 10.9592 11.0405C10.7717 10.8529 10.6663 10.5986 10.6663 10.3334C10.6663 10.0681 10.7717 9.81378 10.9592 9.62625C11.1468 9.43871 11.4011 9.33335 11.6663 9.33335C11.9316 9.33335 12.1859 9.43871 12.3734 9.62625C12.561 9.81378 12.6663 10.0681 12.6663 10.3334C12.6663 10.5986 12.561 10.8529 12.3734 11.0405C12.1859 11.228 11.9316 11.3334 11.6663 11.3334Z" fill="#2384C1"/>
                                            </svg>                                            
                                        <span class="mx-2">Track Your Order</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.84167 11.3333H13.333V3.33333H2.66634V12.2567L3.84167 11.3333ZM4.30301 12.6667L1.33301 15V2.66667C1.33301 2.48986 1.40325 2.32029 1.52827 2.19526C1.65329 2.07024 1.82286 2 1.99967 2H13.9997C14.1765 2 14.3461 2.07024 14.4711 2.19526C14.5961 2.32029 14.6663 2.48986 14.6663 2.66667V12C14.6663 12.1768 14.5961 12.3464 14.4711 12.4714C14.3461 12.5964 14.1765 12.6667 13.9997 12.6667H4.30301ZM7.33301 9.33333H8.66634V10.6667H7.33301V9.33333ZM5.71101 5.87533C5.79762 5.44186 6.00555 5.0419 6.31061 4.72198C6.61566 4.40207 7.00528 4.17536 7.43415 4.06824C7.86301 3.96112 8.31348 3.97798 8.73313 4.11688C9.15279 4.25577 9.52437 4.51098 9.80464 4.85281C10.0849 5.19464 10.2624 5.60904 10.3163 6.04777C10.3703 6.48651 10.2985 6.93155 10.1094 7.3311C9.92033 7.73065 9.62166 8.0683 9.24817 8.30473C8.87467 8.54117 8.44172 8.66668 7.99967 8.66667H7.33301V7.33333H7.99967C8.18906 7.33332 8.37455 7.27953 8.53456 7.17822C8.69457 7.07691 8.82252 6.93224 8.90352 6.76106C8.98453 6.58987 9.01525 6.3992 8.99213 6.21123C8.969 6.02326 8.89298 5.84572 8.7729 5.69927C8.65282 5.55283 8.49362 5.44349 8.31382 5.38398C8.13403 5.32447 7.94103 5.31725 7.75729 5.36314C7.57355 5.40903 7.40662 5.50615 7.27592 5.64321C7.14522 5.78027 7.05613 5.95162 7.01901 6.13733L5.71101 5.87533Z" fill="#2384C1"/>
                                            </svg>                                            
                                        <span class="mx-2">FAQ’s</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.33301 13.3333H14.6663V14.6666H1.33301V13.3333ZM2.66634 7.99998H3.99967V12.6666H2.66634V7.99998ZM5.99967 7.99998H7.33301V12.6666H5.99967V7.99998ZM8.66634 7.99998H9.99967V12.6666H8.66634V7.99998ZM11.9997 7.99998H13.333V12.6666H11.9997V7.99998ZM1.33301 4.66665L7.99967 1.33331L14.6663 4.66665V7.33331H1.33301V4.66665ZM2.66634 5.49065V5.99998H13.333V5.49065L7.99967 2.82398L2.66634 5.49065ZM7.99967 5.33331C7.82286 5.33331 7.65329 5.26308 7.52827 5.13805C7.40325 5.01303 7.33301 4.84346 7.33301 4.66665C7.33301 4.48984 7.40325 4.32027 7.52827 4.19524C7.65329 4.07022 7.82286 3.99998 7.99967 3.99998C8.17649 3.99998 8.34606 4.07022 8.47108 4.19524C8.5961 4.32027 8.66634 4.48984 8.66634 4.66665C8.66634 4.84346 8.5961 5.01303 8.47108 5.13805C8.34606 5.26308 8.17649 5.33331 7.99967 5.33331Z" fill="#2384C1"/>
                                            </svg>
                                        <span class="mx-2">How to Pick the Right Used Car</span>
                                    </a>
                                    <a href="javascript:;" class="pb-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0.666626L13.478 1.88396C13.626 1.91687 13.7584 1.99927 13.8533 2.11756C13.9482 2.23586 14 2.38297 14 2.53463V9.19263C14 9.85112 13.8373 10.4994 13.5266 11.08C13.2158 11.6605 12.7666 12.1554 12.2187 12.5206L8 15.3333L3.78133 12.5206C3.23352 12.1554 2.78431 11.6607 2.47357 11.0803C2.16282 10.4998 2.00016 9.85167 2 9.19329V2.53463C2.00003 2.38297 2.05176 2.23586 2.14666 2.11756C2.24156 1.99927 2.37396 1.91687 2.522 1.88396L8 0.666626ZM8 2.03263L3.33333 3.06929V9.19263C3.33334 9.6316 3.44172 10.0638 3.64884 10.4508C3.85597 10.8379 4.15543 11.1678 4.52067 11.4113L8 13.7313L11.4793 11.4113C11.8445 11.1678 12.1439 10.838 12.351 10.4511C12.5581 10.0642 12.6665 9.63215 12.6667 9.19329V3.06929L8 2.03329V2.03263ZM8 4.66663C8.29356 4.66649 8.57896 4.76324 8.81192 4.94187C9.04487 5.12049 9.21237 5.371 9.28842 5.65454C9.36447 5.93808 9.34482 6.23879 9.23252 6.51002C9.12023 6.78125 8.92156 7.00783 8.66733 7.15463L8.66667 9.99996H7.33333V7.15463C7.07916 7.00786 6.88052 6.78133 6.76821 6.51017C6.65589 6.23901 6.63619 5.93836 6.71216 5.65486C6.78812 5.37136 6.95551 5.12085 7.18836 4.94217C7.4212 4.76349 7.7065 4.66664 8 4.66663Z" fill="#2384C1"/>
                                            </svg>                                            
                                        <span class="mx-2">Buying Vehicles Safely Guide</span>
                                    </a>
                                </div>
                              
                                
                            </div>
                        </div>


                        <!-- Settings Offcanvas -->
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasSettings" aria-labelledby="nestedOffcanvasSettings">
                            <div class="offcanvas-header">
                                <div class="position-relative" id="nestedOffcanvasSettings" data-bs-toggle="offcanvas" data-bs-target="#mainOffcanvas" aria-controls="mainOffcanvas">
                                    <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy">
                                    <span class="mobile-find-car-nested position-absolute text-nowrap">Settings</span>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="mobile-main-offcanvas">
                                    <div class="mobile-offcanvas-settings d-flex justify-content-between align-items-center">
                                        <p class="setting-currency m-0">Currency</p>
                                        <select class="setting-currency-select form-select px-1" aria-label="Default select example">
                                            <option selected>USD</option>
                                            <option value="1">AUD</option>
                                            <option value="2">GBP</option>
                                            <option value="3">CAD</option>
                                            <option value="4">CNY</option>
                                            <option value="5">EUR</option>
                                            <option value="6">JPY</option>
                                            <option value="7">NZD</option>
                                            <option value="8">ZAR</option>
                                            <option value="9">USD</option>
                                            <option value="10">AFN</option>
                                            <option value="11">ALL</option>
                                            <option value="12">DZD</option>
                                            <option value="13">AOA</option>
                                            <option value="14">ARS</option>
                                            <option value="15">AMD</option>
                                            <option value="16">AWG</option>
                                            <option value="17">AZN</option>
                                            <option value="18">BSD</option>
                                            <option value="19">BHD</option>
                                            <option value="20">BDT</option>
                                          </select>
                                    </div>
                                    <div class="mobile-offcanvas-settings d-flex justify-content-between align-items-center my-4">
                                        <p class="setting-currency m-0">Language</p>
                                        <select class="setting-currency-select form-select px-1" aria-label="Default select example">
                                            <option selected>English</option>
                                            <option value="1">Arabic</option>
                                            <option value="2">Spanish</option>
                                            <option value="3">French</option>
                                            <option value="4">Geiorgian</option>
                                            <option value="5">Mongoalian</option>
                                            <option value="6">Purtuguese</option>
                                            <option value="7">Russian</option>
                                            <option value="8">Swahili</option>
                                          </select>
                                    </div>
                                </div>
                              
                                
                            </div>
                        </div>
                        
                        
                     <!-- Explore Stock Nested Offcanvas -->
                     <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvas2" aria-labelledby="nestedOffcanvas2Label">
                        <div class="offcanvas-header">
                            <div class="position-relative" id="nestedOffcanvas2Label" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvas1" aria-controls="nestedOffcanvas1Label">
                                <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy">
                                <span class="mobile-find-car-nested position-absolute text-nowrap">Explore Stock
                                </span>
                            </div>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="mobile-main-offcanvas">
                                <div class="mb-3 position-relative">
                                    <a href="javascript:;">
                                       <p>Find Used Car for Sale</p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>Luxury Vehicles</p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>Low Mileage Cars</p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>Fresh Stock</p>
                                    </a>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>


                     <!-- Explore By Price Nested Offcanvas -->
                     <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasExplorePrice" aria-labelledby="nestedOffcanvasLabelExplorePrice">
                        <div class="offcanvas-header">
                            <div class="position-relative" id="nestedOffcanvasLabelExplorePrice" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvas1" aria-controls="nestedOffcanvas1Label">
                                <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy">
                                <span class="mobile-find-car-nested position-absolute text-nowrap">Explore By Price
                                </span>
                            </div>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="mobile-main-offcanvas">
                                <div class="mb-3 position-relative">
                                    <a href="javascript:;">
                                       <p>Less than $1000</p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>Between $1000 - $2000</p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>Between $2000 - $3000</p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>Between $3000 - $4000</p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>Between $4000 - $5000</p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>Above $5000</p>
                                    </a>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>

                     <!-- Explore By Make Nested Offcanvas -->
                     <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasExploreMake" aria-labelledby="nestedOffcanvasLabelExploreMake">
                        <div class="offcanvas-header">
                            <div class="position-relative" id="nestedOffcanvasLabelExploreMake" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvas1" aria-controls="nestedOffcanvas1Label">
                                <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy">
                                <span class="mobile-find-car-nested position-absolute text-nowrap">Explore By Make
                                </span>
                            </div>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="mobile-main-offcanvas">
                                <div class="mb-3 position-relative">
                                    <a href="javascript:;">
                                       <p>Toyota</p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>Nissan</p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>VolksWagen</p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>Mitsubishi</p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>Honda</p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>Subaru</p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>Mazda</p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>Suzuki</p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>Isuzu</p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>Daihatsu</p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>Luxus</p>
                                    </a>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>

                     <!-- Explore By Type Nested Offcanvas -->
                     <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasExploreType" aria-labelledby="nestedOffcanvasLabelExploreType">
                        <div class="offcanvas-header">
                            <div class="position-relative" id="nestedOffcanvasLabelExploreType" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvas1" aria-controls="nestedOffcanvas1Label">
                                <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy">
                                <span class="mobile-find-car-nested position-absolute text-nowrap">Explore by Discount
                                </span>
                            </div>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="mobile-main-offcanvas">
                                <div class="mb-3 position-relative">
                                    <a href="javascript:;">
                                       <p>60% Off or More </p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>50% Off or More </p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>40% Off or More</p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>30% Off or More</p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>1% -30%</p>
                                    </a>
                                   
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>

                     <!-- Explore By Year Nested Offcanvas -->
                     <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasExploreYear" aria-labelledby="nestedOffcanvasLabelExploreYear">
                        <div class="offcanvas-header">
                            <div class="position-relative" id="nestedOffcanvasLabelExploreYear" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvas1" aria-controls="nestedOffcanvas1Label">
                                <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy">
                                <span class="mobile-find-car-nested position-absolute text-nowrap">Explore by Year
                                </span>
                            </div>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="mobile-main-offcanvas">
                                <div class="mb-3 position-relative">
                                    <a href="javascript:;">
                                       <p>2000 - 2005 </p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>2005 - 2010 </p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>2010 - 2015</p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>2015 - 2020</p>
                                    </a>
                                    <a href="javascript:;">
                                       <p>2020 - 2024</p>
                                    </a>
                                   
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>

                    <!-- Explore By Discound Nested Offcanvas -->
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasExploreDiscount" aria-labelledby="nestedOffcanvasLabelExploreDiscount">
                        <div class="offcanvas-header">
                            <div class="position-relative" id="nestedOffcanvasLabelExploreDiscount" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvas1" aria-controls="nestedOffcanvas1Label">
                                <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy">
                                <span class="mobile-find-car-nested position-absolute text-nowrap">Explore by Discount
                                </span>
                            </div>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="mobile-main-offcanvas">
                                <div class="mb-3 position-relative">
                                    <a href="javascript:;">
                                        <p>60% Off or More </p>
                                     </a>
                                     <a href="javascript:;">
                                        <p>50% Off or More </p>
                                     </a>
                                     <a href="javascript:;">
                                        <p>40% Off or More</p>
                                     </a>
                                     <a href="javascript:;">
                                        <p>30% Off or More</p>
                                     </a>
                                     <a href="javascript:;">
                                        <p>1% -30%</p>
                                     </a>
                                   
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>


                     <!-- Explore By Location Nested Offcanvas -->
                     <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasExploreLocation" aria-labelledby="nestedOffcanvasLabelExploreLocation">
                        <div class="offcanvas-header">
                            <div class="position-relative" id="nestedOffcanvasLabelExploreLocation" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvas1" aria-controls="nestedOffcanvas1Label">
                                <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy">
                                <span class="mobile-find-car-nested position-absolute text-nowrap">Inventory Location 
                                </span>
                            </div>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="mobile-main-offcanvas">
                                <div class="mb-3 position-relative">
                                    <a href="javascript:;">
                                        <p>Japan </p>
                                     </a>
                                     <a href="javascript:;">
                                        <p>Tanzania </p>
                                     </a>
                                     <a href="javascript:;">
                                        <p>Dominican Republic</p>
                                     </a>
                                     <a href="javascript:;">
                                        <p>Kenya</p>
                                     </a>
                                     <a href="javascript:;">
                                        <p>Chile</p>
                                     </a>
                                   
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>

                    <!-- Explore By Other Categories Nested Offcanvas -->
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedOffcanvasExploreCategories" aria-labelledby="nestedOffcanvasLabelExploreCategories">
                        <div class="offcanvas-header">
                            <div class="position-relative" id="nestedOffcanvasLabelExploreCategories" data-bs-toggle="offcanvas" data-bs-target="#nestedOffcanvas1" aria-controls="nestedOffcanvas1Label">
                                <img src="{{asset('assets/images/icons/arrow-left-model.webp')}}" alt="Arrow Left" class="img-fluid" loading="lazy">
                                <span class="mobile-find-car-nested position-absolute text-nowrap">Other Categories
                                </span>
                            </div>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="mobile-main-offcanvas">
                                <div class="mb-3 position-relative">
                                    <a href="javascript:;">
                                        <p>Right Hand Drive </p>
                                     </a>
                                     <a href="javascript:;">
                                        <p>Diesel </p>
                                     </a>
                                     <a href="javascript:;">
                                        <p>Gasoline/Petrol</p>
                                     </a>
                                     <a href="javascript:;">
                                        <p>Electric</p>
                                     </a>
                                     <a href="javascript:;">
                                        <p>Hybrid</p>
                                     </a>
                                   
                                </div>
                                
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
                    <div class="col search-form px-2">
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