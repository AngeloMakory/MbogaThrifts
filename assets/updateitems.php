<?php
session_start();
$conn = new mysqli("localhost","root","","Mboga_Thrifts");

$name = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['img'];
$type = $_POST['type'];
//$gender = $_POST['gender'];


//$tobeupdated = $_POST['updateID'];

// $_SESSION["user_id"]= $_POST["update_id"];

$_SESSION["itemtobeupdated"] = $_POST["itemID"];
$update_sql = htmlspecialchars("UPDATE items SET itemname = '$tname' , price = '$price', img_address = '$image', itemtype = '$type'   WHERE itemID = ".$_SESSION['itemforupdate']);
if($conn->query($update_sql)===TRUE){
    echo "success!";
    // header("users.php");
}
else{
    echo "<br><br>Unable to update record!"; $conn->error;
}
?>