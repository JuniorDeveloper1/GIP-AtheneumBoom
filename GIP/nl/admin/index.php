<?php if(session_status() !==  PHP_SESSION_ACTIVE) session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin/assest/index.css">
    <title>Admin page</title>


</head>
<body>
<?php    include '../modules/header.php'; 
        include('./checkAdmin.php');
        include('./adminSQL.php');
        

                
        $klant = "klant";
        $admin = "admin";
        $producten = "producten";
        $product_catagorie = "product_categorie";
        $winkelkar = "winkelkar";
        $promo_code = "promo_code";

        if( $_SESSION["isAdmin"] == TRUE) {
            $itemID = 0;

            $klantID =  $_SESSION["klantID"];
            $klantVoornaam =   $_SESSION["klantVoornaam"];
            $klantAchternaam = $_SESSION["klantAchternaam"];
           //Werk hier verder, je bent een admin.  
?>

    <div id="admin_nav">

        <!-- -->
            <div id="admin_nav_naam"> 
                <?php echo $klantVoornaam." ".$klantAchternaam." (Admin) -".$klantID?>

            </div>
            


            <div id="admin_nav_content">

                <div id="admin_nav_content_dashboard"> Dashboard</div>
                <br>
                <br>
                <div id="admin_nav_content_producten"> producten</div>

            </div>


        </div>

    <div id="admin_content">

        <div id="admin_content_dashboard"> 
        <?php //TODO: DASH BOARD 
        ?>
        </div>


    


            <div id="admin_content_producten"> 
                <table>
                        <tr id="admin_content_prducten_table_tr">
                        <td>ArtikelID</td> <td>Artikel Naam</td> <td>Prijs </td> <td>image</td> <td>Korting</td> <td>Categorie ID</td>
                        <td>Action</td>
                        </tr>
                        <?php 
                        //10
                            echo "<tr>";
                            if($productenDisplaySQL -> num_rows > 0) {
                                while($artikelen = $productenDisplaySQL -> fetch_assoc()) { 
                                    echo " <tr> <td>".$artikelen["ArtikelID"]."</td>  ";
                                    echo "  <td>".$artikelen["ArtikelNaam"]."</td>  ";
                                    echo " <td>".$artikelen["Prijs"]."</td> ";
                                    echo " <td>"."<img src=".$artikelen["imageURL"]."id='productImage'>"."</td> ";
                                    echo " <td>".$artikelen["Korting"]."</td> ";
                                    echo " <td>".$artikelen["CategorieID"]."</td> ";
                                    echo "
                                    <td class='test'>  
                                    <a href='edit.php?id=".$artikelen["ArtikelID"]."'><input type='submit' name='edit' id='edit' value='edit'></a>
                                    <a href='delete.php?id=".$artikelen["ArtikelID"]."&databaseName=".$producten."'><input type='submit' id='delete' name='delete' value='delete'></a></td>";
                                    //TODO: Add these values into an session so we can use it.
                                echo " </tr>";
                                    ?>
                                    <?php
                                }
                            }
                            echo "</tr>";?>
                </table>

                    <?php echo  "<div id='add'><a href='add.php'><button id='add_button'>Add product</button></a></div>";?>

            </div>

    </div>

       

    <script type="text/javascript" src="../admin/assest/index.js"></script>

<?php
        } //This is the end of if($_SESSION["isAdmin"])
?>

    
        <div id="floater"></div>
<?php  include '../modules/footer.html';?>
    
</body>
</html>