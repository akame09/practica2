<?php
    declare(strict_types=1);
    use App\Controladores\ControladorUsuario;
    include_once "includes/autoload.php";
?>
<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="nombres" placeholder="Ingrese numero de leccion"><br>
    <input type="text" name="estado" placeholder="Ingrese estado"><br>
    <input type="text" name="cprofesor" placeholder="Ingrese comentario profesor"><br>
    <input type="text" name="cestudiante" placeholder="Ingrese comentario estudiante"><br>

    <input type="submit" name="submit" value="Guardar">
</form>
<?php
if(isset($_POST["submit"])){
    $nombres = $_POST["nombres"];
    $estado = $_POST["estado"];
    $cprofesor = $_POST["cprofesor"];
    $cestudiante = $_POST["cestudiante"];


    $controladorLeccion = new ControladorLeccion();
    echo $controladorLeccion->crearLeccion($nombres, $estado, $cprofesor, $cestudiante);
}