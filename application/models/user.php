<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Model {
       public function __construct() {
           parent::__construct();
       }               
        public function dataLogin($dataUser,$dataPassword){
            $this->db->where('username',$dataUser);
            $this->db->where('password',$dataPassword);
            $result = $this->db->get('usuarios');
            if($result->num_rows() > 0){
                return $result->row();
            } else {
                return false;    
            }
        }
}