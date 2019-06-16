@extends('layout.app')

@section('content')
  <section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
    <div class="container">
      <h2>Candidate Form</h2>
    </div>
  </section>
  <section>
    <div id="settings" class="tab-pane fade">
      <div class="row no-mrg">
        <h3>Edit Profile</h3>
        <form class="edit-pro">
          <div class="col-md-4 col-sm-6">
            <label>First Name</label>
            <input type="text" class="form-control" placeholder="Matthew">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Middle Name</label>
            <input type="text" class="form-control" placeholder="Else">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Last Name</label>
            <input type="text" class="form-control" placeholder="Dana">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="dana.mathew@gmail.com">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Phone</label>
            <input type="text" class="form-control" placeholder="+91 258 475 6859">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Zip / Postal</label>
            <input type="text" class="form-control" placeholder="258 457 528">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Address</label>
            <input type="text" class="form-control" placeholder="204 Lowes Alley">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Address 2</label>
            <input type="text" class="form-control" placeholder="Software Developer">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Organization</label>
            <input type="text" class="form-control" placeholder="Software Developer">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>City</label>
            <input type="text" class="form-control" placeholder="Chandigarh">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>State</label>
            <input type="text" class="form-control" placeholder="Punjab">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Country</label>
            <input type="text" class="form-control" placeholder="India">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Old Password</label>
            <input type="password" class="form-control" placeholder="*********">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>New Password</label>
            <input type="password" class="form-control" placeholder="*********">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Old Password</label>
            <input type="password" class="form-control" placeholder="*********">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>About you</label>
            <textarea class="form-control" placeholder="Write Something"></textarea>
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Upload Profile Pic</label>
            <div class="dropzone dz-clickable profile-pic">
              <div class="dz-default dz-message">
                <i class="fa fa-cloud-upload"></i>
                <span>Drop files here to upload</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Upload Profile Cover</label>
            <div class="dropzone dz-clickable profile-cover">
              <div class="dz-default dz-message">
                <i class="fa fa-cloud-upload"></i>
                <span>Drop files here to upload</span>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <button type="button" class="update-btn">Update Now</button>
          </div>
        </form>
      </div>
    </div>
  </section>
@endsection