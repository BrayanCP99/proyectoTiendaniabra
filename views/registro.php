y<!DOCTYPE html>
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
    
    <section id="cont-login" class="container-fluid">
        <div class="row">
            <div class="col-lg-6" id="cont-info">
                <img src="../img/resizer.jpg" class="w-100" alt="">
                
            </div>
            <div class="col-lg-6 text-center" id="cont-form">
                <a href="../index.php">LOGO</a>
                <h2>REGISTRARSE</h2>
                <p>Por favor complete el formulario para registrar en el sistema </p>
                <form class="registro" action= "../model/insertarUe.php" method="POST">
                    <div class="row">

                        <div class="mb-3 col-md-6">
                            <label for="identificacion" class="form-label">Identificación:</label>
                            <input type="number" class="form-control" id="identificacion" name="identificacion" >
                            
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="tipoDoc" class="form-label">Tipo Documento</label>
                            <select class="form-select" id="tipo_doc" name="tipo_doc">
                                <option selected>Seleccione...</option>
                                <option value="CC">CC</option>
                                <option value="TI">TI</option>
                                <option value="CE">CE</option>
                              </select>
                            
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="nombres" class="form-label">Nombres</label>
                            <input type="text" class="form-control" id="nombres" name="nombres">
                            
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="apellidos" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos">
                                     
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                            
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="number" class="form-control" id="telefono" name="telefono">
                            
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="clave" class="form-label">Clave</label>
                            <input type="text" class="form-control" id="clave" name="clave">
                            
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="rol" class="form-label">Rol</label>
                            <select class="form-select" name="rol">
                                <option selected>Seleccione...</option>
                                <option value="Comprador">Comprador</option>
                                <option value="Vendedor">Vendedor</option>
                                <option value="Otro">Otro</option>
                              </select>
                            
                        </div>
                    </div>
                   
                    <div class="cont-botones">
                        <button type="submit" class="btn btn-primary">REGISTRARSE</button>
                        <a class="btn btn-info" href="login.php">INGRESAR</a>
                    </div>
                    
                  </form>

            </div>

           
        </div>
    </section>
    






    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="js/functions.js"></script>
</body>
</html>