<?php 
if(session_status() !==  PHP_SESSION_ACTIVE) session_start(); 

$id = $_GET["id"];
$name = $_GET["databaseName"];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin<?php ?></title>
</head>
<body>

    <!--Werk met header(location: index.php); om de user terug te sturen naar de hoofdpagina-->
    <?php
include '..\header.html'; 
include 'C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php'; 
include './checkAdmin.php';

function getIDName($tablename) {
    $idField = '';
    switch($tablename) {
        case 'klant':
            $idField = 'klantID';
            break;
        case 'admin':
            $idField = 'AdminID';
            break;
        case 'producten':
            $idField = 'ArtikelID';
            break;
        case 'product_categorie':
            $idField = 'CategorieID';
            break;
        case 'winkelkar':
            $idField = 'winkelkarID';
            break;
    }
    return $idField;
}

// Retrieve the data from the database

$idName = getIDName($name);

$editSQL = "SELECT * FROM " . $name . " WHERE " . $idName . " = " . $id;
$editResult = $connect->query($editSQL);

// Display a form for editing the data
echo "<div>";
echo "<form method='post' id='form' action=''>";

echo "<table>";
if ($editResult->num_rows > 0) {
    $row = $editResult->fetch_assoc();
    foreach ($row as $column => $value) {
        echo "<tr>";
        echo "<td>" . $column . "</td>";
        if ($column === 'klantID' || $column === 'AdminID' || $column === 'ArtikelID' || $column === 'CategorieID' || $column === 'winkelkarID') {
            echo "<td><input type='text' name='" . $column . "' value='" . $value . "' readonly></td>";
        } else {
            echo "<td><input type='text' name='" . $column . "' value='" . $value . "'></td>";
        }
        echo "</tr>";
    }
}
echo "</table>";

/**
 * Save
 */

echo "<input type='submit' name='submit' value='Save'>";

if (isset($_POST["submit"])) {
    $setValues = '';
    foreach ($_POST as $column => $value) {
        $updatedValues[$column] = $value;
        if ($column !== $idName && $column !== "submit") {
            $setValues .= $column . "='" . $value . "',";
        }
    }
    $setValues = rtrim($setValues, ",");
    $updateSQL = "UPDATE " . $name . " SET " . $setValues . " WHERE " . $idName . " = " . $id;

    if ($connect->query($updateSQL) === TRUE) {
        echo "<br>Row updated! <br>";
    } else {
        echo "Row Error: " . $connect->error;
    }
    echo "Form submitted!";
}

echo "</form>";
echo "</div>";


?>

<?php include '..\footer.html';?>
    

</html>
