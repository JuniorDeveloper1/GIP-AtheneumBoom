<?php if(session_status() !==  PHP_SESSION_ACTIVE) session_start();?>
<!DOCTYPE html>
<html lang="en">
    <!--<link rel="stylesheet" href="./css/header.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>header</title>

<style>
        ::-webkit-scrollbar {
           width: 10px;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background-color:   rgb(115, 115, 115);

            /**
            rgb(38, 39, 43);
          
            */
        }


        ::-webkit-scrollbar-thumb:hover {
            border-radius: 10px;
            background-color:   rgb(38, 39, 43);;

            /**
           
          
            */
        }
    @media only screen and (min-width: 860px) {
            *{
            margin: 0px;
            padding: 0px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
              }
        header {
            width: 100%;
            height: 100px;
            border: 1px solid black;
            background-color: black;
            color: white;


        
        }

        .inner_head{
            width: 100%;
            height: 100%;
            background-color: white;
            color: rgb(38, 39, 43);
            
        }

        #inner_head_logo{
            display: table;
            height: 100%;
            float: left;

        }

        #inner_head_logo div {
            height: 100%;
            display: table-cell;
            vertical-align: middle;
        }

        #logo {
            height: 100%;
            margin-top: auto;
            padding-left: 6px;
        }


        #inner_head_content {
            margin-right: 70px;
            height: 100%;
        
        }
        #inner_head_content_list{
            float: left;
            margin-left: 36px;
            margin-top: 37px;
        }
        #inner_head_content li{
            display: table;
            height: 100%;
            float: left;
            text-decoration: none;
            margin-right: 30px;

        }

        #inner_head_content span {
            color: black;
            display: table-cell;
            vertical-align: middle;
        }

        #inner_head_content span a {
            color: black;
            text-decoration: none;
        }

        #inner_head_content_list span:hover{
            color: gold;
            text-decoration: none;
        }

        #menu_shopping {
            float: right;
            margin-left: 50px;
            margin-top: 37px;
            display: inline;
        }

        #menu_shopping div {
            position: relative;
            float: right;
            padding-left: 22px;
        }

        #menu_items_responsive {
            display: none;
        }



        nav {
            width: 100%;
            height: auto;
            display: flex;
            background-color:rgb(38, 39, 43);
            color: black;
            align-items: center;
            justify-content: space-between;
        }

        #nav_content
        {
            
            /**
            width: 100%;
        
        margin-left: 375px;
        **/
        height: 50px;
        text-align: center;
        }


        #nav_content li {
            display:inline;
        
            width: 60%;
            margin-left: -56px;
        }

        #nav_content a {
            width:15%;
            text-align:center;
            display:inline-block;
        background-color:  rgb(115, 115, 115);;
            text-decoration: none;
        }

        #nav_content a:hover { 
            width:15%;
            color: rgb(218,165,32);
        
        }

        a {
            text-decoration: none;
            color:white;
        }

        a:hover {
            color: #ab8c52;
            text-decoration: none;
        }
        #talen_select {
            border: none;
        }
        #hamburger_menu {
            display: none;
            cursor: pointer;
        }
        
    }

    @media only screen and (max-width: 860px) {
        *{
            margin: 0px;
            padding: 0px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
        }



        header {
            width: 100%;
            height: 100px;
            border: 1px solid black;
            background-color: white;
            color: white;
            
        
        }

        .inner_head{
            width: 100%;
            height: 100%;
          
            
        }

        #inner_head_logo{
            display: table;
            height: 100%;
            float: left;

        }

        #inner_head_logo div {
            height: 100%;
            display: table-cell;
            vertical-align: middle;
        }

        #logo {
            height: 100%;
            margin-top: auto;
            padding-left: 6px;
            padding-right: 40px;
        }


        #inner_head_content {
            margin-right: 70px;
            height: 100%;
        
        }
        #inner_head_content_list{
            width: 100%;
            padding-top: 36px;
            display: none;
        }
        #inner_head_content li{
            display: table;
            height: 100%; 
            float: left;
            text-decoration: none;
            margin-right: 30px;

        }

        #inner_head_content span {
            color: black;
            display: table-cell;
            vertical-align: middle;
        }

        #inner_head_content span a {
            color: black;
            text-decoration: none;
            width: 100%;
        }

        #inner_head_content_list span:hover{
            color: gold;
            text-decoration: none;
        }

        #menu_shopping {
            float: right;
            margin-left: 50px;
            margin-top: 37px;
            display: none;
        }

        #menu_shopping div {
            position: relative;
            float: right;
            padding-left: 22px;
        }

        nav {
            width: 100%;
            height: auto;
            background-color:rgb(38, 39, 43);
            color: black;
        }

        #nav_content
        {
            
            /**
            width: 100%;
        
        margin-left: 375px;
        **/
        height: 50px;
        text-align: center;
        }


        #nav_content li {
            display:inline;
        
            width: 60%;
            margin-left: -56px;
        }

        #nav_content a {
            width:15%;
            text-align:center;
            display:inline-block;
        background-color:  rgb(115, 115, 115);
            text-decoration: none;
        }

        #nav_content a:hover { 
            width:100%;
            color: rgb(218,165,32);
        
        }

        a {
            text-decoration: none;
            color:rgb(218,165,32);
            text-align: center;
        }

        a:hover {
            color: #ab8c52;
            text-decoration: none;
        }
        #talen_select {
            border: none;
        }

        #hamburger_menu {
            display: inline;

        }
        #hamburger_image {
            width: 25px;
            height: 25px;
            margin-left: 10px;
            float: right;
            margin-top: 30px;

        }

        #menu_items_responsive {
            width: 100%;
            align-items: center;
            text-decoration: none;
            list-style-type: none;
            display: none;
            background-color:rgb(38, 39, 43);
            font-size: larger;
            cursor: pointer;
        }

        #test {
            margin-left: 230px;
        }

        #menu_items_icons_float{
            float: left;
        }
    }



</style>

    <script> 
      // var hamburger = document    .getElementById("hamburger_image");

       var open = false;
        function myFunction() {
            if(!open) {
                open = true;
                 document.getElementById("menu_items_responsive").style.display = "inline";
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
                    <li><a href="#">Over ons</a></li>
                    <li><a href="../admin/index.php">Admin</a></li>
                    <li><a href="../producten-php/horloges.php">Horloges</a></li>
                    <li><a href="../producten-php/heren_ring.php">Ringen</a></li>
                </div>
               
                <div id="hamburger_menu">
                    <img src="../images/interface/hamburger.png" id="hamburger_image" onclick="myFunction()"> 
                    <script>


                    </script>
                </div>
                <div id="menu_shopping">

                    <div>
                        <select name="talen" id="talen_select">
                        <option value="en">NL</option>
                        <option value="nl">EN</option>
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
                    <li><a href="#">Over ons</a></li>
                    <li><a href="../admin/index.php">Admin</a></li>
                    <li><a href="../producten-php/horloges.php">Horloges</a></li>
                    <li><a href="#">Ringen</a></li>
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