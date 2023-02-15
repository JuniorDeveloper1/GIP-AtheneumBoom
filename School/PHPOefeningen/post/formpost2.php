<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form - POST</title>
    <style>
    fieldset {
        width: 20%;
    }

    </style>
</head>
<body>
    <form id="formpost" name="formpost" method="post">  
        <fieldset >
        <legend> Formulier met POST: </legend>
            <h4>Vul volgende gegevens in:</h4>
             Voornaam:   
             <br>
             <input type="text" id="voornaam" name="voornaam">
             <br>
             Achernaam:
             <br>
             <input type="text" id="achternaam" name="achternaam">
        <br>
        <br>
        <br>
        <button name="verzenden">Verzenden</button>
    </fieldset>
    </form>
    <?php 
            $voornaam = strip_tags($_POST["voornaam"]);
            $achternaam = strip_tags($_POST["achternaam"]);


            if(isset($_POST["verzenden"])) {
                echo  ("welcome, "."   ".$voornaam."   ".$achternaam);
            }       
    ?>
</body>
</html>