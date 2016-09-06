<?php

$Connection = mysqli_connect('localhost','root','','map');
$Phoneno = $_POST['Phone'];

if (empty($Phoneno)) {
	echo 'Please Fill The Form';
}
else
{
	$CheckingPhoneNo = "SELECT `phone` FROM `user` WHERE `phone`='$Phoneno'";
	$ExecuteQuery    = mysqli_query($Connection,$CheckingPhoneNo);
	$FetchData  	 = mysqli_fetch_assoc($ExecuteQuery); 
	if (!empty($FetchData)) {
		echo 'Yes';
	}
	else
	{
		echo 'Not';
	}
}

?>