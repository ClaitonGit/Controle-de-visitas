<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Visitante_model extends CI_Model{
 

      public function buscaTodos(){
            $this->db->order_by('datas', 'desc');
            $this->db->select('visitante.nome, visitante.datas,visitante.placa,visitante.cpf,visitante.RG,visitante.entrada,visitante.saida,visitante.observacao' );

            return $this->db->get("visitante")->result_array();
         }

         public function buscaTodos2(){
            $this->db->order_by('datas', 'desc');
            $this->db->select('visitante.cod,visitante.nome, visitante.datas,visitante.placa,visitante.cpf,visitante.RG,visitante.entrada,visitante.saida,visitante.observacao' );
            $this->db->where('saida = "00:00:00" ' );

            return $this->db->get("visitante")->result_array();
        }

        public function buscaTodos3(){
            $this->db->order_by('datas', 'desc');
            $this->db->select('visitante.cod,visitante.nome, visitante.datas,visitante.placa,visitante.cpf,visitante.RG,visitante.entrada,visitante.saida,visitante.observacao' );
            $this->db->where('saida != "00:00:00" ' );

            return $this->db->get("visitante")->result_array();
        }



         public function salva($visitante) {

            $this->db->insert("visitante", $visitante);
           
        }

        public function editarVI($cod){
            $cod = $this->input->post('cod');
            $dados = array(
                "nome" => $this->input->post("nome"),
        );
            $this->db->where('cod', $cod);
            return $this->db->update('visitante', $dados);
        }
        

        public function get_user(){
            $termo = $this->input->post('pesquisar');
            $this->db->select('*');
            $this->db->where('saida != "00:00:00" ' );
            $this->db->like('nome',$termo);  
            return $this->db->get("visitante")->result_array();
        }

        

        public function get_data(){
            $termo = $this->input->post('pesquisarData');
            $this->db->select('*');
            $this->db->where('saida != "00:00:00" ' );
            $this->db->like('datas',$termo);  
            return $this->db->get("visitante")->result_array();
        }




}


