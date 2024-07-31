<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function  index(){
        $data["title"] = "login - Guarita";
        $this->load->view('visitante/login',$data);
        
    }

    public function store()
    {
        $this->load->model("Login_model");
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->Login_model->store($email, $password);

        if($user){
            
            $this->session->set_userdata("logged_user", $user);
            redirect("Visitante/ausente");
        }else{
            $this->session->set_flashdata('danger', 'Senha ou usuario errado!');
            redirect("Login");
            redirect("Login");
        }
    }


    public function logout()
    {
        $this->session->unset_userdata("logged_user");
        redirect("Login");
    }

}
 

   




