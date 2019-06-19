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
        <form class="edit-pro" method="POST" action="{{ route('createCandidate') }}">
          {{ csrf_field() }}
          <div class="col-md-4 col-sm-6">
            <label>First Name</label>
            <input name="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" value={{Auth::user()->first_name}}>
            @error('first_name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="col-md-4 col-sm-6">
            <label>Middle Name</label>
            <input name="middle_name" type="text" class="form-control @error('middle_name') is-invalid @enderror">
            @error('middle_name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="col-md-4 col-sm-6">
            <label>Last Name</label>
            <input name="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" value={{Auth::user()->last_name}}>
            @error('last_name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Email</label>
            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" value={{Auth::user()->email}}>
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Job Title</label>
            <input name="what_i_do" type="text" class="form-control @error('what_i_do') is-invalid @enderror">
            @error('what_i_do')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Phone</label>
            <input name="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone">
            @error('phone')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="clearfix"></div>
          <div class="col-md-4 col-sm-6">
            <label>Age</label>
            <input name="age" type="date" class="form-control @error('age') is-invalid @enderror" >
            @error('age')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          
          <div class="col-md-4 col-sm-6">
            <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror">
              <option selected value="">select your gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="others">Others</option>
            </select>
            @error('gender')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>


          <div class="col-md-4 col-sm-6">
            <select name="edu_level" class="form-control @error('edu_level') is-invalid @enderror">
              <option selected value="">Highest Educational Qualification</option>
              <option value="no formal education">No formal education</option>
              <option value="primary school">Primary school</option>
              <option value="secondary school">Secondary school</option>
              <option value="technical school">Technical school</option>
              <option value="nce">National Certificate of Education</option>
              <option value="nd1">ND I</option>
              <option value="nd2">ND II</option>
              <option value="bsc">First Degree</option>
              <option value="pgd">PG Degree</option>
            </select>
            @error('edu_level')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="col-md-4 col-sm-6">
            <label>Course of Study</label>
            <input name="discipline" type="text" class="form-control @error('discipline') is-invalid @enderror">
            @error('discipline')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>


          <div class="col-md-4 col-sm-6">
            <label>Status</label>
            <select name="status" class="form-control @error('status') is-invalid @enderror">
              <option value="hired">Hired</option>
              <option value="hunting">Hunting</option>
              <option value="vacation">Vacation</option>
            </select>
            @error('status')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>


          <div class="col-md-4 col-sm-6">
            <label>Address</label>
            <input name="address_1" type="text" class="form-control @error('address_1') is-invalid @enderror">
            @error('address_1')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>


          <div class="col-md-4 col-sm-6">
            <label>Address 2</label>
            <input name="address_2" type="text" class="form-control @error('address_2') is-invalid @enderror">
            @error('address_2')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>


          <div class="col-md-4 col-sm-6">
            <label>City</label>
            <input name="city" type="text" class="form-control @error('city') is-invalid @enderror">
            @error('city')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>


          <div class="col-md-4 col-sm-6">
            <label>Loal Government/Province</label>
            <input name="lga" type="text" class="form-control @error('lga') is-invalid @enderror">
            @error('lga')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>


          <div class="col-md-4 col-sm-6">
            <label>State</label>
            <input id="state" list="states" name="state" type="text" class="form-control @error('state') is-invalid @enderror">
            <select name="state" id="states">
              <option selected="selected">Select state...</option>
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
            </select>
            @error('state')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>


          <div class="col-md-4 col-sm-6">
            <label>Country</label>
            <input id="country" name="country" type="text" class="form-control @error('country') is-invalid @enderror">
            @error('country')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>


          <div class="col-md-4 col-sm-6">
            <label>Religion</label>
            <input name="religion" type="text" class="form-control @error('religion') is-invalid @enderror">
            @error('religion')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>


          <div class="col-md-4 col-sm-6">
            <label>Facebook Url</label>
            <input name="fb_url" type="text" class="form-control @error('fb_url') is-invalid @enderror">
            @error('fb_url')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="col-md-4 col-sm-6">
            <label>Twitter Url</label>
            <input name="twt_url" type="text" class="form-control @error('twt_url') is-invalid @enderror">
            @error('twt_url')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>


          <div class="col-md-4 col-sm-6">
            <label>Linked Url</label>
            <input name="lnkd_url" type="text" class="form-control @error('lnkd_url') is-invalid @enderror">
            @error('lnkd_url')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="col-md-4 col-sm-6">
            <label>Instagram Url</label>
            <input name="ig_url" type="text" class="form-control @error('ig_url') is-invalid @enderror">
            @error('ig_url')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>


          <div class="col-md-4 col-sm-6">
            <label>External Website Url</label>
            <input name="ext_web_url" type="text" class="form-control @error('ext_web_url') is-invalid @enderror">
            @error('ext_web_url')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>


          <div class="col-md-4 col-sm-6">
            <label>Upload Profile Pic</label>
            <div class="dz-default dz-message">
              <input accept="image/*" name="img_url" type="file" class="form-control @error('img_url') is-invalid @enderror">
              @error('img_url')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Upload Profile Cover</label>
            <div class="dz-default dz-message">
              <input accept=".pdf" name="cv_url" type="file" class="form-control @error('cv_url') is-invalid @enderror">
              @error('cv_url')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <label>Skills</label>
            <input name="skills" type="text" class="form-control @error('skills') is-invalid @enderror" id="skills">
            @error('skills')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="col-md-4 col-sm-6">
            <label>About you</label>
            <textarea name="about" class="form-control @error('about') is-invalid @enderror" id="about"></textarea>
            @error('about')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="col-sm-12">
            <button type="submit" class="update-btn">Submit</button>
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