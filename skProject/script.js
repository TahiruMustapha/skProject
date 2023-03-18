let navBar = document.querySelector(".header .navBar");
const menuItem = document.getElementById("menu-btn");
const closeItem = document.getElementById("closed-navBar");
menuItem.onclick = ()=>{
    navBar.classList.add('active');
}
closeItem.onclick = ()=>{
    navBar.classList.remove('active');
}
let loginBtn = document.getElementById("loginBtn");
let regiterBtn = document.getElementById("regiterBtn");
let loginForm = document.querySelector('.loginForm');
let registerForm = document.querySelector('.registerForm');
regiterBtn.onclick =()=>{
    regiterBtn.classList.add('active');
    loginBtn.classList.remove('active');

    loginForm.classList.remove('active');
    registerForm.classList.add('active');
};
loginBtn.onclick =()=>{
    regiterBtn.classList.remove('active');
    loginBtn.classList.add('active');

    loginForm.classList.add('active');
    registerForm.classList.remove('active');
};
let accountForm = document.querySelector(".account-form");
const accountBtn = document.getElementById("account-btn");
const closeForm = document.getElementById("closeForm");
accountBtn.onclick = ()=>{
    accountForm.classList.add('active');
}
closeForm.onclick = ()=>{
    accountForm.classList.remove('active');
}
var swiper = new Swiper(".homeSlider", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    loop:true,
    grabCursor:true,
  });
var swiper = new Swiper(".home-courses-slider", {
   
    loop:true,
    grabCursor:true,
    spaceBetween: 20,
    breakpoints: {
        0: {
          slidesPerView: 1,
          
        },
        768: {
          slidesPerView: 2,
          
        },
        991: {
          slidesPerView: 3,
          
        },
      },
  });
  var swiper = new Swiper(".review-slider", {
    loop:true,
    grabCursor:true,
    spaceBetween: 20,
    breakpoints: {
        0: {
          slidesPerView: 1,
          
        },
        768: {
          slidesPerView: 2,
          
        },
        991: {
          slidesPerView: 3,
          
        },
      },
  });

  var swiper = new Swiper(".logo-slider", {
    loop:true,
    grabCursor:true,
    spaceBetween: 20,
    breakpoints: {
        0: {
          slidesPerView: 1,
          
        },
        450: {
          slidesPerView: 2,
          
        },
        768: {
          slidesPerView: 3,
          
        },
        991: {
          slidesPerView: 4,
          
        },
        1200: {
          slidesPerView: 5,
          
        },
      },
  });
let acc =  document.querySelectorAll(".faq .acc-container .acc");
acc.forEach(acco=>{
  acco.onclick = ()=>{
    acc.forEach(dion=> dion.classList.remove("active"));
    acco.classList.toggle("active");
  };
});

document.querySelector(".load-more .btn").onclick = ()=>{
  document.querySelectorAll(".courses .box-container .hide").forEach(show=>{
    show.style.display = "block";
  });
  document.querySelector(".load-more .btn").style.display = "none";
};