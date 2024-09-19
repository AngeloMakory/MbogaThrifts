<!DOCYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Upload: Mboga Thrfts</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div align="center">
            <div class="bannerindex">
            <div class="navbar">
                <a href="index.php"><img src="mboga_thrifts_logotransp.png" class="logo"></a>
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="login.php">Login</a></li>
                  
                </ul>
            </div>
            <div class="Registerbox">
                <h1>Karibu customer, please register</h1>
                <br><br>
                <form method="post" action="dbms.php">
                    <p>First Name<br>
                    <input type="text" name="fname" placeholder="Enter your First name"></p><br><br>
                    <p>Surname<br>
                    <input type="text" name="sname" placeholder="Enter your Surname"></p><br><br>
                    <p>Email<br>
                    <input type="text" name="email" placeholder="Enter your email"></p><br><br>
                    <p>Set your username<br>
                    <input type="text" name="uname" placeholder="Enter Username"></p><br><br>
                    <p>Enter your Password<br>
                    <input type="text" name="pass" placeholder="Enter Password"></p><br><br>
                    <p>Select your date of birth<br>
                    <input type="date" name="dob"  min="01-01-1900" max="01-01-2021"></p><br><br>
                    <div class="radios">
                        <p>Select your gender</p>
                        <input type="radio" name="gender" value="Male" id="male"><label for="male">Male</label>
                        <input type="radio" name="gender" value="Female" id="female"><label for="Female">Female</label>
                        <input type="radio" name="gender" value="Others" id="others"><label for="others">Others</label>
                    </div>
                    <br><br>
                    
                    
                    <input type="submit" class="submit" value="Submit">
                    <br><br>
                    <!-- <p class="guest">Alternatively, continue as <a href="index.php">guest</a></p> -->
                </form>
            </div>
            </div>
        </div>
        <footer>
            <p><i>ANGELO MAKORY &#8482 | angelomakory@strathmore.edu| +254717117115</i></p>
        </footer>
    </body>
</html>