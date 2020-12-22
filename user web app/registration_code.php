
<!--
Here, we write code for registration
-->

<?php
require_once ('connection.php');

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$deviceid = $_POST['deviceid'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO tbluser (Firstname, Lastname, Address,City, State, Zipcode, Phonenumber,Deviceid, Email, Password)
        VALUES ('$fname', '$lname', '$address','$city','$state', '$zipcode', '$phone','$deviceid', '$email','$password')";

$result = mysqli_query($conn, $sql);

if($result)
{
    header ("Location: login.php");
}
else
{
    echo "Error:".$sql;
}

?>


