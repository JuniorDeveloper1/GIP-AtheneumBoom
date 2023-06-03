<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assest/productenArtikel.css">
    <title>Heren ring</title>

</head>
<body>
<?php 
include ('../modules/header.php');

include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php');

?>





    <div id="tussen">
        <?php 
            $query = "SELECT * FROM producten A1 INNER JOIN product_categorie A2 ON  A1.CategorieID = A2.CategorieID";
            $result = $connect -> query($query);
            if($result -> num_rows > 0) {

                echo "<div id='three-row'>";
                while($artikel = $result -> fetch_assoc()) {
                    if($artikel["CategorieID"] == 1) {
                        $_SESSION["databaseProductLink"] = "heren_ringen";
                        echo "<a href='producten.php?productid=".$artikel["ArtikelID"]."'><div id='product'>";
                        echo "<img src=".$artikel["imageURL"]."id='productImage'";
                        echo "<a><span id='artikelNaam'>".$artikel["ArtikelNaam"]."</span> <br></a>";
                        echo "<span> €".$artikel["Prijs"]."</span> <br>";
                        echo "<span> ".$artikel["Omschrijving"]."</span>";
                        echo "</div>";
                    }
                }
            }else {
                echo "<h1 align='middle' STYLE='margin-left:30px'> NOG GEEN ARTIKKELEN TOEGEVOEGD </h1>";
            }

            echo "</div>";
        ?>
        


            </div>
        </div>



    <div id="floatBreaker"></div>

    <?php include '../modules/footer.html'; ?>
</body>
</html>