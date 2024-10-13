<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Filter</title>
    <style>
        body {
            background-image: url('../images/video-bg.jpg'); 
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif; 
            margin: 0;
        }

        
        label {
            margin-right: 10px;
            color: #141313 ;
        }

        .food.menu.title {
            text-align: center;
            margin: 20px 0; 
            color: #EDD6A8 ;
        }

        .menu.font.clr {
            text-align: center;
            color: #fff;
        }

        .food-item {
            display: inline-block;
            margin: 10px;
            text-align: center;
        }

        .food-item img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .food-item p {
            color: #EDD6B1; 
        }

        .foodpic {
            max-width: 500px;
            margin: 0 auto; 
        }

        #foodList .food-item.pizza {
        }
		
		footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
		
		
		
		
		
		
		
    </style>
    <link href="food menu.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="food menu title">
        <h1>The Outer Clove Food Menu</h1>
    </div>
	
	<div class="gobckmenu">
		<h3><a href="homepage.php">HOME</a></h3>
	
	</div>

    <div class="menu font clr">
        <div>
            <label><input type="checkbox" id="pizzaCheckbox" onchange="filterFood()"> Pizzas</label>
            <label><input type="checkbox" id="burgerCheckbox" onchange="filterFood()"> Burgers</label>
            <label><input type="checkbox" id="wrapCheckbox" onchange="filterFood()"> Wraps</label>
        </div>
        <hr>
        <div class="foodpic">
            <div id="foodList">
                <!-- Sample food items, each with an image and a class corresponding to its category -->
                <div class="food-item pizza">
                    <img src="../images/margarita pizza.jpg" alt="Pizza Image" width="355" height="200">
                    <p>Margherita Pizza | 2400LKR  </p>
                </div>

                <div class="food-item burger">
                    <img src="../images/double cheese burger.jpg" alt="Burger Image" width="400" height="200">
                    <p>Classic double cheese Burger | 1000LKR</p>
                </div>

                <div class="food-item wrap">
                    <img src="../images/chicken wrap.jpg" alt="Wrap Image" width="450" height="375">
                    <p>Chicken Caesar Wrap | 1500LKR</p>
                </div>

                <!-- Additional food items -->
                <div class="food-item pizza">
                    <img src="../images/Cheese pizza.jpg" alt="Cheese Pizza Image" width="450" height="200">
                    <p>Cheese Pizza | 1000LKR</p>
                </div>

                <div class="food-item burger">
                    <img src="../images/Double beef burger.webp" alt="Double Beef Burger" height="305" width="305">
                    <p>Double Beef BBQ Burger | 2000LKR</p>
                </div>

                <div class="food-item wrap">
                    <img src="../images/beef wrap.jpg" alt="Beef Wrap Image" width="506" height="505">
                    <p>Beef Steak Wrap | 2500LKR</p>
                </div>

                <div class="food-item pizza">
                    <img src="../images/cheese and papporoni.jpg" alt="Cheese and Papporoni Pizza Image" width="450" height="200">
                    <p>Cheese and Papporoni Pizza | 3000LKR</p>
                </div>

                <div class="food-item burger">
                    <img src="../images/pork burger.jpg" alt="BBQ Pork Burger" width="500" height="425">
                    <p>BBQ Pork Burger | 2000LKR</p>
                </div>

                <div class="food-item wrap">
                    <img src="../images/veg and beef wrap.jpg" alt="Veg and Beef Wrap Image" width="400" height="250">
                    <p>Veg and Beef Wrap | 2000LKR</p>
                </div>

                <!-- Add more food items as needed with images and appropriate class names -->
            </div>
        </div>
    </div>
	

    <script>
        function filterFood() {
            var pizzaCheckbox = document.getElementById("pizzaCheckbox").checked;
            var burgerCheckbox = document.getElementById("burgerCheckbox").checked;
            var wrapCheckbox = document.getElementById("wrapCheckbox").checked;

            var foodItems = document.getElementsByClassName("food-item");

            for (var i = 0; i < foodItems.length; i++) {
                var foodItem = foodItems[i];
                var itemCategory = foodItem.classList[1]; // Assumes each food item has only one category class

                // Show or hide the item based on the selected checkboxes
                foodItem.style.display =
                    (pizzaCheckbox && itemCategory === "pizza") ||
                    (burgerCheckbox && itemCategory === "burger") ||
                    (wrapCheckbox && itemCategory === "wrap")
                        ? "inline-block"
                        : "none";
            }
        }
    </script>
	
	<footer>
        &copy;Induwara| 2023 The Outer Clove. All rights reserved.
    </footer>
	
</body>
</html>
