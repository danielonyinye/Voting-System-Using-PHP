<?php

//sessions
session_start();

//connect to database



$conn = mysqli_connect("localhost", "root", "") or die();
mysqli_select_db($conn, "voting_db") or die();

//login check function

function loggedin()
{
	global $loggedin; //$loggedin defined as a global variable to solve the undefined variable $loggedin on line 20
	if (isset($_SESSION['username']) || isset($_COOKIE['username']))
		$loggedin = TRUE;
		return $loggedin;
}




?>