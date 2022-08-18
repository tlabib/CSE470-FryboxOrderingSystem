<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="photo/thefrybox1_3_300x300.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="categories.html">Categories</a>
                    </li>
                    <li>
                        <a href="category-foods.html">Foods</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>

    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="insert.php" class="order" method="POST">
                <fieldset>
                    <legend>Selected Food</legend>
                <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="photo/160225636_346971483344609_140139588167105776_n.jpg" alt="Frybox Bonanza" class="img-responsive img-curve" width="100" height="50">
                </div>

                <div class="food-menu-desc">
                    <h4>Frybox Bonanza</h4>
                    <input type="text" name="amount" value="300 Taka" placeholder="" class="input-responsive" required>
                    
                    <br>
                        <div class="order-label">Quantity</div>
                        <input type="number" name="quantity" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                
                
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="customer_name" placeholder="E.g. Tahmid Ussass" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="phone_number" placeholder="E.g. 0191xxxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. tahmidxxx@gmail.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Nasriabad housing society, Chattagram" class="input-responsive" required></textarea>
                    <button type="submit" name="submit" class="btn btn-o btn-primary">
                        Submit
                    </button>
                </form>
                    

                    <!-- <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary"> -->
                
                

            

        </div>
    </section>

</body>
</html>