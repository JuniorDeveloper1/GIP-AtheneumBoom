<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horloges</title>
    <style> 
        @media only screen and (min-width: 856px) {
             #container {
                align-items: center;
            }
            #product {
                width: 360px;
                height: 500px;
                border-radius: 5px;
                margin: 10px 10px 10px 4px;
                float: right;
                border: 1px solid black;
            
            }
            #product span {
                font-size: 15px;
               

            }

            #product span#artikelNaam {
               
                font-size: 25px;
                text-transform: uppercase;
                margin-top: 5px;
                letter-spacing: 3px;
            
            }

            #floatBreaker {
                clear: right;
                width: 100%;
                height: auto;
            }
            

            #three-row {
                width: 1130px;
                margin: 0px auto;
            }

            #productImage {
                height: 80%;
                width: 100%;
            }
  
    }

    @media only screen and (max-width: 856px) {
             #container {
                align-items: center;
            }
            #product {
                width: 360px;
                height: 500px;
                border-radius: 5px;
                margin: 10px 10px 10px 4px;
                float: right;
                border: 1px solid black;
            }
            #product span {
                font-size: 15px;
                margin-left: 100px;

            }

            #product span#artikelNaam {
                margin-left: 100px;
                font-size: 25px;
                text-transform: uppercase;
                margin-top: 5px;
                letter-spacing: 3px;
            
            }

            #floatBreaker {
                clear: both;
                width: 100%;
                height: auto;
            }
            

            #three-row {
                width: 775px;
                margin: 0px auto;
                margin-left: 1px;
            }

            #productImage {
                height: 80%;
                width: 100%;
                
            }

    }
    </style>
</head>
<body>
<?php 
include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\nl\header.html');
include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php');

?>
        <?php 
            $query = "SELECT * FROM horloges;";
            $aantal = 0;

            $result = $connect -> query($query);

            if($result -> num_rows > 0) {

                echo "<div id='three-row'>";
                while($artikel = $result -> fetch_assoc()) {
                    $aantal++;

                    echo "<a href='productenTest.php?productid=".$artikel["ArtikelID"]."'><div id='product'>";
                    echo "<img src=".$artikel["imageURL"]."id='productImage'>";
                    echo "<span id='artikelNaam'>".$artikel["ArtikelNaam"]."</span> <br>";
                    echo "<span> €".$artikel["Prijs"]."</span> <br>";
                    echo "<span> ".$artikel["Omschrijving"]."</span>";
                    echo "</div></a>";
                }
            }else {
                echo "<h1 align='middle' STYLE='margin-left:30px'> NOG GEEN ARTIKKELEN TOEGEVOEGD </h1>";
            }

            echo "</div>";
        ?>
        


        </div>



    <div id="floatBreaker"></div>

    <?php include 'C:\USBWebserver\USBWebserver_GIP\root\GIP\nl\footer.html'; ?>
</body>
</html
