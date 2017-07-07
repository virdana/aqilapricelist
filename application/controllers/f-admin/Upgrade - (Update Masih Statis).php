<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upgrade extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('model_fadmin');
        $this->load->library('pagination');
        $this->load->helper('alert_helper');
    }
    public function index() 
    {
        $data_db = $this->model_fadmin->get('paket_ilustrasi');
        $data['data_paket'] = $data_db->result();
        $data_db = $this->model_fadmin->get('new_upgrade');
        $data['data_upgrade'] = $data_db->result();
        $sql = "SELECT A.*, B.id_paket, B.nama_paket, B.kode_paket, B.deskripsi AS deskripsi_paket FROM det_upgrade A LEFT JOIN paket_ilustrasi B ON A.paket_id = B.id_paket";
        $data_db = $this->model_fadmin->rawQuery($sql);
        $data['data_det_upgrade'] = $data_db->result();

        $this->load->view("admin/upgrade_order.php", $data);
    }

    public function update() {
        $params = $this->input->post();
        $data_db = $this->model_fadmin->get('paket_ilustrasi');
        $data_paket = $data_db->result();

        if (isset($params['check_additional']) && $params['check_additional']) {
            $upgrade_additional = array(
                    'is_checked'    => $params['check_additional'],
                    'deskripsi'     => $params['additional_deskripsi']
                );
            $detail_additional = array(
                'basic_a' => array(
                    'hari' => $params['additional_hari_a_basic'], 
                    'harga' => $params['additional_harga_a_basic'], 
                    'is_checked' => isset($params['check_additional_a_basic']) ? 1 : 0, 
                    ),
                'basic_b' => array(
                    'hari' => $params['additional_hari_b_basic'], 
                    'harga' => $params['additional_harga_b_basic'], 
                    'is_checked' => isset($params['check_additional_b_basic']) ? 1 : 0, 
                    ),
                'standard_a' => array(
                    'hari' => $params['additional_hari_a_standard'], 
                    'harga' => $params['additional_harga_a_standard'], 
                    'is_checked' => isset($params['check_additional_a_standard']) ? 1 : 0, 
                    ),
                'standard_b' => array(
                    'hari' => $params['additional_hari_b_standard'], 
                    'harga' => $params['additional_harga_b_standard'], 
                    'is_checked' => isset($params['check_additional_b_standard']) ? 1 : 0, 
                    ),
                'premium_a' => array(
                    'hari' => $params['additional_hari_a_premium'], 
                    'harga' => $params['additional_harga_a_premium'], 
                    'is_checked' => isset($params['check_additional_a_premium']) ? 1 : 0, 
                    ),
                'premium_b' => array(
                    'hari' => $params['additional_hari_b_premium'], 
                    'harga' => $params['additional_harga_b_premium'], 
                    'is_checked' => isset($params['check_additional_b_premium']) ? 1 : 0, 
                    )
                );
        } else { $params['check_additional'] = 0; }

        if (isset($params['check_background']) && $params['check_background']) {
            $upgrade_background = array(
                    'is_checked'    => $params['check_background'],
                    'deskripsi'     => $params['background_deskripsi']
                );
            $detail_background = array(
                'basic' => array(
                    'hari' => $params['background_hari_basic'], 
                    'harga' => $params['background_harga_basic'], 
                    'is_checked' => isset($params['check_background_basic']) ? 1 : 0, 
                    ),
                'standard' => array(
                    'hari' => $params['background_hari_standard'], 
                    'harga' => $params['background_harga_standard'], 
                    'is_checked' => isset($params['check_background_standard']) ? 1 : 0, 
                    ),
                'premium' => array(
                    'hari' => $params['background_hari_premium'], 
                    'harga' => $params['background_harga_premium'], 
                    'is_checked' => isset($params['check_background_premium']) ? 1 : 0, 
                    ),
                'design' => array(
                    'hari' => $params['background_hari_design'], 
                    'harga' => $params['background_harga_design'], 
                    'is_checked' => isset($params['check_background_design']) ? 1 : 0, 
                    )
                );
        } else { $params['check_background'] = 0; }

        if (isset($params['check_source']) && $params['check_source']) {
            $upgrade_source = array(
                    'is_checked'    => $params['check_source'],
                    'deskripsi'     => $params['source_deskripsi']
                );
            $detail_source = array(
                'source' => array(
                    'harga' => $params['source_harga'], 
                    'is_checked' => isset($params['check_source']) ? 1 : 0, 
                    )
                );
        } else { $params['check_source'] = 0; }

        if (isset($params['check_license']) && $params['check_license']) {
            $upgrade_license = array(
                    'is_checked'    => $params['check_license'],
                    'deskripsi'     => $params['license_deskripsi']
                );
            $detail_license = array(
                'license' => array(
                    'harga' => $params['license_harga'], 
                    'is_checked' => isset($params['check_license']) ? 1 : 0, 
                    )
                );
        } else { $params['check_license'] = 0; }

        if (isset($params['check_softfile']) && $params['check_softfile']) {
            $upgrade_softfile = array(
                    'is_checked'    => $params['check_softfile'],
                    'deskripsi'     => $params['softfile_deskripsi']
                );
            $detail_softfile = array(
                'softfile' => array(
                    'harga' => $params['softfile_harga'], 
                    'is_checked' => isset($params['check_softfile']) ? 1 : 0, 
                    )
                );
        } else { $params['check_softfile'] = 0; }

        if (isset($params['check_png']) && $params['check_png']) {
            $upgrade_png = array(
                    'is_checked'    => $params['check_png'],
                    'deskripsi'     => $params['png_deskripsi']
                );
            $detail_png = array(
                'png' => array(
                    'harga' => $params['png_harga'], 
                    'is_checked' => isset($params['check_png']) ? 1 : 0, 
                    )
                );
        } else { $params['check_png'] = 0; }

        echo "<pre>";
        // print_r($upgrade_additional);
        echo "</pre>"

        ;echo "<pre>";
        // print_r($detail_additional);
        echo "</pre>";
        // redirect("f-admin/scope");
    }

    public function add_upgrade() {
        $result = FALSE;
        $params = $this->input->post();
        if (isset($params['multi_value'])) {
            switch ($params['multi_value']) {
                case 0: //0 -> jika itemnya single value
                    $result = $this->model_fadmin->insert($params, 'new_upgrade');
                    break;
                case 1: //1 -> jika itemnya multi value
                    $data_upgrade = array(); $data_detail = array();
                    $needle = "-";
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

                    $data_upgrade['is_checked'] = 1;
                    $insert_id = 0;
                    // $insert_id = $this->model_fadmin->insert_id($data_upgrade, 'new_upgrade');
                    if($insert_id) {
                        foreach ($data_detail as $detail) {
                            // unset($detail['is_checked']); UNSET INI JIKA TIDAK DIBUTUHKAN
                            $detail['upgrade_id'] = $insert_id;
                            $result = $this->model_fadmin->insert($detail, 'det_upgrade');
                        }
                    }

                    echo "<pre>";
                    print_r($data_upgrade);
                    echo "</pre>";
                    echo "<pre>";
                    print_r($data_detail);
                    echo "</pre>";
                    break;
                default:
                    # code...
                    break;
            }
        }
    }

    public function del_upgrade($id=NULL) {
        if(!empty($id)) {
            $condition = array('id_upgrade' => $id);
            $result = $this->model_fadmin->delete($condition, 'new_upgrade');

            if($result) {
                $condition = array('upgrade_id' => $id);
                $result = $this->model_fadmin->delete($condition, 'det_upgrade');
            }

        }
    }

    private function insert_upgrade($params) {
        $result = $this->model_fadmin->insert($params, 'new_upgrade');
        return $result;
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




    

    public function daftar()
    {
        $config['per_page'] = "5";
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        // $sql = "SELECT A.nama_upgrade, A.deskripsi_upgrade, A.hari, A.harga, B.nama_paket FROM upgrade A LEFT JOIN paket_ilustrasi B ON A.paket_id = B.id_paket ORDER BY B.nama_paket, A.nama_upgrade"; 
        $sql = "SELECT A.nama_upgrade, A.deskripsi_upgrade, A.hari, A.harga, B.nama_paket FROM upgrade A LEFT JOIN paket_ilustrasi B ON A.paket_id = B.id_paket ORDER BY B.nama_paket, A.nama_upgrade LIMIT ".$data['page'].", ".$config['per_page']; 
        $data_db = $this->model_fadmin->rawQuery($sql);
        $data['data_upgrade'] = $data_db->result();

        //pagination settings
        $config['base_url'] = site_url('f-admin/upgrade/');
        $config['total_rows'] = $data_db->num_rows();
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"]/$config["per_page"];
        $config["num_links"] = floor($choice);

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view("admin/daftar_upgrade.php", $data);
    }

    public function tambah(){
        $this->load->view("admin/tambah_upgrade.php");  
    }
}