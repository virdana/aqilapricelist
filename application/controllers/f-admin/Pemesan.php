<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesan extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('model_fadmin');
    }
    public function index()
    {   
        $data_db = $this->model_fadmin->get('pemesan');
        $data = array('data_pemesan' => $data_db->result());

        $this->load->view("admin/daftar_pemesan.php", $data);
    }

    public function add_pemesan() {
        $result = FALSE;
        $params = $this->input->post();
        if(isset($params['nama_pemesan'])) {
            $result = $this->model_fadmin->insert($params, 'pemesan');
        }

        if($result) { 
            alert_success('Sukses!', 'Data berhasil ditambahkan'); 
        } else { 
            alert_error('Error!', "Data gagal ditambahkan"); 
        }
        redirect("f-admin/pemesan");
    }

    public function update_pemesan() {
        $result = FALSE;
        $params = $this->input->post();
        if(isset($params['id_pemesan'])) {
            $condition = array('id_pemesan' => $params['id_pemesan']);
            unset($params['id_pemesan']);
            $result = $this->model_fadmin->update($condition, $params, 'pemesan');
        }

        if($result) { 
            alert_success('Sukses!', 'Data berhasil diubah'); 
        } else { 
            alert_error('Error!', "Data gagal diubah"); 
        }
        redirect("f-admin/pemesan");
    }       

    public function delete_pemesan($id=NULL) {
        $result = FALSE;
        if(!empty($id)) {
            // Deleting pemesan row by id
            $condition = array('id_pemesan' => $id);
            $result = $this->model_fadmin->delete($condition, 'pemesan');
        }

        if($result) { 
            alert_success('Sukses!', 'Data berhasil dihapus'); 
        } else { 
            alert_error('Error!', "Data gagal dihapus"); 
        }
        redirect("f-admin/pemesan");
    }

    public function get_pemesan() {
        $result = array();
        $id = $this->input->post('id');
        if(!empty($id)) {
            $condition = array('id_pemesan' => $id);
            $data_db = $this->model_fadmin->select($condition, 'pemesan');
            $result = $data_db->row();
            unset($result->id_pemesan);
        }
        echo json_encode($result);
    }
   
}