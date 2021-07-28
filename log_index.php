<?php 
session_start();

	include("seeker_data.php");
	include("functions.php");
    
	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>

	<a href="logout.php">Logout</a>

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
	  <li><a class="nav-link" href="logout.php">LOGOUT</a></li>
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
		 <id class="h4"><center>Welcome to Your Profile<hr></center></id class="h4">
		 
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
			<th>STATUS</th>
			</tr>
	<br>
	Hello, <?php 
	              echo "
          	      <tr>
				   <td>".$user_data['id']."</td>
					 <td>".$user_data['name']."</td>
					 <td>".$user_data['number']."</td>
					 <td>".$user_data['email']."</td>
					 <td>".$user_data['address']."</td>
					 <td>".$user_data['pincode']."</td>
					 <td>".$user_data['service']."</td>
					 <td>".$user_data['date']."</td>
					 <td>".$user_data['comment']."</td>
					 <td>".$user_data['status']."</td>
			 </tr>
		
		 ";
		?> 
 

 </table>
</body>
</html>
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
	</style>

   <br><br>
  <!-- //Submit Button -->
	   <script type="text/javascript">
	        function buttonclickk() {
				window.location="update_info.php";
			}
			</script>
      <input  id="button" class="btn" type="button" value="Edit Info" onclick="buttonclickk()"></button>
	 
	<script type="text/javascript">
	        function buttonclick() {
				window.location="search.php";
			}
			</script>
	 <input  id="button" class="btn" type="button" value="Search" onclick="buttonclick()" ></button>
	  <!--//Check Button-->
	  