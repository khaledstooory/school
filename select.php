<?php
include("connect.php");
$sql="select * from student where id_stu='$_REQUEST[id_stu]'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
	echo "$row[0] - $row[1] - $row[2] - $row[3] - $row[4] - $row[5]<br/>";
mysqli_close($con);


?>