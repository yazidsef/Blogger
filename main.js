window.addEventListener('scroll',()=>{
    document.querySelector('nav').classList.toggle('window-scrolled',window.scrollY>0)
})


var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    centeredSlides: true,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
        599: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1023: {
            slidesPerView: 3,
            spaceBetween: 60,
        }
    }
  });

const nav = document.querySelector('nav');
const openNavbtn = document.querySelector('#nav_toggle-open');
const closeNavbtn = document.querySelector('#nav_toggle-close');

const openNav = () =>{
    nav.style.display = 'flex';
    openNavbtn.style.display = 'none';
    closeNavbtn.style.display = 'block';
}

const closeNav = () =>{
    nav.style.display = 'none';
    openNavbtn.style.display = 'block';
    closeNavbtn.style.display = 'none';
}

openNavbtn.addEventListener('click',openNav);
closeNavbtn.addEventListener('click',closeNav);