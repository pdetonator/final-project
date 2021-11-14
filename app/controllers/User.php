<?php

    use UNLCE\Http\Controller;

    class User extends Controller 
    {
        
        public function userLogout()
        {
            if (isset($_SESSION['user']['login']) && $_SESSION['user']['login'] === true) {
                unset($_SESSION['user']);
                session_destroy();

                header('Location: ./../.');
                exit;
            }else {
                die('error');
            }
        }

    }

?>