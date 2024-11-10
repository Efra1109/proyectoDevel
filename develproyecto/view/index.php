<?php

setlocale(LC_ALL, "es_ES");
$modulo = "Menu";
$nav = '1';

require_once "../controller/assets/svrurl.php";
require_once "../controller/assets/validacion.php";
require_once "../controller/assets/inicio.php";

//Validacion de login
$login = new seguridad;
$login->seguridadLogin();

require_once "../controller/assets/session.php";

?>
<!-- Usuario -->
<a id="tipodeusuario" class="hide"><?php echo $pm_tipo ?></a>
<!-- Usuario -->
<?php
////Requerir NAVMENU
require "../controller/assets/menunav.php";
?>

<!-- BODDY -->
<div id="bodysecon" class="row">
<table>
    <thead>
        <tr>
            <th>Banco</th>
            <th>Fecha</th>
            <th>Usuario</th>
            <th>Monto</th>
            <th>Descripción</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>Promerica</td>
            <td>11/09/2023</td>
            <td>carlos123</td>
            <td>Q100.00</td>
            <td>Phishing</td>
        </tr>
        <tr>
            <td>Banrural</td>
            <td>11/09/2023</td>
            <td>efra456</td>
            <td>Q250.50</td>
            <td>Phishing</td>
        </tr>
        <tr>
            <td>BAM</td>
            <td>11/09/2023</td>
            <td>barrios890</td>
            <td>Q50.00</td>
            <td>Phishing</td>
        </tr>
        <tr>
            <td>Banco Industrial</td>
            <td>12/09/2023</td>
            <td>maria789</td>
            <td>Q150.25</td>
            <td>Phishing</td>
        </tr>
        <tr>
            <td>G&T Continental</td>
            <td>13/09/2023</td>
            <td>luis456</td>
            <td>Q300.00</td>
            <td>Phishing</td>
        </tr>
    </tbody>
</table>
</div>

      <a class="btn-floating btn-medium pulse"><i class="material-icons">menu</i></a>
      <a class="btn-floating btn-medium pulse"><i class="material-icons">cloud</i></a>
      <a class="btn-floating btn-medium cyan pulse"><i class="material-icons">edit</i></a>
      
</div>
<!--Datos-->  
<!-- BODDY -->

<!-- SCRIPTS CARGA -->
<?php
require_once "../controller/assets/scripts.php";
?>
<!-- SCRIPTS CARGA -->

<!-- SCRIPTS -->
<script>


</script>
<!-- SCRIPTS  -->


<!-- Fin HTML -->
<?php
require_once "../controller/assets/fin.php";
?>