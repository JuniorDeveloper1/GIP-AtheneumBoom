<!DOCTYPE html>
<html lang="en">
<head>

<style> 

</style>
    
</head>
<body>
    <?php 
     $a= "7";
     $b = "100";
     $naam1= "nee";
    $naam2 = "neee";

    if($naam1 == $naam2) {
        echo "<h1>Dit klopt </h1>";
    }else {
        echo "Ze zijn niet gelijk! <br>";
     
    }

    echo "<br>";

    if($a >= $b) {
        echo "Variabel a is groter dan variabel b <br>";
    }

    if($a == $b) {
        echo "<br>";
        $a += $b;
        echo "De uitkomt is $a <br>";
    
    }else {
        $a -= $b;
        echo "De uitkomst is $a <br>";
    }

    if($naam1 === $naam2) {
        echo "$a <br>";
        $a++;
        echo "Variabel 1 is gestegen! + $a <br>";
    }else {
        echo "$a <br>";
        $a--;
        echo "Variabel is gedaald met 1 $a <br>";
    }

    
?>


<?php 

$naam1 = "Jan Peeters";
$man1 = "Peter jansens";
echo "Naam 1 = $naam1 <br>";
echo "Man 1 = $man1 <br>";


//Let goed op de "&". Naam2 wordt overgeschreven door $man.
$naam2 = "Jan Peeters";
$man2 =& $naam2;
$man2 = "Peter Janssens";
echo "Naam 2 = $naam2 <br>";
echo "Man 2 = $man2 <br>";

$naam = "Jan Peeters <br>";
echo $naam ;
echo "$naam <br>";
echo '$naam <br>';

$vrouw = "Cindy Crawford <br>";
echo "Deze variabel heeft \"$vrouw\" als gekregen <br>";
echo "deze variabel heeft $vrouw als gekregen <br>";
echo "Deze variabel heeft \$vrouw als gekregen <br>";

?>

</body>
</html>