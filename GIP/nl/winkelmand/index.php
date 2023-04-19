<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\nl\header.html');
        include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php');
    /**Possible SQL 
     * 
     * SELECT A1.winkelkarID, A1.klantID, A1.artikelID, A1.Aantal, A2.imageURL
       FROM winkelkar A1
       INNER JOIN producten A2 ON A1.artikelID = A2.ArtikelID AND A1.klantID = $klantID;
    */

        include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\nl\footer.html');
?>
    
</body>
</html>