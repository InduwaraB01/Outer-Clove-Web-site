<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Outer Clove Menu</title>
    <style>
			
			
    </style>
    <link href="new food menuu.css" rel="stylesheet" type="text/css">
</head>
<body>

    <header>
        <h1>The Outer Clove Odering Menu<hr></h1>
    </header>

    <div id="filter-options">
        <label class="filter-label">
            <input type="radio" name="category" value="all" checked> All
        </label>
        <label class="filter-label">
            <input type="radio" name="category" value="pizza"> Pizza
        </label>
        <label class="filter-label">
            <input type="radio" name="category" value="burgers"> Burgers
        </label>
        <label class="filter-label">
            <input type="radio" name="category" value="wraps"> Wraps
        </label>
		
		<label class="filter-label">
            <input type="radio" name="category" value="promos"> offers
        </label>
		
    </div>

    <div id="menu">
        
        <div class="menu-item" data-category="pizza">
            <img src="../images/cheese and papporoni.jpg" alt="Pizza Image">
            <div class="item-details">
                <h3>Cheese and papporoni Pizza</h3>
                <p>LKR 3000.00</p>
            </div>
            <button class="order-button" onclick="redirectToOrderPage('Cheese and papporoni')">Order</button>
        </div>
		
		
		 <div class="menu-item" data-category="burgers">
            <img src="../images/Double beef burger.webp" alt="brgr1 Image">
            <div class="item-details">
                <h3>double beef burger</h3>
                <p>LKR 2300.00</p>
            </div>
            <button class="order-button" onclick="redirectToOrderPage('double beef burger')">Order</button>
        </div>
		
		
		 <div class="menu-item" data-category="wraps">
            <img src="../images/beef wrap.jpg" alt="wrap1 Image">
            <div class="item-details">
                <h3>Beef wrap</h3>
                <p>LKR 2000.00</p>
            </div>
            <button class="order-button" onclick="redirectToOrderPage('Beef wrap')">Order</button>
        </div>
		
		
		<div class="menu-item" data-category="promos">
            <img src="../images/burger offer.jpg" alt="brgr1 Image">
            <div class="item-details">
                <h3>Todays special BBQ chicken Burger offer </h3>
                <p>LKR 1500.00</p>
            </div>
            <button class="order-button" onclick="redirectToOrderPage('Todays special BBQ chicken Burger offer')">Order</button>
        </div>
		
		
		 <div class="menu-item" data-category="pizza">
            <img src="../images/Cheese pizza.jpg" alt="Pizza2 Image">
            <div class="item-details">
                <h3>Cheese pizza</h3>
                <p>LKR 2000.00</p>
            </div>
            <button class="order-button" onclick="redirectToOrderPage('Cheese pizza')">Order</button>
        </div>
		
		
		 <div class="menu-item" data-category="wraps">
            <img src="../images/chicken wrap.jpg" alt="wrap2 Image">
            <div class="item-details">
                <h3>Chicken Wrap</h3>
                <p>LKR 1600.00</p>
            </div>
            <button class="order-button" onclick="redirectToOrderPage('Chicken Wrap')">Order</button>
        </div>
		
		 <div class="menu-item" data-category="pizza">
            <img src="../images/margarita pizza.jpg" alt="Pizza3 Image">
            <div class="item-details">
                <h3>Margarita Pizza</h3>
                <p>LKR 1600.00</p>
            </div>
            <button class="order-button" onclick="redirectToOrderPage('Margarita Pizza')">Order</button>
        </div>
		
		 <div class="menu-item" data-category="burgers">
            <img src="../images/pork burger.jpg" alt="burger 2Image">
            <div class="item-details">
                <h3>Pork Burger</h3>
                <p>LKR 1800.00</p>
            </div>
            <button class="order-button" onclick="redirectToOrderPage('Pork Burger')">Order</button>
        </div>
		
		 <div class="menu-item" data-category="burgers">
            <img src="../images/double cheese burger.jpg" alt="burger3 Image">
            <div class="item-details">
                <h3>Double Cheese burger</h3>
                <p>LKR 2100.00</p>
            </div>
            <button class="order-button" onclick="redirectToOrderPage('Double Cheese burger')">Order</button>
        </div>
		
		

        <!-- Repeat the above block for each menu item -->

        <!-- Example for 8 items -->
        <!-- ... -->

    </div>

    <script>
        function redirectToOrderPage(itemName) {
            // Customize this function to redirect to the online order page with the selected item
            alert('Redirecting to order page for ' + itemName);
             window.location.href = 'order details page.php?item=' + encodeURIComponent(itemName);
        }

        const filterRadios = document.querySelectorAll('input[name="category"]');
        filterRadios.forEach(radio => {
            radio.addEventListener('change', () => {
                filterItems(radio.value);
            });
        });

        function filterItems(category) {
            const menuItems = document.querySelectorAll('.menu-item');

            menuItems.forEach(item => {
                const itemCategory = item.dataset.category;
                if (category === 'all' || itemCategory === category) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>
	
	<footer>
        &copy;Induwara| 2023 The Outer Clove. All rights reserved.
    </footer>
	
	
</body>
</html>
