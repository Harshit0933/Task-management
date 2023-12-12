<?php
 include('connect.php');

 if (isset($_POST['submit']))
 {
 $email=$_POST['email']; 
 $password=$_POST['password'];
 $sql = "SELECT * FROM admin where email='$email' and password='$password'";
 $result = mysqli_query($db,$sql);
 $resultcheck = mysqli_num_rows($result);
 if($resultcheck > 0)
 {
   
   header('location:home.php');
 }
else{

         echo '<script language="javascript">';
         echo 'alert("Invalid username or password")';
         echo '</script>';
      }
   }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form and navigation bar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" type="text/css" href="login.css"> -->
	<style type="text/css">
		
		 * {
 	margin:0px;
 	padding:0px;
 	box-sizing: border-box;
 }

/* Background picture is relative to CSS file. ..Back from css file /images into image folder */

 html, body {
 	background-color: #FFFFFF;
 	margin:0px;
 	padding:0px;
 
 	background-position: center;
 	background-size: cover;
 	height:100%;
 	width:100%;
 	font-family:sans-serif;
 	position: relative;
 }

 a{
	color: #2F363F;
 	text-decoration: none;
 	font-size: 14px;
 }


/* main.................*/

	.main {
		position:relative;
	}


/* sign....................*/



	.main .sign {
		width:74%;
		position:absolute;
		top:170px;
		left:170px;
		right:100px;
		height:200px;
		opacity:0.8;
		background-color: black;
		z-index: 1;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		//border:1px solid orange;

	}

	.sign .left {
		//border:1px solid orange;
		float:left;
		width:400px;
		height:200px;
		padding: 40px 0px 30px 30px;
	}

	.sign .left h3  {
		//border:1px solid white;
		margin:0px 0px 15px 0px;
		font-size:30px;
		color:white;
	}

	.sign .left p {
		//border:1px solid white;
		margin:0px 0px 20px 0px;
		color:white;
		font-size: 14px;
		line-height:20px;
		letter-spacing:0.7px;
	}

	.sign .left button {
		display: block;
		height:45px;
		width:135px;
		border: none;
		background-color: #B1624EFF;
		border:0.5px solid white;
	}

	.sign .left button:hover{
		border: none;
		background-color:#0d5cdb;
		animation:button 200ms ease forwards;
	}

	.sign .left button a {
		text-decoration: none;
		color:#0d5cdb;
		font-size: 12px;
	}

/* log.....................*/

.main .log {
		z-index: 2;
		background-color:#fffff2;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		width:450px;
		float:right;
		position:absolute;
		top:150px;
		left:650px;
		height:330px;
	}

	.log .right1 {
		//border:1px solid orange;
		height:350px;
		padding:60px 40px;
	}

	.log .right1 h3 {
		//border:1px solid black;
		color:#B1624EFF;
		margin-bottom: 40px;
	}

	.log .right1 input{
		display:block;
		padding: 5px;
		height:30px;
		width:100%;
		border-radius:2px;
		border:none;
		background-color: white;
		margin-bottom: 10px;
		//border: 1px solid black;
	}


	.log .right1 .rock {
		//display:block;
		margin-top: 20px;
		//border: 1px solid black;
	}

	.log .right1 .anchor {
		display:inline-block;
		//border: 1px solid black;
	}

	.log .right1 .anchor a {
		color:#0d5cdb;
		font-size: 13px;
		text-decoration: none;
	}

	.log .right1 .btn {
		display:inline-block;
		//border: 1px solid black;
		margin-left: 123px;
	}

	.log .right1 .rock .btn #submit {
		margin:0px;
		height:45px;
		width:135px;
		color: #FFFFFF;
		background-color:#B1624EFF;		
		border-style: solid;
		border-color: #B1624EFF;
	}

	.log .right1 .rock .btn #submit:hover {
		background-color: #B1624EFF;
	}
	
	.log .right1 .btn a{
		text-decoration: none;
		color:white;
		font-size: 18px;
	}

	/*.log .right1 .php {
		font-size: 15px;
		border:1px solid black;
	}*/
	</style>
</head>
<body>
	<div style="margin-top: 15px; color: white; font-size: 12px;">
		<?php 
			if( !empty($email) && !empty($password)){
			    $query=	mysqli_query($conn,"SELECT * FROM users WHERE email='".$email."' AND password='".$password."'");  
			    $numrows=mysqli_num_rows($query);  

			if($numrows!=0)  
			    {  
				    while($row=mysqli_fetch_assoc($query))  
				    {  
				    	$dbemail=$row['email'];  
				    	$dbpassword=$row['password'];  
				    }  

				    if($email == $email && $password == $password)  
				    {  
				    	session_start();
				    	header('Location: main.php');
				     
				    }

				} else {  
			   	 echo "<p><center>Invalid email or Password</center></p>";  
				}  
				}
				ob_end_flush();
		?>
	</div>
	<div class="container">
		
		<div class="main">
			<div class="log">
				<div class="right1">
					<h3>LOG IN</h3>
					<form action="index.php" method="post">
						<input class="two" type="email" name="email" placeholder="Email">
						<input class="two" type="password" name="password" placeholder="Password">
							<div class="rock">
								<div class="anchor">
									
								</div>
								<div class="btn">
									<input id="submit" type="submit" name="submit">
								</div>
							</div>

					</form>
				</div>
			</div>
			<!-- <div class="sign">
				<div class="left">
					<h3>Don't Have an <br>account?</h3>
					<p>Get the free additional features just by signing up in to our web and connect direct to the community.</p>
					<button><a href="sign_up.php">SIGN UP</a></button>
				</div>
			</div> -->
		</div>
	</div>
</body>
</html>




