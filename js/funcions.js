function LogIn() {

    var htmlElmenent = document.getElementById("Log");
    
    if (document.body.scrollWidth > 680)
    {
        if (htmlElmenent.style.display == "none" || htmlElmenent.style.display == "")
        {
            htmlElmenent.style.display = "block";
        }
        else if (htmlElmenent.style.display == "block")
        {
            htmlElmenent.style.display = "none";
        }
    }
    else 
    {
        var cuerpoHTML = document.getElementById("Cuerpo");

        if (htmlElmenent.style.display == "none" || htmlElmenent.style.display == "")
        {          
            cuerpoHTML.style.filter = "blur(10px)"
            cuerpoHTML.style.position = "relative";  
            htmlElmenent.style.zIndex = 1;
            htmlElmenent.style.display = "block";
            htmlElmenent.style.gridColumnStart = "1";
            htmlElmenent.style.gridColumnStart = "2";
            htmlElmenent.style.gridRowStart = "3";
            htmlElmenent.style.gridRowEnd = "4";
            htmlElmenent.style.marginTop = "200px";
        }
        else if (htmlElmenent.style.display == "block")
        {
            htmlElmenent.style.display = "none";
            cuerpoHTML.style.filter = "blur(0px)";
            cuerpoHTML.style.position = "block";
            htmlElmenent.style.marginTop = "0";
        }
    }
}

function LogIn2(type)
{
    var loginHTML = document.getElementById("Log");
    var cuerpoHTML = document.getElementById("Cuerpo");

    if (type == 1)
    {
        if (loginHTML.style.display == "none" || loginHTML.style.display == "")
        {
            cuerpoHTML.style.filter = "blur(10px)";
            loginHTML.style.display = "block";
        }
        else if (loginHTML.style.display == "block")
        {
            loginHTML.style.display = "none";
            cuerpoHTML.style.filter = "blur(0)";
        }
    }
    else if (type == 2)
    {
        let htmlString = `
            <form action="../controladors/registre.php" method="post">
                <div id="Nom">
                    <label for="nom">Nom</label><br>
                    <input type="text" id="nom" name="Nom" placeholder="Nom..."><br>
                </div>
                <di id="correuR">
                    <label for="correu">Dirección de e-mail</label><br>
                    <input type="email" id="correu" name="Correu" placeholder="email@example.com"><br>
                </di>
                <div  id="passwordR">
                    <label for="contraseña">Contraseña</label><br>
                    <input type="password" id="contraseña" name="Contraseña" placeholder="Contraseña...">
                </div>
                <di id="address">
                    <label for="direccion">Dirección</label><br>
                    <input type="text" id="dirrrecion" name="Address" placeholder="Dirección..."><br>
                </di>
                <div id="codiPostal">
                    <label for="codiPostal">Código Postal</label><br>
                    <input type="number" id="codiPostal" name="CodigoPostal" placeholder="Código...">
                </div>
                <div id="Submit">
                    <input type="submit" value="Registrar">
                </div>
            </form>`;

            loginHTML.innerHTML = htmlString;
    }
}


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