function displayform() {
    var i = document.getElementById('login');
    i.style.display = "block";
    document.getElementById("overlay").style.display = "block";
}

function off() {
    document.getElementById("overlay").style.display = "none";
}

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
