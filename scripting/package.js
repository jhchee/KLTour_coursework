window.addEventListener("scroll", notsticky);
function notsticky() {
  if (window.pageYOffset >= 500) {
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

$(document).ready(function() {
  $("#close-food").click(function() {
    $("#overlay-food").hide();
  });
  $("#with-meal").click(function() {
    $("#overlay-food").show();
    $("food-form").show();
  });
});

function showSnackbar() {
  var radios = document.getElementsByName("package_time");
  nbchecked = 0;
  for (i = 0; i < radios.length; i++) {
    if (radios[i].checked) {
      nbchecked++;
    }
  }
  
  if (nbchecked==0){
    alert("Must select time");
  }
  else{
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function() {
      x.className = x.className.replace("show", "");
    }, 3000);
  }
}