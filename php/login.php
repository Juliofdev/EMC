<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet"> 
    <title>Login</title>
</head>
<body>
    
    <div class="container">
        <div class="nav">
            <div>
                <button class="nav_login">
                    <img src="../assets/img/login.svg" alt="">
                </button>
                
            </div>
            <div>
                <button class="nav_register">
                    <a href="registro.php">
                        <img src="../assets/img/register.svg" alt="">
                    </a>
                    
                </button>
            </div>
        </div>
        <form action="" class="form">
            <div><h1>Vamos a comenzar</h1></div>

            <div class="labelimputs">
                
                <div>
                    <div class="form_usuario">
                        <img src="../assets/img/persona.svg" alt="">
                        <input type="text" name="usuario" placeholder="Usuario" required>
                    </div>
                    
                </div>
                <div>
                    <div class="form_clave">
                        <img src="../assets/img/candado.svg" alt="">
                        <input type="password" name="clave" placeholder="Clave" required>
                    </div>
                </div>
            </div>
            <div class="form_recordar">
                <label>
                    <input type="checkbox" name="acuerdos" id="terminos">
                    Recordar en este Equipo
                </label>
            </div>
                
                
            <div class="form_boton">
                <button class="boton">
                    <a href="modo.php">Iniciar Sesion</a>
                </button>
                <a href="recuperar_correo.php" class="rec">Recuperar Usuario o clave</a>
            </div>
        </form>
    </div>
</body>
</html>