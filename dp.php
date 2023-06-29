<?php
// Create connection 
$con = mysqli_connect('localhost', 'adminprax4', 'admin', 'prax4');

// Check connection
if (mysqli_connect_errno()) {
	die("Not connected: " . mysqli_connect_error());	
}

// Select correct database
mysqli_select_db($con, 'prax4');
?>


