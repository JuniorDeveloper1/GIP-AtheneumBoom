<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
<style>

span
{
    color:red;
}

</style>

</head>
<body>

<form name= "formulier"  method="post">
<fieldset>
    <legend> PHP Formulier - Validatievoorbeeld</legend>

    <?php
        $aantal = 0;
    ?>

    <table>
        <tr>
            <td>
                Naam:
            </td>
            <td>
                <input type="text" name="naam">
            </td>
            <td>  
        <?php
            if (isset($_POST["naam"])){
                if (empty($_POST["naam"])){
                    $fout = " <span> *Naam is verplicht! </span> ";
                    $boodschap = "<span> *Naam is verplicht! </span> ";
                    echo $boodschap ;
                    $aantal = $aantal+1;
                }
            }
        ?>

            </td>
        </tr>
        <tr>
            <td>
                Email:
            </td>
            <td>
                <input type="text" id="" name="email">
            </td>
            <td>  
        <?php
            if (isset($_POST["naam"])){
                if (empty($_POST["email"])){
                    $fout.=" <span> *Email is verplicht! </span>";
                    $boodschap = "<span> *Email is verplicht! </span>";
                    echo $boodschap;
                    $aantal = $aantal+1;
                }
                
            }
        ?>

            </td>
        </tr>
        <tr>
            <td>
                Website:
            </td>
            <td>
                <input type="text" id="" name="website" >
            </td>
            <td>  
        <?php
            if (isset($_POST["naam"])){
                if (empty($_POST["website"])){
                    $fout .= "<span> *Website is verplicht! </span>";
                    $boodschap = "<span> *Website is verplicht! </span>";
                    echo " $boodschap";
                    $aantal = $aantal+1;
                }
                
            }
        ?>

            </td>
        </tr>
        <tr>
            <td>
                Comment:
            </td>
            <td>
                <textarea name="comment" id="comment" cols="20" rows="5"></textarea>
            </td>
            <td>
            <?php
             if(isset($_POST["naam"])){
                if(empty($_POST["comment"])){
                    $fout .= " <span> *comment is verplicht ! </span>";
                    $boodschap = "<span> *comment is verplicht ! </span>";
                    echo $boodschap;
                    $aantal = $aantal+1;
                }
             }
             ?>
            </td> 
        </tr>
        <tr>
            <td>
                Geslacht:
            </td>
            <td>
                <input type="radio" id="vrouw" name="geslacht" value="vrouw"> Vrouw
                <input type="radio" id="man" name="geslacht" value="man"  checked> Man
            </td>
            </tr>
            <tr>
            <td>
               <input type="submit" name="verzend" value="Verzend">
            </td>
            
        </tr>
    </table>


</fieldset>
</form>

<?php

function test_input($data){

    $data = htmlspecialchars($data);

    $data = trim($data);

    $data = stripslashes($data);

    $data = strip_tags($data);

    return $data;
}

  if (isset($_POST["verzend"])){
    if ($aantal == 0){
    echo "<h3> Je gaf volgende gegevens in:</h3>";
    $naam = test_input($_POST["naam"])."<br>";
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $geslacht = test_input($_POST["geslacht"]);
    echo 
    $naam."<br>"
    .$email."<br>"
    .$website."<br>"
    .$comment."<br>"
    .$geslacht."<br>";
    }
    
}    
if($aantal != 0){
    echo "$fout ";
}

/*if (isset($_POST["verzend"])){
    echo "Je hebt niet alles ingevuld!";
}*/

?>


    
</body>
</html>