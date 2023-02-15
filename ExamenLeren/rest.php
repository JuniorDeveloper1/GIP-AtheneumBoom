<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        h1#test {
            color: red;
        }
    </style>
</head>


<body>
    <?php 
    
    $reek2 = array("Mia" => "orn", "Jaguar" => "Auto");

      






    $reeks1 = array("Mercedes", "Ferarri");
    $reeksNieuw = array();
    ?>
    <form name="form" method="post">
        <h1>Voeg jou eigen auto toe!</h1>

        <input name="input" type="text">
        <button name="button">Voeg toe!</button>
        <br>


        <?php 
    
            if(isset($_POST["button"])){
                
                
                    
                array_push($reeks1, $_POST["input"]);
              

            }

            echo "zfezefa";

      

            //$text = "";
            foreach($reek2 as $inhoud => $value) {
                echo "De waarde binnen de array \"\$spaans\" is: ".$inhoud."  voor ".$value." <br>";
            }           
        ?>


    </form>
</body>
</html>