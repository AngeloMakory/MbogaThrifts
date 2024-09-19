<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administrator Interface: Mboga Thrifts</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="bannerindex">
            <div class="navbar">
                <a href="index.php"><img src="mboga_thrifts_logotransp.png" class="logo"></a>
                <ul>
                  <li><a href="index.php">Home</a><li></li>
                  <li><a href="about.php">About</a><li>
                  <li><a href="login.php">Login</a></li>
                  <li><a href="register.php">Register</a></li>
                  <li><a href="contacts.php">Contacts</a><li>
                </ul>
            </div>
            <div align="center">
                <h1>ADMINISTRATOR CONTROL PANEL</h1>
                <br>
                <p>
                    <?php echo" Welcome back kiongozi, " .$_SESSION["adminusername"];?> 
                </p>
                <div class="admin">
                    <ul>
                    <li><a href="assets/items.php"><button>View listed items</button></a></li>
                    <!-- <li><a href=""><button>View listed vegetables</button></a></li> -->
                    <li><a href="users.php"><button>View registered users</button></a></li>
                    <li><a href=""><button>Settings</button></a></li>
                    </ul>
            </div></div>
        </div>
        <footer>
            <p><i>ANGELO MAKORY &#8482 | angelomakory@strathmore.edu| +254717117115</i></p>
        </footer>
    </body>
</html>