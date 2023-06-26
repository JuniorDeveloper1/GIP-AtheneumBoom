<?php 
  include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php'); 

  $productenDisplay = "SELECT * FROM producten";
  $productenDisplaySQL = $connect -> query($productenDisplay);




?>