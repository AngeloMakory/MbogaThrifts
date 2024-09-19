<?php
session_start();
$conn = new mysqli("localhost","root","","Mboga_Thrifts");

$firstname = $_POST['fname'];
$surname = $_POST['sname'];
$mail = $_POST['email'];
$username = $_POST['uname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];


$tobeupdated = $_POST['updateID'];

// $_SESSION["user_id"]= $_POST["update_id"];

$_SESSION["forupdate"] = $_POST["updateID"];
$update_sql = htmlspecialchars("UPDATE users SET firstname = '$firstname' , surname = '$surname', email = '$mail', username = '$username' , dob= '$dob', gender = '$gender'  WHERE userID = ".$_SESSION['forupdate']);
if($conn->query($update_sql)===TRUE){
    echo "success!";
    header("users.php");
}
else{
    echo "<br><br>Unable to update record!"; $conn->error;
}
?>