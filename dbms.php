<?php

//new php for user registration. Users added after database creation.
$conn=new mysqli("localhost", "root","","Mboga_Thrifts");
if($conn->connect_error){
    die("Error".$conn->connect_error);
}
else{
    echo "Connected successfully";
}

//Creating database
$sql="CREATE DATABASE IF NOT EXISTS Mboga_Thrifts";
if($conn->query($sql)===TRUE){
    echo "<br><br>Your database was created successfully!";
}
else{
    echo"<br><br>Error in connecting dbms!".$conn->error;
}

//Creating table
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

//From the form
$firstname = $_POST["fname"];
$surname = $_POST["sname"];
$email = $_POST["email"];
$username = $_POST["uname"];
$pass = $_POST["pass"];
$gender =$_POST["gender"];
$dob = $_POST["dob"];

//Making index user an admin.
$sql_select="SELECT userID FROM Users" ;
$uID = "userID";
if($uID === 1){
    $usertype = "Admin";
    echo "This is the administrator!";
}
else{
    $usertype = "User";
    echo "Regular user!";
}

//inserting data
$sql_insert= "INSERT INTO Users(firstname, surname, email, username, pass, gender, dob, usertype) VALUES ('$firstname', '$surname', '$email','$username', '$pass', '$gender', '$dob', '$usertype')";
if($conn->query($sql_insert)===TRUE){
    echo "<br><br>User credentials inserted succcessfully to the dbms!<br><br>";
}
else{
    echo "<br><br>Error<br><br>.".$conn->error;
}
?>
