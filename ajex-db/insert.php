<?php
$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"dbexpert")  or die(mysqli_error($con));

$rollno=$_REQUEST['rollno'];
$name=$_REQUEST['name'];
$marks=$_REQUEST['marks'];

$str="INSERT INTO stud values($rollno,'$name',$marks)";

$result=mysqli_query($con,$str);

header('location:updateRecord.html');
while($row=mysqli_fetch_assoc($con,$result))
{
	$json_array[]=$row;
}
echo json_encode($json_array);
mysqli_close($con);
?>