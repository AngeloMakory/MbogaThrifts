<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Our fruits</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="banner">
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
            
            
            <ul>
            <li><div class="Catalogue">
                <div class="product">
                    <?php 

                    $conn = new mysqli("localhost", "root", "", "Mboga_Thrifts");

                    session_start();

                    $sql_select ="SELECT * FROM items" ;
                    $results = $conn->query($sql_select);
                    //$rows = $results->fetch_assoc();
                    if($results->num_rows >0){
                        while($row=$results->fetch_assoc()){

                            $img = htmlspecialchars($row["img_address"]);
                            $name = htmlspecialchars($row["itemname"]);
                            $price = htmlspecialchars($row["price"]);

                            <?php echo $img ?>
                                <div class="details">   
                                    <br>
                                        echo $name;
                                </div>
                            <button>echo $price<br><span>ADD TO CART</span></button>
                            <div class="seller">Advertised by: User</div>   
                        }
                    }
                    ?>
                </div>
            </div></li>

            // <li><div class="Catalogue">
            //     <div class="product">
            //         <img src="grape.jpg">
            //             <div class="details">
            //                 <br>
            //                 Naivasha red grapes
            //             </div>
            //             <button>KES 30 <br><span>ADD TO CART</span></button>
            //             <div class="seller">Advertised by: User</div>
            //     </div>
            // </div></li>

            // <li><div class="Catalogue">
            //     <div class="product">
            //         <img src="mango.jpg">
            //             <div class="details">
            //                 <br>
            //                Kenyan red mango
            //             </div>
            //             <button>KES 30 <br><span>ADD TO CART</span></button>
            //             <div class="seller">Advertised by: User</div>
            //     </div>
            // </div></li>
            
            // <li><div class="Catalogue">
            //     <div class="product">
            //         <img src="Oranges.jpg">
            //             <div class="details">
            //                 <br>
            //                 Imported South African Oranges
            //             </div>
            //             <button>KES 30 <br><span>ADD TO CART</span></button>
            //             <div class="seller">Advertised by: User</div>
            //     </div>
            // </div></li>

            // <li><div class="Catalogue">
            //     <div class="product">
            //         <img src="pineapple.jpg">
            //             <div class="details">
            //                 <br>
            //                 Kenyan Pineapple
            //             </div>
            //             <button>KES 30 <br><span>ADD TO CART</span></button>
            //             <div class="seller">Advertised by: User</div>
            //     </div>
            // </div></li>

            // <li><div class="Catalogue">
            //     <div class="product">
            //         <img src="watermelon.jpg">
            //             <div class="details">
            //                 <br>
            //                 Red Watermelon
            //             </div>
            //             <button>KES 30 <br><span>ADD TO CART</span></button>
            //             <div class="seller">Advertised by: User</div>
            //     </div>
            // </div></li> 

            </ul>

            
            <p>See our collection of <a href="vegetables.php">vegetables</a> on offer!</p>
        </div>
        <footer>   
            <p><i>ANGELO MAKORY &#8482 | angelomakory@strathmore.edu| +254717117115</i></p>
        </footer>
    </body>
</html>