
<!DOCTYPE html>
<html lang="en">
<?php
include("connect.php");
error_reporting(0);
?>
		<?php session_start();
if(isset($_SESSION["first_name"]))
{
	$uname=$_SESSION["first_name"];
}
else
{
	header("location:login1.php");
}

echo "Welcome ".$uname;
?>

  <head>
    <title>Virtual Tech Culture</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="contact1.php"><i class="flaticon-university"></i>Virtual<br><small>Tech</small> <small>Culture</small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="welcome1.php" class="nav-link">Home</a></li>
		  <li class="nav-item"><a href="login1.php?a=lo" class="nav-link">logout</a></li>
          <li class="nav-item active"><a href="contact1.php" class="nav-link">Contact</a></li>
          
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap hero-wrap-2" style="background-image: url('A1.gif'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="welcome1.php">Home</a></span> <span>Contact</span></p>
            <h1 class="mb-3 bread">Provide Feedback</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> 198 West palk Street,Alkapuri ,Baroda,Gujarat 390006</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://1234567920">+91 9624407281</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">soniparth541@yahoo.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">virtualtech.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
          	
            <form method="post" action="contact1.php">
			
			
			<h4 class="mb-4">Write your Name</h4>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="write here" name="name1">
              </div>
             
              
			  <h4 class="mb-4">Write your Experience!</h4>
              <div class="form-group">
                <textarea name="text12" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
			  
			  			<div class="form-radio">
                                    <div class="label-flex">
                                        <h4 class="mb-4">How much u like our website!</h4>
                                        
                                    </div>
                                    <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cash" value="notgood">
                                            <label for="cash">Not Good</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cheque" value="good">
                                            <label for="cheque">good</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="demand" value="verygood">
                                            <label for="demand">Very Good</label>
                                            <span class="check"></span>
                                        </div>
										 <div class="form-radio-item">
                                            <input type="radio" name="payment" id="demand1" value="excellent">
                                            <label for="demand1">Excellent</label>
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5" name="submit">
              </div>
			  
	 
            </form>
			<form class="rating" >
		 <label>
    <input type="radio" name="stars" value="1" />
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="2" />
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="3" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>   
  </label>
  <label>
    <input type="radio" name="stars" value="4" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="5" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  
			</form >
          
          </div>

          <div class="col-md-6" id="map"></div>
        </div>
      </div>
    </section>
		
		
    <footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url(images/bg_2.jpg); background-attachment:fixed;">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2><a class="navbar-brand" href="contact1.php"><i class="flaticon-university"></i>Virtual <br><small>Tech</small> <small>Culture</small></a></h2>
              <p>Educating Society is the most profound form of worship.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="video\xtreme.mp4">TXtreme carbon fabrics are the leading fibres.</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="video\airforce.mp4">Emerging power and technology in airforce</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
                <li><a href="index1.php" class="py-2 d-block">Home</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="index1.php" class="py-2 d-block">Courses</a></li>
                <li><a href="#" class="py-2 d-block">Students</a></li>
                <li><a href="index1.php" class="py-2 d-block">Video</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">198 West palk Street,Alkapuri ,Baroda,Gujarat  390006</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 9624407281</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">virtualtech@revert.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank">technocrats</a>
  </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="js/index3.js"></script>
    
  </body>
  <?php
 
		$eid=$_POST["txteid"];
		$name=$_POST["name1"];
		$textarea=$_POST["text12"];
		$select=$_POST["payment"];
		
		 if(isset($_POST["submit"]))
		 {	 
		
	
		
		$quary="insert into feedback1 values ('$eid','$name','$textarea','$select')";
			$rev=mysqli_query($con,$quary);
		
	}
		
		?>
</html>