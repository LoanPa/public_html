// Detall de producte amb AJAX
function DetallProducte(id)
{
    //$(document).ready(function(){
        var url = "recurs_album.php?album_id=" + id;
        $("body").load(url);
    //});
}

function Categoria(id)
{
    //$(document).ready(function() {
        var url = "controladors/llistaAlbumsCategoria.php?id_categoria=" + id;
        $("#Albumes").load(url);
    //});
}