<?php
$link = mysqli_connect("localhost", "root", "","job");

if (!$link) {
    echo "Error: Unable to connect to MySQL.";
    echo "Debugging errno: " . mysqli_connect_errno();
    echo "Debugging error: " . mysqli_connect_error();
    exit;
}

$sql = "INSERT INTO user_info (name,pass,email,mobile,status) VALUES ('dfdf','dfd','dfdf','7989','8980')";
$res2=mysqli_query($link, $sql);
                
     if(!$res2)
        { echo "query_error:"; }

    if ($res2) {
 echo "sucess";    	# code...
    }
                    



mysqli_close($link);

