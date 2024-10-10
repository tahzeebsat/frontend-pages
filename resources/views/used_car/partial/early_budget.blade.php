<section class="early-budget-desktop py-4">
    <div class="container">
        <div class="heading pb-3">
            <p class="title">Explore by Budget</p>
        </div>
        <div class="row">
            <nav>
                <ul class="nav nav-tabs pb-2" id="myTabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">
                        Under $1500
                    </a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab2-tab" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">
                        $1500 to $3000
                    </a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab3-tab" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">
                        $3000 to $5000
                    </a>
                  </li>
                </ul>
              </nav>


              {{-- Tab Section --}}
              <div class="tab-content my-4" id="myTabContent">
                <!-- Tab 1 Content -->
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <div class="swiper earlyBudget1Swiper">
                        <div class="swiper-wrapper">
                          <!-- Slides with proper image alt attributes -->
                          <div class="swiper-slide">
                                <div class="recomended-car pt-2">
                                  <img src="{{asset('assets/images/selling/car-1.webp')}}" alt="Car Comparison" class="img-fluid car-comprison-img1" loading="lazy">
                                </div>
                                <div class="price-area py-3">
                                  <div class="top d-flex justify-content-between">
                                      <div class="left">
                                          <div class="price d-flex">
                                              <p class="amount m-0">$11,468 </p>
                                              {{-- <div class="discount d-flex flex-column mx-2">
                                                  <span class="off">10% off</span>
                                                  <span class="value">$12,742</span>
                                              </div> --}}
                                          </div>
                                      </div>
                                      <div class="right">
                                          <i class="heart-icon far fa-heart"></i>
                                      </div>
                                  </div>
              
                                  <div class="bottom pt-2">
                                      <p class="sale-car-name">Toyota RAIZE</p>
                                      <p class="sale-car-average m-0">21265 km | RHD | 1000 cc</p>
                                  </div>
                                </div>
                          </div>
              
                          <div class="swiper-slide">
                              <div class="recomended-car pt-2">
                                <img src="{{asset('assets/images/selling/car-1.webp')}}" alt="Car Comparison" class="img-fluid car-comprison-img1" loading="lazy">
                              </div>
                              <div class="price-area py-3">
                                <div class="top d-flex justify-content-between">
                                    <div class="left">
                                        <div class="price d-flex">
                                            <p class="amount m-0">$11,468 </p>
                                            {{-- <div class="discount d-flex flex-column mx-2">
                                                <span class="off">10% off</span>
                                                <span class="value">$12,742</span>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="right">
                                        <i class="heart-icon far fa-heart"></i>
                                    </div>
                                </div>
              
                                <div class="bottom pt-2">
                                    <p class="sale-car-name">Toyota RAIZE</p>
                                    <p class="sale-car-average m-0">21265 km | RHD | 1000 cc</p>
                                </div>
                              </div>
                        </div>
              
                        <div class="swiper-slide">
                          <div class="recomended-car pt-2">
                            <img src="{{asset('assets/images/selling/car-1.webp')}}" alt="Car Comparison" class="img-fluid car-comprison-img1" loading="lazy">
                          </div>
                          <div class="price-area py-3">
                            <div class="top d-flex justify-content-between">
                                <div class="left">
                                    <div class="price d-flex">
                                        <p class="amount m-0">$11,468 </p>
                                        {{-- <div class="discount d-flex flex-column mx-2">
                                            <span class="off">10% off</span>
                                            <span class="value">$12,742</span>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="right">
                                    <i class="heart-icon far fa-heart"></i>
                                </div>
                            </div>
              
                            <div class="bottom pt-2">
                                <p class="sale-car-name">Toyota RAIZE</p>
                                <p class="sale-car-average m-0">21265 km | RHD | 1000 cc</p>
                            </div>
                          </div>
                    </div>
              
                    <div class="swiper-slide">
                      <div class="recomended-car pt-2">
                        <img src="{{asset('assets/images/selling/car-1.webp')}}" alt="Car Comparison" class="img-fluid car-comprison-img1" loading="lazy">
                      </div>
                      <div class="price-area py-3">
                        <div class="top d-flex justify-content-between">
                            <div class="left">
                                <div class="price d-flex">
                                    <p class="amount m-0">$11,468 </p>
                                    {{-- <div class="discount d-flex flex-column mx-2">
                                        <span class="off">10% off</span>
                                        <span class="value">$12,742</span>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="right">
                                <i class="heart-icon far fa-heart"></i>
                            </div>
                        </div>
              
                        <div class="bottom pt-2">
                            <p class="sale-car-name">Toyota RAIZE</p>
                            <p class="sale-car-average m-0">21265 km | RHD | 1000 cc</p>
                        </div>
                      </div>
                </div>
              
                <div class="swiper-slide">
                  <div class="recomended-car pt-2">
                    <img src="{{asset('assets/images/selling/car-1.webp')}}" alt="Car Comparison" class="img-fluid car-comprison-img1" loading="lazy">
                  </div>
                  <div class="price-area py-3">
                    <div class="top d-flex justify-content-between">
                        <div class="left">
                            <div class="price d-flex">
                                <p class="amount m-0">$11,468 </p>
                                {{-- <div class="discount d-flex flex-column mx-2">
                                    <span class="off">10% off</span>
                                    <span class="value">$12,742</span>
                                </div> --}}
                            </div>
                        </div>
                        <div class="right">
                            <i class="heart-icon far fa-heart"></i>
                        </div>
                    </div>
              
                    <div class="bottom pt-2">
                        <p class="sale-car-name">Toyota RAIZE</p>
                        <p class="sale-car-average m-0">21265 km | RHD | 1000 cc</p>
                    </div>
                  </div>
              </div>
                          
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                      </div>
                </div>
            
                <!-- Tab 2 Content -->
                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                        <div class="swiper earlyBudget2Swiper">
                            <div class="swiper-wrapper">
                              <!-- Slides with proper image alt attributes -->
                              <div class="swiper-slide">
                                    <div class="recomended-car pt-2">
                                      <img src="{{asset('assets/images/selling/car-1.webp')}}" alt="Car Comparison" class="img-fluid car-comprison-img1" loading="lazy">
                                    </div>
                                    <div class="price-area py-3">
                                      <div class="top d-flex justify-content-between">
                                          <div class="left">
                                              <div class="price d-flex">
                                                  <p class="amount m-0">$11,468 </p>
                                                  {{-- <div class="discount d-flex flex-column mx-2">
                                                      <span class="off">10% off</span>
                                                      <span class="value">$12,742</span>
                                                  </div> --}}
                                              </div>
                                          </div>
                                          <div class="right">
                                              <i class="heart-icon far fa-heart"></i>
                                          </div>
                                      </div>
                  
                                      <div class="bottom pt-2">
                                          <p class="sale-car-name">Toyota RAIZE</p>
                                          <p class="sale-car-average m-0">21265 km | RHD | 1000 cc</p>
                                      </div>
                                    </div>
                              </div>
                  
                              <div class="swiper-slide">
                                  <div class="recomended-car pt-2">
                                    <img src="{{asset('assets/images/selling/car-1.webp')}}" alt="Car Comparison" class="img-fluid car-comprison-img1" loading="lazy">
                                  </div>
                                  <div class="price-area py-3">
                                    <div class="top d-flex justify-content-between">
                                        <div class="left">
                                            <div class="price d-flex">
                                                <p class="amount m-0">$11,468 </p>
                                                {{-- <div class="discount d-flex flex-column mx-2">
                                                    <span class="off">10% off</span>
                                                    <span class="value">$12,742</span>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="right">
                                            <i class="heart-icon far fa-heart"></i>
                                        </div>
                                    </div>
                  
                                    <div class="bottom pt-2">
                                        <p class="sale-car-name">Toyota RAIZE</p>
                                        <p class="sale-car-average m-0">21265 km | RHD | 1000 cc</p>
                                    </div>
                                  </div>
                            </div>
                  
                            <div class="swiper-slide">
                              <div class="recomended-car pt-2">
                                <img src="{{asset('assets/images/selling/car-1.webp')}}" alt="Car Comparison" class="img-fluid car-comprison-img1" loading="lazy">
                              </div>
                              <div class="price-area py-3">
                                <div class="top d-flex justify-content-between">
                                    <div class="left">
                                        <div class="price d-flex">
                                            <p class="amount m-0">$11,468 </p>
                                            {{-- <div class="discount d-flex flex-column mx-2">
                                                <span class="off">10% off</span>
                                                <span class="value">$12,742</span>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="right">
                                        <i class="heart-icon far fa-heart"></i>
                                    </div>
                                </div>
                  
                                <div class="bottom pt-2">
                                    <p class="sale-car-name">Toyota RAIZE</p>
                                    <p class="sale-car-average m-0">21265 km | RHD | 1000 cc</p>
                                </div>
                              </div>
                        </div>
                  
                        <div class="swiper-slide">
                          <div class="recomended-car pt-2">
                            <img src="{{asset('assets/images/selling/car-1.webp')}}" alt="Car Comparison" class="img-fluid car-comprison-img1" loading="lazy">
                          </div>
                          <div class="price-area py-3">
                            <div class="top d-flex justify-content-between">
                                <div class="left">
                                    <div class="price d-flex">
                                        <p class="amount m-0">$11,468 </p>
                                        {{-- <div class="discount d-flex flex-column mx-2">
                                            <span class="off">10% off</span>
                                            <span class="value">$12,742</span>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="right">
                                    <i class="heart-icon far fa-heart"></i>
                                </div>
                            </div>
                  
                            <div class="bottom pt-2">
                                <p class="sale-car-name">Toyota RAIZE</p>
                                <p class="sale-car-average m-0">21265 km | RHD | 1000 cc</p>
                            </div>
                          </div>
                    </div>
                  
                    <div class="swiper-slide">
                      <div class="recomended-car pt-2">
                        <img src="{{asset('assets/images/selling/car-1.webp')}}" alt="Car Comparison" class="img-fluid car-comprison-img1" loading="lazy">
                      </div>
                      <div class="price-area py-3">
                        <div class="top d-flex justify-content-between">
                            <div class="left">
                                <div class="price d-flex">
                                    <p class="amount m-0">$11,468 </p>
                                    {{-- <div class="discount d-flex flex-column mx-2">
                                        <span class="off">10% off</span>
                                        <span class="value">$12,742</span>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="right">
                                <i class="heart-icon far fa-heart"></i>
                            </div>
                        </div>
                  
                        <div class="bottom pt-2">
                            <p class="sale-car-name">Toyota RAIZE</p>
                            <p class="sale-car-average m-0">21265 km | RHD | 1000 cc</p>
                        </div>
                      </div>
                  </div>
                              
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                          </div>
                    </div>
                </div>
            
                <!-- Tab 3 Content -->
                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                        <div class="swiper earlyBudget3Swiper">
                            <div class="swiper-wrapper">
                              <!-- Slides with proper image alt attributes -->
                              <div class="swiper-slide">
                                    <div class="recomended-car pt-2">
                                      <img src="{{asset('assets/images/selling/car-1.webp')}}" alt="Car Comparison" class="img-fluid car-comprison-img1" loading="lazy">
                                    </div>
                                    <div class="price-area py-3">
                                      <div class="top d-flex justify-content-between">
                                          <div class="left">
                                              <div class="price d-flex">
                                                  <p class="amount m-0">$11,468 </p>
                                                  {{-- <div class="discount d-flex flex-column mx-2">
                                                      <span class="off">10% off</span>
                                                      <span class="value">$12,742</span>
                                                  </div> --}}
                                              </div>
                                          </div>
                                          <div class="right">
                                              <i class="heart-icon far fa-heart"></i>
                                          </div>
                                      </div>
                  
                                      <div class="bottom pt-2">
                                          <p class="sale-car-name">Toyota RAIZE</p>
                                          <p class="sale-car-average m-0">21265 km | RHD | 1000 cc</p>
                                      </div>
                                    </div>
                              </div>
                  
                              <div class="swiper-slide">
                                  <div class="recomended-car pt-2">
                                    <img src="{{asset('assets/images/selling/car-1.webp')}}" alt="Car Comparison" class="img-fluid car-comprison-img1" loading="lazy">
                                  </div>
                                  <div class="price-area py-3">
                                    <div class="top d-flex justify-content-between">
                                        <div class="left">
                                            <div class="price d-flex">
                                                <p class="amount m-0">$11,468 </p>
                                                {{-- <div class="discount d-flex flex-column mx-2">
                                                    <span class="off">10% off</span>
                                                    <span class="value">$12,742</span>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="right">
                                            <i class="heart-icon far fa-heart"></i>
                                        </div>
                                    </div>
                  
                                    <div class="bottom pt-2">
                                        <p class="sale-car-name">Toyota RAIZE</p>
                                        <p class="sale-car-average m-0">21265 km | RHD | 1000 cc</p>
                                    </div>
                                  </div>
                            </div>
                  
                            <div class="swiper-slide">
                              <div class="recomended-car pt-2">
                                <img src="{{asset('assets/images/selling/car-1.webp')}}" alt="Car Comparison" class="img-fluid car-comprison-img1" loading="lazy">
                              </div>
                              <div class="price-area py-3">
                                <div class="top d-flex justify-content-between">
                                    <div class="left">
                                        <div class="price d-flex">
                                            <p class="amount m-0">$11,468 </p>
                                            {{-- <div class="discount d-flex flex-column mx-2">
                                                <span class="off">10% off</span>
                                                <span class="value">$12,742</span>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="right">
                                        <i class="heart-icon far fa-heart"></i>
                                    </div>
                                </div>
                  
                                <div class="bottom pt-2">
                                    <p class="sale-car-name">Toyota RAIZE</p>
                                    <p class="sale-car-average m-0">21265 km | RHD | 1000 cc</p>
                                </div>
                              </div>
                        </div>
                  
                        <div class="swiper-slide">
                          <div class="recomended-car pt-2">
                            <img src="{{asset('assets/images/selling/car-1.webp')}}" alt="Car Comparison" class="img-fluid car-comprison-img1" loading="lazy">
                          </div>
                          <div class="price-area py-3">
                            <div class="top d-flex justify-content-between">
                                <div class="left">
                                    <div class="price d-flex">
                                        <p class="amount m-0">$11,468 </p>
                                        {{-- <div class="discount d-flex flex-column mx-2">
                                            <span class="off">10% off</span>
                                            <span class="value">$12,742</span>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="right">
                                    <i class="heart-icon far fa-heart"></i>
                                </div>
                            </div>
                  
                            <div class="bottom pt-2">
                                <p class="sale-car-name">Toyota RAIZE</p>
                                <p class="sale-car-average m-0">21265 km | RHD | 1000 cc</p>
                            </div>
                          </div>
                    </div>
                  
                    <div class="swiper-slide">
                      <div class="recomended-car pt-2">
                        <img src="{{asset('assets/images/selling/car-1.webp')}}" alt="Car Comparison" class="img-fluid car-comprison-img1" loading="lazy">
                      </div>
                      <div class="price-area py-3">
                        <div class="top d-flex justify-content-between">
                            <div class="left">
                                <div class="price d-flex">
                                    <p class="amount m-0">$11,468 </p>
                                    {{-- <div class="discount d-flex flex-column mx-2">
                                        <span class="off">10% off</span>
                                        <span class="value">$12,742</span>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="right">
                                <i class="heart-icon far fa-heart"></i>
                            </div>
                        </div>
                  
                        <div class="bottom pt-2">
                            <p class="sale-car-name">Toyota RAIZE</p>
                            <p class="sale-car-average m-0">21265 km | RHD | 1000 cc</p>
                        </div>
                      </div>
                  </div>
                              
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                          </div>
                    </div>
                </div>
              </div>

              <div class="view-all-earlyBudget text-center">
                <a href="javascript:;" class="view-all m-0">View More <i class="fas fa-arrow-right ms-2"></i> </a>
            </div>
            </div>
        </div>
    </div>
</section>