<?php

include("conecxion.php");

if (isset($_POST['Realizar pago'])){
if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >=1  ){
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $targeta = date("numero");
  $consulta = "INSERT INTO datos(nombre, email, tarjeta) VALUES ('$name', '$email', '$tarjeta')";
  $resultado = mysqli_connect($conex,$consulta);
  if ($resultado) {
    ?>
    <h3 class="ok"> Pago realizado</h3>
    <?php
  } else {
    ?>

    <h3 class="bad"> Ha ocurrido un error</h3>
  <?php
 }
}else {
  ?>
  <h3 class"bad"> complete los campos</h3>
  <?php

}
//fin de la llave del main y del email
 }//fin de la llave de realizar pago

?>
