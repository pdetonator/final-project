<?php

    class Product extends \UNLCE\Http\Controller
    {

        public function index($url)
        {
            $model = $this -> model('mdlProduct');

            if ($model -> productExist($url)) {
                $product = $model -> getProduct(htmlspecialchars(trim($url)));
                $this -> view('product', [
                    'product' => $product,
                    'images' => $model -> getImages($product['id']),
                    'options' => $model -> getOptions($product['id'])
                ]);
            }else {
                header('Location: ./');
                die();
            }
        }

    }

?>