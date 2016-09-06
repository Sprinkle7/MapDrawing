<?php

$Connection = mysqli_connect('localhost','root','','map');

$Phoneno = $_POST['Phone'];

if (empty($Phoneno)) {
	echo 'Please Fill The Form';
}
else
{
	$CheckingPhoneNo = "SELECT * FROM `user` WHERE `phone`='$Phoneno'";
	$ExecuteQuery    = mysqli_query($Connection,$CheckingPhoneNo);
	$FetchData  	 = mysqli_fetch_array($ExecuteQuery); 
	if (!empty($FetchData)) {
		$Data['Latitude']  = $FetchData['latitude'];
		$Data['Longitude'] = $FetchData['longitude'];
		echo json_encode($Data);
	}
	else
	{
		echo 'Not';
	}
}

?>