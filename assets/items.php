


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Users</title>
</head>
<body>
    <div class="bannerindex">
        <div class="navbar">
            <a href="../index.php"><img src="../mboga_thrifts_logotransp.png" class="logo"></a>
                <ul>
                  <li><a href="../index.php">Home</a><li></li>
                  <li><a href="../admin.php">Back</a><li>
                </ul>
        </div>
        <div align="center" >
            <h1>Items for sale</h1>
            <table>
                <tr>
                    <th>Item ID</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Item Type</th>
                    <th>Image Address</th>
                </tr>             
        <?php
        //Select and display data
        $conn = new mysqli("localhost", "root","","Mboga_Thrifts"); 
        //as observed in the dbms.php line 4.
        $sql_select="SELECT * FROM Items";
        $results = $conn->query($sql_select);
        //$rows = $results->fetch_assoc();
        if($results->num_rows >0){
            while($row=$results->fetch_assoc()){
                $_SESSION["change"]= $row["itemID"];
                $_SESSION["type"]=$row["itemtype"];

                $_SESSION["itemname"] = $row["itemname"];
                $_SESSION["price"] = $row["price"];
                $_SESSION["image"] = $row["img_address"];

                echo "<tr>
                    <td>". htmlspecialchars($row["itemID"])."</td>
                    <td>". htmlspecialchars($row["itemname"])."</td>
                    <td>". htmlspecialchars($row["price"])."</td>
                    <td>". htmlspecialchars($row["itemtype"])."</td>
                    <td>". htmlspecialchars($row["img_address"])."</td>";

                if($_SESSION["type"] != "Admin" || $_SESSION["type"] != "Super Admin"){
                    echo "<td>
                        <form action = 'deleteitems.php' method = 'post'>
                            <input type='hidden' name = 'delete_id' value=" . $row['itemID'] . ">
                            <button type='submit' class ='delete' >DELETE</button>
                        </form>
                        
                        <form action = 'updateitems.php' method = 'post'>
                            <input type='hidden' name = 'update_id' value=" . $row['itemID'] . ">
                            <button type='submit' class ='update' > EDIT </button>
                        </form>
                        </td>";
                }
                // else if( $_SESSION["type"] != "Super Admin"){
                //     echo "<td>
                //         <form action = 'update.php' method = 'post'>
                //             <input type='hidden' name = 'update_id' value=" . $row['userID'] . ">
                //             <button type='submit' class ='update' > EDIT </button>
                //         </form>
                //     </td>";
                // }
            
            echo "</tr>";
            }
        }
        ?>
        </table>
            <button><a href="uploadform.php">NEW ITEMS</a><button> 
        
        </div>
    </div>
    <footer>
            <p><i>ANGELO MAKORY &#8482 | angelomakory@strathmore.edu| +254717117115</i></p>
    </footer>
</body>
</html>
