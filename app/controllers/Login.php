<?php

    class Login extends \UNLCE\Http\Controller
    {
        public function index()
        {
            if ($this -> model('mdlUsers') -> isUserLogin('login')) {
                header('Location: ./');
            }else {
                $this -> view('giris-yap');
            }
        }

        public function userLogin()
        {
            $model = $this -> model('mdlUsers');
            if (!$model -> isUserLogin('login')) {
                if (in_array($_SERVER['REQUEST_METHOD'], ['POST']) && isset($_POST['login-btn'])) {

                    $errors = null;
                    $user = [
                        'email' => $_POST['user-email'],
                        'password' => $_POST['user-password']
                    ];

                    if (!empty($user['email']) && !empty($user['password'])) {

                        if ($model -> loginControl($user['email'], md5($user['password']))) {
                            $_SESSION['login'] = true;
                            header('Location: ./');
                        }else {
                            $errors .= '<li>E-posta veya şifre hatalı!</li>';
                        }

                    }else {
                        $errors .= '<li>Lütfen boş alan bırakmayınız.</li>';
                    }

                    $this -> view('/giris-yap', [
                        'errors' => $errors
                    ]);

                }
            }else {
                header('Location: ./');
            }
        }
    }

?>