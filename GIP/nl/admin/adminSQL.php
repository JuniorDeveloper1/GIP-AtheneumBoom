<?php 
include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php'); 
$klantDisplay = "SELECT * FROM klant";
$klantDisplaySQL = $connect -> query($klantDisplay);


$adminDisplay = "SELECT * FROM admin";
$adminDisplaySQL = $connect -> query($adminDisplay);



$productenDisplay = "SELECT * FROM producten";
$productenDisplaySQL = $connect -> query($productenDisplay);

$producten_categorieDisplay = "SELECT * FROM product_categorie";
$producten_categorieDisplaySQL = $connect -> query($producten_categorieDisplay);

$winkelmandDisplay = "SELECT * FROM winkelkar";
$winkelmandDisplaySQL = $connect -> query($winkelmandDisplay);


?>