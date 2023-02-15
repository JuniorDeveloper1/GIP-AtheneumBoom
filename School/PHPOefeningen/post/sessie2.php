<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form - POST</title>
    <style>
    fieldset {
        width: 20%;
    }
    span {
        color: red;
    }

    </style>
</head>
<body>
    <form id="formpost" name="formpost" method="post">  
        <fieldset>
        <legend> Formulier met POST: </legend>
            <h4>Vul volgende gegevens in:</h4>
             Naam:   
             <br>
             <input type="text" id="voornaam" name="naam">
             <?php 
             $inlogOk = 0;
             
             if(isset($_POST["verzenden"])) {
                $naam = strip_tags($_POST["naam"]);
          
                if(empty($naam)){
                    $inlogOk = 1;
                    echo  "<span> Verplicht veld! </span>";
                }
             }
             ?>
             <br>
        <br>
        <br>
        <br>
        <button name="verzenden">Verzenden</button>
    </fieldset>
    </form>
    <?php 
          


          if($inlogOk == 0) {
            if(isset($_POST["verzenden"])) {
                $naam = strip_tags($_POST["naam"]);
          
                if(!empty($naam)){
                    $_SESSION["naamSite"] = $naam;
                    echo  ("welcome, ".$naam);
                }
                
            }    
        }else {
            echo "<span> Verplicht veld niet ingevuld! ";
        }   
    ?>
</body>
</html>