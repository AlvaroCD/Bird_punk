<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar domicilio</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="Styles/IndexStyle.css" />
    <link rel="stylesheet" href="Styles/stylesEditar.css" />
</head>
<body>
    <section id="Nav-bar">
        <div class="navbar border-bottom navbar-expand-md navbar-light navbar-fixed-top">
        </div>
        <nav class="navbar border-bottom navbar-expand-md navbar-light">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item ">
                        <a class="nav-link border-right" href="#">HOMBRES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MUJERES</a>
                    </li>
                </ul>
            </div>
            <div class="navbar w-100 order-2  mx-auto">
                <a href="Index.php"><img src="imagenes/logo.PNG" width="60%" style="margin-left:150px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>
            <!--User/Carrito-->
            <div class="navbar w-100 order-3 ">
                <ul class="navbar-nav mx-auto">
                    <a href="IniciarSesion.php" class="navbar-button">
                        <i class="fa fa-user-circle-o"></i>
                    </a>
                       <a href="carrito.php" class="navbar-button"> <i href class="fa fa-shopping-cart"></i></a>
                 
                </ul>
            </div>
        </nav>
        <div class="navbar navbar-expand-md navbar-light"> </div>

    </section>
    <div>
        <h1>Finalizar la compra - Editar Dirección</h1>
    </div>

    <div class="contenedor1">
            <h2>IDENTIFICACIÓN</h2>
            <hr color=#1C2331 size=1 width= 100%>
            <!-- IMPRESIÓN DEL NOMBRE E EMAIL DEL USUARIO
            <output class="prueba" id="name" for="datos usuario" placeholder="Nombre del usuario"></output>
            <output class="prueba" id="email" for="datos usuario"></output> -->
            <input type="text" class="InfoUsuario" id="name" name="name" placeholder="Nombre del usuario" disabled>
            <input type="email" id="user" class="InfoUsuario" name="email" placeholder="Correo electrónico" disabled>
    </div>

    <div class="contenedor2">
        <h3> DIRECCIÓN DE ENVÍO </h3>
        <hr color=#1C2331 size=1 width= 100%>
        <form method="POST" action="Pago.php">
        <input type="text" id="address" class="fadeIn second" name="address" placeholder="Calle" required>
        <input type="number" id="numberExt" class="fadeIn third" name="numberExt" placeholder="No. Exterior" required>
        <input type="number" id="numberInt" class="fadeIn third" name="numberInt" placeholder="No. Interior" >
        <input type="text" id="suburb" class="fadeIn second" name="suburb" placeholder="Colonia" required>
        <input type="number" id="cp" class="fadeIn third" name="cp" placeholder="Código Postal" required>
        <input type="submit" class="fadeIn fourth" value="Regresar al pago">
        </form>
    </div>
    
    <div class="contenedor3">
        <h4>RESUMEN DE LA COMPRA</h4>
        <div class="img">
            <img class="imagen" src="tenis.jpg" alt="tenis">
        </div>

        <div class="Info">
        <p>Nombre del artículo: </p>
        <p>Cantidad:</p>
        <p>Precio: $</p>
        </div>

        <a class="Resumen" href="carrito.php" target="_blank">Volver al carrito</a>
        <p>SUBTOTAL: </p>
        <p>COSTO DE ENVÍO: </p>
        <p>TOTAL: </p>
    </div>

    
</body>
</html>