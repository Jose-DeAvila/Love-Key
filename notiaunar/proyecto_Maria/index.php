<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma virtual comfenalco</title>
    <?php include "ext.php"; ?>
</head>
<body>
    <script>
        let rel = <?= $_GET['reg'] ?>;
        let init = <?= $_GET['init'] ?>;
        if(rel==1){
            swal("No te pudiste registrar correctamente","Vuelve a la página de registro.", "error");
        }else if(rel==2){
            swal("Registrado correctamente", "Tu proceso de registro fue exitoso. Ahora inicia sesión", "success");
        }if (init==1){
            swal("Error al iniciar sesión", "Revisa los datos introducidos y vuelve a intentarlo.", "error");
        }
    </script>
    <div class="container">
        <div class="logo">
            <img src="img/comfenalco.png" alt="">
        </div>
        <div class="formulario">
            <form method="post" action="php/iniciar.php">
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Correo electrónico">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                    <a href="#" class="form-text text-muted forgot">¿Olvidaste tu contraseña?</a>
                </div>
                <div class="botones">
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                    <a href="registro.php" class="btn btn-primary">Registrarse</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>