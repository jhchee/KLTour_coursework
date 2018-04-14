function createlist(order_link, package_name) {
    // create paragaph
    var temp_link = document.createElement("a");
    temp_link.href = order_link; //"http://test.com"
    temp_link.target = '_blank';
    temp_link.innerHTML = package_name; //"package1withmeal"
    temp_link.title = "click for more details";

    var para = document.createElement("p");
    para.appendChild(temp_link);

    var attacher = document.getElementById("list-of-item");
    para.appendChild(attacher);
    

    if(document.getElementById("cart-empty")!==null) {
        var i = document.getElementById("cart-empty");
        i.remove();
    }
}
