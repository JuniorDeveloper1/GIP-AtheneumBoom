<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <script>
        var open = false;
        function showDescription() {
            if(!open) {
                open = true;
                 document.getElementById("description-span").style.display = "block";
            }else{
                document.getElementById("description-span").style.display = "none";
                open = false;
            }
        }
    </script>
    <style> 
<<<<<<< HEAD

        @media only screen and (min-width: 900px) {
=======
               @media only screen and (min-width: 856px) {
>>>>>>> master
             #container {
                align-items: center;
            }
            #product {
                width: 510px;
                border-radius: 5px;
                margin: 10px 10px 40px 4px;            
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
            #three-row {
                width: 1130px;
                margin: 0px auto;
            }

            #productImage {
                height: 80%;
                width: 100%;
            }

            #buyDiv {
                float:left;
                width: 500px;
                height: inherit;
                margin-left: 577px;
                margin-top: -533px;
                text-align: center;

            }

            #buyDivAddToCart{
                background-color: black;
                width: 100%;
                height: 80px;
                color: white;
                letter-spacing: 5px;
                line-height: 80px;
                text-align: center;
                margin-top: 173px;
            }

            #buyDivAddToCart:hover {
                background-color: white;
                color: black;
                width: 100%;
                height: 80px;
                letter-spacing: 5px;
                line-height: 80px;
                text-align: center;
                border: 1px solid black;
            }

            #buyDivTitle {
                font-size: 50px;
                font-weight: 700;
                text-align: center;
                margin-top: 20px;
                margin-left: 71px;
            }

            #buyDivPrice {
                margin-top: 177px;
                float:right;
                font-size: 40px;
                font-weight: 700;
            }

            #description {
                width: 100%;
                height: 100%;
                margin-top: 10px;
                border-top: 1px solid grey;
                border-bottom: 1px solid grey;
                margin-bottom: 10px;
                text-align: left;
                line-height: 40px;
                
            }

            #productgegevens {
                font-size: 20px;
            }

            #description-span {
                display: none;

            }

            
  
    }

<<<<<<< HEAD
    @media only screen and (max-width: 900px) {
=======
    @media only screen and (max-width: 856px) {
>>>>>>> master
             #container {
                align-items: center;
            }
            #product {
                width: 360px;
                height: 500px;
                border-radius: 5px;
                margin: 10px 10px 10px 4px;
<<<<<<< HEAD
                /**float: right;**/
                /**  border: 1px solid black;**/
=======
                float: right;
                border: 1px solid black;
>>>>>>> master
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

<<<<<<< HEAD
            
=======
>>>>>>> master
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

<<<<<<< HEAD
            
            #productImage {
                height: 100%;
                align-items: center;
                /**width: 140%;**/
            }
     


            #buyDiv {
                width: 100%;
                height: inherit;
              /**  margin-left: 577px;*/
              /**  margin-top: -533px;*/
                text-align: center;

            }

            #buyDivAddToCart{
                background-color: black;
                width: 100%;
                height: 80px;
                color: white;
                letter-spacing: 5px;
                line-height: 80px;
                text-align: center;
                margin-top: 173px;
            }

            #buyDivAddToCart:hover {
                background-color: white;
                color: black;
                width: 100%;
                height: 80px;
                letter-spacing: 5px;
                line-height: 80px;
                text-align: center;
                border: 1px solid black;
            }

            #buyDivTitle {
                font-size: 50px;
                font-weight: 700;
                text-align: center;
                margin-top: 20px;
                margin-left: 71px;
            }

            #buyDivPrice {
                margin-top: 177px;
                float:right;
                font-size: 40px;
                font-weight: 700;
            }

            #description {
                width: 100%;
                height: 100%;
                margin-top: 10px;
                border-top: 1px solid grey;
                border-bottom: 1px solid grey;
                margin-bottom: 10px;
                text-align: left;
                line-height: 40px;
                
            }

            #productgegevens {
                font-size: 20px;
            }

            #description-span {
                display: none;

            }

=======
            #productImage {
                height: 100%;
                width: 140%;
                
            }

>>>>>>> master
    }
    </style>
<body>
    <?php 
       include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\nl\header.html');
       include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php');  
    
        $id = $_GET["productid"];

        $query = "SELECT * FROM `horloges` WHERE ArtikelID = $id";
        $result = $connect -> query($query);

        echo "<div id='three-row'>";
        if($result -> num_rows > 0) {
                while($artikel = $result -> fetch_assoc()) {
                    echo "<div id='product'>";
                    echo "<img src=".$artikel["imageURL"]."id='productImage'>";

                    //echo "<span id='artikelNaam'>".$artikel["ArtikelNaam"]."</span> <br>";
                    //echo "<span> €".$artikel["Prijs"]."</span> <br>";
                    //echo "<span> ".$artikel["Omschrijving"]."</span>";
                    echo "</div>";
      
            echo "</div>";
            echo "<div id='floatBreaker'> </div>";
    ?>
    
    <?php

            echo "<div id='buyDiv'>";

            echo "    <span id='buyDivTitle'>".$artikel["ArtikelNaam"] ."</span>";
            echo "    <span id='buyDivPrice'>"."€".$artikel["Prijs"]."</span>";
            echo "    <div id='buyDivAddToCart'> ";
            echo "        <span>Toevoegen aan mandje</span>";
            echo "    </div>";

            echo "    <div id='description' onclick='showDescription()'> ";
            echo "       <span id='productgegevens'>PRODUCTGEGEVENS</span> ";
            echo "    <span id='description-span'> ".$artikel["groteOmschrijving"]."     </span>";
            echo " </div>";


            echo "</div>";

        }
    }
    ?>
    <?php
       include 'C:\USBWebserver\USBWebserver_GIP\root\GIP\nl\footer.html'; 
    ?>
</body>
</html>