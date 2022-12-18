
function big(element) {
    element.style.fontSize = "22px";
    element.style.color = "#2a2539";
}
function normal(element) {
    element.style.fontSize = "20px";
    element.style.color = "black";
}

function popup() {
    var btn = document.getElementById("login").innerHTML;
    if (btn == "Log In") {
        document.querySelector(".signup").style.display = "none";
        document.querySelector(".popup").style.display = "flex";
        $(".popup").animate({ opacity: '1' }, "slow");
        document.body.style.overflow = "hidden";
    }
    else {
        logout();
    }
}
function closep() {
    $(".popup").animate({ opacity: '0' }, "slow");
    document.body.style.margin = "0";
    document.body.style.height = "100%";
    document.body.style.overflow = "scroll";
    document.getElementById("usname").value = "";
    document.getElementById("logpass").value = "";
    document.querySelector(".popup").style.display = "none";
}
function signup() {
    document.querySelector(".popup").style.display = "none";
    $(".popup").animate({ opacity: '0' }, "slow");
    document.querySelector(".signup").style.display = "flex";
    $(".signup").animate({ opacity: '1' }, "slow");
}
function verify() {
    var pw = document.getElementById("pass").value;
    var cpw = document.getElementById("cpass").value;
    if (pw != cpw) {
        alert("Passwords don't match!");
    }
}
