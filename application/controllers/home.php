<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/header.php');
        $this->load->view('template/sidebar.php');
        $this->load->view('template/topbar.php');
        $this->load->view('template/content.php');
        $this->load->view('template/footer.php');
    }

    public function inputData()
    
    {
        
    }
}
