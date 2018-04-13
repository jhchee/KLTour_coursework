// create paragaph
var temp_link = document.createElement("a");
temp_link.href = order_link; //"http://test.com"
temp_link.target = '_blank';
temp_link.innerHTML = package_name; //"package1withmeal"
temp_link.title = "click for more details";


var para = document.createElement("p");
var node = document.createTextNode("This is new.");
para.appendChild(node);

document.getElementsByClassName("cart-empty").remove();