@extends('layout.app')

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
  <div class="detail-pic"><img src="assets/img/can-1.png" class="img" alt="" /><a href="#" class="detail-edit" title="edit"><i class="fa fa-pencil"></i></a></div>
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
        <li><a href="{{$candidate[0]->fb_url}}"><i class="fa fa-facebook"></i></a></li>
        <li><a href="{{$candidate[0]->twt_url}}"><i class="fa fa-twitter"></i></a></li>
        <li><a href="{{$candidate[0]->lnkd_url}}"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="{{$candidate[0]->ext_url}}"><i class="fa fa-web"></i></a></li>
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
      <!-- End Settings -->
    </div>
    <!-- Start All Sec -->
  </div>  
          </div>
      </div>
  </div>
</section>
@endsection()