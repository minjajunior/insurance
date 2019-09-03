<?php
/**
 * Created by PhpStorm.
 * User: Minja Junior
 * Date: 1/2/2018
 * Time: 2:36 PM
 */

class Login_model extends CI_Model {

    public function user_login($mail){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_email', $mail);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
    }
}