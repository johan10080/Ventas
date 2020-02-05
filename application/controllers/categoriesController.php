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

    public function index()
	{
                $data = array(
                    'categorias' =>  $this->categoriesModel->getCategories()
                );                                               
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('categories/list',$data);
		$this->load->view('layouts/footer');
	}
}
