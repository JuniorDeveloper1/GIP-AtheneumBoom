<?php 
session_start() 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style> 
        body {
            background-color: white;
            color: black;
        }
    </style>
</head>
<body>

    <?php 
        $randomNummer = $_SESSION["randomGetalSesion"];
        $getalInput = $_SESSION["nummerInput"];

      //  echo "Getallen: ".$randomNummer."  ".$getalInput;

        if($randomNummer == $getalInput) {
            echo "Gefeliciteerd! Het juiste getal was inderdaad ".$getalInput ;
            echo '<body style="background-color:green">';
        }else {
            echo "Jammer! Jij gokte ".$getalInput.", maar het juiste getal is ".$randomNummer;
            echo '<body style="background-color:red">';
        }

    ?>
    
</body>
</html>