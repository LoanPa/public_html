function cart() {
    var shoppingCart = document.getElementById("shoppingCartDropDown");

    if (shoppingCart.style.display == "none" || shoppingCart.style.display == "")
    {
        var url = "controladors/llistaResumCistella.php?"
        $("#shoppingCartDropDown").load(url);
        shoppingCart.style.display = "block";
    }
    else
        shoppingCart.style.display = "none";
       
}
