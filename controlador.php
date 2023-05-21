<?php
    require_once 'modelo/modelo.php';
    require_once 'vista/vista.php';
    class controlador{
        private $modelo;
        private $vista;
        public function __construct(){
            $this->modelo = new modelo();
            $this->vista = new vista();
        }
        public function estructuraSuperior(){
            $this->vista->head();
            $this->vista->header();
        }
        public function estructuraInferior(){
            $this->vista->footer();
        }
        public function listar(){
            $comentarios = $this->modelo->traer();
            $this->vista->lista($comentarios);
           
        }

    }

?>