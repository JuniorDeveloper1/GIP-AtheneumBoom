    <?php 
        session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assest/producten.css">
    <title>Product Pagina</title>
</head>
<body>

   
    
<?php 
        $id = $_GET["productid"];

       include ('../modules/header.php');
       include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php');                 
       if(isset($_SESSION["klantID"]) && $_SESSION["klantID"] == true){
        $klantID = $_SESSION["klantID"];
       }else {
        $klantID = -1;
       }
        if(isset($_POST["addtocartButton"])){
            $amount = $_POST["amountPHP"];
        }
   
    

        $ItemAlreadyExist = "SELECT * FROM `winkelkar` 
        WHERE `klantID` = '".$klantID."' AND `ArtikelID` = '".$id."'";
       $ItemAlreadyExistSQL =  $connect ->  query($ItemAlreadyExist);

        
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
               if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true) {
                echo "<div id='buyDiv'>";
                echo "    <h2 id='buyDivTitle'>".$artikel["ArtikelNaam"]."</h2>";
                echo "    <span id='buyDivPrice'>"."€".$artikel["Prijs"]."</span>";;
                echo "<form method='post' id='addToCartForm'>";
                echo "    <button id='buyDivAddToCart' name='addtocartButton'>";
                echo "        ajouter au panier";
                echo "</button>";

            
               
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
                
                    if(amount >= 2 && amount < 4) { 
                        amount--;
                        amountElement.value = amount;
                    }

                });

                plus.addEventListener('click', () => 
                {
                    var amount = parseInt(amountElement.value);
                    if(amount <= 2) {
                        amount++;
                        amountElement.value = amount;
                    }
                })
    
            </script>

            <?php         
           /**Else is het einde van $_SESSION["loggedIn"] & laatste } is van de while loop voor de artikelen te showen */    
           /**
            * This is the code if you're not logged in!
            */
            }else {
                echo "<div id='buyDiv'>";
                echo "    <h2 id='buyDivTitle'>".$artikel["ArtikelNaam"]."</h2>";
                echo "    <span id='buyDivPrice'>"."€".$artikel["Prijs"]."</span>";;
                echo "    <button id='buyDivAddToCart'>";

                echo "        Login to buy!";
                echo "</button>";
               }
            ?>
        </form>
         



<?php 
    /**  echo "WERKT2"."<br>";
     echo $klantID."<br>";
    echo $id."<br>";
    */
                         
            if(isset($_POST["addtocartButton"])){
                        if($klantID != 0 || $amount != 0) {
                            if($ItemAlreadyExistSQL -> num_rows > 0) {

                                while($SQL = $ItemAlreadyExistSQL -> fetch_assoc()) {
                                    $nieuwtotaal = $amount + $SQL["Aantal"];
                                    if($nieuwtotaal > 3) {
                                        $nieuwtotaal = 3;
                                    }
                                }
                    
                                $connect -> 
                                query("UPDATE `winkelkar` 
                                SET `Aantal` = '".$nieuwtotaal."' 
                                WHERE `winkelkarID` = '".$klantID."' 
                                AND `ArtikelID` = '".$id."'");
                                
                            }else {
           
                                $connect -> 
                                query(
                                    "INSERT INTO `royalring`.`winkelkar` 
                                    (`winkelkarID` ,
                                    `klantID` ,
                                    `ArtikelID` ,
                                    `Aantal`) 
                                    VALUES 
                                    ($klantID,
                                    '".$klantID."',
                                    '".$id."',
                                    '".$amount."'
                                    );"
                                );
                            }
                           
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

       
    }
?>
    <script>
        var open = true;
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
<?php
       include '../modules/footer.html'; 
?>

</body>
</html>