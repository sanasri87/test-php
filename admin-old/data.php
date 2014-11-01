<?php
//connection String
$connect = mysql_connect($hostname, $username, $password)
or die('Could not connect: ' . mysql_error());
//The code example below sets the Northwind Database as active on the server. Every subsequent call to mysql_query() will be made on this database.
//Select The database
$bool = mysql_select_db($database, $connect);
if ($bool === False){
	print "can't find $database";
}