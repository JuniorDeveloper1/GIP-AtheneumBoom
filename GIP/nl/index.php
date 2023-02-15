<?php session_start() ?>

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
    <?php include 'header.html'?>

    <div id="background">
        <img src="../nl/images/royal_ring_background_foto.png" id="background-foto">
    </div>

    <div class="producten">
        <div id="producten-horloges">

        <div class="box" id="box1">
           <a href="../nl/producten-php/heren_ring.php"><div id="background-color">  <span id="producten-text">Verlovingsringen</span></div></a>
            <img id="foto" src="./images/producten-images/ringen/Royal_Ring_Verlovingsring_silver.png" id="imageHorloge">
        </div>
        
        <div class="box" id="box2">
             <a href="../nl/producten-php/horloges.php"> <div id="background-color">  <span id="producten-text">Horloges</span></div></a>
                <img id="foto" src="./images/producten-images/horloges/Royal_Ring_Horloge_Citizen_1.png">
        </div>

        <div class="box" id="box3">
            <a href="../nl/producten-php/trouw_ring.php"><div id="background-color"><span id="producten-text">Trouwringen</span></div></a>
            <img id="foto" src="./images/producten-images/ringen/Royal_Ring_Trouwring_GoudSilver.png">
        </div>
         </div>
    </div> 

    </div>
    <?php include 'footer.html' ?>
</body>
</html>