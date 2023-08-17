<?php
class Employee_Model extends CI_Model
{
    public $name;
    public $email;
    public $phone;

    public function insertEmployee($data)
    {
        $this->db->insert('employees', $data);
    }

    public function getEmployee()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('employees');
        return $query;
    }
}
