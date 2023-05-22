<?php
    class modelo{
        private $db;
        public function __construct(){
            try{
                $this->db = new PDO('mysql:host=localhost;dbname=db_comentarios','root','123456');
                
            }catch(PDOExeption $e){
                echo $e;
            }

        }

        public function traer(){
            $sentencia =  $this->db ->prepare("SELECT * FROM comentario");
            $sentencia->execute();
            $datos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $datos;
        }
        public function insertar(){
            $sentencia = $this->db->prepare("INSERT INTO comentario (comentario) VALUES (?)");
            
        }
    }

?>