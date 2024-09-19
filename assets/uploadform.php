<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <link rel="stylesheet" href="../style.css">
    <title>Upload page</title>
</head>
<body>
    <div align="center">
    <div class="bannerindex">
        <div class="navbar">
            <a href="../index.php"><img src="../mboga_thrifts_logotransp.png" class="logo"></a>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../admin.php">Back</a></li>
            </ul>
        </div>
        <form action="uploadprocess.php" method="POST" enctype="multipart/form-data">
            <label for="fooditem">Food Name:</label><br>
            <input type="text" name="food-item" required="true" placeholder="Food Item Name"/><br></br>

            <label for="foodimage">Image</label><br>
            <input type="file" name="food-image" id="foodimage" required="true"> <br></br>

            <label for="foodprice">Price</label><br>
            <input type="number" name="price" id="foodprice" required="true">
            <br><br>

            <label for="foodtype">Food type</label><br>
            <input type="text"  name="food-type" id="food-type" required="true"><br><br>


            <input type="submit" name="submitimg" value="SAVE">

        </form>
    </div></div>
</body>


    </html>