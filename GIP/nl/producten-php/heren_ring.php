<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heren ring</title>
    <style> 
    #container {
        align-items: center;
    }
    #product {
        width: 410px;
        height: 500px;
        border-radius: 5px;
        margin: 10px 10px 10px 4px;
        float: right;
       
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
        clear: right;
        width: 100%;
        height: auto;
    }
    #tussen{
        margin-left: -50px;
    }
    </style>
</head>
<body>
<?php 
include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\nl\header.html');

include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php');

?>





    <div id="tussen">
        <?php 
            $query = "SELECT * FROM heren_ringen;";

            $result = $connect -> query($query);

            if($result -> num_rows > 0) {
                while($artikel = $result -> fetch_assoc()) {

                    echo "<div id='product'>";
                    echo "<img src=".$artikel["imageURL"]."width='400' height='400'>";
                    echo "<a><span id='artikelNaam'>".$artikel["ArtikelNaam"]."</span> <br></a>";
                    echo "<span> €".$artikel["Prijs"]."</span> <br>";
                    echo "<span> ".$artikel["Omschrijving"]."</span>";
                    echo "</div>";
                }
            }else {
                echo "<h1 align='middle' STYLE='margin-left:30px'> NOG GEEN ARTIKKELEN TOEGEVOEGD </h1>";
            }
        ?>
        


            </div>
        </div>



    <div id="floatBreaker"></div>

    <?php include 'C:\USBWebserver\USBWebserver_GIP\root\GIP\nl\footer.html'; ?>
</body>
</html>