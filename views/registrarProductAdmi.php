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
                <h2>REGISTRO DE PRODUCTOS - ADMINISTRADOR</h2>
                <p>Por favor complete los campos para registrar productos.</p>
                <form class="registro">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="codigoP" class="form-label">Código Producto:</label>
                            <input type="number" class="form-control" id="codigoP" name="codigoP" >
                            
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                            
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="categoria" class="form-label">Categoría</label>
                            <select class="form-select" id="categoria" name="categoria">
                                <option selected>Seleccione...</option>
                                <option value="Categoria 1">Categoria 1</option>
                                <option value="Categoria 2">Categoria 2</option>
                                <option value="Categoria 3">Categoria 3</option>
                              </select>
                            
                        </div>

                        

                        <div class="mb-3 col-md-6">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="2"></textarea>
                                     
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="number" class="form-control" id="precio" name="precio">
                            
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="proveedor" class="form-label">Proveedor</label>
                            <select class="form-select" name="proveedor">
                                <option selected>Seleccione...</option>
                                <option value="Proveedor 1">Proveedor 1</option>
                                <option value="Proveedor 2">Proveedor 2</option>
                                <option value="Proveedor 3">Proveedor 3</option>
                              </select>
                            
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="cantidad" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="cantidad" name="cantidad">
                            
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="estado" class="form-label">Estado</label>
                            <select class="form-select" name="estado">
                                <option selected>Seleccione...</option>
                                <option value="Disponible">Disponible</option>
                                <option value="Agotado 2">Agotado</option>
                            
                        </div>

                        
                    </div>
                   
                    <div class="cont-botones">
                        <button type="submit" class="btn btn-primary">REGISTRARSE</button>
                        
                    </div>
                    
                  </form>
            </div>
        </div>
    </div>
    </section>
    
    






    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="js/functions.js"></script>
</body>
</html>