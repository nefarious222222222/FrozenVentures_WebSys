document.querySelector('.cart').addEventListener('click', ()=>{
    window.location.href = "pages/cart.php";
})

document.querySelector('.store').addEventListener('click', ()=>{
    window.location.href = "pages/shop.php";
})

document.querySelector('.login1').addEventListener('click', ()=>{
    window.location.href = "pages/sign/sign-in.php";
})

document.querySelector('.signup1').addEventListener('click', ()=>{
    window.location.href = "pages/sign/sign-up.php";
})

document.querySelectorAll('.buy-button').forEach(button => {
    button.addEventListener('click', () => {
        window.location.href = "pages/processes/order.php";
    });
});