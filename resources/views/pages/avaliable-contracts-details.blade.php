@extends('layout.app')

@section('content')
<section class="overlape">
  <div class="block no-padding">
    <div data-velocity="-.1" style="background: url(images/slider2.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
    <div class="container fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner-header hidden-xs" style="padding-top:80px; border-bottom:2px solid #003">
            &nbsp;
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="block">
    <div class="container">
      <div class="row">
         <div class="col-lg-8 column">
           <div class="job-single-sec">
             <div class="job-single-head">
               <div class="job-thumb"> <img style="padding:6px;" src="<?php echo "images/profile/employer/$ccompany"; ?>" alt="" /> </div>
               <div class="job-head-info">
                 <h4><?php echo $cname; ?></h4>
                 <span><?php echo $address; ?></span>
                                  <?php
                  if($website!="") {
                     echo "<p><i class='la la-unlink'></i>$website</p>";
                  }
                ?>
                 <p><i class="la la-phone"></i><?php echo $cphone; ?></p>
                 <p><i class="la la-envelope-o"></i><?php echo $company; ?></p>
               </div>
             </div><!-- Job Head -->
             <div class="job-details">
               <h3 style="font-size:22px; color:#F00"><?php echo $title; ?></h3>
               <?php echo $description; ?>
               <h3>Qualification, Skills & Expertise Required</h3>
               <?php echo $skills; ?>
               <h3>Contractor Responsibilities & Duties</h3>
               <?php echo $responsibilities; ?>
             </div>
             <div class="share-bar">
               <span>Share</span><a href="#" class="share-fb"><i class="fa fa-facebook"></i></a><a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
             </div>
             <div class="recent-jobs">
               <h3>Recent Jobs</h3>
               <div class="job-list-modern">
                 <div class="job-listings-sec no-border">
                  <?php
                    $sjobs_list = mysql_query("SELECT * FROM contractor_jobs WHERE id2<>'$job_id' ORDER BY regdate DESC LIMIT 5") or trigger_error("Cannot select FROM contractor_jobs");
                    while($rjobs=mysql_fetch_array($sjobs_list)) {
                      $id = $rjobs['id'];
                      $cid = sha1($id);
                      $job_id = $rjobs['id2'];
                      $title = $rjobs['title'];
                      $regdate = $rjobs['regdate'];
                      $regdate = date("M j, Y", strtotime($regdate));
                      $descriptionx = $rjobs['description'];
                      $description = substr($descriptionx, 0, 170);
                      $description = str_replace("<p>", "", $description);
                      $description = str_replace("</p>", "", $description);
                      $description = str_replace("<ul>", "", $description);
                      $description = str_replace("</ul>", "", $description);
                      $description = str_replace("<li>", "", $description);
                      $description = str_replace("</li>", "", $description);
                      if(strlen($descriptionx)>170) {
                        $description = trim($description);
                        $description = "$description"."...";
                      }
                      $job_sector = $rjobs['job_sector'];
                      $sjob_sector = mysql_query("SELECT * FROM business_sectors WHERE id='$job_sector'");
                      $rjob_sector = mysql_fetch_array($sjob_sector);
                      $cjob_sector = $rjob_sector['name'];
                      $location = $rjobs['location'];
                      $mlga = $rjobs['lga'];
                      $slga = mysql_query("SELECT * FROM local_governments WHERE id='$mlga'");
                      $rlga = mysql_fetch_array($slga);
                      $cclga = $rlga['name'];
                      $ccstate = $rlga['state_id'];
                      $sstate = mysql_query("SELECT * FROM states WHERE id='$ccstate'");
                      $rstate = mysql_fetch_array($sstate);
                      $cccstate = $rstate['name'];
                      $company = $rjobs['company'];
                      $ccompany = sha1($company);
                      $ccompany = "$ccompany".".jpg";
                      //Get employer details
                      $scompany = mysql_query("SELECT * FROM employer WHERE username='$company'") or trigger_error("Cannot select from employer table");
                      $rcompany = mysql_fetch_array($scompany);
                      $cname = $rcompany['business_name'];
                      
                      echo "
                        <div class='job-listings-sec no-border'>
                          <a href='available-contracts-details.php?contract_id=$cid' title=''>
                            <div class='job-listing wtabs'>
                              <div class='job-title-sec'>
                                <div class='c-logo'> <img src='images/profile/employer/$ccompany' /> </div>
                                <div class='job-lctn' style='padding-top:0'>$title</div>
                                <br>
                                <div class='job-lctn' style='padding-top:0; color:#09F'><i class='la la-briefcase'></i>$cname &nbsp;&nbsp;&nbsp;</div>
                                <div class='job-lctn' style='padding-top:0; color:#00F'><i class='la la-map-marker'></i>$cccstate State &nbsp;&nbsp;&nbsp;</div>
                                <div style='font:12px Verdana; color:#666; font-weight:100; display:block; padding-top:0;'>$description</div>
                              </div>
                              <div class='job-style-bx'>
                                <span class='job-is ft'>#{$job_id}</span>
                                <i>Posted: $regdate</i>
                              </div>
                            </div>
                          </a>
                        </div>
                      ";
                    }
                  ?>
                </div>
               </div>
             </div>
           </div>
         </div>
         <div class="col-lg-4 column">
                    <?php
            if(isset($_SESSION['login_candidate_proceed']) or isset($_SESSION['login_employer_proceed'])) {
              echo "";
            }
            elseif(!isset($_SESSION['login_contractor_proceed'])) {
              echo "<a href='login.php' class='apply-thisjob' title=''><i class='la la-paper-plane'></i><em>Login to apply for this job</em></a>";
            }
            else {
              $scontractor = mysql_query("SELECT * FROM contractor_applications WHERE job='$job_id33' AND username='$userdata'") or trigger_error("Cannot query contractor_applications table");
              $ncontractor = mysql_num_rows($scontractor);
              if($ncontractor<1) {
                echo "<a class='apply-thisjob signup-popup' title=''><i class='la la-paper-plane'></i>Apply for this job</a>";
              }
              else {
                echo "<a class='apply-thisjob' title=''><i class='la la-paper-plane'></i><em>You've already applied for this job</em></a>";
              }
            }
          ?>
           <div class="job-overview">
             <h3>Job Overview</h3>
             <ul>
               <li><i class="la la-shield"></i><h3>Company</h3><span><?php echo $cname; ?></span></li>
               <li><i class="la la-mars-double"></i><h3>Posted</h3><span><?php echo $regdate; ?></span></li>
               <li><i class="la la-puzzle-piece"></i><h3>Job Sector</h3><span><?php echo $cjob_sector; ?></span></li>
                              <li><i class="la la-clock-o"></i><h3>Expected Start Date</h3><span><?php echo $start2; ?></span></li>
                              <li><i class="la la-clock-o"></i><h3>Expected Completion Date</h3><span><?php echo $end2; ?></span></li>
                              <!--<li><i class="la la-line-chart"></i><h3>Expected Project Duration</h3><span><?php echo $duration; ?> days</span></li>-->
             </ul>
           </div><!-- Job Overview -->
           <div class="job-location">
             <h3>Job Location</h3>
             <div class="job-lctn-map">
               <iframe src="https://maps.google.com/?q=<?php echo $term; ?>"></iframe>
             </div>
           </div>
           <div class="extra-job-info">
             <span><i class="la la-clock-o"></i>Posted <strong><?php echo $days; ?></strong>days ago</span>
           </div>
         </div>
      </div>
    </div>
  </div>
</section>
@endsection

