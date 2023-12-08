<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vaccine Remainder</title>
</head>
<style>
	body{
		font-family: "Lato", sans-serif;
	  	background-size: cover;
	  	position: fixed;
	  	background: url('images/remainderback.jpg');
	}
	div{
		opacity: 0.8;
		background-color: black;
		width: 1375px;
		height: 600px;
		margin: 30px 40px;
		padding: 30px;
		overflow: auto;
	}	
	.tabel_style{
		background-color: white;
		border-radius: 5px;
		border-style: solid;
		font-size: 20px;
		padding: 20px;
		text-align: center;
		width: 1360px;
	}
	p{
		text-align: center;
		color: white;
		font-size: 30px;
	}
	.td{
		background-color: #1D4967;
		color: white;
		border-radius: 10px;
	}
	.td_allocate{
		background-color: #28B463;
		color: white;
		border-radius: 10px;
	}
</style>
<body>

<div>
<a href="parentindex.php"><img src="images/backarrow.png" width="30" height="30"></a></br>
	<?php

		include 'database_connection.php';

		$username = $_SESSION['username'];

		$query = "SELECT * FROM vaccine_dates WHERE p_username='$username'";
		$result = mysqli_query($con,$query);

		if(mysqli_num_rows($result) > 0)
		{
			echo "<table cellspacing='6' cellpadding='6' class='tabel_style'>

				  <tr>
				  		<th>Child Name</th>
				  		<th>Vaccine Name</th>
				  		<th>Start Vaccine Date</th>
				  		<th>Vaccine Remainder</th>
				  </tr>";

			while ($row = mysqli_fetch_array($result)) {
				
				if($row['status'] == 'false'){
				echo "<tr>
						<td>".$row['c_name']."</td>
						<td>".$row['name']."</td>
						<td>".$row['v_date']."</td>;
						<td class='td'>".$row['timing']."</td>;
						</tr>";
				}
				else{
					echo "<tr>
							<td class='td_allocate'>".$row['c_name']."</td>
							<td class='td_allocate'>".$row['name']."</td>
							<td class='td_allocate'>".$row['v_date']."</td>
							<td class='td_allocate'>".$row['timing']."</td>
						</tr>";
				}
			}

			echo "</table>";
		}
		else
			echo "<p>No Any Dates Available !</p>";
	?>

</div>
</body>
</html>