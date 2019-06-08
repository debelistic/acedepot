@extends('layout.app')

@section('content')
<section class="overlape">
  <div class="block no-padding">
    <div data-velocity="-.1" style="background: url(images/slider2.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
    <div class="container fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner-header">
            <h3>About AceDepot</h3>
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
        <div class="col-lg-12">
          <div class="about-us">
            <div class="row">
              <div class="col-lg-7">
                <p style="color:#069; margin-bottom:10px">We deliver results, we strive for excellence, we operate with integrity.</p>
                                  <p style="color:#F90; margin-bottom:10px">Our goal is for you to be able to plan the following activities from start to finish on AceDepot.</p>
                <ul style="list-style-type:disc">
                                    <li>Wedding ceremonies and other parties, seminars and conferences: caterer, seamstress/tailor, events center, makeup and beauty stylists, printing.</li>
                                      <li>Building: Brick layer, painter, panel beater, tiler, pop, carpenter, roofer</li>
                                      <li>Interior Decorations: Upholstery, carpenter, interior decorator</li>
                                      <li>Home/Office maintenance: handyman,</li>
                                      <li>Travel: Travel agents, hotels,</li>
                                      <li>Energy & Power: Alternative means of power supply such as, inverters, solar energy, etc</li>
                                      <li>Domestic staffing:</li>
                                      <li>Business/Office staffing;</li>
                                      <li>Supply of goods:</li>
                                      <li>Education, Training and Research:</li>
                                      <li>Printing, branding and packaging:</li>
                                      <li>IT Specialties: Website design, programmers,</li>
                                  </ul>
              </div>
              <div class="col-lg-5">
                <img src="images/about2.jpg" style="border:3px solid #90F; border-radius:10px" />
              </div>
            </div>
          </div>
        </div>
        </div>
    </div>
  </div>
</section>

<section>
  <div class="block">
    <div data-velocity="-.1" style="background:url(images/happy-clients.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color light"></div><!-- PARALLAX BACKGROUND IMAGE -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="heading light">
            <h2>From Happy Employers</h2>
            <span>What our employers thought about the services provided by AceDepot</span>
          </div><!-- Heading -->
          <div class="reviews-sec" id="reviews-carousel">
            <?php
              // $stestimonial = mysql_query("SELECT * FROM testimonials WHERE approved='1' ORDER BY regdate DESC LIMIT 6") or trigger_error("Cannot get information from testimonials table");
              // while($rtestimonial=mysql_fetch_array($stestimonial)) {
              //   $company = $rtestimonial['company'];
              //   $message = $rtestimonial['comment'];
                
              //   $scompany = mysql_query("SELECT * FROM employer WHERE username='$company'") or trigger_error("Cannot select from employer table");
              //   $rcompany = mysql_fetch_array($scompany);
              //   $logo = sha1($company);
              //   $rep_name = $rcompany['representative_name'];
              //   $rep_position = $rcompany['representative_position'];
              //   $biz_name = $rcompany['business_name'];
              //   echo "
              //     <div class='col-lg-6'>
              //       <div class='reviews'>
              //         <img src='images/profile/employer/{$logo}.jpg' alt='' />
              //         <h3>$rep_name <span>$rep_position @{$biz_name}</span></h3>
              //         <p>$message</p>
              //       </div>
              //     </div>
              //   ";
              // }
            ?>
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
        <div class="col-lg-12">
          <div class="stats-sec style2">
            <div class="row">
              <?php
                //Get number of registered candidates
                #$scandidatestat = mysql_query("SELECT id FROM candidate") or trigger_error("Cannot select from candidate table");
                #$ncandidatestat = mysql_num_rows($scandidatestat);
                
                //Get number of registered contractors
                // $scontractorstat = mysql_query("SELECT id FROM contractor") or trigger_error("Cannot select from contractor table");
                // $ncontractorstat = mysql_num_rows($scontractorstat);
                
                // //Get number of registered employers
                // $semployerstat = mysql_query("SELECT id FROM employer") or trigger_error("Cannot select from employer table");
                // $nemployerstat = mysql_num_rows($semployerstat);
                
                // //Get number of candidate jobs
                // $scontractorjobs = mysql_query("SELECT id FROM contractor_jobs") or trigger_error("Cannot select from employer table");
                // $ncontractorjobs = mysql_num_rows($scontractorjobs);
                
                // //Get number of contractor jobs
                // $scandidatejobs = mysql_query("SELECT id FROM candidate_jobs") or trigger_error("Cannot select from employer table");
                // $ncandidatejobs = mysql_num_rows($scandidatejobs);
                
                // $totaljobs = $ncontractorjobs + $ncandidatejobs;
              ?>
              <div class="col-lg-3  col-md-3 col-sm-6 col-xs-6">
                <div class="stats">
                  <span><?php //echo $totaljobs; ?></span>
                  <h5>Jobs Posted</h5>
                </div>
              </div>
              <div class="col-lg-3  col-md-3 col-sm-6 col-xs-6">
                <div class="stats">
                  <span><?php //echo $nemployerstat; ?></span>
                  <h5>Employers</h5>
                </div>
              </div>
              <div class="col-lg-3  col-md-3 col-sm-6 col-xs-6">
                <div class="stats">
                  <span><?php //echo $ncontractorstat; ?></span>
                  <h5>Companies</h5>
                </div>
              </div>
              <div class="col-lg-3  col-md-3 col-sm-6 col-xs-6">
                <div class="stats">
                  <span><?php //echo $ncandidatestat; ?></span>
                  <h5>Candidates</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="block no-padding">
    <div class="container fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="simple-text">
            <h3>Got a question?</h3>
            <span>We're here to help. Check out our <a href="faq.php" title="Frequently Asked Questions page">FAQs</a>, send us an email at <a href="mailto:contact@acedepotstaffing.com">contact@acedepotstaffing.com</a> or call us at <a href="tel:+2349083817668">+234 9083 81 7668</a>.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

