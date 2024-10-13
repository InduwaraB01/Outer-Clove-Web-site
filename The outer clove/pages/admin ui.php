<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
			background-image: url("../images/page-heading-bg.jpg")
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px;
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

    <header>
        <h1>Admin Dashboard</h1>
    </header>

    <main>
        <button onclick="manageFoodMenu()">Manage Food Menu</button>
        <button onclick="manageOnlineReservations()">Manage Online Reservations</button>
		<button onclick="goToWebHome()">go to web home</button>
    </main>

    <script>
        function manageFoodMenu() {
            // Implement the functionality for managing food menu
            alert('Redirecting to manage food menu page');
			window.location.href = 'admin food menu.php';
            // You can add additional code to navigate to the manage food menu page
        }

        function manageOnlineReservations() {
            // Redirect to the admin_reservation.php page
            window.location.href = 'admin reservation.php';
		}
			
		  function goToWebHome() {
            // Implement the functionality for managing food menu
            alert('Redirecting to home page');
            // You can add additional code to navigate to the manage food menu page
			window.location.href = 'homepage.php';
        }
    </script>
	
	<footer>
        &copy;Induwara| 2023 The Outer Clove. All rights reserved.
    </footer>
	
</body>
</html>
