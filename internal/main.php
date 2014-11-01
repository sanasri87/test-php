

<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>R&amp;D Portal | IIIT Hyderabad</title>

<!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">

<link href="../css/login.css" rel="stylesheet">
<link href="../css/comments.css" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="../css/style.css">
<link type="text/css" rel="stylesheet" href="../css/example.css">
<link type="text/css" rel="stylesheet" href="../css/easy-responsive-tabs.css">

<!-- <link rel="stylesheet" href="../css/normalize.css"> -->
<!-- <link rel="stylesheet" href="../css/prism.css"> -->
<!-- <link rel="stylesheet" href="../css/main.css">  -->
<link rel="stylesheet" href="../css/asAccordion.css">


<!-- Custom Fonts -->
<link href="../font-awesome-4.1.0/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">
<link href='../js/googlefonts/droid.serif.css' rel='stylesheet'
	type='text/css'>
<link href='../js/googlefonts/kaushan.script.css' rel='stylesheet'
	type='text/css'>
<link href="../js/googlefonts/montserrat.css" rel="stylesheet"
	type="text/css">
<link href='../js/googlefonts/roboto.slab.css' rel='stylesheet'
	type='text/css'>



<!-- Custom CSS -->
<link href="../css/agency.css" rel="stylesheet">
<link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet">

<link href="../fileupload/css/styles.css" rel="stylesheet">
<!-- <script src="http://code.jquery.com/jquery-1.10.2.js"></script> -->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style type="text/css">
.form-class {
	padding-left: 50px;
	border: 1px solid;
	border-color: #ccc;
}

#overlay {
	background-color: rgba(0, 0, 0, 0.8);
	z-index: 999;
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	display: none;
}

.popup {
	background-color: black;
	display: none;
	position: fixed;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	z-index: 3000;
	opacity: 0.5;
	backdrop: static;
	keyboard: false
}

</style>
</head>


<?php
include ('../config.php');
session_start();
if(empty($_SESSION['login_user']))
{
	header('Location: index.php');
}
$loggedInUser = getUserName($_SESSION['login_user']);
$loggedInUserEmail = getEmailId($_SESSION['login_user']);
?>

<body id="page-top" class="index">
	<input type="hidden" name="name-com" id="name-com"
		value="<?php echo $loggedInUser;?>"></input>
	<input type="hidden" name="mail-com" id="mail-com"
		value="<?php echo $loggedInUserEmail;?>"></input>
	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand page-scroll" href="#page-top">
					<div align="center"
						style="color: #000; font-family: Verdana; font-size: 16px; font-weight: bold">
						<img id="logo" src="../img/IIIT-H Logo.png">
					</div>
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden"><a href="#page-top"></a></li>
					<li><a class="page-scroll" href="#support">Support</a></li>
					<li><a class="page-scroll" href="#references">References</a></li>
					<li><a class="page-scroll" href="#contribute">Contribute</a></li>
					<li><a class="page-scroll" href="#requestportal">Request Portal</a></li>
					<li><a class="page-scroll" href="#contact">Contacts</a></li>
					<li><a class="page-scroll" href="logout.php">Logout</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<!-- Header -->
	<header style="background-image: url(../img/header-bg2.jpg);">
		<div class="container">
			<div class="intro-text">
				<div class="intro-lead-in">Welcome to the R&D Portal.</div>
				<div class="intro-heading">Let's Push the Boundaries</div>
				<a href="#support" class="page-scroll btn btn-xl">How we can help </a>
			</div>
		</div>
	</header>

	<!-- Support Section -->
	<section id="support">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Support</h2>
					<h3 class="section-subheading text-muted">What we can do for our
						researchers</h3>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-4">
					<span class="fa-stack fa-4x"> <i
						class="fa fa-circle fa-stack-2x text-primary"></i> <i
						class="fa fa-mortar-board fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Outreach Education</h4>
					<p class="text-muted">Support for conducting outreach programs,
						finding participants and custom executive programs for the
						industry</p>
					<ul class="list-inline social-buttons">
						<li><a href="mailto:vv@iiit.ac.in"><i class="fa fa-envelope"></i></a>

						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<span class="fa-stack fa-4x"> <i
						class="fa fa-circle fa-stack-2x text-primary"></i> <i
						class="fa fa-cog fa-spin fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Research</h4>
					<p class="text-muted">Support on grant proposals, sponsored
						research, project execution and other matters related to
						conducting research</p>
					<ul class="list-inline social-buttons">
						<li><a href="mailto:vv@iiit.ac.in"><i class="fa fa-envelope"></i></a>

						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<span class="fa-stack fa-4x"> <i
						class="fa fa-circle fa-stack-2x text-primary"></i> <i
						class="fa fa-rupee fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Commercialization</h4>
					<p class="text-muted">Support for commercializing research output
						through technology transfers, startups and IP protection</p>
					<ul class="list-inline social-buttons">
						<li><a href="mailto:vv@iiit.ac.in"><i class="fa fa-envelope"></i></a>

						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>



	<!-- References Section -->
	<section id="references" class="bg-light-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">References</h2>
					<h3 class="section-subheading text-muted">What we can do for our
						researchers</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="300x200" src="http://lorempixel.com/600/200/people" />
						<div class="caption">
							<h3>Faculty Research Handbook</h3>
							<p>Support for conducting outreach programs, finding participants
								and custom executive programs for the industry</p>
							<p>
								<a class="btn btn-primary" data-toggle="modal"
									href="#educationModal1">Preview</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="300x200" src="http://lorempixel.com/600/200/city" />
						<div class="caption">
							<h3>Research Center Handbook</h3>
							<p>Support on grant proposals, sponsored research, project
								execution and other matters related to conducting research</p>
							<p>
								<a class="btn btn-primary" data-toggle="modal"
									href="#educationModal2">Preview</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="300x200" src="http://lorempixel.com/600/200/sports" />
						<div class="caption">
							<h3>Research Student Handbook</h3>
							<p>Support for commercializing research output through technology
								transfers, startups and IP protection</p>
							<p>
								<a class="btn btn-primary" data-toggle="modal"
									href="#educationModal3">Preview</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Portfolio Grid Section -->
	<section id="contribute" class="bg-light-grey">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Contribute</h2>
					<h3 class="section-subheading text-muted">Lorem ipsum dolor sit
						amet, consectetuer adipiscing elit. Aenean commodo ligula eget</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 contribute-item">
					<a href="#portfolioModal1" class="contribute-link"
						data-toggle="modal">
						<div class="contribute-hover">
							<div class="contribute-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div> <img src="../img/portfolio/faculty.png"
						class="img-responsive" alt="">
					</a>
					<div class="contribute-caption">
						<h4>Achievements Portal</h4>
						<p class="text-muted">Lorem ipsum dolor sit amet, consectetuer
							adipiscing elit. Aenean commodo ligula eget</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 contribute-item">
					<a href="#portfolioModal2" class="contribute-link"
						data-toggle="modal">
						<div class="contribute-hover">
							<div class="contribute-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div> <img src="../img/portfolio/research-center.png"
						class="img-responsive" alt="">
					</a>
					<div class="contribute-caption">
						<h4>Technology Commercialization Portal</h4>
						<p class="text-muted">Lorem ipsum dolor sit amet, consectetuer
							adipiscing elit. Aenean commodo ligula eget</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 contribute-item">
					<a href="#portfolioModal3" class="contribute-link"
						data-toggle="modal">
						<div class="contribute-hover">
							<div class="contribute-hover-content">
								<i class="fa fa-plus fa-3x"></i>
							</div>
						</div> <img src="../img/portfolio/student.png"
						class="img-responsive" alt="">
					</a>
					<div class="contribute-caption">
						<h4>Policies</h4>
						<p class="text-muted">Lorem ipsum dolor sit amet, consectetuer
							adipiscing elit. Aenean commodo ligula eget</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Portfolia Grid Section -->
	<section id="requestportal" class="bg-light-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Request Portal</h2>
					<h3 class="section-subheading text-muted">Lorem ipsum dolor sit
						amet, consectetuer adipiscing elit. Aenean commodo ligula eget</h3>
				</div>
			</div>
			<div class="row">
				<div id="requestsTab" class="resp-vtabs" style="display: block; width: 100%; margin: 0px;">
		            <ul class="resp-tabs-list">
		                <li class="resp-tab-item" aria-controls="tab_item-0" role="tab">Ethics Committee Review</li>
		                <li class="resp-tab-item" aria-controls="tab_item-1" role="tab">Research Proposal Review</li>
		                <li class="resp-tab-item" aria-controls="tab_item-2" role="tab">UC Requests</li>
		                <li class="resp-tab-item" aria-controls="tab_item-3" role="tab">New employee request</li>
		                <li class="resp-tab-item" aria-controls="tab_item-4" role="tab">Employee termination request</li>
		                <li class="resp-tab-item" aria-controls="tab_item-5" role="tab">Purchase technical equipment request</li>
		                <li class="resp-tab-item" aria-controls="tab_item-6" role="tab">Purchase non-technical equipment request</li>
		                <li class="resp-tab-item" aria-controls="tab_item-7" role="tab">Handover technical equipment request</li>
		                <li class="resp-tab-item" aria-controls="tab_item-8" role="tab">Handover non-technical equipment request</li>
		                <li class="resp-tab-item" aria-controls="tab_item-9" role="tab">Space request</li>
		                <li class="resp-tab-item" aria-controls="tab_item-10" role="tab">Space handover</li>
		                <li class="resp-tab-item" aria-controls="tab_item-11" role="tab">Travel Request</li>
		                <li class="resp-tab-item" aria-controls="tab_item-12" role="tab">Scholarship Request</li>
		                <li class="resp-tab-item" aria-controls="tab_item-13" role="tab">Visa Supporting Documents Request</li>
		            </ul>
		            <div class="resp-tabs-container">
		                <div class="resp-tab-content" aria-labelledby="tab_item-0">
		                    <form class="form-horizontal" id="reqform1">
									<fieldset>


										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="projectname">Name
												of project</label>
											<div class="col-md-5">
												<input id="projectname" name="projectname" type="text"
													placeholder="Name of project" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="description">Description
												of project</label>
											<div class="col-md-6">
												<input id="description" name="description" type="text"
													placeholder="Description of project"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="whyreview">Why
												does it need an ethics committee review?</label>
											<div class="col-md-5">
												<input id="whyreview" name="whyreview" type="text"
													placeholder="Why does it need an ethics committee review?"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="datesavailable">Available
												dates for review</label>
											<div class="col-md-4">
												<input id="datesavailable" name="datesavailable" type="text"
													placeholder="Available dates for review"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactname">Contact
												Name</label>
											<div class="col-md-4">
												<input id="contactname" name="contactname" type="text"
													placeholder="Contact Name" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactemail">Contact
												Email</label>
											<div class="col-md-4">
												<input id="contactemail" name="contactemail" type="text"
													placeholder="Contact Email" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Button -->
										<div class="form-group">
											<label class="col-md-4 control-label" for=""></label>
											<div class="col-md-6">
												<div class="bt-add-com request-submit" id="req1"
													name="req1" style="background-color: #fec503;">Submit
													request</div>
											</div>
										</div>

									</fieldset>
								</form>
		                </div>
		                <div class="resp-tab-content" aria-labelledby="tab_item-1">
		                    <form class="form-horizontal" id="reqform2">
									<fieldset>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="nameofproject">Name
												of project</label>
											<div class="col-md-4">
												<input id="nameofproject" name="nameofproject" type="text"
													placeholder="Name of project" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="description">Brief
												Description of project</label>
											<div class="col-md-5">
												<input id="description" name="description" type="text"
													placeholder="Brief Description of project"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- File Button -->
										<div class="form-group">
											<label class="col-md-4 control-label" for="files">Attach
												proposal (PDF or Word)</label>
											<div class="col-md-4">
												<span class="btn btn-success fileinput-button">
												    <span>Select file...</span>
												    <!-- The file input field used as target for the file upload widget -->
												    <input id="fileupload2" type="file" name="files[]" multiple>
											  	</span>
											</div>
										</div>
										
										<!-- The list of files uploaded -->
										<div class="form-group">
											<label class="col-md-4 control-label" for="files">Files uploaded:</label>
											<div class="col-md-4">
												<ul id="files2"></ul>
											</div>
										</div>
										
										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="sponsor">Sponsoring
												agency</label>
											<div class="col-md-5">
												<input id="sponsor" name="sponsor" type="text"
													placeholder="Sponsoring agency"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactname">Contact
												Name</label>
											<div class="col-md-4">
												<input id="contactname" name="contactname" type="text"
													placeholder="Contact Name" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactemail">Contact
												Email</label>
											<div class="col-md-4">
												<input id="contactemail" name="contactemail" type="text"
													placeholder="Contact Email" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Button -->
										<div class="form-group">
											<label class="col-md-4 control-label" for=""></label>
											<div class="col-md-6">
												<div class="bt-add-com request-submit" id="req2"
													name="req2" style="background-color: #fec503;">Submit
													request</div>
											</div>
										</div>
									</fieldset>
								</form>
		                </div>
		                <div class="resp-tab-content" aria-labelledby="tab_item-2">
                    			<form class="form-horizontal" id="reqform3">
									<fieldset>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="projectname">Name
												of project</label>
											<div class="col-md-4">
												<input id="projectname" name="projectname" type="text"
													placeholder="Name of project" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="startdate">Start
												date of UC</label>
											<div class="col-md-4">
												<input id="startdate" name="startdate" type="text"
													placeholder="Start date of UC"
													class="form-control input-md datetimepicker" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="enddate">End date
												of UC</label>
											<div class="col-md-4">
												<input id="enddate" name="enddate" type="text"
													placeholder="End date of UC" class="form-control input-md datetimepicker"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactname">Contact
												Name</label>
											<div class="col-md-4">
												<input id="contactname" name="contactname" type="text"
													placeholder="Contact Name" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactemail">Contact
												Email</label>
											<div class="col-md-4">
												<input id="contactemail" name="contactemail" type="text"
													placeholder="Contact Email" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Button -->
										<div class="form-group">
											<label class="col-md-4 control-label" for=""></label>
											<div class="col-md-6">
												<div class="bt-add-com request-submit" id="req3"
													name="req3" style="background-color: #fec503;">Submit
													request</div>
											</div>
										</div>
									</fieldset>
								</form>
		                </div>
		                <div class="resp-tab-content" aria-labelledby="tab_item-3">
		                    	<form class="form-horizontal" id="reqform4">
									<fieldset>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="employeename">Employee
												name</label>
											<div class="col-md-4">
												<input id="employeename" name="employeename" type="text"
													placeholder="Employee name" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- File Button -->
										<div class="form-group">
											<label class="col-md-4 control-label" for="files">Attach
												proposal (PDF or Word)</label>
											<div class="col-md-4">
												<span class="btn btn-success fileinput-button">
												    <span>Select file...</span>
												    <!-- The file input field used as target for the file upload widget -->
												    <input id="fileupload4" type="file" name="files[]" multiple>
											  	</span>
											</div>
										</div>
										
										<!-- The list of files uploaded -->
										<div class="form-group">
											<label class="col-md-4 control-label" for="files">Files uploaded:</label>
											<div class="col-md-4">
												<ul id="files4"></ul>
											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="startdate">Start
												date</label>
											<div class="col-md-4">
												<input id="startdate" name="startdate" type="text"
													placeholder="Start date" class="form-control input-md datetimepicker"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label"
												for="employeementduration">Duration of employment (if
												applicable)</label>
											<div class="col-md-4">
												<input id="employeementduration" name="employeementduration"
													type="text"
													placeholder="Duration of employment (if applicable)"
													class="form-control input-md">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="salary">Salary of
												employee</label>
											<div class="col-md-4">
												<input id="salary" name="salary" type="text"
													placeholder="Salary of employee"
													class="form-control input-md" required=""> <span
													class="help-block">help</span>
											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="salaryproject">Project
												from which the salary should be taken</label>
											<div class="col-md-5">
												<input id="salaryproject" name="salaryproject" type="text"
													placeholder="Project from which the salary should be taken"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactname">Contact
												Name</label>
											<div class="col-md-4">
												<input id="contactname" name="contactname" type="text"
													placeholder="Contact Name" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactemail">Contact
												Name</label>
											<div class="col-md-4">
												<input id="contactemail" name="contactemail" type="text"
													placeholder="Contact Name" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Button -->
										<div class="form-group">
											<label class="col-md-4 control-label" for=""></label>
											<div class="col-md-6">
												<div class="bt-add-com request-submit" id="req4"
													name="req4" style="background-color: #fec503;">Submit
													request</div>
											</div>
										</div>

									</fieldset>
								</form>
		                </div>
		                <div class="resp-tab-content" aria-labelledby="tab_item-4">
		                    	<form class="form-horizontal" id="reqform5">
									<fieldset>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="employeename">Employee
												name</label>
											<div class="col-md-4">
												<input id="employeename" name="employeename" type="text"
													placeholder="Employee name" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="enddate">End date</label>
											<div class="col-md-4">
												<input id="enddate" name="enddate" type="text"
													placeholder="End date" class="form-control input-md datetimepicker"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="employeeproject">Project
												in which employee was employed</label>
											<div class="col-md-5">
												<input id="employeeproject" name="employeeproject"
													type="text"
													placeholder="Project in which employee was employed"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactname">Contact
												Name</label>
											<div class="col-md-4">
												<input id="contactname" name="contactname" type="text"
													placeholder="Contact Name" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactemail">Contact
												Email</label>
											<div class="col-md-4">
												<input id="contactemail" name="contactemail" type="text"
													placeholder="Contact Email" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Button -->
										<div class="form-group">
											<label class="col-md-4 control-label" for=""></label>
											<div class="col-md-6">
												<div class="bt-add-com request-submit" id="req5"
													name="req5" style="background-color: #fec503;">Submit
													request</div>
											</div>
										</div>
									</fieldset>
								</form>
		                </div>
		                <div class="resp-tab-content" aria-labelledby="tab_item-5">
		                    	<form class="form-horizontal" id="reqform6">
									<fieldset>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="equipmentname">Equipment
												name</label>
											<div class="col-md-4">
												<input id="equipmentname" name="equipmentname" type="text"
													placeholder="Equipment name" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="description">Equipment
												description</label>
											<div class="col-md-4">
												<input id="description" name="description" type="text"
													placeholder="Equipment description"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="purchasedate">Date
												by when the equipment needs to be purchase</label>
											<div class="col-md-4">
												<input id="purchasedate" name="purchasedate" type="text"
													placeholder="Date by when the equipment needs to be purchase"
													class="form-control input-md datetimepicker" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="estimatedcost">Estimated
												cost of equipment</label>
											<div class="col-md-4">
												<input id="estimatedcost" name="estimatedcost" type="text"
													placeholder="Estimated cost of equipment"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="equipproject">Project
												from which the equipment budget will be taken</label>
											<div class="col-md-4">
												<input id="equipproject" name="equipproject" type="text"
													placeholder="Project from which the equipment budget will be taken"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Multiple Radios (inline) -->
										<div class="form-group">
											<label class="col-md-4 control-label"
												for="isavailableinindia">Is the equipment available in
												India?</label>
											<div class="col-md-4">
												<label class="radio-inline" for="isavailableinindia-0"> <input
													type="radio" name="isavailableinindia"
													id="isavailableinindia-0" value="Yes" checked="checked">
													Yes
												</label> <label class="radio-inline"
													for="isavailableinindia-1"> <input type="radio"
													name="isavailableinindia" id="isavailableinindia-1"
													value="No"> No
												</label>
											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label"
												for="vendorrecommendations">Any vendor recommendations?
												(please provide name, email and phone no.)</label>
											<div class="col-md-4">
												<input id="vendorrecommendations"
													name="vendorrecommendations" type="text"
													placeholder="Any vendor recommendations? (please provide name, email and phone no.)"
													class="form-control input-md">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactname">Contact
												Name</label>
											<div class="col-md-4">
												<input id="contactname" name="contactname" type="text"
													placeholder="Contact Name" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactemail">Contact
												Email</label>
											<div class="col-md-4">
												<input id="contactemail" name="contactemail" type="text"
													placeholder="Contact Email" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Button -->
										<div class="form-group">
											<label class="col-md-4 control-label" for=""></label>
											<div class="col-md-6">
												<div class="bt-add-com request-submit" id="req6"
													name="req6" style="background-color: #fec503;">Submit
													request</div>
											</div>
										</div>

									</fieldset>
								</form>
		                
		                </div>
		                <div class="resp-tab-content" aria-labelledby="tab_item-6">
		                    								<form class="form-horizontal" id="reqform7">
									<fieldset>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="equipmentname">Equipment
												name</label>
											<div class="col-md-4">
												<input id="equipmentname" name="equipmentname" type="text"
													placeholder="Equipment name" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="description">Equipment
												description</label>
											<div class="col-md-4">
												<input id="description" name="description" type="text"
													placeholder="Equipment description"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="purchasedate">Date
												by when the equipment needs to be purchase</label>
											<div class="col-md-4">
												<input id="purchasedate" name="purchasedate" type="text"
													placeholder="Date by when the equipment needs to be purchase"
													class="form-control input-md datetimepicker" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="estimatedcost">Estimated
												cost of equipment</label>
											<div class="col-md-4">
												<input id="estimatedcost" name="estimatedcost" type="text"
													placeholder="Estimated cost of equipment"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="equipproject">Project
												from which the equipment budget will be taken</label>
											<div class="col-md-4">
												<input id="equipproject" name="equipproject" type="text"
													placeholder="Project from which the equipment budget will be taken"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Multiple Radios (inline) -->
										<div class="form-group">
											<label class="col-md-4 control-label"
												for="isavailableinindia">Is the equipment available in
												India?</label>
											<div class="col-md-4">
												<label class="radio-inline" for="isavailableinindia-0"> <input
													type="radio" name="isavailableinindia"
													id="isavailableinindia-0" value="Yes" checked="checked">
													Yes
												</label> <label class="radio-inline"
													for="isavailableinindia-1"> <input type="radio"
													name="isavailableinindia" id="isavailableinindia-1"
													value="No"> No
												</label>
											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label"
												for="vendorrecommendations">Any vendor recommendations?
												(please provide name, email and phone no.)</label>
											<div class="col-md-5">
												<input id="vendorrecommendations"
													name="vendorrecommendations" type="text"
													placeholder="Any vendor recommendations? (please provide name, email and phone no.)"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactname">Contact
												Name</label>
											<div class="col-md-4">
												<input id="contactname" name="contactname" type="text"
													placeholder="Contact Name" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactemail">Contact
												Email</label>
											<div class="col-md-4">
												<input id="contactemail" name="contactemail" type="text"
													placeholder="Contact Email" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Button -->
										<div class="form-group">
											<label class="col-md-4 control-label" for=""></label>
											<div class="col-md-6">
												<div class="bt-add-com request-submit" id="req7"
													name="req7" style="background-color: #fec503;">Submit
													request</div>
											</div>
										</div>

									</fieldset>
								</form>
		                
		                </div>
		                <div class="resp-tab-content" aria-labelledby="tab_item-7">
		                    	<form class="form-horizontal" id="reqform8">
									<fieldset>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="equipmentname">Equipment
												name</label>
											<div class="col-md-4">
												<input id="equipmentname" name="equipmentname" type="text"
													placeholder="Equipment name" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="equipmentuse">How
												can the equipment be used?</label>
											<div class="col-md-5">
												<input id="equipmentuse" name="equipmentuse" type="text"
													placeholder="How can the equipment be used?"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="returndate">Date
												of return of equipment </label>
											<div class="col-md-4">
												<input id="returndate" name="returndate" type="text"
													placeholder="Date of return of equipment "
													class="form-control input-md datetimepicker" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="equipproject">Project
												from which the equipment was purchased</label>
											<div class="col-md-4">
												<input id="equipproject" name="equipproject" type="text"
													placeholder="Project from which the equipment was purchased"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactname">Contact
												Name</label>
											<div class="col-md-4">
												<input id="contactname" name="contactname" type="text"
													placeholder="Contact Name" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactemail">Contact
												Email</label>
											<div class="col-md-4">
												<input id="contactemail" name="contactemail" type="text"
													placeholder="Contact Email" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Button -->
										<div class="form-group">
											<label class="col-md-4 control-label" for=""></label>
											<div class="col-md-6">
												<div class="bt-add-com request-submit" id="req8"
													name="req8" style="background-color: #fec503;">Submit
													request</div>
											</div>
										</div>

									</fieldset>
								</form>
		                
		                </div>
		                <div class="resp-tab-content" aria-labelledby="tab_item-8">
		                    	<form class="form-horizontal" id="reqform9">
									<fieldset>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="equipmentname">Equipment
												name</label>
											<div class="col-md-4">
												<input id="equipmentname" name="equipmentname" type="text"
													placeholder="Equipment name" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="equipmentuse">How
												can the equipment be used?</label>
											<div class="col-md-5">
												<input id="equipmentuse" name="equipmentuse" type="text"
													placeholder="How can the equipment be used?"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="returndate">Date
												of return of equipment </label>
											<div class="col-md-4">
												<input id="returndate" name="returndate" type="text"
													placeholder="Date of return of equipment "
													class="form-control input-md datetimepicker" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="equipproject">Project
												from which the equipment was purchased</label>
											<div class="col-md-4">
												<input id="equipproject" name="equipproject" type="text"
													placeholder="Project from which the equipment was purchased"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactname">Contact
												Name</label>
											<div class="col-md-4">
												<input id="contactname" name="contactname" type="text"
													placeholder="Contact Name" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactemail">Contact
												Email</label>
											<div class="col-md-4">
												<input id="contactemail" name="contactemail" type="text"
													placeholder="Contact Email" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Button -->
										<div class="form-group">
											<label class="col-md-4 control-label" for=""></label>
											<div class="col-md-6">
												<div class="bt-add-com request-submit" id="req9"
													name="req9" style="background-color: #fec503;">Submit
													request</div>
											</div>
										</div>

									</fieldset>
								</form>
		                
		                </div>
		                <div class="resp-tab-content" aria-labelledby="tab_item-9">
		                    	<form class="form-horizontal" id="reqform10">
									<fieldset>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="spacereqd">How
												much space do you require? (sft)</label>
											<div class="col-md-4">
												<input id="spacereqd" name="spacereqd" type="text"
													placeholder="How much space do you require? (sft)"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="wherereqd">Where
												do you require the space?</label>
											<div class="col-md-4">
												<input id="wherereqd" name="wherereqd" type="text"
													placeholder="Where do you require the space?"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="whyreqd">What do
												you intend to do with the space?</label>
											<div class="col-md-4">
												<input id="whyreqd" name="whyreqd" type="text"
													placeholder="What do you intend to do with the space?"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="reqddate">Date by
												when the space needs to be ready</label>
											<div class="col-md-4">
												<input id="reqddate" name="reqddate" type="text"
													placeholder="Date by when the space needs to be ready"
													class="form-control input-md datetimepicker" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="projectname">Project
												for which the space will be required</label>
											<div class="col-md-4">
												<input id="projectname" name="projectname" type="text"
													placeholder="Project for which the space will be required"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="howlongreqd">Duration
												for which the space is required</label>
											<div class="col-md-4">
												<input id="howlongreqd" name="howlongreqd" type="text"
													placeholder="Duration for which the space is required"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="splreqd">Any
												special requirements?</label>
											<div class="col-md-4">
												<input id="splreqd" name="splreqd" type="text"
													placeholder="Any special requirements?"
													class="form-control input-md">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactname">Contact
												Name</label>
											<div class="col-md-4">
												<input id="contactname" name="contactname" type="text"
													placeholder="Contact Name" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactemail">Contact
												Email</label>
											<div class="col-md-4">
												<input id="contactemail" name="contactemail" type="text"
													placeholder="Contact Email" class="form-control input-md"
													required=""></input>
											</div>
										</div>

									<!-- Button -->
										<div class="form-group">
											<label class="col-md-4 control-label" for=""></label>
											<div class="col-md-6">
												<div class="bt-add-com request-submit" id="req10"
													name="req10" style="background-color: #fec503;">Submit
													request</div>
											</div>
										</div>
									</fieldset>
								</form>
		                
		                </div>
		                <div class="resp-tab-content" aria-labelledby="tab_item-10">
		                    	<form class="form-horizontal" id="reqform11">
									<fieldset>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="handoverlocation">Location
												of space being handed over</label>
											<div class="col-md-4">
												<input id="handoverlocation" name="handoverlocation"
													type="text"
													placeholder="Location of space being handed over"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="handoverdate">Date
												when the space can be handed over</label>
											<div class="col-md-4">
												<input id="handoverdate" name="handoverdate" type="text"
													placeholder="Date when the space can be handed over"
													class="form-control input-md datetimepicker" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="projectname">Project
												for which the space was required</label>
											<div class="col-md-4">
												<input id="projectname" name="projectname" type="text"
													placeholder="Project for which the space was required"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactname">Contact
												Name</label>
											<div class="col-md-4">
												<input id="contactname" name="contactname" type="text"
													placeholder="Contact Name" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactemail">Contact
												Email</label>
											<div class="col-md-4">
												<input id="contactemail" name="contactemail" type="text"
													placeholder="Contact Email" class="form-control input-md"
													required="">
											</div>
										</div>

										<!-- Button -->
										<div class="form-group">
											<label class="col-md-4 control-label" for=""></label>
											<div class="col-md-6">
												<div class="bt-add-com request-submit" id="req11"
													name="req11" style="background-color: #fec503;">Submit
													request</div>
											</div>
										</div>
									</fieldset>
								</form>
		                
		                </div>
		                <div class="resp-tab-content" aria-labelledby="tab_item-11">
		                    <form class="form-horizontal" id="reqform12">
									<fieldset>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="personname">Name
												of person traveling</label>
											<div class="col-md-4">
												<input id="personname" name="personname" type="text"
													placeholder="Name of person traveling"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="contactemail">Contact
												Email</label>
											<div class="col-md-4">
												<input id="contactemail" name="contactemail" type="text"
													placeholder="Contact Email" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="startdate">Date of
												onward travel</label>
											<div class="col-md-4">
												<input id="startdate" name="startdate" type="text"
													placeholder="Date of onward travel"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="enddate">Date of
												return travel</label>
											<div class="col-md-4">
												<input id="enddate" name="enddate" type="text"
													placeholder="Date of return travel"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="travelreason">Reason
												for travel</label>
											<div class="col-md-4">
												<input id="travelreason" name="travelreason" type="text"
													placeholder="Reason for travel"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="travelbudget">From
												where does the budget come?</label>
											<div class="col-md-4">
												<input id="travelbudget" name="travelbudget" type="text"
													placeholder="From where does the budget come?"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Button -->
										<div class="form-group">
											<label class="col-md-4 control-label" for=""></label>
											<div class="col-md-6">
												<div class="bt-add-com request-submit" id="req12"
													name="req12" style="background-color: #fec503;">Submit
													request</div>
											</div>
										</div>

									</fieldset>
								</form>
		                
		                </div>
		                <div class="resp-tab-content" aria-labelledby="tab_item-12">
		                    	<form class="form-horizontal" id="reqform13">
									<fieldset>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="studentname">Name
												of student</label>
											<div class="col-md-4">
												<input id="studentname" name="studentname" type="text"
													placeholder="Name of student" class="form-control input-md"
													required="">

											</div>
										</div>

										<!-- File Button -->
										<div class="form-group">
											<label class="col-md-4 control-label" for="files">Attach
												proposal (PDF or Word)</label>
											<div class="col-md-4">
												<span class="btn btn-success fileinput-button">
												    <span>Select file...</span>
												    <!-- The file input field used as target for the file upload widget -->
												    <input id="fileupload13" type="file" name="files[]" multiple>
											  	</span>
											</div>
										</div>
										
										<!-- The list of files uploaded -->
										<div class="form-group">
											<label class="col-md-4 control-label" for="files">Files uploaded:</label>
											<div class="col-md-4">
												<ul id="files13"></ul>
											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="reason">Reason why
												the student should be granted a scholarship</label>
											<div class="col-md-4">
												<input id="reason" name="reason" type="text"
													placeholder="Reason why the student should be granted a scholarship"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="duration">Duration
												of scholarship</label>
											<div class="col-md-4">
												<input id="duration" name="duration" type="text"
													placeholder="Duration of scholarship"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Multiple Radios (inline) -->
										<div class="form-group">
											<label class="col-md-4 control-label" for="studenttype">Student
												Type</label>
											<div class="col-md-4">
												<label class="radio-inline" for="studenttype-0"> <input
													type="radio" name="studenttype" id="studenttype-0"
													value="MS by Research" checked="checked"> MS by Research
												</label> <label class="radio-inline" for="studenttype-1"> <input
													type="radio" name="studenttype" id="studenttype-1"
													value="PhD"> PhD
												</label>
											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="facultyname">Faculty
												Contact Name</label>
											<div class="col-md-4">
												<input id="facultyname" name="facultyname" type="text"
													placeholder="Faculty Contact Name"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="facultyemail">Faculty
												Contact Name</label>
											<div class="col-md-4">
												<input id="facultyemail" name="facultyemail" type="text"
													placeholder="Faculty Contact Name"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Button -->
										<div class="form-group">
											<label class="col-md-4 control-label" for=""></label>
											<div class="col-md-6">
												<div class="bt-add-com request-submit" id="req13"
													name="req13" style="background-color: #fec503;">Submit
													request</div>
											</div>
										</div>
									</fieldset>
								</form>
		                
		                </div>
		                <div class="resp-tab-content" aria-labelledby="tab_item-13">
		                    	<form class="form-horizontal" id="reqform14">
									<fieldset>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="personname">Name
												of person who needs a visa</label>
											<div class="col-md-4">
												<input id="personname" name="personname" type="text"
													placeholder="Name of person who needs a visa"
													class="form-control input-md" required="">

											</div>
										</div>

										<!-- Multiple Radios (inline) -->
										<div class="form-group">
											<label class="col-md-4 control-label" for="visatype">What
												type of visa is it?</label>
											<div class="col-md-4">
												<label class="radio-inline" for="visatype-0"> <input
													type="radio" name="visatype" id="visatype-0"
													value="Indian going abroad" checked="checked"> Indian going
													abroad
												</label> <label class="radio-inline" for="visatype-1"> <input
													type="radio" name="visatype" id="visatype-1"
													value="Foreigner coming to India"> Foreigner coming to
													India
												</label>
											</div>
										</div>

										<!-- Multiple Radios (inline) -->
										<div class="form-group">
											<label class="col-md-4 control-label" for="persontype">Who is
												the traveling person?</label>
											<div class="col-md-4">
												<label class="radio-inline" for="persontype-0"> <input
													type="radio" name="persontype" id="persontype-0"
													value="Student" checked="checked"> Student
												</label> <label class="radio-inline" for="persontype-1"> <input
													type="radio" name="persontype" id="persontype-1"
													value="Faculty"> Faculty
												</label> <label class="radio-inline" for="persontype-2"> <input
													type="radio" name="persontype" id="persontype-2"
													value="Guest speaker"> Guest speaker
												</label> <label class="radio-inline" for="persontype-3"> <input
													type="radio" name="persontype" id="persontype-3"
													value="Guest faculty"> Guest faculty
												</label>
											</div>
										</div>

										<!-- Multiple Radios (inline) -->
										<div class="form-group">
											<label class="col-md-4 control-label" for="travelreason">Reason
												for travel</label>
											<div class="col-md-4">
												<label class="radio-inline" for="travelreason-0"> <input
													type="radio" name="travelreason" id="travelreason-0"
													value="Conference" checked="checked"> Conference
												</label> <label class="radio-inline" for="travelreason-1"> <input
													type="radio" name="travelreason" id="travelreason-1"
													value="Visiting a university"> Visiting a university
												</label> <label class="radio-inline" for="travelreason-2"> <input
													type="radio" name="travelreason" id="travelreason-2"
													value="Research collaboration"> Research collaboration
												</label> <label class="radio-inline" for="travelreason-3"> <input
													type="radio" name="travelreason" id="travelreason-3"
													value="Academic collaboration"> Academic collaboration
												</label> <label class="radio-inline" for="travelreason-4"> <input
													type="radio" name="travelreason" id="travelreason-4"
													value="Industry collaboration"> Industry collaboration
												</label>
											</div>
										</div>

										<!-- Button -->
										<div class="form-group">
											<label class="col-md-4 control-label" for=""></label>
											<div class="col-md-6">
												<div class="bt-add-com request-submit" id="req14"
													name="req14" style="background-color: #fec503;">Submit
													request</div>
											</div>
										</div>
									</fieldset>
								</form>
		                </div>
		            </div>
		        </div>
			</div>
		</div>
	</section>

	<!-- Team Section -->
	<section id="contact" class="bg-light-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">At Your Service</h2>
					<h3 class="section-subheading text-muted">The R&D Team</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="team-member">
						<img src="../img/team/1.jpg" class="img-responsive img-circle"
							alt="">
						<h4>Dr. Vasudeva Varma</h4>
						<p class="text-muted">Dean R&D</p>
						<ul class="list-inline social-buttons">
							<li><a href="mailto:vv@iiit.ac.in"><i class="fa fa-envelope"></i></a>

							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="team-member">
						<img src="../img/team/2.jpg" class="img-responsive img-circle"
							alt="">
						<h4>Madhavi Kolla</h4>
						<p class="text-muted">Head of New Initiatives</p>
						<ul class="list-inline social-buttons">
							<li><a href="mailto:madhavi.kk@iiit.ac.in"><i
									class="fa fa-envelope"></i></a>

							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="team-member">
						<img src="../img/team/3.jpg" class="img-responsive img-circle"
							alt="">
						<h4>Phaneendra A</h4>
						<p class="text-muted">Assistant Manager</p>
						<ul class="list-inline social-buttons">
							<li><a href="mailto:phani@iiit.ac.in"><i class="fa fa-envelope"></i></a>

							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<p class="large text-muted">We have worked hard to put together
						these Research Handbooks which are intended to answer all your
						questions. If you have a situation that is not addressed in any of
						the handbooks, please do reach out to us.</p>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<span class="copyright">Copyright &copy; R&D Portal, IIIT Hyderabad
						2014</span>
				</div>
				<div class="col-md-4">
					<ul class="list-inline social-buttons">
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<!--                <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul> -->
				</div>
			</div>
		</div>
	</footer>
	<!-- Portfolio Modals -->
	<!-- Use the modals below to showcase details about your portfolio projects! -->

	<!-- Portfolio Modal 1 -->
	<div class="portfolio-modal modal fade" id="portfolioModal1"
		tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>
			<div class="container">
				<div class="detailBox" style="margin: 0px;">
					<div class="row">
						<div class="col-lg-11 col-lg-offset-1">
							<div class="modal-body">
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet
									consectetur.</p>

								<div class="row clearfix">
									<div class="example">
					                    <ul data-direction="horizontal" data-initial-index="0" data-event="click" class="-accordion -accordion--box -accordion--horizontal">
					                        <li class="-accordion__panel">
					                            <span class="-accordion__heading">Publications<i class="-icon -icon--left"></i></span>
					                            <div class="-accordion__expander">
					                            	<form class="form-horizontal" id="formform1">
														<fieldset>
					
															<!-- Form Name -->
															<legend>Publications</legend>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="articlename">Name
																	of article</label>
																<div class="col-md-7">
																	<input id="articlename" name="articlename" type="text"
																		placeholder="Name of article"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="journalname">Name
																	of journal (if applicable)</label>
																<div class="col-md-7">
																	<input id="journalname" name="journalname" type="text"
																		placeholder="Name of journal (if applicable)"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="conferencename">Name
																	of conference (if applicable)</label>
																<div class="col-md-7">
																	<input id="conferencename" name="conferencename"
																		type="text"
																		placeholder="Name of conference (if applicable)"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label"
																	for="publicationdate">Date of publication</label>
																<div class="col-md-7">
																	<input id="publicationdate" name="publicationdate"
																		type="text" placeholder="Date of publication"
																		class="form-control input-md datetimepicker" data-date-format="YYYY/MM/DD">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label"
																	for="internalauthors">Internal Authors</label>
																<div class="col-md-7">
																	<input id="internalauthors" name="internalauthors"
																		type="text" placeholder="Internal Authors"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label"
																	for="externalauthors">External Authors</label>
																<div class="col-md-7">
																	<input id="externalauthors" name="externalauthors"
																		type="text" placeholder="External Authors"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Multiple Radios (inline) -->
															<div class="form-group">
																<label class="col-md-4 control-label" for="patentfiled">Has
																	a patent been filed</label>
																<div class="col-md-7">
																	<label class="radio-inline" for="patentfiled-0"> <input
																		type="radio" name="patentfiled" id="patentfiled-0"
																		value="Yes" checked="checked"> Yes
																	</label> <label class="radio-inline" for="patentfiled-1">
																		<input type="radio" name="patentfiled"
																		id="patentfiled-1" value="No"> No
																	</label>
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="scopuslink">Scopus
																	link of article</label>
																<div class="col-md-7">
																	<input id="scopuslink" name="scopuslink" type="text"
																		placeholder="Scopus link of article"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="contactname">Contact
																	Name </label>
																<div class="col-md-7">
																	<input id="contactname" name="contactname" type="text"
																		placeholder="Contact Name	"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="contactemail">Contact
																	Email</label>
																<div class="col-md-7">
																	<input id="contactemail" name="contactemail" type="text"
																		placeholder="Contact Email"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Button -->
															<div class="form-group">
																<label class="col-md-4 control-label" for=""></label>
																<div class="col-md-6">
																	<div class="bt-add-com contribute-submit ladda-button" data-style="expand-left" id="contr1"
																		name="contr1" style="background-color: #fec503;">Submit
																		request</div>
																</div>
															</div>
														</fieldset>
													</form>
					                            </div>
					                        </li>
					                        <li class="-accordion__panel">
					                            <span class="-accordion__heading">Commercializable technology<i class="-icon -icon--left"></i></span>
					                            <div class="-accordion__expander">
					                            	<form class="form-horizontal" id="formform2">
														<fieldset>
					
															<!-- Form Name -->
															<legend>Commercializable technology</legend>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="technologyname">Name
																	of technology</label>
																<div class="col-md-7">
																	<input id="technologyname" name="technologyname"
																		type="text" placeholder="Name of technology"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="techunique">What
																	is unique about it?</label>
																<div class="col-md-7">
																	<input id="techunique" name="techunique" type="text"
																		placeholder="What is unique about it?"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="whouses">Who
																	would use it?</label>
																<div class="col-md-7">
																	<input id="whouses" name="whouses" type="text"
																		placeholder="Who would use it?"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="howuses">How
																	would they use it?</label>
																<div class="col-md-7">
																	<input id="howuses" name="howuses" type="text"
																		placeholder="How would they use it?"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label"
																	for="othertechnologies">Other comparable technologies</label>
																<div class="col-md-7">
																	<input id="othertechnologies" name="othertechnologies"
																		type="text" placeholder="Other comparable technologies"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Multiple Radios (inline) -->
															<div class="form-group">
																<label class="col-md-4 control-label" for="techready">Is
																	the technology ready to be transferred?</label>
																<div class="col-md-7">
																	<label class="radio-inline" for="techready-0"> <input
																		type="radio" name="techready" id="techready-0"
																		value="Yes" checked="checked"> Yes
																	</label> <label class="radio-inline" for="techready-1"> <input
																		type="radio" name="techready" id="techready-1"
																		value="No"> No
																	</label>
																</div>
															</div>
					
															<!-- Multiple Radios (inline) -->
															<div class="form-group">
																<label class="col-md-4 control-label" for="licenseready">Is
																	the technology ready to be licensed (needs to be usable
																	in as is condition)?</label>
																<div class="col-md-7">
																	<label class="radio-inline" for="licenseready-0"> <input
																		type="radio" name="licenseready" id="licenseready-0"
																		value="Yes" checked="checked"> Yes
																	</label> <label class="radio-inline" for="licenseready-1">
																		<input type="radio" name="licenseready"
																		id="licenseready-1" value="No"> No
																	</label>
																</div>
															</div>
					
															<!-- Multiple Radios (inline) -->
															<div class="form-group">
																<label class="col-md-4 control-label" for="techpatent">Has
																	the technology been patented?</label>
																<div class="col-md-7">
																	<label class="radio-inline" for="techpatent-0"> <input
																		type="radio" name="techpatent" id="techpatent-0"
																		value="Yes" checked="checked"> Yes
																	</label> <label class="radio-inline" for="techpatent-1">
																		<input type="radio" name="techpatent" id="techpatent-1"
																		value="No"> No
																	</label>
																</div>
															</div>
					
															<!-- Multiple Radios (inline) -->
															<div class="form-group">
																<label class="col-md-4 control-label" for="techtested">Has
																	the technology been tested in market conditions?</label>
																<div class="col-md-7">
																	<label class="radio-inline" for="techtested-0"> <input
																		type="radio" name="techtested" id="techtested-0"
																		value="Yes" checked="checked"> Yes
																	</label> <label class="radio-inline" for="techtested-1">
																		<input type="radio" name="techtested" id="techtested-1"
																		value="No"> No
																	</label>
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="techlink">Link
																	to technology</label>
																<div class="col-md-7">
																	<input id="techlink" name="techlink" type="text"
																		placeholder="Link to technology"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="contactname">Contact
																	Name</label>
																<div class="col-md-7">
																	<input id="contactname" name="contactname" type="text"
																		placeholder="Contact Name" class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="contactemail">Contact
																	Email</label>
																<div class="col-md-7">
																	<input id="contactemail" name="contactemail" type="text"
																		placeholder="Contact Email"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Button -->
															<div class="form-group">
																<label class="col-md-4 control-label" for=""></label>
																<div class="col-md-7">
																	<div class="bt-add-com contribute-submit" id="contr2"
																		name="contr1" style="background-color: #fec503;">Submit
																		request</div>
																</div>
															</div>
														</fieldset>
													</form>
					                            </div>
					                        </li>
					                        <li class="-accordion__panel">
					                            <span class="-accordion__heading">Media Mention<i class="-icon -icon--left"></i></span>
					                            <div class="-accordion__expander">
					                            	<form class="form-horizontal" id="formform3">
														<fieldset>
					
															<!-- Form Name -->
															<legend>Media Mention</legend>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="quotedname">Name
																	of person quoted in the media</label>
																<div class="col-md-7">
																	<input id="quotedname" name="quotedname" type="text"
																		placeholder="Name of person quoted in the media"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="articlelink">Link
																	to article</label>
																<div class="col-md-7">
																	<input id="articlelink" name="articlelink" type="text"
																		placeholder="Link to article"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="articlecontext">Context
																	of article</label>
																<div class="col-md-7">
																	<input id="articlecontext" name="articlecontext"
																		type="text" placeholder="Context of article"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="contactname">Contact
																	Name</label>
																<div class="col-md-7">
																	<input id="contactname" name="contactname" type="text"
																		placeholder="Contact Name" class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="contactemail">Contact
																	Email</label>
																<div class="col-md-7">
																	<input id="contactemail" name="contactemail" type="text"
																		placeholder="Contact Email"
																		class="form-control input-md">
					
																</div>
															</div>
															<!-- Button -->
															<div class="form-group">
																<label class="col-md-4 control-label" for=""></label>
																<div class="col-md-7">
																	<div class="bt-add-com contribute-submit" id="contr3"
																		name="contr1" style="background-color: #fec503;">Submit
																		request</div>
																</div>
															</div>
														</fieldset>
													</form>
					                            </div>
					                        </li>
					                        <li class="-accordion__panel">
					                            <span class="-accordion__heading">Award<i class="-icon -icon--left"></i></span>
					                            <div class="-accordion__expander">
					                            	<form class="form-horizontal" id="formform4">
														<fieldset>
					
															<!-- Form Name -->
															<legend>Award</legend>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="receivedperson">Name
																	of person receiving award</label>
																<div class="col-md-7">
																	<input id="receivedperson" name="receivedperson"
																		type="text" placeholder="Name of person receiving award"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="contactemail">Contact
																	Email</label>
																<div class="col-md-7">
																	<input id="contactemail" name="contactemail" type="text"
																		placeholder="Contact Email"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="awardreason">Reason
																	for award</label>
																<div class="col-md-7">
																	<input id="awardreason" name="awardreason" type="text"
																		placeholder="Reason for award"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="awardbody">Awarding
																	body</label>
																<div class="col-md-7">
																	<input id="awardbody" name="awardbody" type="text"
																		placeholder="Awarding body"
																		class="form-control input-md">
					
																</div>
															</div>
															<!-- Button -->
															<div class="form-group">
																<label class="col-md-4 control-label" for=""></label>
																<div class="col-md-7">
																	<div class="bt-add-com contribute-submit" id="contr4"
																		name="contr1" style="background-color: #fec503;">Submit
																					request</div>
																			</div>
																		</div>
																	</fieldset>
																</form>
					                            	
					                            </div>
					                        </li>
					                        <li class="-accordion__panel">
					                            <span class="-accordion__heading">Milestones<i class="-icon -icon--left"></i></span>
					                            <div class="-accordion__expander">
					                            	<form class="form-horizontal" id="formform5">
														<fieldset>
					
															<!-- Form Name -->
															<legend>Milestones</legend>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="milestonedesc">Description
																	of milestone achieved</label>
																<div class="col-md-7">
																	<input id="milestonedesc" name="milestonedesc"
																		type="text"
																		placeholder="Description of milestone achieved"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="projectname">Name
																	of Project (if applicable)</label>
																<div class="col-md-7">
																	<input id="projectname" name="projectname" type="text"
																		placeholder="Name of Project (if applicable)"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="milestonesigni">Significance
																	of milestone</label>
																<div class="col-md-7">
																	<input id="milestonesigni" name="milestonesigni"
																		type="text" placeholder="Significance of milestone"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="medialink">Link
																	to media mentions</label>
																<div class="col-md-7">
																	<input id="medialink" name="medialink" type="text"
																		placeholder="Link to media mentions"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="contactname">Contact
																	Name</label>
																<div class="col-md-7">
																	<input id="contactname" name="contactname" type="text"
																		placeholder="Contact Name" class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="contactemail">Contact
																	Email</label>
																<div class="col-md-7">
																	<input id="contactemail" name="contactemail" type="text"
																		placeholder="Contact Email"
																		class="form-control input-md">
					
																</div>
															</div>
															<!-- Button -->
															<div class="form-group">
																<label class="col-md-4 control-label" for=""></label>
																<div class="col-md-7">
																	<div class="bt-add-com contribute-submit" id="contr5"
																		name="contr1" style="background-color: #fec503;">Submit
																		request</div>
																</div>
															</div>
					
														</fieldset>
													</form>
					                            </div>
					                        </li>
					                        <li class="-accordion__panel">
					                            <span class="-accordion__heading">New Funding<i class="-icon -icon--left"></i></span>
					                            <div class="-accordion__expander">
					                            	<form class="form-horizontal" id="formform6">
														<fieldset>
					
															<!-- Form Name -->
															<legend>New Funding</legend>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label"
																	for="projectdescription">Project description</label>
																<div class="col-md-7">
																	<input id="projectdescription" name="projectdescription"
																		type="text" placeholder="Project description"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="awardingbody">Awarding
																	body</label>
																<div class="col-md-7">
																	<input id="awardingbody" name="awardingbody" type="text"
																		placeholder="Awarding body"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="projectdate">Start
																	date of project</label>
																<div class="col-md-7">
																	<input id="projectdate" name="projectdate" type="text"
																		placeholder="Start date of project"
																		class="form-control input-md datetimepicker" data-date-format="YYYY/MM/DD">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label"
																	for="projectduration">Duration of project</label>
																<div class="col-md-7">
																	<input id="projectduration" name="projectduration"
																		type="text" placeholder="Duration of project"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="projectfunding">Funding
																	of project</label>
																<div class="col-md-7">
																	<input id="projectfunding" name="projectfunding"
																		type="text" placeholder="Funding of project"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="contactname">Contact
																	Name</label>
																<div class="col-md-7">
																	<input id="contactname" name="contactname" type="text"
																		placeholder="Contact Name" class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="contactemail">Contact
																	Email</label>
																<div class="col-md-7">
																	<input id="contactemail" name="contactemail" type="text"
																		placeholder="Contact Email"
																		class="form-control input-md">
					
																</div>
															</div>
															<!-- Button -->
															<div class="form-group">
																<label class="col-md-4 control-label" for=""></label>
																<div class="col-md-6">
																	<div class="bt-add-com contribute-submit" id="contr6"
																		name="contr1" style="background-color: #fec503;">Submit
																		request</div>
																</div>
															</div>
					
														</fieldset>
													</form>
					                            </div>
					                        </li>
					                        <li class="-accordion__panel">
					                            <span class="-accordion__heading">Participation in Committees<i class="-icon -icon--left"></i></span>
					                            <div class="-accordion__expander">
					                            	<form class="form-horizontal" id="formform7">
														<fieldset>
					
															<!-- Form Name -->
															<legend>Participation in Committees</legend>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="committeename">Name
																	of committee</label>
																<div class="col-md-7">
																	<input id="committeename" name="committeename"
																		type="text" placeholder="Name of committee"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label"
																	for="committeeobjective">Objective of committee</label>
																<div class="col-md-7">
																	<input id="committeeobjective" name="committeeobjective"
																		type="text" placeholder="Objective of committee"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label"
																	for="participationduration">Duration of participation</label>
																<div class="col-md-7">
																	<input id="participationduration"
																		name="participationduration" type="text"
																		placeholder="Duration of participation"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="contactname">Contact
																	Name</label>
																<div class="col-md-7">
																	<input id="contactname" name="contactname" type="text"
																		placeholder="Contact Name" class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="contactemail">Contact
																	Email</label>
																<div class="col-md-7">
																	<input id="contactemail" name="contactemail" type="text"
																		placeholder="Contact Email"
																		class="form-control input-md">
					
																</div>
															</div>
															<!-- Button -->
															<div class="form-group">
																<label class="col-md-4 control-label" for=""></label>
																<div class="col-md-6">
																	<div class="bt-add-com contribute-submit" id="contr7"
																		name="contr1" style="background-color: #fec503;">Submit
																		request</div>
																</div>
															</div>
					
														</fieldset>
													</form>
					                            </div>
					                        </li>
					                        <li class="-accordion__panel">
					                            <span class="-accordion__heading">Books<i class="-icon -icon--left"></i></span>
					                            <div class="-accordion__expander">
					                            	<form class="form-horizontal" id="formform8">
														<fieldset>
					
															<!-- Form Name -->
															<legend>Books</legend>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="bookname">Name
																	of book</label>
																<div class="col-md-7">
																	<input id="bookname" name="bookname" type="text"
																		placeholder="Name of book" class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="bookdesc">Book
																	description</label>
																<div class="col-md-7">
																	<input id="bookdesc" name="bookdesc" type="text"
																		placeholder="Book description"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="publishagency">Publishing
																	agency</label>
																<div class="col-md-7">
																	<input id="publishagency" name="publishagency"
																		type="text" placeholder="Publishing agency"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label"
																	for="internalauthors">Internal authors</label>
																<div class="col-md-7">
																	<input id="internalauthors" name="internalauthors"
																		type="text" placeholder="Internal authors"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label"
																	for="externalauthors">External authors</label>
																<div class="col-md-7">
																	<input id="externalauthors" name="externalauthors"
																		type="text" placeholder="External authors"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="copies">Copies
																	printed</label>
																<div class="col-md-7">
																	<input id="copies" name="copies" type="text"
																		placeholder="Copies printed"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="ebooklink">Link
																	to e-book</label>
																<div class="col-md-7">
																	<input id="ebooklink" name="ebooklink" type="text"
																		placeholder="Link to e-book"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="contactname">Contact
																	Name</label>
																<div class="col-md-7">
																	<input id="contactname" name="contactname" type="text"
																		placeholder="Contact Name" class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="contactemail">Contact
																	Email</label>
																<div class="col-md-7">
																	<input id="contactemail" name="contactemail" type="text"
																		placeholder="Contact Email"
																		class="form-control input-md">
					
																</div>
															</div>
															<!-- Button -->
															<div class="form-group">
																<label class="col-md-4 control-label" for=""></label>
																<div class="col-md-6">
																	<div class="bt-add-com contribute-submit" id="contr8"
																		name="contr1" style="background-color: #fec503;">Submit
																		request</div>
																</div>
															</div>
					
														</fieldset>
													</form>
					                            </div>
					                        </li>
					                        <li class="-accordion__panel">
					                            <span class="-accordion__heading">Conference<i class="-icon -icon--left"></i></span>
					                            <div class="-accordion__expander">
					                            	<form class="form-horizontal" id="formform9">
														<fieldset>
					
															<!-- Form Name -->
															<legend>Conference</legend>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="confname">Name
																	of conference</label>
																<div class="col-md-7">
																	<input id="confname" name="confname" type="text"
																		placeholder="Name of conference"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="confplace">Location
																	of conference</label>
																<div class="col-md-7">
																	<input id="confplace" name="confplace" type="text"
																		placeholder="Location of conference"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="confdate">Date
																	of conference</label>
																<div class="col-md-7">
																	<input id="confdate" name="confdate" type="text"
																		placeholder="Date of conference"
																		class="form-control input-md datetimepicker" data-date-format="YYYY/MM/DD">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="facnames">Attending
																	faculty names</label>
																<div class="col-md-7">
																	<input id="facnames" name="facnames" type="text"
																		placeholder="Attending faculty names"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="stunames">Attending
																	student names</label>
																<div class="col-md-7">
																	<input id="stunames" name="stunames" type="text"
																		placeholder="Attending student names"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="presname">Name
																	of presentation</label>
																<div class="col-md-7">
																	<input id="presname" name="presname" type="text"
																		placeholder="Name of presentation"
																		class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="contactname">Contact
																	Name</label>
																<div class="col-md-7">
																	<input id="contactname" name="contactname" type="text"
																		placeholder="Contact Name" class="form-control input-md">
					
																</div>
															</div>
					
															<!-- Text input-->
															<div class="form-group">
																<label class="col-md-4 control-label" for="contactemail">Contact
																	Email</label>
																<div class="col-md-7">
																	<input id="contactemail" name="contactemail" type="text"
																		placeholder="Contact Email"
																		class="form-control input-md">
					
																</div>
															</div>
															<!-- Button -->
															<div class="form-group">
																<label class="col-md-4 control-label" for=""></label>
																<div class="col-md-6">
																	<div class="bt-add-com contribute-submit" id="contr9"
																		name="contr1" style="background-color: #fec503;">Submit
																		request</div>
																</div>
															</div>
					
														</fieldset>
													</form>
					                            </div>
					                        </li>
					                    </ul>
					                </div>
								</div>
							</div>
							<button type="button" class="btn btn-primary"
								data-dismiss="modal">
								<i class="fa fa-times"></i> Close
							</button>
							<br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Portfolio Modal 2 -->
	<div class="portfolio-modal modal fade" id="portfolioModal2"
		tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<h2>Project Heading</h2>
							<p class="item-intro text-muted">Lorem ipsum dolor sit amet
								consectetur.</p>
							<img class="img-responsive img-centered"
								src="../img/portfolio/startup-framework-preview.png" alt="">
							<p>
								<a href="http://designmodo.com/startup/?u=787">Startup Framework</a>
								is a website builder for professionals. Startup Framework
								contains components and complex blocks (PSD+HTML Bootstrap
								themes and templates) which can easily be integrated into almost
								any design. All of these components are made in the same style,
								and can easily be integrated into projects, allowing you to
								create hundreds of solutions for your future projects.
							</p>
							<p>
								You can preview Startup Framework <a
									href="http://designmodo.com/startup/?u=787">here</a>.
							</p>

							<div class="cmt-container" style="width: 50%;">
								    <?php
												$id_post = "2"; // the post or the page id
												$sql = mysql_query ( "SELECT * FROM comments where id_post = '$id_post'" ) or die ( mysql_error () );
												;
												while ( $affcom = mysql_fetch_assoc ( $sql ) ) {
													$name = $affcom ['name'];
													$email = $affcom ['email'];
													$comment = $affcom ['comment'];
													$date = $affcom ['date'];

													// Get gravatar Image
													// https://fr.gravatar.com/site/implement/images/php/
													$default = "mm";
													$size = 35;
													// $grav_url = "http://www.gravatar.com/avatar/".md5(strtolower(trim($email)))."?d=".$default."&s=".$size;

													?>
								    <div class="cmt-cnt">

									<div class="thecom">
										<h5><?php echo $name; ?></h5>
										<span data-utime="1371248446" class="com-dt"><?php echo $date; ?></span>
										<br />
										<p>
								                <?php echo $comment; ?>
								            </p>
									</div>
								</div>
								<!-- end "cmt-cnt" -->
								    <?php } ?>


								    <div class="new-com-bt" id="comDiv<?php echo $id_post;?>">
									<span>Write a comment ...</span>
								</div>
								<div class="new-com-cnt">

									<textarea class="the-new-com"
										id="comment<?php echo $id_post;?>"></textarea>
									<div class="bt-add-com" id="button<?php echo $id_post;?>">Post
										comment</div>
									<div class="bt-cancel-com">Cancel</div>
								</div>
								<div class="clear"></div>
							</div>
							<!-- end of comments container "cmt-container" -->



							<button type="button" class="btn btn-primary"
								data-dismiss="modal">
								<i class="fa fa-times"></i> Close Project
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Portfolio Modal 3 -->
	<div class="portfolio-modal modal fade" id="portfolioModal3"
		tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							<h2>Project Name</h2>
							<p class="item-intro text-muted">Lorem ipsum dolor sit amet
								consectetur.</p>
							<img class="img-responsive img-centered"
								src="../img/portfolio/treehouse-preview.png" alt="">
							<p>
								Treehouse is a free PSD web template built by <a
									href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>.
								This is bright and spacious design perfect for people or startup
								companies looking to showcase their apps or other projects.
							</p>
							<p>
								You can download the PSD template in this portfolio sample item
								at <a
									href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.
							</p>

							<div class="cmt-container" style="width: 50%;">
								    <?php
												$id_post = "3"; // the post or the page id
												$sql = mysql_query ( "SELECT * FROM comments where id_post = '$id_post'" ) or die ( mysql_error () );
												;
												while ( $affcom = mysql_fetch_assoc ( $sql ) ) {
													$name = $affcom ['name'];
													$email = $affcom ['email'];
													$comment = $affcom ['comment'];
													$date = $affcom ['date'];

													// Get gravatar Image
													// https://fr.gravatar.com/site/implement/images/php/
													$default = "mm";
													$size = 35;
													// $grav_url = "http://www.gravatar.com/avatar/".md5(strtolower(trim($email)))."?d=".$default."&s=".$size;

													?>
								    <div class="cmt-cnt">

									<div class="thecom">
										<h5><?php echo $name; ?></h5>
										<span data-utime="1371248446" class="com-dt"><?php echo $date; ?></span>
										<br />
										<p>
								                <?php echo $comment; ?>
								            </p>
									</div>
								</div>
								<!-- end "cmt-cnt" -->
								    <?php } ?>


								    <div class="new-com-bt" id="comDiv<?php echo $id_post;?>">
									<span>Write a comment ...</span>
								</div>
								<div class="new-com-cnt">

									<textarea class="the-new-com"
										id="comment<?php echo $id_post;?>"></textarea>
									<div class="bt-add-com" id="button<?php echo $id_post;?>">Post
										comment</div>
									<div class="bt-cancel-com">Cancel</div>
								</div>
								<div class="clear"></div>
							</div>
							<!-- end of comments container "cmt-container" -->

							<button type="button" class="btn btn-primary"
								data-dismiss="modal">
								<i class="fa fa-times"></i> Close Project
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Education Modal 1 -->
	<div class="portfolio-modal modal fade" id="educationModal1"
		tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							<h2>Faculty Research Handbook</h2>
							<p class="item-intro text-muted">Lorem ipsum dolor sit amet
								consectetur.</p>

							<div class="col-lg-12 text-center" style="width: 100%;">

								<object data="../sample.pdf" type="application/pdf" width="100%"
									height="600">
									<p>
										Alternative text - include a link <a href="sample.pdf">to the
											PDF!</a>
									</p>
								</object>


								<div class="cmt-container" style="width: 50%;">
								    <?php
												$id_post = "7"; // the post or the page id
												$sql = mysql_query ( "SELECT * FROM comments where id_post = '$id_post'" ) or die ( mysql_error () );
												;
												while ( $affcom = mysql_fetch_assoc ( $sql ) ) {
													$name = $affcom ['name'];
													$email = $affcom ['email'];
													$comment = $affcom ['comment'];
													$date = $affcom ['date'];

													// Get gravatar Image
													// https://fr.gravatar.com/site/implement/images/php/
													$default = "mm";
													$size = 35;
													// $grav_url = "http://www.gravatar.com/avatar/".md5(strtolower(trim($email)))."?d=".$default."&s=".$size;

													?>
								    <div class="cmt-cnt">

										<div class="thecom">
											<h5><?php echo $name; ?></h5>
											<span data-utime="1371248446" class="com-dt"><?php echo $date; ?></span>
											<br />
											<p>
								                <?php echo $comment; ?>
								            </p>
										</div>
									</div>
									<!-- end "cmt-cnt" -->
								    <?php } ?>


								    <div class="new-com-bt" id="comDiv<?php echo $id_post;?>">
										<span>Write a comment ...</span>
									</div>
									<div class="new-com-cnt">

										<textarea class="the-new-com"
											id="comment<?php echo $id_post;?>"></textarea>
										<div class="bt-add-com" id="button<?php echo $id_post;?>">Post
											comment</div>
										<div class="bt-cancel-com">Cancel</div>
									</div>
									<div class="clear"></div>
								</div>
								<!-- end of comments container "cmt-container" -->



							</div>


							<button type="button" class="btn btn-primary"
								data-dismiss="modal">
								<i class="fa fa-times"></i> Close Project
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Education Modal 2 -->
	<div class="portfolio-modal modal fade" id="educationModal2"
		tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							<h2>Research Center Handbook</h2>
							<p class="item-intro text-muted">Lorem ipsum dolor sit amet
								consectetur.</p>

							<div class="col-lg-12 text-center">

								<object data="../sample.pdf" type="application/pdf" width="100%"
									height="600">
									<p>
										Alternative text - include a link <a href="sample.pdf">to the
											PDF!</a>
									</p>
								</object>


								<div class="cmt-container" style="width: 50%;">
								    <?php
												$id_post = "8"; // the post or the page id
												$sql = mysql_query ( "SELECT * FROM comments where id_post = '$id_post'" ) or die ( mysql_error () );
												;
												while ( $affcom = mysql_fetch_assoc ( $sql ) ) {
													$name = $affcom['name'];
								        $email = $affcom['email'];
								        $comment = $affcom['comment'];
								        $date = $affcom['date'];

								        // Get gravatar Image
								        // https://fr.gravatar.com/site/implement/images/php/
								        $default = "mm";
								        $size = 35;
								        //$grav_url = "http://www.gravatar.com/avatar/".md5(strtolower(trim($email)))."?d=".$default."&s=".$size;

								    ?>
								    <div class="cmt-cnt">

										<div class="thecom">
											<h5><?php echo $name; ?></h5>
											<span data-utime="1371248446" class="com-dt"><?php echo $date; ?></span>
											<br />
											<p>
								                <?php echo $comment; ?>
								            </p>
										</div>
									</div>
									<!-- end "cmt-cnt" -->
								    <?php } ?>


								    <div class="new-com-bt" id="comDiv<?php echo $id_post;?>">
										<span>Write a comment ...</span>
									</div>
									<div class="new-com-cnt">

										<textarea class="the-new-com"
											id="comment<?php echo $id_post;?>"></textarea>
										<div class="bt-add-com" id="button<?php echo $id_post;?>">Post
											comment</div>
										<div class="bt-cancel-com">Cancel</div>
									</div>
									<div class="clear"></div>
								</div>
								<!-- end of comments container "cmt-container" -->



							</div>


							<button type="button" class="btn btn-primary"
								data-dismiss="modal">
								<i class="fa fa-times"></i> Close Project
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Education Modal 3 -->
	<div class="portfolio-modal modal fade" id="educationModal3"
		tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							<h2>Research Student Handbook</h2>
							<p class="item-intro text-muted">Lorem ipsum dolor sit amet
								consectetur.</p>

							<div class="col-lg-12 text-center">

								<object data="../sample.pdf" type="application/pdf" width="100%"
									height="600">
									<p>
										Alternative text - include a link <a href="sample.pdf">to the
											PDF!</a>
									</p>
								</object>


								<div class="cmt-container" style="width: 50%;">
								    <?php
								    $id_post = "9"; //the post or the page id
								    $sql = mysql_query("SELECT * FROM comments where id_post = '$id_post'") or die(mysql_error());;
								    while($affcom = mysql_fetch_assoc($sql)){
								        $name = $affcom['name'];
								        $email = $affcom['email'];
								        $comment = $affcom['comment'];
								        $date = $affcom['date'];

								        // Get gravatar Image
								        // https://fr.gravatar.com/site/implement/images/php/
								        $default = "mm";
								        $size = 35;
								        //$grav_url = "http://www.gravatar.com/avatar/".md5(strtolower(trim($email)))."?d=".$default."&s=".$size;

								    ?>
								    <div class="cmt-cnt">

										<div class="thecom">
											<h5><?php echo $name; ?></h5>
											<span data-utime="1371248446" class="com-dt"><?php echo $date; ?></span>
											<br />
											<p>
								                <?php echo $comment; ?>
								            </p>
										</div>
									</div>
									<!-- end "cmt-cnt" -->
								    <?php } ?>


								    <div class="new-com-bt" id="comDiv<?php echo $id_post;?>">
										<span>Write a comment ...</span>
									</div>
									<div class="new-com-cnt">

										<textarea class="the-new-com"
											id="comment<?php echo $id_post;?>"></textarea>
										<div class="bt-add-com" id="button<?php echo $id_post;?>">Post
											comment</div>
										<div class="bt-cancel-com">Cancel</div>
									</div>
									<div class="clear"></div>
								</div>
								<!-- end of comments container "cmt-container" -->
							</div>
							<button type="button" class="btn btn-primary"
								data-dismiss="modal">
								<i class="fa fa-times"></i> Close Project
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!---------------------- Alert Modal ---------------->
	<div class="modal fade" id="alertModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title">Contribution</h4>
				</div>
				<div class="modal-body" id="alertModalBody"></div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->


	<!-- jQuery Version 1.11.0 -->
	<script src="../js/jquery-1.11.0.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery-ui.js"></script>

	<!-- Plugin JavaScript -->
	<script src="../js//jquery.easing.min.js"></script>
	<script src="../js/classie.js"></script>
	<script src="../js/cbpAnimatedHeader.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="../js/agency.js"></script>

	<script src="../js/moment.js"></script>
	<script src="../js/bootstrap-datetimepicker.js"></script>
	
  	<script src="../js/jquery.ui.widget.js"></script>
  	<script src="../js/jquery.iframe-transport.js"></script>
  	<script src="../js/jquery.fileupload.js"></script>
  	<script src="../js/easyResponsiveTabs.js"></script>

<!--   	<script src="../js/jquery.toc.min.js"></script> -->
	<script src="../js/prism.js"></script>
	<script src="../js/jquery-asAccordion.js"></script>
  	<script src="../js/jquery.blockUI.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {

			var menu = $('#logo');
			var origOffsetY = menu.offset().top;
			origOffsetY = 200;
			function scroll() {
				var windowscroll = $(window).scrollTop();
				//console.log("OrigOffSetY : "+origOffsetY +", windowscroll : "+windowscroll);
				if (windowscroll >= origOffsetY) {
					$('#logo').height(30).width(30);
			        //menu.animate({width: "40px", height: "40px"}, 1000);

				} else {
					$('#logo').height(100).width(100);
			       // menu.animate({width: "100px", height: "100px"}, 1000);
				}

			}
			document.onscroll = scroll;

			$('.-accordion').asAccordion({
                namespace: '-accordion'
            });
		});
	</script>
	<script type="text/javascript">
	   $(function(){
	        //alert(event.timeStamp);

	        $(document).ready(function(){
		        $('.form-class').hide();
	        });
	        $('.new-com-bt').click(function(event){
	            $(this).hide();
	            $('.new-com-cnt').show();
	            //$('.new-com-cnt').focus();
	            $('.the-new-com').focus();
	           // $('#name-com').focus();
	        });

	        /* when start writing the comment activate the "add" button */
	        $('.the-new-com').bind('input propertychange', function() {
	           $(".bt-add-com").css({opacity:0.6});
	           var checklength = $(this).val().length;
	           if(checklength){ $(".bt-add-com").css({opacity:1}); }
	        });

	        /* on clic  on the cancel button */
	        $('.bt-cancel-com').click(function(){
	            $('.the-new-com').val('');
	            $('.new-com-cnt').fadeOut('fast', function(){
	                $('.new-com-bt').fadeIn('fast');
	            });
	        });

	        // on post comment click
	        $('div[id^="button"]').click(function(){

	        	//console.log(this);
		        var text = this.id;
				var commentWidgetNumber = parseInt(text.match(/\d+/)[0], 10);

				var i=1;
	            var theCom = $('.the-new-com#comment'+commentWidgetNumber);
	            var theName = $('#name-com');
	            var theMail = $('#mail-com');
	            if( !theCom.val()){
	                alert('You need to write a comment!');
	            }else{
	                $.ajax({
	                    type: "POST",
	                    url: "../ajax/add-comment.php",
	                    data: 'act=add-com&idpost='+commentWidgetNumber+'&name='+theName.val()+'&email='+theMail.val()+'&comment='+theCom.val(),
	                    success: function(html){
	                        theCom.val('');
	                        $('.new-com-cnt').hide('fast', function(){
	                            $('.new-com-bt').show('fast');
								if(i==1){
								    $('.new-com-bt#comDiv'+commentWidgetNumber).before(html);
								    i++;
								}
	                        })
	                    }
	                });
	            }
	        });

	        $('.btn-default').click(function(){
	        	var text = this.id;
				var clickedButtonNumber = parseInt(text.match(/\d+/)[0], 10);
				$('.form-class').hide();
				$('.header').hide();
		        $('.form-class#form'+clickedButtonNumber).show();
	        });

	        $('.contribute-submit').click(function(){
	        	var text = this.id;
				var clickedButtonNumber = parseInt(text.match(/\d+/)[0], 10);

				$.blockUI({ css: { 
		            border: 'none', 
		            padding: '15px', 
		            backgroundColor: '#000', 
		            '-webkit-border-radius': '10px', 
		            '-moz-border-radius': '10px', 
		            opacity: .5, 
		            color: '#fff' 
		        } }); 
				
				var div = $('#formform'+clickedButtonNumber);
				var serializeString = div.serialize();
				div.find("input[type=text], textarea").val("");

	        	 $.ajax({
	                    type: "POST",
	                    url: "../ajax/contr"+clickedButtonNumber+".php",
	                    data: 'act=contr'+clickedButtonNumber+'&idpost='+clickedButtonNumber+'&'+serializeString,
	                    success: function(html){

	                    	$('.body').addClass('overlay');

	                        //alert(html);
	                        div.empty();
	                        //div.html(html);

	                        //$('#alertModalBody').html(html);
	                        //$('#alertModal').modal('show');
	                        div.delay(20000);
	                        div.slideUp( 300 ).delay( 8000 ).fadeIn( 400 );
	                        setTimeout(function() {
	                            $("#portfolioModal1").delay(20000).hide();
	                        }, 5000);
	     		        	//$("#portfolioModal1").modal('hide');
	     		        	location.reload();

	                    }
	                });
	        });


	        $('.request-submit').click(function(){
	        	var text = this.id;
				var clickedButtonNumber = parseInt(text.match(/\d+/)[0], 10);
				
				$.blockUI({ css: { 
		            border: 'none', 
		            padding: '15px', 
		            backgroundColor: '#000', 
		            '-webkit-border-radius': '10px', 
		            '-moz-border-radius': '10px', 
		            opacity: .5, 
		            color: '#fff' 
		        } }); 
				
				var ulelm = $('#files'+clickedButtonNumber);
				var div = $('#reqform'+clickedButtonNumber);
				var serializeString = div.serialize()+'&files='+ulelm.val();
				div.find("input[type=text], textarea, ul").val("");
				div.find("ul").text("");

				
	        	 $.ajax({
	                    type: "POST",
	                    url: "../ajax/req"+clickedButtonNumber+".php",
	                    data: 'act=req'+clickedButtonNumber+'&idpost='+clickedButtonNumber+'&'+serializeString,
	                    success: function(html){

	                    	$('.body').addClass('overlay');
	                    	$.unblockUI();
	                        //alert(html);
	                        //div.empty();
	                        //div.html(html);

	                        //$('#alertModalBody').html(html);
	                        //$('#alertModal').modal('show');
	                        //div.delay(20000);
	                        //div.slideUp( 300 ).delay( 8000 ).fadeIn( 400 );
	     		        	//location.reload();

	                    }
	                });
	        });

	    });

	$(function(){
		//$("#confdate").datetimepicker();
		$(".datetimepicker").datetimepicker({
				pickTime: false
		});
	});

	$('#requestsTab').easyResponsiveTabs({
        type: 'vertical',
        width: 'auto',
        fit: true
    });

    // When the server is ready...
    $(function () {
        'use strict';
        
        // Define the url to send the image data to
        var url = 'files.php';
        
        // Call the fileupload widget and set some parameters
        $('input[id^="fileupload"]').fileupload({
            url: url,
            dataType: 'json',
            done: function (e, data) {

            	var text = this.id;
				var clickedButtonNumber = parseInt(text.match(/\d+/)[0], 10);
                
                // Add each uploaded file name to the #files list
                $.each(data.result.files, function (index, file) {
                    $('#files'+clickedButtonNumber).val(file.name);
                	$('#files'+clickedButtonNumber).text(file.name);
                });
            },
            progressall: function (e, data) {
                // Update the progress bar while files are being uploaded
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#progress .bar').css(
                    'width',
                    progress + '%'
                );
            }
        });
    });
    
  </script>
</body>

</html>
