<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Public_Controller {
    public function index(){
        $this->template->load_js(['login.js']);
        $this->template->load('layout/application', 'public/login', ['page_title' => 'Login']);
    }

    public function doLogin(){
        $userData=$this->input->post('userData');
        if($userData){
            $this->session->set_userdata('userData', $userData);
            echo true;
        }else
            echo false;
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url(),'refresh');
    }
}
