<?php 
session_start();

	include("seeker_data.php");
	include("functions.php");
    
	$user_data = check_login($con);


error_reporting(0);	
        $name = $user_data['name'];
		$number = $user_data['number'];
	    $email = $user_data['email'];
     	$address = $user_data['address'];
	    $service = $user_data['service'];
	    $date = $user_data['date'];
	    $comment = $user_data['comment'];
		$status = $user_data['status'];
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
			<li><a class="nav-link" href="log_index.php">PROFILE</a></li>
      <li><a class="nav-link" href="login.php">Need Help</a></li>
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
		 </body>
</html>
  	
  <!--<div id="projects">-->
  <style>
  .h4
  {
	  padding-bottom: 15px;
    letter-spacing: normal;
    font-family: var(--main-font-family);
	font-style: normal;
	font-size: 40px;
	color: var(--main-fonts-color);
	text-shadow: 0px 0px 40px var(--main-decor-color);
}
</style>
		 <id class="h4"><center>UPDATE RECORD<hr></center></id class="h4">
		 
		  <div class="work-box">
		  <div class="work">
	  </div>

	<style type="text/css">
	


input {
  margin: 5px;
}
	
	#text{
		
		width:8%;
		height: 200px;
		
		
		align-items: center;
		
		
		
       text-align:top;      
		height: 25px;
		padding: 4px;
	}

	
	#box{
        height: 430px;
		background-color: skyblue;
		margin: auto;
		width: 450px;
		padding: 45px;
	}
	
	
	#lable{
		height: 50px;
		width: 150px;
		
	}

	</style>
      
	   <div id="box">
	    <style>
  .h5
  {
	  padding-bottom: 5px;
    letter-spacing: normal;
    font-family: var(--main-font-family);
	font-style: normal;
	font-size: 25px;
	color: var(--main-fonts-color);
	text-shadow: 0px 0px 40px var(--main-decor-color);
}
</style>
	   <id class="h5">Enter valid info</id class="h5">
<!-- INPUTS -->
  <table> <form action="" method="GET">
      <!-- 2. information -->
	   <td id="lable">Full Name:</td>
      
      <td><input id="name" type = "text" name="name" value="<?php echo "$name" ?>" required></td>
     

     <tr> <td id="lable">Phone Number:</td>
     
      <td><input id="number" type = "tel" name="number" value="<?php echo "$number" ?>" required></td></tr>
	  
	  <tr><td id="lable">Email ID:</td>
     
      <td><input id="email" type = "text" name="email" value="<?php echo "$email" ?>" required  ></td></tr>

     <tr> <td id="lable">Address:</td>
     <td><input id="address" type = "text" name="address" value="<?php echo "$address" ?>" required></td></tr>
      

     <tr><td id="lable">Services:</td>
       <td><input id="service" type = "text" name="service" value="<?php echo "$service" ?>" required></td></tr>
      
      <tr><td id="lable">Date:</td>
      <td><input id="date" type = "date" name="date" value="<?php echo "$date" ?>" required></td></tr>
     
       <tr><td id="lable">Other Comments</td>
      <td><input id = "comment" name = "comment" value="<?php echo "$comment" ?>" required></td></tr>
	  
	  <tr><td id="lable">STATUS</td>
	   <td>
    <input id="status" value="<?php echo "$status" ?>" name="status"></td></tr>
   
	   <td><small>(Service&nbsp;pending/fullfilled)</small></td>
    
	  
	 <tr><td><center><input  id="button" class="btn" type="submit" name="submit" value="UPDATE"></center></td>
	 
	 <script type="text/javascript">
	        function buttonclick() {
				window.location="log_index.php";
			}
			</script>
              <td> <input  id="button" class="btn" type="button" value="BACK" onclick="buttonclick()"></td></tr>
        </form>
		
	
</table> 
   


 </div>
   
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

  
<?php

if($_GET['submit'])
{
	    $name = $_GET['name'];
		$number = $_GET['number'];
	    $email = $_GET['email'];
     	$address = $_GET['address'];
	    $service = $_GET['service'];
	    $date = $_GET['date'];
	    $comment = $_GET['comment'];
		$status = $_GET['status'];

   $query = "UPDATE registration SET name='$name', number='$number', email='$email', address='$address', service='$service', date='$date', comment='$comment', status='$status' WHERE name='$name'";
   
   $data = mysqli_query($con,$query);
   
   if($data)
   {
	   echo "<script>alert('Record Updated')</script>";	   
       ?>
	   <META HTTP-EQUIV="Refresh" CONTENT ="0; URL=http://localhost/update_info.php">
	   <?php
   }
   else
   {
	   echo "Failed to Update Record";
   }
}
 	 
?>
 
  
     
     