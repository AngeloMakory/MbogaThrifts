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
            <h1>Admin Panel: Change user information</h1><br><br>
            <form method="post" action="update.php">
                    <p>User ID to be changed</br>
                    <input type = "text"  name="updateID" placeholder="updateID"></p><br><br>
                    <p>Change First Name<br>
                    <input type="text" name="fname" placeholder="Enter First name"></p><br><br>
                    <p>Change Surname<br>
                    <input type="text" name="sname" placeholder="Enter Surname"></p><br><br>
                    <p>Change email<br>
                    <input type="text" name="email" placeholder="Enter email"></p><br><br>
                    <p>Change username<br>
                    <input type="text" name="uname" placeholder="Enter Username"></p><br><br>
                    <!-- <p>Enter  Password<br>
                    <input type="text" name="pass" placeholder="Enter Password"></p><br><br> -->
                    <p>Select  date of birth<br>
                    <input type="date" name="dob"  min="01-01-1900" max="01-01-2021"></p><br><br>
                    
                    <div class="radios">
                        <p>Select gender</p>
                            <input type="radio" name="gender" value="Male" id="male"><label for="male">Male</label>
                            <input type="radio" name="gender" value="Female" id="female"><label for="Female">Female</label>
                            <input type="radio" name="gender" value="Others" id="others"><label for="others">Others</label>
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
