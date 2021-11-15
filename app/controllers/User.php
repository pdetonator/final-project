<?php

    use UNLCE\Http\Controller;

    class User extends Controller 
    {
        
        public function userLogout()
        {
            if (isLogin()) {
                unset($_SESSION['user']);
                session_destroy();

                header('Location: ./');
                exit;
            }else {
                pushMessage([
                    'status' => 'error',
                    'message' => 'Lütfen giriş yapınız.'
                ]);
                exit;
            }
        }

    }

?>