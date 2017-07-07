<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Letsparty extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('model_fentro');
    }
    public function index()
    {
        $this->load->view("letsparty", $data);
    }
    
    public function load_data(){
  
    }
}