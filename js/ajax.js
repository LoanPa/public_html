// Detall de producte amb AJAX
var album_id;
var opcio_id = -1;

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

function seleccio(type)
{
    var opcio0 = document.getElementById("opcion0");
    var opcio1 = document.getElementById("opcion1");
    var opcio2 = document.getElementById("opcion2");

    if (type == 0)
        var opcioSeleccio = opcio0;
    if (type == 1)
        var opcioSeleccio = opcio1;
    if (type == 2)
        var opcioSeleccio = opcio2;

    if ((opcioSeleccio.style.border == "") ||(opcioSeleccio.style.border == "1px solid rgba(0, 0, 0, 0.2)"))
    {
        opcio0.style.border = "1px solid rgba(0, 0, 0, 0.2)";
        opcio1.style.border = "1px solid rgba(0, 0, 0, 0.2)";
        opcio2.style.border = "1px solid rgba(0, 0, 0, 0.2)";

        opcioSeleccio.style.border = "1px solid rgba(0, 0, 0, 0.8)";
    }
    else
    {
        opcio0.style.border = "1px solid rgba(0, 0, 0, 0.2)";
        opcio1.style.border = "1px solid rgba(0, 0, 0, 0.2)";
        opcio2.style.border = "1px solid rgba(0, 0, 0, 0.2)";
    }

    if (opcio_id == type)
        opcio_id = -1;
    else
        opcio_id = type; 
}

function comprar()
{
    if (opcio_id != -1)
    {
        var url = "SHA_DE_CANVIAR_.php?album_id=" + album_id + "&opcio_id=" + opcio_id;
        //Aqui anira on carreguem el php en la cistella i en la bbdd
    }
    else
        alert("No se ha seleccionado ninguna opción");
}