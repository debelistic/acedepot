@extends('layout.app')
@section('styles')
  <link rel="stylesheet" href="build/css/intlTelInput.css">
  <link rel="stylesheet" type="text/css" href="jquery.tagsinput.css" />
  <link href="dist/css/flags.css" rel="stylesheet">

@endsection

@section('content')
  @if (session('error'))
    <div class="error-logger alert alert-danger">{{ session('error') }}</div>
  @endif
  <section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
    <div class="container">
      <h2>Candidate Form</h2>
    </div>
  </section>
  
  <section>
    <div id="settings" class="tab-pane">
      <div class="row no-mrg">
        <h3>Edit Profile</h3>
        <form class="edit-pro" method="POST" action="{{ route('candidateCreate') }}">
          {{ csrf_field() }}
          <div class="col-md-4 col-sm-6">
            <label>First Name</label>
            <input name="first_name" type="text" class="form-control" value={{Auth::user()->first_name}}>
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Middle Name</label>
            <input name="middle_name" type="text" class="form-control">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Last Name</label>
            <input name="last_name" type="text" class="form-control" value={{Auth::user()->last_name}}>
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Email</label>
            <input name="email" type="email" class="form-control" value={{Auth::user()->email}}>
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Job Title</label>
            <input name="what_i_do" type="text" class="form-control">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Phone</label>
            <input name="phone" type="tel" class="form-control" id="phone">
          </div>
          <div class="clearfix"></div>
          <div class="col-md-4 col-sm-6">
            <label>Age</label>
            <input name="age" type="date" class="form-control" >
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Gender</label>
            <input name="gender" type="radio" value="male" class="form-control">Male<br>
            <input name="gender" type="radio" value="female" class="form-control">Female<br>
            <input name="gender" type="radio" value="others" class="form-control">Others<br>
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Highest Educational Qualification</label>
            <input list="edu_level" name="highest_qualification" type="text" class="form-control">
            <datalist id="edu_level">
              <option value="No formal education">
              <option value="Primary school">
              <option value="Secondary school">
              <option value="Technical school">
              <option value="NCE">
              <option value="ND I">
              <option value="ND II">
              <option value="First Degree">
              <option value="PG Degree">
            </datalist>
          </div>
          <div class="col-md-4 col-sm-6">
              <label>Status</label>
              <input list="available" name="status" type="text" class="form-control">
              <datalist id="available">
                <option value="Hired">
                <option value="Hunting">
                <option value="Vacation">
              </datalist>
            </div>
          <div class="col-md-4 col-sm-6">
            <label>Address</label>
            <input name="address_1" type="text" class="form-control">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Address 2</label>
            <input name="address_2" type="text" class="form-control">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>City</label>
            <input name="city" type="text" class="form-control">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Loal Government/Province</label>
            <input name="lga" type="text" class="form-control">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>State</label>
            <input id="state" list="states" name="state" type="text" class="form-control">
            <datalist name="ostate" id="states">
              <option selected="selected">Select item...</option>
              <option value='Abia'>Abia</option>
              <option value='Adamawa'>Adamawa</option>
              <option value='AkwaIbom'>AkwaIbom</option>
              <option value='Anambra'>Anambra</option>
              <option value='Bauchi'>Bauchi</option>
              <option value='Bayelsa'>Bayelsa</option>
              <option value='Benue'>Benue</option>
              <option value='Borno'>Borno</option>
              <option value='CrossRivers'>CrossRivers</option>
              <option value='Delta'>Delta</option>
              <option value='Ebonyi'>Ebonyi</option>
              <option value='Edo'>Edo</option>
              <option value='Ekiti'>Ekiti</option>
              <option value='Enugu'>Enugu</option>
              <option value='Gombe'>Gombe</option>
              <option value='Imo'>Imo</option>
              <option value='Jigawa'>Jigawa</option>
              <option value='Kaduna'>Kaduna</option>
              <option value='Kano'>Kano</option>
              <option value='Katsina'>Katsina</option>
              <option value='Kebbi'>Kebbi</option>
              <option value='Kogi'>Kogi</option>
              <option value='Kwara'>Kwara</option>
              <option value='Lagos'>Lagos</option>
              <option value='Nasarawa'>Nasarawa</option>
              <option value='Niger'>Niger</option>
              <option value='Ogun'>Ogun</option>
              <option value='Ondo'>Ondo</option>
              <option value='Osun'>Osun</option>
              <option value='Oyo'>Oyo</option>
              <option value='Plateau'>Plateau</option>
              <option value='Rivers'>Rivers</option>
              <option value='Sokoto'>Sokoto</option>
              <option value='Taraba'>Taraba</option>
              <option value='Yobe'>Yobe</option>
              <option value='Zamfara'>Zamafara</option>
            </datalist>
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Country</label>
            <input id="country" name="country" type="text" class="form-control">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Religion</label>
            <input name="religion" type="text" class="form-control">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Upload Profile Pic</label>
            <div class="dz-default dz-message">
              <input accept="image/*" name="img_url" type="file" class="form-control">
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Upload Profile Cover</label>
            <div class="dz-default dz-message">
              <input accept=".pdf" name="cv_url" type="file" class="form-control">
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Skills</label>
            <input name="skills" type="text" class="form-control" id="skills">
          </div>
          <div class="col-md-4 col-sm-6">
            <label>About you</label>
            <textarea name="about" class="form-control" placeholder="Write Something"></textarea>
          </div>
          {{-- <select name="ostate" id="ostate">
            <option selected="selected">Select item...</option>
            <option value='Abia'>Abia</option>
            <option value='Adamawa'>Adamawa</option>
            <option value='AkwaIbom'>AkwaIbom</option>
            <option value='Anambra'>Anambra</option>
            <option value='Bauchi'>Bauchi</option>
            <option value='Bayelsa'>Bayelsa</option>
            <option value='Benue'>Benue</option>
            <option value='Borno'>Borno</option>
            <option value='CrossRivers'>CrossRivers</option>
            <option value='Delta'>Delta</option>
            <option value='Ebonyi'>Ebonyi</option>
            <option value='Edo'>Edo</option>
            <option value='Ekiti'>Ekiti</option>
            <option value='Enugu'>Enugu</option>
            <option value='Gombe'>Gombe</option>
            <option value='Imo'>Imo</option>
            <option value='Jigawa'>Jigawa</option>
            <option value='Kaduna'>Kaduna</option>
            <option value='Kano'>Kano</option>
            <option value='Katsina'>Katsina</option>
            <option value='Kebbi'>Kebbi</option>
            <option value='Kogi'>Kogi</option>
            <option value='Kwara'>Kwara</option>
            <option value='Lagos'>Lagos</option>
            <option value='Nasarawa'>Nasarawa</option>
            <option value='Niger'>Niger</option>
            <option value='Ogun'>Ogun</option>
            <option value='Ondo'>Ondo</option>
            <option value='Osun'>Osun</option>
            <option value='Oyo'>Oyo</option>
            <option value='Plateau'>Plateau</option>
            <option value='Rivers'>Rivers</option>
            <option value='Sokoto'>Sokoto</option>
            <option value='Taraba'>Taraba</option>
            <option value='Yobe'>Yobe</option>
            <option value='Zamfara'>Zamafara</option>
          </select> --}}
          <div class="col-sm-12">
            <input type="submit" class="update-btn" value="Submit">
          </div>
        </form>
      </div>
    </div>
  </section>
@endsection
@section('scripts')
  <script src="build/js/intlTelInput.min.js"></script>
  <script src="jquery.tagsinput.js"></script>
  <script src="state-lga.js"></script>

  <script>
    let input = document.querySelector("#phone");

    window.intlTelInput(input,({ }));
    $('#skills').tagsInput();
  </script>
@endsection