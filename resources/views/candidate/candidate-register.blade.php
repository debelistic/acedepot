@extends('layout.app')
@section('title')
   || Candidate Registration
@endsection
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
        <form class="edit-pro" method="POST" action="{{ route('createCandidate') }}" enctype="multipart/form-data">
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
            <label for="gender">gender</label>
            <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror">
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
            <label for="highest_qualification">Highest Educational Qualification</label>
            <select name="highest_qualification" class="form-control @error('highest_qualification') is-invalid @enderror">
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
            @error('highest_qualification')
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
            <select name="state" id="states" class="form-control @error('state') is-invalid @enderror">
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
            <select id="country" name="country" class="form-control @error('country') is-invalid @enderror">
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option selected value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
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
            <label>Facebook Username</label>
            <input name="fb_url" type="text" class="form-control @error('fb_url') is-invalid @enderror">
            @error('fb_url')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="col-md-4 col-sm-6">
            <label>Twitter Username</label>
            <input name="twt_url" type="text" class="form-control @error('twt_url') is-invalid @enderror">
            @error('twt_url')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>


          <div class="col-md-4 col-sm-6">
            <label>Linked Username</label>
            <input name="lnkd_url" type="text" class="form-control @error('lnkd_url') is-invalid @enderror">
            @error('lnkd_url')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="col-md-4 col-sm-6">
            <label>Instagram Username</label>
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

    window.intlTelInput(input,({ 
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
    }));
    $('#skills').tagsInput();
  </script>
@endsection