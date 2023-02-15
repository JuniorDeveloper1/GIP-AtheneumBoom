<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <?php 
        $voornaam = strip_tags($_GET["voornaam"]);

        $achternaam = strip_tags($_GET["achternaam"]);
        echo "welcome"."   ".$voornaam."   ".$achternaam;
    
    ?>
</body>
</html>