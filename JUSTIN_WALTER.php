<!DOCTYPE html>
<html lang="en"> 
<?php
	#basic info 
	$name='Justin Walter';
	$desired_job='Software Programmer';
	$email='walterj5@mymail.nku.edu';
	$phone='859-444-4444';
	$profile_picture='profile_justinwalter.jpg';

	#other info
	$linkedin_link='https://www.linkedin.com/in/justin-walter-b0a804244/';
	$github_link='https://github.com/jiffingwalter';
	$website_link='https://www.justinwalteriscool.yeah';

	#summary
	$summary="My name is Justin Walter and I'm an NKU senior going for a major in CIT and a minor in Media Informatics. I like to play video games, hike, work out, climb, draw, video game development, and long walks on the beach. I'm currently interning at Great American insurance for my first internship as a programmer.";

	#job 1
	$job_title='Intern Developer';
	$job_company='Great American Insurance';
	$job_description='Working on "Techinical Knock-Out" team to solve both minor an major bugs in insurance program';
	$job_workdate='2023 - Present';
	$job_achievements='
		<p>Many amazing achievements have been made in my short time at Great American, such as...</p>
		<ul>
			<li>Voted #1 best person in the world award</li>
			<li>Well known around the office for having the best cat</li>
			<li>Only extremely confused *some* of the time</li>
		</ul>
		';
	$job_technologies='
		<li class="list-inline-item"><span class="badge bg-secondary badge-pill">Java</span></li>
		<li class="list-inline-item"><span class="badge bg-secondary badge-pill">HTML</span></li>
		<li class="list-inline-item"><span class="badge bg-secondary badge-pill">CSS</span></li>
		<li class="list-inline-item"><span class="badge bg-secondary badge-pill">JavaScript</span></li>
		<li class="list-inline-item"><span class="badge bg-secondary badge-pill">TypeScript</span></li>
		<li class="list-inline-item"><span class="badge bg-secondary badge-pill">Angular</span></li>
		<li class="list-inline-item"><span class="badge bg-secondary badge-pill">Git</span></li>
		';
	
	#skills and tools
	$skill01='Python';
	$skill02='Java';
	$skill03='Angular';
	$skill04='HTML/CSS';
	$skill05='UI/UX Design';
	#skills minor
	$skill_other01='JavaScript';
	$skill_other02='TypeScript';
	$skill_other03='Visual Design';
	$skill_other04='3D Modeling';
	$skill_other05='Team player';
	$skill_other06='Git';

	#education
	$edu_degree1='Associate of Arts';
	$edu_college1='Gateway Community & Technical College';
	$edu_date1='2017-2020';
	$edu_degree2='Computer Information Technology Major';
	$edu_college2='Northern Kentucky University';
	$edu_date2='2020-2023';
	$edu_degree3='Media Informatics Minor';
	$edu_college3='Northern Kentucky University';
	$edu_date3='2020-2023';

	#awards
	$award1_name='The Best Award';
	$award1_desc='It\'s the best one.';
	$award2_name='Most Awards Award';
	$award2_desc='The most awards awarded, ever.';

	#languages
	$lang_native='English';

	#interests
	$interests='
		<li class="mb-1">Video Games and development</li>
		<li class="mb-1">Art, sketching, 3D modeling</li>
		<li class="mb-1">Outdoors</li>
		';
	
	#projects
	$project1_title='CUBE UI/UX Design';
	$project1_description='UI bug fixes and additions to Great American\'s insurance handling software';
	$project1_img='assets/images/project_cube.png';
	$project1_url='https://thisisconfidential.website';
?>
<head>
    <title><?php echo $name; ?>'s Resume</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $name ?>'s resume">
    <meta name="author" content="<?php echo $name ?>">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
	<div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src=<?= "assets/images/" + $profile_picture ?> alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo $name; ?></h1>
							    <div class="title mb-3"><?php echo $desired_job; ?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo $email; ?></a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo $phone; ?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="<?php echo $linkedin_link; ?>"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?php echo $linkedin_link; ?></a></li>
					                <li class="mb-3"><a class="text-link" href="<?php echo $github_link; ?>"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?php echo $github_link; ?></a></li>
					                <li><a class="text-link" href="<?php echo $website_link; ?>"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?php echo $website_link; ?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?php echo $summary; ?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo $job_title ?></h3>
										        <div class="resume-company-name ms-auto"><?php echo $job_company ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo $job_workdate ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?php echo $job_description ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
										    <?php echo $job_achievements ?>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <?php echo $job_technologies ?>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->
								    </article><!--//resume-timeline-item-->
							    </div><!--//resume-timeline-->
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo $skill01 ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo $skill02 ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 94%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo $skill03 ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo $skill04 ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo $skill05 ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo $skill_other01 ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo $skill_other02 ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo $skill_other03 ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo $skill_other04 ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo $skill_other05 ?></span></li>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold"><?php echo $edu_degree1 ?></div>
								        <div class="resume-degree-org"><?php echo $edu_college1 ?></div>
								        <div class="resume-degree-time"><?php echo $edu_date1 ?></div>
								    </li>
								    <li>
								        <div class="resume-degree font-weight-bold"><?php echo $edu_degree2 ?></div>
								        <div class="resume-degree-org"><?php echo $edu_college2 ?></div>
								        <div class="resume-degree-time"><?php echo $edu_date2 ?></div>
								    </li>
									<li>
								        <div class="resume-degree font-weight-bold"><?php echo $edu_degree3 ?></div>
								        <div class="resume-degree-org"><?php echo $edu_college3 ?></div>
								        <div class="resume-degree-time"><?php echo $edu_date3 ?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?php echo $award1_name ?></div>
								        <div class="resume-award-desc"><?php echo $award1_desc ?></div>
								    </li>
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?php echo $award2_name ?></div>
								        <div class="resume-award-desc"><?php echo $award2_desc ?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold"><?php echo $lang_native ?></span> <small class="text-muted font-weight-normal">(Native)</small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <?php echo $interests ?>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="<?php echo $project1_img ?>" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo $project1_title ?></h5>
									<p class="card-text"><?php echo $project1_description ?></p>
									<a class="btn btn-outline-primary" href="<?php echo $project1_url ?>">Go to link</a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?php echo $name ?></small>
    </footer>

    

</body>
</html> 

