//login form validation
function lgnbtn() {
    var lgn_email = document.getElementById("email").value;
    var lgn_password = document.getElementById("password").value;

    if (lgn_email === "") {
        alert("Email is required");
        return false;
    }
    
    if (lgn_password === "") {
        alert("Password is required");
        return false;
    }

    document.getElementById("loginform").submit();
}

// signup validation

function signupbtn(){
    var s_name = document.getElementById("name").value;
    var s_mail = document.getElementById("email").value;
    var s_password = document.getElementById("password").value;
    var s_contact = document.getElementById("contact").value;
    var s_privacy = document.getElementById("privacy").checked;
    var s_terms = document.getElementById("terms").checked;


    if(s_name === ""){
        alert("Full name is required");
        return false
    }

    if(s_mail === ""){
        alert("Email is required");
        return false
    }

    if(s_password === ""){
        alert("Password is required");
        return false
    }

    if(s_contact === ""){
        alert("Contact is required");
        return false
    }

    if (!s_privacy) {
        alert("You must accept the privacy policy");
        return false;
    }

    if (!s_terms) {
        alert("You must accept the terms and conditions");
        return false;
    }

    document.getElementById("signupform").submit();

}

//user form

function userform(){
    var us_name = document.getElementById("name").value;
    var us_age = document.getElementById("age").value;
    var us_mail = document.getElementById("email").value;
    var us_contact = document.getElementById("contact").value;

    if(us_name === ""){
        alert("Full Name is required");
        return false;
    }
        
    if(us_age === ""){
        alert("Age is required");
        return false;
    }

    if(us_mail === ""){
        alert("Email is required");
        return false;
    }

    if(us_contact === ""){
        alert("Contact is required");
        return false;
    }

    document.getElementById("userform").submit();

}