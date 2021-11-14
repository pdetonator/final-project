<?php

    use UNLCE\Http\Model;

    class mdlCategories extends Model 
    {
        public function getAll()
        {
            $stmt = $this -> db -> prepare('SELECT * FROM categories');
            $stmt -> execute(array());
            
            $categories = $stmt -> fetchAll(PDO::FETCH_ASSOC);

            return $categories;
        }
    }

?>