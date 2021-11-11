<?php

    class Register extends \UNLCE\Http\Controller
    {
        public function index()
        {
            $this -> view('uye-ol');
        }

        /*
         * Post user register data || Add new user
         *
         * @param null
         * return array
         */

        public function userRegister()
        {

            if (in_array($_SERVER['REQUEST_METHOD'], ['POST']) && isset($_POST['register-btn'])) {

                $errors = null;
                $status = true;

                $user = [
                    'name' => $_POST['user-fullName'],
                    'email' => $_POST['user-email'],
                    'password' => $_POST['user-password'],
                    'tryPassword' => $_POST['user-tryPassword']
                ];

                $model = $this -> model('mdlUsers');

                if (empty($user['name']) || empty($user['email']) || empty($user['password']) && empty($user['tryPassword'])) {
                    $errors .= '<li>Lütfen boş alan bırakmayınız.</li>';
                    $status = false;
                }else {
                    if (!preg_match('/^[^\s]+( [^\s]+)+$/', $user['name'])) {
                        $errors .= '<li>Lütfen isminizi kontrol ediniz. (İsim Soyisim)</li>';
                        $status = false;
                    }
                    if (!preg_match('/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/', $user['email'])) {
                        $errors .= '<li>Geçerli bir e-posta adresi giriniz.</li>';
                        $status = false;
                    }else if ($model -> emailExist($user['email'])) {
                        $errors .= '<li>E-posta adresi kullanımda.</li>';
                        $status = false;
                    }
                    if (strlen($user['password']) < 3) {
                        $errors .= '<li>Şifreniz 3 karekterden kısa olamaz.</li>';
                        $status = false;
                    }else if ($user['password'] !== $user['tryPassword']) {
                        $errors .= '<li>Şifreler uyuşmuyor.</li>';
                        $status = false;
                    }
                }

                if ($status) {

                    if ($model -> addUser($user)) {
                        session_start();
                        $_SESSION['register'] = true;
                        header('Location: ./giris-yap');
                    }

                }

            }

            $this -> view('uye-ol', [
                'errors' => $errors
            ]);
        }
    }

?>