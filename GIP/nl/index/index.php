<?php if(session_status() !==  PHP_SESSION_ACTIVE) session_start();       ?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Index</title>
    <link rel="stylesheet" href="./assest/index.css">

</head>
<body>
    <?php include '../modules/header.php'?>

    <div id="background">
        <img src="../images/royal_ring_background_foto.png" id="background-foto">
    </div>

    <div class="producten">
        <div id="producten-horloges">

        <div class="box" id="box1">
           <a href="../producten-php/heren_ring.php"><div id="background-color">  <span id="producten-text">Herenringen</span></div></a>
            <img  src="../images/producten-images/ringen/heren_ringen/Royal_Ring_Herenring_Roman_Ring.jpg" width="400" height="400">
        </div>
        
        <div class="box" id="box2">
             <a href="../producten-php/horloges.php"> <div id="background-color">  <span id="producten-text">Horloges</span></div></a>
                <img  src="../images/producten-images/horloges/Royal_Ring_Horloge_Citizen_1.png" width="400" height="400">
        </div>

        <div class="box" id="box3">
            <a href="../producten-php/verlovings_ring.php"><div id="background-color"><span id="producten-text">Trouw ringen</span></div></a>
            <img src="../images/producten-images/ringen/trouw_ringen/Royal_Ring_Trouwring_marquise design.png" width="400" height="400">
        </div>
         </div>
    </div> 

    </div>
    <?php include '../modules/footer.html' ?>
</body>
</html>