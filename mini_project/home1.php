<!DOCTYPE html>
<html lang="en">
<?php
?>
<style>
div div img{
		opacity:1.9;
		padding:3px;
		box-shadow:red 4px 5px 5px ;
		transition:transform 3s;
		}
		
		div div img:hover{
		opacity:1;
		transform: scale(1.5,1.5);
		}
</style>
<head>

	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7\dist\css\bootstrap.css">
	
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<!--<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />--> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

	
	<script src="bootstrap-3.3.7\dist\js\jquery.js"></script>
	<script src="bootstrap-3.3.7\dist\js\bootstrap.js"></script>
	<script src="bootstrap-3.3.7\dist\js\angular.js"></script>
	<link href="carousel.css" rel="stylesheet">
</head>



<!-- NAVBAR
================================================== -->
  <body style="background-color:lightpink">
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar nav-pills navbar-fixed-top" style="background : linear-gradient(lightblue,silver)";>
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li ><a href="#"><b><font style="font-family:Monotype Corsiva; font-size:150%;" color="black">Home</font></b></a></li>
                <li><a href="#about"><b><font style="font-family:Monotype Corsiva; font-size:150%;" color="black">About</font></b></a></li>
                
				<li><a href="logeedin.php"><b><font style="font-family:Monotype Corsiva; font-size:150%;" color="black">login</font></b></a></li>
				<li><a href="signup.php"><b><font style="font-family:Monotype Corsiva; font-size:150%;" color="black">Sign up</font></b></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" ><b><font style="font-family:Monotype Corsiva; font-size:150%;"color="black">Subject</font></b><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">PHP</a></li>
                    <li><a href="#">Java</a></li>
                    <li><a href="#">.net</a></li>

                    <li><a href="#">Python</li>
                    <li><a href="#">AI</a></li>
                    <li><a href="#">HTML</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


   
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide"src="A1.gif" alt="first slide" style="height:300px width:100%">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p></p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="a3.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p></p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="a4.jpg" alt="third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p></p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
		<div class="item">
          <img class="fourth-slide" src="a6.jpg" alt="fourth slide">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p></p>
              <p><a class="btn btn-sm btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" ></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" ></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

<div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-sm-4">
          <img class="img-square" src="quiz.jpeg" width="290" height="200">
          <h2>Quiz</h2>
          <p></p>
          <p><a class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-sm-4">
          <img class="img-square" src="PHP.jfif" width="290" height="200">
          <h2>PHP</h2>
          <p></p>
          <p><a class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-sm-4">
          <img class="img-square" src="cc.png" width="290" height="200">
          <h2>C#</h2>
          <p></p>
          <p><a class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
        </div>
		
		<div class="col-sm-4">
          <img class="img-square" src="python.jpg" width="290" height="200">
          <h2>PYTHON</h2>
          <p></p>
          <p><a class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
        </div>
		
		<div class="col-sm-4">
          <img class="img-square" src="java.jpg" width="290" height="200">
          <h2>JAVA</h2>
          <p></p>
          <p><a class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
        </div>
		
		<div class="col-sm-4">
          <img class="img-square" src="html.jfif" width="290" height="200">
          <h2>HTML</h2>
          <p></p>
          <p><a class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
        </div>
		
		<div class="col-sm-4">
          <img class="img-square" src="c.jfif" width="290" height="200">
          <h2>C</h2>
          <p></p>
          <p><a class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
        </div>
		
		<div class="col-sm-4">
          <img class="img-square" src="bootstrap.jfif" width="290" height="200">
          <h2>BOOTSTRAP</h2>
          <p></p>
          <p><a class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
        </div>
		
		<div class="col-sm-4">
          <img class="img-square" src="ai.jpg" width="290" height="200">
          <h2>AI</h2>
          <p></p>
          <p><a class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
        </div>
		
		
		<!-- /.col-lg-4 -->
		
		
		
		
		
			<br>
      </div><!-- /.row -->
	  <div class="row">
	  <div class="col-sm-6"  style="background-color:lightblue" >
			<h1 style="color:brown" class="text-center">Post Your Review</h1>
			<textarea rows="7" cols="65" class="center-block"></textarea><br>
			<p><button class="btn btn-warning">Post</button></p>
			</div>
			
			<div class="col-sm-6">
		<input type="button" class="btn btn-success" value="Contact Us" style="width:100%">
		<div class="well">
		<span class="glyphicon glyphicon-list-alt"></span><b>Address:</b> 1458 akota complex, Baroda<br>
		<span class="glyphicon glyphicon-phone"></span><b>Telephone:</b> +91-8839-9476-21-<br>
		<span class="glyphicon glyphicon-print"></span><b>FAX:</b> +458-4578<br>
		<span class="glyphicon glyphicon-phone-alt"></span><b>Others:</b> +301 - 0125 - 01258<br>
		<span class="glyphicon glyphicon-inbox"></span><b>E-mail:</b> mail198@zomato.com<br>
		</div>
		</div>
		</div>
		
		
		
		<div class="newsletter">
		<div class="container">
			<div class="w3agile_newsletter_left">
				<h3>sign up for our newsletter</h3>
			</div>
			<div class="w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="subscribe now">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 w3_footer_grid">
				<h3>information</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="events.html">Events</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="products.html">Best Deals</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="short-codes.html">Short Codes</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>policy info</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="faqs.html">FAQ</a></li>
					<li><a href="privacy.html">privacy policy</a></li>
					<li><a href="privacy.html">terms of use</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>what in stores</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="pet.html">Pet Food</a></li>
					<li><a href="frozen.html">Frozen Snacks</a></li>
					<li><a href="kitchen.html">Kitchen</a></li>
					<li><a href="products.html">Branded Foods</a></li>
					<li><a href="household.html">Households</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>twitter posts</h3>
				<ul class="w3_footer_grid_list1">
					<li><label class="fa fa-twitter" aria-hidden="true"></label><i>01 day ago</i><span>Non numquam <a href="#">http://sd.ds/13jklf#</a>
						eius modi tempora incidunt ut labore et
						<a href="#">http://sd.ds/1389kjklf#</a>quo nulla.</span></li>
					<li><label class="fa fa-twitter" aria-hidden="true"></label><i>02 day ago</i><span>Con numquam <a href="#">http://fd.uf/56hfg#</a>
						eius modi tempora incidunt ut labore et
						<a href="#">http://fd.uf/56hfg#</a>quo nulla.</span></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="agile_footer_grids">
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h4>100% secure payments</h4>
						<img src="images/card.png" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h5>connect with us</h5>
						<ul class="agileits_social_icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="wthree_footer_copy">
				<p>© 2016 Grocery Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
		
		

      
</body>


</html>