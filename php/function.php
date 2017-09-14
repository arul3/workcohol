<?php
$link = mysqli_connect("localhost", "root","","job");

if (!$link) {
    echo "Error: Unable to connect to MySQL.";
    echo "Debugging errno: " . mysqli_connect_errno();
    echo "Debugging error: " . mysqli_connect_error();
    exit;
}

//variables 

$salt="ar5573";

function query($sql)
{
    global $link;

                                        
$res2=mysqli_query($link, $sql);
                
     if(!$res2)
        { echo "query_error:".$sql; 
    		die("eror".mysqli_error($link));
		}

    return $res2;
                    
}




