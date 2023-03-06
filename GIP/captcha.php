<?php
session_start();
header("Content-Type: image/png"); 
$random_nummer = rand(10000, 99999); 

$_SESSION["captcha"] = $random_nummer; 


$foto = imagecreate(100, 50); 
$bg_color = imagecolorallocate($foto, 255, 255, 255); 
$text_color = imagecolorallocate($foto, 0, 0, 0);
  $captcha_text_color = imagecolorallocate($layer, 0, 0, 0);



imagepng($foto); 
imagedestroy($foto); 
?>
