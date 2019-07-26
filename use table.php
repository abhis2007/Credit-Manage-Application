<?php
$tablename=$_POST['table'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db2');
$q="use $tablename";
mysqli_query($con,$q);
?>