<?php
$bookid=$_POST['bookid'];
$newbookid=$_POST['newbookid'];
$con=mysqli_connect('localhost','root');
$i=mysqli_select_db($con,'db2');
$q="UPDATE book SET bookid=$newbookid where bookid=$bookid";
mysqli_query($con,$q);
?>