<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assest/registreerComfirmatie.css">
    <title>Email comfirmen</title>
</head>




    <body>
    <?php 
             include ('../modules/header.php');; 
             include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php');
            
        ?>

    <div id="login-geheel">
                                <?php  
                                //echo $_SESSION["RegisterCode"];
                                ?>
                    <div id="login" align="middle">
                        <form name="form" method="POST">
                            <h1>Comfirmatie</h1>
                            <table id="table">
                            <tr><td> <input type="email" placeholder="Email" name="email"> </td>
                           
                            
                            <?php 
                             //todo: Je moet klantSession veranderen met email uit databank
                            //todo: Het zelfde met code. Anders gaan er problemen ontstaan.

                            //TODO: FULLY REWRITE REGISTER COMFIRMATIE AND PUSH TO REGISTER FOR BACKUP
  

                            $error = false;
                            if(isset($_POST["button"])){

                                    if(!empty($_POST["email"])){
                                             $error = false;
                                        }else {
                                            $error = true;
                                            echo "<td> <span id='error'>Vul een email in </span> </td>";
                                        }
                                    }
                            ?>
                            
                        
                        </tr>

                            <tr><td> <input type="text" placeholder="code" name="code"> </td>
                            <?php 
                            $error = false;
                                if(isset($_POST["button"])){
                                    if(!empty($_POST["code"])){
                                        $error = false;
                                    }else {
                                        $error = true;
                                        echo "<td> <span id='error'>Vul een Code in </span> </td>";
                                    }
                                }
                                //Test
                        ?></tr>

                <tr><td><button type="submit" name="button">Comfirm</button></td> 
                            <?php 
                                if(isset($_POST["button"])) {
                                    //$sqlTokenCheck = "SELECT `klantEmail`,`klantToken` FROM `klant`";

                                    $email = $_POST["email"];
                                    $token = $_POST["code"];
                                    $sqlTokenCheck = "SELECT `klantEmail`, `klantToken` FROM `klant` WHERE `klantEmail` = '".$email."';";
                                    $tokenCheckResults = $connect -> query($sqlTokenCheck);

                                    if($tokenCheckResults -> num_rows > 0 ){
                                        while($tokenCheckResult = $tokenCheckResults -> fetch_assoc()) {
                                            if ($tokenCheckResult["klantToken"] == $token) {
                                                $sql =  "UPDATE `royalring`.`klant` SET `isActive` = '1' WHERE `klant`.`klantEmail` = '".$_POST["email"]."';";
                                                if ($connect->query($sql) === TRUE) {
                                                  echo "<br>Je bent geregistreerd!";
                                                } 
                                                else
                                                {
                                                   echo "<br> Er is een fout! Contacteer onze suppot! " . $connect->error;
                                                }
                                            }
                                        }
                                    }else {
                                        echo "WERKT NIET!".$connect-> error;
                                    }
                                }
                        
                            ?>
                </tr>
            </table>
         </form>
        </div>
    </div>
    <?php
         include ('../modules/footer.html');;

    ?>

    
</body>
</html>