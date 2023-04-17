<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style> 
    #login {
        align-content: center;
    }

    #button {
        background-color: rgb(38, 39, 43);
        color: rgb(115, 115, 115);
        height: 30px;
        margin-top: 10px;
        cursor: pointer;
        width: 115px;
        border-radius: 15px;
    }

    #button:hover {
        border-color: rgb(38, 39, 43);
    
        background-color: white;
        color: rgb(115, 115, 115);
        height: 30px;
        margin-top: 10px;
        cursor: pointer;
        width: 115px;
        border-radius: 15px;
    }

    </style>
</head>
<body>


    <?php
     include '..\header.html'; 
   
     ?>
    <form name="form" method="POST">
    <div id="login" align="middle">
        <?php
          echo "Je bent ingelogd!"."<br>";
        echo "KlantID: ".$_SESSION['klantID']."<br>";
        echo "Voornaam: ".$_SESSION['klantVoornaam']."<br>";
        echo "Gebruikersnaam: ".$_SESSION['klantGebruikersnaam']."<br>"  ;
        echo "Email: ".$_SESSION['kantEmail']."<br>" ;
        ?>
        
        <button name="logOut" id="button">LOG OUT</button>
        <?php 
        if(isset($_POST["logOut"])){
            $_SESSION["loggedIn"] = false;
            echo "Je bent uitgelogd!";
            unset($_SESSION["klantID"]);
            unset($_SESSION["klantVoornaam"]);
            unset($_SESSION["klantGebruikersnaam"]);
            unset($_SESSION["kantEmail"]);
        }
        ?>
    </div>
   
        <?php
        include '..\footer.html'; 
        ?>
    </form>
</body>
</html>