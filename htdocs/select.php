<?php
$severname="localhost";
$username="root";
$password="1345";
$dbname="info";
$conn=mysqli_connect("$severname","$username","$password","$dbname");
$sql="SELECT * FROM topic LIMIT 10";
$result=mysqli_query($conn,$sql);
var_dump($result->num_rows);
?>
