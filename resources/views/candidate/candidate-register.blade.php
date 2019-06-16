@extends('layout.app')
@section('styles')
  <link rel="stylesheet" href="build/css/intlTelInput.css">
@endsection

@section('content')
  <section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
    <div class="container">
      <h2>Candidate Form</h2>
    </div>
  </section>
  
  <section>
    <div id="settings" class="tab-pane">
      <div class="row no-mrg">
        <h3>Edit Profile</h3>
        <form class="edit-pro">
          <div class="col-md-4 col-sm-6">
            <label>First Name</label>
            <input type="text" class="form-control" value={{Auth::user()->first_name}}>
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Middle Name</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Last Name</label>
            <input type="text" class="form-control" value={{Auth::user()->last_name}}>
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Email</label>
            <input type="email" class="form-control" value={{Auth::user()->email}}>
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Job Title</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Phone</label>
            <input type="tel" class="form-control" id="phone">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Age</label>
            <input type="date" class="form-control" >
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Gender</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Highest Educational Qualification</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Address</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Address 2</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>City</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Loal Government/Province</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>State</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Country</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Availiabilty</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Skills</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Religion</label>
            <input type="text" class="form-control">
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
@section('scripts')
  <script src="build/js/intlTelInput.min.js"></script>
  <script>
    let input = document.querySelector("#phone");

    window.intlTelInput(input,({ }))
  </script>
@endsection