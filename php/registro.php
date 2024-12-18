<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/seccion.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet"> 
    <title>Registro</title>
</head>
<body>
    
    <div class="container">
        <div class="nav">
            <div>
                <button class="nav_login">
                    <a href="login.php">
                        <img src="../assets/img/login.svg" alt="">
                    </a>
                </button>
                
            </div>
            <div>
                <button class="nav_register">
                    <img src="../assets/img/register.svg" alt="">
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
                    <div class="form_clave">
                        <img src="../assets/img/candado.svg" alt="">
                        <input type="password" name="clave" placeholder="Clave" required>
                    </div>
                    <div class="form_correo">
                        <img src="../assets/img/correo.svg" alt="">
                        <input type="email" name="correo" placeholder="Correo" required>
                    </div>
                </div>
                <div>
                    <div class="form_nombre">
                        <img src="../assets/img/nombre.svg" alt="">
                        <input type="text" name="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="form_fecha">
                        <img src="../assets/img/pastel.svg" alt="">
                        <input type="text" name="fecha" placeholder="Fecha" required>
                    </div>
                    <div class="form_pais">
                        <img src="../assets/img/pais.svg" alt="">
                        <input type="text" name="pais" placeholder="Pais" required>
                    </div>
                </div>
            </div>
            <div class="form_acuerdos">
                <label>
                    <input type="checkbox" name="acuerdos" id="terminos">
                    Acepto Terminos y Condiciones
                </label>
                
                <label>
                    <input type="checkbox" name="acuerdos" id="correos">
                    Quiero recibir por correo noticias encuestas y ofertaqs especiales
                </label>
            </div>
                
                
            <div class="form__boton">
                <button class="boton">
                    <a href="login.php">
                        Registrame
                    </a>
                </button>
            </div>
        </form>
    </div>
</body>
</html>