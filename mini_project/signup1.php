<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Multi Step Form with Progress Bar using jQuery and CSS3</title>
  
    <link rel="stylesheet">

  
      <link rel="stylesheet" href="..\mini_project\css\css\style.css">

  
</head>

<style>
		right {
  position: absolute;
  top: 0;
  right: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;
  background: url('https://goo.gl/YbktSj');
  background-size: cover;
  background-position: center;
  border-radius: 0 2px 2px 0;
}

right loginwith {
  display: block;
  margin-bottom: 40px;
  font-size: 28px;
  color: #FFF;
  text-align: center;
}

button.social-signin {
  margin-bottom: 20px;
  width: 220px;
  height: 36px;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  transition: 0.2s ease;
  cursor: pointer;
}

button social-signin:hover,
button.social-signin:focus {
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.2s ease;
}

button social-signin:active {
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.2s ease;
}

button.social-signin.facebook {
  background: #32508E;
}

button.social-signin.twitter {
  background: #55ACEE;
}

button.social-signin.google {
  background: #DD4B39;
}


html {
	
	height: 100%;
	/*Image only BG fallback*/
	
	/*background = gradient + image pattern combo*/
	background : linear-gradient(blue,violet,yellow);
	
}
dropdown{
	position:relative;
	display:inline-block;
	
}
dropdown-content{
	display:none;
	position:absolute;
	background-color:#f9f9f9;
	min-width:160px;
	box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);
	padding:12px 16px;
	z-index:1;
}
dropdown:hover.dropdown-content{
	display:block;
}

.styled-select {
   background:  no-repeat 96% 0;
   height: 29px;
   overflow: hidden;
   width: 300px;
   
   
}

.styled-select select {
   
   border: 1px  #ccc;
   font-size: 14px;
   height: 29px;
   padding: 5px; /* If you add too much padding here, the options won't show in IE */
   width: 268px;
  
   
   
}

.styled-select.slate {
	background: white;
   border: 1px solid #ccc;
   height: 45px;
   width: 300px;
   
   
}

.styled-select.slate select {
	background: white;
   border: 1px solid #ccc;
   font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;
   height: 50px;
   width: 300px;
   
}

</style>

<body>

  <!-- multistep form -->
<form id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Personal Details</li>
    <li>Social Profiles</li>
    <li>Account Setup</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
   <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
	 <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" />
    
    
    <input type="button" name="next" class="next action-button" value="Next" />
	
	
	
	
	 <div class="right">
    <span class="loginwith"><br /></span>
    
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
  </div>
	

	
	
	
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Choice of interest</h2>
    <h3 class="fs-subtitle">Your perception matters for us</h3>
	<textarea name="address" placeholder="Address"></textarea>
    <input type="text" name="twitter" placeholder="select course" />
    <input type="text" name="facebook" placeholder="your current field" />
    <input type="text" name="gplus" placeholder="free or paid" />
	select course
<div class="styled-select slate">
  <select>
    <option >BCA</option>
    <option>MCA</option>
    <option>MSC_IT</option>
	<option>BSC_IT</option>
  </select>
</div><br>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    
	 <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
   
	
	
	<input type="text" name="email" placeholder="Email" />
    <input type="password" name="pass" placeholder="Password" />
    <input type="password" name="cpass" placeholder="Confirm Password" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
  
 

 </form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

  

    <script  src="..\mini_project\js\index.js"></script>




</body>

</html>
