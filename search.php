
<html>
<head>
	<style>
		
		table
		{
			border-style:solid;
			border-width:2px;
			
		}
		#id{

			color:#B1624EFF;
			font-size: 30px;
		}
	</style>
</head>

<body>
	<center>
		 <form action="" method="POST">
				<p id="id"><b> All Task Details</b></p>
				<p style="font-size: 20px; color:#B1624EFF;"> <b>Search : </b><input style="height: 25px;" type="date" name="find">  <input style="padding: 10px 30px; border-style: none; background: transparent; border: none; outline: none;color: #fff; background-color: #B1624EFF; cursor: pointer; border-radius: 5px; margin-left: 10px; margin-bottom: 10px; font-size: 20px; " type="submit" name="search" value="Search"></p>
		</form>
	</center>
</body>
</html>

<?php
	include('connect.php');

	include("panel.php");

	if(isset($_POST['search']))
	{
		
		$search=$_POST['find'];
		if($search == ""){
			include('error.php');
		}
		else{

			$query="select *from task where date='$search'";
			$result = mysqli_query($db,$query);

			echo "<center> <table border='0' cellpadding='5' cellspacing='20'>

			
			<tr>
			<th>Id</th>
			<th>Date</th>
			<th>Time</th>
			<th>Task name</th>
	
			</tr>";
			
			if($result->num_rows >= 1 )
			{
				while($row = mysqli_fetch_array($result))
				{
				echo "<tr>";
				echo "<td>" . $row['id'] . "</td>";
				echo "<td>" . $row['date'] . "</td>";
				echo "<td>" . $row['time'] . "</td>";
				echo "<td>" . $row['name'] . "</td>";
				
				echo "</tr>";
				}
			}
			else{
				echo "<p> <b>Record is not found!!! </b> </p>"; 
			}
			echo "</table></center>";
		}


	}

	mysqli_close($db);
?>