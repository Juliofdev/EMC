<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/recuperar_correo.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet"> 
    <title>recuperar correo</title>
</head>
<body>
    
    <div class="container">
        <form action="" class="form">
            <div><h1>¿Olvidaste tus datos?</h1></div>

            <div class="labelimputs">
                
                <div class="codigo">
                    <div class="form_correo">
                        <img src="../assets/img/correo.svg" alt="">
                        <input type="email" name="correo" placeholder="Correo" required>
                    </div>
                    <div>
                        <button class="boton">
                            Enviar codigo
                        </button>
                    </div>
                </div>
                <div>
                    
                    <div class="form_fecha">
                        <img src="../assets/img/llave.svg" alt="">
                        <input type="text" name="fecha" placeholder="Codigo de confirmacion" required>
                    </div>
                </div>
            </div>
                
                
            <div class="form_boton">
                <button class="boton">
                    <a href="recuperar_clave.php">
                        Recuperar Cuenta
                    </a>
                </button>
                <a href="login.php" class="rec">Iniciar Sesion</a>
            </div>
        </form>
    </div>
</body>
</html>