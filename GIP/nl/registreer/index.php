﻿<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assest/index.css"> 
    <title>Registreer</title>


</head>
<body>
<?php 
    include ('../modules/header.php');
    include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php');
    $errors = true;
   
?>

<div id="registreer-geheel">
    <div id="registreer" align="middle">
        <form name="form" method="POST">
            <h1>Registreer</h6>
            <table id="table">
                <!--Voornaam -->
            <tr>  
                
            <td><input type="text" placeholder="Voornaam" name="klantVoornaam"> </td> 
            
            <td><?php 
            if(isset($_POST["button"])) {
                if(!empty($_POST["klantVoornaam"])) {
                    $errors = false;
                } else {
                    echo "<span id='error'>"." Vul uw voornaam in!";
                    $errors = true;
                }
            }
            ?></td>
        
            </tr>
            <!--Achternaam -->


            <tr> 
                 <td> <input type="text" placeholder="Achternaam" name="klantAchternaam"> </td>

                 <td><?php 
            if(isset($_POST["button"])) {
                if(!empty($_POST["klantAchternaam"])) {
                    $errors = false;
                } else {
                    echo "<span id='error'>"." Vul uw achternaam in!";
                    $errors = true;
                }
            }
            ?></td>
            </tr>

            <!--Gebruikersnaam -->
            <tr>  
                <td> <input type="text" placeholder="Gebruikersnaam" name="klantGebruikersnaam"> </td>
                <td>
<?php 
            if(isset($_POST["button"])) {
                if(!empty($_POST["klantGebruikersnaam"])) {
                    $errors = false;
                } else {
                    echo "<span id='error'>"." Vul uw Gebruikersnaam in!";
                    $errors = true;
                }
            }
?>
                </td>
            </tr>

            <!--KlantEmail -->
            <tr> 
                <td> <input type="email" placeholder="Email" name="klantEmail"> </td>

                <td>
<?php 
                if(isset($_POST["button"])) {
                    if(!empty($_POST["klantEmail"])) {
                        $errors = false;
                        $_SESSION["klantSession"] = $_POST["klantEmail"];
                    } else {
                        echo "<span id='error'>"." Vul uw email in!";
                        $errors = true;
                    }

                    $emailSQL = "SELECT `klantEmail` FROM `klant` WHERE `klantEmail` = '".$_POST["klantEmail"]."'";
                    $emailResult =  $connect -> query($emailSQL);
                    $emailExists = false;
                    if($emailResult -> num_rows > 0) {$emailExists = true;}
                                                else {$emailExists = false;}


                }
?>
                </td>
            </tr>

            <!--Klantwachtwoord 1 -->
            <tr> 
                <td> <input type="password" placeholder="Wachtwoord" name="klantWachtwoord"> </td>

                <td>
<?php 
            if(isset($_POST["button"])) {
                if(!empty($_POST["klantWachtwoord"])) {
                    $errors = false;
                } else {
                    echo "<span id='error'>"." Vul uw wachtwoord in!";
                    $errors = true;
                }
            }
?>
                  </td>
            </tr>

            <!--Wachtwoord 2 -->
            <tr> 
                <td> <input type="password" placeholder="Herhaal Wachtwoord" name="wachtwoordTwee"> </td>
                <td>
<?php 
            if(isset($_POST["button"])) {
                if(!empty($_POST["wachtwoordTwee"])) {
                    if($_POST["klantWachtwoord"] != $_POST["wachtwoordTwee"]) {
                        echo "<span id='error'>"."Uw  wachtwoorden zijn niet gelijk!";
                        $errors = true;
                    }else {
                        $errors = false;
                    }
                } else {
                    echo "<span id='error'>"." Vul uw tweede wachtwoord in!";
                    $errors = true;
                }
            }
?>
            </td>
            </tr>

            <tr><td colspan="2" id="registreerButton"><button type="submit" name="button">Registreer</button></td> </tr>


<?php
            // Maak gebruiker
            if(isset($_POST["button"])) {
              
               /** if (!empty($_POST["voornaam"]) and !empty($_POST["achternaam"]) and !empty($_POST["gebruiksersnaam"]) and !empty($_POST["wachtwoord"]) and !empty($_POST["wachtwoordTwee"])) { */

                if($errors == false) {
                    $wachtwoord = md5($_POST["klantWachtwoord"]);
                if($emailExists == false) {
                    $connect -> 
                    query(
                        "INSERT INTO `royalring`.`klant` 
                        (`klantID` ,
                        `klantVoornaam` ,
                        `klantAchternaam` ,
                        `klantGebruikersnaam` ,
                        `klantEmail` ,
                        `klantWachtwoord` ,
                        `isActive`) 
                        VALUES 
                        (NULL,
                        '".$_POST["klantVoornaam"]."',
                        '".$_POST["klantAchternaam"]."',
                        '".$_POST["klantGebruikersnaam"]."',
                        '".$_POST["klantEmail"]."',
                        '".$wachtwoord."',
                        '0'
                        );"
                    );
                }else {
                    echo "EMAIL EXISTS";
                }
                    

                echo "<script>window.location.href = '../registreer/registreerComfirmatie.php';</script>";
                    include "sendEmail.php"; //INCLUDE MAIL VERZENDEN
                    //header("Location: ../registreer/registreerComfirmatie.php");
                    echo "<br>Gebruiker toegevoegd!<br>";
                  }
                    
               /**   }else {
                    echo "Gebruiker kan niet toegevoegd worden"."<br>";
                    echo "Naam ".$_POST["naam"]."<br>";
                    echo "Achternaam ".$_POST["achternaam"]."<br>";
                    echo "Gebruikersnaam ".$_POST["gebruikersnaam"]."<br>";
                    echo "Wchtwoord1 ".$_POST["wachtwoord"]."<br>";
                    echo "Wchtwoord2 ".$_POST["wachtwoordTwee"]."<br>";
                    
                }
                */
            }
?>
            </table>
        </form>
    </div>
</div>


<?php include ('../modules/footer.html'); ?>
</body>
</html>