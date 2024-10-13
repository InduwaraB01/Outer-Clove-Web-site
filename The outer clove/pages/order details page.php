<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        #order-form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
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

    <div id="order-form">
        <h2>Order Details</h2>
        <form id="confirmation-form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="address">Delivery Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="card">Card Number:</label>
            <input type="text" id="card" name="card" required>

            <button type="submit">Confirm Order</button>
        </form>
    </div>

    <script>
        document.getElementById('confirmation-form').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the default form submission
            validateForm();
        });

        function validateForm() {
            var name = document.getElementById('name').value;
            var phone = document.getElementById('phone').value;
            var address = document.getElementById('address').value;
            var card = document.getElementById('card').value;

            if (name === '' || phone === '' || address === '' || card === '') {
                alert('Please fill in all fields');
            } else {
                // Insert the name into the confirmation message
                var confirmationMessage = 'Dear ' + name + ', your order is confirmed. You will receive your food shortly.';
                alert(confirmationMessage);
                window.location.href = 'homepage.php'; // Redirect to the home page
            }
        }
    </script>
	
	<footer>
        &copy; induwara| 2023 The Outer Clove. All rights reserved.
    </footer>
	
</body>
</html>
