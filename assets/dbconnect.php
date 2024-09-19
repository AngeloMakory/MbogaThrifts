<?php

function connect(){
    $dbserver = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "Mboga_Thrifts";

    $conn = new mysqli($dbserver, $dbuser, $dbpass, $dbname) or die("Connection error: " . $conn->error);
    return $conn;
}

function createDatabase(){
    $sql="CREATE DATABASE IF NOT EXISTS Mboga_Thrifts";
    if($conn->query($sql)===TRUE){
        echo "<br><br>Your database was created successfully!";
    }
    else{
        echo"<br><br>Error in connecting dbms!".$conn->error;
    }
}

function createUserstable(){
    $sql_table= "CREATE TABLE IF NOT EXISTS  Users(
        userID INT(6) AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(25) NOT NULL,
        surname VARCHAR(25) NOT NULL,
        email  VARCHAR(30) NOT NULL,
        username  VARCHAR(25) NOT NULL,
        pass VARCHAR(25) NOT NULL,
        gender VARCHAR (25) NOT NULL,
        dob DATE NOT NULL,
        usertype VARCHAR(25) NOT NULL
    )";
    if($conn->query($sql_table)===TRUE){
        echo"<br><br>Table created successfully!";
    }
    else{
        echo "<br><br>FAILED to create table!".$conn->error;
    }
}

function createItemstable(){
    $conn=connect();
    $sql_table= "CREATE TABLE IF NOT EXISTS  Items(
        itemID INT(6) AUTO_INCREMENT PRIMARY KEY,
        itemname  VARCHAR(25) NOT NULL,
        price VARCHAR(25) NOT NULL,
        itemtype VARCHAR(25) NOT NULL,
        img_address VARCHAR(200) NOT NULL
    )";
    if($conn->query($sql_table)===TRUE){
        echo"<br><br>Table created successfully!";
    }
    else{
        echo "<br><br>FAILED to create table!".$conn->error;
    }
}

function getData($sql){
    $conn = connect();
    $result = $conn->query($sql) or die("Error: " . $conn->error);
    while($row = $result->fetch_assoc()){
        $rows[] = $row;
    }
    return $rows;
}

function setData($sql){
    $conn = connect();
    try{
        if($conn->query($sql)){
            return true;
        }
    }
    catch(Exception $e){
        echo "Message: " . $e->getMessage();
    }
}
    
?>