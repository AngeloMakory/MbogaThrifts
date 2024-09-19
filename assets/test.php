<?php
$conn = new mysqli("localhost", "root","","Mboga_Thrifts"); 
//as observed in the dbms.php line 4.
$sql_select="SELECT * FROM Items";
$results = $conn->query($sql_select);
//$rows = $results->fetch_assoc();
print_r($results);
?>