<?php
	$Connection = mysqli_connect('localhost','alizaibilalkhan','AliKhan@123','gps_maps');
	$Phoneno = $_GET['Phone'];
	$Lat = $_GET['Latitude'];
	$Lant = $_GET['Longitude'];
	$Selction = "SELECT * FROM `user` WHERE `phone`='$Phoneno'";
	$Check  = mysqli_query($Connection, $Selction);
	$Mysqlcheck =  mysqli_fetch_assoc($Check); 
	if (!empty($Mysqlcheck)) {
		$Update = "UPDATE `user` SET `latitude`='$Lat', `longitude`='$Lant' WHERE `phone`='$Phoneno'";
		$ExecuteQuery    = mysqli_query($Connection,$Update);
		if (!empty($ExecuteQuery )) {
			echo 'yes';
			exit;
		}
		else
		{
			echo 'no';
			exit;
		}
	}
	else{
		$Insert = "INSERT INTO `user` (`phone`,`latitude`,`longitude`) VALUES ('$Phoneno','$Lat','$Lant')";
		$ExecuteQuery    = mysqli_query($Connection,$Insert);
		if (!empty($ExecuteQuery )) {
			echo 'yes';
			exit;
		}
		else
		{
			echo 'no';
			exit;
		}
	}
?>