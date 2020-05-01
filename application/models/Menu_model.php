<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu` 
        FROM `user_sub_menu`  JOIN `user_menu` ON `user_sub_menu`.`menu_id` = `user_menu`.`id` ";

        //RETURN untuk menampilkan datanya
        return $this->db->query($query)->result_array();
    }

    
    //ngobar================================================================
    public function Menuid($id)
    {
        return $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
    }
    //ngobar================================================================

    
}