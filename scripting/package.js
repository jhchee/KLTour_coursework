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
    $("body").css("overflow", "auto");
  });
  $("#with-meal").click(function() {
    $("#overlay-food").show();
    $("food-form").show();
    $("body").css("overflow", "hidden");
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
  if (nbchecked == 0) {
    alert("Must select time");
  } else {
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function() {
      x.className = x.className.replace("show", "");
    }, 3000);
  }
}

function emptyfood() {
  var i = document.getElementsByClassName("pl-ns-value");
  var counter = 0;
  for(var j=0; j<i.length; j++){
    if(i[j].value>0){
      counter=1;
    }
  }
  if(counter==0){
    document.getElementById("without-meal").checked = true;
  }
}


