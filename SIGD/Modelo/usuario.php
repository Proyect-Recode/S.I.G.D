<?php

require getcwd()."../Controlador/db.php";

class usuario {
    private $idUsuario;
    private $nombre;
    private $apellido;
    private $password;
    private $email;
    private $username;

    function __construct(){

    }

    public function guardar(){
        $connection = new msqli(host,user,pass);
        if($this->id !=null){
            $query = "UPDATE usuario SET idUsuario = '{$this->idUsuario}, nombre = '{$this->nombre}', apellido ='{$this->apellido}', contraseña ='{$this->password}', email ='{$this->email}', username ='{$this->username}' where idUsuario ={$this->idUsuario}";
        }else {
            $query = "INSERT INTO idUsuario = '{$this->idUsuario}, nombre = '{$this->nombre}', apellido ='{$this->apellido}', contraseña ='{$this->password}', email ='{$this->email}', username ='{$this->username}' where idUsuario ={$this->idUsuario}";
        }
        $result = $connection->query($query);
        return $result && $connection->close();
    
    }
}