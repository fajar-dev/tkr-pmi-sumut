<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  function __construct(){
		parent::__construct();
		if($this->session->userdata('status')!="login"){
      redirect(base_url());
		}
	}

	public function index()
	{
		$this->load->view('page/include/head');
    $this->load->view('page/main');
		$this->load->view('page/include/footer');
	}

  public function dashboard()
	{
    $data['title'] = 'Dashboard';
    $this->db->select('*');
    $this->db->from('tbl_user');
    $this->db->join('tbl_markas', 'tbl_markas.id = tbl_user.id_markas');
    $this->db->where('id_markas', $this->session->userdata('markas'));
    $query = $this->db->get();
    $data['user'] = $query->row_array();
    $data['doc'] = $this->db->get('tbl_doc')->row_array();
    // print_r($data);die();

		$this->load->view('backend/include/header', $data);
    $this->load->view('backend/user/dashboard');
		$this->load->view('backend/include/footer');
	}

  public function peserta()
	{
    $data['title'] = 'Peserta';
    $this->db->select('*');
    $this->db->from('tbl_user');
    $this->db->join('tbl_markas', 'tbl_markas.id = tbl_user.id_markas');
    $this->db->where('id_markas', $this->session->userdata('markas'));
    $query = $this->db->get();
    $data['user'] = $query->row_array();

    if($this->session->userdata('markas') == 12){
      $this->db->select('*');
      $this->db->from('tbl_peserta');
      $this->db->join('tbl_markas', 'tbl_markas.id = tbl_peserta.id_markas');
      $this->db->order_by('id_markas DESC, jenjang DESC');
    }else{
      $this->db->select('*');
      $this->db->from('tbl_peserta');
      $this->db->join('tbl_markas', 'tbl_markas.id = tbl_peserta.id_markas');
      $this->db->where('id_markas', $this->session->userdata('markas'));
      $this->db->order_by('jenjang', 'DESC');
    }
    $query = $this->db->get();
    $data['peserta'] = $query->result();

 if($this->session->userdata('markas') == 12){
      $data['markas'] = $this->db->get('tbl_markas')->result();
    }else{
      $data['markas'] = $this->db->get_where('tbl_markas', array('id'=>$this->session->userdata('markas')))->result();
    }
     //print_r($data);die();
		$this->load->view('backend/include/header', $data);
    $this->load->view('backend/user/peserta');
		$this->load->view('backend/include/footer');
	}

  public function tambah_peserta()
	{
		    $config['upload_path']          = './file';
        $config['allowed_types']        = 'img|png|jpeg|jpg';
        $config['encrypt_name']        = true;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('foto')){
          $error = array('error' => $this->upload->display_errors());
          $this->session->set_flashdata('msg', '
                    <div class="alert alert-warning alert-has-icon">
                      <div class="alert-icon"><i class="fas fa-exclamation-circle"></i></div>
                      <div class="alert-body">
                        <div class="alert-title">Gagal</div>
                        Pastikan foto yang anda unggah berekstensi jpg/png. Dengan maksimal ukuran 2MB
                      </div>
                    </div>
          ');
          redirect(base_url('user/peserta'));
        }else{
          $data = array('foto' => $this->upload->data());
          $uploadData = $this->upload->data();
          $hasil = $uploadData['file_name'];
          $data = array(
            'nama' => $this->input->post('nama'),
            'jenjang' => $this->input->post('jenjang'),
            'id_markas' => $this->input->post('markas'),
            'log_user' => $this->session->userdata('user'),
            'foto' => $hasil,
          );
			$this->db->insert('tbl_peserta',$data);
      $this->session->set_flashdata('msg', '
                    <div class="alert alert-success alert-has-icon">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                        <div class="alert-title">Sukses</div>
                        Berhasil menambahkan data peserta
                      </div>
                    </div>
          ');
			redirect(base_url('user/peserta'));
		}
  }
  public function hapus_peserta($id)
	{
    if($this->session->userdata('markas') == 12){
      $this->db->where('id_peserta', $id);
        $this->db->delete('tbl_peserta');
        $this->session->set_flashdata('msg', '
          <div class="alert alert-success alert-has-icon">
            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
            <div class="alert-body">
              <div class="alert-title">Sukses</div>
              Berhasil menghapus data peserta
            </div>
          </div>
        ');
        redirect(base_url('user/peserta'));
    }else{
      $this->db->where('id_peserta', $id);
      $this->db->where('id_markas', $this->session->userdata('markas'));
      $sql = $this->db->get('tbl_peserta')->num_rows();
      if($sql > 0){
        $this->db->where('id_peserta', $id);
        $this->db->where('id_markas', $this->session->userdata('markas'));
        $this->db->delete('tbl_peserta');
        $this->session->set_flashdata('msg', '
          <div class="alert alert-success alert-has-icon">
            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
            <div class="alert-body">
              <div class="alert-title">Sukses</div>
              Berhasil menghapus data peserta
            </div>
          </div>
        ');
        redirect(base_url('user/peserta'));
      }else{
        $this->session->set_flashdata('msg', '
        <div class="alert alert-warning alert-has-icon">
          <div class="alert-icon"><i class="fas fa-exclamation-circle"></i></div>
          <div class="alert-body">
            <div class="alert-title">Gagal</div>
            Kamu tidak memiliki akses
          </div>
        </div>
        ');
        redirect(base_url('user/peserta'));
      }
    }  
	}

  public function csv(){ 
   if($this->input->post('markas') == 'PROVINSI SUMATERA UTARA'){
      // // file name 
      $filename = 'PesertaTKR.csv'; 
      header("Content-Description: File Transfer"); 
      header("Content-Disposition: attachment; filename=$filename"); 
      header("Content-Type: application/csv; ");
      
      // get data 
      //$this->db->replace( 'status_mhs', '1', 'Aktif');
      $this->db->select("nama, jenjang, name");
      $this->db->from("tbl_peserta");
      $this->db->join('tbl_markas', 'tbl_markas.id = tbl_peserta.id_markas');
      $this->db->order_by('id_markas DESC, jenjang DESC');
      $query = $this->db->get();
      $usersData = $query->result_array();
      // print_r($usersData);die();
      $file = fopen('php://output', 'w');

      $header = array("Nama","Jenjang", "Markas"); 
      fputcsv($file, $header);
      foreach ($usersData as $key=>$line){ 
          fputcsv($file,$line); 
      }
      fclose($file); 
      exit; 
   }else{
       // // file name 
       $filename = 'PesertaTKR.csv'; 
       header("Content-Description: File Transfer"); 
       header("Content-Disposition: attachment; filename=$filename"); 
       header("Content-Type: application/csv; ");
       
       // get data 
       //$this->db->replace( 'status_mhs', '1', 'Aktif');
       $this->db->select("nama, jenjang, name");
       $this->db->from("tbl_peserta");
       $this->db->join('tbl_markas', 'tbl_markas.id = tbl_peserta.id_markas');
       $this->db->where('name', $this->input->post('markas'));
       $this->db->order_by('jenjang', 'DESC');
       $query = $this->db->get();
       $usersData = $query->result_array();
       $file = fopen('php://output', 'w');
 
       $header = array("Nama","Jenjang", "Markas"); 
       fputcsv($file, $header);
       foreach ($usersData as $key=>$line){ 
           fputcsv($file,$line); 
       }
       fclose($file); 
       exit; 
   }
  }
}

