<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <?php 
        $voornaam = strip_tags($_POST["voornaam"]);

        $achternaam = strip_tags($_POST["achternaam"]);
        echo "welcome"."   ".$voornaam."   ".$achternaam;
    ?>
</body>
</html>