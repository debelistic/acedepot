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
                <h4>Explore Contract Jobs With Just Simple Search...</h4>
                <form action="available-contracts.php?page_id=<?php if(isset($_GET['page_id'])) { echo $_GET['page_id']; } ?>" method="post">
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
  <div class="block">
    <div class="container">
       <div class="row">
         <div class="col-lg-10" style="margin:auto">
           <div class="filterbar">
             <?php
              //echo "<h5>Showing $begin to $end of $njobs Contracts & Vacancies</h5>";
            ?>
             <!--<div class="sortby-sec">
               <span>Search by</span>
               <select data-placeholder="Business sector" name="bysector" class="chosen">
                <option value="0">Business sector</option>
                <?php
                  // $ssectors = mysql_query("SELECT * FROM business_sectors") or trigger_error("Cannot get information from business_sectors tabls");
                  // while($rsectors=mysql_fetch_array($ssectors)) {
                  //   $id = $rsectors['id'];
                  //   $name = $rsectors['name'];
                  //   echo "
                  //     <option value='$id'>$name</option>
                  //   ";
                  //}
                ?>
              </select>
              <select data-placeholder="Job type" name="bystyle" class="chosen">
                <option value="0">Job type</option>
                <?php
                  // $sjob_style = mysql_query("SELECT * FROM job_style") or trigger_error("Cannot select from job_style table");
                  // while($rjob_style=mysql_fetch_array($sjob_style)) {
                  //   $style_id = $rjob_style['id'];
                  //   $style_title = $rjob_style['title'];
                  //   echo "
                  //     <option value='$style_id'>$style_title</option>
                  //   ";
                  //}
                ?>
              </select>
             </div>-->
           </div>
           <div class="job-list-modern">
             <?php
                //               while($rjobs=mysql_fetch_array($sjobs_list)) {
                //                   $id = $rjobs['id'];
                //                   $cid = sha1($id);
                //                   $job_id = $rjobs['id2'];
                //                   $title = $rjobs['title'];
                // $regdate = $rjobs['regdate'];
                // $regdate = date("M j, Y", strtotime($regdate));
                // $descriptionx = $rjobs['description'];
                // $description = substr($descriptionx, 0, 170);
                // $description = str_replace("<p>", "", $description);
                // $description = str_replace("</p>", "", $description);
                // $description = str_replace("<ul>", "", $description);
                // $description = str_replace("</ul>", "", $description);
                // $description = str_replace("<li>", "", $description);
                // $description = str_replace("</li>", "", $description);
                // if(strlen($descriptionx)>170) {
                //   $description = trim($description);
                //   $description = "$description"."...";
                // }
                // $job_sector = $rjobs['job_sector'];
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
                //                   $company = $rjobs['company'];
                //                   $ccompany = sha1($company);
                //                   $ccompany = "$ccompany".".jpg";
                //                   //Get employer details
                // $scompany = mysql_query("SELECT * FROM employer WHERE username='$company'") or trigger_error("Cannot select from employer table");
                // $rcompany = mysql_fetch_array($scompany);
                // $cname = $rcompany['business_name'];
                
                //                   echo "
                //                       <div class='job-listings-sec no-border'>
                //                           <a href='available-contracts-details.php?contract_id=$cid' title=''>
                //                               <div class='job-listing wtabs'>
                //                                   <div class='job-title-sec'>
                //                                       <div class='c-logo'> <img src='images/profile/employer/$ccompany' /> </div>
                //                                       <div class='job-lctn' style='padding-top:0'>$title</div>
                //           <br>
                //           <div class='job-lctn' style='padding-top:0; color:#09F'><i class='la la-briefcase'></i>$cname &nbsp;&nbsp;&nbsp;</div>
                //           <div class='job-lctn' style='padding-top:0; color:#00F'><i class='la la-map-marker'></i>$cccstate State &nbsp;&nbsp;&nbsp;</div>
                //           <div style='font:12px Verdana; color:#666; font-weight:100; display:block; padding-top:0;'>$description</div>
                //                                   </div>
                //                                   <div class='job-style-bx'>
                //                                       <span class='job-is ft'>#{$job_id}</span>
                //                                       <i>Posted: $regdate</i>
                //                                   </div>
                //                               </div>
                //                           </a>
                //                       </div>
                //                   ";
                //               }
                           ?>
            <!-- Pagination -->
           </div>
          <div class="pagination">
            <ul>
              <?php
                                  // echo "
                                  //     <li class='prev'><a href='available-contracts.php'>First</a></li>
                                      
                                  //     <li class='prev'><a href='available-contracts.php";
                                  //     if($curpage!=1) {
                                  //         echo "?page_id=$previouspage";
                                  //     }
                                  //     echo "'><i class='la la-long-arrow-left'></i> Previous</a></li>
                                  //     <li class='active'><a href='available-contracts.php?page_id=$curpage'>$curpage</a></li>
                                  //     <li class='next'><a href='available-contracts.php";
                                  //     if($curpage==$endpage) {
                                  //         echo "?page_id=$curpage";
                                  //     }
                                  //     else {
                                  //         echo "?page_id=$nextpage";
                                  //     }
                                  //     echo "'>Next <i class='la la-long-arrow-right'></i></a></li>
                                  //     <li class='next'><a href='available-contracts.php?page_id=$endpage'>Last</a></li>
                                  // ";
                              ?>
                          </ul>
          </div><!-- Pagination -->
         </div>
       </div>
    </div>
  </div>
</section>
@endsection

