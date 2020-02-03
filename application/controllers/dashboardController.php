<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class dashboardController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('login')) {
            $this->load->view('admin/login');
        }
    }

    public function index() {
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/dashboard');
        $this->load->view('layouts/footer');
    }

}
