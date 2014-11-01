<?php
$mysql_host = "localhost";
$mysql_database = "test";
$mysql_user = "root";
$mysql_password = "root";

$fromEmail = "sanasri87@gmail.com";

mysql_connect($mysql_host,$mysql_user,$mysql_password);
mysql_select_db($mysql_database); 


function getUserName($fname) {
	$result = mysql_query ( "SELECT username FROM users WHERE uid='$fname'" );
	$count = mysql_num_rows ( $result );
	$row = mysql_fetch_array ( $result, MYSQL_ASSOC );
	return $row['username'];
}
function getEmailId($fname) {
	$result = mysql_query ( "SELECT email FROM users WHERE uid='$fname'" );
	$count = mysql_num_rows ( $result );
	$row = mysql_fetch_array ( $result, MYSQL_ASSOC );
	return $row['email'];
}
function getAchievement($ach_id){
	$result = mysql_query ( "SELECT * FROM ach_config WHERE id='$ach_id'" );
	$count = mysql_num_rows ( $result );
	$row = mysql_fetch_array ( $result, MYSQL_ASSOC );
	return $row;
}
function getRequest($ach_id){
	$result = mysql_query ( "SELECT * FROM req_config WHERE id='$ach_id'" );
	$count = mysql_num_rows ( $result );
	$row = mysql_fetch_array ( $result, MYSQL_ASSOC );
	return $row;
}

?>