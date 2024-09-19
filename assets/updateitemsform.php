<?php
 $conn = new mysqli("localhost", "root","","Mboga_Thrifts")
?>
<html>
    <head>
        <title>Admin Mboga Fruits:User update</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div align="center">
        <div class = "bannerindex">
            <div class="navbar">
                    <a href="index.php"><img src="mboga_thrifts_logotransp.png" class="logo"></a>
                    <ul>
                      <li><a href="index.php">Home</a></li>
                      <li><a href="users.php">Back</a></li>
                      <li><a href ="admin.php">Admin Menu</a></li>
                    </ul>
            </div>
            <h1>Admin Panel: Change item information</h1><br><br>
            <form method="post" action="updateitems.php">
                    <p>Item ID to be changed</br>
                    <input type = "text"  name="itemID" placeholder="itemID"></p><br><br>
                    <p>Item Name<br>
                    <input type="text" name="name" placeholder="Enter First name"></p><br><br>
                    <p>Change image<br>
                    <input type="text" name="img" placeholder="Enter Username"></p><br><br>
                    <p>Change Price<br>
                    <input type="text" name="price" placeholder="Enter new price"></p><br><br>
                    <div class="radios">
                        <p>Select item type</p>
                            <input type="radio" name="type" value="Fruit" id="Fruit"><label for="male">Fruit</label>
                            <input type="radio" name="type" value="Vegetable" id="Fruit"><label for="Female">Vegetable</label>
                            
                    </div>
                    <br><br>
                    
                    <button type='submit' class='update' > UPDATE </button>
            </form>
        </div></div>
        <footer>
            <p><i>ANGELO MAKORY &#8482 | angelomakory@strathmore.edu| +254717117115</i></p>
        </footer>
    </body>
</html>
