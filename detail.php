<?php
$index=$_GET['index'];

# if statement here to choose which member to display based on the number given in the GET variable?

$members=[
	[ # member 1 -- justin
		'name'=>'Justin Walter',
		'role'=>'Intern Programmer',
		'profile_picture'=>'./assets/images/profile_justinwalter.jpg',
		'email'=>'walterj5@mymail.nku.edu',
		'linkedin_link'=>'https://www.linkedin.com/in/justin-walter-b0a804244/',
		'github_link'=>'https://github.com/jiffingwalter/',
		'website_link'=>'https://jiffingwalter.github.io/inf286-jwalterscribbles/',
		'summary'=>'My name is Justin Walter and I\'m an NKU senior going for a major in CIT and a minor in Media Informatics. I like to play video games, hike, work out, climb, draw. I\'m currently interning at Great American insurance for my first internship as a programmer.',
		'work_experience'=>[
			'job_title'=>'Intern Developer',
			'job_company'=>'Great American Insurance',
			'job_description'=>'Working on "Techinical Knock-Out" team to solve both minor an major bugs in insurance program',
			'job_workdate'=>'2023 - Present',
			'job_achievements'=>['#1', 'Best cat award', 'Only confused some of the time'],
			'job_technologies'=>[
				'Java', 'HTML', 'CSS', 'JavaScript', 'TypeScript', 'Angular', 'Git'	
			]
		],
		'education'=>[
			['edu_degree'=>'Associate of Arts',
			'edu_college'=>'Gateway Community & Technical College',
			'edu_date'=>'2017-2020'],
			['edu_degree'=>'Computer Information Technology Major',
			'edu_college'=>'Northern Kentucky University',
			'edu_date'=>'2020-2023'],
			['edu_degree'=>'Media Informatics Minor',
			'edu_college'=>'Northern Kentucky University',
			'edu_date'=>'2020-2023']
		],
		'skills'=>[
			'skills_major'=>[
				'Python'=>75,
				'Java'=>60,
				'Angular'=>60,
				'HTML/CSS'=>70,
				'UI/UX Design'=>70
			],
			'skills_minor'=>[
				'JavaScript', 'TypeScript', 'Visual Design', '3D Modeling & Animation', 'Team player', 'Git'
			],
		],
		'awards'=>[
			'The Best Award'=>'It\'s the best one.',
			'Most Awards Award'=>'The most awards awarded, ever.'
		],
		'languages'=>['English',''],
		'interests'=>[
			'Video Games and development', 'Art (sketching, 3D, video)', 'Outdoors'
		],
		'projects'=>[
			[
				'project_title'=>'CUBE UI/UX Design',
				'project_description'=>'UI bug fixes and additions to Great American\'s insurance handling software',
				'project_img'=>'assets/images/project_cube.png',
				'project_url'=>'https://thisisconfidential.website'
			]
		]
	],
	[ # member 2 -- Bryce
		'name'=>'Bryce Bien',
		'role'=>'Intern Programmer',
		'profile_picture'=>'./assets/images/profile_brycebien.jpg',
		'email'=>'brycebien@gmail.com',
		'linkedin_link'=>'https://www.linkedin.com/in/brycebien/',
		'github_link'=>'https://github.com/brycebien',
		'website_link'=>'https://brycebien.github.io/MyWebsite/',
		'phone_num'=>'(513)283-2332',
		'summary'=>'I am currently a junior studying Applied Software Engineering and Business at Northern Kentucky University. Thus far I have completed Object Oriented Programming I and II, Full-Stack Application Development, and Database Programming. As of the Fall 2023 semester I am enrolled in Cross-Platform Development, Human-Computer Interaction, Server-Side Programming, and Software Design.',
		'work_experience'=>[
			'job_title'=>['Shift Lead', 'Lead Line Cook', 'Ski Technition'],
			'job_company'=>['United Dairy Farmers', 'Logan Supermart', 'Perfect North Slopes'],
			'job_description'=>['Assist customers in ordering ice cream and checking out. Work in a coordinated team to complete orders in a timely manner.',
			'Assisted customers with ordering and checking out. Coordinated a team to complete orders on time by directing them on what to do.',
			'Assisted customers with navigating the rental shop by directing them where to go and assisting
			with putting on boots as well as assigning skis and snowboards to patrons. Tuned, mounted, and waxed skis and snowboards.'],
			'job_workdate'=>['2022 - Present', '2019 - 2022', '2016 - 2020'],
			'job_achievements'=>['Gained valuable customer service skills as well as more expeirence working as a team to complete tasks.','Gained valuable team leadership skills', 'Gained customer service, teamwork, and team leadership skills'],
			'job_technologies'=>[['Customer Service Skills','Team Management Skills'],
			['Blacktop Grill','Fryer'],
			['Edge Grinding Machine','Belt Sander','Drills','Wax & Iron']]
		],
		'education'=>[
			['edu_degree'=>'BS in Applied Software Engenerring',
			'edu_college'=>'Northern Kentucky University',
			'edu_date'=>'2021 - 2025'],
		],
		'skills'=>[
			'skills_major'=>[
				'Java',
				'Dart/Flutter',
				'JavaScript',
				'Node.js',
				'HTML/CSS',
			],
			'skills_progress'=>['90','0','98','98','98'],
			'skills_minor'=>[
				'Git',
				'Wireframing',
				'Python',
				'MySQL',
				'Team Leadership',
				'Teamwork',
				'Customer Service'
			],
		],
		'awards'=>[
			'title'=>['Outstanding Academic Achievement'],
			'desc'=>['Dean\'s List Spring 2023 Semester at Northern Kentucky University']
		],
		'languages'=>[
			'lang'=>['English'],
			'use'=>['Native']
		],
		'interests'=>[
			'Climbing',
			'Snowboarding',
			'Camping',
			'Hiking'
		],
		'projects'=>[
			
				'project_title'=>['Midwest Music'],
				'project_description'=>['Final Assignment for Full-Stack Application Development. Created a concert review site with a team of two others.'],
				'project_img'=>['assets\images\project_midwestmusic.jpg'],
				'project_url'=>['https://github.com/AndrewOneal/MidwestMusic']
			
		]
	],
];

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
							    <div class="title mb-3"><?php echo $members[$index]['role'];?></div>
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
								for($i=0;$i<count($members[$index]['work_experience']['job_title']);$i++){

									echo '<article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">'.$members[$index]['work_experience']['job_title'][$i].'</h3>
										        <div class="resume-company-name ms-auto">'.$members[$index]['work_experience']['job_company'][$i].'</div>
										    </div><!--//row-->
										    <div class="resume-position-time">'.$members[$index]['work_experience']['job_workdate'][$i].'</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>'.$members[$index]['work_experience']['job_description'][$i].'</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
										    <p>'.$members[$index]['work_experience']['job_achievements'][$i].'</p>
										    
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
											
											<ul class="list-inline">';
											for($j=0;$j<count($members[$index]['work_experience']['job_technologies'][$i]);$j++){
												echo '<li class="list-inline-item"><span class="badge bg-secondary badge-pill">'.$members[$index]['work_experience']['job_technologies'][$i][$j].'</span></li>';
											}
										echo' </ul>
									    </div><!--//resume-timeline-item-desc-->
								    </article><!--//resume-timeline-item-->';
								}
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
						for($i=0;$i<count($members[$index]['projects']['project_title']);$i++){
							echo '
							<div class="col-md-4">
								<div class="card">
									<img src="'.$members[$index]['projects']['project_img'][$i].'" alt="Project '.$i.'" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title">'.$members[$index]['projects']['project_title'][$i].'</h5>
										<p class="card-text">'.$members[$index]['projects']['project_description'][$i].'</p>
										<a href="'.$members[$index]['projects']['project_url'][$i].'" href="btn btn-outline-primary" >Go to link</a>
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

