<?php


	$host = "localhost";
	$user = "root";
	$passwd = "";
	$db = "test";

	$dbc = new mysqli($host,$user,$passwd,$db) or die('Could not connect to mysql');
