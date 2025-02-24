<section class="track_order_desktop">
<div class="innrOrder">
    <div class="container track-order">
        <div class="row d-flex justify-content-center align-content-center">

            <h5 class="track-oreder-card-title">Track Your Order</h5>
            <p class="track-oreder-card-text text-center">Enter your order number and email address to get the status of your order.</p>

            <form id="form_track_order" action="https://satjapan.com/process-tracking-order" method="POST" class="d-flex justify-content-center">
                <input type="hidden" name="_token" value="8ut4IGGt9cvCinx3pXkpj8DhGEAFVthe6zB6Sm2u" autocomplete="off">                    <div class="row track-form">
                                            <div class="col-12 mb-4">
                        <label for="country" class="col-form-label track-order-input-label">Order Number
                            <span class="text-danger badge top-0 start-0 p-0">*</span> </label>
                        <input type="text" class="form-control bg-white-50 h-46 fs-12 fw-500 input-mail-order
                            brr-none br-4p" name="order_no" id="order_no" placeholder="Order Number" value="" autocomplete="off" required="">
                                                </div>
                    <!-- Input Field -->
                    <div class="col-12 mb-4">
                        <div class="input-container">
                            <div>
                                <label for="country" class="col-form-label track-order-input-label">Email
                                    <span class="text-danger badge top-0 start-0 p-0">*</span> </label>
                                
                                <div class="track-order-input-main">
                                    <img src="{{asset('/assets/images/staticPagesAssets/icon/track-order-mail.svg')}}" class="track-input-img" height="14" width="14" alt="">
                                    <input type="email" name="email" class="track-input-field" placeholder="example@gmail.com" value="" autocomplete="off" required="">
                                </div>
                            </div>
                                                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" class="order-track-btn" id="btnFormTrackOrder">
                            Submit
                        </button>
                    </div>
                </div>
            </form>


</div>
    </div>
</div>
</section>