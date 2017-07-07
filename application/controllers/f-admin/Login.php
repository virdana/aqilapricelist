<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model("model_fadmin");
    }

    public function index()
    {
        $logged_in = $this->check_log_status();
    
        if($logged_in) {
            redirect('f-admin/home');
        }
        else {
            $this->load->view("admin/login.php");
        }
    }

    public function do_login()
    {
        $params = $this->input->post();
        $fid = $params['fid'];
        $pass = $params['password'];

        $condition = array('username' => $fid, 'password' => md5($pass));
        $data_db = $this->model_fadmin->select($condition, 'administrator');

        if(!empty($data_db->num_rows())) {
            $data_admin = $data_db->row();
            $session_data = array(
                    'username' => $data_admin->username, 
                    'logged_in' => TRUE
                );
            $this->session->set_userdata($session_data);
            redirect('f-admin/home');
        }
        else {
            alert_error('Login Gagal!', "Username atau Password anda salah");
            redirect('f-admin/login');
        }
    }

    private function check_log_status()
    {
        $log_status = FALSE;
        if(isset($_SESSION['username']) && isset($_SESSION['logged_in'])) {
            if($_SESSION['logged_in'] == TRUE) {
                $log_status = TRUE;
            }
        }
        return $log_status;
    }

}