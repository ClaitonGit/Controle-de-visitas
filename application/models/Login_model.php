<?php

class Login_model extends CI_Model{


    public function store($email, $password)
        {
            $this->db->where("nome", $email);
            $this->db->where("senha", $password);
            $user = $this->db->get("usuario")->row_array();
            return $user;
        }
      
}

