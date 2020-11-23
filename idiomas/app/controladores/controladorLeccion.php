<?php

namespace App\Controladores;

use App\Clases\Leccion;

include_once "includes/autoload.php";

class ControladorLeccion
{
   
    public function crearLeccion(string $nombres, string $estado,string $cprofesor,string $cestudiante): string
    {
        $mensaje = "";

        if (!$this->validarCadena($nombres)) {
            $mensaje .= "Caracteres no admitidos en Nombres<br>";
        }

        if (!$this->validarCadena($estado)) {
            $mensaje .= "Caracteres no admitidos en Apellidos<br>";
        }


        if (strlen($mensaje) == 0) {
            $profesor = new Profesor();
            $resultado = $usuario->insertar($nombres, $idioma);
            if ($resultado != 0) {
                $mensaje = "Guardado";
            }
        }

        return $mensaje;
    }

    public function validarCadena($cadena): bool
    {
        preg_match("/[a-zA-Z ]+/", $cadena, $valores);
        $validacion = (strlen($cadena) == strlen($valores[0])) ? true : false;
        return $validacion;
    }
}