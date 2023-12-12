<html> 
<head>
	<title>  Delete Task</title>
	
	<style type="text/css">
		
		#id{

			color:#B1624EFF;
			font-size: 30px;
		}
	</style>
</head>
	<body>	
		<center>
			<p id="id"><b> Delete Task </b></p>
		<form name="myform" action="" method="post">
			<table border="2" cellpadding="5" cellspacing="5">
					
					<tr>
						<td>
							Task Name : <td> <input type="text" name="name"></td>
						</td>
					</tr>
			</table>
				<br>
				<input style="width: 80px; height:30px; font-size: 20px; color: #B1624EFF;" type="submit" name="submit" value="Delete">
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

		$name=$_POST['name'];
		


		if($name == "")
			include('error.php');
		else
		{

			$sql = "Delete from task where name='$name' ";
			//echo "hii";
			mysqli_query($db,$sql);
			//echo "hii";
		}

	}
	mysqli_close($db);
?>

<html>
<head>
</head>

<body>
	<center>
		<p id="id"><b> Reffered Id From record</b></p>
<?php
	
	include('connect.php');
	
	$sql = "select *from task";
	$result = mysqli_query($db,$sql);
	echo "<table border='2' cellpadding='5' cellspacing='5'>

	<tr>
	<th>Id</th>
	<th>Date</th>
	<th>Time</th>
	<th>Task name</th>
	
	</tr>";
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['date'] . "</td>";
		echo "<td>" . $row['time'] . "</td>";
		echo "<td>" . $row['name'] . "</td>";
	
		echo "</tr>";
	}
		echo "</table>";
		
/*	if(isset($_POST['home']))
		header('Location:record.php');*/
	mysqli_close($db);
?>
</center>
</body>

</html>	