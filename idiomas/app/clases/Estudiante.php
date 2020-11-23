<?php
namespace App\Clases;
use Includes\ConexionBD as Conexion;
include_once "includes/autoload.php";


class Estudiante{
    
    private $id;
    private $nombres;
    private $email;

    public function insertarEstudiante(String $nombre, String $email){
        try{
            $conexionDB = new Conexion();
            $conn = $conexionDB->abrirConexion();
            $sql = "INSERT INTO Estudiante(nombre, email)
                    VALUES(?, ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $codigo, \PDO::PARAM_STR);
            $stmt->bindParam(2, $password, \PDO::PARAM_STR);

            $stmt->execute();
            $filas = $stmt->rowCount();

            $conexionDB->cerrarConexion();
            return $filas;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
}
