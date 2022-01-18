<!DOCTYPE html>
<html>
    <head lang="es">
        <meta charset="UTF-8"/>
        <title>MUSIC.fm</title>
        <meta name="viewport" content="width=device-width; initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="css/headerPetit.css"/>
        <link rel="stylesheet" type="text/css" href="css/logreg.css"/>
        <link rel="stylesheet" type="text/css" href="css/detall.css"/>
        <link rel="stylesheet" type="text/css" href="css/shoppingcart.css"/> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/logreg.js"></script>
        <script type="text/javascript" src="js/ajax.js"></script>
    </head>

    <body>
        <header class="HeaderPetit">
            <div id="Account" onclick="login(1)">
                <a href="#Account">
                    <span class="material-icons">account_circle</span>
                </a>
            </div>
            <div id="IntroName">
                <a href="index.php">
                    <h1>MUSIC.fm</h1>
                </a>
            </div>
            <div id="ShoppingBag" onclick="cart()">
                <a href="#ShoppingBag">
                    <span class="material-icons">shopping_cart</span>
                </a>
                <div id="shoppingCartDropDown" class="dropDown">
                    <p>Preu <b><?php /*require __DIR__."/vistes/mostrarPreuCistella.php */echo "n" ;?></b></p>
                    <hr>

                    <p>Quantitat <b>3</b></p>
                    <!--<a href=recurs_cabas.php></a>-->
                    <p>Quantitat <b><?php require __DIR__."/vistes/mostrarQuantitatCistella.php";?></b></p>

                </div>
            </div>
        </header>

        <section id="Cuerpo">
            <div id="Caratula">
                <?php require __DIR__."/controladors/detallAlbum.php";?>
                <img src=<?php echo $foto ?> alt=<?php echo $alt_foto ?>>
            </div>

            <div id="Titulo">
                <h4><?php echo $nom ?></h4>
            </div>

            <div id="Descripcion">
                <p><?php echo $descripcio ?></p>
                <ul>
                    <li>Artista: <?php echo $artista ?></li>
                    <li>Estilo: <?php echo $estil ?></li>
                    <li>Fecha de publicación: <?php echo $data_publicacio ?></li>
                    <li>Sello: <?php echo $segell ?></li>
                </ul>
            </div>

            <div id="Cesta">
                <div id="Opciones" style="grid-row: 1/2">
                    <div id="opcion0" style="grid-row: 1/2">
                        <p style="grid-column: 1/2" onclick="seleccio(0, 1)">Vinilo</p>
                        <p style="grid-column: 2/3" onclick="seleccio(0, 1)"><?php echo $preu_vinil ?>€</p>

                        <div class="Quantitat"style="grid-column: 3/4">
                            <button style="grid-column: 1/2" onclick="seleccio(0, 1)">+</button>
                            <p id="cantidad0" style="grid-column: 2/3">0</p>
                            <button style="grid-column: 3/4" onclick="seleccio(0, -1)">-</button>
                        </div>

                    </div>
                    <div id="opcion1" style="grid-row: 2/3">
                        <p style="grid-column: 1/2" onclick="seleccio(1, 1)">CD</p>
                        <p style="grid-column: 2/3" onclick="seleccio(1, 1)"><?php echo $preu_cd ?>€</p>

                        <div class="Quantitat"style="grid-column: 3/4">
                            <button style="grid-column: 1/2" onclick="seleccio(1, 1)">+</button>
                            <p id="cantidad1" style="grid-column: 2/3">0</p>
                            <button style="grid-column: 3/4" onclick="seleccio(1, -1)">-</button>
                        </div>
                    </div>
                    <div id="opcion2" style="grid-row: 3/4">
                        <p style="grid-column: 1/2" onclick="seleccio(2, 1)">mp3</p>
                        <p style="grid-column: 2/3" onclick="seleccio(2, 1)"><?php echo $preu_mp3 ?>€</p>

                        <div class="Quantitat"style="grid-column: 3/4">
                            <button style="grid-column: 1/2" onclick="seleccio(2, 1)">+</button>
                            <p id="cantidad2" style="grid-column: 2/3">0</p>
                            <button style="grid-column: 3/4" onclick="seleccio(2, -1)">-</button>
                        </div>
                    </div>
                </div>
                <div id="Afegir" style="grid-row: 2/3" onclick="afegir()">
                    <p>Afegir</p>
                </div>
            </div>
        </section>


        <div id="Login">

        </div>

    </body>
</html>