<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel="stylesheet" href="./css/registerLogin.css"> -->
    <title>Login</title>

    <style>
@media  only screen and (min-width: 825.33px){
            #registreer-geheel, #login-geheel {

        width: 100%;
        height: 100%;
        background-color:rgb(38, 39, 43);
        color: rgb(115, 115, 115);
        }

        #registreer, #login{
        background-color: white;
        color:  rgb(38, 39, 43);
        align-items: center;

        margin-left: -140px;

        }

        h1{
        text-align: center;
        margin-left: 70px;
        }

        #table{
        border: none;
        margin: auto 0px;
        align-items: center;

        }


        td {
        margin-bottom: 10px;
        }


        button {
        background-color: rgb(38, 39, 43);
        color: rgb(115, 115, 115);
        height: 30px;
        margin-top: 10px;
        cursor: pointer;
        width: 115px;
        border-radius: 15px;
        margin-left: 77px;
        }

        #buttonRegister{
        margin-left: -94px;
        }

        button:hover {
        background-color: white;
        transition-delay: 2ms;
        border-radius: 30px;
        }

        #table input{
        border: none;
        border-bottom: 1px solid rgb(115, 115, 115);
        outline: none;
        width: 230px;
        margin-bottom: 5px;
        background: transparent;
        padding: 10px 0px;

        margin-left: 102px;
        }
        #error {
            color: red;
            font-size: large;
        }

        .g-recaptcha {
            margin-left: 100px;
            transform:scale(0.77) ;
            transform-origin:0 0 ;

        }


        #ww_vergeten  {
            text-align: -webkit-center;

            font-size: small;
            line-break: 4px;

            width: 230px;
            background: transparent;
            margin-left: 102px;
        }

        

}

@media  only screen and (max-width: 825.33px){
            #registreer-geheel, #login-geheel {

            width: 100%;
            height: 100%;
            background-color:rgb(38, 39, 43);
            color: rgb(115, 115, 115);
        }

        #registreer, #login, #ww_vergeten {
            background-color: white;
            color:  rgb(38, 39, 43);
            align-items: center;

            margin-left: -140px;
            text-align: center;
            
        }

        h1{
            text-align: center;
            width: 100%;
            height: auto;
            float:left;
            margin-left: 50px;
        }

        #table{
            text-align: center;
            width: 100%;
            height: auto;
            float:left;
            margin-left: 50px;
            
        }


        td {
            margin-bottom: 10px;
        }


        button {
            background-color: rgb(38, 39, 43);
            color: rgb(115, 115, 115);
            height: 30px;
            margin-top: 10px;
            cursor: pointer;
            width: 115px;
            border-radius: 15px;
            margin-left: -72px; 
        }

        #buttonRegister{
            margin-left: -425px;
        }

        button:hover {
            background-color: white;
            transition-delay: 2ms;
            border-radius: 30px;
        }

        #table input {
            border: none;
            border-bottom: 1px solid rgb(115, 115, 115);
            outline: none;
            width: 230px;
            margin-bottom: 5px;
            background: transparent;
            padding: 10px 0px;
        }
        #captcha {
            align-items: center;
            margin-left: 153px;

        }
        #error {
            color: red;
            font-size: large;
        }

        #ww_vergeten  {
            text-align: -webkit-center;
        }


}


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
            <tr><td><div id="ww_vergeten"><a href="#">Wachtwoord vergeten</a></div></td></tr>

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


            
            
            <td><button type="submit" name="noAccButton" id="buttonRegister"> <a href="C:\USBWebserver\USBWebserver_GIP\root\GIP\nl\registreer\index.php">Geen account</a></button></td></tr>
                       
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
                                if($klopt == true) {echo "Je bent ingelogd!"; $_SESSION["loggedIn"] = true;}
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