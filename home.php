<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php //Usuario
    $pg = isset($_GET["pg"]) ? $_GET["pg"]:NULL;
    if($pg==201 || $pg==202 || $pg==6012 || $pg==203 || $pg==2031 || $pg==204 || $pg==205 || $pg==206 || $pg==207 || $pg==2071){
        $pg = isset($_GET["pg"]) ? $_GET["pg"]:NULL;
        
        if($pg==203 || $pg==2031 || $pg==207 || $pg==2071){
            echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">';
            echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />';
            echo '<link rel="stylesheet" href="css/calificacion.css">';
            echo '<link rel="stylesheet" href="css/editar.css">';
            echo '<link rel="stylesheet" href="css/perfil.css">';
            echo '<link rel="stylesheet" href="css/stilo.css">';
        }else{
            echo '<link rel="stylesheet" href="css/style_usu.css">';
            echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />';
        }
    }

    //Administrador
    if($pg==301 || $pg==302 || $pg==303 || $pg==304 || $pg==3041 || $pg==305 || $pg==3051){
        echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">';
        echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">';
        echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">';
        $pg = isset($_GET["pg"]) ? $_GET["pg"]:NULL;
        if($pg==301){
            echo '<link rel="stylesheet" href="css/stylea1.css">';
        }elseif($pg==3051){
            echo '<link rel="stylesheet" href="css/cobr.css">';
        }else{
            echo '<link rel="stylesheet" href="css/estilo.css">';
        }
    }

    //Discotecas
    if($pg==101 || $pg==102 || $pg==1021 || $pg==1022 || $pg==103 || $pg==104 || $pg==105 || $pg==106 || $pg==107){
        echo '<link rel="stylesheet" type="text/css" href="css/normalize.css">';
        echo '<link rel="stylesheet" type="text/css" href="css/style_disc.css">';
    }
    ?>

    <title>Darknight Disco</title>
</head>
<body>
<?php //Usuario

        if($pg==201 || $pg==202 || $pg==6012 || $pg==203 || $pg==2031 || $pg==204 || $pg==205 || $pg==206 || $pg==207 || $pg==2071){
            echo "<div class='container'>
                <div>
                    <header><img class='logopro' src='img/logodd.png' alt='logo'>
                        <h2 class='tituloo'>";
        
                            $pg = isset($_GET["pg"]) ? $_GET["pg"]:NULL;
                            
                            if($pg=="201")
                                echo "Darknight Disco";
                            if($pg=="202")
                                echo "INICIO";
                            if($pg=="6012")
                                echo "INFORMACIÓN";
                            if($pg=="203") //luis
                                echo "RESERVAS";
                            if($pg=="2031") //luis
                                echo "CALIFICAR";
                            if($pg=="204")
                                echo "NOSOTROS";
                            if($pg=="205")
                                echo "SERVICIOS";
                            if($pg=="206")
                                echo "CONTACTOS";
                            if($pg=="207") //luis
                                echo "PERFIL";
                            if($pg=="2071") //luis
                                echo "EDITAR PERFIL";
                            echo "</h2>
                            <div class='lineas'>";
                                if($pg!=201){
                                    echo "<a href='home.php?pg=201'><img class='treslineas' src='img/treslineas.png'></a>";
                                }
                            echo "</div>
                    </header>
                </div>
                <center><div class='cuadro2'>";
                    $pg = isset($_GET["pg"]) ? $_GET["pg"]:NULL;
                    
                    if($pg=="201")
                        require_once("views/vmenh.php");
                    if($pg=="202")
                        require_once("views/inicio.php");
                    if($pg=="6012")
                        require_once("views/infoeventos.php");
                    if($pg=="203") //luis
                        require_once("views/RESERVAS.php");
                    if($pg=="2031") //luis
                        require_once("views/CALIFICACION.php");
                    if($pg=="204")
                        require_once("views/NOSOTROS.php");
                    if($pg=="205")
                        require_once("views/SERVICIOS.php");
                    if($pg=="206")
                        require_once("views/CONTACTOS.php");
                    if($pg=="207") //luis
                        require_once("views/PERFIL.php");
                    if($pg=="2071") //luis
                        require_once("views/Editar.php");
                echo "</div></center>
            </div>";
        }

    //Administrador
    ?>
    <?php
if($pg==301 || $pg==302 || $pg==303 || $pg==304 || $pg==3041 || $pg==305 || $pg==3051){
    $pg = isset($_GET["pg"]) ? $_GET["pg"] : NULL;

    if($pg==302 || $pg==303 || $pg==304 || $pg==3041 || $pg==305){
        require_once("views/nav_admin.php");
    }
    
    if($pg=="301")
        require_once("views/vmenh.php");
    if($pg=="302")
        require_once("views/adminuser.php");
    if($pg=="303")
        require_once("views/admindisc.php");
    if($pg=="304")
        require_once("views/usuarioadmin.php");
    if($pg=="3041")
        require_once("views/actuaper.php");
    if($pg=="305")
        require_once("views/adminevn.php");
    if($pg=="3051")
        require_once("views/cob_comis.php");
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<?php
}
?>

    <?php

    //Discotecas
    if($pg==101 || $pg==102 || $pg==1021 || $pg==1022 || $pg==103 || $pg==104 || $pg==105 || $pg==106 || $pg==107){
        echo '<div class="container-discoteca">
                <header class="header1"><img class="d1__logo" src="img/logo.png" alt="logo"><h1>';
                    $pg = isset($_GET["pg"]) ? $_GET["pg"]:NULL;
                    if($pg=="101")
                        echo "Home Discotecas";
                    if($pg=="102")
                        echo "Administrar Eventos";
                    if($pg=="1021")
                        echo "Editar Evento";
                    if($pg=="1022")
                        echo "Crear Evento";
                    if($pg=="103")
                        echo "Consultar Reservas";
                    if($pg=="104")
                        echo "Perfil Discoteca";
                    if($pg=="105")
                        echo "Nosotros";
                    if($pg=="106")
                        echo "Servicios";
                    if($pg=="107")
                        echo "Contacto";
        echo '</h1>
                <div class="container__back">';
                    if($pg!=101){
                        echo '<a href="home.php?pg=101"><img class="header__back" src="img/back.png"></a>';
                    }
        echo '</div>
            </header>
                    
    
            <div class="d1__con">';
            
                    $pg = isset($_GET["pg"]) ? $_GET["pg"]:NULL;
                    
                    if($pg=="101")
                        require_once("views/vmenh.php");
                    if($pg=="102")
                        require_once("views/adev.php");
                    if($pg=="1021")
                        require_once("views/adev1.php");
                    if($pg=="1022")
                        require_once("views/adev2.php");
                    if($pg=="103")
                        require_once("views/core.php");
                    if($pg=="104")
                        require_once("views/pdis.php");
                    if($pg=="105")
                        require_once("");
                    if($pg=="106")
                        require_once("views/serv.php");
                    if($pg=="107")
                        require_once("");
        echo '</div>
        </div>
        <script src="js/scriptsave1.js"></script>
        <script src="js/scriptsave2.js"></script>';
    }
    
    ?>
</body>
</html>