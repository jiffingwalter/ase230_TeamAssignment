<?php
# MEMBER LIST
$members_list=[
	[ # member 1 -- justin
		'name'=>'Justin Walter',
		'role'=>'Intern Programmer',
		'profile_picture'=>'./assets/images/profile_justinwalter.jpg',
		'email'=>'walterj5@mymail.nku.edu',
		'linkedin_link'=>'https://www.linkedin.com/in/justin-walter-b0a804244/',
		'github_link'=>'https://github.com/jiffingwalter/',
		'website_link'=>'https://jiffingwalter.github.io/inf286-jwalterscribbles/',
		'phone_num'=>'(859)412-8115',
		'summary'=>'My name is Justin Walter and I\'m an NKU senior going for a major in CIT and a minor in Media Informatics. I like to play video games, hike, work out, climb, draw. I\'m currently interning at Great American insurance for my first internship as a programmer.',
		'work_experience'=>[
			'job_title'=>['Intern Developer'],
			'job_company'=>['Great American Insurance'],
			'job_description'=>['Working on "Techinical Knock-Out" team to solve both minor an major bugs in insurance program'],
			'job_workdate'=>['2023 - Present'],
			'job_achievements'=>['Learning both technical and people skills', 'Applying knowledge learned in college toward real projects'],
			'job_technologies'=>[
				['Java', 'HTML', 'CSS', 'JavaScript', 'TypeScript', 'Angular', 'Git']	
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
				'Python',
				'Java',
				'Angular',
				'HTML/CSS',
				'UI/UX Design'
			],
			'skills_progress'=>['75','60','60','70','70'],
			'skills_minor'=>[
				'JavaScript', 'TypeScript', 'Visual Design', '3D Modeling & Animation', 'Team player', 'Git'
			],
		],
		'awards'=>[
			'title'=>[
				'GCTC Dean\'s list',
				'President\'s Honor List',
				'NKU Dean\'s list'
			],
			'desc'=>[
				'Dean\'s list for the 2019 Fall semester at Gateway Community College,',
				'President\'s honor list for the 2022 Spring semester at NKU',
				'Dean\'s list for the 2021 Spring and Fall semesters at NKU'
			]
		],
		'languages'=>[
			'lang'=>['English'],
			'use'=>['Native']
		],
		'interests'=>[
			'Video Games and development', 'Art (sketching, 3D, video)', 'Outdoors'
		],
		'projects'=>[
			[
				'project_title'=>'CUBE UI/UX Design',
				'project_description'=>'UI bug fixes and additions to Great American\'s insurance handling software',
				'project_img'=>'assets/images/project_cube.png',
				'project_url'=>'https://thisisconfidential.website'
			],
			[
				'project_title'=>'Wood Hudson Redesign',
				'project_description'=>'Reworked the Wood Hudson Cancer Research Lab website for final project of website design',
				'project_img'=>'assets/images/project_woodhudson.png',
				'project_url'=>'https://jiffingwalter.github.io/woodhudsonredesign/'
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
			[
				'project_title'=>'Midwest Music',
				'project_description'=>'Final Assignment for Full-Stack Application Development. Created a concert review site with a team of two others.',
				'project_img'=>'assets\images\project_midwestmusic.jpg',
				'project_url'=>'https://github.com/AndrewOneal/MidwestMusic'
			],
		]
	],
];

# FUNCTIONS
function generateMember($members, $index){
	?>
	<?php
	echo
	'<div class="col-md-4">
		<div class="card">
			<img src="'.$members[$index]['profile_picture'].'" alt="Profile Picture" class="card-img-top">
			<div class="card-body">
				<h3 class="card-title">'.$members[$index]['name'].'</h3>
				<h5 class="card-text">'.$members[$index]['role'].'</h5>
				<p class="card-text">'.$members[$index]['summary'].'</p>
				<a href="detail.php?index='.$index.'" href="btn btn-outline-primary" >See Full Profile</a>
			</div>
		</div>
	</div>';
	?>
<?php
}

?>