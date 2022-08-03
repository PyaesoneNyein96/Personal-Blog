
const codeSign = document.querySelector('.code-sign');
const code1 = document.querySelector('.code-1');
const code2 = document.querySelector('.code-2');
const code3 = document.querySelector('.code-3');
const code4 = document.querySelector('.code-4');
const codeMidele = document.querySelector('.code-middle');

const btnFake = document.querySelector('.btn-fake');
const searchBack = document.querySelector('.search');

const searchInput = document.querySelector('.search-input');

// const index = document.querySelectorAll('.value');

const blogsTab = document.querySelector('.blogsTab');


const skill = document.querySelector('.skill-box');
// console.log(skill);

window.addEventListener('load',()=>{

    code1.classList.add('line-a');
    code2.classList.add('line-b');
    code3.classList.add('line-c');
    code4.classList.add('line-d');
    codeMidele.classList.add('line-e');

});



window.addEventListener('scroll', ()=>{

  if(skill){
    if(window.scrollY >= 200){
        skill.classList.add('skill-back');

       }else{
        skill.classList.remove('skill-back')
       }
  }
});

if(btnFake){
    btnFake.addEventListener('click', ()=>{
        if(btnFake.classList.contains('btn-fake-hide')){
            btnFake.classList.remove('btn-fake-hide');
        }else{

            btnFake.classList.add('btn-fake-hide');
            searchBack.classList.add('search-back');
            console.log('hello my fri');
        }
    });

    searchInput.addEventListener('click', ()=> {
        btnFake.classList.remove('input-hide');
        console.log('hide');
    })
}


//  hightlight = () => {
//     blogsTab.classList.add('blogsHightlight');
//  }





    setInterval(() => {
        setTimeout(() => {
            // console.log('start');
        blogsTab.classList.add('blogsHightlight');
        }, 2000);

        setTimeout(()=>{
            // console.log('clear');
        blogsTab.classList.remove('blogsHightlight');
        },3500)
    }, 3000);





// clearInterval((set) => {
//     blogsTab.classList.remove('blogsHightlight');
//     console.log('end');
// },5000);



// index.forEach(e => {
//     console.log(e);
//     e.addEventListener('click', ()=>{
//         if(e.classList.contains('text-danger')){
//             e.classList.remove('fa-solid','text-danger');
//             // e.location.href="blogs/dislike";
//         }else{
//             e.classList.add('fa-solid','text-danger');
//             // location.href="blogs/like";
//             // console.log(e.location.href);
//         }
//     })
// })





// for(let i = 0; i < index.length; i++){
//     const react = index[i];
//     console.log(react);
//     react.addEventListener('click', ()=> {
//         if(react.classList.contains('text-danger')){
//             react.classList.remove('fa-solid','text-danger');
//         }else{
//             react.classList.add('fa-solid','text-danger');
//         }
//     })
// };



