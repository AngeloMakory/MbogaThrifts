<?php

require_once("dbconnect.php");

if(isset($_POST["submitimg"])){
    $file_path="../assets/";

    $original_file_name = $_FILES['food-image']['name'];
    $file_tmp_location = $_FILES['food-image']['tmp_name'];

    $itemname = $_POST['food-item'];
    $price = $_POST['price'];
    $foodtype = $_POST['food-type'];

    if(move_uploaded_file($file_tmp_location, $file_path.$original_file_name)){
        createItemstable();
        $sql_insertphoto="INSERT INTO Items(itemname, img_address, price, itemtype) VALUES ('$itemname','$original_file_name', '$price', '$foodtype')";

        if(setData($sql_insertphoto)){
            
            header("location:items.php");
        }
    }
}
?>