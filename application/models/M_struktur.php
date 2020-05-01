<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_struktur extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('struktur', $data);
    }
    public function view()
    {
        return $this->db->get('struktur');
    }
}
