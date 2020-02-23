<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class productsController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('productsModel');
        $this->load->model('categoriesModel');
        if (!$this->session->userdata('login')) {
            $this->load->view('admin/login');
        }
    }

    public function index() {
        $data = array(
            'products' => $this->productsModel->getProducts()
        );       
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('products/list',$data);
        $this->load->view('layouts/footer');
    }

    public function addProducts() {
        $data = array(
            'products' => $this->categoriesModel->getCategories()
        );
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('products/create',$data);
        $this->load->view('layouts/footer');
    }
    
    public function create(){
        $codigo = $this->input->post('codigo');
        $nombre = $this->input->post('name');
        $description = $this->input->post('descripcion');
        $precio = $this->input->post('precio');
        $stock = $this->input->post('stock');
        $categoria = $this->input->post('categoria');
        $data = array(
            'codigo' => $codigo,
            'nombre' => $nombre,
            'descripcion' => $description,
            'precio' => $precio,
            'stock' => $stock,
            'categoria_id' => $categoria,           
            'estado' => '1'
        );      
        if($this->productsModel->createProducts($data)){
            redirect(base_url('productos/lista'));
        }
        else{
            $this->session->set_flashdata('Error','No se pudo crear un nuevo producto');
            redirect(base_url('productos/agregar'));
        }
        return $data;
    }
    public function edit($idProducts){
        $data = array(            
            'categories' => $this->categoriesModel->getCategories(),
            'products' => $this->productsModel->getProductsEdit($idProducts)
        );
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('products/edit',$data);
        $this->load->view('layouts/footer');
    }
    public function update(){
        $id = $this->input->post('idProductos');
        $codigo = $this->input->post('codigo');
        $nombre = $this->input->post('name');
        $description = $this->input->post('descripcion');
        $precio = $this->input->post('precio');
        $stock = $this->input->post('stock');
        $categoria = $this->input->post('categoria');
        $data = array(
            'codigo' => $codigo,
            'nombre' => $nombre,
            'descripcion' => $description,
            'precio' => $precio,
            'stock' => $stock,
            'categoria_id' => $categoria
        );
        if($this->productsModel->updateProducts($id,$data)){
            redirect(base_url('productos/lista'));
        }else{
            $this->session->set_flashdata('Error','No se pudo actualizar el producto');
            redirect(base_url().'productos/actualizar'.$id);
        }
        
    }
    public function viewDetail($idProducts){
       $data = array(
            'products' => $this->productsModel->getProductsEdit($idProducts)
        );
       $this->load->view('products/view',$data);
    }
    public function delete($id) {
        $data = array(
            'estado' => '0'
        );
         $this->productsModel->updateProducts($id,$data);
          echo 'productos/lista';
        
    }

}
