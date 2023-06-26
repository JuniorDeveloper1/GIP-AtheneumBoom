<?php if(session_status() !==  PHP_SESSION_ACTIVE) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestelling</title>
</head>
<body>
    <?php 
    include("../modules/header.php");
    $klantID = $_GET['klantID'];
    $totalPrice =  $_SESSION["totalPrice"];
    include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php'); 


    if($totalPrice != 0) {
        $bestellingSQL = "INSERT INTO bestelling(bestellingID, klantID, totaal) 
                          VALUES (null, '$klantID','$totalPrice')";
        $bestellingSQLResult = $connect -> query($bestellingSQL);

        $bestellingDetailSQL = "INSERT INTO bestelling_details(bestellingID,ArtikeID,aantal) 
                                SELECT LAST_INSERT_ID(), ArtikelID, Aantal
                                FROM winkelkar where klantID = $klantID";
        $bestellingDetailSQLResult = $connect -> query($bestellingDetailSQL);

        $sqlDeleteUserWinkelkar = "DELETE FROM winkelkar where klantID = $klantID";
        $connect->query($sqlDeleteUserWinkelkar);





        $klantNaam = $_SESSION["klantVoornaam"];
        $klantAchternaam =  $_SESSION["klantAchternaam"];
        echo "Beste ".$klantNaam." ".$klantAchternaam." ,<br>";
        echo "U heeft een bestelling gedaan van € ".$_SESSION["totalPrice"]."<br>";
        echo "Deze wordt binnenkort verzonden!";

        $_SESSION["totalPrice"] = 0;
    }else {
        echo " Je hebt niets besteld!";
    }

    

    
    include("../modules/footer.html");
    ?>
</body>
</html>