<?php
$title=$_POST['title'];
$newtitle=$_POST['newtitle'];
$con=mysqli_connect('localhost','root');
$i=mysqli_select_db($con,'db2');
$q="UPDATE book SET title=$newtitle where title=$title";
mysqli_query($con,$q);
?>