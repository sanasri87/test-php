<?php
include ('../config.php');


session_start ();
if (isset ( $_POST ['username'] ) && isset ( $_POST ['password'] )) {
	// username and password sent from Form
	
	//$db = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) OR die(mysql_error());
	
	$username = $_POST ['username'];
	// Here converting passsword into MD5 encryption.
	$password = $_POST ['password'];
	
	$result = mysql_query ( "SELECT uid FROM users WHERE username='$username' and password='$password'" );

	$count = mysql_num_rows ( $result );
	
	$row = mysql_fetch_array ( $result, MYSQL_ASSOC );
	// If result matched $username and $password, table row must be 1 row
	if ($count == 1) {
		$_SESSION ['login_user'] = $row ['uid']; // Storing user session value.
		echo $row ['uid'];
		//header('Location: home.php');
	}
	
}

?>


