<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proyectoamor</title>
     <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    
    
</head>
<body>
    <section id="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 bg-dark sidebar">
                <a href="#">LOGO</a>
                <h3>BRAYAN CASTRO</h3>
                <h4>Administrador</h4>

                <ul>
                    <a href="registrarUserAdmin.php">REGISTRAR USUARIOS</a>
                    <a href="verUsersAdmin.php">VER USUARIOS</a>
                    <a href="registrarProductAdmi.php">REGISTRAR PRODUCTOS</a>
                    <a href="verProductsAdmin.php">VER PRODUCTOS</a>
                </ul>

            </div>
            <div class="col-10 content">
                <h2>PRODUCTO REGISTRADO - ADMINISTRADOR</h2>
                <p>Por favor seleccione los productos que desee editar.</p>
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">Código Producto</th>
                        <th scope="col">Nombre Producto</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Descripcón</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Proveedor</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>

                      </tr>
                    </thead >
                    <tbody>
                        <tr>
                            <td>123456789</td>
                            <td>limpia alfombras</td>
                            <td>limpieza</td>
                            <td>Sirve para poder tener una alfombra mas limpia y con buenos olores</td>
                            <td>$13.000</td>
                            <td>Fulanitodetal</td>
                            <td>6</td>
                            <td>Disponible</td>
                            <td><a class="btn btn-success" href="#">Editar</a></td>
                            <td><a class="btn btn-danger" href="#">Eliminar</a></td>
                        </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    </section>
    
    






    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="js/functions.js"></script>
</body>
</html>