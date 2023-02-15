<!DOCTYPE html>
<html lang="en">
<head>

    <title>FormpostValidation</title>
    <style>


span{
    color:red;
}


    </style>
</head>
<body>


<form id="formvalidatie" method="post">
    <fieldset>
    <legend>PHP formulier</legend>
   <table>

    <tr><td>naam:</td><td><input type="text" name="naam"></td><td><span><?php 
    
    if (isset($_POST["verzenden"])) {
    if(empty($_POST["naam"])){
        echo "naam is leeg"."<br>";

     }
       }   ?></span></td></tr>
    <tr><td>E-mail:</td><td><input type="text" name="email"></td>   <td><span><?php 
    
    if (isset($_POST["verzenden"])) {
    if(empty($_POST["email"])){
        echo "email is leeg"."<br>";

     }
       }   ?></span></td></tr>
    <tr><td>will je nieuwsbrieven ontvangen:</td><td><input type="radio" name="vraag" value="ja" checked="true"> ja</td><td><input type="radio" name="vraag" value="vrouw"> nee</td><td><span>
    <?php 
    if (isset($_POST["verzenden"])) {
    if(empty($_POST["vraag"])){
        echo "nieuws is leeg"."<br>";

     }
       }   ?>
    <tr><td>stell je vraag:</td><td><textarea name="comment"></textarea></td></tr>
    <tr><td>waar gaat her over:</td><td>
    <select> 
        <option value="hardware">hardware</option>
        <option value="software">software</option>
        <option value="internal">Internal</option>
    </select></td></tr>
    
    

</span></td></tr>

   </table>
   

   <button id="verzend" name="verzenden">verzend</button>

    </fieldset>
</form>

<?php 


    function text_input($data){
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);
        $data = strip_tags($data);
        return $data;
    }
    

    if (isset($_POST["verzenden"])) {
        if(!empty($_POST["naam"])) {
        echo text_input($_POST["naam"])."<br>";
        }
        else {

            echo "<span> 
            * Naam is verplicht <br>
            </span>" ;
    }
} 
   



     
     
    
    if (isset($_POST["verzenden"])) {
        if(!empty($_POST["email"])) {
            text_input($_POST["email"])."<br>";
        }
        else {

            echo "<span> 
            * Email is verplicht <br>
            </span>" ;
        }
    }
    if (isset($_POST["verzenden"])) {
        if(!(empty($_POST["vraag"]))){
           echo $_POST["vraag"];
        }
    
        else {

            echo "<span> 
            * nieuwsbrief is verplicht <br>
            </span>" ;
        }
    }

    if (isset($_POST["verzenden"])) {
        $boodschap = "";
        $boodschap .= "<h3>Je gaf volgende gegevens in</h3>";
        $boodschap .= "Naam: ".text_input($_POST["naam"])."<br>";
        $boodschap .= "Email: ".text_input($_POST["email"])."<br>";
        $boodschap .= "Nieuwsbrief: ".text_input($_POST["vraag"])."<br>";
        //$boodschap .= "Soort vraag: ".text_input($_POST["soort_vraag"])."<br>";
        $boodschap .= "Vraag: ".text_input($_POST["comment"])."<br>";
        echo $boodschap;
        if (text_input($_POST["vraag"]) == "ja") {
            $bericht = "Naam: ".text_input($_POST["naam"])."\n";
            $bericht .= "Email: ".text_input($_POST["email"])."\n";
        //    $bericht .= "Soort vraag: ".text_input($_POST["soort_vraag"])."\n";
            $bericht .= "Vraag: ".text_input($_POST["comment"]);
            ini_set("SMTP", "smtp.telenet.be");
            ini_set("sendmail_from", "mailtest@telenet.be");
            date_default_timezone_set("GMT");
            mail(text_input($_POST["email"]), "Een vraag via de website", $bericht, "From: Localhost");

        }
    } else if (isset($_POST["verzenden"])) {
        echo "<h3 style='color: red;'>Je gaf de volgende gegevens fout in</h3>";
        foreach($NOT_FILLED as $EMPTY_ITEM) {
            echo "<span style='color: red;'>* $EMPTY_ITEM</span><br>";
        }
    }
?>
    
</body>
</html>