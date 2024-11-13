// js for login and register form

    var LoginForm= document.getElementById("loginForm");
    var LoginForm= document.getElementById("registerForm");
    var Indicator= document.getElementById("indicator");

    function register(){
        registerForm.style.transform = "translateX(0px)";
        loginForm.style.transform = "translateX(-400px)";
        indicator.style.transform = "translateX(100px)";
    }
    function login(){
        registerForm.style.transform = "translateX(500px)";
        loginForm.style.transform = "translateX(400px)";
        indicator.style.transform = "translateX(0px)";
    }

    function closeAlert() {
        setTimeout(function() {
          document.getElementById("alertSuccess").style.display = "none";
        }, 0);
        
    }
    