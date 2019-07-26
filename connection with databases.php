<?php
$con=mysqli_connect('localhost','abhis2007','Abhi@1289');
if(!$con)
{
echo 'connection failed';
}
else{
echo 'connected succeessful';
}
$i=mysqli_select_db($con,'db2');
echo$i;
mysqli_close($con);
?>