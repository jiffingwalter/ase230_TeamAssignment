<?php
$index=$_GET['index'];
require('assets/php/main.php');
$members=$members_list;

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?php echo $members[$index]['name'].'\'s Resume';?></title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
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
		<?php /* Only the following line changed from the file in the previous assignment */ ?>
		<div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" height="220px" src="<?php echo $members[$index]['profile_picture'] ?>" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo $members[$index]['name'];?></h1>
							    <div class="title mb-1"><?php echo $members[$index]['role'];?></div>
								<div class="title mb-1">Age: <?php echo get_age($members[$index]['dob'])?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="<?php echo 'mailto: '.$members[$index]['email'] ?>"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo $members[$index]['email']; ?></a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo $members[$index]['phone_num'];?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="<?php echo $members[$index]['linkedin_link'];?>"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?php echo $members[$index]['linkedin_link']; ?></a></li>
					                <li class="mb-3"><a class="text-link" href="<?php echo $members[$index]['github_link']; ?>"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?php echo $members[$index]['github_link']; ?></a></li>
					                <li><a class="text-link" href="<?php echo $members[$index]['website_link']; ?>"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?php echo $members[$index]['website_link']; ?></a></li>
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
					    <p class="mb-0">
							<?php 
								echo $members[$index]['summary'];
							?>	
						</p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								<?php
									generateWorkExp($members[$index]['work_experience']);
								?>
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">

										<?php
										for($i=0;$i<count($members[$index]['skills']['skills_major']);$i++){
											echo '<li class="mb-2">
								            <div class="resume-skill-name">'.$members[$index]['skills']['skills_major'][$i].'</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: '.$members[$index]['skills']['skills_progress'][$i].'%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        	</li>';
										}
										?>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
										<?php
											for($i=0;$i<count($members[$index]['skills']['skills_minor']);$i++){
												echo '<li class="list-inline-item"><span class="badge badge-light">'.$members[$index]['skills']['skills_minor'][$i].'</span></li>';
											}
										?>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
									<?php for($i=0;$i<count($members[$index]['education']);$i++){
										echo '<li class="mb-2">
											<div class="resume-degree font-weight-bold">'.$members[$index]['education'][$i]['edu_degree'].'</div>
											<div class="resume-degree-org">'.$members[$index]['education'][$i]['edu_college'].'</div>
											<div class="resume-degree-time">'.$members[$index]['education'][$i]['edu_date'].'</div>
										</li>';
									} ?>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
									<?php for($i=0;$i<count($members[$index]['awards']['title']);$i++){
										echo '<li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
											<div class="resume-award-name">'.$members[$index]['awards']['title'][$i].'</div>
											<div class="resume-award-desc">'.$members[$index]['awards']['desc'][$i].'</div>
								    	</li>';
									} ?>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
									<?php 
									for($i=0;$i<count($members[$index]['languages']['lang']);$i++){
										echo '<li class="mb-2"><span class="resume-lang-name font-weight-bold">'.$members[$index]['languages']['lang'][$i].'</span> <small class="text-muted font-weight-normal">('.$members[$index]['languages']['use'][$i].')</small></li>';
									}
									?>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								<?php for($i=0;$i<count($members[$index]['interests']);$i++){
									echo '<li class="mb-1">'.$members[$index]['interests'][$i].'</li>';
								} ?>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<?php 
						for($i=0;$i<count($members[$index]['projects']);$i++){
							echo '
							<div class="col-md-4">
								<div class="card">
									<img src="'.$members[$index]['projects'][$i]['project_img'].'" alt="Project '.$i.'" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title">'.$members[$index]['projects'][$i]['project_title'].'</h5>
										<p class="card-text">'.$members[$index]['projects'][$i]['project_description'].'</p>
										<a href="'.$members[$index]['projects'][$i]['project_url'].'" href="btn btn-outline-primary" >Go to link</a>
									</div>
								</div>
							</div>';
						}
						?>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Your names</small>
    </footer>

    

</body>
</html> 

