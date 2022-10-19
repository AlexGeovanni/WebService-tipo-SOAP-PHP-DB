<?php
    class Conexion extends PDO{
        private $BD = 'mysql';
        private $host = 'localhost';
        private $nombreBD = 'bebidas';
        private $usuario ='root';
        private $contrasena = '';

        public function __construct(){
            try {
                parent::__construct("{$this->BD}:dbname={$this->nombreBD};host={$this->host};
                chartset=utf8",$this->usuario,$this->contrasena);
                echo'<script>
                    alert ("holaa")
                </script>';
                
            } catch (PDOException $e) {
                echo 'error: '.$e->getMessage();
                exit;
            }
        }
    }


?>