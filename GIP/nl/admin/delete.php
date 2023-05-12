<?php 
  /**
 * No html css needed. User will be instantly direct to index.php page.
 */

 include ('C:\USBWebserver\USBWebserver_GIP\root\GIP\dbConnection.php'); 
 include './checkAdmin.php';
 
 function getIDName($tablename) {
     $idField = '';
     switch($tablename) {
         case 'klant':
             $idField = 'klantID';
             break;
         case 'admin':
             $idField = 'AdminID';
             break;
         case 'producten':
             $idField = 'ArtikelID';
             break;
         case 'product_categorie':
             $idField = 'CategorieID';
             break;
         case 'winkelkar':
             $idField = 'winkelkarID';
             break;
     }
     return $idField;
 }
 
 // Retrieve the data from the database
 
 $id = $_GET["id"];
 $name = $_GET["databaseName"];
 $idName = getIDName($name);
 
 
 $editSQL = "DELETE FROM " . $name . " WHERE " . $idName . " = " . $id;
 if($connect->query($editSQL)== TRUE) {

  header("location: index.php");

 }else {echo " ERROR".$connect->error;}


?>