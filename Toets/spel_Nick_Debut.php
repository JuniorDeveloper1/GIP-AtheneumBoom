<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        $randomGetal = rand(1,5);
       // $nummer = $_POST["nummer"];

       $_SESSION["randomGetalSesion"] = $randomGetal;
    ?>
    <form name="form" method="post"> 
    <?php 

        echo "Dit is het spel";

                     if(isset($_POST["speel"])){
                        if(!empty($_POST["nummer"])) {
                            if($_POST["nummer"] < 1 or $_POST["nummer"] >= 6) {
                                echo "Het ingevulde getal moet tussen 1 en 5 liggen";
                            
                               } else {
                                echo "<a href=result.php> Ga naar result.php </a>";
                                $_SESSION["nummerInput"] = $_POST["nummer"];
                               }
                       
                        }else{
                            echo "Gelieve een getal in te voeren";
                        }
                         
                     }
                 
                 ?>
        <table>  
        <tr>
            <td><input type="text" name="nummer"> </td>
            <td><button name="speel">Speel!</button> </td>
        </tr>
    </table>


    </form>
    
</body>
</html>