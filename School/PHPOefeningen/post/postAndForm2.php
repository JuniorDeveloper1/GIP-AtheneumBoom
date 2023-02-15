<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <style>


fieldset{
    width: 300px;
}




    </style>
</head>
<body>
    
    <form id="formpost" name="formpost" method="post">
<fieldset>

        <legend>formulier met get: </legend>
             <h3>vul volgende gegevens in:</h3>

             <table>

                <tr>
                <td>voornaam:</td>
                </tr>
                <tr>
                    <td><input type="text" name="voornaam"></td>
                    </tr>
                    <tr>
                        <td>achternaam:</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="achternaam"></td>
                            </tr> 
                            <tr>
                                <td><br><button id="submit" name="sub">verzenden</button></td>
                                </tr> 



             </table>



       

    </fieldset>

</form>

<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data);

    return $data;

}

if (!empty($_POST["voornaam"]) && !empty($_POST["achternaam"])) {
   echo "welcome ".test_input($_POST["voornaam"])."  ".htmlspecialchars(stripslashes(trim(strip_tags($_POST["achternaam"]))));
   
}
elseif (!empty($_POST)){
    echo "je velden zijn leeg";
}


?>
</body>
</html>