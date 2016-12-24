<?php
require_once 'conexion.php';
class Usuario {

    private $nombre;
    private $apellido;
    private $twitter;
    private $con;

    function __construct() {
        $this->con = new conexion();
    }

    public function mostrar() {
        $sql = "SELECT * FROM usuario";
        $datos = $this->con->Retorno($sql);
        return $datos;
    }

    public function agregar() {
        /* @var $sql string */
        $sql = "INSERT INTO usuario(nombre, apellido, twitter) VALUES('{$this->nombre}', '{$this->apellido}', '{$this->twitter}')";
        $this->con->noRetorno($sql);
    }

    public function eliminar() {
        $sql = "DELETE FROM usuario WHERE id = '{$this->id}'";
        $this->con->noRetorno($sql);
    }

    public function editar() {
        $sql = $sql = "UPDATE usuario SET nombre = '{$this->nombre}', '{$this->apellido}', '{$this->twitter}' WHERE id = '{$this->id}'";
        $this->con->ConsultaSimple($sql);
    }
    
    public function lista() {
        $sql = "SELECT * FROM usuario WHERE id = '{$this->id}'";
        $datos = $this->con->Retorno($sql);
        $row = mysqli_fetch_array($datos);
        return $row;
    }

}
