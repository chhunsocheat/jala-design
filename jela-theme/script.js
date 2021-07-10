const mainMenu = document.querySelector('.mainMenu');
const closeMenu = document.querySelector('.closeMenu');
const openMenu = document.querySelector('.openMenu');
const navbar = document.querySelector('.nav-fixed');
//when the position of Y axis is larger than 100, 
//we add a new class else we remove them
window.onscroll = () => {
  if (window.scrollY > 100) {
    navbar.classList.add('nav-active');
  } else {
    navbar.classList.remove('nav-active');
  }
};


openMenu.addEventListener('click', ()=> {
    mainMenu.style.display = 'flex';
    mainMenu.style.top = '0';
  });
closeMenu.addEventListener('click', ()=>{
  mainMenu.style.top = '-100%';
    
});

