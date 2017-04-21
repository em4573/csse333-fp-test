<?php
	$serverName = "golem.csse.rose-hulman.edu";
	$connectionInfo = array("Database"=>"gdm-final", "UID"=>"maquelea", "PWD"=>"bubbles2016GO!");
	$conn = sqlsrv_connect($serverName, $connectionInfo);

	if($conn) {
		echo "Connection established.<br />";
	} else {
		echo "Connection could not be established.<br />";
		die(print_r(sqlsrv_errors(), true));
	}
?>