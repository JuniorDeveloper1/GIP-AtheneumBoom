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

        #registreer, #login {
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

        #table input {
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
            margin-left: 70px;
        }

}

@media  only screen and (max-width: 825.33px){
            #registreer-geheel, #login-geheel {

            width: 100%;
            height: 100%;
            background-color:rgb(38, 39, 43);
            color: rgb(115, 115, 115);
        }

        #registreer, #login {
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
            border: none;
            
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

        #table input {
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

}


</style>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<?php include 'header.html'; ?>
<?php include '../dbConnection.php'; ?>

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
                    if(!empty($_POST["password"])){
                        $error = false;
                    }else {
                        $error = true;
                        echo "<td> <span id='error'>Vul een email in </span> </td>";
                    }
                }
            ?></tr>

             <tr><td><div class="g-recaptcha" data-sitekey="6LdPJNkkAAAAANhpXvmFtM_J3itPQOxoJEBpBRWz"></div><td>
            <?php
                    if (isset($_POST["button"])) {
                        if (empty($_POST["g-recaptcha-response"])) {
                            echo "<br><span id='error'> Dit is een verplicht veld</span><br>";
                            $error = true;
                        }
                    }
                ?>
            </tr>

            <tr><td><button type="submit" name="button">Login</button></td> <td><button type="submit" name="noAccButton" id="buttonRegister"> <a href="./registreer.php">Geen account</a></button></td></tr>
            </table>
        </form>
    </div>
</div>

            <?php 

            $ingelogd = false;
            $query = "SELECT `klantWachtwoord`,`klantEmail` FROM `klant`";
            $result = $connect -> query($query);
                if(isset($_POST["button"])) {
                    if($result -> num_rows > 0 ){
                        while($loginGegevens = $result -> fetch_assoc()) {
                            if($error == false) {
                                if($loginGegevens["klantEmail"]==$_POST["email"] && $loginGegevens["klantWachtwoord"] == $_POST["wachtwoord"]) {
                               //Als het werkt
                         
                             }else {
                                //Als het niet werkt!

                                }
                            }
                        }
                     
                    }

                }

            ?>
<?php include 'footer.html'; ?>
</body>
</html>