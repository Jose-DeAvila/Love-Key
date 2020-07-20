<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma Virtual Comfenalco ~ Registro</title>
    <?php include "ext.php";?>
</head>
<body>
    <div class="contenedor">
        <div class="logo">
            <img src="img/comfenalco.png" alt="" width="20%">
        </div>
        <div class="formulario">
            <form action="php/register.php" method="post">
                <div class="form-group">
                    <label for="identificacion">Identificación: </label>
                    <input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="Identificación">
                </div>
                <div class="form-group">
                    <label for="primerApellido">Primer Apellido: </label>
                    <input type="text" class="form-control" id="primerApellido" name="primerApellido" placeholder="Primer Apellido">
                </div>
                <div class="form-group">
                    <label for="segundoApellido">Segundo Apellido: </label>
                    <input type="text" class="form-control" id="segundoApellido" name="segundoApellido" placeholder="Segundo Apellido">
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección: </label>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono: </label>
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico: </label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico">
                </div>
                <div class="form-group">
                    <label for="contrasenia">Contraseña: </label>
                    <input type="password" class="form-control" id="contrasenia" name="contrasenia" placeholder="Contraseña">
                </div>
                <div class="botones-reg">
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                    <a href="index.php" class="btn btn-primary">Volver</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>