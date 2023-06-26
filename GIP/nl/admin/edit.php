<?php 
include("../modules/header.php");
include('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php'); 
$id = $_GET["id"];

$qresult = $connect->query("SELECT * FROM producten WHERE ArtikelID = $id");
$endresult = $qresult->fetch_assoc();

if (isset($_POST["save"])) {
    $artikelNaam = strip_tags($_POST["ArtikelNaam"]);
    $prijs = strip_tags($_POST["Prijs"]);
    $omschrijving = strip_tags($_POST["omschrijving"]);
    $groteOmschrijving = strip_tags($_POST["groteOmschrijving"]);
    $imageURL = strip_tags($_POST["imageURL"]);
    $korting = strip_tags($_POST["korting"]);
    $CategorieID = strip_tags($_POST["CategorieID"]);

    // Prepare the SQL statement with placeholders
    $sql = "UPDATE `producten` SET `ArtikelNaam`='$artikelNaam', `Prijs`='$prijs', `Omschrijving`='$omschrijving', `groteOmschrijving`='$groteOmschrijving', `imageURL`='" . $connect->real_escape_string($imageURL) . "', `Korting`='$korting', `CategorieID`='$CategorieID' WHERE `ArtikelID`='$id'";

    $qresult = $connect->query($sql);
    
    if ($qresult) {
        echo "<script>window.location.href = '../admin/index.php';</script>";
    } else {
        echo "Error: " . $connect->error;
    }
}
?>

<form method='POST' action=''>
    <table>
        <tr>
            <td>ArtikelNaam:</td>
            <td><input type='text' value='<?php echo $endresult["ArtikelNaam"]; ?>' name='ArtikelNaam'></td>
        </tr>
        <tr>
            <td>Prijs:</td>
            <td><input type='number' value='<?php echo $endresult["Prijs"]; ?>' name='Prijs'></td>
        </tr>
        <tr>
            <td>Omschrijving:</td>
            <td><input type='text' value='<?php echo $endresult["Omschrijving"]; ?>' name='omschrijving'></td>
        </tr>
        <tr>
            <td>Grote Omschrijving:</td>
            <td><textarea rows='4' cols='35' name='groteOmschrijving'><?php echo $endresult["groteOmschrijving"]; ?></textarea></td>
        </tr>
        <tr>
            <td>Image URL:</td>
            <td><textarea rows='4' cols='35' name='imageURL'><?php echo $endresult["imageURL"]; ?></textarea></td>
        </tr>
        <tr>
            <td>Korting:</td>
            <td><input type='number' value='<?php echo $endresult["Korting"]; ?>' name='korting'></td>
        </tr>
        <tr>
            <td>Categorie ID:</td>
            <td><input type='number' value='<?php echo $endresult["CategorieID"]; ?>' name='CategorieID'></td>
        </tr>
        <tr>
            <td colspan='2'><button name='save' type='submit'>Change Product</button></td>
        </tr>
    </table>
</form>

<?php include("../modules/footer.html"); ?>
