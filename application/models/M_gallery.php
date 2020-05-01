<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_gallery extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('galeri', $data);
    }
    public function view()
    {
        return $this->db->get('galeri');
    }
}
