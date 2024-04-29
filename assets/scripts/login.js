document.querySelector('.submit').addEventListener('click', ()=>{

    const form = document.getElementById("form");
    
   // form.action = "../../server/signin.php";
    form.submit();

    let show = document.querySelector(".bx-show");
    let hide = document.querySelector(".bxs-hide");
    let pass = document.querySelector(".password");

   

    document.querySelector('.bx-show').addEventListener('click', ()=>{
        show.style.display = "none";
        hide.style.display = "block";
        pass.type = "text";
    })
    
    document.querySelector('.bxs-hide').addEventListener('click', ()=>{
        hide.style.display = "none";
        show.style.display = "block";
        pass.type = "password";
    })
    

});