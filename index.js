function validateLoginForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username == "" && password == "") {
        alert("Username and Password fields are empty");
        return false;
    }
    else if (username == "") {
        alert("Username field is empty");
        return false;
    }
    else if (password == "") {
        alert("Password field is empty");
        return false;
    }
    else {
        return true;
    }
}
function validateSignUpForm() {
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (fname == "") {
        alert("First name is Empty");
        return false;
    } else if (lname == "") {
        alert("Last name is Empty");
        return false;
    } else if (username == "") {
        alert("Username is Empty");
        return false;
    } else if (password == "") {
        alert("Password is Empty");
        return false;
    }
}