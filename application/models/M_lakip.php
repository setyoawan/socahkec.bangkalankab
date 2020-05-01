<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_lakip extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('lakip', $data);
    }
    public function view()
    {
        return $this->db->get('lakip');
    }
}
