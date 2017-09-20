<?php

header("Content-type:image/jpeg");

$name = $_GET['id'];


$path = "../user/img/dp/dp-".$name.".jpg";


if (file_exists($path)) {
	



 

            
            
            
           

			$info=getimagesize($path);

			$src_w = $info['0'];

			$src_h = $info['1'];
           

            $width=$_GET['w'];
            
            $height=$_GET['h'];


            

            
            
            
            
            
                                     
                     
                    
                       
                        
                        $tmp= imagecreatetruecolor($width, $height);
                        
                        $src= return_resource($path);

                        imagecopyresampled($tmp, $src, 0,0,0,0, $width, $height, $src_w, $src_h);
                        
                        imagejpeg($tmp);

                        imagedestroy($tmp);
                        imagedestroy($src);
             

                    
                       
     
}
     


function return_resource($src)
   {
        $info=getimagesize($src);
       if($info['mime']=="image/jpeg")    
                    $resource=imagecreatefromjpeg($src);
                    elseif ($info['mime']=="image/png")
                            $resource=imagecreatefrompng($src);
                        return $resource;
   }









?>