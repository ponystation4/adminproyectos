<?php
    class Conexion extends PDO{
        private $hostBD='localhost';
        private $nombreBD='bdunach';
        private $usuarioBD='root';
        private $passwordBD='ZIOLp4487'; 
        public function __construct(){
            try {
                parent::__construct('mysql:host='.$this->hostBD.
                ';dbname='.$this->nombreBD.';charset=utf8',
                $this->usuarioBD,$this->passwordBD,
            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            } catch (Exception $e) {
                exit;
            }
            
        }
    }
?>