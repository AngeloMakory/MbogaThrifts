
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administrator login: Mboga fruits</title>
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
                      <li><a href="register.php">Register</a></li>
                    </ul>
                </div>
                <div class="loginbox">
                <h1>Karibu our administrator, please login </h1><br><br>

                <form method="post" action="adminloginsession.php">
                    <p>Enter your username</p>
                    <input type="text" name="adminUsername" placeholder="Username"><br><br>
                    <p>Enter password</p>
                    <input type="password" name="adminPword" placeholder="password"><br><br>
                    <input type="submit" class="submit" value="submit" name="adminlogin">
                </form>
                <br><br>
                    <!-- <p>Alternatively, continue as <a href="index.php">guest.</a></p> -->
                <br><br>
                
            </div></div>
        </div>
        <footer>
            <p><i>ANGELO MAKORY &#8482 | angelomakory@strathmore.edu| +254717117115</i></p>
        </footer>
    </body>
</html>