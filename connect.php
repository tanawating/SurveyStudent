<?php
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "datamining";

	$con = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    $con->set_charset("utf8");
?>
