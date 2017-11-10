<?php
 
require 'databasedetails.php';
$conn    = Connect();
$uname    = $_POST['uname'];
$pass    = $_POST['password'];
$name    = $_POST['name'];
$mobile   = $_POST['mobile'];

$query   = "INSERT into login_form(uname,password,Name,mobile) VALUES('" . $uname . "','" . $pass . "','" . $name . "','" . $mobile . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
echo "Thank You <br>";
 
$conn->close();
 
?>