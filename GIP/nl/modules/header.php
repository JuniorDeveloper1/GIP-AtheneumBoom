<?php if(session_status() !==  PHP_SESSION_ACTIVE) session_start();?>
<!DOCTYPE html>
<html lang="en">
    <!--<link rel="stylesheet" href="./css/header.css">-->
    <link rel="shortcut icon" type="image/x-icon" href="../images/Royal_Ring_Logo_3.svg" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../modules/assest/header.css">
    <title>Royal Ring</title>

    <script> 
      // var hamburger = document    .getElementById("hamburger_image");

       var open = false;
        function myFunction() {
            if(!open) {
                open = true;
                 document.getElementById("menu_items_responsive").style.display = "inline-block";
            }else{
                document.getElementById("menu_items_responsive").style.display = "none";
                open = false;
            }

        }
    </script>
<head>
   
</head>
<body>
    <header>
        <div class="inner_head">
            <div id="inner_head_logo">
                <div>
                <a href="../index/index.php"><img src="../images/Royal_Ring_Logo.svg" id="logo" width="120" height="120"></a>
                </div>
        
            </div>
            <!--Hier gaan we nog een search bar met een border-radius adden -->
            
        
         
        
            <div id="inner_head_content"> 
                
               

                <div id="inner_head_content_list">
                    <li><a href="../index/index.php">Home</a></li>
                    <li><a href="../about-us/index.php">A propos de nous</a></li>
                    <li><a href="../admin/index.php">Admin</a></li>
                    <li><a href="../producten-php/horloges.php">Horloges</a></li>
                    <li><a href="../producten-php/ringen.php">Ringen</a></li>
                </div>
               
                <div id="hamburger_menu">
                    <img src="../images/interface/hamburger.png" id="hamburger_image" onclick="myFunction()"> 
                    <script>


                    </script>
                </div>
                <div id="menu_shopping">

                    <div>
                    <select name="talen" id="talen_select">
                        <option value="nl">NL</option>
                        <option value="en">EN</option>
                        <option value="fr">FR</option>
                        </select>
                    </div>
                    <div>
                        <a href="../winkelmand/index.php">  <img src="../images/interface/shopping-cart.png" width="25" height="25"></a>
                     <span></span> 
                 </div>   
 
 
                 <a href="../login/index.php"><div> <img src="../images/interface/user-interface_rond.png" width="25" height="25"> 
                     </div></a>
             </div>
   

        </div>

        <div id="nav">
            
            <div id="menu_items_responsive">

                <div id="test">
                <div>
                    <li><a href="../modules/index.php">Home</a></li>
                    <li><a href="../about-us/index.php">A propos de nous</a></li>
                    <li><a href="../producten-php/horloges.php">Horloges</a></li>
                    <li><a href="../producten-php/ringen.php">Ringen</a></li>
                </div>

            <div>
                <select name="talen" id="talen_select">
                <option value="en">NL</option>
                <option value="nl">EN</option>
                <option value="fr">FR</option>
                </select>
            </div>


            <div id="menu_items_icons">
                    <a href="../winkelmand/index.php">  <img src="../images/interface/shopping-cart.png" width="25" height="25"></a>
                <div id="menu_items_icons_float">
             <a href="../login/index.php">
                <div> <img src="../images/interface/user-interface_rond.png" width="25" height="25"> 
                 </div></a>
                </div>
            </div>
        
            </div>

        </div>
    </header>

</body>
</html>