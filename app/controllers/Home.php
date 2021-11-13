<?php

    class Home extends \UNLCE\Http\Controller
    {

        public function index()
        {
            $model = $this -> model('mdlProduct');
            $this -> view('index', [
                'products' => $model -> getIndex(),
                'model' => $model,
            ]);
        }

    }

?>