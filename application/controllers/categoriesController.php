<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class categoriesController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('categoriesModel');
        if (!$this->session->userdata('login')) {
            $this->load->view('admin/login');
        }
    }

    public function index() {
        $data = array(
            'categorias' => $this->categoriesModel->getCategories()
        );
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('categories/list', $data);
        $this->load->view('layouts/footer');
    }

    public function addCategotires() {

        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('categories/create');
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
        if($this->categoriesModel->createCategories($data)){
            redirect(base_url('categorias/lista'));
        }
        else{
            $this->session->set_flashdata('Error','No se pudo crear un nuevo comentario');
            redirect(base_url('categorias/agregar'));
        }
        return $data;
    }

}