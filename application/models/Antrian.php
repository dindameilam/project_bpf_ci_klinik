<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Antrian_model extends CI_Model
{
    public $table = 'antrian';
    public $id = 'antrian.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->select('a.*, p.nama as pasien');
        $this->db->from('antrian a');
        $this->db->join('pasien p', 'a.pasien = p.id');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->select('a.*,p.nama as ps');
        $this->db->from('antrian a');
        $this->db->join('pasien p', 'a.pasien = p.id');
        $this->db->where('a.id', $id);
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
    public function tantrian()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->num_rows();
    }
}