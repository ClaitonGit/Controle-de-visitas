<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitante extends CI_Controller {



  
    public function listar(){
        $this->load->model("Visitante_model");
        $lista = $this->Visitante_model->buscaTodos3();
        $data = array("visita" => $lista);
        $this->load->view('visitante/listar', $data);
     
 }


 public function presentes(){
    $this->load->model("Visitante_model");
    $lista = $this->Visitante_model->buscaTodos2();
    $data = array("visitantes" => $lista);
    $this->load->view('visitante/presente', $data);
 
}

public function ausente(){
    $this->load->model("Visitante_model");
    $lista = $this->Visitante_model->buscaTodos2();
    $data = array("visita" => $lista);
    $this->load->view('visitante/ausentes', $data);
 
}


public function cadastrar(){
    $visitante = array(
        "nome" => $this->input->post("nome"),
        "datas" => $this->input->post("data"),
        "placa" => $this->input->post("placa"),
        "cpf" => $this->input->post("cpf"),
        "RG" => $this->input->post("rg"),
        "entrada" => $this->input->post("hora"),
        "saida" => $this->input->post("horaS"),
        "observacao" => $this->input->post("descricao"),
        
);

$this->load->model("Visitante_model");
$this->Visitante_model->salva($visitante);
$this->session->set_flashdata("success","Visitante cadastrado!");
redirect('visitante/ausente');
}


public function pesquisar(){
    $this->load->model('Visitante_model', 'visitante');
    $data['visita'] = $this->visitante->get_user();
    $this->load->view('visitante/listar', $data);
}

    

public function pesquisarData(){
    $this->load->model('Visitante_model', 'visitante');
    $data['visita'] = $this->visitante->get_data();
    $this->load->view('visitante/listar', $data);
}



}
 

   




