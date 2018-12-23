
function emailver() {
    var email = document.getElementById("Email").value;
    if (email.length > 0
        && (email.match(/.+?\@.+/g) || []).length !== 1) {
        document.getElementById("emailver").innerHTML = "Enter a valid email";
        document.getElementById("emailver").style.color = "#990000";
    } else {
        document.getElementById("emailver").innerHTML = "A valid email";
        document.getElementById("emailver").style.color = "#003300";
    }
}

function emailconf() {
    var email = document.getElementById("Email").value;
    var EmailConf = document.getElementById("EmailConf").value;
    if (email !== EmailConf) {
        document.getElementById("emailconf").innerHTML = "Enter a valid email";
        document.getElementById("emailconf").style.color = "#990000";
    } else {
        document.getElementById("emailconf").innerHTML = "A valid email";
        document.getElementById("emailconf").style.color = "#003300";
    }
}

function Passwordver() {
    var Password = document.getElementById("Password").value;
    if (Password.length > 0
        && (Password.match(/.+?\@.+/g) || []).length !== 1) {
        document.getElementById("Passwordver").innerHTML = "Enter a valid email";
        document.getElementById("Passwordver").style.color = "#990000";
    } else {
        document.getElementById("Passwordver").innerHTML = "A valid email";
        document.getElementById("Passwordver").style.color = "#003300";
    }
}

function Passwordind() {
    var Password = document.getElementById("Password").value;
    var Passwordconf = document.getElementById("Passwordind").value;
    if (Password !== Passwordconf) {
        document.getElementById("Passwordind").innerHTML = "Enter a valid email";
        document.getElementById("Passwordind").style.color = "#990000";
    } else {
        document.getElementById("Passwordind").innerHTML = "A valid email";
        document.getElementById("Passwordind").style.color = "#003300";
    }
}