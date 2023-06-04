<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assest/changePassword.css">
    <title>Wachtwoord vergeten</title>

    <style>

    </style>
</head>
<body>
    <?php 
    
    include("../modules/header.php");
    $email = $_GET["email"];
    $klopt = false;
    $wachtwoordKlopt = false;
    include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php');
    
    ?>
        <div id="password_vergeten_geheel">
            <div id="password_vergeten" align="middle">
                <form name="form" method="POST">
                    <h1>Wachtwoord vergeten</h1>
                    <table id="table">
                        <tr>
                        <?php echo "<td> <input type='email' placeholder=".$email." name='email' readonly>"   ?>
                                     <?php 
                                        if(isset($_POST["button"])){
                                            if(!empty($_POST["email"])){
                                                $klopt = true;
                                            }
                                        }
                                     ?>
                            </td>
                        </tr>

                        <tr>
                        <?php echo "<td> <input type='password' placeholder='Vul je wachtwoord in!' name='wachtwoord1'>"   ?>
                                     <?php 
                                        if(isset($_POST["button"])){
                                            if(!empty($_POST["wachtwoord1"])){
                                                $klopt = true;
                                            }
                                        }
                                     ?>
                            </td>
                        </tr>

                        <tr>
                        <?php echo "<td> <input type='PASSWORD' placeholder='Comfirmeer je wachtwoord!' name='wachtwoord2'>"   ?>
                                     <?php 
                                        if(isset($_POST["button"])){
                                            if(!empty($_POST["wachtwoord2"])){
                                                $klopt = true;
                                                if($_POST["wachtwoord1"] == $_POST["wachtwoord2"]) {
                                                    $wachtwoordKlopt = true;
                                                }
                                            }
                                        }
                                     ?>
                            </td>
                        </tr>


                        <?php 
                            if(isset($_POST["button"])){
                                //TODO: Update wachtwoord.
                                if($klopt && $wachtwoordKlopt) {
                                    echo "Wachtwoord is veranderd!";
                                    $sql = "UPDATE klant SET klantWachtwoord = '" . md5($_POST['wachtwoord2']) . "' WHERE klantEmail = '" . $email . "'";

                                    if ($connect->query($sql) === true) {
                                        echo "Update successful!";
                                    } else {
                                        echo "Error updating record: " . $connect->error;
                                    }
                                    
                                }else {
                                    echo " Je wachtwoorden zijn niet gelijk!";
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