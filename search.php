<?php 
session_start();
include("seeker_data.php");
include("functions.php");
    
	$user_data = check_login($con);

	include("volunteer_data.php");
	

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
			<li><a class="nav-link active" href="login.php">Home</a></li>
			<li><a class="nav-link" href="log_index.php">Back</a></li>
	  <li><a class="nav-link" href="logout.php">LOGOUT</a></li>

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
</style>
		 <id class="h4"><center>Available Volunteer<hr></center></id class="h4">
		 
		  <div class="work-box">
		  <div class="work">
	  </div>
	  
	  <style>
table, td, th {
  border: 1px solid black;
  width: 100%;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
	  background-color: skyblue;
  color: black;
  width: 100px;
  height: 70px;
}
td {
	width: 120px;
	 height: 70px;
}
	
</style>
	
<table>

			<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>NUMBER</th>
			<th>EMAIL</th>
			<th>ADDRESS</th>
			<th>PINCODE</th>
			<th>SERVICE</th>
			<th>DATE</th>
			<th>COMMENT</th>
			<th>VOLUNTEER'S <br> NAME</th>
			<th>NUMBER</th>
			</tr>



<?php
	include("seeker_data.php");
	include("volunteer_data.php");
	
error_reporting(0);
$query = "select test.registration.id, test.registration.name, test.registration.number, test.registration.email, test.registration.address, test.registration.pincode, test.registration.service, test.registration.date, test.registration.comment, test_2.regi_volunteer.namev, test_2.regi_volunteer.numberv from test.registration INNER JOIN test_2.regi_volunteer ON test.registration.pincode = test_2.regi_volunteer.pincode AND test.registration.pincode = '".$user_data["pincode"]."' ";
$data = mysqli_query($con, $query);
$total = mysqli_num_rows($data);
   
   if($total!=0 )
			{
			 while($result = mysqli_fetch_assoc($data))
				 if( $user_data['name'] == $result['name'] && $user_data['number'] == $result['number'])
			 {
			 echo "
			 <tr>
			 <td>".$result['id']."</td>
			 <td>".$result['name']."</td>
			 <td>".$result['number']."</td>
			 <td>".$result['email']."</td>
			 <td>".$result['address']."</td>
			 <td>".$result['pincode']."</td>
			 <td>".$result['service']."</td>
			 <td>".$result['date']."</td>
             <td>".$result['comment']."</td>
			 <td>".$result['namev']."</td>
			 <td>".$result['numberv']."</td>
		 </tr>
		
		 ";
		 }
		 }
		 else
		 {
			 echo "no records found";
 }
 ?>
  </table>
  </body>
</html>