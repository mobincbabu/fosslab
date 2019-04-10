<!DOCTYPE html>
<html>
<head>
form.php:
<?php
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$con=@mysqli_connect("localhost","root","sngce@123")or die(mysqli_error());
echo "Connected to Database. ";
$db=@mysqli_select_db($con,"R4B") or die(mysqli_error($con));
echo "Selected Database.";
$str="INSERT INTO R4B VALUES('$FirstName','$LastName')";
if ($con->multi_query($str) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $str . "<br>" . $con->error;
}
$res=@mysqli_query($str) or die(mysqli_error($con));
if($res>0)
{
	echo "Record created.";
}
?>
</head>
</html>
