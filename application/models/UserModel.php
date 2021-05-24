<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
    private $table = "user";
    // public $id, $role, $username, $email, $password, $avatar;

    public function findOne($col, $val)
    {
        return $this->db->get_where($this->table, [$col => $val])->row();
    }
    public function findAll()
    {
        return $this->db->get($this->table)->result();
    }
    public function create($data)
    {
        return $this->db->insert($this->table, $data);
    }
    public function update($data, $id)
    {
        return $this->db->update($this->table, $data, array('id' => $id));
    }
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->form($table);
        $this->db->like('username', $keyword);
        return $this->db->get()->result();
    }
    
}