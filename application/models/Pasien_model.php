<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien_model extends CI_Model
{
    public $table = 'pasien';
    public $id = 'pasien.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->select('p.*');
        $this->db->from('pasien p');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->select('p.*');
        $this->db->from('pasien p');
        $this->db->where('p.id', $id);
        $query = $this->db->get();
        return $query->row_array();
        
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    public function tpasien()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->num_rows();
    }
}