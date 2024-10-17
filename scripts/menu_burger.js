var dropdowns = document.getElementsByClassName("dropdown-menu");
for (var i = 0; i < dropdowns.length; i++) {
  dropdowns[i].addEventListener("mouseover", function() {
    this.querySelector("ul").style.display = "block";
  });
  dropdowns[i].addEventListener("mouseout", function() {
    this.querySelector("ul").style.display = "none";
  });
}

var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");
var burgerMenu = document.getElementById("burgerMenu");

openBtn.addEventListener("click", openNav);
closeBtn.addEventListener("click", closeNav);

function openNav() {
  sidenav.classList.add("active");
  burgerMenu.classList.add("active");
}

function closeNav() {
  sidenav.classList.remove("active");
  burgerMenu.classList.remove("active");
}








// 1. Je recupere le burger
const burger = document.querySelector(".burger");
// 2. Je recupere la fenetre modal
const modal = document.querySelector(".modal");

// 3. Lors du clique sur le burger
burger.addEventListener("click",function(){
    // 4. J'ajoute ou je retire la modal avec la classe show-modal
    modal.classList.toggle("show-modal");
    // 5. Je transforme le burger en croix et je rend la croix fixe
    burger.classList.toggle("fa-x");        //Le bruger devient une croix
    burger.classList.toggle("show-modal");
});