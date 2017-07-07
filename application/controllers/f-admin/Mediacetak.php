<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mediacetak extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('model_fadmin');
        $this->load->helper("check_login_helper"); run_check_login();
    }
    public function index()
    {   
        $data['list'] = json_encode($this->model_fadmin->get('media_cetak', 'date_add', 'DESC')->result());
        
        $data_db = $this->model_fadmin->get('media_cetak');
        $data['data_media'] = $data_db->result();

        $data_db = $this->model_fadmin->get('media_cetak_desc');
        $data['data_desc'] = $data_db->row();

        $data_db = $this->model_fadmin->get('warna');
        $data_warna = $data_db->result();
        
        $data['data_primer'] = array();
        $data['data_sekunder'] = array();
        foreach ($data_warna as $warna) {
            if($warna->kategori == 0) {
                $data['data_primer'][] = $warna;
            } 
            else if($warna->kategori == 1) {
                $data['data_sekunder'][] = $warna;
            }
        }
        $this->load->view("admin/daftar_mediacetak.php", $data);
    }


    public function update_deskripsi() {
        $result = FALSE;
        $data_db = $this->model_fadmin->get('media_cetak_desc');
        $check_desc = $data_db->num_rows();
        $params = $this->input->post();

        if(!empty($check_desc)) {
            $data = array( 'deskripsi' => $params['deskripsi'] );
            $condition = array( 'nama_desc' => 'media_cetak' );
            $result = $this->model_fadmin->update($condition, $data, 'media_cetak_desc');
        } else {
            $data = array('nama_desc' => 'media_cetak' , 'deskripsi' => $params['deskripsi']);
            $result = $this->model_fadmin->insert($data, 'media_cetak_desc');      
        }
        
        if($result) { 
            alert_success('Sukses!', 'Deskripsi berhasil diubah'); 
        } else { 
            alert_error('Error!', "Deskripsi gagal diubah"); 
        }
        redirect("f-admin/mediacetak");
    }

    public function add_media() {
        $result = FALSE;
        $params = $this->input->post();
        if(isset($params['nama_media'])) {
            if(!isset($params['show_warna_primer'])) { $params['show_warna_primer'] = 0; }
            if(!isset($params['show_warna_sekunder'])) { $params['show_warna_sekunder'] = 0; }
            if(!isset($params['show_shipping'])) { $params['show_shipping'] = 0; }

            $result = $this->model_fadmin->insert($params, 'media_cetak');
        }

        if($result) { 
            alert_success('Sukses!', 'Data berhasil ditambahkan'); 
        } else { 
            alert_error('Error!', "Data gagal ditambahkan"); 
        }
        redirect("f-admin/mediacetak");
        // echo "<pre>";
        // var_dump($result);
        // print_r($params);
        // echo "</pre>";
    }

    public function update_media() {
        $result = FALSE;
        $params = $this->input->post();
        if(isset($params['id_media'])) {
            if(!isset($params['show_warna_primer'])) { $params['show_warna_primer'] = 0; }
            if(!isset($params['show_warna_sekunder'])) { $params['show_warna_sekunder'] = 0; }
            if(!isset($params['show_shipping'])) { $params['show_shipping'] = 0; }

            $condition = array('id_media' => $params['id_media']);
            unset($params['id_media']);
            $result = $this->model_fadmin->update($condition, $params, 'media_cetak');
        }

        if($result) { 
            alert_success('Sukses!', 'Data berhasil diubah'); 
        } else { 
            alert_error('Error!', "Data gagal diubah"); 
        }
        redirect("f-admin/mediacetak");
        // echo "<pre>";
        // var_dump($result);
        // print_r($params);
        // echo "</pre>";
    }       

    public function delete_media($id=NULL) {
        $result = FALSE;
        if(!empty($id)) {
            // Deleting new_upgrade row by id
            $condition = array('id_media' => $id);
            $result = $this->model_fadmin->delete($condition, 'media_cetak');
        }

        if($result) { 
            alert_success('Sukses!', 'Data berhasil dihapus'); 
        } else { 
            alert_error('Error!', "Data gagal dihapus"); 
        }
        redirect("f-admin/mediacetak");
    }

    public function get_media() {
        $result = array();
        $id = $this->input->post('id');
        if(!empty($id)) {
            $condition = array('id_media' => $id);
            $data_db = $this->model_fadmin->select($condition, 'media_cetak');
            $result = $data_db->row();
            unset($result->id_media);
        }
        echo json_encode($result);
    }

    
}