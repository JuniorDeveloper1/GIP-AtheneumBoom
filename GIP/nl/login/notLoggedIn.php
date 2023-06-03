<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./assest/notLoggedIn.css"> 
    <title>Login</title>

    <style>



</style>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<?php 
    include '../modules/header.php'; 
 ?>

<?php 
  include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php'); 

    if(isset($_POST["button"])) 
    {
        $klopt = false;
        $isActive = false;
       
    }
    ?>


<div id="login-geheel">
    <div id="login" align="middle">
        <form name="form" method="POST">
            <h1>Login</h1>
            <table id="table">
            <tr><td> <input type="email" placeholder="Email" name="email"> </td>
            <?php 
            $error = false;
                if(isset($_POST["button"])){
                    if(!empty($_POST["email"])){
                        $error = false;
                    }else {
                        $error = true;
                        echo "<td> <span id='error'>Vul een email in </span> </td>";
                    }
                }
            ?></tr>

            <tr><td> <input type="password" placeholder="Wachtwoord" name="wachtwoord"> </td>
            <?php 
            $error = false;
                if(isset($_POST["button"])){
                    if(!empty($_POST["wachtwoord"])){
                        $error = false;
                    }else {
                        $error = true;
                        echo "<td> <span id='error'>Vul een email in </span> </td>";
                    }
                }
            ?></tr>
            <tr><td><div id="ww_vergeten"><a href="../password_lost/index.php">Wachtwoord vergeten</a></div></td></tr>

             <tr><td><div class="g-recaptcha" id="captcha" data-sitekey="6LdPJNkkAAAAANhpXvmFtM_J3itPQOxoJEBpBRWz"></div><td>
            <?php
                    if (isset($_POST["button"])) {
                        if (empty($_POST["g-recaptcha-response"])) {
                            echo "<br><span id='error'> Dit is een verplicht veld</span><br>";
                            $error = true;
                        }
                    }
                ?>
            </tr>

            <tr><td><button type="submit" name="button">Login</button></td>


            
            
            <td><button type="submit" name="noAccButton" id="buttonRegister"> <a href="../registreer/index.php">Geen account</a></button></td></tr>
                       
<?php 
                                if(isset($_POST["button"])) {
                                    //$sqlTokenCheck = "SELECT `klantEmail`,`klantToken` FROM `klant`";
                                    $email = $_POST["email"];
                                    $wachtwoord =$_POST["wachtwoord"];
                                    $result = $connect -> query("SELECT * FROM `klant` WHERE `klantEmail` = '".$email."' AND `klantWachtwoord` = '".md5($wachtwoord)."' AND `isActive` = '1' ");
          
                                    if($result -> num_rows > 0 ){ 
                                        while($SQLs = $result -> fetch_assoc()) { 
                                            if($SQLs["isActive"] != 0) {
                                                $_SESSION["klantID"] = $SQLs["klantID"];
                                                $_SESSION["klantVoornaam"] = $SQLs["klantVoornaam"];
                                                $_SESSION["klantAchternaam"] = $SQLs["klantAchternaam"];
                                                $_SESSION["klantGebruikersnaam"] = $SQLs["klantGebruikersnaam"];
                                                $_SESSION["kantEmail"] = $SQLs["klantEmail"];   
                                                $klopt = true;
                                                $isActive = true;
                                            }
                                        }
                                    }
                                }

                                  
                        
?>
                <tr><td><div> 
<?php
                            if(isset($_POST["button"])) {
                                if($klopt == true) {
                                    echo "Je bent ingelogd!";
                                     $_SESSION["loggedIn"] = true;
                                     echo '<script>window.location.href = "index.php";</script>';}
                                else {
                                    if($isActive) {
                                        echo "Je bent NIET ingelogd! ".$connect->error;
                                        $_SESSION["loggedIn"] = false;
                                    }else {
                                        echo "Je account bestaat nog niet!"; 
                                        $_SESSION["loggedIn"] = false;    
                                    }
                                        
                                } 
                            }  
?>              </div></td>
            </table>
        </form>
    </div>
</div>  
<?php include '../modules/footer.html'; ?>
</body>
</html>