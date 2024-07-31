<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Ausente_model extends CI_Model{
 

    	
public function busca(){
    return $this->db->get("visitante")->result_array();
  
 }


        public function editarVI($cod){
            $cod = $this->input->post('cod');
            $dados = array(
                "saida" => $this->input->post("nomeV"),
        );
            $this->db->where('cod', $cod);
            return $this->db->update('visitante', $dados);
        }
        

           


}


