<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass ="123";
$dbname ="login_sample_db";

if(!$con = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname)){
	die("failed to connect");
}

?>