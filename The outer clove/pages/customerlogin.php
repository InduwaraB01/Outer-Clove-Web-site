<?php
    include('newconnection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "select * from registration where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location: homepage.php");
        }  
        else{  
            echo  '<script>
                        window.location.href = "customerlogin.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }     
    }
    ?>


<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="customerlogin.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div id="form">
        <h1>Customer Login Form</h1>
        <form name="form" onsubmit="return isvalid()" method="POST">
            <label>Username: </label>
            <input type="text" id="user" name="user"><br><br>
            <label>Password: </label>
            <input type="password" id="pass" name="pass"><br><br>
			 <input type="button" id="btn" value="Clear" onclick="clearFields()" />

           

            <input type="submit" id="btn" value="Login" name="submit"/>
			
			 <div class="registration">
                <p>Haven't registered yet? Click <a href="newregister.php">here</a></p>
            </div>
        </form>
    </div>
    <script>
        function isvalid() {
            var user = document.form.user.value;
            var pass = document.form.pass.value;
            if (user.length == "" && pass.length == "") {
                alert(" Username and password field are empty!!!");
                return false;
            } else if (user.length == "") {
                alert(" Username field is empty!!!");
                return false;
            } else if (pass.length == "") {
                alert(" Password field is empty!!!");
                return false;
            }
        }
		
		function clearFields() {
            document.form.user.value = "";
            document.form.pass.value = "";
        }
		
    </script>
	
	<footer>
        &copy;Induwara| 2023 The Outer Clove. All rights reserved.
    </footer>
	
	
</body>
</html>
