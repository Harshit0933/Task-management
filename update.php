<html> 
<head>
	
	
	
	<link rel="stylesheet" type="text/css" href="input.css">
	<style type="text/css">
		
		#id{

			color:#B1624EFF;
			font-size: 26px;
		}
		
	</style>
</head>
	<body>	
		<center>
			<p id="id"><b> Update Task Details </b></p>
		<form name="myform" action="" method="post">
			<table border="1" cellpadding="5" cellspacing="5">

					<tr>
						<td>
							Id : <td> <input type="numeric" name="id"></td>
						</td>
					</tr>			
					<tr>
						<td>
							Date :  <td> <input type="date" name="date"></td>
						</td>
					</tr>
					<tr>
						<td>
							Time :  <td> <input type="time" name="time"></td>
						</td>
					</tr>
					<tr>
						<td>
							Name : <td> <input type="numeric" name="name"></td>
						</td>
					</tr>
			</table>
				<br>
				<input style="width: 80px; height:30px; font-size: 20px; color: #B1624EFF;" type="submit" name="submit" value="Update">
			<!--	<input type="submit" name="home" value="Home"></a>-->
		</form>	
		</center>	
	</body>
</html>


<?php

	include('connect.php');
	include('panel.php');
	

	if(isset($_POST['submit']))
	{

		$id=$_POST['id'];
		$date=$_POST['date'];
		$time=$_POST['time'];
		$name=$_POST['name'];
		//$total=$price*$stock;
		
		if($id=="" || $name== "" || $time== "" || $date== "" )
			include('error.php');
		else{
			$sql = "update task set date='$date',time='$time',name='$name' where id='$id' ";
			mysqli_query($db,$sql);
		}
	}
	/*else if(isset($_POST['home']))
		header('Location:record.php');
*/
	mysqli_close($db);
?>

<html>
<head>
</head>

<body>
	<center>
		<p id="id"><b> Task Details </b></p>
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
	
	}
	echo "</table>";
	mysqli_close($db);


?>


</center>
</body>

</html>