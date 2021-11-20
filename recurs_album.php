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
                <?php //TODO: agafar path i alt BD ?>
                <img src="media/The_Four_Seasons.jpg" alt="The Four Seasons carátula">
            </div>

            <div id="Titulo">
                <?php //TODO: agafar nom BD ?>
                <h4>The Four Seasons</h4>
            </div>
            <div id="Info">
                <?php //TODO: agafar descripcio BD ?>
                <p>Las cuatro estaciones (en italiano: Le quattro stagioni) es un grupo de cuatro conciertos para violín y orquesta (cada uno está dedicado a una estación: La primavera, El verano, El otoño y El invierno) del compositor italiano Antonio Vivaldi.</p>
                <p>Compuestos alrededor del año 1721, fueron publicados por el editor Michel-Charles Le Cène en 1725 en Ámsterdam, junto con otros ocho conciertos para violín, como Il cimento dell'armonia e dell'inventione («Concurso entre Armonía e Invención»), Op. 8. El propio Vivaldi afirmó, en la dedicatoria al conde Morzin, que habían sido compuestas con anterioridad: los diversos manuscritos encontrados presentan algunas diferencias que confirman lo declarado por el autor.</p>
            </div>

            <section id="Cesta">
                <div id="Opciones">
                <?php //TODO: agafar preus BD ?>
                    <div style="grid-area: Vinilo">
                        <p style="grid-column: 1/2; grid-row: 1/2">Vinilo</p>
                        <p style="grid-column: 2/3; grid-row: 1/2">20€</p>
                    </div>
                    <div style="grid-area: CD">
                        <p style="grid-column: 1/2; grid-row: 2/3">CD</p>
                        <p style="grid-column: 2/3; grid-row: 2/3">14€</p>
                    </div>
                    <div style="grid-area: mp3">
                        <p style="grid-column: 1/2; grid-row: 3/4">mp3</p>
                        <p style="grid-column: 2/3; grid-row: 3/4">3€</p>
                    </div>
                </div>

                <div id="Comprar">
                    <p>Comprar</p>
                </div>
            </section>
        </section>
    </body>
</html>