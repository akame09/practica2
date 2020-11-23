<?php
    declare(strict_types=1);
    use App\Controladores\ControladorUsuario;
    include_once "includes/autoload.php";
?>
<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="nombres" placeholder="Ingrese nombres"><br>
    <input type="text" name="idioma" placeholder="Ingrese idioma"><br>

    <input type="submit" name="submit" value="Guardar">
</form>
<?php
if(isset($_POST["submit"])){
    $nombres = $_POST["nombres"];
    $idioma = $_POST["idioma"];


    $controladorProfesor = new ControladorProfesor();
    echo $controladorProfesor->crearUsuario($nombres, $apellidos, $codigo, $password, $tipo);
}