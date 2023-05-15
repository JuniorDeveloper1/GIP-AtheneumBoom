<?php if(session_status() !==  PHP_SESSION_ACTIVE) session_start();       ?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Index</title>

    <style> 
    @media only screen and (min-width: 850px) {
        * {
                margin: 0px auto;
            }
            #background-foto{
                width: 100%;
                position: inherit;
                margin-top: 10px;
            
                
            }
            a {
                text-decoration: none;
            }

            #background {
                width: 100%;
                align-items: center;
            }

            .producten {
                width: 400px;
                height: auto;
                margin-top: 130px;
                align-items: center;
                margin-bottom: 10px;
            }

            #producten-horloges {
                background-size: cover;
                float: left;
                margin-left: 15px;
                
            }

            #background-color {
                background-color: black;
                width: 400px;
                height: 400px;
                opacity: 0.5;
                position: absolute;
                text-align: center;
            }

            #imageHorloge {
                position: inherit;
            }

            #background-color:hover {
                opacity: 0.1;
            }
        
            #background-color span {
                width: 100%;
                color: white;
                font-size: 30px;
                line-height: 350px;
                letter-spacing: 3px;
                text-transform: uppercase;
                display: block;
            }

            #background-color:hover span {
                display: none;
            }

            #floater {
                width: auto;
                height: auto;
                float: left;
            }

            #box1 {
                float:left;
            }

            #box2 {
                margin: 0px 0px 0px 13px;
                float: left
            }

            #box3 {
                margin: 0px 0px 0px 828px;
            }

            #box4 {

            } 
    
    }

    @media only screen and (max-width:850px) {
            * {
                margin: 0px auto;
            }
            #background-foto{
                width: 100%;
                position: inherit;
                margin-top: 10px;

            }
            a {
                text-decoration: none;
            }

            #background {
                width: 100%;
                align-items: center;
            }

            .producten {
                width: 400px;
                height: auto;
                margin-top: 130px;
                align-items: center;
                margin-bottom: 10px;
            }

            #producten-horloges {
                background-size: cover;
                float: left;
                margin-left: 15px;
                width: 100%;
            }

            #background-color {
                background-color: black;
                width: 400px;
                height: 400px;
                opacity: 0.5;
                position: absolute;
                text-align: center;
            }

            #imageHorloge {
                position: inherit;
            }

            #background-color:hover {
                opacity: 0.1;
            }
        
            #background-color span {
                width: 100%;
                color: white;
                font-size: 30px;
                line-height: 350px;
                letter-spacing: 3px;
                text-transform: uppercase;
                display: block;
            }

            #background-color:hover span {
                display: none;
            }
            #box1{float: left;}
            #box2{float: left;}
            #box3{float: left;}

            #foto {
                width: 100%;
                height: 100%;
            }
            

            
    }
    </style>
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
            <a href="../producten-php/verlovings_ring.php"><div id="background-color"><span id="producten-text">Verlovings ringen</span></div></a>
            <img src="../images/producten-images/ringen/vrouwen_ringen/Royal_Ring_Ring_Vrouwenring_Diamond_1.jpg" width="400" height="400">
        </div>
         </div>
    </div> 

    </div>
    <?php include '../modules/footer.html' ?>
</body>
</html>