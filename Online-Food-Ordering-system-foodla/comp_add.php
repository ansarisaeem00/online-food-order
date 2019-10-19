<?php
$con = mysqli_connect("localhost","root","root","restraunt");

if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

#mysql_select_db("restraunt", $con);


$sql="insert into complaint values('$_POST[name]','$_POST[com]')";
if(!mysqli_query($con,$sql))
{
}
else
{?><script>
	var c=confirm("Complaint/Review sucessfully registered");
	if(c==true)
	{
	self.location="user.php";}
	</script><?php
}
?>