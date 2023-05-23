<?php 
    include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php'); 
    include ('../modules/header.php');
    $databaseName = $_GET["databaseName"];

    $klantColumns = array('klantID', 'klantVoornaam', 'klantAchternaam', 'klantGebruikersnaam', 'klantEmail', 'klantWachtwoord', 'isActive', 'klantToken');
    $adminColumns = array('AdminID', 'isAdmin', 'klantID');
    $productColumns = array('ArtikelID', 'ArtikelNaam', 'Prijs', 'Omschrijving', 'groteOmschrijving', 'imageURL', 'Korting', 'categorieID');
    $productCategorieColumns = array('CategorieID', 'CategorieNaam');
    $promoCodeColumns = array('PromoID', 'PormoCode', 'Promo_discount_percentage');
    $winkelkarColumns = array('WinkelkarID', 'klantID', 'ArtikelID', 'Aantal');

    if ($databaseName == 'klant') {
        $columns = $klantColumns;
    } elseif ($databaseName == 'admin') {
        $columns = $adminColumns;
    } elseif ($databaseName == 'producten') {
        $columns = $productColumns;
    } elseif ($databaseName == 'product_categorie') {
        $columns = $productCategorieColumns;
    } elseif ($databaseName == 'promo_code') {
        $columns = $promoCodeColumns;
    } elseif ($databaseName == 'winkelkar') {
        $columns = $winkelkarColumns;
    }

    echo "<div>";
    echo "<form method='post' id='form' action=''>";
    echo "<table>";

    foreach ($columns as $index => $column) {
        echo "<tr>";
        echo "<td>" . $column . "</td>";
        echo "<td><input type='text' name='" . $column . "' value='" . ($index === 0 ? (getLatestPrimaryKey($connect, $databaseName, $columns[0])) : '') . "'" . ($index === 0 ? "readonly" : "") . "></td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<input type='submit' name='save' value='Save'>";

    if (isset($_POST["save"])) {
        $values = array();
        foreach ($columns as $index => $column) {
            if ($index === 0) {
                continue; // Skip the primary key column
            }
    
            if (isset($_POST[$column])) {
                $value = $connect->real_escape_string($_POST[$column]);
            } else {
                $value = null;
            }
    
            if ($value !== null) {
                $values[] = "'" . $value . "'";
            } else {
                $values[] = 'NULL';
            }
        }
        
        
        $sql = "INSERT INTO " . $databaseName . " VALUES(" .(getLatestPrimaryKey($connect, $databaseName, $columns[0])). ", " . implode(", ", $values) . ")";
        


        if ($connect->query($sql) === true) {
            echo "Inserted!";
        } else {
            echo "Error in record: " . $connect->error;
        }
    }

    echo "</form>";
    echo "</div>";

    include ('../modules/footer.html');

    function getLatestPrimaryKey($connect, $tableName, $primaryKeyColumn) {
        $sql = "SELECT MAX($primaryKeyColumn) AS max FROM $tableName";
        $result = $connect->query($sql);
    
        if ($result !== false && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $latestPrimaryKey = $row['max'];
            if (is_numeric($latestPrimaryKey)) {
                return intval($latestPrimaryKey) + 1;
            }
        }

        return 1;
    }
    
    
?>    
