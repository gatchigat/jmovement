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
          <style>
    			.navbar{
    				padding-bottom: 0;
    			}
    			h3{
    				text-align: center;
    				font-weight: bold;
    				padding-bottom: 20px;
    			}
    	/*	main{
    				height: 85vh;
    				font-size: 20px;
    				font-weight: bold;
    				display: flex;
    				justify-content: center;
    				align-items: center;
    			}*/
    			p{
    				/*max-width: 100vw;*/
    			}
      </style>
</head>
<body>
	<!-- !Title -->
          <section class="colored-section others">
            <div class="">
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
                      <a class="nav-link" href="events.php">Events</a>
                    </li>
                  </ul>
                </div>
              </nav>
          </div>
      </section>
      <main id="">
          <!-- !Features -->
      <div class='phpDiv'>
        <?php 
			
        // SUBMIT == TRUE
				if(isset($_POST['submit'])){

  				$fName = $_POST['fName'];
  				$lName = $_POST['lName'];
  				$emailAdd = $_POST['email'];
  				$contactNo = $_POST['contactNo'];
  				$addressReg = $_POST['addressReg'];

          //APPEND TXT FILE AND SAVE
          $toSave = fopen("JesusMovementMembReg.txt", "a") or die("Unable to open file!");
          $regCon = 'First Name: '.$fName."\n".'Last Name: '.$lName."\n".'Email Address: '.$emailAdd."\n".'Contact No: '.$contactNo."\n".'Address:  '.$addressReg."\n\n";
          fwrite($toSave, $regCon);
          fclose($toSave);


          //DB Connect 

          //DEV LOCALHOST
          // $host = '127.0.0.1';
          // $db = 'jmovement';
          // $user = 'root';
          // $pass = '';


          //LIVE HEROKU
          $host = 'remotemysql.com';
          $db = 'gB9Y3DkByD';
          $user = 'gB9Y3DkByD';
          $pass = '4v08SFVVyW';



          $connection = mysqli_connect($host, $user, $pass, $db);

          //TEST CONNECTION
          // if($connection){
          //   echo 'Connected';
          // } else {
          //   die("Connection failed");
          // }


          //INSERT VALUES
          $query = "INSERT INTO registration(FirstName, LastName, email, contactNo, address)";
          $query .=  "VALUES ('$fName', '$lName', '$emailAdd', '$contactNo', '$addressReg')";

          $result = mysqli_query($connection, $query);

          //ERROR
          if (!$result){
            die('Error'.mysqli_error());
          }


					echo 'Registration Successful!';             //CONFIRM REG
          header( "refresh:3; url=register.php" );    //REFRESH PAGE AFTER 3 SECONDS
				
        //SUBMIT == FALSE
				} else{
					#pass
				}
				 ?>
				 </div>

          <section class="white-section" id="register">
            <div class="container-fluid">

            	<!-- Bootsrap Forms -->
            	<h3 class="bold">Registration</h3>
               <form action="" method="POST" >
            	   <div class="form-group row">
                  <label for="fName" class='input-label col-sm-4 col-form-label text-left'>First Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-lg"name="fName" id="fName" size="" required="">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="lName" class='input-label col-sm-4 col-form-label text-left font-weight-bold'>Last Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-lg"name="lName" id="lName" size="" required="">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="email" class='input-label col-sm-4 col-form-label text-left font-weight-bold'>Email</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control form-control-lg"name="email" id="email" size="" required="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="contactNo" class='input-label col-sm-4 col-form-label text-left font-weight-bold'>Contact No</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control form-control-lg"name="contactNo" id="contactNo" maxlength="" required="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="addressReg" class='input-label col-sm-4 col-form-label text-left font-weight-bold'>Address</label>
                  <div class="col-sm-8">
                    <textarea name="addressReg" class="form-control form-control-lg" id="addressReg" cols="" rows="6" required="required"></textarea>
                  </div>
                </div>
            	
            	<div class="buttonDiv"><button type="submit" name='submit' class="btn btn-outline-dark btn-lg">Submit</button></div>
				      </form>
          </div>
        </section>

	</main>
	<!-- !Footer -->
        <footer class="colored-section footer-others" id="footer">
          <a href="https://www.facebook.com/JMMinistriesOfficial" target="blank"> <i
          class=" social-icon-others fab fa-facebook-f "></i></a>
          <a href="https://twitter.com/tjesusmovement?lang=en" target="blank"> <i
          class=" social-icon-others fab fa-twitter "></i></a>
          <a href="https://www.instagram.com/jesus_movement" target="blank"> <i
          class=" social-icon-others fab fa-instagram "></i></a>
          <a href="mailto:jesusmovement2021CIC@gmail.com"> <i class=" social-icon-others fas fa-envelope "></i></a>
          <p class=" copy-foot1Others footer-others">©Copyright 2021 Jesus Movement</p>
          <p class="copy-foot2 footer-others2">Website by Gatchi @ College of Immaculate Conception</p>
        </footer>
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