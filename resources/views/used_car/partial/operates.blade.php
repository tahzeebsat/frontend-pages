<section class="where-we-operates-desktop desktop-view my-5">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-12">
                <div class="title mb-4 pb-1">
                    <p>Where We Operate</p>
                </div>
            </div>
    
            <!-- Browse Inventory Column -->
            <div class="col-12 col-sm-6 col-md-3 d-flex px-2">
                <div class="operateInPakistan text-center py-5 rounded-1" role="article" aria-labelledby="operateInPakistan">
                    <img src="{{asset('assets/images/country-flags/PK.webp')}}" alt="Pakistan" class="img-fluid pb-3" loading="lazy" width="68" height="45">
                    <h4 id="operateInPakistan" class="heading pt-4">Pakistan</h4>
                </div>
            </div>
    
            <!-- Make Payment Column -->
            <div class="col-12 col-sm-6 col-md-3 d-flex px-2">
                <div class="operateInKenya text-center py-5 rounded-1" role="article" aria-labelledby="operateInKenya">
                    <img src="{{asset('assets/images/country-flags/KE.webp')}}" alt="Kenya" class="img-fluid pb-3" loading="lazy" width="68" height="45">
                    <h4 id="operateInKenya" class="heading pt-4">Kenya</h4>
                </div>
            </div>
    
            <!-- Track Shipment Column -->
            <div class="col-12 col-sm-6 col-md-3 d-flex px-2">
                <div class="operateInTanzania text-center py-5 rounded-1" role="article" aria-labelledby="operateInTanzania">
                    <img src="{{asset('assets/images/country-flags/TZ.webp')}}" alt="Track Shipment" class="img-fluid pb-3" loading="lazy" width="68" height="45">
                    <h4 id="operateInTanzania" class="heading pt-4">Tanzania</h4>
                </div>
            </div>
    
            <!-- Receive Delivery Column -->
            <div class="col-12 col-sm-6 col-md-3 d-flex px-2">
                <div class="operateInGB text-center py-5 rounded-1" role="article" aria-labelledby="operateInGB">
                    <img src="{{asset('assets/images/country-flags/GB.webp')}}" alt="Receive Delivery" class="img-fluid pb-3" loading="lazy" width="68" height="45">
                    <h4 id="operateInGB" class="heading pt-4">United Kingdom</h4>
                    
                </div>
            </div>
    
            <!-- View Details Button -->

            <div class="row align-items-center pt-5">
                <div class="col-12 col-md-5 text-center">
                    <div class="line"></div>
                </div>
            
                <div class="col-12 col-md-2 text-center p-0">
                    <div class="buy-more" id="buyMoreBtn">
                        <p class="details" id="btnText">
                            Show More Countries 
                            <img id="addIcon" src="{{ asset('assets/images/add-circle.webp') }}" alt="Add Circle Icon" class="img-fluid" loading="lazy">
                            <img id="removeIcon" src="{{ asset('assets/images/remove-icon.webp') }}" alt="Remove Icon" class="img-fluid" loading="lazy" style="display: none;">
                        </p>
                    </div>
                </div>
            
                <div class="col-12 col-md-5 text-center">
                    <div class="line"></div>
                </div>
            
                {{-- ============ flags toggle onclick =========== --}}
                <div class="toggle-flags" id="toggleFlags" style="display: none;">
                    <div class="row pt-4">
                        <div class="col-md-3">
                            <div class="flag-show">
                                    <img src="{{asset('assets/images/country-flags/PK.webp')}}" alt="Pakistan Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                    <span class="mx-2">Pakistan</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="flag-show">
                                <img src="{{asset('assets/images/country-flags/AZ.webp')}}" alt="Azerbaijan Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                <span class="mx-2">Azerbaijan</span>
                        </div>
                        </div>
                        <div class="col-md-3">
                            <div class="flag-show">
                                <img src="{{asset('assets/images/country-flags/CA.webp')}}" alt="Canada Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                <span class="mx-2">Canada</span>
                        </div>
                        </div>
                        <div class="col-md-3">
                            <div class="flag-show">
                                <img src="{{asset('assets/images/country-flags/FJ.webp')}}" alt="Fiji Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                <span class="mx-2">Fiji</span>
                        </div>
                        </div>
                    </div>

                    <div class="row pt-4">
                        <div class="col-md-3">
                            <div class="flag-show">
                                <img src="{{asset('assets/images/country-flags/IE.webp')}}" alt="Ireland Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                <span class="mx-2">Ireland</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="flag-show">
                                <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                <span class="mx-2">Malawi</span>
                        </div>
                        </div>
                        <div class="col-md-3">
                            <div class="flag-show">
                                <img src="{{asset('assets/images/country-flags/NZ.webp')}}" alt="New Zealand Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                <span class="mx-2">New Zealand</span>
                        </div>
                        </div>
                        <div class="col-md-3">
                            <div class="flag-show">
                                <img src="{{asset('assets/images/country-flags/RU.webp')}}" alt="Russia Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                <span class="mx-2">Russia</span>
                        </div>
                        </div>
                    </div>

                    <div class="row pt-4">
                        <div class="col-md-3">
                            <div class="flag-show">
                                <img src="{{asset('assets/images/country-flags/ZA.webp')}}" alt="South Africa Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                <span class="mx-2">South Africa</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="flag-show">
                                <img src="{{asset('assets/images/country-flags/UG.webp')}}" alt="Uganda Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                <span class="mx-2">Uganda</span>
                        </div>
                        </div>
                        <div class="col-md-3">
                            <div class="flag-show">
                                <img src="{{asset('assets/images/country-flags/AG.webp')}}" alt="Antigua Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                <span class="mx-2">Antigua</span>
                        </div>
                        </div>
                        <div class="col-md-3">
                            <div class="flag-show">
                                <img src="{{asset('assets/images/country-flags/BS.webp')}}" alt="Bahamas Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                <span class="mx-2">Bahamas</span>
                        </div>
                        </div>
                    </div>

                    <div class="row pt-4">
                        <div class="col-md-3">
                            <div class="flag-show">
                                <img src="{{asset('assets/images/country-flags/CL.webp')}}" alt="Chile Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                <span class="mx-2">Chile</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="flag-show">
                                <img src="{{asset('assets/images/country-flags/GE.webp')}}" alt="Georgia Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                <span class="mx-2">Georgia</span>
                        </div>
                        </div>
                        <div class="col-md-3">
                            <div class="flag-show">
                                <img src="{{asset('assets/images/country-flags/JM.webp')}}" alt="Jamaica Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                <span class="mx-2">Jamaica</span>
                        </div>
                        </div>
                        <div class="col-md-3">
                            <div class="flag-show">
                                <img src="{{asset('assets/images/country-flags/FM.webp')}}" alt="Micronesia Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                <span class="mx-2">Micronesia</span>
                        </div>
                        </div>
                    </div>

                    <div class="row pt-4">
                        <div class="col-md-3">
                            <div class="flag-show">
                                <img src="{{asset('assets/images/country-flags/NG.webp')}}" alt="Nigeria Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                <span class="mx-2">Nigeria</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="flag-show">
                                <img src="{{asset('assets/images/country-flags/NG.webp')}}" alt="Nigeria Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                <span class="mx-2">Nigeria</span>
                        </div>
                        </div>
                        <div class="col-md-3">
                            <div class="flag-show">
                                <img src="{{asset('assets/images/country-flags/RW.webp')}}" alt="Rwanda Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                <span class="mx-2">Rwanda</span>
                        </div>
                        </div>
                        <div class="col-md-3">
                            <div class="flag-show">
                                <img src="{{asset('assets/images/country-flags/SD.webp')}}" alt="South Sudan Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                <span class="mx-2">South Sudan</span>
                        </div>
                        </div>
                    </div>

                    <div class="toggle2 text-center">
                        <button class="show-more-countries" id="showMoreCountries">
                            Show More Countries
                            <img id="addIcon2" src="{{ asset('assets/images/add-circle.webp') }}" alt="Add Circle Icon" class="img-fluid" loading="lazy">
                        </button>
                        <div class="toggle-2" style="display: none;">
                            <div class="row pt-4">
                                <div class="col-md-3">
                                    <div class="flag-show">
                                        <img src="{{asset('assets/images/country-flags/UA.webp')}}" alt="Ukraine" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Ukraine</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="flag-show">
                                        <img src="{{asset('assets/images/country-flags/AI.webp')}}" alt="Anguilla Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Anguilla</span>
                                </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="flag-show">
                                        <img src="{{asset('assets/images/country-flags/BD.webp')}}" alt="Bangladesh Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Bangladesh</span>
                                </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="flag-show">
                                        <img src="{{asset('assets/images/country-flags/CR.webp')}}" alt="Costa Rica Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Costa Rica</span>
                                </div>
                                </div>
                            </div>

                            <div class="row pt-4">
                                <div class="col-md-3">
                                    <div class="flag-show">
                                        <img src="{{asset('assets/images/country-flags/GH.webp')}}" alt="Ghana Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Ghana</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="flag-show">
                                        <img src="{{asset('assets/images/country-flags/KE.webp')}}" alt="Kenya Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Kenya</span>
                                </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="flag-show">
                                        <img src="{{asset('assets/images/country-flags/MN.webp')}}" alt="Mongolia Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Mongolia</span>
                                </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="flag-show">
                                        <img src="{{asset('assets/images/country-flags/PD.webp')}}" alt="Papua New Guinea Flag" class="img-fluid" loading="lazy" width="32" height="21.3">
                                        <span class="mx-2">Papua New Guinea</span>
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




{{-- ================================== Mobile View ==================================--}}
<section class="mobile-view ">
    <div class="container">
      <div class="mobile-operate">
        <div class="heading">
          <p class="title">Where We Operate</p>
        </div>
  
        <div class="row">
            <div class="mobile-operate-flags d-flex justify-content-between gap-3">
                    <div class="mobile-operate-countries d-flex flex-column align-items-center justify-content-center mb-3 mb-md-0 w-100">
                      <img src="{{asset('assets/images/country-flags/PK.webp')}}" alt="Pakistan Flag" class="img-fluid rounded-circle mb-2" loading="lazy" width="32" height="32">
                      <span>Pakistan</span>
                    </div>
                    
                    <div class="mobile-operate-countries d-flex flex-column align-items-center justify-content-center mb-3 mb-md-0 w-100 mx-md-3">
                      <img src="{{asset('assets/images/country-flags/KE.webp')}}" alt="Kenya Flag" class="img-fluid rounded-circle mb-2" loading="lazy" width="32" height="32">
                      <span>Kenya</span>
                    </div>
                    
                    <div class="mobile-operate-countries d-flex flex-column align-items-center justify-content-center mb-3 mb-md-0 w-100">
                      <img src="{{asset('assets/images/country-flags/TZ.webp')}}" alt="Tanzania Flag" class="img-fluid rounded-circle mb-2" loading="lazy" width="32" height="32">
                      <span>Tanzania</span>
                    </div>
            </div>

            <div class="mobile-operate-flags d-flex justify-content-between gap-3">
                <div class="mobile-operate-countries d-flex flex-column align-items-center justify-content-center mb-3 mb-md-0 w-100">
                  <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid rounded-circle mb-2" loading="lazy" width="32" height="32">
                  <span>Malawi</span>
                </div>
                
                <div class="mobile-operate-countries d-flex flex-column align-items-center justify-content-center mb-3 mb-md-0 w-100 mx-md-3">
                  <img src="{{asset('assets/images/country-flags/MZ.webp')}}" alt="Mozambique Flag" class="img-fluid rounded-circle mb-2" loading="lazy" width="32" height="32">
                  <span>Mozambique</span>
                </div>
                
                <div class="mobile-operate-countries d-flex flex-column align-items-center justify-content-center mb-3 mb-md-0 w-100">
                  <img src="{{asset('assets/images/country-flags/ZA.webp')}}" alt="South Africa Flag" class="img-fluid rounded-circle mb-2" loading="lazy" width="32" height="32">
                  <span>South Africa</span>
                </div>

                
        </div>

        {{-- offcanvas-for-show-more-countries --}}

        <button class="btn btn-mobile-show-flags" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Show More Countries</button>

        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
        <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Where We Operate</h5>
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body small">
           <div class="offcanvas-flags-areas">
            <div class="row">
                <div class="col-6">
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
                    </div>
                    <div class="mobile-show-wrapper">
                        <img src="{{asset('assets/images/country-flags/MW.webp')}}" alt="Malawi Flag" class="img-fluid mb-2" loading="lazy" width="26" height="18">
                        <span class="mx-2">Malawi</span>
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
  
