<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class authController extends CI_Controller {
       public function __construct() {
           parent::__construct();
           $this->load->model('user');
           if(!$this->session->userdata('login')){
            $this->load->view('admin/login');   
           }
       }
       /*Funcion al abrir login*/
       public function index()
	{	
           if(!$this->session->userdata('login')){
            $this->load->view('admin/login');   
           }
            else {
                redirect(base_url('home'));
            }
	}        
        public function login(){
            $dataUser= $this->input->post("user");
            $dataPassword = $this->input->post("password");
            $result = $this->user->dataLogin($dataUser, sha1($dataPassword));
            if(!$result){
                redirect(base_url());
            } else {
                 $data = array(
                     'id' => $result->id,
                     'nombre' => $result->nombres,
                     'rol' => $result->rol_id,
                     'login' => TRUE
                 );
                 $this->session->set_userdata($data);
                 redirect(base_url('home'));
            }
        }
        public function logOut(){
            $this->session->sess_destroy();
            $this->load->view('admin/login'); 
        }
        
}