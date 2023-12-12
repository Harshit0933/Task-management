 
<html> 
<head>
	<title>  Insert Task </title>
	<style type="text/css">
		body{

				margin-top: 200px;
			
		}
		#id{

			color: #B1624EFF;
			font-size: 30px;
		}
		table
		{
			border-style:solid;
			border-width:3px;
			border-color:#B1624EFF;
		}
		
	</style>
</head>
	<body >	
		<center>
		
			<p id="id"><b> Insert new Task </b></p>
		<form name="myform" action="" method="post">
			<table border="1" cellpadding="5" cellspacing="5">
					

					<tr>
						<td>
							task date: <td><input type="date" name="tdate"></td>
						</td>
					</tr>
					<tr>
						<td>
							task time: <td><input type="time" name="ttime"></td>
						</td>
					</tr>
					<tr>
						<td>
							task name:<td> <input type="text" name="tname"></td>
						</td>
					</tr>

			</table>
				<br>
				<input style="width: 80px; height:30px; font-size: 20px; color: #B1624EFF;" type="submit" name="submit" value="Insert" >
			<!--	<input type="submit" name="home" value="Home">-->
		</form>	
		</center>	
	</body>
</html>


<?php

	include('connect.php');
	include('panel.php');
	

	if(isset($_POST['submit']))
	{

		  
  	  //$id=$_POST['tid'];
  	  $dt=$_POST['tdate'];
  	  $time=$_POST['ttime'];
  	  $name=$_POST['tname'];
 	  
		
		if($name == ""  || $time == ""|| $dt == ""){
			include('error.php');
		}
		else
		{
				
			$sql="INSERT INTO task (date,time,name) VALUES('$dt','$time','$name')";
			mysqli_query($db,$sql);
			
		}
	}

	mysqli_close($db);
?>