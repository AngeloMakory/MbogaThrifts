


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Users</title>
</head>
<body>
    <div class="bannerindex">
        <div class="navbar">
            <a href="index.php"><img src="mboga_thrifts_logotransp.png" class="logo"></a>
                <ul>
                  <li><a href="index.php">Home</a><li></li>
                  <li><a href="admin.php">Back</a><li>
                </ul>
        </div>
        <div align="center" >
            <h1>Registered users</h1>
            <table>
                <tr>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Surname</th>
                    <th>Email Address</th>
                    <th>Username</th>
                    <th>User Type</th>
                    <th>Admin controls</tr>
                    
                </tr>             
        <?php
        //Select and display data
        $conn = new mysqli("localhost", "root","","Mboga_Thrifts"); 
        //as observed in the dbms.php line 4.
        $sql_select="SELECT userID, firstname, surname, email, username, usertype FROM Users" ;
        $results = $conn->query($sql_select);
        //$rows = $results->fetch_assoc();
        if($results->num_rows >0){
            while($row=$results->fetch_assoc()){
                $_SESSION["change"]= $row["userID"];
                $_SESSION["type"]=$row["usertype"];
                
                echo "<tr>
                    <td>". htmlspecialchars($row["userID"])."</td>
                    <td>". htmlspecialchars($row["firstname"])."</td>
                    <td>". htmlspecialchars($row["surname"])."</td>
                    <td>". htmlspecialchars($row["email"])."</td>
                    <td>". htmlspecialchars($row["username"])."</td>
                    <td>". htmlspecialchars($row["usertype"]). "</td>";
                if($_SESSION["type"] != "Admin" || $_SESSION["type"] != "Super Admin"){
                    echo "<td>
                        <form action = 'delete.php' method = 'post'>
                            <input type='hidden' name = 'delete_id' value=" . $row['userID'] . ">
                            <button type='submit' class ='delete' >DELETE</button>
                        </form>
                        <form action = 'user_edit.php' method = 'post'>
                            <input type='hidden' name = 'update_id' value=" . $row['userID'] . ">
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
            <button><a href="register.php">NEW USERS</a><button> 
        
        </div>
    </div>
    <footer>
            <p><i>ANGELO MAKORY &#8482 | angelomakory@strathmore.edu| +254717117115</i></p>
    </footer>
</body>
</html>
