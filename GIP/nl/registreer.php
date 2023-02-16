<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="./css/registerLogin.css"> -->
    <title>Registreer</title>


    <style>
#registreer-geheel, #login-geheel {
    background-color:rgb(38, 39, 43);
    color: rgb(115, 115, 115);
}

#registreer, #login {
    background-color: white;
    color:  rgb(38, 39, 43);
    align-items: center;
    
}

h1{
    text-align: center;
}

#table{
    border: none;
    
}


td {
    margin-bottom: 10px;
}


button {
    background-color: rgb(38, 39, 43);
    color: rgb(115, 115, 115);
    height: 30px;
    margin-top: 10px;
    cursor: pointer;
    width: 230px;
    border-radius: 15px;
    font-size: 20px;
}

button:hover {
    background-color: white;
    transition-delay: 2ms;
    border-radius: 30px;
}

#table input {
    border: none;
    border-bottom: 1px solid rgb(115, 115, 115);
    outline: none;
    width: 230px;
    margin-bottom: 5px;
    background: transparent;
    padding: 10px 0px;
}
span#error {
    color: red;
    text-decoration: underline red;

}

#test {
    text-align: center;
    
}
    </style>
</head>
<body>
<?php 
    include 'header.html'; 
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
                <td><?php 
            if(isset($_POST["button"])) {
                if(!empty($_POST["klantGebruikersnaam"])) {
                    $errors = false;
                } else {
                    echo "<span id='error'>"." Vul uw Gebruikersnaam in!";
                    $errors = true;
                }
            }
            ?></td>
            </tr>

            <!--KlantEmail -->
            <tr> 
                <td> <input type="email" placeholder="Email" name="klantEmail"> </td>

                <td><?php 
            if(isset($_POST["button"])) {
                if(!empty($_POST["klantEmail"])) {
                    $errors = false;
                } else {
                    echo "<span id='error'>"." Vul uw email in!";
                    $errors = true;
                }
            }
            ?></td>
            </tr>

            <!--Klantwachtwoord 1 -->
            <tr> 
                <td> <input type="password" placeholder="Wachtwoord" name="klantWachtwoord"> </td>

                <td><?php 
            if(isset($_POST["button"])) {
                if(!empty($_POST["klantWachtwoord"])) {
                    $errors = false;
                } else {
                    echo "<span id='error'>"." Vul uw wachtwoord in!";
                    $errors = true;
                }
            }
            ?></td>
            </tr>

            <!--Wachtwoord 2 -->
            <tr> 
                <td> <input type="password" placeholder="Herhaal Wachtwoord" name="wachtwoordTwee"> </td>
                <td><?php 
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
            ?></td>
            </tr>

            <tr> <td><input type="text" size="6" maxlength="5" placeholder="Captcha" name="captchaInvoer"></td>
        
            <td><img src="./captcha.php"></td>
            <?php   
            if(isset($_POST["button"])){
                $klopt =false;
                $captchaUitBestand = $_SESSION["captcha"];
                if(!empty($_POST["captchaInvoer"])){
                    if($captchaUitBestand != $_POST["captchaInvoer"]) {
                        $klopt = false;
                 }else {
                    $klopt = true;
                 }
                }

            }
                
            ?></tr>

            <?php 
            if(isset($_POST["button"])){
                if($klopt == false) {
                    echo "<tr><td colspan='2' id='test'>"."<span id='error'>"." De captcha klopt niet!"."</td> </tr>";
                }
            }

               
            ?>

            <tr><td colspan="2" id="test"><button type="submit" name="button">Registreer</button></td> </tr>


            <?php
            include("../dbConnection.php");
            

            // Maak gebruiker
            if(isset($_POST["button"])) {
              
               /** if (!empty($_POST["voornaam"]) and !empty($_POST["achternaam"]) and !empty($_POST["gebruiksersnaam"]) and !empty($_POST["wachtwoord"]) and !empty($_POST["wachtwoordTwee"])) { */

                if($errors == false) {
                    $connect -> query("INSERT INTO `royalring`.`klant` 
                    (`klantID` ,
                    `klantVoornaam` ,
                    `klantAchternaam` ,
                    `klantGebruikersnaam` ,
                    `klantEmail` ,
                    `klantWachtwoord`) 
                    VALUES 
                    (NULL,'".$_POST["klantVoornaam"]."','".$_POST["klantAchternaam"]."','".$_POST["klantGebruikersnaam"]."','".$_POST["klantEmail"]."','".$_POST["klantWachtwoord"]."');"
                    );

                    echo "Gebruiker toegevoegd!<br>";
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


<?php include 'footer.html'; ?>
</body>
</html>