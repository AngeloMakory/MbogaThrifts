<?php session_start()?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome user</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>This is the welcome page</h1>
        <? php echo "Welcome ".$_SESSION['username'];?>
    </body>
    </html>