<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Worker extends CI_Controller
{
    public function index()
    {
        $this->load->model('employee_model', 'employee');
        $query = $this->employee->getEmployee();

        $data['employees'] = $query->result();
        $data['title'] = 'Employees Data';
        $data['page'] = 'Employee';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
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
        $config =
            [
                [
                    'field' => 'name',
                    'label' => 'Full Name',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Please enter your name'
                    ]
                ],
                [
                    'field' => 'email',
                    'label' => 'E-mail',
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'Please enter your e-mail'
                    ]
                ],
                [
                    'field' => 'phone',
                    'label' => 'Phone',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Please enter your Phone Number'
                    ]
                ],

            ];


        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() === false) {
            $this->create();
        } else {

            $data = [
                'name' => htmlspecialchars($this->input->post('name')),
                'email' => htmlspecialchars($this->input->post('email')),
                'phone' => '+62' . htmlspecialchars($this->input->post('phone')),
                'picture' => 'default.jpg'
            ];

            $this->load->model('employee_model', 'employee');
            $this->employee->insertEmployee($data);

            return redirect('/worker');
        }
    }
}
