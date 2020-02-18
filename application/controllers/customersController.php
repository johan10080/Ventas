<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class customersController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('customersModel');
        if (!$this->session->userdata('login')) {
            $this->load->view('admin/login');
        }
    }

    public function index() {
        $data = array(
            'customers' => $this->customersModel->getcustomers()
        );
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('customers/list',$data);
        $this->load->view('layouts/footer');
    }

    public function addCustomers() {

        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('customers/create');
        $this->load->view('layouts/footer');
    }
    
    public function create(){
        $name = $this->input->post('name');
        $description = $this->input->post('description');
        $data = array(
            'nombre' => $name,
            'descripcion' => $description,
            'estado' => '1'
        );
        if($this->customersModel->createCustomers($data)){
            redirect(base_url('customers/lista'));
        }
        else{
            $this->session->set_flashdata('Error','No se pudo crear un nuevo comentario');
            redirect(base_url('customers/agregar'));
        }
        return $data;
    }
    public function edit($idCategorie){
        $data = array(
            'categorias' => $this->categoriesModel->getCategoriesEdit($idCategorie)
        );
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('categories/edit',$data);
        $this->load->view('layouts/footer');
    }
    public function update(){
        $id = $this->input->post('idCategoria');
        $name = $this->input->post('name');
        $description = $this->input->post('description');
        $data = array(
            'nombre' => $name,
            'descripcion' => $description
        );
        if($this->categoriesModel->updateCategorie($id,$data)){
            redirect(base_url('categorias/lista'));
        }else{
            $this->session->set_flashdata('Error','No se pudo actualizar la categoria');
            redirect(base_url().'categorias/actualizar'.$id);
        }
        
    }
    public function viewDetail($id){
       $data = array(
            'categorias' => $this->categoriesModel->getCategoriesEdit($id)
        );
       $this->load->view('categories/view',$data);
    }
    public function delete($id) {
        $data = array(
            'estado' => '0'
        );
         $this->categoriesModel->updateCategorie($id,$data);
            echo 'categorias/lista';
        
    }

}
