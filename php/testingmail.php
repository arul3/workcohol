<?php

$url_link = url_generate("D@gmail.com");

sendmail($mail,$url_link);



   
}

function sendmail($mail,$url_link)
{

      $to = $mail;

         $subject = "Email Verification from Workcohol";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<a href=".$url_link.">ACTIVATE</a>";
         
         $header = "From:whatsappmail8@gmail.com \r\n";
         $header .= "Cc:arul@arulkumar.epizy.com \r\n";
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

   $url="http://some.com/php/activate_account.php?mail=".$mail."&hash=".$url_hash;

   return $url;
}

?>