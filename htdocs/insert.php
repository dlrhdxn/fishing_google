<?php
$severname="localhost";
$username="root";
$password="1345";
$dbname="info";
$conn=mysqli_connect("$severname","$username","$password","$dbname");
$email=$_POST['email'];
$sql="insert into topic('1','$email','nul')";
$sql=$sql."values('1','$email','nul')";
?>