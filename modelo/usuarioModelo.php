<?php

include_once "conexion.php";

class usuarioModelo
{
    public static function mdlIniciarSesion($email, $password)
    {
        $mensaje = array();

        try {
            $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM usuario INNER JOIN tipo_usuario ON usuario.
            tipo_usuario_idtipo_usuario = tipo_usuario.idtipo_usuario WHERE usuario.email=:email AND 
            usuario.password=:password");
            $objRespuesta->bindParam(":email", $email);
            $objRespuesta->bindParam(":password", $password);
            $objRespuesta->execute();
            $objUsuario = $objRespuesta->fetch();

            if ($objUsuario != null) {
                $mensaje = array("codigo" => "200", "mensaje" => "ok");
                $_SESSION["usuario"] = $objUsuario["nombre"] . " " . $objUsuario["apellido"];
                $_SESSION["urlImagen"] = $objUsuario["url"];
                $_SESSION["idUsuario"] = $objUsuario["idusuario"];
            } else {
                $mensaje = array("codigo" => "401", "mensaje" => "El usuario no existe, por favor verifique sus datos.");

            }
            $objRespuesta = null;

        } catch (Exception $e) {
            $mensaje = array("codigo" => "401", "mensaje" => $e->getMessage());
        }

        return $mensaje;
    }

    public static function mdlListadosUsuarios()
    {
        $mensaje = array();
        try {
            $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM usuario INNER JOIN tipo_usuario ON usuario.tipo_usuario_idtipo_usuario=tipo_usuario.idtipo_usuario");
            $objRespuesta->execute();
            $listadoUsuarios = $objRespuesta->fetchAll();
            $mensaje = array("codigo" => "200", "listadoUsuarios" => $listadoUsuarios);
            $objRespuesta = null;
        } catch (Exception $e) {
            $mensaje = array("codigo" => "401", "mensaje" => $e->getMessage());
        }
        return $mensaje;
    }

    public static function mdlEliminarUsuario($idUsuario)
    {
        $mensaje = array();

        try {
            $objRespuesta = Conexion::conectar()->prepare("DELETE FROM usuario WHERE idusuario = :idusuario");
            $objRespuesta->bindParam(":idusuario", $idUsuario);
            if ($objRespuesta->execute()) {
                $mensaje = array("codigo" => "200", "eliminarUsuario" => "");

            }
            $objRespuesta = null;
        } catch (Exception $e) {
            $mensaje = array("codigo" => "401", "mensaje" => $e->getMessage());

        }
        return $mensaje;
    }
}