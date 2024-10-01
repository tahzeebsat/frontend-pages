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
                                        <div class="dropdown-menu mega-menu p-2 py-3 border-0" aria-labelledby="navbarDropdown">
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
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            New Cars
                                        </a>
                                        <div class="dropdown-menu mega-menu p-2 py-3 border-0" aria-labelledby="navbarDropdown">
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
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Auto Parts
                                        </a>
                                        <div class="dropdown-menu mega-menu p-2 py-3 border-0" aria-labelledby="navbarDropdown">
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
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Local Pages
                                        </a>
                                        <div class="dropdown-menu mega-menu p-2 py-3 border-0" aria-labelledby="navbarDropdown">
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
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Car Services
                                        </a>
                                        <div class="dropdown-menu mega-menu p-2 py-3 border-0" aria-labelledby="navbarDropdown">
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
                                        <div class="dropdown-menu mega-menu p-2 py-3 border-0" aria-labelledby="navbarDropdown">
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
                                        <div class="dropdown-menu mega-menu p-2 py-3 border-0" aria-labelledby="navbarDropdown">
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
                                        <div class="dropdown-menu mega-menu p-2 py-3 border-0" aria-labelledby="navbarDropdown">
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