
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

<!-- Custom CSS -->
<link href="../css/agency.css" rel="stylesheet">

<link href="../css/login.css" rel="stylesheet">
<link href="../css/comments.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="../font-awesome-4.1.0/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">
<link href='../js/googlefonts/droid.serif.css'
	rel='stylesheet' type='text/css'>
<link href='../js/googlefonts/kaushan.script.css'
	rel='stylesheet' type='text/css'>
<link href="../js/googlefonts/montserrat.css"
	rel="stylesheet" type="text/css">
<link href='../js/googlefonts/roboto.slab.css'
	rel='stylesheet' type='text/css'>
	
	
<link type="text/css" rel="stylesheet" href="../css/style.css">
<link type="text/css" rel="stylesheet" href="../css/example.css">
<link type="text/css" rel="stylesheet" href="css/style.css">

<!-- <script src="http://code.jquery.com/jquery-1.10.2.js"></script> -->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?php
include ('../config.php');
session_start();
if(empty($_SESSION['admin_user']))
{
	header('Location: index.php');
}
$loggedInUser = getUserName($_SESSION['admin_user']);
$loggedInUserEmail = getEmailId($_SESSION['admin_user']);
?>

<body id="page-top" class="index">

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
					<li><a class="page-scroll" href="#achievements">Achievements</a></li>
					<li><a class="page-scroll" href="#requests">Requests</a></li>
					<li><a class="page-scroll" href="logout.php">Logout</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<!-- Header -->
	<header style="background-image: url(../img/header-bg3.jpg);">
		<div class="container">
			<div class="intro-text">
				<div class="intro-lead-in">Welcome to the R&D Portal.</div>
				<div class="intro-heading">Let's Push the Boundaries</div>
				<a href="#achievements" class="page-scroll btn btn-xl">How we can help </a>
			</div>
		</div>
	</header>

	<!-- Services Section -->
	<section id="achievements" class="bg-light-grey">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Configure Achievements</h2>
					<h3 class="section-subheading text-muted"></h3>
				</div>
			</div>
			<div class="row">
				<div class="as_wrapper">
					<h1 class="h1">
						<a href=""></a>
					</h1>
					<div class="as_grid_container">
						<div class="as_gridder" id="as_gridder1"></div>
						<!-- GRID LOADER -->
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Services Section -->
	<section id="requests"  class="bg-light-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Configure Requests</h2>
					<h3 class="section-subheading text-muted"></h3>
				</div>
			</div>
			<div class="row">
				<div class="as_wrapper">
					<h1 class="h1">
						<a href=""></a>
					</h1>
					<div class="as_grid_container">
						<div class="as_gridder" id="as_gridder2"></div>
						<!-- GRID LOADER -->
					</div>
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
				</div>
			</div>
		</div>
	</footer>



	<!-- jQuery Version 1.11.0 -->
	<script src="../js/jquery-1.11.0.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../js/bootstrap.min.js"></script>

	<!-- Plugin JavaScript -->
	<script	src="../js/jquery.easing.min.js"></script>
	<script src="../js/classie.js"></script>
	<script src="../js/cbpAnimatedHeader.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="../js/agency.js"></script>

	<script type="text/javascript"
		src="../js/jquery-ui.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			var menu = $('#logo');
			var origOffsetY = menu.offset().top;
			origOffsetY = 1000;
			function scroll() {
				if ($(window).scrollTop() >= origOffsetY) {
					$('#logo').height(30).width(30);
				} else {
					$('#logo').height(100).width(100);
				}
			}
			document.onscroll = scroll;
		});

		$(function(){
			
			// Function for load the grid
			function LoadGrid() {
				var gridder = $('.as_gridder');
				var UrlToPass = 'action=load';

				$.each(gridder, function( index, value ) {
					  //alert( index + ": " + value );
					var text = value.id;
					var widgetNumber = parseInt(text.match(/\d+/)[0], 10);
					$('#'+text).html('loading..');
					$.ajax({
						url : 'ajax'+widgetNumber+'.php',
						type : 'POST',
						data : UrlToPass,
						success: function(responseText) {
							$('#'+text).html(responseText);
						}
					});
				});
				
				
			}
			
			LoadGrid(); // Load the grid on page loads
			
			
			// Show the text box on click
			$('body').delegate('.editable', 'click', function(){
				var ThisElement = $(this);
				ThisElement.find('span').hide();
				var elem = ThisElement.find('.gridder_input');
				var strLength = elem.val().length;
				elem.show().focus();
				elem[0].setSelectionRange(strLength, strLength);
			});
			
			// Pass and save the textbox values on blur function
			$('body').delegate('.gridder_input', 'blur', function(){
				var ThisElement = $(this);
				ThisElement.hide();
				ThisElement.prev('span').show().html($(this).val()).prop('title', $(this).val());
				var widgets = $(this).closest(".as_gridder");
				var parentId = widgets[0];
				var elm = '';
				var widgetNumber = parseInt(parentId.id.match(/\d+/)[0], 10);
				var UrlToPass = 'action=update&value='+ThisElement.val()+'&crypto='+ThisElement.prop('name');
				$.ajax({
					url : 'ajax'+widgetNumber+'.php',
					type : 'POST',
					data : UrlToPass
				});
			});
			
			// Same as the above blur() when user hits the 'Enter' key
			$('body').delegate('.gridder_input', 'keypress', function(e){
				if(e.keyCode == '13') {
					var ThisElement = $(this);
					ThisElement.hide();
					ThisElement.prev('span').show().html($(this).val()).prop('title', $(this).val());
					var widgets = $(this).closest(".as_gridder");
					var parentId = widgets[0];
					var elm = '';
					var widgetNumber = parseInt(parentId.id.match(/\d+/)[0], 10);
					var UrlToPass = 'action=update&value='+ThisElement.val()+'&crypto='+ThisElement.prop('name');
					if(ThisElement.hasClass('datepicker')) {
						return false;
					}
					$.ajax({
						url : 'ajax'+widgetNumber+'.php',
						type : 'POST',
						data : UrlToPass
					});
				}
			});
			
			
		});
	</script>
</body>

</html>
