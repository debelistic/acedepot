<div class="profile-sidebar">
	<span class="close-profile"><i class="la la-close"></i></span>
	<div class="can-detail-s">
		<?php
			if(isset($_SESSION['login_candidate_proceed'])) {
				$profile_pix = sha1($userdata);
				echo "
					<div class='cst'><img src='images/profile/candidate/{$profile_pix}.jpg' alt='' /></div>
                    <h3>$firstname $lastname</h3>
                    $myposition
                    <p>$username</p>
                    <p style='color:#63C'><i class='la la-map-marker'></i>$clga, $cstate</p>
                    <p style='color:#F00'>Member since $regdate_month, $regdate_year</p>
				";
			}
			elseif(isset($_SESSION['login_contractor_proceed'])) {
				$profile_pix = sha1($userdata);
				echo "
					<div class='cst'><img src='images/profile/contractor/{$profile_pix}.jpg' alt='' /></div>
                    <h3>$firstname $lastname</h3>
                    $myposition
                    <p>$username</p>
                    <p style='color:#63C'><i class='la la-map-marker'></i>$clga, $cstate</p>
                    <p style='color:#F00'>Member since $regdate_month, $regdate_year</p>
				";
			}
			elseif(isset($_SESSION['login_employer_proceed'])) {
				$profile_pix = sha1($userdata);
				echo "
					<div class='cst'><img src='images/profile/employer/{$profile_pix}.jpg' alt='' /></div>
                    <h3>$firstname $lastname</h3>
                    $myposition
                    <p>$username</p>
                    <p style='color:#63C'><i class='la la-map-marker'></i>$clga, $cstate</p>
                    <p style='color:#F00'>Member since $regdate_month, $regdate_year</p>
				";
			}
		?>
	</div>
	<div class="tree_widget-sec">
		<ul>
        	<?php
				if(isset($_SESSION['login_candidate_proceed'])) {
					echo "
						<li>
							<a href='candidate-dashboard.php' title=''><i class='la la-user'></i>My Profile</a>
						</li>
						<li>
							<a href='candidate-portfolio.php' title=''><i class='la la-file-text'></i>My Portfolio</a>
						</li>
						<li>
							<a href='current-openings.php' title=''><i class='la la-briefcase'></i>Job Openings</a>
						</li>
						<li>
							<a href='candidate-jobs.php' title=''><i class='la la-briefcase'></i>My Applications</a>
						</li>
						<li>
							<a href='candidate-endorsements.php' title=''><i class='la la-paper-plane'></i>Endorsements</a>
						</li>
						<li>
							<a href='candidate-password.php' title=''><i class='la la-lock'></i>Change password</a>
						</li>
						<li>
							<a href='candidate-logout.php' title=''><i class='la la-unlink'></i>Logout</a>
						</li>
					";
				}
				elseif(isset($_SESSION['login_contractor_proceed'])) {
					echo "
						<li>
							<a href='contractor-business-page.php'><i class='la la-user'></i>Business Page</a>
						</li>
						<li>
							<a href='contractor-dashboard.php'><i class='la la-file-text'></i>Company Profile</a>
						</li>
						<li>
							<a href='contractor-subscriptions.php'><i class='la la-briefcase'></i>Subcriptions</a>
						</li>
						<li>
							<a href='contractor-password.php'><i class='la la-lock'></i>Change password</a>
						</li>
						<li>
							<a href='contractor-picture.php'><i class='la la-image'></i>Update logo</a>
						</li>
						<li>
							<a href='contractor-logout.php'><i class='la la-unlink'></i>Logout</a>
						</li>
					";
				}
				elseif(isset($_SESSION['login_employer_proceed'])) {
					echo "
						<li>
							<a href='employer-dashboard.php' title=''><i class='la la-user'></i>Corporate Profile</a>
						</li>
						<li>
							<a href='employer-portfolio.php' title=''><i class='la la-file-text'></i>Corporate Portfolio</a>
						</li>
						<li>
							<a href='employer-postings.php' title=''><i class='la la-briefcase'></i>Job Postings</a>
						</li>
						<li>
							<a href='employer-subscriptions.php' title=''><i class='la la-briefcase'></i>My Subscriptions</a>
						</li>
						<li>
							<a href='employer-password.php' title=''><i class='la la-lock'></i>Change password</a>
						</li>
						<li>
							<a href='employer-logout.php' title=''><i class='la la-unlink'></i>Logout</a>
						</li>
					";
				}
			?>
        </ul>
	</div>
</div>