<!DOCTYPE html>
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
  <h1 class="w3-center">Staff Registration</h1>
  <form action="pageStaff.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <p>Thank you for updating.</p>
    <hr>

    <?php 
	include 'db_connect.php';

       $edit_SId=$_POST['txtSId']; 
	   $edit_Password=$_POST['txtSPass']; 
	   $edit_SName=$_POST['txtSName']; 
	   $edit_STel=$_POST['txtSTel']; 
       //Update data   
	   $query="Update staff set PASSWORD='$edit_Password',STAFF_NAME='$edit_SName',STAFF_PHONE_NUM='$edit_STel' where STAFF_ID='$edit_SId'" ;
	   $result = mysqli_query( $link,$query) or die("Query failed");
	  
        if ($result)
		{ echo " Updated Successfully !"; }
		   else
		{ echo "Problem occured !"; }
        mysqli_close($link);	
	?>
	
    <div class="clearfix">
      <button type="submit" class="backbtn">Back</button>
    </div>
  </div>
</form>

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