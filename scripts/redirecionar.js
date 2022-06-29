const Fcar = document.querySelector("#Fcar");
const Pcar = document.querySelector("#Pcar");
const Flogin = document.querySelector("#login");
const Freg = document.querySelector("#register");
const ir = document.querySelector("#ir");
Pcar.addEventListener("click",function(c){
    c.preventDefault;
    window.location.href="Pcarona.php";
});
Fcar.addEventListener("click",function(c){
    c.preventDefault;
    window.location.href="Fcarona.php";  
});


ir.addEventListener("click",function(c){
    c.preventDefault;
    window.location.href="Pcarona.php";
});

const element = document.getElementById("myBtn");
element.addEventListener("click", function() {
    document.getElementById("demo").innerHTML = "Hello World";
});