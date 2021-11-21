<!DOCTYPE html>
<html>
    <head lang="es">
        <meta charset="UTF-8"/>
        <title>MUSIC.fm</title>
        <meta name="viewport" content="width=device-width initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="css/album.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/funcions.js"></script>
    </head>

    <body>
        <header id="Intro">

        <div id="Account" style="grid-area: account" onclick="LogIn2(1)">
                <a href="#Account">
                    <span class="material-icons">account_circle</span>
                </a>
            </div>

            <div class="LoginContainer" id="Log">
                <form action="" method="post">
                    <div id="correu">
                        <label for="correu">Dirección de e-mail</label><br>
                        <input type="email" id="correu" name="Correu" placeholder="email@example.com"><br>
                    </div>
                    <div id="password">
                        <label for="contraseña">Contraseña</label><br>
                        <input type="password" id="contraseña" name="Contraseña" placeholder="Contraseña...">
                    </div>
                    <div id="Submit">
                        <input type="submit" value="Inicia sesión">
                        <a onclick="LogIn2(2)"><p>Registrarme</p></a>
                    </div>
                </form>
            </div>

            <div class="LoginContainer" id="Reg">
                <form action="controladors/registre.php" method="post">
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
                </form>
            </div>
            

            <div id="IntroName" style="grid-area: name">
                <h1>MUSIC.fm</h1>
            </div>

            <div id="ShoppingBag" style="grid-area: shoppingBag">
                <a href="#ShoppingBag">
                    <span class="material-icons">shopping_cart</span>
                </a>
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
            <div id="Info">
                <p><?php echo $descripcio ?></p>
                <ul id = caracteristiques>
                    <li>Artista: <?php echo $artista ?></li>
                    <li>Estilo: <?php echo $estil ?></li>
                    <li>Fecha de publicación: <?php echo $data_publicacio ?></li>
                    <li>Sello: <?php echo $segell ?></li>
                </ul>
            </div>

            <section id="Cesta">
                <div id="Opciones">
                    <div style="grid-area: Vinilo">
                        <p style="grid-column: 1/2; grid-row: 1/2">Vinilo</p>
                        <p style="grid-column: 2/3; grid-row: 1/2"><?php echo $preu_vinil ?>€</p>
                    </div>
                    <div style="grid-area: CD">
                        <p style="grid-column: 1/2; grid-row: 2/3">CD</p>
                        <p style="grid-column: 2/3; grid-row: 2/3"><?php echo $preu_cd ?>€</p>
                    </div>
                    <div style="grid-area: mp3">
                        <p style="grid-column: 1/2; grid-row: 3/4">mp3</p>
                        <p style="grid-column: 2/3; grid-row: 3/4"><?php echo $preu_mp3 ?>€</p>
                    </div>
                </div>

                <div id="Comprar">
                    <p>Comprar</p>
                </div>
            </section>
        </section>
    </body>
</html>