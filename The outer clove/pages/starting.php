<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Outer Clove</title>
    <style>
        body {
			background-image: url("../images/sea shells.jpg");
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        #login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
            margin-bottom: 20px;
        }

        .user-type-btn {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .user-type-btn.customer {
            background-color: #3498db;
            color: #fff;
        }

        .user-type-btn.admin {
            background-color: #e74c3c;
            color: #fff;
        }

        .user-type-btn:hover {
            background-color: #2c3e50;
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
    <div id="login-container">
        <h1>The Outer Clove</h1>
        <p>To browse or use the website, you need to sign in. If you don't have an account, you can sign up.</p>

        <button class="user-type-btn customer" onclick="redirectToSignIn('customer')">Sign In as Customer</button>
        <button class="user-type-btn admin" onclick="redirectToSignIn('admin')">Sign In as Admin</button>
        
        <p>Don't have an account? <a href="../pages/newregister.php">Sign Up Here</a></p>
    </div>

    <script>
        function redirectToSignIn(userType) {
            // You can customize this function to redirect users to the appropriate sign-in page based on their chosen user type.
            if (userType === 'customer') {
                window.location.href = 'customerlogin.php'; // Update with your customer sign-in page URL
            } else if (userType === 'admin') {
                window.location.href = 'adminlogin.php'; // Update with your admin sign-in page URL
            }
        }
    </script>
	
	<footer>
        &copy; induwara| 2023 The Outer Clove. All rights reserved.
    </footer>
</body>
</html>
