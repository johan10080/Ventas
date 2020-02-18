<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customersModel extends CI_Model {
       public function __construct() {
           parent::__construct();
       }
       public function getCustomers(){
           $this->db->where('estado',1);
           $result = $this->db->get('clientes');
           return $result->result();
       }
       public function getCustomersEdit($idCategorie){
           $this->db->where('id',$idCategorie);
           $result = $this->db->get('clientes');
           return $result->row();
       }
       public function createCustomers($data){
           return $this->db->insert('clientes',$data);
       }
       public function updateCustomers($id,$data){
           $this->db->where('id',$id);
           return $this->db->update('clientes',$data);  
       }
        
}