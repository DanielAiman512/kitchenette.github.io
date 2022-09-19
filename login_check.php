<?php

include 'db_connect.php';
session_start(); 							//session_start(); 							

$staffId = $_POST['staffId']; 					// assign textbox to variable
$pass = $_POST['psw'];

$query = "SELECT * FROM staff where STAFF_ID='$staffId' AND PASSWORD='$pass'"; 
$result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking
 if(mysqli_num_rows($result) <= 0)   			// check either result found or not
	   {
	   header("location:pageStaffLogin.php");			// redirect to another page (data not found!)
	   }
	   else
	   {
		$info = mysqli_fetch_array($result); 	// returns a row from a recordset
	    $_SESSION['name']=$info['STAFF_NAME'];	// assign field in username to session [user]	   
		header("location:pageStaff.php");
	   }
mysqli_close($link);
?>