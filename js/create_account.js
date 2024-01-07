window.onclick = function(){
    OtherOption();
}

window.onkeyup = function(){
    VerifyPass();
}

function OtherOption(){
    var other = document.getElementById("city").value;

    var button = document.getElementById("other city");
    if(other == "others"){
        button.removeAttribute("disabled")
    }
    else{
        button.setAttribute("disabled",true)
        button.value = null
    }
}

function VerifyPass(){
    var pass = document.getElementById("password").value;
    var repass = document.getElementById("repassword").value;
    var print = document.getElementById("verifypass");

    if(repass == ""){
        print.innerHTML = " "
        document.getElementById("submit button").setAttribute("disabled",true)
    }
    else if(pass != repass){
        print.style.color = "red"
        print.innerHTML = "&#10006;" 
        document.getElementById("submit button").setAttribute("disabled",true)
    }
    else if(pass == repass){
        print.style.color = "green"
        print.innerHTML = "&#10004;"
        document.getElementById("submit button").removeAttribute("disabled")
    }
}