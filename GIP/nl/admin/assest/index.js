var dashboard = document.getElementById("admin_nav_content_dashboard");
var klant = document.getElementById("admin_nav_content_klant");
var admin = document.getElementById("admin_nav_content_admin");
var producten = document.getElementById("admin_nav_content_producten");
var productencategorie = document.getElementById("admin_nav_content_productcategorie");
var winkelmandje = document.getElementById("admin_nav_content_winkelmandje");
var promocode = document.getElementById("admin_nav_content_promocode");

var dashboard_content = document.getElementById("admin_content_dashboard");
var klant_content = document.getElementById("admin_content_klant");
var admin_content = document.getElementById("admin_content_admin");
var producten_content = document.getElementById("admin_content_producten");
var productencategorie_content = document.getElementById("admin_content_productcategorie");
var winkelmandje_content = document.getElementById("admin_content_winkelmandje");
var promocode_content = document.getElementById("admin_content_promocode");



var edit = document.getElementById("edit");
var editForm_close = document.getElementById("editForm_close");
var editForm = document.getElementById("editForm");


//admin_nav_content_klant



dashboard.addEventListener('click', () => {
    dashboard_content.style.display = "block";
    admin_content.style.display = "none";
    klant_content.style.display = "none";
    producten_content.style.display = "none";
    productencategorie_content.style.display = "none";
    winkelmandje_content.style.display = "none";
   


    //        background-color: rgb(38, 39, 43);;
   // color:rgb(115, 115, 115);

    dashboard.style.backgroundColor = "rgb(115, 115, 115)";
    klant.style.backgroundColor = " rgb(38, 39, 43)";
    admin.style.backgroundColor = " rgb(38, 39, 43)";
    producten.style.backgroundColor = " rgb(38, 39, 43)";
    productencategorie.style.backgroundColor = " rgb(38, 39, 43)";
    winkelmandje.style.backgroundColor = " rgb(38, 39, 43)";



    //klant.style.backgroundColor = 'white';

    dashboard.style.color = "white";
    klant.style.color = "rgb(115, 115, 115)";
    admin.style.color = "rgb(115, 115, 115)";
    producten.style.color = "rgb(115, 115, 115)";
    productencategorie.style.color = "rgb(115, 115, 115)";
    winkelmandje.style.color = "rgb(115, 115, 115)";

    promocode.style.backgroundColor = " rgb(38, 39, 43)";
    promocode_content.style.display = "none";
    promocode.style.color = "rgb(115, 115, 115)";
   
  
});

klant.addEventListener('click', () => {
    klant_content.style.display = "block";
    admin_content.style.display = "none";
    producten_content.style.display = "none";
    productencategorie_content.style.display = "none";
    winkelmandje_content.style.display = "none";
    dashboard_content.style.display = "none";


    //rgb(115, 115, 115)
    dashboard.style.backgroundColor = "rgb(38, 39, 43)";
    klant.style.backgroundColor = " rgb(115, 115, 115)";
    admin.style.backgroundColor = " rgb(38, 39, 43)";
    producten.style.backgroundColor = " rgb(38, 39, 43)";
    productencategorie.style.backgroundColor = " rgb(38, 39, 43)";
    winkelmandje.style.backgroundColor = " rgb(38, 39, 43)";


    dashboard.style.color = "rgb(115, 115, 115)";
    klant.style.color = "white";
    admin.style.color = "rgb(115, 115, 115)";
    producten.style.color = "rgb(115, 115, 115)";
    productencategorie.style.color = "rgb(115, 115, 115)";
    winkelmandje.style.color = "rgb(115, 115, 115)";

    promocode.style.backgroundColor = " rgb(38, 39, 43)";
    promocode_content.style.display = "none";
    promocode.style.color = "rgb(115, 115, 115)";
   
});


admin.addEventListener('click', () => {
    admin_content.style.display = "block";
    klant_content.style.display = "none";
    producten_content.style.display = "none";
    productencategorie_content.style.display = "none";
    winkelmandje_content.style.display = "none";
    dashboard_content.style.display = "none";


    //rgb(115, 115, 115)
    dashboard.style.backgroundColor = "rgb(38, 39, 43)";
    klant.style.backgroundColor = " rgb(38, 39, 43)";
    admin.style.backgroundColor = " rgb(115, 115, 115)";
    producten.style.backgroundColor = " rgb(38, 39, 43)";
    productencategorie.style.backgroundColor = " rgb(38, 39, 43)";
    winkelmandje.style.backgroundColor = " rgb(38, 39, 43)";


    dashboard.style.color = "rgb(115, 115, 115)";
    klant.style.color = "rgb(115, 115, 115)";
    admin.style.color = "white";
    producten.style.color = "rgb(115, 115, 115)";
    productencategorie.style.color = "rgb(115, 115, 115)";
    winkelmandje.style.color = "rgb(115, 115, 115)";

    promocode.style.backgroundColor = " rgb(38, 39, 43)";
    promocode_content.style.display = "none";
    promocode.style.color = "rgb(115, 115, 115)";
   


});

producten.addEventListener('click', () => {
    klant_content.style.display = "none";
    admin_content.style.display = "none";
    producten_content.style.display = "block";
    productencategorie_content.style.display = "none";
    winkelmandje_content.style.display = "none";
    dashboard_content.style.display = "none";

    //rgb(115, 115, 115)
    dashboard.style.backgroundColor = "rgb(38, 39, 43)";
    klant.style.backgroundColor = " rgb(38, 39, 43)";
    admin.style.backgroundColor = " rgb(38, 39, 43)";
    producten.style.backgroundColor = "rgb(115, 115, 115)";
    productencategorie.style.backgroundColor = " rgb(38, 39, 43)";
    winkelmandje.style.backgroundColor = " rgb(38, 39, 43)";


    dashboard.style.color = "rgb(115, 115, 115)";
    klant.style.color = "rgb(115, 115, 115)";
    admin.style.color = "rgb(115, 115, 115)";
    producten.style.color = "white";
    productencategorie.style.color = "rgb(115, 115, 115)";
    winkelmandje.style.color = "rgb(115, 115, 115)";

    promocode.style.backgroundColor = " rgb(38, 39, 43)";
    promocode_content.style.display = "none";
    promocode.style.color = "rgb(115, 115, 115)";
});

productencategorie.addEventListener('click', () => {
    klant_content.style.display = "none";
    admin_content.style.display = "none";
    producten_content.style.display = "none";
    productencategorie_content.style.display = "block";
    winkelmandje_content.style.display = "none";
    dashboard_content.style.display = "none";


    //rgb(115, 115, 115)
    dashboard.style.backgroundColor = "rgb(38, 39, 43)";
    klant.style.backgroundColor = " rgb(38, 39, 43)";
    admin.style.backgroundColor = " rgb(38, 39, 43)";
    producten.style.backgroundColor = " rgb(38, 39, 43)";
    productencategorie.style.backgroundColor = "rgb(115, 115, 115)";
    winkelmandje.style.backgroundColor = " rgb(38, 39, 43)";


    dashboard.style.color = "rgb(115, 115, 115)";
    klant.style.color = "rgb(115, 115, 115)";
    admin.style.color = "rgb(115, 115, 115)";
    producten.style.color = "rgb(115, 115, 115)";
    productencategorie.style.color = "white";
    winkelmandje.style.color = "rgb(115, 115, 115)";

    promocode.style.backgroundColor = " rgb(38, 39, 43)";
    promocode_content.style.display = "none";
    promocode.style.color = "rgb(115, 115, 115)";
   
});

winkelmandje.addEventListener('click', () => {
    klant_content.style.display = "none";
    admin_content.style.display = "none";
    producten_content.style.display = "none";
    productencategorie_content.style.display = "none";
    winkelmandje_content.style.display = "block";
    dashboard_content.style.display = "none";


        //rgb(115, 115, 115)
    dashboard.style.backgroundColor = "rgb(38, 39, 43)";
    klant.style.backgroundColor = " rgb(38, 39, 43)";
    admin.style.backgroundColor = " rgb(38, 39, 43)";
    producten.style.backgroundColor = " rgb(38, 39, 43)";
    productencategorie.style.backgroundColor = " rgb(38, 39, 43)";
    winkelmandje.style.backgroundColor = "rgb(115, 115, 115)";

    dashboard.style.color = "rgb(115, 115, 115)";
    klant.style.color = "rgb(115, 115, 115)";
    admin.style.color = "rgb(115, 115, 115)";
    producten.style.color = "rgb(115, 115, 115)";
    productencategorie.style.color = "rgb(115, 115, 115)";
    winkelmandje.style.color = "white";

    promocode.style.backgroundColor = " rgb(38, 39, 43)";
    promocode_content.style.display = "none";
    promocode.style.color = "rgb(115, 115, 115)";
   
});


promocode.addEventListener('click', () => {
    klant_content.style.display = "none";
    admin_content.style.display = "none";
    producten_content.style.display = "none";
    productencategorie_content.style.display = "none";
    winkelmandje_content.style.display = "none";
    dashboard_content.style.display = "none";


        //rgb(115, 115, 115)
    dashboard.style.backgroundColor = "rgb(38, 39, 43)";
    klant.style.backgroundColor = " rgb(38, 39, 43)";
    admin.style.backgroundColor = " rgb(38, 39, 43)";
    producten.style.backgroundColor = " rgb(38, 39, 43)";
    productencategorie.style.backgroundColor = " rgb(38, 39, 43)";
    winkelmandje.style.backgroundColor = " rgb(38, 39, 43)";

    dashboard.style.color = "rgb(115, 115, 115)";
    klant.style.color = "rgb(115, 115, 115)";
    admin.style.color = "rgb(115, 115, 115)";
    producten.style.color = "rgb(115, 115, 115)";
    productencategorie.style.color = "rgb(115, 115, 115)";
    winkelmandje.style.color = "rgb(115, 115, 115)";

    promocode.style.backgroundColor = " rgb(115, 115, 115)";
    promocode_content.style.display = "block";
    promocode.style.color = "white";
   
});




edit.addEventListener('submit', () => {

    editForm.style.display = "block";
})

editForm_close.addEventListener('click', () => {

    editForm.style.display = "none";
})




