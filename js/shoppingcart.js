// let productsInCart =[];
// const parentElement = document.querySelector("#buyItems");
// const cartSumPrice = document.querySelector("#sum-prices");
// const products = document.querySelectorAll('.product-under');

// const updateShoppingCartHTML = function(){
//     if(productsInCart > 0){
//         productsInCart.map(product =>{
//             return '

//             '
//         })
//     }
//     else{
//         document.querySelector('.checkout').classList.add('hidden');
//         parentElement.innerHTML = '<h3 class="total">Your Cart is Empty</h3>';
//         cartSumPrice.innerHTML = "";
//     }
// }

// function updateProductsInCart(product){
//     for(let i=0; i<productsInCart.length; i++){
//         if(productsInCart[i].id == product.id){
//             productsInCart[i].count +=1;
//             productsInCart[i].price = productsInCart[i].basePrice * productsInCart[i].count;
//             return;
//         }
//     }
//     productsInCart.push(product);
// }


// products.forEach(product =>{
//     product.addEventListener('click', (e)=>{
//         if(e.target.classList.contains('addToCart')){
//             const productID = (e.target.classList.contains('addToCart'))
//             const productName =  product.querySelector('.productName').innerHTML;
//             const productPrice = product.querySelector('.priceValue').innerHTML;
//             const productImage = product.querySelector('img').src;
//             let productToCart ={
//                 name: productName,
//                 image: productImage,
//                 id: productID,
//                 count: 1,
//                 price: +productPrice,
//                 basePrice: +productPrice
//             }
//             updateProductsInCart(productToCart);
//             updateShoppingCartHTML();
//         }
//     });
// })
//var getCss = document.getElementsByClassName('box');

// function getStyle(itemName, itemPrice) {
//     document.getElementById('item-name').innerText = itemName;
//     document.getElementById('item-price').innerHTML = itemPrice;
// }
let total = 0;

function handleClickBtn(target) {
    //making shopping-cart list--------------->
    var productListConntainer = document.getElementById('shopping-cart');

    // const styleCart = document.getElementsByClassName('shopping-cart');

    const itemName = target.childNodes[5].childNodes[3].innerText;
    //document.getElementById('item-name').innerText = itemName;
    const itemPrice = target.childNodes[5].childNodes[1].innerText;
    //document.getElementById('item-price').innerHTML = itemPrice;



    // console.log(itemName);
    const list = document.createElement('div');
    list.innerHTML = `
    <div class="content">
        <h3>${itemName}</h3>
        <span class="price"> ${itemPrice}</span>
    </div>
    `;

    productListConntainer.appendChild(list);

    //calculating total price---------------------->
    const priceString = target.childNodes[5].childNodes[1].innerText.split(' ')[1];
    // console.log('priceString', priceString);
    // console.log('type priceString', typeof priceString);
    // const itemPrice = target.childNodes[5].childNodes[1].innerText;
    const price = parseFloat(priceString);
    // console.log('price', price);
    // console.log('type', typeof price);
    total = parseFloat(total) + parseFloat(price);
    const priceTotal = total.toFixed(2);
    // console.log('Total Price', priceTotal);

    //console.log('price', price)
    //total-price
    // document.getElementsByClassName('shopping-cart') = itemName;
    document.getElementById('total-price').innerText = priceTotal;
}


// const priceString = target.childNodes[3].childNodes[5].innerText.split(" ")[0];
//     const price = parseFloat(priceString);
//     total = parseFloat(total) + parseFloat(price);
//     const priceTotal = total.toFixed(2);
// Assuming you have JavaScript functions to update the cart
// and calculate the total price. Replace these with your actual functions.

function updateCart() {
    // Implement logic to update the cart based on user interactions
    // For example, appending items to the cart div
}

function calculateTotal() {
    // Implement logic to calculate the total price based on items in the cart
    // For example, summing up the prices of items
}

function checkout() {
    // Assuming you have product information in JavaScript variables
    var productName = document.getElementById('item-name').innerText;
    var productPrice = parseFloat(document.getElementById('item-price').innerText.replace('$', ''));

    // Send an AJAX request to a PHP script to insert the product into the cart table
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert("Product added to cart!");
        }
    };
    xhttp.open("GET", "checkout.php?productName=" + productName + "&productPrice=" + productPrice, true);
    xhttp.send();
}