<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Music_model extends CI_Model
{
    public $table = 'music';
    public $id = 'music.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getGuitar()
    {
        $this->db->from($this->table);
        $this->db->where('jenis', 'Guitar');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getPiano()
    {
        $this->db->from($this->table);
        $this->db->where('jenis', 'Piano');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getDrum()
    {
        $this->db->from($this->table);
        $this->db->where('jenis', 'Drum');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getViolin()
    {
        $this->db->from($this->table);
        $this->db->where('jenis', 'Violin');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getSaxophone()
    {
        $this->db->from($this->table);
        $this->db->where('jenis', 'Saxophone');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getHarp()
    {
        $this->db->from($this->table);
        $this->db->where('jenis', 'Harp');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id)
    // {
    //     return $this->db->get_where($this->table, ["id" => $id])->row();
    // }
    // public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        $this->db->get_where($this->table, ["id" => $id])->row();
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
    public function min_stok($stok, $idp)
    {
        $query = $this->db->set('stok', 'stok-' . $stok, false);
        $query = $this->db->where('id', $idp);
        $query = $this->db->update($this->table);
        return $query;
    }

    public function tmusic()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function tGuitar()
    {
        $this->db->from($this->table);
        $this->db->where('jenis', 'Guitar');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function tPiano()
    {
        $this->db->from($this->table);
        $this->db->where('jenis', 'Piano');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function tDrum()
    {
        $this->db->from($this->table);
        $this->db->where('jenis', 'Drum');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function tViolin()
    {
        $this->db->from($this->table);
        $this->db->where('jenis', 'Violin');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function tHarp()
    {
        $this->db->from($this->table);
        $this->db->where('jenis', 'Harp');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function tSaxophone()
    {
        $this->db->from($this->table);
        $this->db->where('jenis', 'Saxophone');
        $query = $this->db->get();
        return $query->num_rows();
    }
}
