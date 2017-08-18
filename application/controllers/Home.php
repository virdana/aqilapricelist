<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('shorten_number_helper');
        $this->load->helper('ongkir_helper');
        $this->load->model('model_fadmin');
    }
    // public function index()
    // {
    //     $this->load->view("pilih_tipe_ilustrasi");
    // }
    
    public function index(){
        // session_destroy();
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

        $data['scope_paket'] = array();
        if(isset($_SESSION['pesanan']['kode_paket'])) {
            $data['scope_paket'] = $data[$_SESSION['pesanan']['kode_paket']];    
        }

        $data_db = $this->model_fadmin->get('new_upgrade');
        $data['data_upgrade'] = $data_db->result();

        if(isset($_SESSION['pesanan']['id_paket'])) {
            foreach ($data['data_upgrade'] as $key => $value) {
                //Mengganti harga pada tabel new_upgrade dengan harga pada tabel det_upgrade untuk item dengan multi_value (beda paket beda harga)
                if($value->multi_value) {
                    $condition = array(
                        'paket_id' => $_SESSION['pesanan']['id_paket']
                        );

                    // Kondisi khusus (centang/tidaknya Medium Body) untuk item Additional Figures (id_upgrade 1)
                    if($value->id_upgrade == 1) {
                        $condition['versi'] = ($_SESSION['pesanan']['check_medium']) ? 1 : 0;
                    }

                    $data_db = $this->model_fadmin->select($condition, 'det_upgrade');
                    $det_upgrade = $data_db->row();
                    $data['data_upgrade'][$key]->harga = $det_upgrade->harga;
                }
                
            }
        }

        $data_db = $this->model_fadmin->get('media_cetak');
        $data['data_media'] = $data_db->result();

        $data_db = $this->model_fadmin->get('media_cetak_desc');
        $data['data_desc'] = $data_db->row();
        
        $data_db = $this->model_fadmin->get('terms_conditions');
        $data['data_terms'] = $data_db->row();

        $data_db = $this->model_fadmin->get('warna');
        $data_warna = $data_db->result();
        foreach ($data_warna as $warna) {
            if ($warna->kategori == 0) {
                $data['warna_primer'][] = $warna;
            } else {
                $data['warna_sekunder'][] = $warna;
            }
        }

        /* TEST ALERT MODAL
        $condition = array( 'keperluan' => 'konfirmasi order');
        $data_email = $this->model_fadmin->select($condition, 'email')->row();
        alert_modal('', $data_email->isi);*/

        $this->load->view("pilih_tipe_ilustrasi_themed", $data);
    }

    public function set_pesanan() {
        $params = $this->input->post();
        if($params['set_btn']) {
            $split = explode("-", $params['set_btn']);
            $kode_paket = $split[0]; $id_paket = $split[1];
            $session = array(
                    'pesanan' => array(
                            'id_paket'      => $id_paket, 
                            'kode_paket'    => $kode_paket, 
                            'delivery'      => $params['delivery_'.$kode_paket], 
                            'check_medium'  => isset($params['check_medium_'.$kode_paket]) ? 1 : 0, 
                        )
                    );
        }
        $this->session->set_userdata($session);
        // 'pesanan' will be erased after 1200 seconds
        $this->session->mark_as_temp('pesanan', 1200);
        session_write_close();
        
        redirect("home#startOrder");
    }
    public function set_upgrade_media() {
        $params = $this->input->post();
        if (!empty($params)) {
            //preparing empty array
            $session['pesanan_upgrade'] = [];
            $session['pesanan_media'] = [];
            $session['pesanan_extra'] = [];

            foreach ($params as $key => $param) {
                $split = explode("-", $key);
                if($split[0] == 'upgrade') {
                    $session['pesanan_upgrade'][$split[2]]['pesanan_id'] = 0; // temporary value
                    $session['pesanan_upgrade'][$split[2]]['upgrade_id'] = $split[2];
                    $session['pesanan_upgrade'][$split[2]][$split[1]] = $param;
                }
                else if($split[0] == 'media') {
                    $session['pesanan_media'][$split[2]]['pesanan_id'] = 0; // temporary value
                    $session['pesanan_media'][$split[2]]['media_id'] = $split[2];
                    $session['pesanan_media'][$split[2]][$split[1]] = $param;
                } 
                else { 
                    $session['pesanan_extra'][$key]['pesanan_id'] = 0; // temporary value;
                    $session['pesanan_extra'][$key] = $param;
                }
            }

            $session['upgrade_media'] = $params;
            $this->session->set_userdata($session);
            session_write_close();
        }
        echo json_encode($params);
    }   
    public function set_pemesan() {
        // echo "<pre>-----------------------------";
        // print_r($_SESSION);
        // print_r($this->input->post());
        // echo "</pre>";
        // die();
        $params = $this->input->post();
        $email_pemesan = $params['email'];
        $pemesan = array(
                'nama_pemesan'  => $params['nama_pemesan'],
                'email'         => $params['email'],
                'no_hp'         => $params['no_hp'],
                'no_line'       => $params['no_line']
            );
        //Insert data pemesan and get the id_pemesan
        $id_pemesan = $this->model_fadmin->insert_id($pemesan, 'pemesan');

        if(isset($params['nama_penerima'])) {
            $penerima = array(
                    'nama_penerima' => $params['nama_penerima'],
                    'no_hp'         => $params['no_hp_penerima'],
                    'alamat'        => $params['alamat_penerima'],
                    'id_provinsi'   => $params['provinsi'],
                    'nama_provinsi' => $params['nama_provinsi'],
                    'id_kota'       => $params['kota'],
                    'nama_kota'     => $params['nama_kota']
                );
            //Insert data penerima and get the id_penerima
            $id_penerima = $this->model_fadmin->insert_id($penerima, 'penerima');
        } else { $penerima = NULL; }

        $pesanan = array(
                'pemesan_id' => $id_pemesan, 
                'penerima_id' => isset($id_penerima) ? $id_penerima : 0, 
                'paket_id' => $_SESSION['pesanan']['id_paket'], 
                'total_harga' => $_SESSION['pesanan_extra']['subtotal'], 
                'total_hari' => $_SESSION['pesanan_extra']['total_hari'], 
                'grandtotal' => $_SESSION['pesanan_extra']['total_harga'], 
            );
        //Insert data pesanan and get the id_pesanan
        $id_pesanan = $this->model_fadmin->insert_id($pesanan, 'pesanan'); //buggy (not fast enough)
        // print_r($id_pesanan);

        // $last_row = $this->model_fadmin->rawQuery("SELECT id_pesanan FROM pesanan ORDER BY id_pesanan DESC")->row();
        // $id_pesanan = $last_row->id_pesanan;
        // print_r($last_row->id_pesanan);


        $detail_pesanan = array(
                'pesanan_id'        => $id_pesanan,
                'id_paket'          => $_SESSION['pesanan_extra']['id_paket'],
                'nama_paket'        => $_SESSION['pesanan_extra']['nama_paket'],
                'medium_body'        => isset($_SESSION['pesanan']['check_medium']) ? 1 : 0,
                'warna_dominan'     => $params['warna_dominan'],
                'tambahan_tulisan'  => $params['tambahan_tulisan'],
                'background_stock'  => isset($params['background_stock']) ? $params['background_stock'] : "",
                'background_custom' => isset($params['background_custom']) ? $params['background_custom'] : "",
                'pose'              => isset($params['pose']) ? $params['pose'] : 0,
                'text_pose'         => isset($params['text_pose']) ? $params['text_pose'] : "",
                'improve'           => isset($params['improve']) ? $params['improve'] : 0,
                'text_improve'      => isset($params['text_improve']) ? $params['text_improve'] : "",
                'keterangan'        => $params['keterangan'],
                'foto'              => $this->proses_foto($id_pemesan),
            );
        //Insert data detail pesanan and get the id_detail_pesanan
        $id_detail = $this->model_fadmin->insert($detail_pesanan, 'pesanan_detail');

        if(!empty($_SESSION['pesanan_upgrade'])){
            $pesanan_upgrade = $_SESSION['pesanan_upgrade'];
            foreach ($pesanan_upgrade as $key => $value) {
                $_SESSION['pesanan_upgrade'][$key]['pesanan_id'] = $id_pesanan;
                
                //Insert data upgrade pesanan
                $insert_upgrade = $this->model_fadmin->insert($_SESSION['pesanan_upgrade'][$key], 'pesanan_upgrade');        
            }
        }

        if(!empty($_SESSION['pesanan_media'])){
            foreach ($_SESSION['pesanan_media'] as $key => $value) {
                $_SESSION['pesanan_media'][$key]['pesanan_id'] = $id_pesanan;
            }
            //Insert batch data media cetak pesanan
            $insert_media = $this->model_fadmin->insert_batch($_SESSION['pesanan_media'], 'pesanan_media_cetak');
        }

        /*TESTER*/
        
        /*echo "<pre>PEMESAN: -----------------------------";
        print_r($pemesan);
        echo "</pre>";
        echo "<pre>PENERIMA: -----------------------------";
        print_r($penerima);
        echo "</pre>";
        echo "<pre>EXTRA DESKRIPSI: -----------------------------";
        print_r($detail_pesanan);
        echo "</pre>";
        echo "<pre>RAW PARAMS: -----------------------------";
        print_r($params);
        echo "</pre>";
        echo "<br>";
        $filescount = count($_FILES['file_foto']['name']);
        echo "FOTO COUNT: ".$filescount;
        echo "<pre>FILE FOTO: -----------------------------";
        print_r($_FILES['file_foto']);
        echo "</pre>";*/

        //sending confirmation email
        $confirmation = $this->send_order_mail("send", $email_pemesan, $id_pesanan);

        //destroying session
        unset($_SESSION['pesanan']);
        unset($_SESSION['pesanan_extra']);
        unset($_SESSION['pesanan_upgrade']);
        unset($_SESSION['pesanan_media']);

        $condition = array( 'keperluan' => 'konfirmasi order');
        $data_email = $this->model_fadmin->select($condition, 'email')->row();

        if($confirmation) {
            // alert_success("Sukses!", "Email konfirmasi pesanan telah dikirim. Silahkan periksa kotak masuk email anda.");
            alert_modal('', $data_email->isi);
        }
        else {
            alert_error("Gagal!", "Terjadi kesalahan pada proses pengiriman email. <br>Pastikan email yang anda berikan adalah email yang valid");
        }
        redirect('home');

        // $this->delete_pesanan($confirmation);
    }      

    function test_modal(){
        $condition = array( 'keperluan' => 'konfirmasi order');
        $data_email = $this->model_fadmin->select($condition, 'email')->row();
        alert_modal('', $data_email->isi);
        echo $_SESSION['alert'];
    }

    public function delete_pesanan($confirmation=FALSE) {
        if($confirmation) {
            alert_success("Sukses!", "Email konfirmasi pesanan telah dikirim. Silahkan periksa kotak masuk email anda.");
        }
        else {
            alert_error("Gagal!", "Terjadi kesalahan pada proses pemesanan");
        }
        redirect('home');
    }
    public function batalkan_pesanan() {
        session_destroy();
        redirect("home");
    }

    public function test_alert() {
        alert_success("Sukses!", "Email konfirmasi pesanan telah dikirim. Silahkan periksa kotak masuk email anda.");
    }

    public function get_upgrade() {
        $result = array();
        $params = $this->input->post();
        if (isset($params['id'])) {
            $condition = array( 'id_upgrade' => $params['id'] );
            $data_db = $this->model_fadmin->select($condition, 'new_upgrade');
            $result = $data_db->row();

            if(!empty($result->multi_value)) {
                $condition2 = array( 'upgrade_id' => $params['id'], 'paket_id' => $params['paket'] );
                $data_db = $this->model_fadmin->select($condition2, 'det_upgrade');
                $det_upgrade = $data_db->row();
                $result->hari = isset($det_upgrade->hari) ? $det_upgrade->hari : 0;
                $result->harga = isset($det_upgrade->harga) ? $det_upgrade->harga : 0;
            }
        }  
        // echo "<pre>"; print_r($result); echo "</pre>";
        // die();
        echo json_encode($result);
    }
    public function get_media() {
        $result = array();
        $params = $this->input->post();
        if (isset($params['id'])) {
            $condition = array( 'id_media' => $params['id'] );
            $data_db = $this->model_fadmin->select($condition, 'media_cetak');
            $result = $data_db->row();
        }
        echo json_encode($result);
    }

    public function get_city_by_province($provinsi) {
        $result = FALSE;
        if (isset($provinsi)) {
            $result = get_city($provinsi);
        }
        echo $result;
    }
    public function get_cost() {
        $params = $this->input->post();
        $kurir = 'jne';
        $origin = 256; //kode Malang Kota
        $kota = isset($params['kota']) ? $params['kota'] : 0;
        $weight = isset($params['total_media_weight']) ? $params['total_media_weight'] : 0;

        $result = get_ongkir($kurir, $origin, $kota, $weight);
        $harga_reg = 0; $harga_yes = 0; $etd_reg = 0; $etd_yes = 0; 
        if(!empty($result['rajaongkir']['results'])) {
            foreach ($result['rajaongkir']['results'][0]['costs'] as $paket) {
                //Paket Reguler
                if ($paket['service'] == 'CTC' || $paket['service'] == 'REG') {
                    $etd_reg = $paket['cost'][0]['etd'];
                    $harga_reg = $paket['cost'][0]['value'];
                    // echo "<pre>";
                    // print_r($paket);
                    // echo "</pre>";
                }
                //Paket YES
                else if ($paket['service'] == 'CTCYES' || $paket['service'] == 'YES') {
                    $etd_yes = $paket['cost'][0]['etd'];
                    $harga_yes = $paket['cost'][0]['value'];
                    // echo "<pre>";
                    // print_r($paket);
                    // echo "</pre>";
                }
            }
        }

        $pilihan_paket = isset($params['pilihan_paket']) ? $params['pilihan_paket'] : NULL;
        switch ($pilihan_paket) {
            case 'reg':
                echo json_encode(array('harga_reg' => $harga_reg, 'etd_reg' => $etd_reg, 'harga_yes' => $harga_yes, 'etd_yes' => $etd_yes));
                break;
            case 'yes':
                echo json_encode(array('harga_reg' => $harga_reg, 'etd_reg' => $etd_reg, 'harga_yes' => $harga_yes, 'etd_yes' => $etd_yes));
                // echo json_encode(array('harga' => $harga_yes, 'etd' => $etd_yes, 'harga_yes' => $harga_yes));
                break;
            default:
                echo '0';
                break;
        }

        // echo "<hr><pre>";
        // print_r($result);
        // echo "</pre>";
    }

    private function proses_foto($id) {
        $date = date("dmY"); $time = date("His");
        $image_names = array();
        $input_name = 'foto';
        $file_count = count($_FILES['file_foto']['name']);

        echo "COUNT: ".$file_count;
        for ($no = 0; $no < $file_count; $no++) {
            $_FILES[$input_name]['name'] = $_FILES['file_foto']['name'][$no];
            $_FILES[$input_name]['type'] = $_FILES['file_foto']['type'][$no];
            $_FILES[$input_name]['tmp_name'] = $_FILES['file_foto']['tmp_name'][$no];
            $_FILES[$input_name]['error'] = $_FILES['file_foto']['error'][$no];
            $_FILES[$input_name]['size'] = $_FILES['file_foto']['size'][$no];
            
            $tipe = $this->cek_tipe($_FILES[$input_name]['type']);
            $img_path = "assets/uploads/photos/";
            $img_name = $id . "_image".$no . "_D".$date . "T".$time .$tipe;

            $config['overwrite'] = FALSE;
            $config['upload_path'] = $img_path;
            $config['allowed_types'] = "png|jpg|jpeg";
            $config['file_name'] = $img_name;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload($input_name)) 
            {
                $error = array('error' => $this->upload->display_errors());
                $this->upload->display_errors();
            }
            else {
                $file_data = $this->upload->data();
                $upload_data[$no]['file_name'] = $file_data['file_name'];
                $upload_data[$no]['created'] = date("Y-m-d H:i:s");
                $upload_data[$no]['modified'] = date("Y-m-d H:i:s");
                $image_names[] = $file_data['file_name'];
            }
        }

        // $image_names = join(",", $image_names);
        $image_names = json_encode($image_names);
        // echo ", IMAGE NAMES: ".$image_names;
        // die();
        return $image_names;
    }

    private function cek_tipe($tipe)
    {
        if ($tipe == 'image/jpeg') 
            { return ".jpg"; }
        else if($tipe == 'image/png') 
            { return ".png"; }
        else 
            { return false; }
    }

    public function email_test($opt="view") {
        if($_SERVER['PHP_AUTH_USER'] == 'anadriv' && $_SERVER['PHP_AUTH_PW'] == 'bluenight') {
            $data_db = $this->model_fadmin->get('pesanan', 'id_pesanan', 'DESC')->row();
            if(!empty($data_db)) {
                $result = $this->send_order_mail($opt, 'as5lang.s@gmail.com', $data_db->id_pesanan);
            }
            else {
                echo "Tidak ada pesanan";
            }
        }
        else {
            header("WWW-Authenticate: Basic realm=\"Please enter your username and password to proceed further\"");
            header("HTTP/1.0 401 Unauthorized");
        }
    }
    private function send_order_mail($opt='send', $email='', $id_pesanan ='') {
        $result = FALSE;
        if(!empty($email) && !empty($id_pesanan)) {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
                //get data order by id
                $data = $this->get_pesanan_by_id($id_pesanan);

                //preparing the template
                $condition = array( 'keperluan' => 'konfirmasi order');
                $data['data_email'] = $this->model_fadmin->select($condition, 'email')->row();

                $message = $this->load->view('template/template', $data, true);
                // $message = $this->load->view('template/email_message', $data, true);


                $this->load->library('email');
                $config['protocol'] = 'smtp';
                $config['smtp_host'] = 'mail.smtp2go.com';
                $config['smtp_port'] = '2525'; // 8025, 587 and 25 can also be used. Use Port 465 for SSL.
                $config['smtp_crypto'] = 'tls';
                $config['smtp_user'] = 'virdana11@gmail.com';
                $config['smtp_pass'] = 'x96vlOONOYlB';
                // $config['smtp_user'] = 'fentroart@gmail.com';
                // $config['smtp_pass'] = '6jvxble4Rp0e';
                // $config['smtp_pass'] = '12fentro34';
                $config['charset'] = 'utf-8';
                $config['mailtype'] = 'html';
                $config['newline'] = "rn";
                $this->email->initialize($config);

                $this->email->from('noreply@fentroart.com', 'Fentroart');
                $this->email->to($email);
                // $this->email->cc('another@another-example.com');
                // $this->email->bcc('them@their-example.com');

                $this->email->subject('Konfirmasi Order');
                $this->email->message($message);

                if($opt == "send") {
                    try {
                        $result = $this->email->send();
                        // echo 'Message has been sent.';
                    }
                    catch(Exception $e) {
                        $result = FALSE;
                        // echo $e->getMessage();
                    }
                    return $result;
                }
                else {
                    echo $message;
                }
            }
        }

        // return $result;
    }

    private function get_pesanan_by_id($id="") {
        $result = FALSE;
        if(!empty($id)) {
            //join pesanan, detail pesanan, pemesan, penerima, upgrade, media, shipping
            $sql = "SELECT A.*, B.*, C.nama_paket FROM pesanan A "
                    ." LEFT JOIN pesanan_detail B ON A.id_pesanan = B.pesanan_id"
                    ." LEFT JOIN paket_ilustrasi C ON A.paket_id = C.id_paket"
                    ." WHERE A.id_pesanan = '".$id."'"
                    ." ORDER BY A.date_add DESC";
            $data['list'] = $this->model_fadmin->rawQuery($sql)->row();
            // $data['list'] = json_encode($this->model_fadmin->get('pesanan', 'date_add', 'DESC')->result());

            $condition = array('id_pemesan' => $data['list']->pemesan_id);
            $data_db = $this->model_fadmin->select($condition, 'pemesan');
            $data['data_pemesan'] = $data_db->row();
            
            $condition = array('id_penerima' => $data['list']->penerima_id);
            $data_db = $this->model_fadmin->select($condition, 'penerima');
            $data['data_penerima'] = $data_db->row();


            $pesanan_id = $data['list']->id_pesanan;
            //join media
            $sql = "SELECT A.*, B.nama_media, (SELECT warna FROM warna C WHERE A.warna_primer = C.id_warna) AS nama_warna_primer, (SELECT warna FROM warna C WHERE A.warna_sekunder = C.id_warna) AS nama_warna_sekunder FROM pesanan_media_cetak A LEFT JOIN media_cetak B ON A.media_id = B.id_media WHERE A.pesanan_id = '".$pesanan_id."'";
            $data_db = $this->model_fadmin->rawQuery($sql);
            $data['data_pesanan_media'] = $data_db->result();

            //join upgrade
            $sql = "SELECT A.*, B.id_upgrade, B.nama_upgrade FROM pesanan_upgrade A LEFT JOIN new_upgrade B ON A.upgrade_id = B.id_upgrade WHERE A.pesanan_id = '".$pesanan_id."'";
            $data_db = $this->model_fadmin->rawQuery($sql);
            $data['data_pesanan_upgrade'] = $data_db->result();

            $result = $data;
        }
        return $result;
    }

}
