<?php
namespace App\clases;
use Includes\ConexionBD as Conexion;
include_once "includes/autoload.php";


class Profesor{

    private $id;
    private $nombres;
    private $idioma;

    public function mostrarPorId($id)
    {
        try {
            $conexionDB = new Conexion();
            $conn = $conexionDB->abrirConexion();
            $sql = "SELECT * FROM Profesor join Programacion WHERE idprofesor=$id";

            $stmt = $conn->prepare($sql);
            $stmt->execute();
            //$resultado = $stmt->fetchAll();

            $conexionDB->cerrarConexion();
            return $stmt;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function insertar(int $id, String $nombres, String $idioma){
        try{
            $conexionDB = new Conexion();
            $conn = $conexionDB->abrirConexion();
            $sql = "INSERT INTO Profesor(nombre, idioma)
                    VALUES(?, ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $nombres, \PDO::PARAM_STR);
            $stmt->bindParam(2, $idioma, \PDO::PARAM_STR);

            $stmt->execute();
            $filas = $stmt->rowCount();

            $conexionDB->cerrarConexion();
            return $filas;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
}