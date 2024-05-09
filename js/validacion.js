function validar(){
    var p1 = document.getElementById("pass1").value;
    var p2 = document.getElementById("pass2").value;

    if (p1=="usu@gmail.com" && p2=="usu123"){
        alert("Bienvenido Usuario");
        window.location = 'home.php?pg=201';
    }else if (p1=="disc@gmail.com" && p2=="disc123"){
        alert("Bienvenida Discoteca");
        window.location = "home.php?pg=101";
    }else if (p1=="admin@gmail.com" && p2=="admin123"){
        alert("Bienvenido Administrador");
        window.location = "home.php?pg=301";
    }else{
        alert("Los datos son incorrectos");
    }

}