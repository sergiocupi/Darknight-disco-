<script>

function confirmacion(){
  var respuesta = confirm ();
  if(respuesta == true){
    return true
  }else{
    return false;
  }

}

</script>
<div>
      <table class="table">
        <tr>
            <th>Datos</th>
            <th>Descripcion</th>
       </tr>
        <tr>
            <td>Fecha de evento:</td>
            <td>25/032/2043</td>
       </tr>
        <tr>
            <td>Horario</td>
            <td>8:00PM-5:00AM</td>
        </tr>
        <tr>
            <td>Id reserva </td>
            <td>54547</td>
        </tr>
        <tr>
            <td>Costo de entrada</td>
            <td>5000</td>
        </tr>
        <tr>
            <td>Ubicacion</td>
            <td>Chia</td>         
        </tr>
        <tr>
            <td>Descripcion</td>
            <td>Concierto sorpresa</td>
       </tr>     

    </table>
    </div>
      
    </div>

    <center><h1 class="h101">Califica tu experiencia </h1></center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
<div>

  <div class="rating">
    <a href="home.php?pg=203"><button class="boton" onclick="return confirm ('estas seguro de la Calificacion?')">enviar</button></a>
    <input type="radio" name="clr1" style="--c:#ff9933">
    <input type="radio" name="clr1" style="--c:#ff9933">
    <input type="radio" name="clr1" style="--c:#ff9933">
    <input type="radio" name="clr1" style="--c:#ff9933">
    <input type="radio" name="clr1" style="--c:#ff9933">
    <div class="form-floating">
      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
      <label for="floatingTextarea">comentario :</label>
    </div>
  </div>

  </div>