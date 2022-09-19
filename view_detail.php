<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VIEW DETAIL</title>
</head>

<body>
<p>back to <a href="menu.php">Menu</a></p>
<?php 
 include 'db_connect.php';
       //edit data
       $id=$_GET['user_id']; 
	   $query="SELECT * FROM  staff WHERE STAFF_ID='$id'";
	   $result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking
?>

<table width="212" border="1">
  <?php while ( $staffId = mysqli_fetch_array( $result ))
{
				$SId=$user['SId']; 
				$SPass=$user['SPass'];
				$SName=$user['SName']; 
				$STel=$user['STel']; 
}
?>
  <tr> 
    <td width="75"><strong>STAFF ID</strong></td>
    <td width="121"> 
      <?php echo $SId ?>
    </td>
  </tr>
  <tr> 
    <td><strong>NAME</strong></td>
    <td> 
      <?php echo $SName ?>
    </td>
  </tr>
  <tr> 
    <td><strong>STAFF TEL</strong></td>
    <td> 
      <?php echo $STel ?>
    </td>
  </tr>
</table>


</body>
</html>