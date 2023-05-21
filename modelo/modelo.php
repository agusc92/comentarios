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

    }

?>