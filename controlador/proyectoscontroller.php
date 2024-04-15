<?php
require_once("modelo/proyecto.php");
class proyectosController{
    private $model;
    function __construct()
    {
        $this->model=new Proyecto();
    }
    public static function mostrarProyectos(){
        $proyecto = new Proyecto();
        $datos = $proyecto->ObtenerDatos();
        require_once("vista/proyectos/mostrar.php");
    }
    public static function nuevo(){
        require_once ("vista/proyectos/nuevo.php");
    }
    public static function guardar(){
        $clave = $_REQUEST['clave'];
        $nombre = $_REQUEST['nombre'];
        $caratula = $_REQUEST['caratula'];
        $fecha = date("Y-m-d");
        $idUsuario = 1;
        $data = "'".$clave."','".$nombre."','".$caratula."','".$fecha."','".$idUsuario."'";
        $proyecto = new Proyecto();
        $datos = $proyecto -> InsertarProyecto($data);
        header("location:".urlsite."index.php?p?proyecto");
    }
    public static function editar(){
        $id
        $dato = $proyecto->obtenerProyectoId();
    }
}