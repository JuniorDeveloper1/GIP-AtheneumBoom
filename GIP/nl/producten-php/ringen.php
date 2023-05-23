<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

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
    </style>
</head>
<body>

<?php include("../modules/header.php");?>
    
    <div class="producten">
            <div id="producten-horloges">

            <div class="box" id="box1">
            <a href="../producten-php/heren_ring.php"><div id="background-color">  <span id="producten-text">Herenringen</span></div></a>
                <img  src="../images/producten-images/ringen/heren_ringen/Royal_Ring_Herenring_Roman_Ring.jpg" width="400" height="400">
            </div>
            
            <div class="box" id="box2">
                <a href="../producten-php/trouw_ring.php"> <div id="background-color">  <span id="producten-text">Trouw ringen</span></div></a>
                    <img  src="../images/producten-images/ringen/trouw_ringen/Royal_Ring_Trouwring_marquise design.png" width="400" height="400">
            </div>

            <div class="box" id="box3">
                <a href="../producten-php/verlovings_ring.php"><div id="background-color"><span id="producten-text">Verlovings ringen</span></div></a>
                <img src="../images/producten-images/ringen/vrouwen_ringen/Royal_Ring_Ring_Vrouwenring_Diamond_1.jpg" width="400" height="400">
            </div>
            </div>
        </div> 


        <?php include("../modules/footer.html");?>

</body>
</html>