<!DOCTYPE html>
<?php
  require_once("menu.php");
  session_start();
  if($_SESSION["sesionOk" !=  "si"]){
   header("Location:index.php");
     exit;
  }
?>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="dist/css/bootstrap.css"/>
    <link rel="stylesheet" href="css/principal.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!--JQuery-->
    <script src="js/jquery.js">
    </script>
    <title>Usuarios</title>
</head>
<body>
<h3 id="subti">Registro de videos de accidentes</h3>
<form action="controll/registraVideo.php" method="post">
  <div align="center">
      <h4 id="subti">Descripcion</h4>
      <input type="text" size="40" class="form-control1" name="descripcion" placeholder="Descripcion" required="" id="descripcion">
  </div>
  <div align="center">
      <h4 id="subti">Fecha de Registro</h4>
    <input type="date" class="form-control1" name="fecha" id="fecha">
      <h4 id="subti">Decesos</h4>
      <input type="text" size="40" class="form-control1" name="decesos" placeholder="Decesos" required="" id="decesos">
      <h4 id="subti">Lesionados</h4>
      <input type="text" size="40" class="form-control1" name="lesionados" placeholder="Lesionados ej. 2" required="" id="lesionados">
  </div>
  <div align="center">
      <h4 id="subti">Selecciona Eje</h4>
          <select name="eje" id="" class="form-select ">
              <option value="">Selecciona un Eje Carretero</option>
              <?php
                  include("controll/Conexion.php");
                  $id = mysql_query("SELECT CargId,CargNombre FROM CARGO");
                  while($fila = mysql_fetch_array($id)){
                      echo "<option value=".$fila[0].">$fila[1]</option>";
                  }
                 mysql_close($conex);
              ?>
          </select>
      <h4 id="subti">Selecciona Tramo</h4>
          <select name="tramo" id="" class="form-select">
              <option value="">Selecciona un Tramo Carretero</option>
              <?php
                  include("controll/Conexion.php");
                  $id = mysql_query("SELECT CargId,CargNombre FROM CARGO");
                  while($fila = mysql_fetch_array($id)){
                      echo "<option value=".$fila[0].">$fila[1]</option>";
                  }
                 mysql_close($conex);
              ?>
          </select>
      </div>
      <div align="center">
          <h4 id="subti">Kilometros</h4>
    <input type="text" size="40" class="form-control1" name="kilometro" placeholder="Kilometro" required="" id="kilometro">
          <h4 id="subti">Metros</h4>
    <input type="text" size="40" class="form-control1" name="metro" placeholder="Metros" required="" id="metro">
  </div>
  <div align="center">
    <h4 id="subti">Observaciones</h4>

    <textarea  class="form-textarea" name="observaciones" required="" id="observaciones">

    </textarea><br/>
  </div>
      
          <center><input type="submit" class="btn btn-block btn-lg btn-success "  value="GUARDAR" id="btnguardar"></center>
      </form><!-- fin del formulario-->
  </div><!-- fin del div principal--> <br/><br/>
</body>

<script type="text/javascript">
    //Query para solo aceptar numeeros (nempleado)
   $('#kilometro,#metro,#lesionados,#decesos').keyup(function(){

     this.value = this.value.replace(/[^0-9]/g,'');
   });

    $('#nombre,#apellido').keyup(function(){
       this.value = this.value.toUpperCase();
    });

</script>
</html>