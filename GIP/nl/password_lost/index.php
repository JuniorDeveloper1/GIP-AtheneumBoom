<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wachtwoord vergeten</title>

    <style>
        #password_vergeten_geheel{
            width: 100%;
            height: 100%;
            background-color:rgb(38, 39, 43);
            color: rgb(115, 115, 115);
        }

        #password_vergeten{
            background-color: white;
                color:  rgb(38, 39, 43);
                align-items: center;

                margin-left: -140px;
                text-align: center;
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


            #table input {
                border: none;
                border-bottom: 1px solid rgb(115, 115, 115);
                outline: none;
                width: 230px;
                margin-bottom: 5px;
                background: transparent;
                padding: 10px 0px;
            }

            h1{
                text-align: center;
                width: 100%;
                height: auto;
                float:left;
                margin-left: 50px;
            }


            button {
                background-color: rgb(38, 39, 43);
                color: rgb(115, 115, 115);
                height: 30px;
                margin-top: 10px;
                cursor: pointer;
                width: 230px;
                border-radius: 15px;
            }



    </style>
</head>
<body>
    <?php 
    
    include("../modules/header.php");
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
                                    $_SESSION["klantSession"] = $_POST["email"];
                                    include "sendEmail.php";
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