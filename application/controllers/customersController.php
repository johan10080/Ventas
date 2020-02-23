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
        $names = $this->input->post('names');
        $surnames = $this->input->post('surnames');
        $phone = $this->input->post('phone');
        $ruc = $this->input->post('ruc');
        $business = $this->input->post('business');
        $description = $this->input->post('description');
        $address = $this->input->post('address');
        $data = array(
            'nombres' => $names,
            'apellidos' => $surnames,
            'direccion' => $address,
            'telefono' => $phone,
            'ruc' => $ruc,
            'empresa' => $business,
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
    public function edit($idCustomers){
        $data = array(
            'customers' => $this->customersModel->getCustomersEdit($idCustomers)
        );
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('customers/edit',$data);
        $this->load->view('layouts/footer');
    }
    public function update(){
        $id = $this->input->post('idCustomers');
        $names = $this->input->post('names');
        $surnames = $this->input->post('surnames');
        $phone = $this->input->post('phone');
        $ruc = $this->input->post('ruc');
        $business = $this->input->post('business');
        $description = $this->input->post('description');
        $address = $this->input->post('address');
        $data = array(
            'nombres' => $names,
            'apellidos' => $surnames,
            'direccion' => $address,
            'telefono' => $phone,
            'ruc' => $ruc,
            'empresa' => $business
        );
        if($this->customersModel->updateCustomers($id,$data)){
            redirect(base_url('customers/lista'));
        }else{
            $this->session->set_flashdata('Error','No se pudo actualizar la categoria');
            redirect(base_url().'customers/actualizar'.$id);
        }
        
    }
    public function viewDetail($id){
       $data = array(
            'customers' => $this->customersModel->getCustomersEdit($id)
        );
       $this->load->view('customers/view',$data);
    }
    public function delete($id) {
        $data = array(
            'estado' => '0'
        );
         $this->customersModel->updateCustomers($id,$data);
          echo 'customers/lista';
        
    }

}
