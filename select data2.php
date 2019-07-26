<?php
$tablename=$_POST['table'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db2');
$q="select * from $tablename";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
for($i=1;$i<=$num;$i++){
$row=mysqli_fetch_array($result);
echo $row['bookid']." ".$row['title']." ".$row['price'];
echo "<br>";
}
mysqli_close($con);

?>