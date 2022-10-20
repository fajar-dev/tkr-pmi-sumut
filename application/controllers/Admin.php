<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {



  public function document()
	{
    $data['title'] = 'Document';
    $this->db->select('*');
    $this->db->from('tbl_user');
    $this->db->join('tbl_markas', 'tbl_markas.id = tbl_user.id_markas');
    $this->db->where('id_markas', $this->session->userdata('markas'));
    $query = $this->db->get();
    $data['user'] = $query->row_array();

    $data['doc'] = $this->db->get('tbl_doc')->row_array();

		$this->load->view('backend/include/header', $data);
    $this->load->view('backend/admin/document');
		$this->load->view('backend/include/footer');
	}

  public function update_document()
	{
    $data = array(
      'juklak' => $this->input->post('juklak'),
      'juknis' => $this->input->post('juknis'),
      'jadwal' => $this->input->post('jadwal'),
      'log_user' => $this->session->userdata('user'),
    );
    $this->db->where('id', 1);
    $this->db->update('tbl_doc' ,$data);
    $this->session->set_flashdata('msg', '
    <div class="alert alert-success alert-has-icon">
    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
    <div class="alert-body">
      <div class="alert-title">Sukses</div>
        Berhasil Memperbarui document
      </div>
    </div>
    ');
    redirect(base_url('admin/document')); 
	}

  public function user()
	{
    $data['title'] = 'User';
    $this->db->select('*');
    $this->db->from('tbl_user');
    $this->db->join('tbl_markas', 'tbl_markas.id = tbl_user.id_markas');
    $this->db->where('id_markas', $this->session->userdata('markas'));
    $query = $this->db->get();
    $data['user'] = $query->row_array();

    $this->db->select('*');
    $this->db->from('tbl_user');
    $this->db->join('tbl_markas', 'tbl_markas.id = tbl_user.id_markas');
    $query = $this->db->get();
    $data['user_list'] = $query->result();

    $data['markas'] = $this->db->get('tbl_markas')->result();

		$this->load->view('backend/include/header', $data);
    $this->load->view('backend/admin/user');
		$this->load->view('backend/include/footer');
	}

  public function hapus_user($id)
	{
    $this->db->where('id_user', $id);
    $this->db->delete('tbl_user');
    $this->session->set_flashdata('msg', '
    <div class="alert alert-success alert-has-icon">
    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
    <div class="alert-body">
      <div class="alert-title">Sukses</div>
        Berhasil Menghapus User
      </div>
    </div>
    ');
    redirect(base_url('admin/user')); 
	}

   public function tambah_user()
	{
    $data = array(
      'username' => $this->input->post('username'),
      'password' => $this->input->post('password'),
      'id_markas' => $this->input->post('markas'),
      'log_user' => $this->session->userdata('user'),
    );
    $this->db->insert('tbl_user',$data);
    $this->session->set_flashdata('msg', '
              <div class="alert alert-success alert-has-icon">
                <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                <div class="alert-body">
                  <div class="alert-title">Sukses</div>
                  Berhasil menambahkan user baru
                </div>
              </div>
    ');
    redirect(base_url('admin/user'));
	}

  public function edit_user()
	{
    $data = array(
      'username' => $this->input->post('username'),
      'password' => $this->input->post('password'),
      'log_user' => $this->session->userdata('user'),
    );
    $this->db->where('id_user', $this->input->post('id'));
    $this->db->update('tbl_user',$data);
    $this->session->set_flashdata('msg', '
              <div class="alert alert-success alert-has-icon">
                <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                <div class="alert-body">
                  <div class="alert-title">Sukses</div>
                  Berhasil menambahkan user baru
                </div>
              </div>
    ');
    redirect(base_url('admin/user'));
	}

  public function tambah_berita()
	{
    $data['title'] = 'Tambah Berita';
    $this->db->select('*');
    $this->db->from('tbl_user');
    $this->db->join('tbl_markas', 'tbl_markas.id = tbl_user.id_markas');
    $this->db->where('id_markas', $this->session->userdata('markas'));
    $query = $this->db->get();
    $data['user'] = $query->row_array();

		$this->load->view('backend/include/header', $data);
    $this->load->view('backend/admin/tambah-berita');
		$this->load->view('backend/include/footer');
	}

  public function add_berita()
	{
    $arr = array(" ","(", ")","?","!");
    $slug = str_replace($arr,"-", $this->input->post('judul'));
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
          redirect(base_url('admin/tambah_berita'));
        }else{
          $data = array('foto' => $this->upload->data());
          $uploadData = $this->upload->data();
          $hasil = $uploadData['file_name'];
          $data = array(
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'slug' => $slug,
            'log_user' => $this->session->userdata('user'),
            'foto' => $hasil,
          );
			$this->db->insert('tbl_berita',$data);
      $this->session->set_flashdata('msg', '
                    <div class="alert alert-success alert-has-icon">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                        <div class="alert-title">Sukses</div>
                        Berhasil publikasi berita
                      </div>
                    </div>
          ');
			redirect(base_url('admin/berita'));
		}
  }
  
}
