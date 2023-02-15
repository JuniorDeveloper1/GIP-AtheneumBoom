<?php session_start() ?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./header.html">
    <title>Document</title>
</head>
<body>
<?php 
    include("header.php")
    ?>

<form name="form" method="post">
    <?php 
         $geenfout = 0;
         $geenfoutGeregistreerd = 0;
    ?>
    <div id="container">
        <div id="content">
            <table>       
        
        <tr>  <td>  Naam: </td> <td><input type="text" name="naam"></td> 
            <?php

            if(!empty($_POST["naam"])){

                if($_SESSION["naamSesion"] == $_POST["naam"]) {
                    $geenfoutGeregistreerd = 0;
                    $geenfout = 0;

               }else if($_SESSION["naamSesion"] != $_POST["naam"]){
                $geenfoutGeregistreerd = 1;
                $geenfout = 1;
                echo "Je bent niet geregistreerd.";
               }
                

            }else if((empty($_POST["naam"]))){
                echo "<td> U heeft geen naam ingevuld! </td>";
                $geenfout = 1;
            }
                
            ?></tr>

    <!-- Gebruiks naam check-->
        <tr>  <td>  Gebruikers naam: </td> <td><input type="text" name="gebruikerNaam"></td>  
        <?php 
                 if(!empty($_POST["gebruikerNaam"])){
                    if($_SESSION["gebruikernaamSesion"] == $_POST["gebruikerNaam"]) {
                        $geenfoutGeregistreerd = 0;
                        $geenfout = 0;
                    }else if($_SESSION["gebruikernaamSesion"] != $_POST["gebruikerNaam"]){
                        $geenfoutGeregistreerd = 1;
                        $geenfout = 1;
                        echo "Je bent niet geregistreerd.";
                       }
                    
    
                 }else if((empty($_POST["gebruikerNaam"]))){
                     echo "<td> U heeft geen gebruikersnaam ingevuld! </td>";
                     $geenfout = 1;
                 }
            
            
            ?>  
        </tr>





            <!-- email check-->
            <tr>  <td>  Email: </td> <td><input type="text" name="email"></td>
        <?php 
                 if(!empty($_POST["email"])){
                    if($_SESSION["emailSesion"] == $_POST["email"]) {
                        $geenfoutGeregistreerd = 0;
                        $geenfout = 0;
                    }else if($_SESSION["emailSesion"] != $_POST["email"]) {
                        $geenfoutGeregistreerd = 1;
                        $geenfout = 1;
                    }

    
                 }else if((empty($_POST["email"]))){
                     echo "<td> U heeft geen email ingevuld! </td>";
                     $geenfout = 1;
                    
                 }
            
            
            ?>
    
                 
    
        </tr>


         <!-- wachtwoord check-->

        <tr>  <td>  Wachtwoord: </td> <td><input type="password" name="wachtwoord"></td>
        <?php 
                 if(!empty($_POST["wachtwoord"])){
                    if($_SESSION["wachtwoordSesion"] == $_POST["wachtwoord"]) {
                        $geenfoutGeregistreerd = 0;
                        $geenfout = 0;
                    }else if($_SESSION["wachtwoordSesion"] != $_POST["wachtwoord"]) {
                        $geenfoutGeregistreerd = 1;
                        $geenfout = 1;
                    }

    
                 }else if((empty($_POST["wachtwoord"]))){
                     echo "<td> U heeft geen wachtwoord ingevuld! </td>";
                     $geenfout = 1;
                 }
            
            
            ?>
    
                 
    
        </tr>

        <tr>  <td><input type="submit" name="submit"></td> 
    
                <?php 
                    if($geenfout == 1) {
                        if(isset($_POST["submit"])) {
                            echo "<td> er is iets fout gegaan </td>";
                        } 
                    }

                    if($geenfoutGeregistreerd == 1) {
                        if(isset($_POST["submit"])) {
                            echo "<td> U bent niet geregistreerd </td>";
                        }
                      
                    }
                
                ?></tr>
        
    
            </table>
        </div>


        <footer>

        <?php
            if($geenfout == 0) {
                if(isset($_POST["submit"])) {
                    echo "<p color='green'>U bent succesvol ingelogt! </p>"."<br>";
                    echo "Naam: ".$_POST["naam"]."<br>";
                    echo "Gebruikersnaam: ".$_POST["gebruikerNaam"]."<br>";
                    echo "Wachtwoord: ".$_POST["wachtwoord"]."<br>";
                    
                }
            }

            if($geenfoutGeregistreerd == 0) {
                if(isset($_POST["submit"])) {
                    echo "U bent geregistreerd";
                }
            }
        
        ?>
        </footer>
    </div>
</form>
</body>
</html>