<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jesus Movement | Events</title>
	    <!-- *Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <!-- *CSS-->
      <link rel="stylesheet" href="css/styles.css">
      <script src="https://kit.fontawesome.com/50451a9c34.js" crossorigin="anonymous"></script>
      <!-- *Javascript -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
      integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
      crossorigin="anonymous"></script>
      <!-- *Google Fonts -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Roboto&family=Ubuntu&display=swap"
        rel="stylesheet">
        <link
          href="https://fonts.googleapis.com/css2?family=Amita&family=Bad+Script&family=Calligraffitti&family=Caveat&family=Clicker+Script&family=Courgette&family=Covered+By+Your+Grace&family=Damion&family=Dancing+Script&family=Delius&family=Gloria+Hallelujah&family=Gochi+Hand&family=Great+Vibes&family=Kalam&family=Merienda&family=Merriweather&family=Montserrat&family=Nothing+You+Could+Do&family=Open+Sans&family=Oswald&family=Oxygen&family=Pangolin&family=Patrick+Hand&family=Redressed&family=Roboto&family=Sacramento&family=Satisfy&family=Shadows+Into+Light&family=Stalemate&family=Tillana&display=swap"
          rel="stylesheet">
          <!-- *Favicon -->
          <link rel="icon" href="favicon.ico" />
          <style>
    			.navbar{
    				padding-bottom: 0;
    			}
    /*			h3{
    				text-align: center;
    				font-weight: bold;
    				padding-bottom: 20px;
    			}*/
    			main{
            text-align: center;
            height: 85vh;
            /*width: 100vw;*/
    			
          }

            p{
            /*max-width: 1000vw;*/
    			}
      </style>
</head>
<body>

  <!-- INCLUDE about.php -->
  
<?php
include "about.php"
?>

	<!-- !Title -->
          <section class="colored-section others">
            <div class="1">
              <!-- *Nav Bar -->
              <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="index.php">Jesus Movement &nbsp</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php#about">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="register.php">Register</a>
                    </li>
                    <!-- <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li> -->
                  </ul>
                  <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form> -->
                </div>
              </nav>
          </div>
      </section>
       
     <section class="white-section" id="events">
            
              <h2 class="bolder colorG">Events</h2>
              <!-- <div class="testimonialHeadingDiv"><h2 class="testimonialHeading bold">Testimonials</h2></div> -->
        
             <div id="event-carousel" class="carousel slide " data-ride="false">

              <div class="carousel-inner">
                <div class="testi2 carousel-item active container-fluid">
                   <h2 class="testi1 bold big"><?php echo $heading1; ?>
                  </h2> 
                  <h4 class="testi1 bold"><?php echo $date1; ?>
                  </h4>
                  <h4 class="testi1 bold"><?php echo $venue1; ?>
                  </h4>  
                  <h5 class="testi1 event-text"><?php echo $desc1; ?>
                  </h5>
                </div>
                     <div class="testi2 carousel-item container-fluid">
                   <h2 class="testi2 bold big"><?php echo $heading2; ?>
                  </h2> 
                  <h4 class="testi2 bold"><?php echo $date2; ?>
                  </h4>
                  <h4 class="testi2 bold"><?php echo $venue2; ?>
                  </h4>  
                  <h5 class=" esti2 event-text"><?php echo $desc2; ?>
                  </h5>
                </div>
                   <div class="testi2 carousel-item container-fluid">
                   <h2 class="testi2 bold big"><?php echo $heading3; ?>
                  </h2> 
                  <h4 class="testi2 bold"><?php echo $date3; ?>
                  </h4>
                  <h4 class="testi2 bold"><?php echo $venue3; ?>
                  </h4>  
                  <h5 class="testi2 event-text"><?php echo $desc3; ?>
                  </h5>
                </div>
              </div>
              <a class="carousel-control-prev" href="#event-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon1" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#event-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon1" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
           
          </div>
        </section>

	
	<!-- !Footer -->
        <section>
          <footer class="colored-section footer-others" id="footer">
            <a href="https://www.facebook.com/JMMinistriesOfficial" target="blank"> <i
            class=" social-icon-others fab fa-facebook-f "></i></a>
            <a href="https://twitter.com/tjesusmovement?lang=en" target="blank"> <i
            class=" social-icon-others fab fa-twitter "></i></a>
            <a href="https://www.instagram.com/jesus_movement" target="blank"> <i
            class=" social-icon-others fab fa-instagram "></i></a>
            <a href="mailto:jesusmovement2021CIC@gmail.com"> <i class=" social-icon-others fas fa-envelope "></i></a>
            <p class=" copy-foot1Others footer-others">©Copyright 2021 Jesus Movement</p>
            <p class="copy-foot2 ">Website by Gatchi @ College of Immaculate Conception</p>
          </footer>
        </section>

          		<script>
			function TestsFunction() {
				    var T = document.getElementById("othersMain");
					    if (T.style.display === "block"){
					    	T.style.display = "none";  // <-- Set it to block

					  	}else {
	    					T.style.display = "none";
	  					}
					}

		</script>
</body>
</html>