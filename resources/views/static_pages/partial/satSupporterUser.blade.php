<section class="container" id="dashboard_selection">
    <div class="grid-danshboard">
      <div class="dash-item-1">
        <div class="sticy-items-dashboard">
          <ul>
            <li class="selected-option">
              <a href="javascript:;">
                <img src="{{asset('assets/images/staticPagesAssets/icon/user-6-fill.webp')}}" alt="profile" class="img-fluid active" loading="lazy" width="22" height="22">
                Profile</a>
            </li>
            <li>
              <a href="javascript:;">
                <img src="{{asset('assets/images/staticPagesAssets/icon/account-box-line.webp')}}" alt="profile" class="img-fluid" loading="lazy" width="22" height="22">
                Marketing Material</a>
            </li>
            <li>
              <a href="javascript:;">
                <img src="{{asset('assets/images/staticPagesAssets/icon/star-smile-line.webp')}}" alt="profile" class="img-fluid" loading="lazy" width="22" height="22">
                Track Referrals</a>
            </li>
           
           
          </ul>
          <div class="card-sidebar" style="margin-top:72%;">
            <p>A new way to buy modern and used cars</p>
            <button class="logout-sidebar"><img src="{{asset('assets/images/staticPagesAssets/icon/logout-icon.webp')}}" alt=""> Logout</button>
          </div>
        </div>
      </div>
      <div class="dash-item-2">
        <div class="card-img-selecton">
          <div class="position-relative" id="uploadImage_Id">
            <img src="{{asset('assets/images/staticPagesAssets/images/profilepic.webp')}}" class="prof-pic" height="71" width="71" alt="">
            <img src="{{asset('assets/images/staticPagesAssets/icon/camera-fill.webp')}}" class="action-img" alt="">
            <div class="overlay-img"></div>
            <input type="file" hidden="" id="profile_pic_field">
          </div>
          <div>
            <h3 class="prof-tile">Jeckson</h3>
            <p class="prof-email">jackson421@gmail.com</p>
          </div>
        </div>
        <form action="javascript:;" class="mt-32p">
          <div class="row input-field-set my-4">
            <div class="col-lg-6 mb-4">
              <label class="form-label">Name</label>
              <input type="text" class="form-control text-fild" placeholder="Name">
              <div class="form-error d-none">We'll never share your email with anyone else.</div>
            </div>
           
            
            <div class="col-lg-6 mb-4">
                <label class="form-label">Email</label>
                <input type="email" class="form-control text-fild" placeholder="Email">
                <div class="form-error d-none">We'll never share your email with anyone else.</div>
              </div>
            <div class="col-lg-6 mb-4">
                <label class="form-label">Phone</label>
                <input type="text" class="form-control text-fild" placeholder="Phone No">
                <div class="form-error d-none">We'll never share your email with anyone else.</div>
              </div>
            

            <div class="col-lg-6 mb-4">
              <label class="form-label">Country</label>
              <select class="form-select">
                <option value="1">Select</option>
                <option value="1">Pakistan</option>
                <option value="2">Afghanistan</option>
                <option value="3">Germany</option>
              </select>
              <div class="form-error d-none">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-4 col-12">
              <label class="form-label">Address</label>
              <textarea class="form-control" placeholder="Add Your Address" rows="4"></textarea>
              <div class="form-error d-none">We'll never share your email with anyone else.</div>
            </div>
           
            <div class="mt-24s col-12 d-flex justify-content-center">
              <button class="update-btn" onclick="event.preventDefault()">Update Information</button>
            </div>
        
      </div></form>
    </div>
  </div></section>