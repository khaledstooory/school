<?php

include("connect.php");
$sql="delete from student where id_stu='$_REQUEST[id_stu]'";
mysqli_query($con,$sql);


echo "Record Deleted =" .mysqli_affected_rows($con);

mysqli_close($con);

?>