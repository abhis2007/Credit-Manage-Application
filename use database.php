<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db2');
$q="show tables";
$read=mysqli_query($con,$q);
echo("$read");
?>