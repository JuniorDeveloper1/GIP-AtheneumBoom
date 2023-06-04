<?php if(session_status() !==  PHP_SESSION_ACTIVE) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assest/index.css">
    <title>Winkelmand</title>
</head>
<body>
<?php 
    include ('../modules/header.php');
    include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php');
      
    if(isset($_SESSION["klantID"])== null) {
        $klantID = -1;
    } else {
        $klantID = $_SESSION["klantID"];
    }

    $winkelkarsql = "SELECT A1.winkelkarID, A1.klantID, A1.artikelID, A1.Aantal, A2.imageURL, A2.ArtikelNaam, A2.Prijs
        FROM winkelkar A1 INNER JOIN producten A2 
        ON A1.artikelID = A2.ArtikelID AND A1.klantID = $klantID;";
    $winkelkarResult =  $connect->query($winkelkarsql);

    $totalPrice = 0;

    /**
     * We are calculating our total cost price.
     */

    $totalpricesql = "SELECT A1.winkelkarID, A1.klantID, A1.Aantal, A2.Prijs
        FROM winkelkar A1 INNER JOIN producten A2 
        ON A1.artikelID = A2.ArtikelID AND A1.klantID = $klantID;";
    $totalPriceResult =  $connect->query($totalpricesql);

    $outcomeNavBar = "SELECT A1.winkelkarID, A1.klantID, A1.Aantal, A2.ArtikelNaam
        FROM winkelkar A1 INNER JOIN producten A2 
        ON A1.artikelID = A2.ArtikelID AND A1.klantID = $klantID;";
    $outcomeSQL =  $connect->query($outcomeNavBar);

    $totalPrice = 0;
    if ($totalPriceResult->num_rows > 0) {
        while ($artikelen = $totalPriceResult->fetch_assoc()) { 
            $quantity = $artikelen["Aantal"];
            $price = $artikelen["Prijs"];
            $itemTotal = $quantity * $price;
            $totalPrice += $itemTotal;

            $btw = $totalPrice * 0.21;

            $totalPrice += $btw;

            $totalPrice = round($totalPrice, 2);
        }
    }
?>

<form name="post" method="post" id="postform">
    <div id='checkout'>
    <div id='checkout_promo'>
            <span>Enter promo code</span>
            
                    <form method="POST" action="">
                        <input name='promoCode' id='checkout_promo_code' placeholder='Promo code'> 
                        <button name='promoButton' id='checkout_promo_button' type='submit'>Submit</button> 
                    </form>
            
                    <?php 
                     $discountAmount = 0;
                      
                     
                        
                        if(isset($_POST["promoButton"])){
                            
                           
                            
                            $promoCode = $_POST["promoCode"];
                            $promoCodeSQL = "SELECT * FROM `promo_code` WHERE PromoCode = '$promoCode'";
                            $promoCodeResult = $connect->query($promoCodeSQL);
                            
                            if($promoCodeResult->num_rows > 0) {
                                while($codes = $promoCodeResult->fetch_assoc()){
                                    if($codes["PromoCode"] == $promoCode) {
                                        $discountAmount += $codes["Promo_discount_amount"];
                                        $_SESSION["discountTotal"] = $discountAmount;
                                    
                                    }
                                }
                            }
                        }
                    ?>
        </div>


        <table id='checkout_table'>
            <tr>
                <td id=''><span>Delivery</span></td>
                <td id='checkout_outcome'><span>gratis</span></td>
            </tr>

<?php 
            if ($outcomeSQL->num_rows > 0) {
                while ($artikelen = $outcomeSQL->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td class='test' id=''><span>".$artikelen["ArtikelNaam"]."</span></td>";
                    echo "<td class='test' id='checkout_outcome'><span>".$artikelen["Aantal"]."</span></td>";
                    echo "</tr>";
                }
            }
?>

            <tr>
                <td>Discount</td>
                <td id='checkout_outcome'>€ <?php echo $discountAmount ?></td>
            </tr>
        </table>
        <hr>
        <table id='checkout_table'>
             <tr>
                <td>Incl. BTW Totaal</td>
                <td id='checkout_outcome'><?php echo "€";
                
                    if(($totalPrice - $discountAmount) < 0) {
                        $discountAmount = $totalPrice;
                    }else {
                        $totalPrice-$discountAmount;
                    }
                
                    
                    echo ($totalPrice - $discountAmount );
                    if(isset($_POST["promoButton"])){
                        $_SESSION["totalPrice"] =  ($totalPrice - $_SESSION["discountTotal"]);
                    }
                     ?></td>
            </tr>
            <tr>
                <td colspan='2' id='checkout_table_button'><button name='checkout_checkout_button'>
                    Checkout

                    <?php 
                        if(isset($_POST["checkout_checkout_button"])){
                            echo "<script>window.location.href = '../bestelling/index.php?klantID=".$klantID."';</script>";
                            
                        }
                    ?>
                </button></td>
            </tr>
        </table>
    </div>
</form>

<table id="table">
    <tr id="table_names">
        <td><span>Items</span></td>
        <td>Name</td>
        <td id="table_names_center"><span>Quantity</span></td>
        <td id="table_names_center"><span>Prijs product</span></td>
        <td id="table_totaal">Totaal</td>
    </tr>
<?php 
    if ($winkelkarResult->num_rows > 0) {
        while ($artikelen = $winkelkarResult->fetch_assoc()) { 
            echo "<tr id='table_items_tr'>";
            echo "<td id='table_item' class='table_border'><img src=".$artikelen["imageURL"]." width='100' height='100' id='table_product_image'></img></td>";
            echo "<td id='table_name' class='table_border'><span id='table_naam_product'>".$artikelen["ArtikelNaam"]."</span></td>";
            $winkelkarID = $artikelen["winkelkarID"];

            
            echo "<td id='table_hoeveelheid' class='table_border'>";
            echo  "<form method='post'>";
            echo "<input type='hidden' name='decrease_id' value=".$winkelkarID.">";
            echo "<input type='submit' id='decreaseAmount' name='decreaseAmount' value='-'>";
           

            echo "<input type='text' id='aantalValue' value=".$artikelen["Aantal"]."  width='2' readonly>";


            echo "<input type='hidden' name='add_id' value=".$winkelkarID.">";
            echo "<input type='submit' name='addAmount' value='+' id='addAmount'>";

            echo "</form>";
            
            
            echo "</td>";


            $artikel = $artikelen["artikelID"];

            echo "<td id='table_prijs' class='table_border'>€".$artikelen["Prijs"]."</td>";
            echo "<td id='table_totaal' class='table_border'>€".$artikelen["Aantal"] * $artikelen["Prijs"]."</td>";
            echo "<td class='table_border'><a href='delete.php?id=".$artikelen["winkelkarID"]."&klantNaam=".$klantID."&artikelID=".$artikel."'><input type='submit' id='table_button_delete' name='table_delete' value='x'></a></td>";
            echo "</tr>";
        }
    }
?>


<?php 
        if(isset($_POST["decreaseAmount"])){
            $sqldecrease = "SELECT `Aantal` FROM `winkelkar` WHERE `winkelkarID` = ".$_POST["decrease_id"]." ";
            $result1 = $connect -> query($sqldecrease);
            $endresult = $result1 -> fetch_assoc();
            $aantal = $endresult["Aantal"];
            if($aantal > 1){
                $aantal--;
            }else {
                $aantal = 1;
            }

                            $sqlVerminder = "UPDATE `winkelkar`
                SET `Aantal` = ".$aantal."
                WHERE `winkelkarID` = ".$_POST["decrease_id"]." ";
                $connect->query($sqlVerminder);
                echo $aantal;
     
                echo "<script>window.location.href = '../winkelmand/index.php';</script>";

        }

        if (isset($_POST["addAmount"])) {
            $sqladd = "SELECT `Aantal` FROM `winkelkar` WHERE `winkelkarID` = ".$_POST["add_id"]." ";
            $result2 = $connect->query($sqladd);
            $endresult2 = $result2->fetch_assoc();
            $aantal2 = $endresult2["Aantal"];
        
            if ($aantal2 < 3) {
                $aantal2++;
            }else {
                $aantal2 = 3;
            }

            $sqlAdd = "UPDATE `winkelkar`
                SET `Aantal` = ".$aantal2."
                WHERE `winkelkarID` = ".$_POST["add_id"]." "; // Updated the $_POST["addAmount"] to $_POST["add_id"]
                $connect->query($sqlAdd);
                echo "<script>window.location.href = '../winkelmand/index.php';</script>";
        }


?>
    <tr>
        <td colspan="5" id="test"><?php echo "€".$totalPrice ?></td>
    </tr>
</table>

<div id="floatbreaker_right"></div>

<?php
    include ('../modules/footer.html');
?>
    
</body>
</html>
