function change(element) {
    var a = element.innerHTML;
    switch (a) {
        case "Touch":
            document.getElementById("minimg").src = "img/minimg1.jpg";
            document.getElementById("paragraph").innerHTML = "Touch is thought to be the first sense that humans develop, according to the Stanford Encyclopedia of Philosophy. Touch consists of several distinct sensations communicated to the brain through specialised neurones in the skin. Pressure, temperature, light touch, vibration, pain and other sensations are all part of the touch sense and are all attributed to different receptors in the skin.";
        case "Sight":
            document.getElementById("minimg").src = "img/sight.jpg";
            document.getElementById("paragraph").innerHTML = "Sight, or perceiving things through the eyes, is a complex process. First, light reflects an object to the eye. The transparent outer layer of the eye called the cornea bends the light that passes through the opening of the pupil. The iris(which is the coloured part of the eye) works like the shutter of a camera, retracting to shut out light or opening wider to let in more light.";
        case "Taste":
            document.getElementById("minimg").src = "img/taste.jpg";
            document.getElementById("paragraph").innerHTML = "The gustatory sense is usually broken down into the perception of four different tastes: salty, sweet, sour and bitter. There is also a fifth taste, defined as umami or savoury. There may be many other flavours that have not yet been discovered.Also, spicy is not a taste.";
        case "Smell":
            document.getElementById("minimg").src = "img/smell.jpg";
            document.getElementById("paragraph").innerHTML = "Humans may be able to smell over 1 trillion scents, according to researchers. They do this with the olfactory cleft, which is found on the roof of the nasal cavity, next to the “smelling” part of the brain, the olfactory bulb and fossa.Nerve endings in the olfactory cleft transmit smells to the brain, according to the American Rhinologic Society.";
        case "Hearing":
            document.getElementById("minimg").src = "img/hearing.jpg";
            document.getElementById("paragraph").innerHTML = "This sense works via the complex labyrinth that is the human ear.Sound is funnelled through the external ear and piped into the external auditory canal.Then, sound waves reach the tympanic membrane, or eardrum.This is a thin sheet of connective tissue that vibrates when sound waves strike it.";
    }
}
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
