<?php

$link = mysqli_connect("localhost", "root","","job");

if (!$link) {
    echo "Error: Unable to connect to MySQL.";
    echo "Debugging errno: " . mysqli_connect_errno();
    echo "Debugging error: " . mysqli_connect_error();
    exit;
}
if ($link) {
	# code...
	echo " connect";
}
?>