<!DOCTYPE html>
<?php 
//Connection to database 
include 'db_connect.php';
$query="Select * from staff order by  STAFF_ID Asc";
$result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking
?>
<?php 
//Connection to database 
include 'db_connect.php';
$query="Select * from order_detail order by  ORDER_ID Asc";
$result2 = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking
?>
<html>
<head>
<title>Staff Detail</title>
<link rel="icon" type="image/x-icon" href="logo3.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: 50% 100%;
  background-image: url("kitchenHeader.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="index.php" class="w3-bar-item w3-button w3-wide" src="logo3.png" >LUXE HOMES</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="index.php#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="index.php#team" class="w3-bar-item w3-button"><i class="fa fa-users"></i> TEAM</a>
      <a href="index.php#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> DESIGN</a>
	  <a href="index.php#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
	  <a href="pagePurchases.php" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PURCHASE</a>
	  <a href="pageStaffLogin.php" class="w3-bar-item w3-button"><i class="fa fa-user-circle-o"></i> STAFF</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="index.php#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="index.php#work" onclick="w3_close()" class="w3-bar-item w3-button">DESIGN</a>
  <a href="index.php#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  <a href="pagePurchases.php" onclick="w3_close()" class="w3-bar-item w3-button">PURCHASE</a>
  <a href="pageStaffLogin.php" onclick="w3_close()" class="w3-bar-item w3-button">STAFF</a>
</nav>

<div class="w3-container" style="padding:128px 16px" id="about">
  <h1 class="w3-center">List of Staff</h1>
  <form action="pageStaffLogin.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Staff</h1>
    <p>This is the list of staff that already register.</p>
    <hr>

    <table width="500" border="1"> 
	<tr>
		<td><b>STAFF_ID</td> </b>
		<td><b>STAFF_NAME</td> </b>
		<td><b>STAFF_PHONE_NUM</td> </b>
		<td> </td>
		<td> </td>
	</tr>
	<?php 
	while($row = mysqli_fetch_array($result)){ ?>
	<tr>
		<td><?php echo $row['STAFF_ID'];?></td>
		<td><?php echo $row['STAFF_NAME'];?></td>
		<td><?php echo $row['STAFF_PHONE_NUM'];?></td>
		<td><div align="center"><a href="pageEditStaff.php?user_id=<?php print ($row['STAFF_ID']);?>">edit</a></div></td>
		<td><div align="center"><a href="pageDeleteSuccess.php?user_id=<?php print ($row['STAFF_ID']);?>">delete </a></div></td>
	</tr>
	<?php
     }
	 ?>
	</table>
	
    <div class="clearfix">
      <button type="button" class="cancelbtn"><a href="index.php" style="text-decoration: none;">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
	<span class="psw">Already register? <a href="staffLogin.php"> Login</a></span>
  </div>
</form>

<div class="w3-container" style="padding:128px 16px" id="about">
  <h1 class="w3-center">Search Staff</h1>
  <form action="pageSearchAction.php" method="post" style="border:1px solid #ccc">
  <div class="container">
	
	<label for="search"><b>Search Staff Name</b></label>
	<input name="txtSearch" type="text" id="txtSearch" placeholder="Enter Staff Name">
    
    <div class="clearfix">
      <button type="submit" class="signupbtn">Search</button>
    </div>
</form>
  
</div>

<div class="w3-container" style="padding:128px 16px" id="about">
  <h1 class="w3-center">LIST OF CUSTOMERS PURCHASE</h1>
  <form action="pageSearchAction.php" method="post" style="border:1px solid #ccc">
  <div class="container">
	
	<table width="500" border="1"> 
	<tr> 
		<td><b>ORDER_ID</td> </b>
		<td><b>CUST_ID</td></b>
		<td><b>CUST_NAME</td></b>
		<td><b>CUST_PHONE_NUM</td></b>
		<td><b>PACKAGE</td></b>
		<td><b>PACKAGE_PRICE</td></b>
		<td><b>ROOM_WIDTH</td></b>
		<td><b>ROOM_LENGTH</td></b>
		<td><b>STAFF_ID</td></b>
	</tr>
	<?php 
	while($row = mysqli_fetch_array($result2)){ ?>
	<tr>
		<td><?php echo $row['ORDER_ID'];?></td>
		<td><?php echo $row['CUST_ID'];?></td>
		<td><?php echo $row['CUST_NAME'];?></td>
		<td><?php echo $row['CUST_PHONE_NUM'];?></td>
		<td><?php echo $row['PACKAGE'];?></td>
		<td><?php echo $row['PACKAGE_PRICE'];?></td>
		<td><?php echo $row['ROOM_WIDTH'];?></td>
		<td><?php echo $row['ROOM_LENGTH'];?></td>
		<td><?php echo $row['STAFF_ID'];?></td>
	</tr>
	<?php
     }
	 ?>
	</table>
	
</form>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <div class="w3-xlarge w3-section">
	<a href="https://web.facebook.com/login/?_rdc=1&_rdr" target="_blank" style="text-decoration: none;" class="fa fa-facebook-official w3-hover-opacity"></a>
    <a href="https://www.instagram.com/accounts/login/" target="_blank" style="text-decoration: none;" class="fa fa-instagram w3-hover-opacity"></a>
    <a href="https://www.snapchat.com/" target="_blank" style="text-decoration: none;" class="fa fa-snapchat w3-hover-opacity"></a>
    <a href="https://www.pinterest.com/" target="_blank" style="text-decoration: none;" class="fa fa-pinterest-p w3-hover-opacity"></a>
    <a href="https://twitter.com/home" target="_blank" style="text-decoration: none;" class="fa fa-twitter w3-hover-opacity"></a>
    <a href="https://www.linkedin.com/" target="_blank" style="text-decoration: none;" class="fa fa-linkedin w3-hover-opacity"></a>
  </div>
</footer>

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  var y = document.getElementById("myInput2");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
</script>

</body>
</html>