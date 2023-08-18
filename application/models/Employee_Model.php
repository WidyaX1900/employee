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

        return $query->result();
    }

    public function getEmployeeById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('employees');

        return $query->result();
    }

    public function updateEmployee($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('employees', $data);
    }

    public function deleteEmployee($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('employees');
    }
}
