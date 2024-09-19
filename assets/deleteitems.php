<?php
session_start();
$conn = new mysqli("localhost","root","","Mboga_Thrifts");

$_SESSION["item_id"] = $_POST["delete_id"];
$delete_sql = htmlspecialchars("DELETE FROM items WHERE itemID= ".$_SESSION['item_id']);
if($conn->query($delete_sql)===TRUE){
    header("items.php");
}
else{
    echo "<br><br>Unable to delete record!"; $conn->error;
}
?>