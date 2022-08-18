<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
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

    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>

    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <a href="category-foods.html">
            <div class="box-3 float-container">
                <img src="photo/frybox.png" alt="Frybox" class="img-responsive img-curve">

                <h3 class="float-text text-white">Frybox</h3>
            </div>
            </a>

            <a href="cold_drink.html">
            <div class="box-3 float-container">
                <img src="photo/istockphoto-533575209-612x612.jpg" alt="Cold Drink" class="img-responsive img-curve" width="420" height="380">

                <h3 class="float-text text-white">Cold Drink</h3>
            </div>
            </a>

     

            <div class="clearfix"></div>
        </div>
    </section>
    
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">FRYBOXES</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="photo/143046075_428629481712931_3433201233918170558_n.jpg" alt="Frybox max" class="img-responsive img-curve" width="400" height="150">
                </div>

                <div class="food-menu-desc">
                    <h4>Frybox max</h4>
                    <p class="food-price">250 taka</p>
                  
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="photo/160225636_346971483344609_140139588167105776_n.jpg" alt="Frybox Bonanza" class="img-responsive img-curve" width="400" height="150">
                </div>

                <div class="food-menu-desc">
                    <h4>Frybox Bonanza</h4>
                    <p class="food-price">300 taka</p>
                    
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="photo/178365761_1999499073521955_5194612483113371550_n.jpg" alt="Frybox" class="img-responsive img-curve" width="400" height="150">
                </div>

                <div class="food-menu-desc">
                    <h4>Chili Cheese Beef Deluxe</h4>
                    <p class="food-price">190 taka</p>
                    
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="photo/183614844_290032329468431_8675727780753018820_n.jpg" alt="Frybox" class="img-responsive img-curve" width="400" height="150">
                </div>

                <div class="food-menu-desc">
                    <h4>Murgi Madness</h4>
                    <p class="food-price">200 taka</p>
                 
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            
            <

            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">See All Foods</a>
        </p>
    </section>
    

</body>
</html>