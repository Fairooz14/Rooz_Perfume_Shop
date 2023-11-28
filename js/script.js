// alert("Welcome to the Shop!\n Happy Shopping ❤️");
// Navbar, cart and login toggle
let closer = document.querySelector('#closer');

closer.onclick = () => {
    closer.style.display = 'none';
    navbar.classList.remove('active');
    cart.classList.remove('active');
    loginForm.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () => {
    closer.style.display = "block";
    navbar.classList.toggle('active');
}
let cart = document.querySelector('.shopping-cart');

document.querySelector('#cart-btn').onclick = () =>{
    closer.style.display = "block";
    cart.classList.toggle('active');
}

let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () =>{
    closer.style.display = "block";
    loginForm.classList.toggle('active');
}

let searchForm = document.querySelector('.header .search-form');

document.querySelector('#search-btn').onclick = () =>{
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

//  let products ={
//     data:[{
//         productName: "One Seed",
//         category: "Organic Fragrances",
//         price: "$140.00",
//         image: "product-1.png",
//     },
//     {
//         productName: "Attar Fragrance",
//         category: "Luxuary Fragrances",
//         price: "$250.00",
//         image: "product-2.png",
//     },
//     {
//         productName: "Sandalwood Fragrance",
//         category: "Organic Fragrances",
//         price: "$140.00",
//         image: "product-3.png",
//     },
//     {
//         productName: "Fruity Fragrance",
//         category: "Gift Set Fragrances",
//         price: "$140.00",
//         image: "product-4.png",
//     },
//     {
//         productName: "Lavender Fragrance",
//         category: "Men's Fragrances",
//         price: "$160.00",
//         image: "product-5.png",
//     },
//     {
//         productName: "Rosemary",
//         category: "Women's Fragrances",
//         price: "$160.00",
//         image: "product-6.png",
//     },
//     {
//         productName: "Gentle",
//         category: "Men's Fragrances",
//         price: "$100.00",
//         image: "product-7.png",
//     },
//     {
//         productName: "Spicy",
//         category: "Men's Fragrances",
//         price: "$140.00",
//         image: "product-8.png",
//     },
//     {
//         productName: "Affaction",
//         category: "Women's Fragrances",
//         price: "$140.00",
//         image: "product-9.png",
//     },
//     {
//         productName: "Citrusy Fragrances",
//         category: "Luxuary Fragrances",
//         price: "$210.00",
//         image: "product-10.png",
//     },
//     {
//         productName: "Woody Fragrance",
//         category: "Luxuary Fragrances",
//         price: "$230.00",
//         image: "product-11.png",
//     },
//   ],
// };
// for(let i of products.data){
//     let card = document.createElement("div");
//     card.classList.add("card" ,  "i.category");
//     let imgContainer = document.createElement("div");
//     imgContainer.classList.add("image-container");
//     let image = document.createElement("img");
//     image.setAttribute("src", i.image);
//     imgContainer.appendChild(image);
//     card.appendChild(imgContainer);

//     document.getElementById("products").appendChild(card);
// }



