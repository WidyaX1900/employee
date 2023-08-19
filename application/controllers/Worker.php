<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Worker extends CI_Controller
{

    public function index()
    {
        $query = $this->employee_model->getEmployee();

        $data['employees'] = $query;
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

        if (!$this->form_validation->run()) {
            $this->create();
        } else {

            $data = [
                'name' => htmlspecialchars($this->input->post('name')),
                'email' => htmlspecialchars($this->input->post('email')),
                'phone' => htmlspecialchars($this->input->post('phone')),
                'picture' => $this->upload()
            ];

            $this->employee_model->insertEmployee($data);

            $this->session->set_flashdata('success', 'success');
            $this->session->set_flashdata('result', 'Successful');
            $this->session->set_flashdata('action', 'Add an Employee');
            return redirect('/worker');
        }
    }

    public function show($id)
    {
        $query = $this->employee_model->getEmployeeById($id);

        $data['employees'] = $query;
        $data['title'] = 'Employee Info';
        $data['page'] = 'Employee';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('employee/info');
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $query = $this->employee_model->getEmployeeById($id);

        $data['employees'] = $query;
        $data['title'] = 'Edit Employee';
        $data['page'] = 'Employee';

        $this->load->view('templates/header', $data);
        $this->load->view('employee/edit');
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        if ($_FILES['photo']['error'] > 0) {
            $newFile = $this->input->post('oldPicture');
        } else {
            $newFile = $this->upload();
        }

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
            $this->edit($id);
        } else {

            $data = [
                'name' => htmlspecialchars($this->input->post('name')),
                'email' => htmlspecialchars($this->input->post('email')),
                'phone' => htmlspecialchars($this->input->post('phone')),
                'picture' => $newFile
            ];

            $this->employee_model->updateEmployee($id, $data);

            $this->session->set_flashdata('success', 'success');
            $this->session->set_flashdata('result', 'Successful');
            $this->session->set_flashdata('action', 'Update an Employee');
            return redirect('/worker');
        }
    }

    public function delete($id)
    {
        $query = $this->employee_model->getEmployeeById($id);

        $data['employees'] = $query;
        $data['title'] = 'Delete an Employee';
        $data['page'] = 'Employee';

        $this->load->view('templates/header', $data);
        $this->load->view('employee/delete');
        $this->load->view('templates/footer');
    }

    public function destroy($id)
    {
        $this->employee_model->deleteEmployee($id);

        $this->session->set_flashdata('success', 'success');
        $this->session->set_flashdata('result', 'Successful');
        $this->session->set_flashdata('action', 'Delete an Employee');
        return redirect('/worker');
    }

    public function upload()
    {
        $fileName = 'default.png';

        $config['upload_path'] = './assets/profile/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['encrypt_name'] = true;
        $config['file_ext_tolower'] = true;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('photo')) {
            $fileName = $this->upload->data('file_name');
        } else {
            $data['error'] = $this->upload->display_errors();
            $data['title'] = 'Error Page';

            $this->load->view('templates/header', $data);
            $this->load->view('errors/error', $data);
            $this->load->view('templates/footer');
        }

        return $fileName;
    }
}
