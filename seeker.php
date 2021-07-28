<?php
session_start();

     include("seeker_data.php");
	 include("functions.php");
	 
		if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST['name'];
		$lastname = $_POST['lastname'];
		$number = $_POST['number'];
	    $email = $_POST['email'];
     	$address = $_POST['address'];
		$city = $_POST['city'];
		$pincode = $_POST['pincode'];
	    $service = $_POST['service'];
	    $date = $_POST['date'];
	    $comment = $_POST['comment'];

		if(!empty($name) && !empty($lastname) && !empty($number) && !empty($email) && !empty($address) && !empty($city)  && !empty($pincode) && !empty($service) && !empty($date) && !empty($comment))
		{

			//save to database
			//$user_id = random_num(20);
			$query = "insert into registration (name, lastname, number, email, address, city, pincode, service, date, comment) values ('$name','$lastname','$number','$email','$address','$city','$pincode','$service','$date','$comment')";
			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?> 

	 
	 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="style.css" rel="stylesheet" type="text/css" />
  
</head>
<body>



 <div class="container">
	  
		<!--────────────────Header───────────────-->
	<header>
		<a class="logo" href="#home">
              <!-- <img src="https://newsletter-images--timmy-i-chen.repl.co/logo-light.png" alt="repl logo" /> -->
		</a>
		<nav>	
		<nav style= "background-color:lightskyblue">
		 <ul class="nav-bar"><div class="bg"></div>
			<li><a class="nav-link" href="index.html"><b>Home</b></a></li>
			<li><a class="nav-link active" href="login.php"><b>Need Help?</b></a></li>
      <li><a class="nav-link" href="login_vol.php"><b>Volunteer</b></a></li>
			<li><a class="nav-link" href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public"><b>CHECK PRECAUTIONS WITH COVID & NEWS</b></a></li>
		 <li><a class="nav-link" href="contact.php"><b>Contact</b></a></li>
		 </ul>
			
			<div class="hamburger">
				<div class="line1"></div>
            <div class="line2"></div>
				<div class="line3"></div>
			</div>
		</nav>
	</header>
	<main>
		<!--─────────────────Home────────────────-->
	  <div id="home">
		 <div class="filter"></div>
		 <section class="intro">
  	
  <div id="projects">
		 <h3><center>Seeking Help?<hr></center></h3>
		  <p>
		  Please fill out the form below so we can find someone to assist you. 
		  </p>
		  <div class="work-box">
		  <div class="work">
	  </div>
    <!-- <t>anonymous tea party</t> -->

<!-- INPUTS -->
   <form method="post" autocomplete="off">
      <style>
	  
   
			.browser {
  background: lightskyblue;
  align: center;
  width: 120%;
  height: 50px;
  text-align: left;
}

.browser > h2 {
	

  margin: 4px;
  font-size: 120%;
}
    </style>
	<article class="browser">
    <h2>Tell Us About Yourself</h2></article>
	<br>
      <!-- 2. information -->
      
	  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp;&nbsp; 
      <input id="name" type = "text" name="name" placeholder="First Name" required  >
	  &nbsp; &nbsp; &nbsp;<input id="lastname" type = "text" name="lastname" placeholder="Last Name" required  >
      <br>
    <article class="browser">
    <h2>How Can We Contact You?</h2></article>
	<br>
    
	  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp;&nbsp;
      <input id="number" type = "tel" name="number" oninvalid="alert('Enter valid mobile number');" pattern="^\d{10}$" placeholder="Enter Phone No." required>
      &nbsp; &nbsp; &nbsp;<input id="email" type = "text" name="email" oninvalid="alert('Enter valid Email ID');" pattern=".+@gmail.com" placeholder="Enter Email ID" required  >
      <br>
	   <article class="browser">
    <h2>Where Do You Want Service?</h2></article>
	<br>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp;&nbsp;
       <input id="address" type = "text" name="address" placeholder="Enter Address" required>
	  &nbsp; &nbsp; &nbsp;<input id="city" type = "text" name="city" placeholder="Enter City" required>
       &nbsp;&nbsp; &nbsp;<br><input id="pincode" type = "int" name="pincode" placeholder="Enter Pincode" required>
       <br>
       <article class="browser">
    <h2>Other Info !!</h2></article>
	<br>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp;&nbsp;
      <input id="service" type = "text" name="service" placeholder="Enter Services" required>
      &nbsp; &nbsp; &nbsp;
      <input id="date" type = "date" name="date" placeholder="Enter Date" required>
       <br>
       <article class="browser">
    <h2>Other Comments/Concerns!!</h2></article>
	<br>
     
    &nbsp; &nbsp; &nbsp;
     <input id = "comment" type ="text" name = "comment" placeholder="Enter Comment" ></textarea>
       <br>

<style>	  
	  
	  /*button css*/
.btn
{
	background-color: black;
  position: relative;
  text-align: center;
  width: 150px;
  padding: 7px;
  font-size: 20px;
  color: #15f4ee;
  font-family: poppins;
  font-weight: 40;
  border: 5px solid #15f4ee;
  text-transform: uppercase;
  letter-spacing: 4px;
  cursor: pointer;
  border-radius: 100px;
  transition: 1.5s;

}

.btn:hover
{
  box-shadow: 0 5px 50px 0 #15f4ee inset, 0 5px 50px 0 #15f4ee,
              0 5px 50px 0 #15f4ee inset, 0 5px 50px 0 #15f4ee;
  text-shadow: 0 0 5px #15f4ee, 0 0 5px #15f4ee;            
}
body {font-family: Arial, Helvetica, sans-serif;}
input[type=text], input[type=tel], input[type=int], input[type=textarea], input[type=date]{
  width: 25	%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}	
	</style>
 
	  
	  
	  <!-- //Submit Button -->
	   <script type="text/javascript">
	        function buttonclick() {
				window.location="login.php";
			}
			</script>
      <button id="submit" class="btn" type="submit" onclick="buttonclick()">Submit</button>
	 
	<script type="text/javascript">
	        function buttonclick() {
				window.location="login.php";
			}
			</script>
	 <input  id="button" class="btn" type="button" value="Login" onclick="buttonclick()">
	 
    </form>

  </div>
<!-- Loads the js file -->
    <script src="seeker.js"> </script> 
</body>
</html>
