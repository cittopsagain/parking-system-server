$(document).ready(function() {
   
    function validateLogin() {
        var username = $('username').val().length;
        var password = $('password').val().length;

        if (username == 0 || password == 0) {
            alert("Please enter username and or password.");
            return false;
        }

        return true;
    }

});
