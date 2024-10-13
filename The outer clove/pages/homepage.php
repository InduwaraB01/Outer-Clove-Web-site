<!DOCTYPE html>
<html lang="en">

  <head>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
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
	
	header{
		background-image: url("../images/page-heading-bg.jpg")
	}
	
	

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link href="homepage.css" rel="stylesheet" type="text/css">
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
  </head>

<body>

		
	

  <!-- ***** Preloader Start ***** --><!-- ***** Preloader End ***** --><!-- ***** Header Area Start ***** -->
  
                    <!-- ***** Logo Start ***** -->
                    <header class="header" id="header"><div class="header">
						<div class="topnav">
							 <p><a href="homepage.php">Home|</a>
								 <a href="menuu.php">Menu|</a>
								 <a href="contact.html">Contact Us|</a>
								 <a href="about us.php">About Us</a></p>
							 </div>
						
						 <div class="title">
							 <h1>The Outer Clove restaurant </h1>
							 </div>
						
						
							<div class="indexlogin"> 
								<p>Log-out from  <a href="customerlogin.php">here</a><hr></p>
						 </div>
						</div>
	</header>
						
							 
							
      
             
  <!-- ***** Header Area End ***** -->
	
		<div class="slideshow-container">


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="../images/burger offer.jpg" width="1000px" height="500">
  <div class="text">Todays Offer!</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
 <img src="../images/outerclove outside.jpg" width="1000px" height="500px">
  <div class="text">The outer Clove</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="../images/customer service.jpg" width="1000px" height="500px">
  <div class="text">Friendly staff</div>
</div>
	<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="../images/bar.jpg" width="1000px" height="500px">
  <div class="text">classy private pub</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

	




  </div>
		<div class="hotel facilities">
		  <h1>&#160  &#160 &#160 &#160 &#160 &#160 &#160 &#160 &#160SERVICES &#160 &#160&#160 &#160 &#160 &#160 &#160 &#160 &#160 &#160 &#160 &#160 &#160  &#160 &#160FOOD&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160 &#160 &#160&#160 &#160 &#160&#160&#160&#160&#160FACILITIES</h1>
		  <article class="facility " id="facilities">&#160 &#160 &#160 &#160 &#160&#160 &#160  <a href="services.php"><img src="../images/services lebel.jpg" width="400" height="260" alt="" /></a>&#160&#160  &#160 &#160 &#160 &#160&#160 &#160  <a href="food menu.php"><img src="../images/food lebel.jpg" width="400" height="260" alt=""/> </a>&#160&#160  &#160 &#160 &#160 &#160 &#160 &#160 <a href="facilities.php"><img src="../images/facilities lebel.jpg" width="400" height="260" alt=""/></a></article>
</div>

  

  
        
            
             
				<hr>
  <div class="footer">
           
          
    <div class="contact us">
                <h6>&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160CONTACT US ON &#160 &#160&#160 &#160&#160 &#160 &#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160&#160 CONTACT OUR AGENT &#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160Available locations <p>&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160 <a href="contact.html"> contact </a>&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160MATARA/ GALLE/ COLOMBO</p>  </h6>
    </div>
              
          
        
       
    <div class="socials">
          <p><span class="item phone"><img src="../images/phone-icon.png" alt="" style="max-width: 25px;"></span>&#160 55555555&#160 &#160<span class="item phone"><span class="item email"><img src="../images/email-icon.png" alt="" style="max-width: 33px;"></span></span>&#160&#160info@theOuterClove@icloud.com  &#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160follow us on <img src="../images/instagram.png" alt="instlogo" width="20px" height="20px" >  <img src="../images/facebook.png" alt="facebooklogo" width="20px" height="20px">
          <br>
          </p>
          <p>&nbsp;</p>
    </div>
  </div>
<footer>
        &copy; induwara| 2023 The Outer Clove. All rights reserved.
    </footer>



<!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

	
  </body>
</html>