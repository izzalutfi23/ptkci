<?php

    Class Mlogin extends CI_Model{

        public function userauth($user, $pass){
            return $this->db->get_where('user', array('username'=>$user, 'password'=>$pass));
        }
    }

?>