<?php if(session_status() !==  PHP_SESSION_ACTIVE) session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Admin page</title>


    <style> 
        #admin_nav {
            width: 20%;
            height: 550px;
            background-color: rgb(38, 39, 43);;
            color:rgb(115, 115, 115);
            float: left;
        }

        #admin_naam {
            text-align: center;
            padding: 4px;
        }

        hr{
            margin-top: 5px;
            color: white;
            background-color: white;
            border-color: none;
        }

        #admin_nav_content {
            margin-top: 10px;
            color: white;
        }


        table {
            border-collapse: separate;
            width: 100%;
            border: 1px solid black;
            background-color: #F5F5F5;

            -webkit-box-shadow: 10px -7px 29px -10px rgba(8,8,8,0.81);
            -moz-box-shadow: 10px -7px 29px -10px rgba(8,8,8,0.81);
            box-shadow: 10px -7px 29px -10px rgba(8,8,8,0.81);
            
            margin-left: 5px;
            margin-top: 20px;;
        }

        #admin_nav_content_dashboard,#admin_nav_content_klant{
            border-top: 1px solid white;

        }


        #admin_nav_content_dashboard,
        #admin_nav_content_klant,
        #admin_nav_content_admin
        ,#admin_nav_content_producten
        ,#admin_nav_content_productcategorie
        ,#admin_nav_content_winkelmandje,
        #admin_nav_content_promocode{
            border-bottom: 1px solid white;

            background-color: rgb(38, 39, 43);;
            color:rgb(115, 115, 115);
            text-align: center;
            line-height: 2.5;
            height: 40px;
            padding: 4px;

        }

        #admin_content {
            display: block;
            width: 78%;
            text-align: center;
            float:right;
            margin-right: 25px;
           
        }

        #admin_content_klant_table_tr td, #admin_content_admin_table_tr td, #admin_content_prducten_table_tr td, #admin_content_admin_table_tr td, #admin_content_winkelmandje_tr td, #admin_content_promo_code_tr td {
            border: 1px solid black;
            margin-left: 40px;
        }

        #add {
           float: left;
           margin-left: 5px;
           margin-top: 5px;
        }

        #admin_content_klant {
            display: block;
            text-align: -webkit-center;
        }

        #admin_content_dashboard
        ,#admin_content_admin
        ,#admin_content_producten
        , #admin_content_productcategorie
        ,#admin_content_winkelmandje,
        #admin_content_promocode {
            display: none;
            text-align: -webkit-center;
        }

        #edit{
            
            /**#ff22 */
            background-color: #90ee90	;
            color black;
            outline: none;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            padding: 0.5rem 1rem;
        }

        #delete, #editForm_close {
            background-color: 	#ff7272;
            outline: none;
            cursor: pointer;
            border: none;
            width: 68px;
            border-radius: 5px;
            padding: 0.5rem 1rem;
        }

            /**#ECAB38**/
        #add_button, #editForm_savechanges {
            background-color: #659BDF;
            outline: none;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            padding: 0.5rem 1rem;
        }

        .test {
            width: 200px;
        }

        #productImage {
            width: 60px;
            height: 60px;
        }

        #editForm {
            display: none;
            width: 550px;
            height: 60%;
            background-color: #F5F5F5;

            position: absolute;
            top: 120px;
            left: 392px;
            z-index: 999;

            transition: 0.5s;
            transform: translateY(0%);


            -webkit-box-shadow: 87px 111px 300px 200px rgba(224,224,224,1);
            -moz-box-shadow: 87px 111px 300px 200px rgba(224,224,224,1);
            box-shadow: 87px 111px 300px 200px rgba(224,224,224,1);
        }




    </style>
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
                <div id="admin_nav_content_klant"> Klant</div>
                <div id="admin_nav_content_admin"> Admin</div>
                <div id="admin_nav_content_producten"> producten</div>
                <div id="admin_nav_content_productcategorie"> product categorie</div>
                <div id="admin_nav_content_promocode"> promo code</div>
                <div id="admin_nav_content_winkelmandje"> winkelwandje</div>
            </div>


        </div>

    <div id="admin_content">

        <div id="admin_content_dashboard"> gg

        <?php //TODO: DASH BOARD 
        ?>
        </div>


            <div id="admin_content_klant">
                <table>
                    <tr id="admin_content_klant_table_tr">
                        <td>KlantID</td> <td>klantVoornaam</td> <td>klantAchternaam</td> <td>klantGebruikersnaam</td> <td>klantEmail</td> <td>isActive </td> <td>klantToken</td> <td>Action</td>
                    </tr>

                    <?php 
                    //10
                        echo "<tr>";
                        if($klantDisplaySQL -> num_rows > 0) {
                            while($artikelen = $klantDisplaySQL -> fetch_assoc()) { 
                                echo " <tr> <td>".$artikelen["klantID"]."</td>  ";
                                echo "  <td>".$artikelen["klantVoornaam"]."</td>  ";
                                echo " <td>".$artikelen["klantAchternaam"]."</td> ";
                                echo " <td>".$artikelen["klantGebruikersnaam"]."</td> ";
                                echo " <td>".$artikelen["klantEmail"]."</td> ";
                                //echo " <td>".$artikelen["klantWachtwoord"]."</td> ";
                                echo " <td>".$artikelen["isActive"]."</td> ";
                                echo " <td>".$artikelen["klantToken"]."</td> ";
                                echo 
                                "
                                <td class='test'>  
                                <a href='edit.php?id=".$artikelen["klantID"]."&databaseName=".$klant."'><input type='submit' name='edit' id='edit' value='edit'></a>
                                <a href='delete.php?id=".$artikelen["klantID"]."&databaseName=".$klant."'><input type='submit' id='delete' name='delete' value='delete'></a></td>";
                               echo " </tr>";
                                ?>
                                <?php
                            }
                        }
                        echo "</tr>";?>

                </table>
                <?php echo  "<div id='add'><a href='add.php?databaseName=".$klant."'><button id='add_button'>Add User</button></a></div>";?>
            </div>


            <div id="admin_content_admin"> 
                <table>
                    <tr id="admin_content_admin_table_tr">
                     <td>AdminID</td> <td>isAdmin</td> <td>klantID</td> <td>Action</td> 
                    </tr>
                <?php 
                    //10
                        echo "<tr>";
                        if($adminDisplaySQL -> num_rows > 0) {
                            while($artikelen = $adminDisplaySQL -> fetch_assoc()) { 
                                echo " <tr> <td>".$artikelen["AdminID"]."</td>  ";
                                echo "  <td>".$artikelen["isAdmin"]."</td>  ";
                                echo " <td>".$artikelen["klantID"]."</td> ";
                                echo 
                                "
                                <td class='test'>  
                                <a href='edit.php?id=".$artikelen["AdminID"]."&databaseName=".$admin."'><input type='submit' name='edit' id='edit' value='edit'></a>
                                <a href='delete.php?id=".$artikelen["AdminID"]."&databaseName=".$admin."'><input type='submit' id='delete' name='delete' value='delete'></a></td>";
                               echo " </tr>";
                ?>
                                <?php
                            }
                        }
                        echo "</tr>";?>
                </table>
                <?php echo  "<div id='add'><a href='add.php?databaseName=".$admin."'><button id='add_button'>Add Admin</button></a></div>";?>
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
                                    <a href='edit.php?id=".$artikelen["ArtikelID"]."&databaseName=".$producten."'><input type='submit' name='edit' id='edit' value='edit'></a>
                                    <a href='delete.php?id=".$artikelen["ArtikelID"]."&databaseName=".$producten."'><input type='submit' id='delete' name='delete' value='delete'></a></td>";
                                    //TODO: Add these values into an session so we can use it.
                                echo " </tr>";
                                    ?>
                                    <?php
                                }
                            }
                            echo "</tr>";?>
                    </table>

                    <?php echo  "<div id='add'><a href='add.php?databaseName=".$producten."'><button id='add_button'>Add product</button></a></div>";?>

            </div>



            <div id="admin_content_productcategorie"> 
                <table>
                    <tr id="admin_content_prducten_table_tr">
                        <td>CategorieID</td> <td>CategorieNaam</td> <td>Action</td>
             <?php 
                    //10
                        echo "<tr>";
                        if($producten_categorieDisplaySQL -> num_rows > 0) {
                            while($artikelen = $producten_categorieDisplaySQL -> fetch_assoc()) { 
                                echo " <tr> <td>".$artikelen["CategorieID"]."</td>  ";
                                echo "  <td>".$artikelen["CategorieNaam"]."</td>  ";
                                echo 
                                "
                                <td class='test'>  
                                <a href='edit.php?id=".$artikelen["CategorieID"]."&databaseName=".$product_catagorie."'><input type='submit' name='edit' id='edit' value='edit'></a>
                                <a href='delete.php?id=".$artikelen["CategorieID"]."&databaseName=".$product_catagorie."'><input type='submit' id='delete' name='delete' value='delete'></a></td>";
                               echo " </tr>";
                                ?>
                                <?php
                            }
                        }
                        echo "</tr>";?>
                        </tr>
                </table>

                <?php echo  "<div id='add'><a href='add.php?databaseName=".$product_catagorie."'><button id='add_button'>Add product categorie</button></a></div>";?>
            </div>


            <div id="admin_content_winkelmandje"> 
                <table>
                        <tr id="admin_content_winkelmandje_tr">
                            <td>winkelkarID</td> <td>klantID</td> <td>ArtikelID</td> <td>Aantal</td><td>Action</td>
                    <?php 
                        //10
                            echo "<tr>";
                            if($winkelmandDisplaySQL -> num_rows > 0) {
                                while($artikelen = $winkelmandDisplaySQL -> fetch_assoc()) { 
                                    echo " <tr> <td>".$artikelen["winkelkarID"]."</td>  ";
                                    echo "  <td>".$artikelen["klantID"]."</td>  ";
                                    echo "  <td>".$artikelen["ArtikelID"]."</td>  ";
                                    echo "  <td>".$artikelen["Aantal"]."</td>  ";
                                    echo 
                                    "
                                    <td class='test'>  
                                    <a href='edit.php?id=".$artikelen["winkelkarID"]."&databaseName=".$winkelkar."'><input type='submit' name='edit' id='edit' value='edit'></a>
                                    <a href='delete.php?id=".$artikelen["winkelkarID"]."&databaseName=".$winkelkar."'><input type='submit' id='delete' name='delete' value='delete'></a></td>";
                                echo " </tr>";
                                    ?>
                                    <?php
                                }
                            }
                            echo "</tr>";?>
                            </tr>
                </table>
                    <?php echo  "<div id='add'><a href='add.php?databaseName=".$winkelkar."'><button id='add_button'>Add winkelmand</button></a></div>";?>
            </div>

            <div id="admin_content_promocode"> 
                <table>
                        <tr id="admin_content_promocode_tr">
                            <td>promoID</td> <td>PromoCode</td> <td>Promo_discount_percentage</td> 
                    <?php 
                        //10
                            echo "<tr>";
                            if($promoCodeDisplaySQL -> num_rows > 0) {
                                while($artikelen = $promoCodeDisplaySQL -> fetch_assoc()) { 
                                    echo " <tr> <td>".$artikelen["PromoID"]."</td>  ";
                                    echo "  <td>".$artikelen["PromoCode"]."</td>  ";
                                    echo "  <td>".$artikelen["Promo_discount_percentage"]."</td>  ";
                                    echo 
                                    "
                                    <td class='test'>  
                                    <a href='edit.php?id=".$artikelen["PromoID"]."&databaseName=".$promo_code."'><input type='submit' name='edit' id='edit' value='edit'></a>
                                    <a href='delete.php?id=".$artikelen["PromoID"]."&databaseName=".$promo_code."'><input type='submit' id='delete' name='delete' value='delete'></a></td>";
                                echo " </tr>";
                                    ?>
                                    <?php
                                }
                            }
                            echo "</tr>";?>
                            </tr>
                </table>
                    <?php echo  "<div id='add'><a href='add.php?databaseName=".$promo_code."'><button id='add_button'>Add promo code</button></a></div>";?>
            </div>




    </div>

       

        <script type="text/javascript" src="../admin/index.js"></script>

<?php
        } //This is the end of if($_SESSION["isAdmin"])
?>

    

<?php  include '../modules/footer.html';?>
    
</body>
</html>