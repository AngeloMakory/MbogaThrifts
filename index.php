<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <title>Welcome to Mboga Thrifts</title>
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
        <div class="content">
          <div align="center">
          <h1><?php echo "WELCOME TO MBOGA THRIFTS, " .$_SESSION['username']; ?>
          <br><br><p>What would you like to trade with us today?</p></h1>
          <br><br>
          <select id="choice" name="choice"  class="choice" onchange="location=this.value;">
            <option value="">Select your choice!</option>
            <option value="fruits.php">Fruits</option>
            <option value="vegetables.php">Vegetables</option>
        </select></div>
        </div>
      </div>
      <footer>
        <p><i>ANGELO MAKORY &#8482 | angelomakory@strathmore.edu| +254717117115</i></p>
      </footer>
    </body>
</html>

