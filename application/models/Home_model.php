<?php
/**
 * Created by PhpStorm.
 * User: Minja Junior
 * Date: 1/7/2018
 * Time: 5:38 PM
 */

class Home_model extends CI_Model {

    public function month_count(){

        $this->db->from('client');
        $this->db->where('date_expiry >', date('Y-m-d'));
        $this->db->where('date_expiry <',  date_format(date_add(date_create(date("Y-m-d")),date_interval_create_from_date_string("30 days")),"Y-m-d"));
        return $this->db->count_all_results();
    }

    public function expired_count(){

        $this->db->from('client');
        $this->db->where('date_expiry <', date('Y-m-d'));
        return $this->db->count_all_results();
    }

    public function active_count(){

        $this->db->from('client');
        $this->db->where('date_expiry >', date('Y-m-d'));
        return $this->db->count_all_results();
    }

    public function get_month(){
        $this->db->select('*');
        $this->db->from('client');
        $this->db->join('user', 'client.user_id = user.user_id');
        $this->db->join('company', 'client.company_id = company.company_id');
        $this->db->join('type', 'client.type_id = type.type_id');
        $this->db->where('date_expiry >', date('Y-m-d'));
        $this->db->where('date_expiry <',  date_format(date_add(date_create(date("Y-m-d")),date_interval_create_from_date_string("30 days")),"Y-m-d"));
        $this->db->order_by('client_name', 'asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            foreach ($query->result() as $row) {
                $response[] = $row;
            }
            return $response;
        }else{
            $response['error'] = 'Client Not Found';
            return $response;
        }
    }

    public function get_expired(){
        $this->db->select('*');
        $this->db->from('client');
        $this->db->join('user', 'client.user_id = user.user_id');
        $this->db->join('company', 'client.company_id = company.company_id');
        $this->db->join('type', 'client.type_id = type.type_id');
        $this->db->where('date_expiry <', date('Y-m-d'));
        $this->db->order_by('client_name', 'asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            foreach ($query->result() as $row) {
                $response[] = $row;
            }
            return $response;
        }else{
            $response['error'] = 'Client Not Found';
            return $response;
        }
    }

    public function get_active(){
        $this->db->select('*');
        $this->db->from('client');
        $this->db->join('user', 'client.user_id = user.user_id');
        $this->db->join('company', 'client.company_id = company.company_id');
        $this->db->join('type', 'client.type_id = type.type_id');
        $this->db->where('date_expiry >', date('Y-m-d'));
        $this->db->order_by('client_name', 'asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            foreach ($query->result() as $row) {
                $response[] = $row;
            }
            return $response;
        }else{
            $response['error'] = 'Client Not Found';
            return $response;
        }
    }

    public function get_company(){
        $this->db->select('*');
        $this->db->from('company');
        $this->db->order_by('company_name', 'asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            foreach ($query->result() as $row) {
                $response[] = $row;
            }
            return $response;
        }else{
            $response['error'] = 'Company Not Found';
            return $response;
        }
    }

    public function get_type(){
        $this->db->select('*');
        $this->db->from('type');
        $this->db->order_by('type_name', 'asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            foreach ($query->result() as $row) {
                $response[] = $row;
            }
            return $response;
        }else{
            $response['error'] = 'Insurance type Not Found';
            return $response;
        }
    }

    public function create($values){
        $this->db->insert('client', $values);
    }

    public function get_client($id){
        $this->db->select('*');
        $this->db->from('client');
        $this->db->join('user', 'client.user_id = user.user_id');
        $this->db->join('company', 'client.company_id = company.company_id');
        $this->db->join('type', 'client.type_id = type.type_id');
        $this->db->where('client_id', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            foreach ($query->result() as $row) {
                $response[] = $row;
            }
            return $response;
        }else{
            $response['error'] = 'Client Not Found';
            return $response;
        }
    }

    public function update_client($values, $id){
        $this->db->where('client_id', $id);
        $this->db->update('client', $values);
    }
}