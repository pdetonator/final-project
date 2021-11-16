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
        public function userDetails()
        {
            if (isLogin()) {
                $user = $this -> model('mdlUsers');
                $this_userId = getLoginUser()['id'];

                $this -> view('user-detail', [
                    'user' => $user -> getUser($this_userId)
                ]);
            }else {
                header('Location: '  . get_url('giris-yap'));
            }
        }

        public function changeDetails()
        {
            if (isLogin()) {
                $user = $this -> model('mdlUsers');
                $error = null;
                $ok = null;
                $this_userId = getLoginUser()['id'];

                if (isset($_POST['change-info'])) {
                    $user_fullName = $_POST['user-fullName'];

                    if (!preg_match('/^[^\s]+( [^\s]+)+$/', $user_fullName) || strlen($user_fullName) < 5) {
                        $error .= '<li>Lütfen doğru bir şekilde ad soyad giriniz.</li>';
                    }else {
                        if ($user -> updateName($this_userId, $user_fullName)) {
                            $ok = '<li>Bilgileriniz değiştirildi.</li>';
                        }
                    }
                }else if (isset($_POST['change-password'])){
                    $user_oldPassword = $_POST['user_old_password'];
                    $user_newPassword = $_POST['user_new_password'];

                    if (!empty($user_oldPassword) && !empty($user_newPassword)) {
                        if (!$user -> matchPassword($user_oldPassword)) {
                            $error .= '<li>Lütfen doğru şifre giriniz.</li>';
                        }else {
                            if (strlen($user_newPassword) < 3) {
                                $error .= '<li>Şifreniz 3 karakterden kısa olamaz.</li>';
                            }else {
                                if ($user -> updatePassword($this_userId, $user_newPassword)) {
                                    $_SESSION['change-password'] = 'Parolanız değişti, lütfen tekrardan giriş yapınız.';
                                    unset($_SESSION['user']);
                                    header('Location: ' . get_url('giris-yap'));
                                }
                            }
                        }
                    }else {
                        $error .= '<li>Lütfen boş alan bırakmayınız.</li>';
                    }
                }
                $this -> view('user-detail', [
                    'user' => $user -> getUser($this_userId),
                    'error' => $error,
                    'ok' => $ok
                ]);

            }else {
                header('Location: '  . get_url('giris-yap'));
            }
        }

    }

?>