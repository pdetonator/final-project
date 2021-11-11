<?php

    class Login extends \UNLCE\Http\Controller
    {
        public function index()
        {
            $this -> view('giris-yap');
        }

        public function userLogin()
        {
            if (in_array($_SERVER['REQUEST_METHOD'], ['POST']) && isset($_POST['login-btn'])) {

                $errors = null;
                $user = [
                    'email' => $_POST['user-email'],
                    'password' => $_POST['user-password']
                ];

                $model = $this -> model('mdlUsers');

                if (!empty($user['email']) && !empty($user['password'])) {

                    if ($model -> loginControl($user['email'], md5($user['password']))) {
                        echo '<script>alert("")</script>';
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
        }
    }

?>