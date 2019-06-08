@extends('layout.app')

@section('content')
<section class="overlape">
  <div class="block no-padding">
    <div data-velocity="-.1" style="background: url(images/slider2.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
    <div class="container fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner-header wform">
            <div class="job-search-sec">
              <div class="job-search">
                <h4>Explore Thousands Of Jobs With Just Simple Search...</h4>
                <form action="current-openings.php?page_id=<?php if(isset($_GET['page_id'])) { echo $_GET['page_id']; } ?>" method="post">
                  <div class="row">
                    <div class="col-lg-7">
                      <div class="job-field">
                        <input type="text" maxlength="100" readonly name="job_filter" value="<?php if(isset($_POST['job_filter'])) { echo $_POST['job_filter']; } ?>" placeholder="Search by job title, job ID, keywords or company name" />
                        <i class="la la-keyboard-o"></i>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="job-field">
                                                  <select data-placeholder="Search by job location" name="job_location" class="chosen-city">
                          <option value="0">Search by job location</option>
                                                      <?php
                                                          // $slga = mysql_query("SELECT * FROM local_governments") or trigger_error("Cannot select from local_governments table");
                                                          // while($rlga=mysql_fetch_array($slga)) {
                                                          //     $did = $rlga['id'];
                                                          //     $dtitle = $rlga['name'];
                                                          //     echo "
                                                          //         <option value='$did'";
                                                          //         if(isset($_POST['job_location']) and $_POST['job_location']==$did) {
                                                          //             echo " selected";
                                                          //         }
                                                          //         echo ">$dtitle</option>
                                                          //     ";
                                                          // }						
                                                      ?>
                                                  </select>
                        <i class="la la-map-marker"></i>
                      </div>
                    </div>
                    <div class="col-lg-1">
                      <button name="submit" type="submit"><i class="la la-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="block remove-top">
    <div class="container">
       <div class="row no-gape">
         <aside class="col-lg-3 column">
           <div class="widget border">
             <h3 class="sb-title open">Job Type</h3>
             <div class="type_widget">
                            <?php
                // $sjob_style = mysql_query("SELECT * FROM job_style") or trigger_error("Cannot select from job_style table");
                // while($rjob_style=mysql_fetch_array($sjob_style)) {
                //   $style_id = $rjob_style['id'];
                //   $style_title = $rjob_style['title'];
                //   $style_name = strtolower($style_title);
                //   $style_name = str_replace(" ", "-", $style_name);
                //   echo "
                //     <p class='flchek'><input type='checkbox' checked name='$style_name' id='$style_name'><label for='$style_name'>$style_title</label></p>
                //   ";
                // }
              ?>
             </div>
           </div>
           <div class="widget border">
             <h3 class="sb-title open">Job Sector</h3>
             <div class="specialism_widget">
              <div class="simple-checkbox scrollbar">
                <?php
                  // $sbusiness_sectors = mysql_query("SELECT * FROM business_sectors") or trigger_error("Cannot select from business_sectors table");
                  // while($rbusiness_sectors=mysql_fetch_array($sbusiness_sectors)) {
                  //   $business_id = $rbusiness_sectors['id'];
                  //   $business_title = $rbusiness_sectors['name'];
                  //   $business_name = strtolower($business_title);
                  //   $business_name = str_replace(" ", "-", $business_name);
                  //   $business_name = str_replace(",", "", $business_name);
                  //   $business_name = str_replace("&", "", $business_name);
                  //   $business_name = str_replace("--", "-", $business_name);
                  //   echo "
                  //     <p><input type='checkbox' checked name='$business_name' id='$business_name'><label for='$business_name'>$business_title</label></p>
                  //   ";
                  // }
                ?>
               </div>
             </div>
           </div>
           <div class="widget border">
             <h3 class="sb-title closed">Experience</h3>
             <div class="specialism_widget">
               <div class="simple-checkbox">
                                <?php
                  // $sexperience = mysql_query("SELECT * FROM experience") or trigger_error("Cannot select from experience table");
                  // while($rexperience=mysql_fetch_array($sexperience)) {
                  //   $experience_id = $rexperience['id'];
                  //   $experience_title = $rexperience['title'];
                  //   $experience_name = strtolower($experience_title);
                  //   $experience_name = str_replace(" ", "-", $experience_name);
                  //   echo "
                  //     <p><input type='checkbox' checked name='$experience_name' id='$experience_name'><label for='$experience_name'>$experience_title</label></p>
                  //   ";
                  // }
                ?>
               </div>
             </div>
           </div>
           <div class="widget border">
             <h3 class="sb-title closed">Qualification</h3>
             <div class="specialism_widget">
               <div class="simple-checkbox">
                <?php
                  // $sdegree = mysql_query("SELECT * FROM degree") or trigger_error("Cannot select from degree table");
                  // while($rdegree=mysql_fetch_array($sdegree)) {
                  //   $degree_id = $rdegree['id'];
                  //   $degree_title = $rdegree['title'];
                  //   $degree_name = strtolower($degree_title);
                  //   $degree_name = str_replace(" ", "-", $degree_name);
                  //   echo "
                  //     <p><input type='checkbox' checked name='$degree_name' id='$degree_name'><label for='$degree_name'>$degree_title</label></p>
                  //   ";
                  // }
                ?>
               </div>
             </div>
           </div>
           <!--<div class="banner_widget">
             <a href="#"><img src="images/resource/banner.png" alt="" /></a>
          </div>-->
         </aside>
         <div class="col-lg-9 column">
           <div class="modrn-joblist np">
             <div class="filterbar">
               <!--<span class="emlthis"><a href="mailto:example.com"><i class="la la-envelope-o"></i> Email me Jobs Like These</a></span>
               <div class="sortby-sec">
                 <span>Sort by</span>
                 <select data-placeholder="Most Recent" class="chosen">
                  <option>Most Recent</option>
                  <option>Most Recent</option>
                  <option>Most Recent</option>
                  <option>Most Recent</option>
                </select>
                <select data-placeholder="20 Per Page" class="chosen">
                  <option>30 Per Page</option>
                  <option>40 Per Page</option>
                  <option>50 Per Page</option>
                  <option>60 Per Page</option>
                </select>
               </div>-->
               <?php
                // echo "<h5>Showing $begin to $end of $njobs Jobs & Vacancies</h5>";
              ?>
             </div>
           </div><!-- Modern Job LIst -->
                       <div class="job-list-modern">
             <?php
                //               while($rjobs=mysql_fetch_array($sjobs_list)) {
                //                   $id = $rjobs['id'];
                //                   $cid = sha1($id);
                //                   $job_id = $rjobs['id2'];
                //                   $title = $rjobs['title'];
                //                   $min_qualification = $rjobs['min_qualification'];
                //                   $smin_qualification = mysql_query("SELECT * FROM degree WHERE id='$min_qualification'");
                //                   $rmin_qualification = mysql_fetch_array($smin_qualification);
                //                   $cmin_qualification = $rmin_qualification['title'];
                //                   $job_sector = $rjobs['job_sector'];
                //                   $sjob_sector = mysql_query("SELECT * FROM business_sectors WHERE id='$job_sector'");
                //                   $rjob_sector = mysql_fetch_array($sjob_sector);
                //                   $cjob_sector = $rjob_sector['name'];
                //                   $location = $rjobs['location'];
                //                   $mlga = $rjobs['lga'];
                //                   $slga = mysql_query("SELECT * FROM local_governments WHERE id='$mlga'");
                //                   $rlga = mysql_fetch_array($slga);
                //                   $cclga = $rlga['name'];
                // $ccstate = $rlga['state_id'];
                //                   $sstate = mysql_query("SELECT * FROM states WHERE id='$ccstate'");
                //                   $rstate = mysql_fetch_array($sstate);
                //                   $cccstate = $rstate['name'];
                //                   $mexperience = $rjobs['experience'];
                //                   $sexperience = mysql_query("SELECT * FROM experience WHERE id='$mexperience'");
                //                   $rexperience = mysql_fetch_array($sexperience);
                //                   $cexperience = $rexperience['title'];
                // $cexperience = str_replace("&mdash;", "-", $cexperience);
                //                   $company = $rjobs['company'];
                //                   $ccompany = sha1($company);
                //                   $ccompany = "$ccompany".".jpg";
                                  
                //                   echo "
                //                       <div class='job-listings-sec no-border'>
                //                           <a href='current-openings-details.php?job_id=$cid' title=''>
                //                               <div class='job-listing wtabs'>
                //                                   <div class='job-title-sec'>
                //                                       <div class='c-logo'> <img src='images/profile/employer/$ccompany' /> </div>
                //                                       <h3>$title</h3>
                //                                       <span>Type: $cjob_sector | Qual: $cmin_qualification</span>
                //                                       <div class='job-lctn'><i class='la la-map-marker'></i>$location, $cclga, $cccstate State</div>
                //                                   </div>
                //                                   <div class='job-style-bx'>
                //                                       <span class='job-is ft'>#{$job_id}</span>
                //                                       <i>$cexperience experience</i>
                //                                   </div>
                //                               </div>
                //                           </a>
                //                       </div>
                //                   ";
                //           }
                           ?>
            <div class="pagination">
              <ul>
                                  <?php
                  // echo "
                  //   <li class='prev'><a href='current-openings.php'>First</a></li>
                    
                  //   <li class='prev'><a href='current-openings.php";
                  //   if($curpage!=1) {
                  //     echo "?page_id=$previouspage";
                  //   }
                  //   echo "'><i class='la la-long-arrow-left'></i> Previous</a></li>
                  //   <li class='active'><a href='current-openings.php?page_id=$curpage'>$curpage</a></li>
                  //   <li class='next'><a href='current-openings.php";
                  //   if($curpage==$endpage) {
                  //     echo "?page_id=$curpage";
                  //   }
                  //   else {
                  //     echo "?page_id=$nextpage";
                  //   }
                  //   echo "'>Next <i class='la la-long-arrow-right'></i></a></li>
                  //   <li class='next'><a href='current-openings.php?page_id=$endpage'>Last</a></li>
                  // ";
                ?>
              </ul>
            </div><!-- Pagination -->
           </div>
         </div>
       </div>
    </div>
  </div>
</section>
@endsection

