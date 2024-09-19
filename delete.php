<?php
session_start();
$conn = new mysqli("localhost","root","","Mboga_Thrifts");

$_SESSION["user_id"] = $_POST["delete_id"];
$delete_sql = htmlspecialchars("DELETE FROM users WHERE userID= ".$_SESSION['user_id']);
if($conn->query($delete_sql)===TRUE){
    header("users.php");
}
else{
    echo "<br><br>Unable to delete record!"; $conn->error;
}
?>