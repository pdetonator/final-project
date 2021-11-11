<?php 

    namespace UNLCE\Http;

    use PDO;
    use PDOException;

    class Model {
        
        protected $db;

        public function __construct()
        {
            try {
                $this -> db = new PDO('mysql:host=localhost;dbname=e-shop', 'root', '');
            }catch (PDOException $t) {
                die($t -> getMessage());
            }
        }
        public function __destruct()
        {
            $this -> db = null;
        }

    }

?>