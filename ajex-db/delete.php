<?php
$con=mysqli_connect("localhost","root","");

$rollno=$_REQUEST['rollno'];
$name=$_REQUEST['name'];
$marks=$_REQUEST['marks'];

mysqli_select_db($con,"dbexpert")  or die(mysqli_error($con));


$str="delete from stud where rollno=$rollno";

$result=mysqli_query($con,$str);

mysqli_close($con);
?>