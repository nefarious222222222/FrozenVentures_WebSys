document.querySelector('.submit').addEventListener('click', ()=>{

    const form = document.getElementById("form");
    
    form.action = "../../server/signin.php";
    form.submit();
})