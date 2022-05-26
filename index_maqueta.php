<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Tienda Camisetas</title>
</head>

<body>
    <div id="container">
        <!-- cabecera -->
        <header id="header">
            <div id="logo">
                <img src="assets/img/camiseta.png" alt="Logo">
                <a href="index.php">Tienda de Camisetas</a>
            </div>
        </header>
        <!-- menu -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Categoria 1</a>
                </li>
                <li>
                    <a href="#">Categoria 2</a>
                </li>
                <li>
                    <a href="#">Categoria 3</a>
                </li>
                <li>
                    <a href="#">Categoria 4</a>
                </li>
                <li>
                    <a href="#">Categoria 5</a>
                </li>
            </ul>
        </nav>
        <!-- barra lateral -->
        <div id="content">
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <h3>Ingresa a la Web</h3>
                    <form action="#" method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Email">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Password">
                        <input type="submit" value="Login">
                    </form>
                    <ul>
                        <li><a href="#">Mis Pedidos</a></li>
                        <li><a href="#">Gestionar Pedidos</a></li>
                        <li><a href="#">Gestionar Categorias</a></li>
                    </ul>
                </div>
            </aside>

            <!-- contenido centrarl -->
            <div id="central">
                <h1>Productos Destacados</h1>
                <div class="product">
                    <img src="assets/img/camiseta.png">
                    <h2>Camiseta Azul Ancha</h2>
                    <p>$30 Dolares</p>
                    <a href="#" class="button">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/camiseta.png">
                    <h2>Camiseta Azul Ancha</h2>
                    <p>$30 Dolares</p>
                    <a href="#" class="button">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/camiseta.png">
                    <h2>Camiseta Azul Ancha</h2>
                    <p>$30 Dolares</p>
                    <a href="#" class="button">Comprar</a>
                </div>
            </div>
        </div>

        <!-- pie de pagina -->
        <footer id="footer">
            <p>Desarrollado por David Martinez &copy; <?= date('Y') ?></p>
        </footer>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>