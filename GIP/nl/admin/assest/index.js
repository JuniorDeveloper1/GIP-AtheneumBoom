var dashboard = document.getElementById("admin_nav_content_dashboard");
var producten = document.getElementById("admin_nav_content_producten");


var dashboard_content = document.getElementById("admin_content_dashboard");
var producten_content = document.getElementById("admin_content_producten");



var edit = document.getElementById("edit");
var editForm_close = document.getElementById("editForm_close");
var editForm = document.getElementById("editForm");


//admin_nav_content_klant



dashboard.addEventListener('click', () => {
    dashboard_content.style.display = "block";

  
    producten_content.style.display = "none";
   


    //        background-color: rgb(38, 39, 43);;
   // color:rgb(115, 115, 115);

    dashboard.style.backgroundColor = "rgb(115, 115, 115)";
    
  
    producten.style.backgroundColor = " rgb(38, 39, 43)";




    //klant.style.backgroundColor = 'white';

    dashboard.style.color = "white";
   
    
    producten.style.color = "rgb(115, 115, 115)";
   
   
  
});




producten.addEventListener('click', () => {
   
    producten_content.style.display = "block";
    dashboard_content.style.display = "none";

    //rgb(115, 115, 115)
    dashboard.style.backgroundColor = "rgb(38, 39, 43)";
   
    producten.style.backgroundColor = "rgb(115, 115, 115)";
   


    dashboard.style.color = "rgb(115, 115, 115)";
   
   
    producten.style.color = "white";

});







edit.addEventListener('submit', () => {

    editForm.style.display = "block";
})

editForm_close.addEventListener('click', () => {

    editForm.style.display = "none";
})


    document.addEventListener('DOMContentLoaded', () => {
    
        producten_content.style.display = "block";
        dashboard_content.style.display = "none";

        //rgb(115, 115, 115)
        dashboard.style.backgroundColor = "rgb(38, 39, 43)";
    
        producten.style.backgroundColor = "rgb(115, 115, 115)";

        dashboard.style.color = "rgb(115, 115, 115)";
    
    
        producten.style.color = "white";

    });




