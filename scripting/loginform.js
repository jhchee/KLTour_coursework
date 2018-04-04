// if session_[login_user] is not exists hide shopping cart and user
function hide_user_cart() {
    var i = document.getElementsByClassName('dropdown');
    for (var a=0;a<i.length;a+=1){
        i[a].style.display = 'none';
    }
    var j = document.getElementsByClassName('cart');
    for (var a=0;a<j.length;a+=1){
        j[a].style.display = 'none';
    }
    var k = document.getElementsByClassName('login-signup');
    for (var a=0;a<k.length;a+=1){
        k[a].style.display = 'block';
    }
}

// if session_[login_user] is actually present hide login-signup button
function hide_login_signup() {
    var i = document.getElementsByClassName('dropdown');
    for (var a=0;a<i.length;a+=1){
        i[a].style.display = 'block';
    }
    var j = document.getElementsByClassName('cart');
    for (var a=0;a<j.length;a+=1){
        j[a].style.display = 'block';
    }
    var k = document.getElementsByClassName('login-signup');
    for (var a=0;a<k.length;a+=1){
        k[a].style.display = 'none';
    }
}

// display signup/login form in overlay style
function display_form() {
    document.getElementById('login').style.display = "block";
    document.getElementById("overlay").style.display = "block";
}
// stop displaying signup/login form after click the form's surrounding
function close_form() {
    document.getElementById("overlay").style.display = "none";
}

//Switch between login and singup form
$(function () {
    $('#login-form-link').click(function (e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function (e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
});

//switch login button to name of the user
$(document).ready(function () {
    $('.button').click(function () {
        var clickBtnValue = $(this).val();
        var ajaxurl = 'ajax.php',
            data = { 'action': clickBtnValue };
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            alert("action performed successfully");
        });
    });

});


function promptAgain() {

    alert("Username or Password is incorrect");

}
