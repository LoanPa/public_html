<!DOCTYPE html>
<html>
    <head lang="es">
        <meta charset="UTF-8"/>
        <title>MUSIC.fm</title>
        <meta name="viewport" content="width=device-width initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="css/portada.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/funcions.js"></script>
    </head>

    <body>

        <header id="Intro">
            <div id="Account">
                <a href="#Account" onclick="LogIn()">
                    <span class="material-icons">account_circle</span>
                </a>
            </div>

            <div id="ShoppingBag">
                <a href="#ShoppingBag">
                    <span class="material-icons">shopping_cart</span>
                </a>
            </div>

            <div id="IntroName">
                <h1>MUSIC.fm</h1>
                <h4>Las mejores canciones en nuestra web</h4>
            </div>

            <div id="LoginContainer">
                <form action="login.php" method="post">
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
                        <p onclick="Registre()">Registrarme</p>
                    </div>
                </form>
            </div>
    
        </header>

        <section id="Cuerpo">
            <nav id="Categorias">
                 
                <?php require __DIR__.'/controladors/llistaCategories.php'; ?>
                
            </nav>

            <nav id="Albumes">
            
                <?php require __DIR__.'/controladors/llistaAlbums.php'; ?>

            </nav>
        </section>


        <footer>

        </footer>

    </body>
</html>