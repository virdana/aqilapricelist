<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upgrade extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('model_fadmin');
        $this->load->library('pagination');
        $this->load->helper('alert_helper');
        $this->load->helper("check_login_helper"); run_check_login();
    }
    public function index() 
    {
        //Fetching data paket_ilustrasi
        $data_db = $this->model_fadmin->get('paket_ilustrasi');
        $data['data_paket'] = $data_db->result();

        //Fetching data new_upgrade
        $data_db = $this->model_fadmin->get('new_upgrade');
        $data['data_upgrade'] = $data_db->result();
        
        //Fetching data detail_paket dengan nama paket_ilustrasi
        $sql = "SELECT A.*, B.id_paket, B.nama_paket, B.kode_paket, B.deskripsi AS deskripsi_paket FROM det_upgrade A LEFT JOIN paket_ilustrasi B ON A.paket_id = B.id_paket";
        $data_db = $this->model_fadmin->rawQuery($sql);
        $data['data_det_upgrade'] = $data_db->result();

        $this->load->view("admin/upgrade_order.php", $data);
    }

    public function update() {
        $params = $this->input->post();
        $data_upgrade = array(); $data_detail = array();

        //Looping tahap 1: Menyusun array dari form POST untuk dilemparkan ke fungsi update_upgrade
        foreach ($params as $key => $value) {
            if (strpos($key, 'check_upgr') !== false) {
                $split = explode("-", $key);
                $data_upgrade[$split[1]]['id_upgrade'] = $split[1];
                $data_upgrade[$split[1]]['is_checked'] = $params[$key];
            }
            else if(strpos($key, 'check_det-') !== false) {
                $split = explode("-", $key);
                $data_detail[$split[2]]['is_checked'] = $params[$key];
            }
            else if (strpos($key, 'upgr-') !== false) {
                $split = explode("-", $key);
                $data_upgrade[$split[2]]['id_upgrade'] = $split[2];
                $data_upgrade[$split[2]] [$split[1]] = $params[$key];
            }
            else if (strpos($key, 'det-') !== false) {
                $split = explode("-", $key);
                $data_detail[$split[3]] ['id_detail'] = $split[3];
                $data_detail[$split[3]] [$split[1]] = $params[$key];
            }
        }
        //Looping tahap 2: Checking if array $data_upgrade has 'is_checked' key (Jika tidak ada, maka tambahkan key 'is_checked' dengan value 0)
        foreach ($data_upgrade as $key => $value) {
            if (!array_key_exists("is_checked", $value)) {
                $data_upgrade[$key]['is_checked'] = 0;
            }
        }
        //Looping tahap 3: Checking if array $data_detail has 'is_checked' key (Jika tidak ada, maka tambahkan key 'is_checked' dengan value 0)
        foreach ($data_detail as $key => $value) {
            if (!array_key_exists("is_checked", $value)) {
                $data_detail[$key]['is_checked'] = 0;
            }
        }

        //Lemparkan array $data_upgrade dan $data_detail ke fungsi upgdate_upgrade
        // $result = $this->update_upgrade('new_upgrade', $data_upgrade, 'id_upgrade');
        // if($result) {
        //     $result = $this->update_upgrade('det_upgrade', $data_detail, 'id_detail');
        // }
        
        /*TESTER*/
        // echo "<pre>";
        // print_r($data_upgrade);
        // echo "</pre>";
        // echo "<pre>";
        // print_r($data_detail);
        // echo "</pre>";
        // die();

        foreach ($data_upgrade as $upgrade) {
            $result = $this->update_upgrade('new_upgrade', $upgrade, 'id_upgrade');
        }
        foreach ($data_detail as $detail) {
            $result = $this->update_upgrade('det_upgrade', $detail, 'id_detail');
        }

        if($result) { 
            alert_success('Sukses!', 'Data berhasil diubah'); 
        } else { 
            alert_error('Error!', "Data gagal diubah"); 
        }
        redirect("f-admin/upgrade");

    }

    public function add_upgrade() {
        $result = FALSE;
        $params = $this->input->post();
        if (isset($params['multi_value'])) {
            switch ($params['multi_value']) {
                case 0: //0 -> Jika itemnya single value
                    $result = $this->model_fadmin->insert($params, 'new_upgrade');
                    break;

                case 1: //1 -> Jika itemnya multi value
                    $data_upgrade = array(); $data_detail = array();
                    $needle = "-";
                    // Preparing value (in array) to insert into table
                    foreach($params as $key=>$value) {
                        if(strstr($key, $needle)) {
                            $split = explode("-", $key);
                            $data_detail[$split[1]][$split[0]] = $value;
                            $data_detail[$split[1]]['paket_id'] = $split[1];
                        }
                        else {
                            $data_upgrade[$key] = $value;
                        }
                    }
                    // Inserting value into new_upgrade. If success, continue inserting into det_upgrade
                    $data_upgrade['is_checked'] = 1;
                    $insert_id = $this->model_fadmin->insert_id($data_upgrade, 'new_upgrade');
                    if($insert_id) {
                        foreach ($data_detail as $detail) {
                            // unset($detail['is_checked']); UNSET INI JIKA TIDAK DIBUTUHKAN
                            $detail['upgrade_id'] = $insert_id;
                            $result = $this->model_fadmin->insert($detail, 'det_upgrade');
                        }
                    }
                    //TESTER:
                    // echo "<pre>";
                    // print_r($data_upgrade);
                    // echo "</pre>";
                    // echo "<pre>";
                    // print_r($data_detail);
                    // echo "</pre>";
                    break;

                default:
                    # code...
                    break;
            }
                
            if($result) { 
                alert_success('Sukses!', 'Data berhasil ditambahkan'); 
            } else { 
                alert_error('Error!', "Data gagal ditambahkan"); 
            }
            redirect("f-admin/upgrade");
        }
    }

    public function delete_upgrade($id=NULL) {
        $result = FALSE;
        if(!empty($id)) {
            // Deleting new_upgrade row by id
            $condition = array('id_upgrade' => $id);
            $result = $this->model_fadmin->delete($condition, 'new_upgrade');

            // If success, then continue deleting det_upgrade row by id_upgrade
            if($result) {
                $condition = array('upgrade_id' => $id);
                $result = $this->model_fadmin->delete($condition, 'det_upgrade');
            }
        }

        if($result) { 
            alert_success('Sukses!', 'Data berhasil dihapus'); 
        } else { 
            alert_error('Error!', "Data gagal dihapus"); 
        }
        redirect("f-admin/upgrade");
    }

    private function insert_upgrade($params) {
        $result = FALSE;
        if(!empty($params)) {
            $result = $this->model_fadmin->insert($params, 'new_upgrade');
        }
        return $result;
    }

    private function update_upgrade($table, $data, $field_title) {
        $result = FALSE;
        // if(!empty($table) && !empty($data) && !empty($field_title)) {
        //     $result = $this->model_fadmin->update_batch($table, $data, $field_title);
        // }
        if(!empty($table) && !empty($data) && !empty($field_title)) {
            $condition = array($field_title => $data[$field_title]);
            unset($data[$field_title]);
            $result = $this->model_fadmin->update($condition, $data, $table);
        }
        return $result;
    }

}