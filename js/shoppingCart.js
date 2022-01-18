function cart() {
    var shoppingCart = document.getElementById("shoppingCartDropDown");

    if (shoppingCart.style.display == "none" || shoppingCart.style.display == "")
    {
        var url = "vistes/mostrarResumCistella.php?"
        $("#shoppingCartDropDown").load(url);
        shoppingCart.style.display = "block";
    }
    else
        shoppingCart.style.display = "none";

}