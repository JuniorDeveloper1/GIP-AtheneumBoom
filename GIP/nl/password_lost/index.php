<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assest/index.css">
    <title>Wachtwoord vergeten</title>
</head>
<body>
    <?php 
    
    include("../modules/header.php");
    include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php');

    $klopt = false;
    
    ?>
        <div id="password_vergeten_geheel">
            <div id="password_vergeten" align="middle">


                <form name="form" method="POST">
                    <h1>Wachtwoord vergeten</h1>
                    <table id="table">
                        <tr>
                            <td> <input type="email" placeholder="Geef jou email in!" name="email"> 
                                     <?php 
                                        if(isset($_POST["button"])){
                                            if(!empty($_POST["email"])){
                                                $klopt = true;
                                            }
                                        }
                                     ?>
                            </td>
                        </tr>
                        <?php 
                            if(isset($_POST["button"])){
                                if($klopt == true) {
                                    /**
                                     */
                                    $_SESSION["klantSession"] = $_POST["email"];

                                    $emailSQL = "SELECT `klantEmail` FROM `klant` WHERE `klantEmail` = '".$_POST["email"]."'";
                                    $emailResult =  $connect -> query($emailSQL);
                                    $emailExists = false;
                                    if($emailResult -> num_rows > 0) {include("../password_lost/sendEmail.php");}
                                                                else {echo " Email doesn't exist!";}
                                    
                                }
                            }
                        ?>

                        <tr>
                            <td>
                                <button type="submit" name="button">Verstuur</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>



    <?php include("../modules/footer.html");?>
</body>
</html>