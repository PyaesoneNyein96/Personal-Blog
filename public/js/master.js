
const navbar = document.querySelector(".navbar");
const hamburgermenu = document.querySelector(".hamburger-menu");
const navmenu = document.querySelector(".nav-menu");
const li = document.querySelectorAll(".nav-item");
const navlink = document.querySelectorAll(".nav-item");
const overlay = document.querySelector(".overlay");
const database = document.querySelector(".database");

const line1 = document.querySelector(".line-1");
const line2 = document.querySelector(".line-2");
const line3 = document.querySelector(".line-3");


// reload for databaese

database.addEventListener("click", ()=>{
    setTimeout(() => {
        location.reload();
    }, 1000);

});


const mediaQuery ='(max-width: 700px)';
const mediaQueryList = window.matchMedia(mediaQuery);

mediaQueryList.addEventListener('change', event => {
    console.log(window.innerWidth);
    if(event.matches){
        navmenu.style.display = "none";
        hamburgermenu.style.display = "inline";
        line2.classList.remove("hideline-2");
        line1.classList.remove("rotateline1");
        line3.classList.remove("rotateline3");
    }else{

        hamburgermenu.style.display = "none";
        navmenu.style.display = "inline-flex";
        navmenu.classList.remove("nav-menu-over");
    }
});

window.addEventListener("load",()=>{
    console.log(window.innerWidth);
    if(window.innerWidth < 600){
        navmenu.style.display="none";
        hamburgermenu.style.display = "inline";
    }else if(window.innerWidth > 601){
        navmenu.style.display = "inline-flex";
        hamburgermenu.style.display = "none";
    }
});


hamburgermenu.addEventListener("click", () =>{
    console.log("ddd");
    if(hamburgermenu.classList.contains("isOpen")){
        line2.classList.remove("hideline-2");
        line1.classList.remove("rotateline1");
        line3.classList.remove("rotateline3");
        hamburgermenu.classList.remove("isOpen");
        navmenu.classList.remove("nav-menu-over");
        navmenu.style.display="none";
        navbar.style.opacity="1";
        for(let i = 0; i < navlink.length; i++ ){
            navlink[i].classList.remove("nav-margin");
        }


    }else{
        line2.classList.add("hideline-2");
        line1.classList.add("rotateline1");
        line3.classList.add("rotateline3");
        navmenu.classList.toggle("nav-menu-over");
        navmenu.style.display="inline";
        navbar.style.opacity="0.9";
        for(let i = 0; i < navlink.length; i++ ){
            navlink[i].classList.add("nav-margin");
        }

        hamburgermenu.classList.add('isOpen');
    }
});
