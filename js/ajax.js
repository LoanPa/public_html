// Detall de producte amb AJAX
var album_id;
var cantidad0 = 0;
var cantidad1 = 0;
var cantidad2 = 0;

function DetallProducte(id)
{
    album_id = id;
    var url = "recurs_album.php?album_id=" + album_id;
    $("body").load(url);
 
}

function Categoria(id)
{
    var url = "controladors/llistaAlbumsCategoria.php?id_categoria=" + id;
    $("#Albumes").load(url);
}

function seleccio(type, operation)
{
    var name1 = "cantidad" + type;
    var name2 = "opcion" + type;
    var cantidad = 0;

    if ((type == 0) && (cantidad0 + operation >= 0))
    {
        cantidad = cantidad0 + operation;
        cantidad0 = cantidad;
    }
    if ((type == 1) && (cantidad1 + operation >= 0))
    {
        cantidad = cantidad1 + operation;
        cantidad1 = cantidad;
    }
    if ((type == 2) && (cantidad2 + operation >= 0))
    {
        cantidad = cantidad2 + operation;
        cantidad2 = cantidad;
    }

    document.getElementById(name1).innerHTML = cantidad;

    if (cantidad > 0 )
        document.getElementById(name2).style.border = "1px solid rgba(0, 0, 0, 0.8)";
    else
        document.getElementById(name2).style.border = "1px solid rgba(0, 0, 0, 0.2)";
}

function afegir()
{
    if (cantidad0 + cantidad1 + cantidad2 == 0)
        alert("No se ha seleccionado ninguna opción");
    else
    {
        var url = "controladors/afegirProducteCistella.php?album_id=" + album_id + "&quantitat_0=" + cantidad0 + "&quantitat_1=" + cantidad1 + "&quantitat_2=" + cantidad2;

        $("#shoppingCartDropDown").load(url);
        alert("Se ha añadido a la cesta");
    }
}

function VaciarCarrito()
{
    document.getElementById("Compra").innerHTML = "";
}