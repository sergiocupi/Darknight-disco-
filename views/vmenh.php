<!-- Usuario -->
<?php
if($pg==201 || $pg==202 || $pg==012 || $pg==203 || $pg==2031 || $pg==204 || $pg==205 || $pg==206 || $pg==207 || $pg==2071){
    echo '
        <div class="cont-opc">
            <div class="cuadrogrande"><br><br><br>   
                <div class="co1">
                    <a href="home.php?pg=202"><button class="uno"><i class="fa-solid fa-house-chimney"></i><h2>INICIO</h2></button></a>
                    <a href="home.php?pg=203"><button class="dos"><i class="fa-solid fa-clipboard-list"></i><h2>RESERVAS</h2></button></a>
                </div>
                 <div class="co2">
                    <a href="home.php?pg=204"><button class="tres"><i class="fa-solid fa-moon"></i><h2>NOSOTROS</h2></button></a>
                    <a href="home.php?pg=205"><button class="cuatro"><i class="fa-solid fa-people-arrows"></i><h2>SERVICIOS</h2></button></a> 
                </div>
                <div class="co3">
                    <a href="home.php?pg=206"><button class="cinco"><i class="fa-solid fa-phone-volume"></i><h2>CONTACTO</h2></button></a>
                    <a href="home.php?pg=207"><button class="seis"><i class="fa-regular fa-user"></i><h2>PERFIL</h2></button></a> 
                </div>

                <div class="cerrarsesions">
                    <a href="index.php"><FONT COLOR="black"><p>CERRAR SESIÓN</p></a>
                </div>

            </div> 
        </div>
    ';
}
?>

<!-- Discoteca -->
<?php
if($pg==101 || $pg==102 || $pg==1021 || $pg==1022 || $pg==103 || $pg==104 || $pg==105 || $pg==106 || $pg==107){
    echo '
        <div class="d1-info">
            <div class="ul">
                <div class="con-lis">
                    <div class="li"><a href="home.php?pg=102"><img class="d1__nav-img" src="img/ico-ae.png" alt="estrella">Administrar Eventos</a></div>
                    <div class="li"><a href="home.php?pg=103"><img class="d1__nav-img" src="img/ico-cr.png" alt="personas">Consultar Reservas</a></div>
                </div>
                <div class="con-lis">
                    <div class="li"><a href="home.php?pg=104"><img class="d1__nav-img" src="img/ico-pd.png" alt="">Perfil Discoteca</a></div>
                    <div class="li"><a href=""><img class="d1__nav-img" src="img/ico-n.png" alt="">Nosotros</a></div>
                </div>
                <div class="con-lis">
                    <div class="li"><a href="home.php?pg=106"><img class="d1__nav-img" src="img/ico-s.png" alt="">Servicios</a></div>
                    <div class="li"><a href=""><img class="d1__nav-img" src="img/ico-c.png" alt="">Contacto</a></div>
                </div class="con-lis">
                <div class="con-logout">
                    <a href="index.php" class="logout">Cerrar sesión</a>
                </div>
            </div>
        </div>
    ';
}
?>

<!-- Administrador -->
<?php
if($pg==301 || $pg==302 || $pg==303 || $pg==304 || $pg==3041 || $pg==305 || $pg==3051){
    echo '
        <header><img class="logopro" src="img/logodd.png" alt="logo"><h1>Bienvenido "Admin"</h1><div class="lineas"></div></header>
                            
        <div class="cont">
            <div class="co1">
                <a href="home.php?pg=302"><button class="uno"><i class="bi bi-people-fill"></i> <br> <h5>Administrar usuario</h5></button></a>
                <a href="home.php?pg=303"><button class="dos"><i class="bi bi-music-note-beamed"></i> <br><h5>Administrar discotecas</h5></button></a>
            </div>
            <div class="co2">
                <a href="home.php?pg=304"><button class="tres"><i class="bi bi-person-circle"></i><h5>usuario Administrador</h5></button></a>
                <a href="home.php?pg=305"><button class="cuatro"><i class="bi bi-calendar-event"></i><h5>Administrar eventos</h5></button></a> 
            </div>
            <div class="co3">
                <button class="cinco"><i class="bi bi-sliders"></i><h5>configuración</h5></button>
            </div>
        </div>
        <center><div class="cerrarsesions">
            <a href="index.php"><FONT COLOR="black"><p>CERRAR SESIÓN</p></a>
        </div></center>
    ';
}
?>