let searchForm = document.querySelector('.search-form-container');
document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
}

let fadeindiv = document.querySelector(".alert");



function goToLogin(){
    window.location.href="login.php";
}
function goToSignup(){
    window.location.href="register.php";
}

function goToForgot(){
    window.location.href="forgot_password.php";
}

function goToCart(){
    window.location.href="cart.php";
}

function goToIndex(){
    window.location.href="index.php?#popular";
}


function goToIndexS(){
    window.location.href="index.php";
}

function goToTerms(){
    window.location.href="terms_and_condition.php";
}



function wakeFade(){
    if(fadeindiv.style.display == "none"){
        
        fadeindiv.style.display = "block";
    }else{
        fadeindiv.style.display = "none";
    }
}



window.onscroll = () =>{
    navbar.classList.remove('active');
}

document.querySelector('.home').onmousemove = (e) =>{

    let x = (window.innerWidth - e.pageX * 2) / 90;
    let y = (window.innerHeight - e.pageY * 2) / 90;

    document.querySelector('.home .home-parallax-img').style.transform = `translateX(${y}px) translateY(${x}px)`;
}

document.querySelector('.home').onmouseleave = () =>{

    document.querySelector('.home .home-parallax-img').style.transform = `translateX(0px) translateY(0px)`;
}   