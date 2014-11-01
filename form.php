
<html lang="en">
<head>
<meta charset="utf-8">
<title>Bootstrap Form Builder</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/comments.css" rel="stylesheet">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
	<div class="container">

		<div class="detailBox">
			<div class="titleBox">
				<label>Comment Box</label>
				<button type="button" class="close" aria-hidden="true">&times;</button>
			</div>
			<div class="commentBox">

				<p class="taskDescription">Lorem Ipsum is simply dummy text of
					the printing and typesetting industry.</p>
			</div>
			<div class="actionBox">
				<ul class="commentList">
					<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="guestbook"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect server "); 
mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
while($rows=mysql_fetch_array($result)){
?>

					<li>
						<div class="">
							<h4><?php echo $rows['name']; ?></h4>
						</div>
						<div class="commentText">
							<p class=""><?php echo $rows['comment']; ?></p>
							<span class="date sub-text"><?php echo $rows['datetime']; ?></span>

						</div>
					</li>
					<?php
}
mysql_close(); //close database
?>
				</ul>
				<form class="form-inline" role="form" action="commentsave.php" method="post">
					<div class="form-group">
						<input class="form-control" type="text" name="comment"
							placeholder="Your comments" />
					</div>
					<div class="form-group">
						<button class="btn btn-default" onclick="test();">Add</button>
					</div>
				</form>
			</div>
		</div>



	</div>
	<!-- /container -->
	<script type="text/javascript">
		$('.commentList').scrollTop($('.commentList')[0].scrollHeight);

		function test(){
			var variable = $(".form-control");
			alert(variable.val());
		}
	</script>
</body>
</html>