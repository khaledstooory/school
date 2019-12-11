<?php
include("connect.php");
$sql="update student set stu_name='$_REQUEST[stu_name]',
                           stu_age='$_REQUEST[stu_age]',
						   stu_adde='$_REQUEST[stu_adde]',
						   stu_class='$_REQUEST[stu_class]',
						   email='$_REQUEST[email]'
						   where
						   id_stu='$_REQUEST[id_stu]'";
mysqli_query($con,$sql);
echo "Record Update =" .mysqli_affected_rows($con);
mysqli_close($con);						   





?>