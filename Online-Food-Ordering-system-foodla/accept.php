<?php
$id=$_GET['order'];
echo $id;
$con = mysqli_connect("localhost","root","root","restraunt");
#mysql_select_db("restraunt", $con);
$sql="DELETE from restraunt.order WHERE id  = $id";
mysqli_query($con,$sql);
header("Location: view_orders.php");
?>
