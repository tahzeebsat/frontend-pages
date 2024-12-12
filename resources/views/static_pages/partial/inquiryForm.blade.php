<section class="how-to-pay-desktop desktop2-view">
    <div class="howToPay">
            <div class="row mx-2">
                <div class="col-md-2">
                    <div class="left">
                        <ul>
                            <li>
                                <a href="javascript:;">
                                <img src="{{asset('assets/images/staticPagesAssets/icon/money-dollar-circle-line.webp')}}" alt="Dollar" class="img-fluid" loading="lazy" width="22" height="22">
                                    How to Pay</a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                <img src="{{asset('assets/images/staticPagesAssets/icon/mail-add-line.webp')}}" alt="Mail" class="img-fluid" loading="lazy" width="22" height="22">
                                    Vehicle Information
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="active">
                                <img src="{{asset('assets/images/staticPagesAssets/icon/mail-send-line.webp')}}" alt="Mail" class="img-fluid" loading="lazy" width="22" height="22">
                                    Inquiry Form
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                <img src="{{asset('assets/images/staticPagesAssets/icon/bank-line.webp')}}" alt="Bank" class="img-fluid" loading="lazy" width="22" height="22">
                                    Bank Information
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="right py-4 px-4">
                        <p class="m-0 title pb-3">Inquiry Form:</p>
                        
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label form-label-inq">
                                        Name</label>
                                    <input type="name" class="form-control comman-input-field rounded-0" id="exampleFormControlInput1" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label form-label-inq">
                                        Email</label>
                                    <input type="name" class="form-control comman-input-field rounded-0" id="exampleFormControlInput1" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label form-label-inq">
                                        Phone</label>
                                    <input type="name" class="form-control comman-input-field rounded-0" id="exampleFormControlInput1" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label form-label-inq">
                                        Destination Country</label>
                                    <select class="form-select comman-input-field" aria-label="Default select example">
                                        <option selected="" class="slect-texture-slect">Select</option>
                                        <option value="1" class="form-sect-inq-open">Select</option>
                                        <option value="2" class="form-sect-inq-open">Select</option>
                                        <option value="3" class="form-sect-inq-open">Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="">
                                    <div class="d-flex justify-content-between align-items-md-center">
                                        <label for="exampleFormControlTextarea1" class="form-label form-label-inq">Your
                                            Question:</label>
                                    </div>
                                    <textarea class="form-control form-texarea-inq" id="exampleFormControlTextarea1" rows="3" placeholder="Type Your Question:"></textarea>
                                </div>
                            </div>
                            <div class="mt-4 mb-4 d-flex justify-content-center">
                                <button class="update-inquiry-btn px-5 py-2">
                                    Send Inquiry
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </div>

</section>


{{-- ====================== Mobile View ==================== --}}
<section class="how-to-pay-mobile mobile2-view">

<div class="howToPayMobile">
    <div class="container">
       <div class="top">
        <ul>
            <li>How to Pay</li>
            <li>Vehicle Information</li>
            <li class="active">Inquiry Form</li>
            <li>Bank Information</li>
        </ul>
       </div>

       <div class="right py-4">
        <div class="row">
            <h1 class="inquiry-hdr pb-3">Inquiry Form:</h1>
            <div class="col-md-4 col-sm-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label form-label-inq">
                        Name</label>
                    <input type="name" class="form-control comman-input-field rounded-0" id="exampleFormControlInput1" placeholder="Name">
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label form-label-inq">
                        Email</label>
                    <input type="name" class="form-control comman-input-field rounded-0" id="exampleFormControlInput1" placeholder="Email">
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label form-label-inq">
                        Phone</label>
                    <input type="name" class="form-control comman-input-field rounded-0" id="exampleFormControlInput1" placeholder="Phone">
                </div>
            </div>
            <div class="col-md-12 col-sm-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label form-label-inq">
                        Destination Country</label>
                    <select class="form-select comman-input-field" aria-label="Default select example">
                        <option selected="" class="slect-texture-slect">Select</option>
                        <option value="1" class="form-sect-inq-open">Select</option>
                        <option value="2" class="form-sect-inq-open">Select</option>
                        <option value="3" class="form-sect-inq-open">Select</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="">
                    <div class="d-flex justify-content-between align-items-md-center">
                        <label for="exampleFormControlTextarea1" class="form-label form-label-inq">Your
                            Question:</label>
                    </div>
                    <textarea class="form-control form-texarea-inq" id="exampleFormControlTextarea1" rows="3" placeholder="Type Your Question:"></textarea>
                </div>
            </div>
            <div class="mt-4 mb-4 d-flex justify-content-center">
                <button class="update-inquiry-btn px-5 py-2">
                    Send Inquiry
                </button>
            </div>
        </div>
    </div>
    </div>
</div>

</section>