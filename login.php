<?php 

session_start();

	include("seeker_data.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$number = $_POST['number'];
		$email = $_POST['email'];

		if(!empty($number) && !empty($email))
		{

			//read from database
			$query = "select * from registration where number = '$number' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['email'] === $email && $user_data['number'] === $number)
					{

						$_SESSION['id'] = $user_data['id'];
						header("Location: log_index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
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
			<li><a class="nav-link active" href="index.html">Home</a></li>
			<li><a class="nav-link" href="login.php">Need Help?</a></li>
      <li><a class="nav-link" href="login_vol.php">Volunteer</a></li>
	    <li><a class="nav-link" href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public">CHECK PRECAUTIONS WITH COVID & NEWS</a></li>
		 <li><a class="nav-link" href="contact.php"><b>Contact</b></a></li>
		 </ul>
			
			<div class="hamburger">
				<div class="line1"></div>
            <div class="line2"></div>
				<div class="line3"></div>
			</div>
		</nav>
	</header>
	<br><br><main>
		<!--─────────────────Home────────────────-->
	  <div id="home">
		 <div class="filter"></div>
		 <section class="intro">
  	
  <!--<div id="projects">-->
  <style>
  .h4
  {
	  padding-bottom: 15px;
    letter-spacing: normal;
    font-family: var(--main-font-family);
	font-style: normal;
	font-size: 90px;
	color: var(--main-fonts-color);
	text-shadow: 0px 0px 40px var(--main-decor-color);
}
table{
	background-color: ;
	height: 200px;
td {
	height: 30px;
	width: 30%;
}
	
</style>

		 <id class="h4"><center>LOGIN<hr></center></id class="h4">
		 
		  <div class="work-box">
		  <div class="work">
	  </div>
<div class="imgcontainer">
	<img src="img_avatar2.png" alt="Avatar" class="avatar">
	
 <form class="modal-content animate" method="post" autocomplete="off">
 <div class="container" style="background-color:#f1f1f1">
			
			
			<id class="label"><b>Email ID</id class="label">
			&nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;
	
			<input id="email" placeholder="Enter Email ID" type="text" name="email">
			<br><br>
		<label><b>Enter Phone</b></label>
			 &nbsp;  &nbsp; &nbsp;  &nbsp;   &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;
			<input id="number" placeholder="Enter Phone Number" type="password" type = "tel" name="number" required>
		
<!-- //MENU -->
	
			<script type="text/javascript">
	        function buttonclick() {
				window.location="log_index.php";
			}
			</script>	

			<button id="submit" class="btn" type="submit" onclick="buttonclick()">LOGIN</button>
		
		</div>
	<style>
body {font-family: Arial, Helvetica, sans-serif;}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
label {
	text-align: left;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 30%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

	  
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
	</style>
	
	
<!-- //Submit Button -->
<script type="text/javascript">
	        function buttonclick() {
				window.location="index.html";
			}
			</script>
	  <button type="button" onclick="buttonclick()" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
 

<!-- //Submit Button -->
	 
</form>
</body>
</html>
<br><br><a href="seeker.php">New Here? REGISTER</a>
