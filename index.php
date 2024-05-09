<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/a2dd6045c4.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <?php
    $pg = isset($_GET["pg"]) ? $_GET["pg"]:NULL;
    
    if($pg=="001") //usuario
        echo '<link rel="stylesheet" href="css/index.css">';
    if($pg=="004") // codigo olvide mi contraseña
        echo '<link rel="stylesheet" href="css/codigo_contr.css">';
    if($pg=="005") //crear contraseña
        echo '<link rel="stylesheet" href="css/contrasena.css">';
    if($pg=="006") // registro usuario
        echo '<link rel="stylesheet" href="css/registrar.css">';
    if($pg=="007") //registro discoteca
        echo '<link rel="stylesheet" href="css/regis_disc.css">';
    if($pg=="067") //Pregunta si registrar usuario o discoteca
        echo '<link rel="stylesheet" href="css/regis_u-d.css">';
    if($pg=="008") //codigo registro
        echo '<link rel="stylesheet" href="css/codigo.css">';
    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
</head>

<body>
    <section>
        <div class="contenedor">
            <div class="formulario">

            <?php
            
            $pg = isset($_GET["pg"]) ? $_GET["pg"]:NULL;
            
            if(!$pg)
                echo '
                <form action="#">
                    <h2>Iniciar Sesion</h2>

                    <div class="input-contenedor">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="pas1" id="pass1">
                        <label for="pass1">Email</label>
                    </div>

                    <div class="input-contenedor">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="pas2" id="pass2">
                        <label for="pass2">Contraseña</label>
                    </div>

                    
                    <input type="button" value="Acceder" class="boton01" onclick="validar();">
                </form>

                <div>
                    <div class="olvidar">
                        <label for="#">
                            <a href="index.php?pg=004">Olvidé mi contraseña</a>
                        </label>
                    </div>

                    <div class="registrar">
                        <p><a href="index.php?pg=067">Crear una cuenta</a></p>
                    </div>
                </div>';
            if($pg=="004") // codigo olvide mi contraseña
                require_once("views/codigo_contr.php");
            if($pg=="005") //crear contraseña
                require_once("views/contrasena.php");
            if($pg=="006") // registro usuario
                require_once("views/registrar.php");
            if($pg=="007") //registro discoteca
                require_once("views/registrar_disc.php");
            if($pg=="067") //Pregunta si registrar usuario o discoteca
                require_once("views/regis_u-d.php");
            if($pg=="008") //codigo registro
                require_once("views/codigo.php");
            ?>
            </div>
        </div>
    </section>
</body>

</html>
<script src="js/validacion.js"></script>