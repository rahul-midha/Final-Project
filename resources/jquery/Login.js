/// <reference path="jquery-1.10.2.js" />



$(document).ready(function () {

    $("#loginForm").submit(function (e) {

        var email = $('#Email')[0].value;

        if (email==null||!ValidateEmail(email)) {
            $("#emailmessage")[0].innerText = "*Input Email is not valid.";
            return false;
        }
        var password = $('#Password')[0].value;
        if (password == null || password == '')
        {
            $("#passwordmessage")[0].innerText = "*Password cannnot be empty.";
            return false;
        }

        var letter = /[a-zA-Z]/;
        var number = /[0-9]/;
        if (!letter.test(password))
        {
            $("#passwordmessage")[0].innerText = "*Password must contain small and capital letters.";
            return false;
        }
        if (!number.test(password)) {
            $("#passwordmessage")[0].innerText = "*Password must contain small and capital letters.";
            return false;
        }
       
        if (password.length < 6) {
            $("#passwordmessage")[0].innerText = "*Password must be atleast of 6 characters.";
            return false;
        }

       
        return true;
    });


});


function ValidateEmail(inputEmail) {
    var regex = /^([a-zA-Z0-9])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,})+$/;
    var result = regex.test(inputEmail);
    return result;
}