<?php
	$myServer = "golem.csse.rose-hulman.edu";
	$myUser = "maquelea";
	$myPass = "bubbles2016GO!";
	$myDB = "gdm-final";

	$dbhandle = mssql_connect($myServer, $myUser, $myPass, $myDB)
	  or die("Couldn't connect to SQL Server on $myServer"); 
?>