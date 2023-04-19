<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Pagina</title>
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
    @media only screen and (min-width: 900px) { 

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
                margin: 0px auto;
                height: 70%;
                width: 90%;
            }

            #buyDiv {
                float:left;
                width: 500px;
                height: inherit;
                margin-left: 518px;
                margin-top: -504px;

            }

            #buyDivAddToCart{
                background-color: black;
                width: 75%;
                height: 50px;
                color: white;
                letter-spacing: 5px;
                line-height: 50px;
                text-align: center;
            }

            #buyDivAddToCart:hover {
                background-color: white;



                color: black;
                width: 75%;
                height: 50px;
                letter-spacing: 5px;
                line-height: 50px;
                text-align: center;
                border: 1px solid black;
            }

            #buyDivTitle {
                font-size: 50px;
                font-weight: 700;
                text-align: left;
            }

            #buyDivPrice {
                margin-top: 120px;
                float:left;
                font-size: 40px;
                font-weight: 700;
                margin-left: 274px;
            }

            #product-counter {
                width: 25%;
                float:right;
            }

            #min{
                width: 30px;
                height: 50px;
                font-size: 30px;
                background-color: transparent;
                border: white;
                color: black;
            }

            #min:hover{
                width: 30px;
                height: 50px;
                font-size: 30px;
                background-color: black;
                color: white;

            }

            #plus{
                width: 30px;
                height: 50px;
                font-size: 30px;
                background-color: transparent;
                border: white;
                color: black;
            }

            #plus:hover{
                width: 30px;
                height: 50px;
                font-size: 30px;
                background-color: black;
                color: white;
            }

            #amount{
                width: 50px;
                height: 30px;
                text-align: center  ;


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
                clear: left;
                font-size: 20px;
            }

            #description-span {
                display: none;

            }

            
  
    }

    @media only screen and (max-width: 900px) { 
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
                /**Cant use*/
            }

            #productImage {
                margin: 0px auto;
                height: 80%;
                width: 100%;
            }

            #buyDiv {          
                width: 100%px;
                height: inherit;
            }

            #buyDivAddToCart{
                background-color: black;
                width: 75%;
                height: 50px;
                color: white;
                letter-spacing: 5px;
                line-height: 50px;
                text-align: center;
            }

            #buyDivAddToCart:hover {
                background-color: white;



                color: black;
                width: 75%;
                height: 50px;
                letter-spacing: 5px;
                line-height: 50px;
                text-align: center;
                border: 1px solid black;
            }

            #buyDivTitle {
                font-size: 50px;
                font-weight: 700;
                text-align: left;
            }

            #buyDivPrice {
                margin-top: 120px;
                float:left;
                font-size: 40px;
                font-weight: 700;
                margin-left: 346px;
            }

            #product-counter {
                width: 25%;
                float:right;
            }

            #min{
                width: 30px;
                height: 50px;
                font-size: 30px;
                background-color: transparent;
                border: white;
                color: black;
            }

            #min:hover{
                width: 30px;
                height: 50px;
                font-size: 30px;
                background-color: black;
                color: white;

            }

            #plus{
                width: 30px;
                height: 50px;
                font-size: 30px;
                background-color: transparent;
                border: white;
                color: black;
            }

            #plus:hover{
                width: 30px;
                height: 50px;
                font-size: 30px;
                background-color: black;
                color: white;
            }

            #amount{
                width: 50px;
                height: 30px;
                text-align: center  ;


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
                clear: left;
                font-size: 20px;
            }

            #description-span {
                display: none;

            }

            
  
    }

        
   
      
    </style>
<body>

   
    
<?php 
        $id = $_GET["productid"];

       include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\nl\header.html');
       include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php');                 
        $klantID = $_SESSION["klantID"];
        if(isset($_POST["addtocartButton"])){
            $amount = $_POST["amountPHP"];
        }
   
            
        
        $query = "SELECT * FROM producten WHERE ArtikelID = $id";
        $result = $connect -> query($query);
        echo "<div id='three-row'>";
        if($result -> num_rows > 0) {
                while($artikel = $result -> fetch_assoc()) {
                    echo "<div id='product'>";
                    echo "<img src=".$artikel["imageURL"]."id='productImage'>";
                    echo "</div>";
            echo "</div>";
            echo "<div id='floatBreaker'> </div>";
?>

    <!--Add something to cart variables->  KlantID = $_SESSION["klantID"], ArtikelID = $id, Aantal = $_POST["amountPHP"] -->
<?php
                echo "<div id='buyDiv'>";
                echo "    <h2 id='buyDivTitle'>".$artikel["ArtikelNaam"]."</h2>";
                echo "    <span id='buyDivPrice'>"."€".$artikel["Prijs"]."</span>";;
                echo "<form method='post' id='addToCartForm'>";
                echo "    <button id='buyDivAddToCart' name='addtocartButton'>";
                echo "        Toevoegen aan mandje";
                echo "</button>";
            }
               
?>

            <div id="product-counter">
               
                <button id="min" type='button'>-</button>
                <input type="text" name="amountPHP" id="amount" value="1" readonly>
                <button id="plus" type='button'>+</button> 
            </div>
            <script>
                var amountElement = document.getElementById("amount");
                var plus = document.getElementById("plus");
                var min = document.getElementById("min");

                min.addEventListener('click', () => 
                {
                    var amount = parseInt(amountElement.value);
                
                    if(amount >= 2) { 
                        amount--;
                        amountElement.value = amount;
                    }

                });

                plus.addEventListener('click', () => 
                {
                    var amount = parseInt(amountElement.value);
                    if(amount <= 19) {
                        amount++;
                        amountElement.value = amount;
                    }
                })
    
            </script>
        </form>
         



<?php 
                            echo "WERKT2"."<br>";
                            echo $klantID."<br>";
                            echo $id."<br>";
                         
            if(isset($_POST["addtocartButton"])){
                if($klantID != 0 || $amount != 0) {
                    $connect -> 
                    query(
                        "INSERT INTO `royalring`.`winkelkar` 
                        (`winkelkarID` ,
                        `klantID` ,
                        `ArtikelID` ,
                        `Aantal`) 
                        VALUES 
                        (NULL,
                        '".$klantID."',
                        '".$id."',
                        '".$amount."'
                        );"
                    );
                } else {
                    echo "Er is een probleem! Contacteer een medewerker!";
                }




            }
?>

<?php
            echo "    <div id='description' onclick='showDescription()'> ";
            echo "       <span id='productgegevens'>PRODUCTGEGEVENS</span> ";
            echo "    <span id='description-span'> ".$artikel["groteOmschrijving"]."     </span></button>";
            echo " </div>";


            echo "</div>";

       
    }
?>
<?php
       include 'C:\USBWebserver\USBWebserver_GIP\root\GIP\nl\footer.html'; 
?>

</body>
</html>