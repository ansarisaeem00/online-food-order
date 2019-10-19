<?php
$con = mysqli_connect("localhost","root","","restraunt");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

#mysql_select_db("restraunt", $con);

$sql="INSERT INTO customer
VALUES
('$_POST[cnam]','$_POST[uname]','$_POST[mail]','$_POST[house_no]','$_POST[street]','$_POST[area]','$_POST[mobile]')";
$sql1="INSERT INTO user(type,username,password) VALUES(2,'$_POST[uname]','$_POST[password]')";
if (!mysqli_query($con,$sql)||!mysqli_query($con,$sql1))

  {
  die('Error: ' . mysqli_error($con));
  }

else
{
	header("Location: reg_success.html");
}
mysqli_close($con);
?>