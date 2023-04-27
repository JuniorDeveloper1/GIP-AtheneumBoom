<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        #postform {
            background-color: #ECECEC;
        }
        #table {
            width: 70%;
            height:100px;
            /**margin: 0px auto;*/
            border-spacing: 0;
            background-color: white;
            margin-top: 5px;
            margin-bottom: 10px;
        }

        #table_names {
            margin-top: 10px;
        }

        .table_border{
            border-bottom: 1px solid grey;
        }

        span#table_naam_product{
            line-height: 50px;
        }

        #table_button_delete {
            background-color: 	#ff7272;
            outline: none;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            padding: 0.5rem 1rem;
            align-content: center;
        }
        #table_button_delete span {
            vertical-align: sub;
        
        }

        #table_totaal{
            border-left: 1px solid lightgrey;
            border-left-width: 3px;
            border-collapse: separate;
        }

        #table_hoeveelheid,#table_prijs,#table_totaal,#table_names_center,#table_naam_product {
            text-align: center;
        }


        #checkout {
            background-color: white;
            width: 29%;
            height: 210px;
            float: right;
            margin-top: 5px;
       
            
        }

        /**
        background-color:rgb(38, 39, 43);
        color: rgb(115, 115, 115); 
        */
        #checkout_promo span {
            font-size: small;
            color:  rgb(115, 115, 115);
        }

        #checkout_promo_code {
            width: 79%;
            height: 30px;
        }

        #checkout_promo_button {
            width: 20%;
            height: 34px;
            background-color: rgb(38, 39, 43);
            color: white;
            border: none;
            border-spacing: 0;
            margin-left: -6px;
        }

        #checkout_table {
            margin-top: 5px;
            width: 100%;
        }

        #checkout_outcome {
            text-align: right;
        }

        #checkout_table_button{
            text-align: -webkit-center;
        }

        #checkout_table_button button {
            width: 60%;
            height: 40px;
            background-color: rgb(38, 39, 43);
            color: white;
            border: 1px solid black;
        }


        #checkout_table_button button:hover {
            width: 75%;
            height: 40px;
            background-color: white;
            color: rgb(38, 39, 43);
            border: 1px solid black;
        }

        #floatbreaker_right{
            clear: right;
        }

        #test{
            text-align: -webkit-right;
        }

        .test {
            font-size: small;
        }

       
    
    </style>
</head>
<body>
<?php 
        include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\nl\header.html');
        include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php');
        $klantID = $_SESSION["klantID"];
            $winkelkarsql = "SELECT A1.winkelkarID, A1.klantID, A1.artikelID, A1.Aantal, A2.imageURL, A2.ArtikelNaam, A2.Prijs
                FROM winkelkar A1 INNER JOIN producten A2 
                ON A1.artikelID = A2.ArtikelID AND A1.klantID = $klantID;";
            $winkelkarResult =  $connect -> query($winkelkarsql);
            $totalPrice = 0;

            /**
             * We are calculating our total cost price.
             */

             $totalpricesql = "SELECT A1.winkelkarID, A1.klantID, A1.Aantal, A2.Prijs
             FROM winkelkar A1 INNER JOIN producten A2 
             ON A1.artikelID = A2.ArtikelID AND A1.klantID = $klantID;";
             $totalPriceResult =  $connect -> query($totalpricesql);




             $outcomeNavBar = "SELECT A1.winkelkarID, A1.klantID, A1.Aantal, A2.ArtikelNaam
             FROM winkelkar A1 INNER JOIN producten A2 
             ON A1.artikelID = A2.ArtikelID AND A1.klantID = $klantID;";
             $outcomeSQL =  $connect -> query($outcomeNavBar);



             if($totalPriceResult -> num_rows > 0) {
                while($artikelen = $totalPriceResult -> fetch_assoc()) { 
                    $quantity = $artikelen["Aantal"];
                    $price = $artikelen["Prijs"];
                    $itemTotal = $quantity * $price;
                    $totalPrice += $itemTotal;

                }
            }


            
            





        

?>
<form name='post' method="post" id="postform">
    <div id='checkout'>
        <div id='checkout_promo'>
            <span>Enter promo code</span>
            <input name='promoCode' id='checkout_promo_code' placeholder='Promo code'> 
            <button name='promoButton' id='checkout_promo_button' type='button'>Submit </button>    
        </div>

        <table id='checkout_table'>
            <tr>
            <td id=''><span>Delivery</span></td>
                <td id='checkout_outcome'><span>gratis</span></td>
            </tr>

<?php 
            if($outcomeSQL -> num_rows > 0) {
                while($artikelen = $outcomeSQL -> fetch_assoc()) {
                    echo "<tr>";
                    echo "<td class='test' id=''><span>".$artikelen["ArtikelNaam"]."</span></td>";
                    echo "<td class='test' id='checkout_outcome'><span>".$artikelen["Aantal"]."</span></td>";
                    echo "</tr>";
                }
            }
?>

            <tr>
                <td>Discount</td>
                <td id='checkout_outcome'>€ ??</td>
            </tr>
        </table>
        <hr>
        <table id='checkout_table'>
             <tr>
                <td>Total</td>
                <td id='checkout_outcome'><?php echo "€".$totalPrice ?></td>
               
            </tr>

            <tr>
                <td colspan='2' id='checkout_table_button'><button name='checkout_checkout_button'>Checkout</button></td>
            </tr>
        </table>

    </div>

    <table id="table">
        <tr id="table_names"> <td><span>Items</span></td> <td>Name</td> <td id="table_names_center"><span>Quantity</span></td> <td id="table_names_center"><span>Prijs product</span></td> <td  id="table_totaal">Totaal</td> </tr>
<?php 
        if($winkelkarResult -> num_rows > 0) {
            while($artikelen = $winkelkarResult -> fetch_assoc()) { 
                $winkelkarID = $artikelen["winkelkarID"];
                echo "<tr id='table_items_tr'>";
                    echo "<td id='table_item' class='table_border' > <img src=".$artikelen["imageURL"]." width='100' height='100' id='table_product_image'></img></td>";
                    echo "<td id='table_name' class='table_border'><span id='table_naam_product'>".$artikelen["ArtikelNaam"]."</span></td>";
                    echo "<td id='table_hoeveelheid' class='table_border'>".$artikelen["Aantal"]."</td>";
                    echo "<td id='table_prijs' class='table_border'>€".$artikelen["Prijs"]."</td>";
                    echo "<td id='table_totaal' class='table_border'>€".$artikelen["Aantal"] * $artikelen["Prijs"]."</td>";
                    echo "<td class='table_border' ><input type='hidden' name='winkelkarID' value='".$winkelkarID."'><input type='submit' id='table_button_delete' name='table_delete' value='x'></td>";
                echo "</tr>";
            }
        }


        if(isset($_POST["table_delete"])) {
            $winkelkarID = $_POST['winkelkarID'];
            $deleteSQL = "DELETE FROM winkelkar WHERE winkelkarID = $winkelkarID AND klantID = $klantID";
            $deleteResult = $connect->query($deleteSQL);
        }



?>


    <tr>
        <td colspan="5" id="test"><?php echo "€".$totalPrice ?></td>
    </tr>

 
    </table>



</form>



<div id="floatbreaker_right"></div>


<?php
        include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\nl\footer.html');
?>
    
</body>
</html>