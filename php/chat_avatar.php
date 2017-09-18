<?php

header("Content-type:image/jpeg");

$name = 1;

$path = "../user/img/dp/dp-".$name.".jpg";


if (file_exists($path)) {
	

	echo read_file($path);


}
else
{
	$default_path = "../user/img/dp/default.jpg";
	echo file_get_contents($default_path);
}

?>