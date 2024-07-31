<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ausente extends CI_Controller {

    public function listando(){
        $this->load->model("Ausente_model");
        $lista = $this->Ausente_model->busca();
        $dados = array('visita' => $lista);
        $this->load->view('visitante/ausentes', $dados);

        

    }	
    

public function editar(){
    $cod = $this->input->get('cod');

    $this->load->model("Ausente_model");
    $visitante = $this->Ausente_model->editarVI($cod);
    $dados = array("visita" => $visitante);
    $this->load->view("visitante/ausentes", $dados);
    $this->session->set_flashdata('success', 'Horário de saida Inserido com sucesso!');
    redirect('Visitante/ausente'); 
    
}



}
 

   




