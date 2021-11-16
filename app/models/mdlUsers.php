<?php

    class mdlUsers extends \UNLCE\Http\Model
    {

        /*
         * User email control
         * @param string
         * return boolean
         */

        public function emailExist($email)
        {
            $stmt = $this -> db -> prepare('SELECT * FROM users WHERE user_email =:mail');
            $stmt -> execute(array(
                'mail' => $email
            ));

            if ($stmt -> rowCount() > 0) return true;
            return false;
        }

        /*
         * Add new user
         * @param array
         * return boolean
         */

        public function addUser($userdata)
        {
            $stmt = $this -> db -> prepare('INSERT INTO users SET user_fullName =:name, user_email =:mail, user_password =:password');
            $stmt -> execute(array(
                'name' => $userdata['name'],
                'mail' => $userdata['email'],
                'password' => md5($userdata['password'])
            ));

            if ($stmt -> rowCount() > 0) return true;
            return false;
        }

        /*
         * User Login Control || Mail and Pass
         * @param string
         * @param string
         * return boolean
         */

        public function loginControl($userMail, $userPassword)
        {
            $stmt = $this -> db -> prepare('SELECT * FROM users WHERE user_email =:mail AND user_password =:password');
            $stmt -> execute(array(
                'mail' => $userMail,
                'password' => $userPassword
            ));

            if ($stmt -> rowCount() > 0) return true;
            return false;
        }

        /*
         * Is the user logged in
         * @param string
         * return boolean
         */

        public function isUserLogin($sessName)
        {
            if (isset($_SESSION['user'][$sessName]) && $_SESSION['user'][$sessName] === true) return true;
            return false;
        }
        
        public function getUserId($email) 
        {
            $stmt = $this -> db -> prepare('SELECT * FROM users WHERE user_email =:mail');
            $stmt -> execute(array(
                'mail' => $email,
            ));
            $user = $stmt -> fetch(PDO::FETCH_ASSOC);

            if ($stmt -> rowCount() > 0) return $user['id'];
        }

        public function getUser($id)
        {
            $stmt = $this -> db -> prepare('SELECT * FROM users WHERE id =:userid');
            $stmt -> execute(array(
                'userid' => $id
            ));
            $user = $stmt -> fetch(PDO::FETCH_ASSOC);

            return $user;
        }

        public function updateName($id, $newName)
        {
            $stmt = $this -> db ->  prepare('UPDATE users SET user_fullName =:name WHERE id =:id');
            $stmt -> execute(array(
                'name' => $newName,
                'id' => $id
            ));

            if ($stmt -> rowCount() > 0) return true;
            return false;
        }

        public function matchPassword($password)
        {
            $stmt = $this -> db ->  prepare('SELECT * FROM users WHERE user_password =:password');
            $stmt -> execute(array(
                'password' => md5($password),
            ));

            if ($stmt -> rowCount() > 0) return true;
            return false;
        }

        public function updatePassword($id, $password) {
            $stmt = $this -> db ->  prepare('UPDATE users SET user_password =:password WHERE id =:id');
            $stmt -> execute(array(
                'password' => md5($password),
                'id' => $id
            ));

            if ($stmt -> rowCount() > 0) return true;
            return false;
        }
    }

?>