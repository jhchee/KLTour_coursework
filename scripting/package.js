window.addEventListener("scroll", notsticky);
function notsticky() {
  if (window.pageYOffset >= 10) {
    var i = document.getElementsByClassName("product-detail");
    for (var a = 0; a < i.length; a += 1) {
      i[a].style.display = "none";
    }
  } else {
    var j = document.getElementsByClassName("product-detail");
    for (var a = 0; a < j.length; j += 1) {
      j[a].style.display = "block";
    }
  }
}

$(document).ready(function(){
  $("#close-food").click(function(){
      $("#overlay-food").hide();
  });
  $("#with-meal").click(function(){
      $("#overlay-food").show();
      $("food-form").show();
  });
});

function showSnackbar() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
  // document.getElementByName("package_time").required = true;
  // var time = document.getElementByName("package_time")
  // var i = document.getElementByName("package_time");
  // alert(i);
  var radios = document.getElementsByName("package_time");
    for( i = 0; i < radios.length; i++ ) {
        if( radios[i].checked ) {
            return radios[i].value;
        }
    }
    return null;

}