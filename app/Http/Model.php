<?php 

    namespace UNLCE\Http;

    use PDO;
    use PDOException;

    class Model {
        
        protected $db;

        public function __construct()
        {
            try {
                $this -> db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASSWORD);
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