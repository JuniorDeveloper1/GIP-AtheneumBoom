<?php
session_start();
$random_nummer = rand(10000, 99999); 

$_SESSION["captcha"] = $random_number; 

$foto = imagecreate(100, 50); 
$bg_color = imagecolorallocate($image, 255, 255, 255); 
$text_color = imagecolorallocate($image, 0, 0, 0);
imagestring($image, 5, 25, 18, $random_nummer, $text_color); 


header("Content-Type: image/png"); 
imagepng($image); 
imagedestroy($image); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


</body>
</html>