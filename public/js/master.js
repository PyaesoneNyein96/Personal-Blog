
// const navbar = document.querySelector(".navbar");
const hamburgermenu = document.querySelector(".hamburger-menu");
const navmenu = document.querySelector(".nav-menu");
// const li = document.querySelectorAll(".nav-item");
const database = document.querySelector(".database");

const line1 = document.querySelector(".line-1");
const line2 = document.querySelector(".line-2");
const line3 = document.querySelector(".line-3");


// reload for databaese
if(database){
    database.addEventListener("click", ()=>{
        setTimeout(() => {
            location.reload();
        }, 10);

    });
}



// const mediaQuery ='(max-width: 700px)';
// const mediaQueryList = window.matchMedia(mediaQuery);

// mediaQueryList.addEventListener('change', event => {
//     console.log(window.innerWidth);
//     if(event.matches){

//     }else{


//     }
// });

// window.addEventListener("load",()=>{
//     console.log(window.innerWidth);
//     if(window.innerWidth < 600){
//         navmenu.style.display="none";
//         hamburgermenu.style.display = "inline";
//     }else if(window.innerWidth > 601){
//         navmenu.style.display = "inline-flex";
//         hamburgermenu.style.display = "none";
//     }
// });


hamburgermenu.addEventListener("click", () => {
    // console.log('hey');
    if (hamburgermenu.classList.contains("isOpen"))
    {
        line2.classList.remove("hideline-2");
        line1.classList.remove("rotateline1");
        line3.classList.remove("rotateline3");
        navmenu.classList.remove("menu-over");

        hamburgermenu.classList.remove("isOpen");

    } else {
        line2.classList.add("hideline-2");
        line1.classList.add("rotateline1");
        line3.classList.add("rotateline3");
        navmenu.classList.add("menu-over");

        hamburgermenu.classList.add('isOpen');

        // setTimeout(() => {
        //     navmenu.classList.remove("menu-over");
        //     hamburgermenu.classList.remove('isOpen');
        //     line2.classList.remove("hideline-2");
        // line1.classList.remove("rotateline1");
        // line3.classList.remove("rotateline3");
        // }, 30000);
    }
});

window.addEventListener('load', ()=> {
    console.log(window.innerWidth);
    hamburgermenu.classList.add('come-btn-hbgr');
});




