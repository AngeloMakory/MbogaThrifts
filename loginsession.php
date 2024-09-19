<?php
session_start();
$conn=new mysqli("localhost", "root","","Mboga_Thrifts");

// if($conn->connect_error){
//     die("Not connected" . $conn->connect_error);
// }
// else{
//     echo "success";
// }

if(isset($_POST["login"])){
    if(empty($_POST["Username"])||empty($_POST["Pword"])){
        header("location:login.php");
        exit();
    }
    else{
 
        $sql = "SELECT * FROM users WHERE username= '" .$_POST["Username"] . "'" . "AND pass ='" .$_POST["Pword"]. "'";
        $result = $conn->query($sql);
        echo "success";

        
        if($result -> fetch_assoc()){
            $_SESSION['username'] = $_POST["Username"];
            header("location: index.php");
            //echo "nyefnyef";
            
        }
        else{
            header("location: login.php");
        }
    }
}

else{
    echo "NOT!";
}

?>