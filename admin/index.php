<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>RnD Internal Login</title>

<!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">

<link href="../css/login.css" rel="stylesheet">
<link href="../css/comments.css" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="../css/style.css">
<link type="text/css" rel="stylesheet" href="../css/example.css">


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


<!-- Custom CSS -->
<link href="../css/agency.css" rel="stylesheet">

<link rel="stylesheet" href="css/style.css" />


<style type="text/css">
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
if(empty($_SESSION['admin_user']))
{
	//header('Location: index.php');
}else{
	header('Location: main.php');
}


?>
<body id="page-top" >
	<!---------------------- Login Modal ---------------->
	<div class="modal fade popup" id="loginModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" style="text-align: center;">IIIT RnD : Admin Login</h4>
				</div>
				<div class="modal-body" id="alertModalBody">
					<div id="box">
						<form action="" method="post">
							<label>Username</label> <input type="text" name="username"
								class="input" autocomplete="off" id="username" value="test"> 
							<label>Password</label><input type="password" name="password" class="input"
								autocomplete="off" id="password" value="test">
							<br> 
							<div class="bt-add-com" id="login">Login</div>
							<br>
							<span class="msg"></span>

							<div style="font-size: 12px; margin-top: 10px" id="error"></div>

						</form>
					</div>
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

	<!-- Custom Theme JavaScript -->
	<script src="../js/agency.js"></script>
	<script src="js/jquery.ui.shake.js"></script>
	<script>
	$(document).ready(function() {
		$('#loginModal').modal('show');
		$('#loginModal').on('hidden.bs.modal', function () {
			window.location = '../';
		});
		$('#login').click(function()
		{
			var username=$("#username").val();
			var password=$("#password").val();
		    var dataString = 'username='+username+'&password='+password;
			if($.trim(username).length>0 && $.trim(password).length>0)
			{
				$('#login').html('Connecting...');
							
				 $.ajax({
	                    type: "POST",
	                    url: "ajaxLogin.php",
	                     data: dataString,
	                    success: function(response){
	                    	if($.trim(response).length>0){
	                        	$("body").load("main.php");//.hide().fadeIn(500).delay(6000);
	                        	$("title").html("IIIT R&amp;D Admin");
	                        	//window.location = 'main.php';
	                        }
	                        else{
	                         	$('#box').shake();
	                         	$("#login").html('Login');
	            			 	$("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username and password. ");
	                        }
	                    },
	                    fail: function(e){
	    					 $("#login").html('Login');
	                    	 $('#box').shake();
	    					 $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username and password. ");
	                    }  
	                });

			}
			return false;
		});
	});
	</script>

</body>
</html>