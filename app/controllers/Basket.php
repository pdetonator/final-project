<?php

    use UNLCE\Http\Controller;

    class Basket extends Controller 
    {
        public function add()
        {
            if ($this -> model('mdlUsers') -> isUserLogin('login')) {
                $model = $this -> model('mdlProduct');

                $id = openssl_decrypt($_POST['id'], CIPHER, CIPHER_KEY);
                $option = isset($_POST['option']) === true ? $_POST['option'] : null;

                if ($option === '') $option = null;

                if ($model -> isProduct($id)) {
                    require dirname(__DIR__) . '/Http/Cart.php';
                    $cart = new Cart;
                    
                    if ($cart -> addItem($_SESSION['user']['id'], $id, $option)) {
                        echo json_encode([
                            'status' => 'ok',
                            'message' => 'Sepete eklendi.',
                            'cart_total_count' => $cart -> getTotalCount($_SESSION['user']['id'])
                        ]);
                        exit;
                    }
                }else {
                    echo json_encode([
                        'status' => 'error',
                        'message' => 'Böyle bir ürün yok.'
                    ]);
                    exit; 
                }
            }else {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Lütfen giriş yapınız.'
                ]);
                exit;
            }
        }
    }

?>