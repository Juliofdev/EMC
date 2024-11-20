<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet"> 

    <title>EMC</title>
</head>
<body>
    
    <header>
        <ul>
            <li>Productos</li>
            <li>Construir mi PC</li>
            <li>Contactanos</li>
            <li class="bar">Pre - Ordenar ahora</li>
        </ul>
    </header>
    <section>
        <div class="3dpc">
            <model-viewer
            id="3dpc"
            src="assets/img/pc_gamer_animation.glb"
            alt="modelo pc"
            camera-controls
            auto-rotate
            auto-rotate-speed="20 rpm"
            disable-pan
            disable-zoom
        ></model-viewer>
        </div>
        <div class="titulo">
            <h1>Tu PC a <br>
                Medida
            </h1>
            <h4>Diseñamos y ensamblamos tu pc ideal para ti</h4>
            <button onclick="window.location.href='php/registro.php'">Ensamblar mi PC ahora</button>

        </div>
    </section>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
    
</body>
</html>