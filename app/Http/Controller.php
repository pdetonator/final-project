<?php 

    namespace UNLCE\Http;

    class Controller
    {
        
        public function view($viewName, $data = array())
        {
            $viewFile = dirname(__DIR__) . '/views/' . $viewName . '.php';

            if ($viewFile) {
                extract($data);
                require $viewFile;
            }
        }
        public function model($modelName)
        {
            $modelFile = dirname(__DIR__) . '/models/' . $modelName . '.php';
            
            if (file_exists($modelFile)) {
                require $modelFile;
                return new $modelName;
            }
        }
    }

?>