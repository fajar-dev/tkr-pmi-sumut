<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_page');
	}

	function index()
	{
    if($this->session->userdata('status')=="login"){
      redirect(base_url('user/dashboard'));
		}
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		
		$where = array(
			'username'=>$user,
			'password'=>md5($pass)
		);
		$cek = $this->Model_page->cek_login('tbl_user',$where)->num_rows();
		$hasil= $this->Model_page->cek_login('tbl_user',$where)->result();

		if($cek > 0 ){
			foreach ($hasil as $data) {
				$sesi = array(
					'id_peserta'=>$data->id_user,
          'user' => $user,
					'markas'=>$data->id_markas,
					'status'=>"login",
					'login'=>1
					);
			};
			$this->session->set_userdata($sesi);
			// $log = [
			// 	'nama' => $this->session->userdata('nama'),
			// 	'user' => $user,
			// 	'level' => $this->session->userdata('level'),
			// 	'ip'=> $_SERVER['REMOTE_ADDR'],
			// 	'http'=> $_SERVER['HTTP_USER_AGENT']
			// ];
			// $this->db->insert('log', $log);
			redirect(base_url('user/dashboard'));
		}else{
			$this->session->set_flashdata('msg',
			'<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong class="alert-heading">Gagal !!</strong><br>
      Username atau Password yang anda masukan salah
      </div>'
			);
			redirect(base_url());
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		$this->session->userdata('status')==" ";
		redirect(base_url());
	} 

}
