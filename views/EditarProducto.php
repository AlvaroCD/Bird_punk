<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Editar Producto</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="Styles/stylesAnadirProducto.css" />
    </head>
    <body>
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <h1>Editar Producto</h1>
                </div>
            </div>
            <div class="row mt-3 p-2 rectangle">
                <h2 class="col-11 m-3 mb-5 ">Datos del producto</h2>
                <div class="col-5 ml-4">
                    <!-- Obtención de datos de producto existente -->
                    <form method="POST" action="./Index.php">
                        <!-- NombreProducto | No se puede editar -->
                        <input class="m-2 form-control float-right" type="text" id="name" name="name" placeholder="SustituirNombreProducto" disabled></input>
                        <text class="m-2 mt-4 lightText">$</text>
                        <!-- PrecioProducto | Se puede editar -->
                        <input class="m-2 form-control w-75 float-right" type="number" id="price" name="price" placeholder="SustituirPrecioProducto" required></input>
                        <div class="m-2">
                            <text class="lightText mr-5">Genero</text>
                            <!-- GeneroProducto | No se puede editar | Si está checked no se debe deshabilitar y viceversa -->
                            <label class="m-2 mr-5 radio_inline"><input type="radio" id="gender" name="gender" value="0" checked><text class="darkText"> Mujer</text></label>
                            <label class="m-2 mr-5 radio_inline"><input type="radio" id="gender" name="gender" value="1" disabled><text class="darkText"> Hombre</text></label>
                            <label class="m-2 radio_inline"><input type="radio" id="gender" name="gender" value="2" disabled><text class="darkText"> Otro</text></label>
                        </div>
                        <text class="m-2 lightText">Talla</text>
                        <!-- TallaProducto | No se puede editar -->
                        <select class="mb-5 p-1 w-75 float-right selectText" name="size" id="size" disabled>
                            <option value="1" selected>SustituirTallaProducto</option>
                        </select>
                </div>
                <div class="col-3">
                        <!-- Imagen | No se puede editar -->
                        <img class="img mt-2 ml-5" src="Imagenes/tenis1.jpg" alt="">
                </div>
                <div class="col-3">
                        <!-- Stock | Se puede editar -->
                        <text class="m-2 lightText">En stock</text>
                        <input class="m-2 form-control" type="number" id="stock" name="stock" placeholder="SustituirCantidadStock" required></input>
                        <!-- Submit -->
                        <input class="m-2 mt-5 btn btn-dark btn-outline-light float-right" type="submit" value="Actualizar producto">
                    </form>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>