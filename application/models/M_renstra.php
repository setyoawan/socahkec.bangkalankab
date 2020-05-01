<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_renstra extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('renstra', $data);
    }
    public function view()
    {
        return $this->db->get('renstra');
    }
}
