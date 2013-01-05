<?php

	include_once 'MinecraftServerStatus/status.class.php';
	$status = new MinecraftServerStatus();
	$response = $status->getStatus('pvp24.com');
	if(!$response) {
		echo"The Server is offline!";
	} else {
		echo"The Server ".$response['hostname']." is online,
		currently are ".$response['players']." players online
		of a maximum of ".$response['maxplayers'].".";
	}

?>