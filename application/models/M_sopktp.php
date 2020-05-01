<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_sopktp extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('sopktp', $data);
    }
    public function view()
    {
        return $this->db->get('sopktp');
    }
}