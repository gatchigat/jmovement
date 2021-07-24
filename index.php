<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jesus Movement | Registration</title>
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
        </head>
        <body>

          <!-- PHP INCLUDE about-->
          <?php 
          include "about.php";
          ?>



          <!-- !Title -->
          <section class="colored-section" id="title">
            <div class="container-fluid">
              <!-- *BOOTSTRAP Navbar-->
              <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">Jesus Movement &nbsp</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="events.php">Events</a>
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
              <!-- *Title Heading and Image Bootstrap Grid-->
              <div class="row">
                <div class="col-lg-6">
                  <h1 class="big-heading">The Jesus people are here.</h1>
                </div>
                <div class="col-lg-6">
                  <img class="title-image" src="images/titleimg.png" alt="iphone-mockup">
                </div>
              </div>
              </div>
            </section>
          
          <!--TODO !Bootstrap Grid Group Features -->
          <section class="white-section" id="features">
            <div class="container-fluid">
              <div class="row">
                
                <div class="feature-box col-lg-4">
                  <i class="icon fas fa-seedling fa-4x"></i>
                  <h3 class="feature-title"><?php echo $groupTxt1; ?></h3>
                  <p><?php echo $groupCaption1; ?></p>
                </div>
                <div class="feature-box col-lg-4">
                  <i class="icon fas fa-heart fa-4x"></i>
                  <h3 class="feature-title"><?php echo $groupTxt2; ?></h3>
                  <p><?php echo $groupCaption2; ?></p>
                </div>
                <div class="feature-box col-lg-4">
                  <i class="icon fas fa-hands-helping fa-4x"></i>
                  <h3 class="feature-title"><?php echo $groupTxt3; ?></h3>
                  <p><?php echo $groupCaption3; ?></p>
                </div>
              </div>
            </div>
          </section>
          <!-- !Testimonials -->
           <!-- TODO *BOOTSTRAP Carousel testimonials x -->
          <section class="colored-section" id="testimonials">
            <!-- <div class="testimonialHeadingDiv"><h2 class="testimonialHeading bold">Testimonials</h2></div> -->
             <div id="testimonial-carousel" class="carousel slide" data-ride="false">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
              <div class="carousel-inner">
                <div class="testi3 carousel-item active container-fluid">
                  <h2 class="testimonial-text">Nang emena gushung mahogany kemerloo matod katagalugan bigalou bonggakea shonget bella na ng wasok shontis at nang kemerloo krang-krang ang bella shonget bigalou mashumers at nang shonget quality control jubabels.</h2>
                  <img class="testimonial-img" src="images/kim5.png" alt="profile">
                  <em>Kim Ahrin</em>
                </div>
                <div class="testi1 carousel-item container-fluid">
                  <h2 class="testimonial-text">Lorem ipsum keme keme keme 48 years otoko shonga na bigalou at ang shonget ano matod daki lorem ipsum keme keme at bonggakea bakit at nang na ang antibiotic kabog chapter na ang katol otoko lulu na pamentos wasok na ang Gino guash pranella.</h2>

                  <img class="testimonial-img" src="images/kevin2.png" alt="profile">
                  <em>Kevin Ansay</em>

                </div>
                <div class="testi1 carousel-item container-fluid">
                  <h2 class="testimonial-text">Nang emena gushung chipipay at bakit at bakit na ang effem at bakit ano kemerloo waz at bakit lorem ipsum keme keme balaj kemerloo at nang bakit ma-kyonget jowa pranella kasi buya at bakit intonses bakit na ganda lang thunder na valaj urky.</h2>
                  <img class="testimonial-img" src="images/kent3.jpg" alt="profile">
                  <em>Kent Harvey Paez</em>

                </div>
              </div>
              <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        
          </section>
     
          <!--TODO !About with embed video-->
          <section class="white-section" id="about">
            <h2 class="section-heading">About</h2>
            <!-- * About paragraph -->
            <p class="about-p">
            <?php
              echo $aboutTxt;
            ?></p>
             <!-- * 30 second facebook ad, from Kent -->

    <div class="maxvid">
      <div class="facebook-responsive">

        <iframe class="fbvid"
          src="https://www.facebook.com/plugins/video.php?height=315&href=https%3A%2F%2Fwww.facebook.com%2Fkentharvey.paez.9%2Fvideos%2F1389806964695980%2F&show_text=false&width=560"
          width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
          allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
          allowFullScreen="true"></iframe>

      </div>

    </div>

          </section>
          <!--TODO !Call to Action Quote -->
          <section class="colored-section container-fluid" id="cta">
            <h3 class="cta-heading">Ludum mutavit. Verbum est ex. Et ... sunt occidat. Videtur quod est super omne oppidum. Quis transfretavit tu iratus es contudit cranium cum dolor apparatus.</h3>
            <h2 class="sml-heading"> - Ego Intervenerit</h2>
          </section>
          <!-- !Footer -->
          <footer class="white-section" id="footer">
            <a href="https://www.facebook.com/JMMinistriesOfficial" target="blank"> <i
            class=" social-icon fab fa-facebook-f "></i></a>
            <a href="https://twitter.com/tjesusmovement?lang=en" target="blank"> <i
            class=" social-icon fab fa-twitter "></i></a>
            <a href="https://www.instagram.com/jesus_movement" target="blank"> <i
            class=" social-icon fab fa-instagram "></i></a>
            <a href="mailto:jesusmovement2021CIC@gmail.com"> <i class=" social-icon fas fa-envelope "></i></a>
            <p class=" copy-foot1">©Copyright 2021 Jesus Movement</p>
            <p class="copy-foot2">Gatchi @ College of Immaculate Conception</p>
          </footer>

        </body>
      </html>