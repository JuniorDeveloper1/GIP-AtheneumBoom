<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
    <?php
    include("../modules/header.php");
    include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php'); 
    
    echo "
    <form method='POST' action=''>
        <table>
            <tr>
                <td>ArtikelNaam:</td>
                <td><input type='text' name='ArtikelNaam'></td>
            </tr>
            <tr>
                <td>Prijs:</td>
                <td><input type='number' name='Prijs'></td>
            </tr>
            <tr>
                <td>Omschrijving:</td>
                <td><input type='text' name='omschrijving'></td>
            </tr>
            <tr>
                <td>Grote Omschrijving:</td>
                <td><textarea rows='4' cols='35' name='groteOmschrijving'></textarea></td>
            </tr>
            <tr>
                <td>Image URL:</td>
                <td><input type='text' name='imageURL'></td>
            </tr>
            <tr>
                <td>Korting:</td>
                <td><input type='number' name='korting'></td>
            </tr>
            <tr>
                <td>Categorie ID:</td>
                <td><input type='number' name='CategorieID'></td>
            </tr>
            <tr>
                <td colspan='2'><button name='save' type='submit'>Add product</button></td>
            </tr>
        </table>
    </form>";

    if (isset($_POST["save"])) {
        $artikelNaam = strip_tags($_POST["ArtikelNaam"]);
        $prijs = strip_tags($_POST["Prijs"]);
        $omschrijving = strip_tags($_POST["omschrijving"]);
        $groteOmschrijving = strip_tags($_POST["groteOmschrijving"]);
        $imageURL = strip_tags($_POST["imageURL"]);
        $korting = strip_tags($_POST["korting"]);
        $CategorieID = strip_tags($_POST["CategorieID"]);

    

        $query = "INSERT INTO producten (`ArtikelNaam`, `Prijs`, `omschrijving`, `groteOmschrijving`, `imageURL`, `korting`, `CategorieID`)
                  VALUES ('$artikelNaam', '$prijs', '$omschrijving', '$groteOmschrijving', '$imageURL', '$korting', '$CategorieID')";
        
        $qresult = $connect->query($query);

        if($qresult) {
            echo "<script>window.location.href = '../admin/index.php';</script>";
        }
    }
    
    include("../modules/footer.html");
    ?>
</body>
</html>
