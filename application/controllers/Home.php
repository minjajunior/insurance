<?php
/**
 * Created by PhpStorm.
 * User: Minja Junior
 * Date: 1/2/2018
 * Time: 3:15 PM
 */

class Home extends CI_Controller {

    public function index(){
        if(isset($this->session->user_id)) {
            $data['month_count'] = $this->home_model->month_count();
            $data['expired_count'] = $this->home_model->expired_count();
            $data['active_count'] = $this->home_model->active_count();

            $this->load->view('home/home_view', $data);
        } else {
            redirect(base_url());
        }
    }

    public function month(){
        if(isset($this->session->user_id)) {
            $data['company'] = $this->home_model->get_company();
            $data['type'] = $this->home_model->get_type();
            $data['client'] = $this->home_model->get_month();

            $this->load->view('home/month_view', $data);
        } else {
            redirect(base_url());
        }
    }

    public function expired(){
        if(isset($this->session->user_id)) {
            $data['company'] = $this->home_model->get_company();
            $data['type'] = $this->home_model->get_type();
            $data['client'] = $this->home_model->get_expired();

            $this->load->view('home/expired_view', $data);
        } else {
            redirect(base_url());
        }
    }

    public function active(){
        if(isset($this->session->user_id)) {
            $data['company'] = $this->home_model->get_company();
            $data['type'] = $this->home_model->get_type();
            $data['client'] = $this->home_model->get_active();

            $this->load->view('home/active_view', $data);
        } else {
            redirect(base_url());
        }
    }

    public function new_client(){

        if(isset($this->session->user_id)) {
            $data['company'] = $this->home_model->get_company();
            $data['type'] = $this->home_model->get_type();

            $this->form_validation->set_rules('cname', 'Client Name', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('home/new_view', $data);

            } else {

                $values = array(
                    'client_name' => $this->input->post('cname'),
                    'company_id' => $this->input->post('company'),
                    'type_id' => $this->input->post('type'),
                    'user_id' => $this->session->user_id,
                    'date_insured' => $this->input->post('date_insured'),
                    'date_expiry' => $this->input->post('date_expiry'),
                    'value' => $this->input->post('value'),
                    'amount' => $this->input->post('amount'),
                    'contact_no' => $this->input->post('phone_no'),
                    'email' => $this->input->post('email'),
                    'covernote_no' => $this->input->post('covernote_no'),
                    'sticker_no' => $this->input->post('sticker_no'),
                    'receipt_no' => $this->input->post('receipt_no'),
                    'registration_no' => $this->input->post('registration_no'),
                    'vehicle_type' => $this->input->post('vehicle_type'),
                    'vehicle_color' => $this->input->post('vehicle_color'),
                    'chassis_no' => $this->input->post('chassis_no'),
                    'engine_no' => $this->input->post('engine_no'),
                    'manufacture_year' => $this->input->post('manufacture_year')
                );

                $this->home_model->create($values);
                $data = array('success' => $this->input->post('cname')." submitted successfully");
                echo json_encode($data);
            }
        } else {
            redirect(base_url());
        }
    }

    public function detail($id){
        if(isset($this->session->user_id)) {
            $data['detail'] = $this->home_model->get_client($id);

            $this->load->view('home/details_view', $data);
        } else {
            redirect(base_url());
        }
    }

    public function renew($id){
        if(isset($this->session->user_id)) {
            $data['company'] = $this->home_model->get_company();
            $data['type'] = $this->home_model->get_type();
            $data['detail'] = $this->home_model->get_client($id);

            $this->form_validation->set_rules('cname', 'Client Name', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('home/renew_view', $data);

            } else {

                $values = array(
                    'client_name' => $this->input->post('cname'),
                    'company_id' => $this->input->post('company'),
                    'type_id' => $this->input->post('type'),
                    'user_id' => $this->session->user_id,
                    'date_insured' => $this->input->post('date_insured'),
                    'date_expiry' => $this->input->post('date_expiry'),
                    'value' => $this->input->post('value'),
                    'amount' => $this->input->post('amount'),
                    'contact_no' => $this->input->post('phone_no'),
                    'email' => $this->input->post('email'),
                    'covernote_no' => $this->input->post('covernote_no'),
                    'sticker_no' => $this->input->post('sticker_no'),
                    'receipt_no' => $this->input->post('receipt_no'),
                    'registration_no' => $this->input->post('registration_no'),
                    'vehicle_type' => $this->input->post('vehicle_type'),
                    'vehicle_color' => $this->input->post('vehicle_color'),
                    'chassis_no' => $this->input->post('chassis_no'),
                    'engine_no' => $this->input->post('engine_no'),
                    'manufacture_year' => $this->input->post('manufacture_year')
                );

                $this->home_model->update_client($values, $id);
                $data = array('success' => $this->input->post('cname') . " renewed successfully");
                echo json_encode($data);
            }
        } else {
            redirect(base_url());
        }
    }
}