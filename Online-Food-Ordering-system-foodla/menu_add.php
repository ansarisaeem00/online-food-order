<?php
$con = mysqli_connect("localhost","root","root","restraunt");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

#mysql_select_db("restraunt", $con);
session_start();
echo $_SESSION['name'];
$sql1="select r_id from restraunt where uname='". $_SESSION['name']."'";
$rs=mysqli_query($con,$sql1);
while($row=mysqli_fetch_array($rs))
{
$id=$row['r_id'];
$sql="INSERT INTO hotel_menu
VALUES
('$id','$_POST[item_name]','$_POST[sel]','$_POST[price]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  else
  {
	  header("Location:hotel_user.php");
  }
}


mysqli_close($con);
?>