<?php

include 'function.php';

$pass= $_POST['pass'].$salt;

$hash = hash('ripemd128',$pass);

$mail = mysqli_real_escape_string($link,$_POST['email']);

$sql = "SELECT * FROM user_info WHERE email='$mail'";

$res = query($sql);


if($res)
{

$row =mysqli_fetch_array($res,MYSQLI_ASSOC);

if($row['pass'] == $hash)
sendmail();	
}

function sendmail()
{
echo "semding mail";


}






?>