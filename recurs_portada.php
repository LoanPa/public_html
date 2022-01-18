<!DOCTYPE html>
<html>
    <head lang="es">
        <meta charset="UTF-8"/>
        <title>MUSIC.fm</title>
        <meta name="viewport" content="width=device-width; initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="css/general.css"/>
        <link rel="stylesheet" type="text/css" href="css/headerGran.css"/>
        <link rel="stylesheet" type="text/css" href="css/logreg.css"/>
        <link rel="stylesheet" type="text/css" href="css/shoppingcart.css"/>        
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/logreg.js"></script>
        <script type="text/javascript" src="js/ajax.js"></script>
        <script type="text/javascript" src="js/shoppingCart.js"></script>
    </head>

    <body>
        <header class="HeaderGran">
            <div id="Account" onclick="login(1)">
                <a href="#Account">
                    <span class="material-icons">account_circle</span>
                </a>
            </div>
            <div id="IntroName">
                <a href="index.php">
                    <h1>MUSIC.fm</h1>
                </a>
                <h4>Las mejores canciones en nuestra web</h4>
            </div>
            <div id="ShoppingBag" onclick="cart()">
                <a>
                    <span class="material-icons">shopping_cart</span>
                </a>
                <div id="shoppingCartDropDown" class="dropDown">
                    <p>Preu <b><?php /*require __DIR__./"vistes/mostrarPreuCistella.php */echo "n" ;?></b></p>
                    <hr>
                    <p>Quantitat <b><?php require __DIR__."/vistes/mostrarQuantitatCistella.php";/*Aixo no funciona no se per que*/?></b></p>
                </div>
            </div>
        </header>

        <section id="Cuerpo">

            <nav id="Categorias" style="grid-area: cat">

                <?php require __DIR__.'/controladors/llistaCategories.php'; ?>

            </nav>

            <nav id="Albumes" style="grid-area: alb">

                <?php require __DIR__.'/controladors/llistaAlbums.php'; ?>

            </nav>
        </section>

        <div id="Login">
            
        </div>

    </body>
</html>