<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scope extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('alert_helper');
        $this->load->model('model_fadmin');
        $this->load->helper("check_login_helper"); run_check_login();
    }
    public function index()
    {
        $sql = "SELECT A.id_paket, A.nama_paket, A.kode_paket, A.deskripsi, A.harga, B.paket_id, B.color, B.softfile, B.background, B.check_medium, B.medium, B.delivery_a, B.delivery_b, B.delivery_harga, B.price FROM paket_ilustrasi A LEFT JOIN scope_ilustrasi B ON A.id_paket = B.paket_id ORDER BY A.nama_paket";
        $data_db = $this->model_fadmin->rawQuery($sql);
        $data_scope = $data_db->result();
        foreach ($data_scope as $key => $scope) {
            $kode_paket = strtolower($scope->kode_paket);
            if($kode_paket == 'basic') {
                $data['basic'] = $scope;
            } elseif ($kode_paket == 'standard') {
                $data['standard'] = $scope;
            } elseif ($kode_paket == 'premium') {
                $data['premium'] = $scope;
            } elseif ($kode_paket == 'design') {
                $data['design'] = $scope;
            }
        }
        $this->load->view("admin/scope_and_pricing.php", $data);
    }

    public function update() {
        $params = $this->input->post();
        $data_db = $this->model_fadmin->get('paket_ilustrasi');
        $data_paket = $data_db->result();

        $params2 = array();
        foreach ($data_paket as $paket) 
        {
            $kode_paket = strtolower($paket->kode_paket);
            foreach ($params as $key => $value) 
            {
                $split = explode('_', $key);
                if (end($split) == $kode_paket) {
                    array_pop($split); //removes last index;
                    $string = implode('_', $split);
                    //set categorized data into a new array variable 
                    $params2[$paket->kode_paket][$string] = $value;
                }
            }
            $params2[$paket->kode_paket]['softfile'] = isset($params2[$paket->kode_paket]['softfile']) ? 1 : 0; 
            $params2[$paket->kode_paket]['background'] = isset($params2[$paket->kode_paket]['background']) ? 1 : 0;
            $params2[$paket->kode_paket]['check_medium'] = isset($params2[$paket->kode_paket]['check_medium']) ? 1 : 0; 
            
            if($this->check_scope_value($paket->id_paket)) {
                //start updating the scope_ilustrasi value
                $result = $this->update_scope_value($paket->id_paket, $params2[$paket->kode_paket]);
            }
            else { 
                //or start inserting the value instead
                $result = $this->insert_scope_value($paket->id_paket, $params2[$paket->kode_paket]);
            }
        }

        if($result) { 
            alert_success('Sukses!', 'Data berhasil diubah'); 
        } else { 
            alert_error('Error!', "Data gagal diubah"); 
        }

        redirect("f-admin/scope");
    }

    private function check_scope_value($id_paket) { 
        $result = FALSE; //(default) tidak ada data dengan id ini
        $condition = array('paket_id' => $id_paket);
        $data_db = $this->model_fadmin->select($condition, 'scope_ilustrasi');

        if ($data_db->num_rows()) {
            $result = TRUE; //ada data dengan id ini
        }
        return $result;
    }

    private function insert_scope_value($id_paket, $params) {
        unset($params['harga']);
        unset($params['deskripsi']);
        $params['paket_id'] = $id_paket;
        $result = $this->model_fadmin->insert($params, 'scope_ilustrasi');
        return $result;
    }

    private function update_scope_value($id_paket, $params) {
        $condition = array('id_paket' => $id_paket);
        $update_paket = array(
            'harga' => $params['harga'], 
            'deskripsi' => $params['deskripsi']
            );

        $result = $this->model_fadmin->update($condition, $update_paket, 'paket_ilustrasi');

        $condition = array('paket_id' => $id_paket);
        $update_scope = $params;

        unset($update_scope['harga']);
        unset($update_scope['deskripsi']);

        $result = $this->model_fadmin->update($condition, $update_scope, 'scope_ilustrasi');

        return $result;
    }
}