<?php

include 'function.php';

$pass= $_POST['pass'].$salt;

$hash = hash('ripemd128',$pass);

$mail = mysqli_real_escape_string($link,$_POST['email']);

$sql = "SELECT * FROM user_info WHERE mail='$mail'";

$res = query($sql);


if($res)
{

$row =mysqli_fetch_array($res,MYSQLI_ASSOC);

if($row['pass'] == $hash)
   {

$url_link = url_generate($mail);

//sendmail($mail,$url_link);

$Location ="Location:".$url_link;

header($Location);


   }else{ header("Location: signing.php?step=reload");  }


}
	


function sendmail($mail,$url_link)
{

 		$to = $mail;

         $subject = "Email Verification from Workcohol";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<a href=".$url_link.">ACTIVATE</a>";
         
         $header = "From:whatsappmail8@gmail.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }




}
function url_generate($mail)
{

	global $mail_salt;

	$data = $mail.$mail_salt;
	$url_hash = hash('ripemd128',$data);

	$url="activate_account.php?mail=".$mail."&hash=".$url_hash;

	return $url;
}





?>