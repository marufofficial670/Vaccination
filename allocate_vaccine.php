<!DOCTYPE html>
<html>
<head>
	<title>Allocate Vaccine</title>
</head>
<style>
	body{
		font-family: "Lato", sans-serif;
	  	background-size: cover;
	  	position: fixed;
	  	background: url('images/allocateback.jpg');
	}
	.bg{
		opacity: 0.7;
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
		padding: 20px;
		border-radius: 10px;
	}
</style>
<body>

<div class="bg">
<a href="adminindex.php"><img src="images/backarrow.png" width="30" height="30"></a></br>
	<?php

		include 'database_connection.php';

		$query = "SELECT * FROM vaccine_dates";
		$result = mysqli_query($con,$query);

		if(mysqli_num_rows($result) > 0)
		{
			echo "<table cellspacing='6' cellpadding='6' class='tabel_style'>

				  <tr>
				  		<th>Child Name</th>
				  		<th>Vaccine Name</th>
				  		<th>Start Vaccine Date</th>
				  		<th>Vaccine Remainder</th>
				  		<th></th>
				  </tr>";

			while ($row = mysqli_fetch_array($result)) {
				
				if($row['status'] == 'false'){
					echo "<tr>
							<td>".$row['c_name']."</td>
							<td>".$row['name']."</td>
							<td>".$row['v_date']."</td>
							<td class='td'>".$row['timing']."</td>
							<td><a href='updatevaccine.php?c_name=".$row['c_name']."&vaccine_n=".$row['name']. "'><img src='images/done.png' width='45' height='45' /></a></td>
							</tr>";
				}
				else{
					echo "<tr>
							<td class='td_allocate'>".$row['c_name']."</td>
							<td class='td_allocate'>".$row['name']."</td>
							<td class='td_allocate'>".$row['v_date']."</td>
							<td class='td_allocate'>".$row['timing']."</td>
							<td class='td_allocate'>Allocated</td>
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