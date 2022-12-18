// const myform = document.getElementById("signupform");
console.log("registervalidation.js is working");
const myform = document.getElementById("signupform");
myform.onsubmit = formValidation;

function formValidation(event){
    var isValid = true;
    // isValid = false;
    
    if(myform.username.value.length < 6){
        showerr(myform.username, "username should contain at least 6 characters");
        isValid = false;
    } else if(myform.username.value != myform.username.value.replace(/[^a-zA-Z0-9]/g, "")){
        removeErr(myform.username);
        showerr(myform.username, "username shouldn't contain invalid characters");
        isValid = false;
    } else {
        removeErr(myform.username);
    }
    if(myform.password.value.length == 0 || myform.password.value != myform.confirm_password.value){
        showerr(myform.password, "passwords don't match");
        isValid = false;
    } else if(myform.password.value != myform.password.value.replace(/[^a-zA-Z0-9]/g, "")){
        removeErr(myform.password);
        showerr(myform.password, "password shouldn't contain invalid characters");
        isValid = false;
    } else if(myform.password.value == myform.password.value.toLowerCase() || myform.password.value == myform.password.value.toUpperCase() || myform.password.value == myform.password.value.replace(/[0-9]/g, '')){
        removeErr(myform.password);
        showerr(myform.password, "your password should contain numbers and uppercase, lowercase letters");
        isValid = false;
    } else if(myform.password.length < 6){
        removeErr(myform.password);
        showerr(myform.password, "Your password should contain at least 6 characters");
        isValid = false;
    } else {
        removeErr(myform.password);
    }
    
    return isValid;
}

function showerr(a, b){
    var parent = a.parentNode;
    var elemRect = a.getBoundingClientRect();
    
    if(parent.getElementsByClassName("error")[0] != undefined){
        return false; 
    }
    
    var p = document.createElement("div");
    p.innerHTML = b;
    p.setAttribute("class", "error");

    p.style.color = "red";
    p.style.padding = "2px 2px";

    parent.appendChild(p);
}
function removeErr(a){
    var parent = a.parentNode;
    var b = parent.getElementsByClassName("error");
    if(b.length > 0){
        parent.removeChild(b[0]);
    }
}