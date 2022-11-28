<?php

/*Session*/
session_start();

/*DATABASE CREDENTIALS*/
define("DB_HOST", 'localhost');
define("DB_USER", 'root');
define("DB_PASS", '');
define("DB_TABLE", 'user_db');

$conn = mysqli_connect(DB_HOST , DB_USER , DB_PASS , DB_TABLE);
/*Check Connection*/
if (!$conn) 
{
	die("Connection failed: " . mysqli_connect_error());
}

?>