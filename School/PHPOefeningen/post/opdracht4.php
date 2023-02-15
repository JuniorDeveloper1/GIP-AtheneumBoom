<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $naam = "Eray";
    $vrouw = true;
    $leeftijd = 17;
    $maandloon = 4.2;
    $adres = "Straat";
    echo "De variabele \$naam is van het type: ".gettype($naam);?> <br> 
    <?php   
    echo "De variabele \$vrouw is van het type: ".gettype($vrouw);?> <br> 
    <?php   
    echo "De variabele \$leeftijd is van het type: ".gettype($leeftijd);?><br>  
    <?php   
    echo "De variabele \$maandloon is van het type: ".gettype($maandloon);?>  <br>  
    <hr>
    <?php 
    echo "Bestaat de variabele \$adres ".isset($adres);
    echo " (1 = ja, 0 = nee)"; 
    ?>
    <br>
    <?php
    echo "Is de variabele \$adres leeg ". (int) empty($adres);
    echo " (1 = ja, 0 = nee)";
    ?>
    <hr>
    <?php 
    echo "zet de variabele leeftijd om naar het type \" string \" .";
    ?> <br>
    <?php
    echo "Je kan kiezen tussen twee opdrachten: \"settype\" en \"(string) \" " ?>
    <br>
    <?php echo "We veranderen het type van leeftijd naar string door volgende opdracht: settype(\$leeftijd,\"string\")";
    (string) $leeftijd;
    ?> <br>
    
    <?php echo "Is \$leeftijd van het type \"string\"? ". (int) is_string($leeftijd)." (1 = ja, 0 = nee) "?>
</body>
</html>