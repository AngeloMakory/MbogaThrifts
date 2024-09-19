<?php
$conn=new mysqli("localhost", "root","","Mboga_Thrifts");

if($conn->connect_error){
    die("Not connected" . $conn->connect_error);
}
else{
    echo "success";
}
?>