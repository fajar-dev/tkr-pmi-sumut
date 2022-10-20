<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
    $data['doc'] = $this->db->get('tbl_doc')->row_array();
		$this->load->view('page/include/head', $data);
    $this->load->view('page/main');
		$this->load->view('page/include/footer');
	}

  public function berita()
	{
		$this->load->view('page/include/head');
    $this->load->view('page/berita');
		$this->load->view('page/include/footer');
	}
}
