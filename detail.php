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
		'summary'=>'I am currently a junior studying Applied Software Engineering and Business at Northern Kentucky University. Thus far I have completed Object Oriented Programming I and II, Full-Stack Application Development, and Database Programming. As of the Fall 2023 semester I am enrolled in Cross-Platform Development, Human-Computer Interaction, Server-Side Programming, and Software Design.',
		'work_experience'=>[
			'job_title'=>['Shift Lead', 'TEST JOB'],
			'job_company'=>['United Dairy Farmers', 'TEST JOB COMPANY'],
			'job_description'=>['Assist customers in ordering ice cream and checking out. Work in a coordinated team to complete orders in a timely manner.', 'TEST JOB DESC'],
			'job_workdate'=>['2023 - Present', 'TEST JOB WORKDATE'],
			'job_achievements'=>['Gained valuable customer service skills as well as more expeirence working as a team to complete tasks.','TEST JOB ACHIEVEMENTS'],
			'job_technologies'=>[
				'Customer Service Skills',
				'Team Management Skills'
			]
		],
		'education'=>[
			['edu_degree'=>'BS in Applied Software Engenerring',
			'edu_college'=>'Northern Kentucky University',
			'edu_date'=>'2021-2025'],
		],
		'skills'=>[
			'skills_major'=>[ # the number is gonna be the width of the progress bar thing
				'Java'=>90,
				'Dart/Flutter'=>0,
				'JavaScript'=>98,
				'Node.js'=>98,
				'HTML/CSS'=>98
			],
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
			'Outstanding Academic Achievement'=>'Dean\'s List Spring 2023 Semester at Northern Kentucky University'
		],
		'languages'=>['English'],
		'interests'=>[
			'Climbing',
			'Snowboarding',
			'Camping',
			'Hiking'
		],
		'projects'=>[
			[
				'project_title'=>'Midwest Music',
				'project_description'=>'Final Assignment for Full-Stack Application Development. Created a concert review site with a team of two others.',
				'project_img'=>'assets\images\project_midwestmusic.jpg',
				'project_url'=>'https://github.com/AndrewOneal/MidwestMusic'
			]
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
				        <img class="picture" src="assets/images/profile.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo $members[$index]['name'];?></h1>
							    <div class="title mb-3"><?php echo $members[$index]['role'];?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i>your@email.com</a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i>0123 456 78900</a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span>linkedin.com/in/yourlink</a></li>
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span>github.com/yourhandle</a></li>
					                <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span>yourwebsite.com</a></li>
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
					    <p class="mb-0">Summarise your education and professional experience here. Add a couple of fun facts. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque congue elit ut nisi vehicula iaculis. Integer porta nisi erat, quis gravida quam dignissim ut. Nullam tincidunt mollis finibus. Vestibulum et diam vel tellus blandit convallis non id mauris. Curabitur feugiat tincidunt ante, ut iaculis sem. Sed eleifend fringilla diam, quis vehicula tellus fringilla sed. In sagittis commodo ipsum pulvinar sagittis. Ut et turpis sit amet erat elementum convallis ac eu ipsum. Aenean varius eget mi in mollis. Integer tempus diam libero, id blandit neque aliquam non. Maecenas eleifend leo ut pellentesque bibendum. Phasellus consectetur facilisis nunc, at ultricies nisi eleifend eget. Fusce molestie et orci non pulvinar. Aenean ac tristique orci, vitae viverra mi.</p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								<?php
								for($i=0;$i<count($members[$index]['work_experience']);$i++){

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
										    <ul>
											    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
											    <li>At vero eos et accusamus et iusto odio dignissimos.</li>
											    <li>Blanditiis praesentium voluptatum deleniti atque corrupti.</li>
											    <li>Maecenas tempus tellus eget.</li>
										    </ul>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Angular</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Python</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">jQuery</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Webpack</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">HTML/SASS</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">PostgresSQL</span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->';
								}
								?>
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Senior Software Developer</h3>
										        <div class="resume-company-name ms-auto">Google</div>
										    </div><!--//row-->
										    <div class="resume-position-time">2019 - 2023</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements</h4>
										    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">React</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Redux</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Django</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Webpack</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">HTML/SASS</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">MySQL</span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Co-Founder & Lead Developer</h3>
										        <div class="resume-company-name ms-auto">To-do Lists</div>
										    </div><!--//row-->
										    <div class="resume-position-time">2015 - 2019</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
										    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Django</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">JavaScript</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Node.js</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Require.js</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">HTML/SASS</span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Web Developer <small class="text-muted">(Intern)</small></h3>
										        <div class="resume-company-name ms-auto">Amazon</div>
										    </div><!--//row-->
										    <div class="resume-position-time">2014 - 2015</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Ruby on Rails</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">jQuery</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">HTML/LESS</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">MongoDB</span></li>
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
								            <div class="resume-skill-name">Angular</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">React</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 94%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">JavaScript</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        
								        <li class="mb-2">
								            <div class="resume-skill-name">Node.js</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">HTML/CSS/SASS/LESS</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light">DevOps</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Code Review</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Git</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Unit Testing</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Wireframing</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Sketch</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Balsamiq</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">WordPress</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Shopify</span></li>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold">MSc in Computer Science</div>
								        <div class="resume-degree-org">University College London</div>
								        <div class="resume-degree-time">2013 - 2014</div>
								    </li>
								    <li>
								        <div class="resume-degree font-weight-bold">BSc Maths and Physics</div>
								        <div class="resume-degree-org">Imperial College London</div>
								        <div class="resume-degree-time">2010 - 2013</div>
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
								        <div class="resume-award-name">Award Name Lorem</div>
								        <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</div>
								    </li>
								    <li class="mb-0 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">Award Name Ipsum</div>
								        <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque.</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span> <small class="text-muted font-weight-normal">(Native)</small></li>
								    <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold">French</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
								    <li><span class="resume-lang-name font-weight-bold">Spanish</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1">Climbing</li>
								    <li class="mb-1">Snowboarding</li>
								    <li class="mb-1">Cooking</li>
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
								<img src="path-to-project-image1.jpg" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 1</h5>
									<p class="card-text">Brief description of Project 1.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image2.jpg" alt="Project 2" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 2</h5>
									<p class="card-text">Brief description of Project 2.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image3.jpg" alt="Project 3" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 3</h5>
									<p class="card-text">Brief description of Project 3.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
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
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Your names</small>
    </footer>

    

</body>
</html> 

