function cart() {
    var shoppingCart = document.getElementById("shoppingCartDropDown");

    if (shoppingCart.style.display == "none" || shoppingCart.style.display == "")
        shoppingCart.style.display = "block";
    else
        shoppingCart.style.display = "none";
       
}
