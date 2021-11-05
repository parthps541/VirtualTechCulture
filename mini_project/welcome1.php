<!DOCTYPE html>

<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    
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
      <a class="navbar-brand" href="welcome1.php"><i class="flaticon-university"></i>VIRTUAL<br><small>TECH</small> <small>CULTURE</small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="welcome1.php" class="nav-link">Home</a></li>
		
          <li class="nav-item"><a href="#link" class="nav-link">E-books</a></li>
		  <div class="dropdown">
  <button class="dropbtn" class="nav-item" class="nav-link">Subjects</button>
  
  <div class="dropdown-content">
    
    <a href="images/cprogramming.pdf">C programming</a>
	<a href="images/network.pdf">Networking</a>
	<a href="images/php.pdf">PHP</a>
	<a href="images/html.pdf">HTML </a>
	
	
	
  </div>
</div> 
		   
          <li class="nav-item"><a href="contact1.php" class="nav-link">feedback</a></li>
          
		  
    <div class="dropdown">
  <button class="dropbtn" class="nav-item" class="nav-link">Audio Books</button>
  <div class="dropdown-content">
    
    <a href="video\deductivelogic.mp3">Deductive logic</a>
	<a href="video\gameoflogic.mp3">Game of Logic</a>
	<a href="video\deductive2.mp3">Deductive and Inductive</a>
	<a href="video\symbolic.mp3">UML Concepts</a>
	<a href="video\concepts.mp3">OOP Concepts</a>
  </div>
</div>      
          
		 
		
  <div class="dropdown">
  <button class="dropbtn" class="nav-item" class="nav-link">Settings</button>
  
  <div class="dropdown-content">
    
    <a href="login1.php?a=lo">logout</a>
    
	<script type="text/javascript">
function AlertIt() {
	
var answer = confirm ("are you sure you want to delete your account?")
if (answer)
	
window.location="delete1.php";


}

</script>

<a href="javascript:AlertIt();">delete my account</a>
  </div>
</div>
		  
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <h1 class="mb-4">

			<p id="demo"></p>
			<script>
			var i = 0;
var txt = 'Lorem ipsum typing effect!'; /* The text */
var speed = 50; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
</script>
			<?php session_start();
if(isset($_SESSION["email"]))
{
	$uname=$_SESSION["email"];
	
}
else
{
	header("location:login1.php");
}


echo "Welcome ".$uname;
?></h1>
            <p><a href="#books" class="btn btn-primary px-4 py-3">View Books</a>
			<a href="#course12" class="btn btn-secondary px-4 py-3">View Courses</a></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-search-course">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="d-md-flex flex-column-reverse">
    					<div class="full-wrap d-flex ftco-animate">
    						<div class="one-third order-last p-5">
    							<span>Know what you're after?</span>
    							<h3>I want to study</h3>
    							
		              <p>Just Browsing? <a href="#course12"> See all courses</a></p>
    						</div>
    						<div class="one-forth order-first img" style="background-image: url(images/image_1.jpg);"></div>
    					</div>
    					<div class="full-wrap ftco-animate">
    						<div class="one-half">
    							<div class="featured-blog d-md-flex">
    								<div class="image d-flex order-last">
    									<a href="#" class="img" style="background: url(images/image_2.jpg);"></a>
    								</div>
    								<div class="text order-first">
    									<span class="date">Aug 20, 2019</span>
    									<h3><a href="#">Techno-blogs 2019</a></h3>
											<p>Students can feel enlighten by our blogs, it is good form of providing knowledge.</p>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
          <div class="col-sm-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-exam"></span></div>
              <div class="media-body px-3">
                <h3 class="heading">QUIZ ZONE</h3>
                <p>Examine yourself with this fully enrich quiz which will boost your knowledge and Enthusisam.</p>
              </div>
            </div>      
          </div>
          <div class="col-sm-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-blackboard"></span></div>
              <div class="media-body px-3">
                <h3 class="heading">NOTIFICATIONS</h3>
                <p>we will keep you updated of every second-to-second happenings with this unique feature.</p>
              </div>
            </div>      
          </div>
          <div class="col-sm-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-books"></span></div>
              <div class="media-body px-3">
                <h3 class="heading">E-BOOKS</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
		  
		  					  
	

		  
		  
		<div class="row">
		<div class="col-sm-3">
		<div class="well">
		<div style="background-color:white">
		<img src="pp.gif" style="width:300px; height:180px;">
		
	    </div>
		</div>
		</div>
		
				<div class="col-sm-3">
		<div class="well">
				<div>
				<img src="pppp.gif"style="width:300px; height:180px;" >
				</div>
				</div>
				</div>
				
				
				<div class="col-sm-3">
		<div class="well">
				<div>
				<img src="pop.gif" style="width:300px; height:180px;" >
				</div>
				</div>
				</div>
				
				
				
				<div class="col-sm-3">
		<div class="well">
				<div>
				<img src="ppp.gif"style="width:300px; height:180px;" >
				</div>
				</div>
				</div>
				
		</div>
	 
	 
	  </section>
	
    	<div class="container" >
    		<div class="row" >
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="course align-self-stretch" id="course12">
    					<a href="#" class="img" style="background-image: url(images/course-1.jpg)"></a>
    					<div class="text p-4" >
    						<p class="category"><span>Basics Of IT</span> <span class="price">free</span></p>
    						<h3 class="mb-3"><a href="#">C language</a></h3>
    						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
							<script type="text/javascript">
							function opentab(th){
							window.open(th.name,'_blank');}</script>
    						<p><a onclick="opentab(this)"href="#"name="images/cprogramming.pdf" class="btn btn-primary">Open PDF</a>
							&nbsp &nbsp 
							&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
							<a onclick="opentab(this)"href="#"name="c.php" class="btn btn-danger">Give Quiz</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="course align-self-stretch">
    					<a href="#" class="img" style="background-image: url(images/course-2.jpg)"></a>
    					<div class="text p-4">
    						<p class="category"><span>Computer Engineering</span> <span class="price">free</span></p>
    						<h3 class="mb-3"><a href="#">Networking</a></h3>
    						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
							<script type="text/javascript">
							function opentab(th){
							window.open(th.name,'_blank');}</script>
    						<p><a onclick="opentab(this)"href="#"name="images/network.pdf" class="btn btn-primary">Open PDF</a>
							&nbsp &nbsp 
							&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
							<a onclick="opentab(this)"href="#"name="c.php" class="btn btn-danger">Give Quiz</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="course align-self-stretch">
    					<a href="#" class="img" style="background-image: url(images/course-3.jpg)"></a>
    					<div class="text p-4">
    						<p class="category"><span>Computer IT</span> <span class="price">free</span></p>
    						<h3 class="mb-3"><a href="#">PHP</a></h3>
    						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
							<script type="text/javascript">
							function opentab(th){
							window.open(th.name,'_blank');}</script>
    						<p><a onclick="opentab(this)"href="#"name="images/php.pdf" class="btn btn-primary">Open PDF</a>
							&nbsp &nbsp 
							&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
							<a onclick="opentab(this)" href="#" name="c.php" class="btn btn-danger">Give Quiz</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="course align-self-stretch">
    					<a href="#" class="img" style="background-image: url(images/course-4.jpg)"></a>
    					<div class="text p-4">
    						<p class="category"><span>Front End</span> <span class="price">free</span></p>
    						<h3 class="mb-3"><a href="#">HTML</a></h3>
    						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
							<script type="text/javascript">
							function opentab(th){
							window.open(th.name,'_blank');}</script>
    						<p><a onclick="opentab(this)"href="#"name="images/html.pdf" class="btn btn-primary">Open PDF</a>
							&nbsp &nbsp 
							&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
							<a onclick="opentab(this)"href="#"name="c.php" class="btn btn-danger">Give Quiz</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="course align-self-stretch">
    					<a href="#" class="img" style="background-image: url(images/course-5.jpg)"></a>
    					<div class="text p-4">
    						<p class="category"><span>Web Framework</span> <span class="price">free</span></p>
    						<h3 class="mb-3"><a href="#">Angular</a></h3>
    						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
							<script type="text/javascript">
							function opentab(th){
							window.open(th.name,'_blank');}</script>
    						<p><a onclick="opentab(this)"href="#"name="images/angularjs_tutorial.pdf" class="btn btn-primary">Open PDF</a>&nbsp &nbsp 
							&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
							<a onclick="opentab(this)"href="#"name="c.php" class="btn btn-danger">Give Quiz</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="course align-self-stretch">
    					<a href="#" class="img" style="background-image: url(images/course-6.jpg)"></a>
    					<div class="text p-4">
    						<p class="category"><span>Machine Learning</span> <span class="price">free</span></p>
    						<h3 class="mb-3"><a href="#">Artificial Intelligence</a></h3>
    						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
    						<p><a onclick="opentab(this)"href="#"name="images/artificial_intelligence.pdf" class="btn btn-primary">Open PDF</a>
							&nbsp &nbsp 
							&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
							<a onclick="opentab(this)"href="#"name="c.php" class="btn btn-danger">Give Quiz</a></p>
    					</div>
    				</div>
    			</div>
    		</div>
    		
    	</div>
 
 <section class="ftco-freeTrial" id="quiz">
    	<div class="container" >
    		<div class="row">
    			<div class="col-md-12" >
    				<div class="d-flex align-items-center">
			    		<div class="free-trial ftco-animate">
			    			<h3>Start Quiz</h3>
			    			<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
			    		</div>
			    		<div class="btn-join ftco-animate">
			    			<p><a href="quiz_random.php" id="myBtn"class="btn btn-primary py-3 px-4">Start now!</a></p>
							
							 

						</div>
			    		</div>
			    	</div>
    			</div>
    		</div>
    	</div>
    </section>
	
 
		    <section class="ftco-section bg-light">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center" id="link">
            <h2 class="mb-4" id="books" >Our E-books</h2>
          </div>
        </div>
        <div class="row" >
        	<div class="col-lg-4 mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/person_1.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="#">Cloud Computing</a></h3>
        					<span class="position">Computing Resources</span>
        					<p class="ftco-social d-flex">
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
		              </p>
        				</div>
        			</div>
        			<div class="text">
        				<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
        			</div>
					<script type="text/javascript">
							function opentab(th){
							window.open(th.name,'_blank');}</script>
					<p><a onclick="opentab(this)"href="#"name="E-Books\Cloud COmputing\cc.pdf" class="btn btn-primary">Open E-book</a></p>
        		</div>
        	</div>
        	<div class="col-lg-4 mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/person_2.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="#">Python</a></h3>
        					<span class="position">Multi Paradigsm</span>
        					<p class="ftco-social d-flex">
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
		              </p>
        				</div>
        			</div>
        			<div class="text">
        				<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
        			</div>
					<script type="text/javascript">
							function opentab(th){
							window.open(th.name,'_blank');}</script>
					<p><a onclick="opentab(this)"href="#"name="E-Books\Python\python.pdf" class="btn btn-primary">Open E-book</a></p>
        		</div>
        	</div>
        	<div class="col-lg-4 mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/person_3.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="#">System Analysis</a></h3>
        					<span class="position">Frame System Design</span>
        					<p class="ftco-social d-flex">
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
		              </p>
        				</div>
        			</div>
        			<div class="text">
        				<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
        			</div>
					<script type="text/javascript">
							function opentab(th){
							window.open(th.name,'_blank');}</script>
					<p><a onclick="opentab(this)"href="#"name="E-Books\System Analysis and Design\ss.pdf" class="btn btn-primary">Open E-book</a></p>
        		</div>
        	</div>
        </div>
      </div>
    </section>
	
	
		
    <footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url(images/bg_2.jpg); background-attachment:fixed;">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2><a class="navbar-brand" href="welcome1.php"><i class="flaticon-university"></i>Virtual <br><small>Tech</small> <small>Culture</small></a></h2>
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
                  <h3 class="heading"><a href="video\xtreme.mp4">Txtreme fabrics are the most powerful fibres.</a></h3>
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
                <li><a href="#" class="py-2 d-block">Home</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Courses</a></li>
                <li><a href="#" class="py-2 d-block">Students</a></li>
                <li><a href="#" class="py-2 d-block">Video</a></li>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by Technocrates.
  </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


	  <style>
   /* Dropdown Button */
.dropbtn {
  background-color:  white;
  color: darksilver;
  padding: 8px;
  font-size: 16px;
  border: none;
  margin: 7px 15px;
  border-radius: 35px;
}
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: silver;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: lightblue;} 
</style>
	
	
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
</html>