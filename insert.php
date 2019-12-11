<?php




include("connect.php");

$sql = "insert into student values('$_REQUEST[id_stu]',
                                  '$_REQUEST[stu_name]',
								  '$_REQUEST[stu_age]',
								  '$_REQUEST[stu_adde]',
								  '$_REQUEST[stu_class]',
								  '$_REQUEST[email]')";


mysqli_query($con,$sql);
echo "Record Inserted =" .mysqli_affected_rows($con);
mysqli_close($con);
?>