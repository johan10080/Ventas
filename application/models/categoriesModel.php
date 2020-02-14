<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categoriesModel extends CI_Model {
       public function __construct() {
           parent::__construct();
       }
       public function getCategories(){
           $this->db->where('estado',1);
           $result = $this->db->get('categorias');
           return $result->result();
       }
       public function getCategoriesEdit($idCategorie){
           $this->db->where('id',$idCategorie);
           $result = $this->db->get('categorias');
           return $result->row();
       }
       public function createCategories($data){
           return $this->db->insert('categorias',$data);
       }
       public function updateCategorie($id,$data){
           $this->db->where('id',$id);
           return $this->db->update('categorias',$data);  
       }
        
}