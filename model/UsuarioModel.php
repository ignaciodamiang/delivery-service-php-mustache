<?php


class UsuarioModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getRolUsuario($email)
    {

        $sql = "SELECT id_tipoUsuario  FROM Usuario WHERE email like '$email'";

        $resultado["rol"] = $this->database->query($sql);
        return $resultado["rol"]["0"]["id_tipoUsuario"];
    }

    public function getIdUsuario($email)
    {

        $sql = "SELECT id FROM Usuario WHERE email like '$email'";

        $resultado["idUsuario"] = $this->database->query($sql);
        return $resultado["idUsuario"]["0"]["id"];
    }

    public function getMailUsuario($id){
        $sql = "SELECT email FROM Usuario WHERE id like '$id'";

        $resultado["emailUsuario"] = $this->database->query($sql);
        return $resultado["emailUsuario"]["0"]["email"];
    }

    public function getPasswordUsuario($id){
        $sql = "SELECT contraseña FROM Usuario WHERE id like '$id'";

        $resultado["contraseñaUsuario"] = $this->database->query($sql);
        return $resultado["contraseñaUsuario"]["0"]["contraseña"];
    }

    public function getActivacionUsuario($email)
    {

        $sql = "SELECT cuenta_activada FROM Usuario WHERE (email = '$email')";

        $resultado["activacion"] = $this->database->query($sql);

        return $resultado["activacion"]["0"]["cuenta_activada"];

    }

}