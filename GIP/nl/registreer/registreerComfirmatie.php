<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email comfirmen</title>

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
    </head>




    <body>
    <?php 
             include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\nl\header.html');; 
             include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php');
            
        ?>

    <div id="login-geheel">
                                <?php  
                                //$mailCodeError = false;
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
                        ?></tr>

                <tr><td><button type="submit" name="button">Comfirm</button></td> 
                            <?php 
                                if(isset($_POST["button"])) {
                                    if($mailCodeError == true) {
                                        //todo: Maak via de database connectie als de isActive naar 1 veranderd. 
                                        $sql =  "UPDATE `royalring`.`klant` SET `isActive` = '1' WHERE `klant`.`klantEmail` = '".$_POST["email"]."';";
                                       // $sql2 = "SELECT `klantEmail`,`klantWachtwoord` FROM `klant` WHERE `klantEmail`= '".$_POST["email"]."' AND `klantWachtwoord` = '".$_POST[]."'";


                                        if ($connect->query($sql) === TRUE) {
                                            echo "<br>Je bent geregistreerd!";
                                          } else {
                                            echo "<br> Er is een fout! Contacteer onze suppot! " . $connect->error;
                                        }
                                        }else {
                                        //todo: Niet aanpassen -> error message
                                        }
                                }
                            ?>
                </tr>
            </table>
         </form>
        </div>
    </div>
    <?php
         include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\nl\footer.html');;

    ?>

    
</body>
</html>

<?php 
/**
*$sqlEmail = "SELECT `klantEmail` FROM `klant`";
*$result = $connect -> query($sqlEmail);
*if($result -> num_rows > 0 ){
*while($loginGegevens = $result -> fetch_assoc()) { 
 */


?>