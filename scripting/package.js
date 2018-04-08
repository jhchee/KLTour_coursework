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
