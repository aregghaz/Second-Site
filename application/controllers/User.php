<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    


    public function index()
    {
        $this->load->model('User_model');
        $name['categoriya'] = $this->User_model->get_all_users();
        $this->load->view('header');
        $this->load->view('user/home', $name);
        $this->load->view('footer');
    }


function change_language() {

    $this->load->model('User_model');
    $name['categoriya'] = $this->User_model->get_all_users();
    $this->load->view('header');
    $this->load->view('user/ru_home', $name);
    $this->load->view('footer');
}

}
