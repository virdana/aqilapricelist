<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('model_fadmin');
        $this->load->helper("check_login_helper"); run_check_login();
    }
    public function index()
    {   
        //join pesanan, detail pesanan, pemesan, penerima, upgrade, media, shipping
        $sql = "SELECT A.*, B.*, C.nama_paket FROM pesanan A "
                ." LEFT JOIN pesanan_detail B ON A.id_pesanan = B.pesanan_id"
                ." LEFT JOIN paket_ilustrasi C ON A.paket_id = C.id_paket"
                ." ORDER BY A.date_add DESC";
        $data['list'] = json_encode($this->model_fadmin->rawQuery($sql)->result());
        // $data['list'] = json_encode($this->model_fadmin->get('pesanan', 'date_add', 'DESC')->result());
        
        $data_db = $this->model_fadmin->get('pemesan');
        $data['data_pemesan'] = json_encode($data_db->result());

        $data_db = $this->model_fadmin->get('penerima');
        $data['data_penerima'] = json_encode($data_db->result());


        //join media
        $sql = "SELECT A.*, B.nama_media, (SELECT warna FROM warna C WHERE A.warna_primer = C.id_warna) AS nama_warna_primer, (SELECT warna FROM warna C WHERE A.warna_sekunder = C.id_warna) AS nama_warna_sekunder FROM pesanan_media_cetak A LEFT JOIN media_cetak B ON A.media_id = B.id_media";
        $data_db = $this->model_fadmin->rawQuery($sql);
        $data['data_pesanan_media'] = json_encode($data_db->result());

        //join upgrade
        $sql = "SELECT A.*, B.nama_upgrade FROM pesanan_upgrade A LEFT JOIN new_upgrade B ON A.upgrade_id = B.id_upgrade";
        $data_db = $this->model_fadmin->rawQuery($sql);
        $data['data_pesanan_upgrade'] = json_encode($data_db->result());

        //data email
        $data_db = $this->model_fadmin->get('email');
        $data['data_email'] = json_encode($data_db->result());
        
        //data terms & conditions
        $data_db = $this->model_fadmin->get('terms_conditions');
        $data['data_terms'] = json_encode($data_db->result());
        
        $this->load->view("admin/daftar_pesanan.php", $data);
    }

    public function update_pesanan() {
        $result = FALSE;
        $params = $this->input->post();
        if(isset($params['id_pesanan'])) {
            $condition = array('id_pesanan' => $params['id_pesanan']);
            $data = array( 'status' => $params['status'] );
            $result = $this->model_fadmin->update($condition, $data, 'pesanan');
        }
        if($result) { 
            alert_success('Sukses!', 'Data berhasil diubah'); 
        } else { 
            alert_error('Error!', "Data gagal diubah"); 
        }
        echo json_encode($result);
    }

    public function update_email() {
        $result = FALSE;
        $params = $this->input->post();
        if(isset($params['isi'])) {
            $condition = array('keperluan' => 'konfirmasi order');
            $data = array( 'isi' => $params['isi'] );
            $result = $this->model_fadmin->update($condition, $data, 'email');
        }
        if($result) { 
            alert_success('Sukses!', 'Pesan Email berhasil diubah'); 
        } else { 
            alert_error('Error!', "Pesan Email gagal diubah"); 
        }
        echo json_encode($result);
    }

    public function update_terms() {
        $result = FALSE;
        $params = $this->input->post();
        if(isset($params['isi'])) {
            $condition = array('id_terms' => '1');
            $data = array( 'isi' => $params['isi'] );
            $result = $this->model_fadmin->update($condition, $data, 'terms_conditions');
        }
        if($result) { 
            alert_success('Sukses!', 'Pesan Ketentuan & Kondisi berhasil diubah'); 
        } else { 
            alert_error('Error!', "Pesan Ketentuan & Kondisi gagal diubah"); 
        }
        echo json_encode($result);
    }       

    public function delete_pesanan($id=NULL) {
        $result = FALSE;
        if(!empty($id)) {
            // Deleting new_upgrade row by id
            $condition = array('id_pesanan' => $id);
            $data_pesanan = $this->model_fadmin->select($condition, 'pesanan')->row();

            $id_pemesan = 0; $id_penerima = 0;
            if(!empty($data_pesanan)) {
                $id_pemesan = $data_pesanan->pemesan_id;
                $id_penerima = $data_pesanan->penerima_id;
            }
            //delete pemesan
            if(!empty($id_pemesan)) {
                $condition2 = array('id_pemesan' => $id_pemesan);
                $result = $this->model_fadmin->delete($condition2, 'pemesan');
            }
            //delete penerima
            if(!empty($id_penerima)) {
                $condition2 = array('id_penerima' => $id_penerima);
                $result = $this->model_fadmin->delete($condition2, 'penerima');
            }

            
            $condition3 = array('pesanan_id' => $id);
            //delete media by id
            $result = $this->model_fadmin->delete($condition3, 'pesanan_media_cetak');
            //delete upgrade by id
            $result = $this->model_fadmin->delete($condition3, 'pesanan_upgrade');
            //delete detail pesanan by id
            $result = $this->model_fadmin->delete($condition3, 'pesanan_upgrade');

            $data_detail = $this->model_fadmin->select($condition3, 'pesanan_detail')->row();
            if(!empty($data_detail)) {
                $foto = $data_detail->foto;
            }
            $array_foto = json_decode($foto);
            //delete foto from server
            if(count($array_foto) > 0) {
                foreach ($array_foto as $file) {
                    // echo FCPATH.'assets/uploads/photos/'.$file;
                    unlink(FCPATH.'assets/uploads/photos/'.$file);
                }
            }
            
            //delete data pesanan by id
            $result = $this->model_fadmin->delete($condition, 'pesanan');
        }

        if($result) { 
            alert_success('Sukses!', 'Data berhasil dihapus'); 
        } else { 
            alert_error('Error!', "Data gagal dihapus"); 
        }
        redirect("f-admin/pesanan");
    }

    public function get_detail_pesanan() {
        $result = array();
        $id = $this->input->post('id');
        if(!empty($id)) {
            $sql = "";
            //select pesanan, join, join pemesan, join penerima.
            //select upgrade by id_pesanan
            //select media by id_pesanan
            $data_db = $this->model_fadmin->rawQuery($sql);
            $result = $data_db->result();
        }
        echo json_encode($result);
    }

    function get_datatable(){
        $requestData= $_REQUEST;
        $columns = array( 
            0   =>  '#', 
            1   =>  'date_add',
            2   =>  'nama_paket',
            3   =>  'nama_pemesan', 
            4   =>  'email', 
            5   =>  'total_hari',
            6   =>  'grandtotal',
            7   =>  'status',
            8   =>  'aksi'
        );
        $sql = "SELECT A.*, B.*, C.nama_pemesan, C.email, C.no_hp AS no_hp_pemesan, C.no_line AS no_line_pemesan, D.nama_penerima , E.nama_paket FROM pesanan A "
                ." LEFT JOIN pesanan_detail B ON A.id_pesanan = B.pesanan_id"
                ." LEFT JOIN pemesan C ON A.pemesan_id = C.id_pemesan"
                ." LEFT JOIN penerima D ON A.penerima_id = D.id_penerima"
                ." LEFT JOIN paket_ilustrasi E ON A.paket_id = E.id_paket"
                ." ORDER BY A.date_add DESC";
        $query = $this->model_fadmin->rawQuery($sql);
        $totalData = $query->num_rows();
        // $totalFiltered = $totalData;
        $sql = "SELECT A.*, B.*, C.nama_pemesan, C.email, C.no_hp AS no_hp_pemesan, C.no_line AS no_line_pemesan, D.nama_penerima , E.nama_paket FROM pesanan A "
            ." LEFT JOIN pesanan_detail B ON A.id_pesanan = B.pesanan_id"
            ." LEFT JOIN pemesan C ON A.pemesan_id = C.id_pemesan"
            ." LEFT JOIN penerima D ON A.penerima_id = D.id_penerima"
            ." LEFT JOIN paket_ilustrasi E ON A.paket_id = E.id_paket";
        if( !empty($requestData['search']['value']) ) {
            $sql.=" WHERE ( C.nama_pemesan LIKE '%".$requestData['search']['value']."%' "; 
            $sql.=" OR E.nama_paket LIKE '%".$requestData['search']['value']."%' "; 
            $sql.=" OR C.email LIKE '%".$requestData['search']['value']."%' ";
            $sql.=" OR A.total_harga LIKE '%".$requestData['search']['value']."%' ";
            $sql.=" OR A.total_hari LIKE '%".$requestData['search']['value']."%' ";
            $sql.=" OR A.date_add LIKE '%".$requestData['search']['value']."%' )";
        }
        $query = $this->model_fadmin->rawQuery($sql);
        $totalFiltered = $query->num_rows();

        $sql .= " ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; 
        $query = $this->model_fadmin->rawQuery($sql);
        
        $data = array(); $i=0;
        $option_status = ['Dipesan', 'Dibayar', 'Dikirim','Revisi', 'Selesai'];
        foreach ($query->result_array() as $row) {
            $options = array();
            for($j=0; $j<count($option_status); $j++) {
                $selected = ($j == $row['status']) ? "selected" : "";
                $options[] = '<option value="'. $j .'" '. $selected .'>'
                                . $option_status[$j] 
                            .'</option>';
            }
            $nestedData     =   array(); 
            $nestedData[]   =   "<span class='text-center' style='display:block;'>".($i+1)."</span>";
            $nestedData[]   =   date("d-m-Y H:i", strtotime($row["date_add"]));
            $nestedData[]   =   $row["nama_paket"];
            $nestedData[]   =   $row["nama_pemesan"];
            $nestedData[]   =   $row["email"];
            $nestedData[]   =   "<span class='text-center' style='display:block;'>".$row["total_hari"]."</span>";
            $nestedData[]   =   "<span class='pull-right money'>".$row["grandtotal"]."</span>";
            $nestedData[]   =   '<div class="input-group" title="Ubah Status">'
                  .'<select id="status_'.$row['id_pesanan'].'" class="form-control input-sm">'
                    . join($options)
                  .'</select>'     
                  .'<span class="input-group-btn">
                        <button id="btnStatus_'.$row['id_pesanan'].'" class="btn btn-sm btn-primary" type="button" onclick="updateStatus('.$row['id_pesanan'].')" tabindex="-1"><i class="fa fa-check"></i> </button>
                    </span>'
                .'</div>';
            $nestedData[]   =   '<td class="text-center"><div class="btn-group" >'
                .'<a class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Lihat Detail" onclick="showDetail('.$row["id_pesanan"].')"><i class="fa fa-eye"></i></a>'
                .'<a href="'.base_url().'f-admin/pesanan/delete_pesanan/'.$row['id_pesanan'].'" class="btn btn-danger btn-sm" title="Hapus '.$row['nama_pemesan'].'" onclick="confirmDelete(event);"><i class="fa fa-trash-o "></i></a>'
               .'</div>'
            .'</td>';
            
            $data[] = $nestedData; $i++;
        }
        $totalData = count($data);
        $json_data = array(
                    "draw"            => intval( $requestData['draw'] ),
                    "recordsTotal"    => intval( $totalData ),
                    "recordsFiltered" => intval( $totalFiltered ),
                    "data"            => $data
                    );
        echo json_encode($json_data);
    }
    
}