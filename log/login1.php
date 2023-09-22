<?php
$server="localhost";
$uname="root";
$pwd="";
$db="demo";
$con=mysqli_connect($server,$uname,$pwd,$db) or die("db not connected"); 
$name=$_POST['name'];
$pwd=$_POST['pwd'];
$query="insert into demotb values('$name','$pwd')";
if($row=mysqli_query($con,$query))
{
    echo"<script>alert('success');window.location.href='login.html';</script>";
}
else
{
    echo"<script>alert('unsuccess');</script>";
}
?>