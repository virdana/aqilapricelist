<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warna extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('model_fadmin');
    }
    public function index()
    {  }

    
    public function add_warna() {
        $result = FALSE;
        $params = $this->input->post();
        if(isset($params['warna'])) {
            unset($params['id_warna']);
            strtoupper($params['hex']);
            $result = $this->model_fadmin->insert($params, 'warna');
        }

        if($result) { 
            alert_success('Sukses!', 'Warna berhasil ditambahkan'); 
        } else { 
            alert_error('Error!', "Warna gagal ditambahkan"); 
        }
        $redirect_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $_SERVER['SERVER_NAME'];
        header('Location: '.  $redirect_url);
    }

    public function update_warna() {
        $result = FALSE;
        $params = $this->input->post();
        if(isset($params['id_warna'])) {
            $condition = array('id_warna' => $params['id_warna']);
            unset($params['id_warna']);
            strtoupper($params['hex']);
            $result = $this->model_fadmin->update($condition, $params, 'warna');
        }

        if($result) { 
            alert_success('Sukses!', 'Warna berhasil diubah'); 
        } else { 
            alert_error('Error!', "Warna gagal diubah"); 
        }
        $redirect_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $_SERVER['SERVER_NAME'];
        header('Location: '.  $redirect_url);
    }       

    public function delete_warna($id=NULL) {
        $result = FALSE;
        if(!empty($id)) {
            // Deleting warna row by id
            $condition = array('id_warna' => $id);
            $result = $this->model_fadmin->delete($condition, 'warna');
        }

        if($result) { 
            alert_success('Sukses!', 'Warna berhasil dihapus'); 
        } else { 
            alert_error('Error!', "Warna gagal dihapus"); 
        }
        $redirect_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $_SERVER['SERVER_NAME'];
        header('Location: '.  $redirect_url);
    }

    public function get_warna_by_id() {
        $result = array();
        $id = $this->input->post('id');
        if(!empty($id)) {
            $condition = array('id_warna' => $id);
            $data_db = $this->model_fadmin->select($condition, 'warna');
            $result = $data_db->row();
            unset($result->id_warna);
        }
        echo json_encode($result);
    }

    public function get_warna_by_media() {
        $result = array('primer' => [], 'sekunder' => []);
        $id_media = $this->input->post('id_media');
        // jika id_media == 0 maka warna universal akan ditampilkan
        if($id_media != '' ) {
            $condition = array('media_id' => $id_media);
            $data_db = $this->model_fadmin->select($condition, 'warna');
            $data_warna = $data_db->result_array();

            foreach ($data_warna as $warna) {
                if($warna['kategori'] == 0) {
                    $result['primer'][] = $warna;
                } 
                else if($warna['kategori'] == 1) {
                    $result['sekunder'][] = $warna;
                }
            }
        }
        echo json_encode($result);
    }

}