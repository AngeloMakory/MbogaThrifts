<?php

session_start();
$conn=new mysqli("localhost", "root","","Mboga_Thrifts");

if(isset($_POST["adminlogin"])){
    if(empty($_POST["adminUsername"]) || empty($_POST["adminPword"])){
        header("location:adminlogin.php");
        // exit();
    }
    else{
        $adminusername = $_POST["adminUsername"];
        $adminpass = $_POST["adminPword"];

        $sql_admininfo = "SELECT * FROM users WHERE username = '$adminusername' AND pass = '$adminpass' AND usertype = 'Admin' ";
        if($result = $conn->query($sql_admininfo)){
            echo "Success";
        }
        else{
            echo "Error: " . $conn->error;
        }
        // print_r($result);

        if($result->fetch_assoc()){
            $_SESSION['adminusername'] = $_POST["adminUsername"];
            header("location: admin.php"); 
        }
        else{
            header("location: adminlogin.php");
        }
    }
}
else{
    echo "NOT!";
}
?>