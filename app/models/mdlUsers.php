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

    }

?>