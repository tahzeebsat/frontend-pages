<section class="sat_faq_new_desktop">
    <div class="satFaqs">
        <div class="container">
            <div class="row">
               <div class="bannerImage">
                <img src="{{asset('assets/images/staticPagesAssets/images/faq-banner-new.webp')}}" alt="Banner" class="img-fluid w-100" loading="lazy">
               </div>

               <div class="container p-0">
                <!-- Nav Tabs -->
            <div class="tabList pt-md-5 pb-4 pt-4">
                <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="generalTab" data-bs-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">General</a>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                      <a class="nav-link" id="paymentTab" data-bs-toggle="tab" href="#payment" role="tab" aria-controls="payment" aria-selected="false">Payment</a>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                      <a class="nav-link" id="shipmentTab" data-bs-toggle="tab" href="#shipment" role="tab" aria-controls="shipment" aria-selected="false">Shipment</a>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                      <a class="nav-link" id="vehicleTab" data-bs-toggle="tab" href="#vehicle" role="tab" aria-controls="vehicle" aria-selected="false">Vehicle Condition</a>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                      <a class="nav-link" id="accountTab" data-bs-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="false">Account</a>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                      <a class="nav-link" id="documentationTab" data-bs-toggle="tab" href="#documentation" role="tab" aria-controls="documentation" aria-selected="false">Documentation</a>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                      <a class="nav-link" id="glossaryTab" data-bs-toggle="tab" href="#glossary" role="tab" aria-controls="glossary" aria-selected="false">Glossary</a>
                    </li>
                  </ul>
            </div>
                
                <!-- Tab Content -->
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="generalTab">
                    @component('used_car.partial.new_car_faqs')
                    @endcomponent
                  </div>
                  <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="paymentTab">
                    @component('used_car.partial.new_car_faqs')
                    @endcomponent
                  </div>
                  <div class="tab-pane fade" id="shipment" role="tabpanel" aria-labelledby="shipmentTab">
                    @component('used_car.partial.new_car_faqs')
                    @endcomponent
                  </div>
                  <div class="tab-pane fade" id="vehicle" role="tabpanel" aria-labelledby="vehicleTab">
                    @component('used_car.partial.new_car_faqs')
                    @endcomponent
                  </div>
                  <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="accountTab">
                    @component('used_car.partial.new_car_faqs')
                    @endcomponent
                  </div>
                  <div class="tab-pane fade" id="documentation" role="tabpanel" aria-labelledby="documentationTab">
                    @component('used_car.partial.new_car_faqs')
                    @endcomponent
                  </div>
                  <div class="tab-pane fade" id="glossary" role="tabpanel" aria-labelledby="glossaryTab">
                    @component('used_car.partial.new_car_faqs')
                    @endcomponent
                  </div>
                
                </div>
              </div>

              <div class="questionForm">
                <div class="inner">
                    <p class="m-0 heading">Still Have Any Question?</p>
                    <form action="javascript:;" class="question-form">
                        <div class="row">
                            <div class="mb-md-3 mt-md-4">
                                <label class="py-2">Your Question <span class="text-danger">*</span></label>
                                <textarea class="form-control form-texarea-inq" id="exampleFormControlTextarea1" rows="3" placeholder="Type Your Question"></textarea>
                              </div>

                              <div class="col-md-6">
                                <div class="mb-md-3 ">
                                    <label class="py-2">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Name">
                                  </div>

                                  
                              </div>
                              <div class="col-md-6">
                                <div class="mb-3 ">
                                    <label class="py-2">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" placeholder="Email">
                                  </div>
                              </div>

                              <div class="form-check d-flex align-items-center p-0 mx-3">
                                <input type="checkbox" value="" id="flexCheckChecked">
                                <p class="form-check-label mx-2" for="flexCheckChecked">
                                    Save my name, email in this browser for the next time I have any question.
                                </p>
                              </div>

                             <div class="sendQuestion text-center mb-4">
                                <button type="submit" class="btn btn-submit">Send Question</button>
                             </div>
                        </div>


                    </form>
                </div>
              </div>


            </div>
        </div>
    </div>
</section>