<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Facilities</title>
    <style>
       
		body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
		
        #feedback-popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
        }
        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
		
		
		Header{
			
			font-size: 35px;
			font-family: Constantia, "Lucida Bright", "DejaVu Serif", Georgia, "serif";
			color: #C8BEAA;
			background-image: url("../images/page-heading-bg.jpg")
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
    <link href="facility.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <div class="facility title">
            <h1>Our Restaurant Facilities</h1>
            <hr>
        </div>
    </header>

    <section>
        <h2>Seating Capacity</h2>
        <p>We offer a comfortable seating environment with a capacity to accommodate a variety of group sizes. Whether you're dining alone, with a partner, or in a large group, we have the perfect seating arrangement for you.</p>
        <!-- You can replace the image URL below with your own -->
        <img src="../images/seating.jpg" alt="Seating Area">
    </section>

    <section>
        <h2>Parking</h2>
        <p>Convenient parking is available for our valued customers. We understand the importance of hassle-free parking, and we provide ample space to ensure your visit is stress-free.</p>
        <!-- You can replace the image URL below with your own -->
        <img src="../images/facilities lebel.jpg" alt="Parking Area">
    </section>

    <section>
        <h2>Washroom Facilities</h2>
        <p>Our clean and well-maintained washrooms are designed to provide you with a pleasant and hygienic experience. We prioritize the cleanliness and comfort of our guests.</p>
        <!-- You can replace the image URL below with your own -->
        <img src="../images/public-toilet.jpg" alt="Washroom Area">
    </section>

	
    <footer>
        
		&copy;Induwara| 2023 The Outer Clove. All rights reserved.
    
    </footer>
	

    <div id="overlay"></div>
    <div id="feedback-popup">
        <h2>Feedback Form</h2>
        <p>We would love to hear your thoughts on our services. Please provide your feedback below:</p>
        <form action="#" method="post" onsubmit="submitFeedback(); return false;">
            <label for="feedback">Your Feedback:</label><br>
            <textarea id="feedback" name="feedback" rows="4" cols="50" required></textarea><br>
            <input type="submit" value="Submit">
        </form>
        <button onclick="hideFeedbackPopup()">Close</button>
    </div>

    <script>
        // Show the feedback popup after 6 seconds
        setTimeout(function () {
            showFeedbackPopup();
        }, 10000);

        function showFeedbackPopup() {
            document.getElementById('overlay').style.display = 'block';
            document.getElementById('feedback-popup').style.display = 'block';
        }

        function hideFeedbackPopup() {
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('feedback-popup').style.display = 'none';
        }

        function submitFeedback() {
            // Perform actions to submit feedback (e.g., send to server, store in a database)
            alert('Thank you for your feedback!');
            hideFeedbackPopup();
        }
    </script>
	
	
	<footer>
        &copy;Induwara| 2023 The Outer Clove. All rights reserved.
    </footer>
	
	
	
	

</body>
</html>
