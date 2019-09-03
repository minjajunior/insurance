<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
        if(isset($this->session->user_id)){
            redirect('home');
        } else {
            $this->form_validation->set_rules('email', 'Email Address', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('login/login_view');
            } else {
                if(!is_null($this->login_model->user_login($this->input->post('email')))) {
                    $value = $this->login_model->user_login($this->input->post('email'));
                    if(!is_null($this->input->post('password'))) {
                        if($value['password'] == md5($this->input->post('password'))){
                            $this->session->set_userdata($value);
                            $data = array('status' => true );
                            echo json_encode($data);
                        }else{
                            $data = array('status' => 'password');
                            echo json_encode($data);
                        }
                    }
                } else {
                    $data = array('status' => 'email');
                    echo json_encode($data);
                }
            }
        }
	}

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}