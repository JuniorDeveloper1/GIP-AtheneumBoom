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
    $reeks = array("Mercedes-Benz", "BMW", "Audi");
    $reeks[] = "Jaguar";
    array_push($reeks, "ferrari", "lambo");


    echo "<h1>Geïndiceerde arrays</h1>"; 
    echo "<h3>kan je op het scherm zetten met foreach</h3>";
    "<br>";

    echo "<i>foreach(\$reeks as \$inhoud)</i> <br>";
    "<br>";
    
    foreach($reeks as $key=>$inhoud) {
        echo "De waarde binnen de array \"\$reeks\" op index ".$key." is: ".$inhoud." <br>";
    }



    foreach($reeks as $index) {
        echo "dit is de index".$index;
    }

    $reeks2 = array("Mercedes-Benz", "BMW", "Audi");
    $reeks2[] = "Jaguar";
    echo "<h3>Dit kan je ook doen met een for lus:</h3>";
    for($i=0;$i<count($reeks2);$i++) {
        echo "De waarde binnen de array \"\$reeks\" op index ".$i." is: ".$reeks2[$i]." <br>";
    }

    echo "<h3>"."Associatieve arrays"."</h3>";
    
    $spaans = array("Hand" => "Mano", "Been" => "Pierna", "Arm" => "Brazo");    
    $spaans["Voet"] = "Pie";

    foreach($spaans as $taal => $taal_value) {
        echo "De waarde binnen de array \"\$spaans\" is: ".$taal."  voor ".$taal_value." <br>";
    }
    
    
    ?>
</body>
</html>