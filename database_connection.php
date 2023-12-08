<?php
	$con=mysqli_connect("localhost","root","","vaccination");

	if(!$con){
		die('Mysql Connection Error'. mysqli_connect_error());
	}
?>