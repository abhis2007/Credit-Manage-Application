<?php
$con=mysqli_connect('localhost','root');
if(!$con)
{
echo 'connection failed';
}
else{
echo 'connected succeessful';
}
echo "<br />";
$i=mysqli_close($con);
echo($i);
?>