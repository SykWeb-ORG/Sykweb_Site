document.querySelectorAll('.navbar a').forEach(link =>{
   link.onmouseenter = () =>{
      document.querySelector('.navbar-img img').src = link.getAttribute('data-src');
   };
   link.onmouseleave= () =>{
      document.querySelector('.navbar-img img').src = 'images/nav-img-1.jpg';
   };
});

let navbar = document.querySelector('.navbar');
let navbarImg = document.querySelector('.navbar-img');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   navbarImg.classList.toggle('active');
};

window.onscroll = () =>{
   navbar.classList.remove('active');
   navbarImg.classList.remove('active');
};