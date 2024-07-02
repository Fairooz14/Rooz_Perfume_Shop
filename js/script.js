// alert("Welcome to the Shop!\n Happy Shopping ❤️");
// Navbar, cart and login toggle
let closer = document.querySelector('#closer');

closer.onclick = () => {
    closer.style.display = 'none';
    navbar.classList.remove('active');
    cart.classList.remove('active');
    loginForm.classList.remove('active');
    regForm.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () => {
    closer.style.display = "block";
    navbar.classList.toggle('active');
}
let cart = document.querySelector('.shopping-cart');

document.querySelector('#cart-btn').onclick = () => {
    closer.style.display = "block";
    cart.classList.toggle('active');
}

let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () => {
    closer.style.display = "block";
    loginForm.classList.toggle('active');
}

let regForm = document.querySelector('.reg-form');

document.querySelector('#login-btn').onclick = () => {
    closer.style.display = "block";
    loginForm.classList.toggle('active');
}

let searchForm = document.querySelector('.header .search-form');

document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
}
window.onscroll = () => {
    searchForm.classList.remove('active');
}
//slides of bannaer
let slides = document.querySelectorAll('.home .slides-container .slide');
let index = 0;

function next() {
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
}

function prev() {
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');
}
//product search
function search() {
    var searchText = document.getElementById('search-box').value.toLowerCase();
    var productBoxes = document.querySelectorAll('.products .box');

    productBoxes.forEach(function (box) {
        var productName = box.querySelector('.content h3').innerText.toLowerCase();

        if (productName.includes(searchText)) {
            box.style.display = 'block';
        } else {
            box.style.display = 'none';
        }
    });
}
//
//log in and reg
document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.querySelector('.login-form');
    const regForm = document.querySelector('.reg-form');
    const createNowLink = document.querySelector('.login-form a[href="#regClicked"]');
    const loginNowLink = document.querySelector('.reg-form a[href="#loginClicked"]');

    createNowLink.addEventListener('click', function (e) {
        e.preventDefault();
        loginForm.classList.remove('active');
        regForm.classList.add('active');
    });

    loginNowLink.addEventListener('click', function (e) {
        e.preventDefault();
        regForm.classList.remove('active');
        loginForm.classList.add('active');
    });
});




