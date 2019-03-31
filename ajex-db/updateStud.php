<?php
$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"dbexpert")  or die(mysqli_error($con));

$name=$_REQUEST['name'];
$marks=$_REQUEST['marks'];
$rollno=$_REQUEST['rollno'];


$str="update stud set name='$name',marks=$marks where rollno=$rollno";

$result=mysqli_query($con,$str);
mysqli_close($con);
?>