<section class="sat-auction-desktop">
<div class="satAuction">
    <div class="container">
        <div class="row">
           <div class="bannerImage">
            <img src="{{asset('assets/images/staticPagesAssets/images/auction-service.webp')}}" alt="Auction" class="img-fluid" loading="lazy">
           </div>

           <p class="m-0 heading pt-4">Overview</p>
           <p class="m-0 para py-3">Our auction service comprises selling used vehicles through an auction bidding system. An extensive range of pre-owned cars 
            are sold in our Japanese auction through a competitive bidding process.</p>
        
            <div class="bidding-card">
                <div class="middle-section-biddinggrow">
                  <h2 class="lh-base h-title">Start Bidding on Your Favorite Car</h2>
                  <p class="lh-base h-para">
                      Explore top-notch vehicles at our Japanese car auction and choose from an exceptional range of vehicles tailored to suit your preferences.
                  </p>
                  <!--  data-bs-toggle="modal" data-bs-target="#start_bidding" -->
                  <button class="lh-base h-tip" data-bs-toggle="modal" data-bs-target="#start_bidding">Start Bidding</button>
                </div>
              </div>


              <div class="download-items my-5">
                <a href="javascript:;" download="" target="_blank" class="download-text">
                    <img src="{{asset('assets/images/staticPagesAssets/icon/file-dowload.webp')}}" class="img-fluid" height="28" width="28" alt="sat icon" loading="lazy">
                    <span>Auction Sheet Guide</span>
                    <i id="download_image"></i>
                </a>
                <div class="divider-download"></div>
                <a href="javascript:;" download="" target="_blank" class="download-text">
                    <img src="{{asset('assets/images/staticPagesAssets/icon/map-auction.webp')}}" class="img-fluid" width="28" height="28" alt="sat icon" loading="lazy">
                    <span>Auction House Map</span>
                    <i id="download_image"></i>
                </a>
            </div>

            <p class="m-0 heading">How our Auction Service Works</p>
           <p class="m-0 para py-2">Here is a step by step guide on how to win your dream car through our auction service.</p>
        
        
           <div class="row auction-work-main ">
            <div class="col-md-4 work-auction-col">
                <div class="work-auction-card">
                    <div class="work-img-sctin">
                        <img src="{{asset('assets/images/staticPagesAssets/icon/invoice-slip-icon.webp')}}" class="work-auction-card-img" alt="" loading="lazy">
                    </div>
                    <h2 class="work-auction-card-hdr">Make the Payment</h2>
                    <p class="work-auction-card-para">Begin by making a payment of 50,000¥ to start the the bidding
                        process for your vehicle.</p>
                </div>
            </div>
            <div class="col-md-4 work-auction-col">
                <div class="work-auction-card">
                    <div class="work-img-sctin">
                        <img src="{{asset('assets/images/staticPagesAssets/icon/search-square-icon.webp')}}" class="work-auction-card-img" alt="" loading="lazy">
                    </div>
                    <h2 class="work-auction-card-hdr">Explore our Portal</h2>
                    <p class="work-auction-card-para">Get access to a portal where you will login and shortlist the cars
                        that you want to bid for.</p>
                </div>
            </div>
            <div class="col-md-4 work-auction-col">
                <div class="work-auction-card">
                    <div class="work-img-sctin">
                        <img src="{{asset('assets/images/staticPagesAssets/icon/meeting-icon.webp')}}" class="work-auction-card-img" alt="" loading="lazy">
                    </div>
                    <h2 class="work-auction-card-hdr">Join the Meeting</h2>
                    <p class="work-auction-card-para">At the time of the bidding, you will be connected to an online
                        meeting, so you can see the bid yourself.</p>
                </div>
            </div>
            <div class="col-md-4 work-auction-col">
                <div class="work-auction-card">
                    <div class="work-img-sctin">
                        <img src="{{asset('assets/images/staticPagesAssets/icon/thumbs-up-icon.webp')}}" class="work-auction-card-img" alt="" loading="lazy">
                    </div>
                    <h2 class="work-auction-card-hdr">Get Bidding Assistance</h2>
                    <p class="work-auction-card-para">Our team will assist you in making a competitive bid, so you can
                        get your vehicle at the best offer.</p>
                </div>
            </div>
            <div class="col-md-4 work-auction-col work-auction-small-cls">
                <div class="work-auction-card">
                    <div class="work-img-sctin">
                        <img src="{{asset('assets/images/staticPagesAssets/icon/invoice-icon.webp')}}" class="work-auction-card-img" alt="" loading="lazy">
                    </div>
                    <h2 class="work-auction-card-hdr">Receive an Invoice</h2>
                    <p class="work-auction-card-para">If your bid is successful, you will receive an invoice. Make the
                        payment to receive your vehicle.</p>
                </div>
            </div>
            <div class="col-md-4 work-auction-col work-auction-small-cls">
                <div class="work-auction-card">
                    <div class="work-img-sctin">
                        <img src="{{asset('assets/images/staticPagesAssets/icon/finance-ride-card.webp')}}" class="work-auction-card-img" alt="" loading="lazy">
                    </div>
                    <h2 class="work-auction-card-hdr">Discover More Vehicles</h2>
                    <p class="work-auction-card-para">In case of an unsuccessful bid, you will be redirected back to the
                        portal, where you can shortlist more cars.</p>
                </div>
            </div>
        </div>

        <p class="m-0 heading pt-4">Advance Deposits</p>
        <p class="m-0 para py-2">
            Each customer is required to make an advance deposit for their car after they have successfully won a bid. The deposit amount depends on the car price and is mentioned in the table below.
        </p>

        <table class="adv-depo">
            <thead>
                <tr>
                    <th widht="50%">Vehicle price (JPY)</th>
                    <th widht="50%">Deposit (JPY)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="50%">
                        up to 1,000,000
                    </td>
                    <td width="50%" class="border-right-0">
                        80,000
                    </td>
                </tr>
                <tr>
                    <td width="50%">
                        1,000,001 – 2,000,000
                    </td>
                    <td width="50%" class="border-right-0">
                        160,000
                    </td>
                </tr>
                <tr>
                    <td width="50%">
                        2,000,001 – 3,000,000
                    </td>
                    <td width="50%" class="border-right-0">
                        240,000
                    </td>
                </tr>
                <tr>
                    <td width="50%">
                        3,000,001 – 4,000,000
                    </td>
                    <td width="50%" class="border-right-0">
                        320,000
                    </td>
                </tr>
                <tr>
                    <td width="50%">
                        4,000,001 – 5,000,000
                    </td>
                    <td width="50%" class="border-right-0">
                        400,000
                    </td>
                </tr>
                <tr>
                    <td width="50%">
                        over 5,000,001
                    </td>
                    <td width="50%" class="border-right-0">
                        18%
                    </td>
                </tr>
            </tbody>
        </table>
     
        <p class="m-0 heading pt-4">What We Offer</p>
        <p class="m-0 para py-2 mb-3">
            From transparent inspections to smooth export procedures and assistance with customs 
            clearance, SAT’s Auction Service has got it all covered.
        </p>


        <div class="row">
            <div class="col-lg-6 mb-3">
                <div class="what-offer-card">
                    <h2 class="what-offer-card-hdr">Experience Beyond Expectations</h2>
                    <p class="sat-auction-comman-para">Become part of an experience that goes beyond your expectations.
                        Discover your ideal car at our car auction and interact with a community that shares the same
                        passion for vehicles as you.</p>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="what-offer-card">
                    <h2 class="what-offer-card-hdr">Commitment to Transparency</h2>
                    <p class="sat-auction-comman-para">We have built a solid reputation through our reliable service and
                        commitment to transparency. From detailed inspection reports to vehicle maintenance history, we
                        ensure transparency at every step.</p>
                </div>
            </div>
            <div class="col-lg-6 mb-3 auction-service-hdr">
                <div class="what-offer-card">
                    <h2 class="what-offer-card-hdr">Join Our Global Community</h2>
                    <p class="sat-auction-comman-para">Our community consists of car enthusiasts and professionals who
                        share a love for automobiles. Become part of SAT’s automotive family by choosing our Japanese
                        auto auction service.</p>
                </div>
            </div>
            <div class="col-lg-6 mb-3 auction-service-hdr marg-botm-0">
                <div class="what-offer-card">
                    <h2 class="what-offer-card-hdr">A Smooth Path to Your Dream Car</h2>
                    <p class="sat-auction-comman-para">From registration to bidding and finalizing your purchase, we
                        offer our customers at every step so they have a hassle-free experience. With us, you can enjoy
                        an effortless vehicle purchase experience.</p>
                </div>
            </div>
        </div>

        <p class="m-0 heading pt-4">Auction FAQs</p>

        <div class="autoParts_faqs">
            <div class="wraps">
                <div class="container py-3 p-0">
                    <p class="title">Frequently Asked Questions</p>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active position-relative" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Bidding and Auction</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link position-relative" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Costs and Shipping:</button>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        @component('used_car.partial.new_car_faqs')
                        @endcomponent
                      </div>
                      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        @component('used_car.partial.new_car_faqs')
                        @endcomponent
                      </div>

                    

                    </div>
                  </div>
            </div>
           </div>
        </div>
    </div>
</div>
</section>