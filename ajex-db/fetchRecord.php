<?php
$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"dbexpert")  or die(mysqli_error($con));

$str="select * from stud";

$result=mysqli_query($con,$str);
while($row=mysqli_fetch_assoc($result))
{
	$json_arr[]=$row;
}
echo json_encode($json_arr);
mysqli_close($con);
?>