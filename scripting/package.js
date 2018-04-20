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

jQuery(
  '<div class="quantity-nav"><div class="quantity-button quantity-up"><i class="fa fa-angle-up"></i></div><div class="quantity-button quantity-down"><i class="fa fa-angle-down"></i></div></div>'
).insertAfter(".quantity input");
jQuery(".quantity").each(function() {
  var spinner = jQuery(this),
    input = spinner.find('input[type="number"]'),
    btnUp = spinner.find(".quantity-up"),
    btnDown = spinner.find(".quantity-down"),
    min = input.attr("min"),
    max = input.attr("max");

  btnUp.click(function() {
    var oldValue = parseFloat(input.val());
    if (oldValue >= max) {
      var newVal = oldValue;
    } else {
      var newVal = oldValue + 1;
    }
    spinner.find("input").val(newVal);
    spinner.find("input").trigger("change");
  });

  btnDown.click(function() {
    var oldValue = parseFloat(input.val());
    if (oldValue <= min) {
      var newVal = oldValue;
    } else {
      var newVal = oldValue - 1;
    }
    spinner.find("input").val(newVal);
    spinner.find("input").trigger("change");
  });
});
