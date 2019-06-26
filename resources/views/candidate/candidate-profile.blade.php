@extends('layout.app')

@section('title')
   || {{auth()->user()->first_name}} {{auth()->user()->last_name}}'s Page
@endsection

{{-- @section('styles')
  
@endsection() --}}

@section('content')
<!-- Title Header Start -->
<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
  <div class="container">

  </div>
</section>
<section class="detail-desc advance-detail-pr gray-bg">
  <div class="container">
<div class="ur-detail-wrap create-kit padd-bot-0">

<div class="row">
<div class="detail-pic"><img src="{{$candidate[0]->img_url}}" class="img" alt="" /><a href="#" class="detail-edit" title="edit"><i class="fa fa-pencil"></i></a></div>
<div class="detail-status"><span>{{$candidate[0]->status}}</span></div>
</div>

<div class="row bottom-mrg">
  <div class="col-md-12 col-sm-12">
    <div class="advance-detail detail-desc-caption">
      <h4>{{auth()->user()->first_name}} {{auth()->user()->last_name}}</h4><span class="designation">{{$candidate[0]->what_i_do}}</span>
      <ul>
        <li><strong class="j-applied">{{$candidate[0]->num_of_applications}}</strong>Job Applied</li>
        <li><strong class="j-shared">{{$candidate[0]->num_of_jobs_done}}</strong>Invitation</li>
      </ul>
    </div>
  </div>
</div>

<div class="row no-padd">
  <div class="detail pannel-footer">
    <div class="col-md-5 col-sm-5">
      <ul class="detail-footer-social">
        <li><a href="www.facebook.com/{{$candidate[0]->fb_url}}"><i class="fa fa-facebook"></i></a></li>
        <li><a href="www.twitter.com/{{$candidate[0]->twt_url}}"><i class="fa fa-twitter"></i></a></li>
        <li><a href="www.linkedin.com/{{$candidate[0]->lnkd_url}}"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="{{$candidate[0]->ext_url}}"><i class="fa fa-globe"></i></a></li>
      </ul>
    </div>
    <div class="col-md-7 col-sm-7">
      <div class="detail-pannel-footer-btn pull-right"><a href="javascript:void(0)" data-toggle="modal" data-target="#apply-job" class="footer-btn grn-btn" title="">Edit Now</a><a href="#" class="footer-btn blu-btn" title="">Save Draft</a></div>
    </div>
  </div>
</div>
</div>
  </div>
</section>

<section class="full-detail-description full-detail gray-bg">
  <div class="container">
      <div class="col-md-12 col-sm-12">
          <div class="full-card">
            <div class="deatil-tab-employ tool-tab">
    <ul class="nav simple nav-tabs" id="simple-design-tab">
      <li class="active"><a href="#about">About</a></li>
      <li><a href="#address">Address</a></li>
      <li><a href="#matches-job">Matches Job</a></li>
      <li><a href="#settings">Update Job Profile</a></li>
    </ul>
    
    <!-- Start All Sec -->
    <div class="tab-content">
      <div id="about" class="tab-pane fade in active">
        <h3>About {{Auth::user()->first_name}} {{Auth::user()->last_name}}</h3>
        <p>{{$candidate[0]->about}}</p>
      </div>
      <!-- End About Sec -->
      
      <!-- Start Address Sec -->
      <div id="address" class="tab-pane fade">
        <h3>Address Info</h3>
        <ul class="job-detail-des">
          <li><span>Address:</span>{{$candidate[0]->address_1}}</li>
          <li><span>Address 2:</span>{{$candidate[0]->address_1}}</li>
          <li><span>City:</span>{{$candidate[0]->city}}</li>
          <li><span>State:</span>{{$candidate[0]->state}}</li>
          <li><span>Country:</span>{{$candidate[0]->country}}</li>
          <li><span>Telephone:</span>{{$candidate[0]->phone}}</li>
          <li><span>Email:</span>{{auth()->user()->email}}</li>
        </ul>
      </div>
      <!-- End Address Sec -->
      
      <!-- Start Job List -->
      <div id="matches-job" class="tab-pane fade">
        <h3>Matches-job 122 new job</h3>
        <div class="row">
          <article class="advance-search-job">
            <div class="row no-mrg">
              <div class="col-md-6 col-sm-6">
                <a href="new-job-detail.html" title="job Detail">
                  <div class="advance-search-img-box"><img src="assets/img/com-2.jpg" class="img-responsive" alt=""></div>
                </a>
                <div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>Product Designer</h4></a><span>Google Ltd</span></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="advance-search-job-locat">
                  <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                </div>
              </div>
              <div class="col-md-2 col-sm-2"><a href="javascript:void(0)" data-toggle="modal" data-target="#apply-job" class="btn advance-search" title="apply">Apply</a></div>
            </div>
            <span class="tg-themetag tg-featuretag">Premium</span>
          </article>
          
          <article class="advance-search-job">
            <div class="row no-mrg">
              <div class="col-md-6 col-sm-6">
                <a href="new-job-detail.html" title="job Detail">
                  <div class="advance-search-img-box"><img src="assets/img/com-6.jpg" class="img-responsive" alt=""></div>
                </a>
                <div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>Project Manager</h4></a><span>Vertue Ltd</span></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="advance-search-job-locat">
                  <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                </div>
              </div>
              <div class="col-md-2 col-sm-2"><a href="javascript:void(0)" data-toggle="modal" data-target="#apply-job" class="btn advance-search" title="apply">Apply</a></div>
            </div>
          </article>
          
          <article class="advance-search-job">
            <div class="row no-mrg">
              <div class="col-md-6 col-sm-6">
                <a href="new-job-detail.html" title="job Detail">
                  <div class="advance-search-img-box"><img src="assets/img/com-7.jpg" class="img-responsive" alt=""></div>
                </a>
                <div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>Database Designer</h4></a><span>Twitter Ltd</span></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="advance-search-job-locat">
                  <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                </div>
              </div>
              <div class="col-md-2 col-sm-2"><a href="#" class="btn applied advance-search" title="applied"><i class="fa fa-check" aria-hidden="true"></i>Applied</a></div>
            </div>
          </article>
          
          <article class="advance-search-job">
            <div class="row no-mrg">
              <div class="col-md-6 col-sm-6">
                <a href="new-job-detail.html" title="job Detail">
                  <div class="advance-search-img-box"><img src="assets/img/com-2.jpg" class="img-responsive" alt=""></div>
                </a>
                <div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>Product Designer</h4></a><span>Google Ltd</span></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="advance-search-job-locat">
                  <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                </div>
              </div>
              <div class="col-md-2 col-sm-2"><a href="javascript:void(0)" data-toggle="modal" data-target="#apply-job" class="btn advance-search" title="apply">Apply</a></div>
            </div>
            <span class="tg-themetag tg-featuretag">Premium</span>
          </article>
          
          <article class="advance-search-job">
            <div class="row no-mrg">
              <div class="col-md-6 col-sm-6">
                <a href="new-job-detail.html" title="job Detail">
                  <div class="advance-search-img-box"><img src="assets/img/com-5.jpg" class="img-responsive" alt=""></div>
                </a>
                <div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>Human Resource</h4></a><span>Skype Ltd</span></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="advance-search-job-locat">
                  <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                </div>
              </div>
              <div class="col-md-2 col-sm-2"><a href="#" class="btn applied advance-search" title="applied"><i class="fa fa-check" aria-hidden="true"></i>Applied</a></div>
            </div>
          </article>
          
          <article class="advance-search-job">
            <div class="row no-mrg">
              <div class="col-md-6 col-sm-6">
                <a href="new-job-detail.html" title="job Detail">
                  <div class="advance-search-img-box"><img src="assets/img/com-6.jpg" class="img-responsive" alt=""></div>
                </a>
                <div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>Project Manager</h4></a><span>Vertue Ltd</span></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="advance-search-job-locat">
                  <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                </div>
              </div>
              <div class="col-md-2 col-sm-2"><a href="javascript:void(0)" data-toggle="modal" data-target="#apply-job" class="btn advance-search" title="applied">Apply</a></div>
            </div>
            <span class="tg-themetag tg-featuretag">Premium</span>
          </article>
          
          <article class="advance-search-job">
            <div class="row no-mrg">
              <div class="col-md-6 col-sm-6">
                <a href="new-job-detail.html" title="job Detail">
                  <div class="advance-search-img-box"><img src="assets/img/com-7.jpg" class="img-responsive" alt=""></div>
                </a>
                <div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>CEO &amp; Manager</h4></a><span>Twitter</span></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="advance-search-job-locat">
                  <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                </div>
              </div>
              <div class="col-md-2 col-sm-2"><a href="javascript:void(0)" data-toggle="modal" data-target="#apply-job" class="btn advance-search" title="apply">Apply</a></div>
            </div>
          </article>
          
          <article class="advance-search-job">
            <div class="row no-mrg">
              <div class="col-md-6 col-sm-6">
                <a href="new-job-detail.html" title="job Detail">
                  <div class="advance-search-img-box"><img src="assets/img/com-4.jpg" class="img-responsive" alt=""></div>
                </a>
                <div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>Product Designer</h4></a><span>Microsoft Ltd</span></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="advance-search-job-locat">
                  <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                </div>
              </div>
              <div class="col-md-2 col-sm-2"><a href="#" class="btn applied advance-search" title="applied"><i class="fa fa-check" aria-hidden="true"></i>Applied</a></div>
            </div>
          </article>
          
          <article class="advance-search-job">
            <div class="row no-mrg">
              <div class="col-md-6 col-sm-6">
                <a href="new-job-detail.html" title="job Detail">
                  <div class="advance-search-img-box"><img src="assets/img/com-3.jpg" class="img-responsive" alt=""></div>
                </a>
                <div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>PHP Developer</h4></a><span>Honda Ltd</span></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="advance-search-job-locat">
                  <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                </div>
              </div>
              <div class="col-md-2 col-sm-2"><a href="javascript:void(0)" data-toggle="modal" data-target="#apply-job" class="btn advance-search" title="apply">Apply</a></div>
            </div>
            <span class="tg-themetag tg-featuretag">Premium</span>
          </article>
          
          <article class="advance-search-job">
            <div class="row no-mrg">
              <div class="col-md-6 col-sm-6">
                <a href="new-job-detail.html" title="job Detail">
                  <div class="advance-search-img-box"><img src="assets/img/com-1.jpg" class="img-responsive" alt=""></div>
                </a>
                <div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>Web Designer</h4></a><span>Autodesk Ltd</span></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="advance-search-job-locat">
                  <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                </div>
              </div>
              <div class="col-md-2 col-sm-2"><a href="#" class="btn applied advance-search" title="applied"><i class="fa fa-check" aria-hidden="true"></i>Applied</a></div>
            </div>
          </article>
          
        </div>
        
        <div class="row">
          <ul class="pagination">
            <li><a href="#">«</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li>
            <li><a href="#">»</a></li>
          </ul>
        </div>
      </div>
      <!-- End Job List -->
      
      
      <!-- Start Settings -->
      <div id="settings" class="tab-pane">
        <div class="row no-mrg">
          <h3>Edit Profile</h3>
          <form class="edit-pro" method="POST" action="{{ route('createCandidate') }}">
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
              <label>Gender</label><br>
              <input name="gender" type="radio" value="male" class="form-control"><span>Male</span>
              <input name="gender" type="radio" value="female" class="form-control"><span>Female</span>
              <input name="gender" type="radio" value="others" class="form-control"><span>Others</span>
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
              <label>Facebook Url</label>
              <input name="fb_url" type="text" class="form-control">
            </div>
            <div class="col-md-4 col-sm-6">
              <label>Twitter Url</label>
              <input name="twt_url" type="text" class="form-control">
            </div>
            <div class="col-md-4 col-sm-6">
              <label>Linked Url</label>
              <input name="lnkd_url" type="text" class="form-control">
            </div>
            <div class="col-md-4 col-sm-6">
              <label>Linked Url</label>
              <input name="ext_web_url" type="text" class="form-control">
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
              <button type="submit" class="update-btn" >Update</button>
            </div>
          </form>
        </div>
      </div>
      <!-- End Settings -->
    </div>
    <!-- Start All Sec -->
  </div>  
          </div>
      </div>
  </div>
</section>
@endsection()