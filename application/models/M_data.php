<?php

class M_data extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('artikel');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    
    //log aktivitas ======================================
    public function log() 
    {
        return $this->db->get('tabel_log');
    }



    //nampilin jumlah artikel, kegiatan, dan galeri gambar
    public function hitungJumlahartikel()
    {
        $query = $this->db->get('artikel');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function hitungJumlahkegiatan()
    {
        $query = $this->db->get('kegiatan');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function hitungJumlahgambar()
    {
        $query = $this->db->get('galeri');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
