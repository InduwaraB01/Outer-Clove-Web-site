<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>services</title>
    <link href="services.css" rel="stylesheet" type="text/css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        #search-container {
            text-align: center;
            margin-top: 20px;
        }
        #search-input {
            padding: 10px;
            width: 300px;
        }
        #search-results {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: left;
            max-height: 200px;
            overflow-y: auto;
            border: 1px solid #ccc;
            display: none;
            position: absolute;
            width: 300px;
        }
        #search-results li {
            padding: 10px;
            cursor: pointer;
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
</head>
<body>

    <div id="search-container">
        <input type="text" id="search-input" placeholder="Search services...">
        <ul id="search-results"></ul>
    </div>

    <div class="services title">
        <h1>Available Services <hr></h1>
    </div>

    <div class="service page content">
		<h3><a href="reservation.php">MAKE A RESERVATION FOR DINE IN</a></h3>
        <div class="services pics">
            <h1>&#160  &#160 &#160  &#160 &#160  &#160 &#160  &#160 &#160  &#160 &#160 Delivery&#160 &#160&#160 &#160 &#160 &#160 &#160 &#160 &#160 &#160 &#160 &#160 &#160  &#160 &#160  &#160  &#160 &#160  &#160 &#160  &#160  Dine-In&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160 &#160 &#160&#160 &#160 &#160&#160&#160&#160&#160&#160  &#160 Take-Away</h1>
            <article class="rservices " id="rservices">&#160 &#160 &#160 &#160 &#160&#160 &#160  <a href="###services"><img src="../images/delivery pic.jpg" width="400px" height="260px" alt="" /></a>&#160&#160  &#160 &#160 &#160 &#160&#160 &#160  <a href="food"><img src="../images/dine in pic.jpg" width="400" height="260" alt=""/> </a>&#160&#160  &#160 &#160 &#160 &#160 &#160 &#160 <a href="#parking"><img src="../images/take away pic.jpg" width="400" height="260" alt=""/></a></article>
        </div>

        <div class="terms">

            <fieldset><legend>terms and conditions</legend>
                <h3>Dine-In Terms:</h3>
                <p>Service Charge:
                    Service Charge:

                    A service charge of 15% will be added to the total bill for dine-in services.
                    This charge is not a gratuity and is intended to cover operational and service-related expenses.</p>
                <p>Reservation Policy:

                    We encourage guests to make reservations in advance to ensure timely service.
                    Walk-in customers will be accommodated based on table availability.</p>
                <h3>Delivery Terms:</h3>
                <p>Delivery Charges:

                    A delivery charge of 400LKR will be applied to all orders for delivery.
                    The delivery charge covers the cost of transportation and packaging.</p>
                <p>Distance Charges:

                    An additional fee of 100LKR will be charged for each kilometer beyond the first 2 kilometers from the restaurant. </p>
                <p>Minimum Order Requirement:

                    A minimum order amount of 6 may apply for delivery orders.
                    This amount is exclusive of taxes and delivery charges.                  </p>
                <p>Delivery Timeframe:

                    Estimated delivery times are provided, but actual times may vary based on traffic and other factors.
                    We strive to deliver orders promptly, and any delays will be communicated. </p>
                <h3>Take-Away Terms:</h3>
                <p>Pickup Time:

                Please allow 30 minutes for the preparation of take-away orders.</p>
                <p>Orders will be held for a maximum of 15 minutes after the agreed pickup time.                  </p>
                <p>Payment:

                    Payment for take-away orders is required at the time of order placement.</p>

            </fieldset>

        </div>

    </div>
	<footer>
        &copy; induwara| 2023 The Outer Clove. All rights reserved.
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var searchInput = document.getElementById('search-input');
            var searchResults = document.getElementById('search-results');

            // Mock data (replace this with your actual service data)
            var services = ['Delivery', 'Dine In', 'Take Away'];

            searchInput.addEventListener('input', function () {
                var query = this.value.trim().toLowerCase();
                if (query.length === 0) {
                    searchResults.style.display = 'none';
                    return;
                }

                var matchingServices = services.filter(function (service) {
                    return service.toLowerCase().includes(query);
                });

                displaySearch
				
			
