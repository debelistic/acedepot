<div class="responsive-header">
  <div class="responsive-menubar">
    <div class="res-logo"><a href=" ./"><img src="images/newlogo.png" alt="" /></a></div>
    <div class="menu-resaction">
      <div class="res-openmenu">
        <img src="images/icon.png" alt="" />
      </div>
      <div class="res-closemenu">
        <img src="images/icon2.png" alt="" />
      </div>
    </div>
  </div>
  <div class="responsive-opensec">
    <?php
      if(!isset($_SESSION['login_candidate_proceed']) and !isset($_SESSION['login_contractor_proceed']) and !isset($_SESSION['login_employer_proceed'])) {
        echo "
          <div class='btn-extars'>
            <a href='faq.php' title='' class='post-job-btn'><i class='la la-plus'></i>FAQ</a>
            <ul class='account-btns'>
              <li class=''><a href='login' title=''><i class='la la-key'></i> Login</a></li>
            </ul>
          </div>
        ";
      }
    ?>
          <div class="responsivemenu">
      <ul>
                  <li class="">
                      <a href=" ./">Home</a>
                  </li>
                  <li class="">
                      <a href="current-openings"> Current Openings</a>
                  </li>
                  <li class="">
                      <a href="available-contracts"> Available Contracts</a>
                  </li>
                  <li class="menu-item-has-children">
                      <a href="#">Employers</a>
                      <ul>
                          <li><a href="employer-contractor-search"> Search/Request a Contractor</a></li>
                          <li><a href="employer-candidate-search"> Candidate Search/Post a Job</a></li>
                      </ul>
                  </li>
                  <li class="">
                      <a href="services"> Services</a>
                  </li>
                  <li class="menu-item-has-children">
                      <a href="about"> About Us</a>
                      <ul>
                          <li><a href="contact">Contact</a></li>
                          <li><a href="faq">FAQ</a></li>
                      </ul>
                  </li>
                  <?php
          if(isset($_SESSION['login_candidate_proceed'])) {
            echo "
              <li class='menu-item-has-children'>
                <a href='#' title=''>My Profile</a>
                <ul>
                  <li><a href='candidate-dashboard' title=''> View Profile</a></li>
                  <li><a href='candidate-portfolio' title=''> Portfolio</a></li>
                  <li><a href='candidate-jobs' title=''> Applied Jobs</a></li>
                  <li><a href='candidate-endorsements' title=''> Endorsements</a></li>
                  <li><a href='candidate-password' title=''> Change Password</a></li>
                  <li><a href='candidate-logout' title=''> Logout</a></li>
                </ul>
              </li>
            ";
          }
          elseif(isset($_SESSION['login_contractor_proceed'])) {
            echo "
              <li class='menu-item-has-children'>
                <a href='#'>Company Profile</a>
                <ul>
                  <li class='active'>
                    <a href='contractor-business-page'>Business Page</a>
                  </li>
                  <li>
                    <a href='contractor-dashboard'>Company Profile</a>
                  </li>
                  <li>
                    <a href='contractor-subscriptions'>Subcriptions</a>
                  </li>
                  <li>
                    <a href='contractor-password'>Change password</a>
                  </li>
                  <li>
                    <a href='contractor-picture'>Update logo</a>
                  </li>
                  <li>
                    <a href='contractor-logout'>Logout</a>
                  </li>
                </ul>
              </li>
            ";
          }
          elseif(isset($_SESSION['login_employer_proceed'])) {
            echo "
              <li class='menu-item-has-children'>
                <a href='#' title=''>My Profile</a>
                <ul>
                  <li><a href='employer-dashboard' title=''> View Profile</a></li>
                  <li><a href='employer-portfolio' title=''> Portfolio</a></li>
                  <li><a href='employer-jobs' title=''> Applied Jobs</a></li>
                  <li><a href='employer-password' title=''> Change Password</a></li>
                  <li><a href='employer-logout' title=''> Logout</a></li>
                </ul>
              </li>
            ";
          }
        ?>
              </ul>
    </div>
  </div>
</div>

<header class="stick-top forsticky">
  <div class="menu-sec">
    <div class="container">
      <div class="logo">
        <a href=" ./"><img class="hidesticky" src="images/newlogo.png" alt="acedepot" /><img class="showsticky" src="images/newlogobalck.png" alt="" /></a>
      </div><!-- Logo -->
      <?php
                if(isset($_SESSION['login_candidate_proceed'])) {
          $profile_pix = sha1($userdata);
          echo "
            <div class='my-profiles-sec'>
              <span><img src='images/profile/candidate/{$profile_pix}.jpg' style='width:50px;' alt='' /> Dashboard <i class='la la-bars'></i></span>
            </div>
          ";
        }
        elseif(isset($_SESSION['login_contractor_proceed'])) {
          $profile_pix = sha1($userdata);
          echo "
            <div class='my-profiles-sec'>
              <span><img src='images/profile/contractor/{$profile_pix}.jpg' style='width:50px;' alt='' /> Dashboard <i class='la la-bars'></i></span>
            </div>
          ";
        }
        elseif(isset($_SESSION['login_employer_proceed'])) {
          $profile_pix = sha1($userdata);
          echo "
            <div class='my-profiles-sec'>
              <span><img src='images/profile/employer/{$profile_pix}.jpg' style='width:50px;' alt='' /> Dashboard <i class='la la-bars'></i></span>
            </div>
          ";
        }
        else {
          echo "
            <div class='btn-extars'>
              <a href='faq' title='' class='post-job-btn'><i class='la la-plus'></i>FAQ</a>
              <ul class='account-btns'>
                <li class=''><a href='login' title=''><i class='la la-key'></i> Login</a></li>
              </ul>
            </div>
          ";
        }
      ?>
              <!-- Btn Extras -->
      <nav>
        <ul>
                  <li class="">
                      <a href=" ./">Home</a>
                  </li>
                  <li class="">
                      <a href="current-openings"> Current Openings</a>
                  </li>
                  <li class="">
                      <a href="available-contracts"> Available Contracts</a>
                  </li>
                  <li class="menu-item-has-children">
                      <a href="#">Employers</a>
                      <ul>
                          <li><a href="employer-contractor-search"> Search/Request a Contractor</a></li>
                          <li><a href="employer-candidate-search"> Candidate Search/Post a Job</a></li>
                      </ul>
                  </li>
                  <li class="">
                      <a href="services"> Services</a>
                  </li>
                  <li class="menu-item-has-children">
                      <a href="about"> About Us</a>
                      <ul>
                          <li><a href="contact">Contact</a></li>
                          <li><a href="faq">FAQ</a></li>
                      </ul>
                  </li>
              </ul>
      </nav><!-- Menus -->
    </div>
  </div>
</header>