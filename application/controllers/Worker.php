<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Worker extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Employees Data';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('employee/index');
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['title'] = 'Add an Employee';
        $this->load->view('templates/header', $data);
        $this->load->view('employee/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $this->load->helper(['form', 'url']);
        $this->load->helper('form_validation');
    }
}
