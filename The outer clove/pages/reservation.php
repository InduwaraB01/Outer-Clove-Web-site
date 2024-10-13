<?php
include('newconnection.php');

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $sql = "SELECT * FROM reservation WHERE name='$name' OR date='$date' OR time='$time' OR email='$email'";
    $result = mysqli_query($conn, $sql);
    
    $count = mysqli_num_rows($result);

    if ($count == 0) {
        $sql = "INSERT INTO reservation (name, date, time, email) VALUES ('$name', '$date', '$time', '$email')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: homepage.php");
			
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo '<script>
		alert("Reservation failed. The selected date/time is already booked.")
		</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rFYGFkSWcWfiIQDROPZeP3LoLYX+P1cbbDZ7u1OhttMyUkldI6S1bCP7Uy5sXAJL" crossorigin="anonymous">
    <style>
body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
	        background-image: url("../images/video-bg.jpg")
	
        }

        #reservation-form {
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

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        #btn {
            background-color: #4AC7DA;
            color:black;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
			
			
			footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
			
			
			
			
			
			
			
        }
        /* Your custom styles here */
    </style>
</head>
<body>

    <div id="reservation-form">
        <h2>Reservation Form</h2>
        <form method="POST" action="">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Time:</label>
            <input type="time" id="time" name="time" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <input type="submit" id="btn" value="Submit" name="submit">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eJsQSbg7dJmU9wD6w8DZHLsy6EGibNSjT+V2T1QpHjHxB+sn8kUZefrWdQUnRLg" crossorigin="anonymous"></script>
	
	<footer>
        &copy; induwara| 2023 The Outer Clove. All rights reserved.
    </footer>
	
	
</body>
</html>
